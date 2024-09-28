<?php

$lista=["café", "açucar","manteiga", "pão"];
array_push($lista,"queijo");
// for($i=0; $i<count(lista); $i++){
// echo count($lista);for($i=0 ; $i<count($lista); $i++){
    echo "$lista[$i]\n";
// }
// ultimo = array_pop($lista)
sort($lista);
// inserir presunto porem de uma forma ordenada
// array_splice(1,2,3,4)
// 1. sua lista
// 2.posição que vc quer inserir 
// 3.quer remover elementos? se não quiser, coloque 0
// 4.elemento que vc quer iserir

array_splice($lista, 4, 0,"presunto");{
foreach ($lista as $item)
    echo"$item\n";
}

$ultimo = array_pop ($lista);
//  echo $ultimo;

?>