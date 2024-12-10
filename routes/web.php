<?php

use App\Http\Controllers\SiteController;

use Illuminate\Support\Facades\Route;



Route::get('/', [SiteController::class,'home'])->name('home');
Route::get('/about', [SiteController::class, 'about']) ->name('about');
Route::get('/contact',[SiteController::class,'contact']) ->name('contact');
Route::get('/propertylist',[SiteController::class,'propertylist']) ->name('propertylist');
Route::get('/porpertytype',[SiteController::class,'porpertytype']) ->name('porpertytype');
Route::get('/propertyagent',[SiteController::class,'propertyagent']) ->name('propertyagent');
Route::get('/testimonial',[SiteController::class,'testimonial']) ->name('testimonial');
Route::get('/404s', [SiteController::class,'404s'])->name('404s');