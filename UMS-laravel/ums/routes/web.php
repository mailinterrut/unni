<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
 



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
 
// Main Page Route

Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/register', [HomeController::class, 'register'])->name('Register');
 
Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/logout', [HomeController::class, 'logout'])->name('');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');


