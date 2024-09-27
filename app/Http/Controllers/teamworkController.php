<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teamworkController extends defaultBadgeController
{
    protected $oauthClientId = '0ALNxNrUwlivnhnzNZ3bPIajowRdazMx';

    protected $oauthClientSecret = '8__5vws3WpHrUiWhlwYr2ydCeGtbodA_JUE4KYjhmbYt3NgI84h80IcDIQ5uxzAW';

    public function __construct(Request $request)
    {
        $this->isDevMode = 'local' == config('app.env') or 'dev' == config('app.env') or 'qa' == config('app.env');
    }

    /**
     * handle routing to the home page.
     *
     * @param string $badgeSlug
     *
     * @return view
     */
    public function home($badgeSlug, Request $request)
    {
        return redirect()->to('https://idea.org.uk');
    }
}
