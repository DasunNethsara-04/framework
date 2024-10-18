<?php
require_once '../App/Controller.php';
class TestController extends Controller {
    public function show(){
        $this->view('test', ['name'=>'Dasun']);
    }
}