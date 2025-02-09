<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Media;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class BrowseController
{
    public function index()
    {
        $showMedia = Media::orderBy('views', 'desc')->limit(10)->first();
        $top10Media = Media::orderBy('views', 'desc')->limit(10)->get();
        $watchMedias =  currentProfile()->watchHistories()->get();
        $medias = Media::all();
        return view('browse',compact('showMedia','top10Media','watchMedias','medias'));
    }

    public function series(){
        return view('series');
    }

    public function movies(){
        return view('movies');
    }

    public function mylist(){
        $watchMedias =  currentProfile()->watchHistories()->get();
        return view('my-list',compact('watchMedias'));
    }
}
