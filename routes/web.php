<?php
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContactController;
Route::get('/', [ReviewController::class, 'index']);
Route::get('/about', [ReviewController::class, 'about']);
Route::get('/service', [ReviewController::class, 'service']);
Route::get('/contact', [ContactController::class, 'index']);


