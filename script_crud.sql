/*cria o banco de dados*/

CREATE DATABASE banco CHARACTER SET utf8 COLLATE utf8_general_ci;

/*tabela agencia*/

CREATE TABLE agencia 
( idAgencia INT NOT NULL AUTO_INCREMENT , nome VARCHAR(40) NOT NULL , cidade VARCHAR(40) NOT NULL , PRIMARY KEY (idAgencia)) 
ENGINE = InnoDB;

/*tabela cliente*/

CREATE TABLE cliente 
( idCliente INT NOT NULL AUTO_INCREMENT , nome VARCHAR(40) NOT NULL , cidade VARCHAR(40) NOT NULL , cpf VARCHAR(11) NOT NULL , tipoCliente CHAR(1) NOT NULL , PRIMARY KEY (idCliente))
ENGINE = InnoDB;

/*tabela tiposDeConta*/

CREATE TABLE tiposDeConta 
( idTipoConta INT NOT NULL AUTO_INCREMENT , descricao VARCHAR(30) NOT NULL , classe CHAR NOT NULL , PRIMARY KEY (idTipoConta)) 
ENGINE = InnoDB;

/*inserts na tabela tiposDeConta*/

INSERT INTO tiposDeConta (descricao,classe) VALUES ('Conta Corrente Especial','C');
INSERT INTO tiposDeConta (descricao,classe) VALUES ('Conta Corrente','C');
INSERT INTO tiposDeConta (descricao,classe) VALUES ('Poupança','P');
INSERT INTO tiposDeConta (descricao,classe) VALUES ('CDB','A');

/*tabela tiposDeMovimento*/

CREATE TABLE tiposDeMovimento 
( idTipoMov INT NOT NULL AUTO_INCREMENT , descricao VARCHAR(30) NOT NULL , tipoPagamento VARCHAR(1) NOT NULL , PRIMARY KEY (idTipoMov))
ENGINE = InnoDB;

/*inserts na tabela tiposDeMovimento*/

INSERT INTO tiposdemovimento (descricao, tipoPagamento) VALUES ('Retirada em Dinheiro', 'Débito');
INSERT INTO tiposdemovimento (descricao, tipoPagamento) VALUES ('Depósito em Dinheiro', 'Crédito');
INSERT INTO tiposdemovimento (descricao, tipoPagamento) VALUES ('Tarifa', 'Débito');
INSERT INTO tiposdemovimento (descricao, tipoPagamento) VALUES ('Crédito de Juros ', 'Crédito');