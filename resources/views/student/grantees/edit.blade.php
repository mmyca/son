@extends('layouts.student.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Scholarship /</span> Edit Scholar
        </h4>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        <div class="card">
            <h5 class="card-header">Edit Scholar</h5>
            <div class="card-body">
                <form action="{{ route('grantees.update', $grantee->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="student_id" class="form-label">Student ID</label>
                        <input type="text" class="form-control" id="student_id" name="student_id" value="{{ $grantee->student_id }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" value="{{ $grantee->fname }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="mname" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="mname" name="mname" value="{{ $grantee->mname }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" value="{{ $grantee->lname }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="scholar_name" class="form-label">Scholarship Name</label>
                        <input type="text" class="form-control" id="scholar_name" name="scholar_name" value="{{ $grantee->scholar_name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="grants" class="form-label">Grants</label>
                        <input type="text" class="form-control" id="grants" name="grants" value="{{ $grantee->grants }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Short Description</label>
                        <textarea type="text" class="form-control" id="description" name="description" rows="4" required>{{ $grantee->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Update" class="btn btn-warning">
                        <span class="bx bx-up-arrow-circle"></span> Update</button>
                    <a href="{{ route('grantees.index') }}" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Cancel" class="btn btn-warning">
                        <span class="bx bx-x-circle"></span>
                         Cancel
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
