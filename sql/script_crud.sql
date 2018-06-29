/*cria o banco de dados*/

CREATE DATABASE banco CHARACTER SET utf8 COLLATE utf8_general_ci;

/*tabela agencia*/

CREATE TABLE agencia 
( 
    idAgencia INT NOT NULL AUTO_INCREMENT , 
    nome VARCHAR(40) NOT NULL , 
    cidade VARCHAR(40) NOT NULL ,
    situacao CHAR(1) /*A-ATIVO I-INATIVO*/ NOT NULL , 
    PRIMARY KEY (idAgencia)
); 

/*tabela cliente*/

CREATE TABLE cliente 
( 
    idCliente INT NOT NULL AUTO_INCREMENT , 
    nome VARCHAR(40) NOT NULL , 
    cidade VARCHAR(40) NOT NULL , 
    cpf VARCHAR(11) NOT NULL , 
    tipoCliente CHAR(1) /*F-FISICO J-JURIDICO*/ NOT NULL , 
    PRIMARY KEY (idCliente)
);

/*tabela tiposDeConta*/

CREATE TABLE tiposDeConta 
( 
    idTipoConta INT NOT NULL AUTO_INCREMENT , 
    descricao VARCHAR(30) NOT NULL , 
    PRIMARY KEY (idTipoConta)
);

/*inserts na tabela tiposDeConta*/

INSERT INTO tiposDeConta (descricao) VALUES ('Conta Corrente Especial');
INSERT INTO tiposDeConta (descricao) VALUES ('Conta Corrente');
INSERT INTO tiposDeConta (descricao) VALUES ('Conta Poupança');
INSERT INTO tiposDeConta (descricao) VALUES ('CDB');

/*tabela tiposDeMovimento*/

CREATE TABLE tiposDeMovimento 
( 
    idTipoMov INT NOT NULL AUTO_INCREMENT , 
    descricao VARCHAR(30) NOT NULL , 
    tipoPagamento VARCHAR(1) NOT NULL , 
    PRIMARY KEY (idTipoMov)
);

/*inserts na tabela tiposDeMovimento*/

INSERT INTO tiposdemovimento (descricao, tipoPagamento) VALUES ('Retirada em Dinheiro', 'Débito');
INSERT INTO tiposdemovimento (descricao, tipoPagamento) VALUES ('Depósito em Dinheiro', 'Crédito');

/*tabela conta*/

CREATE TABLE conta
( 
    idConta INT NOT NULL AUTO_INCREMENT , 
    idAgencia INTEGER NOT NULL , 
    idCliente INTEGER NOT NULL , 
    limite FLOAT(10) NOT NULL , 
    dataAbertura DATE NOT NULL , 
    idTipoConta INTEGER NOT NULL , 
    PRIMARY KEY (idConta) ,
    CONSTRAINT fk_AgeConta FOREIGN KEY (idAgencia) REFERENCES agencia (idAgencia) , 
    CONSTRAINT fk_CliCon FOREIGN KEY (idCliente) REFERENCES cliente (idCliente) , 
    CONSTRAINT fk_TipoContaConta FOREIGN KEY (idTipoConta) REFERENCES tiposDeConta (idTipoConta)   
);

CREATE TABLE movimento
(
    idConta INTEGER NOT NULL , 
    idTipoMov INTEGER NOT NULL , 
    dataMovimento DATE NOT NULL,
    valor FLOAT(10) NOT NULL ,
    PRIMARY KEY (idConta, idTipoMov, dataMovimento) , 
    CONSTRAINT fk_ConMov FOREIGN KEY (idConta) REFERENCES conta (idConta) , 
    CONSTRAINT fk_TpMovMov FOREIGN KEY (idTipoMov) REFERENCES tiposDeMovimento (idTipoMov) 
);
