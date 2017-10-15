<?php

namespace App\Http\Controllers;

use App\Doc;
use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function index(){
        return view('documents.index');
    }

    public function displayTool($category,$tool){
        $toolName = Doc::where('tool',$tool)->get();
        $categoryName = Doc::where('category',$category)->get();
        return view('documents.tool',compact('toolName'));
    }
}
