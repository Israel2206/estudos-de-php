<?php
$nome = $_POST['nome'] ?? 'O nome está vazio';
$cpf = $_POST['cpf'] ?? 'O CPF está vazio';
$email = $_POST['email'] ?? 'O e-mail está vazio';
$telefone = $_POST['telefone'] ?? 'O telefone está vazio';
$data = $_POST['data_nasc'] ?? 'A data de nascimento está vazia';

$marca = $_POST['Marca'] ?? '';
$modelo = $_POST['modelo'] ?? '';
$ano = $_POST['ano'] ?? '';
$placa = $_POST['placa'] ?? '';
$renavam = $_POST['renavam'] ?? '';
$chassi = $_POST['chassi'] ?? '';
$valor = $_POST['valor'] ?? '';
$data_c = $_POST['data_c'] ?? '';
$hora_c = $_POST['hora_c'] ?? '';
$datah = $_POST['datah'] ?? '';
$mesr = $_POST['mesr'] ?? '';
$semana = $_POST['semana'] ?? '';
$cor = $_POST['cor'] ?? '';
$km = $_POST['km'] ?? '';
$link = $_POST['link'] ?? '';

$combustivel = $_POST['combustivel'] ?? 'Não informado';
$opcionais = $_POST['opcionais'] ?? [];

echo "<h2>Dados do Cliente</h2>";

echo "Nome: $nome <br>";
echo "CPF: $cpf <br>";
echo "E-mail: $email <br>";
echo "Telefone: $telefone <br>";
echo "Data de Nascimento: $data <br>";

echo "<hr>";

echo "<h2>Dados do Veículo</h2>";

echo "Marca: $marca <br>";
echo "Modelo: $modelo <br>";
echo "Ano: $ano <br>";
echo "Placa: $placa <br>";
echo "RENAVAM: $renavam <br>";
echo "Chassi: $chassi <br>";
echo "Valor: R$ $valor <br>";
echo "Data da Compra: $data_c <br>";
echo "Hora da Compra: $hora_c <br>";
echo "Data/Hora do Cadastro: $datah <br>";
echo "Mês da Revisão: $mesr <br>";
echo "Semana da Revisão: $semana <br>";
echo "Cor: $cor <br>";
echo "Quilometragem: $km <br>";
echo "Link do Anúncio: $link <br>";

echo "<hr>";

echo "<h2>Combustível</h2>";
echo "$combustivel <br>";

echo "<hr>";

echo "<h2>Opcionais</h2>";

?>
