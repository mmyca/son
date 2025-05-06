<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin routes
Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
    Route::get('/sholars', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('scholars');
    Route::resource('admin/scholars', ScholarController::class);
});


//user routes
Route::group(['prefix' => 'user', 'middleware' => ['user']], function () {
    Route::get('/', [App\Http\Controllers\Student\StudentController::class, 'index'])->name('user.index');
});