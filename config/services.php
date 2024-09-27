<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    
    'paypal' => [
        'client_id' => env('PAYPAL_CLIENT_ID', 'Acp8_qHRuFoRtsV3ZYv7NsGiW6SQzjccZzs6IjfmRR8wFg9V95hGetl0r5ZKCS58-0JfqAEYR2Ud3hP7'),
        'secret' => env('PAYPAL_SECRET', 'EGoqdF_lsloF9U3A1Nc1wy-mTEVod4drKRVtPI2BmoCONehCsk3CKQwfPJl3LUWbYxqS_A-TpivVNPfj'),
        'sandbox' => env('PAYPAL_SANDBOX', true),
    ],
    
    'paypalExpress' => [
        'client_id' => env('PAYPAL_CLIENT_ID', 'Acp8_qHRuFoRtsV3ZYv7NsGiW6SQzjccZzs6IjfmRR8wFg9V95hGetl0r5ZKCS58-0JfqAEYR2Ud3hP7'),
        'secret' => env('PAYPAL_SECRET', 'EGoqdF_lsloF9U3A1Nc1wy-mTEVod4drKRVtPI2BmoCONehCsk3CKQwfPJl3LUWbYxqS_A-TpivVNPfj'),
        'sandbox' => env('PAYPAL_SANDBOX', true),
    ],

];
