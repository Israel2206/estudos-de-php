<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando um forms</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome"> <br>
        Idade: <input type="text" name="idade"> <br>
        Email: <input type="text" name="email"> <br>
        Peso: <input type="text" name="peso"> <br>
        URL: <input type="text" name="url"> <br>
        <button type="submit" name="enviar">Enviar</button>
    </form>

    <?php

if (isset($_POST['enviar'])) {
        $erros = array();
        
        //sanitize
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        if (!filter_var($idade, FILTER_VALIDATE_INT)) {
            $erros[] = "Precisa ser um número inteiro!";
        }

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros[] = "Email inválido!";
        }

        $peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_FLOAT);
        if (!filter_var($peso, FILTER_VALIDATE_FLOAT)) {
            $erros[] = "Peso inválido!";
        }

        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            $erros[] = "URL inválida!";
        }
        if (!empty($erros)) {
            foreach ($erros as $erro) {
                echo "<li> $erro <br>";
            } 
        } else {
            echo "Cadastro realizado com sucesso!";
        }
    }

    ?>
</body>
</html>