@extends('layouts.admin.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Scholarhip /</span> New Scholarship
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
            <h5 class="card-header">Add New Scholarship</h5>
            <div class="card-body">
                <form action="{{ route('scholars.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="s_name" class="form-label">Scholarship Name</label>
                        <input type="text" class="form-control" id="s_name" name="s_name" placeholder="Scholarship Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="grants" class="form-label">Grants</label>
                        <input type="text" class="form-control" id="grants" name="grants" placeholder="Grants" required>
                    </div>
                    <div class="mb-3">
                        <label for="short_des" class="form-label">Short Description</label>
                        <input type="text" class="form-control" id="short_des" name="short_des" placeholder="Short Description" required>
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="submit" class="btn btn-warning">
                        <span class="bx bx-up-arrow-circle"></span> Save</button>
                    <a href="{{ route('scholars.index') }}" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Cancel" class="btn btn-warning">
                        <span class="bx bx-x"></span>Cancel
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
