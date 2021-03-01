-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/03/2021 às 14:50
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `creditall`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `consumidor`
--

CREATE TABLE `consumidor` (
  `ID_CONSUMIDOR` int(11) NOT NULL,
  `NOME_CONSUMIDOR` varchar(60) NOT NULL,
  `DATA_NASCIMENTO` date NOT NULL,
  `RENDIMENTO` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `consumidor`
--

INSERT INTO `consumidor` (`ID_CONSUMIDOR`, `NOME_CONSUMIDOR`, `DATA_NASCIMENTO`, `RENDIMENTO`) VALUES
(2547, 'JOSÉ DA SILVA', '1985-12-21', '1200.00'),
(2553, 'Kimura Numori', '1988-01-12', '2000.00'),
(2557, 'Júlia', '2019-11-12', '3000.00'),
(2562, 'Ricardo', '1989-10-12', '2000.75'),
(2564, 'Maria', '1989-10-12', '1200.00'),
(2568, 'Monte', '1989-10-12', '1500.00'),
(2572, 'Luan', '1999-10-12', '1500.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `consumidor`
--
ALTER TABLE `consumidor`
  ADD PRIMARY KEY (`ID_CONSUMIDOR`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `consumidor`
--
ALTER TABLE `consumidor`
  MODIFY `ID_CONSUMIDOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2573;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
