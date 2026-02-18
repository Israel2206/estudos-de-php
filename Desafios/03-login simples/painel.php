<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
}else {
    if(isset($_POST['btn-sair'])){
        session_unset();
        session_destroy();
        header("Location: login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>

    <h2>Bem-vindo, admin</h2>
    <form method="post">
        <button type="submit" name="btn-sair">Sair da Conta</button>
    </form>

</body>
</html>
