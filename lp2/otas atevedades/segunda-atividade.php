<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    <?php
    //@breno israel

    function triangulo($base, $altura, $lado) {
    echo "<h1>Triângulo</h1>";
    echo "Base: $base<br>";
    echo "Lado: $lado<br>";
    echo "Altura: $altura<br>";

    $area = ($base * $altura) / 2;
    $perimetro = ($lado * 2) + $base;

    echo "Área: $area<br>";
    echo "Perímetro: $perimetro<br>";
}

    triangulo(4, 3, 5);

    function baskara($a, $b, $c) {
        echo"<h1>baskara</h1>";
        echo"<h2>X²$b X+($c) = 0</h2>";

        $delta = ($b**2) - (4*$a*$c);
        $baskara_positivo = ((-$b) + sqrt($delta))/2*$a; 
        $baskara_negativo = ((-$b) - sqrt($delta))/2*$a; 
        echo"X' = $baskara_positivo<br>";
        echo"X'' = $baskara_negativo";
    }

    baskara(1, -5, 6);

    function media_aritmetica($n1, $n2, $n3, $p1, $p2, $p3) {
        echo"<h1>Média Aritmética</h1>";
        $aritmetrica = (($n1*$p1) + ($n2*$p2) + ($n3*$p3))/($p1 + $p2 + $p3);
        echo"A média ponderada é: $aritmetrica";
    }

    media_aritmetica(8.0, 7.6, 8.3, 2, 3, 5);

    function distancia($x1, $y1, $x2, $y2) {
        echo"<h1>Distância entre dois pontos</h1>";
        $distancia = sqrt((($x2 - $x1)**2) + (($y2 - $y1)**2));
        echo"A distância entre os pontos é: $distancia";
    }

    distancia(1, 2, 4, 6);

    function soma_pa($a1, $r, $n) {
        echo"<h1>Soma dos termos de uma PA</h1>";
        $an = $a1 + ($n - 1) * $r;
        $soma = ($n / 2) * ($a1 + $an);
        echo"A soma dos termos da PA é: $soma";
    }

    soma_pa(2, 4, 6);

    


?>
</body>
</html>