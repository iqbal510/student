@extends('admin.include.student_layout')
@section('content')
<!-- partial -->

<div class="content-wrapper">
	<h1 class="page-title">Information</h1>

				@if(session()->has('success'))
				    <div class="alert alert-success">
				        {{ session()->get('success') }}
				    </div>
				@endif
	<div class="row">
		<div class="col-12 col-lg-6 grid-margin">
			<div class="card">
				<div class="card-body">
					
					<form action="{{ url('student_own_update') }}"  method="post">
						{{ csrf_field() }}


						<div class="form-group">
							<label for="exampleInputEmail1">Name</label>
							<input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" name="student_name" value="{{$student_update->student_name}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Email</label>
							<input type="email" class="form-control p-input" id="exampleInputPassword1" placeholder="Email" name="student_email" value="{{$student_update->student_email}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Phone</label>
							<input type="number" class="form-control p-input" id="exampleInputPassword1" placeholder="Phone" name="student_phone" value="{{$student_update->student_phone}}">
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Father
							Name</label>
							<input type="text" class="form-control p-input" id="exampleInputPassword1" placeholder="Phone" name="student_fathername" value="{{$student_update->student_fathername}}">
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Mother Name</label>
							<input type="text" class="form-control p-input" id="exampleInputPassword1" placeholder="Phone" name="student_mothername" value="{{$student_update->student_mothername}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Address</label>
							<input type="text" class="form-control p-input" id="exampleInputPassword1" placeholder="Address" name="student_address" value="{{$student_update->student_address}}">
						</div>

						
						
						
						<button type="submit" class="btn btn-success">Updatel</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection