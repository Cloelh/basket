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
-- Table structure for table `matchs`
--

DROP TABLE IF EXISTS `matchs`;
CREATE TABLE IF NOT EXISTS `matchs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idEquipeDom` int(11) NOT NULL,
  `idEquipeExt` int(11) NOT NULL,
  `ParisDom` int(11) NOT NULL,
  `ParisExt` int(11) NOT NULL,
  `PtDom` int(11) NOT NULL,
  `PtExt` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `fait` int(11) NOT NULL,
  `journée` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matchs`
--

INSERT INTO `matchs` (`id`, `idEquipeDom`, `idEquipeExt`, `ParisDom`, `ParisExt`, `PtDom`, `PtExt`, `date_time`, `fait`, `journée`) VALUES
(1, 7, 1, 11, 12, 0, 0, '2020-01-18 18:30:00', 0, 10),
(3, 6, 3, 10, 15, 0, 0, '2020-01-19 10:00:00', 0, 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
