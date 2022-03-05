-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 09:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `username` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`username`, `title`, `course_code`, `faculty`, `school`, `id`) VALUES
('John', 'Doe', 'john@example.com', 'Doe', 'john@example.com', 3),
('John', 'Doe', 'john@example.com', 'Doe', 'john@example.com', 4),
('John', 'Doe', 'john@example.com', 'Doe', 'john@example.com', 5),
('John', 'Doe', 'john@example.com', 'Doe', 'john@example.com', 6),
('John', 'Doe', 'john@example.com', 'Doe', 'john@example.com', 7),
('John', 'Doe', 'john@example.com', 'Doe', 'john@example.com', 8),
('UTTKARSH', 'GIS and remote sensing', 'TDC22PD01', 'Dr. Himadri Shekhar Dey', 'SPD', 9),
('harshit', 'GIS and remote sensing', 'TDC22PD01', 'Dr. Himadri Shekhar Dey', 'SPD', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$JP1.4f5wzZkPWF9mo/vQb.N9rDuO4cA2ShurkV/WaVonIy95tENt6', '2022-03-04 13:23:55'),
(2, 'harshit', '$2y$10$4E3gOy/Fv8WYpL1DxCtkKe/0.ezLLhK.Nch5J8rtO83GRApk8Vfju', '2022-03-04 13:26:31'),
(3, 'UTTKARSH', '$2y$10$kZ0Ke4.U4tE72EmGeR/Jc.QOr/Ga8CxYrUwqqJ6rRH501sQRhndkC', '2022-03-04 14:34:53'),
(4, 'admin1', '$2y$10$30XFbXbIRy24VGCgDxmQTObTeR.MWXaDRWiEjO9jC6aI9cGn3Pliy', '2022-03-04 14:41:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
