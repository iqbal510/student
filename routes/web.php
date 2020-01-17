<?php

Route::get('/', function () {
    return view('student_login');
});
Route::get('/admin', function () {
    return view('admin/admin_login');
});
//Login 

Route::post('/admin_login','LoginController@login');


Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@logout');
Route::get('/signup','AdminController@signup');

//student profile
Route::get('/student_setting','StudentController@student_setting');
Route::get('/student_profile/','StudentController@student_profile');
Route::post('/student_own_update','StudentController@student_own_update');

Route::get('/t','AdminController@student_ds');
Route::post('/student_login/','StudentController@student_login_dashboard');

//add student
Route::get('/addstudent','AddStudentController@addstudent');

Route::post('/savestudent','AddStudentController@savestudent');

//allstudent route
Route::get('/allstudent','AllstudentController@student');
Route::post('/allstudent/','AllstudentController@store');
Route::get('/edit_student/{id}','AllstudentController@edit');
Route::post('/update_student/{id}','AllstudentController@update');
Route::get('/student_delete/{id}','AllstudentController@student_delete');
Route::get('/student_view/{id}','AllstudentController@viewstudetn');
//deparment
Route::get('/cse','CseController@index');
Route::get('/bba','BBAController@index');
Route::get('/english','EnglishController@index');
Route::get('/eee','EEEController@index');
Route::get('/mba','MBAController@index');
//Teacher
Route::get('/addteacher/','TeacherController@addteacher');
Route::post('/saveteacher/','TeacherController@saveteacher');
Route::get('/allteacher/','TeacherController@allteacher');
Route::get('/teacher_delete/{id}','TeacherController@teacher_delete');
