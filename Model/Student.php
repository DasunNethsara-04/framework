<?php

namespace Model;

class Student extends Model
{
    protected string $table_name = 'students'; // Specify the table name

    public function __construct($pdo)
    {
        // Call the parent constructor to initialize the $pdo object
        parent::__construct($pdo);
    }
}