<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class);

Route::get('/login', [LoginController::class, 'index']);