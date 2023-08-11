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

Route::get('/batmanBeyond', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.batmanBeyond', compact('comics', 'merch'));
})->name('batmanBeyond');

Route::get('/batmanSuperman', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.batmanSuperman', compact('comics', 'merch'));
})->name('batmanSuperman');

Route::get('/batmanSupermanAnnual', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.batmanSupermanAnnual', compact('comics', 'merch'));
})->name('batmanSupermanAnnual');

Route::get('/batmanJoker', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.batmanJoker', compact('comics', 'merch'));
})->name('batmanJoker');

Route::get('/batmanThreeJokers', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.batmanThreeJokers', compact('comics', 'merch'));
})->name('batmanThreeJokers');

Route::get('/harleyQuinn', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.harleyQuinn', compact('comics', 'merch'));
})->name('harleyQuinn');

Route::get('/catWoman', function () {
    $merch = config('merch');
    $comics = config('comics');
    return view('comics.catWoman', compact('comics', 'merch'));
})->name('catWoman');
