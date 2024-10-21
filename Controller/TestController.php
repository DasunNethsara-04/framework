<?php

namespace Controller;

class TestController extends Controller
{
    public function show(): void
    {
        $this->view('welcome');
    }
}