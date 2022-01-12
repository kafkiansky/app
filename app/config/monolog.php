<?php

declare(strict_types=1);

use Monolog\Logger;

return [
    'globalLevel' => Logger::DEBUG,

    'handlers' => [
        'stdout' => [
            [
                'class' => \Monolog\Handler\SyslogHandler::class,
                'options' => [
                    'ident' => 'app',
                    'facility' => LOG_USER,
                ]
            ]
        ],
    ],
];
