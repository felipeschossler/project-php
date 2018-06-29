CREATE TABLE agencia
( 
    idAgencia INT NOT NULL AUTO_INCREMENT , 
    nome VARCHAR(40) NOT NULL , 
    cidade VARCHAR(40) NOT NULL ,
    situacao CHAR(1) NOT NULL , 
    PRIMARY KEY (idAgencia)
);

CREATE TABLE cliente 
( 
    idCliente INT NOT NULL AUTO_INCREMENT , 
    nome VARCHAR(40) NOT NULL , 
    cidade VARCHAR(40) NOT NULL , 
    cpf VARCHAR(11) NOT NULL , 
    tipoCliente CHAR(1) NOT NULL , 
    PRIMARY KEY (idCliente)
);

CREATE TABLE tiposDeConta 
( 
    idTipoConta INT NOT NULL AUTO_INCREMENT , 
    descricao VARCHAR(30) NOT NULL , 
    PRIMARY KEY (idTipoConta)
);

INSERT INTO tiposDeConta (descricao) VALUES ('Conta Corrente Especial'); 
INSERT INTO tiposDeConta (descricao) VALUES ('Conta Corrente');
INSERT INTO tiposDeConta (descricao) VALUES ('Conta Poupança');
INSERT INTO tiposDeConta (descricao) VALUES ('CDB');

CREATE TABLE tiposDeMovimento 
( 
    idTipoMov INT NOT NULL AUTO_INCREMENT , 
    descricao VARCHAR(30) NOT NULL , 
    tipoPagamento VARCHAR(1) NOT NULL , 
    PRIMARY KEY (idTipoMov)
);

INSERT INTO tiposDeMovimento (descricao, tipoPagamento) VALUES ('Retirada em Dinheiro', 'D'); 
INSERT INTO tiposDeMovimento (descricao, tipoPagamento) VALUES ('Depósito em Dinheiro', 'C');

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
