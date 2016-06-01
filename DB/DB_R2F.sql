-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Jun-2016 às 20:45
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r2f`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadusu`
--

CREATE TABLE `cadusu` (
  `id` int(11) NOT NULL COMMENT 'ID do usuário do sistema',
  `usuario` varchar(50) NOT NULL COMMENT 'Usuario do sistema',
  `senha` varchar(20) NOT NULL COMMENT 'Senha do usuario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Usuarios do sistema';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadusu`
--
ALTER TABLE `cadusu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_unique` (`usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadusu`
--
ALTER TABLE `cadusu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID do usuário do sistema', AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
