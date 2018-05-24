-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-05-24 12:32:06
-- 服务器版本： 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site_nounou`
--

-- --------------------------------------------------------

--
-- 表的结构 `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `login` varchar(20) NOT NULL,
  `mot_de_passe` varchar(20) NOT NULL,
  `status` int(1) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `enfant`
--

DROP TABLE IF EXISTS `enfant`;
CREATE TABLE IF NOT EXISTS `enfant` (
  `Prenom` varchar(20) NOT NULL,
  `Date_Naissance` date NOT NULL,
  `Restriction` text NOT NULL,
  `parent` int(11) NOT NULL,
  PRIMARY KEY (`Prenom`,`parent`),
  KEY `parent` (`parent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `nounou`
--

DROP TABLE IF EXISTS `nounou`;
CREATE TABLE IF NOT EXISTS `nounou` (
  `ID_N` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Ville` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Portable` int(10) NOT NULL,
  `Langue` varchar(100) NOT NULL,
  `Age` int(2) NOT NULL,
  `Experience` text NOT NULL,
  `Presentation` text NOT NULL,
  `Evaluation` float NOT NULL,
  `Salaire` int(10) NOT NULL,
  PRIMARY KEY (`ID_N`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `parents`
--

DROP TABLE IF EXISTS `parents`;
CREATE TABLE IF NOT EXISTS `parents` (
  `ID_P` int(8) NOT NULL,
  `Nom_F` varchar(20) NOT NULL,
  `Ville` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Information` text NOT NULL,
  PRIMARY KEY (`ID_P`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
