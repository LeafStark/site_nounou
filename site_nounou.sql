-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-05-21 16:24:22
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

--
-- 转存表中的数据 `nounou`
--

INSERT INTO `nounou` (`ID_N`, `Nom`, `Prenom`, `Ville`, `Email`, `Portable`, `Langue`, `Age`, `Experience`, `Presentation`, `Evaluation`, `Salaire`) VALUES
(1, 'ye', 'xingyu', 'st', '695549485@qq.com', 767158560, '', 33, '33', '33', 33, 33333),
(2, 'ye', 'xingyu', 'st', '695549485@qq.com', 767158560, '', 33, '33', '33', 33, 33333),
(3, 'ye', 'xingyu', 'st', '695549485@qq.com', 767158560, '', 33, '33', '33', 11, 22),
(4, 'DU', 'Qiaoqian', 'Troyes', 'qiao@utt.fr', 785412674, '', 33, '33', '33', 11, 22),
(5, 'ye', 'xingyu', 'sr', '695549485@qq.com', 767158560, 'æ³•å›½', 22, '', '', 0, 0),
(6, 'ye', 'xingyu', 'sr', '695549485@qq.com', 767158560, 'æ³•å›½', 22, '', '', 0, 0),
(7, 'ye', 'xingyu', 'sr', '695549485@qq.com', 767158560, 'æ³•å›½', 22, '', '', 0, 0);

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
(0, 'DU', 'Troyes', 'qiaoqian@utt.fr', 'Parle Chinois'),
(1, 'Ye', 'Troyes', 'ye@utt.fr', 'Parle chinois et anglais'),
(2, 'ok', 'Troyes', 'ok@utt.fr', 'Parle anglais'),
(3, 'Jo', 'Troyes', 'jo@qq.com', 'non'),
(4, 'ye', 'st', '695549485@qq.com', 'aaa'),
(5, 'ye', 'xingyu', '695549485@qq.com', 'aaaaa'),
(6, 'ye', 'st', '695549485@qq.com', 'aaa'),
(7, 'ye', 's', '695549485@qq.com', '123123'),
(8, 'ye', 's', '695549485@qq.com', '123123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
