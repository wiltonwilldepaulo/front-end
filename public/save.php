<?php
$dados = [
    'nome' => $_POST['nome'],
    'sobrenome' => $_POST['sobrenome']
];
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");
echo json_encode($dados);