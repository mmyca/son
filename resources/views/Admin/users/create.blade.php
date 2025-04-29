@extends('layouts.admin.index')

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="card-header">
            <h2>Add New Admin</h2>
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('users.store') }}" method="POST">
                  @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Passwword" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" data-toggle="tooltip" data-placement="top" title="Submit" class="btn btn-warning">
                        <span class="bx bx-up-arrow-circle"></span></button>
                </form>
            </div>
        </div>   
    </div>
</div>
@endsection
