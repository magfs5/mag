<?php

$doces = [["paçoca", 8.5],["bananada", 3],["jujuba", 7],["brigadeiro", 7.5],["bolo de cenoura com cobertura de chocolate" ,10]];
$doces[1][1]=4;
array_push($doces,["quindim",7]);
// print_r($doces);
foreach($doces as $elem){
    print($elem[0]). " ". $elem[1] . "\n";

}

?>


