-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Št 25.Máj 2023, 10:06
-- Verzia serveru: 10.4.28-MariaDB
-- Verzia PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `plastbottl`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `pouzivatel`
--

CREATE TABLE `pouzivatel` (
  `id` int(11) NOT NULL,
  `nick` varchar(45) NOT NULL,
  `heslo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `pouzivatel`
--

INSERT INTO `pouzivatel` (`id`, `nick`, `heslo`) VALUES
(1, 'andrei', '1');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `produkcia`
--

CREATE TABLE `produkcia` (
  `id` int(11) NOT NULL,
  `nazov` varchar(45) NOT NULL,
  `cena` int(11) NOT NULL,
  `objem` int(11) NOT NULL,
  `diametr` int(11) NOT NULL,
  `image` text NOT NULL,
  `popis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `produkcia`
--

INSERT INTO `produkcia` (`id`, `nazov`, `cena`, `objem`, `diametr`, `image`, `popis`) VALUES
(9, 'Бутылка 2л', 230, 2000, 38, '2022-11-25 (6).png', 'Не просто бутылка'),
(10, 'Бутылка зелёная ', 1000, 500, 38, 'WIN_20230523_09_03_02_Pro.jpg', 'C этикеткой');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `ziadost`
--

CREATE TABLE `ziadost` (
  `id` int(11) NOT NULL,
  `meno` varchar(45) NOT NULL,
  `popis` text NOT NULL,
  `region` varchar(45) NOT NULL,
  `kontakt` varchar(45) NOT NULL,
  `flag` tinyint(4) NOT NULL,
  `pridane` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `ziadost`
--

INSERT INTO `ziadost` (`id`, `meno`, `popis`, `region`, `kontakt`, `flag`, `pridane`) VALUES
(7, '', 'Скидки', 'Тренчин', '8 (800) 555-35-35', 1, '2023-05-24 18:59:04'),
(8, '', 'Продукция', 'Братислава', '+73160823971', 1, '2023-05-24 18:59:07'),
(9, 'Ибрагим', 'alhisdfv', 'Кошице', '798101', 1, '2023-05-24 19:03:40');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `pouzivatel`
--
ALTER TABLE `pouzivatel`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `produkcia`
--
ALTER TABLE `produkcia`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `ziadost`
--
ALTER TABLE `ziadost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `pouzivatel`
--
ALTER TABLE `pouzivatel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pre tabuľku `produkcia`
--
ALTER TABLE `produkcia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `ziadost`
--
ALTER TABLE `ziadost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
