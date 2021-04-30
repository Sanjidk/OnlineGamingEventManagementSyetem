<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ManagersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ParticipatorsController;
use App\Http\Controllers\Frontend\AdminController as FrontendAdmin ;

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


//All registered
Route::get('all/registered/person',[AdminController::class,'allregistered'])->name('all.registered');

//registered user delete
Route::get('all/registered/delete/{id}',[AdminController::class,'allregistereddelete'])->name('allregistered.delete');

//admin view all post
Route::get('view/all/post',[AdminController::class,'viewallpost'])->name('all.post');

//admin view all post delete

Route::get('all/post/delete/{id}',[AdminController::class,'allpostdelete'])->name('allrpost.delete');


//All event registered
Route::get('all/event/reg',[AdminController::class,'alleventreg'])->name('all.eventreg');

//event by managers delete by admin
Route::get('all/event/delete/{id}',[AdminController::class,'alleventregdelete'])->name('alleventreg.delete');



//All participator registered
Route::get('all/participate/reg',[AdminController::class,'allparicipate'])->name('all.particireg');

//event reg by participator delete by admin
Route::get('all/participate/delete/{id}',[AdminController::class,'allparticipatedelete'])->name('allparticipate.delete');






//admin logout
Route::get('admin/logout', [UserController::class, 'adminlogout'])->name('admin.logout');


//Registration

Route::get('registration/form', [UserController::class, 'regform'])->name('reg.form');
Route::post('registration/store', [UserController::class, 'register'])->name('register');



// user Login

Route::get('login/form',[UserController::class,'loginForm'])->name('login.form');

//Login Authentication

Route::post('login/process',[UserController::class,'userLogin'])->name('user.login');
Route::get('/logout',[UserController::class,'userLogout'])->name('user.logout');







//Manager create event

Route::get('event/form', [ManagersController::class, 'eventform'])->name('event.form');
Route::post('event/store', [ManagersController::class, 'event'])->name('event');




// Participator Event Registration

Route::get('participator/form', [ParticipatorsController::class, 'partireg'])->name('joinenevt.form');
Route::post('participator/store', [ParticipatorsController::class, 'joineve'])->name('parti.reg');


