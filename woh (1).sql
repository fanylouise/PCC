-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jun-2022 às 20:53
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `woh`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimento`
--

CREATE TABLE `depoimento` (
  `id_depoimento` int(5) NOT NULL,
  `depoimento` varchar(400) NOT NULL,
  `hr` time NOT NULL,
  `idusuario` int(6) NOT NULL,
  `estrelas` char(5) DEFAULT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `depoimento`
--

INSERT INTO `depoimento` (`id_depoimento`, `depoimento`, `hr`, `idusuario`, `estrelas`, `nome`) VALUES
(2, 'Eu pratico trabalho voluntário pois me solidarizo e me compadeço pela situação de um semelhante. Não somente isso, pois, fazendo trabalho voluntário, eu me insiro no mundo. Para\r\nalém da própria experiência, imagina ser reconhecido como alguém benevolente e caridoso? É, pra mim, o ápice da gratidão. Gratidão que nem o dinheiro consegue exprimir em elogios e\r\nboas palavras.', '00:00:00', 100002, '5', ''),
(22, '    Eu pratico trabalho voluntário pois me solidarizo ', '00:00:00', 100001, '5', 'Douglas Lima');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(5) UNSIGNED ZEROFILL NOT NULL,
  `nome` varchar(100) NOT NULL,
  `perfil_usuario` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cep` char(9) NOT NULL,
  `uf` varchar(25) NOT NULL,
  `data_nasc` date NOT NULL,
  `data_criacao` date NOT NULL,
  `bio` text NOT NULL,
  `interesses` text NOT NULL,
  `cpfCnpj` varchar(50) NOT NULL,
  `razao` varchar(100) NOT NULL,
  `atuacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `perfil_usuario`, `email`, `senha`, `telefone`, `endereco`, `cep`, `uf`, `data_nasc`, `data_criacao`, `bio`, `interesses`, `cpfCnpj`, `razao`, `atuacao`) VALUES
(99997, 'fany', 'adm', 'gandra.fany@gmail.com', 'Kr@tos', '61986099401', 'qnm 07,', '7999999', 'df', '0000-00-00', '0000-00-00', 'oiii', 'ambientalismo', '2147483647', '', ''),
(99998, 'Michele', 'adm', 'michellysousa86@gmail.com', '123456', '61981371684', 'Expansao do Setor O', '72260805', 'DF', '0000-00-00', '0000-00-00', 'Hi', 'Idosos', '2147483647', '', ''),
(100000, 'IDOSO&Feliz', 'ong', 'idosofeliz@gmail.com', '123123', '619898889', 'qno 15', '72212-099', 'df', '2022-12-22', '0000-00-00', 'olaayi', 'null', '47474746', 'IDOSO&Feliz', 'ass_ido'),
(100001, 'Douglas Lima', 'vol', 'dougbr133@gmail.com', 'dodo123', '61985497046', 'Núcleo Rural Ponte Alta Baixo - Pte. Alta Norte (G', '72319-103', 'df', '2003-01-11', '0000-00-00', 'Hm', 'null', '0', 'null', 'null');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `id_vaga` int(5) UNSIGNED ZEROFILL NOT NULL,
  `idusuario` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `descricao` text NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `uf` char(2) NOT NULL,
  `dataCadastro` date NOT NULL,
  `atuacao` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id_vaga`, `idusuario`, `titulo`, `descricao`, `endereco`, `uf`, `dataCadastro`, `atuacao`, `email`, `telefone`) VALUES
(00002, 100000, 'Instrutora de Idososas gentil', 'Instrutora com anos de experiência, respeita', 'Área Especial 03, 3ª Avenida – Núcleo Bandeirante, DF', 'df', '2022-06-07', 'ass_ido', 'carolex@gmail.com', '61995882112'),
(00003, 100000, 'Cuidadora de Idosos e Idosas', 'Cuidadora de idosos em geral que seja profissional e pense no próximo!', 'Núcleo Rural Ponte Alta Baixo - Pte. Alta Norte (Gama), Brasília - DF, 72426-001', 'pa', '2022-06-07', 'ass_ido', 'anamariarocha@gmail.com', '61986449914');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `depoimento`
--
ALTER TABLE `depoimento`
  ADD PRIMARY KEY (`id_depoimento`),
  ADD KEY `FK` (`idusuario`) USING BTREE;

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Índices para tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`id_vaga`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `depoimento`
--
ALTER TABLE `depoimento`
  MODIFY `id_depoimento` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100002;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id_vaga` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
