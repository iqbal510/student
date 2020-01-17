<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_tbl extends Model
{
    protected $fillable = ['student_name', 'student_roll', 'student_fathername', 'student_mothername', 'student_email', 'student_phone', 'student_address', 'student_password', 'student_admissionyear', 'student_image', 'deperment'];
}
