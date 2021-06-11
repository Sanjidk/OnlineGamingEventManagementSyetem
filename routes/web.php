<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ManagersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ParticipatorsController;
use App\Http\Controllers\PaymentController;


use App\Http\Controllers\frontend\ManagersController as FrontendManagers ;



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
    return view('frontend.Others.home');
})->name('home');


// admin login
Route::get('/adminboard', function ()
{
    return view('backend.Admin.dashboard');
})->name('mastered');

////
//Route::get('/minister', function ()
//{
//    return view('frontend.Others.main');
//})->name('muster');


//admin login

Route::get('admin/login/form',[UserController::class,'adminloginform'])->name('adminlogin.form');
Route::post('admin/login/done',[UserController::class,'adminloginprocess'])->name('adminlogin.process');


//All backend blog
Route::get('all/blog/list',[AdminController::class,'blogg'])->name('all.blogg');

//backend blog delete
Route::get('all/blog/delete/{id}',[AdminController::class,'blogdelete'])->name('blogg.delete');




Route::group(['middleware' => 'auth'],function(){

// after log in user
Route::get('/userform', function ()
{
    return view('frontend.Others.main');
})->name('frontend.master');





///Backend route group

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








//Manager create event

Route::get('event/form', [ManagersController::class, 'eventform'])->name('event.form');
Route::post('event/store', [ManagersController::class, 'event'])->name('event');

// event showlist

Route::get('event/list/{id}',[FrontendManagers::class,'showList'])->name('event.list');

// event delete

Route::get('event/delete/{id}',[ManagersController::class,'eventdelete'])->name('event.delete');










//Blog

Route::get('blog/form', [BlogController::class, 'blog'])->name('blog.form');
Route::post('blog/store', [BlogController::class, 'saveblog'])->name('saving');


// Blog list

Route::get('blog/list',[BlogController::class,'showList'])->name('blog.list');


// Blog List delete

Route::get('blog/delete/{id}',[BlogController::class,'deleteBlog'])->name('blog.delete');



// admin income list

    Route::get('income/list',[AdminController::class,'income'])->name('income.list');


// income List delete

    Route::get('income/delete/{id}',[AdminController::class,'incomedelete'])->name('income.delete');




});





//admin logout
Route::get('admin/logout', [UserController::class, 'adminlogout'])->name('admin.logout');


//Registration

Route::get('registration/form', [UserController::class, 'regform'])->name('reg.form');
Route::post('registration/store', [UserController::class, 'register'])->name('register');



// user Login

Route::get('login/form',[UserController::class,'loginForm'])->name('login.form');

//Login Authentication

Route::post('/login/process',[UserController::class,'userLogin'])->name('user.login');
Route::get('/logout',[UserController::class,'userLogout'])->name('user.logout');








//Participator payment for event

Route::get('payments/form/{id}', [PaymentController::class, 'payments'])->name('payment.form');
Route::post('/user/payment',[PaymentController::class,'userPayment'])->name('user.payment.new');



Route::get('user/payment/requests',[PaymentController::class,'userPaymentRequests'])->name('user.payment.requests');



Route::get('all/event/view',[FrontendManagers::class,'eventView'])->name('all.event.view');



Route::get('all/req/view',[AdminController::class,'managerRequests'])->name('all.req.view');


Route::get('/approve/all/request/{id}',[AdminController::class,'approverequest'])->name('approve.request');
Route::get('/reject/all/request/{id}',[AdminController::class,'rejectrequest'])->name('reject.request');






Route::get('all/req/viewlist',[FrontendManagers::class,'participatorRequests'])->name('all.req.viewlist');


Route::get('/approved/all/request/{id}',[FrontendManagers::class,'approvedrequest'])->name('approved.request');
Route::get('/rejected/all/request/{id}',[FrontendManagers::class,'rejectedrequest'])->name('rejected.request');



Route::get('all/participator/list',[FrontendManagers::class,'participatorlist'])->name('all.participate.list');


Route::get('all/usersslist',[UserController::class,'alluserlist'])->name('all.userlist');
