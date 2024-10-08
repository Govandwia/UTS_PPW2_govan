<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function(){
    return view('index.tabel');
}
)->name('tabel');

Route::get('/pemain', [Pemaincontroller::class, 'index.table'])->name('pemain');