<?php
// Dados do servidor do banco de dados
$servename = "localhost";  // endereço do servidor (localhost = seu PC)
$user = "root";            // usuário do banco
$password = "";            // senha do banco (vazia no XAMPP geralmente)
$db_name = "sistemalogin"; // nome do banco

// Faz a conexão com o banco usando mysqli
$connect = mysqli_connect($servename, $user, $password, $db_name);

// Se der erro na conexão, exibe o erro
if (mysqli_connect_error()) {
    echo "falha na conexão:" . mysqli_connect_error();
}
?>
