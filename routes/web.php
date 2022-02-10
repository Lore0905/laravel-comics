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
// HOMEPAGE
Route::get('/', function () {

    $comics_array = config('comics');
    $second_main_array = config('second_part_main');

    $data = [
        'comics_array' => $comics_array,
        'second_main_array' => $second_main_array
    ];
    return view('homepage', $data);
});

// DETAILS
Route::get('/details', function () {

    return view('details');
});