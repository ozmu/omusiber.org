<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function active(){
        return $this->hasOne('App\ActiveMember');
    }
}
