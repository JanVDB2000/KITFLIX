<?php

use App\Models\Profile;

if (! function_exists('currentProfile')) {
    /**
     * Haalt het huidige geselecteerde profiel op uit de cookie 'profilesSession'.
     *
     * @return Profile|null
     */
    function currentProfile(): ?Profile
    {
        // hij kijkt in de cookie of er een is anders pak hij de eerste
        if (request()->cookie('profilesSession')){
            return  Profile::findOrFail(request()->cookie('profilesSession'));
        }
        return Auth()->user()->profiles()->first();
    }
}
