-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 05 avr. 2021 à 17:44
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
(3, 1, 1, 'Richard', 'Hazel', '0613567498', 'hazel@gmail.com', 'Mdp1', '402  Vesta Drive', '40  Coast Drive', 'France', 'Paris', '75015'),
(4, 1, 1, 'Nelson', 'Michel', '0613565643', 'nelson.michel@yahoo.com', 'Mdp2', '16 Sunny Day Drive', '18 Sunny Day Drive', 'Australia', 'Sidney', '92704'),
(5, 1, 1, 'Twin', 'Zoe', '0666995632', 'zoe.twin@admin.fr', 'Zoe1', '943 Money Avenue', '9 Richland Avenue', 'France', 'Paris', '75543');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `basket`
--

INSERT INTO `basket` (`id_basket`, `id_buyer`, `id_item`, `id_seller`, `name`, `price`, `quantity`, `description`, `photo`, `category`, `subcategory`) VALUES
(15, 2, 12, 5, 'Cadre mural rouge', '50', '1', 'descriptiontest', '../../Image/4.png', 'House', 'decoration'),
(27, 8, 4, 4, 'Sweat Vert unisexe', '29,99', '1', 'Sweat-shirt vert unisexe. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n\r\n• 100 % coton peigné et filé à l’anneau\r\n• La couleur gris cendré (Ash) contient 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Les couleurs chinées contiennent 52 % de coton peigné et filé à l’anneau et 48 % de polyester\r\n• Les couleurs gris (Athletic) et noir (Black Heather) contiennent 90 % de coton peigné et filé en anneau et 10 % polyester\r\n• Les couleurs Heather Prism contiennent 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule\r\n• Couture latérale', '../../Image/4.png', 'Clothes', 'sweat_shirt');

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
  `state` varchar(255) NOT NULL,
  `price_user` int(255) NOT NULL,
  PRIMARY KEY (`id_bid`),
  KEY `id_bid` (`id_bid`),
  KEY `id_item` (`id_item`),
  KEY `id_buyer` (`id_buyer`),
  KEY `id_seller` (`id_seller`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `bid`
--

INSERT INTO `bid` (`id_bid`, `id_item`, `id_buyer`, `id_seller`, `state`, `price_user`) VALUES
(9, 3, 1, 5, 'en cours', 15),
(11, 7, 1, 2, 'en cours', 250),
(12, 3, 3, 5, 'en cours', 22),
(13, 3, 22, 5, 'en cours', 1220);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `buyer`
--

INSERT INTO `buyer` (`id_buyer`, `lastname`, `firstname`, `phone`, `email`, `passworde`, `adress1`, `adress2`, `city`, `zip_code`, `country`) VALUES
(1, 'Lauril', 'William', '0644632498', 'laulau@yahoo.com', '@Lauril1', '943  Richland Avenue', '4195  McDonald Avenue', 'Corbeil-essonnes', '77478', 'France'),
(2, 'Larielle', 'Raza', '0644632498', 'larielle2@yahoo.com', '@Larielle1', '45  McDonald Avenue', '2523  Flint Street', 'Evry', '92160', 'France'),
(3, 'Marie', 'Eva', '0644632498', 'marieva@yahoo.com', '@Marieeva1', '2 avenue of espadrille ', '3 golden street', 'Monaco', '98000', 'Monaco'),
(4, 'Alex', 'Matay', '0644632498', 'alexab@yahoo.com', '@mdp-matay', '13 oxford boulevard\r\n', '449  Catherine Drive', 'Fargo', ' 58102', 'England'),
(5, 'Audrey', 'Simon', '0644632498', 'audsimon32@yahoo.com', '@mdp-audreysimon', '4214  Broad Street', '1684  Sunny Day Drive', 'Santa Ana', '92704', 'USA'),
(7, 'Hale', 'Carl', '0695631800', 'carl.hale@yahoo.com', 'Carl1', '4026  Vesta Drive', '760  Millbrook Road', 'Paris', '92160', 'France'),
(8, 'Richard', 'Hollie', '0644636401', 'h.rich@gmail.com', 'Hollie1', '170  Cambridge Court', '76  Millbrook Road', 'Sugar Land', ' 58102', 'France');

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
  `rate` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_history`),
  KEY `id_history` (`id_history`),
  KEY `id_buyer` (`id_buyer`),
  KEY `id_item` (`id_item`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `history`
--

INSERT INTO `history` (`id_history`, `id_buyer`, `id_item`, `id_seller`, `name`, `price`, `quantity`, `description`, `photo`, `category`, `subcategory`, `rate`) VALUES
(33, 8, 13, 5, 'Basket basse bleu', '200,99', '2', 'Basket ersonnalisable. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n\r\n• 100 % coton peigné et filé à l’anneau\r\n• La couleur gris cendré (Ash) contient 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Les couleurs chinées contiennent 52 % de coton peigné et filé à l’anneau et 48 % de polyester\r\n• Les couleurs gris (Athletic) et noir (Black Heather) contiennent 90 % de coton peigné et filé en anneau et 10 % polyester\r\n• Les couleurs Heather Prism contiennent 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule\r\n• Couture latérale', ' ../../Image/casquette.png', 'Clothes', 'shoes', NULL),
(34, 8, 12, 5, 'Cadre mural rouge', '50', '1', 'descriptiontest', ' ../../Image/matay2.png', 'House', 'decoration', NULL),
(35, 8, 13, 5, 'Basket basse bleu', '200,99', '1', 'Basket ersonnalisable. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n\r\n• 100 % coton peigné et filé à l’anneau\r\n• La couleur gris cendré (Ash) contient 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Les couleurs chinées contiennent 52 % de coton peigné et filé à l’anneau et 48 % de polyester\r\n• Les couleurs gris (Athletic) et noir (Black Heather) contiennent 90 % de coton peigné et filé en anneau et 10 % polyester\r\n• Les couleurs Heather Prism contiennent 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule\r\n• Couture latérale', ' ../../Image/casquette.png', 'Clothes', 'shoes', NULL),
(36, 8, 3, 5, 'T-shirt Rouge unisex', '99,99', '1', 'Le t-shirt pers shirt  avec juste ce qu’il faut d’élasticité. Il est conforta shirt  avec juste ce qu’il faut d’élasticité. Il est conforta shirt  avec juste ce qu’il faut d’élasticité. Il est conforta', ' ../../Image/5.png', 'Clothes', 'tshirt', NULL),
(37, 8, 58, 2, 'TestProduit', '50', '1', 'fezgfezffrza', ' ../../Image/Orme.png', 'House', 'sheet', NULL),
(38, 8, 4, 4, 'Sweat Vert unisexe', '29,99', '1', 'Sweat-shirt vert unisexe. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n\r\n• 100 % coton peigné et filé à l’anneau\r\n• La couleur gris cendré (Ash) contient 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Les couleurs chinées contiennent 52 % de coton peigné et filé à l’anneau et 48 % de polyester\r\n• Les couleurs gris (Athletic) et noir (Black Heather) contiennent 90 % de coton peigné et filé en anneau et 10 % polyester\r\n• Les couleurs Heather Prism contiennent 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule\r\n• Couture latérale', ' ../../Image/4.png', 'Clothes', 'sweat_shirt', NULL),
(39, 8, 12, 5, 'Cadre mural rouge', '50', '1', 'descriptiontest', ' ../../Image/matay2.png', 'House', 'decoration', NULL),
(40, 8, 4, 4, 'Sweat Vert unisexe', '29,99', '1', 'Sweat-shirt vert unisexe. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n\r\n• 100 % coton peigné et filé à l’anneau\r\n• La couleur gris cendré (Ash) contient 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Les couleurs chinées contiennent 52 % de coton peigné et filé à l’anneau et 48 % de polyester\r\n• Les couleurs gris (Athletic) et noir (Black Heather) contiennent 90 % de coton peigné et filé en anneau et 10 % polyester\r\n• Les couleurs Heather Prism contiennent 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule\r\n• Couture latérale', ' ../../Image/4.png', 'Clothes', 'sweat_shirt', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_seller` int(11) NOT NULL,
  `price` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sold` int(60) NOT NULL DEFAULT '0',
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `quantity` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `is_bidding` tinyint(4) NOT NULL DEFAULT '0',
  `is_negotiated` tinyint(4) NOT NULL DEFAULT '0',
  `is_buying` tinyint(4) NOT NULL DEFAULT '0',
  `end_enchere` datetime DEFAULT NULL,
  `grade` int(255) DEFAULT NULL,
  `tot_rate` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_item`),
  KEY `id_item` (`id_item`),
  KEY `id_seller` (`id_seller`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id_item`, `id_seller`, `price`, `name`, `sold`, `category`, `subcategory`, `quantity`, `description`, `photo`, `is_bidding`, `is_negotiated`, `is_buying`, `end_enchere`, `grade`, `tot_rate`) VALUES
(3, 5, '99,99', 'Pack 3 t-shirts men', 15, 'Clothes', 'tshirt', '200', 'They are the t-shirts you need. Comfy, affordable, just perfect for you!! They are so perfect there are no words to say how great they are. \r\n• 100 % coton \r\n• Weight : 142 g/m² (4,2 oz/y²)', '../../Image/Tshirt11.png', 1, 0, 1, '2021-04-05 22:25:12', 0, 0),
(4, 5, '29,99', 'Pink sweat', 0, 'Clothes', 'sweat_shirt', '15', 'Our best seller! Everyone wants it. The softest sweatshirt on planet earth. Once you try it, you will buy every color available.\r\n\r\n• 100 % cotton \r\n• Pink \r\n• Weight : 142 g/m² (4,2 oz/y²)', '../../Image/sweatShirt21.png', 1, 0, 1, '2021-04-20 21:16:06', 3, 2),
(12, 5, '50', 'Beige sheet', 30, 'House', 'sheet', '30', 'Beige Duvet cover made of washed cotton dyed thread with contrast line motifs.\r\nConcealed button fastening at the bottom\r\n', '../../Image/sheet12.png', 0, 1, 1, NULL, 0, 0),
(13, 5, '120', 'Blue sheet', 0, 'House', 'sheet', '134', 'Basket ersonnalisable. On ne saurait trop le complimenter, c’est l’un des favoris de notre public. Et il sera certainement votre prochain favori !\r\n\r\n• 100 % coton peigné et filé à l’anneau\r\n• La couleur gris cendré (Ash) contient 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Les couleurs chinées contiennent 52 % de coton peigné et filé à l’anneau et 48 % de polyester\r\n• Les couleurs gris (Athletic) et noir (Black Heather) contiennent 90 % de coton peigné et filé en anneau et 10 % polyester\r\n• Les couleurs Heather Prism contiennent 99 % de coton peigné et filé en anneau et 1 % de polyester\r\n• Poids du tissu : 142 g/m² (4,2 oz/y²)\r\n• Tissu pré-rétréci\r\n• Étiquette détachable\r\n• Bande de propreté d’épaule à épaule\r\n• Couture latérale', '../../Image/sheet3.png', 0, 1, 1, NULL, 0, 0),
(58, 5, '50', 'Leopard sheet', 0, 'House', 'sheet', '75', 'Welcome to the jungle. You watched tiger king and you dreamed to be like Carole Baskin, you found the right place. This bed sheet is made for you.\r\nLeopard print duvet cover in 200-thread-count percale.\r\nConcealed button fastening at the bottom.\r\n', '../../Image/sheet6.png', 0, 0, 1, NULL, 0, 0),
(59, 5, '50', 'Jungle', 0, 'House', 'sheet', '450', 'If you like plants and tree, you need this sheet on your bed.\r\nJungle print duvet cover in 200-thread-count percale.\r\nConcealed button fastening at the bottom\r\n', '../../Image/sheet8.png', 0, 1, 1, NULL, 0, 0),
(64, 5, '84', 'Espadrille', 45, 'Clothes', 'shoes', '60', 'Ready to go to dancing with your friends.', '../../Image/shoes7.png', 0, 1, 0, NULL, 0, 0),
(65, 1, '35', 'T-shirt jump', 0, 'Clothes', 'tshirt', '50', 'They are the tshirts you need. They are the tshirts you need. Comfy, affordable, just perfect for you. They are so perfect there are no words to say how great they are.  ', '../../Image/Tshirt1.png', 0, 0, 1, '2000-04-04 15:12:00', NULL, NULL),
(66, 1, '35', 'T-shirt logo', 0, 'Clothes', 'tshirt', '5', 'They are so perfect there are no words to say how great they are. ', '../../Image/Tshirt5.png', 1, 0, 0, '2021-04-15 21:21:00', NULL, NULL),
(67, 1, '34', 'T-shirt men', 0, 'Clothes', 'tshirt', '25', 'They are so perfect there are no words to say how great they are. ', '../../Image/Tshirt7.png', 0, 1, 0, '2000-04-04 15:12:00', NULL, NULL),
(68, 1, '59', 'Sweat Men', 0, 'Clothes', 'sweet_shirt', '50', 'Our best seller. Everyone wants it. The softest sweatshirt on planet earth.', '../../Image/sweatShirt11.png', 0, 0, 1, '2000-04-04 15:12:00', NULL, NULL),
(69, 1, '59', 'Sweat Women', 0, 'Clothes', 'sweet_shirt', '50', 'Our best seller. Everyone wants it. The softest sweatshirt on planet earth', '../../Image/sweatShirt12.png', 0, 0, 1, '2000-04-04 15:12:00', NULL, NULL),
(70, 1, '159', 'Amazing shoes', 0, 'Clothes', 'shoes', '1', 'Best shoes you will ever have', '../../Image/shoes4.png', 1, 0, 0, '2021-04-16 21:25:00', NULL, NULL),
(71, 1, '29', 'Pillow Jump', 0, 'House', 'pillow', '10', 'If you like our brand. You absolutely need this pillow. Soft and cute. You can throw it. You can sit on it. It has so many different uses.', '../../Image/pillow2.png', 0, 1, 0, '2000-04-04 15:12:00', NULL, NULL),
(72, 2, '29', 'Sweat children', 5, 'Clothes', 'sweet_shirt', '5', 'Our best seller.Everyone wants it. The softest sweatshirt on planet earth.\r\nNow available for small human too.', '../../Image/sweatShirt10.png', 0, 0, 1, '2000-04-04 15:12:00', NULL, NULL),
(73, 2, '19', 'Soft T-shirt', 0, 'Clothes', 'tshirt', '1', 'Everyone wants it. The softest shirt on planet earth.', '../../Image/Tshirt2.png', 0, 1, 0, '2000-04-04 15:12:00', NULL, NULL),
(74, 2, '100', 'dvb Sheet', 0, 'House', 'sheet', '1', 'You will never get our of your bed', '../../Image/sheet1.png', 1, 0, 0, '2021-04-24 21:49:00', NULL, NULL),
(75, 3, '29', 'Pillow Loco', 0, 'House', 'pillow', '100', 'If you like our brand. You absolutely need this pillow. Soft and cute. ', '../../Image/pillow3.png', 0, 0, 1, '2000-04-04 15:12:00', NULL, NULL),
(76, 3, '99', 'Sweat unisex', 0, 'Clothes', 'sweet_shirt', '99', 'Our best seller. Everyone wants it. The softest sweatshirt on planet earth.', '../../Image/sweatShirt6.png', 1, 0, 0, '2021-04-18 21:51:00', NULL, NULL),
(77, 3, '120', 'Pink sweat', 5, 'Clothes', 'sweet_shirt', '1', 'Our best seller. Everyone wants it. The softest sweatshirt on planet earth', '../../Image/sweatShirt8.png', 0, 1, 0, '2000-04-04 15:12:00', NULL, NULL),
(78, 3, '250', 'Art Loco', 0, 'House', 'decoration', '5', 'Best piece of art you will ever buy. All your friends will be impressed.', '../../Image/decoration1.png', 0, 0, 1, '2000-04-04 15:12:00', NULL, NULL),
(79, 3, '55', 'Comfy shoes', 0, 'Clothes', 'shoes', '10', 'You will never stop walking', '../../Image/shoes5.png', 1, 0, 0, '2021-04-25 18:58:00', NULL, NULL),
(80, 4, '45', 'Sweat Men', 20, 'Clothes', 'sweet_shirt', '10', 'Our best seller. Everyone wants it. The softest sweatshirt on planet earth. Once you try it, you will buy every color available.', '../../Image/sweatShirt1.png', 0, 0, 1, '2000-04-04 15:12:00', NULL, NULL),
(81, 4, '99', 'Sweat unisex', 0, 'Clothes', 'sweet_shirt', '1', 'Our best seller. Everyone wants it. The softest sweatshirt on planet earth. Once you try it you will buy every color available.\r\n', '../../Image/sweatShirt9.png', 0, 1, 0, '2000-04-04 15:12:00', NULL, NULL),
(82, 4, '15', 'T-shirt women', 0, 'Clothes', 'tshirt', '1', 'The softest shirt on planet earth. Once you try it  you will buy every color available.', '../../Image/Tshirt9.png', 1, 0, 0, '2021-04-18 19:06:00', NULL, NULL),
(83, 4, '29', 'Cup', 0, 'House', 'decoration', '100', 'Drink all day everyday', '../../Image/decoration2.png', 0, 0, 1, '2000-04-04 15:12:00', NULL, NULL),
(84, 4, '99', 'Shoes', 0, 'Clothes', 'shoes', '2', 'Run forest run', '../../Image/shoes1.png', 0, 1, 0, '2000-04-04 15:12:00', NULL, NULL),
(85, 4, '99', 'Collab bed', 0, 'House', 'sheet', '50', 'All your favorite brands in one place', '../../Image/sheet2.png', 1, 0, 0, '2021-04-23 22:08:00', NULL, NULL),
(86, 6, '15', 'Curtains', 0, 'House', 'decoration', '2', 'Nobody will see you', '../../Image/decoration3.png', 0, 1, 0, '2000-04-04 15:12:00', NULL, NULL),
(87, 6, '56', 'Sweat Grey', 0, 'Clothes', 'sweet_shirt', '2', 'Our best seller. Everyone wants it. The softest sweatshirt on planet earth. Once you try it you will buy every color available.\r\n', '../../Image/sweatShirt2.png', 0, 0, 1, '2000-04-04 15:12:00', NULL, NULL),
(88, 6, '29', 'Sweat yellow', 0, 'Clothes', 'sweet_shirt', '2', 'Our best seller. Everyone wants it. The softest sweatshirt on planet earth. Once you try it you will buy every color available.', '../../Image/sweatShirt3.png', 0, 1, 0, '2000-04-04 15:12:00', NULL, NULL),
(89, 6, '59', 'Sweat white', 0, 'Clothes', 'sweet_shirt', '10', 'Our best seller. Everyone wants it. The softest sweatshirt on planet earth. Once you try it you will buy every color available.', '../../Image/sweatShirt4.png', 1, 0, 0, '2021-04-18 22:13:00', NULL, NULL),
(90, 6, '35', 'Sweat red', 0, 'Clothes', 'sweet_shirt', '100', 'Our best seller. Everyone wants it. The softest sweatshirt on planet earth. Once you try it you will buy every color available.', '../../Image/sweatShirt7.png', 0, 0, 1, '2000-04-04 15:12:00', NULL, NULL),
(91, 6, '15', 'Cup', 0, 'House', 'decoration', '1', 'Always wake up happy.', '../../Image/decoration4.png', 1, 0, 0, '2021-04-22 23:18:00', NULL, NULL),
(92, 3, '29', 'T-shirt unisex', 0, 'Clothes', 'tshirt', '100', 'They are the t-shirts you need.', '../../Image/Tshirt3.png', 0, 0, 1, '2000-04-04 15:12:00', NULL, NULL),
(93, 3, '59', 'T-shirt loco', 0, 'Clothes', 'tshirt', '100', 'They are the t-shirts you need.', '../../Image/Tshirt4.png', 0, 1, 0, '2000-04-04 15:12:00', NULL, NULL),
(94, 4, '59', 'Collab', 0, 'House', 'decoration', '100', 'All your favorite brands in one product', '../../Image/decoration5.png', 0, 0, 1, '2000-04-04 15:12:00', NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `offer`
--

INSERT INTO `offer` (`id_offer`, `id_item`, `id_seller`, `id_buyer`, `price_offered`, `quantity`, `nb_nego`, `status`) VALUES
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
  `money` int(255) NOT NULL,
  PRIMARY KEY (`id_payment`),
  KEY `id_payment` (`id_payment`),
  KEY `id_buyer` (`id_buyer`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `payment`
--

INSERT INTO `payment` (`id_payment`, `id_buyer`, `carde`, `code`, `num_card`, `expiration`, `nom`, `money`) VALUES
(1, 1, 'carte_payement_mastercard', 800, '545454546465464654', '2021-03-30', 'Lauril', 50),
(2, 2, 'carte_payment_cb', 123, '1234567890111213', '2021-05-13', 'Larielle', 1000),
(3, 3, 'carte_payment_mastercard', 321, '1234567690111213', '2021-08-07', 'Marie', 1000),
(4, 4, 'carte_payment_mastercard', 456, '12345678901111516', '2021-11-05', 'Alex', 150),
(5, 5, 'carte_payment_cb', 654, '1234161790111213', '2021-04-22', 'Audrey', 2000),
(7, 7, 'carte_payment-cb', 876, '12345985401111516', '2022-01-08', 'Hale', 100),
(8, 8, 'carte_payement_cb', 5057, '12345678901111566', '2021-03-31', 'Richard', 20);

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
(1, 'Jump', '../../Image/Jump.png', 'blue', '0605847007', 'jump@yahoo.fr', '@Jump1'),
(2, 'dvb', '../../Image/dvb.png', 'blue', '0605876507', 'dvb@yahoo.com', '@Dvb1'),
(3, 'LOCO', '../../Image/2.png', 'unTesteencoreparconséquent', '0605234007', 'loco@yahoo.com', '@Loco1'),
(4, 'BOP', '../../Image/Bop.png', 'blue ', '0684547007', 'bop@gmail.com', '@Bop1 '),
(5, 'Ibis', '../../Image/matay2.png', 'gold', '0123456789', 'ibis@yahoo.fr', 'Ibis1'),
(6, 'Light', '../../Image/Light.png', 'white', '0605851007', 'light@gmail.com', '@Light1');

--
-- Contraintes pour les tables déchargées
--

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
