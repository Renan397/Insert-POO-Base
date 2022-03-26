CREATE DATABASE ldi4 charset utf8; 
USE ldi4;

CREATE TABLE usuario ( 
idUsuario INT not null auto_increment, 
email VARCHAR(100) NOT NULL UNIQUE, 
senha VARCHAR(32) NOT NULL, 
nome VARCHAR(50), 
cpf	VARCHAR(11), 
dtNasc VARCHAR(10), 
telefone VARCHAR(15), 
ativo INT default 1, 
PRIMARY KEY (idUsuario)
);