<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();
class AdminController extends Controller
{
   
    //admin logout
    public function logout()
    {
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return redirect('/admin');

    }

    public function signup()
    {

        return view('admin.signup');

    }

    public function dashboard()

    {

        return view('admin.dashboard');
    }

    public function login_dashboard(Request $request)
    { 

        $email = $request->admin_email;
        $password =md5($request->admin_password);
        $result = DB::table('admin_registations')
        ->where('admin_email',$email)
        ->where('admin_password',$password)
        ->first();


        if ($result) {
            // Session::put('name',$result->name);
            // Session::put('id',$result->id);

           return redirect('dashboard');
        }else{

            Session::put('exception','Email or Password Invalid');
            return redirect('/admin');
        }

         return view("admin.dashboard");
    }

    //student login
    public function student_logout()
    {
        Session::put('student_name',null);
        Session::put('id',null);
        return redirect('/');

    }

    public function student_ds()
    {

            return view('student_login');

    }


}
