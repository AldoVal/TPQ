<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\dataSantriController;
use App\Http\Controllers\DataPengurusController;
// use App\Models\Santri;
// use App\Models\pengurus;
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
    return view('login');
});


Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/santri','App\Http\Controllers\Santri@index');
Route::get('/tambahsantri','App\Http\Controllers\Santri@tambah');


Route::get('/peran','App\Http\Controllers\Peran@index');

Route::get('/pengurus','App\Http\Controllers\Pengurus@index');

Route::get('/kemajuan','App\Http\Controllers\Kemajuan@index');

