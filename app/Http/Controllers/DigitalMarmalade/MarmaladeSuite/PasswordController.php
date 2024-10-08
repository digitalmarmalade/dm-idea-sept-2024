<?php

namespace App\Http\Controllers\DigitalMarmalade\MarmaladeSuite;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;
    
    protected $linkRequestView = 'vendor.digitalmarmalade.auth.password';
    protected $resetView = 'vendor.digitalmarmalade.auth.reset';
    protected $redirectTo;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redirectTo = route('msuiteHome');
        
        $this->middleware('msuiteGuest');
    }
}
