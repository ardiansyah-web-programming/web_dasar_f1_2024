<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function index()
    {
        $nama = 'Fulan';
        // echo "Halaman Home, nama saya $nama";
        // return view('home.index')->with('m',$nama);
        return view('home.index',compact('nama'));
    }
}
