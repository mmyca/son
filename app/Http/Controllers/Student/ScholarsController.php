<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Scholars;
use Illuminate\Http\Request;

class ScholarsController extends Controller
{
    public function index()
    {
        $scholars = Scholars::all();
        return view('student.scholars.index', compact('scholars'));
    }

    public function show($id)
    {
        $scholar = Scholars::findOrFail($id);
        return view('student.scholars.view', compact('scholar'));
    }
}
