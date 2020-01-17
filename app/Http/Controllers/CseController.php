<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student_tbl;
use DB;

class CseController extends Controller
{

	public function index()
	{

		$s_cse = DB::table('student_tbls')
							 ->where(['deperment'=>'cse'])
							->get();
							

		 return view('admin.cse',compact('s_cse'));
						
								
	}
   
}
