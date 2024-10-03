<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'email',
        'phone',
        'address',
        'school_origin',
        'unit',
        'registration_type',
    ];
}
