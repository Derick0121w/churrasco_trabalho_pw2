CREATE DATABASE IF NOT EXISTS churrasco;

use churrasco;

create table if not exists usuarios(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
senha VARCHAR(255) NOT NULL
);

create table if not exists participantes(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
turma VARCHAR(50) NOT NULL,
telefone VARCHAR(20),
tipo_churrasco VARCHAR(30) NOT NULL,
acompanhamento VARCHAR(50),
confirmado BOOLEAN NOT null,
pago BOOLEAN NOT NULL
);

INSERT INTO participantes (nome, turma, telefone, tipo_churrasco, acompanhamento, confirmado, pago) VALUES
('João Silva', 'INFO 2', NULL, 'Tradicional', 'Arroz', TRUE, TRUE),
('Maria Souza', 'INFO 1', NULL, 'Vegetariano', 'Salada', TRUE, FALSE),
('Pedro Lima', 'INFO 3', NULL, 'Tradicional', 'Pão', FALSE, FALSE);