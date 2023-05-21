-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2023 at 02:18 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id_reservation` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `reservation_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id_payment` int NOT NULL,
  `emri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `karta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `data` varchar(255) NOT NULL,
  `kodi` int NOT NULL,
  `adresa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id_payment`, `emri`, `karta`, `data`, `kodi`, `adresa`) VALUES
(4, 'OLTI', '2222 2222 2222 2222', '22 / 22', 222, 'gjilan'),
(5, 'Malsor', '1111 1111 1111 1111', '11 / 11', 111, 'gjilan'),
(6, 'Malsor', '4444 4444 4444 4444', '44 / 44', 444, 'Doberqan'),
(7, 'olsa', '4155 7882 2218 2593', '11 / 25', 147, 'Ferizaj');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `isAdmin`) VALUES
(6, 'Malsor Abdyli', 'malsor.abdyli@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(7, 'Olsa Fejzullahu', 'olsafejzullahu@gmail.com', '6c031031337e6435860210a65ecafadf', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id_reservation`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id_reservation` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id_payment` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
