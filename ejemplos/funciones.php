<?php

// funciones

function calcularDescuento($a , $b ){
    $descuento = ($a * $b)/ 100;
    $total = $a - $descuento;
    return $total;
}

$resultado = calcularDescuento(100,25);

echo $resultado;




$producto = [
    "nombre" => "Laptop",
    "stock" => -1
];

function tieneStock($producto){
    if($producto['stock'] > 0){
        return true;
    }
    return false;
}

if(tieneStock($producto)){
    echo "Producto Disponible";
}else{
    echo "Producto Agotado";
}