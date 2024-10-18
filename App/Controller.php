<?php

class Controller
{

    protected function view($filename = '', $data = [])
    {
        require_once "../View/$filename.php";
    }
}