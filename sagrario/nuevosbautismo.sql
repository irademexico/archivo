-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2018 at 04:36 AM
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
-- Table structure for table `nuevosbautismo`
--

CREATE TABLE `nuevosbautismo` (
  `clave` char(22) NOT NULL,
  `inicial` char(4) NOT NULL,
  `libro` decimal(5,0) NOT NULL,
  `foja` decimal(5,0) NOT NULL,
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
  `hijoa` char(2) NOT NULL,
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
-- Dumping data for table `nuevosbautismo`
--

INSERT INTO `nuevosbautismo` (`clave`, `inicial`, `libro`, `foja`, `partidan`, `partidaab`, `fechasacr`, `ministro`, `lugarnac`, `fechanac`, `nombre`, `paterno`, `materno`, `padre`, `madre`, `padrino`, `madrina`, `hijoa`, `domicilio`, `colonia`, `lugarde`, `cpdom`, `parroquia`, `registroc`, `lugregciv`, `fecregciv`) VALUES
('---', '', '0', '1', '1', 'A', '2018-05-23', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nuevosbautismo`
--
ALTER TABLE `nuevosbautismo`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `idx_clave` (`clave`),
  ADD KEY `idx_pamano` (`paterno`(7),`materno`(7),`nombre`) USING BTREE,
  ADD KEY `padre` (`padre`),
  ADD KEY `madre` (`madre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
