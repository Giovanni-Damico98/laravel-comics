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
    $comics = config('comics');
    return view('pages.home', compact('comics'));
})->name('pages.home');

Route::get('/comic/{id}', function (string $id) {
    $comic = config('comics')[$id - 1];
    return view('pages.show', compact("comic"));
})->name('pages.show');