<?php

use App\Http\Controllers\TootController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TootController::class, 'index']);

//Show register page
Route::get('/register', [UserController::class,'create']);

//Create user
Route::post('/users', [UserController::class,'store']);

//Logout user
Route::post('/logout', [UserController::class, 'logout']);

//Show login page
Route::get('/login', [UserController::class, 'login']);

//Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Create new toot
Route::post('/create', [TootController::class, 'create']);
