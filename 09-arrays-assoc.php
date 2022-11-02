<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Juan',
    'edad' => 50,
    'informacion' => [
        'tipo' => 'alta gama'
    ]
];

echo "<pre>";
var_dump($cliente['nombre']); //para acceder a un índice se llama al name del índice
var_dump($cliente['informacion']['tipo']);
echo "</pre>";

$cliente['codigo'] = 13215; //de esta manera de agrega una propiedad inexistente o se modifica una existente



include 'includes/footer.php';