<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;

use App\Models\Listings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ListingController::class, 'index']);
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
Route::get('/listings/item/{item}', [ListingController::class, 'show']);
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
Route::get('/listings/{item}/edit', [ListingController::class, 'edit'])->middleware('auth');
Route::put('/listings/{item}', [ListingController::class, 'update'])->middleware('auth');
Route::delete('/listings/{item}', [ListingController::class, 'delete'])->middleware('auth');
Route::post('/listings', [ListingController::class, 'store']);

Route::get('/register', [UserController::class, 'register'])->middleware('guest');
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/auth', [UserController::class, 'auth']);