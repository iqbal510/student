<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
   protected $fillable = ['user_name','email', 'img', 'user_password'];
}
