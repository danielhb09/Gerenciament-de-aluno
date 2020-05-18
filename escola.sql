-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Maio-2020 às 03:57
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbalunos`
--

CREATE TABLE `tbalunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `cep` varchar(14) NOT NULL,
  `rua` varchar(70) NOT NULL,
  `bairro` varchar(70) NOT NULL,
  `cidade` varchar(70) NOT NULL,
  `estado` varchar(70) NOT NULL,
  `numero` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `telefone` varchar(70) NOT NULL,
  `disciplina` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbalunos`
--

INSERT INTO `tbalunos` (`id`, `nome`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `numero`, `email`, `telefone`, `disciplina`) VALUES
(222222, 'nelson', '09971040', 'Rua Bijupira', 'Eldorado', 'Diadema', 'SP', '243', 'crisci@gmail.com', '82736251', 'Ingles'),
(222223, 'suellen', '09971040', 'Rua Bijupira', 'Eldorado', 'Diadema', 'SP', '12343', 'usahusa@hotmail.com', '45874165', 'Educação fisica'),
(222224, 'suellen', '09971040', 'Rua Bijupira', 'Eldorado', 'Diadema', 'SP', '12343', 'usahusa@hotmail.com', '45874165', 'Ingles'),
(222225, 'paulo teste', '09971040', 'Rua Bijupira', 'Eldorado', 'Diadema', 'SP', '23233233', 'askajs@', '121212', 'Biologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmateria`
--

CREATE TABLE `tbmateria` (
  `id` int(11) NOT NULL,
  `disciplina` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbmateria`
--

INSERT INTO `tbmateria` (`id`, `disciplina`) VALUES
(1111, 'Biologia'),
(1112, 'Ingles'),
(1113, 'Ingles teste'),
(1114, 'Educação fisica'),
(1115, 'qwqw');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbnotas`
--

CREATE TABLE `tbnotas` (
  `id` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `disciplina` varchar(70) NOT NULL,
  `av1` varchar(3) NOT NULL,
  `av2` varchar(3) NOT NULL,
  `av3` varchar(3) NOT NULL,
  `media` varchar(3) NOT NULL,
  `conceito` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbnotas`
--

INSERT INTO `tbnotas` (`id`, `nome`, `disciplina`, `av1`, `av2`, `av3`, `media`, `conceito`) VALUES
(111153, 'paulo teste', 'Matematica', '0', '5', '10', '5', 'D'),
(111155, 'Fredão', 'portugues', '1', '1', '9', '3.6', 'F'),
(111156, 'teste crisci', 'Matematica', '0', '3', '5', '2.6', 'F'),
(111157, 'nelson', 'Biologia', '8', '9', '9', '8.6', 'A'),
(111158, 'suellen', 'Ingles', '0', '10', '3', '4.3', 'D'),
(111159, 'nelson', 'Biologia', '4', '5', '6', '5', 'D');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbalunos`
--
ALTER TABLE `tbalunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbmateria`
--
ALTER TABLE `tbmateria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbnotas`
--
ALTER TABLE `tbnotas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbalunos`
--
ALTER TABLE `tbalunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222226;

--
-- AUTO_INCREMENT de tabela `tbmateria`
--
ALTER TABLE `tbmateria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1116;

--
-- AUTO_INCREMENT de tabela `tbnotas`
--
ALTER TABLE `tbnotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111160;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
