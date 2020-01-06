<?php

class addINFO
{
    public $pdo;
    public $words;

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

//        header("Location: /");

    }

    public function getPost()
    {
        $link = $this->pdo->query("SELECT * FROM `products`");
        $result = [];
        $i = 0;
        while ($row = $link->fetch(PDO::FETCH_ASSOC))
        {
            $result[$i]['name'] = $row['name'];
            $result[$i]['price'] = $row['price'];
            $result[$i]['qty'] = $row['qty'];
            $i++;
        }
        return $result;
    }

    public function searchPost()
    {
        $query_search = '';
        $arrayWords = explode(' ',$this->words);
        foreach ($arrayWords as $key => $value)
        {
            if ($arrayWords[$key - 1])
            $query_search .= ' OR ';
            $query_search .= '`name` LIKE "%'.$value.'%"';
        }
        $query = "SELECT * FROM `products` WHERE $query_search";
        $link = $this->pdo->query($query);
        $result = [];
        $i = 0;
        while ($row = $link->fetch())
        {
            $result[$i] = $row;
            $i++;
        }
        return $result;
    }
}