-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 18, 2024 at 05:23 PM
-- Server version: 8.0.35
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors_230012`
--

CREATE TABLE `doctors_230012` (
  `doctor_id_230012` int NOT NULL,
  `doctor_name_230012` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `doctor_gender_230012` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `doctor_address_230012` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `doctor_phone_230012` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `doctor_photo_230012` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors_230012`
--

INSERT INTO `doctors_230012` (`doctor_id_230012`, `doctor_name_230012`, `doctor_gender_230012`, `doctor_address_230012`, `doctor_phone_230012`, `doctor_photo_230012`) VALUES
(1, 'Dr. agus ganteng', 'Female', 'jalan bandung\r\n', '02147483647', 'hewan 5.jpeg'),
(4, 'Dr. Ghina', 'Female', 'jalan bandung', '019238410', 'hewan 2.jpeg'),
(5, 'Dr. Gunawan', 'Male', 'tuluagung', '08954223941', 'hewan 4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `medicals_230012`
--

CREATE TABLE `medicals_230012` (
  `mr_id_230012` int NOT NULL,
  `mr_date_230012` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pet_id_230012` int NOT NULL,
  `doctor_id_230012` int NOT NULL,
  `symptom_230012` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `diagnose_230012` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `treatment_230012` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cost_230012` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicals_230012`
--

INSERT INTO `medicals_230012` (`mr_id_230012`, `mr_date_230012`, `pet_id_230012`, `doctor_id_230012`, `symptom_230012`, `diagnose_230012`, `treatment_230012`, `cost_230012`) VALUES
(1, '2024-12-11 02:07:20', 1, 1, 'Kejang Kejang', '123', 'Pengobatan secara rutin', 140000),
(2, '2024-12-11 02:07:23', 1, 1, 'FFFF', '123', 'AAA', 10000),
(3, '2024-12-11 02:10:14', 1, 1, 'Kejang', 'Epilepsi', 'Terapi', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `medicines_230012`
--

CREATE TABLE `medicines_230012` (
  `idmed_230012` int NOT NULL,
  `med_name_230012` varchar(50) NOT NULL,
  `med_type_230012` varchar(20) NOT NULL,
  `med_unit_230012` varchar(20) NOT NULL,
  `med_price_230012` int NOT NULL,
  `med_description_230012` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pets_230012`
--

CREATE TABLE `pets_230012` (
  `pet_id_230012` int NOT NULL,
  `pet_name_230012` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `pet_type_230012` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `pet_gender_230012` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `pet_age_230012` int NOT NULL,
  `pet_owner_230012` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pet_address_230012` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pet_phone_230012` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `pet_photo_230012` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets_230012`
--

INSERT INTO `pets_230012` (`pet_id_230012`, `pet_name_230012`, `pet_type_230012`, `pet_gender_230012`, `pet_age_230012`, `pet_owner_230012`, `pet_address_230012`, `pet_phone_230012`, `pet_photo_230012`) VALUES
(1, 'Chiua', 'Dog', 'Male', 3, 'Gita', 'Bandung Selatan', '098242343', 'hewan 3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users_230012`
--

CREATE TABLE `users_230012` (
  `user_id_230012` int NOT NULL,
  `username_230012` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password_230012` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_type_230012` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `fullname_230012` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_photo_230012` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_230012`
--

INSERT INTO `users_230012` (`user_id_230012`, `username_230012`, `password_230012`, `user_type_230012`, `fullname_230012`, `user_photo_230012`) VALUES
(1, 'ganteng', '$2y$10$J9aS3TyPH/Rda4kCxpv2duv1Jo4PtcFkACrEpe8B7gsqeiyuxsEfq', 'Manager', 'achdian rizki', 'hewan 2.jpeg'),
(5, 'Agus', '$2y$10$N.urFOlDIH91lonUwtqug.A.s/6vBsPfcogRFGZKSB3aaZ.8h3ay2', 'Staff', 'Agus Fahri', 'hewan 3.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors_230012`
--
ALTER TABLE `doctors_230012`
  ADD PRIMARY KEY (`doctor_id_230012`);

--
-- Indexes for table `medicals_230012`
--
ALTER TABLE `medicals_230012`
  ADD PRIMARY KEY (`mr_id_230012`),
  ADD KEY `pet_id_0012` (`pet_id_230012`,`doctor_id_230012`),
  ADD KEY `doctor_id_0012` (`doctor_id_230012`);

--
-- Indexes for table `medicines_230012`
--
ALTER TABLE `medicines_230012`
  ADD PRIMARY KEY (`idmed_230012`);

--
-- Indexes for table `pets_230012`
--
ALTER TABLE `pets_230012`
  ADD PRIMARY KEY (`pet_id_230012`);

--
-- Indexes for table `users_230012`
--
ALTER TABLE `users_230012`
  ADD PRIMARY KEY (`user_id_230012`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors_230012`
--
ALTER TABLE `doctors_230012`
  MODIFY `doctor_id_230012` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medicals_230012`
--
ALTER TABLE `medicals_230012`
  MODIFY `mr_id_230012` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicines_230012`
--
ALTER TABLE `medicines_230012`
  MODIFY `idmed_230012` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pets_230012`
--
ALTER TABLE `pets_230012`
  MODIFY `pet_id_230012` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_230012`
--
ALTER TABLE `users_230012`
  MODIFY `user_id_230012` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medicals_230012`
--
ALTER TABLE `medicals_230012`
  ADD CONSTRAINT `medicals_230012_ibfk_1` FOREIGN KEY (`pet_id_230012`) REFERENCES `pets_230012` (`pet_id_230012`),
  ADD CONSTRAINT `medicals_230012_ibfk_2` FOREIGN KEY (`doctor_id_230012`) REFERENCES `doctors_230012` (`doctor_id_230012`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
