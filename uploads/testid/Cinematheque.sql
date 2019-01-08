-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 03 Décembre 2018 à 14:07
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Cinematheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `Acteurs`
--

CREATE TABLE `Acteurs` (
  `id_acteur` int(11) NOT NULL,
  `acteurs` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `Acteurs`
--

INSERT INTO `Acteurs` (`id_acteur`, `acteurs`) VALUES
(1, 'Mulan'),
(2, 'Mushu'),
(3, 'Keanu Reeves'),
(4, 'Simba'),
(5, 'Muphasa'),
(6, 'Baloo'),
(7, 'Bagheera'),
(8, 'Aladdin'),
(9, 'Génie'),
(10, 'Emma Watson'),
(11, 'Daniel Radcliff'),
(12, 'Anthony hopkins'),
(13, 'Edward Norton'),
(14, 'Leonardo Di Caprio'),
(15, 'Ellen Page'),
(16, ' Yann Arthus-Bertrand'),
(17, 'Patrick Swayze'),
(18, 'Shang'),
(30, 'Eddie Redmayne'),
(31, 'Carrie Ann Moss');

-- --------------------------------------------------------

--
-- Structure de la table `acteurs_films`
--

CREATE TABLE `acteurs_films` (
  `id_film` int(11) NOT NULL,
  `id_acteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `acteurs_films`
--

INSERT INTO `acteurs_films` (`id_film`, `id_acteur`) VALUES
(3, 1),
(3, 2),
(5, 3),
(6, 4),
(6, 5),
(2, 6),
(2, 7),
(1, 8),
(1, 9),
(8, 10),
(8, 11),
(4, 12),
(4, 13),
(9, 14),
(9, 15),
(7, 16),
(5, 17),
(3, 18),
(10, 30),
(11, 31);

-- --------------------------------------------------------

--
-- Structure de la table `Films`
--

CREATE TABLE `Films` (
  `id_film` int(255) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_bin NOT NULL,
  `annee_sortie` year(4) DEFAULT NULL,
  `id_realisateur` int(11) DEFAULT NULL,
  `Url_BA` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `Url_pic` varchar(1000) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `Films`
--

INSERT INTO `Films` (`id_film`, `titre`, `description`, `annee_sortie`, `id_realisateur`, `Url_BA`, `Url_pic`) VALUES
(1, 'Aladdin', 'Le jeune et pauvre Aladdin vit avec son singe Abu dans les rues et est obligé de voler des aliments pour se nourrir. Un jour, il fait la connaissance de la princesse Jasmine, fille du Sultan, venue se promener incognito dans les quartiers populaires, à la recherche d\'aventure. Entre les deux jeunes gens, le coup de foudre est immédiat. Mais ils sont rapidement rattrapés par les gardes du sultan.', 1995, 1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eTjHiQKJUDY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<img class=\"affiche\" style=\"max-width:300px\" src=\"http://fr.web.img5.acsta.net/pictures/16/06/06/09/31/004115.jpg\">'),
(2, 'Le Livre de la Jungle', 'Le retour dans la jungle du tigre Shere Khan inquiète les loups. Le félin mangeur d\'hommes risque de s\'attaquer à Mowgli, l\'enfant qu\'ils ont recueilli et élevé. La panthère Bagheera, sa protectrice, décide donc de ramener le jeune garçon chez les siens, parmi lesquels il sera en sécurité. Mowgli, quant à lui, n\'a aucune envie de quitter la jungle et suit Bagheera à contre-coeur.', 1968, 1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/LNVTKXIK7q8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<img class=\"affiche\" src=\"https://cdn20.pamono.com/p/g/2/1/219498_45wmne9i5y/affiche-the-jungle-book-1967-1.jpg\"/>'),
(3, 'Mulan', 'Mulan est une belle jeune fille qui vit dans un village chinois. Malgré son amour et son respect pour sa famille, son mépris des conventions l\'éloigne des rôles dévolus aux filles devouées. Quand son pays est envahi par les Huns, Mulan, n\'écoutant que son courage, s\'engage à la place de son père dans le but de lui sauver la vie. Elle va devenir, avec l\'aide d\'un dragon en quète de réhabilitation, un guerrier hors du commun. ', 1998, 1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/MsAniqGowKE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<img class=\"affiche\" src=\"http://www.univers-l.com/wpuniversl/wp-content/uploads/2006/05/mulan.jpg\"/>'),
(4, 'Dragon Rouge', 'Serie de films : Hannibal Lecter Voila trois ans que Will Graham a arrete le docteur Hannibal Lecter. Il vit desormais paisiblement avec son epouse et leur fils en Floride. Profondement marque par sa rencontre avec Hannibal Will a prefere demissionner du FBI. Il reçoit bientot la visite de son ancien directeur qui lui demande de l\'aider a arreter un tueur en serie connu sous le nom de la petite souris qui a deja assassine deux familles durant des nuits de pleine lune.', 2010, 7, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eoCtVUfCmdA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<img class=\"affiche\" src=\"https://static.films-horreur.com/2015/06/7SZV4vyIwEfVjcpwVbpBck5Iyaf.jpg\"/>'),
(5, 'Point Break', 'Johnny Utah un jeune agent du FBI est charge d\'infiltrer un groupe de surfeurs surnommes les ex-presidents car ils sont soupçonnes de commettre de multiples cambriolages dans la region de Los Angeles. Il s\'initie rapidement au surf et decouvre que les sportifs vivent en cercle ferme. Il parvient a se faire accepter et fait bientot la connaissance de Bodhi le maitre a penser du groupe qui ne cherche qu\'une chose : la vague extreme.', 1991, 2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0hd49bnStgU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<img class=\"affiche\" src=\"http://fr.web.img5.acsta.net/medias/nmedia/18/35/49/59/18467401.jpg\"/>'),
(6, 'Le Roi Lion', 'Le fils du roi des animaux vient de naitre. Son oncle est jaloux car il aimerait lui aussi regner. Il invente une ruse qui aboutira sur la mort du roi. Le jeune fils Simba temoin de la mort de son pere et s\'en croyant responsable va fuir sa horde.', 1994, 3, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/hY7xBISLBIA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<img class=\"affiche\" src=\"https://images-na.ssl-images-amazon.com/images/I/51EA1RHQP3L._SY445_.jpg\"/>'),
(7, 'Home', 'Home est un film documentaire exprimant ce qui lie l’homme a la terre et son impact.', 2009, 4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/GItD10Joaa0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<img class=\"affiche\" src=\"http://fr.web.img5.acsta.net/r_1280_720/medias/nmedia/18/66/64/54/19085580.jpg\"/>'),
(8, 'Harry Potter et les reliques de la mort', 'Le denouement des aventures du jeune sorcier commences sept editions plus tot approche. Plus terrifiant et puissant que jamais Voldemort accompagne de ses fideles servants les Mangemorts controle quasiment l\'ensemble du monde des sorciers', 2010, 5, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TtOHsprO25g\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<img class=\"affiche\" src=\"http://images.cinefil.com/movies/1050243_196x294.jpg\">'),
(9, 'Inception', ' Dom Cobb est un voleur experimente dans l\'art perilleux de l\'extraction : sa specialite consiste a s\'approprier les secrets les plus precieux d\'un individu enfouis au plus profond de son subconscient pendant qu\'il reve et que son esprit est particulièrement vulnérable.', 2010, 6, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/YoHD9XEInc0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<img class=\"affiche\" src=\"https://images-na.ssl-images-amazon.com/images/I/61Ug%2BK8o5FL.jpg\"/>'),
(10, 'Les Crimes de Grindenwald', '1927. Quelques mois après sa capture, le célèbre sorcier Gellert Grindelwald s\'évade comme il l\'avait promis et de façon spectaculaire. Réunissant de plus en plus de partisans, il est à l\'origine d\'attaque d\'humains normaux par des sorciers et seul celui qu\'il considérait autrefois comme un ami, Albus Dumbledore, semble capable de l\'arrêter. Mais Dumbledore va devoir faire appel au seul sorcier ayant déjoué les plans de Grindelwald auparavant : son ancien élève Norbert Dragonneau. L\'aventure qui les attend réunit Norbert avec Tina, Queenie et Jacob, mais cette mission va également tester la loyauté de chacun face aux nouveaux dangers qui se dressent sur leur chemin, dans un monde magique plus dangereux et divisé que jamais. ', 2018, 42, '<iframe width=\"560\" height=\"315\" src=\"http://player.allocine.fr/19580378.html\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<img class=\"affiche\" style=\"max-width:300px\" src=\"http://fr.web.img6.acsta.net/c_215_290/pictures/18/10/10/11/16/4794693.jpg\"/>'),
(11, 'Matrix', 'Enter the Matrix', 1999, 43, '<iframe width=\"560\" height=\"315\" src=\"http://player.allocine.fr/19578569.html\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '<img class=\"affiche\" style=\"max-width:300px\" src=\"https://media.senscritique.com/media/000012094565/source_big/Matrix.jpg\"/>');

-- --------------------------------------------------------

--
-- Structure de la table `films_genres`
--

CREATE TABLE `films_genres` (
  `id_genre` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `films_genres`
--

INSERT INTO `films_genres` (`id_genre`, `id_film`) VALUES
(3, 1),
(3, 2),
(6, 2),
(3, 3),
(6, 3),
(7, 3),
(1, 4),
(2, 4),
(2, 5),
(7, 5),
(3, 6),
(4, 7),
(6, 8),
(2, 9),
(6, 9),
(7, 9),
(51, 10),
(52, 11);

-- --------------------------------------------------------

--
-- Structure de la table `Genres`
--

CREATE TABLE `Genres` (
  `id_genre` int(11) NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `Genres`
--

INSERT INTO `Genres` (`id_genre`, `genre`) VALUES
(1, 'horreur'),
(2, 'policier'),
(3, 'dessin-animé'),
(4, 'documentaire'),
(5, 'science-fiction'),
(6, 'fantastique'),
(7, 'action'),
(51, 'fantastique'),
(52, 'Science-fiction');

-- --------------------------------------------------------

--
-- Structure de la table `Realisateurs`
--

CREATE TABLE `Realisateurs` (
  `id_realisateur` int(11) NOT NULL,
  `realisateur` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Contenu de la table `Realisateurs`
--

INSERT INTO `Realisateurs` (`id_realisateur`, `realisateur`) VALUES
(1, 'Disney'),
(2, 'Kathryn Bigelow'),
(3, 'Rob Minkoff et Roger Allers'),
(4, 'Luc besson'),
(5, 'David Yates'),
(6, 'Christopher Nolan'),
(7, 'Brett Ratner'),
(42, 'David Yates'),
(43, 'Wachowski Bro/Sis');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Acteurs`
--
ALTER TABLE `Acteurs`
  ADD PRIMARY KEY (`id_acteur`);

--
-- Index pour la table `acteurs_films`
--
ALTER TABLE `acteurs_films`
  ADD PRIMARY KEY (`id_film`,`id_acteur`),
  ADD KEY `acteurs_films_Acteurs0_FK` (`id_acteur`);

--
-- Index pour la table `Films`
--
ALTER TABLE `Films`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `Films_Realisateurs_FK` (`id_realisateur`);

--
-- Index pour la table `films_genres`
--
ALTER TABLE `films_genres`
  ADD PRIMARY KEY (`id_genre`,`id_film`),
  ADD KEY `films_genres_Films0_FK` (`id_film`);

--
-- Index pour la table `Genres`
--
ALTER TABLE `Genres`
  ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `Realisateurs`
--
ALTER TABLE `Realisateurs`
  ADD PRIMARY KEY (`id_realisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Acteurs`
--
ALTER TABLE `Acteurs`
  MODIFY `id_acteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `Films`
--
ALTER TABLE `Films`
  MODIFY `id_film` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `Genres`
--
ALTER TABLE `Genres`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT pour la table `Realisateurs`
--
ALTER TABLE `Realisateurs`
  MODIFY `id_realisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `acteurs_films`
--
ALTER TABLE `acteurs_films`
  ADD CONSTRAINT `acteurs_films_Acteurs0_FK` FOREIGN KEY (`id_acteur`) REFERENCES `Acteurs` (`id_acteur`),
  ADD CONSTRAINT `acteurs_films_Films_FK` FOREIGN KEY (`id_film`) REFERENCES `Films` (`id_film`);

--
-- Contraintes pour la table `films_genres`
--
ALTER TABLE `films_genres`
  ADD CONSTRAINT `films_genres_Films0_FK` FOREIGN KEY (`id_film`) REFERENCES `Films` (`id_film`),
  ADD CONSTRAINT `films_genres_Genres_FK` FOREIGN KEY (`id_genre`) REFERENCES `Genres` (`id_genre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
