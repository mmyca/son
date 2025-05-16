<?php

namespace App\Http\Controllers\admin;

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
            'description' => 'required|string',
        ]);

        Grantees::create($request->all());
        return redirect()->route('grantees.index')->with('success', 'Grantee created successfully.');
    }

    public function edit(Grantees $Grantees)
    {
        return view('admin.grantees.edit', compact('Grantees'));
    }

    public function update(Request $request, Grantees $Grantees)
    {
        $request->validate([
            'student_id' => 'required|string',
            'fname' => 'required|string',
            'mname' => 'required|string',
            'lname' => 'required|string',
            'scholar_name' => 'required|string',
            'description' => 'required|string',
        ]);

        $Grantees->update($request->all());
        return redirect()->route('grantees.index')->with('success', 'Gratee updated successfully.');
    }

    public function destroy(Grantees $Grantees)
    {
        $Grantees->delete();
        return redirect()->route('grantees.index')->with('success', 'Grantee deleted successfully.');
    }
}
