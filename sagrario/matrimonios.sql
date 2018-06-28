-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2018 at 04:30 AM
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
-- Table structure for table `matrimonios`
--

CREATE TABLE `matrimonios` (
  `clave` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `numSolicitud` int(11) NOT NULL,
  `libro` int(11) NOT NULL,
  `foja` int(11) NOT NULL,
  `fojac` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  `partida` int(11) NOT NULL,
  `ministro` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fecSacr` date NOT NULL,
  `novio` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `novia` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `testigo1` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `testigo2` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `parrPresento` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `colParrPresenta` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `entidadParrPresenta` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `matrimonios`
--

INSERT INTO `matrimonios` (`clave`, `numSolicitud`, `libro`, `foja`, `fojac`, `partida`, `ministro`, `fecSacr`, `novio`, `novia`, `testigo1`, `testigo2`, `parrPresento`, `colParrPresenta`, `entidadParrPresenta`) VALUES
('m12-12-12', 1845, 12, 12, '', 12, 'PBRO. D. JORGE EDUARDO ESPINOZ', '2000-10-10', 'LUIS ALBERTO GUERRA', 'MARIA EUGENIA MARIN', 'FRANCISCO CORDOBA', 'LEONA JASSO', 'NUESTRA SEÑORA DE FATIMA', 'ROMA', 'DISTRITO FEDERAL'),
('m15-15-15', 1849, 15, 15, '', 15, 'PBRO JOSE ARMANDO MENDEZ', '2000-10-10', 'LAURO AGUIRRE', 'PAULINA PEREZ', 'ALAN CRUZ', 'ANA GALVAN', 'SAN LUCAS EVANGELISTA', 'SAN LUCAS', 'MILPA ALTA DF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matrimonios`
--
ALTER TABLE `matrimonios`
  ADD PRIMARY KEY (`clave`),
  ADD UNIQUE KEY `numsol` (`numSolicitud`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
