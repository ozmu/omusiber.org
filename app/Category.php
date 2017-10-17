<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'category',
        'categoryName',
        'icon'
    ];
    public function tools(){
        return $this->belongsToMany('App\Tool');
    }
}
