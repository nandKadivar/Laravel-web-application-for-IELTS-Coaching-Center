<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

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
});

Auth::routes();

Route::get('/dashboard',function () {
    return view('student.dashboard.index');
});

Route::get('/mock-test/writing-task-1',function () {
    return view('student.mocktest.writingtask1');
});