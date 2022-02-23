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
});
// Praktikum 1
Route::get('/', function () {
    echo "Selamat Datang";
    });

Route::get('/about', function () {
    echo "NIM  : 2041720066 <br/> ";
    echo "Nama : Iqri Mannisa' Buchori <br/>";
    });

Route::get('/articles/{id}', function ($id) {
    echo "Ini adalah halaman Artikel dengan ID : {$id} ";
    });