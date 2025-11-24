<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bannerController extends Controller
{
     public function index(){
        return view('admin.banner');

    }
}
