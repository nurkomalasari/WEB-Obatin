<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DAdminController extends Controller
{
    public function tampil()
    { 
        $title = 'Dashboard Admin';
 
        return view('Admin.admin',compact('title'));

    }
}
