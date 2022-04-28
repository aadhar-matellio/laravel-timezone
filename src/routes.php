<?php

use Illuminate\Support\Facades\Route;
use aadhar_matellio\timezones\src\TimezonesController;

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
 
Route::get('timezones/{timezone}', [TimezonesController::class, 'index']);