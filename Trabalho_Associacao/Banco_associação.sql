
CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nivel ENUM('adm', 'colab') NOT NULL
);


CREATE TABLE cargo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE atividade (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    cargo_id INT,
    FOREIGN KEY (cargo_id) REFERENCES cargo(id) ON DELETE SET NULL
);


CREATE TABLE membro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE,
    telefone VARCHAR(15),
    endereco VARCHAR(255),
    cargo_id INT NOT NULL,
    FOREIGN KEY (cargo_id) REFERENCES cargo(id) ON DELETE RESTRICT
);