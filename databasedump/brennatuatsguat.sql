-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Apr 2018 um 11:22
-- Server-Version: 10.1.31-MariaDB
-- PHP-Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `brennatuatsguat`
--
CREATE DATABASE IF NOT EXISTS `brennatuatsguat` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `brennatuatsguat`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `difficulties`
--

DROP TABLE IF EXISTS `difficulties`;
CREATE TABLE IF NOT EXISTS `difficulties` (
  `difficultyid` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(10) NOT NULL,
  PRIMARY KEY (`difficultyid`),
  UNIQUE KEY `descriptionDifficulty` (`description`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- RELATIONEN DER TABELLE `difficulties`:
--

--
-- Daten für Tabelle `difficulties`
--

INSERT INTO `difficulties` (`difficultyid`, `description`) VALUES
(1, 'easy'),
(3, 'hard'),
(2, 'medium');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `highscore`
--

DROP TABLE IF EXISTS `highscore`;
CREATE TABLE IF NOT EXISTS `highscore` (
  `highscoreid` int(11) NOT NULL AUTO_INCREMENT,
  `playerid` int(11) NOT NULL,
  `score` int(11) NOT NULL COMMENT 'clicks needed',
  `difficulty` int(11) NOT NULL COMMENT '1: easy, 2: medium, 3: hard',
  PRIMARY KEY (`highscoreid`) USING BTREE,
  UNIQUE KEY `difficultyHighscore` (`difficulty`),
  KEY `playerid` (`playerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONEN DER TABELLE `highscore`:
--   `playerid`
--       `user` -> `userid`
--   `difficulty`
--       `difficulties` -> `difficultyid`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- RELATIONEN DER TABELLE `user`:
--

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`userid`,`username`, `password`) VALUES
(2, 'Fackelmann', 'musterpasswort'),
(3, 'fackeldame', 'fackeldame');

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `highscore`
--
ALTER TABLE `highscore`
  ADD CONSTRAINT `highscore_ibfk_1` FOREIGN KEY (`playerid`) REFERENCES `user` (`userid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `highscore_ibfk_2` FOREIGN KEY (`difficulty`) REFERENCES `difficulties` (`difficultyid`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;