

//  for y while 
//  for

<?php
for($i = 0; $i <= 10; $i++){
    echo $i."<br>";
}


// ejercicio 2

echo " ejercicio 2". "<br>";
for ($j = 2; $j <= 10; $j+=2 ){
    
    echo $j. "<br>";
}


//ejercicio 3
echo " ejercicio 3". "<br>". "<br>";


$precios = [100, 750, 1500, 300, 2000];

for ($k =0; $k < count($precios); $k++){
    if($precios[$k] > 1000){
        echo $precios[$k]."<br>";
    }
}

/*   con foreach
$precios = [100, 750, 1500, 300, 2000];

foreach ($precios as $precio) {

    if ($precio > 1000) {
        echo $precio . "<br>";
    }

}
*/

// ejercicio 4 

$precios2 = [100, 750, 1500];

for ($a = 0; $a < count($precios2); $a++){
    echo $precios2[$a]. "<br>";
}


/*   con foreach
$precios2 = [100, 750, 1500];

foreach ($precios2 as $precio) {
    echo "Precio: ".$precio;
}
*/


///////////////   Uso de while ////////

echo  "uso de while"."<br>";

$b = 1;

while ($b <= 5) {
    echo $b . "<br>";
    $b++;
}


// ejercicio while 1 

echo "ciclo while". "<br>";

$c = 10;

while($c >= 0){
    echo $c . "<br>";
    $c--;
}


/////// ejercicio 4 

require 'array.php';

foreach ($producto6 as $producto){ 
    if ($producto['stock']> 0){
        echo $producto['nombre']. "<br>";
    }
}

?>
