<?php

return [

    'defaults' => [
        'guard' => 'web', // Guard default untuk web
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [ // Guard untuk API (menggunakan Sanctum)
            'driver' => 'sanctum',
            'provider' => 'users',
        ],
    ],

    // ... (konfigurasi lain)

];