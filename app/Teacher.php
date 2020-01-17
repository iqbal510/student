<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['teacher_name', 'teacher_email', 'teacher_phone', 'teacher_address', 'teacher_image', 'department'];
}
