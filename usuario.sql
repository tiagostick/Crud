-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jul-2022 às 16:00
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `desafio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `cpf` bigint(15) NOT NULL,
  `rg` bigint(15) NOT NULL,
  `datanasc` date DEFAULT NULL,
  `nomemae` varchar(25) DEFAULT NULL,
  `nomepai` varchar(25) DEFAULT NULL,
  `datacadastro` date DEFAULT current_timestamp(),
  `email` varchar(12) NOT NULL,
  `senha` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `cpf`, `rg`, `datanasc`, `nomemae`, `nomepai`, `datacadastro`, `email`, `senha`) VALUES
(1, 'admin', 72053588098, 451343414, '1996-06-15', 'teste mae', 'teste pai', '2022-07-15', 'admin@teste.', '$2y$10$S70iGxqy'),
(4, 'teste234cnd', 1234567890, 2345677890, '2022-07-02', 'sdgh', 'sfhsjh', '2022-07-17', 'teste@tesert', '8b1606f0ddf3241442d4a1337'),
(6, 'teste23434', 5702649350, 2007344636, '2014-03-05', 'tstere', 'ereterges', '2022-07-17', 'admin245@tes', '163c1f2ecb525ea');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rg` (`rg`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
