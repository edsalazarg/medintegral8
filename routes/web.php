<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home'])->name('home.index');

Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::resource('patients', \App\Http\Controllers\PatientsController::class);

Route::resource('surgeries',
    \App\Http\Controllers\SurgeriesController::class, ['only' => ['create','store']]);

Route::resource('allergies',
    \App\Http\Controllers\AllergiesController::class, ['only' => ['create','store']]);
