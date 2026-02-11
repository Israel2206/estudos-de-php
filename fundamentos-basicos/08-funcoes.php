<?php
//Funções
function exibirNome($nome){
    echo "Meu nome é $nome";
}

exibirNome("Banana");

echo "<hr>";

function calcularMedia($n1, $n2){
    $media = ($n1+$n2)/2;
    if ($media >=6) {
        echo "Aprovado<br>";
        echo "A média é $media";
        } else {
            echo "reprovado!<br>";
            echo "A média é $media";
    }
}

calcularMedia(9,5);

?>