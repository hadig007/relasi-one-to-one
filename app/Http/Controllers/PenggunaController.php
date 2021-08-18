<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('pengguna',compact('pengguna'));
    }
}
