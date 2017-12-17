<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;


class MembersController extends Controller
{
    public function index(){
        return view('members.all');
    }

    public function newMember(){
        return view('members.new');
    }

    public function newMembertoDB(Request $request){
        $member = new Member;
        $member->name = $request->input('questions.0.value');
        $member->phone = $request->input('questions.1.value');
        $member->email = $request->input('questions.2.value');
        $member->telegram = $request->input('questions.3.value');
        $member->save();
    }

    public function addMember(){
        return view('members.add');
    }

    public function addMembertoDB(Request $request){
        $request->validate([
           'member-name' => 'required|max:255',
           'member-email' => 'required|max:255',
           'member-phone' => 'required'
        ]);

        $member = new Member;
        $member->name = request('member-name');
        $member->phone = request('member-phone');
        $member->email = request('member-email');
        $member->save();

        return view('members.all');

    }
}
