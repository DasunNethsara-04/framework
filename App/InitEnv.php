<?php

// Load .env file
namespace App;
require_once "../vendor/autoload.php";

use Dotenv\Dotenv;

class InitEnv
{

    public static function load(): void
    {
        // This loads the .env file located in the current directory (__DIR__)
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        // DB info using $_ENV
        define('DB_HOST', $_ENV['DB_HOST']);
        define('DB_USER', $_ENV['DB_USER']);
        define('DB_PASS', $_ENV['DB_PASS']);
        define('DB_NAME', $_ENV['DB_NAME']);

        // App info using $_ENV
        define('APP_NAME', $_ENV['APP_NAME']);
        define('APP_URL', $_ENV['APP_URL']);
    }
}