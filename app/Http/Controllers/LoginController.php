<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin_registation;

class LoginController extends Controller
{
    public function login(Request $request)
    {

    	// dd($request->all());
    	$this->validate($request,[
    		'admin_name' => 'required',
    		'admin_email' => 'required',
    		'admin_password' => 'required',
    		'admin_phone' => 'required'
    	
    	]);

    	


    	$admin_registation = new Admin_registation();

    	$admin_registation->admin_name = $request->admin_name;
    	$admin_registation->admin_email = $request->admin_email;

    	$admin_registation->admin_password =md5($request->admin_password);
    	$admin_registation->admin_phone = $request->admin_phone;

    	// if ($admin_registation==1 ) {
    	// 	echo "match";
    	// }else
    	// {
    	// 	echo "yes";
    	// }
    	
    	$admin_registation->save();

    	return redirect('/admin');


    }
}
