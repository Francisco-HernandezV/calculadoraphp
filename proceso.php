<?php
function suma($a, $b) {
    return $a + $b;
}

function resta($a, $b) {
    return $a - $b;
}

function multiplicacion($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "Error: División por cero no permitida.";
    }
    return $a / $b;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $val1 = $_POST['num1'];
    $val2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    // Validar que los números sean válidos}
    if (!is_numeric($val1) || !is_numeric($val2)) {
        echo "Error: Por favor ingrese números válidos.";
        exit();
    }

    $val1 = (float)$val1;
    $val2 = (float)$val2;
    $resultado = "";

    switch ($operacion) {
        case "suma":
            $resultado = suma($val1, $val2);
            break;
        case "resta":
            $resultado = resta($val1, $val2);
            break;
        case "multiplicacion":
            $resultado = multiplicacion($val1, $val2);
            break;
        case "division":
            $resultado = division($val1, $val2);
            break;
        default:
            echo "Error: Operación no válida.";
            exit();
    }

    echo "Resultado de la operación (" . $operacion . "): " . $resultado;
} else {
    echo "Error: Método de solicitud no válido.";
}
?>