@extends('admin.include.student_layout')
@section('content')
 <!-- partial -->
      
         <div class="container">
          <div class="row user-profile">
            <div class="col-lg-10 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{ asset('/student/image/'. $student_profile->student_image) }}"  width="50px" height="50px" >
                  <p class="name">{{ $student_profile->student_name }}</p>
                  <p class="designation">{{ $student_profile->deperment }}</p>
                  <a class="email">{{ $student_profile->student_email }}</a>
                  <a class="number">{{ $student_profile->student_phone }}</a>
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">
                 
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <h3>Student information</h3>
                  </div>
                  <div class="info-links">
                    <a class="website" >
                      <i class="icon-globe icon" style="font-size: 24px;color: #00bfa5 ;">Father Name:</i>
                      <span style="font-size: 19px; color: #0091ea;">{{ $student_profile->student_fathername }}</span>
                    </a>

                    <a class="website" >
                      <i class="icon-globe icon" style="font-size: 24px;color: #00bfa5 ;">Mother Name:</i>
                      <span style="font-size: 19px; color: #0091ea;">{{ $student_profile->student_mothername }}</span>
                    </a>

                    <a class="website" >
                      <i class="icon-globe icon" style="font-size: 24px;color: #00bfa5 ;">Address:</i>
                      <span style="font-size: 19px; color: #0091ea;">{{ $student_profile->student_address }}</span>
                    </a>
                    <a class="website" >
                      <i class="icon-globe icon" style="font-size: 24px;color: #00bfa5 ;">Department:</i>
                      <span style="font-size: 19px; color: #0091ea;">{{ $student_profile->deperment}}</span>
                    </a>

                    <a class="website" >
                      <i class="icon-globe icon" style="font-size: 24px;color: #00bfa5 ;">Admission Year:</i>
                      <span style="font-size: 19px; color: #0091ea;">{{ $student_profile->student_admissionyear }}</span>
                    </a>

                  </div>
                </div>
              </div>
            </div>
     
        </div>
        </div>
        <!-- content-wrapper ends -->
@endsection