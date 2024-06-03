<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('dashboard', [TaskController::class, 'dashboard']); 
Route::get('/', [TaskController::class, 'index'])->name('login');
Route::post('custom-login', [TaskController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [TaskController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [TaskController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [TaskController::class, 'signOut'])->name('signout');