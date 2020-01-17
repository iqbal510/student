<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student_tbl;

class AddStudentController extends Controller
{
    public function addstudent()
    {

    	return view('admin.addstudent');

    }

    public function savestudent(Request $request){

    	// dd($request->all());

    	$this->validate($request,[
    		'student_name' => 'required',
    		'student_roll' => 'required',
    		'student_fathername' => 'required',
    		'student_mothername' => 'required',
    		'student_email' => 'required',
    		'student_phone' => 'required',
    		'student_address' => 'required',
    		'student_password' => 'required',
    		'student_admissionyear' => 'required',
    		'student_image' => 'required',
    		'deperment' => 'required',


    	]);

    	$student_image = $request->student_image;
    	$student_image_name = time().$student_image->getClientOriginalName();


    	$student_image->move('student/image',$student_image_name);



    	$student_tbl = new Student_tbl();

    	$student_tbl->student_name = $request->student_name;
    	$student_tbl->student_roll = $request->student_roll;
    	$student_tbl->student_fathername = $request->student_fathername;
    	$student_tbl->student_mothername = $request->student_mothername;
    	$student_tbl->student_email = $request->student_email;
    	$student_tbl->student_phone = $request->student_phone;
    	$student_tbl->student_address = $request->student_address;
    	$student_tbl->student_password = md5($request->student_password);
    	$student_tbl->student_admissionyear = $request->student_admissionyear;
    	$student_tbl->student_image = $student_image_name;
    	$student_tbl->deperment = $request->deperment;
    	
    	
    	$student_tbl->save();

    	return redirect('/allstudent')->with('success','Createt successfully');
    	

    }
}
