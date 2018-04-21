-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Apr 2018 um 22:14
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
CREATE TABLE `difficulties` (
  `difficultyid` int(11) NOT NULL,
  `description` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
CREATE TABLE `highscore` (
  `highscoreid` int(11) NOT NULL,
  `playerid` int(11) NOT NULL,
  `score` int(11) NOT NULL COMMENT 'clicks needed',
  `difficulty` int(11) NOT NULL COMMENT '1: easy, 2: medium, 3: hard'
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
CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONEN DER TABELLE `user`:
--

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `username`, `mail`, `password`) VALUES
(2, 'Max', 'Mustermann', 'Fackelmann', 'max.mustermann@fackelmann.com', 'musterpasswort'),
(3, 'Maria', 'Musterfrau', 'fackeldame', 'fackeldame@mail.com', 'fackeldame');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `difficulties`
--
ALTER TABLE `difficulties`
  ADD PRIMARY KEY (`difficultyid`),
  ADD UNIQUE KEY `descriptionDifficulty` (`description`);

--
-- Indizes für die Tabelle `highscore`
--
ALTER TABLE `highscore`
  ADD PRIMARY KEY (`highscoreid`) USING BTREE,
  ADD UNIQUE KEY `difficultyHighscore` (`difficulty`),
  ADD KEY `playerid` (`playerid`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `difficulties`
--
ALTER TABLE `difficulties`
  MODIFY `difficultyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `highscore`
--
ALTER TABLE `highscore`
  MODIFY `highscoreid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
