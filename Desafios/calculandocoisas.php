<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular as coisas</title>
</head>
<body>
    <?php
    /*@Breno Israel */
    echo"<h1>===CALCULANDO AS ÁREAS E UUS PERIMETRU===</h1><br>";
    
    /* Calculado a área e o perimetro do quadrado */
    echo"<h2>Quadrado:</h2>";
    $lado1_quadrado = 5;
    
    $perimetro_q = $lado1_quadrado*4;
    $area_q = $lado1_quadrado*$lado1_quadrado;
    
    echo"<h3>Perimetro: $perimetro_q cm<br>";
    echo"<h3>Área: $area_q cm</h3><br>";
    
    /* Calculado a área e o perimetro do retangulo */
    echo"<h2>Retangulo:</h2>";
    $base_r = 5;
    $altura_r = 10;
    
    $perimetro_r = (2*$base_r)+(2*$altura_r);
    $area_r = $base_r * $altura_r;
    
    echo"<h3>Perimetro: $perimetro_r cm<br>";
    echo"<h3>Área: $area_r cm</h3><br>";
    
    /* Calculado a área e o perimetro do Trapézio */
    echo"<h2>Trapézio:</h2>";
    
    $basona_t = 7;
    $base_t = 5;
    $altura_t = 10;
    $l1 = 3;

    $perimetro_t = $basona_t+$base_t+($l1*2);
    $area_t = (($basona_t+$base_t)* $altura_t)/2;

    echo"<h3>Perimetro: $perimetro_t cm<br>";
    echo"<h3>Área: $area_t cm</h3><br>";
    ?>
</body>
</html>
