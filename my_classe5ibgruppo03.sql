-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Giu 23, 2022 alle 19:09
-- Versione del server: 8.0.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_classe5ibgruppo03`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `cani`
--

CREATE TABLE IF NOT EXISTS `cani` (
  `id_cane` int NOT NULL AUTO_INCREMENT,
  `razza` varchar(50) NOT NULL,
  `nome_cane` varchar(50) NOT NULL,
  `cf_padrone` varchar(30) NOT NULL,
  PRIMARY KEY (`id_cane`),
  KEY `fk_padrone` (`cf_padrone`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=14 ;

--
-- Dump dei dati per la tabella `cani`
--

INSERT INTO `cani` (`id_cane`, `razza`, `nome_cane`, `cf_padrone`) VALUES
(12, 'Boxer', 'Puppy', 'JCKEXD95R20E819Q'),
(13, 'Dobermann', 'Billy', 'JCKEXD95R20E819Q');

-- --------------------------------------------------------

--
-- Struttura della tabella `padroni`
--

CREATE TABLE IF NOT EXISTS `padroni` (
  `codice_fiscale` varchar(30) NOT NULL,
  `nome_padrone` varchar(50) NOT NULL,
  `cognome_padrone` varchar(50) NOT NULL,
  PRIMARY KEY (`codice_fiscale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `padroni`
--

INSERT INTO `padroni` (`codice_fiscale`, `nome_padrone`, `cognome_padrone`) VALUES
('JCKEXD95R20E819Q', 'Ursula', 'Gatti'),
('NZVKSB58Z71X515H', 'Selvaggia', 'Fontana'),
('TBVBDG40Q18J582E', 'Mariano', 'Costantini');

-- --------------------------------------------------------

--
-- Struttura della tabella `progetti`
--

CREATE TABLE IF NOT EXISTS `progetti` (
  `id_progetto` int NOT NULL AUTO_INCREMENT,
  `testo_prg` varchar(255) NOT NULL,
  `url_img` varchar(255) NOT NULL,
  `percorso_pag` varchar(255) NOT NULL,
  `foto_prog` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_progetto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=6 ;

--
-- Dump dei dati per la tabella `progetti`
--

INSERT INTO `progetti` (`id_progetto`, `testo_prg`, `url_img`, `percorso_pag`, `foto_prog`) VALUES
(1, 'Menu Bar Pranzo', 'https://static.vecteezy.com/ti/vettori-gratis/p1/430684-logo-design-del-menu-del-ristorante-gratuito-vettoriale.jpg', './menu-pranzo.html', 1),
(2, 'Video PCTO', 'http://www.liceopigafetta.edu.it/wp-content/uploads/2019/09/ASL_PCTO-381638da.png', './pcto-video.html', 1),
(4, 'Gestione Canile', 'https://cdn-icons-png.flaticon.com/512/194/194630.png', './Canile/', 1),
(5, 'Elenco dei link preferiti', 'https://cdn-icons-png.flaticon.com/512/1271/1271847.png', 'https://fav-urls.hyperphp.com/', 1);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `cani`
--
ALTER TABLE `cani`
  ADD CONSTRAINT `fk_padrone` FOREIGN KEY (`cf_padrone`) REFERENCES `padroni` (`codice_fiscale`) ON DELETE RESTRICT ON UPDATE RESTRICT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
