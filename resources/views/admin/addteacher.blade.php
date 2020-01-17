@extends('admin.include.layout')
@section('content')
<!-- partial -->
<div class="content-wrapper">
	<h1 class="page-title">Teacher Add</h1>
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
	<div class="row">
		<div class="col-12 col-lg-6 grid-margin">
			<div class="card">
				<div class="card-body">
					
					<form action="{{ url('/saveteacher/') }}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="exampleInputEmail1">Teacher Name</label>
							<input type="text" class="form-control p-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Teacher Name" name="teacher_name">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Teacher Email</label>
							<input type="email" class="form-control p-input" id="exampleInputPassword1" placeholder="Teacher Email" name="teacher_email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Teacher Phone</label>
							<input type="number" class="form-control p-input" id="exampleInputPassword1" placeholder="Teacher Phone" name="teacher_phone">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Teacher Address</label>
							<input type="text" class="form-control p-input" id="exampleInputPassword1" placeholder="Teacher Address" name="teacher_address">
						</div>
						
						<div class="form-group">
							<label>Upload file</label>
							<div class="row">
								<div class="col-12">
									<label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
									<input type="file" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp" name="teacher_image">
									
								</div>
							</div>
						</div>
						<div class="form-group">
							<select class="form-control" name="department">
								<option value="">Department</option>
								<option value="CSE">CSE</option>
								<option value="BBA">BBA</option>
								<option value="ENGLISH">ENGLISH</option>
								<option value="EEE">EEE</option>
								<option value="MBA">MBA</option>
							</select>
						</div>
						<button type="submit" class="btn btn-success">Teacher Add</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection