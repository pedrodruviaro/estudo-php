<?php

$idade = 17;
$nome = "pedro";
$numeroPessoas = 2;

echo "Você só pode entrar se tiver mais do que 18 anos" . PHP_EOL;

// if($idade >= 18 && $nome == "pedro"){
//     echo "Você tem $idade. Pode entrar";
// } else {
//     echo "Você tem $idade. Não pode entrar";
// };

// echo PHP_EOL;
// echo "Adeus";


if($idade >= 18){
    
    echo "Você tem $idade. Pode entrar";

} else if($idade >= 16 && $numeroPessoas > 1){

        echo "Você tem $idade anos, está acompanhado, pode entrar!";

    } else {
        
        echo "Você tem $idade e está desacompanhado. Não pode entrar";
};

echo PHP_EOL;
echo "Adeus";