-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 25 Octobre 2018 à 17:32
-- Version du serveur :  5.7.23-0ubuntu0.16.04.1
-- Version de PHP :  7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exam_todo`
--

-- --------------------------------------------------------

--
-- Structure de la table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `done` tinyint(1) NOT NULL,
  `id_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `list`
--

INSERT INTO `list` (`id`, `name`, `done`, `id_project`) VALUES
(1, '1st week', 0, 8),
(7, 'fjhf', 0, 11),
(9, 'zertyujk', 0, 12),
(10, 'azertyu', 0, 12);

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `members`
--

INSERT INTO `members` (`id`, `pseudo`, `email`, `pass`, `admin`) VALUES
(1, 'Naudje', 'arnaud.cartailler@gmail.com', '$2y$10$uioQwQAcl4KHiVMrtZ807eiB0/yRt2EPa/0cNjrGCp7hdOZb9ZfSi', 1),
(2, 'toto', 'toto@gmail.com', '$2y$10$AbL5SldIhuW5pjdrpGV3SuqjVDduid46VlEZsvefq8wjk1Q9Ni2L6', 0),
(3, 'manu', 'edessart@outlook.fr', '$2y$10$g/qtf0isemISIa2I4fKAs.ou3eC9zvuIoZ7MjSVo7bck0/Tyfk6e.', 0),
(4, 'balen', 'br.hn@gmail.com', '$2y$10$7RfsWHf9NZ44gGKDhXTKt..0Z2NE2bfVH1G7oU/77m3xIPZXwU0S2', 0),
(5, 'coco', 'coco@gmail.com', '$2y$10$JxsYt./78wHY2B9FYNHb1.BVDAwv8X2EV1BB8BRgC.lOWZQ.yUmve', 0);

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `done` tinyint(1) NOT NULL,
  `id_members` int(11) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `limit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`id`, `name`, `done`, `id_members`, `summary`, `limit_date`) VALUES
(6, 'Go to school', 0, 2, 'Because i\'m stupid', '2018-10-26'),
(7, 'TEST', 0, 3, 'EXPLORER TON CODE', '2018-09-29'),
(8, 'Work of this week', 0, 1, 'continue the work', '2018-10-05'),
(11, 'azert', 0, 4, 'azertyuiop', '2018-10-04'),
(12, 'toto to', 0, 5, 'totototototoo', '2018-10-31');

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_limit` date NOT NULL,
  `done` tinyint(1) NOT NULL,
  `id_list` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `task`
--

INSERT INTO `task` (`id`, `name`, `date_limit`, `done`, `id_list`) VALUES
(1, 'Secure the site', '2018-10-05', 0, 1),
(3, 'bvhnhvb', '2018-10-04', 0, 7),
(5, 'azert', '2018-10-31', 0, 9),
(6, 'azertg', '2018-10-04', 0, 10);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_task` (`id_project`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_members` (`id_members`);

--
-- Index pour la table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_list` (`id_list`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `list`
--
ALTER TABLE `list`
  ADD CONSTRAINT `list_ibfk_1` FOREIGN KEY (`id_project`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`id_members`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`id_list`) REFERENCES `list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
