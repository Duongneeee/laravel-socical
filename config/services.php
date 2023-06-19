<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '560546042723108',
        'client_secret' => '244f9486a613ccd6b31434e9ce3b8aa7',
        'redirect' => '/auth/facebook/callback',
    ],

    'google' => [
        'client_id' => '646707818377-6mscjv7ofsdi88jlv8s9vqb063fvu05t.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => '/auth/google/callback',
    ],
    
    'twitter' => [
        'client_id' => '',
        'client_secret' => '',
        'redirect' => '/auth/twitter/callback',
    ],

    'github' => [
        'client_id' => 'Iv1.3a50fa14f7b45e77',
        'client_secret' => 'f95770a5f7632071564267f2457d2c1f4ab113dd',
        'redirect' => '/auth/github/callback',
    ],

];
