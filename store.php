<?php
require_once "model/addINFO.php";

$addObject = new addINFO();
$addObject->addPost($_POST["name"],$_POST["price"],$_POST["qty"]);
$addObject->searchPost($_POST["words"]);



header("Location: /");
