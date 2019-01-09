-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 09 Janvier 2019 à 16:27
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `data_wetransfer`
--

-- --------------------------------------------------------

--
-- Structure de la table `wetransfer`
--

CREATE TABLE `wetransfer` (
  `id` int(11) NOT NULL,
  `uniqid` varchar(255) DEFAULT NULL,
  `nom_exp` varchar(255) DEFAULT NULL,
  `destinataire` varchar(255) DEFAULT NULL,
  ` expediteur` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `chemin_local` varchar(255) DEFAULT NULL,
  `chemin_absolu` varchar(255) DEFAULT NULL,
  `nomDossier` varchar(255) DEFAULT NULL,
  `date_ajout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `wetransfer`
--

INSERT INTO `wetransfer` (`id`, `uniqid`, `nom_exp`, `destinataire`, ` expediteur`, `message`, `chemin_local`, `chemin_absolu`, `nomDossier`, `date_ajout`) VALUES
(1, NULL, '', '', '', '', NULL, NULL, NULL, '2019-01-08'),
(2, NULL, '', '', '', '', NULL, NULL, NULL, '2019-01-08'),
(3, NULL, '', '', '', '', NULL, NULL, NULL, '2019-01-08'),
(4, NULL, 'coucou', 'coucou', 'coucou', 'coucou', NULL, NULL, NULL, '2019-01-08'),
(5, NULL, 'gfd', 'gfd', 'gfdsfd', 'klmù', 'uploads/hjklmù', NULL, NULL, '2019-01-08'),
(6, NULL, 'gfd', 'gfd', 'gfdsfd', 'klmù', 'uploads/hjklmù', NULL, NULL, '2019-01-08'),
(7, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(8, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(9, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(10, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(11, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(12, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(13, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(14, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(15, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(16, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(17, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(18, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(19, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(20, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(21, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(22, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(23, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(24, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/titi', NULL, NULL, '2019-01-08'),
(25, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/toto', NULL, NULL, '2019-01-08'),
(26, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/tata', NULL, NULL, '2019-01-08'),
(27, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/zazazz', NULL, NULL, '2019-01-08'),
(28, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/zazazz', NULL, NULL, '2019-01-08'),
(29, NULL, 'titi', 'titi', 'ttiti', 'titi', 'uploads/zazazz', NULL, NULL, '2019-01-08'),
(30, '5c34bb32f1429', 'titi', 'titi', 'ttiti', 'titi', 'uploads/zazazz', NULL, NULL, '2019-01-08'),
(31, '5c34c0addb837', 'titi', 'titi', 'ttiti', 'titi', 'uploads/zazazz', NULL, NULL, '2019-01-08'),
(32, '5c34c16b36f8c', 'camembert', 'camembert', 'camembert', 'cambembert', 'uploads/camembert', NULL, NULL, '2019-01-08'),
(33, '5c34c76418679', '', '', '', '', 'uploads/flex', NULL, NULL, '2019-01-08'),
(34, '5c34c823e9e12', '', '', '', '', 'uploads/tyurieo', NULL, NULL, '2019-01-08'),
(35, '5c35ba1107e65', 'Herself', 'arrias.aleth@gmail.com', 'arrias.aleth@gmial.com', 'Voici un test de sending de mail avec PHP mailer.', 'uploads/testmail', NULL, NULL, '2019-01-09'),
(36, '5c35ba4b4e09c', 'Herself', 'arrias.aleth@gmail.com', 'arrias.aleth@gmial.com', 'Voici un test de sending de mail avec PHP mailer.', 'uploads/ehellloooooow', NULL, NULL, '2019-01-09'),
(37, '5c35eec8186fa', 'grez', 'rfezda', 'grefz', 'prout', 'uploads/onsenfou', NULL, NULL, '2019-01-09'),
(38, '5c35ef552bb79', 'grez', 'rfezda', 'grefz', 'prout', 'uploads/onsenfou', NULL, NULL, '2019-01-09'),
(39, '5c35f04ecf9c5', 'prout', 'proutprout', 'prout', 'oucou', 'uploads/proutestsuppressiondossier', NULL, NULL, '2019-01-09'),
(40, '5c35f09be8dbb', 'prout', 'proutp?page=confirmationrou', 'prout', 'coucouuuu', 'uploads/testsupp', NULL, NULL, '2019-01-09'),
(41, '5c35f176b4e1e', 'prout', 'proutp?page=confirmationrou', 'prout', 'coucouuuu', 'uploads/testsupp', NULL, NULL, '2019-01-09'),
(42, '5c35f181a5aaa', 'prout', 'proutp?page=confirmationrou', 'prout', 'coucouuuu', 'uploads/testsupp', NULL, NULL, '2019-01-09'),
(43, '5c35f1f6e2020', 'Alain', 'onsenfou', 'onsenfou', 'onsenfouencoreplus  ', 'uploads/onsenfouaussi', NULL, NULL, '2019-01-09'),
(44, '5c35f32fcd1ff', 'Alain', 'onsenfou', 'onsenfou', 'onsenfouencoreplus  ', 'uploads/onsenfouaussi', NULL, NULL, '2019-01-09'),
(45, '5c35f34a79408', 'fdsfs', 'refd', 'ffds', 'dossyeah', 'uploads/dossyeah', NULL, NULL, '2019-01-09'),
(46, '5c35f36316d8e', 'fdsfs', 'refd', 'ffds', 'dossyeah', 'uploads/rootpatch', NULL, NULL, '2019-01-09'),
(47, '5c35f5f5d7df9', 'fdsfs', 'refd', 'ffds', 'dossyeah', 'uploads/rootpatch', NULL, NULL, '2019-01-09'),
(48, '5c35f6059d828', 'fdsfs', 'refd', 'ffds', 'dossyeah', 'uploads/rootpatch', NULL, NULL, '2019-01-09');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `wetransfer`
--
ALTER TABLE `wetransfer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `wetransfer`
--
ALTER TABLE `wetransfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
