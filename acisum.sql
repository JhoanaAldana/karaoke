-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2015 at 07:58 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `acisum`
--

-- --------------------------------------------------------

--
-- Table structure for table `buscador`
--

CREATE TABLE IF NOT EXISTS `buscador` (
  `nombre` varchar(20) NOT NULL,
  `artista` varchar(20) NOT NULL,
  `url` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buscador`
--

INSERT INTO `buscador` (`nombre`, `artista`, `url`) VALUES
('cool down the pace', 'gregory isaacs', 'www.url.com');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`usuario_id` int(4) NOT NULL,
  `usuario_nombre` varchar(15) NOT NULL DEFAULT '',
  `usuario_clave` varchar(32) NOT NULL DEFAULT '',
  `usuario_email` varchar(50) NOT NULL DEFAULT '',
  `usuario_freg` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_nombre`, `usuario_clave`, `usuario_email`, `usuario_freg`) VALUES
(1, 'fernando', '827ccb0eea8a706c4c34a16891f84e7b', 'fernandoamz148@gmail.com', '0000-00-00 00:00:00'),
(3, 'eduardo', '827ccb0eea8a706c4c34a16891f84e7b', 'eduardo@hotmail.com', '2015-03-31 15:10:27'),
(4, 'usuario', 'a54fe1d52fadcdfbd9f8cfa93847054f', 'acisum@gmail.com', '2015-03-31 19:39:53'),
(5, 'nuevo', '202cb962ac59075b964b07152d234b70', 'jaja@gmail.com', '2015-04-01 20:56:20'),
(6, 'nuevo1', '202cb962ac59075b964b07152d234b70', 'jaja@gmail.com', '2015-04-01 21:05:34'),
(7, 'fernandoamz', '202cb962ac59075b964b07152d234b70', 'fer1@hotmail.com', '2015-04-02 17:32:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `usuario_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
