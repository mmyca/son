@extends('layouts.student.index')

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
            </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Scholarship Name</th>
                            <th>Grants</th>
                            <th>Short Description</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
						@forelse($scholars as $scholar)
					    <tr>
					        <td><strong>{{ $scholar->id }}</strong></td>
					        <td>{{ $scholar->s_name }}</td>
					        <td>{{ $scholar->grants }}</td>
					        <td>{{ $scholar->short_des }}</td>
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
