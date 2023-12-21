<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [Controller::class,'Home'])->name('home');
Route::get('/login',[UserController::class,'Login'])->name('login');
Route::get('/register',[UserController::class,'Register'])->name('register');
Route::post('/User/register',[UserDBController::class,'create'])->name('user.store');