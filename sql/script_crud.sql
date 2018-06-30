/*cria o banco de dados*/

CREATE DATABASE banco CHARACTER SET utf8 COLLATE utf8_general_ci;

/*tabela Agencias*/

CREATE TABLE Agencias 
( 
    idAgencia INT NOT NULL AUTO_INCREMENT , 
    nome VARCHAR(40) NOT NULL , 
    cidade VARCHAR(40) NOT NULL ,
    PRIMARY KEY (idAgencia)
); 

/*tabela cliente*/

CREATE TABLE Clientes
( 
    idCliente INT NOT NULL AUTO_INCREMENT , 
    nome VARCHAR(40) NOT NULL , 
    cidade VARCHAR(40) NOT NULL , 
    cpf VARCHAR(11) NOT NULL , 
    tipoCliente VARCHAR(10) /*FISICO JURIDICO*/ NOT NULL , 
    situacao VARCHAR(10) /*ATIVO INATIVO*/ NOT NULL ,
    PRIMARY KEY (idCliente)
);

/*inserts na tabela cliente*/

INSERT INTO Clientes (tipoCliente) VALUES('Físico'); /*FÍSICO*/
INSERT INTO Clientes (tipoCliente) VALUES('Jurídico'); /*JURÍDICO*/

INSERT INTO Clientes (situacao) VALUES('Ativo'); /*ATIVO*/ 
INSERT INTO Clientes (situacao) VALUES('Inativo'); /*INATIVO*/

/*tabela tiposDeConta*/

CREATE TABLE TiposDeConta 
( 
    idTipoConta INT NOT NULL AUTO_INCREMENT , 
    descricao VARCHAR(30) NOT NULL , 
    PRIMARY KEY (idTipoConta)
);

/*inserts na tabela tiposDeConta*/

INSERT INTO TiposDeConta (descricao) VALUES ('Conta Corrente');
INSERT INTO TiposDeConta (descricao) VALUES ('Conta Poupança');

/*tabela TiposDeMovimento*/

CREATE TABLE TiposDeMovimento
( 
    idTipoMov INT NOT NULL AUTO_INCREMENT , 
    descricao VARCHAR(30) NOT NULL ,
    tipoMovimento VARCHAR(10) NOT NULL , /*TIPO DE MOVIMENTO SERA DEBITO OU CREDITO */
    PRIMARY KEY (idTipoMov)
);

/*inserts na tabela TiposDeMovimento*/

INSERT INTO TiposDeMovimento (descricao, tipoMovimento) VALUES ('Retirada em Dinheiro','debito');
INSERT INTO TiposDeMovimento (descricao, tipoMovimento) VALUES ('Depósito em Dinheiro','credito');

/*tabela Conta*/

CREATE TABLE Contas
( 
    idConta INT NOT NULL AUTO_INCREMENT , 
    idAgencia INTEGER NOT NULL , 
    idCliente INTEGER NOT NULL , 
    idTipoConta INTEGER NOT NULL , 
    limite FLOAT(10) NOT NULL , 
    dataAbertura DATE NOT NULL , 
    PRIMARY KEY (idConta) ,
    CONSTRAINT fk_AgeConta FOREIGN KEY (idAgencia) REFERENCES Agencias (idAgencia) , 
    CONSTRAINT fk_CliCon FOREIGN KEY (idCliente) REFERENCES Clientes (idCliente) , 
    CONSTRAINT fk_TipoContaConta FOREIGN KEY (idTipoConta) REFERENCES TiposDeConta (idTipoConta)   
);

CREATE TABLE Movimentos
(
    idCliente INTEGER NOT NULL , 
    idConta INTEGER NOT NULL , 
    idTipoMov INTEGER NOT NULL , 
    dataMovimento DATE NOT NULL,
    valor FLOAT(10) NOT NULL ,
    PRIMARY KEY (idCliente, idConta, idTipoMov, dataMovimento) , 
    CONSTRAINT fk_CliMov FOREIGN KEY (idCliente) REFERENCES Clientes (idCliente) ,
    CONSTRAINT fk_ConMov FOREIGN KEY (idConta) REFERENCES Contas (idConta) , 
    CONSTRAINT fk_TpMovMov FOREIGN KEY (idTipoMov) REFERENCES TiposDeMovimento (idTipoMov) 
);
