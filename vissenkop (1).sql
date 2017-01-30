-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 jan 2017 om 10:12
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vissenkop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `smalltitle` varchar(400) NOT NULL,
  `smallsummary` varchar(1000) NOT NULL,
  `img` varchar(10000) NOT NULL,
  `bigtitle` varchar(1000) NOT NULL,
  `bigsummary` varchar(1000) NOT NULL,
  `moreimg` varchar(1000) NOT NULL,
  `datee` varchar(1000) NOT NULL,
  `author` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`id`, `smalltitle`, `smallsummary`, `img`, `bigtitle`, `bigsummary`, `moreimg`, `datee`, `author`) VALUES
(1, 'meneer de uil', 'meneer de uil heeft een intressant verhaal kom maar hier kijken.', 'uil.jpg', 'meneer de uil is groot', 'meneer de uil heeft een intressant verhaal kom maar hier kijken. meneer de uil heeft een intressant verhaal kom maar hier kijken.meneer de uil heeft een intressant verhaal kom maar hier kijken.meneer de uil heeft een intressant verhaal kom maar hier kijken.meneer de uil heeft een intressant verhaal kom maar hier kijken.meneer de uil heeft een intressant verhaal kom maar hier kijken.', 'uil.jpg/kat.jpg/hond.jpg', '05/07/2052', 'Joey Steffens'),
(2, 'DE APEN KONING', 'apen konings kleine verhaal', 'aap.jpg', 'apen koning grote titel', 'grote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekstgrote tekst', 'aapjes.jpg/aap.jpg', '03/10/3524', 'Aap'),
(3, 'Visje', 'Vissen die vissig zijn', 'Backgroundgreen.jpg', 'Visje groot', 'Vissen veel tekstVissen veel tekstVissen veel tekstVissen veel tekstVissen veel tekstVissen veel tekstVissen veel tekst', 'eab98b6fc67345eaf9df959157308c26.jpg', '20161214', 'visje');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
