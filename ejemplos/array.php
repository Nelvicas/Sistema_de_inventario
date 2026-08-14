<?php

//  array

$productos = [
    "Laptop",
    "Mouse",
    "Teclado",
    "Monitor"
];

echo $productos[3]."<br>";



// array asociativo


$producto2 = [ 
    
    "nombre" => "Laptop",
    "precio" => 15000,
    "stock" => 3
    
];

echo $producto2['precio']."<br>";


$producto3 = [ 
    [
    "nombre" => "Laptop",
    "precio" => 15000,
    "stock" => 3
    ],
    [
    "nombre" => "Mouse",
    "precio" => 500,
    "stock" => 10
    ],
    [
    "nombre" => "Teclado",
    "precio" => 800,
    "stock" => 5
    ]
];


echo $producto3[2]['precio']."<br>";




//   ciclos foreach

$producto4 = [ 
    [
    "nombre" => "Laptop",
    "precio" => 15000,
    "stock" => 3
    ],
    [
    "nombre" => "Mouse",
    "precio" => 500,
    "stock" => 10
    ],
    [
    "nombre" => "Teclado",
    "precio" => 800,
    "stock" => 5
    ]
];

foreach ($producto4 as $producto){
    echo $producto['nombre'];
}



// ejercicio  


$producto5 = [
    [
        "nombre" => "Laptop hp",
        "precio" => 15000,
        "stock" => 3
    ],
    [
        "nombre" => "Mouse LG",
        "precio" => 500,
        "stock" => 10
    ],
    [
        "nombre" => "Teclado",
        "precio" => 800,
        "stock" => 0
    ],
    [
        "nombre" => "Monitor",
        "precio" => 800,
        "stock" => 7
    ]
];

foreach ($producto5 as $product){

    if($product['stock'] > 0){
        echo $product['nombre'];
    }
}


$producto6 = [
    [
        "nombre" => "Laptop Dell",
        "precio" => 15000,
        "stock" => 3
    ],
    [
        "nombre" => "Mouse LG",
        "precio" => 500,
        "stock" => 10
    ],
    [
        "nombre" => "Escritorio",
        "precio" => 800,
        "stock" => 0
    ],
    [
        "nombre" => "Pila",
        "precio" => 800,
        "stock" => 7
    ]
];

foreach ($producto6 as $indice => $product){
    echo "Producto". $indice.":".$product['nombre']."<br>";
}

?>
