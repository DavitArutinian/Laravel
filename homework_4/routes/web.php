<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ProfilePictureController;

Route::get('/', function () {
    return view('welcome');
});
//1
Route::get('/register', [RegistrationController::class, 'create'])->name('register');
Route::post('/register', [RegistrationController::class, 'store']);
//2
Route::get('/contact', [ContactFormController::class, 'create'])->name('contact');
Route::post('/contact', [ContactFormController::class, 'store']);
//3
Route::get('/upload', [ProfilePictureController::class, 'create'])->name('upload-profile-picture');
Route::post('/upload', [ProfilePictureController::class, 'store']);

