CREATE DATABASE sistec2023 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE sistec2023;
create TABLE cursos (
    ID INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    sigla CHAR(3)
);


CREATE TABLE candidato(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    escola ENUM('Pública', 'Particular') NOT NULL CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    bairro ENUM('sim', 'nao') NOT NULL CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    media_final FLOAT
);

CREATE TABLE selecao(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    ano INTEGER NOT NULL,
    qtd_candidatos_publica INT,
    qtd_candidatos_publica_bairro INT,
    qtd_candidatos_particular INT,
    qtd_candidatos_particular INT,
);

CREATE TABLE selecao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ano_selecao INT NOT NULL,
    total_vagas INT NOT NULL,
    percentual_cota_publica DECIMAL(5, 2) NOT NULL,
    percentual_cota_particular DECIMAL(5, 2) NOT NULL,
    vagas_cota_publica INT GENERATED ALWAYS AS (ROUND(total_vagas * percentual_publica / 100)) STORED,
    vagas_cota_particular INT GENERATED ALWAYS AS (ROUND(total_vagas * percentual_particular / 100)) STORED,
    CHECK (percentual_publica + percentual_particular = 100)
);

CREATE TABLE selecao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ano_selecao INT NOT NULL,
    total_vagas INT NOT NULL,
    percentual_cota_publica DECIMAL(5, 2) NOT NULL,
    percentual_cota_particular DECIMAL(5, 2) NOT NULL,
    percentual_particular_bairro DECIMAL(5, 2) NOT NULL,
    percentual_particular_ampla DECIMAL(5, 2) NOT NULL,
    percentual_publica_bairro DECIMAL(5, 2) NOT NULL,
    percentual_publica_ampla DECIMAL(5, 2) NOT NULL,
    vagas_cota_publica INT GENERATED ALWAYS AS (ROUND(total_vagas * percentual_cota_publica / 100)) STORED,
    vagas_cota_particular_bairro INT GENERATED ALWAYS AS (ROUND(total_vagas * percentual_particular_bairro / 100)) STORED,
    vagas_cota_particular_ampla INT GENERATED ALWAYS AS (ROUND(total_vagas * percentual_particular_ampla / 100)) STORED,
    vagas_cota_publica_bairro INT GENERATED ALWAYS AS (ROUND(total_vagas * percentual_publica_bairro / 100)) STORED,
    vagas_cota_publica_ampla INT GENERATED ALWAYS AS (ROUND(total_vagas * percentual_publica_ampla / 100)) STORED,
    CHECK (
        percentual_cota_particular = (percentual_particular_bairro + percentual_particular_ampla)
        AND percentual_cota_publica = (percentual_publica_bairro + percentual_publica_ampla)
        AND percentual_cota_publica + percentual_cota_particular = 100
    )
);
