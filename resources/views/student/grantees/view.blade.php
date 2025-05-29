@extends('layouts.student.index')

@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">
<!-- Content -->
	<div class="container-xxl flex-grow-1 container-p-y">
	  <!-- Basic Layout -->
	  <div class="row">
	    <div class="col-xl">
	      <div class="card mb-6">
	        <div class="card-header d-flex justify-content-between align-items-center">
	          <h5 class="mb-0">View | Grant</h5>
	          <small class="text-muted float-end">Grant Information</small>
	        </div>
	        <div class="card-body">
	          <form>
	          	<div class="mb-6">
	              <label class="form-label" for="basic-icon-default-fullname">Student ID</label>
	              <div class="input-group input-group-merge">
	                <span id="basic-icon-default-fullname2" class="input-group-text"
	                  ><i class="bx bx-user-circle"></i
	                ></span>
	                <input
	                  type="text"
                      id="student_id"
                      name="student_id"
                      class="form-control"
                      value="{{ $grantee->student_id }}" disabled/>
	              </div>
	            </div>
	            <div class="mb-6">
	              <label class="form-label" for="basic-icon-default-fullname">Name</label>
	              <div class="input-group input-group-merge">
	                <span id="basic-icon-default-fullname2" class="input-group-text"
	                  ><i class="bx bx-user"></i
	                ></span>
	                <input
	                  type="text"
                      id="name"
                      name="name"
                      class="form-control"
                      value="{{ $grantee->fname .' '. $grantee->mname .' '. $grantee->lname}}" disabled/>
	              </div>
	            </div>
	            <div class="mb-6">
	              <label class="form-label" for="basic-icon-default-fullname">Scholar's Name</label>
	              <div class="input-group input-group-merge">
	                <span id="basic-icon-default-fullname2" class="input-group-text"
	                  ><i class="bx bx-pen"></i
	                ></span>
	                <input
	                  type="text"
                      id="scholar_name"
                      name="scholar_name"
                      class="form-control"
                      value="{{ $grantee->scholar_name }}" disabled/>
	              </div>
	            </div>
	            <div class="mb-6">
	              <label class="form-label" for="basic-icon-default-company">Grantee</label>
	              <div class="input-group input-group-merge">
	                <span id="basic-icon-default-company2" class="input-group-text"
	                  ><i class="bx bx-coin"></i
	                ></span>
	                <input
	                  type="text"
                      id="grants"
                      name="grants"
                      class="form-control"
                      value="{{ $grantee->grants }}" disabled />
	              </div>
	            </div>
	            <div class="mb-6">
	              <label class="form-label" for="basic-icon-default-message">Message</label>
	              <div class="input-group input-group-merge">
	                <span id="basic-icon-default-message2" class="input-group-text"
	                  ><i class="bx bx-message"></i
	                ></span>
	                <textarea type="text" class="form-control" id="short_des" name="short_des" rows="4" disabled>{{ $grantee->description }}</textarea>
	              </div>
	            </div>
	            <a href="{{ route('grantees.index') }}" class="btn btn-primary mt-3"> Back</a>
	          </form>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
<!-- / Content -->
</div>
@endsection