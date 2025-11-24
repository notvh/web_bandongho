<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChiTietSanPhamCtr extends Controller
{
    public function chitietsanpham(){
        return view('chitietsanpham');
    }
}
