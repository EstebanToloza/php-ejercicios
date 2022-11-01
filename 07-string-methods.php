<?php include 'includes/header.php';

$nombreCliente = "Esteban Toloza";

echo strlen($nombreCliente);//toma en cuenta espacios en blanco
echo "<br>";

$texto = trim($nombreCliente); //para eliminar espacios en blanco
echo strlen($texto);
echo "<br>";

echo strtoupper($nombreCliente); //mayusculas ---- se utiliza, x ej, para normalizar datos de emails
echo strtolower($nombreCliente); //minusculas
echo "<br>";

echo str_replace('Esteban', '*', $nombreCliente); 
//primer valor, la cadena a reemplazar
//segundo valor, el reemplazo
//tercer valor, en dónde busca

echo $nombreCliente;
echo "<br>";
echo $nombreCliente;
echo "<br>";

//revisar si str existe o no
echo strpos($nombreCliente, "Esteban");
echo "<br>";

//concatenar string
$tipoCliente = "normal";
echo "El cliente " . $nombreCliente . " es " . $tipoCliente;
echo "<br>";

echo "El cliente {$nombreCliente} es ${tipoCliente}";

 


include 'includes/footer.php';