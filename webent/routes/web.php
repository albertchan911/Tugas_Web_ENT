<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/tambah', function () {
    return view('tambah');
});
Route::get('/tampil', function () {
    return view('tampil');
});