<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Redirect::route('login');
})->name('student.login');

Auth::routes();

Route::get('/dashboard',function () {
    return view('student.dashboard.index');
})->name('dashboard')->middleware('auth');

Route::get('/logout',[LoginController::class, 'logout'])->name('student.logout')->middleware('auth');

Route::get('/mock-test/writing-task-1',function () {
    return view('student.mocktest.writingtask1');
})->middleware('auth');

Route::get('/mock-test/listening-task',function () {
    return view('student.mocktest.listeningtask');
})->middleware('auth');

Route::get('/mock-test/reading-task',function () {
    return view('student.mocktest.readingtask');
})->middleware('auth');

Route::get('admin/home',[HomeController::class,'index'])->name('admin.home')->middleware('is_admin');