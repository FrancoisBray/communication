-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Dim 23 Mars 2014 à 16:20
-- Version du serveur: 5.6.11-log
-- Version de PHP: 5.4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `utilisateur`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `idMessage` int(3) NOT NULL AUTO_INCREMENT,
  `message` varchar(8000) NOT NULL,
  `heurDateCreation` varchar(25) DEFAULT NULL,
  `pseudo` varchar(30) NOT NULL,
  PRIMARY KEY (`idMessage`),
  KEY `pseudo` (`pseudo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=153 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`idMessage`, `message`, `heurDateCreation`, `pseudo`) VALUES
(137, 'Oui bien sur, vers 14H30 Ã§a vous va ? Vous avez des difficultÃ©s sur le projet ?\n', '16-03-2014', 'JoseLuisAltamirano'),
(139, 'trÃ¨s bien nous verrons Ã§a demain Ã  14H30 alors.\n', '16-03-2014', 'JoseLuisAltamirano'),
(138, 'En effet nous avons un probleme du a la mise en place du service de commande\n', '16-03-2014', 'FrancoisBray'),
(135, 'Bonjours FranÃ§ois, Est-ce que vous pouvez m envoyer la documentation que vous deviez me rendre le 24 demain ?\n', '16-03-2014', 'JoseLuisAltamirano'),
(136, 'Bonjours, monsieur elle est toujours en creation mais elle sera prete pour demain comme prevue. Serait il possible de vous rencontrer pour parler du projet E-commerce?\n', '16-03-2014', 'FrancoisBray');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `pseudo` varchar(30) NOT NULL,
  `password` varchar(45) NOT NULL,
  `statut` int(1) NOT NULL,
  `heureDateConnexion` date NOT NULL,
  `topAdmin` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`pseudo`, `password`, `statut`, `heureDateConnexion`, `topAdmin`) VALUES
('FrancoisBray', '118218', 0, '0000-00-00', '1'),
('JoseLuisAltamirano', '118218', 0, '0000-00-00', ''),
('OscarLopez', '118218', 1, '0000-00-00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
