-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 01 déc. 2017 à 16:42
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `openfive`
--

-- --------------------------------------------------------

--
-- Structure de la table `attraction`
--

DROP TABLE IF EXISTS `attraction`;
CREATE TABLE IF NOT EXISTS `attraction` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `photo1` varchar(100) NOT NULL,
  `photo2` varchar(100) NOT NULL,
  `photo3` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `attraction`
--

INSERT INTO `attraction` (`id`, `nom`, `description`, `photo1`, `photo2`, `photo3`) VALUES
(1, 'test1', 'qdsdqdQSD', 'SDsqds', 'SQdsqdsqD', 'SQDSQdqsd');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `iduser` int(20) NOT NULL,
  `idattraction` int(20) NOT NULL,
  `fnameenfant` varchar(40) NOT NULL,
  `lnameenfant` varchar(40) NOT NULL,
  `age` int(10) NOT NULL,
  `reservdate` int(20) NOT NULL,
  `creneau` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `iduser`, `idattraction`, `fnameenfant`, `lnameenfant`, `age`, `reservdate`, `creneau`) VALUES
(1, 4, 5, 'test', 'test', 3, 4, 5),
(2, 4, 5, 'test', 'test', 3, 4, 5),
(3, 5, 5, 'issou', 'ifsdf', 4, 5, 5),
(4, 56, 5, 'ben', 'landier', 3, 56, 5),
(5, 2808, 4, 'dylan', 'segpa', 3, 2808, 4);

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

DROP TABLE IF EXISTS `salles`;
CREATE TABLE IF NOT EXISTS `salles` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `nbmax` int(20) NOT NULL,
  `photo1` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `adressepostal` varchar(40) NOT NULL,
  `codepostal` int(15) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `adressepostal`, `codepostal`, `ville`, `email`, `password`, `tel`) VALUES
(1, 'test1', 'test1', 'dsjfodsfidsj', 73710, 'dspijgfsdjf', 'test', 'test', 'sqodjsqo'),
(2, 'test', 'test', 'test', 77, 'test', 'test', 'test', 'test'),
(3, 'test', 'test', 'test', 77, 'test', 'test', 'test', 'test'),
(4, 'test', 'test', 'test', 77, 'test', 'test', 'test', 'test'),
(5, 'test', 'test', 'test', 77, 'test', 'test', 'test', 'test'),
(6, 'test', 'test', 'test', 93, 'test', 'test', 'test', 'test'),
(7, 'test', 'test', 'test', 93, 'test', 'test', 'test', 'test'),
(8, 'test', 'test', 'test', 93, 'test', 'test', 'test', 'test'),
(9, 'test', 'test', 'test', 93, 'test', 'test', 'test', 'test'),
(10, 'test', 'test', 'test', 93, 'test', 'test', 'test', 'test'),
(11, 'test', 'test', 'test', 788, 'test', 'issou', 'test', 'tes'),
(12, 'foidgfd', 'kgdjg', 'oifdjgoi', 89, 'fdlgjfd', 'fdjgfdgj', 'foidgof', 'fgdoijofdg'),
(13, 'pol', 'pol', 'pol', 56, 'pol', 'paulopez', 'oidsfsoidfu', 'pol');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
