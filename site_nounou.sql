-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-05-29 14:48:06
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

--
-- 转存表中的数据 `compte`
--

INSERT INTO `compte` (`login`, `mot_de_passe`, `status`, `role`) VALUES
('Bruce@nihao.com', 'lixaolong', 1, 'nounou'),
('David@nihao.com', 'nihao', 1, 'nounou'),
('dqq@utt.fr', 'password', 1, 'administrateur'),
('sam@ch.com', 'nihao', 1, 'nounou'),
('xingyu.ye@utt.fr', 'password', 1, 'nounou'),
('yxy@utt.fr', 'password', 1, 'administrateur');

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

--
-- 转存表中的数据 `nounou`
--

INSERT INTO `nounou` (`ID_N`, `Nom`, `Prenom`, `Ville`, `Email`, `Portable`, `Langue`, `Age`, `Experience`, `Presentation`, `Evaluation`, `Salaire`) VALUES
(1, 'YE', 'Xingyu', 'Saint-germain', 'xingyu.ye@utt.fr', 767158560, 'anglais', 22, 'Experience familiale : garde de frÃ¨res et soeurs, cousins.', 'god', 0, 0),
(2, 'sam', 'smith', 'paris', 'sam@ch.com', 12345678, 'anglais,francais', 33, '', '', 0, 0),
(3, 'David', 'P', 'London', 'David@nihao.com', 123444444, 'anglais', 33, '', '', 0, 0),
(4, 'LEE', 'bruce', 'NewYork', 'Bruce@nihao.com', 33333333, 'anglais,chinois', 36, '', '', 0, 0);

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

--
-- 转存表中的数据 `parents`
--

INSERT INTO `parents` (`ID_P`, `Nom_F`, `Ville`, `Email`, `Information`) VALUES
(1, 'ye', 'dalian', '695549485@qq.com', 'hi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
