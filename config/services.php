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
<<<<<<< HEAD
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
=======
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
>>>>>>> d24cd28afdd229ae8f66a8a41e0f15aa4fa732f1
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
<<<<<<< HEAD
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
=======
        'key'    => '',
        'secret' => '',
>>>>>>> d24cd28afdd229ae8f66a8a41e0f15aa4fa732f1
    ],

];
