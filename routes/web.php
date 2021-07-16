<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/index', function () {
    return view('welcome');
});

Route::get('/home/jobs', function () {
    return view('jobs');
});

Route::get('/home/job-details', function(){
    return view('job-details');
});

Route::get('/home/about-us', function() {
    return view('about-us');
});

Route::get('/home/team', function() {
    return view('team');
});

Route::get('/home/blog', function() {
    return view('blog');
});

Route::get('/home/blog-details', function() {
    return view('blog-details');
});

Route::get('/home/terms', function() {
    return view('terms');
});

Route::get('home/contact', function() {
    return view('contact');
});

Route::get('home/testimonials', function() {
    return view('testimonials');
});

Route::get('home/seeker', function() {
    return view('seeker_dashboard');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/feedback', [App\Http\Controllers\FeedbackController::class, 'index'])->name('feedback');
Route::get('/recruit_dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('recruit_dashboard');
Route::get('/seeker_dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('seeker_dashboard');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
