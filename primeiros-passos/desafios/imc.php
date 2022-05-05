<?php

// Calcule o IMC com altura e peso passados e informa se está abaixo, dentro ou acima

$peso = 200;
$altura = 1.82;

$imc = $peso / ($altura * $altura);

if($imc < 18.5){
    echo "$imc : BAIXO";
} else if ($imc >= 18.5 && $imc < 24.9){
    echo "$imc : NORMAL";
} else {
    echo "$imc : ALTO";
}