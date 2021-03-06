<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ProjectController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('language/{language}', function ($language) {
    Session()->put('locale', $language);

    return redirect()->back();
})->name('language');

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

/* Account */
Route::get('profile/account', [AccountController::class, 'index'])
    ->name('account')
    ->middleware('auth');
Route::get('{user}', [AccountController::class, 'show'])
    ->name('account.show')
    ->middleware('auth');
Route::post('project', [ProjectController::class, 'store'])
    ->name('project.store')
    ->middleware('auth');

/* Education */
Route::post('education', [EducationController::class, 'store'])
    ->name('education.store')
    ->middleware('auth');

/* Experience */
Route::post('experience', [ExperienceController::class, 'store'])
    ->name('experience.store')
    ->middleware('auth');

/* Jobs */
Route::get('jobs/search', [JobsController::class, 'search'])
    ->name('job.search')
    ->middleware('auth');
