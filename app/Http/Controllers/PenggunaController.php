<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Article;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('pengguna',compact('pengguna'));
    }
    public function article()
    {
        $artikel = Article::all();
        return view('article',compact('artikel'));
    }
}
