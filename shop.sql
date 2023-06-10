-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 10 juin 2023 à 14:53
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `email`, `mdp`) VALUES
(1, 'admin', 'admin@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `produit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `panier` int(11) NOT NULL,
  `total` float NOT NULL,
  `date_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `produit`, `quantite`, `panier`, `total`, `date_creation`) VALUES
(52, 21, 2, 22, 550, '2023-06-05'),
(53, 21, 3, 22, 825, '2023-06-05'),
(54, 21, 2, 23, 550, '2023-06-05'),
(55, 21, 3, 23, 825, '2023-06-05'),
(56, 23, 2, 24, 2000, '2023-06-06'),
(57, 21, 3, 25, 825, '2023-06-06');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `visiteur` int(11) NOT NULL,
  `total` float NOT NULL,
  `etat` varchar(55) NOT NULL DEFAULT 'en cours',
  `date_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `visiteur`, `total`, `etat`, `date_creation`) VALUES
(22, 7, 1375, 'en livraison', '2023-06-05'),
(23, 7, 1375, 'en livraison', '2023-06-05'),
(24, 7, 2000, 'en cours', '2023-06-06'),
(25, 7, 825, 'en cours', '2023-06-06');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `createur` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `date_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `description`, `prix`, `createur`, `image`, `stock`, `date_creation`) VALUES
(21, 'table', 'table en bois dimension 100/50mértes', 275, 0, 'table.jpg', 12, '2023-05-30'),
(22, 'chaise', 'chaise confortable  du couleur blanc ', 80, 0, 'chaise.jpg', 15, '2023-05-30'),
(23, 'table a manger', 'une grande table a manger accompagné par 8 chaises', 1000, 1, 'salleamanger.jpg', 10, '2023-05-30');

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE `visiteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `mdp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `visiteur`
--

INSERT INTO `visiteur` (`id`, `nom`, `email`, `prenom`, `mdp`) VALUES
(2, 'hgetr', 'siwarskandrani@gmail', 'reh', 'trhrthrthrthtr'),
(3, 'gerher', 'siwarskandrani@gmail', 'hjkmml', 'trhrthrthrthtr'),
(4, 'gerher', 'siwarskandrani@gmail', 'hjkmml', 'trhrthrthrthtr'),
(5, 'ahmed', 'ahmed@gmail.com', 'bfd', '123456789'),
(6, 'Ahmed', 'ahmed@gmail.com', 'Sayadi', '123456789'),
(7, 'bibo', 'bibo@gmail.com', 'azed', 'trhrthrthrthtr'),
(9, '', '', '', 'trhrthrthrthtr'),
(10, 'htrt', 'bibo@gmail', 'htrtrhtr', 'trhrthrthrthtr'),
(11, 'ege', 'bibo@gmail', 'hbrdhbrs', 'trhrthrthrthtr'),
(12, 'ntdfnd', 'bibo@gmail', 'ngfnd', 'trhrthrthrthtr'),
(13, 'ntdfnd', 'fgnfnr@jtyrjntr', 'ngfnd', 'ntrjnrtg'),
(14, 'bdbhd', 'gbee@hntn', 'nrenher', 'trhrthrthrthtr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `visiteur`
--
ALTER TABLE `visiteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
