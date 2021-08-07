<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Front\MessageController;
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
Route::namespace('Front')->group(function (){
    Route::get('/', [HomepageController::class, 'index'])->name('front.homepage');
    Route::get('/cat/{id}', [CourseController::class, 'cat'])->name('front.cat');
    Route::get('/cat/{id}/course/{course_id}', [CourseController::class, 'show'])->name('front.show');
    Route::get('/contact', [ContactController::class, 'index'])->name('front.contact');
    Route::post('/message/newsletter', [MessageController::class, 'newsletter'])->name('front.message.newsletter');
    Route::post('/message/contact', [MessageController::class, 'contactUsForm'])->name('front.message.contact');
	Route::post('/message/enroll', [MessageController::class, 'enroll'])->name('front.message.enroll');
});

Route::namespace('Admin')->prefix('dashboard')->group(function (){
	Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
	Route::post('/login', [AuthController::class, 'doLogin'])->name('admin.doLogin');


	Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
	Route::get('/', [HomeController::class, 'index'])->name('admin.homepage');
});
