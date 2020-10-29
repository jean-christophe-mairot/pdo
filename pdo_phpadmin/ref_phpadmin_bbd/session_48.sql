-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 28 oct. 2020 à 11:48
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP : 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `onlineformpro`
--

-- --------------------------------------------------------

--
-- Structure de la table `session_48`
--

CREATE TABLE `session_48` (
  `id` int(3) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `session_48`
--

INSERT INTO `session_48` (`id`, `nom`, `prenom`, `mail`) VALUES
(1, 'Mairot', 'jean christophe', 'mairot@gmail.com'),
(3, 'jiji', 'jiji', 'jiji@gmail.com'),
(4, 'toto', 'toto', 'toto@toto.com'),
(5, 'lala', 'lala', 'lala@lala.com'),
(6, 'lili', 'lilo', 'lilo@lili.com'),
(7, 'lalu', 'laulu', 'lalu@lilo.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `session_48`
--
ALTER TABLE `session_48`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `session_48`
--
ALTER TABLE `session_48`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
