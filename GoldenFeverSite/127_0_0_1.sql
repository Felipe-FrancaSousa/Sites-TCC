-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 16-Mar-2019 às 14:31
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8763774_emperor`
--
CREATE DATABASE IF NOT EXISTS `id8763774_emperor` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id8763774_emperor`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_duvida`
--

DROP TABLE IF EXISTS `tbl_duvida`;
CREATE TABLE IF NOT EXISTS `tbl_duvida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `assunto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_feedback`
--

DROP TABLE IF EXISTS `tbl_feedback`;
CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `nome`, `email`, `titulo`, `tipo`, `mensagem`) VALUES
(2, 'Matheus', 'matheus.facin@outlook.com', 'Isso funcionou', 'reclamacao', 'O resto não tá funcionando, mas isso tá'),
(3, 'Matheus', 'matheus.facin@outlook.com', 'Acho que agora foi', 'outros', 'Provavelmente foi, pq se não foi eu vou me bater'),
(4, 'Matheus', 'matheus.facin@outlook.com', 'Não foi', 'reclamacao', 'Doeu'),
(5, 'Matheus', 'matheus.facin@outlook.com', 'Eu sou uma anta', 'outros', 'Não vai funcionar se eu não salvar, né'),
(6, 'Matheus', 'matheus.facin@outlook.com', 'O header não tá funcionando', 'reclamacao', 'Eu acho que eu vou fazer uma pagininha simples pra confirmação com o link pra voltar\r\n\r\n(Eu não aguento mais digitar o meu e-mail)'),
(7, 'Matheus', 'la.la@la.la', 'Agora vai', 'sugestao', 'Se não for não vai'),
(8, 'Matheus', 'la.la@la.la', 'Foi', 'outros', 'Teste pra ver se foi mesmo'),
(9, 'Matheus', 'la.la@la.la', 'Eu sou uma anta', 'reclamacao', 'Eu esqueci de salvar de novo'),
(10, 'Matheus', 'la.la@la.la', 'Esse é o último', 'sugestao', 'Eu juro'),
(11, 'Matheus', 'la.la@la.la', 'Eu menti', 'reclamacao', 'Esqueci de salvar de novo'),
(12, 'Matheus', 'la.la@la.la', 'Agora sim é o último', 'sugestao', 'Prometo de mindinho'),
(13, 'Matheus', 'la.la@la.la', 'Menti de novo', 'reclamacao', 'Advinha porquê'),
(14, 'Matheus', 'la.la@la.la', 'Acabei essa bagaça', 'sugestao', 'Agora falta o resto ;-;'),
(16, 'André', 'andrelife191@gmail.com', 'Estou testando', 'sugestao', 'Eu segui suas ordens senhor feudal, espero que não pegue minhas cenouras dessa vez'),
(18, 'Felipe França de Sousa', 'felipefrancasousa@gmail.com', '<3', 'outros', 'PERDI'),
(22, 'Matheus', 'matheus.facin@outlook.com', 'Matheus', 'outros', 'testepraveroqueacontecequandotemumapalavramuitograndequenãocabenalinhapraverseeledivide'),
(24, 'Matheus', 'matheus.facin@outlook.com', 'Matheus', 'reclamacao', 'teste ajax');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_ranking`
--

DROP TABLE IF EXISTS `tbl_ranking`;
CREATE TABLE IF NOT EXISTS `tbl_ranking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `data_hora` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pontuacao` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_ranking_ibfk_1` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbl_ranking`
--

INSERT INTO `tbl_ranking` (`id`, `usuario`, `data_hora`, `pontuacao`) VALUES
(1, 2, '2019-03-15 15:18:20', 1000),
(2, 11, '2019-03-15 15:18:27', 100),
(3, 1, '2019-03-15 15:18:33', 500),
(4, 6, '2019-03-15 15:18:40', 850),
(5, 10, '2019-03-15 15:18:50', 65),
(6, 9, '2019-03-15 15:19:02', 453),
(7, 9, '2019-03-15 15:19:35', 890),
(8, 11, '2019-03-15 15:19:47', 999),
(9, 9, '2019-03-15 15:20:10', 999.5),
(10, 5, '2019-03-15 15:20:22', 54),
(11, 9, '2019-03-15 15:20:28', 0),
(12, 6, '2019-03-15 15:20:34', 895),
(13, 6, '2019-03-15 15:20:40', 256),
(14, 6, '2019-03-15 15:20:46', 985);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `privilegio` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id`, `nome`, `email`, `username`, `senha`, `data_nasc`, `privilegio`) VALUES
(1, 'Teste', 'teste@teste.teste.teste', 'Teste_testando', 'e90d02d2cbdbcf937dceed2aace02cd9', '2002-02-07', b'0'),
(2, 'Matheus Facin', 'matheus.facin@outlook.com', 'Math_Facin', '202cb962ac59075b964b07152d234b70', '2002-02-07', b'1'),
(3, 'Teste2', 'teste2@teste.teste', 'Teste2', '202cb962ac59075b964b07152d234b70', '2019-02-14', b'0'),
(4, 'Teste23', 'teste3@teste.teste', 'Teste3', '202cb962ac59075b964b07152d234b70', '2019-02-14', b'0'),
(5, 'Teste4', 'teste4@teste.teste', 'Teste4', '202cb962ac59075b964b07152d234b70', '2019-02-14', b'0'),
(6, 'Teste5', 'teste5@teste.teste', 'Teste5', '202cb962ac59075b964b07152d234b70', '2019-02-14', b'0'),
(7, 'Teste6', 'teste6@teste.teste', 'Teste6', '202cb962ac59075b964b07152d234b70', '2019-02-06', b'0'),
(8, 'Teste7', 'teste7@teste.teste', 'Teste7', '202cb962ac59075b964b07152d234b70', '2019-02-06', b'0'),
(9, 'Teste8', 'teste8@teste.teste', 'Teste8', '202cb962ac59075b964b07152d234b70', '2019-02-06', b'0'),
(10, 'Teste9', 'teste9@teste.teste', 'Teste9', '202cb962ac59075b964b07152d234b70', '2019-02-06', b'0'),
(11, 'Felipe França de Sousa', 'felipefrancasousa@gmail.com', 'SalamandraDeFogo', 'aadd95d01e8653183f1d94249b85171b', '2002-02-22', b'1'),
(12, 'Tajima', 'email.do@tajima.com', 'Apreciador_De_Japonês', 'bba05935e41e99a4c01009b1968a8652', '2002-02-15', b'1'),
(14, 'Algum Teste Aí', 'teste.teste@teste.teste.teste', 'AlgumTeste', 'e10adc3949ba59abbe56e057f20f883e', '2019-03-07', b'0'),
(15, 'aaa', 'aa.aa@aa.aa', 'a', '0cc175b9c0f1b6a831c399e269772661', '2019-02-27', b'0');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  ADD CONSTRAINT `tbl_ranking_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `tbl_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
