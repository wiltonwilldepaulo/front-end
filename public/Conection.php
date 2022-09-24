<?php
try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;' .
            'port=3306;' .
            'dbname=aula2;' .
            'user=root;' .
            'password='
    );
} catch (PDOException $e) {
    var_dump($e->getMessage());
}