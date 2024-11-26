<?php

use App\Http\Controllers\Applicant\AppplicantController;
use App\Http\Controllers\Applicant\JobController;
use App\Http\Controllers\Applicant\JobPreferencesController;
use App\Http\Controllers\Employer\CompanyController;
use App\Http\Controllers\Employer\ConfigurationController;
use App\Http\Controllers\Employer\JobListingController;
use App\Http\Controllers\Employer\JobSkillController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/company/registration', function(){
    return view('registration');
})->name('company_registration');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/employer/dashboard', function () {
    return view('employer/index');
})->middleware(['auth', 'verified'])->name('EmployerDashboard');

//applicant
Route::get('/applicant/profile', [AppplicantController::class, 'index'])->name('applicant_profile'); 
Route::post('/applicant/profile/edit', [JobPreferencesController::class, 'store']);

Route::get('/jobs/{job}', [JobController::class, 'show']);




//employer job

Route::get('/employer/jobs', [JobListingController::class, 'index']);
Route::get('/employer/jobs/create', [JobListingController::class, 'create']);

Route::post('/employer/jobs/create', [JobListingController::class, 'store']);

//company profile
Route::get('/employer/profile', [CompanyController::class, 'index']);
Route::get('/employer/profile/edit', [CompanyController::class, 'create']);
Route::post('/employer/profile/edit', [CompanyController::class, 'store']);

//config
Route::get('/employer/configurations', [ConfigurationController::class, 'index']);
Route::post('/employer/configuration/add-skill', [JobSkillController::class, 'store']);

Route::get('/jobs', [JobController::class, 'index'])->name('explore');

require __DIR__ . '/auth.php';
