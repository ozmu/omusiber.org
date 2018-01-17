<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'activity_title', 'image_path', 'from', 'location', 'category', 'date', 'state', 'short_description', 'description'
    ];
}
