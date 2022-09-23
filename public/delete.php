<?php

include_once 'Conection.php';
try {
    $acao = ($_POST['acao']);
    $id = ($_POST['id']);

    switch ($acao) {
        case 'insert':

            break;
        case 'delete':
            $sql = "delete from pessoa where id = $id;";
            $pdo->prepare($sql)->execute();
            echo "true";
            break;
        case 'update':

            break;
    }
} catch (PDOException $e) {
    var_dump($e->getMessage());
}

