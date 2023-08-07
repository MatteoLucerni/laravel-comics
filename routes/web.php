<?php

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
    $merch = config('merch');
    $comics = config('comics');
    return view('home', compact('comics', 'merch'));
});

Route::get('/action', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.action', compact('comics', 'merch'));
})->name('action');
