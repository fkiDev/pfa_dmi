<?php

return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],

        // For admin
        'professeur' => [
            'driver' => 'session',
            'provider' => 'professeurs'
        ],
        'etudiant' => [
            'driver' => 'session',
            'provider' => 'etudiants'
        ]
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
        // For admin
        'etudiants' => [
            'driver' => 'eloquent',
            'model' => App\Etudiant::class
        ],
        'professeurs' => [
            'driver' => 'eloquent',
            'model' => App\Professeur::class
        ]
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'email' => 'auth.emails.password',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'etudiants' => [
            'provider' => 'etudiants',
            'email' => 'auth.emails.password',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'professeurs' => [
            'provider' => 'professeurs',
            'email' => 'auth.emails.password',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];