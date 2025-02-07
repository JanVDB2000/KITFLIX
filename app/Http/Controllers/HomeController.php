<?php

namespace App\Http\Controllers;

use App\Models\Media;

class HomeController
{

    public function index()
    {
        $top10Media = Media::orderBy('views', 'desc')->limit(10)->get();
        return view('home', compact('top10Media'));
    }
}
