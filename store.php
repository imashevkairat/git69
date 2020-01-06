<?php
require_once "model/addINFO.php";

$addObject = new addINFO();
$addObject->addPost($_POST["name"],$_POST["price"],$_POST["qty"]);


header("Location: /");
