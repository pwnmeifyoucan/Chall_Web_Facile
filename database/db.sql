-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 06 nov. 2024 à 20:06
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `data_users`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `pass`) VALUES
(1, 'tran', 'huy', 'tranhuylqd@gmail.com', 'b8dc042d8cf7deefb0ec6a264c930b02'),
(6, 'pham', 'chi', 'phamchi@gmail.com', '7c32420582153f3d1461ad5b2fe611a2'),
(7, 'le', 'quan', 'lequan@gmail.com', '92de4ab2220b1792e5a992c145f4b56f'),
(8, 'briffaut', 'jeremy', 'jeremy.briffaut@insa-cvl.fr', 'CTF_2_5_{!_b4s1c_sq1_1nj3ct10n_!}'),
(9, 'phan', 'an', 'phanan@gmail.com', '42050e34e1a0f6bd5f65196022751667'),
(10, 'admin', '🖕🖕🖕🖕🖕🖕', '🖕🖕🖕🖕🖕🖕', '21232f297a57a5a743894a0e4a801fc3'),
(11, 'ditme', 'cc', 'hehe@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
