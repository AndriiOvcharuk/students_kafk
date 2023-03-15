<?php

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [PagesController::class, 'getHomePage']);

Route::get('/about_us', [PagesController::class, 'getAboutUsPage']);

Route::get('/users', [UsersController::class, 'getUsersList']);
Route::get('/users/create', [UsersController::class, 'create']);
Route::post('/users/store', [UsersController::class, 'store']);

Route::get('/orders', [OrdersController::class, 'getOrders']);
