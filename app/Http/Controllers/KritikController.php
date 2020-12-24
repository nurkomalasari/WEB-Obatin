<?php

namespace App\Http\Controllers;

use App\Kritik;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;



class KritikController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
    		'kritik' => 'required',

    	]);

        Kritik::create([
    		'kritik' => $request->kritik,

        ]);

        alert()->success('Menambahkan Kritik dan saran', 'Sukses');
    	return redirect('/');
    }
}
