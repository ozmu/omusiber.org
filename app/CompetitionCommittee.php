<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompetitionCommittee extends Model
{
    protected $table = "competition_committee";

    protected $fillable = [
        'member_id'
    ];

    public function member(){
        return $this->hasOne('App\Member','id','member_id');
    }
}
