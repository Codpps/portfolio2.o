<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TechController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/workShow/{id}', [PageController::class, 'show'])->name('workshow');
Route::resource('/experience', ExperienceController::class);
Route::resource('/company', CompanyController::class);
Route::resource('/galery', GaleryController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/tech', TechController::class);
Route::resource('/work', WorkController::class);
