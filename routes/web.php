<?php

use App\Http\Controllers\FeedbackController;
use App\Models\UserEducation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Applicant\JobController;
use App\Http\Controllers\Admin\FeedbackController as AdminFeedbackController;
use App\Http\Controllers\Applicant\SkillController;
use App\Http\Controllers\Applicant\ResumeController;
use App\Http\Controllers\Employer\CompanyController;
use App\Http\Controllers\Employer\JobSkillController;
use App\Http\Controllers\Admin\AnnouncementController;
use App\Http\Controllers\Employer\ApplicantController;
use App\Http\Controllers\Employer\JobListingController;
use App\Http\Controllers\Applicant\AppplicantController;
use App\Http\Controllers\Applicant\ApplicationController;
use App\Http\Controllers\Employer\ConfigurationController;
use App\Http\Controllers\Applicant\JobPreferenceController;
use App\Http\Controllers\Applicant\UserEducationController;
use App\Http\Controllers\Applicant\JobPreferencesController;
use App\Http\Controllers\Applicant\WorkExperienceController;
use App\Http\Controllers\Admin\JobController as AdminJobController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Employer\ApplicantController as EmployerApplicantController;
use App\Http\Controllers\Employer\EmployerController;
use App\Http\Controllers\Employer\EmployerReportController;
use App\Http\Controllers\LandingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/job_listings', [LandingController::class, 'job_listing']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact
    ');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about  ');
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/resumes', [ResumeController::class, 'index'])->middleware(['auth', 'verified'])->name('resumes');

Route::get('/resumes/create', [ResumeController::class, 'create'])
    ->middleware(['auth', 'verified'])->name('resumes.create');

Route::post('/resumes', [ResumeController::class, 'store'])
    ->middleware(['auth', 'verified'])->name('resumes.store');

Route::get('/resumes/{resume}', [ResumeController::class, 'show']);


Route::get('/company/registration', function(){
    return view('registration');
})->name('company_registration');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('feedback', [FeedbackController::class, 'store'])->name('feedback.store');

    Route::resource('/work-experiences', WorkExperienceController::class)
        ->only(['store', 'update', 'destroy']);

    Route::resource('/skills', SkillController::class)
        ->only(['store', 'update', 'destroy']);

    Route::resource('/educations', UserEducationController::class)
        ->only(['store', 'update', 'destroy']);

    Route::put('/applicant/preference', [JobPreferenceController::class, 'store']);
});

Route::get('/employer/dashboard', [EmployerController::class, 'index'])->middleware(['auth', 'verified'])->name('EmployerDashboard');



//applicant
Route::get('/dashboard', [AppplicantController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/applicant/profile', [AppplicantController::class, 'profile'])->name('applicant_profile');
Route::post('/applicant/profile/edit', [JobPreferencesController::class, 'store']);
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::post('/applicant/{job}/appy', [ApplicationController::class, 'store']);
Route::post('/applicant/profile/add-education', [UserEducationController::class, 'store']);
Route::get('/applicant/applications', [ApplicationController::class, 'index'])->name('applicant.applications.index');
Route::post('/applicant/applications', [ApplicationController::class, 'store']);
Route::patch('/update/photo', [ AppplicantController::class, 'updateProfilePhoto']);







//employer job

Route::get('/employer/jobs', [JobListingController::class, 'index']);
Route::get('/employer/jobs/edit/{job}', [JobListingController::class, 'edit']);
Route::patch('/employer/jobs/update/{job}', [JobListingController::class, 'update']);
Route::delete('/employer/jobs/skill/delete', [JobListingController::class, 'delete']);
Route::get('/employer/applications', [EmployerApplicantController::class, 'index']);
Route::get('/employer/jobs/create', [JobListingController::class, 'create']);
Route::post('/employer/jobs/create', [JobListingController::class, 'store']);
Route::patch('/employer/applications/{application}', [ApplicantController::class, 'update']);
//company profile
Route::get('/employer/profile', [CompanyController::class, 'index']);
Route::get('/employer/profile/edit', [CompanyController::class, 'create']);
Route::post('/employer/profile/edit', [CompanyController::class, 'store']);
//config
Route::get('/employer/configurations', [ConfigurationController::class, 'index']);
Route::post('/employer/configuration/add-skill', [JobSkillController::class, 'store']);
Route::get('/jobs', [JobController::class, 'index'])->name('explore');
//report
Route::get('/employer/reports', [EmployerReportController::class, 'index']);
Route::get('/employer/announcements',[EmployerController::class, 'announcement'] );


//admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');;
Route::get('/admin/manage-users', [UserController::class, 'index']);
Route::get('/admin/manage-jobs', [AdminJobController::class, 'index']);
Route::resource('/admin/announcements', AnnouncementController::class);
Route::get('/admin/reports', [ReportController::class, 'index']);
Route::get('/admin/feedbacks', [AdminFeedbackController::class, 'index']);
require __DIR__ . '/auth.php';
