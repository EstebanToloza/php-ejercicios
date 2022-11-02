<?php include 'includes/header.php';

//Arrays indexados
$carrito = ["tablet", "television", "teléfono"]; //una manera de crear un array
$otroCarrito = array(); //otra forma

$carrito[3] = "nuevo"; //agregar nuevo producto en índice determinado

array_push($carrito, "Licuadora"); //agrega al final
array_unshift($carrito, "Licuadora de mano"); //agrega al incio


//útil para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
var_dump($carrito[1]); //para acceder a un índice
echo "</pre>";

echo "<br>";

$otroCarrito = array("item1", "item2", "item3"); //otra forma. Misma estructura y métodos





include 'includes/footer.php';