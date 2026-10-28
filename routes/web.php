<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/who-we-are', function () { return view('who-we-are');})->name('who-we-are');
Route::get('/letter-from-founder', function () { return view('letter-from-founder');})->name('letter-from-founder');

// Route::get('/what-we-do', function () { return view('what-we-do');})->name('what-we-do');
Route::get('/what-we-do', [ProjectController::class, 'index'])->name('what-we-do');
Route::get('/project-show/{project:slug}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/project-list', function () { return view('project-list');})->name('project-list');
Route::get('/development-plan', function () { return view('development-plan');})->name('development-plan');
Route::get('/testimonials', function () { return view('testimonials');})->name('testimonials');
Route::get('/faq', function () { return view('faq');})->name('faq');
Route::get('/contact-us', function () { return view('contact-us');})->name('contact-us');
Route::get('/donate', function () { return view('donate');})->name('donate');

// Route::get('/', [HomeController::class, 'index'])->name('index');
