<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Contact;
use App\Title;
use App\Text;
use App\Project;
use App\Gallery;
use App\Category;
use App\Member;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Image;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function messages(){
        $messages = Contact::all();
        return view('admin.messages',compact('messages'));
    }

    public function team(){
        $team = Team::all();
        return view('admin.team', compact('team'));
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
        $img_path = '';

        if(Input::hasFile('image')){
            $img = Input::file('image');
            $img_path = str_replace(' ','',strtolower($request->input('name'))) . '.' . $img->getClientOriginalExtension();
            $img->move('assets/images/projects', $img_path);
        }

        $img_path = 'assets/images/projects/' . $img_path;

        Project::create([
            'project_title' => $request->input('name'),
            'image_path' => $img_path,
            'icon' => $request->input('icon'),
            'category' => $request->input('category'),
            'date' => $request->input('date'),
            'state' => $request->input('state'),
            'short_description' => $request->input('short_desc'),
            'description' => $request->input('long_desc'),
        ]);


    }

    public function deleteProject(Request $request){
        return Project::destroy($request->input('project_id'));
    }

    public function activities(){
        $activities = Activity::all();
        return view('admin.activities',compact('activities'));
    }

    public function activitiesPOST(Request $request){
        $img_path = '';

        if(Input::hasFile('image')){
            $img = Input::file('image');
            $img_path = str_replace(' ','',strtolower($request->input('name'))) . '.' . $img->getClientOriginalExtension();
            $img->move('assets/images/activities', $img_path);
        }

        $img_path = 'assets/images/activities/' . $img_path;

        Activity::create([
            'activity_title' => $request->input('name'),
            'image_path' => $img_path,
            'from' => $request->input('from'),
            'location' => $request->input('location'),
            'category' => $request->input('category'),
            'date' => $request->input('date'),
            'state' => $request->input('state'),
            'short_description' => $request->input('short_desc'),
            'description' => $request->input('long_desc'),
        ]);
    }

    public function deleteActivity(Request $request){
        return Activity::destroy($request->input('activity_id'));
    }

    public function gallery(){
        $gallery = Gallery::all();
        return view('admin.gallery',compact('gallery'));
    }

    public function galleryPOST(Request $request){
        $img_path = '';

        if(Input::hasFile('image')){
            $img = Input::file('image');
            $img_path = str_replace(' ','',strtolower($request->input('name'))) . '.' . $img->getClientOriginalExtension();
            Image::make($img)->resize(80, 80)->save('assets/images/gallery/thumb' .$img_path);
            $img->move('assets/images/gallery', $img_path);
        }

        $img_path = 'assets/images/gallery/' . $img_path;
        $img_thumb_path = 'assets/images/gallery/thumb';

        /*
        Gallery::create([
           'description' => $request->input('description'),
           'image_path' => $img_path,
           'thumb_path' =>
        ]);
        */
    }

    public function deletePhoto(Request $request){
        return $request;
    }

    public function members(){
        $members = Member::all();

        return view('admin.members',compact('members'));
    }

    public function categories(){
        $categories = Category::all();
        return view('admin.categories',compact('categories'));
    }
}
