<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StartController;
use \App\Http\Controllers\PostController;
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

/* Route::get('/', function () {
    return view('ogolne.start');
})->name('ogolne.start'); */

/* Route::get('/kontakty', function () {
    return view('ogolne.kontakt');
})->name('ogolne.kontakt'); */


/* Route::get('/onas', function () {
    $zadania = [
        'Zadania 1',
        'Zadania 2',
        'Zadania 3'
    ];
    return view('ogolne.onas', [ 'zadania' => $zadania]);
})->name('ogolne.onas'); */
/* Route::get('/',[StartController::class, 'lista'])->name('ogolne.start');
Route::get('/kontakty',[StartController::class, 'kontakt'])->name('ogolne.kontakt');
Route::get('/onas',[StartController::class, 'onas'])->name('ogolne.onas'); */

Route::controller(StartController::class)->group(function(){
    Route::get('/','lista')->name('ogolne.start');
    Route::get('/kontakty','kontakt')->name('ogolne.kontakt');
    Route::get('/onas','onas')->name('ogolne.onas');
});

Route::resource('posty', PostController::class);