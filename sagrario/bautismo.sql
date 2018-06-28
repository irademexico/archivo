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
-- Table structure for table `bautismo`
--

CREATE TABLE `bautismo` (
  `clave` char(22) NOT NULL,
  `solicitud` decimal(8,2) NOT NULL,
  `inicial` char(4) NOT NULL,
  `libro` decimal(5,0) NOT NULL,
  `librobis` char(3) NOT NULL,
  `foja` decimal(5,0) NOT NULL,
  `fojac` char(4) NOT NULL,
  `partidan` decimal(5,0) NOT NULL,
  `partidaab` char(4) NOT NULL,
  `fechasacr` date NOT NULL,
  `ministro` char(30) NOT NULL,
  `lugarnac` char(50) NOT NULL,
  `fechanac` date NOT NULL,
  `nombre` char(35) NOT NULL,
  `paterno` char(25) NOT NULL,
  `materno` char(25) NOT NULL,
  `padre` char(50) NOT NULL,
  `madre` char(50) NOT NULL,
  `padrino` char(50) NOT NULL,
  `madrina` char(50) NOT NULL,
  `notamar` decimal(4,0) NOT NULL,
  `ninguna` char(15) NOT NULL,
  `hijoa` char(2) NOT NULL,
  `legitimo` char(2) NOT NULL,
  `domicilio` char(51) NOT NULL,
  `colonia` char(31) NOT NULL,
  `lugarde` char(34) NOT NULL,
  `cpdom` char(6) NOT NULL,
  `parroquia` char(36) NOT NULL,
  `registroc` char(36) NOT NULL,
  `lugregciv` char(51) NOT NULL,
  `fecregciv` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bautismo`
--

INSERT INTO `bautismo` (`clave`, `solicitud`, `inicial`, `libro`, `librobis`, `foja`, `fojac`, `partidan`, `partidaab`, `fechasacr`, `ministro`, `lugarnac`, `fechanac`, `nombre`, `paterno`, `materno`, `padre`, `madre`, `padrino`, `madrina`, `notamar`, `ninguna`, `hijoa`, `legitimo`, `domicilio`, `colonia`, `lugarde`, `cpdom`, `parroquia`, `registroc`, `lugregciv`, `fecregciv`) VALUES
('--', '1862.18', '', '0', '', '0', '', '0', '', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
('10-10-10', '1842.18', '', '10', '', '10', '', '10', '', '1999-10-10', 'PBRO JOSE ARMANDO MENDEZ', 'TULUCA, ESTADO DE MEXICO', '1998-10-10', 'ANA', 'ALAMOS', 'ALVAREZ', 'ARMANDO ALAMOS', 'ANGELICA ALVAREZ', 'ROBERTO CUEVAS', 'SUSANA MARTIN', '0', '', 'A', '', '', '', '', '', '', '', '', '0000-00-00'),
('10-10-15-A', '1848.18', '', '10', '', '10', '', '15', 'A', '2010-05-10', 'M I SR OBISPO D. CARLOS BRISEÃ', 'CUAUHTEMOC , DF', '1997-09-15', 'MARCOS', 'MARTINEZ', 'FALCON', 'DIODORO MARTINEZ', 'ANA FALCON', 'MARCOS BOIS', 'MIRNA DAVALOS', '0', '', 'O', '', '', '', '', '', '', '', '', '0000-00-00'),
('11-11-11', '1843.18', '', '11', '', '11', '', '11', '', '1999-10-10', 'PBRO. D. JORGE EDUARDO ESPINOZ', 'CUAUHTEMOC, DF', '1998-10-10', 'JAVIER', 'SANTOS', 'LOPEZ', 'AGUSTIN SANTOS', 'LAURA LOPEZ', 'JOSE NUÑEZ', 'JUANA NUÑEZ', '0', '', 'O', '', '', '', '', '', '', '', '', '0000-00-00'),
('54--102-B', '1010.18', '', '54', '', '0', '', '102', 'B', '1999-10-10', 'PBRO. D. JORGE EDUARDO ESPINOZ', 'TULUCA, ESTADO DE MEXICO', '1997-10-10', 'LAURA', 'MENDEZ', 'DORANTES', 'JUAN MENDEZ', 'ZOILA DORANTES', 'CARLOS HERNANDEZ', 'HILDA PARAMO', '0', '', 'O', '', '', '', '', '', '', '', '', '0000-00-00'),
('92--100-A', '0.00', '', '92', '', '0', '', '100', 'A', '2000-10-10', '', '', '1998-10-10', 'ALVARO', 'CUEVAS', 'QUINTERO', 'JAVIER CUEVAS', 'ANA QUINTERO', '', '', '0', '', '', '', '', '', '', '', '', '', '', '0000-00-00'),
('92--100-B', '0.00', '', '92', '', '0', '', '100', 'B', '2000-10-10', '', '', '1990-10-10', 'FELIPE', 'ROJAS', 'QUINTERO', 'ALDO ROJAS LOPEZ', 'ANA QUINTERO RESENDIZ', '', '', '0', '', 'O', '', '', '', '', '', '', '', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bautismo`
--
ALTER TABLE `bautismo`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `idx_clave` (`clave`),
  ADD KEY `idx_pamano` (`paterno`(7),`materno`(7),`nombre`) USING BTREE,
  ADD KEY `solicitud` (`solicitud`),
  ADD KEY `padre` (`padre`),
  ADD KEY `madre` (`madre`),
  ADD KEY `libroacta` (`libro`,`partidan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
