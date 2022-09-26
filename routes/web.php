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
    return view('welcome');
})->name('home');

Route::get('/primeProve', function() {

    $numeroCasuale = rand(0,100);

    $listaStudenti = ['Mario Rossi', 'Cristina Bianchi', 'Luca Neri'];

    return view('about', [
        'numeroCasualeSuVista' => $numeroCasuale,
        'listaStudentiSuVista' => $listaStudenti
    ]);
})->name('paginaPrimeProve');
