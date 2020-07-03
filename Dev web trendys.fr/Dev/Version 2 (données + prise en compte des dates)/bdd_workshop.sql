-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 19 juin 2020 à 13:59
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
-- Base de données :  `bdd_workshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id_account` int(11) NOT NULL AUTO_INCREMENT,
  `account_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_account`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `influencer`
--

DROP TABLE IF EXISTS `influencer`;
CREATE TABLE IF NOT EXISTS `influencer` (
  `id_influencer` int(11) NOT NULL AUTO_INCREMENT,
  `influencer_subscribers` int(11) NOT NULL,
  `influencer_publication` int(11) NOT NULL,
  `influencer_stories` int(11) NOT NULL,
  `influencer_promotion` int(11) NOT NULL,
  `influencer_cover` int(11) NOT NULL,
  `influencer_impression` int(11) NOT NULL,
  `influencer_interaction` int(11) NOT NULL,
  `influencer_like` int(11) NOT NULL,
  `influencer_comment` int(11) NOT NULL,
  `influencer_reach` float NOT NULL,
  `influencer_profilvisit` int(11) NOT NULL,
  `influencer_moy_age` varchar(5) NOT NULL,
  `influencer_sexe` varchar(50) NOT NULL,
  `influencer_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_account` int(11) NOT NULL,
  PRIMARY KEY (`id_influencer`),
  KEY `influencer_account_FK` (`id_account`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `influencer`
--
ALTER TABLE `influencer`
  ADD CONSTRAINT `influencer_account_FK` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
