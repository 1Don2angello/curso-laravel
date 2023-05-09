<?php

use App\Http\Controllers\Controller;


use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;



Route::get('/', [homecontroller::class, 'index']);

Route::get('/dashboard', [dashboardcontroller::class, 'index']);



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


