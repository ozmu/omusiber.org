<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{

    //public $primaryKey = 'tool';

    protected $fillable = [
        'tool',
        'toolName',
        'description',
    ];

    public function categories(){
        return $this->belongsToMany('App\Category');
    }

    public function created_by(){
        return $this->belongsTo('App\User');
    }
}
