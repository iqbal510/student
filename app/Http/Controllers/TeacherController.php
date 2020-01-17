<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;


class TeacherController extends Controller
{
    public function addteacher()
    {

    	return view('admin.addteacher');

    }

    public function allteacher()
    {
       // $teachers = Teacher::all();

       // foreach ($teachers as $teacher) {
       // 	return $teacher->teacher_name;die();
       // }

    	return view('admin.allteacher')->with('teacher_view',Teacher::all());

    }

   public function saveteacher(Request $request)
    {

    		// dd($request->all());
    	$this->validate($request,[
    		'teacher_name' => 'required',
    		'teacher_email' => 'required',
    		'teacher_phone' => 'required',
    		'teacher_address' => 'required',
    		'teacher_image' => 'required',
    		'department' => 'required',


    	]);

    	$teacher_image = $request->teacher_image;
    	$teacher_image_name = time().$teacher_image->getClientOriginalName();


    	$teacher_image->move('teacher/image',$teacher_image_name);



    	$teacher = new Teacher();
    	$teacher->teacher_name = $request->teacher_name;
    	$teacher->teacher_email = $request->teacher_email;
    	$teacher->teacher_phone = $request->teacher_phone;
    	$teacher->teacher_address = $request->teacher_address;
    	$teacher->teacher_image = $teacher_image_name;
    	$teacher->department = $request->department;
    	
    	
    	$teacher->save();

    	return redirect('allteacher')->with('success','Createt successfully');

    }
    public function teacher_delete($id)
    {

    		$teacher = Teacher::find($id);

    		$teacher->delete();

    		return redirect('allteacher');
    }
}
