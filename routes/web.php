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

Route::get('/american', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.american', compact('comics', 'merch'));
})->name('american');

Route::get('/acquaman', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.acquaman', compact('comics', 'merch'));
})->name('acquaman');

Route::get('/batgirl', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.batgirl', compact('comics', 'merch'));
})->name('batgirl');

Route::get('/batman', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.batman', compact('comics', 'merch'));
})->name('batman');

Route::get('/BatmanBeyond', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.BatmanBeyond', compact('comics', 'merch'));
})->name('BatmanBeyond');

Route::get('/BatmanSuperman', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.BatmanSuperman', compact('comics', 'merch'));
})->name('BatmanSuperman');

Route::get('/BatmanSupermanAnnual', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.BatmanSupermanAnnual', compact('comics', 'merch'));
})->name('BatmanSupermanAnnual');

Route::get('/BatmanJoker', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.BatmanJoker', compact('comics', 'merch'));
})->name('BatmanJoker');

Route::get('/BatmanThreeJokers', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.BatmanThreeJokers', compact('comics', 'merch'));
})->name('BatmanThreeJokers');

Route::get('/HarleyQuinn', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.HarleyQuinn', compact('comics', 'merch'));
})->name('HarleyQuinn');

Route::get('/CatWoman', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.CatWoman', compact('comics', 'merch'));
})->name('CatWoman');
