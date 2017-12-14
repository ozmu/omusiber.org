<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActiveMember extends Model
{
    public function member(){
        return $this->belongsTo('App\Member');
    }
}
