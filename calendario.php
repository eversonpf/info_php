<?php


$datstr = "29/05/1990";
$data = explode("/", $datastr);
$dia = $data[0];
$mes = $data[1];
$ano = $data[2];

if ( $dia < 1 || $dia > 31) {
     $dia = 1;    

}

if ($mes < 1 || $mes > 12) {
    $mes = 1;
}

$meses30dias = [4, 6, 9, 11];
$meses31dias = [1, 3, 5, 7, 8, 10, 12]

if (in_array($mes, $meses30dias) && $dia >= 30 ) {
    $dia = 1;
    $mes += 1;

}

if(in_array($mes,$meses30dias) && $dia >= 30 ){
    $dia =31;
    $mes -= 1

}

      
if(in_array($mes, $meses31dias) && $dia >= 30 ){
    
}
