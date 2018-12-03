-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Dez-2018 às 16:32
-- Versão do servidor: 5.7.17
-- PHP Version: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `config`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `capa`
--

CREATE TABLE `capa` (
  `idcapa` int(11) NOT NULL,
  `unidade` varchar(45) DEFAULT NULL,
  `curso` varchar(100) NOT NULL,
  `imagcapa` varchar(100) DEFAULT NULL,
  `nomeprojeto` varchar(100) DEFAULT NULL,
  `nomefaculdade` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `nomepessoa` varchar(100) DEFAULT NULL,
  `codprojeto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `capa`
--

INSERT INTO `capa` (`idcapa`, `unidade`, `curso`, `imagcapa`, `nomeprojeto`, `nomefaculdade`, `cidade`, `nomepessoa`, `codprojeto`) VALUES
(9, 'UNIDADE DE PORTO ALEGRE', 'CURSO SUPERIOR DE ANÃLISE E DESENVOLVIMENTO DE SISTEMAS', 'logoFTEC.png', 'EDITOR TCC MODELO ABNT', 'Ftec', 'Porto alegre', 'felipe souza rodrigues', 13),
(10, 'UNIDADE DE PORTO ALEGRE', 'CURSO SUPERIOR DE ANÃLISE E DESENVOLVIMENTO DE SISTEMAS', 'logoFTEC.png', 'EDITOR TCC MODELO ABNT', 'Ftec', 'Porto alegre', 'felipe souza rodrigues', 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `capitulo`
--

CREATE TABLE `capitulo` (
  `codcapitulo` int(11) NOT NULL,
  `codrefimagem` varchar(100) DEFAULT NULL,
  `textocapitulo` varchar(100) DEFAULT NULL,
  `textodecorra` varchar(1000) DEFAULT NULL,
  `codprojeto` int(11) DEFAULT NULL,
  `subcod` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `capitulo`
--

INSERT INTO `capitulo` (`codcapitulo`, `codrefimagem`, `textocapitulo`, `textodecorra`, `codprojeto`, `subcod`) VALUES
(9, '', '1 INTRODUÃ‡ÃƒO', 'A ediÃ§Ã£o de Trabalhos de ConclusÃ£o de Curso no formato ABNT(AssociaÃ§Ã£o Brasileira de Normas TÃ©cnicas) Ã© uma parte importante da formaÃ§Ã£o acadÃªmica de todo estudante. Mas que acaba sendo de grande dificuldade devido Ã s complexas configuraÃ§Ãµes de tamanho e posicionamento e os softwares disponÃ­veis para esse tipo de ediÃ§Ã£o sÃ£o pagos ou muito complexos de serem utilizado. Pensando nisso, a proposta do sistema apresentado Ã© facilitar a ediÃ§Ã£o de trabalhos e diminuir a preocupaÃ§Ã£o com a formataÃ§Ã£o da pÃ¡gina.\r\nNos meios acadÃªmicos, como universidades, congressos, seminÃ¡rios, revistas e entrega de trabalhos, a normalizaÃ§Ã£o Ã© exigÃªncia primÃ¡ria, tornando o conhecimento das normas abnt fundamental.\r\n	O que torna difÃ­cil a um estudante, Ã© que essas normas nÃ£o se encontram reunidas em apenas um documento, mas em vÃ¡rios e muitas vezes dizem respeito nÃ£o somente a trabalhos acadÃªmicos, mas a organizaÃ§Ã£o de informaÃ§Ãµes e documentaÃ§Ãµes em geral.\r\n', 13, ''),
(10, '', '1 INTRODUÃ‡ÃƒO', 'A ediÃ§Ã£o de Trabalhos de ConclusÃ£o de Curso no formato ABNT(AssociaÃ§Ã£o Brasileira de Normas TÃ©cnicas) Ã© uma parte importante da formaÃ§Ã£o acadÃªmica de todo estudante. Mas que acaba sendo de grande dificuldade devido Ã s complexas configuraÃ§Ãµes de tamanho e posicionamento e os softwares disponÃ­veis para esse tipo de ediÃ§Ã£o sÃ£o pagos ou muito complexos de serem utilizado. Pensando nisso, a proposta do sistema apresentado Ã© facilitar a ediÃ§Ã£o de trabalhos e diminuir a preocupaÃ§Ã£o com a formataÃ§Ã£o da pÃ¡gina.\r\nNos meios acadÃªmicos, como universidades, congressos, seminÃ¡rios, revistas e entrega de trabalhos, a normalizaÃ§Ã£o Ã© exigÃªncia primÃ¡ria, tornando o conhecimento das normas abnt fundamental.\r\n	O que torna difÃ­cil a um estudante, Ã© que essas normas nÃ£o se encontram reunidas em apenas um documento, mas em vÃ¡rios e muitas vezes dizem respeito nÃ£o somente a trabalhos acadÃªmicos, mas a organizaÃ§Ã£o de informaÃ§Ãµes e documentaÃ§Ãµes em geral.\r\n', 14, ''),
(11, 'Diagrama.png', '2 ANÃLISE DO SISTEMA', 'Segundo o Thales De Oliveira Gomes ProprietÃ¡rio e Analista de Infraestrutura e Suporte na Thales sua funÃ§Ã£o Ã© descrever os vÃ¡rios tipos de objetos no sistema e o relacionamento entre eles. Tem foco nas principais interfaces da arquitetura, nos principais mÃ©todos, e nÃ£o como eles irÃ£o ser implementados.  \r\nA figura 1 apresenta o diagrama de caso de uso.\r\n', 14, 'Figura 1 - Diagrama de caso de uso');

-- --------------------------------------------------------

--
-- Estrutura da tabela `configcapa`
--

CREATE TABLE `configcapa` (
  `codcapa` int(10) NOT NULL,
  `centralizacao_capa` varchar(30) DEFAULT NULL,
  `tamanho_img_capa_y` float DEFAULT NULL,
  `tamanho_img_capa_x` float DEFAULT NULL,
  `paragrafo_capa` float DEFAULT NULL,
  `centralizacao_curso` varchar(10) DEFAULT NULL,
  `tamanho_fonte_capa` float DEFAULT NULL,
  `Negrito_capa` int(1) DEFAULT NULL,
  `subtitulo_caixa_baixa` int(1) DEFAULT NULL,
  `titulo_caixa_alta` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `configcapa`
--

INSERT INTO `configcapa` (`codcapa`, `centralizacao_capa`, `tamanho_img_capa_y`, `tamanho_img_capa_x`, `paragrafo_capa`, `centralizacao_curso`, `tamanho_fonte_capa`, `Negrito_capa`, `subtitulo_caixa_baixa`, `titulo_caixa_alta`) VALUES
(1, 'center', 2.2, 15.9, 12, 'center', 14, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `csscapitulo`
--

CREATE TABLE `csscapitulo` (
  `idcapitulos` int(10) NOT NULL,
  `capcentralizado` varchar(20) DEFAULT NULL,
  `idcitacao` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `csscapitulo`
--

INSERT INTO `csscapitulo` (`idcapitulos`, `capcentralizado`, `idcitacao`) VALUES
(1, 'justify', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `csscitacao`
--

CREATE TABLE `csscitacao` (
  `idcitacao` int(10) NOT NULL,
  `pos_margem_left` float DEFAULT NULL,
  `tamanho_fonte` float DEFAULT NULL,
  `centralizacao` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `csscitacao`
--

INSERT INTO `csscitacao` (`idcitacao`, `pos_margem_left`, `tamanho_fonte`, `centralizacao`) VALUES
(1, 3, 12, 'justify');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cssfolhaderosto`
--

CREATE TABLE `cssfolhaderosto` (
  `idfolharosto` int(10) NOT NULL,
  `pos_nome` varchar(10) DEFAULT NULL,
  `nome_fonte` varchar(20) DEFAULT NULL,
  `dados_centralizacao` varchar(20) DEFAULT NULL,
  `objetivo_fonte` varchar(20) DEFAULT NULL,
  `objetivo_borda_pos` float DEFAULT NULL,
  `objetivo_centralizacao` varchar(20) DEFAULT NULL,
  `objetivo_tamanho_fonte` int(5) DEFAULT NULL,
  `objetivo_negrito` int(1) DEFAULT NULL,
  `nome_orientador_pos` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cssfolhaderosto`
--

INSERT INTO `cssfolhaderosto` (`idfolharosto`, `pos_nome`, `nome_fonte`, `dados_centralizacao`, `objetivo_fonte`, `objetivo_borda_pos`, `objetivo_centralizacao`, `objetivo_tamanho_fonte`, `objetivo_negrito`, `nome_orientador_pos`) VALUES
(1, 'center', '12', 'center', 'arial', 7.5, 'justify', 12, 1, 'center');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cssindexlista`
--

CREATE TABLE `cssindexlista` (
  `idlista` int(10) NOT NULL,
  `tamanho_tiulo_lista` float DEFAULT NULL,
  `upcase` int(1) DEFAULT NULL,
  `titulo_centralizacao` varchar(20) DEFAULT NULL,
  `centralizacao_capitulos` varchar(20) DEFAULT NULL,
  `centralizacao_abreviatura` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cssmodelo`
--

CREATE TABLE `cssmodelo` (
  `idmodelo` int(10) NOT NULL,
  `modelo` char(255) DEFAULT NULL,
  `codfolha` int(10) DEFAULT NULL,
  `codcapa` int(10) DEFAULT NULL,
  `idfolharosto` int(10) DEFAULT NULL,
  `idcapitulos` int(10) DEFAULT NULL,
  `idresumo` int(10) DEFAULT NULL,
  `idlista` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cssmodelo`
--

INSERT INTO `cssmodelo` (`idmodelo`, `modelo`, `codfolha`, `codcapa`, `idfolharosto`, `idcapitulos`, `idresumo`, `idlista`) VALUES
(1, 'ABNT', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cssresumo`
--

CREATE TABLE `cssresumo` (
  `idresumo` int(10) NOT NULL,
  `tamanho_fonte_resumo` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cssresumo`
--

INSERT INTO `cssresumo` (`idresumo`, `tamanho_fonte_resumo`) VALUES
(1, 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `codpessoa` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `senha` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`codpessoa`, `nome`, `senha`, `email`) VALUES
(4, 'felipe souza rodrigues', 'teste123', 'f.questao@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `codprojeto` int(11) NOT NULL,
  `nomeprojeto` varchar(50) DEFAULT NULL,
  `idprojeto` int(11) DEFAULT NULL,
  `codpessoa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`codprojeto`, `nomeprojeto`, `idprojeto`, `codpessoa`) VALUES
(13, 'EDITOR TCC MODELO ABNT', NULL, 4),
(14, 'EDITOR TCC MODELO ABNT2', NULL, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `referencia`
--

CREATE TABLE `referencia` (
  `codreferencia` int(11) NOT NULL,
  `codprojeto` int(11) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `endereco` varchar(250) DEFAULT NULL,
  `acessado` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `referencia`
--

INSERT INTO `referencia` (`codreferencia`, `codprojeto`, `autor`, `titulo`, `endereco`, `acessado`) VALUES
(3, 4, 'Thales De Oliveira Gomes', 'MODELO DE SISTEMA DE BIBLIOTECA - Diagrama de casos de uso e diagrama de classes', 'https://www.linkedin.com/pulse/modelo-de-sistema-biblioteca-uso-caso-e-diagrama-de-oliveira-gomes/', 'Acesssado em 06 de outubro 2018'),
(6, 13, 'Thales De Oliveira Gomes ', '- MODELO DE SISTEMA DE BIBLIOTECA - Diagrama de casos de uso e diagrama de classes', NULL, 'Acesssado em 06 de outubro 2018.'),
(7, 14, 'Thales De Oliveira Gomes', '- MODELO DE SISTEMA DE BIBLIOTECA - Diagrama de casos de uso e diagrama de classes', NULL, 'Acesssado em 06 de outubro 2018.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resumo`
--

CREATE TABLE `resumo` (
  `codresumo` int(11) NOT NULL,
  `textoresumo` varchar(999) DEFAULT NULL,
  `objetivo` varchar(500) DEFAULT NULL,
  `codprojeto` int(11) DEFAULT NULL,
  `folharosto` int(11) NOT NULL,
  `orientador` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `resumo`
--

INSERT INTO `resumo` (`codresumo`, `textoresumo`, `objetivo`, `codprojeto`, `folharosto`, `orientador`) VALUES
(12, 'Trabalho apresentado para o Curso de AnÃ¡lise e desenvolvimento de sistema, da Faculdade de Tecnologia Ftec como parte dos requisitos para avaliaÃ§Ã£o da unidade curricular de projeto empreendedor.				\r\n					', NULL, 13, 1, 'Aline Duarte Riva'),
(13, 'O presente projeto tem por objetivo apresentar um software para ediÃ§Ã£o de trabalhos acadÃªmicos utilizando as regras do modelo ABNT utilizando banco de dados para armazenar as informaÃ§Ãµes do trabalho e atravÃ©s de uma configuraÃ§Ã£o de arquivo CSS. Fazer a ediÃ§Ã£o do documento para impressÃ£o em um arquivo PDF.				', 'Tcc. Modelo ABNT. ImpressÃ£o. CSS. Software. ', 13, 2, 'Aline Duarte Riva'),
(14, 'Trabalho apresentado para o Curso de AnÃ¡lise e desenvolvimento de sistema, da Faculdade de Tecnologia Ftec como parte dos requisitos para avaliaÃ§Ã£o da unidade curricular de projeto empreendedor.					\r\n					', NULL, 14, 1, 'Aline Duarte Riva'),
(15, 'O presente projeto tem por objetivo apresentar um software para ediÃ§Ã£o de trabalhos acadÃªmicos utilizando as regras do modelo ABNT utilizando banco de dados para armazenar as informaÃ§Ãµes do trabalho e atravÃ©s de uma configuraÃ§Ã£o de arquivo CSS. Fazer a ediÃ§Ã£o do documento para impressÃ£o em um arquivo PDF.					\r\n					', 'Tcc. Modelo ABNT. ImpressÃ£o. CSS. Software. ', 14, 2, 'Aline Duarte Riva');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanhofolha`
--

CREATE TABLE `tamanhofolha` (
  `codfolha` int(10) NOT NULL,
  `width` float DEFAULT NULL,
  `height` float DEFAULT NULL,
  `margem_right` float DEFAULT NULL,
  `margem_left` float DEFAULT NULL,
  `margem_up` float DEFAULT NULL,
  `margem_down` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tamanhofolha`
--

INSERT INTO `tamanhofolha` (`codfolha`, `width`, `height`, `margem_right`, `margem_left`, `margem_up`, `margem_down`) VALUES
(1, 21, 29.7, 2, 3, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capa`
--
ALTER TABLE `capa`
  ADD PRIMARY KEY (`idcapa`);

--
-- Indexes for table `capitulo`
--
ALTER TABLE `capitulo`
  ADD PRIMARY KEY (`codcapitulo`);

--
-- Indexes for table `configcapa`
--
ALTER TABLE `configcapa`
  ADD PRIMARY KEY (`codcapa`);

--
-- Indexes for table `csscapitulo`
--
ALTER TABLE `csscapitulo`
  ADD PRIMARY KEY (`idcapitulos`),
  ADD KEY `idcitacao` (`idcitacao`);

--
-- Indexes for table `csscitacao`
--
ALTER TABLE `csscitacao`
  ADD PRIMARY KEY (`idcitacao`);

--
-- Indexes for table `cssfolhaderosto`
--
ALTER TABLE `cssfolhaderosto`
  ADD PRIMARY KEY (`idfolharosto`);

--
-- Indexes for table `cssindexlista`
--
ALTER TABLE `cssindexlista`
  ADD PRIMARY KEY (`idlista`);

--
-- Indexes for table `cssmodelo`
--
ALTER TABLE `cssmodelo`
  ADD PRIMARY KEY (`idmodelo`),
  ADD KEY `codfolha` (`codfolha`),
  ADD KEY `codcapa` (`codcapa`),
  ADD KEY `idfolharosto` (`idfolharosto`),
  ADD KEY `idcapitulos` (`idcapitulos`),
  ADD KEY `idresumo` (`idresumo`),
  ADD KEY `idlista` (`idlista`);

--
-- Indexes for table `cssresumo`
--
ALTER TABLE `cssresumo`
  ADD PRIMARY KEY (`idresumo`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`codpessoa`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`codprojeto`);

--
-- Indexes for table `referencia`
--
ALTER TABLE `referencia`
  ADD PRIMARY KEY (`codreferencia`);

--
-- Indexes for table `resumo`
--
ALTER TABLE `resumo`
  ADD PRIMARY KEY (`codresumo`);

--
-- Indexes for table `tamanhofolha`
--
ALTER TABLE `tamanhofolha`
  ADD PRIMARY KEY (`codfolha`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capa`
--
ALTER TABLE `capa`
  MODIFY `idcapa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `capitulo`
--
ALTER TABLE `capitulo`
  MODIFY `codcapitulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `cssmodelo`
--
ALTER TABLE `cssmodelo`
  MODIFY `idmodelo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `codpessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `codprojeto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `referencia`
--
ALTER TABLE `referencia`
  MODIFY `codreferencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `resumo`
--
ALTER TABLE `resumo`
  MODIFY `codresumo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
