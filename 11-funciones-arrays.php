<?php include 'includes/header.php';

$carrito = ['tablet', 'heladera', 'tv'];

var_dump( in_array('tablet', $carrito) ); //verificar si un elemento existe en un array

$lista = [1, 3, 6, 2, 4]; //ordenar elementos de array
sort($lista); //de menor a mayor
//rsort($lista); //de mayor a menor

echo "<pre>";
var_dump( $lista );
echo "</pre>";

//ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

asort($cliente); //ordena por valores
arsort($clientes); //ordena por valores, Z primero
ksort($cliente); //ordena por llaves
krsort($cliente); //ordena por llaves, de Z a A

echo "<pre>";
var_dump( $cliente );
echo "</pre>";

include 'includes/footer.php';