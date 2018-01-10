<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Title;
use App\Text;
use App\Project;
use App\Activity;
use Illuminate\Support\Arr;
use PhpParser\Node\Expr\Array_;

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

    public function projects(){
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    public function activities(){
        $activities = Activity::all();
        return view('activities', compact('activities'));
    }
}
