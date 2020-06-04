<?php
 $conn = require_once('bd.php');
 try {
    $query = "SELECT *
    FROM catalogs
    WHERE catalog_id = :catalog_id";
    $cat = $conn->prepare($query);
    $cat->execute(['catalog_id' => 1]);
    echo $cat->fetch(PDO::FETCH_OBJ) -> name; // Процессоры (Intel)
    } catch (PDOException $e) {
    echo "Ошибка выполнения запроса: " . $e->getMessage();
    } 