<?php

// config for AliSaleem/Mailhog
return [
    'transport' => 'smtp',
    'host' => env('MAIL_HOST', '127.0.0.1'),
    'port' => env('MAIL_PORT', 1025),
    'encryption' => env('MAIL_ENCRYPTION', 'null'),
    'username' => env('MAIL_USERNAME'),
    'password' => env('MAIL_PASSWORD'),
    'timeout' => null,
    'local_domain' => env('MAIL_EHLO_DOMAIN'),
];
