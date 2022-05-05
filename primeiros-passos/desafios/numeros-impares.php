<?php

// Exibir os ímpares até 100
$total = 100;

for($i = 0; $i <= $total; $i++){
    
    if($i % 2 != 0){
        echo "$i" . PHP_EOL;
    } else {
        continue;
    }
    

}