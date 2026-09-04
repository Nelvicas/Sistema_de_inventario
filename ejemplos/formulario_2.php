<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {  // esta linea significa que se estan enviando datos por el metodo post

    if (empty($_POST['nombre'])) { 
            echo "El nombre es obligatorio"; 
        } elseif (empty($_POST['precio'])) { 
            echo "El precio es obligatorio"; 
        } elseif ($_POST['precio'] <= 0) { 
            echo "El precio debe ser mayor que 0"; 
        } elseif (empty($_POST['stock'])) { 
            echo "El stock es obligatorio"; 
        } elseif ($_POST['stock'] < 0) { 
            echo "El stock no puede ser negativo"; 
        } else {

        
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];

        echo "Producto recibido: " . $nombre. "<br>";
        echo "Precio: ". $precio. "<br>";
        echo "Stock: ". $stock . "<br>";

        echo "Nombre valido";
    }


    /*
        isset()  significa existe este dato?
        empty() significa este dato esta vacio?

    */
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo producto</title>
</head>
<body>

    <h1>Registrar producto</h1>

    <form method="POST">

        <label>Nombre:</label>
        <input type="text" name="nombre"><br>
        <label >Precio: </label>
        <input type="number" name="precio"><br>
        <label >Stock: </label>
        <input type="number" name="stock">


        <br><br>

        <button>Guardar</button>

    </form>

</body>
</html>