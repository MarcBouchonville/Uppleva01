-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 25 Août 2018 à 15:39
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `TVisiteurs`
--

CREATE TABLE `tvisiteurs` (
  `IdVisiteur` int(10) UNSIGNED NOT NULL COMMENT 'Index',
  `Nom` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'nom de famille',
  `Prenom` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'prenom',
  `Email` varchar(70) COLLATE utf8_bin NOT NULL COMMENT 'adresse mail',
  `Telephone` varchar(20) COLLATE utf8_bin DEFAULT NULL COMMENT 'numéro de contact',
  `Sujet` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Titre du sujet décrit',
  `Commentaire` varchar(2000) COLLATE utf8_bin DEFAULT NULL COMMENT 'Commentaire'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `TVisiteurs`
--
ALTER TABLE `TVisiteurs`
  ADD PRIMARY KEY (`IdVisiteur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `TVisiteurs`
--
ALTER TABLE `TVisiteurs`
  MODIFY `IdVisiteur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Index';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
