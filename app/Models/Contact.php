<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'message',
//        'image',
//        'status',
        'slug',
    ];

    public static function createOrUpdateContact($request, $id = null)
    {
        $slug = Str::slug($request->name);
        Contact::updateOrCreate(['id' => $id], [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'message' => $request->message,
            'slug' => $slug,
        ]);
    }
}
