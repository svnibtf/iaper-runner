-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 26-Out-2020 às 16:11
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iaper_runner_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_id` int(11) NOT NULL,
  `nome` varchar(63) CHARACTER SET utf8 DEFAULT NULL,
  `sobrenome` varchar(63) CHARACTER SET utf8 DEFAULT NULL,
  `senha` int(127) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_validado` tinyint(4) DEFAULT NULL,
  `permissao` int(11) NOT NULL DEFAULT '10',
  `tipo_usuario` tinyint(4) DEFAULT NULL COMMENT '0 = padrão; 1= física; 2=jurídica; 3=física=mesma-area; 4=física=outra-area; 5=juridica-mesma-area; 6=juridica-outra-area;',
  `plano_tipo` int(11) NOT NULL DEFAULT '10',
  `data_in` datetime DEFAULT NULL,
  `data_primeiro_acesso` datetime DEFAULT NULL,
  `data_ultimo_acesso` datetime DEFAULT CURRENT_TIMESTAMP,
  `cpf` varchar(20) DEFAULT NULL,
  `avatar` varchar(1023) DEFAULT NULL,
  `sexo` tinyint(4) DEFAULT NULL COMMENT '	0 = padrao; 1=masc; 2=fem; 3=outro',
  `info_inicial` tinyint(4) DEFAULT NULL,
  `pais` varchar(127) DEFAULT NULL,
  `estado` varchar(127) DEFAULT NULL,
  `municipio` varchar(127) DEFAULT NULL,
  `cep` int(16) DEFAULT NULL,
  `rua` varchar(511) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(31) DEFAULT NULL,
  `telefone_celular_principal` varchar(16) DEFAULT NULL,
  `telefone_celular_secundario` varchar(16) DEFAULT NULL,
  `telefone_residencial` varchar(16) DEFAULT NULL,
  `telefone_comercial` varchar(16) DEFAULT NULL,
  `code_trocar_senha` varchar(511) DEFAULT NULL,
  `deletado` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usu_id`, `nome`, `sobrenome`, `senha`, `email`, `email_validado`, `permissao`, `tipo_usuario`, `plano_tipo`, `data_in`, `data_primeiro_acesso`, `data_ultimo_acesso`, `cpf`, `avatar`, `sexo`, `info_inicial`, `pais`, `estado`, `municipio`, `cep`, `rua`, `numero`, `complemento`, `telefone_celular_principal`, `telefone_celular_secundario`, `telefone_residencial`, `telefone_comercial`, `code_trocar_senha`, `deletado`) VALUES
(1, 'admin', 'admin', 123456, NULL, NULL, 10, NULL, 10, NULL, NULL, '2020-10-26 12:19:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, 'admin', 'user', 654321, NULL, NULL, 10, NULL, 10, NULL, NULL, '2020-10-26 12:19:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(0, 'user', 'user', 654321, NULL, NULL, 10, NULL, 10, NULL, NULL, '2020-10-26 12:19:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_dados_profissionais`
--

CREATE TABLE `usuarios_dados_profissionais` (
  `udp_id` int(11) NOT NULL,
  `udp_usu_id` int(11) NOT NULL,
  `email_profissional` int(11) DEFAULT NULL,
  `avaliacao_usuarios` int(11) NOT NULL DEFAULT '0',
  `sobre_profissional` varchar(1023) DEFAULT NULL,
  `resumo_formacao` varchar(1023) DEFAULT NULL,
  `yt_code_apresentacao` varchar(31) DEFAULT NULL,
  `diferencial_profissional` varchar(511) DEFAULT NULL,
  `atendimento_presencial` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 = nao, 1 = sim',
  `atendimento_online` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 = nao, 1 = sim',
  `mini_curriculo` varchar(511) DEFAULT NULL,
  `resumo_formacao_academica` varchar(1023) DEFAULT NULL,
  `resumo_formacao_cursos` varchar(1023) DEFAULT NULL,
  `curriculo_lattes` varchar(1023) DEFAULT NULL,
  `nome_empresa` varchar(127) DEFAULT NULL,
  `cnpj` int(20) DEFAULT NULL,
  `ramo_empresa` int(11) DEFAULT NULL,
  `tipo_empresa` int(11) DEFAULT NULL,
  `cep_profissional` int(16) DEFAULT NULL,
  `endereco_profissional_rua` varchar(511) DEFAULT NULL,
  `endereco_profissional_numero` int(11) DEFAULT NULL,
  `endereco_profissional_complemento` varchar(63) DEFAULT NULL,
  `endereco_profissional_latitude` int(11) DEFAULT NULL,
  `endereco_profissional_longitude` int(11) DEFAULT NULL,
  `pais_empresa` varchar(63) DEFAULT NULL,
  `estado_empresa` varchar(63) DEFAULT NULL,
  `municipio_empresa` varchar(63) DEFAULT NULL,
  `udp_deletado` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios_dados_profissionais`
--

INSERT INTO `usuarios_dados_profissionais` (`udp_id`, `udp_usu_id`, `email_profissional`, `avaliacao_usuarios`, `sobre_profissional`, `resumo_formacao`, `yt_code_apresentacao`, `diferencial_profissional`, `atendimento_presencial`, `atendimento_online`, `mini_curriculo`, `resumo_formacao_academica`, `resumo_formacao_cursos`, `curriculo_lattes`, `nome_empresa`, `cnpj`, `ramo_empresa`, `tipo_empresa`, `cep_profissional`, `endereco_profissional_rua`, `endereco_profissional_numero`, `endereco_profissional_complemento`, `endereco_profissional_latitude`, `endereco_profissional_longitude`, `pais_empresa`, `estado_empresa`, `municipio_empresa`, `udp_deletado`) VALUES
(1, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, 0, NULL, 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios_dados_profissionais`
--
ALTER TABLE `usuarios_dados_profissionais`
  ADD PRIMARY KEY (`udp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
