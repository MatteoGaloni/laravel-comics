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
    return view('welcome', [$info]);
});

// Route::get('/otherpage', function () {
//     $data = config('comics.data');
//     return view('other', "data");
// });
