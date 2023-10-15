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
    return view('ogolne.start');
})->name('ogolne.start');

Route::get('/kontakty', function () {
    return view('ogolne.kontakt');
})->name('ogolne.kontakt');

Route::get('/onas', function () {
    $zadania = [
        'Zadania 1',
        'Zadania 2',
        'Zadania 3'
    ];
    return view('ogolne.onas', [ 'zadania' => $zadania]);
})->name('ogolne.onas');
