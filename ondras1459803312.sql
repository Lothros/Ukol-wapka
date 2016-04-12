-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Úte 12. dub 2016, 11:31
-- Verze serveru: 10.1.10-MariaDB
-- Verze PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `ondras1459803312`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `obory`
--

CREATE TABLE `obory` (
  `id_obor` int(11) NOT NULL,
  `nazev` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `obory`
--

INSERT INTO `obory` (`id_obor`, `nazev`) VALUES
(1, 'Informační Technologie'),
(2, 'Grafický design'),
(3, 'Mechatronik');

-- --------------------------------------------------------

--
-- Struktura tabulky `studenti`
--

CREATE TABLE `studenti` (
  `id` int(11) NOT NULL,
  `jméno` varchar(60) DEFAULT NULL,
  `příjmení` varchar(60) DEFAULT NULL,
  `město` varchar(45) DEFAULT NULL,
  `obory_id_obor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `studenti`
--

INSERT INTO `studenti` (`id`, `jméno`, `příjmení`, `město`, `obory_id_obor`) VALUES
(1, 'Jan', 'Novák', 'Varnsdorf', 2),
(2, 'Petra', 'Mastná', 'Liberec', 3),
(3, 'Jana', 'Kolomazníková', 'Praha', 3),
(4, 'Petr', 'Mocík', 'Nový Bor', 1),
(5, 'Pavel', 'Hlinka', 'Krásomily', 2),
(6, 'Martina', 'Vachelová', 'Hejnice', 1),
(7, 'Daniela', 'Facková', 'Horní Hanychov', 3),
(8, 'Martin', 'Petr', 'Rumburk', 2),
(9, 'Světlana', 'Kytičková', 'Hejnice', 2),
(10, 'Ondřej', 'Podroužek', 'Hejnice', 3),
(11, 'Matěj', 'Myšáček', 'Klášterov', 1),
(12, 'Antonín', 'Popelka', 'Andělka', 2),
(13, 'Zdena', 'Andělská', 'Rychnov nad Kněžnou', 1),
(105, 'Petr', 'Stránský', 'Ústí nad Labem', 2),
(107, 'Zdeněk', 'Babiš', 'Bratislava', 3),
(111, 'Petr', 'Klíč', 'Zahrádkov', 3),
(115, 'Karel', 'Teplý', 'Teplice', 3),
(117, 'David', 'Hardy', 'Lázně Libverda', 1),
(118, 'Jaroslav', 'Hlaváč', 'Rumburk', 1),
(119, 'Ladislav', 'Záhora', 'Karlštejn', 2),
(120, 'Jan', 'Jerie', 'Česká Lípa', 1);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `obory`
--
ALTER TABLE `obory`
  ADD PRIMARY KEY (`id_obor`);

--
-- Klíče pro tabulku `studenti`
--
ALTER TABLE `studenti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_studenti_obory_idx` (`obory_id_obor`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `obory`
--
ALTER TABLE `obory`
  MODIFY `id_obor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pro tabulku `studenti`
--
ALTER TABLE `studenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `studenti`
--
ALTER TABLE `studenti`
  ADD CONSTRAINT `fk_studenti_obory` FOREIGN KEY (`obory_id_obor`) REFERENCES `obory` (`id_obor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
