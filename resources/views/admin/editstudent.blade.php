@extends('admin.include.layout')
@section('content')

  <div class="container text-center text-primary"><h2>Student Information</h2>


  </div>
  <div class="container">
    <hr>
    <form action="{{ url('/update_student/'.$student->id) }}" method="post" enctype="multipart/form-data">
      {{ @csrf_field() }}


      <input type="hidden" id="" value="{{ $student->id }}">

      <div class="form-group mb-2">
        <label for=""><h2>Student Name:</h2></label>
        <input type="text" class="form-control p-input" value="{{ $student->student_name }}" placeholder="Student Name" name="student_name" required >
      </div>

      <div class="form-group">
        <label for=""><h2>Student Roll</h2></label>
        <input type="number" class="form-control text-cente" value="{{ $student->student_roll }}" placeholder="Student Roll" name="student_roll" required>
      </div>

      <div class="form-group">
        <label for=""><h2>Student Father Name</h2></label>
        <input type="text" class="form-control" value="{{ $student->student_fathername }}" placeholder="Student Father Name" name="student_fathername" required>
      </div>

      <div class="form-group">
        <label for=""><h2>Student Mother Name</h2></label>
        <input type="text" class="form-control" value="{{ $student->student_mothername }}" placeholder="Student Mother Name" name="student_mothername" required>
      </div>

      <div class="form-group">
        <label for=""><h2>Student Email</h2></label>
        <input type="email" class="form-control" value="{{ $student->student_email }}" placeholder="Student Email" name="student_email" required>
      </div>

      <div class="form-group">
        <label for=""><h2>Student Phone</h2></label>
        <input type="number" class="form-control" value="{{ $student->student_phone }}" placeholder="Student Phone" name="student_phone" required>
      </div>

      <div class="form-group">
        <label for=""><h2>Student Address</h2></label>
        <input type="text" class="form-control" value="{{ $student->student_address }}" placeholder="Student Address" name="student_address" required>
      </div>
      
      <div class="form-group">
        <label for=""><h2>Student Password</h2></label>
          <input type="password" class="form-control" value="{{ $student->student_password }}" placeholder="Student Password" name="student_password" required>
        </div>

        <div class="form-group">
        <label for=""><h2>Student Admission Year</h2></label><br>
          <input type="date" value="{{ $student->student_admissionyear }}" name="student_admissionyear" required>
        </div> 

        <div class="form-group">
        <label for=""><h2>Student Image</h2></label><br>
        <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
         
          <input type="file" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp" name="student_image">
        </div>
      {{--   <div class="form-group">
          <label for=""><h2>Student Image</h2></label><br>
        <input type="file" class="form-control"name="student_image">
        </div> --}}
      
    
      <div class="form-group">

        <button type="" type="text" class="btn btn-outline-success">Update Information</button>
      </div>
    </form>
  </div>
  
   
@endsection