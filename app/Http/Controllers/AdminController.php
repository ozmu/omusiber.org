<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;
use App\Contact;
use App\Title;
use App\Text;
use App\Project;
use App\Gallery;
use App\Member;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function messages(){
        $messages = Contact::all();
        return view('admin.messages',compact('messages'));
    }

    public function deleteMessage(Request $request){
        return Contact::destroy($request->input('id'));
    }

    public function aboutUs(){
        $titles = Title::first();
        $about = Text::first()->about_us_body;
        return view('admin.about_us',compact('titles','about'));
    }

    public function aboutUsPOST(Request $request){
        $header = Title::first();
        $header->about_us = $request->input('about_us');
        $header->save();
        $content = Text::first();
        $content->about_us_body = $request->input('about_us_body');
        $content->save();
        return true;
    }

    public function projects(){
        $projects = Project::all();
        return view('admin.projects',compact('projects'));
    }

    public function projectsPOST(Request $request){
        /*$request->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'long_desc' => 'required',
            'image' => 'required|image64:jpeg,jpg,png',
            'icon'  => 'required',
            'category' => 'required',
            'date' => 'required',
            'state' => 'required'
        ]);*/

        /*
        if($request->hasFile('image')){
            $file = $request->file('image');
            $file->move('uploads', $file->getClientOriginalName());
            return "evet var";
        }
        return "yok";
       */

        $image = $request->input('image');
        $img = Image::make($image);
        return $img;




        //$imageData = $request->input('image');
        //return $imageData;

        /*
        Project::create([
            'title' => $request->input('title'),
            'icon' => $request->input('icon'),
            'category' => $request->input('category'),
            'date' => $request->input('date'),
            'state' => $request->input('state'),
        ]);
        $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . explode('/', explode(':', substr($imageData, 0, strpos($imageData, ';')))[1])[1];
        Image::make($request->get('image'))->save(public_path('images/').$fileName);
        return response()->json(['error'=>false]);
        */

    }

    public function deleteProject(Request $request){
        return Project::destroy($request->input('project_id'));
    }

    public function activities(){
        $activities = Activity::all();
        return view('admin.activities',compact('activities'));
    }

    public function activitiesPOST(Request $request){
        return $request;
    }

    public function deleteActivity(Request $request){
        return Activity::destroy($request->input('activity_id'));
    }

    public function gallery(){
        $gallery = Gallery::all();
        return view('admin.gallery',compact('gallery'));
    }

    public function members(){
        $members = Member::all();
        return view('admin.members',compact('members'));
    }

    public function categories(){
        return view('admin.categories');
    }
}
