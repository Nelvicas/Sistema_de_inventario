<?php

// variables y tipos de operadores
$nombre = "Nelvi";
$edad = 33;
$puesto = "Devops Jr";



// condicon if
$precio = 1500;

if($precio > 1000){
    echo "Producto premium";
}else{
    echo "Producto estandar";
}


// ejemplo 2 if 

$precio2 = 750;
if($precio2 > 1000){
    echo "Producto Premium<br>";
}elseif($precio2 > 500 && $precio2 < 1000){
    echo "Producto estandar<br>";
}else{
    echo "Producto Economico<br>";
}


//   -> significa “entra al objeto y obtén una propiedad o ejecuta un método”.


// array
$productos = [
    "Laptop",
    "Mouse",
    "Teclado",
    "Monitor"
];

echo $productos[3];


///////////////////////

require 'funciones.php';


$producto = [
    "nombre" => "Laptop",
    "stock" => 1
];

if(tieneStock($producto)){
    echo "Producto Disponible";
}else{
    echo "Producto Agotado";
}


$resultado = calcularDescuento(100, 25);

echo $resultado;



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de invenario</title>
</head>
<body>
    <h1>Bienvenido al sistema</h1>
    <p>Desarrollador: <?= $nombre ?></p>
    <p>Edad: <?= $edad ?></p>
    <p>Puesto: <?=  $puesto ?></p>
    
</body>
</html>