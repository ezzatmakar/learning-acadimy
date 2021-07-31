<?php
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Front\CourseController;

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
Route::get('/', [HomepageController::class, 'index'])->name('front.homepage');

Route::get('/cat/{id}', [CourseController::class, 'cat'])->name('front.cat');
Route::get('/cat/{id}/course/{course_id}', [CourseController::class, 'show'])->name('front.show');
