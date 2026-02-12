<?php
// Faz conexão com banco
require_once('db_connect.php');

// Inicia sessões
session_start();

// Verifica se a sessão "logado" NÃO existe
// Se não existe, significa que a pessoa não fez login
if (!isset($_SESSION['logado'])) {

    // Redireciona para a página de login
    header('Location: index.php');
}

// Pega o ID do usuário que foi salvo na sessão durante o login
$id = $_SESSION['id_usuarios'];

// Busca os dados desse usuário no banco
// Aqui você pega todos os campos da tabela usuarios
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);

// Converte o resultado para array (para acessar nome, login, etc)
$dados = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>página restrita!</title>
</head>
<body>

    <!-- Exibe o nome do usuário -->
    <h1>Olá <?php echo $dados['nome']; ?></h1>

    <!-- Link para sair (logout) -->
    <a href="logout.php">Sair da conta</a>

</body>
</html>
