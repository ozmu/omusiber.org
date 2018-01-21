<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationCommittee extends Model
{
    protected $table = "education_committee";

    protected $fillable = [
        'member_id'
    ];

    public function member(){
        return $this->hasOne('App\Member','id','member_id');
    }
}
