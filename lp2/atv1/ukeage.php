<?php
$nome = $_POST['nome'] ?? 'O nome está vázio';
$cpf = $_POST['cpf'] ?? 'O CPF está vázio';
$email = $_POST['email'] ??'O está vázio';
$telefone = $_POST['telefone'] ??'O está vázio';
$data = $_POST['data_nasc'] ??'O está vázio';

$marca = $_POST['Marca'] ??'';
$modelo = $_POST['modelo'] ??'';



echo "<div style='width:400px; margin:30px auto; padding:20px; border-radius:10px; background:#f4f4f4; box-shadow:0 0 10px #ccc; font-family:Arial;'>";
echo "<h2 style='text-align:center; color:#007BFF;'>Dados Recebidos</h2>";
echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>CPF:</strong> $cpf</p>";
echo "<p><strong>E-mail:</strong> $email</p>";
echo "<p><strong>Telefone:</strong> $telefone</p>";
echo "<p><strong>Data de Nascimento:</strong> $data</p>";
echo "</div>";

?>