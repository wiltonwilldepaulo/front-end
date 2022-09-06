<?php
include "Conection.php";

$id = $_GET['id'];

$cliente = $pdo->query("select * from pessoa where id = " . $id)->fetch();
echo "<pre>";
var_dump($cliente);
