<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/','App\Http\Controllers\Login@index');
Route::get('/login','App\Http\Controllers\Login@login');

Route::post('/authenticate','App\Http\Controllers\Login@authenticate');


//CRUD Staff
Route::get('/author','App\Http\Controllers\Pengurus@index');

Route::get('/santri','App\Http\Controllers\Santri@index');
Route::get('/santri-tambah','App\Http\Controllers\Santri@tambah');
Route::post('/santri-simpan','App\Http\Controllers\Santri@store');
Route::get('/santri-edit','App\Http\Controllers\Santri@edit');
Route::post('/santri-update/{IDSANTRI}','App\Http\Controllers\Santri@update');
Route::get('/santri-hapus/{IDSANTRI}','App\Http\Controllers\Santri@hapus');

Route::get('/peran','App\Http\Controllers\Peran@index');
Route::get('/peran-tambah','App\Http\Controllers\Peran@tambah');
Route::post('/peran-simpan','App\Http\Controllers\Peran@store');
Route::get('/peran-edit','App\Http\Controllers\Peran@edit');
Route::post('/peran-update/{IDPERAN}','App\Http\Controllers\Peran@update');
Route::get('/peran-hapus/{IDPERAN}','App\Http\Controllers\Peran@hapus');
Route::get('/detailperan','App\Http\Controllers\DetailPeran@index');

//CRUD Guru
Route::get('/guru','App\Http\Controllers\Guru@index');
Route::get('/kemajuan','App\Http\Controllers\Kemajuan@index');
Route::get('/kemajuan-tambah','App\Http\Controllers\Kemajuan@tambah');
Route::post('/kemajuan-simpan','App\Http\Controllers\Kemajuan@store');
Route::get('/kemajuan-detail/{IDKEMAJUAN}','App\Http\Controllers\DetailKemajuan@detail');

Route::get('/buku','App\Http\Controllers\Buku@index');
Route::get('/buku-tambah','App\Http\Controllers\Buku@tambah');
Route::post('/buku-simpan','App\Http\Controllers\Buku@store');
Route::get('/buku-hapus/{IDBUKU}','App\Http\Controllers\Buku@hapus');

Route::get('/bab','App\Http\Controllers\Bab@index');
Route::get('/bab-tambah','App\Http\Controllers\Bab@tambah');
Route::post('/bab-simpan','App\Http\Controllers\Bab@store');
Route::get('/bab-hapus/{IDBAB}','App\Http\Controllers\Bab@hapus');


//CRUD Wali
Route::get('/wali','App\Http\Controllers\DataSantri@index');
Route::get('/wali-kemajuan','App\Http\Controllers\DataSantri@kemajuan');
Route::get('/wali-detail-kemajuan','App\Http\Controllers\DataSantri@detailkemajuan');











