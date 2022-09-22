<?php

include_once 'Conection.php';
try {
    $id = ($_POST['id']);

    $sql = "delete from pessoa where id = $id;";

    $pdo->prepare($sql)->execute();
    echo "true";
} catch (PDOException $e) {
    var_dump($e->getMessage());
}
