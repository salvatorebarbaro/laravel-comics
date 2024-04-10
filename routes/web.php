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
    //con la funzione config noi andiamo ad importare l'arry di oggetti presenti nel nostro database
    $fumetti = config("db");

    // dd($fumetti);
    //funzione per restituire i valori in pagina di fumetti compact
    return view('home',compact('fumetti'));
})->name('home');

Route::get('/fumetto' , function (){
    //mi passo l'array di oggetti riguardante i fumetti , tutto cio tramite config
    $fumetti = config("db");

    $signleFumetto = $fumetti[0];

    

    // dd($nomi);

    //riprova di quali dati stiamo riportando in pagina
    // dd($signleFumetto);

    return view('fumetto', compact('signleFumetto'));
})->name('fumetto');

