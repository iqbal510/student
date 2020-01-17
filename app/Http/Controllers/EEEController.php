<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EEEController extends Controller
{
    function index()
    {
    	$s_eee = DB::table('student_tbls')
    					->where(['deperment'=>'EEE'])
    					->get();

    	return view('admin.eee',compact('s_eee'));
    }
}
