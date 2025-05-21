@extends('layouts.admin.index')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Grantees /</span> New Grants
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
            <h5 class="card-header">Add New Grants</h5>
            <div class="card-body">
                <form action="{{ route('grantees.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="student_id" class="form-label">Student ID</label>
                        <input type="text" class="form-control" id="student_id" name="student_id" placeholder="Student ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="mname" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="scholar_name" class="form-label">Scholarship Name</label>
                        <!-- <input type="text" class="form-control" id="scholar_name" name="scholar_name" placeholder="Scholarship Name" required> -->
                        <select class="form-control" id="scholar_name" name="scholar_name" required>
                            <option disabled selected>Select</option>
                            <option value="Unified Student Financial Assistance System (UniFAST)">Unified Student Financial Assistance System (UniFAST)</option>
                            <option value="Tertiary Education Subsidy (TES)">Tertiary Education Subsidy (TES)</option>
                            <option value="Commission on Higher Education (CHED)">Commission on Higher Education (CHED)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="grants" class="form-label">Grants</label>
                        <select class="form-control" id="grants" name="grants" required>
                            <option disabled selected>Select</option>
                            <option value="PhP 40, 000">PhP 40, 000</option>
                            <option value="PhP 60, 000">PhP 60, 000</option>
                            <option value="PhP 88, 500">PhP 88, 500</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <select class="form-control" id="description" name="description" required>
                            <option disabled selected>Select</option>
                            <option value="UniFAST reconciles, improves, strengthens, expands, and puts under one body all government-funded modalities of Student Financial Assistance Programs (StuFAPs) for tertiary education – and special purpose education assistance – in both public and private institutions.">UniFAST reconciles, improves, strengthens, expands, and puts under one body all government-funded modalities of Student Financial Assistance Programs (StuFAPs) for tertiary education – and special purpose education assistance – in both public and private institutions.</option>
                            <option value="A Tertiary Education Subsidy (TES) is a financial aid program that helps students cover the cost of their tertiary education in the Philippines. It's a grant-in-aid program under the Universal Access to Quality Tertiary Education Act (UAQTEA), providing financial support to students in public and private higher education institutions (HEIs).">A Tertiary Education Subsidy (TES) is a financial aid program that helps students cover the cost of their tertiary education in the Philippines. It's a grant-in-aid program under the Universal Access to Quality Tertiary Education Act (UAQTEA), providing financial support to students in public and private higher education institutions (HEIs).</option>
                            <option value="CHED scholarships are designed to provide financial assistance to qualified and deserving students, particularly those with special challenges like being from low-income homes, persons with disabilities (PWDs), or dependents of solo parents. The goal is to make higher education more accessible to these individuals. CHED scholarship programs can cover tuition fees, textbooks, and sometimes even living expenses.">CHED scholarships are designed to provide financial assistance to qualified and deserving students, particularly those with special challenges like being from low-income homes, persons with disabilities (PWDs), or dependents of solo parents. The goal is to make higher education more accessible to these individuals. CHED scholarship programs can cover tuition fees, textbooks, and sometimes even living expenses.</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="submit" class="btn btn-warning">
                        <span class="bx bx-up-arrow-circle"></span> Save</button>
                    <a href="{{ route('grantees.index') }}" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Cancel" class="btn btn-warning">
                        <span class="bx bx-x-circle"></span> Cancel
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
