-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 08 avr. 2021 à 13:01
-- Version du serveur :  10.3.24-MariaDB-2
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
(1, 'Etudiant'),
(2, 'Developpeur web'),
(3, 'Enseignant'),
(4, 'Manager');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `adresse`, `categorie`) VALUES
(1, 'DIALLO', 'Abdou', 'Pikine', '0'),
(2, 'Diaw', 'OUSMANE', 'Pikine rue 10 marché chavanel', 'Software Engineer'),
(3, 'DIALLO', 'Abdourahmen', 'Pikine rue 10 marché chavanel app 509\r\nB', 'Test'),
(4, 'DIALLO', 'Abdourahmen', 'Pikine rue 10 marché chavanel app 509\r\nB', 'Dakar'),
(5, 'KEITA', 'Mouhamadou Moustapha', 'Dakar', 'Manager'),
(6, 'KEITA', 'Mouhamadou Moustapha', 'Dakar', 'Manager'),
(7, 'THIAM', 'Serigne Souaibou', 'Pikine, Bountou Pikine', 'Etudiant'),
(8, 'THIAM', 'Serigne Souaibou', 'Pikine, Bountou Pikine', 'Etudiant'),
(9, 'THIAM', 'Serigne Souaibou', 'Pikine, Bountou Pikine', 'Etudiant'),
(10, 'THIAM', 'Serigne Souaibou', 'Pikine, Bountou Pikine', 'Etudiant'),
(11, 'THIAM', 'Serigne Souaibou', 'Pikine, Bountou Pikine', 'Etudiant'),
(12, 'DIALLO', 'Abdourahmen', 'Pikine rue 10 marché chavanel app 509\r\nB', 'Dakar'),
(13, 'THIAM', 'Serigne Souaibou', 'Pikine, Bountou Pikine', 'Etudiant'),
(14, 'DIALLO', 'Abdou', 'Pikine', 'KAOLACK'),
(15, 'DIALLO', 'Abdourahmen', 'Pikine rue 10 marché chavanel app 509\r\nB', '0hfhhf'),
(16, 'THIAM', 'Serigne Souaibou', 'Pikine, Bountou Pikine', 'Etudiant'),
(17, 'Abdourahmen', '', '', '0'),
(18, 'DIALLO', 'Abdourahmen', 'Pikine rue 10 marché chavanel app 509\r\nB', '0'),
(19, 'KEITA', 'Mouhamadou Moustapha', 'Dakar', 'Manager'),
(20, 'DIALLO', 'Abdourahmen', 'Pikine rue 10 marché chavanel app 509\r\nB', 'Dakar'),
(21, 'THIAM', 'Serigne Souaibou', 'Pikine, Bountou Pikine', 'Etudiant'),
(22, 'THIAM', 'Serigne Souaibou', 'Pikine, Bountou Pikine', 'Etudiant'),
(23, 'KEITA', 'Mouhamadou Moustapha', 'Dakar', 'Manager'),
(24, 'DIALLO', 'Abdourahmen', 'Pikine rue 10 marché chavanel app 509\r\nB', 'Test'),
(25, 'Diaw', 'OUSMANE', 'Pikine rue 10 marché chavanel', 'Software Engineer');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
