<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MBAController extends Controller
{
    public function index()
	{

		$s_mba = DB::table('student_tbls')
							 ->where(['deperment'=>'MBA'])
							->get();
							

		 return view('admin.mba',compact('s_mba'));
						
								
	}
}
