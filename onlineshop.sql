-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 04:33 PM
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
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(50) DEFAULT NULL,
  `productBrand` varchar(50) DEFAULT NULL,
  `productPrice` decimal(11,2) DEFAULT NULL,
  `productManufacturer` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `productBrand`, `productPrice`, `productManufacturer`) VALUES
(1, 'Zenith: Genesis', 'Zenith', '200000000.00', 'Zenith Aerospace'),
(2, 'Zenith: Odyssey', 'Zenith', '300000000.00', 'Zenith Aerospace'),
(3, 'Zenith: Navigator', 'Zenith', '400000000.00', 'Zenith Aerospace'),
(4, 'Zenith: Seeker', 'Zenith', '500000000.00', 'Zenith Aerospace'),
(5, 'Zenith: Velocity', 'Zenith', '600000000.00', 'Zenith Aerospace'),
(6, 'Zenith: OrbitDome', 'Zenith', '700000000.00', 'Zenith Aerospace'),
(7, 'Zenith: Stargazer', 'Zenith', '800000000.00', 'Zenith Aerospace'),
(8, 'Zenith: Starcruise', 'Zenith', '900000000.00', 'Zenith Aerospace');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `saleID` int(11) NOT NULL,
  `productID` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `dateOfSale` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `user_addr` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `birthdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `user_pass`, `lastname`, `firstname`, `middlename`, `user_addr`, `age`, `birthdate`) VALUES
(1, 'Shan2003', 'dfc030692d7a9bfe39ea', 'Silveo', 'Shan Marion', 'Togonon', 'Iloilo City', 20, '2003-06-06'),
(2, 'Andrew123', '1b68f63554349a09ed84', 'Tate', 'Andrew', 'Rizal', 'Romania', 38, '1976-06-29'),
(3, 'RonnieKun', '1157734689610640b42f', 'Talabucon', 'Ronnie', 'T', 'RoxasCity', 21, '2002-03-13'),
(4, 'Allen123', 'Allen_01', 'Vargas', 'Allen', 'A', 'Manduriao', 21, '2002-07-02'),
(5, 'Kitz01', '265874d0cbd67fb9816f', 'Lerez', 'Kitz', 'S', 'Alta Tierra', 21, '2002-02-05'),
(6, 'Kerby', 'fc544fb528e592e9ac07', 'Cabillin', 'Kerby', 'S', 'Ungka', 21, '2002-02-14'),
(7, 'Lee01', '5e76c28f4390e034a8f0', 'Joaquin', 'Lee', 'D', 'Pavia', 21, '2002-04-23'),
(8, 'jewsavior123', '850ce28c5e80c8a92bc5', 'Talabucon', 'Ronnie', 'Delgado', 'Iloilo City', 20, '2023-11-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`saleID`),
  ADD KEY `Sales` (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `saleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `Sales` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
