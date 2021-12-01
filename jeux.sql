-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 01 déc. 2021 à 15:20
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jeux`
--
CREATE DATABASE IF NOT EXISTS `jeux` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jeux`;

-- --------------------------------------------------------

--
-- Structure de la table `avatar`
--

CREATE TABLE IF NOT EXISTS `avatar` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avatar`
--

INSERT INTO `avatar` (`id`, `description`, `image`) VALUES
(1, 'test', 'test.png');

-- --------------------------------------------------------

--
-- Structure de la table `difficulte`
--

CREATE TABLE IF NOT EXISTS `difficulte` (
  `id` int(11) NOT NULL,
  `difficulte` text NOT NULL,
  `multiplicateur_score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

CREATE TABLE IF NOT EXISTS `jeux` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `id_type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_type` (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `liste_amis`
--

CREATE TABLE IF NOT EXISTS `liste_amis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_user2` int(11) NOT NULL,
  `statut` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_user2` (`id_user2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `partie`
--

CREATE TABLE IF NOT EXISTS `partie` (
  `id` int(11) NOT NULL,
  `nb_joueurs` int(11) NOT NULL,
  `id_difficulte` int(11) NOT NULL,
  `id_jeux` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `finished_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_difficulte` (`id_difficulte`),
  KEY `id_jeux` (`id_jeux`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `partie_user`
--

CREATE TABLE IF NOT EXISTS `partie_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_partie` int(11) NOT NULL,
  `statut` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_partie` (`id_partie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `regles_jeux`
--

CREATE TABLE IF NOT EXISTS `regles_jeux` (
  `id` int(11) NOT NULL,
  `id_jeux` int(11) NOT NULL,
  `nom_regle` text NOT NULL,
  `regle` text NOT NULL,
  `id_difficulte` int(11) NOT NULL,
  `nb_joueur_min` int(11) NOT NULL,
  `nb_joueur_max` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_jeux` (`id_jeux`),
  KEY `id_difficulte` (`id_difficulte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) NOT NULL,
  `id_jeux` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_partie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_jeux` (`id_jeux`),
  KEY `id_user` (`id_user`),
  KEY `id_partie` (`id_partie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_de_jeux` text NOT NULL,
  `nb_cartes` int(11) NOT NULL,
  `type_de_carte` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` text NOT NULL,
  `mdp` text NOT NULL,
  `id_avatar` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_avatar` (`id_avatar`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `mdp`, `id_avatar`) VALUES
(2, 'caca', 'caca', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `jeux`
--
ALTER TABLE `jeux`
  ADD CONSTRAINT `jeux_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `liste_amis`
--
ALTER TABLE `liste_amis`
  ADD CONSTRAINT `liste_amis_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `liste_amis_ibfk_2` FOREIGN KEY (`id_user2`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `partie`
--
ALTER TABLE `partie`
  ADD CONSTRAINT `partie_ibfk_1` FOREIGN KEY (`id_difficulte`) REFERENCES `difficulte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `partie_ibfk_2` FOREIGN KEY (`id_jeux`) REFERENCES `jeux` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `partie_user`
--
ALTER TABLE `partie_user`
  ADD CONSTRAINT `partie_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `partie_user_ibfk_2` FOREIGN KEY (`id_partie`) REFERENCES `partie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `regles_jeux`
--
ALTER TABLE `regles_jeux`
  ADD CONSTRAINT `regles_jeux_ibfk_1` FOREIGN KEY (`id_jeux`) REFERENCES `jeux` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `regles_jeux_ibfk_2` FOREIGN KEY (`id_difficulte`) REFERENCES `difficulte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`id_jeux`) REFERENCES `jeux` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `score_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `score_ibfk_3` FOREIGN KEY (`id_partie`) REFERENCES `partie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_avatar`) REFERENCES `avatar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
