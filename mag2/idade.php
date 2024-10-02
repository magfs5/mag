<?php

// usuario digita um numero 
// computador escolhe um numero
// se a soma dos 2 for par eu ganho 
// se for impar o computador vence 

function ehparouimpar($usuario, $computador){
    $soma = $usuario + $computador;
    // se a soma é um numro par
    if($soma%2==0){
        echo "usuario ganhou\n";
    }
    else{
        echo"computador ganhou\n";

    }

}

$usuario = readline("digite un numero;");
$computador = rand(1,100);
ehparouimpar($usuario,$computador)

?>