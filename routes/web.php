<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ProviderMediaController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProviderController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    $provider = Provider::with('media')->find(1);
//    return view('home', compact('provider'));
//})->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::get('/subject/{subjectName}', [CourseController::class, 'showCoursesBySubject'])->name('course.subject');
Route::get('/courses', [CourseController::class, 'showAllCourses'])->name('courses');
//Route::get('/courses', [CourseController::class, 'showCoursesBySubject'])->name('courses');
Route::put('/providers/{id}', [ProviderController::class, 'update'])->name('providers.update');
Route::get('/media/{id}/edit', [ProviderMediaController::class, 'edit'])->name('media.edit');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function () {
    // Handle form submission
    return redirect()->route('contact')->with('success', 'Your message has been sent!');
})->name('contact.submit');
