<?php

// $value = 100;                  
// $value2 = 10;
// $operador = 'perc+';

// $resultado = 0;


// if ($operador == '+'){
//     $resultado = $value + $value2;
// }

// if ($operador == '-'){
//     $resultado = $value - $value2;
// }

// if ($operador == '*'){
//     $resultado = $value * $value2;

// }

// if ($operador == '/'){
//     $resultado = $value / $value2;

// }

// if ($operador == '^'){
//     $resultado = pow($value, $value2);
//     $resultado = $value ** $value2;

// }

//  if ($operador == 'perc'){
//      $desconto = ($value * $value2)  / 100;  //10
//      $resultado = $value / - $desconto;
// }

// if ($operador == 'perc+'){
//     $acrescimo= ($value * $value2) / 100;
//     $resultado = $value + $acrescimo;
// }

// //    echo "o valor é {$resultado}";

// //


// $media =6;

// $prova = 4.8;
// $peso = 5;
// $prova2 = 1.5;
// $peso2 = 3;
// $prova3 = 3;
// $peso3 = 2;
// $numerador = ($prova * $peso) + ($prova2 * $peso2) + ($prova3 * $peso3);
// $denominador = ($peso + $peso2 + $peso3);
// $MP = $numerador / $denominador;

// $mp= $numerador / $denominador;

//    if ($mp >= $media ) { 
//    echo " O aluno foi reprovado {$MP}";

//    $numero = 1;
//    $contador = 0;

//    for ($i = 1; $i <= $numero ; $i ++)


//    if ($numero % $si ==0)

// {

//      $contador ++;# code ...

// } #code ...
//    }

//     if($contador ==2)

// {

//    echo "primo "; # code...
// }

//     else

// {
//     echo "nao primo";

// }


    $acrecimos = 0; 
    $horaInicial = '16:00:00';
    $horaFinal = '17:30:00';

    $arrHora = explode(":",$horaInicial);
    $hora = $arrHora[0];
    $minutos = $arrHora[1];
    $segundos = $arrHora[2];


    $horaEmSegundos = $hora * 3600;
    $minutosEmSegundos = $minutos * 60;

    $totalInicialEmSegundos = $horaEmSegundos + $minutosEmSegundos + $segundos;

    $arrHora = explode(":", $horaFinal);
    $horaFinal = $arrHora[0];
    $minutosFinal = $arrHora[1];
    $segundosFinal = $arrHora[2];

    $horaFinalEmSegundos= $horaFinal * 3600;
    $minutosFinalEmSegundos= $minutosFinal * 60;

    $totalFinalEmSegundos = $horaFinalEmSegundos + $minutosFinalEmSegundos + $segundosFinal;

    $tempoDoJogo = ($totalFinalEmSegundos - $totalInicialEmSegundos) /60;

     echo "tempo do jogo {$tempoDoJogo}";

     //Tempo da partida

     $acrecimos = 5;
     $horaInicial = '23:00:00';
     $horaFinal = '00:30:00';




