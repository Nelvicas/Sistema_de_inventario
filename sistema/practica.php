<?php

$productos = [
    [
        'nombre' => 'Laptop',
        'precio' => 15000,
        'stock' => 5
    ],
    [
        'nombre' => 'Mouse',
        'precio' => 500,
        'stock' => 0
    ],
    [
        'nombre' => 'Monitor',
        'precio' => 5000,
        'stock' => 3
    ],
    [
        'nombre' => 'Teclado',
        'precio' => 1200,
        'stock' => 8
    ]
];


$totalInventario = 0;
$productosAgotados = 0;
$productosDisponibles = 0;


foreach ($productos as $producto){

    $estado = obtenerEstado($producto['stock']);

    if ($producto['stock'] > 0){
       // $estado = "Disponible";
        $productosDisponibles ++;
    }elseif($producto['stock'] === 0){
        //$estado = "Agotado";
        $productosAgotados ++;       // incrementa (++)
    }
    
    $valorInventario = calcularValorInventario($producto['precio'],$producto['stock']);   // mandar a llamar la funcion y se asigno 

    $totalInventario += $valorInventario;   // acumulador (+=)
    

    echo "Producto: " .$producto['nombre'] ."<br>";
    echo "Precio: " .$producto['precio'] ."<br>";
    echo "Stock: " .$producto['stock'] ."<br>";
    echo "Estado: " . $estado ."<br>";
    echo "Valor en el inventario: $ ".$valorInventario . "<br>";

}


function calcularValorInventario($precio, $stock) {     //  funcion creada  
 
    $resultado = $precio * $stock;
    return $resultado;

}

function obtenerEstado($stock) {
    if($stock > 0){
        return "Disponible";
    }else{
        return "Agotado";
    }
   

}

echo "Valor total de inventario: $".$totalInventario . "<br>";
echo "Productos Agotados: " .$productosAgotados . "<br>";
echo "Productos Disponibles: " .$productosDisponibles ."<br>";

?>


