<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veimkulum</title>
</head>
<body>

    <form action="" method="post">

        <div class="dados">
            <div>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" />
            </div>
    
            <div>
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="">
            </div>
    
            <div>
                <label for="email">E-mail:</label>
                <input type="email" id="email" />
            </div>
    
            <div>
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="">
            </div>
    
            <div>
                <label for="data_nasc">Data de Nascimento</label>
                <input type="date" name="data_nasc" id="">
            </div>
        </div>

        <hr>

        <div>

            <div>
                <label for="Marca">Marca</label>
                <select name="Marca" id="Marca">
                    <option value="Fiat">Fiat</option>
                    <option value="Ford">Ford</option>
                    <option value="Uno">Uno</option>
                    <option value="Outro">Outro</option>
                </select>
            </div>

            <div>
                <label for="Modelo">Modelo</label>
                <input type="text" id=""/>
            </div>

            <div>
                <label for="Ano">Ano</label>
                <input type="number" id="" />
            </div>
            <div>
                <label for="Placa">Placa</label>
                <input type="text" id="" />
            </div>
            <div>
                <label for="RENAVAM">RENAVAM</label>
                <input type="text" id="" />
            </div>
            <div>
                <label for="Chassi">Chassi</label>
                <input type="text" id="" />
            </div>
            <div>
                <label for="Valor">Valor</label>
                <input type="text" id="posto" name="posto">
            </div>
            <div>
                <label for="Data_de_compra">Data da Compra</label>
                <input type="date"id="">
            </div>
            <div>
                <label for="Hora da Compra">Hora da Compra</label>    
                <input type="time">
            </div>
            <div>
                <label for="Data/Hora do Cadastro">Data/Hora do Cadastro</label>    
                <input type="datetime" id="">
            </div>
            <div>
                <label for="Mês da Revisão">Mês da Revisão</label>    
                <input type="date" id="">
            </div>
            <div>
                <label for="Semana da Revisão">Semana da Revisão</label>    
                <input type="date">
            </div>
            <div>
                <label for="Cor">Cor</label>    
                <input type="text">
            </div>
            <div>
                <label for="Quilometragem">Quilometragem</label>    
                <input type="range" id="">
            </div>
            <div>
                <label for="Link do Anúncio">Link do Anúncio</label>   
                <input type="text"> 
            </div>
            <div>
                <label for="Foto do Veículo">Foto do Veículo</label>    
                <input type="file" id="">
            </div>

        </div>
        <hr>
        
        <div>
            <div>
                <h3>Combustível</h3>
                
                <input type="radio" id="gasolina" name="combustivel" value="gasolina">
                <label for="gasolina">Gasolina</label>
        
                <input type="radio" id="etanol" name="combustivel" value="etanol">
                <label for="etanol">Etanol</label>
        
                <input type="radio" id="flex" name="combustivel" value="flex">
                <label for="flex">Flex</label>
        
                <input type="radio" id="diesel" name="combustivel" value="diesel">
                <label for="diesel">Diesel</label>
        
                <input type="radio" id="eletrico" name="combustivel" value="eletrico">
                <label for="eletrico">Elétrico</label>
        
                <input type="radio" id="hibrido" name="combustivel" value="hibrido">
                <label for="hibrido">Híbrido</label>
            </div>
        </div>
            
        <hr>
        
        <div>
            <div>
                <h3>Escolha os opcionais do carro:</h3>
                
                <input type="checkbox" name="opcionais" value="ar-condicionado">
                <label for="ar">Ar Condicionado</label><br>
            
                <input type="checkbox" name="opcionais" value="direcao-eletrica">
                <label for="trava">Direção Hídraulica</label><br>
            
                <input type="checkbox" name="opcionais" value="airbag">
                <label for="teto">Airbag</label><br>

                <input type="checkbox"  name="opcionais" value="abs">
                <label for="teto">ABS</label><br>

                <input type="checkbox" name="opcionais" value="multimidia">
                <label for="teto">Multimídia</label><br>

                <input type="checkbox" name="opcionais" value="teto-solar">
                <label for="teto">Teto Solar</label>

            </div>
        </div>
        
        <hr>
        
        <div>
            <div>
                <h3>Opicionais</h3>
                <textarea name="" id="" cols="30" rows="5"></textarea>
            </div>
        </div>

        <div class="button">
            <button type="submit">Enviar sua mensagem</button>
        </div>

    </form>
</body>
</html>