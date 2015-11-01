-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 01 Novembre 2015 à 14:46
-- Version du serveur: 5.5.46-0ubuntu0.14.04.2
-- Version de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `immobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `enable` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `ads`
--

INSERT INTO `ads` (`id`, `title`, `description`, `created_at`, `updated_at`, `enable`) VALUES
(1, 'Ma 1ere annonce!', '<h1>HTML Ipsum Presents</h1>\r\n	       \r\n<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>\r\n\r\n<h2>Header Level 2</h2>\r\n	       \r\n<ol>\r\n   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>\r\n   <li>Aliquam tincidunt mauris eu risus.</li>\r\n</ol>\r\n\r\n<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>\r\n\r\n<h3>Header Level 3</h3>\r\n\r\n<ul>\r\n   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>\r\n   <li>Aliquam tincidunt mauris eu risus.</li>\r\n</ul>\r\n\r\n<pre><code>\r\n#header h1 a { \r\n	display: block; \r\n	width: 300px; \r\n	height: 80px; \r\n}\r\n</code></pre>', NULL, '2015-10-30 08:18:00', 1),
(2, 'Ma 2nd annonce', '<ul>\r\n   <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>\r\n   <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>\r\n   <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>\r\n   <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>\r\n</ul>\r\n            ', NULL, '2015-10-07 06:15:00', 1),
(7, 'ici et la', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fringilla, risus vitae molestie congue, turpis dolor tincidunt massa, sit amet fringilla erat sem a urna. Fusce ut rutrum leo. Nulla tempor turpis urna, id rutrum quam malesuada ut. Curabitur eu convallis justo. Suspendisse at tristique diam. Nulla at urna aliquet libero pellentesque iaculis. Nullam elementum ultricies lorem sed rhoncus. Vestibulum condimentum laoreet sapien at volutpat. Quisque fringilla ipsum ut arcu viverra, eu varius magna lobortis. Ut at arcu urna. Mauris tempus nulla id erat sagittis, ut euismod est ultricies.\r\n', '2015-10-01 00:00:00', '2015-10-02 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(250) DEFAULT NULL,
  `photo` varchar(600) DEFAULT NULL,
  `description` varchar(160) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `super_admin` tinyint(1) DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `authentificated_at` datetime DEFAULT NULL,
  `ip` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `lastname`, `email`, `password`, `firstname`, `photo`, `description`, `remember_token`, `created_at`, `updated_at`, `active`, `super_admin`, `expiration_date`, `authentificated_at`, `ip`) VALUES
(1, 'admin', 'admin@admin.fr', '$2y$10$cj.VJ/mDiCkzx/DybP4r8u8lhJQa/jmx0czygrHadP9OMDSi5FB4i', 'test', 'http://perfly.net/pinture/hd/hd_50.jpg', '', 'BK8Flm2gnKwqIM35gFgqNYeM3MVzCX4MftW2CeVD5goRMzXI7PQkn7gAmNwt', '2015-10-06 08:22:19', '2015-10-06 06:22:19', 1, 1, '2015-09-30 00:00:00', NULL, NULL),
(4, 'admin1', 'admin1@admin.fr', '$2y$10$H9FzUxqVNlKW/r2BPd.48upO1iT0npgQxc3iPDYql9FsCfvQeV6Fa', NULL, 'http://www.wizbii.com/profile/boyer-julien-56/avat...', '', '8e7aVyThSUnsZsz85JeJPDyfA1803qmgUChcV6AN4tqSJX3VzIdmuU6qA88J', '2015-10-07 21:04:09', '2015-09-10 09:03:19', 1, NULL, NULL, NULL, NULL),
(77, 'Boyer', 'juju@meetserious.com', '$2y$10$6evE95FXtic6Hwmu3FpS.uk6gN9yee2xq3/PDLYs01Hs3/PfTYhMW', 'julien', 'https://remixcv-cache.s3-eu-west-1.amazonaws.com/user_thumbnail/1374393875-f175462adf69e6f654469146f8f7ac36.jpeg', 'blablablablablabla...', '9o2yyvhdzIhT9MEo5flpIW3uhFF3CzNnj3dLqB1I6ZxdjeBzjAz4WUJWQwLa', '2015-10-31 10:20:01', '2015-10-31 09:20:01', 1, NULL, '2016-10-31 10:02:59', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
