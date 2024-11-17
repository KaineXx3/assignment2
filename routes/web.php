<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request; // Use the correct Request class
use App\Http\Controllers\CustomerController;


Auth::routes();

Route::get('/', [CustomerController::class, 'home']);
Route::get('/filter/gender/{gender}', [CustomerController::class, 'filterByGender']);
Route::get('/filter/birthday', [CustomerController::class, 'filterByBirthday']);
