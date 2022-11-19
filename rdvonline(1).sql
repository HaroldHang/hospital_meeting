-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 19 nov. 2022 à 10:42
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rdvonline`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Quatier` varchar(255) NOT NULL,
  `Numero` char(255) NOT NULL,
  `Profession` varchar(255) NOT NULL,
  `Sexe` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_client`, `identifiant`, `Nom`, `Prenom`, `Date`, `Quatier`, `Numero`, `Profession`, `Sexe`) VALUES
(74, '634037f5b3918', '', '', '0000-00-00', '', '', '', ''),
(75, '6340385e01fa2', 'HOUNPKATIN', 'Prince', '2022-10-06', 'YENAWA', '89898989', 'Commercante', ''),
(76, '6340b561151d3', 'Test', 'Testeeur', '2023-01-03', 'Misserete', '1223456', 'Etudiant', ''),
(77, '6340b6b92e037', 'Un', 'test', '1999-12-22', 'Quartier', '108631144', 'Etudiant', ''),
(78, '6340b85256d23', 'Test', 'Tester', '2022-08-10', 'Misser', '4433964', 'Etudiant', ''),
(79, '6340b8b8b14f9', 'Deux', 'Test', '1999-04-01', 'hhhgsj', '4966333', 'Etudiant', ''),
(80, '6340b97e80f95', 'Trois', 'test', '1999-12-22', 'djcdjsvdv', '18', 'jddv', ''),
(81, '6340b9e388b99', 'Quatre', 'test', '1999-12-11', 'kcdsjdsbv', '28', 'dnkvdvdv', ''),
(82, '6340ba1ac27d1', 'Cinq', 'test', '1999-12-22', 'kxhvjb', '29', 'cjdsbvcdsv', ''),
(83, '6340bb913757f', 'Six', 'Test', '1999-12-22', 'gcsdcdsc', '11633633', 'Etudiant', ''),
(84, '6344e42f4c426', 'Mon', 'Test', '1999-12-20', 'Porto', '22963471236', 'Etudiant', 'Femme'),
(85, '3680', 'Thomas', 'Tom', '2003-01-02', 'Hier', '22951989876', 'Etude', 'Femme'),
(86, '3040', 'Un', 'Autre', '1999-11-11', 'Hier', '22967789123', 'helling', 'Homme'),
(87, '5929', 'Prince  ', 'Prince', '2022-11-06', 'Sémè', '54586699', 'Etudiant', 'Homme'),
(88, '2670', 'DJOFFON', 'Harold', '2001-04-19', 'YENAWA', '96699960', 'Etudiant', 'Homme'),
(89, '9892', 'ASSOGBA', 'François', '1990-03-09', 'YENAWA', '67709897', 'Developpeur', 'Homme');

-- --------------------------------------------------------

--
-- Structure de la table `medecins`
--

DROP TABLE IF EXISTS `medecins`;
CREATE TABLE IF NOT EXISTS `medecins` (
  `id_med` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  `id_specialite` int NOT NULL,
  PRIMARY KEY (`id_med`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `medecins`
--

INSERT INTO `medecins` (`id_med`, `nom`, `prenom`, `email`, `mdp`, `id_specialite`) VALUES
(1, 'Paul', 'ADANDE', 'medecinpaul@gmail.com', 'medecinpaul', 1),
(2, 'ADJIBADE', 'Jean', 'jean@gmail.com', 'medecinjean', 2);

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `id_paiement` int NOT NULL AUTO_INCREMENT,
  `id_rendezvous` int DEFAULT NULL,
  `motif` text NOT NULL,
  `prix` int NOT NULL,
  `id_specialite` int DEFAULT NULL,
  `id_patient` int DEFAULT NULL,
  `paytype` enum('rendezvous','paiement','','') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'rendezvous',
  `nom` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `prenom` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `date_created` date NOT NULL,
  PRIMARY KEY (`id_paiement`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`id_paiement`, `id_rendezvous`, `motif`, `prix`, `id_specialite`, `id_patient`, `paytype`, `nom`, `prenom`, `date_created`) VALUES
(1, 24, 'CONSULTATION GENERALISTE', 5250, NULL, NULL, 'rendezvous', NULL, NULL, '0000-00-00'),
(2, 25, 'CONSULTATION D\'URGENCE', 12000, NULL, NULL, 'rendezvous', NULL, NULL, '0000-00-00'),
(3, 26, 'CONSULTATION CARDIOLOGIQUE', 7500, NULL, NULL, 'rendezvous', NULL, NULL, '0000-00-00'),
(4, NULL, 'OK', 744, 1, 25, 'rendezvous', 'un', 'test', '0000-00-00'),
(5, NULL, 'CONSULTATION GENERALISTE', 5250, 1, 79, 'paiement', 'Moi', 'Meme', '2022-11-03'),
(6, NULL, 'CONSULTATION D\'URGENCE', 12000, 1, 79, 'paiement', 'Toi', 'Aussi', '2022-11-03'),
(7, NULL, 'CONSULTATION D\'URGENCE', 12000, 1, 79, 'paiement', 'Then', 'Now', '2022-11-03'),
(8, NULL, 'ECG', 10500, 1, 87, 'paiement', '', '', '2022-11-06'),
(9, 27, 'ECG', 10500, NULL, NULL, 'rendezvous', NULL, NULL, '0000-00-00'),
(10, 28, 'REFRACTO-AUTOMATIQUE', 4500, NULL, NULL, 'rendezvous', NULL, NULL, '0000-00-00'),
(11, NULL, 'REFRACTO-AUTOMATIQUE', 4500, 2, 87, 'paiement', 'jp', 'jp', '2022-11-06'),
(12, 29, 'CONSULTATION GENERALISTE', 5250, NULL, NULL, 'rendezvous', NULL, NULL, '0000-00-00'),
(13, NULL, 'CONSULTATION GENERALISTE', 5250, 1, 88, 'paiement', 'HOUNPKATIN ', 'Grace', '2022-11-10'),
(14, NULL, 'ECG', 10500, 1, 88, 'paiement', 'HOUNKPATIN', 'Grace', '2022-11-10'),
(15, 30, 'CONSULTATION D\'URGENCE', 12000, NULL, NULL, 'rendezvous', NULL, NULL, '0000-00-00'),
(16, 31, 'CONSULTATION CARDIOLOGIQUE', 7500, NULL, NULL, 'rendezvous', NULL, NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

DROP TABLE IF EXISTS `rendezvous`;
CREATE TABLE IF NOT EXISTS `rendezvous` (
  `id_rdv` int NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_rdv` date NOT NULL,
  `heure_rdv` varchar(50) NOT NULL,
  `id_patient` int NOT NULL,
  `id_specialite` int NOT NULL,
  PRIMARY KEY (`id_rdv`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `rendezvous`
--

INSERT INTO `rendezvous` (`id_rdv`, `description`, `date_creation`, `date_rdv`, `heure_rdv`, `id_patient`, `id_specialite`) VALUES
(2, ' Un rdv', '2022-10-21 02:33:45', '2022-10-16', '11h', 79, 1),
(3, ' Un second rdv\r\n', '2022-10-21 02:35:33', '2022-10-21', '12h', 79, 1),
(4, ' Un troisieme rdv', '2022-10-21 02:35:51', '2022-10-18', '14h', 79, 1),
(5, ' Un dernier rdv now', '2022-10-21 03:29:12', '2022-10-18', '14h', 79, 1),
(6, 'Ainsi qu\'un rendez vous', '2022-10-21 03:30:13', '2022-10-21', '16h', 79, 1),
(7, ' Succes rdv', '2022-10-21 03:39:56', '2022-10-18', '15h', 79, 1),
(8, ' Un essaie', '2022-10-21 03:40:55', '2022-10-16', '11h', 79, 1),
(9, ' rdv', '2022-10-21 03:41:45', '2022-10-22', '16h', 79, 1),
(10, ' un rdv', '2022-10-21 03:42:54', '2022-10-19', '16h', 79, 1),
(11, 'des rdv', '2022-10-21 03:44:25', '2022-10-18', '16h', 79, 1),
(12, ' Un certain rdv', '2022-10-21 04:40:45', '2022-10-26', '11h', 79, 1),
(13, 'Essaie de rdv', '2022-10-21 04:57:33', '2022-10-25', '09h', 79, 1),
(14, ' UN rdv a la cardio', '2022-10-23 02:55:55', '2022-10-23', '09h', 79, 1),
(15, ' Un rdv a l\'ophta', '2022-10-23 02:58:23', '2022-10-23', '09h', 79, 2),
(16, ' Un rendez vous de test chez le medecin\n', '2022-10-24 01:17:59', '2022-10-24', '11h', 79, 1),
(17, ' Un autre encore', '2022-10-24 01:28:54', '2022-10-24', '14h', 79, 1),
(18, ' Rdv test', '2022-10-24 01:49:26', '2022-10-24', '08h', 75, 1),
(19, 'Un rdv', '2022-10-28 04:13:40', '2022-10-28', '08h', 79, 1),
(20, ' Un rdv', '2022-10-29 04:06:03', '2022-10-29', '09h', 79, 1),
(21, ' Un rdv', '2022-10-29 04:54:17', '2022-10-29', '11h', 79, 1),
(22, 'Rdv', '2022-10-29 04:58:47', '2022-10-29', '10h', 79, 1),
(23, ' Une consultation', '2022-10-29 05:30:10', '2022-10-29', '12h', 79, 1),
(24, ' Un test', '2022-10-29 05:31:56', '2022-10-29', '14h', 79, 1),
(25, ' Une urgence', '2022-10-29 05:44:53', '2022-10-31', '09h', 79, 1),
(26, ' Je prends le rendez-vous', '2022-11-01 09:50:47', '2022-11-02', '09h', 79, 1),
(27, ' hh', '2022-11-06 13:52:37', '2022-11-06', '08h', 87, 1),
(28, ' hh', '2022-11-06 13:57:54', '2022-11-06', '08h', 87, 2),
(29, ' Consultation généraliste', '2022-11-10 02:34:37', '2022-11-10', '08h', 88, 1),
(30, ' kvfcgh', '2022-11-12 20:21:05', '2022-11-13', '08h', 89, 1),
(31, ' gdgfhf', '2022-11-12 20:25:16', '2022-11-13', '09h', 89, 1);

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

DROP TABLE IF EXISTS `specialite`;
CREATE TABLE IF NOT EXISTS `specialite` (
  `id_specialite` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text NOT NULL,
  `url_image` text NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'tout',
  PRIMARY KEY (`id_specialite`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`id_specialite`, `nom`, `description`, `url_image`, `type`) VALUES
(1, 'Cardiologie', 'La cardiologie est une branche de la médecine qui traite des troubles du cœur: hypertension artérielle, insuffisance cardiaque, troubles du rythme cardiaque etc.', 'cardiology-heart.png', 'tout'),
(2, 'Ophtamologie', 'Discipline médicale qui s’occupe des maladies liées aux affections oculaires', 'eye.png', 'tout'),
(3, 'Dermatologie', 'La dermatologie est la spécialité médicale qui s\'intéresse à l\'étude de la peau, des cheveux, des poils et des ongles ainsi qu\'à la prévention, au diagnostic et au traitement des maladies qui les touchent.', 'dermato.jpg', 'tout'),
(4, 'Neurologie', 'La neurologie est la spécialité médicale clinique qui étudie l\'ensemble des maladies du système nerveux et en particulier du cerveau.', 'mental-health.webp', 'tout'),
(5, 'ORL', 'L\'otorhinolaryngologie représente une branche de la médecine spécialisée dans le diagnostic et le traitement des troubles du nez, de la gorge, de l\'oreille, et de la région tête et cou.', 'orl.jpg', 'tout'),
(6, 'Stomatologie', 'Discipline médicale qui traite des maladies liées aux affections bucco-dentaires (la bouche et des dents).', 'dentist.webp', 'tout'),
(7, 'Imagerie medical', 'Spécialité médicale consistant à produire des images du corps humain vivant et à les interpréter à des fins diagnostiques, thérapeutiques.', 'isometric-medical', 'tout'),
(8, 'Urgence', 'Les urgences sont le service hospitalier chargé d\'accueillir et de prendre en charge les malades et les blessés qui se présentent d\'eux-mêmes ou sont amenés par les services de secours (pompiers...).', 'first-aid-help-bag', 'paiement');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
