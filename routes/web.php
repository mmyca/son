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
// Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
//     Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
//     Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
//     Route::get('/scholars', [App\Http\Controllers\Admin\ScholarController::class, 'index'])->name('scholars');
//     Route::get('/grantees', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('grantees');
//     Route::get('/account', [App\Http\Controllers\Student\UserController::class, 'index'])->name('account');
//     Route::get('/report', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('report');
// });

Route::middleware('auth')->prefix('admin')->group(function() {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboards');
    Route::resource('admin/dashboard', App\Http\Controllers\Admin\AdminController::class);
    Route::get('/account', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('accounts');
    Route::resource('admin/account', App\Http\Controllers\Admin\UserController::class);
    Route::get('/scholars', [App\Http\Controllers\Admin\ScholarController::class, 'index'])->name('scholars');
    Route::resource('admin/scholars', App\Http\Controllers\Admin\ScholarController::class);
    Route::delete('/scholars/{scholar}', [App\Http\Controllers\Admin\ScholarController::class, 'destroy'])->name('scholars.destroy');
    Route::get('/grantees', [App\Http\Controllers\Admin\GranteesController::class, 'index'])->name('grantees');
    Route::resource('admin/grantees', App\Http\Controllers\Admin\GranteesController::class);
    Route::delete('/grantees/{grantee}', [App\Http\Controllers\Admin\ScholarController::class, 'destroy'])->name('grantees.destroy');
    Route::get('/report', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('report');
});


//user routes
// Route::group(['prefix' => 'user', 'middleware' => ['user']], function () {
//     Route::get('/', [App\Http\Controllers\Student\StudentController::class, 'index'])->name('index');
//     Route::get('/dashboard', [App\Http\Controllers\Student\StudentController::class, 'index'])->name('dashboard');
//     Route::get('/account', [App\Http\Controllers\Student\AccountController::class, 'index'])->name('account');
//     Route::get('/grant', [App\Http\Controllers\Student\StudentController::class, 'index'])->name('grant');
//     Route::get('/scholar', [App\Http\Controllers\Student\StudentController::class, 'index'])->name('scholar');
// });

Route::middleware('auth')->prefix('user')->group(function() {
    Route::get('/', [App\Http\Controllers\Student\StudentController::class, 'index'])->name('index');
    Route::get('/dashboard', [App\Http\Controllers\Student\StudentController::class, 'index'])->name('dashboard');
    Route::resource('user/dashboard', App\Http\Controllers\Student\StudentController::class);
    Route::get('/account', [App\Http\Controllers\Student\UserController::class, 'index'])->name('account');
    Route::resource('user/account', App\Http\Controllers\Student\UserController::class);
    Route::get('/scholars', [App\Http\Controllers\Student\ScholarsController::class, 'index'])->name('scholar');
    Route::resource('user/scholars', App\Http\Controllers\Student\ScholarsController::class);
    Route::delete('/scholars/{scholar}', [App\Http\Controllers\Student\ScholarController::class, 'destroy'])->name('scholars.destroy');
    Route::get('/grantees', [App\Http\Controllers\Student\GrantsController::class, 'index'])->name('grant');
    Route::resource('user/grantees', App\Http\Controllers\Student\GrantsController::class);
    Route::delete('/grantees/{grantee}', [App\Http\Controllers\Student\GrantsController::class, 'destroy'])->name('grantees.destroy');
});