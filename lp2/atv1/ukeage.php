<?php
$nome = $_POST['nome'] ?? 'O nome está vazio';
$cpf = $_POST['cpf'] ?? 'O CPF está vazio';
$email = $_POST['email'] ?? 'O e-mail está vazio';
$telefone = $_POST['telefone'] ?? 'O telefone está vazio';
$data = $_POST['data_nasc'] ?? 'A data de nascimento está vazia';

$marca = $_POST['Marca'] ?? 'está vázio';
$modelo = $_POST['modelo'] ?? 'está vázio';
$ano = $_POST['ano'] ?? 'está vázio';
$placa = $_POST['placa'] ?? 'está vázio';
$renavam = $_POST['renavam'] ?? 'está vázio';
$chassi = $_POST['chassi'] ?? 'está vázio';
$valor = $_POST['valor'] ?? 'está vázio';
$data_c = $_POST['data_c'] ?? 'está vázio';
$hora_c = $_POST['hora_c'] ?? 'está vázio';
$datah = $_POST['datah'] ?? 'está vázio';
$mesr = $_POST['mesr'] ?? 'está vázio';
$semana = $_POST['semana'] ?? 'está vázio';
$cor = $_POST['cor'] ?? 'está vázio';
$km = $_POST['km'] ?? 'está vázio';
$link = $_POST['link'] ?? 'está vázio';
$foto = $_FILES['file']['name'] ?? 'Nenhuma foto enviada';

$combustivel = $_POST['combustivel'] ?? 'Não informado';
$opcionais = $_POST['opcionais'] ?? ['está vázio'];

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
echo "Foto do veoículo: $foto";

echo "<hr>";

echo "<h2>Combustível</h2>";
echo "$combustivel <br>";

echo "<hr>";

echo "<h2>Opcionais</h2>";
echo "$opcionais";

?>
