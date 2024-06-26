-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 10 juin 2024 à 14:37
-- Version du serveur : 8.0.30
-- Version de PHP : 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `house`
--
CREATE DATABASE IF NOT EXISTS `house` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `house`;

-- --------------------------------------------------------

--
-- Structure de la table `achats`
--

CREATE TABLE `achats` (
  `id_achat` int NOT NULL,
  `id_utilisateur` int NOT NULL,
  `id_annonce` int NOT NULL,
  `etat_achat` tinyint(1) NOT NULL,
  `date_achat` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `achats`
--

INSERT INTO `achats` (`id_achat`, `id_utilisateur`, `id_annonce`, `etat_achat`, `date_achat`) VALUES
(1, 13, 20, 0, '2024-06-09 14:10:12'),
(2, 13, 16, 0, '2024-06-09 19:59:26'),
(3, 13, 20, 0, '2024-06-09 23:42:28');

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

CREATE TABLE `advert` (
  `id_advert` int NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `postal_code` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` enum('achat','location') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` float NOT NULL,
  `reservation_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `is_reserved` tinyint(1) DEFAULT '0',
  `id_advert_image` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id_advert`, `photo`, `title`, `description`, `postal_code`, `city`, `type`, `price`, `reservation_message`, `is_reserved`, `id_advert_image`) VALUES
(16, 'Appart1.jpeg', 'appartement ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur feugiat volutpat nulla, et sollicitudin neque dignissim ullamcorper. Donec sed pretium ligula. Integer volutpat viverra pretium. Vivamus tristique fringilla nunc, eu facilisis mauris interdum vitae. Nulla sit amet sem non nisi molestie ullamcorper at molestie sapien. Nulla cursus nunc mauris, vel maximus ex molestie sit amet. In eleifend mollis turpis, vitae blandit dolor feugiat ut. Maecenas nec fermentum tortor. Quisque commodo arcu sed metus cursus, et dictum augue elementum. Donec nec leo magna.', '75012', 'Paris', 'achat', 100000, '                                                                                                                                                                                                                                                                                                         ', 1, NULL),
(17, 'maisonCampagne.jpeg', 'Maison de la Campagne ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur feugiat volutpat nulla, et sollicitudin neque dignissim ullamcorper. Donec sed pretium ligula. Integer volutpat viverra pretium. Vivamus tristique fringilla nunc, eu facilisis mauris interdum vitae. Nulla sit amet sem non nisi molestie ullamcorper at molestie sapien. Nulla cursus nunc mauris, vel maximus ex molestie sit amet. In eleifend mollis turpis, vitae blandit dolor feugiat ut. Maecenas nec fermentum tortor. Quisque commodo arcu sed metus cursus, et dictum augue elementum. Donec nec leo magna.', '12333', 'FRAN', 'location', 500, NULL, 0, NULL),
(20, 'appart5.jpeg', 'Appart vainille', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur feugiat volutpat nulla, et sollicitudin neque dignissim ullamcorper. Donec sed pretium ligula. Integer volutpat viverra pretium. Vivamus tristique fringilla nunc, eu facilisis mauris interdum vitae. Nulla sit amet sem non nisi molestie ullamcorper at molestie sapien. Nulla cursus nunc mauris, vel maximus ex molestie sit amet. In eleifend mollis turpis, vitae blandit dolor feugiat ut. Maecenas nec fermentum tortor. Quisque commodo arcu sed metus cursus, et dictum augue elementum. Donec nec leo magna.', '12453', 'Castille', 'achat', 100500, NULL, 0, NULL),
(22, 'Appart1.jpeg', 'Vendre Sud-ouest ', 'Aliquam erat volutpat. Phasellus vitae odio id urna aliquam dignissim. Phasellus nec sagittis felis. Fusce sit amet cursus ante. Ut tincidunt posuere ante id maximus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce eu nisl eu justo porttitor dictum. Integer tincidunt turpis quam, eu laoreet massa dictum ac. Donec efficitur auctor orci mollis tincidunt. Aenean id maximus nisl. Nulla ac ex feugiat, faucibus nisl sit amet, pharetra metus. Pellentesque imperdiet ante ut neque tristique placerat. ', '09999', 'Rorche sur Loire ', 'achat', 500000, NULL, 0, NULL),
(23, 'appart6.jpeg', 'Hotel', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '77333', 'Camargta', 'location', 100, NULL, 0, NULL),
(24, 'appart2.jpeg', 'chambre hotel campagne', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '88000', 'Canne', 'location', 300, NULL, 0, NULL),
(25, 'appart2.jpeg', 'Chambre Nice', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '66000', 'Nice', 'location', 200, 'cristelle reserve', 1, NULL),
(26, 'appart2.jpeg', 'hambre hôtel ', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '56000', 'Nice', 'location', 300, NULL, 0, NULL),
(27, 'appart6.jpeg', 'Chambre hotel picine', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '66333', 'Canne', 'location', 400, NULL, 0, NULL),
(30, 'appart6.jpeg', 'Appart vainille', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '33333', 'FRAN', 'location', 100, NULL, 0, NULL),
(31, 'appartBalcon.jpeg', 'Appart vainille', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '65333', 'Nice', 'achat', 500000, NULL, 0, NULL),
(32, 'appart6.jpeg', 'Apart hotel piscine ', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '367777', 'Coures', 'location', 133, NULL, 0, NULL),
(38, 'immeubleCondado.jpeg', 'Villa Cuba', 'Vous cherchez un endroit où séjourner à La Havane ? Voilà ce qu’il vous faut : l\'Hotel Roc Presidente, un hôtel original qui vous apporte le meilleur de La Havane à votre portée.\r\n\r\nÉquipées d\'une télévision à écran plat, d\'une climatisation et d\'un réfrigérateur, les chambres du Presidente Hotel offrent tout le confort dont vous avez besoin. Vous pourrez même rester connecté grâce à l\'internet payant.\r\n\r\nL\'hôtel dispose de nombreux atouts, tels qu\'une réception ouverte 24 heures sur 24, une conciergerie et une boutique.', '12333', 'sdfds', 'location', 11, NULL, 0, NULL),
(115, 'CasaMontaña.jpeg', 'Cuba-Cabane', 'Vous cherchez un endroit où séjourner à La Havane ? Voilà ce qu’il vous faut : l\'Hotel Roc Presidente, un hôtel original qui vous apporte le meilleur de La Havane à votre portée.\r\n\r\nÉquipées d\'une télévision à écran plat, d\'une climatisation et d\'un réfrigérateur, les chambres du Presidente Hotel offrent tout le confort dont vous avez besoin. Vous pourrez même rester connecté grâce à l\'internet payant.', 'Plaza', 'havane', 'location', 100, NULL, 0, NULL),
(131, 'bayamo.jpeg', 'Hôte Villa Cuba', 'Vous cherchez un endroit où séjourner à La Havane ? Voilà ce qu’il vous faut : l\'Hotel  Presidente, un hôtel original qui vous apporte le meilleur de La Havane à votre portée.\r\n\r\nÉquipées d\'une télévision à écran plat, d\'une climatisation et d\'un réfrigérateur, les chambres du Presidente Hotel offrent tout le confort dont vous avez besoin. Vous pourrez même rester connecté grâce à l\'internet payant.\r\n\r\nL\'hôtel dispose de nombreux atouts, tels qu\'une réception ouverte 24 heures sur 24, une conciergerie et une boutique.', 'qsdqsd', 'qd', 'location', 10, NULL, 0, NULL),
(181, 'Appart1.jpeg', 'BELLA VISTA', '**Appartement de rêve avec vue sur la mer à vendre à Cuba**\r\nSitué dans le quartier pittoresque de La Habana Vieja, cet appartement de luxe offre une vue imprenable sur la mer des Caraïbes. Avec **3 chambres spacieuses**, **2 salles de bains modernes** et une **cuisine entièrement équipée**, cet appartement est le parfait mélange de confort et de style.\r\n', 'Plaza', 'Havane', 'achat', 100000, NULL, 0, NULL),
(183, 'CasaDeLaPlaya.jpeg', 'Appart Varadero', 'Apartement avec vue mer a varadero zone  de plage paradisiaque de Cuba avec village ', 'cader', 'Cardenas', 'location', 55, NULL, 0, NULL),
(184, 'CasaDeLaPlaya.jpeg', 'Appart Varadero', 'Apartement avec vue mer a varadero zone  de plage paradisiaque de Cuba avec village ', 'cader', 'Cardenas', 'location', 55, NULL, 0, NULL),
(185, 'capitolio.jpg', 'Centro Habana Capitolio ', 'Hotel 4 *** situe au capitolio vue imprenable mer et ville ', 'Havave', 'havane', 'location', 99, NULL, 0, NULL),
(186, 'capitolio.jpg', 'Centro Habana Capitolio ', 'Hotel 4 *** situe au capitolio vue imprenable mer et ville ', 'Havave', 'havane', 'location', 99, NULL, 0, NULL),
(187, 'playa2.jpg', 'Cayo Largo', 'Cayo Largo mesure plus ou moins 25 km de long par plus ou moins 3 km de large dans sa partie la plus large. C\'est la deuxième île (en superficie) de l\'archipel des Canarreos après l\'île de la Juventud (ou île de la Jeunesse).', '99', 'l\'archipel des Canarreos', 'location', 100, NULL, 0, NULL),
(188, 'appart6.jpeg', 'Apart hôtel piscine Hôte ', 'Découvrez nos 8 appart\'hôtels avec piscine pour des vacances parfaites ! Que vous voyagiez en famille ou entre amis, la piscine est un atout majeur pour ...', '66', 'FRAN', 'location', 90, NULL, 0, NULL),
(189, 'CasaDeLaPlaya.jpeg', 'Meramec River Resort', '\r\n\r\nSitué à Cuba, le Meramec River Resort propose des hébergements avec un coin salon. Vous bénéficierez gratuitement d\'un parking privé et d\'une connexion Wi-Fi. Il propose des chambres familiales et une aire de pique-nique.\r\n\r\nTous les logements disposent de la climatisation et d\'une télévision à écran plat. Certains logements comprennent une terrasse avec vue sur la rivière, une cuisine entièrement équipée et une salle de bains privative avec baignoire. Le linge de lit et les serviettes sont fournis.\r\n\r\nVous trouverez un snack-bar et une supérette sur place.\r\n\r\nLa région est prisée des amateurs de pêche et de randonnée. Un service de location de voitures est assuré sur place. Vous pourrez également vous détendre dans le jardin.\r\n\r\nL\'aéroport régional de Waynesville-St. Robert, le plus proche, est implanté à 98 km.\r\n\r\nLes distances indiquées dans la description de l\'établissement sont calculées avec © OpenStreetMap.', 'Playa', 'Camagüey ', 'location', 90, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `advert_images`
--

CREATE TABLE `advert_images` (
  `id_advert_image` int NOT NULL,
  `id_image` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_commentaire` int NOT NULL,
  `id_utilisateur` int NOT NULL,
  `id_advert` int NOT NULL,
  `comment_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rating` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaire`, `id_utilisateur`, `id_advert`, `comment_text`, `rating`, `created_at`) VALUES
(1, 13, 23, 'Un excellent accueil (notamment lorsque vos valises ont été perdues entre Paris, Madrid et La Havane...), un personnel aux petits soins (conseils pour visites), chambre 1010 au top avec vue sur l\'océan, chambre 815 avec vue sur ville, grandes salles de bain, lits spacieux et confortables. Hôtel au charme ancien.\r\nRestaurant ouvert jusqu\'à 22h. Grande terrasse bar et restaurant.\r\nMerci au directeur pour son aide précieuse lors d\'un souci avec un chauffeur de taxi !\r\nDommage que la piscine n\'était pas été accessible (travaux d\'entretien).', 5, '2024-06-09 12:21:14'),
(2, 13, 131, 'cet annonce est a effacer', 1, '2024-06-09 17:57:50'),
(3, 13, 38, 'delete', 1, '2024-06-09 18:08:47');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id_image` int NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id_reservation` int NOT NULL,
  `id_annonce` int NOT NULL,
  `id_utilisateur` int NOT NULL,
  `date_reservation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_arrivee` date NOT NULL,
  `date_depart` date NOT NULL,
  `nombre_personnes` int NOT NULL,
  `etat_reservation` varchar(20) NOT NULL DEFAULT 'en attente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id_reservation`, `id_annonce`, `id_utilisateur`, `date_reservation`, `date_arrivee`, `date_depart`, `nombre_personnes`, `etat_reservation`) VALUES
(1, 115, 3, '2024-06-02 20:20:59', '2024-06-13', '2024-06-27', 1, 'en attente'),
(2, 115, 3, '2024-06-02 22:13:10', '2024-05-29', '2024-06-14', 1, 'en attente'),
(3, 115, 3, '2024-06-02 22:14:15', '2024-06-14', '2024-06-22', 1, 'en attente'),
(4, 115, 3, '2024-06-02 22:15:14', '2024-06-13', '2024-06-15', 1, 'en attente'),
(5, 25, 10, '2024-06-03 02:23:55', '2024-06-05', '2024-06-20', 1, 'en attente'),
(6, 187, 9, '2024-06-03 09:48:58', '2024-06-13', '2024-06-13', 3, 'en attente'),
(7, 24, 5, '2024-06-05 15:06:50', '2024-06-13', '2024-06-14', 1, 'en attente'),
(8, 115, 5, '2024-06-05 15:33:30', '2024-06-20', '2024-06-13', 1, 'en attente'),
(9, 30, 5, '2024-06-05 15:36:16', '2024-06-12', '2024-06-14', 1, 'en attente'),
(10, 30, 5, '2024-06-05 15:38:40', '2024-06-06', '2024-06-05', 1, 'en attente'),
(11, 26, 13, '2024-06-05 15:46:28', '2024-05-29', '2024-06-13', 1, 'en attente'),
(12, 23, 13, '2024-06-05 15:57:49', '2024-06-05', '2024-06-14', 1, 'en attente'),
(13, 26, 13, '2024-06-05 16:32:50', '2024-06-20', '2024-06-14', 1, 'en attente'),
(14, 115, 13, '2024-06-05 17:42:05', '2024-06-07', '2024-06-14', 1, 'en attente'),
(15, 131, 13, '2024-06-05 18:01:36', '2024-06-05', '2024-06-07', 1, 'annuler'),
(16, 115, 13, '2024-06-05 18:46:01', '2024-06-05', '2024-06-14', 1, 'en attente'),
(17, 115, 13, '2024-06-05 18:48:39', '2024-06-05', '2024-06-13', 1, 'en attente'),
(18, 188, 13, '2024-06-05 19:31:14', '2024-06-12', '2024-06-13', 1, 'en attente'),
(19, 23, 13, '2024-06-06 00:26:32', '2024-06-06', '2024-06-07', 1, 'en attente'),
(20, 23, 13, '2024-06-06 00:33:26', '2024-06-21', '2024-06-22', 1, 'en attente'),
(21, 17, 2, '2024-06-07 01:28:58', '2024-06-13', '2024-06-20', 1, 'en attente'),
(22, 38, 2, '2024-06-07 03:21:43', '2024-06-14', '2024-06-20', 1, 'annuler'),
(23, 17, 3, '2024-06-09 20:57:16', '2024-06-14', '2024-06-15', 5, 'en attente');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `firstName` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pseudo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `civility` enum('f','h') COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `zipCode` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('ROLE_USER','ROLE_ADMIN') COLLATE utf8mb4_general_ci DEFAULT 'ROLE_USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `firstName`, `lastName`, `pseudo`, `email`, `mdp`, `phone`, `civility`, `address`, `zipCode`, `city`, `country`, `role`) VALUES
(2, 'Sophie', 'Ostermeyer', 'ost', 'sophie@gmail.com', '$2y$10$LFVGCVr/lUBr.lxouj5TC.6t4MIa8z74DEFQcByqAd0eTyT2bbzbS', '654321', 'f', '1 rue paradis', '75012', 'Paris', 'France', 'ROLE_ADMIN'),
(3, 'Christel ', 'Kembemba', 'cris', 'christel@yahoo.fr', '$2y$10$fynfmdbXTjk.iq4YzTrerOYzBh/ePJH8SnAE8xHhAuKAuxcRmiECe', '12345678', 'f', '33 RUE DE VERSAILLES ', '75020', 'Paris', 'France', 'ROLE_USER'),
(5, 'Roberto', 'Quesada Rad', 'cubahitman', 'roberto@yahoo.fr', '$2y$10$y.mPuX36zbPYqfSe5785KeWB88d2FMmexzBGsNrT2L/t9DCX8/L0a', '654321321', 'h', '1 rue paradis', '75018', 'Paris', 'France', 'ROLE_ADMIN'),
(7, 'Issa', 'Jafari', 'desu', 'issa@yahoo.fr', '$2y$10$1ABojWyp6Q5H/BD5412gKu1l.IMtAQawVXKaz5P/5o7KV1OQ1TxcO', '654321', 'h', '3 rue de pepinieres', '75000', 'Paris', 'France', 'ROLE_USER'),
(8, 'Yerusalema', 'GEMEDA', 'gentillesse ', 'gemeda@yahoo.fr', '$2y$10$LX1Q9HdQRnEqpXMdV2CcWetsp3JaK7p4mBt7YQNDmnjQdTY2HuIvy', '123456', 'f', '2 Jusima', '75018', 'Paris', 'France', 'ROLE_USER'),
(9, 'Mehdi', 'TOLBA', 'Medito', 'mehdi@yahoo.fr', '$2y$10$ZbXMMjU6BYrF8dmoGtu8N.NIKgWhRb/h6KJvVX/.bGr4EkAnJ75AK', '3333444455', 'h', '5 rue forum strety', '33', 'Paris', 'France', 'ROLE_USER'),
(10, 'pete', 'tonton', 'Pie', 'pie@yahoo.fr', '$2y$10$yVVThp7tcvaX4sU4pR0wg.XFaiTJIV0Np6KVLLFKSaofsWr4VA/BG', '123456789', 'h', '2 cery', '75012', 'Nice', 'ffrance', 'ROLE_USER'),
(11, 'TIA', 'NOM', 'tetet', 'tuya@yahoo.fr', '$2y$10$7spanhqSIDSiefq2vY05qezNIYG9qCjzIk2BNL8imC1OSKp/DnLW2', '123765', 'h', 'félicitations ', '43', 'Bordeau ', 'France', 'ROLE_USER'),
(12, 'Lara', 'Sama', 'tety', 'lara@yahoo.fr', '$2y$10$/4y703JTemsohzoMJVhPdeXQpYS1iOPdq3kHOGes9sA7GMuEWmeom', '1234567', 'f', '1 rue paradis', '2345', 'Nice', 'France', 'ROLE_USER'),
(13, 'Test', 'tester', 'testeur', 'testeur@yahoo.fr', '$2y$10$b1p4mcOntD0waZS0Uen3cuixupXJIaTypX13k26TNJQoHBew4uPIm', '123765', 'h', '3 rue de pepinieres', '93', 'Nice', 'France', 'ROLE_ADMIN'),
(14, 'Jean', 'Leis', 'Leo', 'jean@yahoo.fr', '$2y$10$gyejvm9MVlnwCg83WUTv8e9f8ymOoZOaQTUfAr7ZYnh.SngOdhN62', '342516', 'h', 'rue le paradigme ', '75000', 'Paris', 'France', 'ROLE_USER');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achats`
--
ALTER TABLE `achats`
  ADD PRIMARY KEY (`id_achat`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_annonce` (`id_annonce`);

--
-- Index pour la table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id_advert`),
  ADD UNIQUE KEY `id_advert_image` (`id_advert_image`);

--
-- Index pour la table `advert_images`
--
ALTER TABLE `advert_images`
  ADD PRIMARY KEY (`id_advert_image`,`id_image`),
  ADD KEY `id_advert_image` (`id_advert_image`),
  ADD KEY `id_image` (`id_image`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_advert` (`id_advert`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_annonce` (`id_annonce`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achats`
--
ALTER TABLE `achats`
  MODIFY `id_achat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `advert`
--
ALTER TABLE `advert`
  MODIFY `id_advert` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_commentaire` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id_reservation` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achats`
--
ALTER TABLE `achats`
  ADD CONSTRAINT `achats_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `achats_ibfk_2` FOREIGN KEY (`id_annonce`) REFERENCES `advert` (`id_advert`);

--
-- Contraintes pour la table `advert_images`
--
ALTER TABLE `advert_images`
  ADD CONSTRAINT `advert_images_ibfk_1` FOREIGN KEY (`id_advert_image`) REFERENCES `advert` (`id_advert_image`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `advert_images_ibfk_2` FOREIGN KEY (`id_image`) REFERENCES `images` (`id_image`);

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `commentaires_ibfk_2` FOREIGN KEY (`id_advert`) REFERENCES `advert` (`id_advert`);

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`id_annonce`) REFERENCES `advert` (`id_advert`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
