<?php

class Controller
{

    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=mvc;", 'root', '');
    }

    protected function view($filename = '', $data = [])
    {
        require_once "../View/$filename.php";
    }
}