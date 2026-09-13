<!--


    /*
        isset()         significa existe este dato?
        empty()         significa este dato esta vacio?

        !is_numeric     este valor no representa un numero 

        trim()     sanear/normalizar los datos recibidos  pasa de esteo (   "     Laptop     "   )  a esto (   "Laptop"   ) elimina los espacios al principio y al final del texto
    */
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo producto</title>
</head>
<body>

    <h1>Registrar producto</h1>

    <form method="POST" action="procesar.php" >

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