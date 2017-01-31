-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 31 jan 2017 om 21:03
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
  `author` varchar(1000) NOT NULL,
  `subtitleone` varchar(255) NOT NULL,
  `subsummaryone` mediumtext NOT NULL,
  `subtitletwo` varchar(255) NOT NULL,
  `subsummarytwo` mediumtext NOT NULL,
  `subtitlethree` varchar(255) NOT NULL,
  `subsummarythree` text NOT NULL,
  `subtitlefour` varchar(255) NOT NULL,
  `subsummaryfour` mediumtext NOT NULL,
  `subtitlefive` varchar(255) NOT NULL,
  `subsummaryfive` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`id`, `smalltitle`, `smallsummary`, `img`, `bigtitle`, `bigsummary`, `moreimg`, `datee`, `author`, `subtitleone`, `subsummaryone`, `subtitletwo`, `subsummarytwo`, `subtitlethree`, `subsummarythree`, `subtitlefour`, `subsummaryfour`, `subtitlefive`, `subsummaryfive`) VALUES
(1, 'meneer de uil', 'meneer de uil heeft een intressant verhaal kom maar hier kijken.', 'uil.jpg', 'meneer de uil is groot', 'meneer de uil heeft een intressant verhaal kom maar hier kijken. meneer de uil heeft een intressant verhaal kom maar hier kijken.meneer de uil heeft een intressant verhaal kom maar hier kijken.meneer de uil heeft een intressant verhaal kom maar hier kijken.meneer de uil heeft een intressant verhaal kom maar hier kijken.meneer de uil heeft een intressant verhaal kom maar hier kijken.', 'uil.jpg/kat.jpg/hond.jpg', '05/07/2052', 'Joey Steffens', '', '', '', '', '', '', '', '', '', ''),
(26, 'haar', 'haaar', '20170131152919_chipmunk.jpg', 'dsfsf', 'sdfsdfsdf', 'a:2:{i:0;s:12:"chipmunk.jpg";i:1;s:19:"croc.1485872959.jpg";}', '20170131', 'dfgd', '', '', '', '', '', '', '', '', '', ''),
(27, 'baaaaaaa', 'baaa', '20170131154415_Backgroundgreen.jpg', 'baaaaaaaaaaaaa', 'baaaaaaabaa', 'a:2:{i:0;s:30:"Backgroundgreen.1485873855.jpg";i:1;s:23:"chipmunk.1485873855.jpg";}', '20170131', 'gfgf', '', '', '', '', '', '', '', '', '', ''),
(28, 'kaas', 'kaassss', '20170131165435_chipmunk.jpg', 'sdfsd', '', 'a:2:{i:0;s:23:"chipmunk.1485878075.jpg";i:1;s:19:"croc.1485878075.jpg";}', '20170131', 'kaas', 'sfdsd', '', 'sfsdf', '', 'sdfsd', '', 'sdfdsf', '', '', ''),
(29, 'hjh', 'vhjhv', '20170131170236_London.jpg', 'cjhhjch', '', 'a:3:{i:0;s:21:"London.1485878556.jpg";i:1;s:22:"newyork.1485878556.jpg";i:2;s:34:"Orange-Wallpaper-HD.1485878556.png";}', '20170131', 'uhk', 'fhh', '', 'jhhjggj', '', 'ghjhgj', '', 'gjg', '', '', ''),
(37, 'a', 'aa', '20170131200800_London.jpg', 'a', 'aa', 'a:3:{i:0;s:21:"London.1485889680.jpg";i:1;s:22:"newyork.1485889680.jpg";i:2;s:34:"Orange-Wallpaper-HD.1485889680.png";}', '20170131', 'hhh', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(38, 'c', 'c', '20170131200909_newyork.jpg', 'c', 'c', 'a:2:{i:0;s:22:"newyork.1485889749.jpg";i:1;s:14:"pictures-1.jpg";}', '20170131', 'a', 'c', 'cc', 'c', 'c', 'c', 'c', 'cc', 'c', 'c', 'c'),
(39, 'ik ben een kleine apen titel', 'ik ben een kleine apen smanevatting', '20170131202318_Ape.jpg', 'ik ben een grote apen titel', 'ik ben een grote apen smaenvatting', 'a:3:{i:0;s:18:"Ape.1485890598.jpg";i:1;s:30:"Backgroundgreen.1485890598.jpg";i:2;s:23:"chipmunk.1485890598.jpg";}', '20170131', 'apen koning/emperor', 'ik ben aap sub titel 1', 'ik ben aap sub samenvatting 1', 'ik ben aap sub titel 2', 'ik ben aap sub samenvatting 2', 'ik ben aap sub titel 3', 'ik ben aap sub samenvatting 3', 'ik ben aap sub titel 4', 'ik ben aap sub samenvatting 4', 'ik ben aap sub titel 5', 'ik ben aap sub samenvatting 5'),
(40, 'leeuww', 'leeuw e leeuww', '20170131210106_Backgroundgreen.jpg', 'grote leeuww', 'grote leeuwgrote leeuwwgrote leeuw', 'a:6:{i:0;s:30:"Backgroundgreen.1485892866.jpg";i:1;s:23:"chipmunk.1485892866.jpg";i:2;s:19:"croc.1485892866.jpg";i:3;s:21:"London.1485892866.jpg";i:4;s:22:"newyork.1485892866.jpg";i:5;s:34:"Orange-Wallpaper-HD.1485892866.png";}', '20170131', 'yhh', 'sub leeuww 1', 'sub tekst leeuw 1w', 'sub leeuww2', 'sub tekst leeuww 2', 'sub leeuww3', 'sub tekst leeuww 3', 'sub leeuww4', 'sub tekst leeuww 4', 'sub leeuww5', 'sub tekst leeuww 5');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
