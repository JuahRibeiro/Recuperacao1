-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Fev-2024 às 03:48
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `arvores`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arvores`
--

CREATE TABLE `arvores` (
  `id` int(11) NOT NULL,
  `nome_rua` varchar(255) NOT NULL,
  `tipo_arvore` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `data_corte` date DEFAULT NULL,
  `data_plantio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `arvores`
--

INSERT INTO `arvores` (`id`, `nome_rua`, `tipo_arvore`, `descricao`, `data_corte`, `data_plantio`) VALUES
(8, 'juse amaro', 'cerno', 'casa 852', NULL, '1990-05-05');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `arvores`
--
ALTER TABLE `arvores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arvores`
--
ALTER TABLE `arvores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
