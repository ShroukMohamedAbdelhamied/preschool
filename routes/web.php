<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontpages;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('home');
});

Route::get('/main', [Frontpages::class, 'main'])->name('main');
Route::get('/about', [Frontpages::class, 'about'])->name('about');
Route::get('/class', [Frontpages::class, 'class'])->name('class');
Route::get('/page', [Frontpages::class, 'page'])->name('page');
Route::get('/contact', [Frontpages::class, 'contact'])->name('contact');
Route::get('/facilities', [Frontpages::class, 'facilities'])->name('facilities');
Route::get('/popular', [Frontpages::class, 'popular'])->name('popular');
Route::get('/teacher', [Frontpages::class, 'teacher'])->name('teacher');
Route::get('/appointment', [Frontpages::class, 'appointment'])->name('appointment');
Route::get('/testimonial', [Frontpages::class, 'testimonial'])->name('testimonial');
Route::get('/error', [Frontpages::class, 'error'])->name('error');
Route::get('/join', [Frontpages::class, 'join'])->name('join');
Route::get('/policy', [Frontpages::class, 'policy'])->name('policy');
Route::get('/term', [Frontpages::class, 'term'])->name('term');
Route::get('/Cookies', [Frontpages::class, 'Cookies'])->name('Cookies');
Route::get('/help', [Frontpages::class, 'help'])->name('help');
Route::get('/FQAs', [Frontpages::class, 'FQAs'])->name('FQAs');

// Define your 'course' route here
Route::get('/course', [Frontpages::class, 'course'])->name('course');

   Route::prefix('dashboard')->group(function () {
      Route::get('/layouts', [Frontpages::class, 'main'])->name('dashboard.layouts');
      Route::get('/course', [Frontpages::class, 'course'])->name('dashboard.course');
    Route::get('/Teachers', [DashboardController::class, 'Teachers'])->name('dashboard.teachers.index');
    Route::post('/addTeacher', [TeacherController::class, 'store'])->name('dashboard.teachers.store');
    Route::get('/addTeacher', [TeacherController::class, 'create'])->name('dashboard.teachers.create');
    Route::get('/Teachers/{id}', [TeacherController::class, 'show'])->name('dashboard.teachers.show');
    Route::get('/Teachers/{id}/edit', [TeacherController::class, 'edit'])->name('dashboard.teachers.edit');
    Route::put('/Teachers/{id}', [TeacherController::class, 'update'])->name('dashboard.teachers.update');
    Route::delete('/Teachers/{id}', [TeacherController::class, 'destroy'])->name('dashboard.teachers.destroy');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

