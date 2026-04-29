<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATEVEDADE!!!!</title>
</head>
<body>
    <?php
    /*ATEVEDADES PARA SI FEZES:
    - CALCULO DA VELOCIDADE MEDIA[x]
    - juros[x]
    - montante[x]
    - imc [x]
    - temp convert [x]
    - calculadora de dois numeros[]
    - dizer se é pa ou impa [x]
    - media de 3 numero[x]
    */

    $altura = 1.83;
    $peso = 68;
    $imc = $peso / ($altura*$altura);
    echo"<h1>IMC: $imc</h1>\n";

    $celsiu = 36;
    $farenhait = (32  - $celsiu) * 5/9;

    echo"Celsius para fareihait: Celsiu = $celsiu -> farenhait = $farenhait  ";
    
    echo"<br>";
    
    $numeropaouimpa = 23;
    if ($numeropaouimpa %2==0) {
        echo "$numeropaouimpa = pá";
    } else{
        echo "$numeropaouimpa = ipá";
    }

    echo"<br>";

    $n1 = 10;
    $n2 = 42;
    $n3 = 423;

    $media = ($n1+$n2+$n3)/3;
    echo"A média de $n1, $n2 e $n3 -> $media";

    echo"<br>";

    $C = 1000;
    $i = 0.15;
    $n = 7;
    $jsimple = $C * $i * $n;
    $monatante= $C + $jsimple;
    echo"Os juros simples são: $jsimple";
    echo"<br>";
    echo"\nO montante é $monatante";

    echo"<br>";

    $distancia = 240;
    $tempo = 2;

    $vmedia = $distancia / $tempo;

    echo"a velodidade media é : $vmedia hr";

    echo"<br>";
    
    $a1 = 5; 
    $a2 = 6;
    $soma = $a1+$a2;
    $sub = $a1-$a2;
    $div = $a1/$a2;
    $mult = $a1*$a2;

    echo"Calculadora dos numeros $a1 e $a2: <br>Soma: $soma <br>Subtração: $sub <br>divisão: $div <br>Multiplicação: $mult";


?>
</body>
</html>