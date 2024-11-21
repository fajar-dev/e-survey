<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComprehensionSurveyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SatisfactionSurveyController;
use App\Http\Controllers\SurveyController;

Route::get('/', [MainController::class, 'index'])->name('home');

Route::prefix('/survey')->group(function () {
    Route::get('/survei-kepuasan-layanan', [SatisfactionSurveyController::class, 'index'])->name('satisfaction-survey');
    Route::post('/survei-kepuasan-layanan', [SatisfactionSurveyController::class, 'store'])->name('satisfaction-survey.store');
    Route::get('/survei-pemahaman-panduan', [ComprehensionSurveyController::class, 'index'])->name('comprehension-survey');
    Route::post('/survei-pemahaman-panduan', [ComprehensionSurveyController::class, 'store'])->name('comprehension-survey.store');
});

Route::prefix('/auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');
    Route::get('/forgot-password', [AuthController::class, 'forgot'])->name('forgot');
    Route::post('/forgot-password', [AuthController::class, 'forgotSubmit'])->name('forgot.submit');
    Route::get('/forget/{token}/reset', [AuthController::class, 'reset'])->name('reset');
    Route::post('/forget/{token}/reset', [AuthController::class, 'resetSubmit'])->name('reset.submit');
})->middleware(['guest']);

Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth']);

Route::prefix('/respondent')->group(function () {
    Route::get('/survei-pemahaman-panduan', [ComprehensionSurveyController::class, 'read'])->name('comprehension-survey.read');
    Route::get('/survei-pemahaman-panduan/export', [ComprehensionSurveyController::class, 'export'])->name('comprehension-survey.export');
    Route::get('/survei-kepuasan-layanan', [SatisfactionSurveyController::class, 'read'])->name('satisfaction-survey.read');
    Route::get('/survei-kepuasan-layanan/export', [SatisfactionSurveyController::class, 'export'])->name('satisfaction-survey.export');
})->middleware(['auth']);

Route::prefix('/user')->group(function () {
    Route::get('/', [UserController::class, 'user'])->name('user');
    Route::post('/', [UserController::class, 'store'])->name('user.store');
    Route::post('/{id}/update', [UserController::class, 'update'])->name('user.update');
    Route::get('/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');
})->middleware(['auth']);

Route::prefix('/profile')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profile');
    Route::post('/', [ProfileController::class, 'profileUpdate'])->name('profile.update');
    Route::post('/signin-method', [ProfileController::class, 'signinUpdate'])->name('profile.signin');
    Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password');
})->middleware(['auth']);
