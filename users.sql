-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: localhost
-- Χρόνος δημιουργίας: 15 Ιαν 2017 στις 21:48:01
-- Έκδοση διακομιστή: 10.1.19-MariaDB
-- Έκδοση PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `euromed`
--
CREATE DATABASE IF NOT EXISTS `euromed` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `euromed`;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user_has_file`
--

CREATE TABLE `user_has_file` (
  `user_email` varchar(100) NOT NULL,
  `file` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(70) NOT NULL,
  `last_name` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthday` date DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `newsletter` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `birthday`, `password`, `country`, `city`, `address`, `zip`, `phone`, `newsletter`) VALUES
(43, 'Richard', 'Stallman', 'stallman@stallman.com', NULL, '$2y$10$YJqxAtMkBnMZ07Go82hjWOxFoOHGVtIDQgSE4X94SOllhsyG2wbdq', NULL, NULL, NULL, NULL, NULL, 0),
(44, 'Olga', 'Pavlova', 'olga@moscow.edu', NULL, '$2y$10$WtR7Qt/hRGmgzQ4bri3LxeAvpHbWu5wTXJZf18tbjxRB869FEaPRS', NULL, NULL, NULL, NULL, NULL, 0),
(45, 'Alexis', 'Alexiou', 'alexis@corporate.com', NULL, '$2y$10$vp/QgSNTL.yyqdATsZEAq.hRH1uMKGJBlo7aKa3ZFQEnP931jDr36', NULL, NULL, NULL, NULL, NULL, 0);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `user_has_file`
--
ALTER TABLE `user_has_file`
  ADD PRIMARY KEY (`user_email`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
