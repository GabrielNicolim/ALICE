/* Usuários */
CREATE TABLE usuarios (
id_user SERIAL PRIMARY KEY NOT NULL,
nome VARCHAR(40) NOT NULL,
email VARCHAR(128) NOT NULL UNIQUE,
senha VARCHAR(255) NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
nivelAcesso INT NOT NULL DEFAULT 0
);

/* Registros */
CREATE TABLE registros (
idRegistro SERIAL PRIMARY KEY NOT NULL,
nomeProd VARCHAR(100),
qntProd INT NOT NULL,
tipoProd VARCHAR(20),
valorProd DECIMAL(10,2),
excluido BOOLEAN NOT NULL,
data_exclusao DATE,
fk_user BIGINT UNSIGNED NOT NULL,
FOREIGN KEY (fk_user) REFERENCES usuarios (id_user)
);

/* Criar tabelas */

CREATE DATABASE alice_db;

/* Dropar tabelas */

/* DROP TABLE registros, usuarios; */