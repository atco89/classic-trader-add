<?php
declare(strict_types=1);

return [
    'settings' => [
        'displayErrorDetails'               => false,
        'determineRouteBeforeAppMiddleware' => false,
        'templatesPath'                     => __DIR__ . '/../resources/views/',
        'database'                          => [
            'driver'    => 'mysql',
            'host'      => 'database',
            'port'      => '3306',
            'database'  => 'skeleton',
            'username'  => 'root',
            'password'  => 'password',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
            'options'   => [
                PDO::ATTR_EMULATE_PREPARES => true
            ]
        ]
    ]
];