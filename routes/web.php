<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CatController;
use App\Http\Controllers\Admin\TrainerController;
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

// All Front routes
Route::namespace('Front')->group(function () {
    Route::get('/', [HomepageController::class, 'index'])->name('front.homepage');
    Route::get('/cat/{id}', [CourseController::class, 'cat'])->name('front.cat');
    Route::get('/cat/{id}/course/{course_id}', [CourseController::class, 'show'])->name('front.show');
    Route::get('/contact', [ContactController::class, 'index'])->name('front.contact');
    Route::post('/message/newsletter', [MessageController::class, 'newsletter'])->name('front.message.newsletter');
    Route::post('/message/contact', [MessageController::class, 'contactUsForm'])->name('front.message.contact');
    Route::post('/message/enroll', [MessageController::class, 'enroll'])->name('front.message.enroll');
});

// dashboard routes
Route::namespace('Admin')->prefix('dashboard')->group(function () {
    // dashboard routes `login and logout routes`
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'doLogin'])->name('admin.doLogin');

    // All Admin dashboard routes
    Route::middleware('adminAuth:admin')->group(function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
        Route::get('/', [HomeController::class, 'index'])->name('admin.homepage');

        Route::prefix('cats')->group(function () {
            Route::get('/', [CatController::class, 'index'])->name('admin.cats.index');
            Route::get('/cat/{id}', [CatController::class, 'show'])->name('admin.cats.show');
            Route::get('/edit/{id}', [CatController::class, 'edit'])->name('admin.cats.edit');
            Route::post('/update', [CatController::class, 'update'])->name('admin.cats.update');
            Route::get('/create', [CatController::class, 'create'])->name('admin.cats.create');
            Route::post('/store', [CatController::class, 'store'])->name('admin.cats.store');
            Route::get('/destroy/{id}', [CatController::class, 'destroy'])->name('admin.cats.destroy');
        });

        Route::prefix('trainers')->group(function () {
            Route::get('/', [TrainerController::class, 'index'])->name('admin.trainers.index');
            Route::get('/trainer/{id}', [TrainerController::class, 'show'])->name('admin.trainers.show');
            Route::get('/edit/{id}', [TrainerController::class, 'edit'])->name('admin.trainers.edit');
            Route::post('/update', [TrainerController::class, 'update'])->name('admin.trainers.update');
            Route::get('/create', [TrainerController::class, 'create'])->name('admin.trainers.create');
            Route::post('/store', [TrainerController::class, 'store'])->name('admin.trainers.store');
            Route::get('/destroy/{id}', [TrainerController::class, 'destroy'])->name('admin.trainers.destroy');
        });
    });
});
