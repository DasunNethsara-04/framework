<?php

namespace Controller;

use App\Request;
use App\Response;
use Model\Student;

class StudentController extends Controller
{
    public function index()
    {
        $response = new Response();
        $student = new Student($this->pdo);
        $response->json($student->getAll(), 200);
    }

    public function store()
    {
        $request = new Request();
        $response = new Response();

        $data = $request->get_body();

        $student = new Student($this->pdo);
        $student->store($data);

        $response->json([
            'message' => 'Student added successfully',
            'status' => 200,
        ], 200);
    }

    public function update($id)
    {
        $response = new Response();
        $request = new Request();

        $data = $request->get_body();

        $student = new Student($this->pdo);

        $student->update($id, $data);;

        $response->json([
            'message' => 'Student updated successfully',
            'status' => 200,
        ], 200);

    }

    public function delete($id)
    {
        $response = new Response();

        $student = new Student($this->pdo);

        $student->delete($id);
        $response->json([
            'message' => 'Student deleted successfully',
            'status' => 200,
        ], 200);
    }
}