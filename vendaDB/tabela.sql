-- SQLBook: Code
CREATE DATABASE vendaDB;

CREATE TABLE vendaDB.`cliente`(
    `Cli_id` int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome` varchar(60) NOT NULL,
    `tele_cli` varchar(14) NOT NULL,
    `endereco` varchar(50) NOT NULL,
    `cpf` varchar(11) NOT NULL
 );

 CREATE TABLE vendaDB.`entrega`(
    `Ent_id` int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `cidade` varchar(25) NOT NULL,
    `CEP` varchar(8) NOT NULL,
    `rua` varchar(30) NOT NULL,
    `bairro`varchar(30) NOT NULL,
    `numero_casa` VARCHAR(20) NULL NULL,
    `complemento` varchar(50)
 );


CREATE TABLE vendaDB.`produto`(
    `Pro_id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome_pro` varchar(60) NOT NULL,
    `qtd_pro` int(60) NOT NULL,
    `preco_pro` decimal (30,30) NOT NULL
 );

CREATE TABLE vendaDB.`item_pedido` (
    `num_pedido` INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
 );
 

 CREATE TABLE vendaDB. `pedido`(
    `id_pedido` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `data` DATE Not null
 );

CREATE TABLE vendaDB. `Fornecedor`(
    `For_id` int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome_for` varchar(60) NOT NULL,
    `qtd_for` int(60) NOT NULL,
    `tele_for` varchar(14) NOT NULL
);