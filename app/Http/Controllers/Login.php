<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Mitra;
use App\Konsumen;
use Auth;

class Login extends Controller
{
    public function index(){

        return view('masuk');
    }

    function masuk(Request $request)
    {
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            return redirect()->intended('/admin/index');
        }else if (Auth::guard('mitra')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/mitra/index');
        }else if (Auth::guard('konsumen')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/konsumen/index');
        }else{
            //Gagal Login
            // alert()->error('Gagal Login', 'Error');
            return redirect('/masuk')->with('alert','Password atau Email, Salah !');
        }
    }

    function keluar()
    {
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        }else if(Auth::guard('mitra')->check()){
            Auth::guard('mitra')->logout();
        }else if(Auth::guard('konsumen')->check()){
            Auth::guard('konsumen')->logout();
        }
        return redirect('/')->with('alert','Kamu sudah logout');
    }
}
