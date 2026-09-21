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



foreach ($productos as $producto){
    if ($producto['stock'] > 0){
        $estado = "Disponible";
    }elseif($producto['stock'] === 0){
        $estado = "Agotado";
    }
    
     $valorInventario = $producto['precio'] * $producto['stock'];

    echo "Producto: " .$producto['nombre'] ."<br>";
    echo "Precio: " .$producto['precio'] ."<br>";
    echo "Stock: " .$producto['stock'] ."<br>";
    echo "Estado: " . $estado ."<br>";
    echo "Valor en el inventario: $ ".$valorInventario . "<br>"; 

}

?>


