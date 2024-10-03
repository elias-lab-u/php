<?php
$n1 = isset($_GET['n1']) ? (float)$_GET['n1'] : 0;
$n2 = isset($_GET['n2']) ? (float)$_GET['n2'] : 0;
$op = isset($_GET['operacion']) ? $_GET['operacion'] : '';
$r = "no se a realizado la operacion";

if ($op == "s") {
    $r = sumar($n1, $n2);
    echo "La suma es: " . sumar($n1, $n2);
} elseif ($op == "r") {
    echo "La resta es: " . restar($n1, $n2);
} elseif ($op == "m") {
    echo "La multiplicación es: " . multiplicar($n1, $n2);
} elseif ($op == "d") {
    echo "La división es: " . dividir($n1, $n2);
}
header("location: index.php?=m".$r);
exit;
function sumar($n1, $n2) {
    return $n1 + $n2;
}

function restar($n1, $n2) {
    return $n1 - $n2;
}

function multiplicar($n1, $n2) {
    return $n1 * $n2;
}

function dividir($n1, $n2) {
    return $n1 / $n2;
}
?>