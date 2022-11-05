<?php

declare(strict_types=1);
include 'includes/header.php';

function sumar(int $numero1 = 0, int $numero2)
{
    echo $numero1 + $numero2;
}

sumar(10, 10);

echo "<br>";

function sumar2(int $numero1 = 0, array $numero2)
{
    echo $numero1 + $numero2;
}

sumar2(10, []);


include 'includes/footer.php';
