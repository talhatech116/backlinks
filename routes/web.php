<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\Publisher\AuthController;

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


//Publisher Routes
Route::get('/' , [PublisherController::class , 'index'])->name('dashboard');
Route::get('/publisher/website' , [PublisherController::class , 'web']);
Route::post('/publisher/website' , [PublisherController::class , 'store'])->name('website.store');
Route::get('/publisher/postweb' , [PublisherController::class , 'postweb']);

//Publisher Authentication
Route::get('/login' , [AuthController::class , 'login']);
Route::post('/login' , [AuthController::class , 'authenticate'])->name('login');

//Register Publisher
Route::get('/register' , [AuthController::class , 'register'])->name('register');
Route::post('/register' , [AuthController::class , 'createUser']);

//Logout Publisher
Route::post('/logout' , [AuthController::class , 'logout'])->name('logout');
