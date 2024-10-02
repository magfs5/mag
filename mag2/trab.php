<?php
// usuario isere sua idade
// se maior de idade->imprima 3 programas infantis
// se maior de idade -> imprima 3 carros com seus preços

function listarcarros(){
    echo "opala,R$ 60.000\Vectra, R$15.000\Gol,R$ 75.000\n"; 
}

function listarprogramasInfantis(){
    echo"tomejerry\npicapau\nlooneytoones\n";
}



$idade = readline ("digite sua idade:");

if($idade>=18){
    listarcarros();



}
else{
    listarprogramasInfantis();
    
}


?>





