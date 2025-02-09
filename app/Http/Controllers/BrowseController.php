<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class BrowseController
{
    public function index()
    {
        $showMedia = Media::orderBy('views', 'desc')->limit(10)->first();
        $top10Media = Media::orderBy('views', 'desc')->limit(10)->get();
        $watchMedias =  currentProfile()->watchHistories()->first()->media()->get();
        return view('browse',compact('showMedia','top10Media','watchMedias'));
    }


    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function switchProfile()
    {
        request()->get('profile');

       return redirect()->route('browse');
    }
}
