-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2019 às 18:38
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certificado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE `atividade` (
  `id_atv` int(11) NOT NULL,
  `nome_atv` varchar(30) DEFAULT NULL,
  `data_inicial_atv` date DEFAULT NULL,
  `carga_horaria_atv` varchar(11) DEFAULT NULL,
  `data_final_atv` date DEFAULT NULL,
  `local` varchar(60) DEFAULT NULL,
  `fk_situacao_ativ_id_situacao_ativ` int(11) NOT NULL DEFAULT '1',
  `status_atv` tinyint(1) DEFAULT '1',
  `descricao` varchar(100) NOT NULL,
  `responsavel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`id_atv`, `nome_atv`, `data_inicial_atv`, `carga_horaria_atv`, `data_final_atv`, `local`, `fk_situacao_ativ_id_situacao_ativ`, `status_atv`, `descricao`, `responsavel`) VALUES
(2, 'Curso de PHP', '2019-11-21', '20h', '2019-12-21', 'Online', 9, 1, 'Curso online de PHP grátis', 4),
(3, 'Curso de HTML', '2019-11-21', '20h', '2019-11-20', 'Online', 9, 1, 'Curso online de HTML grátis', 4),
(4, 'Curso de InglÃªs', '2019-11-22', '40h', '2019-11-22', 'Online', 9, 1, '', 4),
(5, 'Curso de MatemÃ¡tica', '2019-11-22', '40h', '2019-11-22', 'Online', 9, 1, '', 4),
(7, 'Curso de Manicure', '2019-11-22', '10h', '2019-12-22', 'IFCE', 1, 1, 'Curso supimpa para quem quer ficar sÃ³ o filÃ© nas artes de manicure.', 9),
(8, 'Curso de TrÃ¢nsito', '2019-11-23', '40h', '2019-12-23', 'Sttrans', 1, 1, 'Curso pros agentes saberem fazer alguma coisa', 10),
(9, 'Curso de nada', '2019-11-25', '60h', '2019-12-25', 'online', 1, 1, 'Nada', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `certificado`
--

CREATE TABLE `certificado` (
  `fk_participa_id_participa` int(11) DEFAULT NULL,
  `fk_situacao_certif_id_situacao_certif` int(11) DEFAULT NULL,
  `id_certificado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `msg_suporte`
--

CREATE TABLE `msg_suporte` (
  `id_suporte` int(11) NOT NULL,
  `assunto` varchar(60) DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `mensagem` varchar(100) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `papel`
--

CREATE TABLE `papel` (
  `nome_papel` varchar(60) DEFAULT NULL,
  `fk_permissoes_id_perm` int(11) DEFAULT NULL,
  `id_papel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `papel`
--

INSERT INTO `papel` (`nome_papel`, `fk_permissoes_id_perm`, `id_papel`) VALUES
('responsavel', 7, 1),
('participante', 5, 2),
('diretor', 6, 3),
('administrador', 2, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `participa`
--

CREATE TABLE `participa` (
  `fk_usuario_id_usuario` int(11) DEFAULT NULL,
  `fk_atv_id_atv` int(11) DEFAULT NULL,
  `id_participa` int(11) NOT NULL,
  `fk_situacao_ativ_id_situacao_ativ` int(11) DEFAULT '1',
  `status_participa` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `participa`
--

INSERT INTO `participa` (`fk_usuario_id_usuario`, `fk_atv_id_atv`, `id_participa`, `fk_situacao_ativ_id_situacao_ativ`, `status_participa`) VALUES
(6, 2, 1, 6, 0),
(6, 3, 2, 6, 0),
(7, 2, 3, 8, 1),
(7, 3, 4, 8, 1),
(7, 4, 5, 3, 1),
(7, 5, 6, 3, 1),
(8, 2, 7, 8, 1),
(8, 4, 8, 3, 1),
(7, 7, 9, 1, 1),
(11, 8, 10, 1, 1),
(11, 2, 11, 8, 1),
(11, 3, 12, 2, 1),
(11, 4, 13, 3, 1),
(11, 7, 14, 1, 1),
(6, 4, 17, 6, 0),
(6, 4, 18, 3, 1),
(6, 9, 19, 6, 0),
(6, 9, 20, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissoes`
--

CREATE TABLE `permissoes` (
  `id_perm` int(11) NOT NULL,
  `nivel` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `permissoes`
--

INSERT INTO `permissoes` (`id_perm`, `nivel`) VALUES
(1, 'create'),
(2, 'read'),
(3, 'update'),
(4, 'delete'),
(5, 'cr'),
(6, 'cru'),
(7, 'crud');

-- --------------------------------------------------------

--
-- Estrutura da tabela `responde_msg`
--

CREATE TABLE `responde_msg` (
  `fk_usuario_id_usuario` int(11) DEFAULT NULL,
  `fk_msg_suporte_id_suporte` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao_ativ`
--

CREATE TABLE `situacao_ativ` (
  `id_situacao_ativ` int(11) NOT NULL,
  `situacao_ativ` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `situacao_ativ`
--

INSERT INTO `situacao_ativ` (`id_situacao_ativ`, `situacao_ativ`) VALUES
(1, 'AGUARDANDO'),
(2, 'ASSINADO'),
(3, 'APROVADO'),
(4, 'EMITIDO'),
(5, 'CORREÇÃO'),
(6, 'CANCELADO'),
(7, 'CONCLUÍDO'),
(8, 'REPROVADO'),
(9, 'OCORRENDO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao_certif`
--

CREATE TABLE `situacao_certif` (
  `id_situacao_certif` int(11) NOT NULL,
  `situacao_certif` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `nome_usuario` varchar(60) DEFAULT NULL,
  `cpf_usuario` varchar(11) DEFAULT NULL,
  `tel_usuario` varchar(11) DEFAULT NULL,
  `email_usuario` varchar(30) DEFAULT NULL,
  `fk_papel_id_papel` int(11) DEFAULT NULL,
  `status_usuario` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `login`, `senha`, `nome_usuario`, `cpf_usuario`, `tel_usuario`, `email_usuario`, `fk_papel_id_papel`, `status_usuario`) VALUES
(4, 'cicero', 'cicero', 'cicero', '12345678901', '987654321', 'technocientista@gmail.com', 1, NULL),
(6, 'joao', 'joao', 'Joao', '12345678901', '987654321', 'technocientista@gmail.com', 2, 1),
(7, 'fulano', 'fulano', 'fulano', '12345678901', '987654321', 'fulano@fulano.com', 2, 1),
(8, 'sicrano', 'sicrano', 'Sicrano', '1234567890', '987654321', 'sicrano@sicrano.com', 2, 1),
(9, 'rick', 'rick', 'Rick', '12345678901', '987654321', 'rick@rick.com', 1, 1),
(10, 'fernando', 'fernando', 'Fernando', '12345678901', '98765432', 'fernando@fernando.com', 1, 1),
(11, 'klebson', 'klebson', 'Klebson', '12345678901', '98765432', 'klebson@klebson.com', 2, 1),
(12, 'eliane', 'eliane', 'eliane', '1234567980', '987654321', 'eliane@eliane.com', 3, 1),
(13, 'admin', 'admin', 'admin', '123', '123', 'admin@admin.com', 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`id_atv`),
  ADD KEY `FK_atividade_1` (`fk_situacao_ativ_id_situacao_ativ`);

--
-- Indexes for table `certificado`
--
ALTER TABLE `certificado`
  ADD PRIMARY KEY (`id_certificado`),
  ADD KEY `FK_certificado_1` (`fk_situacao_certif_id_situacao_certif`),
  ADD KEY `FK_certificado_3` (`fk_participa_id_participa`);

--
-- Indexes for table `msg_suporte`
--
ALTER TABLE `msg_suporte`
  ADD PRIMARY KEY (`id_suporte`);

--
-- Indexes for table `papel`
--
ALTER TABLE `papel`
  ADD PRIMARY KEY (`id_papel`),
  ADD KEY `FK_papel_1` (`fk_permissoes_id_perm`);

--
-- Indexes for table `participa`
--
ALTER TABLE `participa`
  ADD PRIMARY KEY (`id_participa`),
  ADD KEY `FK_participa_1` (`fk_usuario_id_usuario`),
  ADD KEY `FK_participa_2` (`fk_atv_id_atv`),
  ADD KEY `FK_participa_4` (`fk_situacao_ativ_id_situacao_ativ`);

--
-- Indexes for table `permissoes`
--
ALTER TABLE `permissoes`
  ADD PRIMARY KEY (`id_perm`);

--
-- Indexes for table `responde_msg`
--
ALTER TABLE `responde_msg`
  ADD KEY `FK_responde_msg_1` (`fk_usuario_id_usuario`),
  ADD KEY `FK_responde_msg_2` (`fk_msg_suporte_id_suporte`);

--
-- Indexes for table `situacao_ativ`
--
ALTER TABLE `situacao_ativ`
  ADD PRIMARY KEY (`id_situacao_ativ`);

--
-- Indexes for table `situacao_certif`
--
ALTER TABLE `situacao_certif`
  ADD PRIMARY KEY (`id_situacao_certif`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `FK_usuario_2` (`fk_papel_id_papel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atividade`
--
ALTER TABLE `atividade`
  MODIFY `id_atv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `certificado`
--
ALTER TABLE `certificado`
  MODIFY `id_certificado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `msg_suporte`
--
ALTER TABLE `msg_suporte`
  MODIFY `id_suporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `papel`
--
ALTER TABLE `papel`
  MODIFY `id_papel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `participa`
--
ALTER TABLE `participa`
  MODIFY `id_participa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `permissoes`
--
ALTER TABLE `permissoes`
  MODIFY `id_perm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `situacao_ativ`
--
ALTER TABLE `situacao_ativ`
  MODIFY `id_situacao_ativ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `situacao_certif`
--
ALTER TABLE `situacao_certif`
  MODIFY `id_situacao_certif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atividade`
--
ALTER TABLE `atividade`
  ADD CONSTRAINT `FK_atividade_1` FOREIGN KEY (`fk_situacao_ativ_id_situacao_ativ`) REFERENCES `situacao_ativ` (`id_situacao_ativ`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `certificado`
--
ALTER TABLE `certificado`
  ADD CONSTRAINT `FK_certificado_1` FOREIGN KEY (`fk_situacao_certif_id_situacao_certif`) REFERENCES `situacao_certif` (`id_situacao_certif`),
  ADD CONSTRAINT `FK_certificado_3` FOREIGN KEY (`fk_participa_id_participa`) REFERENCES `participa` (`id_participa`);

--
-- Limitadores para a tabela `papel`
--
ALTER TABLE `papel`
  ADD CONSTRAINT `FK_papel_1` FOREIGN KEY (`fk_permissoes_id_perm`) REFERENCES `permissoes` (`id_perm`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `participa`
--
ALTER TABLE `participa`
  ADD CONSTRAINT `FK_participa_1` FOREIGN KEY (`fk_usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_participa_2` FOREIGN KEY (`fk_atv_id_atv`) REFERENCES `atividade` (`id_atv`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_participa_4` FOREIGN KEY (`fk_situacao_ativ_id_situacao_ativ`) REFERENCES `situacao_ativ` (`id_situacao_ativ`);

--
-- Limitadores para a tabela `responde_msg`
--
ALTER TABLE `responde_msg`
  ADD CONSTRAINT `FK_responde_msg_1` FOREIGN KEY (`fk_usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `FK_responde_msg_2` FOREIGN KEY (`fk_msg_suporte_id_suporte`) REFERENCES `msg_suporte` (`id_suporte`) ON DELETE SET NULL;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_usuario_2` FOREIGN KEY (`fk_papel_id_papel`) REFERENCES `papel` (`id_papel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
