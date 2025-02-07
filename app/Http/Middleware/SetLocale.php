<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);

        if (!in_array($locale, Config::get('languages.available'))) {
            $locale = Config::get('languages.default');
        }

        Session::put('locale', $locale);
        App::setLocale($locale);

        return $next($request);
    }
}
