<?php

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

Route::get('/', function () {
    return view(
        'listing',
        [
            'heading' => 'zarp namosan',
            'listings' => Listings::all()

        ]
    );
});
Route::get('/item/{item}', function (Listings $item) {
    return view('item', [
        'item' => $item,
    ]);
});