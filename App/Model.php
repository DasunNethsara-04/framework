<?php

abstract class Model
{
    private PDO $pdo;
    protected string $table_name = "";

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $stmt = $this->pdo->query("SELECT * FROM $this->table_name");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM $this->table_name WHERE id=?");
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function store($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO $this->table_name (".implode(',', array_keys($data)).") VALUES (".implode(',', array_fill(0, count($data), '?')).")");
        $i = 1;
        foreach ($data as $key=>$value) {
            $stmt->bindValue($i, $value);
            $i++;
        }
        $stmt->execute();
    }

    public function update($id, $data)
    {
        // update the resource
    }

    public function delete($id)
    {
        // delete the resource
    }
}