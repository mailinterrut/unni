<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => 'role:admin'], function () {
    // Routes accessible only to users with the 'admin' role
    Route::get('/admin/dashboard', 'AdminController@dashboard');
});
// Route::resource('roles', 'RoleController');
Route::get('/roles', 'RoleController@index');

Route::get('/roles', 'RoleController@index')->name('roles.index');
Route::get('/roles/create', 'RoleController@create')->name('roles.create');
Route::post('/roles', 'RoleController@store')->name('roles.store');
Route::get('/roles/{role}/edit', 'RoleController@edit')->name('roles.edit');
Route::put('/roles/{role}', 'RoleController@update')->name('roles.update');
Route::delete('/roles/{role}', 'RoleController@destroy')->name('roles.destroy');

 

Route::resource('admins', AdminController::class);


// Routes for AdminController
Route::group(['middleware' => 'auth'], function () {
    // Admin List
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    
    // Create Admin
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
    
    // Edit Admin
    Route::get('/admin/{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/{admin}', [AdminController::class, 'update'])->name('admin.update');
    
    // Delete Admin
    Route::delete('/admin/{admin}', [AdminController::class, 'destroy'])->name('admin.destroy');
});



require __DIR__.'/auth.php';
