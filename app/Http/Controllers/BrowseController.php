<?php

namespace App\Http\Controllers;

use App\Models\Media;

class BrowseController
{
    public function index()
    {
        $watchMedias =  currentProfile()->watchHistories()->first()->media()->get();
        $top10Media = Media::orderBy('views', 'desc')->limit(10)->get();
        return view('browse',compact('top10Media','watchMedias'));
    }
}
