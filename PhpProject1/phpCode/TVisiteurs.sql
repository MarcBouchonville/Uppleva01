-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 16 Septembre 2018 à 16:29
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
-- Structure de la table `tvisiteurs`
--

CREATE TABLE `tvisiteurs` (
  `IdVisiteur` int(10) UNSIGNED NOT NULL COMMENT 'Index',
  `Nom` varchar(50) COLLATE utf8_bin NOT NULL COMMENT 'nom de famille',
  `Prenom` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'prenom',
  `Email` varchar(70) COLLATE utf8_bin NOT NULL COMMENT 'adresse mail',
  `Telephone` varchar(20) COLLATE utf8_bin DEFAULT NULL COMMENT 'numéro de contact',
  `Sujet` varchar(50) COLLATE utf8_bin DEFAULT NULL COMMENT 'Titre du sujet décrit',
  `Commentaire` varchar(2000) COLLATE utf8_bin DEFAULT NULL COMMENT 'Commentaire',
  `Accepte` tinyint(1) NOT NULL COMMENT 'pour acceptation du commentaire ajouté'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `tvisiteurs`
--

INSERT INTO `tvisiteurs` (`IdVisiteur`, `Nom`, `Prenom`, `Email`, `Telephone`, `Sujet`, `Commentaire`, `Accepte`) VALUES
(1, 'TEST', 'Firsttest', 'nom@mail.com', '025552233', 'premier test', 'ceci est un premier test effectué das cette banque de données', 0),
(2, 'JOHNNY', 'Depp', 'american@us.com', '0555235612', 'this s the boy', 'this is the second test to be made with an actor, for example.', 0),
(3, 'NAME', 'Firstname', 'test2@mail.ge', '00491234568', 'third object', 'the object of this test is to see if the php code is correct', 0),
(4, 'NOM', 'Jean Luc', 'adresse.test@autre.com', '024568855', 'ceci est un test', 'ceci est un test avec un numéro de téléphone resté numérique', 0),
(5, 'OK', 'Autre Test', 'autremail@test.be', 'données', 'données incorrects', 'test avec les données suivantes : champ NOM vide ==> msg apparaissant à l&#39;écran = test = ok ; champ EMAIL vide ==> msg apparaissant à l&#39;écran = test = ok  ; champ numérique pour le TELEPHONE = rempli avec caractères alphabétiques only', 0),
(6, 'TEST', 'Autre Test Nb', 'mail@mail.test', '+3302456598785465210', '', '', 0),
(7, 'TEST22', 'Prenom22', 'm@t.c', '021234565', 'test autre', 'message comportant plusieurs mots', 0),
(8, 'AUTRE', 'Test', 'a.voir@etc.c', '', 'autre test', 'cf result', 0),
(9, 'PREM', 'Second', 'm@t.c', '0555235612', 'test', 'test and test', 0),
(10, 'AUTRE-TEST', 'Third-one', 'm@t.c', '0555235612', 'test', 'test', 0),
(11, 'RETEST', 'Test', 'm@t.c', '0555235612', 'autre test', 'test pour session', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tvisiteurs`
--
ALTER TABLE `tvisiteurs`
  ADD PRIMARY KEY (`IdVisiteur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tvisiteurs`
--
ALTER TABLE `tvisiteurs`
  MODIFY `IdVisiteur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Index', AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
