<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nftController;
use App\Http\Controllers\OrderController;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/nft', [NftController::class, 'index'])->name('nftdata');
    Route::get('/nft/{id}', [NftController::class, 'show'])->name('nftid');

    Route::get('/order', [OrderController::class, 'index'])->name('order');
    Route::post('/orders', [OrderController::class, 'store'])->name('orderstorecar');
    Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('order.destroy');
});
