-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 28 mars 2021 à 13:21
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
-- Base de données : `marketplace_nelson`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `id_item` int(11) NOT NULL,
  `id_seller` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adress1` varchar(255) NOT NULL,
  `adress2` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`),
  KEY `id_admin` (`id_admin`),
  KEY `id_item` (`id_item`),
  KEY `id_seller` (`id_seller`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `id_item`, `id_seller`, `lastname`, `firstname`, `phone`, `email`, `password`, `adress1`, `adress2`, `country`, `city`, `zipcode`) VALUES
(3, 1, 1, 'lastenameadmin1', 'firstnameadmin1', '298982978197197', 'emailadmin1', 'motdepasseadmin1', 'adresse1', 'adresse1', 'country1', 'country2', 'codezpiid'),
(4, 1, 1, 'nelson2', 'ulrich2', '145415415454', 'nelson2@yahoo.com', 'passwordnelson', 'adressenelson2', 'adressenelson2', 'countrynelnelson', 'citynelson2', 'zipcodenelson2'),
(5, 1, 1, 'Alexander', 'Abbey', '0666991274', 'alexander@gmail.com', '@mdp-alex', '33 avenu galieni ', NULL, 'France', 'Paris', '75');

-- --------------------------------------------------------

--
-- Structure de la table `basket`
--

DROP TABLE IF EXISTS `basket`;
CREATE TABLE IF NOT EXISTS `basket` (
  `id_basket` int(11) NOT NULL AUTO_INCREMENT,
  `id_buyer` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  PRIMARY KEY (`id_basket`),
  KEY `id_basket` (`id_basket`),
  KEY `id_buyer` (`id_buyer`),
  KEY `id_item` (`id_item`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `basket`
--

INSERT INTO `basket` (`id_basket`, `id_buyer`, `id_item`, `quantity`) VALUES
(1, 1, 1, 200),
(2, 1, 1, 200),
(3, 1, 1, 15);

-- --------------------------------------------------------

--
-- Structure de la table `bid`
--

DROP TABLE IF EXISTS `bid`;
CREATE TABLE IF NOT EXISTS `bid` (
  `id_bid` int(11) NOT NULL AUTO_INCREMENT,
  `id_item` int(11) NOT NULL,
  `id_buyer` int(11) NOT NULL,
  `id_seller` int(11) NOT NULL,
  `end` datetime NOT NULL,
  `state` varchar(4) NOT NULL,
  `price_user` varchar(5) NOT NULL,
  PRIMARY KEY (`id_bid`),
  KEY `id_bid` (`id_bid`),
  KEY `id_item` (`id_item`),
  KEY `id_buyer` (`id_buyer`),
  KEY `id_seller` (`id_seller`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `buyer`
--

DROP TABLE IF EXISTS `buyer`;
CREATE TABLE IF NOT EXISTS `buyer` (
  `id_buyer` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adress1` varchar(100) NOT NULL,
  `adress2` varchar(100) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` varchar(15) NOT NULL,
  `country` varchar(20) NOT NULL,
  PRIMARY KEY (`id_buyer`),
  KEY `id_buyer` (`id_buyer`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `buyer`
--

INSERT INTO `buyer` (`id_buyer`, `lastname`, `firstname`, `phone`, `email`, `password`, `adress1`, `adress2`, `city`, `zip_code`, `country`) VALUES
(1, 'Lauril', 'William', '9989819797', 'laulau@yahoo.com', '@mdp-lauril', '14 rue de seine', '', 'Corbeil-essonnes', 'dojdo', 'France'),
(2, 'Larielle', 'Raza', '6198971979', 'larielle2@yahoo.com', '@mdp-larielle', '10 rue de l\'orme à martin', '2 ième étage apt 24', 'Evry', '92160', ''),
(3, 'Marie', 'Eva', '1982989898', 'marieva@yahoo.com', '@mdp-marieeva', '2 avenue des espadrille ', '', 'Monaco', '98000', 'Monaco'),
(4, 'Alex', 'Matay', '8197979797', 'alexab@yahoo.com', '@mdp-matay', '13 boulevard d\'oxford', '', 'Cannes', '06400', 'France'),
(5, 'Audrey', 'Simon', '1982989898', 'audsimon32@yahoo.com', '@mdp-audreysimon', '33 rue des freine ', '', 'adressebuyer4', '', ''),
(6, 'Eric', 'Louis', '8197979797', 'ericlouis@yahoo.com', '@mdp-ericlouis', 'adressebuyer4', 'adressebuyer4', 'adressebuyer4', '', ''),
(7, 'Emilie', 'Raza', '0695631800', 'razafiemilie13@hotmail.fr', 'mdp-emilie91', '33 avenue galieni', '', 'Antony', '92160', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_seller` int(11) NOT NULL,
  `price` varchar(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `quantity` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `is _bidding` tinyint(4) NOT NULL DEFAULT '0',
  `is_negotiated` tinyint(4) NOT NULL DEFAULT '0',
  `is_buying` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_item`),
  KEY `id_item` (`id_item`),
  KEY `id_seller` (`id_seller`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id_item`, `id_seller`, `price`, `name`, `quantity`, `description`, `photo`, `is _bidding`, `is_negotiated`, `is_buying`) VALUES
(1, 1, '500', 'name1', 'status1', 'descriptiontest', '918981981987917', 15, 41, 14),
(2, 4, '20', 'T-shirt blue unisex', '200', 'Le t-shirt  avec juste ce qu’il faut d’élasticité. Il est confortable et la coupe unisexe est flatteuse pour les femmes. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n• 100 % coton peigné et filé à l’anneau\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule', '', 0, 1, 1),
(3, 5, '99,99', 'T-shirt Rouge unisex', '200', 'Le t-shirt personnalisable. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n\r\n• 100 % coton peigné et filé à l’anneau\r\n• La couleur gris cendré (Ash) contient 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Les couleurs chinées contiennent 52 % de coton peigné et filé à l’anneau et 48 % de polyester\r\n• Les couleurs gris (Athletic) et noir (Black Heather) contiennent 90 % de coton peigné et filé en anneau et 10 % polyester\r\n• Les couleurs Heather Prism contiennent 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule\r\n• Couture latérale', '', 1, 0, 1),
(4, 4, '29,99', 'Pull Vert unisexe', '15', 'Pull vert unisexe. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n\r\n• 100 % coton peigné et filé à l’anneau\r\n• La couleur gris cendré (Ash) contient 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Les couleurs chinées contiennent 52 % de coton peigné et filé à l’anneau et 48 % de polyester\r\n• Les couleurs gris (Athletic) et noir (Black Heather) contiennent 90 % de coton peigné et filé en anneau et 10 % polyester\r\n• Les couleurs Heather Prism contiennent 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule\r\n• Couture latérale', '', 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `offer`
--

DROP TABLE IF EXISTS `offer`;
CREATE TABLE IF NOT EXISTS `offer` (
  `id_offer` int(11) NOT NULL AUTO_INCREMENT,
  `id_item` int(11) NOT NULL,
  `id_buyer` int(11) NOT NULL,
  `price_offered` varchar(5) NOT NULL,
  `nb_nego` int(10) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id_offer`),
  KEY `id_offer` (`id_offer`),
  KEY `id_item` (`id_item`),
  KEY `id_buyer` (`id_buyer`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `offer`
--

INSERT INTO `offer` (`id_offer`, `id_item`, `id_buyer`, `price_offered`, `nb_nego`, `status`) VALUES
(3, 1, 5, '15445', 4, 'vendu'),
(4, 1, 3, '15445', 454, 'ckspcspojosjosj'),
(5, 1, 6, '844', 10, 'coucoulesamis'),
(6, 1, 1, '54', 45, 'unautretest'),
(7, 1, 3, '15445', 454, 'ckspcspojosjosj'),
(8, 1, 6, '844', 10, 'coucoulesamis'),
(9, 1, 1, '54', 45, 'unautretest');

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id_payment` int(11) NOT NULL AUTO_INCREMENT,
  `id_buyer` int(11) NOT NULL,
  `card` varchar(255) NOT NULL,
  `code` int(255) NOT NULL,
  `num_card` varchar(255) NOT NULL,
  `expiration` date NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id_payment`),
  KEY `id_payment` (`id_payment`),
  KEY `id_buyer` (`id_buyer`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `payment`
--

INSERT INTO `payment` (`id_payment`, `id_buyer`, `card`, `code`, `num_card`, `expiration`, `name`) VALUES
(6, 1, '1544-5454-4545-4646', 800, '545454546465464654', '2021-03-30', 'mandela');

-- --------------------------------------------------------

--
-- Structure de la table `seller`
--

DROP TABLE IF EXISTS `seller`;
CREATE TABLE IF NOT EXISTS `seller` (
  `id_seller` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(30) NOT NULL,
  `profil_picture` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_seller`),
  KEY `id_seller` (`id_seller`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `seller`
--

INSERT INTO `seller` (`id_seller`, `brand`, `profil_picture`, `background`, `phone`, `email`, `password`) VALUES
(1, 'branduser1', 'mon image nelson', 'background image', '64979454164', 'emailnelson@yahoo.com', 'passwordnelsoncode'),
(2, 'unTest', 'profiltest', 'un autretest', '15151154', 'emailtest@yahoo.com', 'monmotdepasse'),
(3, 'unTesteencore', 'unTesteencore', 'unTesteencoreparconséquent', '51197197197', 'unTesteencore@yahoo.com', 'motdepassetest'),
(4, 'Yvi ', '', 'blue ', '0695631800', 'yvibrand@gmail.com', 'mdp@yviyvi'),
(5, 'matayluxury', '', 'gold', '0123456789', 'matayluxury@luxury.com', '@matayluxury0987');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_seller`) REFERENCES `seller` (`id_seller`),
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`id_item`) REFERENCES `item` (`id_item`);

--
-- Contraintes pour la table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_2` FOREIGN KEY (`id_item`) REFERENCES `item` (`id_item`);

--
-- Contraintes pour la table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`id_seller`) REFERENCES `seller` (`id_seller`),
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`id_item`) REFERENCES `item` (`id_item`),
  ADD CONSTRAINT `bid_ibfk_3` FOREIGN KEY (`id_buyer`) REFERENCES `buyer` (`id_buyer`);

--
-- Contraintes pour la table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`id_seller`) REFERENCES `seller` (`id_seller`);

--
-- Contraintes pour la table `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `item` (`id_item`),
  ADD CONSTRAINT `offer_ibfk_2` FOREIGN KEY (`id_buyer`) REFERENCES `buyer` (`id_buyer`);

--
-- Contraintes pour la table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_buyer`) REFERENCES `buyer` (`id_buyer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
