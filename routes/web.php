<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('master');
});




//Registration

Route::get('registration/form',[UserController::class,'regform'])->name('reg.form');
Route::post('registration/store',[UserController::class,'regStore'])->name('reg.store');


//Login

Route::get('login/form',[UserController::class,'loginForm'])->name('login.form');



//Login Authentication

Route::post('login/process',[UserController::class,'userLogin'])->name('user.login');
Route::get('/logout',[UserController::class,'userLogout'])->name('user.logout');
