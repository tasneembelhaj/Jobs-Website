<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\EmployerController;
use App\Http\Middleware\CheckRole;


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    if (auth()->user()->role === 'applicant') {
        return redirect()->route('applicant.dashboard');
    }

    if (auth()->user()->role === 'employer') {
        return redirect()->route('employer.dashboard');
    }

    abort(403);
})->middleware('auth')->name('dashboard');

/*
|--------------------------------------------------------------------------
| Applicant Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', CheckRole::class . ':applicant'])->group(function () {

    Route::get('/applicant/dashboard', [ApplicantController::class, 'dashboard'])
        ->name('applicant.dashboard');

    Route::get('/applicant/jobs', [ApplicantController::class, 'jobs'])
        ->name('applicant.jobs');

    Route::get('/applicant/jobs/{id}', [ApplicantController::class, 'jobDetails'])
        ->name('applicant.jobDetails');

    // ✅ هذا هو التعديل المهم
    Route::post('/applicant/jobs/{id}/apply', [ApplicantController::class, 'applyJob'])
        ->name('applications.store');
});

/*
|--------------------------------------------------------------------------
| Employer Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', CheckRole::class . ':employer'])->group(function () {

    Route::get('/employer/dashboard', [EmployerController::class, 'dashboard'])
        ->name('employer.dashboard');

    Route::get('/employer/jobs', [EmployerController::class, 'jobs'])
        ->name('employer.jobs');

    Route::get('/employer/jobs/create', [EmployerController::class, 'createJob'])
        ->name('employer.createJob');

    Route::post('/employer/jobs/store', [EmployerController::class, 'storeJob'])
        ->name('employer.storeJob');

    Route::get('/employer/applications', [EmployerController::class, 'applications'])
        ->name('employer.applications');
});

/*
|--------------------------------------------------------------------------
| Public
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Profile (Breeze)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
