-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 22 juil. 2023 à 13:21
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
-- Base de données : `teamspace`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `mdp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_ID`, `Nom`, `Prenom`, `mail`, `mdp`) VALUES
(2, 'A', 'A', 'A@gmail.com', 'sky2132.'),
(3, 'H', 'H', 'H@gmail.com', 'sky2132.');

-- --------------------------------------------------------

--
-- Structure de la table `adminserveur`
--

CREATE TABLE `adminserveur` (
  `adm_ser_id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `id_user` int(11) DEFAULT NULL,
  `id_chat` int(11) NOT NULL,
  `incoming_msg_id` int(11) DEFAULT NULL,
  `outgoing_msg_id` int(11) DEFAULT NULL,
  `msg` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id_user`, `id_chat`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(NULL, 4, 358468456, 1459415238, 'cc'),
(NULL, 5, 1459415238, 358468456, 'hi'),
(NULL, 6, 1459415238, 358468456, 'slm'),
(NULL, 7, 358468456, 1459415238, 'slm'),
(NULL, 8, 1459415238, 358468456, 'sdfs'),
(NULL, 9, 358468456, 1459415238, 'salut'),
(NULL, 10, 1459415238, 358468456, 'cv'),
(NULL, 11, 1459415238, 1602090204, 'HI'),
(NULL, 12, 1459415238, 1602090204, 'hi'),
(NULL, 13, 1459415238, 1602090204, 'cv'),
(NULL, 14, 1602090204, 1459415238, 'salut'),
(NULL, 15, 1459415238, 1602090204, 'cc'),
(NULL, 16, 358468456, 1602090204, 'cc'),
(NULL, 17, 1602090204, 358468456, 'hi'),
(NULL, 18, 358468456, 1602090204, 'cv'),
(NULL, 19, 1602090204, 358468456, 'cv lhmdlh'),
(NULL, 20, 1602090204, 0, 'cc'),
(NULL, 21, 1459415238, 1602090204, 'hey'),
(NULL, 22, 1459415238, 1602090204, 'salut'),
(NULL, 23, 358468456, 1602090204, 'salut'),
(NULL, 24, 1602090204, 358468456, 'cv'),
(NULL, 25, 358468456, 1602090204, 'hahah'),
(NULL, 26, 1602090204, 358468456, 'cc');

-- --------------------------------------------------------

--
-- Structure de la table `listenoire`
--

CREATE TABLE `listenoire` (
  `id_lis` int(11) NOT NULL,
  `durée` datetime DEFAULT NULL,
  `ban_reason` text DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `messageprivé`
--

CREATE TABLE `messageprivé` (
  `id_mes` int(11) NOT NULL,
  `id_sal` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `incoming_msg_id` int(11) DEFAULT NULL,
  `outgoin_msg_id` int(11) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `date_envoie` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `salon`
--

CREATE TABLE `salon` (
  `id_sal` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_chat` int(11) DEFAULT NULL,
  `id_serveur` int(11) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `serveur`
--

CREATE TABLE `serveur` (
  `id_serveur` int(11) NOT NULL,
  `admin_ser_id` int(11) NOT NULL,
  `nom_serveur` varchar(50) DEFAULT NULL,
  `date_creation` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `id_se` int(11) NOT NULL,
  `id_serveur` int(11) DEFAULT NULL,
  `date_creation_se` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `Username`, `fname`, `lname`, `email`, `password`, `tel`, `img`, `status`) VALUES
(1, 658049492, '', 'Aymane', 'LAARIDI', 'aymanelaaridi@gmail.com', 'a0f9274e99974f9a1b3e9d8fea191bc6', '', '1676827802skyyy_a_web_developer_working_with_his_laptop_ideas_are_generat_522c6f90-b5c9-4f53-9366-1094f9a06dda.png', 'Offline now'),
(2, 709042199, '', 'sky', 'sky', 'sky@gmail.com', '76d1b39db5034fda3307537b35d1fb88', '', '1676827877501UxLb.png', 'Active now'),
(3, 358468456, '', 'tst', 'tst', 'tst@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '168639535418.png', 'Active now'),
(6, 1459415238, '', 'aymane', 'aymane', 'ayyy@gmail.com', 'd084595bcb7ff757f42ad4a40e36cca2', '', '168649233135.png', 'Active now'),
(7, 1602090204, '', 'Aymane', 'LAARIDI', 'teamspace2023@gmail.com', 'cd0ef3e1db9d4a67d29f2bb99e858e13', '', '168675295222.png', 'Active now');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `unique_id`, `Nom`, `Prenom`, `Username`, `mail`, `mdp`, `tel`, `img`, `status`) VALUES
(1, 0, 'aymane', 'laaridi', 'sky', 'aylaaridi10@gmail.com', 'd084595bcb7ff757f42ad4a40e36cca2', '+212696215756', '', ''),
(2, 0, 'Aymane', 'Aymane', 'AymaneL', 'aymane@gmail.com', 'd084595bcb7ff757f42ad4a40e36cca2', '0696215756', '', ''),
(4, 0, 'marcos', 'asensio', 'asensioma', 'asensioma@gmail.com', '846437aa87823438cdf6965a65511702', '0634265811', '', ''),
(5, 0, 'ay', 'ay', 'ayy', 'ay@gmail.com', 'd084595bcb7ff757f42ad4a40e36cca2', '1019383', '', ''),
(7, 0, 'aymane', 'sky', 'ssky', 'sky@gmail.com', 'd084595bcb7ff757f42ad4a40e36cca2', '38232334', '', ''),
(8, 0, 'IJDSF', 'OJDF', 'POAZED', 'ay@gmail.com', '16f32373dcdc5204a8ba58d241643ae2', '9323', '', ''),
(10, 0, 'ay', 'ay', 'D', 'd@gmail.com', '900bc885d7553375aec470198a9514f3', '9823223', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Index pour la table `adminserveur`
--
ALTER TABLE `adminserveur`
  ADD PRIMARY KEY (`adm_ser_id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `listenoire`
--
ALTER TABLE `listenoire`
  ADD PRIMARY KEY (`id_lis`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `messageprivé`
--
ALTER TABLE `messageprivé`
  ADD PRIMARY KEY (`id_mes`),
  ADD KEY `id_sal` (`id_sal`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`id_sal`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_chat` (`id_chat`),
  ADD KEY `id_serveur` (`id_serveur`);

--
-- Index pour la table `serveur`
--
ALTER TABLE `serveur`
  ADD PRIMARY KEY (`id_serveur`),
  ADD KEY `admin_ser_id` (`admin_ser_id`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id_se`),
  ADD KEY `id_serveur` (`id_serveur`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `adminserveur`
--
ALTER TABLE `adminserveur`
  MODIFY `adm_ser_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `listenoire`
--
ALTER TABLE `listenoire`
  MODIFY `id_lis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messageprivé`
--
ALTER TABLE `messageprivé`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `salon`
--
ALTER TABLE `salon`
  MODIFY `id_sal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `serveur`
--
ALTER TABLE `serveur`
  MODIFY `id_serveur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `id_se` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adminserveur`
--
ALTER TABLE `adminserveur`
  ADD CONSTRAINT `adminserveur_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`);

--
-- Contraintes pour la table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`);

--
-- Contraintes pour la table `listenoire`
--
ALTER TABLE `listenoire`
  ADD CONSTRAINT `listenoire_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`);

--
-- Contraintes pour la table `messageprivé`
--
ALTER TABLE `messageprivé`
  ADD CONSTRAINT `messageprivé_ibfk_1` FOREIGN KEY (`id_sal`) REFERENCES `salon` (`id_sal`),
  ADD CONSTRAINT `messageprivé_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`);

--
-- Contraintes pour la table `salon`
--
ALTER TABLE `salon`
  ADD CONSTRAINT `salon_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`),
  ADD CONSTRAINT `salon_ibfk_2` FOREIGN KEY (`id_chat`) REFERENCES `chat` (`id_chat`),
  ADD CONSTRAINT `salon_ibfk_3` FOREIGN KEY (`id_serveur`) REFERENCES `serveur` (`id_serveur`);

--
-- Contraintes pour la table `serveur`
--
ALTER TABLE `serveur`
  ADD CONSTRAINT `serveur_ibfk_1` FOREIGN KEY (`admin_ser_id`) REFERENCES `adminserveur` (`adm_ser_id`);

--
-- Contraintes pour la table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_ibfk_1` FOREIGN KEY (`id_serveur`) REFERENCES `serveur` (`id_serveur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
