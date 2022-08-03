<?php

use App\Http\Controllers\Exam\ExamController;
use App\Http\Controllers\PageController\AuthController;
use App\Http\Controllers\PageController\LandingController;
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

// Route::get('/login', function () {
//     return view('auth.login');
// });
// Route::get('/register', function () {
//     return view('auth.login');
// });

Route::get('/', [LandingController::class, 'home'])->name('home');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
});


Route::prefix('exam')->group(function () {
    Route::controller(ExamController::class)->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/ujian', 'exam')->name('exam');
        Route::get('/ujicoba', 'ujicoba')->name('ujicoba');
        Route::get('/selesai', 'finish')->name('finish');
    });
});