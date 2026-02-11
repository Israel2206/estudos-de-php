<?php
//Arrays
$carros = array(1=>"Fusca", "Opala", "Onix");
print_r($carros); //O echo não funcioan em arrays, só funciona se vc especificar o indice.
echo"<hr><br>";
echo $carros[2  ]; //agora imprime.
echo"<br>";

$carros[] = "Amarok";
print_r($carros);

echo"<br>";

$carros[2] = "Camaro";
print_r($carros);
?>