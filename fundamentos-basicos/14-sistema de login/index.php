<?php
// Faz a conexão com o banco de dados
// Esse arquivo cria a variável $connect (mysqli_connect)
require_once('db_connect.php');

// Inicia o sistema de sessões do PHP
// Sessão serve pra guardar informações do usuário enquanto ele navega
session_start();

// Se o botão "Enviar" foi clicado, significa que o formulário foi enviado
if (isset($_POST['button'])) {

    // Array para armazenar mensagens de erro
    $erros = array();

    // Pega o login e senha do formulário
    // mysqli_escape_string protege contra alguns ataques de SQL Injection
    // (mas o ideal no futuro é usar prepared statements)
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    // Verifica se o login ou senha estão vazios
    if (empty($login) || empty($senha)) {
        $erros[] = "O campo login e senha precisam estar preenchidos!";
    } else {

        // Verifica se existe um usuário com esse login no banco
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect,$sql);

        // Se existir pelo menos 1 usuário com esse login
        if (mysqli_num_rows($resultado) > 0) {

            // Criptografa a senha digitada com MD5
            // (Importante: MD5 é fraco, no futuro use password_hash)
            $senha = md5($senha);

            // Agora busca o usuário completo, verificando login + senha
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' ";
            $resultado = mysqli_query($connect,$sql);

            // Se retornar exatamente 1 usuário, então login está correto
            if (mysqli_num_rows($resultado) == 1) {

                // Pega os dados desse usuário em formato de array
                $dados = mysqli_fetch_array($resultado);

                // Salva na sessão que o usuário está logado
                $_SESSION['logado'] = true;

                // Salva o ID do usuário na sessão para usar depois
                $_SESSION['id_usuarios'] = $dados['id'];

                // Redireciona o usuário para a página home.php
                header('Location: home.php');

            } else {
                // Se não encontrou, significa que a senha está errada
                $erros[] = "usuarios e senha n conferem";
            }

        } else {
            // Se não encontrou o login no banco
            $erros[] = "Usuarios inesistente!";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
</head>
<body>

    <h1>Login</h1>

    <?php
    // Se existir erro, imprime cada erro
    if (!empty($erros)) {
        foreach ($erros as $erro) {
            echo "$erro <br>";
        }
    }
    ?>

    <!-- Formulário de login -->
    <!-- action aponta para ele mesmo, ou seja, envia os dados para index.php -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>
            <!-- Campo login -->
            Login: <input type="text" name="login"><br>

            <!-- Campo senha -->
            Senha: <input type="password" name="senha"><br>

            <!-- Botão de envio -->
            <button type="submit" name="button">Enviar</button>
        </fieldset>
    </form>

</body>
</html>
