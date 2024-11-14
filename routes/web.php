<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Employer\CompanyController;
use App\Http\Controllers\Employer\JobListingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/employer/dashboard', function () {
    return view('employer/index');
})->middleware(['auth', 'verified'])->name('employer');
//employer job


Route::get('/employer/jobs', [JobListingController::class, 'index']);
Route::get('/employer/jobs/create', [JobListingController::class, 'create']);

Route::get('/employer/profile', [CompanyController::class, 'index']);


require __DIR__ . '/auth.php';
