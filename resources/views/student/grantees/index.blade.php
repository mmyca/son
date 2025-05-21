@extends('layouts.student.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Grantees /</span> List of Grantees</h4>
        <div class="card">

            <div class="d-flex justify-content-between align-items-center card-header">
                <h5 class="m-0">Grantees</h5>
                <a href="{{ route('grantees.create') }}" class="btn btn-primary">
                	<i class="menu-icon tf-icons bx bx-plus-circle"></i>
                	Apply
                </a>
            </div>
                <table class="table">
                    <thead>
                        <tr>
                        	<th>ID</th>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Scholarship Name</th>
                            <th>Grants</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
						@forelse($grantees as $grantee)
					    <tr>
					        <td><strong>{{ $grantee->id }}</strong></td>
					        <td>{{ $grantee->student_id }}</td>
					        <td>{{ $grantee->fname }} {{ $grantee->mname }} {{ $grantee->lname }} </td>
					        <th>{{ $grantee->scholar_name }}</th>
					        <td>{{ $grantee->grants }}</td>
					        <td>{{ $grantee->description }}</td>
					        <td>
					            <div class="dropdown">
					                <button type="button" class="btn dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
					                    <i class="bx bx-dots-vertical-rounded"></i>
					                </button>
					                <div class="dropdown-menu">
					                    <!-- Edit Button -->
					                    <a class="dropdown-item" href="{{ route('grantees.edit', $grantee->id) }}" data-toggle="tooltip" data-placement="top" title="Edit">
                              				<span class="bx bx-edit btn btn-primary"> Edit</span>
					                    </a>
					                    <!-- Delete Form -->
					                    <form action="{{ route('grantees.destroy', $grantee->id) }}" method="POST" style="display:inline;">
					                        @csrf
					                        @method('DELETE')
					                        <button class="dropdown-item" type="submit" onclick="return confirm('Are you sure you want to delete this grantee?')" data-toggle="tooltip" data-placement="top" title="Delete">
                              					<span class="bx bx-trash btn btn-danger"> Delete</span>
					                        </button>
					                    </form>
					                </div>
					            </div>
					        </td>
					    </tr>
					    @empty
					    <tr>
					        <td colspan="5" class="text-center">No grantee found.</td>
					    </tr>
					    @endforelse
					</tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
