<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora Simples</h1>
    <form action="" method="post">
        <fieldset>
            <input type="text" name="n1">
            <br>
            <input type="text" name="n2">
            <br>
            <select name="operacao">
                <option value="soma">Somar</option>
                <option value="sub">Subtrair</option>
                <option value="mult">Multiplicar</option>
                <option value="div">Dividir</option>
            </select>
            
            <button type="submit" name="botao">Realizar Operação</button>
        </fieldset>
    </form>
</body>
</html>

<?php
if (isset($_POST['botao'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operacao = $_POST['operacao'];
    
    if (isset($n1, $n2)) {
        if (is_numeric($n1) && is_numeric($n2)) {
            switch ($operacao) {
                case 'soma':
                    echo $n1 + $n2;
                    break;
                case 'sub':
                    echo $n1 - $n2;
                    break;
                case 'mult':
                    echo $n1 * $n2;
                    break;
                case 'div':
                    if ($n2 == 0) {
                        echo "Não é possível dividir por zero!";
                    } else {
                        echo $n1 / $n2;
                    }
                    break;
            }
        }else {
            echo "Digite apenas números!";
        }
    }else {
        echo "Preencha as Caixas!";
    }
}


?>