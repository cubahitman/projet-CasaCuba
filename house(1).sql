-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 02 juin 2024 à 16:17
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
  `is_reserved` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id_advert`, `photo`, `title`, `description`, `postal_code`, `city`, `type`, `price`, `reservation_message`, `is_reserved`) VALUES
(16, 'Appart1.jpeg', 'appartement ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur feugiat volutpat nulla, et sollicitudin neque dignissim ullamcorper. Donec sed pretium ligula. Integer volutpat viverra pretium. Vivamus tristique fringilla nunc, eu facilisis mauris interdum vitae. Nulla sit amet sem non nisi molestie ullamcorper at molestie sapien. Nulla cursus nunc mauris, vel maximus ex molestie sit amet. In eleifend mollis turpis, vitae blandit dolor feugiat ut. Maecenas nec fermentum tortor. Quisque commodo arcu sed metus cursus, et dictum augue elementum. Donec nec leo magna.', '75012', 'Paris', 'achat', 100000, '                                                                                                                                                                                                                                                                                                         ', 1),
(17, 'maisonCampagne.jpeg', 'Maison de la Campagne ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur feugiat volutpat nulla, et sollicitudin neque dignissim ullamcorper. Donec sed pretium ligula. Integer volutpat viverra pretium. Vivamus tristique fringilla nunc, eu facilisis mauris interdum vitae. Nulla sit amet sem non nisi molestie ullamcorper at molestie sapien. Nulla cursus nunc mauris, vel maximus ex molestie sit amet. In eleifend mollis turpis, vitae blandit dolor feugiat ut. Maecenas nec fermentum tortor. Quisque commodo arcu sed metus cursus, et dictum augue elementum. Donec nec leo magna.', '12333', 'FRAN', 'location', 500, NULL, 0),
(18, 'appartBellevues.jpeg', 'Belle appart ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur feugiat volutpat nulla, et sollicitudin neque dignissim ullamcorper. Donec sed pretium ligula. Integer volutpat viverra pretium. Vivamus tristique fringilla nunc, eu facilisis mauris interdum vitae. Nulla sit amet sem non nisi molestie ullamcorper at molestie sapien. Nulla cursus nunc mauris, vel maximus ex molestie sit amet. In eleifend mollis turpis, vitae blandit dolor feugiat ut. Maecenas nec fermentum tortor. Quisque commodo arcu sed metus cursus, et dictum augue elementum. Donec nec leo magna.', '12333', 'Nice', 'achat', 1000000, NULL, 0),
(20, 'appart5.jpeg', 'Appart vainille', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur feugiat volutpat nulla, et sollicitudin neque dignissim ullamcorper. Donec sed pretium ligula. Integer volutpat viverra pretium. Vivamus tristique fringilla nunc, eu facilisis mauris interdum vitae. Nulla sit amet sem non nisi molestie ullamcorper at molestie sapien. Nulla cursus nunc mauris, vel maximus ex molestie sit amet. In eleifend mollis turpis, vitae blandit dolor feugiat ut. Maecenas nec fermentum tortor. Quisque commodo arcu sed metus cursus, et dictum augue elementum. Donec nec leo magna.', '12453', 'Castille', 'achat', 100500, 'Issa réserve cet annonce', 1),
(22, 'Appart1.jpeg', 'Vendre Sud-ouest ', 'Aliquam erat volutpat. Phasellus vitae odio id urna aliquam dignissim. Phasellus nec sagittis felis. Fusce sit amet cursus ante. Ut tincidunt posuere ante id maximus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce eu nisl eu justo porttitor dictum. Integer tincidunt turpis quam, eu laoreet massa dictum ac. Donec efficitur auctor orci mollis tincidunt. Aenean id maximus nisl. Nulla ac ex feugiat, faucibus nisl sit amet, pharetra metus. Pellentesque imperdiet ante ut neque tristique placerat. ', '09999', 'Rorche sur Loire ', 'achat', 500000, NULL, 0),
(23, 'appart6.jpeg', 'Hotel', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '77333', 'Camargta', 'location', 100, 'Je réserve cette hôtel. Yacine', 1),
(24, 'appart2.jpeg', 'chambre hotel campagne', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '88000', 'Canne', 'location', 300, NULL, 0),
(25, 'appart2.jpeg', 'Chambre Nice', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '66000', 'Nice', 'location', 200, 'cristelle reserve', 1),
(26, 'appart2.jpeg', 'hambre hôtel ', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '56000', 'Nice', 'location', 300, NULL, 0),
(27, 'appart6.jpeg', 'Chambre hotel picine', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '66333', 'Canne', 'location', 400, NULL, 0),
(30, 'appart6.jpeg', 'Appart vainille', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '33333', 'FRAN', 'location', 100, NULL, 0),
(31, 'appartBalcon.jpeg', 'Appart vainille', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '65333', 'Nice', 'achat', 500000, NULL, 0),
(32, 'appart6.jpeg', 'Apart hotel piscine ', 'Fusce eros tellus, volutpat et turpis eget, mollis congue justo. Vivamus congue tellus a risus posuere viverra. Nulla facilisi. Sed faucibus porttitor mauris at imperdiet. Donec pellentesque gravida nibh, a tincidunt elit mollis ac. Donec pharetra dictum nisi. Donec auctor risus mi, porta sodales felis vulputate non. Maecenas fringilla diam sed arcu porttitor accumsan. In lectus odio, auctor et accumsan eu, laoreet eget dui. Aenean interdum purus et lectus varius, ut iaculis nisl convallis. Curabitur eget est vel ipsum sollicitudin vulputate non at massa. Aenean varius sit amet justo id faucibus. Morbi dapibus quis sapien ac sagittis. Pellentesque id scelerisque ante. ', '367777', 'Coures', 'location', 133, NULL, 0),
(38, 'immeubleCondado.jpeg', 'a effacer ', 'sdfsdfsd', '12333', 'sdfds', 'location', 11, 'reserver n \"3', 1),
(64, 'CasaDelMar.jpeg', 'Avatarfghfh', 'fghfgh', 'fghfgh', 'fghfgh', 'achat', 11, '                reserver                 ', 1),
(69, 'CasaDeLaPlaya.jpeg', 'efacer', 'dddddddddddddd', 'ddddd', 'dd', 'achat', 11, '', 1),
(79, 'bandera.jpg', 'a effacer', 'dfgdgdf', 'dfgdfg', 'dfgdfgdfg', 'achat', 11, NULL, 0),
(87, 'Capture d\'écran 2024-04-21 184324.png', 'a effacer', 'fghfghgfh', 'fghgf', 'fghfg', 'location', 11, '', 1),
(89, 'CasaDelMar.jpeg', 'a effacer', 'fvcbcv', 'cvb', 'cb', 'achat', 1, NULL, 0),
(91, 'CasaDelMar.jpeg', 'a effacer', 'fvcbcv', 'cvb', 'cb', 'achat', 1, NULL, 0),
(92, 'CasaDelMar.jpeg', 'a effacer', 'fvcbcv', 'cvb', 'cb', 'achat', 1, '                                                                                                                                                                                                  eretert                                                                                                                                        ', 1),
(94, 'bayamo.jpeg', 'Stars War', 'fgggggggggggggggggggggggggggggg', 'g', 'dfg', 'achat', 1, '', 1),
(95, 'bayamo.jpeg', 'Stars War', 'fgggggggggggggggggggggggggggggg', 'g', 'dfg', 'achat', 1, NULL, 0),
(96, 'CasaMontaña.jpeg', 'sdfsdf', '11111111111111111111111111111111111111111111111111111111111111', '12333', 'dfgdfgdfg', 'achat', 11, '', 1),
(97, 'CasaMontaña.jpeg', 'sdfsdf', '11111111111111111111111111111111111111111111111111111111111111', '12333', 'dfgdfgdfg', 'achat', 11, '', 1),
(98, 'CasaMontaña.jpeg', 'sdfsdf', '11111111111111111111111111111111111111111111111111111111111111', '12333', 'dfgdfgdfg', 'achat', 11, NULL, 0),
(100, 'CasaMontaña.jpeg', 'sdfsdf', '11111111111111111111111111111111111111111111111111111111111111', '12333', 'dfgdfgdfg', 'achat', 11, NULL, 0),
(101, 'CasaMontaña.jpeg', 'sdfsdf', '11111111111111111111111111111111111111111111111111111111111111', '12333', 'dfgdfgdfg', 'achat', 11, '', 1),
(102, 'CasaMontaña.jpeg', 'sdfsdf', '11111111111111111111111111111111111111111111111111111111111111', '12333', 'dfgdfgdfg', 'achat', 11, 'reservatin', 1),
(103, 'CasaMontaña.jpeg', 'sdfsdf', '11111111111111111111111111111111111111111111111111111111111111', '12333', 'dfgdfgdfg', 'achat', 11, '                                                                                                   ', 1),
(104, 'CasaMontaña.jpeg', 'sdfsdf', '11111111111111111111111111111111111111111111111111111111111111', '12333', 'dfgdfgdfg', 'achat', 11, NULL, 0),
(105, 'CasaMontaña.jpeg', 'sdfsdf', '11111111111111111111111111111111111111111111111111111111111111', '12333', 'dfgdfgdfg', 'achat', 11, '                                                                                                                                                                     ', 1),
(106, 'CasaMontaña.jpeg', 'sdfsdf', '11111111111111111111111111111111111111111111111111111111111111', '12333', 'dfgdfgdfg', 'achat', 11, NULL, 0),
(107, 'CasaMontaña.jpeg', 'sdfsdf', '11111111111111111111111111111111111111111111111111111111111111', '12333', 'dfgdfgdfg', 'achat', 11, NULL, 0),
(108, 'CasaMontaña.jpeg', 'sdfsdf', '11111111111111111111111111111111111111111111111111111111111111', '12333', 'dfgdfgdfg', 'achat', 11, NULL, 0),
(109, 'CasaMontaña.jpeg', 'sdfsdf', '11111111111111111111111111111111111111111111111111111111111111', '12333', 'dfgdfgdfg', 'achat', 11, NULL, 0),
(110, 'CasaMontaña.jpeg', 'sdfsdf', '11111111111111111111111111111111111111111111111111111111111111', '12333', 'dfgdfgdfg', 'achat', 11, NULL, 0),
(111, 'capitolio.jpg', 'a effacer', 'fghfghgfh', 'fghfgh', 'fghfgh', 'achat', 11, 'teste numero 2', 1),
(112, 'capitolio.jpg', 'a effacer', 'fghfghgfh', 'fghfgh', 'fghfgh', 'achat', 11, NULL, 0),
(113, 'capitolio.jpg', 'a effacer', 'fghfghgfh', 'fghfgh', 'fghfgh', 'achat', 11, NULL, 0),
(114, 'capitolio.jpg', 'a effacer', 'fghfghgfh', 'fghfgh', 'fghfgh', 'achat', 11, NULL, 0),
(115, 'CasaMontaña.jpeg', '222222222222222222222222222', 'é222222222222222222222222222222', 'éééééééé', 'é', 'location', 100, NULL, 0),
(117, 'CasaDeLaPlaya.jpeg', '333333333', '33333333', '33', '3333333333333', 'achat', 233, NULL, 0),
(118, 'CasaDeLaPlaya.jpeg', '333333333', '33333333', '33', '3333333333333', 'achat', 233, NULL, 0),
(119, 'CasaDeLaPlaya.jpeg', '333333333', '33333333', '33', '3333333333333', 'achat', 233, NULL, 0),
(120, 'CasaDeLaPlaya.jpeg', '333333333', '33333333', '33', '3333333333333', 'achat', 233, NULL, 0),
(121, 'bayamo.jpeg', 'Stars War', 'fggggggggggggggggggggggggggg', 'fgg', 'fgggg', 'achat', 10, 'Resrveeeeeeeeeeee one', 1),
(122, 'Capture d\'écran 2024-04-21 184324.png', 'a effacer', 'sdfdsf', 'sdfds', 'sdfdsf', 'achat', 100, NULL, 0),
(123, 'Capture d\'écran 2024-04-21 184324.png', 'a effacer', 'sdfdsf', 'sdfds', 'sdfdsf', 'achat', 100, NULL, 0),
(124, 'Capture d\'écran 2024-04-21 184324.png', 'a effacer', 'sdfdsf', 'sdfds', 'sdfdsf', 'achat', 100, NULL, 0),
(127, 'Capture d\'écran 2024-04-21 184324.png', 'a effacer', 'sdfdsf', 'sdfds', 'sdfdsf', 'achat', 100, NULL, 0),
(128, 'Capture d\'écran 2024-04-21 184324.png', 'a effacer', 'sdfdsf', 'sdfds', 'sdfdsf', 'achat', 100, NULL, 0),
(129, 'Capture d\'écran 2024-04-21 184324.png', 'a effacer', 'sdfdsf', 'sdfds', 'sdfdsf', 'achat', 100, NULL, 0),
(130, 'Capture d\'écran 2024-04-21 184324.png', 'a effacer', 'sdfdsf', 'sdfds', 'sdfdsf', 'achat', 100, NULL, 0),
(131, 'bayamo.jpeg', 'qsdqsd', 'qsdqsdqs', 'qsdqsd', 'qd', 'location', 10, NULL, 0),
(132, 'CasaDeLaPlaya.jpeg', '777777777777777777777777777777', '77777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 77777, NULL, 0),
(133, 'CasaDeLaPlaya.jpeg', '777777777777777777777777777777', '77777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 77777, NULL, 0),
(134, 'CasaDeLaPlaya.jpeg', '777777777777777777777777777777', '77777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 77777, NULL, 0),
(135, 'CasaDeLaPlaya.jpeg', '777777777777777777777777777777', '77777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 77777, NULL, 0),
(136, 'CasaDeLaPlaya.jpeg', '777777777777777777777777777777', '77777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 77777, '', 1),
(137, 'CasaDeLaPlaya.jpeg', '777777777777777777777777777777', '77777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 77777, NULL, 0),
(138, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(139, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(140, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(141, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(142, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(143, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(144, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(145, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(146, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(147, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(148, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(149, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(150, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(151, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(152, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(153, 'appart6.jpeg', '777777777777777777777777777777', '777777777777777777777777777', '777777777777777777777777777', '777777777777777777777', 'achat', 7, NULL, 0),
(154, '10757_Le-Camion-qui-Fume-Burgers-et-frites--630x405--©-Olivier-Chamussy.jpg', 'new================================', 'new ccccccccccccccccccccccccccccccccccccc', '111116', 'rsrsdfqr', 'achat', 66666, NULL, 0),
(155, 'bayamo.jpeg', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqq', '6666', 'fgfg', 'achat', 666, NULL, 0),
(156, 'bayamo.jpeg', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqq', '6666', 'fgfg', 'achat', 666, NULL, 0),
(157, 'bandera.jpg', 'sdfsdfsdfsdfdsfdsf', 'sfsdfdsf', 'sdf', 'sdfdsf', 'achat', 1, NULL, 0),
(158, 'bandera.jpg', 'sdfsdfsdfsdfdsfdsf', 'sfsdfdsf', 'sdf', 'sdfdsf', 'achat', 1, NULL, 0),
(159, '', 'qsdqsdqsd', 'qsdqsdqs', 'qdqsd', 'qsdqs', 'achat', 10, NULL, 0),
(160, '', 'qsdqsdqsd', 'qsdqsdqs', 'qdqsd', 'qsdqs', 'achat', 10, NULL, 0),
(161, 'bandera.jpg', 'erer', 'erere', 'ere', 'ere', 'achat', 10, NULL, 0),
(162, 'bandera.jpg', 'erer', 'erere', 'ere', 'ere', 'achat', 10, NULL, 0),
(163, 'bandera.jpg', 'erer', 'erere', 'ere', 'ere', 'achat', 10, NULL, 0),
(164, 'bandera.jpg', 'erer', 'erere', 'ere', 'ere', 'achat', 10, NULL, 0),
(165, '', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'azazazaza', 'azze', 'azeaze', 'achat', 10, NULL, 0),
(166, '', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'azazazaza', 'azze', 'azeaze', 'achat', 10, NULL, 0),
(167, '', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'azazazaza', 'azze', 'azeaze', 'achat', 10, NULL, 0),
(168, '', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'azazazaza', 'azze', 'azeaze', 'achat', 10, NULL, 0),
(169, '', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'azazazaza', 'azze', 'azeaze', 'achat', 10, NULL, 0),
(170, '', 'new 111', 'd', '66', 'dd', 'achat', 66, NULL, 0),
(171, '', 'New 2', 'rr', '6666', 'res', 'achat', 66, NULL, 0),
(172, '', 'New 3', 'edfs', '66', 'seds', 'location', 666, NULL, 0),
(173, '', 'New 4', 'df', '66', 'erdf', 'achat', 7777, NULL, 0),
(174, '', 'new 5', 'dfsd', '66', 'dfqds', 'achat', 6868, NULL, 0),
(175, '', 'new 6', 'ds', '89', 'ds', 'achat', 98, NULL, 0),
(176, '', 'new 7', 'dss', '798', 'dezed', 'achat', 89, NULL, 0),
(177, '', 'new 8 ', 'fgfdg', '98', 'fdsg', 'achat', 897, NULL, 0),
(178, '', 'fdsds', 'dfgsdf', '5463456', 'rtsgr', 'achat', 4352, NULL, 0),
(179, '', 'new 9', 'sd', '98', 'dfq', 'achat', 987, 'reserver teste 1', 1),
(180, 'CasaDeLaPlaya.jpeg', 'Maison ', 'sdfsdgfdsgfd', 'sdf', 'sdf', 'achat', 1, 'reserver', 1),
(181, 'Appart1.jpeg', 'BELLA VISTA', '**Appartement de rêve avec vue sur la mer à vendre à Cuba**\r\nSitué dans le quartier pittoresque de La Habana Vieja, cet appartement de luxe offre une vue imprenable sur la mer des Caraïbes. Avec **3 chambres spacieuses**, **2 salles de bains modernes** et une **cuisine entièrement équipée**, cet appartement est le parfait mélange de confort et de style.\r\n', 'Plaza', 'Havane', 'achat', 100000, NULL, 0),
(182, 'bayamo.jpeg', 'Bayamo', 'Lorem ipssum tera la  udov,z m kdkkd j jjz jd jj zhqsiufh moSDFLMK NFomzh OIZHF sdf', 'Cuya', 'Bayamo', 'location', 50, NULL, 0),
(183, 'CasaDeLaPlaya.jpeg', 'Appart Varadero', 'Apartement avec vue mer a varadero zone  de plage paradisiaque de Cuba avec village ', 'cader', 'Cardenas', 'location', 55, NULL, 0),
(184, 'CasaDeLaPlaya.jpeg', 'Appart Varadero', 'Apartement avec vue mer a varadero zone  de plage paradisiaque de Cuba avec village ', 'cader', 'Cardenas', 'location', 55, NULL, 0),
(185, 'capitolio.jpg', 'Centro Habana Capitolio ', 'Hotel 4 *** situe au capitolio vue imprenable mer et ville ', 'Havave', 'havane', 'location', 99, NULL, 0),
(186, 'capitolio.jpg', 'Centro Habana Capitolio ', 'Hotel 4 *** situe au capitolio vue imprenable mer et ville ', 'Havave', 'havane', 'location', 99, NULL, 0),
(187, 'playa2.jpg', 'Cayo Largo', 'Cayo Largo mesure plus ou moins 25 km de long par plus ou moins 3 km de large dans sa partie la plus large. C\'est la deuxième île (en superficie) de l\'archipel des Canarreos après l\'île de la Juventud (ou île de la Jeunesse).', '99', 'l\'archipel des Canarreos', 'location', 100, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE `order` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `reference` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `payment_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `order`
--

INSERT INTO `order` (`id`, `user_id`, `reference`, `paid_at`, `payment_id`, `amount`) VALUES
(1, 3, '219249', '2024-05-26 14:30:20', NULL, 500000),
(2, 3, '514790', '2024-05-26 14:36:04', NULL, 500000);

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
(10, 'pete', 'tonton ', 'Pie', 'pie@yahoo.fr', '$2y$10$yVVThp7tcvaX4sU4pR0wg.XFaiTJIV0Np6KVLLFKSaofsWr4VA/BG', '123', 'h', '2 cery', '75012', 'Nice', 'ffrance', 'ROLE_USER'),
(11, 'TIA', 'NOM', 'tetet', 'tu@yahoo.fr', '$2y$10$7spanhqSIDSiefq2vY05qezNIYG9qCjzIk2BNL8imC1OSKp/DnLW2', '123765', 'h', 'félicitations ', '93', 'FRAN', 'France', 'ROLE_USER'),
(12, 'Lara', 'Sama', 'tety', 'lara@yahoo.fr', '$2y$10$/4y703JTemsohzoMJVhPdeXQpYS1iOPdq3kHOGes9sA7GMuEWmeom', '1234567', 'f', '1 rue paradis', '2345', 'FRAN', 'France', 'ROLE_USER');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id_advert`);

--
-- Index pour la table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F5299398A76ED395` (`user_id`);

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
-- AUTO_INCREMENT pour la table `advert`
--
ALTER TABLE `advert`
  MODIFY `id_advert` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id_reservation` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`);

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
