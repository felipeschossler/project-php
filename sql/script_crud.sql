/*cria o banco de dados*/

CREATE DATABASE banco CHARACTER SET utf8 COLLATE utf8_general_ci;

/*tabela Agencias*/

CREATE TABLE Agencias 
( 
    idAgencia INT NOT NULL AUTO_INCREMENT , 
    nomeAgencia VARCHAR(40) NOT NULL , 
    cidadeAgencia VARCHAR(40) NOT NULL ,
    PRIMARY KEY (idAgencia)
); 

/*tabela cliente*/

CREATE TABLE Clientes
( 
    idCliente INT NOT NULL AUTO_INCREMENT , 
    nomeCliente VARCHAR(40) NOT NULL , 
    cidadeCliente VARCHAR(40) NOT NULL , 
    cpfCliente VARCHAR(11) NOT NULL , 
    tipoCliente VARCHAR(10) /*FISICO JURIDICO*/ NOT NULL , 
    situacaoCliente VARCHAR(10) /*ATIVO INATIVO*/ NOT NULL ,
    PRIMARY KEY (idCliente)
);

/*tabela tiposDeConta*/

CREATE TABLE TiposDeConta 
( 
    idTipoConta INT NOT NULL AUTO_INCREMENT , 
    descricaoTipoConta VARCHAR(30) NOT NULL , 
    PRIMARY KEY (idTipoConta)
);

/*inserts na tabela tiposDeConta*/

INSERT INTO TiposDeConta (descricaoTipoConta) VALUES ('Conta Corrente');

/*tabela TiposDeMovimento*/

CREATE TABLE TiposMovimento
( 
    idTipoMov INT NOT NULL AUTO_INCREMENT , 
    descTipoMov VARCHAR(30) NOT NULL ,
    tipoMov VARCHAR(10) NOT NULL , /*TIPO DE MOVIMENTO SERA DEBITO OU CREDITO */
    PRIMARY KEY (idTipoMov)
);

/*tabela Conta*/

CREATE TABLE Contas
( 
    idConta INT NOT NULL AUTO_INCREMENT , 
    idAgencia INTEGER NOT NULL , 
    idCliente INTEGER NOT NULL , 
    idTipoConta INTEGER NOT NULL , 
    limiteConta FLOAT(10) NOT NULL , 
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
    valorMovimento FLOAT(10) NOT NULL ,
    PRIMARY KEY (idCliente, idConta, idTipoMov, dataMovimento) , 
    CONSTRAINT fk_CliMov FOREIGN KEY (idCliente) REFERENCES Clientes (idCliente) ,
    CONSTRAINT fk_ConMov FOREIGN KEY (idConta) REFERENCES Contas (idConta) , 
    CONSTRAINT fk_TpMovMov FOREIGN KEY (idTipoMov) REFERENCES TiposMovimento (idTipoMov) 
);
