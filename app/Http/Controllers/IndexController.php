<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Title;
use App\Text;

class IndexController extends Controller
{
    public function index(){
        $titles = Title::first();
        $texts = Text::first();
        return view('index',compact('titles','texts'));
    }

    public function store(Request $request){
        return Contact::create([
           'name' => $request->input('name'),
           'surname' => $request->input('surname'),
           'email' => $request->input('email'),
           'subject' => $request->input('subject'),
           'message' => $request->input('message'),
        ]);
    }
}
