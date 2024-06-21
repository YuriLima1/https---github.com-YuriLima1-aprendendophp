use vendasdb;

/*CREATE TABLE `cliente` (
  `Cli_id` int(20) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `tele_cli` varchar(14) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL
);*/

/*CREATE TABLE `entrega` (
  `Ent_id` int(20) NOT NULL,
  `cidade` varchar(25) NOT NULL,
  `CEP` varchar(8) NOT NULL,
  `rua` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `numero_casa` varchar(20) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL
);*/

/*CREATE TABLE `fornecedor` (
  `For_id` int(20) NOT NULL,
  `nome_for` varchar(60) NOT NULL,
  `qtd_for` int(60) NOT NULL,
  `tele_for` varchar(14) NOT NULL
);*/

/*CREATE TABLE `item_pedido` (
  `num_pedido` int(20) NOT NULL
);*/

/*CREATE TABLE `pedido` (
  `id_pedido` int(12) NOT NULL,
  `data` date NOT NULL
);*/

/*CREATE TABLE `produto` (
  `Pro_id` int(12) NOT NULL,
  `nome_pro` varchar(60) NOT NULL,
  `qtd_pro` int(60) NOT NULL,
  `/preco_pro` decimal(30,30) NOT NULL
);*/

/*ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Cli_id`);

ALTER TABLE `entrega`
  ADD PRIMARY KEY (`Ent_id`);

ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`For_id`);

ALTER TABLE `item_pedido`
  ADD PRIMARY KEY (`num_pedido`);

ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

ALTER TABLE `produto`
  ADD PRIMARY KEY (`Pro_id`);

ALTER TABLE `cliente`
  MODIFY `Cli_id` int(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE `entrega`
  MODIFY `Ent_id` int(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE `fornecedor`
  MODIFY `For_id` int(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE `item_pedido`
  MODIFY `num_pedido` int(20) NOT NULL AUTO_INCREMENT;

ALTER TABLE `pedido`
  MODIFY `id_pedido` int(12) NOT NULL AUTO_INCREMENT;

ALTER TABLE `produto`
  MODIFY `Pro_id` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;*/