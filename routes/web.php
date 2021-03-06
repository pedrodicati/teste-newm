<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\RegistrationController;

Route::get('/', [RegistrationController::class, 'index']);
Route::get('/clients', [RegistrationController::class, 'listClient']);
Route::post('/create', [RegistrationController::class, 'store']);
Route::get('/clients/edit/{id}', [RegistrationController::class, 'edit']);
Route::put('/clients/update/{id}', [RegistrationController::class, 'update']);
Route::delete('/clients/{id}', [RegistrationController::class, 'destroy']);