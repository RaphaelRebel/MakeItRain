-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 28, 2021 at 07:26 PM
-- Server version: 5.7.32
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `comics`
--

-- --------------------------------------------------------

--
-- Table structure for table `comics`
--

CREATE TABLE `comics` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(30) NOT NULL,
  `prize` int(11) DEFAULT '0',
  `seller` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comics`
--

INSERT INTO `comics` (`id`, `image`, `title`, `prize`, `seller`) VALUES
(12, '6404a2dc5ee3f47a96372ade76bba9eaa80d23d7.gif', 'A comic', 4, 1),
(13, 'd0f66aedf29bc47c7619eac559e8370ffc52cb36.jpg', 'a comic', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `voornaam`, `achternaam`, `email`) VALUES
(1, '22503', '$2y$10$xgO6W6gnUOEU4jWytQFsHO3XkYVCimktwaQ25gRCVmbgdzEacGmEO', 'raphael', 'rebel', 'raphaelrebel@live.com'),
(2, 'testtest', '$2y$10$7plChAG33TZpKBf1EuJ79ugVXigvdB0jLNFV9lWeEp1ygvWxRzuAC', 'henk', 'henk', 'testhenk@live.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comics`
--
ALTER TABLE `comics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comics`
--
ALTER TABLE `comics`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
