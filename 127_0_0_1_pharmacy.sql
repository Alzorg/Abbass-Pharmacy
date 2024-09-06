-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2024 at 05:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--
CREATE DATABASE IF NOT EXISTS `pharmacy` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pharmacy`;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `ref` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `prix` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date_expiration` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ref`, `nom`, `categorie`, `prix`, `description`, `date_expiration`) VALUES
(101, 'Paracétamol 500 mg', 'Médicaments en vente libre', '20 MAD', 'Antalgique et antipyrétique pour soulager les douleurs légères à modérées et la fièvre.', '2025-12-01'),
(105, 'Aspirine 100 mg', 'Médicaments en vente libre', '15 MAD', 'Anticoagulant et analgésique utilisé pour soulager les douleurs légères et prévenir les caillots sanguins.', '2025-09-01'),
(201, 'Crème Hydratante Nivea', 'Produits de soins de la peau', '45 MAD', 'Crème riche en agents hydratants pour nourrir et protéger la peau sèche.', '2025-11-01'),
(205, 'Masque Facial Garnier', 'Produits de soins de la peau', '25 MAD', 'Masque hydratant en tissu pour revitaliser la peau et lui donner un éclat instantané.', '2025-09-01'),
(301, 'Oméga-3 Nature\'s Bounty', 'Suppléments alimentaires', '80 MAD', 'Complément riche en acides gras oméga-3 pour soutenir la santé cardiovasculaire et cognitive.', '2026-05-01'),
(310, 'Multivitamines Centrum', 'Suppléments alimentaires', '60 MAD', 'Complexe de vitamines et minéraux pour soutenir les fonctions corporelles et combler les carences nutritionnelles.', '2025-12-01'),
(402, 'Shampooing Doux Klorane Bébé', 'Soins pour bébés', '40 MAD', 'Shampooing ultra-doux pour nettoyer les cheveux délicats des bébés sans irriter les yeux.', '2025-07-01'),
(403, 'Lait Hydratant Bébé Johnson\'s', 'Soins pour bébés', '45 MAD', ' Lait hydratant enrichi en vitamines pour adoucir et protéger la peau sensible des bébés.', '2025-11-01'),
(510, 'Complément de Curcuma', 'Produits de santé naturelle', '80 MAD', 'Supplément de curcuma avec de la pipérine pour ses propriétés anti-inflammatoires et antioxydantes.', '2027-03-01'),
(520, 'Miel de Manuka', 'Médicaments en vente libre', '120 MAD', 'Miel de Manuka, reconnu pour ses propriétés antibactériennes et ses bienfaits pour le système immunitaire.', '2027-02-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ref`);
