-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2018 at 04:28 AM
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
-- Table structure for table `confirma`
--

CREATE TABLE `confirma` (
  `clave` char(20) NOT NULL,
  `idx` decimal(4,0) DEFAULT NULL,
  `solicitud` decimal(8,2) NOT NULL,
  `libro` decimal(5,0) NOT NULL,
  `librobis` char(2) NOT NULL,
  `foja` decimal(5,0) NOT NULL,
  `fojac` char(4) NOT NULL,
  `acta` decimal(5,0) NOT NULL,
  `reg` decimal(3,0) NOT NULL,
  `actaab` char(3) NOT NULL,
  `fechaconf` date NOT NULL,
  `hijoa` char(2) NOT NULL,
  `nombre` char(51) NOT NULL,
  `paterno` char(51) NOT NULL,
  `materno` char(31) NOT NULL,
  `fechanac` date NOT NULL,
  `lugarnac` char(51) NOT NULL,
  `parrbau` varchar(51) NOT NULL,
  `lugarbau` char(51) NOT NULL,
  `librobau` char(26) NOT NULL,
  `fechabau` date NOT NULL,
  `xdiacon` varchar(3) NOT NULL,
  `xmescon` varchar(10) NOT NULL,
  `xanocon` varchar(4) NOT NULL,
  `padre` char(51) NOT NULL,
  `madre` char(51) NOT NULL,
  `padrino` char(51) NOT NULL,
  `ministro` char(71) NOT NULL,
  `inicial` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `confirma`
--

INSERT INTO `confirma` (`clave`, `idx`, `solicitud`, `libro`, `librobis`, `foja`, `fojac`, `acta`, `reg`, `actaab`, `fechaconf`, `hijoa`, `nombre`, `paterno`, `materno`, `fechanac`, `lugarnac`, `parrbau`, `lugarbau`, `librobau`, `fechabau`, `xdiacon`, `xmescon`, `xanocon`, `padre`, `madre`, `padrino`, `ministro`, `inicial`) VALUES
('c-', NULL, '0.00', '0', '', '0', '', '0', '0', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
('c10-10-10-A', NULL, '1844.18', '10', '', '10', '', '10', '0', 'A', '1990-10-10', 'O', 'ANGEL', 'LOPEZ', 'LUNA', '1985-02-05', 'SAN JUAN , D.F.', 'SANTOS APOSTOLES FELIPE Y SANTIAGO', 'D.F.', '', '1986-02-10', '', '', '', 'ANGEL LOPEZ', 'LINA LUNA', 'LUIS LOPEZ ALMANZA', 'M I SR OBISPO D. CARLOS BRISEÃ‘O', ''),
('c11-11-11-A', NULL, '1850.18', '11', '', '11', '', '11', '0', 'A', '2004-10-10', 'O', 'VICENTE', 'VILLADA', 'ARIAS', '2000-05-05', 'TOLUCA', 'NTRA SRA DE LA SALUD', 'NAUCALPAN DE JUARES EDO DE MEX.', '', '2002-07-07', '', '', '', 'ALBERTO VILLADA', 'BLANCA ARIAS', 'JOSE PERDOMO', 'M I SR OBISPO D. CARLOS BRISEÃ‘O', ''),
('c13-13-13-A', NULL, '1234.18', '13', '', '13', '', '13', '0', 'A', '2004-10-10', 'O', 'FRANCISCO', 'HERNANDEZ', 'MIRELES', '2002-10-10', 'CUAUHTEMOC , DF', 'SAN', 'SAN', '', '2003-10-10', '', '', '', 'FRANCISCO HERNANDEZ', 'ZOILA MIRELES', 'LEODEGARIO VAZQUEZ', 'M I SR OBISPO D. CARLOS BRISEÃ‘O', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirma`
--
ALTER TABLE `confirma`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `solicitud` (`solicitud`),
  ADD KEY `paterno` (`paterno`),
  ADD KEY `materno` (`materno`),
  ADD KEY `fechaconf` (`fechaconf`),
  ADD KEY `nombrepm` (`nombre`,`paterno`(1),`materno`(1)),
  ADD KEY `nombrepama` (`nombre`,`padre`(3),`materno`(3));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
