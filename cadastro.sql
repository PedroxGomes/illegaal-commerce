-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Dez-2018 às 13:21
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `CodigoDaCategoria` float DEFAULT NULL,
  `NomeDaCategoria` varchar(30) DEFAULT NULL,
  `Descricao` varchar(30) DEFAULT NULL,
  `Figura` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `CodigodoCliente` varchar(20) DEFAULT NULL,
  `Endereco` varchar(30) NOT NULL,
  `Cidade` varchar(30) NOT NULL,
  `Cep` float DEFAULT NULL,
  `UF` float DEFAULT NULL,
  `Pais` varchar(20) DEFAULT 'Brasil',
  `Telefone` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itenspedidos`
--

CREATE TABLE `itenspedidos` (
  `id` int(11) NOT NULL,
  `CodigoDoProduto` float DEFAULT NULL,
  `PrecoUnitario` float DEFAULT NULL,
  `Quantidade` double DEFAULT NULL,
  `Desconto` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `NumeroPedido` float DEFAULT NULL,
  `CodigoCliente` float DEFAULT NULL,
  `DataDoPedido` date DEFAULT NULL,
  `DataDeEntrega` date DEFAULT NULL,
  `DataDeEnvio` date DEFAULT NULL,
  `Frete` varchar(30) DEFAULT NULL,
  `NomeDestinatario` varchar(30) DEFAULT NULL,
  `EnderecoDestinatario` varchar(30) DEFAULT NULL,
  `CidadeDeDestino` varchar(30) DEFAULT NULL,
  `CEPdeDestino` float DEFAULT NULL,
  `PaisdeDestino` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `CodigoProduto` float DEFAULT NULL,
  `NomeDoProduto` varchar(30) DEFAULT NULL,
  `CodigoCategoria` varchar(30) DEFAULT NULL,
  `QuantidadePorUnidade` double DEFAULT NULL,
  `PrecoUnitario` float DEFAULT NULL,
  `UnidadeEmEstoque` double DEFAULT NULL,
  `UnidadesPedidas` double DEFAULT NULL,
  `NivelDeEstoque` double DEFAULT NULL,
  `Descontinuado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itenspedidos`
--
ALTER TABLE `itenspedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itenspedidos`
--
ALTER TABLE `itenspedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
