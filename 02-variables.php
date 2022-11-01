<?php include 'includes/header.php';

$nombre = "Esteban"; //para el naming aplican las mismas reglas que para js, sólo que puede comenzar y terminar con guion bajo
$nombre = "Esteban reasignado";
echo $nombre;

define("constante", "<br>Éste es el valor"); //Define es una "propiedad" nueva
echo constante;

const constante2 = "<br>Hola constante 2"; //otra manera, no tan utilizada
echo constante2;


include 'includes/footer.php';