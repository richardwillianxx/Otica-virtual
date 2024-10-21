-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Tempo de geração: 21/10/2024 às 17:32
-- Versão do servidor: 8.0.31
-- Versão do PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vision`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `compras`
--

CREATE TABLE `compras` (
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `compras`
--

INSERT INTO `compras` (`id`) VALUES
(1),
(2),
(3),
(201),
(202),
(203);

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoques`
--

CREATE TABLE `estoques` (
  `id` int NOT NULL,
  `produto_id` int DEFAULT NULL,
  `quantidade` int NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `estoques`
--

INSERT INTO `estoques` (`id`, `produto_id`, `quantidade`, `updated_at`, `created_at`) VALUES
(33, 32, 100, '2024-10-10 17:30:21', '2024-10-10 17:30:21'),
(34, 38, 48, '2024-10-11 15:05:39', '2024-10-11 15:05:39'),
(35, 42, 150, '2024-10-11 17:16:36', '2024-10-11 17:16:36');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` float NOT NULL,
  `categoria` int NOT NULL,
  `tipo` int NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `descricao` text NOT NULL,
  `curtido` int NOT NULL,
  `id_item_venda` int DEFAULT NULL,
  `id_item_compra` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `categoria`, `tipo`, `foto`, `descricao`, `curtido`, `id_item_venda`, `id_item_compra`, `created_at`, `updated_at`) VALUES
(32, 'Oculos pinkkk', 25, 1, 2, 'https://static.oticaisabeladias.com.br/fotos/Blob/8840cf1e506b4bcba173a50bde32fa4e-1.webp', 'okiasoioaio', 1, NULL, NULL, '2024-10-07 19:48:52', '2024-10-11 17:10:54'),
(33, 'oculos blue', 50, 2, 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoq30Fj5ffKeq2lKa_ZNvKAs8Q71znFPJEtQ&s', 'okiasoioaio,okodkjso', 1, NULL, NULL, '2024-10-07 19:50:56', '2024-10-07 19:50:56'),
(34, 'oculos laranja', 590, 2, 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrMf3iYXmA7TMBQRFbUuUELbsaCGnN-6Z3iQ&s', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 0, NULL, NULL, '2024-10-07 19:53:50', '2024-10-10 16:53:13'),
(38, 'Oculos cinza', 500, 2, 2, 'https://www.dutyotica.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/7/5/75.jpg', 'bbbbbbbbbbbbbbbbbbbbbbbbb', 0, NULL, NULL, '2024-10-10 16:52:58', '2024-10-10 16:52:58'),
(39, 'Oculos black', 515, 3, 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_88LNeBYOKzFFDMnuc-JLVAUMFelfgrgDIQ&s', 'çççççççççççççççççççç[', 0, NULL, NULL, '2024-10-11 14:58:49', '2024-10-11 14:58:49'),
(41, 'oculos green', 666, 2, 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKP6d1rSYD2wUtUIkijgwIMj2A7p2TXZUssQ&s', 'dddddddddddddddddddddd', 0, NULL, NULL, '2024-10-11 14:59:43', '2024-10-11 16:31:17'),
(42, 'oculos amarelo', 59, 2, 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpuWKYNJwefInXgU9QGCE7wPWr2-7XPbHXGw&s', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeee', 0, NULL, NULL, '2024-10-11 15:00:20', '2024-10-11 15:00:20'),
(43, 'oculos violeta', 56, 1, 1, 'https://cdn.awsli.com.br/600x1000/1559/1559198/produto/191042568/0db624e038.jpg', 'ffffffffffffffffffffffffffffffffff', 0, NULL, NULL, '2024-10-11 15:01:38', '2024-10-11 15:01:38'),
(44, 'oculos coração', 58, 1, 2, 'https://cdn.awsli.com.br/600x1000/1559/1559198/produto/57792734/6bc67e75bd.jpg', 'oi', 0, NULL, NULL, '2024-10-11 17:38:43', '2024-10-11 17:38:43');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `telefone`, `cpf`, `usuario`, `cep`, `numero`, `updated_at`, `created_at`) VALUES
(18, 'tudo da silva', 'ok@ok', '111111111111111', '(11) 11111-1111', '11111111111111', 'nao nao', '13453-827', 181, '2024-10-11 17:15:14', '2024-10-02 20:02:02'),
(13, 'Richard Willian ', 'richardwillian245@gmail.com', 'dbb18cd8821508612ed4951c7fe47bb64f6ce458', '(11) 11111-1111', '111.111.111-11', 'oioioioiioio', '13453-750', 542, '2024-10-01 19:08:13', '2024-09-30 16:21:49'),
(11, 'mariana', 'mariana@gmsil', 'dbb18cd8821508612ed4951c7fe47bb64f6ce458', '(11) 11111-1111', '111.111.111-11', 'mari', '11111111', 111, '2024-09-25 16:51:01', '2024-09-25 16:51:01');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `vendas`
--

INSERT INTO `vendas` (`id`) VALUES
(1),
(2),
(3),
(101),
(102),
(103);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `estoques`
--
ALTER TABLE `estoques`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estoques`
--
ALTER TABLE `estoques`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
