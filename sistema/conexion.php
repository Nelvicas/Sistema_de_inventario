<?php

$host = 'localhost';
$db = 'sistema_inventario';
$usuario = 'inventario_user';
$password = 'Inventario123!';

$pdo = new PDO(
    "mysql:host=$host;dbname=$db;charset=utf8mb4",
    $usuario,
    $password
);

echo "Conexión exitosa";