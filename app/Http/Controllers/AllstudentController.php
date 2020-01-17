<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student_tbl;
use DB;
use Session;
session_start();


class AllstudentController extends Controller
{
    public function student()
    {

    	return view('admin.allstudent')->with('student_view',Student_tbl::all());

    }

    public function edit($id)
    {

    		
    		$student = Student_tbl::find($id);

    		return view('admin.editstudent')->with('student',$student);

    	
    } 

    public function update(Request $request, $id)
    {

    		$student_tbl = Student_tbl::find($id);
    	

    		if ($request->hasFile('student_image')) {


    			$student_image = $request->student_image;
    			$student_image_name = time().$student_image->getClientOriginalName();
    			$student_image->move('student/image',$student_image_name);
    			$student_tbl->student_image = $student_image_name;
    		}

		    	$student_tbl->student_name = $request->student_name;
		    	$student_tbl->student_roll = $request->student_roll;
		    	$student_tbl->student_fathername = $request->student_fathername;
		    	$student_tbl->student_mothername = $request->student_mothername;
		    	$student_tbl->student_email = $request->student_email;
		    	$student_tbl->student_phone = $request->student_phone;
		    	$student_tbl->student_address = $request->student_address;
		    	$student_tbl->student_password = md5($request->student_password);
		    	$student_tbl->student_admissionyear = $request->student_admissionyear;
		    	
		    	
		    	
		    	$student_tbl->save();

		    	return redirect('allstudent')->with('success','Update successfully');

    	
    }

    public function student_delete($id)
    {


    		$student = Student_tbl::find($id);

    		$student->delete();

    		return redirect('allstudent');

    }

    public function viewstudetn($id)
    {

    	$student_view = DB::table('student_tbls')
    					->select('*')
    					->where('id',$id)
    					->first();
    					
    	return view('admin.view', compact('student_view'));

    }
    

 

}
