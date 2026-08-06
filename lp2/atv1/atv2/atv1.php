<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veimkulum</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$nome = $_POST["nome"];
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
?>




    <form action="ukeage.php" method="post" enctype="multipart/form-data">
    
        <div class="dados">
            <div>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Nome" value="<?php echo $nome; ?>" disabled >
            </div>
    
            <div>
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" value="<?php echo $cpf; ?>" disabled>
            </div>
    
            <div>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" disabled>
            </div>
    
            <div>
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="telefone" disabled value="<?php echo $telefone; ?>">
            </div>
    
            <div>
                <label for="data_nasc">Data de Nascimento</label>
                <input type="date" name="data_nasc" id="data_nasc" disabled value="<?php echo $data; ?>">
            </div>
        </div>

        <hr>

        <div>

            <div>
                <label for="Marca">Marca</label>
                <select name="Marca" id="Marca" disabled value="<?php echo $marca; ?>">
                    <option value="Fiat">Fiat</option>
                    <option value="Ford">Ford</option>
                    <option value="Uno">Uno</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>

            <div>
                <label for="Modelo">Modelo</label>
                <input type="text" id="modelo" name="modelo" disabled value="<?php echo $modelo; ?>"> 
            </div>

            <div>
                <label for="Ano">Ano</label>
                <input type="number" id="ano" name="ano" disabled value="<?php echo $ano; ?>">
            </div>
            <div>
                <label for="Placa">Placa</label>
                <input type="text" id="placa" name="placa" disabled value="<?php echo $placa; ?>">
            </div>
            <div>
                <label for="RENAVAM">RENAVAM</label>
                <input type="text" id="renavam" name="renavam" disabled value="<?php echo $renavam; ?>">
            </div>
            <div>
                <label for="Chassi">Chassi</label>
                <input type="text" id="chassi" name="chassi" disabled value="<?php echo $chassi; ?>">
            </div>
            <div>
                <label for="Valor">Valor</label>
                <input type="text" id="valor" name="valor" disabled value="<?php echo $valor; ?>">
            </div>
            <div>
                <label for="Data_de_compra">Data da Compra</label>
                <input type="date"id="data_c" name="data_c" disabled value="<?php echo $data_c; ?>">
            </div>
            <div>
                <label for="Hora da Compra">Hora da Compra</label>    
                <input type="time" $id="hora_c" name="hora_c" disabled value="<?php echo $hora_c; ?>">
            </div>
            <div>
                <label for="Data/Hora do Cadastro">Data/Hora do Cadastro</label>    
                <input type="datetime" id="datah" name="datah" disabled value="<?php echo $datah; ?>">
            </div>
            <div>
                <label for="Mês da Revisão">Mês da Revisão</label>    
                <input type="date" id="mesr" name="mesr" disabled value="<?php echo $mesr; ?>">
            </div>
            <div>
                <label for="Semana da Revisão">Semana da Revisão</label>    
                <input type="date" id="semana" name="semana" disabled value="<?php echo $semana; ?>">
            </div>
            <div>
                <label for="Cor">Cor</label>    
                <input type="text" id="cor" name="cor" disabled value="<?php echo $cor; ?>">
            </div>
            <div>
                <label for="Quilometragem">Quilometragem</label>    
                <input type="range" id="km" name="km" disabled value="<?php echo $km; ?>">
            </div>
            <div>
                <label for="Link do Anúncio">Link do Anúncio</label>   
                <input type="text" id="link" name="link" disabled value="<?php echo $link; ?>"> 
            </div>
            <div>
                <label for="Foto do Veículo">Foto do Veículo</label>    
                <input type="file" id="file" name="file" disabled value="<?php echo $foto; ?>">
            </div>

        </div>
        <hr>
        
        <div>
            <div>
                <h3>Combustível</h3>
                
                <input type="radio" id="gasolina" name="combustivel" value="gasolina" disabled >
                <label for="gasolina">Gasolina</label >
        
                <input type="radio" id="etanol" name="combustivel" value="etanol" disabled>
                <label for="etanol">Etanol</label>
        
                <input type="radio" id="flex" name="combustivel" value="flex" disabled>
                <label for="flex">Flex</label>
        
                <input type="radio" id="diesel" name="combustivel" value="diesel" disabled>
                <label for="diesel">Diesel</label>
        
                <input type="radio" id="eletrico" name="combustivel" value="eletrico" disabled>
                <label for="eletrico">Elétrico</label>
        
                <input type="radio" id="hibrido" name="combustivel" value="hibrido" disabled>
                <label for="hibrido">Híbrido</label>
            </div>
        </div>
            
        <hr>
        
        <div>
            <div>
                <h3>Escolha os opcionais do carro:</h3>
                
                <input type="checkbox" name="opcionais" value="ar-condicionado" disabled >
                <label for="ar">Ar Condicionado</label><br>
            
                <input type="checkbox" name="opcionais" value="direcao-eletrica" disabled>
                <label for="trava">Direção Hídraulica</label><br>
            
                <input type="checkbox" name="opcionais" value="airbag" disabled>
                <label for="teto">Airbag</label><br>

                <input type="checkbox"  name="opcionais" value="abs" disabled>
                <label for="teto">ABS</label><br>

                <input type="checkbox" name="opcionais" value="multimidia" disabled>
                <label for="teto">Multimídia</label><br>

                <input type="checkbox" name="opcionais" value="teto-solar" disabled>
                <label for="teto">Teto Solar</label>

            </div>
        </div>
        
        <hr>
        
        <div>
            <div>
                <h3>Opicionais</h3>
                <textarea name="opcionais" id="opcionais" cols="30" rows="5" disabled value="<?php echo $opcionais; ?>"></textarea>
            </div>
        </div>
    </form>
</body>
</html>