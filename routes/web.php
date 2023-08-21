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
})->name('home');

Route::get('/comic/{index}', function ($index) {
    $merch = config('merch');
    $comics = config('comics');

    // controllo per l'index
    if (!is_numeric($index) || $index < 0 || $index >= count($comics)) abort(404);
    $comic = $comics[$index];

    // carosello
    $prev = $index == 0 ? count($comics) - 1 : $index - 1;
    $next = $index == count($comics) - 1 ? 0 : $index + 1;
    return view('comic_page', compact('comics', 'merch', 'comic', 'prev', 'next'));
})->name('comic');
