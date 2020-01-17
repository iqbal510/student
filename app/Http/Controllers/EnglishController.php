<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EnglishController extends Controller
{
    function index()
    {
    	$s_english = DB::table('student_tbls')
    					->where(['deperment'=>'ENGLISH'])
    					->get();

    	return view('admin.english',compact('s_english'));
    }
}

