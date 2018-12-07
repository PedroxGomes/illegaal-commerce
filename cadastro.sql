-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Dez-2018 às 20:18
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

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
  `Endereco` varchar(250) DEFAULT NULL,
  `Cidade` varchar(350) DEFAULT NULL,
  `Cep` float DEFAULT NULL,
  `UF` float DEFAULT NULL,
  `Pais` varchar(20) DEFAULT 'Brasil',
  `Telefone` float DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `email_verfied_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `CodigodoCliente`, `Endereco`, `Cidade`, `Cep`, `UF`, `Pais`, `Telefone`, `email`, `password`, `name`, `remember_token`, `created_at`, `updated_at`, `email_verfied_at`) VALUES
(3, NULL, NULL, NULL, NULL, NULL, 'Brasil', NULL, 'pedrogomespedro1999@gmail.com', '$2y$10$3IyA9dc/ziNZ6f5t2nWocu99JR81bj1jKX5NG2VKmRdbOC3186V5W', 'Pedro', NULL, '2018-12-07', '2018-12-07', NULL),
(4, NULL, NULL, NULL, NULL, NULL, 'Brasil', NULL, '132@23.com', '$2y$10$Z9JD/05wrM1TCRycPVCaOOCUpXeFSn00c3EV7hUTkb2M.XT1AKxGG', 'Vinicius', '1mXbhCSrJO8FPTDe5XndRYZYO8aJw2acnbB9MyFVsXeHLOxazulZZoyTfEVo', '2018-12-07', '2018-12-07', NULL);

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
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vinicius', 'email@email.com', NULL, '$2y$10$gSQF6pH2z/hMRuxVl0YOL.mWeTAeC4EM6.VXsBHI658MxjUgqS8pq', 'nB6xuHSWnSUM0YYNvTktTpo8im2qbWGpfe54zVHiomYaMenirpIrwbPsjrEU', '2018-11-29 18:32:39', '2018-11-29 18:32:39');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `itenspedidos`
--
ALTER TABLE `itenspedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
