<?php

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


#HOME


Route::get('/', function () {
    return view('home');
})->name('home');



#COMICS

Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics', ['comics' => $comics]);
})->name('comics');

# SINGLE COMIC

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');

    if (is_numeric($id) && $id >= 0 && $id < count($comics)) {
        $comics = $comics[$id];
    } else {
        abort('404');
    }
    return view('comic', ['comics' => $comics]);
})->name('comic');



Route::get('/characters', function () {
    return view('site_pages.characters');
})->name('characters');

Route::get('/movies', function () {
    return view('site_pages.movies');
})->name('movies');

Route::get('/tv', function () {
    return view('site_pages.tv');
})->name('tv');

Route::get('/games', function () {
    return view('site_pages.games');
})->name('games');

Route::get('/collectibles', function () {
    return view('site_pages.collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('site_pages.videos');
})->name('videos');

Route::get('/fans', function () {
    return view('site_pages.fans');
})->name('fans');

Route::get('/news', function () {
    return view('site_pages.news');
})->name('news');

Route::get('/shop', function () {
    return view('site_pages.shop');
})->name('shop');
