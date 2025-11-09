<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
 use HasFactory;

    protected $fillable = [
        'name',
        'date_of_birth',
        'address',
        'contact',
        'email',
        'occupation',
        'age',
        'gender',
        'civil_status',
        'citizenship',
        'height',
        'weight',
        'religion',
        'language',
        'father_name',
        'father_occupation',
        'mother_name',
        'mother_occupation',
        'emergency_person',
        'emergency_contact',
    ];

}
