-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 26 mars 2021 à 22:25
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `market`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adress1` varchar(255) NOT NULL,
  `adress2` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  UNIQUE KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `basket`
--

DROP TABLE IF EXISTS `basket`;
CREATE TABLE IF NOT EXISTS `basket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(255) NOT NULL,
  `id_buyer` int(10) NOT NULL,
  `id_items` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_buyer` (`id_buyer`),
  UNIQUE KEY `id_items` (`id_items`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `bid`
--

DROP TABLE IF EXISTS `bid`;
CREATE TABLE IF NOT EXISTS `bid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iditem` int(11) NOT NULL,
  `end` datetime NOT NULL,
  `state` varchar(4) NOT NULL,
  `winner` varchar(255) NOT NULL,
  `price_winner` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_item` (`iditem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `buyer`
--

DROP TABLE IF EXISTS `buyer`;
CREATE TABLE IF NOT EXISTS `buyer` (
  `name` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adress1` varchar(100) NOT NULL,
  `adress2` varchar(100) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` varchar(5) NOT NULL,
  `country` varchar(20) NOT NULL,
  `id_b` int(11) NOT NULL,
  UNIQUE KEY `id_b` (`id_b`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `price` varchar(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` varchar(25) NOT NULL,
  `description` varchar(300) NOT NULL,
  `id_seller` int(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `is _bidding` tinyint(1) NOT NULL DEFAULT '0',
  `is_negotiated` tinyint(1) NOT NULL DEFAULT '0',
  `is_buying` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_seller` (`id_seller`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `offer`
--

DROP TABLE IF EXISTS `offer`;
CREATE TABLE IF NOT EXISTS `offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_Item` int(11) NOT NULL,
  `id_buyer` int(11) NOT NULL,
  `price_offered` varchar(5) NOT NULL,
  `nb_nego` int(10) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id_seller` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_item` (`id_Item`),
  UNIQUE KEY `id_buyer` (`id_buyer`),
  KEY `offer_ibfk_3` (`id_seller`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `card` varchar(255) NOT NULL,
  `code` int(255) NOT NULL,
  `num_card` varchar(255) NOT NULL,
  `expiration` date NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `seller`
--

DROP TABLE IF EXISTS `seller`;
CREATE TABLE IF NOT EXISTS `seller` (
  `id_seller` int(30) NOT NULL AUTO_INCREMENT,
  `brand` varchar(30) NOT NULL,
  `profil_picture` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_seller`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_2` FOREIGN KEY (`id_items`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `basket_ibfk_3` FOREIGN KEY (`id_buyer`) REFERENCES `buyer` (`id_b`);

--
-- Contraintes pour la table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`iditem`) REFERENCES `item` (`id`);

--
-- Contraintes pour la table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`id_seller`) REFERENCES `seller` (`id_seller`);

--
-- Contraintes pour la table `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`id_Item`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `offer_ibfk_2` FOREIGN KEY (`id_buyer`) REFERENCES `buyer` (`id_b`),
  ADD CONSTRAINT `offer_ibfk_3` FOREIGN KEY (`id_seller`) REFERENCES `seller` (`id_seller`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
