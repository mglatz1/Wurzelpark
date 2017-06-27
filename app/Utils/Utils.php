<?php

namespace App\Http\Utils;

use Illuminate\Support\Facades\Auth;

final class Utils
{
    /**
     * Call this method to get singleton
     *
     * @return Utils
     */
    public static function Instance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new Utils();
        }
        return $inst;
    }

    /**
     * Private ctor so nobody else can instance it
     *
     */
    private function __construct()
    {
    }

    public function resetLocale($locale)
    {
        if (Auth::user()) {
            app()->setLocale(auth()->user()->language);
            return;
        }

        // set local according to browser settings
        $browser_language = explode(',', explode(';', $locale)[0])[0];

        if (strpos($browser_language, 'de') !== false) {
            app()->setLocale('de');
        }
        else if (strpos($browser_language, 'it') !== false) {
            app()->setLocale('it');
        }
        else {
            app()->setLocale('en');
        }
    }
}