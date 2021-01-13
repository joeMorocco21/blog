-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 13 jan. 2021 à 09:39
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `Categories`
--

CREATE TABLE `Categories` (
  `id` int(11) NOT NULL,
  `nom_de_cat` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Categories`
--

INSERT INTO `Categories` (`id`, `nom_de_cat`, `create_at`) VALUES
(1, 'Programmation', '2020-11-26 20:20:53'),
(2, 'Securite_Informatique', '2021-01-03 02:29:12'),
(3, 'Reseaux', '2021-01-12 11:22:33'),
(4, 'Mobile', '2020-11-26 20:20:53'),
(5, 'Hardware', '2020-11-26 20:20:53'),
(6, 'Software', '2020-11-26 20:20:53');

-- --------------------------------------------------------

--
-- Structure de la table `cat_post`
--

CREATE TABLE `cat_post` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cat_post`
--

INSERT INTO `cat_post` (`id`, `post_id`, `id_cat`) VALUES
(87, 122, 2),
(88, 123, 2),
(90, 124, 2),
(91, 125, 5),
(92, 126, 5),
(93, 127, 6),
(94, 128, 6),
(95, 129, 1),
(96, 130, 1),
(97, 131, 1),
(105, 132, 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `post_id`, `nom`, `email`, `comment`, `created_at`) VALUES
(4, 124, 'super fun', 'elaskri.youssef.fr@gmail.com', 'test', '2021-01-07 00:19:25'),
(5, 124, 'super fun', 'elaskri.youssef.fr@gmail.com', 'test', '2021-01-07 00:19:25'),
(6, 124, 'super fun', 'good@goud.ma', 'ma', '2021-01-07 00:21:54'),
(7, 124, 'super fun', 'good@goud.ma', 'ma', '2021-01-07 00:21:54'),
(8, 124, 'super fun', 'elaskri.youssef.fr@gmail.com', 'ok', '2021-01-07 00:28:11'),
(9, 124, 'super fun', 'elaskri.youssef.fr@gmail.com', 'ok', '2021-01-07 00:28:11'),
(10, 124, 'super fun', 'elaskri.youssef.fr@gmail.com', 'ok', '2021-01-07 00:30:11'),
(11, 124, 'super fun', 'elaskri.youssef.fr@gmail.com', 'ok', '2021-01-07 00:30:11'),
(12, 124, 'super fun', 'elaskri.youssef.fr@gmail.com', 'ok', '2021-01-07 00:39:54'),
(13, 124, 'super fun', 'elaskri.youssef.fr@gmail.com', 'ok', '2021-01-07 00:39:54'),
(14, 131, 'super fun', 'elaskri.youssef.fr@gmail.com', 'test', '2021-01-12 09:03:51'),
(15, 132, 'super fun', 'admin@admin.com', 'merci', '2021-01-12 10:21:22'),
(16, 132, 'super fun', 'admin@admin.com', 'yup', '2021-01-12 11:49:53');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `img_url` varchar(233) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `post_id`, `img_url`, `create_at`) VALUES
(13, 122, 'http://localhost/mvc/ressources/file/000000076110.jpeg', '2021-01-12 10:47:47'),
(14, 123, 'http://localhost/mvc/ressources/file/000000076075.jpeg', '2021-01-05 15:20:21'),
(15, 124, 'http://localhost/mvc/ressources/file/000000076127.jpeg', '2021-01-05 15:20:21'),
(16, 125, 'http://localhost/mvc/ressources/file/000000076099.jpeg', '2021-01-05 15:20:21'),
(17, 126, 'http://localhost/mvc/ressources/file/000000075971.jpeg', '2021-01-05 15:20:21'),
(18, 127, 'http://localhost/mvc/ressources/file/000000076212.png', '2021-01-05 15:20:21'),
(19, 128, 'http://localhost/mvc/ressources/file/000000076223.jpeg', '2021-01-05 15:20:21'),
(20, 129, 'http://localhost/mvc/ressources/file/pair-programming-t.jpeg', '2021-01-05 15:20:21'),
(21, 130, 'http://localhost/mvc/ressources/file/eigene-app-erstellen-t.jpeg', '2021-01-05 15:20:21'),
(22, 131, 'http://localhost/mvc/ressources/file/neuf-php8-fr.jpeg', '2021-01-05 15:20:21'),
(23, 132, 'http://localhost/mvc/ressources/file/bootstrap5-nouveautes-700x525.jpeg', '2021-01-05 15:20:21');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(233) NOT NULL,
  `content` text NOT NULL,
  `auteur` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `auteur`, `create_at`) VALUES
(122, 'SolarWinds : correctifs, négligence et second piratage', '<p>Le soufflet de la&nbsp;<a href=\"https://www.lemondeinformatique.fr/actualites/lire-6-questions-sur-le-cyber-detournement-de-solarwinds-orion-81354.html\">cyberattaque affectant l\'&eacute;diteur SolarWinds</a> et par rebond ses clients ayant t&eacute;l&eacute;charg&eacute; une mise &agrave; jour pi&eacute;g&eacute;e contenant une backdoor n\'est pas pr&egrave;s de retomber. <a href=\"https://www.lemondeinformatique.fr/actualites/lire-cyberattaque-solarwinds-microsoft-et-la-securite-nucleaire-us-touchees-81403.html\">Apr&egrave;s Microsoft</a>, c\'est au tour de <a href=\"https://www.lemondeinformatique.fr/toute-l-actualite-marque-sur-cisco-44.html\">Cisco</a> de faire partie des victimes collat&eacute;rales.&nbsp;Certains syst&egrave;mes internes - une vingtaine selon des sources proches du dossier - utilis&eacute;s par les chercheurs de l\'&eacute;quipe Lab de l\'&eacute;quipementier r&eacute;seau et t&eacute;l&eacute;com ont ainsi &eacute;t&eacute; cibl&eacute;s, a expliqu&eacute;&nbsp;<a href=\"https://www.bloomberg.com/news/articles/2020-12-18/cisco-latest-victim-of-russian-cyber-attack-using-solarwinds\" target=\"_blank\" rel=\"noopener\">Bloomberg</a>. Suite &agrave; la d&eacute;couverte de cet incident, l\'&eacute;quipementier a indiqu&eacute; que son &eacute;quipe de s&eacute;curit&eacute; avait agi rapidement pour r&eacute;soudre le probl&egrave;me et que le logiciel affect&eacute; avait &eacute;t&eacute; att&eacute;nu&eacute;. &laquo; Pour le moment, il n\'y a aucun impact connu sur les offres ou les produits Cisco &raquo;, a d&eacute;clar&eacute; un porte-parole de la soci&eacute;t&eacute;. &laquo; Nous continuons &agrave; &eacute;tudier tous les aspects de cette situation en &eacute;volution avec la plus haute priorit&eacute; &raquo;.&nbsp;</p>\r\n<p>Selon un rapport de la soci&eacute;t&eacute; de cybers&eacute;curit&eacute; Recorded Future, 198 organisations (entreprises, agences f&eacute;d&eacute;rales, institutions...) ont &eacute;t&eacute; victimes des mises &agrave; jour pi&eacute;g&eacute;es SolarWinds. Intel mais &eacute;galement General Electric ou encore Equifax <a href=\"https://www.forbes.com/sites/thomasbrewster/2020/12/19/solarwinds-hack-cisco-and-equifax-amongst-corporate-giants-finding-malware-but-no-sign-of-russian-spies/?sh=2c6292347865\" target=\"_blank\" rel=\"noopener\">en feraient aussi partie</a>.&nbsp;Sur les quelque 18 000 clients SolarWinds qui ont re&ccedil;u la mise &agrave; jour infect&eacute;e, plus de 1 000 ont &eacute;t&eacute; expos&eacute;s au code malveillant et un peu moins de 200 auraient &eacute;t&eacute; victimes du piratage en tant que tel. Avec mise en oeuvre d\'une connexion sur serveur de commande et contr&ocirc;le (C&amp;C) exploit&eacute; par des pirates et enfouissement profond dans le r&eacute;seau de leurs victimes.&nbsp;Un porte-parole de SolarWinds a d&eacute;clar&eacute; que la soci&eacute;t&eacute; &laquo; reste concentr&eacute;e sur la collaboration avec les clients et les experts pour partager des informations et travailler pour mieux comprendre ce probl&egrave;me &raquo;. &laquo; Cela reste les premiers jours de l\'enqu&ecirc;te &raquo;, a d&eacute;clar&eacute; le porte-parole. Une fa&ccedil;on &agrave; peine voil&eacute;e de dire que le reste de l\'iceberg est encore largement immerg&eacute;.&nbsp;</p>', 2, '2021-01-03 12:54:50'),
(123, 'Microsoft ajoute l\'autocomplétion de mots de passe sur l\'app Authenticator', '<p>L&rsquo;app Authenticator de <a href=\"https://www.lemondeinformatique.fr/toute-l-actualite-marque-sur-microsoft-4.html\">Microsoft</a> permet de se connecter &agrave; ses applications mobiles sans saisir ses mots de passe, parfois oubli&eacute;s, et fournit une couche de s&eacute;curit&eacute; suppl&eacute;mentaire d&rsquo;acc&egrave;s en plus du code PIN du t&eacute;l&eacute;phone ou de l&rsquo;empreinte digitale. Pour s&rsquo;identifier, on entre son nom d&rsquo;utilisateur puis on re&ccedil;oit sur son mobile une notification que l&rsquo;on approuve. Microsoft lui ajoute maintenant une fonctionnalit&eacute; de g&eacute;n&eacute;ration de mots de passe pour toute application lanc&eacute;e par un utilisateur ou pour tout nouveau site sur lequel il souhaite s&rsquo;inscrire. L&rsquo;&eacute;diteur vient d&rsquo;annoncer la pr&eacute;version publique de cette capacit&eacute; d&rsquo;autocompl&eacute;tion qui laisse Authenticator cr&eacute;er des combinaisons de caract&egrave;res complexes pour r&eacute;sister aux tentatives de craquage, mais qu&rsquo;il ne sera pas n&eacute;cessaire de m&eacute;moriser.</p>\r\n<p>Les mots de passe sont synchronis&eacute;s sur mobile avec une authentification multi-facteurs. Cette synchronisation se fait via le compte Microsoft de l&rsquo;utilisateur : <a href=\"http://outlook.com\">outlook.com</a>, <a href=\"http://hotmail.com\">hotmail.com</a>, <a href=\"http://live.com\">live.com</a> ou autre, ce qui rend les mots de passe disponibles sur le terminal de bureau &agrave; travers le navigateur web Edge, ainsi qu&rsquo;avec la nouvelle&nbsp;<a href=\"https://chrome.google.com/webstore/detail/microsoft-autofill/fiedbfgcleddlbcmgdigjgdfcggjcion\" target=\"_blank\" rel=\"noopener\">extension</a> de Google Chrome, explique l&rsquo;&eacute;diteur dans <a href=\"https://techcommunity.microsoft.com/t5/azure-active-directory-identity/securely-manage-and-autofill-passwords-across-all-your-mobile/ba-p/1751710\" target=\"_blank\" rel=\"noopener\">un billet</a>.&nbsp;</p>\r\n<p>La fonctionnalit&eacute; d&rsquo;autocompl&eacute;tion et de synchronisation de mots de passe est disponible sur iOS et Android.</p>', 2, '2021-01-03 14:08:19'),
(124, 'WhatsApp Vs NSO : Microsoft, Google, VMware en soutien', '<p>Dans cet amici, Cisco, GitHub, Google, l\'Internet Association, Linkedin, Microsoft et VMware mettent au diapason leurs arguments en soulignant qu\'une immunit&eacute; &agrave; l\'&eacute;gard d\'outils tel que Pegasus de NSO Group d&eacute;boucherait sur un accroissement des acc&egrave;s et usages des outils de cybersurveillance et de l\'augmentation d\'un risque cyber syst&eacute;mique. &laquo; L\'expansion d\'une immunit&eacute; souveraine que NSO vise ici encouragerait le bourgeonnement d\'une industrie de la cyber-surveillance pour d&eacute;velopper, vendre et utiliser des outils pour exploiter des vuln&eacute;rabilit&eacute;s en violation avec les lois am&eacute;ricaines &raquo;, indique le document. Mais pour ce qui est des outils de surveillance de masse utilis&eacute;s par les autorit&eacute;s am&eacute;ricaines, fournis aussi par les g&eacute;ants&nbsp;r&eacute;gionaux du cloud, c\'est une autre histoire...</p>', 2, '2021-01-03 14:12:17'),
(125, 'Intel améliore l\'IA des laptops EVO avec sa puce Clover Falls', '<p>La puce IA Clover Falls d\'<a href=\"https://www.lemondeinformatique.fr/toute-l-actualite-marque-sur-intel-42.html\">Intel</a> vient compl&eacute;ter la plateforme Evo pour les entreprises, qui se concentre pour l\'instant sur les PC grand public. Intel a d&eacute;crit Clover Falls, d&eacute;nomm&eacute; Visual Sensing Controller pour la partie marketing, comme une &laquo;&nbsp;puce d\'accompagnement s&eacute;curis&eacute;e qui contribue &agrave; rendre les PC plus intelligents et plus s&ucirc;rs gr&acirc;ce &agrave; la puissance de l\'intelligence artificielle d&rsquo;Intel&nbsp;&raquo;. Elle sera mont&eacute;e sur la carte m&egrave;re du portable, &laquo;&nbsp;apportant de nouvelles capacit&eacute;s de faible consommation au PC et l\'aidant &agrave; comprendre et &agrave; s\'adapter &agrave; son environnement&nbsp;&raquo;, <a href=\"https://newsroom.intel.com/editorials/building-industrys-best-pc-experiences/\" target=\"_blank\" rel=\"noopener\">selon un billet de blog publi&eacute; par la soci&eacute;t&eacute; (sur Intel Visual Sensing Controller)</a>.&nbsp;</p>', 2, '2021-01-03 18:14:23'),
(126, ' AMD Ryzen 5000 mobile : du vieux et du neuf', '<p>Selon plusieurs articles, la prochaine s&eacute;rie d&rsquo;APU (CPU int&eacute;grant&nbsp;un circuit graphique) Ryzen 5000 mobile devrait int&eacute;grer des&nbsp;composants &laquo;&nbsp;Lucienne&nbsp;&raquo; et &laquo;&nbsp;C&eacute;zanne&nbsp;&raquo; grav&eacute;es en 7 nm. Les premi&egrave;res correspondent &agrave; Zen 2, une architecture ancienne, et la seconde &agrave; Zen 3, une g&eacute;n&eacute;ration plus performante.&nbsp;<a href=\"https://www.lemondeinformatique.fr/toute-l-actualite-marque-sur-amd-123.html\">AMD</a> a refus&eacute; de commenter ces rumeurs. N&eacute;anmoins, il fort probable que des informations sur les Ryzen 5000 mobile &agrave; destination des PC portables soient annonc&eacute;es lors du CES qui se d&eacute;roulera en virtuel en janvier. Rendez-vous est pris pour le 12 janvier.</p>\r\n<p>Les annonces autour des puces 5000 mobiles sont attendues, car l&rsquo;ann&eacute;e derni&egrave;re la gamme Ryzen 4000 mobile avait fait forte impression. Plusieurs tests ont montr&eacute; que les processeurs d&rsquo;AMD pouvaient rivaliser avec l&rsquo;offre concurrente d&rsquo;Intel. Mais le fait de combiner des architectures anciennes et plus r&eacute;centes d&eacute;route quelque peu.</p>', 2, '2021-01-03 18:18:05'),
(127, 'Bash 5.1 remet des comportements anciens', '<p>Livr&eacute;e au d&eacute;but du mois, Bash 5.1, derni&egrave;re mouture de l&rsquo;interpr&eacute;teur en ligne de commande de type script, est qualifi&eacute;e de cinqui&egrave;me version majeure du shell Unix et Linux par le bulletin de mise &agrave; jour. Le changement le plus significatif de cette nouvelle version est sans doute le retour au mode d\'expansion du nom de chemin, un comportement abandonn&eacute; apr&egrave;s la version 4.4 de Bash, lequel consiste &agrave; ne pas effectuer d\'expansion du nom de chemin sur un mot contenant des antislashes mais pas de caract&egrave;res sp&eacute;ciaux dans les filtres sur les fichiers (globbing) non cit&eacute;s. La version Bash 5.1 introduit &eacute;galement des changements dans la gestion de la commande <em>trap</em> lors de la lecture depuis le terminal, et elle corrige un certain nombre de bogues, dont plusieurs provoquaient le plantage du shell.</p>', 2, '2021-01-03 18:52:40'),
(128, 'Ne pas confier les commandes à l\'IA sans la comprendre', '<p>Les g&eacute;n&eacute;rations ayant pass&eacute; leur permis de conduire ne vivent pas l&rsquo;exp&eacute;rience du v&eacute;hicule autonome comme la vivront peut-&ecirc;tre des jeunes de la G&eacute;n&eacute;ration Z et au-del&agrave;, s&rsquo;ils n&rsquo;apprennent plus &agrave; conduire. Les pilotes de ligne sont dans une situation comparable quand ils utilisent les fonctions de pilotage automatique : ils apprennent tous &agrave; piloter un avion sans assistance avant d\'envisager de passer aux commandes num&eacute;riques. Comme l\'intelligence artificielle (IA) se manifeste d&eacute;sormais dans des applications grand public &agrave; tous les niveaux imaginables, peu d\'utilisateurs auront besoin de comprendre pleinement les m&eacute;canismes du code et le traitement de donn&eacute;es effectu&eacute;s en arri&egrave;re-plan pour rendre l&rsquo;application &laquo; intelligente &raquo;. Cependant, les ing&eacute;nieurs en logiciel, les d&eacute;veloppeurs ou les programmeurs, ne peuvent se positionner au m&ecirc;me niveau que les utilisateurs finaux et s&rsquo;affranchir de leur responsabilit&eacute;.</p>', 2, '2021-01-03 18:55:33'),
(129, 'PHP 8 : toutes les infos sur la nouvelle mise à jour', '<div>\r\n<div>\r\n<p>Le 26 novembre 2020 dernier &eacute;tait publi&eacute;e la derni&egrave;re version du langage de script populaire, PHP 8.0.0. Cela correspond au cycle normal de trois ans de PHP. Son pr&eacute;decesseur PHP 7.4 avait &eacute;t&eacute; publi&eacute; un an auparavant, juste apr&egrave;s que le <a title=\"PHP 7.1\" href=\"https://www.ionos.fr/digitalguide/sites-internet/developpement-web/php-71/\">support pour PHP 7.1</a> ait &eacute;t&eacute; interrompu. Le soutien au PSP 7.2 prendra &eacute;galement fin &agrave; la fin de 2020.</p>\r\n<p>De nombreux sites Web &eacute;crits avec PHP utilisent encore une ancienne version. Cela est encore possible en principe, mais pas recommand&eacute;. Garder le code de son site &agrave; jour et passer aux nouvelles versions de PHP pr&eacute;sentent certains avantages. Les nouvelles fonctions offrent plus de possibilit&eacute;s, les performances peuvent &ecirc;tre sensiblement augment&eacute;es et les failles de s&eacute;curit&eacute; sont g&eacute;r&eacute;es.</p>\r\n</div>\r\n</div>', 2, '2021-01-04 10:28:51'),
(130, 'Créer son application native, partie 2 : programmation ou éditeur d’app ?', '<div id=\"c306034\">\r\n<div>\r\n<div>\r\n<p>Apr&egrave;s avoir planifi&eacute; votre application mobile, vous pouvez passer &agrave; l&rsquo;&eacute;tape suivante, &agrave; savoir une &eacute;tape beaucoup plus technique dans la r&eacute;alisation de votre application. Si vous ne sous-traitez pas la conception de votre application mais souhaitez tout faire de vos propres mains, deux possibilit&eacute;s s&rsquo;offrent&nbsp;&agrave; vous&nbsp;: vous pouvez <strong>programmer l&rsquo;application vous-m&ecirc;me</strong> (&agrave; condition de disposer de connaissances suffisantes en d&eacute;veloppement) ou vous <strong>servir de syst&egrave;mes modulaires</strong> pour application. Ce deuxi&egrave;me volet de notre suite d&rsquo;articles pour vous guider dans la cr&eacute;ation de votre application vous explique la diff&eacute;rence entre les deux approches et vous pr&eacute;sente six des meilleurs &eacute;diteurs d&rsquo;application.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"c306060\">\r\n<div>\r\n<div id=\"toc\">\r\n<div id=\"toctitle\"><strong>Sommaire</strong><a id=\"togglelinkStyle\" href=\"https://www.ionos.fr/digitalguide/\"></a></div>\r\n<ol>\r\n<li><a href=\"https://www.ionos.fr/digitalguide/sites-internet/developpement-web/creer-son-application-programmation-ou-outil/#c306035\"><span data-slug=\"programmation-d-rsquo-application-versus-editeur-d-rsquo-application\">Programmation d&rsquo;application versus &eacute;diteur d&rsquo;application</span></a></li>\r\n<li><a href=\"https://www.ionos.fr/digitalguide/sites-internet/developpement-web/creer-son-application-programmation-ou-outil/#c306036\"><span data-slug=\"programmer-son-application-mobile-native-soi-meme\">Programmer son application mobile native soi-m&ecirc;me</span></a></li>\r\n<li><a href=\"https://www.ionos.fr/digitalguide/sites-internet/developpement-web/creer-son-application-programmation-ou-outil/#c306039\"><span data-slug=\"utiliser-un-outil-de-creation-d-rsquo-application\">Utiliser un outil de cr&eacute;ation d&rsquo;application</span></a></li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n<div id=\"c306035\">\r\n<h2>Programmation d&rsquo;application versus &eacute;diteur d&rsquo;application</h2>\r\n<div>\r\n<div>\r\n<p>Bien choisir son logiciel pour d&eacute;velopper une application est d&eacute;terminant. Il est donc important d&rsquo;y avoir m&ucirc;rement r&eacute;fl&eacute;chi. L&rsquo;option classique est de d&eacute;cider de faire sa propre programmation depuis une plateforme donn&eacute;e, ce qui permet d&rsquo;avoir le plus de possibilit&eacute;s dans la conception de l&rsquo;application. Mais de simples bases sur les langages de programmation&nbsp;ne suffisent pas ; il n&rsquo;est pas rare d&rsquo;observer que les personnes qui r&eacute;ussissent &agrave; d&eacute;velopper une application ont en r&eacute;alit&eacute; une exp&eacute;rience de plusieurs ann&eacute;es dans ce domaine. Les d&eacute;butants doivent par cons&eacute;quent acqu&eacute;rir de nombreuses connaissances fondamentales avant de se d&eacute;cider &agrave; coder une application eux-m&ecirc;mes.</p>\r\n<p>Pour faire une programmation, on utilise ce que l&rsquo;on appelle un <strong>environnement de d&eacute;veloppement int&eacute;gr&eacute;</strong> (ou IDE pour <em>integrated development environment</em>). Un IDE met &agrave; disposition diff&eacute;rentes fonctions pour le d&eacute;veloppeur&nbsp;: kit de d&eacute;veloppement logiciel, &eacute;diteur, <a title=\"D&eacute;bogueur\" href=\"https://www.ionos.fr/digitalguide/sites-internet/developpement-web/debogueur/\">d&eacute;bogueur</a>, <a title=\"Compilateur vs. Interpr&eacute;teur\" href=\"https://www.ionos.fr/digitalguide/sites-internet/developpement-web/compilateur-vs-interpreteur/\">compilateur</a>, &eacute;mulateur etc. Les programmateurs ont par cons&eacute;quent plusieurs outils pour cr&eacute;er eux-m&ecirc;mes l&rsquo;application, outils sp&eacute;cifiques aux diff&eacute;rents langages de programmation mais qui peuvent &ecirc;tre tr&egrave;s puissants.</p>\r\n<p>Les syst&egrave;mes modulaires d&eacute;velopp&eacute;s pour les applications suivent le m&ecirc;me chemin que ceux pour les sites Web, qui sont entre-temps devenus tr&egrave;s populaires et tr&egrave;s courants. Aucune connaissance en programmation n&rsquo;est pr&eacute;-requise pour ces &eacute;diteurs, car ils fonctionnent selon le principe <a title=\"&Eacute;diteurs WYSIWYG\" href=\"https://www.ionos.fr/digitalguide/sites-internet/creation-de-sites-internet/editeurs-wysiwyg/\">WYSIWYG</a> (&laquo;&nbsp;What You See Is What You Get&nbsp;&raquo;)&nbsp;: sur votre plateforme, vous travaillez sur une <strong>surface graphique</strong> g&eacute;n&eacute;ralement <strong>intuitive et facile d&rsquo;utilisation</strong>. Cependant, les possibilit&eacute;s pour concevoir votre application sont ici bien <strong>plus limit&eacute;es qu&rsquo;avec un IDE</strong>&nbsp;: un &eacute;diteur d&rsquo;application ne propose qu&rsquo;un choix restreint de commandes qui sont accessibles depuis l&rsquo;interface graphique et que vous pouvez mettre en place pour votre surface utilisateur.</p>\r\n<p>Cet article vise tout particuli&egrave;rement &agrave; vous <strong>pr&eacute;senter les outils de cr&eacute;ation d&rsquo;application</strong>. Pour bien comprendre les approches diff&eacute;rentes entre les deux d&eacute;marches, nous vous expliquons &eacute;galement rapidement comment fonctionne la programmation sur iOS et Android avec un environnement de d&eacute;veloppement int&eacute;gr&eacute;.</p>\r\n</div>\r\n</div>\r\n</div>', 2, '2021-01-04 10:33:43'),
(131, 'Quoi de neuf dans PHP 8 ', '<p>La fonctionnalit&eacute; la plus acclam&eacute;e de PHP 8 est la <strong>compilation &agrave; la vol&eacute;e (Just In Time)</strong>. Qu&rsquo;est-ce que JIT ?</p>\r\n<p><a href=\"https://wiki.php.net/rfc/jit\" target=\"_blank\" rel=\"noopener noreferrer\">La proposition de RFC</a> d&eacute;crit JIT comme suit :</p>\r\n<blockquote>\r\n<p>&laquo; PHP JIT est mis en &oelig;uvre comme une partie presque ind&eacute;pendante d&rsquo;OPcache. Il peut &ecirc;tre activ&eacute; / d&eacute;sactiv&eacute; au moment de la compilation et de l&rsquo;ex&eacute;cution de PHP. Lorsqu&rsquo;il est activ&eacute;, le code natif des fichiers PHP est stock&eacute; dans une r&eacute;gion suppl&eacute;mentaire de la m&eacute;moire partag&eacute;e d&rsquo;OPcache et op_array&rarr;opcodes[].handler(s) conserve les pointeurs vers les points d&rsquo;entr&eacute;e du code JIT-ed &raquo;.</p>\r\n</blockquote>\r\n<p>Alors, comment en sommes-nous arriv&eacute;s &agrave; JIT et quelle est la diff&eacute;rence entre JIT et OPcache ?</p>\r\n<p>Pour mieux comprendre ce qu&rsquo;est JIT pour PHP, examinons rapidement comment <a href=\"https://kinsta.com/fr/base-de-connaissances/qu-est-ce-que-php/\">PHP</a> s&rsquo;ex&eacute;cute du code source au r&eacute;sultat final.</p>\r\n<p>L&rsquo;ex&eacute;cution de PHP est un processus en 4 &eacute;tapes :</p>\r\n<ul>\r\n<li><strong>Lexing/Tokenizing</strong> : Tout d&rsquo;abord, l&rsquo;interpr&egrave;teur lit le code PHP et construit un ensemble de jetons.</li>\r\n<li><strong>Parsing</strong> : L&rsquo;interpr&egrave;teur v&eacute;rifie si le script correspond aux r&egrave;gles syntaxiques et utilise des jetons pour construire un <a href=\"https://en.wikipedia.org/wiki/Abstract_syntax_tree\" target=\"_blank\" rel=\"noopener noreferrer\">arbre syntaxique abstrait </a>(Abstract Syntax Tree ou AST), qui est <a href=\"https://wiki.php.net/rfc/abstract_syntax_tree\" target=\"_blank\" rel=\"noopener noreferrer\">une repr&eacute;sentation hi&eacute;rarchique de la structure du code source</a>.</li>\r\n<li><strong>Compilation</strong> : L&rsquo;interpr&egrave;teur parcourt l&rsquo;arbre et traduit les n&oelig;uds AST en opcodes Zend de bas niveau, qui sont des identificateurs num&eacute;riques d&eacute;terminant le type d&rsquo;<a href=\"https://nikic.github.io/2017/04/14/PHP-7-Virtual-machine.html\" target=\"_blank\" rel=\"noopener noreferrer\">instruction ex&eacute;cut&eacute; par la VM Zend</a>.</li>\r\n<li><strong>Interpr&eacute;tation</strong> : Les opcodes sont interpr&eacute;t&eacute;s et ex&eacute;cut&eacute;s sur la VM Zend.</li>\r\n</ul>\r\n<p>L&rsquo;image suivante montre une repr&eacute;sentation visuelle du processus d&rsquo;ex&eacute;cution de base de PHP.</p>', 2, '2021-01-04 10:37:03'),
(132, 'Bootstrap 5 : quelles nouveautés en 2020 ? ', '<h2>Exit jQuery</h2>\r\n<p>Alors que Bootstrap utilise jQuery depuis plus de 8 ans, ce <a href=\"https://www.codeur.com/blog/developpement-web-meilleurs-frameworks/\">framework</a> est devenu assez lourd, d&rsquo;autant qu&rsquo;il oblige les sites web qui l&rsquo;utilisent &agrave; le t&eacute;l&eacute;charger, ajoutant un temps de chargement parfois cons&eacute;quent, pour une biblioth&egrave;que qui ne peut &ecirc;tre utilis&eacute;e par aucun autre plugin que Bootstrap.</p>\r\n<p>jQuery a donc peu &agrave; peu <a href=\"https://www.codeur.com/blog/langages-web-frameworks-preferes/\">perdu de sa popularit&eacute; au profit d&rsquo;Angular, Vue ou React</a>, car la plupart de ces frameworks modernes fonctionnent &agrave; travers le DOM virtuel et non pas directement sur le DOM, ce qui conduit &agrave; des performances fortement am&eacute;lior&eacute;es.</p>\r\n<p>&Agrave; l&rsquo;avenir, toute requ&ecirc;te jQuery devra &ecirc;tre r&eacute;alis&eacute;e avec du code JavaScript dans Bootstrap 5, ce qui permettra de r&eacute;duire la taille ou le poids des fichiers du framework.</p>\r\n<p>&nbsp;</p>\r\n<h2>Exit Internet Explorer</h2>\r\n<p>Le glas a sonn&eacute; pour l&rsquo;un des pires cauchemars du d&eacute;veloppeur web&nbsp;: dans Bootstrap 5, la prise en charge d&rsquo;Internet Explorer 10 et 11 n&rsquo;est plus qu&rsquo;un souvenir.</p>\r\n<p>Le navigateur de Microsoft ne supportant pas les standards modernes de JavaScript ni la plupart des nouvelles propri&eacute;t&eacute;s CSS, il limitait le d&eacute;veloppeur dans la conception d&rsquo;un site web, ou bien l&rsquo;obligeait &agrave; alourdir son code pour le rendre compatible avec ce navigateur obsol&egrave;te. Fini le casse-t&ecirc;te&nbsp;!</p>', 2, '2021-01-04 10:39:41');

-- --------------------------------------------------------

--
-- Structure de la table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`) VALUES
(307, 122, 3),
(308, 123, 2),
(310, 124, 4),
(311, 125, 4),
(312, 126, 4),
(313, 127, 4),
(314, 128, 4),
(315, 129, 3),
(316, 129, 1),
(317, 130, 3),
(318, 130, 1),
(319, 130, 2),
(320, 131, 3),
(321, 131, 1),
(329, 132, 3),
(330, 132, 2);

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `name`, `create_at`) VALUES
(1, 'PHP', '2020-11-26 16:28:42'),
(2, 'JS', '2020-11-26 16:28:42'),
(3, 'HTML/CSS', '2020-11-26 16:29:46'),
(4, 'PYTHON', '2020-11-26 16:29:46');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`, `admin`) VALUES
(2, 'joe', 'joe', 'admin@admin.com', '$2y$10$oKbncqd4Jkz70PWm.QfVYuxAPPyMGYYW/4Cl5Ij1UjZi9DCh9CT96', 1),
(4, 'jjjjj', 'joe', 'elaskri.youssef.fr@gmail.com', '$2y$10$14yh1hYpkSdsz/waCQ8.KeJ/TvevG.SLbBqddEeWxKsKgsJruKaf2', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cat_post`
--
ALTER TABLE `cat_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cat` (`post_id`),
  ADD KEY `post_id` (`id_cat`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auteur` (`auteur`);

--
-- Index pour la table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Categories`
--
ALTER TABLE `Categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `cat_post`
--
ALTER TABLE `cat_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT pour la table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cat_post`
--
ALTER TABLE `cat_post`
  ADD CONSTRAINT `cat_post_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cat_post_ibfk_2` FOREIGN KEY (`id_cat`) REFERENCES `Categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`auteur`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_tag_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
