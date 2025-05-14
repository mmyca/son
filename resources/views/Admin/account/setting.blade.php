@extends('layouts.admin.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Admin /</span> List of Admin
        </h4>
        <div class="card">

            <div class="d-flex justify-content-between align-items-center card-header">
                <h5 class="m-0">Profile</h5>
                <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">
                    <span class="menu-icon tf-icons bx bx-plus-circle"></span>Add New Admin</a>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($users as $user)
                    <tr>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                          <a href="{{ route('users.edit', $user->id) }}" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary">
                              <span class="bx bx-edit"></span>
                          </a>
                          <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-warning">
                              <span class="bx bx-trash"></span>
                          </button>
                          </form>
                      </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">No users found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
