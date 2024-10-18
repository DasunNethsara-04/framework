<?php

require_once '../App/Controller.php';
require_once '../Model/Student.php';

class TestController extends Controller
{
    protected PDO $pdo;

    public function show()
    {
        $student = new Student($this->pdo);
        $student->store([
            'name'=>'Sunil',
        ]);
//        var_dump($data);
        $this->view('test', ['name' => 'Dasun']);
    }
}