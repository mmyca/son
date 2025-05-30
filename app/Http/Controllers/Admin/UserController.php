<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(10);
        return view('admin.account.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('admin.account.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('account.index')->with('success', 'User admin created successfully');
    }

    public function edit(User $user)
    {
        return view('admin.account.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user->update($request->only(['name', 'email']));
        return redirect()->route('account.index')->with('success', 'User admin updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('account.index')->with('success', 'User admin deleted successfully.');
    }
}
