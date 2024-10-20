<?php

namespace Controller;

use Model\Student;

class TestController extends Controller
{
    public function show(): void
    {
        $student = new Student($this->pdo);

        $student->update(3, ['name'=>'Jane']);

        $students = $student->getAll();
        $this->view('welcome');
    }
}