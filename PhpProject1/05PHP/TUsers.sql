-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 22 Septembre 2018 à 13:58
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
-- Structure de la table `TUsers`
--

CREATE TABLE `tusers` (
  `IdUS` int(10) UNSIGNED NOT NULL COMMENT 'cle primaire',
  `NomUS` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'nom',
  `PrenomUS` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'prenom',
  `PwdUS` varchar(30) COLLATE utf8_bin NOT NULL COMMENT 'pw',
  `Privilege` varchar(20) COLLATE utf8_bin NOT NULL COMMENT 'priv',
  `Actif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='T_USERS';

--
-- Contenu de la table `TUsers`
--

INSERT INTO `TUsers` (`IdUS`, `NomUS`, `PrenomUS`, `PwdUS`, `Privilege`, `Actif`) VALUES
(1, 'BOUCH', 'Marc', 'cafe', 'Adm', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `TUsers`
--
ALTER TABLE `TUsers`
  ADD PRIMARY KEY (`IdUS`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `TUsers`
--
ALTER TABLE `TUsers`
  MODIFY `IdUS` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'cle primaire', AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
