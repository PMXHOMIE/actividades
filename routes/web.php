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
    return view('08-01-24/index');
});




Route::get('/9-enero-001', function () {
    return view('09-01-24/variables');
});

Route::get('/9-enero-002', function () {
    return view('09-01-24/constantes');
});

Route::get('/9-enero-003', function () {
    return view('09-01-24/tipos-de-datos');
});

Route::get('/9-enero-004', function () {
    return view('09-01-24/tipo-de-operador');
});





Route::get('/10-enero-001', function () {
    return view('10-01-24/operadores-de-comparacion');
});

Route::get('/10-enero-002', function () {
    return view('10-01-24/operadores-de-asignacion-combinada');
});

Route::get('/10-enero-003', function () {
    return view('10-01-24/estructuras-condicionales');
});




Route::get('/11-enero-001', function () {
    return view('11-01-24/operadores-terniarios');
});

Route::get('/11-enero-002', function () {
    return view('11-01-24/estructura-de-seleccion-multiple');
});



