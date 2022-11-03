-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 28-Out-2022 às 11:32
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bolseiros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alocacao`
--

CREATE TABLE `alocacao` (
  `id` int(11) NOT NULL,
  `andar` int(3) NOT NULL,
  `quarto` int(4) NOT NULL,
  `id_bolseiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bolsa`
--

CREATE TABLE `bolsa` (
  `id` int(11) NOT NULL,
  `tipo` enum('Completa','Parcial') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bolsa`
--

INSERT INTO `bolsa` (`id`, `tipo`) VALUES
(1, 'Completa'),
(2, 'Parcial');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bolseiro`
--

CREATE TABLE `bolseiro` (
  `id` int(11) NOT NULL,
  `primeiro_nome` varchar(60) NOT NULL,
  `segundo_nome` varchar(60) NOT NULL,
  `apelido` varchar(60) NOT NULL,
  `data_nascimento` date NOT NULL,
  `provincia` varchar(45) NOT NULL,
  `distrito` varchar(45) NOT NULL,
  `b.i` varchar(45) NOT NULL,
  `sexo` char(1) NOT NULL,
  `contacto1` int(15) NOT NULL,
  `contacto2` int(15) NOT NULL,
  `ano_ingresso` date NOT NULL,
  `codigo_estudante` int(7) NOT NULL,
  `id_bolsa` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadeira`
--

CREATE TABLE `cadeira` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `id_semestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacto_emergencia`
--

CREATE TABLE `contacto_emergencia` (
  `id` int(11) NOT NULL,
  `primeiro_nome` varchar(60) NOT NULL,
  `segundo_nome` varchar(60) NOT NULL,
  `apelido` varchar(60) NOT NULL,
  `parentesco` varchar(45) NOT NULL,
  `contacto1` int(15) NOT NULL,
  `contacto2` int(15) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `avenida` varchar(45) NOT NULL,
  `id_bolseiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `controle_regulamento`
--

CREATE TABLE `controle_regulamento` (
  `id` int(11) NOT NULL,
  `infraccao` text NOT NULL,
  `descricao` text NOT NULL,
  `estado` enum('resolvido','pago','pendente','anuldo') NOT NULL,
  `id_bolseiro` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `duracao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`, `duracao`) VALUES
(1, 'Admnistração pública', '4 anos'),
(2, 'Engenharia em Tecnologias e Sistemas de Informação', '4.5 anos '),
(3, 'Relações Internacionais e Diplomacia', '4 anos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado_saude`
--

CREATE TABLE `estado_saude` (
  `id` int(11) NOT NULL,
  `id_bolseiro` int(11) NOT NULL,
  `restricao_alimentar` varchar(100) NOT NULL,
  `doenca_cronica` varchar(100) NOT NULL,
  `observacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `apelido` varchar(60) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `kit`
--

CREATE TABLE `kit` (
  `id` int(11) NOT NULL,
  `cama` tinyint(1) NOT NULL,
  `lencol` tinyint(1) NOT NULL,
  `almofoda` tinyint(1) NOT NULL,
  `fronha` tinyint(1) NOT NULL,
  `cobertor` tinyint(1) NOT NULL,
  `id_alocacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mae`
--

CREATE TABLE `mae` (
  `id` int(11) NOT NULL,
  `primeiro_nome` varchar(60) NOT NULL,
  `segundo_nome` varchar(60) NOT NULL,
  `apelido` varchar(60) NOT NULL,
  `data nascimento` date NOT NULL,
  `provincia` varchar(45) NOT NULL,
  `distrito` varchar(45) NOT NULL,
  `contacto1` int(15) NOT NULL,
  `contacto2` int(15) NOT NULL,
  `profissao` varchar(50) NOT NULL,
  `entidade patrinal` varchar(50) NOT NULL,
  `id_bolseiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE `nota` (
  `id` int(11) NOT NULL,
  `nota_final` int(2) NOT NULL,
  `id_cadeira` int(11) NOT NULL,
  `id_bolseiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pai`
--

CREATE TABLE `pai` (
  `id` int(11) NOT NULL,
  `primeiro_nome` varchar(60) NOT NULL,
  `segundo_nome` varchar(60) NOT NULL,
  `apelido` varchar(60) NOT NULL,
  `provincia` varchar(45) NOT NULL,
  `distrito` varchar(45) NOT NULL,
  `data nascimento` date NOT NULL,
  `contacto1` int(15) NOT NULL,
  `contacto2` int(15) NOT NULL,
  `profissao` varchar(50) NOT NULL,
  `entidade_patronal` varchar(50) NOT NULL,
  `id_bolseiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorio_semestral`
--

CREATE TABLE `relatorio_semestral` (
  `id` int(11) NOT NULL,
  `id_bolseiro` int(11) NOT NULL,
  `id_Curso` int(11) NOT NULL,
  `id_Cadeira` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `semestre`
--

CREATE TABLE `semestre` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `id_Curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao_escolar`
--

CREATE TABLE `situacao_escolar` (
  `id` int(11) NOT NULL,
  `ano_conclusao` date NOT NULL,
  `escola_frequentada` varchar(100) NOT NULL,
  `provincia` varchar(80) NOT NULL,
  `distrito` varchar(80) NOT NULL,
  `id_bolseiro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `utilizador` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `permissao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `utilizador`, `senha`, `permissao`) VALUES
(1, 'faizal23', '827ccb0eea8a706c4c34a16891f84e7b', 'Ad');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alocacao`
--
ALTER TABLE `alocacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Estudante` (`id_bolseiro`);

--
-- Índices para tabela `bolsa`
--
ALTER TABLE `bolsa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `bolseiro`
--
ALTER TABLE `bolseiro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bolsa` (`id_bolsa`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Índices para tabela `cadeira`
--
ALTER TABLE `cadeira`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_semestre` (`id_semestre`);

--
-- Índices para tabela `contacto_emergencia`
--
ALTER TABLE `contacto_emergencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estudante` (`id_bolseiro`);

--
-- Índices para tabela `controle_regulamento`
--
ALTER TABLE `controle_regulamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Estudante` (`id_bolseiro`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estado_saude`
--
ALTER TABLE `estado_saude`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bolseiro` (`id_bolseiro`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `kit`
--
ALTER TABLE `kit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alocacao` (`id_alocacao`);

--
-- Índices para tabela `mae`
--
ALTER TABLE `mae`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bolseiro` (`id_bolseiro`);

--
-- Índices para tabela `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nota_bolseiro` (`id_bolseiro`),
  ADD KEY `nota_cadeira` (`id_cadeira`);

--
-- Índices para tabela `pai`
--
ALTER TABLE `pai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Estudante` (`id_bolseiro`);

--
-- Índices para tabela `relatorio_semestral`
--
ALTER TABLE `relatorio_semestral`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Estudante` (`id_bolseiro`),
  ADD KEY `id_Curso` (`id_Curso`),
  ADD KEY `id_Cadeira` (`id_Cadeira`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Curso` (`id_Curso`);

--
-- Índices para tabela `situacao_escolar`
--
ALTER TABLE `situacao_escolar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bolseiro` (`id_bolseiro`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alocacao`
--
ALTER TABLE `alocacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `bolsa`
--
ALTER TABLE `bolsa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `bolseiro`
--
ALTER TABLE `bolseiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cadeira`
--
ALTER TABLE `cadeira`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contacto_emergencia`
--
ALTER TABLE `contacto_emergencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `controle_regulamento`
--
ALTER TABLE `controle_regulamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `estado_saude`
--
ALTER TABLE `estado_saude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `kit`
--
ALTER TABLE `kit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mae`
--
ALTER TABLE `mae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `nota`
--
ALTER TABLE `nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pai`
--
ALTER TABLE `pai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `relatorio_semestral`
--
ALTER TABLE `relatorio_semestral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `semestre`
--
ALTER TABLE `semestre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `situacao_escolar`
--
ALTER TABLE `situacao_escolar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `bolseiro`
--
ALTER TABLE `bolseiro`
  ADD CONSTRAINT `bolseiro_ibfk_1` FOREIGN KEY (`id_bolsa`) REFERENCES `bolsa` (`id`),
  ADD CONSTRAINT `bolseiro_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id`);

--
-- Limitadores para a tabela `cadeira`
--
ALTER TABLE `cadeira`
  ADD CONSTRAINT `cadeira_ibfk_1` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id`);

--
-- Limitadores para a tabela `contacto_emergencia`
--
ALTER TABLE `contacto_emergencia`
  ADD CONSTRAINT `contacto_emergencia_ibfk_1` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`);

--
-- Limitadores para a tabela `controle_regulamento`
--
ALTER TABLE `controle_regulamento`
  ADD CONSTRAINT `controle_regulamento_ibfk_1` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`),
  ADD CONSTRAINT `controle_regulamento_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `estado_saude`
--
ALTER TABLE `estado_saude`
  ADD CONSTRAINT `estado_saude_ibfk_1` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `kit`
--
ALTER TABLE `kit`
  ADD CONSTRAINT `kit_ibfk_1` FOREIGN KEY (`id_alocacao`) REFERENCES `alocacao` (`id`);

--
-- Limitadores para a tabela `mae`
--
ALTER TABLE `mae`
  ADD CONSTRAINT `mae_ibfk_1` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`);

--
-- Limitadores para a tabela `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_bolseiro` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`),
  ADD CONSTRAINT `nota_cadeira` FOREIGN KEY (`id_cadeira`) REFERENCES `cadeira` (`id`);

--
-- Limitadores para a tabela `pai`
--
ALTER TABLE `pai`
  ADD CONSTRAINT `pai_ibfk_1` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`);

--
-- Limitadores para a tabela `relatorio_semestral`
--
ALTER TABLE `relatorio_semestral`
  ADD CONSTRAINT `relatorio_semestral_ibfk_1` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`),
  ADD CONSTRAINT `relatorio_semestral_ibfk_2` FOREIGN KEY (`id_Curso`) REFERENCES `curso` (`id`),
  ADD CONSTRAINT `relatorio_semestral_ibfk_3` FOREIGN KEY (`id_Cadeira`) REFERENCES `cadeira` (`id`),
  ADD CONSTRAINT `relatorio_semestral_ibfk_4` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `semestre`
--
ALTER TABLE `semestre`
  ADD CONSTRAINT `semestre_ibfk_1` FOREIGN KEY (`id_Curso`) REFERENCES `curso` (`id`);

--
-- Limitadores para a tabela `situacao_escolar`
--
ALTER TABLE `situacao_escolar`
  ADD CONSTRAINT `situacao_escolar_ibfk_1` FOREIGN KEY (`id_bolseiro`) REFERENCES `bolseiro` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
