<?php

namespace App\Http\Controllers;

use App\DetailPesanan;
use App\KonfirmasiPemabayaran;
use App\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HistoryController extends Controller
{

    public function index()
    {
        $pesanans = Pesanan::where('id_konsumen', Auth::guard('konsumen')->user()->id)->where('status','!=', 0)->get();
        return view('konsumen.history.index', compact('pesanans'));
    }
    public function detail($id)
    {
        $pesanans = Pesanan::where('id',$id)->first();
        $pesanan_details = DetailPesanan::where('id_pemesanan', $pesanans->id)->get();

        return view('konsumen.history.detail', compact('pesanans','pesanan_details'));

    }
}
