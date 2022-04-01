<?php

use App\Http\Controllers\Admin\Auth\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('test',[TestController::class,'index'])->name('t');
Route::get('users/name',[UserController::class,'index'])->name('user.name');
Route::get('users/all',[UserController::class,'all']);
Route::get('users/find',[UserController::class,'find']);
Route::post('users/find',[UserController::class,'get']);

Route::get('/url',function(){
    dd(url('admin/login/account'));
});


// read about
// route groups
// csrf
