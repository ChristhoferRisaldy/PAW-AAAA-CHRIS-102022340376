<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        // TODO: Specify the fillable columns (name, nim, major, faculty, profile_photo)
        'name',
        'nim',
        'major',
        'faculty',
        'profile_photo',
    ];

    protected function profilePhoto(): Attribute
    {
        // TODO: Complete the return of this method to generate the photo URL and path
        return Attribute::make(
            // Fill in here
            get: fn ($value) => $value ? Storage::url($value) : null,
            set: fn ($value) => $value
        );
    }
}
