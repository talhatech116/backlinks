<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\AdvertiserController;
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
Route::get('/' , [PublisherController::class , 'index'])->name('index');
Route::get('/publisher/website' , [PublisherController::class , 'web'])->name('web');
Route::post('/publisher/website' , [PublisherController::class , 'store'])->name('website.store');
Route::delete('/website/delete/{id}', [PublisherController::class, 'delete'])->name('website.delete');
Route::get('/publisher/postweb' , [PublisherController::class , 'postweb']);
Route::get('/publisher/index' , [PublisherController::class , 'home']);
Route::get('/chat' , [PublisherController::class , 'chat'])->name('chat');
Route::get('/pricing' , [PublisherController::class , 'pricing'])->name('pricing');
Route::get('/transactions' , [PublisherController::class , 'transactions'])->name('transactions');
Route::get('/billing' , [PublisherController::class , 'billing'])->name('billing');
Route::get('/dashboard' , [PublisherController::class , 'dashboard'])->name('dashboard');

//Publisher Authentication
Route::get('/login' , [AuthController::class , 'login']);
Route::post('/login' , [AuthController::class , 'authenticate'])->name('login');

//Register Publisher
Route::get('/register' , [AuthController::class , 'register'])->name('register');
Route::post('/register' , [AuthController::class , 'createUser']);

//Logout Publisher
Route::post('/logout' , [AuthController::class , 'logout'])->name('logout');



//Advertiser Dashboard.
Route::get('/home' , [AdvertiserController::class , 'index'])->name('advertisor.dashboard');

