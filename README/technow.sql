-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Client :  sql3.cluster1.easy-hebergement.net
-- Généré le :  Dim 06 Mars 2016 à 23:29
-- Version du serveur :  5.5.47-0+deb7u1-log
-- Version de PHP :  5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `my_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `shortContent` text NOT NULL,
  `content` text NOT NULL,
  `articleDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `articleTime` time NOT NULL,
  `author` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `shortContent`, `content`, `articleDate`, `articleTime`, `author`) VALUES
(42, 'Mon premier article', 'Voici mon premier article sur ce blog<br>', 'Bonjour Ã  tous,<br><br>Je suis content aujourd''hui de partager ma petite journÃ©e avec vous.<br><br>Alors aujourd''hui il a fait vraiment chaud sÃ©rieux c''Ã©tait un four ici !<br><br>Aller Ã  demain !<br>', '2016-03-06 21:36:10', '22:36:10', 'Paul'),
(48, 'Mon deuxiÃ¨me article<br>', 'Et voici mon second article :P<br>', 'Salut salut, <br><br>Voici mon nouvel article !<br><br>C''Ã©tait pour vous dire que je joue Ã  beaucoup de jeux, et que si vous le souhaitez vous pouvez m''ajouter !<br>', '2016-03-06 21:45:13', '22:45:13', 'Paul'),
(49, 'Lorem Ipsum<br>', 'C''est quoi le Lorem Ipsum<br>', 'Salut tout le monde !<br><br>Beaucoup de monde se demande ce qu''est vraiment le Lorem Ipsum !<br><br>J''invite tout ceux qui ont des informations Ã  les partager Ã§a serait super sympa !<br>', '2016-03-06 21:49:08', '22:49:08', 'Elsa'),
(50, 'Qu''est-ce-que le Lorem Ipsum<br>', 'Le <b>Lorem Ipsum</b> est simplement du faux texte employÃ© dans la composition et la mise en page avant impression.', 'Le Lorem Ipsum est le faux texte standard de l''imprimerie depuis les annÃ©es 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour rÃ©aliser un livre spÃ©cimen de polices de texte. Il n''a pas fait que survivre cinq siÃ¨cles, mais s''est aussi adaptÃ© Ã  la bureautique informatique, sans que son contenu n''en soit modifiÃ©. Il a Ã©tÃ© popularisÃ© dans les annÃ©es 1960 grÃ¢ce Ã  la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus rÃ©cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.<br><br><hr>D''ou vient-il ?<br><hr><br><p>Contrairement Ã  une opinion rÃ©pandue, le Lorem Ipsum n''est pas simplement du texte alÃ©atoire. Il trouve ses racines dans une oeuvre de la littÃ©rature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s''est intÃ©ressÃ© Ã  un des mots latins les plus obscurs, consectetur, extrait d''un passage du Lorem Ipsum, et en Ã©tudiant tous les usages de ce mot dans la littÃ©rature classique, dÃ©couvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" (Des SuprÃªmes Biens et des SuprÃªmes Maux) de CicÃ©ron. Cet ouvrage, trÃ¨s populaire pendant la Renaissance, est un traitÃ© sur la thÃ©orie de l''Ã©thique. Les premiÃ¨res lignes du Lorem Ipsum, "Lorem ipsum dolor sit amet...", proviennent de la section 1.10.32.</p><p>L''extrait standard de Lorem Ipsum utilisÃ© depuis le XVIÃ¨ siÃ¨cle est reproduit ci-dessous pour les curieux. Les sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" de CicÃ©ron sont aussi reproduites dans leur version originale, accompagnÃ©e de la traduction anglaise de H. Rackham (1914).</p><p><br></p><hr><p>Pourquoi l''utiliser ?</p><p><br></p><p><br></p><hr><p><br></p><p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empÃªche de se concentrer sur la mise en page elle-mÃªme. L''avantage du Lorem Ipsum sur un texte gÃ©nÃ©rique comme ''Du texte. Du texte. Du texte.'' est qu''il possÃ¨de une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du franÃ§ais standard. De nombreuses suites logicielles de mise en page ou Ã©diteurs de sites Web ont fait du Lorem Ipsum leur faux texte par dÃ©faut, et une recherche pour ''Lorem Ipsum'' vous conduira vers de nombreux sites qui n''en sont encore qu''Ã  leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d''y rajouter de petits clins d''oeil, voire des phrases embarassantes).</p><p><br></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><hr>Ou peut-on s''en procurer ?<hr><p>&nbsp;Plusieurs variations de Lorem Ipsum peuvent Ãªtre trouvÃ©es ici ou lÃ , mais la majeure partie d''entre elles a Ã©tÃ© altÃ©rÃ©e par l''addition d''humour ou de mots alÃ©atoires qui ne ressemblent pas une seconde Ã  du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez Ãªtre sÃ»r qu''il n''y a rien d''embarrassant cachÃ© dans le texte. Tous les gÃ©nÃ©rateurs de Lorem Ipsum sur Internet tendent Ã  reproduire le mÃªme extrait sans fin, ce qui fait de lipsum.com le seul vrai gÃ©nÃ©rateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour gÃ©nÃ©rer un Lorem Ipsum irrÃ©prochable. Le Lorem Ipsum ainsi obtenu ne contient aucune rÃ©pÃ©tition, ni ne contient des mots farfelus, ou des touches d''humour.</p><b><b><p><br></p><p><br></p></b></b>', '2016-03-06 21:51:22', '22:51:22', 'Jacquie');

-- --------------------------------------------------------

--
-- Structure de la table `commentary`
--

CREATE TABLE IF NOT EXISTS `commentary` (
  `id` int(255) NOT NULL,
  `article_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentary`
--

INSERT INTO `commentary` (`id`, `article_id`, `author`, `date`, `time`, `content`) VALUES
(23, 48, 'Paul', '2016-03-06', '22:47:50', 'Mon skype c''est : KikouLoLDePaul si vous voulez ;)\r\n\r\nA plus tard !!'),
(24, 42, 'Elsa', '2016-03-06', '22:49:29', 'Bienvenue ;)'),
(25, 42, 'Paul', '2016-03-06', '22:49:55', 'Merci Elsa !'),
(26, 49, 'Paul', '2016-03-06', '22:50:30', 'Salut !\r\n\r\nMoi je sais trop pas c quoi !!\r\n\r\nMerci pour ceux qui donnerons les informations !\r\n\r\nAller bisous tout le monde!'),
(27, 49, 'Jacquie', '2016-03-06', '22:51:42', 'Si vous voulez, j''ai postÃ© un commentaire pour expliquer en quelques lignes'),
(28, 50, 'Paul', '2016-03-06', '22:52:15', 'FIRST !!!!'),
(29, 50, 'Paul', '2016-03-06', '22:52:21', 'Merci beaucoup '),
(30, 50, 'Patoche', '2016-03-06', '22:53:37', 'Je suis deuxiÃ¨me.\r\n\r\nPour la peine je vais faire tourner ma serviette tient.'),
(31, 50, 'Elsa', '2016-03-06', '22:53:53', 'Vous Ãªtes vraiment [...] les gars... \r\n\r\nOn s''en fous de qui est FIRST'),
(32, 42, 'Jacquie', '2016-03-06', '23:26:50', 'Quelqu''un veux faire un tour dans ma 4L ?');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `memberDate` date NOT NULL,
  `firstname` varchar(48) NOT NULL,
  `lastname` varchar(48) NOT NULL,
  `gender` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `birthdate`, `memberDate`, `firstname`, `lastname`, `gender`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@ad.fr', '0000-00-00', '0000-00-00', 'patoche', 'patoche', 'Male'),
(24, 'Paul', '08757c0c1958bd64db3da189ccdff65d7f1b42b8', 'paulo@hotmail.fr', '1950-03-02', '2015-08-26', 'Paul', 'Dubois', 'Male'),
(25, 'Jacquie', '082fbbec55bdfee353228be238c697ca245a3847', 'jacqusie@hotmail.fr', '1970-02-20', '2016-03-01', 'Jacquie', 'Tourteau', 'Male'),
(26, 'Patoche', '8c4f5076eeb77530d2f9cd7038db76976f91f0cd', 'patrick@patoche.com', '1910-03-02', '2015-12-25', 'Patrick', 'Sebasto', 'Female'),
(27, 'Elsa', '51b555aae9e9481077f215bf087c88393d5ae6a3', 'elsa-la-plus-belle@hotmail.com', '1998-02-20', '2016-02-17', 'Elsa', 'Sarah', 'Female');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentary`
--
ALTER TABLE `commentary`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT pour la table `commentary`
--
ALTER TABLE `commentary`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
