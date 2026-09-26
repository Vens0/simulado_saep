CREATE DATABASE simulado_saep;
USE simulado_saep;

CREATE TABLE funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE

);

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    funcionario_id INT NOT NULL,
    medicamento VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    urgencia VARCHAR(100) NOT NULL DEFAULT 'Baixa',
    data_solicitacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(100) NOT NULL DEFAULT 'Solicitado',
    FOREIGN KEY (funcionario_id) REFERENCES funcionarios(id)
)
