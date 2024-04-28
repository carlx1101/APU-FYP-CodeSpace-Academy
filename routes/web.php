<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified', ])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware(['auth', 'user-access:student'])->group(function () {

    Route::get('/student/dashboard', [HomeController::class, 'studentDashboard'])->name('stuednt.dashboard');
});


Route::middleware(['auth', 'user-access:tutor'])->group(function () {

    Route::get('/tutor/dashboard', [HomeController::class, 'tutorDashboard'])->name('tutor.dashboard');
});


Route::middleware(['auth', 'user-access:administrator'])->group(function () {

    Route::get('/administrator/dashboard', [HomeController::class, 'administratorDashboard'])->name('manager.dashboard');
});
