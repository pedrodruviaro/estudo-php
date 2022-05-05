<?php

// Exibir a tabuada de determinado número
$numeroTabuada = 5;

for($i = 0; $i <= 10; $i++){
    $multiplicacao = $i * $numeroTabuada;
    echo "$numeroTabuada x $i = $multiplicacao \n";
}