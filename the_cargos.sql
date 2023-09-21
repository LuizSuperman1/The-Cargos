-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Set-2023 às 23:46
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `the_cargos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Id_Adm` int NOT NULL AUTO_INCREMENT,
  `user` varchar(140) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `senha` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`Id_Adm`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`Id_Adm`, `user`, `senha`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `calcas`
--

DROP TABLE IF EXISTS `calcas`;
CREATE TABLE IF NOT EXISTS `calcas` (
  `Id_Prod` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Tamanho` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Custo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Preco` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Quantidade` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`Id_Prod`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `calcas`
--

INSERT INTO `calcas` (`Id_Prod`, `Nome`, `Tamanho`, `Custo`, `Preco`, `Quantidade`) VALUES
(72, 'CARGO TACTEL CREME', 'G', '75,00', '124,99', '2'),
(71, 'CARGO TACTEL CREME', 'G', '75,00', '124,99', '2'),
(70, 'CARGO TACTEL CREME', 'M', '75,00', '124,99', '2'),
(69, 'CARGO TACTEL CREME', 'P', '75,00', '124,99', '2'),
(68, 'CARGO TACTEL AZUL MARINHO', 'G', '75,00', '124,99', '2'),
(67, 'CARGO TACTEL AZUL MARINHO', 'G', '75,00', '124,99', '2'),
(66, 'CARGO TACTEL AZUL MARINHO', 'M', '75,00', '124,99', '2'),
(65, 'CARGO TACTEL AZUL MARINHO', 'P', '75,00', '124,99', '2'),
(64, 'CARGO TACTEL PRETA', 'G', '75,00', '124,99', '2'),
(63, 'CARGO TACTEL PRETA', 'G', '75,00', '124,99', '2'),
(62, 'CARGO TACTEL PRETA', 'M', '75,00', '124,99', '2'),
(61, 'CARGO TACTEL PRETA', 'P', '75,00', '124,99', '2'),
(60, 'CARGO TACTEL VERDE', 'G', '75,00', '124,99', '2'),
(59, 'CARGO TACTEL VERDE', 'G', '75,00', '124,99', '2'),
(58, 'CARGO TACTEL VERDE', 'M', '75,00', '124,99', '2'),
(57, 'CARGO TACTEL VERDE', 'P', '75,00', '124,99', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `Id_Forn` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `CNPJ` varchar(50) NOT NULL,
  `Numero_casa` varchar(100) NOT NULL,
  `Nome_rua` varchar(100) NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `Cidade` varchar(100) NOT NULL,
  `CEP` varchar(100) NOT NULL,
  `Telefone` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Website` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_Forn`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`Id_Forn`, `Nome`, `CNPJ`, `Numero_casa`, `Nome_rua`, `Estado`, `Cidade`, `CEP`, `Telefone`, `Email`, `Website`) VALUES
(1, 'MJ', '081234932001', '123', 'rua oriente', 'São Paulo', 'Brás', '03016-001', '11945672309', 'mj.confeção@gmal.com', '@mj_oficial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id_Cliente` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Telefone` varchar(20) DEFAULT NULL,
  `Endereco` varchar(200) NOT NULL,
  `CPF` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_Cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
