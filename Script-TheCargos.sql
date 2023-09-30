-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de gera��o: 25-Set-2023 �s 21:55
-- Vers�o do servidor: 8.0.31
-- vers�o do PHP: 8.0.26

-- START TRANSACTION;
-- SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: 'the_cargos'
--

-- --------------------------------------------------------

--
-- Estrutura da tabela 'admin'
--

CREATE TABLE "admin" (
  Id_Adm int identity primary key,
  Usuario varchar(140) NOT NULL,
  Senha varchar(16) NOT NULL
  );

--
-- Extraindo dados da tabela 'admin'
--

INSERT INTO "admin" VALUES
('admin', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela 'calcas'
--

CREATE TABLE "calcas" (
  Id_Prod int identity primary key,
  Nome varchar(100) DEFAULT NULL,
  Tamanho varchar(1) DEFAULT NULL,
  Custo varchar(20) DEFAULT NULL,
  Preco varchar(20) DEFAULT NULL,
  Quantidade varchar(5) DEFAULT NULL
  );

--
-- Extraindo dados da tabela 'calcas'
--

INSERT INTO "calcas" VALUES
('CARGO TACTEL CREME', 'G', '75,00', '124,99', '2'),
('CARGO TACTEL CREME', 'G', '75,00', '124,99', '2'),
('CARGO TACTEL CREME', 'M', '75,00', '124,99', '2'),
('CARGO TACTEL CREME', 'P', '75,00', '124,99', '2'),
('CARGO TACTEL AZUL MARINHO', 'G', '75,00', '124,99', '2'),
('CARGO TACTEL AZUL MARINHO', 'G', '75,00', '124,99', '2'),
('CARGO TACTEL AZUL MARINHO', 'M', '75,00', '124,99', '2'),
('CARGO TACTEL AZUL MARINHO', 'P', '75,00', '124,99', '2'),
('CARGO TACTEL PRETA', 'G', '75,00', '124,99', '2'),
('CARGO TACTEL PRETA', 'G', '75,00', '124,99', '2'),
('CARGO TACTEL PRETA', 'M', '75,00', '124,99', '2'),
('CARGO TACTEL PRETA', 'P', '75,00', '124,99', '2'),
('CARGO TACTEL VERDE', 'G', '75,00', '124,99', '2'),
('CARGO TACTEL VERDE', 'G', '75,00', '124,99', '2'),
('CARGO TACTEL VERDE', 'M', '75,00', '124,99', '2'),
('CARGO TACTEL VERDE', 'P', '75,00', '124,99', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela 'fornecedor'
--

CREATE TABLE "fornecedor" (
  Id_Forn int identity primary key,
  Nome varchar(50) NOT NULL,
  CNPJ varchar(50) NOT NULL,
  Numero_casa varchar(100) NOT NULL,
  Nome_rua varchar(100) NOT NULL,
  Cidade varchar(100) NOT NULL,
  CEP varchar(100) NOT NULL,
  Telefone varchar(30) NOT NULL,
  Email varchar(50) NOT NULL,
  Website varchar(100) NOT NULL
);

--
-- Extraindo dados da tabela 'fornecedor'
--

INSERT INTO "fornecedor" VALUES
('MJ', '081234932001', '123', 'rua oriente', 'Sao Paulo', '03016-001', '11945672309', 'mj.confeccaoo@gmal.com', '@mj_oficial');

-- --------------------------------------------------------

--
-- Estrutura da tabela 'usuarios'
--

CREATE TABLE "Usuario" (
  Id_Cliente int identity primary key,
  Nome varchar(200) NOT NULL,
  Usuario varchar(50) NOT NULL,
  Senha varchar(25) NOT NULL,
  Email varchar(200) NOT NULL,
  Telefone varchar(20) DEFAULT NULL,
  Endereco varchar(200) NOT NULL,
  CPF varchar(10) NOT NULL
);

--
-- Extraindo dados da tabela 'usuarios'
--

INSERT INTO "Usuario" VALUES
('Davi Rocha', 'pongo013', 'TheCargos', 'davipllays@gmail.com', '11968317651', 'Rua Santo Estevao, 147', '1345678901');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
