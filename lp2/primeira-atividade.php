<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01</title>
</head>
<body>
    <?php
    //@Breno Israel - 3.18.2i
    //@Data-18/03/2026
    // 1° Triangulo
    echo"<h1>Triangulo</h1>";
    $base = 4;
    $altura = 3;
    $lado = 5;
    echo"Base: $base<br>";
    echo"Lado 1: $lado<br>";
    echo"Altura: $altura<br>";
    $area_t = ($base*$altura)/2;
    $teorema = (($base/2) ** 2) + ($altura**2);
    $raiz = sqrt($teorema);
    $perimetro_t = ($raiz*2)+$base;
    echo"Área: $area_t <br>";
    echo"Perímetro: $perimetro_t<br>";
    echo"Tamanho do lado isósceles: $raiz";
    echo"<hr>";
    // 2° Equação de Segundo grau
    echo"<h1>baskara</h1>";
    echo"<h2>X²+-5X+6 = 0</h2>";
    $a = 1;
    $b = -5;
    $c = 6;

    $delta = ($b**2) - (4*$a*$c);
    $baskara_positivo = ((-$b) + sqrt($delta))/2*$a; 
    $baskara_negativo = ((-$b) - sqrt($delta))/2*$a; 
    echo"X' = $baskara_positivo<br>";
    echo"X'' = $baskara_negativo";
    echo"<hr>";
    
    //3° João e sua matricula
    echo"<h1>Atividade 03</h1>";
    
    $nome = "João Batista";
    $matricula = "030303";
    $n1 = 8.0;
    $n2 = 7.6;
    $n3 = 8.3;
    $media = ($n1+$n2+$n3)/3;
    
    echo"<h2>Matricula $matricula - $nome<br>";
    echo"Média de $nome é $media</h2>";
    echo"<hr>";
    //4° Perimetro de um circulo
    echo"<h1>Circulo</h1>";
    $pi = 3.14;
    $r = 2;
    $area_c = $pi * (2 ** $r);
    $circunferencia_c = 2 * $pi * $r;
    echo"Área do circulo: $area_c<br>";
    echo"Circunferencia do circulo: $circunferencia_c";
    echo"<hr>";

    //5° Soma dos Angulos
    echo"<h1>Soma dos Ângulos</h1>";
    $n = 6;
    $s = 180 * ($n-2); 
    echo"A soma dos ângulos internos de é: $s";
    echo"<hr>";

    //6° Volume da esfera
    $r = 4;
    echo"<h1>Esfera</h1>";
    $volume_da_esfera = (4/3)* $pi * ($r**3);
    echo"o volume da esfera é $volume_da_esfera";
    echo"<hr>";

    //7° Média Aritmética
    echo"<h1>Média Aritmética</h1>";
    $n1 = 7;
    $n2 = 8;
    $n3 = 5;

    $p1 = 2;
    $p2 = 3;
    $p3 = 1;

    $aritmetrica = (($n1*$p1) + ($n2*$p2) + ($n3*$p3))/($p1 + $p2 + $p3);

    echo"A média ponderada é: $aritmetrica";
    echo"<hr>";

    //8° Valor futuro
    echo"<h1>Calculando os juros</h1>";
    $capital = 1200;
    $juros = 0.10;
    $periodo = 6;

    $valor_final = $capital * ((1 + $juros)**$periodo);
    
    echo"O valor final será de $valor_final";
    echo"<hr>";

    //9° Temperatura de celsius
    echo"<h1>convertendo celsius para fahrenheit</h1>";
    $celsiu = 30;
    $fahrenheit = (9/5)*$celsiu+32;

    echo"$celsiu celsius em fahrenheit é $fahrenheit °";
    echo"<hr>";

    //10° Distancia entre dois ponto
    echo"<h1>Distancia entre dois pontos</h1>";
    $x1 = 1;
    $x2 = 4;
    $y1 = 2;
    $y2 = 6;

    $carteziano = sqrt((($x2-$x1)**2)+(($y2-$y1)**2));

    echo"<h3>$carteziano</h3>";
    echo"<hr>";
    
    //11°Área de um trapezio
    echo"<h1>Calculando a área de um trapezio</h1>";
    $B_t = 11;
    $b_t = 7;
    $h_t = 6;
    $trapezio = (($B_t + $b_t)*$h_t)/2;
    echo"a área do trapezio é $trapezio";
    echo"<hr>";

    //12° Montante acumulado
    echo"<h1>Resultado de um montante acumulado:</h1>";
    $p = 1300;
    $i = 0.33;
    $t = 17;

    $montante = $p*((1+$i)*$t);
    echo"O valor do montante é $montante";
    echo"<hr>";

    //13° Progressão aritmetrica
    echo"<h1>A soma dos primeiros termos de uma PA</h1>";
    $a1 = 2;
    $an = 4;
    $n_pa = 6;
    $Sn = ($n_pa * ($a1+$an))/2;
    echo"$Sn";
    echo"<hr>";
    ?>
</body>
</html>