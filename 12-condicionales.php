<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if ($autenticado && $admin) {
    echo "autenticado";
} else {
    echo "no autenticado";
}

//ifs anidados
$cliente = [
    "nombre" => "Juan",
    "saldo" => 10,
    "info" => [
        "tipo" => "premium"
    ]
];

if (!empty($cliente)) {
    echo "El cliente existe";

    if ($cliente["saldo"] > 0) {
        echo "el cliente tiene saldo";
    } else {
        echo "No tiene saldo";
    }
}

if ($cliente["saldo"]) {
    echo "El cliente tiene saldo";
} else if ($cliente["info"]["tipo"] === "premium") {
    echo "es premium";
} else {
    echo "no tiene un mango";
}

$tecnologia = "PHP";

switch ($tecnologia) {
    case "PHP":
        echo "PHP Es lo más";
        break;
    default:
        echo "Guien soo";
        break;
}



include 'includes/footer.php';
