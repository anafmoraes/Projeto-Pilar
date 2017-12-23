-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 23-Dez-2017 às 19:46
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pilar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_session`
--

DROP TABLE IF EXISTS `ci_session`;
CREATE TABLE IF NOT EXISTS `ci_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL,
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `exposicao`
--

DROP TABLE IF EXISTS `exposicao`;
CREATE TABLE IF NOT EXISTS `exposicao` (
  `nome_exposicao` varchar(100) NOT NULL,
  `local_realizacao` varchar(100) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `id_obra` int(11) NOT NULL,
  `descricao` varchar(3000) NOT NULL,
  `id_exposicao` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_exposicao`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(500) NOT NULL,
  `id_tipoFuncionario` int(11) NOT NULL,
  `situacao` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_funcionario`),
  KEY `tipo_funcionario` (`id_tipoFuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `obra`
--

DROP TABLE IF EXISTS `obra`;
CREATE TABLE IF NOT EXISTS `obra` (
  `id_obra` int(11) NOT NULL AUTO_INCREMENT,
  `num_atual` varchar(45) NOT NULL,
  `num_anterior` varchar(45) NOT NULL,
  `fichas_relacionadas` varchar(1000) NOT NULL,
  `nome_objeto` text NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `sub_classe` varchar(250) NOT NULL,
  `classe` varchar(250) NOT NULL,
  `material` text NOT NULL,
  `tecnica` text NOT NULL,
  `inscricoes_marcas` text NOT NULL,
  `epoca` text NOT NULL,
  `autoria` varchar(250) NOT NULL,
  `origem` text NOT NULL,
  `procedencia` text NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `conservacao` varchar(250) NOT NULL,
  `localizacao` varchar(1000) NOT NULL,
  `altura` double NOT NULL,
  `largura` double NOT NULL,
  `comprimento` double NOT NULL,
  `profundidade` double NOT NULL,
  `diametro` double NOT NULL,
  `peso` double NOT NULL,
  `circunferencia` double NOT NULL,
  `resp_preenc_tec` varchar(250) NOT NULL,
  `nome_fotografo` varchar(250) NOT NULL,
  `resp_digitacao` varchar(250) NOT NULL,
  `data_digitacao` date NOT NULL,
  `resp_revisao` varchar(250) NOT NULL,
  `data_revisao` date NOT NULL,
  `resp_alteracao` varchar(250) NOT NULL,
  `data_alteracao` date NOT NULL,
  `descricao_objeto` text NOT NULL,
  `carac_tecnica` text NOT NULL,
  `carac_inconografica` text NOT NULL,
  `carac_estilistica` text NOT NULL,
  `dados_historicos` text NOT NULL,
  `publicacao` varchar(250) NOT NULL,
  `fontes_primarias` text NOT NULL,
  `fontes_bib` text NOT NULL,
  `modo_aquisicao` text NOT NULL,
  `data_aquisicao` date NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `validada` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_obra`),
  KEY `id_funcionario` (`id_funcionario`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `restauracao`
--

DROP TABLE IF EXISTS `restauracao`;
CREATE TABLE IF NOT EXISTS `restauracao` (
  `intervencao` varchar(60) NOT NULL,
  `nome_restaurador` varchar(60) NOT NULL,
  `data_restauracao` date NOT NULL,
  `id_obra` int(11) NOT NULL,
  `id_restauracao` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_restauracao`),
  KEY `id_obra` (`id_obra`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_funcionario`
--

DROP TABLE IF EXISTS `tipo_funcionario`;
CREATE TABLE IF NOT EXISTS `tipo_funcionario` (
  `id_tipoFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_tipoFuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
