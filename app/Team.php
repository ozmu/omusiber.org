<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name', 'role', 'facebook', 'twitter', 'instagram', 'github', 'linkedin', 'is_active', 'image_path'
    ];
}
