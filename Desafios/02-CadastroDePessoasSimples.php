<?php
session_start();
if (!isset($_SESSION['lista_de_pessoas'])) {
    $_SESSION['lista_de_pessoas'] = array();
}

if (isset($_POST['button'])) {
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	if (isset($nome, $idade) && trim($nome) != "" && trim($idade) != "") {
		if (is_numeric($idade)) {
			$_SESSION['lista_de_pessoas'][$nome] = $idade;
		} else {
			echo"digite sua idade corretamente!";
		}
	} else {
		echo "<p>Preencha os campos vazios!</p>";
	}
}

if (isset($_POST['btn_limpar'])) {
	$_SESSION['lista_de_pessoas'] = [];
	header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de Pessoas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

	<h1>Cadastro Simples</h1>
	<form action="" method="post">
		<fieldset>
			Nome: <input type="text" name="nome">
			<br>
			Idade: <input type="text" name="idade">
			<br>
			<button type="submit" name="button">Enviar</button>
		</fieldset>
	</form>

	<h2>Tabela das pessoas:</h2>
	<table class="striped">
		<tr>
			<th>Nome</th>
			<th>Idade</th>
		</tr>
    <?php foreach ($_SESSION['lista_de_pessoas'] as $nome => $idade): ?>
        <tr>
            <td><?php echo $nome; ?></td>
            <td><?php echo $idade; ?></td>
        </tr>
		<?php endforeach; ?>
	</table>
	<form action="" method="post">
		<button type="submit" name="btn_limpar">Limpar Tabela</button>
	</form>		
</body>
</html>