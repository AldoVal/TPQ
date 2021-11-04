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
    return view('halamanlogin');
});


Route::get('/author','App\Http\Controllers\Pengurus@index');

Route::get('/santri','App\Http\Controllers\Santri@index');
Route::get('/tambahsantri','App\Http\Controllers\Santri@tambah');
Route::post('/simpansantri','App\Http\Controllers\Santri@store');
Route::get('/editsantri','App\Http\Controllers\Santri@edit');
Route::post('/proseseditsantri{IDSANTRI}','App\Http\Controllers\Santri@update');
Route::get('/hapussantri{IDSANTRI}','App\Http\Controllers\Santri@hapus');

Route::get('/peran','App\Http\Controllers\Peran@index');
Route::get('/editperan','App\Http\Controllers\Peran@edit');
Route::post('/proseseditperan/{IDPERAN}','App\Http\Controllers\Peran@update');
Route::get('/tambahperan','App\Http\Controllers\Peran@tambah');
Route::post('/simpanperan','App\Http\Controllers\Peran@store');
Route::get('/hapusperan/{IDPERAN}','App\Http\Controllers\Peran@hapus');
Route::get('/detailperan','App\Http\Controllers\DetailPeran@index');

Route::get('/guru','App\Http\Controllers\Guru@index');

Route::get('/kemajuan','App\Http\Controllers\Kemajuan@index');
Route::get('/detailkemajuan','App\Http\Controllers\DetailKemajuan@index');
Route::get('/editkemajuan','App\Http\Controllers\Kemajuan@edit');
Route::post('/proseskemajuan','App\Http\Controllers\Kemajuan@update');

Route::get('/wali','App\Http\Controllers\DataSantri@index');
Route::get('/kemajuansantri','App\Http\Controllers\DataSantri@kemajuan');
Route::get('/detailkemajuansantri','App\Http\Controllers\DataSantri@detailkemajuan');











