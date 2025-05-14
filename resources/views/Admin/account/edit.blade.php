@extends('layouts.admin.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Admin /</span> Edit Profile
        </h4>

        <div class="card">
            <h5 class="card-header">Edit Profile</h5>
            <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Update" class="btn btn-warning">
                        <span class="bx bx-up-arrow-circle"></span>
                    </button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Cancel" class="btn btn-warning">
                        <span class="bx bx-x"></span>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
