<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    function index()
    {
        // echo "Halaman Mahasiswa";
        return view('mahasiswa.index');
    }
}
