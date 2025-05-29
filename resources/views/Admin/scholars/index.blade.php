@extends('layouts.admin.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Scholarship /</span> List of Scholarship</h4>
        <div class="card">
        	@if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="d-flex justify-content-between align-items-center card-header">
                <h5 class="m-0">Scholarship</h5>
                <a href="{{ route('scholars.create') }}" class="btn btn-primary">
                	<i class="menu-icon tf-icons bx bx-plus-circle"></i>
                	Add Scholarship
                </a>
            </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Scholarship Name</th>
                            <th>Grants</th>
                            <th>Short Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
						@forelse($scholars as $scholar)
					    <tr>
					        <td><strong>{{ $scholar->id }}</strong></td>
					        <td>{{ $scholar->s_name }}</td>
					        <td>{{ $scholar->grants }}</td>
					        <td>{{ $scholar->short_des }}</td>
					        <td>
					            <div class="dropdown">
					                <button type="button" class="btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
					                    <i class="bx bx-dots-vertical-rounded"></i>
					                </button>
					                <div class="dropdown-menu">
					                    <!-- Edit Button -->
					                    <center>
					                    	<a class="dropdown-item" href="{{ route('scholars.edit', $scholar->id) }}" data-toggle="tooltip" data-placement="top" title="Edit">
                              				<span class="bx bx-edit btn btn-primary"> Edit</span>
						                    </a>
						                    <a class="dropdown-item" href="{{ route('scholars.show', $scholar->id) }}" data-toggle="tooltip" data-placement="top" title="View">
                              				<span class="bx bx-envelope btn btn-warning"> View</span>
						                    </a>
						                    <!-- Delete Form -->
						                    <form action="{{ route('scholars.destroy', $scholar->id) }}" method="POST" style="display:inline;">
						                        @csrf
						                        @method('DELETE')
						                        <button class="dropdown-item" type="submit" onclick="return confirm('Are you sure you want to delete this scholar?')" data-toggle="tooltip" data-placement="top" title="Delete">
	                              					<span class="bx bx-trash btn btn-danger"> Delete</span>
						                        </button>
						                    </form>
					                    </center>
					                </div>
					            </div>
					        </td>
					    </tr>
					    @empty
					    <tr>
					        <td colspan="3" class="text-center">No scholar found.</td>
					    </tr>
					    @endforelse
					</tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
