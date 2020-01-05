<?php

class addINFO{


    public $pdo;

    public function  __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=test1","root","");
    }

    public function addPost($name,$price,$qty)
    {

        $query = $this->pdo->prepare("INSERT INTO products(name,price,qty) VALUES (:a,:b,:c)");
        $query->bindParam(":a", $name);
        $query->bindParam(":b", $price);
        $query->bindParam(":c", $qty);
        $query->execute();

        header("Location: /");

    }
}