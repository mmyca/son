<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Scholars;
use Illuminate\Http\Request;

class ScholarController extends Controller
{
    public function index()
    {
        $scholars = Scholars::all();
        return view('admin.scholars.index', compact('scholars'));
    }

    public function create()
    {
        return view('admin.scholars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            's_name' => 'required|string',
            'grants' => 'required|string',
            'short_des' => 'required|string|max:65535',
        ]);

        Scholars::create($request->all());
        return redirect()->route('scholars.index')->with('success', 'Scholarship created successfully.');
    }

    public function edit(Scholars $scholar)
    {
        return view('admin.scholars.edit', compact('scholar'));
    }

    public function update(Request $request, Scholars $scholar)
    {
        $request->validate([
            's_name' => 'required|string',
            'grants' => 'required|string',
            'short_des' => 'required|string|max:65535',
        ]);

        $scholar->update($request->all());
        return redirect()->route('scholars.index')->with('success', 'Scholarship updated successfully.');
    }

     public function show($id)
    {
        $scholar = Scholars::findOrFail($id);
        return view('admin.scholars.view', compact('scholar'));
    }

    public function destroy(Scholars $scholar)
    {
        $scholar->delete();
        return redirect()->route('scholars.index')->with('success', 'Scholarship deleted successfully.');
    }

}
