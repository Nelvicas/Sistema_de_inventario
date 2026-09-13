<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = trim($_POST['nombre'] ?? '');       // obten ($_POST['nombre'])      ?? ''=> Si no existe o es null, utiliza ''
    $precio = trim($_POST['precio'] ?? '');
    $stock = trim($_POST['stock']?? '');

    if (empty($nombre)) {

        echo "El nombre es obligatorio";

    } elseif ($precio === '') {

        echo "El precio es obligatorio";

    } elseif (!is_numeric($precio)) {

        echo "El precio debe ser un número";

    } elseif ($precio <= 0) {

        echo "El precio debe ser mayor que 0";

    } elseif ($stock === '') {

        echo "El stock es obligatorio";

    } elseif (!is_numeric($stock)) {

        echo "El stock debe ser un número";

    } elseif ($stock < 0) {

        echo "El stock no puede ser negativo";

    } else {

        echo "Producto recibido: " . $nombre . "<br>";
        echo "Precio: " . $precio . "<br>";
        echo "Stock: " . $stock . "<br>";
    }
}

?>