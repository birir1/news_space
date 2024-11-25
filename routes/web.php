<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/americas', [PagesController::class, 'americas']);
Route::get('/asia', [PagesController::class, 'asia']);
Route::get('/basketball', [PagesController::class, 'basketball']);
Route::get('/business', [PagesController::class, 'business']);
Route::get('/entertainment', [PagesController::class, 'entertainment']);
Route::get('/europe', [PagesController::class, 'europe']);
Route::get('/football', [PagesController::class, 'football']);
Route::get('/health', [PagesController::class, 'health']);
Route::get('/', [PagesController::class, 'index']);  // Home page route
Route::get('/politics', [PagesController::class, 'politics']);
Route::get('/science', [PagesController::class, 'science']);
Route::get('/sports', [PagesController::class, 'sports']);
Route::get('/technology', [PagesController::class, 'technology']);
Route::get('/worldnews', [PagesController::class, 'worldnews']);


// Route::get('/', function () {
//     return view('welcome');
// });