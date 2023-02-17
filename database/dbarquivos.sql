CREATE DATABASE db_arquivos;
USE db_arquivos;

CREATE TABLE usuario(
    cd INT PRIMARY KEY AUTO_INCREMENT NOT NULL;
    nm_usuario VARCHAR('110');
    email_usuario VARCHAR('140');
    senha_usuario VARCHAR('60'); 
);

CREATE TABLE arquivo(
    cd INT PRIMARY KEY AUTO_INCREMENT,
    nm_arquivo VARCHAR(100)
);