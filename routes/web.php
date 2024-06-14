<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontpages;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
   return view('home');
});
Route::get('/', function () {
   return view('main');
});

Route::get('/',[Frontpages::class,'home'])->name('home');
Route::get('/about',[Frontpages::class,'about'])->name('about');
Route::get('/class',[Frontpages::class,'class'])->name('class');
Route::get('/page',[Frontpages::class,'page'])->name('page');
Route::get('/contact',[Frontpages::class,'contact'])->name('contact');
Route::get('/facilities',[Frontpages::class,'facilities'])->name('facilities');
Route::get('/popular',[Frontpages::class,'popular'])->name('popular');
Route::get('/teacher',[Frontpages::class,'teacher'])->name('teacher');
Route::get('/appointment',[Frontpages::class,'appointment'])->name('appointment');
Route::get('/testimonial',[Frontpages::class,'testimonial'])->name('testimonial');
Route::get('/error',[Frontpages::class,'error'])->name('error');
Route::get('/join',[Frontpages::class,'join'])->name('join');
Route::get('/policy',[Frontpages::class,'policy'])->name('policy');
Route::get('/term',[Frontpages::class,'term'])->name('term');
Route::get('/Cookies',[Frontpages::class,'Cookies'])->name('Cookies');
Route::get('/help',[Frontpages::class,'help'])->name('help');
Route::get('/FQAs',[Frontpages::class,'FQAs'])->name('FQAs');

Route::prefix('dashboard')->group(function () {
Route::get('/layouts', [Frontpages::class, 'main'])->name('main');
});




