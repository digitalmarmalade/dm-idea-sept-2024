<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use App\Cart;

class CustomerLoginListener
{
    
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PodcastWasPurchased  $event
     * @return void
     */
    public function handle(Login $event)
    {
        //Merge the session cart into the user cart
        $sessionCart = Cart::currentSession();
        $userCart = Cart::current();
        
        $userCart->merge($sessionCart);
    }
    
}
