-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2020 at 10:26 AM
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
  `journee` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matchs`
--

INSERT INTO `matchs` (`id`, `idEquipeDom`, `idEquipeExt`, `ParisDom`, `ParisExt`, `PtDom`, `PtExt`, `date_time`, `fait`, `journee`) VALUES
(1, 7, 1, 11, 12, 0, 0, '2020-01-18 18:30:00', 0, 10),
(3, 6, 3, 10, 15, 0, 0, '2020-01-19 10:00:00', 0, 10),
(4, 7, 2, 10, 20, 0, 0, '2019-09-28 18:30:00', 1, 1),
(5, 6, 5, 67, 26, 67, 26, '2019-09-29 10:00:00', 1, 1),
(6, 1, 3, 72, 57, 72, 57, '2019-10-02 20:30:00', 1, 1),
(7, 5, 7, 30, 25, 30, 25, '2019-10-05 20:00:00', 1, 2),
(8, 1, 4, 66, 39, 66, 39, '2019-10-09 20:30:00', 1, 2),
(9, 2, 3, 71, 31, 71, 31, '2019-10-05 18:30:00', 1, 2),
(10, 6, 1, 63, 69, 63, 69, '2019-10-13 10:00:00', 1, 3),
(11, 4, 3, 44, 50, 44, 50, '2019-10-13 10:30:00', 1, 3),
(12, 2, 5, 91, 33, 91, 33, '2019-10-12 18:30:00', 1, 3),
(13, 1, 7, 80, 62, 80, 62, '2019-11-13 20:30:00', 1, 4),
(14, 3, 6, 30, 60, 0, 0, '2019-10-20 16:00:00', 1, 4),
(15, 4, 2, 31, 72, 31, 72, '2019-10-20 10:30:00', 1, 4),
(16, 7, 3, 50, 42, 50, 42, '2019-11-10 16:00:00', 1, 5),
(17, 6, 4, 53, 54, 53, 54, '2019-11-10 10:00:00', 1, 5),
(18, 5, 1, 32, 92, 32, 92, '2019-11-10 11:00:00', 1, 5),
(19, 4, 7, 53, 38, 53, 38, '2019-11-17 10:00:00', 1, 6),
(20, 6, 2, 56, 58, 56, 58, '2019-11-17 10:30:00', 1, 6),
(21, 3, 5, 60, 33, 60, 33, '2019-11-17 16:00:00', 1, 6),
(22, 7, 6, 32, 46, 32, 46, '2019-11-24 10:30:00', 1, 7),
(23, 5, 4, 30, 47, 30, 47, '2019-11-23 20:00:00', 1, 7),
(24, 1, 2, 83, 66, 83, 66, '2019-11-23 18:30:00', 1, 7),
(25, 2, 7, 65, 46, 65, 46, '2019-11-30 18:30:00', 1, 8),
(26, 5, 6, 32, 66, 32, 66, '2019-11-30 20:00:00', 1, 8),
(27, 3, 1, 60, 64, 60, 64, '2019-12-01 16:00:00', 1, 8),
(28, 7, 5, 33, 35, 33, 35, '2019-12-14 18:30:00', 1, 9),
(29, 4, 1, 49, 66, 49, 66, '2019-12-15 10:30:00', 1, 9),
(30, 3, 2, 45, 38, 45, 38, '2019-12-15 16:00:00', 1, 9),
(31, 5, 2, 0, 0, 0, 0, '2020-01-12 20:00:00', 0, 10),
(32, 7, 1, 0, 0, 0, 0, '2020-01-18 18:30:00', 1, 11),
(33, 6, 3, 0, 0, 0, 0, '2020-01-19 10:00:00', 1, 11),
(34, 2, 4, 0, 0, 0, 0, '2020-01-18 20:30:00', 1, 11);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
