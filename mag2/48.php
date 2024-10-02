<?Php
//digite 10 nomes de pessoas e seus bairros 
//imprima em ordem alfabetica pelo nome de pessoas

$cadastro = [];
for($i=0; $i<4; $i++){

    $nome = readline('digite seu nome');
    $bairro = readline('digite seu bairro:');
array_push($cadastro,[$nome, $bairro]);
}
sort($cadastro);
foreach($cadastro as $pessoaN){
    print($pessoa[0] . ",". $pessoa[1] . "\n");
}


?>

