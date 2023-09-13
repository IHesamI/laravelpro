<?php

use App\Http\Controllers\ListingController;
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
Route::get('/listings/item/{item}', [ListingController::class, 'show']);
Route::get('/listings/create', [ListingController::class, 'create']);
Route::get('/listings/{item}/edit', [ListingController::class, 'edit']);
Route::put('/listings/{item}', [ListingController::class, 'update']);
Route::delete('/listings/{item}', [ListingController::class, 'delete']);
Route::post('/listings', [ListingController::class, 'store']);
Route::get('/register', [UserController::class, 'register']);