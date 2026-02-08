-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Lut 2026, 11:25
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `grzybki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grzyby`
--

CREATE TABLE `grzyby` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nazwa` varchar(100) NOT NULL,
  `jadalny` tinyint(1) NOT NULL,
  `kolor_kapelusza` varchar(50) DEFAULT NULL,
  `wystepowanie` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `grzyby`
--

INSERT INTO `grzyby` (`id`, `nazwa`, `jadalny`, `kolor_kapelusza`, `wystepowanie`) VALUES
(1, 'Borowik szlachetny', 1, 'brązowy', 'lasy liściaste i iglaste'),
(2, 'Muchomor czerwony', 0, 'czerwony z białymi kropkami', 'lasy iglaste'),
(3, 'Pieprznik jadalny (kurka)', 1, 'żółty', 'lasy mieszane'),
(4, 'Gąska zielonka', 1, 'zielonkawy', 'lasy sosnowe'),
(5, 'Muchomor sromotnikowy', 0, 'zielonkawy', 'lasy liściaste'),
(6, 'Maślak zwyczajny', 1, 'brązowy', 'lasy iglaste'),
(7, 'Czubajka kania', 1, 'brązowy w cętki', 'łąki, skraje lasów');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `grzyby`
--
ALTER TABLE `grzyby`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `grzyby`
--
ALTER TABLE `grzyby`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
