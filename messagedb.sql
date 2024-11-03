-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 juin 2024 à 19:53
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `messagedb`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `compte_id` int(11) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `compte_id` int(11) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `compte_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `role` enum('admin','client') NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`compte_id`, `email`, `mot_de_passe`, `role`, `date_creation`) VALUES
(0, 'soaadchaf@gmail.com', '$2y$10$V/wUuN9SBi5QXTwgVEiU5O4BvLAT8nnXOwPLdE5ohLyI96rXm623.', 'client', '2024-06-03 07:23:54'),
(0, 'saraCh@gmail.com', '$2y$10$chtC40suy.PfRDEHKreI..2JulMJRe7/Si1RjTrdlu/3IE22.JlJy', 'client', '2024-06-03 07:24:49'),
(0, 'someone@gmail.com', '$2y$10$Fzii2NfpvnF6ZaUMxuSH/uMUW70mBL6qOJaj3/pk8F6CczQ951q9e', 'client', '2024-06-03 07:39:12'),
(0, 'soaadcha@gmail.com', '$2y$10$Nl8djEQ691kG7kxbdEVCWuchP7XjwdG0Uwl7vomsy3vg9DFf1qfWK', 'client', '2024-06-03 13:11:53'),
(0, 'azerty@gmail.com', '$2y$10$7sRvkUm9K0GSnt3Qo8uHYemmPmFzW0tbv1BLhm8Ygh61yeWMCpms6', 'client', '2024-06-03 13:13:58'),
(0, 'qsdf@gmail.com', '$2y$10$WkOPe8227tsjOjhsDkZJIORYLTsXqwRl0/dXhUwKpOUT8RifVVEVi', 'client', '2024-06-03 13:25:54');

-- --------------------------------------------------------

--
-- Structure de la table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `service` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `requests`
--

INSERT INTO `requests` (`id`, `full_name`, `email`, `phone_number`, `service`, `message`, `created_at`) VALUES
(0, 'someone', 'ipsummic@gmail.com', '068743256', 'goutte à goutte', 'aaaaaaaaaaaaaaa\r\nbbbbbbbbbbbbbb\r\nccccccccccccc', '2024-06-03 07:37:30'),
(0, 'soaad', 'ipsummic@gmail.com', '09986', 'goutte à goutte', 'VFDGFDGRETRYJKJ?', '2024-06-03 16:47:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
