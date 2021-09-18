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

Route::get('/logout',[LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/mock-test/writing-task-1',function () {
    return view('student.mocktest.writingtask1');
})->middleware('auth');

Route::get('/mock-test/listening-task',function () {
    return view('student.mocktest.listeningtask');
})->middleware('auth');

Route::get('/mock-test/reading-task',function () {
    return view('student.mocktest.readingtask');
})->middleware('auth');

Route::get('admin/dashboard',[HomeController::class,'index'])->name('admin.home')->middleware('is_admin');

Route::get('admin/mock-test/create-listening-test',function(){
    return view('admin.mocktest.create.listening.index');
})->name('mocktest.create.listening')->middleware('auth')->middleware('is_admin');

Route::get('admin/mock-test/create-reading-test',function(){
    return view('admin.mocktest.create.reading.index');
})->name('mocktest.create.reading')->middleware('auth')->middleware('is_admin');

Route::get('admin/mock-test/create-writing-test',function(){
    return view('admin.mocktest.create.writing.index');
})->name('mocktest.create.writing')->middleware('auth')->middleware('is_admin');

Route::get('admin/classes',function(){
    return view('admin.pages.classes');
})->name('admin.classes')->middleware('auth')->middleware('is_admin');

// Route::get('admin/dashboard', function(){
//     return view('admin.index');
// });