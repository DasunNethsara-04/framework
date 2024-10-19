<?php

namespace Controller;

use Model\Student;

class TestController extends Controller
{
    public function show(): void
    {
        $student = new Student($this->pdo);

        $student->update(3, ['name'=>'Jane']);


//        $student->delete(4);

        $students = $student->getAll();
        $this->view('test', ['students' => $students]);
    }
}