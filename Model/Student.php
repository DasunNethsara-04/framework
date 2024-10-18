<?php

//namespace Model;

require_once '../App/Model.php';


class Student extends Model
{
    private $pdo;
    protected string $table_name = "students";
}