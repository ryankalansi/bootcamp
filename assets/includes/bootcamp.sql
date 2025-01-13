-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2025 at 08:19 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bootcamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'ryankalansi', '$2y$10$rRCB/lnQyR0E48Ma61.Oiu2feGe6JdlYedI3uvXbPt815NTVj7z7.', 'buburenak@gmail.com', '2025-01-10 08:54:46'),
(2, 'danu', '$2y$10$3IYswihyzdkXyoi81TZ0pONUJWb1pwXQQb8vJ9SOjjr2nywstFk..', 'danu@gmail.com', '2025-01-10 17:13:04'),
(3, 'kepin', '$2y$10$z9AUyF.KAOMDoOP.FKK.5evYtyQ1EdEowqlrzDSwGodpCTKpc21aq', 'kepin@gmail.com', '2025-01-10 17:16:16'),
(4, 'hani', '$2y$10$oy4P.RjRQ0/qkcqowoKmpuEtFQBDIFcAxqQjTISponMDYJsgqL4ca', 'hani@gmail.com', '2025-01-13 10:26:13'),
(5, 'lekale', '$2y$10$U/yZeAea9hDFxtJHFbY7GOxNFu7mPjTwGX.oDcecL09XK.IZn64Ru', 'lekale@gmail.com', '2025-01-13 17:44:20'),
(6, 'deni', '$2y$10$aIstoC8rknHzC/xFKW.d4eVojpCIlFts/hCne7EitNpcz9fFFEH1G', 'deni@gmail.com', '2025-01-13 19:01:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
