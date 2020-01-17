@extends('admin.include.layout')
@section('content')


	<div class="container text-center text-primary"><h2>Student Information</h2>
			

				@if(count($errors) > 0)

					<ul>
						@foreach($errors->all() as $error)
							<li class="alert alert-danger text-center">{{ $error }}</li>
						@endforeach
					</ul>

				@endif

				@if(session()->has('success'))
				    <div class="alert alert-success">
				        {{ session()->get('success') }}
				    </div>
				@endif

	</div>
	<div class="container">
		<hr>
		<form action="{{ url('/savestudent/') }}" method="post" enctype="multipart/form-data">
			{{ @csrf_field() }}

			<div class="form-group mb-2">
				<label for=""><h2>Student Name:</h2></label>
				<input type="text" class="form-control p-input" placeholder="Student Name" name="student_name" required>
			</div>

			<div class="form-group">
				<label for=""><h2>Student Roll</h2></label>
				<input type="number" class="form-control text-cente" placeholder="Student Roll" name="student_roll" required="">
			</div>

			<div class="form-group">
				<label for=""><h2>Student Father Name</h2></label>
				<input type="text" class="form-control" placeholder="Student Father Name" name="student_fathername" required="">
			</div>

			<div class="form-group">
				<label for=""><h2>Student Mother Name</h2></label>
				<input type="text" class="form-control" placeholder="Student Mother Name" name="student_mothername" required="">
			</div>

			<div class="form-group">
				<label for=""><h2>Student Email</h2></label>
				<input type="email" class="form-control" placeholder="Student Email" name="student_email" required="">
			</div>

			<div class="form-group">
				<label for=""><h2>Student Phone</h2></label>
				<input type="number" class="form-control" placeholder="Student Phone" name="student_phone" required=""><br>
			</div>

			<div class="form-group">
				<label for=""><h2>Student Address</h2></label>
				<input type="text" class="form-control" placeholder="Student Address" name="student_address" required=""><br>
			</div>
			
			<div class="form-group">
				<label for=""><h2>Student Password</h2></label>
			    <input type="password" class="form-control" placeholder="Student Password" name="student_password" required="">
		    </div>

		    <div class="form-group">
				<label for=""><h2>Student Admission Year</h2></label><br>
			    <input type="date" name="student_admissionyear" required="">
		    </div> 

		    <div class="form-group">
				<label for=""><h2>Student Image</h2></label><br>
				<label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
			   
			    <input type="file" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp" name="student_image" required="">
		    </div>
		  {{--   <div class="form-group">
		    	<label for=""><h2>Student Image</h2></label><br>
				<input type="file" class="form-control"name="student_image">
		    </div> --}}
			
			<div class="form-group">
				<select class="form-control" name="deperment" required="">
					<option value="">Department</option>
					<option value="CSE">CSE</option>
					<option value="BBA">BBA</option>
					<option value="ENGLISH">ENGLISH</option>
					<option value="EEE">EEE</option>
					<option value="MBA">MBA</option>
				</select>
			</div>
			<div class="form-group">

				<button type="" type="text" class="btn btn-outline-success">Submit</button>
			</div>
		</form>
	</div>
	
@endsection


