<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialActivityCommittee extends Model
{
    protected $table = "social_activity_committee";

    protected $fillable = [
        'member_id'
    ];

    public function member(){
        return $this->hasOne('App\Member','id','member_id');
    }
}
