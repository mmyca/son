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
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
    Route::get('/scholars', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('scholars');
    Route::get('/grantees', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('grantees');
    Route::get('/report', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('report');
});


//user routes
Route::group(['prefix' => 'user', 'middleware' => ['user']], function () {
    Route::get('/', [App\Http\Controllers\Student\StudentController::class, 'index'])->name('index');
    Route::get('/dashboard', [App\Http\Controllers\Student\StudentController::class, 'index'])->name('dashboard');
    Route::get('/account', [App\Http\Controllers\Student\StudentController::class, 'index'])->name('account');
    Route::get('/grant', [App\Http\Controllers\Student\StudentController::class, 'index'])->name('grant');
    Route::get('/scholar', [App\Http\Controllers\Student\StudentController::class, 'index'])->name('scholar');
});