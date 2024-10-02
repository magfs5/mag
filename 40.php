<?php



$lista =[];
$somatorio =0;
for($i=0; $i<10;$i++){
$numero = readline("digite um numero");
// sem usar lista
$somatorio +=$numero;
// somatorio= $somatorio + $numero
}

echo "a soma é $somatorio\n";
// echo "a soma é:"array_sum($lista)\n";
$media = $somatorio/10;
// $media = array_sum($lista)/count($lista);
echo"média é $media\n";

?>


