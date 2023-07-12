<?php

$value = '300';
$value2 = "500";
$operador ='+';

$resultado = 0;

if ($operador == "+"){
    $resultado = $value + $value2;
}


if ($operador == "-"){
    $resultado = $value - $value2;
}


if ($operador == "*"){
    $resultado = $value * $value2;
}


if ($operador == "/"){
    $resultado = $value / $value2;
}

echo $resultado;
