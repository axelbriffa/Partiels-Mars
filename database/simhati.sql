-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 29 mars 2022 à 23:23
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `b1_simhati`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` varchar(70) NOT NULL,
  `comment` text NOT NULL,
  `author` varchar(60) NOT NULL,
  `image_source` varchar(150) NOT NULL,
  `image_description` text NOT NULL,
  `cool` int(11) DEFAULT 0,
  `dislike` int(11) DEFAULT 0,
  `thematic` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `created`, `modified`, `title`, `comment`, `author`, `image_source`, `image_description`, `cool`, `dislike`, `thematic`) VALUES
(1, '2022-03-27 11:01:51', '2022-03-29 10:33:47', 'La sophrologie, une thérapie qui sort de l’ordinaire', 'La sophrologie, une technique de relaxation basée sur la respiration, la sophrologie agit sur le corps et sur le mental. ', 'Julia Bordes', 'img/unsplash_0yrZiZFN9g4.png', '\'(g(\'\'(\'g(', 38, 3, NULL),
(2, '2022-03-27 12:49:20', '2022-03-29 10:09:02', 'Le yoga, un complément à la sophrologie ?', 'Le yoga est l\'une des six écoles orthodoxes de la philosophie indienne āstika dont le but est la libération.', 'Julia Bordes', 'img/unsplash_eofm5R5f9Kw.png', 'Photo de caillou empiller', 15, 1, 'yoga'),
(3, '2022-03-27 12:50:17', '2022-03-29 10:09:00', 'Ma retraite spirituelle en Inde', 'Dans cet article, vous découvrirez la retraite spirituelle d’un an que j’ai effectuée en Inde.', 'Julia Bordes', 'img/unsplash_9Dt4WutvwDs.png', 'Photo du drapeau indien', 13, 1, 'inde'),
(6, '2022-03-29 23:06:27', '2022-03-29 23:06:27', 'Holi', 'La Holi (होली (holī)), parfois appelée fête des couleurs ou Phalguna, est une fête hindoue originaire de l\'Inde célébrée vers l\'équinoxe de printemps.', 'Julia BORDES', 'https://images.unsplash.com/photo-1603228254119-e6a4d095dc59?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=8', 'Photographie de personne qui jette des pigments de couleurs en l\'air', 0, 0, 'inde'),
(7, '2022-03-29 23:08:38', '2022-03-29 23:08:38', 'Qu\'est ce que le yoga', 'Le yoga est la pratique d\'un ensemble de postures et d \'exercices de respiration qui vise à apporter un bien être physique et mental.', 'Julia BORDES', 'https://images.unsplash.com/photo-1602192509154-0b900ee1f851?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=8', 'Photographie d\'une personne entrain de faire du yoga', 0, 0, 'yoga'),
(8, '2022-03-29 23:09:38', '2022-03-29 23:09:38', 'Les différents types de Yoga', 'Il existe plusieurs styles de yoga et chacun met l\'accent sur un aspect spécifique de cette pratique.\r\n\r\nIl y a des yogas dynamiques dans lesquels l\'enchaînement des postures se fait au rythme de la respiration tel que l\'ashtanga et le vinyasa, dans ces cours plutôt physiques tout en assouplissant et renforçant le corps, on améliore le système cardio-vasculaire.\r\nL\'Iyengar qui est un yoga plus statique met l\'accent sur l\'alignement du corps, ici on prend le temps de disséquer chacun des asanas, on développe la compréhension de notre corps.\r\nLe Hatha yoga est un yoga doux aisément pratiqué par des personnes plus âgées.\r\nil est important de trouver le style de yoga qui nous convient le mieux, cela dépend beaucoup de notre potentiel.\r\n\r\nIl est préférable, pour bénéficier des bienfaits des yogas dynamiques, d\'être en bonne santé générale et d\'avoir une certaine condition physique, sinon il devient difficile de suivre le rythme, ce qui génère un risque de blessures.\r\n\r\nPour ceux qui ont des problèmes de dos et qui ne sont pas sportifs il faut se tourner vers un yoga moins dynamique ou l\'on prend le temps de bien expliquer les postures comme l\'Iyengar et le hatha.', 'Julia BORDES', 'https://images.unsplash.com/photo-1556816723-1ce827b9cfbb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=792&', 'Photographie d\'une personne entrain de faire du yoga', 0, 0, 'yoga'),
(9, '2022-03-29 23:10:27', '2022-03-29 23:10:27', 'Les bienfaits du yoga', 'Aujourd\'hui quand on parle de yoga on parle surtout de la pratique des asanas et du pranayama, c\'est à dire les postures qui visent à assouplir et renforcer le corps et les exercices de respiration qui régulent le flux d\'énergie vitale.\r\n\r\nLe yoga apporte un grand nombre de bienfaits physiques notamment l\'assouplissement des muscles (les postures de yoga sont variées pour étirer l\'ensemble des grands groupes musculaires). Certaines postures aident au renforcement musculaire en douceur, d\'autres font plutôt travailler l\'équilibre.\r\n\r\nAvec une pratique régulière on peut corriger des erreurs de posture développées tout au long de notre vie ce qui atténue grandement les problèmes de dos chroniques. Une étude réalisée par l\'Université du temple en 2008 à montré que la pratique du yoga Iyengar améliore l\'équilibre chez les femmes de plus de 65 ans.\r\n\r\nLe yoga participe à la réduction du stress. Pendant la séance l\'attention est entièrement dirigée sur le corps et la respiration, on est dans \"l\'ici et maintenant\", ce qui est une forme de méditation.Une étude de l\'Université de Boston publiée en 2010 a montré que le yoga était efficace pour soulager l\'anxiété.\r\n\r\nSur le tapis on est invité à prendre le temps d\'écouter le corps, l\'attention est constamment ramenée vers le souffle, on développe sa capacité de concentration. Par exemple dans les exercices d\'équilibre toute notre attention est requise pour maintenir la posture', 'Julia BORDES', 'https://images.unsplash.com/photo-1552196527-bffef41ef674?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=726&', 'Photographie d\'une personne entrain de faire du yoga', 0, 0, 'yoga'),
(10, '2022-03-29 23:11:45', '2022-03-29 23:11:45', 'Définition de la sophrologie', 'La sophrologie est un « entraînement du corps et de l’esprit pour développer sérénité et mieux-être basé sur des techniques de relaxation et d’activation du corps et de l’esprit ». Elle s’adresse à toute personne cherchant à améliorer son existence et développer mieux-être et détente. Des séances spécifiques peuvent être proposées aux jeunes enfants, aux adolescents. La sophrologie n’est pas une médecine, elle ne soigne pas, il s’agit plus d’un outil de développement personnel. Elle est utilisée par de nombreux sportifs ou artistes pour mieux contrôler leur trac ou la « pression ».\r\n\r\nLa sophrologie amène la personne à travailler sur ses propres valeurs et à mieux se connaître. C’est un outil très efficace pour garder confiance et espoir. Par une meilleure connaissance de soi cette discipline permet à chacun de se renforcer, d\'améliorer son quotidien en portant un nouveau regard sur son présent et son avenir.', 'Julia BORDES', 'https://images.unsplash.com/photo-1490187291333-b4ece7bec2e0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=8', 'Photographie de caillou empillé', 0, 0, 'sophrologie'),
(11, '2022-03-29 23:12:30', '2022-03-29 23:12:30', 'Les bienfaits de la sophrologie', 'Sur le sommeil\r\nLa sophrologie accompagne les personnes ayant des difficultés d’endormissements ou de réveils nocturnes. Elle est efficace quand il s’agit de trouble léger, dû à un mode de vie fatiguant et stressant ou de mauvaises habitude lors du coucher.\r\n\r\nChacun de ces troubles pouvant être traités par des exercices de détente et de respiration. A celles-ci s’ajoute des techniques de futurisation pour bien préparer sa nuit, avec plaisir.\r\n\r\nIl est souvent nécessaire de travailler sur l’angoisse d’aller se coucher, générée par les insomnies répétées.\r\n\r\nSur le stress\r\nEn situation génératrice de stress, la sophrologie apprend à lâcher-prise sur les contrariétés et mieux gérer ses émotions. Petit à petit, la personne est mieux préparée à surmonter les moments importants. Sur le plan professionnel, la sophrologie permet de mieux vivre les situations de stress, comme la surcharge de travail, la perte de sens, la peur des changements organisationnels. Pour les managers, c’est un outil d’amélioration du collectif, du travail en groupe et de cohésion d’équipe\r\n\r\nPendant la grossesse\r\nLa sophrologie aide les futures mamans à vivre les derniers mois de grossesse ainsi que l\'accouchement avec plus de sérénité et de confiance.\r\n\r\nDans un premier temps elle permet de mieux vivre les changements physiques et les sensations désagréables associées. Puis par des techniques d’imageries et de respirations les femmes anticipent de manière positive l\'accouchement à venir.\r\n\r\nPar la sophrologie elles disposent d’outils pour être plus détendues et mieux gérer la douleur. Elles sauront notamment mieux récupérer entre chaques contractions.\r\n\r\nIl est recommandé de débuter les séances de sophrologie à partir du 5ème mois.\r\n\r\nLes adolescents\r\nL\'adolescence est une période de transition bien souvent synonyme de : difficulté à dormir, manque de concentration, émotions fortes, stress, mal-être ou manque de confiance en soi. Cette période est inévitable ! Cependant la sophrologie permet aux adolescents d’aborder cette étape de vie plus sereinement en travaillant sur l\'acceptation de ces changements physiques et émotionnel. Et par conséquent de renforcer sa confiance, se préparer à un examen, développer sa concentration, réguler le sommeil, mieux vivre son corps.\r\n\r\nSeniors\r\nLa sophrologie permet d’aider à bien vieillir et mieux vivre avec les effets qui peuvent accompagner le vieillissement, comme les douleurs, les problèmes de sommeil ou de mémoire, de dépression... Dans les cas de douleurs chroniques, elle apporte détente corporelle et mieux-être physique ou mental. Elle est utile également pour accepter les changements dans son apparence ou niveau d’énergie.\r\n\r\nSur les douleurs\r\nMal de dos, mal au ventre, mal à la tête, les douleurs sont très souvent la manifestation d’un dérèglement de notre organisme. Et d’autres fois, c’est notre esprit qui nous alerte en créant ces douleurs pour nous dire « stop », lorsque nous sommes submergés par notre environnement (par exemple, le stress au travail et les troubles musculo-squelettiques). La sophrologie va permettre à la personne de retrouver un équilibre entre son corps et son mental et mieux vivre avec ses douleurs. Celles ci ne vont pas disparaitre mais seront mieux supportées par la personne qui en souffre. C’est ainsi que beaucoup d’hôpitaux vont faire appel à un sophrologue pour le suivi de leurs patients, notamment en cas de douleurs chroniques.', 'Julia BORDES', 'https://images.unsplash.com/uploads/14122810486321888a497/1b0cc699?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=cr', 'Photographie d\'un bord de mer', 0, 0, 'sophrologie'),
(12, '2022-03-29 23:13:42', '2022-03-29 23:13:42', 'Les bienfaits de la sophrologie', 'Sur le sommeil\r\nLa sophrologie accompagne les personnes ayant des difficultés d’endormissements ou de réveils nocturnes. Elle est efficace quand il s’agit de trouble léger, dû à un mode de vie fatiguant et stressant ou de mauvaises habitude lors du coucher.\r\n\r\nChacun de ces troubles pouvant être traités par des exercices de détente et de respiration. A celles-ci s’ajoute des techniques de futurisation pour bien préparer sa nuit, avec plaisir.\r\n\r\nIl est souvent nécessaire de travailler sur l’angoisse d’aller se coucher, générée par les insomnies répétées.\r\n\r\nSur le stress\r\nEn situation génératrice de stress, la sophrologie apprend à lâcher-prise sur les contrariétés et mieux gérer ses émotions. Petit à petit, la personne est mieux préparée à surmonter les moments importants. Sur le plan professionnel, la sophrologie permet de mieux vivre les situations de stress, comme la surcharge de travail, la perte de sens, la peur des changements organisationnels. Pour les managers, c’est un outil d’amélioration du collectif, du travail en groupe et de cohésion d’équipe\r\n\r\nPendant la grossesse\r\nLa sophrologie aide les futures mamans à vivre les derniers mois de grossesse ainsi que l\'accouchement avec plus de sérénité et de confiance.\r\n\r\nDans un premier temps elle permet de mieux vivre les changements physiques et les sensations désagréables associées. Puis par des techniques d’imageries et de respirations les femmes anticipent de manière positive l\'accouchement à venir.\r\n\r\nPar la sophrologie elles disposent d’outils pour être plus détendues et mieux gérer la douleur. Elles sauront notamment mieux récupérer entre chaques contractions.\r\n\r\nIl est recommandé de débuter les séances de sophrologie à partir du 5ème mois.\r\n\r\nLes adolescents\r\nL\'adolescence est une période de transition bien souvent synonyme de : difficulté à dormir, manque de concentration, émotions fortes, stress, mal-être ou manque de confiance en soi. Cette période est inévitable ! Cependant la sophrologie permet aux adolescents d’aborder cette étape de vie plus sereinement en travaillant sur l\'acceptation de ces changements physiques et émotionnel. Et par conséquent de renforcer sa confiance, se préparer à un examen, développer sa concentration, réguler le sommeil, mieux vivre son corps.\r\n\r\nSeniors\r\nLa sophrologie permet d’aider à bien vieillir et mieux vivre avec les effets qui peuvent accompagner le vieillissement, comme les douleurs, les problèmes de sommeil ou de mémoire, de dépression... Dans les cas de douleurs chroniques, elle apporte détente corporelle et mieux-être physique ou mental. Elle est utile également pour accepter les changements dans son apparence ou niveau d’énergie.\r\n\r\nSur les douleurs\r\nMal de dos, mal au ventre, mal à la tête, les douleurs sont très souvent la manifestation d’un dérèglement de notre organisme. Et d’autres fois, c’est notre esprit qui nous alerte en créant ces douleurs pour nous dire « stop », lorsque nous sommes submergés par notre environnement (par exemple, le stress au travail et les troubles musculo-squelettiques). La sophrologie va permettre à la personne de retrouver un équilibre entre son corps et son mental et mieux vivre avec ses douleurs. Celles ci ne vont pas disparaitre mais seront mieux supportées par la personne qui en souffre. C’est ainsi que beaucoup d’hôpitaux vont faire appel à un sophrologue pour le suivi de leurs patients, notamment en cas de douleurs chroniques.', 'Julia BORDES', 'https://images.unsplash.com/uploads/14122810486321888a497/1b0cc699?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=cr', 'Photographie d\'un bord de mer', 0, 0, 'sophrologie'),
(13, '2022-03-29 23:14:17', '2022-03-29 23:14:17', 'Essaouira', 'Essaouira (anciennement appelée Mogador par les Portugais, en arabe : الصويرة aṣ-Ṣawîrah, en tachelhit : ⵜⴰⵚⵚⵓⵕⵜ Taṣṣuṛt) est une ville portuaire et une commune du Maroc, chef-lieu de la province d\'Essaouira, dans la région de Marrakech-Safi. Elle est située au bord de l\'océan Atlantique et compte 77 966 habitants en 2014.', 'Julia BORDES', 'https://images.unsplash.com/photo-1624802746702-60ca95bdb605?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=8', 'Photographie du port d\'Essaouira', 0, 0, 'maroc'),
(14, '2022-03-29 23:15:45', '2022-03-29 23:15:45', '48 heures à Essaouira, échappée tonique au rythme de l\'art, du vent et', 'Seraient-ce les alizés qui lui dictent son rythme ? Ou bien ses racines puisant loin dans l\'histoire un mélange d\'influences berbères, arabo-musulmanes, juives, chrétiennes et africaines ? Spot prisé des hippies dans les années 1970, cité baignée de spiritualité et habitée par les génies, Essaouira réinvente l\'esprit arty des années bohème au Maroc. Déjeuner les pieds dans le sable entre deux cours de surf, plonger dans l\'univers d\'un peintre inspiré par les couleurs ou se bercer de musique sur une terrasse design perchée au-dessus des vagues… De sa médina intimiste à la longue plage qui frange sa baie, laissez-vous porter par la mélodie du vent, des arts et de l\'océan !', 'Julia BORDES', 'https://images.unsplash.com/photo-1613057157282-cc3cbe630b26?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=8', 'Photographie de la plage et d\'un surfeur', 0, 0, 'maroc'),
(15, '2022-03-29 23:18:21', '2022-03-29 23:18:21', 'L\'intérêt d\'Simhati', 'des outils et des expériences uniques afin de se reconnecter à son soi le plus profond et révéler sa beauté intérieure et  faire rayonner la beauté du monde grâce à la sophrologie et au yoga, ainsi que d’autres techniques en m’alliant à d’autres experts (arts, nutrition, sport, danse…)', 'Julia BORDES', 'https://images.unsplash.com/photo-1524863479829-916d8e77f114?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8eW9nYXxlbnwwfDB8MHx8&auto=format&fit=crop', 'Yoga', 0, 0, 'simhati'),
(16, '2022-03-29 23:19:08', '2022-03-29 23:19:08', 'Mots clefs', 'Reconnexion à soi, harmonie corps et esprit, spiritualité, développement personnel', 'Julia BORDES', 'https://images.unsplash.com/photo-1593810451137-5dc55105dace?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8eW9nYXxlbnwwfDB8MHx8&auto=format&fit=crop', 'Yoga', 0, 0, 'simhati');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(30) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `mail` varchar(40) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `created`, `modified`, `name`, `first_name`, `mail`, `message`) VALUES
(12, '2022-03-29 21:22:00', '2022-03-29 21:22:00', 'Duro', 'Jacque', 'jacque@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
