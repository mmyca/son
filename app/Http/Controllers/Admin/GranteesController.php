<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grantees;
use Illuminate\Http\Request;

class GranteesController extends Controller
{
    public function index()
    {
        $grantees = Grantees::all();
        return view('admin.grantees.index', compact('grantees'));
    }

    public function create()
    {
        return view('admin.grantees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|string',
            'fname' => 'required|string',
            'mname' => 'required|string',
            'lname' => 'required|string',
            'scholar_name' => 'required|string',
            'grants' => 'required|string',
            'description' => 'required|string|max:65535',
        ]);

        Grantees::create($request->all());
        return redirect()->route('admin.grantees.index')->with('success', 'Scholarship created successfully.');
    }

    public function edit(Grantees $grantee)
    {
        return view('admin.grantees.edit', compact('grantee'));
    }

    public function update(Request $request, Grantees $grantee)
    {
        $request->validate([
            'student_id' => 'required|string',
            'fname' => 'required|string',
            'mname' => 'required|string',
            'lname' => 'required|string',
            'scholar_name' => 'required|string',
            'grants' => 'required|string',
            'description' => 'required|string|max:65535',
        ]);

        $grantee->update($request->all());
        return redirect()->route('admin.grantees.index')->with('success', 'Grantees updated successfully.');
    }

    public function destroy(Grantees $grantee)
    {
        $grantee->delete();
        return redirect()->route('admin.grantees.index')->with('success', 'Grantees deleted successfully.');
    }

}
