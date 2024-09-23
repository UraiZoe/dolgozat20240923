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
Route::get('/bejelentkezes', function () {
    return view('bejelentkezes');
});
Route::get('/bemutatkozo', function () {
    return view('bemutatkozo');
});
Route::get('/felhasznalo', function () {
    return view('felhasznalo');
});
