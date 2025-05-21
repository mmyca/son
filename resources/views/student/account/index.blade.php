@extends('layouts.student.index')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="py-3 mb-4"><span class="text-muted fw-light">Account Profile /</span> Account</h4>
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
              <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
            </li>
          </ul>
          <div class="card mb-4">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <h5 class="card-header">Profile Details</h5>
            <!-- Account -->
            <div class="card-body">
              <div class="d-flex align-items-start align-items-sm-center gap-4">
                <img
                  src="../assets/img/avatars/1.png"
                  alt="user-avatar"
                  class="d-block rounded"
                  height="100"
                  width="100"
                  id="uploadedAvatar" />
                <div class="button-wrapper">
                  <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                    <span class="d-none d-sm-block">Upload new photo</span>
                    <i class="bx bx-upload d-block d-sm-none"></i>
                    <input
                      type="file"
                      id="upload"
                      class="account-file-input"
                      hidden
                      accept="image/png, image/jpeg" />
                  </label>
                  <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                    <i class="bx bx-reset d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Reset</span>
                  </button>

                  <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                </div>
              </div>
            </div>
            <hr class="my-0" />
            <div class="card-body">
              <form id="formAccountSettings" method="POST" action="{{ route('account.index', $user->id) }}">
  @csrf
  <div class="row">
    <div class="mb-3 col-md-6">
      <label for="name" class="form-label">Name</label>
      <input
        type="text"
        id="name"
        name="name"
        class="form-control"
        value="{{ Auth::user($id)->name }}"
        required>
    </div>

    <div class="mb-3 col-md-6">
      <label for="email" class="form-label">E-mail</label>
      <input
        type="email"
        id="email"
        name="email"
        class="form-control"
        value="{{ Auth::user($id)->email }}"
        required>
    </div>
  </div>
</form>

            </div>
            <!-- /Account -->
@endsection