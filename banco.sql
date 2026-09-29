CREATE DATABASE IF NOT EXISTS churrasco;
USE churrasco;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS participantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    turma VARCHAR(50) NOT NULL,
    telefone VARCHAR(20),
    tipo_churrasco VARCHAR(30) NOT NULL,
    acompanhamento VARCHAR(50),
    confirmado BOOLEAN NOT NULL,
    pago BOOLEAN NOT NULL
);


INSERT INTO participantes (nome, turma, telefone, tipo_churrasco, acompanhamento, confirmado, pago) VALUES
('João Silva', 'INFO 2', NULL, 'Tradicional', 'Arroz', TRUE, TRUE),
('Maria Souza', 'INFO 1', NULL, 'Vegetariano', 'Salada', TRUE, FALSE),
('Pedro Lima', 'INFO 3', NULL, 'Tradicional', 'Pão', FALSE, FALSE);


INSERT INTO usuarios (nome, email, senha) VALUES
('Derick', 'admin@email.com', '$2y$10$e0MYzXyjpJS7Pd0RVvHwHe1152aX.jG.2WvA2tFw6m2eB95xOa3u2'),
('Teste', 'teste@gmail.com', '$2y$10$e0MYzXyjpJS7Pd0RVvHwHe11.23f5j/m4Oq3Y0M3S3K4Kz5C1.z1m');