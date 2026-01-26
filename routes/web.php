<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('/projects', ProjectController::class);
    Route::resource('/skills', SkillController::class);
    Route::resource('/experiences', ExperienceController::class);
    Route::resource('/testimonials', TestimonialController::class);
    Route::resource('/contacts', ContactController::class);
    Route::resource('/sites', SettingController::class);
});

require __DIR__.'/settings.php';
