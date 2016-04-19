-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `attack` int(11) NOT NULL,
  `defence` int(11) NOT NULL,
  `health` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `timeOut` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `attack`, `defence`, `health`, `wins`, `rank`, `timeOut`) VALUES
(3, 'Dobromir', '81dc9bdb52d04dc20036dbd8313ed055', 'test@abv.bg', 5, 5, 100, 26, 3, '2016-04-17 16:30:25'),
(6, 'Ivan', '81dc9bdb52d04dc20036dbd8313ed055', 'test1@abv.bg', 5, 5, 100, 4, 0, '2016-04-17 16:25:56'),
(7, 'Valeri', '81dc9bdb52d04dc20036dbd8313ed055', 'valeri@malkokote.com', 5, 5, 100, 4, 0, '2016-04-17 16:26:22'),
(8, 'Petar', '81dc9bdb52d04dc20036dbd8313ed055', 'asd@asad.com', 5, 5, 100, 4, 0, '2016-04-17 16:37:28'),
(14, 'Georgi', '81dc9bdb52d04dc20036dbd8313ed055', 'georgi@asd.com', 5, 5, 100, 0, 0, '2016-04-17 16:09:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
