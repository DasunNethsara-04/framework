<?php

namespace Controller;

use App\Request;
use App\Response;

class TestController extends Controller
{
    public function show(): void
    {
        $this->view('welcome');
    }

    public function test(): void
    {
        $response = new Response();
        $response->json([
            'message' => 'Hello, World!',
            'status' => 200,
        ],
            200
        );
    }

    public function testPost(): void
    {
        $response = new Response();
        $request = new Request();

        $json_data = $request->get_body();
        $response->json($json_data, 200);
    }
}