<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'description',
        'progress',
        'image',
        'status',
        'slug',
    ];
}
