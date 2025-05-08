<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    //
    public function index() {
        $users = User::orderBy('id', 'ASC')->paginate(10);
        return view('admin.users.index', [
            'users' => $users
        ]);
    }
}
