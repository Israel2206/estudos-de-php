-- Atividade com 4 tabelas
create database turma;
use turma;

-- 1) Criação das tabelas

-- Tabela de clientes
CREATE TABLE cliente (
id_cli INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100),
telefone VARCHAR(20)
);

-- Tabela de produto
CREATE TABLE produto (
    id_pro INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    marca VARCHAR(50),
    preco DECIMAL(10,2),
    categoria VARCHAR(50),
    data_cadastro DATE
);


-- Tabela de endereços
CREATE TABLE endereco (
id_end INT AUTO_INCREMENT PRIMARY KEY,
id_cliente INT NOT NULL,
logradouro VARCHAR(150) NOT NULL,
numero VARCHAR(10),
bairro VARCHAR(80),
cidade VARCHAR(80),
estado CHAR(2),
cep VARCHAR(10), 
FOREIGN KEY (id_cliente) REFERENCES cliente(id_cli)
);

-- Venda
CREATE TABLE venda (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT,
    id_produto INT,
    quantidade INT,
    data_venda DATE,
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cli),
    FOREIGN KEY (id_produto) REFERENCES produto(id_pro)
);


-- 2º Questão ) -  Inserção de dados
-- ============================================================
-- CADASTRO DE CLIENTES
-- ============================================================

INSERT INTO cliente (nome, email, telefone) VALUES
('João Silva', 'joao@email.com', '75999990001'),
('Maria Santos', 'maria@email.com', '75999990002'),
('Pedro Oliveira', 'pedro@email.com', '75999990003'),
('Ana Souza', 'ana@email.com', '75999990004'),
('Carlos Lima', 'carlos@email.com', '75999990005');

-- ============================================================
-- CADASTRO DE ENDEREÇOS
-- ============================================================
INSERT INTO endereco
(id_cliente, logradouro, numero, bairro, cidade, estado, cep)
VALUES
(5, 'Rua das Flores', '100', 'Centro', 'Seabra', 'BA', '46900-000'),
(4, 'Avenida Brasil', '250', 'Boa Vista', 'Seabra', 'BA', '46900-100'),
(3, 'Rua do Comércio', '45', 'Centro', 'Iraquara', 'BA', '46980-000'),
(2, 'Rua Principal', '780', 'São José', 'Lençóis', 'BA', '46960-000'),
(1, 'Avenida Chapada', '120', 'Centro', 'Palmeiras', 'BA', '46930-000');

-- Produtos
INSERT INTO produto (nome, marca, preco, categoria, data_cadastro) VALUES
('Notebook X200', 'Dell', 350, 'Informática', '2021-05-12'),
('Galaxy S22', 'Samsung', 450, 'Celular', '2022-08-10'),
('Smart TV 55', 'LG', 320, 'Eletrônico', '2020-03-05'),
('Impressora HP', 'HP', 120, 'Informática', '2019-12-15');

-- Vendas
INSERT INTO venda (id_cliente, id_produto, quantidade, data_venda) VALUES
(1, 1, 1, '2023-01-10'),(2, 2, 2, '2023-02-15'),(3, 3, 1, '2023-03-05'),
(1, 4, 3, '2023-03-20'),(4, 3, 1, '2023-02-15');

-- 3º Questão ) -   manipulação de tabelas/dados- Executar as alterações
-- A) Alter Table – excluir coluna
ALTER TABLE produto DROP COLUMN categoria;

-- B) Alter Table – adicionar coluna
ALTER TABLE produto ADD COLUMN data_cadastro DATE; 
--Por que está acontecendo esse erro? Por conta que já tem uma coluna com o nome data_cadastro, por isso não vai
ALTER TABLE cliente ADD COLUMN data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
-- C) Alter Table – mudar nome de coluna
ALTER TABLE produto CHANGE COLUMN nome titulo VARCHAR(100);
ALTER TABLE cliente CHANGE COLUMN telefone celular VARCHAR(20);
-- D) Alter Table – mudar atributo de coluna
ALTER TABLE produto MODIFY COLUMN marca VARCHAR(100);
ALTER TABLE cliente MODIFY COLUMN email VARCHAR(150);
-- E) Delete – excluir linha específica -
DELETE FROM produto WHERE id = 4; 
-- Qual o erro? O que fazer para excluir esse produto? Por conta que não especificamos o nome direito, colocamos apenas id em vez de colocar id_pro.
--F) Update – atualizar valores
UPDATE produto SET preco = 3600 WHERE id_pro = 1;
UPDATE cliente SET nome = 'Maria Silva', email = 'mariasilva@email.com' WHERE id_cli = 2;

-- 4) Consultas (SELECTs) com múltiplas tabelas
-- 1) Listar todas as vendas com nome do cliente e produto.
select venda.id, cliente.nome, produto.titulo from venda join cliente on venda.id = cliente.id_cli join produto on cliente.id_cli = produto.id_pro;

-- 2) Exibir cliente, cidade e produto vendidos na data de 2023-02-15.
select cliente.nome, endereco.cidade, venda.data_venda from cliente join endereco on cliente.id_cli = endereco.id_end join venda on cliente.id_cli = venda.id_cliente where venda.data_venda = '2023-02-15';

-- 3) Total gasto por cliente
select cliente.nome, SUM(venda.quantidade * produto.preco) as total_gasto from cliente join venda on cliente.id_cli = venda.id_cliente join produto on venda.id_produto = produto.id_pro group by cliente.id_cli, cliente.nome;

-- 4) clientes que compraram produtos da categoria "informática"
select cliente.nome, produto.titulo from cliente join venda on cliente.id_cli = venda.id_cliente join produto on venda.id_produto = produto.id_pro where produto.categoria = 'informática';

-- 5) quantidade de produtos vendidos por categoria
select produto.categoria, sum(venda.quantidade) as quantidade_vendida from venda join produto on venda.id_produto = produto.id_pro group by produto.categoria;

-- 6) cliente que comprou mais itens
select cliente.nome, sum(venda.quantidade) as total_itens from cliente join venda on cliente.id_cli = venda.id_cliente group by cliente.id_cli, cliente.nome order by total_itens desc limit 1;

-- 7) produto mais vendido
select produto.titulo, sum(venda.quantidade) as total_vendido from produto join venda on produto.id_pro = venda.id_produto group by produto.id_pro, produto.titulo order by total_vendido desc limit 1;

-- 8) vendas feitas em março de 2023
select * from venda where data_venda between '2023-03-01' and '2023-03-31';

-- 9) qual o endereço de entrega da venda de id=1
select endereco.logradouro, endereco.numero, endereco.bairro, endereco.cidade, endereco.estado, endereco.cep from venda join endereco on venda.id_cliente = endereco.id_cliente where venda.id = 1;

-- 10) total de vendas (r$) por cidade
select endereco.cidade, sum(venda.quantidade * produto.preco) as total_vendas from venda join produto on venda.id_produto = produto.id_pro join endereco on venda.id_cliente = endereco.id_cliente group by endereco.cidade;

