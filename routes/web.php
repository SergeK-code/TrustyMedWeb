<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/doctor/{id}', [App\Http\Controllers\DoctorsController::class, 'show']);
Route::get('/doctors/{spectiality}', [App\Http\Controllers\DoctorsController::class, 'speciality']);
Route::get('/doctors', [App\Http\Controllers\DoctorsController::class, 'index']);

Route::get('/doctor/{id}/appointments/{day}', [App\Http\Controllers\AppointmentsController::class, 'another_day']);
Route::get('/doctor/{id}/appointment/new', [App\Http\Controllers\AppointmentsController::class, 'new']);
Route::post('/doctor/{id}/appointment/create', [App\Http\Controllers\AppointmentsController::class,'Create']);
Route::get('/appointment/{id}/edit', [App\Http\Controllers\AppointmentsController::class, 'edit']);
Route::post('/appointment/{id}/save', [App\Http\Controllers\AppointmentsController::class, 'save']);
Route::get('/appointment/{id}/delete', [App\Http\Controllers\AppointmentsController::class, 'destroy']);
Route::get('/doctor/{id}/appointments', [App\Http\Controllers\AppointmentsController::class, 'index']);
Route::get('/my_appointments', [App\Http\Controllers\AppointmentsController::class, 'my_appointments']);

Route::get('/profile/{id}', [App\Http\Controllers\HomeController::class, 'profile']);
Route::post('/profile/{id}/save', [App\Http\Controllers\HomeController::class, 'profile_save']);

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
