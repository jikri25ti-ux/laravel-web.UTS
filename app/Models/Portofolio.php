<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio_2555301091';

    protected $fillable = [
        'first_name', 'last_name', 'profile_title', 'about',
        'email', 'phone', 'website', 'linkedin', 'github', 'twitter', 'photo',
        'education', 'experience', 'projects', 'skills', 'languages', 'interests'
    ];

    protected $casts = [
        'education'  => 'array',
        'experience' => 'array',
        'projects'   => 'array',
        'skills'     => 'array',
        'languages'  => 'array',
        'interests'  => 'array',
    ];
}
