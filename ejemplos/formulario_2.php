<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {  // esta linea significa que se estan enviando datos por el metodo post

    if (empty($_POST['nombre'])) { 
            echo "El nombre es obligatorio"; 
        } elseif (empty($_POST['precio'])) { 
            echo "El precio es obligatorio"; 
        } elseif (!is_numeric($_POST['precio'])) {
            echo "El precio debe ser un número";
        }elseif ($_POST['precio'] <= 0) { 
            echo "El precio debe ser mayor que 0"; 
        } elseif ($_POST['stock'] === '') { 
            echo "El stock es obligatorio"; 
        } elseif (!is_numeric($_POST['stock'])) {
            echo "El stock debe ser un número";
        } elseif ($_POST['stock'] < 0) { 
            echo "El stock no puede ser negativo"; 
        } else {

        
        $nombre = trim($_POST['nombre']);
        $precio = trim($_POST['precio']);
        $stock = trim($_POST['stock']);

        echo "Producto recibido: " . $nombre. "<br>";
        echo "Precio: ". $precio. "<br>";
        echo "Stock: ". $stock . "<br>";

        echo "Nombre valido";
    }


    /*
        isset()         significa existe este dato?
        empty()         significa este dato esta vacio?

        !is_numeric     este valor no representa un numero 

        trim()     sanear/normalizar los datos recibidos  pasa de esteo (   "     Laptop     "   )  a esto (   "Laptop"   ) elimina los espacios al principio y al final del texto
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