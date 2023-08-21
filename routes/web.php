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

Route::get('/comic/{index}', function ($index) {
    $merch = config('merch');
    $comics = config('comics');

    // controllo per l'index
    if (!is_numeric($index) || $index < 0 || $index >= count($comics)) abort(404);
    $comic = $comics[$index];
    return view('comic', compact('comics', 'merch', 'comic'));
})->name('comic');
