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