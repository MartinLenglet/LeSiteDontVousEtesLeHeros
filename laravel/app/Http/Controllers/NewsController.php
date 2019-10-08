<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($n)
    {
        return view('news')->with('numero', $n);
    }
}
