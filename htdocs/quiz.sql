-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Mar 19, 2021 at 01:57 PM
-- Server version: 10.5.8-MariaDB-1:10.5.8+maria~focal
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `bonneReponse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `bonneReponse`) VALUES
(1, 'Quelle est la capitale de la Nouvelle-Zélande ?', 'Auckland', 'Wellington', 'Queenstown', 'Christchurch', 'Wellington'),
(2, 'Quels corps céleste est un satellite naturel de Mars ?', 'Makémaké', 'Eris', 'Deimos', 'Sedna', 'Deimos'),
(3, 'Quel fût le premier album du groupe de Nu metal Linkin Park ?', 'Hybrid Theory', 'Meteora', 'Minutes To Midnight', 'Reanimation', 'Hybrid Theory'),
(4, 'Où s\'est déroulée la finale de la Coupe des clubs champions en 1976 ?', 'Old Trafford à Manchester (Angleterre)', 'Weserstadion à Brême (Allemagne)', 'Camp Nou à Barcelone (Espagne)', 'Hampden Park à Glasgow (Écosse)', 'Hampden Park à Glasgow (Écosse)'),
(5, 'Comment s\'appelle le boss final du jeu vidéo \"The Legend of Zelda: Majora\'s Mask\" ?', 'Ganon', 'Skull Kid', 'Majora', 'Girahim', 'Majora'),
(6, 'Quelle est la valeur arrondie de Pi ?', '3.65', '2.71', '1.56', '3.14', '3.14'),
(7, 'Quel groupe de musique est le premier et le seul à avoir joué sur les 7 continents (en comptant l\'Antarctique) ?', 'Metallica', 'Police', 'Blue Öyster Cult', 'Coldplay', 'Metallica'),
(8, 'En gastronomie, qu\'est-ce que le Barolo ?', 'Un piment mexician', 'Un fromage espagnol', 'Un vin italien', 'Un plat à tarte gascon', 'Un vin italien'),
(9, 'Quel rover a atterri sur la planète Mars le 18 février 2021 ?', 'Perseverance', 'Curiosity', 'Opportunity', 'Odyssey', 'Perseverance'),
(10, 'De quel jeu vidéo la chanson Korobeiniki a-t-elle inspiré le thème principal ?', 'Pac-Man', 'The Last of US', 'Tetris', 'Skyrim', 'Tetris'),
(11, 'Quel était le nom de l\'épée portée par le chevalier Roland dit \"Le Preux\" ?', 'Excalibur', 'Durandal', 'Flamberge', 'Hauteclaire', 'Durandal'),
(12, 'Dans la mythologie nordique, en quelle matière était fabriquée le bâton que Loki utilisa pour tuer Baldr, le dieu de la lumière ?', 'En ébène', 'En bronze', 'En argile', 'En gui', 'En gui'),
(13, 'Dans quelle série l\'agent du FBI Olivia Dunham enquête-t-elle sur des affaires paranormales au côté du Dr Walter Bishop et de son fils Peter Bishop ?', 'X-Files', 'Warehouse 13', 'Supernatural', 'Fringe', 'Fringe'),
(14, 'Quel pays a offert la statue de la liberté aux Etats-Unis ?', 'Allemagne', 'France', 'Grande-Bretagne', 'Suisse', 'France'),
(15, 'Qui est le compositeur de l\'Ode à la joie, dont la mélodie symbolise l\'Union européenne ?', 'Mozart', 'Bach', 'Beethoven', 'Lully', 'Beethoven'),
(16, 'Combien y a-t-il de signes astrologiques chinois ?', '9', '10', '11', '12', '12'),
(17, 'Qui a été assassiné dans sa baignoire ?', 'Coluche', 'Jean-Paul Marat', 'Maradonna', 'Lionel Jospin', 'Jean-Paul Marat'),
(18, 'Quel est le surnom de la ville de New-York ?', 'The Big Apple', 'The Eternal City', 'The Pearl of the Atlantic', 'The Uncanny City', 'The Big Apple'),
(19, 'Quel acteur a remporté l\'Oscar du meilleur acteur pour les films Philadelphie (1993) et Forrest Gump (1994)?', 'Michel Blanc', 'Robert de Niro', 'Tom Hanks', 'Bill Murray', 'Tom Hanks'),
(20, 'Quelle ancienne actrice de Doctor Who a joué le rôle de Nebula dans \'Avengers: Infinity War\'?', 'Karen Gillan', 'Ellen Page', 'Jenna Coleman', 'Lily Collins', 'Karen Gillan'),
(21, 'Dans quel film Hugh Jackman a-t-il joué le rôle d\'un magicien rival du personnage joué par Christian Bale?', 'Insaisissables', 'Le Prestige', 'The Greatest Show', 'The Machinist', 'Le Prestige'),
(22, 'Quel film avec Chris Hemsworth et Daniel Brühl, retrace la rivalité de James Hunt et Niki Lauda en formule 1?', 'Flash', 'The Duel', 'Speed', 'Rush', 'Rush'),
(23, 'Quel rocker a composé la musique du générique du dessin animé \"Les Zinzins de l\'Espace\" ?', 'Ozzy Osbourne', 'Iggy Pop', 'Lemmy Kilmister', 'Carlos Santana', 'Iggy Pop'),
(24, 'Quel acteur américain a joué aux côtés de Kim Basinger dans le film \"9 semaines 1/2\" ?', 'Mickey Rourke', 'Al Paccino', 'Johnny Depp', 'Tom Cruise', 'Mickey Rourke'),
(25, 'De quelle chanson \"My Way\" est-elle une reprise ?', 'Pour toi', 'L`été indien', 'Laisse moi t`aimer', 'Comme d`habitude', 'Comme d`habitude'),
(26, 'Dans quel film Leonardo Di Caprio interprète-t-il le rôle d\'un mystérieux magnat des affaires qui organise souvent des soirées extravagantes ?', 'André le Magnifique', 'Michel le Magicien', 'Gatsby le Magnifique', 'Dodo la Saumure', 'Gatsby le Magnifique'),
(27, 'Quel est le nom du groupe avec les membres suivants: John Deacon, Brian May, Freddie Mercury, Roger Taylor?', 'The Beatles', 'Pink Floyd', 'Queen', 'Dire Straits', 'Queen'),
(28, 'En quelle année les Beatles se sont-ils rendus aux États-Unis pour la première fois?', '1964', '1962', '1965', '1961', '1964'),
(29, 'Quel artiste a créé «Campbell\'s Soup Cans» en 1962?', 'Andy Warhol', 'Salvador Dali', 'Pablo Picasso', 'Henry Moore', 'Andy Warhol'),
(30, 'Quel a été le premier film de Bond à sortir sur les écrans en 1962 avec Sean Connery jouant 007?', 'Goldfinger', 'Opération Tonnerre', 'Vivre et laisser mourir', 'James Bond 007 contre Dr No', 'James Bond 007 contre Dr No'),
(31, 'En quelle année le Titanic a-t-il coulé dans l\'océan Atlantique le 15 avril, lors de son premier voyage au départ de Southampton?', '1911', '1912', '1913', '1910', '1912'),
(32, 'Dans la version française de \"South Park\", quel comédien double le personnage d\'Eric Cartman ?', 'Christophe Lemoine', 'Donald Reignoux', 'Jacques Frantz', 'Patrick Poivey', 'Christophe Lemoine'),
(33, 'En parler gaga, qu\'est-ce qu\'un babet ?', 'Une crotte de nez', 'Un pigeon', 'Une pomme de pin', 'Une casserole', 'Une pomme de pin'),
(34, 'Qui c\'est les plus forts ?', 'Les guignols de Lyon', 'Les nuls de Marseille', 'Les saucisses de Strasbourg', 'Evidemment, c`est les verts !', 'Evidemment, c`est les verts !'),
(35, 'De quel pays le goulash est-il originaire ?', 'Bulgarie', 'Roumanie', 'Hongrie', 'Ukraine', 'Hongrie'),
(36, 'Quel inventeur fût le premier à déposer le brevet de la carte à puce en 1974 ?', 'Roland Moreno', 'Helmut Gröttrup', 'Jürgen Dethloff', 'Michel Ugon', 'Roland Moreno'),
(37, 'Quel pays ne fait PAS partie des pays africains de langue officielle portugaise (PALOP) ?', 'L`Angola', 'Le Mozambique', 'La Guinée-Bissau', 'La Zambie', 'La Zambie'),
(38, 'Quel fût la toute première console de jeu, commercialisée en 1972 ?', 'L`Atari 2600', 'La Magnavox Odyssey', 'La Coleco Telstar', 'La Bally Astrocade', 'La Magnavox Odyssey'),
(39, 'Quel est l\'album de musique le plus vendu de tous les temps ?', 'Bat Out of Hell', 'Back in Black', 'Thriller', 'The Dark Side of the Moon', 'Thriller'),
(40, 'Quel est le cocktail préféré du Big Lebowski ?', 'Le Russe Blanc', 'Le Cosmopolitan', 'Le Tequila Sunrise', 'Le Cuba libre', 'Le Russe Blanc'),
(41, 'Combien y a t-il d\'Horcruxes dans Harry Potter ?', '4', '9', '7', '6', '7'),
(42, 'Qu`est ce qu`un serf ?', 'Un esclave', 'Ca s`écrit avec un C', 'Un stagiaire', 'Une grosse bête', 'Un esclave'),
(43, 'Qui prononce cette phrase dans le film Fight Club ``Les choses que l`on possède finissent par nous posséder``  ?', 'Brad Pitt', 'Edward Norton', 'Meat Loaf', 'Jared Leto', 'Brad Pitt'),
(44, 'Comment s`appelle le loup de Jon Snow ?', 'Croc-Blanc', 'Snoopy', 'Drogon', 'Fantôme', 'Fantôme'),
(45, 'Qui fume sur un champignon devant Alice ?', 'Une abeille', 'Un ver', 'Un papillon', 'Une chenille', 'Une chenille'),
(46, 'Comment s`appelle le hibou de Merlin ?', 'Archimède', 'Pythagore', 'Nostradamus', 'Galilée', 'Archimède'),
(47, 'Quel studio a réalisé le dessin animé Le Voyage De Chihiro ?', 'Studio Fantasia', 'Kyoto Animation', 'Studio Ghibli', 'Toei Animation', 'Studio Ghibli'),
(48, 'Dans Kaamelott, qui est à l`origine du ``c`est pas faux`` ?', 'Arthur', 'Karadoc', 'Perceval', 'Bohort', 'Karadoc');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id` int(11) NOT NULL,
  `id_pseudo` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `id_pseudo`, `score`) VALUES
(3, 1, 44),
(28, 6, 4),
(29, 6, 8),
(30, 6, 20),
(33, 1, 12),
(34, 7, 24),
(35, 5, 40),
(36, 12, 18),
(39, 12, 8),
(40, 12, 20),
(42, 5, 4),
(43, 5, 4),
(44, 5, 12),
(48, 6, 0),
(49, 5, 8),
(50, 5, 24),
(51, 5, 24),
(52, 5, 52),
(53, 5, 20),
(54, 1, 40);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `id_questions` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `id_questions`) VALUES
(1, 'Lelou', ''),
(5, 'Jean', ''),
(6, 'Ronan', ''),
(7, 'Antho', ''),
(12, 'Max', ''),
(13, 'Basile', ''),
(14, 'Juju', ''),
(15, 'Florencia', ''),
(16, 'Romain', ''),
(17, 'Hamza', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_UserScore` (`id_pseudo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `FK_UserScore` FOREIGN KEY (`id_pseudo`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
