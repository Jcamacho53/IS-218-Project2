<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=jic5';
    $username = 'jic5';
    $password = 'aaREdyDI';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>