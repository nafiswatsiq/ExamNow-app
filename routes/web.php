<?php

use App\Http\Controllers\Dashboard\StudentController;
use App\Http\Controllers\Dashboard\TeacherController;
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

Route::prefix('student')->group(function () {
    Route::controller(StudentController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        // Route::get('/register', 'register')->name('register');
    });
});

Route::prefix('teacher')->group(function () {
    Route::controller(TeacherController::class)->group(function () {
        Route::get('/', 'index')->name('teacher.home');
        Route::get('/class', 'coridorClass')->name('teacher.coridor-class');
        Route::get('/class/{class}', 'class')->name('class');
        Route::get('/exam', 'exam')->name('teacher.exam');
        Route::get('/teacher', 'teacher')->name('teacher.teacher');
        Route::get('/create-question', 'createQuestion')->name('teacher.create-question');
        Route::get('/create-question-detail', 'createQuestionDetail')->name('teacher.create-question-detail');
    });
});
