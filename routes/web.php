<?php

use App\Http\Controllers\DKonsumenController;
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

Route::get('/', 'WellcomeController@tampilobat');
Route::get('/get_obat','ObatController@getObat');




// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/Admin', function () {
//     return view('admin');
// });
// Route::get('/Mitra', function () {
//     return view('mitra');
// });
// Route::get('/Konsumen', function () {
//     return view('konsumen');
// });
Route::group(['middleware'=>'auth:admin'],function(){

    //Menghitung Data di Dashboard
    Route::get('/admin/index', 'DAdminController@tampil');

    Route::get('/admin/konsumen','DKonsumenController@index');
    Route::get('/konsumen/add','DkonsumenController@create');
    Route::post('/konsumen/store','DkonsumenController@store');
    Route::get('/konsumen/edit/{id}','DkonsumenController@edit');
    Route::put('/konsumen/update/{id}', 'DKonsumenController@update');
    Route::get('/konsumen/delete/{id}', 'DKonsumenController@destroy');
    //Status pemesanan

    Route::get('admin/status-pemesanan','StatusPemesananController@index');
    Route::get('/admin/status-pemesanan/add','StatusPemesananController@create');
    Route::post('/admin/status-pemesanan/store','StatusPemesananController@store');
    Route::get('/admin/status-pemesanan/edit/{id}','StatusPemesananController@edit');
    Route::put('/admin/status-pemesanan/store/{id}', 'StatusPemesananController@update');
    Route::get('/admin/status-pemesanan/delete/{id}', 'StatusPemesananController@destroy');

    //status Pembayaran
    Route::get('admin/status-pembayaran','StatusPembayaranController@index');
    Route::get('/admin/status-pembayaran/add','StatusPembayaranController@create');
    Route::post('/admin/status-pembayaran/store','StatusPembayaranController@store');
    Route::get('/admin/status-pembayaran/edit/{id}','StatusPembayaranController@edit');
    Route::put('/admin/status-pembayaran/store/{id}', 'StatusPembayaranController@update');
    Route::get('/admin/status-pembayaran/delete/{id}', 'StatusPembayaranController@destroy');





});

Route::group(['middleware'=>'auth:mitra'],function(){

    //Menghitung Data di Dashboard
    Route::get('/mitra/index', 'DMitraController@tampil');

    Route::get('mitra/obat', 'ObatController@index')->name('mitra.obat');
    Route::get('/mitra/tambah_obat', 'ObatController@create');
    Route::post('/mitra/store_obat', 'ObatController@store');
    Route::get('/mitra/obat/edit/{id}', 'ObatController@edit');
    Route::put('/Mitra/update_obat/{id}', 'ObatController@update')->name('mitra.obat.update');
    Route::get('/mitra/obat/hapus/{id}', 'ObatController@delete');
    // Kategori
    Route::get('/kategori/tampil','KategoriController@index')->name('kategori.tampil');
    Route::get('/kategori/add','KategoriController@create');
    Route::post('/kategori/store','KategoriController@store');
    Route::get('/kategori/edit/{id}', 'KategoriController@edit');
    Route::put('/kategori/update{id}', 'KategoriController@update');
    Route::get('/kategori/delete/{id}', 'KategoriController@destroy');
    //transaksi

    Route::get('transaksi-pesanan','PesananController@index');
    Route::get('transaksi-pesanan/add','PesananController@create');
    Route::post('Transaksi-pesanan/store','PesananController@store');
    Route::get('transaksi-pesanan/edit/{id}','PesananController@edit');
    Route::put('transaksi-pesanan/update/{id}','PesananController@update');
    Route::get('transaksi-pesanan/hapus/{id}','PesananController@destroy');

    //detail pesanan
    Route::get('mitra/detail_pesanan','DetailPesananController@index');
    Route::get('/mitra/history/{id}','DetailPesananController@detail');






});

Route::group(['middleware'=>'auth:konsumen'],function(){

    //Menghitung Data di Dashboard
   Route::get('/konsumen/index', 'DKonsumenController@tampil');
    route::get('/pesan/{id}','DKonsumenController@pesan');
    route::post('/pesan-checkout/{id}','DKonsumenController@pesancheckout');
    route::get('check-out', 'DkonsumenController@check_out');
    Route::delete('/check-out/{id}', 'DKonsumenController@delete');
    route::post('/konfirmasi-check-out/{id}', 'DKonsumenController@konfirmasi');
    route::get('history', 'HistoryController@index');
    route::get('history/{id}', 'HistoryController@detail');
    route::post('/upload-buktiTF/{id}', 'KonfirmasiPembayaranController@bukti_tf');
    route::get('upload_bukti/{id}', 'KonfirmasiPembayaranController@upload');
    Route::get('cetak-struk/{id}','HistoryController@cetakPDF');




});

Route::group(['middleware'=>'guest'],function(){

    Route::get('/masuk','login@index');
    Route::get('/register','login@register');
    Route::post('/kirim', 'login@masuk');
    Route::post('/konsumen/register','login@store');
    Route::post('/kritik','KritikController@store');




});

Route::get('/keluar', 'login@keluar');

// Route::get('/masuk1', function () {
//      return view('masuk1');
// });


