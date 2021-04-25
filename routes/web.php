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
// home blade
Route::get('/', function ()
{
    return view('frontend.home');
})->name('home');



// after log in user

Route::get('/master', function ()
{
    return view('frontend.master');

})->name('frontend.master');


// admin login
Route::get('/admin', function ()
{
    return view('master');

})->name('master');


///Backend route group
//admin login

Route::get('admin/login/form',[UserController::class,'adminloginform'])->name('adminlogin.form');
Route::post('admin/login/process',[UserController::class,'adminloginprocess'])->name('adminlogin.process');



//admin logout

    Route::get('admin/logout', [UserController::class, 'adminlogout'])->name('admin.logout');




//Registration

    Route::get('registration/form', [UserController::class, 'regform'])->name('reg.form');
    Route::post('registration/store', [UserController::class, 'register'])->name('register');




//Login

Route::get('login/form',[UserController::class,'loginForm'])->name('login.form');

//Login Authentication

Route::post('login/process',[UserController::class,'userLogin'])->name('user.login');

Route::get('/logout',[UserController::class,'userLogout'])->name('user.logout');




//Profile view

Route::get('/view/profile',[UserController::class,'viewProfile'])->name('view.profile');


