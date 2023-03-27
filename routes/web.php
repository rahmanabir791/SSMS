<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Front\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('/');
Route::get('/course-details/{id}', [HomeController::class, 'courseDetails'])->name('course-details');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'home'])->name('dashboard');

//    custom user routes
    Route::resource('users', UserController::class);
    Route::get('/change-user-status/{id}', [UserController::class, 'changeStatus'])->name('users.change-status');

    Route::get('/edit-profile', [AdminController::class, 'editProfile'])->name('edit-profile');
    Route::post('/update-profile', [AdminController::class, 'updateProfile'])->name('update-profile');

    Route::resource('courses', CourseController::class);
    Route::get('course/change-status/{id}', [CourseController::class, 'changeStatus'])->name('courses.change-status');
});
