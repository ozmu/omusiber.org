<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class IndexController extends Controller
{
    public function index(){
        return view('index');
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
