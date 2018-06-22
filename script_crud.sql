--cria o banco de dados

CREATE DATABASE banco;

--tabela agencia

CREATE TABLE agencia 
( idAgencia INT NOT NULL AUTO_INCREMENT , nome VARCHAR(40) NOT NULL , cidade VARCHAR(40) NOT NULL , PRIMARY KEY (idAgencia)) 
ENGINE = InnoDB;

--tabela cliente

CREATE TABLE cliente 
( idCliente INT NOT NULL AUTO_INCREMENT , nome VARCHAR(40) NOT NULL , cidade VARCHAR(40) NOT NULL , cpf VARCHAR(11) NOT NULL , tipoCliente CHAR(1) NOT NULL , PRIMARY KEY (idCliente))
ENGINE = InnoDB;

--tabela tiposdeconta

CREATE TABLE tiposConta 
( idTipo INT NOT NULL AUTO_INCREMENT , descricao VARCHAR(30) NOT NULL , classe CHAR NOT NULL , PRIMARY KEY (idTipo)) 
ENGINE = InnoDB;

--inserts na tabela

INSERT INTO tiposConta (descricao,classe) VALUES ('Conta Corrente Especial','C');
INSERT INTO tiposConta (descricao,classe) VALUES ('Conta Corrente','C');
INSERT INTO tiposConta (descricao,classe) VALUES ('Poupança','P');
INSERT INTO tiposConta (descricao,classe) VALUES ('CDB','A');

