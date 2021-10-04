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


#COMICS

Route::get('/', function () {
    $comics = config('comics');
    return view('home', ['comics' => $comics]);
})->name('home');

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
