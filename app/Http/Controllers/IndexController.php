<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Title;
use App\Text;
use App\Team;
use App\Project;
use App\Activity;
use App\Gallery;
use Illuminate\Support\Arr;
use PhpParser\Node\Expr\Array_;

class IndexController extends Controller
{
    public function index(){
        $titles = Title::first();
        $texts = Text::first();
        $team = Team::where('is_active', 1)->get();
        $gallery = Gallery::all();
        return view('index',compact('titles','texts', 'team', 'gallery'));
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
