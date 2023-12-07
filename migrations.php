<?php

use app\core\Application;

//loads all the classes that are required by the application. 
//this ensures that all classes can be easily located and used throughout the application.
require_once __DIR__.'/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
        ]
    ];

//the application class is created by this line
$app = new Application(__DIR__, $config);

$app->db->applyMigrations();
