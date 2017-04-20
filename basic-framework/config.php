<?php

return [
    'database' => [
        'name' => 'php_learning',
        'dsn' => 'mysql:host=127.0.0.1;dbname=',
        'username' => 'root',
        'password' => 'secret',
        'options' => [
            'fetch_option' => PDO::FETCH_CLASS,
        ],
    ],
];