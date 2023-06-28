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

Route::get('/', function () {
    $info = config("comics.my_data");
    $someLinks = config("store.someLinks");

    return view('welcome', compact("info", "someLinks"));
});

Route::get('/actionComics', function () {
    $info = config("comics.my_data");
    $someLinks = config("store.someLinks");

    return view('actionComics', compact("info", "someLinks"));
});
