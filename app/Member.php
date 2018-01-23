<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
      'name', 'phone', 'email', 'telegram', 'role'
    ];

    public function active(){
        return $this->hasOne('App\ActiveMember');
    }

    public function inEducationCommittee(){
        return $this->hasOne('App\EducationCommittee','member_id');
    }

    public function inSocialActivityCommittee(){
        return $this->hasOne('App\SocialActivityCommittee','member_id');
    }

    public function inCompetitionCommittee(){
        return $this->hasOne('App\CompetitionCommittee','member_id');
    }

    public function committees(){
        $committees = new \Illuminate\Database\Eloquent\Collection;
        if(sizeof($this->inEducationCommittee()->get())){
            $committees = $committees->merge($this->inEducationCommittee()->get());
        }
        if(sizeof($this->inSocialActivityCommittee()->get())){
            $committees = $committees->merge($this->inSocialActivityCommittee()->get());
        }
        if(sizeof($this->inCompetitionCommittee()->get())){
            $committees = $committees->merge($this->inCompetitionCommittee()->get());
        }
        return $committees;
    }
}
