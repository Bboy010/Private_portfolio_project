-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 24 fév. 2024 à 13:10
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE `actualite` (
  `id` int(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `actualite`
--

INSERT INTO `actualite` (`id`, `title`, `picture`, `details`) VALUES
(1, 'Actu 1', 'assets/img/portfolio/actu/actu-1.jpg', ''),
(2, 'Actu 2', 'assets/img/portfolio/actu/actu-2.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `artworks`
--

CREATE TABLE `artworks` (
  `id` int(100) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `size` varchar(150) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `artwork_url` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `artworks`
--

INSERT INTO `artworks` (`id`, `title`, `size`, `type`, `artwork_url`) VALUES
(1, 'peinture 1', NULL, 'peinture', 'assets/img/portfolio/peintures/peinture-1.jpg'),
(2, 'peinture 2', NULL, 'peinture', 'assets/img/portfolio/peintures/peinture-2.jpg'),
(3, 'Dessin 1', NULL, 'Dessin', 'assets/img/portfolio/dessins/dessin-1.jpg'),
(4, 'Dessin 2', NULL, 'dessin', 'assets/img/portfolio/dessins/dessin-2.jpg'),
(5, 'Video de performance 1', NULL, 'video', 'assets/img/portfolio/performances/LernerWorld-spot-2024.mp4');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

CREATE TABLE `videos` (
  `id` int(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(500) NOT NULL,
  `artworks_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id`, `title`, `details`, `artworks_id`) VALUES
(1, 'Performance Sénégal', '', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `artworks`
--
ALTER TABLE `artworks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artwork` (`artworks_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualite`
--
ALTER TABLE `actualite`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `artworks`
--
ALTER TABLE `artworks`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
