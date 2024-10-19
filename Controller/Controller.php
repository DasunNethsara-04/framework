<?php

namespace Controller;

use PDO;

abstract class Controller
{
    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=mvc;", 'root', '');
    }

    protected function view($filename = '', $data = [])
    {
        require_once __DIR__ . '/../View/' . $filename . '.php';
    }

}