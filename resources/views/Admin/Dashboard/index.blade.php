@extends('layouts.admin.index')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Welcome {{ Auth::user()->name }}! 🎉</h5>
              <p class="mb-4">
                Thank you for logging in. Keep track of your platform's performance below.
              </p>
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img src="{{ asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="Welcome User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Order Statistics -->
    <div class="col-lg-12">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between pb-0">
          <div class="card-title mb-0">
            <h5 class="m-0 me-2">Scholarship Grantees Analytics</h5>
            <small class="text-muted">{{ $totalStudents }} Total Students</small>
          </div>
          <div class="dropdown">
          </div>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="d-flex flex-column align-items-center gap-1">
              <h2 class="mb-2">{{ $totalStudents }}</h2>
              <span>Total Grantees</span>
            </div>
            <div id="orderStatisticsChart">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Order Statistics -->
  </div>
</div>
@endsection