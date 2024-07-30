DROP DATABASE IF EXISTS ProjetoCarrossinha;

CREATE DATABASE IF NOT EXISTS ProjetoCarrossinha;

USE ProjetoCarrossinha;

CREATE TABLE Cidade (
    idCidade INT PRIMARY KEY AUTO_INCREMENT,
    nomeCidade VARCHAR(100),
    estado VARCHAR(2)
);

CREATE TABLE Pessoa (
    idPessoa INT PRIMARY KEY AUTO_INCREMENT,
    nomePessoa VARCHAR(100),
    email VARCHAR(100),
    endereco VARCHAR(100),
    bairro VARCHAR(100),
    cep VARCHAR(100),
    cidade_id INT,
    FOREIGN KEY (cidade_id) REFERENCES Cidade(idCidade)
);

CREATE TABLE Animal (
    idAnimal INT PRIMARY KEY AUTO_INCREMENT,
    nomeAnimal VARCHAR(100),
    especie VARCHAR(100),
    raca VARCHAR(100),
    dataNascimento date,
    idade int(100),
    castrado bool,
    idTutor INT,
    FOREIGN KEY (idTutor) REFERENCES Pessoa(idPessoa)
);

