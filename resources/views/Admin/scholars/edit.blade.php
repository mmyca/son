@extends('layouts.admin.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Scholarship /</span> Edit Scholar
        </h4>

        <div class="card">
            <h5 class="card-header">Edit Scholar</h5>
            <div class="card-body">
                <form action="{{ route('scholars.update', $scholar->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="student_id" class="form-label">Student ID</label>
                        <input type="text" class="form-control" id="student_id" name="student_id" value="{{ $scholar->student_id }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Fullname</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $scholar->fullname }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="text" class="form-control" id="gender" name="gender" value="{{ $scholar->gender }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="course" class="form-label">Course</label>
                        <input type="text" class="form-control" id="course" name="course" value="{{ $scholar->course }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="scholars" class="form-label">Scholars Category</label>
                        <input type="text" class="form-control" id="scholars" name="scholars" value="{{ $scholar->scholars }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Update" class="btn btn-warning">
                        <span class="bx bx-up-arrow-circle"></span> Edit</button>
                    <a href="{{ route('scholars.index') }}" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Cancel" class="btn btn-warning">
                        <span class="bx bx-x"></span>
                        Cancel
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
