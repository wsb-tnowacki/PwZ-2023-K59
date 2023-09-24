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
    return view('welcome');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/onas', function () {
    $zadania = [
        'Zadania 1',
        'Zadania 2',
        'Zadania 3'
    ];
    return view('onas', [ 'zadania' => $zadania]);
});
