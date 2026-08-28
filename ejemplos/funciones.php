<?php

// funciones

function calcularDescuento($precio , $porcentaje ){
    $descuento = ($precio * $porcentaje)/ 100;
    $total = $precio - $descuento;
    return $total;
}

/*
$resultado = calcularDescuento(100,25);

echo $resultado;


$producto = [
    "nombre" => "Laptop",
    "stock" => -1
];

*/

function tieneStock($producto){
    if($producto['stock'] > 0){
        return true;
    }
    return false;
}

/*
if(tieneStock($producto)){
    echo "Producto Disponible";
}else{
    echo "Producto Agotado";
}

*/

require 'array.php';

function productoDisponible($producto6){
    foreach($producto6 as $producto){
        if($producto['stock'] > 0 ){
            echo $producto['nombre'] ." Esta disponible";
        }else{
            echo $producto['nombre'] ." Esta Agotado";
        }
    }
}


function calcularTotal($producto6){

    $total = 0;
    foreach($producto6 as $producto){
        $total += $producto['precio'] * $producto['stock'];
    }

    return $total;
}

