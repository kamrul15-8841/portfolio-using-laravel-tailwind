<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'job_description',
        'company_name',
        'company_address',
        'joining_date',
        'left_date',
        'expertise',
        'image',
        'status',
        'slug'
    ];
}
