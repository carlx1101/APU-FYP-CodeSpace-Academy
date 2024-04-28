<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Administrator
use App\Http\Controllers\Administrator\CategoryController as AdministratorCategoryController;



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


Route::middleware(['auth', 'user-access:student'])->prefix('student')->group(function () {

    Route::get('/student/dashboard', [HomeController::class, 'studentDashboard'])->name('stuednt.dashboard');
});


Route::middleware(['auth', 'user-access:tutor'])->prefix('tutor')->group(function () {

    Route::get('/tutor/dashboard', [HomeController::class, 'tutorDashboard'])->name('tutor.dashboard');
});


Route::middleware(['auth', 'user-access:administrator'])->prefix('administrator')->group(function () {

    Route::get('/administrator/dashboard', [HomeController::class, 'administratorDashboard'])->name('manager.dashboard');
    Route::resource('categories', AdministratorCategoryController::class);

});
