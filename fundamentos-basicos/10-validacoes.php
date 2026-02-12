<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando um forms</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Idade: <input type="text" name="idade"> <br>
        Email: <input type="text" name="email"> <br>
        Peso: <input type="text" name="peso"> <br>
        IP: <input type="text" name="ip"> <br>
        URL: <input type="text" name="url"> <br>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <?php

    if (isset($_POST['enviar'])) {
        $erros = array();
        if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
            $erros[] = "Número inválido!";
        } if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            $erros[] = "Email inválido!";
        } if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
            $erros[] = "Digite seu peso!";
        } if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
            $erros[] = "IP inválido!";
        } if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
            $erros[] = "URL inválida!";
        }
        if (empty($erros)) {
            echo "Cadastro realizado com sucesso!";
        } else {
            foreach ($erros as $erro) {
                echo "<li> $erro <br>";
            } 
        }
    }

    ?>
</body>
</html>