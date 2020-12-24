<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('konsumens', 'API\ApiKonsumenController@getkonsumenAll');
Route::get('createKonsumen/{id}', 'API\ApiKonsumenController@getKonsumen');
Route::post('konsumen', 'API\ApiKonsumenController@createKonsumen');
Route::put('konsumen-update/{id}', 'API\ApiKonsumenController@updateKonsumen');
Route::delete('konsumen-delete/{id}','API\ApiKonsumenController@deleteKonsumen');

Route::get('get-obatAll', 'API\ApiObatController@getobatAll');
Route::get('get-obat/{id}', 'API\ApiObatController@getobat');
Route::post('obat-create', 'API\ApiObatController@createobat');
Route::put('obat-update/{id}', 'API\ApiObatController@updateobat');
Route::delete('obat-delete/{id}','API\ApiObatController@deleteobat');

// login
Route::post('login', 'API\ApiLoginController@login');

//Kategori
Route::get('get-kategoriAll', 'API\ApiObatController@getKonsumenAll');
Route::get('get-kategori/{id}', 'API\ApiObatController@getKategori');
Route::post('create-Kategori', 'API\ApiObatController@createKategori');
Route::put('update-kategori/{id}', 'API\ApiObatController@updateKategori');
Route::delete('delete-kategori/{id}','API\ApiObatController@deleteKategori');

