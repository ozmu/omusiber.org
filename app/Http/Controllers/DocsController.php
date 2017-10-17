<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class DocsController extends Controller
{
    public function index(){
        $datas = Category::all();
        $isEditor = false;
        if(Auth::check()){
            $isEditor = true;
        }
        return view('documents.index',compact('datas'))->with('isEditor',$isEditor);
    }

    public function displayTool($tool){
        $toolInfo = Tool::where('tool',$tool)->first();
        $categories = Tool::find($toolInfo->id)->categories;
        return view('documents.tool',compact('toolInfo','categories'));
    }

    public function addTool(){
        $categories = Category::all();
        return view('documents.add',compact('categories'));
    }
}
