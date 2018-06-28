-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2018 at 04:31 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sagrario`
--

-- --------------------------------------------------------

--
-- Table structure for table `notas`
--

CREATE TABLE `notas` (
  `numSolicitud` float(6,2) NOT NULL,
  `notaPie` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notas`
--

INSERT INTO `notas` (`numSolicitud`, `notaPie`) VALUES
(1842.18, 'Valida para tramitar matrimonio en la parroquia de SAN BUENAVENTURA, EL ORO MEXICO.\r\nCON MARCOS CARRILLO CARDENAS\r\nEL 10 DE SEPTIEMBRE DE 2018'),
(1843.18, 'Valida para tramitar matrimonio en la parroquia de SAN AGUSTIN, COL POLANCO\r\nCON BELLA VALDEZ\r\nEL 10 DE OCTUBRE DE 2018'),
(1846.18, 'Valida para tramitar matrimonio en la parroquia de NTRA SRA DE GUADALUPE\r\nCOL VILLA DE GUADALUPE'),
(1847.18, 'Valida para tramitar matrimonio en la parroquia de SAN LUCAS, BARRIO SAN LUCAS\r\nTOLUCA DE LERDO, ESTADO DE MEXICO\r\nCON ERENDIRA JAUREZ\r\nEL 27 DE OCTUBRE DE 2018'),
(1848.18, 'Valida para tramitar matrimonio en la Parroquia de SANTOS COSME Y DAMIAN\r\nCOL SAN RAFAEL CUAUHTEMOC, DF\r\nCON HERLINDA CRUZ CUEVAS\r\nEL 25 DE JUNIO DE 2018 '),
(1862.18, 'Valida para tramitar matrimonio en la parroquia de ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`numSolicitud`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
