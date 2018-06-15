-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-06-14 12:15:25
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
-- 表的结构 `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `ID_C` int(10) NOT NULL,
  `Email_N` varchar(20) NOT NULL,
  `Email_P` varchar(20) NOT NULL,
  `Duree` int(2) NOT NULL,
  `Salaire` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`ID_C`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `commande`
--

INSERT INTO `commande` (`ID_C`, `Email_N`, `Email_P`, `Duree`, `Salaire`, `Status`) VALUES
(1, 'sam@ch.com', 'mike@qq.com', 5, 45, 1),
(2, 'xingyu.ye@utt.fr', 'mike@qq.com', 5, 45, 0),
(3, 'sam@ch.com', 'dudu@qq.com', 18, 126, 1),
(4, 'sam@ch.com', 'dudu@qq.com', 18, 126, 1),
(5, 'sam@ch.com', 'dudu@qq.com', 18, 126, 1),
(6, 'qiaoqiao@utt.fr', 'yexingyu@utt.fr', 252, 1764, 1),
(7, 'xingyu.ye@utt.fr', 'yexingyu@utt.fr', 252, 1764, 0);

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
('David@nihao.com', 'nihao', 2, 'nounou'),
('dqq@utt.fr', 'password', 1, 'administrateur'),
('dudu@qq.com', 'password', 2, 'parent'),
('mike@qq.com', 'password', 1, 'parent'),
('qianqian@utt.fr', 'password', 1, 'nounou'),
('qiaoqiao@utt.fr', 'password', 2, 'nounou'),
('sam@ch.com', 'nihao', 0, 'nounou'),
('xingyu.ye@utt.fr', 'password', 2, 'nounou'),
('yexingyu@utt.fr', 'password', 2, 'parent'),
('yxy@utt.fr', 'password', 1, 'administrateur');

-- --------------------------------------------------------

--
-- 表的结构 `disponibilite`
--

DROP TABLE IF EXISTS `disponibilite`;
CREATE TABLE IF NOT EXISTS `disponibilite` (
  `id_dispo` int(10) NOT NULL,
  `jour` varchar(30) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `heure_debut` varchar(6) NOT NULL,
  `heure_fin` varchar(6) NOT NULL,
  `email_nounou` varchar(20) NOT NULL,
  PRIMARY KEY (`id_dispo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `disponibilite`
--

INSERT INTO `disponibilite` (`id_dispo`, `jour`, `date_debut`, `date_fin`, `heure_debut`, `heure_fin`, `email_nounou`) VALUES
(4, 'travailler', '2018-05-05', '2018-07-01', '10:00', '16:00', 'sam@ch.com'),
(5, 'travailler', '2018-02-02', '2019-04-01', '09:00', '16:00', 'xingyu.ye@utt.fr'),
(6, 'tous', '2018-05-01', '2018-09-01', '08:00', '17:00', 'David@nihao.com'),
(8, 'travailler', '2018-01-01', '2018-01-01', '00:00', '00:00', 'qiaoqiao@utt.fr');

-- --------------------------------------------------------

--
-- 表的结构 `enfant`
--

DROP TABLE IF EXISTS `enfant`;
CREATE TABLE IF NOT EXISTS `enfant` (
  `Prenom` varchar(20) NOT NULL,
  `Date_Naissance` date NOT NULL,
  `Restriction` text NOT NULL,
  `parent` varchar(11) NOT NULL,
  PRIMARY KEY (`Prenom`,`parent`),
  KEY `parent` (`parent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `enfant`
--

INSERT INTO `enfant` (`Prenom`, `Date_Naissance`, `Restriction`, `parent`) VALUES
('qiaoqiao', '2018-01-01', 'nihao', 'dudu@qq.com');

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
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `nounou`
--

INSERT INTO `nounou` (`ID_N`, `Nom`, `Prenom`, `Ville`, `Email`, `Portable`, `Langue`, `Age`, `Experience`, `Presentation`, `Evaluation`, `Salaire`, `type`) VALUES
(3, 'David', 'P', 'London', 'David@nihao.com', 123444444, 'anglais', 33, 'Experience familiale : garde de frÃ¨res et soeurs, cousins.', 'hello', 3, 0, 'ponctuelle'),
(4, 'DU', 'Qiao', 'Paris', 'qiaoqiao@utt.fr', 1234567, 'Chinois', 18, 'Experience familiale : garde de frÃ¨res et soeurs, cousins.', 'hello', 2.5, 0, 'ponctuelle'),
(2, 'sam', 'smith', 'paris', 'sam@ch.com', 12345678, 'anglais,francais', 33, 'Experience familiale : garde de frÃ¨res et soeurs, cousins.', 'nihao', 3.75, 0, 'ponctuelle'),
(1, 'YE', 'Xingyu', 'Saint-germain', 'xingyu.ye@utt.fr', 767158560, 'anglais', 22, 'Experience professionnelle, 1 Ã  2 ans.', 'bonjour', 3.9375, 0, 'ponctuelle');

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
(1, 'ye', 'dalian', '695549485@qq.com', 'hi'),
(2, 'Mike', 'London', 'mike@qq.com', 'nihao\r\n'),
(3, 'DU', 'Xian', 'dudu@qq.com', 'hello');

-- --------------------------------------------------------

--
-- 表的结构 `parents_cherche`
--

DROP TABLE IF EXISTS `parents_cherche`;
CREATE TABLE IF NOT EXISTS `parents_cherche` (
  `email` varchar(20) NOT NULL,
  `type_nounou` varchar(30) NOT NULL,
  `jour` varchar(20) NOT NULL,
  `date_debut` varchar(20) NOT NULL,
  `date_fin` varchar(20) NOT NULL,
  `heure_debut` varchar(20) NOT NULL,
  `heure_fin` varchar(20) NOT NULL,
  `nb_enfant` int(11) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `parents_cherche`
--

INSERT INTO `parents_cherche` (`email`, `type_nounou`, `jour`, `date_debut`, `date_fin`, `heure_debut`, `heure_fin`, `nb_enfant`) VALUES
('du@qq.com', 'ponctuelle', '0', '2018-05-03', '2018-05-17', '00:00', '00:00', 3),
('dudu@qq.com', 'reguliere', 'travailler', '2018-06-08', '2018-06-13', '11:01', '13:00 ', 1),
('mike@qq.com', '', 'travailler', '', '', '', '', 1),
('yexingyu@utt.fr', 'ponctuelle', 'travailler', '2018-06-01', '2018-09-01', '10:00', '12:00', 1);

--
-- 限制导出的表
--

--
-- 限制表 `nounou`
--
ALTER TABLE `nounou`
  ADD CONSTRAINT `nounou_compte` FOREIGN KEY (`Email`) REFERENCES `compte` (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
