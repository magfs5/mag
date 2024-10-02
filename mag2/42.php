<?php
// usuario digita 10 numeros
// programa fala quantos deles é maior do que 10
// pergunta1: como verifico seum numero é maior que 10
// pergunta 2: como faço para contar quantos numeros 
// maiores que 10 existem levando em conta o que usuário digitou?

$saomaiores = 0;
for($i=0;$i<10;$i++){
    $numero = readline("digite um numero ");
    

if($numero>10){
    $saomaiores++;
}
}
print("existem $saomaiores numeros maiores que 10\n");
?>


