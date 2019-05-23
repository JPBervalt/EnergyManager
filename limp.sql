-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Maio-2019 às 01:23
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `limp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'massa', 'massa'),
(2, 'teste', 'teste'),
(3, '1', '1'),
(4, '1', '2'),
(5, 'teste', 'loucura'),
(6, '2', '2'),
(7, '3', '3'),
(8, '5', '5'),
(9, 'quelegalmassamassaparabÃ©ns', 'teamo'),
(10, 'quelegalmassamassaparabÃ©ns', 'teamo'),
(11, '5', '5'),
(12, '7', '7'),
(13, '7', '7'),
(14, 'TESTE1', 'TESTE1'),
(15, 'muito foda', 'teste'),
(16, 'muito foda', 'teste'),
(17, 'muito foda', 'teste'),
(18, 'maluco', 'maluco'),
(19, 'topper', 'topper'),
(20, 'loucura', 'loucura'),
(21, 'loucura', 'teste'),
(22, 'loucura', 'teste'),
(23, 'teste', 'teste'),
(24, 'TESTE1', 'TESTE'),
(25, 'teste', 'teste'),
(26, 'teste', 'teste'),
(27, 'teste', 'teste'),
(28, 'teste', 'teste'),
(29, 'teste', 'teste'),
(30, 'teste', 'teste'),
(31, 'teste', 'teste'),
(32, 'teste', 'teste'),
(33, 'TESTE1', 'teste'),
(34, 'teste', 'teste');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
