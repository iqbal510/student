<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Student_tbl;
class StudentController extends Controller
{
    public function student_setting()

    {
        
        
    	$student_id  = Session::get('id');


    	
    	$student_update = DB::table('student_tbls')
    					->select('*')
    					->where('id',$student_id)
    					->first();

        return view('admin.student_setting', compact('student_update'));
    }

    public function student_own_update(Request $request)

    {


    			$student_id  =  Session::get('id');
    			$student_tbl = Student_tbl::find($student_id);

    		


    			$student_tbl->student_name = $request->student_name;
		    	$student_tbl->student_email = $request->student_email;
		    	$student_tbl->student_phone = $request->student_phone;
                $student_tbl->student_fathername = $request->student_fathername;
                $student_tbl->student_mothername = $request->student_mothername;
		    	$student_tbl->student_address = $request->student_address;
		    	
		    	$student_tbl->save();

		    	return redirect('student_setting')->with('success','Update Successfully');

    }

    public function student_profile()

    {
    	

    	$student_id  =  Session::get('id');

    	
    	$student_profile = DB::table('student_tbls')
    					->select('*')
    					->where('id',$student_id)
    					->first();
    					
    	return view('admin.student_profile', compact('student_profile'));
    	
    }

     public function student_login_dashboard(Request $request)
    { 

       

      $email = $request->student_email;
      $password =md5($request->student_password);
      $student = DB::table('student_tbls')
      ->where('student_email',$email)
      ->where('student_password',$password)
      ->first();
        

        if ($student) {
           Session::put('student_name',$student->student_name);
           Session::put('id',$student->id);
        }else{
            Session::put('exception','Email or Password Invalid');
            return redirect('/');
        }
        
        // if ($student) {
        //     Session::put('name',$student->student_name);
        //     Session::put('id',$student->id);

        //    return redirect('/');
        // }else{

        //     Session::put('exception','Email or Password Invalid');
        //     return redirect('/student');
        // }

        return view('admin.student_ds');

    }
}
