@extends('admin.include.student_layout')
@section('content')
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">All Student</h2>

      @php
       $student= DB::table('student_tbls')
              ->count('id');
      @endphp
      <p style="text-align: center; font-family:  Arial, Helvetica, sans-serif;font-size: 30px;">{{ $student }} </p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-1" class="card-float-chart"></div>
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-3 grid-margin">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">All Teacher</h2>
      @php
       $teacher= DB::table('teachers')
              ->count('id');
      @endphp
      <p style="text-align: center; font-family:  Arial, Helvetica, sans-serif;font-size: 30px;">{{ $teacher }} </p>
    </div>
    <div class="dashboard-chart-card-container">
      <div id="dashboard-card-chart-2" class="card-float-chart"></div>
    </div>
  </div>
</div>



@endsection

