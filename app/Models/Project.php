<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'stack',
        'short_description',
        'long_description',
        'github_link',
        'web_link',
        'image',
        'status',
        'slug'
    ];
}
