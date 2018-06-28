-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2018 at 04:38 AM
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
-- Table structure for table `solic_local`
--

CREATE TABLE `solic_local` (
  `numSolicitud` float(12,2) NOT NULL,
  `solicitud` int(1) NOT NULL,
  `simple` int(1) NOT NULL,
  `urgente` int(1) NOT NULL,
  `para` int(1) NOT NULL,
  `datosMat` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apPaterno` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apMaterno` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `esposo` varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
  `esposa` varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
  `padre` varchar(75) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '',
  `madre` varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
  `padrino` varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
  `madrina` varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
  `fecSacr` date NOT NULL,
  `fecNac` date NOT NULL,
  `original` int(1) NOT NULL,
  `fecAprox` date NOT NULL,
  `fecEntrega` date NOT NULL,
  `iniciales` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  `status` int(1) NOT NULL,
  `fecaSolicitud` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `solic_local`
--

INSERT INTO `solic_local` (`numSolicitud`, `solicitud`, `simple`, `urgente`, `para`, `datosMat`, `nombre`, `apPaterno`, `apMaterno`, `esposo`, `esposa`, `padre`, `madre`, `padrino`, `madrina`, `fecSacr`, `fecNac`, `original`, `fecAprox`, `fecEntrega`, `iniciales`, `status`, `fecaSolicitud`) VALUES
(1842.18, 1, 1, 1, 1, '', 'ANA', 'ALAMOS', 'ALVAREZ', '', '', 'ARMANDO ALAMOS', 'ANGELICA ALVAREZ', 'ROBERTO CUEVAS', 'SUSANA MARTIN', '1999-10-10', '1998-10-10', 1, '0000-00-00', '2018-05-23', '', 4, '2018-05-22'),
(1843.18, 1, 1, 1, 2, '', 'JAVIER', 'SANTOS', 'LOPEZ', '', '', 'AGUSTIN SANTOS', 'LAURA LOPEZ', 'JOSE NUÃ‘EZ', 'JUANA NUÃ‘EZ ', '1999-10-10', '1998-10-10', 1, '0000-00-00', '2018-05-23', '', 4, '2018-05-22'),
(1844.18, 2, 1, 1, 1, '', 'ANGEL', 'LOPEZ', 'LUNA', '', '', 'ANGEL LOPEZ', 'LINA LUNA', 'LUIS LOPEZ ALMANZA', '', '1990-10-10', '0000-00-00', 1, '0000-00-00', '2018-05-24', '', 4, '2018-05-22'),
(1845.18, 3, 1, 1, 1, '', '', '', '', 'LUIS ALBERTO GUERRA', 'MARIA EUGENIA MARIN', '', '', '', '', '2000-10-10', '0000-00-00', 1, '0000-00-00', '2018-05-24', '', 4, '2018-05-22'),
(1846.18, 1, 1, 1, 1, '', 'MARCOS', 'MARTINEZ', 'FALCON', '', '', 'DIODORO MARTINEZ', 'ANA FALCON', '', '', '2010-05-10', '1907-09-15', 0, '2011-05-01', '2018-05-24', '', 4, '2018-05-22'),
(1847.18, 1, 1, 1, 1, '', 'MARCOS', 'MARTINEZ', 'FALCON', '', '', 'DIODORO MARTINEZ', 'ANA FALCON', '', '', '2010-05-10', '2007-09-15', 0, '2011-05-01', '2018-05-24', '', 4, '2018-05-22'),
(1848.18, 1, 1, 1, 1, '', 'MARCOS', 'MARTINEZ', 'FALCON', '', '', 'DIODORO MARTINEZ', 'ANA FALCON', '', '', '2010-05-10', '2007-09-15', 0, '2008-05-15', '2018-05-24', '', 4, '2018-05-22'),
(1849.18, 3, 1, 1, 1, '', '', '', '', 'LAURO AGUIRRE', 'PAULINA PEREZ', '', '', '', '', '2000-10-10', '0000-00-00', 0, '0000-00-00', '2018-05-24', '', 4, '2018-05-22'),
(1850.18, 2, 1, 1, 1, '', 'VICENTE', 'VILLADA', 'ARIAS', '', '', 'ALBERTO VILLADA', 'BLANCA ARIAS', 'JOSE PERDOMO', '', '2004-10-10', '0000-00-00', 0, '0000-00-00', '2018-05-24', '', 4, '2018-05-22'),
(1851.18, 3, 1, 1, 1, '', 'ANA', 'ALAMOS', 'ALVARES', '', '', '', '', '', '', '1999-10-10', '1998-10-10', 0, '0000-00-00', '2018-05-25', '', 4, '2018-05-23'),
(1852.18, 3, 1, 1, 1, '', 'ANA', 'ALAMOS', 'ALVARES', '', '', '', '', '', '', '1999-10-10', '1998-10-10', 0, '0000-00-00', '2018-05-25', '', 4, '2018-05-23'),
(1853.18, 3, 1, 1, 2, '', 'ANA', 'ALAMOS', 'ALVAREZ', '', '', '', '', '', 'SUSANA MARTIN', '1999-10-10', '1998-10-10', 1, '0000-00-00', '2018-05-28', '', 4, '2018-05-26'),
(1854.18, 3, 1, 1, 2, '', 'ANA', 'ALAMOS', 'ALVAREZ', '', '', '', '', '', 'SUSANA MARTIN', '1999-10-10', '1998-10-10', 1, '0000-00-00', '2018-05-28', '', 4, '2018-05-26'),
(1855.18, 1, 1, 1, 2, '', 'ANA', 'ALAMOS', 'ALVAREZ', '', '', '', '', '', 'SUSANA MARTIN', '1999-10-10', '1998-10-10', 1, '0000-00-00', '2018-05-28', '', 4, '2018-05-26'),
(1856.18, 1, 1, 1, 2, '', 'ANA', 'ALAMOS', 'ALVAREZ', '', '', '', '', '', 'SUSANA MARTIN', '1999-10-10', '1998-10-10', 1, '0000-00-00', '2018-05-28', '', 4, '2018-05-26'),
(1857.18, 1, 1, 1, 2, '', 'ANA', 'ALAMOS', 'ALVAREZ', '', '', '', '', '', 'SUSANA MARTIN', '1999-10-10', '1998-10-10', 1, '0000-00-00', '2018-05-28', '', 4, '2018-05-26'),
(1858.18, 1, 1, 1, 2, '', 'ANA', 'ALAMOS', 'ALVAREZ', '', '', 'ARMANDO ALAMOS', 'ANGELICA ALVAREZ', 'ROBERTO CUEVAS', 'SUSANA MARTIN', '1999-10-10', '1998-10-10', 1, '0000-00-00', '2018-05-28', '', 4, '2018-05-26'),
(1859.18, 1, 1, 1, 2, '', 'ANA', 'ALAMOS', 'ALVAREZ', '', '', 'ARMANDO ALAMOS', 'ANGELICA ALVAREZ', 'ROBERTO CUEVAS', 'SUSANA MARTIN', '1999-10-10', '1998-10-10', 1, '0000-00-00', '2018-05-28', '', 4, '2018-05-26'),
(1860.18, 1, 1, 1, 2, '', 'ANA', 'ALAMOS', 'ALVAREZ', '', '', 'ARMANDO ALAMOS', 'ANGELICA ALVAREZ', 'ROBERTO CUEVAS', 'SUSANA MARTIN', '1999-10-10', '1998-10-10', 1, '0000-00-00', '2018-05-28', '', 4, '2018-05-26'),
(1861.18, 1, 1, 1, 2, '', 'ANA', 'ALAMOS', 'ALVAREZ', '', '', 'ARMANDO ALAMOS', 'ANGELICA ALVAREZ', 'ROBERTO CUEVAS', 'SUSANA MARTIN', '1999-10-10', '1998-10-10', 1, '0000-00-00', '2018-05-29', '', 4, '2018-05-26'),
(1862.18, 1, 1, 1, 1, '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 1, '0000-00-00', '2018-05-30', '', 4, '2018-05-27'),
(1864.18, 1, 1, 1, 1, '', 'ANA', 'ALAMOS', 'ALVAREZ', '', '', 'ARMANDO ALAMOS', 'ANGELICA ALVAREZ', 'ALAN ALVARES', 'SUSANA MARTIN', '2017-05-09', '2011-05-15', 1, '0000-00-00', '2018-05-31', '', 1, '2018-05-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `solic_local`
--
ALTER TABLE `solic_local`
  ADD PRIMARY KEY (`numSolicitud`),
  ADD KEY `fecsol` (`fecaSolicitud`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
