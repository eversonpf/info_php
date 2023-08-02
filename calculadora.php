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


<?php

$value = 100;
$value2 = 10;
$operador = 'perc+';

$resultado = 0;


if ($operador == '+'){
    $resultado = $value + $value2;
}

if ($operador == '-'){
    $resultado = $value - $value2;
}

if ($operador == '*'){
    $resultado = $value * $value2;

}

if ($operador == '/'){
    $resultado = $value / $value2;

}

if ($operador == '^'){
    $resultado = pow($value, $value2);
    $resultado = $value ** $value2;

}

 if ($operador == 'perc'){
     $desconto = ($value * $value2)  / 100;  //10
     $resultado = $value / - $desconto;
}

if ($operador == 'perc+'){
    $acrescimo= ($value * $value2) / 100;
    $resultado = $value + $acrescimo;
}

    echo "o valor é {$resultado}";





