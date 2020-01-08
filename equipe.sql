-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 07, 2020 at 01:35 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basket`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `chamionnat` varchar(255) NOT NULL,
  `poule` varchar(255) NOT NULL,
  `points` int(11) NOT NULL,
  `victoire` int(11) NOT NULL,
  `defaite` int(11) NOT NULL,
  `ptPour` int(11) NOT NULL,
  `ptContre` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipe`
--

INSERT INTO `equipe` (`id`, `nom`, `chamionnat`, `poule`, `points`, `victoire`, `defaite`, `ptPour`, `ptContre`) VALUES
(1, 'basket club hulluch', 'Départementale féminine seniors - Division 2', 'poule B', 16, 8, 0, 592, 428),
(2, 'amicale drapeau le portel', 'Départementale féminine seniors - Division 2', 'poule B', 14, 6, 2, 461, 325),
(3, 'es henin beaumont bb', 'Départementale féminine seniors - Division 2', 'poule B', 12, 4, 4, 345, 372),
(4, 'rc lens basket', 'Départementale féminine seniors - Division 2', 'poule B', 10, 3, 4, 317, 375),
(5, 'wingles basket club', 'Départementale féminine seniors - Division 2', 'poule B', 10, 2, 6, 251, 481),
(6, 'arras pays d\'artois basket', 'Départementale féminine seniors - Division 2', 'poule B', 9, 3, 3, 351, 271),
(7, 'basket club lilliers', 'Départementale féminine seniors - Division 2', 'poule B', 7, 1, 5, 286, 351);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
