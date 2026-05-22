CREATE DATABASE sistema_simples1;

USE sistema_simples1;

CREATE TABLE usuario(
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
);

INSERT usuario (usuario, senha) VALUE ('admin', '123');