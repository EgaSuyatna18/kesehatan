<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class LPController extends Controller
{
    function index()
    {
        return view('lp.index', ['title' => env('APP_NAME', 'Kesehatan')]);
    }

    function home_artikel()
    {
        return view('lp.artikel.index', [
            'title' => env('APP_NAME', 'Kesehatan') . ' | Artikel',
            'artikels' => Artikel::paginate(5),
            'recents' => Artikel::latest()->take(4)->get(),
        ]);
    }

    function home_artikel_detail(Artikel $artikel)
    {
        return view('lp.artikel.detail', [
            'title' => $artikel->judul,
            'artikel' => $artikel,
            'recents' => Artikel::latest()->take(4)->get(),
        ]);
    }

    function jantung()
    {
        return view('lp.jantung', [
            'title' => 'Cek Jantung'
        ]);
    }
}
