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

        // Controleer of de taal in de config beschikbaar is
        if (!in_array($locale, Config::get('languages.available'))) {
            $locale = Config::get('languages.default'); // Standaardtaal
        }

        // Sla de taal op in de sessie en stel deze in
        Session::put('locale', $locale);
        App::setLocale($locale); // ✅ Zorg dat je `Illuminate\Support\Facades\App` gebruikt

        return $next($request);
    }
}
