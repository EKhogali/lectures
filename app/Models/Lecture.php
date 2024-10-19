<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = [
        'school',
        'classdesc01',
        'classdesc02',
        'area',
        'manager_name',
        'manager_tel',
        'lecturer_name',
        'lecture_date',
    ];
}
