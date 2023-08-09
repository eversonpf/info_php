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

//    echo "o valor é {$resultado}";

//

  

$media =6;

$prova = 4.8;
$peso = 5;
$prova2 = 1.5;
$peso2 = 3;
$prova3 = 3;
$peso3 = 2;
$numerador = ($prova * $peso) + ($prova2 * $peso2) + ($prova3 * $peso3);
$denominador = ($peso + $peso2 + $peso3);
$MP = $numerador / $denominador;

$mp= $numerador / $denominador;

if ($mp >= $media ) { 
   echo " O aluno foi reprovado {$MP}";
  

}






