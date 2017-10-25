<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users',compact('users'));
    }

    public function edit($id){
      $user = User::find($id);
      return view('user-edit',compact('user'));
    }

    public function update(Request $request,$id){
     $admin = $request->get('admin');
     $editor = $request->get('editor');
     $user = User::find($id);
     $user->is_admin = $admin;
     $user->is_editor = $editor;
     $user->save();
     return "Başarılı!<a href='/docs'>Anasayfaya dön!</a>";
    }
}
