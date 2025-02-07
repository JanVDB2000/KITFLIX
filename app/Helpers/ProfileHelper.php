<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Session;

if (! function_exists('currentProfile')) {
    /**
     * Haalt het huidige geselecteerde profiel op uit de cookie 'profilesSession'.
     *
     * @return Profile|null
     */
    function currentProfile(): ?Profile
    {
        // hij kijkt in de cookie of er een is anders pak hij de eerste
        if (Session::get('profilesSession', null)){
            return  Profile::findOrFail(Session::get('profilesSession', null));
        }
        return Auth()->user()->profiles()->first();
    }
}
