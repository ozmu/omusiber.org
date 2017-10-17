<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tool;
use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function index(){
        $datas = Category::all();
        return view('documents.index',compact('datas'));
    }

    public function displayTool($tool){
        $toolInfo = Tool::where('tool',$tool)->first();
        $categories = Tool::find($toolInfo->id)->categories;
        return view('documents.tool',compact('toolInfo','categories'));
    }

    public function addTool(){
        return view('documents.add');
    }
}
