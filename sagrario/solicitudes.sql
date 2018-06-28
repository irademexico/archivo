-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2018 at 04:37 AM
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
-- Table structure for table `solicitudes`
--

CREATE TABLE `solicitudes` (
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
-- Indexes for dumped tables
--

--
-- Indexes for table `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`numSolicitud`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
