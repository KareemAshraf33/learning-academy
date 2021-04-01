<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Front\CoursesController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\MessageController;
use App\Http\Controllers\Admin\AdminHomeController;
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

Route::get('/',[HomepageController::class,'index'])->name('front.homepage');

Route::get('category/{id}',[CoursesController::class,'category'])->name('front.courseCategory');

Route::get('category/{id}/course/{courseid}',[CoursesController::class,'show'])->name('front.show');


Route::get('/contact',[ContactController::class,'index'])->name('front.contact');

Route::post('/message/newsletter',[MessageController::class,'newsletter'])->name('front.message.newsletter');

Route::post('/message/contact',[MessageController::class,'contact'])->name('front.message.contact');


Route::post('/message/enroll',[MessageController::class,'enroll'])->name('front.message.enroll');

//Admin dashboard
Route::get('/dashboard',[AdminHomeController::class,'index'])->name('admin.home');
