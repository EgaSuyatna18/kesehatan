<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LPController extends Controller
{
    function index() {
        return view('lp.index', ['title' => env('APP_NAME', 'Kesehatan')]);
    }
}