@extends('admin.include.layout')
@section('content')

	<!-- partial -->
     
        <div class="container">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>

              
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Student Roll</th>
                          <th>Student Name</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Deparment</th>
                          <th>View</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($student_view as $student)
		                      <tr>
		                          <td>{{ $student->student_roll }}</td>
		                          <td>{{ $student->student_name }}</td>
		                          <td>{{ $student->student_phone }}</td>
		                          <td><img src="{{ asset('/student/image/'. $student->student_image) }}" alt="{{ $student->name }}" width="50px" height="50px"></td>
		                          <td>{{ $student->student_address }}</td>
		                          <td>{{ $student->deperment }}</td>
		                          
		                          <td>
		                            <a href="{{ url('/student_view/'.$student->id) }}" class="btn btn-outline-info">View</a>
		                          </td>
		                          <td>
		                            <a href="{{ url('/edit_student/'.$student->id) }}" class="btn btn-outline-warning">Edit</a>
		                          </td>

		                          <td>
		                            <a href="{{ url('/student_delete/'.$student->id) }}" class="btn btn-outline-danger" id="delete">Delete</a>
		                          </td>
		                      </tr>
                   		@endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         </div>  
      
   
@endsection