<?php
try {
    $pdo = new PDO('mysql:host=db;dbname=app;charset=utf8mb4', 'user', 'pass');
    echo "Conexion a MySQL correcta";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
