<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tool;
use App\User;
use App\CategoryTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocsController extends Controller
{
    public function index(){
        $datas = Category::all();
        $isEditor = false;
        $isAdmin = false;
        if(Auth::check() && User::find(Auth::id())->is_editor == 1){
            $isEditor = true;
        }
        if(Auth::check() && User::find(Auth::id())->is_admin == 1){
            $isAdmin = true;
        }
        return view('documents.index',compact('datas'))->with('isEditor',$isEditor)->with('isAdmin',$isAdmin);
    }

    public function displayTool($tool){
        $toolInfo = Tool::where('tool',$tool)->first();
        $resources = explode(',',$toolInfo->resources);
        $categories = Tool::find($toolInfo->id)->categories;
        return view('documents.tool',compact('toolInfo','categories','resources'));
    }

    public function addTool(){
        $categories = Category::all();
        return view('documents.add',compact('categories'));
    }

    public function addCategory(){
        $categories = Category::all();
        return view('documents.add-category',compact('categories'));
    }

    public function addCategorytoDB(Request $request){
        $request->validate([
           'cat-name' => 'required|max:255',
           'cat-cat' => 'required|max:255',
           'cat-icon' => 'required|max:255'
        ]);
        $category = new Category;
        $category->category = request('cat-cat');
        $category->categoryName = request('cat-name');
        $category->icon = request('cat-icon');
        $category->save();
        return "Başarılı";

    }

    public function store(Request $request){
        $request->validate([
           'category' => 'required',
           'tool-tool' => 'required|max:255',
           'tool-name' => 'required|max:255',
           'tool-content' => 'required',
           'tool-resources' => 'required',
        ]);
        $categories = request('category');
        $catIDs = array();
        foreach ($categories as $category){
            $catID = Category::where('category',$category)->first()->id;
            array_push($catIDs,$catID);
        }
        $tool = new Tool;
        $tool->tool = request('tool-tool');
        $tool->toolName = request('tool-name');
        $tool->description = request('tool-content');
        $tool->resources = request('tool-resources');
        $tool->save();    // Tool saved
        $toolID = Tool::where('tool',request('tool-tool'))->first()->id;
        foreach ($catIDs as $cat){
            $relationship = new CategoryTool;
            $relationship->category_id = $cat;
            $relationship->tool_id = $toolID;
            $relationship->save();    // Relationship saved
        }
        return redirect('/docs/tool/'.$tool->tool);

        //$request->file('photo')->move('/public/assets/images/tools/'.$tool, $fileName);

    }
}
