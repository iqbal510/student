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
                          <th>Teacher Name</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Deparment</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($teacher_view as $teacher)
		                      <tr>
		                          <td>{{ $teacher->teacher_name }}</td>
		                          <td>{{ $teacher->teacher_phone }}</td>
                             
		                          <td>
                                <img src="{{ asset('/teacher/image/'. $teacher->teacher_image) }}" alt="{{ $teacher->name }}" width="50px" height="50px">
                              </td>
		                          <td>{{ $teacher->teacher_address }}</td>
		                          <td>{{ $teacher->department }}</td>

		                          <td>
		                            <a href="{{ url('/teacher_delete/'.$teacher->id) }}" class="btn btn-outline-danger" id="delete">Delete</a>
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