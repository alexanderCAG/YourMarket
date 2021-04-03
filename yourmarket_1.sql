-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 03 avr. 2021 à 20:10
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
-- Base de données : `yourmarket`
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
  `id_seller` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(15) NOT NULL,
  `quantity` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  PRIMARY KEY (`id_basket`),
  KEY `id_basket` (`id_basket`),
  KEY `id_buyer` (`id_buyer`),
  KEY `id_item` (`id_item`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `basket`
--

INSERT INTO `basket` (`id_basket`, `id_buyer`, `id_item`, `id_seller`, `name`, `price`, `quantity`, `description`, `photo`, `category`, `subcategory`) VALUES
(15, 2, 12, 5, 'Cadre mural rouge', '50', '1', 'descriptiontest', '../../Image/4.png', 'House', 'decoration'),
(22, 1, 4, 4, 'Sweat Vert unisexe', '29,99', '2', 'Sweat-shirt vert unisexe. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n\r\n• 100 % coton peigné et filé à l’anneau\r\n• La couleur gris cendré (Ash) contient 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Les couleurs chinées contiennent 52 % de coton peigné et filé à l’anneau et 48 % de polyester\r\n• Les couleurs gris (Athletic) et noir (Black Heather) contiennent 90 % de coton peigné et filé en anneau et 10 % polyester\r\n• Les couleurs Heather Prism contiennent 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule\r\n• Couture latérale', '../../Image/4.png', 'Clothes', 'sweat_shirt'),
(25, 1, 9, 5, 'Drap marron', '30', '1', 'drap drap drap', '../../Image/10.png', 'House', 'sheet'),
(26, 1, 13, 5, 'Basket basse bleu', '200,99', '1', 'Basket ersonnalisable. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n\r\n• 100 % coton peigné et filé à l’anneau\r\n• La couleur gris cendré (Ash) contient 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Les couleurs chinées contiennent 52 % de coton peigné et filé à l’anneau et 48 % de polyester\r\n• Les couleurs gris (Athletic) et noir (Black Heather) contiennent 90 % de coton peigné et filé en anneau et 10 % polyester\r\n• Les couleurs Heather Prism contiennent 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule\r\n• Couture latérale', '../../Image/casquette.png', 'Clothes', 'shoes'),
(28, 1, 3, 5, 'T-shirt Rouge unisex', '99,99', '1', 'Le t-shirt pers shirt  avec juste ce qu’il faut d’élasticité. Il est conforta shirt  avec juste ce qu’il faut d’élasticité. Il est conforta shirt  avec juste ce qu’il faut d’élasticité. Il est conforta', '../../Image/5.png', 'Clothes', 'tshirt');

-- --------------------------------------------------------

--
-- Structure de la table `bid`
--

DROP TABLE IF EXISTS `bid`;
CREATE TABLE IF NOT EXISTS `bid` (
  `id_bid` int(11) NOT NULL AUTO_INCREMENT,
  `id_item` int(11) NOT NULL,
  `id_buyer` int(11) DEFAULT NULL,
  `id_seller` int(11) NOT NULL,
  `end_enchere` datetime NOT NULL,
  `state` varchar(4) NOT NULL,
  `price_user` varchar(5) NOT NULL,
  PRIMARY KEY (`id_bid`),
  KEY `id_bid` (`id_bid`),
  KEY `id_item` (`id_item`),
  KEY `id_buyer` (`id_buyer`),
  KEY `id_seller` (`id_seller`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bid`
--

INSERT INTO `bid` (`id_bid`, `id_item`, `id_buyer`, `id_seller`, `end_enchere`, `state`, `price_user`) VALUES
(1, 3, 1, 5, '2021-04-02 00:48:35', '', ''),
(2, 4, 2, 4, '2021-04-18 00:48:35', '', ''),
(3, 7, 1, 2, '2021-04-30 00:48:35', '', ''),
(4, 9, NULL, 5, '2021-07-02 00:48:35', '', ''),
(5, 10, NULL, 5, '2021-04-27 00:48:35', '', ''),
(6, 61, NULL, 4, '2021-04-06 00:48:35', '', '');

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
  `passworde` varchar(255) NOT NULL,
  `adress1` varchar(100) NOT NULL,
  `adress2` varchar(100) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` varchar(15) NOT NULL,
  `country` varchar(20) NOT NULL,
  PRIMARY KEY (`id_buyer`),
  KEY `id_buyer` (`id_buyer`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `buyer`
--

INSERT INTO `buyer` (`id_buyer`, `lastname`, `firstname`, `phone`, `email`, `passworde`, `adress1`, `adress2`, `city`, `zip_code`, `country`) VALUES
(1, 'Lauril', 'William', '9989819797', 'laulau@yahoo.com', '@mdp-lauril', '14 rue de seine', '', 'Corbeil-essonnes', 'dojdo', 'France'),
(2, 'Larielle', 'Raza', '6198971979', 'larielle2@yahoo.com', '@mdp-larielle', '10 rue de l\'orme à martin', '2 ième étage apt 24', 'Evry', '92160', ''),
(3, 'Marie', 'Eva', '1982989898', 'marieva@yahoo.com', '@mdp-marieeva', '2 avenue des espadrille ', '', 'Monaco', '98000', 'Monaco'),
(4, 'Alex', 'Matay', '8197979797', 'alexab@yahoo.com', '@mdp-matay', '13 boulevard d\'oxford', '', 'Cannes', '06400', 'France'),
(5, 'Audrey', 'Simon', '1982989898', 'audsimon32@yahoo.com', '@mdp-audreysimon', '33 rue des freine ', '', 'adressebuyer4', '', ''),
(6, 'Eric', 'Louis', '8197979797', 'ericlouis@yahoo.com', '@mdp-ericlouis', 'adressebuyer4', 'adressebuyer4', 'adressebuyer4', '', ''),
(7, 'Emilie', 'Raza', '0695631800', 'razafiemilie13@hotmail.fr', 'mdp-emilie91', '33 avenue galieni', '', 'Antony', '92160', 'France'),
(8, 'TestAlex', 'test', '5050', 'test@test.com', 'aA1', 'test', 'test', 'test', '5050', 'test'),
(22, 'alexIdTest', 'test', '456', 'testid@test.fr', 'aA5', 'test', 'test', 'test', '5045', 'test'),
(23, 'YviTest', 'fbezui', '04954', 'tfez@feaz.fr', 'aA1', 'fez', 'fez', 'ezff', '564', 'feaz');

-- --------------------------------------------------------

--
-- Structure de la table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE IF NOT EXISTS `history` (
  `id_history` int(11) NOT NULL AUTO_INCREMENT,
  `id_buyer` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `id_seller` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(15) NOT NULL,
  `quantity` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  PRIMARY KEY (`id_history`),
  KEY `id_history` (`id_history`),
  KEY `id_buyer` (`id_buyer`),
  KEY `id_item` (`id_item`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

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
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `quantity` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `is_bidding` tinyint(4) NOT NULL DEFAULT '0',
  `is_negotiated` tinyint(4) NOT NULL DEFAULT '0',
  `is_buying` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_item`),
  KEY `id_item` (`id_item`),
  KEY `id_seller` (`id_seller`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id_item`, `id_seller`, `price`, `name`, `category`, `subcategory`, `quantity`, `description`, `photo`, `is_bidding`, `is_negotiated`, `is_buying`) VALUES
(1, 1, '15', 'Drap desert', 'House', 'pillow', '1', 'descriptiontest dfzfpnfpiqsnbi fpoefnznoifdzia descriptiontest dfzfpnfpiqsnbi fpoefnznoifdzia descriptiontest dfzfpnfpiqsnbi fpoefnznoifdzia descriptiontest dfzfpnfpiqsnbi fpoefnznoifdzia descriptiontest dfzfpnfpiqsnbi fpoefnznoifdzia descriptiontest dfzfpnfpiqsnbi fpoefnznoifdzia descriptiontest dfzfpnfpiqsnbi fpoefnznoifdzia descriptiontest dfzfpnfpiqsnbi fpoefnznoifdzia descriptiontest dfzfpnfpiqsnbi fpoefnznoifdzia descriptiontest dfzfpnfpiqsnbi fpoefnznoifdzia descriptiontest dfzfpnfpiqsnbi fpoefnznoifdzia descriptiontest dfzfpnfpiqsnbi fpoefnznoifdzia z descriptiontest dfzfpnfpiqsnbi fpoefnznoifdzia ', '../../Image/9.png', 0, 1, 1),
(2, 4, '20', 'T-shirt blue unisex', 'Clothes', 'tshirt', '200', 'Le t-shirt  avec juste ce qu’il faut d’élasticité. Il est confortable et la coupe unisexe est flatteuse pour les femmes. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n• 100 % coton peigné et filé à l’anneau\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule', '../../Image/7.png', 0, 1, 1),
(3, 5, '99,99', 'T-shirt Rouge unisex', 'Clothes', 'tshirt', '200', 'Le t-shirt pers shirt  avec juste ce qu’il faut d’élasticité. Il est conforta shirt  avec juste ce qu’il faut d’élasticité. Il est conforta shirt  avec juste ce qu’il faut d’élasticité. Il est conforta', '../../Image/5.png', 1, 0, 1),
(4, 4, '29,99', 'Sweat Vert unisexe', 'Clothes', 'sweat_shirt', '15', 'Sweat-shirt vert unisexe. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n\r\n• 100 % coton peigné et filé à l’anneau\r\n• La couleur gris cendré (Ash) contient 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Les couleurs chinées contiennent 52 % de coton peigné et filé à l’anneau et 48 % de polyester\r\n• Les couleurs gris (Athletic) et noir (Black Heather) contiennent 90 % de coton peigné et filé en anneau et 10 % polyester\r\n• Les couleurs Heather Prism contiennent 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule\r\n• Couture latérale', '../../Image/4.png', 1, 0, 1),
(5, 5, '59,99', 'Sweat Bleu unisex', 'Clothes', 'sweat_shirt', '0', 'Sweat-shirtpersonnalisable. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n\r\n• 100 % coton peigné et filé à l’anneau\r\n• La couleur gris cendré (Ash) contient 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Les couleurs chinées contiennent 52 % de coton peigné et filé à l’anneau et 48 % de polyester\r\n• Les couleurs gris (Athletic) et noir (Black Heather) contiennent 90 % de coton peigné et filé en anneau et 10 % polyester\r\n• Les couleurs Heather Prism contiennent 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule\r\n• Couture latérale', '../../Image/3.png', 0, 1, 1),
(6, 5, '59,99', 'Tshirt Bleu unisex 2', 'Clothes', 'tshirt', '0', 'Le t-shirt personnalisable. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n\r\n• 100 % coton peigné et filé à l’anneau\r\n• La couleur gris cendré (Ash) contient 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Les couleurs chinées contiennent 52 % de coton peigné et filé à l’anneau et 48 % de polyester\r\n• Les couleurs gris (Athletic) et noir (Black Heather) contiennent 90 % de coton peigné et filé en anneau et 10 % polyester\r\n• Les couleurs Heather Prism contiennent 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule\r\n• Couture latérale', '../../Image/2.png', 0, 1, 1),
(7, 2, '35', 'Oreiller dodo', 'House', 'pillow', '95', 'L\'oreiller ferme synthétique DODO. Garnissage 100% polyester fibre creuse siliconée qui favorise la circulation de l\'air et réduit l\'accumulation de l\'humidité. Excellent rapport qualité/prix !\r\nGarnissage : \r\n •  100% polyester fibre creuse siliconée, aérée\r\n\r\nEnveloppe : \r\n •  Microfibre \r\n\r\nEntretien : \r\n •  Oreiller lavable à 60°\r\n\r\nLivré sous housse. \r\n\r\nOreillers vendus à l\'unité ou par lot de 2.\r\nCouleurs Blanc\r\nTailles 2x60x60 cm, 2x65x65 cm, 2x50x70 cm, 40x60 cm, 50x70 cm, 60x60 cm, 65x65 cm', '../../Image/1.png', 1, 0, 1),
(8, 5, '35', 'Oreiller Croco', 'House', 'pillow', '05', 'L\'oreiller ferme synthétique DODO. Garnissage 100% polyester fibre creuse siliconée qui favorise la circulation de l\'air et réduit l\'accumulation de l\'humidité. Excellent rapport qualité/prix !\r\nGarnissage : \r\n •  100% polyester fibre creuse siliconée, aérée\r\n\r\nEnveloppe : \r\n •  Microfibre \r\n\r\nEntretien : \r\n •  Oreiller lavable à 60°\r\n\r\nLivré sous housse. \r\n\r\nOreillers vendus à l\'unité ou par lot de 2.\r\nCouleurs Blanc\r\nTailles 2x60x60 cm, 2x65x65 cm, 2x50x70 cm, 40x60 cm, 50x70 cm, 60x60 cm, 65x65 cm', '../../Image/Bop.png', 0, 1, 1),
(9, 5, '30', 'Drap marron', 'House', 'sheet', '52', 'drap drap drap', '../../Image/10.png', 1, 0, 1),
(10, 5, '15', 'Coussin bleu ocean', 'House', 'pillow', '35', 'descriptiontest', '../../Image/oreiller.png', 1, 0, 0),
(11, 5, '50', 'Cadre mural bleu', 'House', 'decoration', '0', 'descriptiontest', '../../Image/chaussure.png', 0, 1, 1),
(12, 5, '50', 'Cadre mural rouge', 'House', 'decoration', '30', 'descriptiontest', '../../Image/matay2.png', 0, 1, 1),
(13, 5, '200,99', 'Basket basse bleu', 'Clothes', 'shoes', '134', 'Basket ersonnalisable. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n\r\n• 100 % coton peigné et filé à l’anneau\r\n• La couleur gris cendré (Ash) contient 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Les couleurs chinées contiennent 52 % de coton peigné et filé à l’anneau et 48 % de polyester\r\n• Les couleurs gris (Athletic) et noir (Black Heather) contiennent 90 % de coton peigné et filé en anneau et 10 % polyester\r\n• Les couleurs Heather Prism contiennent 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule\r\n• Couture latérale', '../../Image/casquette.png', 0, 1, 1),
(58, 2, '50', 'TestProduit', 'House', 'sheet', '75', 'fezgfezffrza', '../../Image/Orme.png', 0, 0, 1),
(59, 5, '50', 'Matay Vie', 'House', 'decoration', '450', 'fezfezgzggdgd', '../../Image/Cedre.png', 0, 1, 1),
(61, 4, '84', 'Admin Itemf', 'Clothes', 'shoes', '60', 'fezefezfeezfezf', '../../Image/12.png', 1, 0, 0),
(62, 1, '48', 'Item 1', 'House', 'pillow', '4', 'fege tezgeze ezgerheg', '../../Image/11.png', 0, 1, 1),
(63, 1, '55', 'Item 2', 'House', 'pillow', '80', 'fege ', '../../Image/Azobe.png', 0, 1, 0),
(64, 4, '84', 'temfff', 'Clothes', 'shoes', '60', 'fezefezfeezfezf fdazf', '../../Image/Aulne.png', 0, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

DROP TABLE IF EXISTS `messagerie`;
CREATE TABLE IF NOT EXISTS `messagerie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`id`, `message`, `user`) VALUES
(43, '', ''),
(42, '', ''),
(40, '', ''),
(41, '', ''),
(39, '', ''),
(35, 'Ok', 'valider'),
(34, 'Ok', 'valider'),
(33, 'Ok', 'valider'),
(32, 'Ok', 'valider'),
(29, 'Ok', 'valider'),
(37, '', ''),
(38, '', ''),
(28, 'Ok', 'valider'),
(27, 'Ok', 'valider'),
(95, '', ''),
(26, 'Ok', 'valider'),
(44, '', ''),
(45, '', ''),
(46, '', ''),
(47, '', ''),
(48, '', ''),
(49, '', ''),
(50, '', ''),
(51, '', ''),
(52, '', ''),
(53, '', ''),
(54, '', ''),
(55, '', ''),
(56, '', ''),
(57, '', ''),
(58, '', ''),
(59, '', ''),
(60, '', ''),
(61, '', ''),
(62, '', ''),
(63, '', ''),
(64, '', ''),
(65, '', ''),
(66, '', ''),
(67, '', ''),
(68, '', ''),
(69, '', ''),
(70, '', ''),
(71, '', ''),
(72, '', ''),
(73, '', ''),
(74, '', ''),
(75, '', ''),
(76, '', ''),
(77, '', ''),
(78, '', ''),
(79, '', ''),
(80, '', ''),
(81, '', ''),
(82, '', ''),
(83, '', ''),
(84, '', ''),
(85, '', ''),
(86, '', ''),
(87, '', ''),
(88, '', ''),
(89, '', ''),
(90, '', ''),
(91, '', ''),
(92, '', ''),
(93, '', ''),
(94, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `offer`
--

DROP TABLE IF EXISTS `offer`;
CREATE TABLE IF NOT EXISTS `offer` (
  `id_offer` int(11) NOT NULL AUTO_INCREMENT,
  `id_item` int(11) NOT NULL,
  `id_seller` int(11) NOT NULL,
  `id_buyer` int(11) NOT NULL,
  `price_offered` varchar(5) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `nb_nego` int(10) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id_offer`),
  KEY `id_offer` (`id_offer`),
  KEY `id_item` (`id_item`),
  KEY `id_buyer` (`id_buyer`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `offer`
--

INSERT INTO `offer` (`id_offer`, `id_item`, `id_seller`, `id_buyer`, `price_offered`, `quantity`, `nb_nego`, `status`) VALUES
(10, 8, 5, 1, '55', '8', 2, 'en cours'),
(11, 64, 4, 1, '900', '2', 2, 'en cours'),
(14, 12, 5, 7, '55', '2', 1, 'en cours');

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id_payment` int(11) NOT NULL AUTO_INCREMENT,
  `id_buyer` int(11) NOT NULL,
  `carde` varchar(255) NOT NULL,
  `code` int(255) NOT NULL,
  `num_card` varchar(255) NOT NULL,
  `expiration` date NOT NULL,
  `nom` varchar(20) NOT NULL,
  PRIMARY KEY (`id_payment`),
  KEY `id_payment` (`id_payment`),
  KEY `id_buyer` (`id_buyer`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `payment`
--

INSERT INTO `payment` (`id_payment`, `id_buyer`, `carde`, `code`, `num_card`, `expiration`, `nom`) VALUES
(6, 1, 'carte_payement_mastercard', 800, '545454546465464654', '2021-03-30', 'mandela'),
(7, 8, 'carte_payement_cb', 5057, '140564', '2021-03-31', 'Abbey'),
(8, 1, 'carte_payement_visa', 7894, '159849', '2021-03-30', 'AbbeyId'),
(9, 22, 'carte_payement_visa', 7894, '159849', '2021-03-30', 'AbbeyId'),
(10, 23, 'carte_payement_mastercard', 8494, '1655161', '2021-04-11', 'Raza');

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
  `passworde` varchar(255) NOT NULL,
  PRIMARY KEY (`id_seller`),
  KEY `id_seller` (`id_seller`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `seller`
--

INSERT INTO `seller` (`id_seller`, `brand`, `profil_picture`, `background`, `phone`, `email`, `passworde`) VALUES
(1, 'branduser1', '../../Image/4.png', 'background image', '64979454164', 'emailnelson@yahoo.com', 'passwordnelsoncode'),
(2, 'unTest', '../../Image/3.png', 'un autretest', '15151154', 'emailtest@yahoo.com', 'monmotdepasse'),
(3, 'unTesteencore', '../../Image/2.png', 'unTesteencoreparconséquent', '51197197197', 'unTesteencore@yahoo.com', 'motdepassetest'),
(4, 'Yvi ', '../../Image/1.png', 'blue ', '0695631800', 'yvibrand@gmail.com', 'mdp@yviyvi'),
(5, 'matayluxury', '../../Image/matay2.png', 'gold', '0123456789', 'matayluxury@luxury.com', '@matayluxury0987'),
(6, 'SellerAjout', '../../Image/Wenge.png', 'white', '156456', 'fzefez@ezfez.de', 'Test1');

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
-- Contraintes pour la table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`id_item`) REFERENCES `item` (`id_item`);

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
