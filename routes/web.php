<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\ContactPageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' ,[HomePageController::class , 'homepage'] )->name('home');

Route::get('/about' ,[AboutPageController::class , 'aboutpage'])->name('about');

Route::get('/services' , [ServicePageController::class ,'servicePage'])->name('service');

Route::get('/contact' , [ContactPageController::class ,'contactpage'])->name('contact');