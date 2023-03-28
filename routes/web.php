<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ActivitiesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// rotta collegamento laravel

Route::get('/',[HomeController::class,'home'])->name('welcome');

// Rotta homepage 

Route::get('/Homepage',[HomeController::class,'firstPage'])->name('Homepage');

// Rotta pagina card

Route::get('/productsPage',[ProductsController::class,'index'])->name('productsPage');

// Rotta pagina dettaglio card 


Route::get('/productsDetail{id}',[ProductsController::class,'show'])->name('productsDetail');


// Rotta pagina card activities


Route::get('/activitiesPage',[ActivitiesController::class,'index'])->name('activitiesPage');


// Rotta card activitiesDetail


Route::get('/activitiesDetail/{id}',[ActivitiesController::class,'show'])->name('activitiesDetail');











