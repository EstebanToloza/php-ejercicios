<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array("Juan", "pedro");

var_dump(( empty($clientes) )); //revisa si un arreglo está vacío
var_dump(( empty($clientes2) ));
var_dump(( empty($clientes3) ));

var_dump(( isset($clientes4) )); //revisar si arreglo o propiedad estan creados o definidos
var_dump(( isset($clientes2["Edad"]) ));
var_dump(( isset($clientes3) ));


include 'includes/footer.php';