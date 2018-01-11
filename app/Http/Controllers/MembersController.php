<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMember;
use App\User;
use function foo\func;
use Illuminate\Http\Request;
use App\Member;
use Illuminate\Support\Facades\Mail;



class MembersController extends Controller
{
    public function index(){
        return view('members.all');
    }

    public function test(){
        /*$data = array('name'=>'Muhammet Öztürk');
        Mail::send(['text' => 'mail'], $data, function ($message){
            $message->to('ozturkmuhammeet@gmail.com','Kedi Köpek')->subject('Laravel temel mail deneme');
            $message->from('siber@omu.edu.tr','Ondokuz Mayıs Üniversitesi Siber Güvenlik Topluluğu');
        });*/
        \Mail::to(Member::find(9)->email)->send(new WelcomeMember);
        echo "Gönderildi.";
    }
    public function newMember(){
        return view('members.new');
    }

    public function newMembertoDB(Request $request){
        Member::create([
           'name' =>  $request->input('questions.0.value'),
           'phone' => $request->input('questions.1.value'),
           'email' => $request->input('questions.2.value'),
           'telegram' => $request->input('questions.3.value'),
           'role' => 'member'
        ]);
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
