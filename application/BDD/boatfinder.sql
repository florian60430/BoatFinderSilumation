-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 23 oct. 2020 à 13:55
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `boatfinder`
--

-- --------------------------------------------------------

--
-- Structure de la table `coordonne`
--

DROP TABLE IF EXISTS `coordonne`;
CREATE TABLE IF NOT EXISTS `coordonne` (
  `id_co` int(20) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `heure` time NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  PRIMARY KEY (`id_co`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coordonne`
--

INSERT INTO `coordonne` (`id_co`, `id_user`, `heure`, `latitude`, `longitude`) VALUES
(93, 37, '11:15:00', 48.852969, 2.3499037867786767);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `email`, `telephone`, `mdp`) VALUES
(39, 'bonjour', 'Jean-pierre', 'floflobg1999@hotmail.fr', '0750445990', 'a'),
(38, 'wantelez', 'Richard', 'floflobg1999@hotmail.fr', '0750445990', '2727'),
(37, 'wantelez', 'florian', 'floflobg1999@hotmail.fr', '0750445990', 'az'),
(36, 'wantelez', 'florian', 'floflobg1999@hotmail.fr', '0750445990', 'cc'),
(35, 'wantelez', 'florian', 'floflobg1999@hotmail.fr', '0750445990', 'bonjour'),
(34, 'wantelez', 'florian', 'floflobg1999@hotmail.fr', '0750445990', 'lol'),
(33, 'wantelez', 'florian', 'floflobg1999@hotmail.fr', '0750445990', 'zezzeez'),
(32, 'wantelez', 'florian', 'floflobg1999@hotmail.fr', '0750445990', 'zezzeez'),
(31, 'wantelez', 'florian', 'floflobg1999@hotmail.fr', '0750445990', 'zezzeez'),
(30, 'wantelez', 'florian', 'floflobg1999@hotmail.fr', '0750445990', 'zezzeez');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
