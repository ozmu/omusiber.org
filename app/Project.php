<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_title', 'image_path', 'icon', 'category', 'date', 'state'
    ];
}
