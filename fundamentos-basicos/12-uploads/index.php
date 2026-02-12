<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazendo uploads de arquivos</title>
</head>
<body>

    <?php
    if (isset($_POST['button'])) {
        $formatosPermitidos = array("png", "jpeg", "jpg", "txt");
        $extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);

        if (in_array($extensao, $formatosPermitidos)) {
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'];
            $novoNome = uniqid().".$extensao";

            if (move_uploaded_file($temporario, $pasta.$novoNome)) {
                $messangem = "uploado realizado com sucesso!";
            } else {
                $messangem = "Erros, não foi possível realizar o upload";
            }
        } else {
            echo "Não existe";
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo"><br>
        <button type="submit" name="button">Enviar formulario</button>
    </form>
</body>
</html>