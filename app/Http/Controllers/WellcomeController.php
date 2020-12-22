<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;


class WellcomeController extends Controller
{
    public function tampilobat(){
        $obat = Obat::All();


        // dd($obat);
        return view('welcome1',compact('obat'));
    }
}
