<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::get('/', function () {
//    return view('welcome');
//});

Route::view('/about', 'about')->name('about');

//Basic Controller
//Route::get('/car', [CarTempController::class, 'index'])->name('car.index');

//Grouping Routes by Controller
//Route::controller(CarTempController::class)->group(function () {
//    Route::get('/cars', 'index')->name('cars.index');
//    Route::get('/my-cars', 'my-cars')->name('cars.my-cars');
//});

//SingleActionController
//Route::get('/car', ShowCarTempController::class);

//ResourceController
//Route::resource('/products', ProductController::class);

//Challenge
//Route::get('/sum/{a}/{b}', [MathController::class, 'sum'])->whereNumber(['a', 'b']);
//Route::get('/subtract/{a}/{b}', [MathController::class, 'subtract'])->whereNumber(['a', 'b']);
