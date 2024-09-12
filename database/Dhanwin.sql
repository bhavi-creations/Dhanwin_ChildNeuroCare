-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2024 at 12:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srinivasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `photos` text NOT NULL,
  `video` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `photos`, `video`, `time`) VALUES
(5, 'Sample Blog', '<p>This Is the sample blog</p>', '[\"66e2b44ba3021_1726133323.jpg\",\"66e2b44ba315c_1726133323.jpg\",\"66e2b44ba3281_1726133323.jpg\",\"66e2b44ba3393_1726133323.webp\"]', '66e2b44ba2e83_1726133323.mp4', '2024-09-12 09:28:43'),
(6, 'sample blog 2', '<p>The Sample Blog 2</p>', '[\"66e2b54a1d138_1726133578.jpg\",\"66e2b54a1d314_1726133578.jpg\",\"66e2b54a1d47f_1726133578.jpg\",\"66e2b54a1d5e4_1726133578.jpg\"]', '66e2b54a1cf4d_1726133578.mp4', '2024-09-12 09:32:58'),
(7, 'Sample Blog 3', '<p>The Sample Blog 3</p>', '[\"66e2b58897db6_1726133640.jpg\",\"66e2b58897edf_1726133640.jpg\",\"66e2b5889804d_1726133640.jpg\",\"66e2b588981dc_1726133640.webp\"]', '66e2b58897c05_1726133640.mp4', '2024-09-12 09:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
(4, 'askoncologist', 'oncologist', 'askoncologist.@gmail.com', 'd54858f91c9a89ef37862262e543ffc2', '2024-06-17 09:54:17'),
(5, 'dhanwin', 'dhanwin', 'dhanwin@gmail.com', 'b34078f2746e9a27f8ef8e6244bf6e6a', '2024-09-12 09:19:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`first_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
