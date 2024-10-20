<?php

namespace App;

class Request
{
    public function get_method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function get_uri()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function get_headers()
    {
        return getallheaders();
    }

    public function get_body()
    {
        // Return JSON-decoded body content if Content-Type is JSON
        if ($this->get_header('Content-Type') === 'application/json') {
            return json_decode(file_get_contents('php://input'), true);
        }
        return $_POST;
    }

    public function get_header($header)
    {
        $headers = $this->get_headers();
        return isset($headers[$header]) ? $headers[$header] : null;
    }

    public function query_params()
    {
        return $_GET;
    }
}