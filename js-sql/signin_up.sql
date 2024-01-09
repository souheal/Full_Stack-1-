-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 11:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signin/up`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name_car` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name_car`, `price`, `image`, `description`) VALUES
(1, 'Bugatii', 10000000, '938.png', 'rererererwewee'),
(2, 'Ferrari', 12300000, 'images/5.png', ''),
(3, 'Rolls royce', 25000000, 'images/pngimg.com - rolls_royce_PNG18.png', ''),
(4, 'Ford', 14500000, 'pngimg.com - ford_PNG102947.png', ''),
(5, 'Tesla', 30000000, 'images/Tesla-Car-Transparent-Background.png', ''),
(6, 'Mazerati', 10000000, 'images/Maserati-PNG-File.png', ''),
(7, 'BMW', 12500000, 'images/2.png', ''),
(8, 'Land Rover', 20000000, 'images/land-rover-range-rover-car-png-25.png', ''),
(9, 'mercedes', 140000000, 'images/Mercedes-CLA-PNG.png', ''),
(10, 'Proton', 200000000, 'images/Proton-Waja-1.8X.jpg', ''),
(12, 'mercedes', 1000000000, 'images/3.jpg', 'The Best Car Ever');

-- --------------------------------------------------------

--
-- Table structure for table `get_in_touch`
--

CREATE TABLE `get_in_touch` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Number` int(128) NOT NULL,
  `Message` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `get_in_touch`
--

INSERT INTO `get_in_touch` (`id`, `name`, `Email`, `Number`, `Message`) VALUES
(1, 'wad', '', 0, ''),
(2, 'wad', 'awda@dad', 14141, 'qdqd'),
(3, 'souheal', 'mheashsouheal619@gmail.com', 1412, 'kaito_kid'),
(4, 'we', 'awe@da', 13, ''),
(5, 'souheal', 'mheashsouheal619@gmail.com', 123123123, 'fasfasfsaf'),
(6, 'souheal . mheash', 'mheashsouheal619@gmail.com', 1234, 'qweqweqweqweq'),
(7, 'redone', 'redone@gmail.com', 1412, 'Cristiano Ronaldo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Username` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Username`, `email`, `password`, `is_admin`) VALUES
(1, 'souheal', 'mheashsouheal619@gmail.com', '$2y$10$.SQU1PCbE2cEauV6YVXSF.LTL1nFbJ6v67etFREGasA6o8yML5JsW', 1),
(2, 'awd', '123@gmail.com', '$2y$10$UxRsZVH3IZiEHCK8JYcLwe0rv6gXSkd/7pyF4YSL5PO2aIRR3u3yO', 0),
(3, 'souheal', 'souheal@gmail.com', '$2y$10$H2mVj4H6WKyAxD2GTeM5W.tIvHXIxhJfXLw/Gonn9cmMkJWcMgumm', 1),
(4, 'sd', 'ad@gmail.com', '$2y$10$r3.PQHUDom0IHwwaP5ygCOGCd/n7fBcIg/HDsyKEllwv7KGIG2gSi', 1),
(5, 'dd', 'dd@gmail.com', '$2y$10$/dGRz2qCtSlboGRIdtqR8.np5kZVe5mUI2SljaAfh/EgJ/Bhoumxe', 1),
(6, 'abeer', 'abeer@gmail.com', '$2y$10$.NVITPMeV6kjMdCJYKc.l.9eFAuJ/vPZVTpZX0qr6M2wH5U3IO/w.', 1),
(7, 'ee', 'ee@gmail.com', '$2y$10$dOE8i52.oBz1pXkoYbwaQugfK1WJfk3IfrpOPlu68z4yn4cPdgaDi', 0),
(8, 'souheal', 'mheashsouheal19@gmail.com', '$2y$10$zwJgdZ.ZlzRw2NhOhqo44eJZ9bBbvWe5WPYYiPK6BDhSjeBonfPmS', 0),
(9, 'ramie', 'ramie@gmail.com', '$2y$10$CsLWfrxtrN03oSuePWMWbOvYGA8PCWr2lvmQb17leg5JT9H8NrcbW', 1),
(10, 'ahmad', 'ahmad@gmail.com', '$2y$10$YXu1Xr0doaJrYFHqbYbjWud/5NC4Xo/bxrKNws3yg0Pd6GKuEPEbu', 1),
(11, 'Ronaldo', 'Ronaldo@gmail.com', '$2y$10$bfTgpwMK1r123Uuw7mapO.pQ/sifdzbFazO.NUY4LlDY7JgLP1MPa', 0),
(12, 'ghada', 'ghada@gmail.com', '$2y$10$cfzQO9BMhbuOLshqPya5cuFcdwEU3DMwEp7RycqRAuUSyWuRqCAeq', 0),
(13, 'nazeer', 'nazeer@gmail.com', '$2y$10$cLZbK7XBsVf6rWofrOCqq.mWOdHomx4DzszQEn6mcVkOMY5yWMgFy', 0),
(14, 'souheal', 'ss@gmail.com', '$2y$10$8H2RRjz1rdVRQzpW21RWHe6TDftEmONoLvfjhH23w.zXlIMAex5RC', 1),
(15, 'souheal', 'mheash@gmail.com', '$2y$10$oAtl7K4vz46KkosNYRyScOXmUGRTLUf6ilB1Ox2wn.ZvNAOX0NxHO', 0),
(16, 'Cristiano', 'Cristiano@gmail.com', '$2y$10$sE0j0tpLzYrcZGcPtvS9jO6qiXUrouuHP84dlXXE2CQPNS6wEqRQy', 0),
(17, 'ghaith', 'ghaith@gmai.com', '$2y$10$Y0WzlDC8wgfaBpTVcIE2R.68q.mEExU7WIjdn2Wdul.FCCKJRwDb2', 0),
(18, '1234', '1234@gmail.com', '$2y$10$YzyJi0BBL0FKQdGmxyK2geBcfH2zGy/9WM6d1EHfxAWTSehPP9tam', 0),
(19, 'hamze', 'hamze@gmail.com', '$2y$10$46Ert6moFXMJKzlgTYPRXOnsRrqedgJyidXdrwmTlm.82TIV0bu6m', 0),
(20, 'fefo', 'fefo@gmail.com', '$2y$10$TEsQ/awnPzm6mLV89b3GVODjM15rEQIHoTteMPFfAdvztzPm5gUO6', 0),
(21, 'dadda', 'dadd@gmail.com', '$2y$10$PMbfvoWAm/m.mEywx8o.re7a8yONFVmlbphgXupJzHgPKNTY6AuoO', 1),
(22, 'redone', 'redone@gmail.com', '$2y$10$M...NZMcOZil2xSvq6SiA.on4CSdHcOvl2WCBW0.zb7yMRXUBgflW', 0),
(23, 'red', 'red@gmail.com', '$2y$10$SVrQN/2n/dIGaK8/gWs4x.I3jyW7DJv1D/AaR2.OJUWvf/Bf9W0Ti', 1),
(24, '12345', '12345@gmail.com', '$2y$10$294EQPJPlzHDR8nBdGlOJuIUahT.n.gTi912KUfUFwURN0w/MwDoy', 0),
(25, '1212', '1212@gmail.com', '$2y$10$XHrC2UatHD/lCHP2rdnGV.jFrvusgAFdpE6pX4fuLigN.GCzHtUem', 0),
(26, '4343', '3434@gmail.com', '$2y$10$ZwSz.6zOuGsx7wA.1CFIQupR7DJVzLmXFzb.6eXG.L5t8fAJqB1j.', 0),
(27, '435', '3434@gmail.com3', '$2y$10$R772GhZ23f2d4adYeM3kk.U7NBxcFQZOs6ZauUfdukjTznO/l5sFm', 0),
(28, 'dwf', '213@gmail.com', '$2y$10$OvSdgo6Ad//C8hUdvqhq3.7zmxYznFeUYfuwQjWA4lEAPofCVp7ze', 1),
(29, 'qeqe', 'mdadad@gmail.com', '$2y$10$FF.pXcQTwPiz1s8k7avAA.ETw3KjDB8ANTCDOMpCY.H0KN/1M0Srq', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_in_touch`
--
ALTER TABLE `get_in_touch`
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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `get_in_touch`
--
ALTER TABLE `get_in_touch`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
