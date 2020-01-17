<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BBAController extends Controller
{
    public function index()
	{

		$s_bba = DB::table('student_tbls')
							 ->where(['deperment'=>'BBA'])
							->get();
							

		 return view('admin.bba',compact('s_bba'));
						
								
	}
}
