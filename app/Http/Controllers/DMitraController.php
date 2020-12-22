<?php

namespace App\Http\Controllers;

use App\DetailPesanan;
use Illuminate\Http\Request;
use App\Obat;
use App\Kategori;
use App\Pesanan;

class DMitraController extends Controller
{
    public function tampil()
    {
        $title = 'Dashboard Mitra';
        $obat  = Obat::get();
        $kategori  = Kategori::get();
        $pesanan_detail  = DetailPesanan::get();
        $pesanan = Pesanan::get();



        return view('Mitra.mitra',compact('title','obat','kategori','pesanan_detail','pesanan'));

    }

}
