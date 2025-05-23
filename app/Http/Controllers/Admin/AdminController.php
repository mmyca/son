<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index() {
        // $user = $auth()->user();
        $totalStudents = User::where('role_id', 'user')->count();
        return view('admin.dashboard.index', compact('totalStudents'));
    }
}
