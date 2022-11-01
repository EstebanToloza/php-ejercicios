<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero1 = "20";

var_dump($numero1 > $numero2);
echo "<br>";
// < menor que
// <= // >= menor/mayor igual
// == igualdad
// === igualdad estricta

var_dump($numero1 <=> $numero2); //Si el número de la izq es menor, da -1; si es igual, da 0; si es menor, da 1.
echo "<br>";

var_dump($numero2 <=> $numero1);
echo "<br>";

var_dump($numero2 <=> $numero2);
echo "<br>";






include 'includes/footer.php';