-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Jun-2023 às 20:34
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
-- Banco de dados: `xhopii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `email`, `senha`) VALUES
('12300025262', 'Casimiro', 'Migel', '1993-10-20', '18996320412', 'ceze@outlook.com', 'ceze123'),
('12312312310', 'Roguer', 'Guedes', '1992-03-12', '18912312312', 'guedes10@gmail.com', 'amem123'),
('55566628422', 'Ludmilla', 'Gonçalves', '1993-05-04', '18992220102', 'lud_numanice@outlook.com', 'numanice'),
('77700707007', 'Cristiano', 'Ronaldo', '1987-07-07', '18900070707', 'cr7@gmail.com', 'sete7'),
('77785295623', 'Beyoncé', 'Carter', '1981-09-04', '18996325852', 'beyonce_com_c@gmail.com', '123456'),
('yui yui', 'gfh', 'hgffffffg', '2023-06-17', 'fghfgh', '345', 'fhf@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `sobrenome` varchar(300) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `salario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `email`, `salario`) VALUES
('1545678945', 'Yan ', 'Pablo Rodrigues', '2023-06-01', '18992873402', 'yan.pablo205@gmail.com', '1000'),
('4565647', 'dffdg testinh', 'dfgdfg', '2023-06-02', '01899273943', 'ere@gmail.com', '213'),
('fhgfh', 'ghfg teste', 'fghfgh', '2023-06-02', 'asd', 'ere@gmail.com', '213');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `fabricante` varchar(200) NOT NULL,
  `descricao` varchar(6000) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `fabricante`, `descricao`, `valor`) VALUES
(1, 'Mãe do Bart', 'Vó do Bart', 'gostosa e um pouco gorda.', 100),
(2, 'Mãe do Adryan', 'Vó do Adryan', 'meio idosa, mas se apagar a luz é pau.', 150),
(5, '()', '()', '()', 0),
(6, '()', '()', '()', 0),
(7, '(h)', '(h)', '(h)', 0),
(8, '()', '()', '()', 0),
(9, 'ola', 'ola', 'ola', 4444),
(10, 'produto tested', 'dsfgdf', '435635', 664);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
