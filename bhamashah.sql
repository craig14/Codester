-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 09:32 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhamashah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` varchar(11) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Password`) VALUES
('system', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `Id` int(11) NOT NULL,
  `Bid` varchar(11) NOT NULL,
  `Attendance` int(11) DEFAULT '0',
  `Earning` int(11) DEFAULT NULL,
  `Investment` int(11) DEFAULT NULL,
  `skills` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`Id`, `Bid`, `Attendance`, `Earning`, `Investment`, `skills`) VALUES
(1, '12345987655', 90, NULL, NULL, NULL),
(2, '78945612301', 0, 60, 70, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `existingskill`
--

CREATE TABLE `existingskill` (
  `Id` int(11) NOT NULL,
  `Bid` varchar(11) NOT NULL,
  `Skill` varchar(25) DEFAULT NULL,
  `DateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `existingskill`
--

INSERT INTO `existingskill` (`Id`, `Bid`, `Skill`, `DateCreated`) VALUES
(4, '12345987655', NULL, '2018-07-26 18:55:39'),
(5, '78945612301', NULL, '2018-07-26 18:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`) VALUES
(15, 'apurv', 'apurv@gmail.com', 'good'),
(16, 'adarsh', 'adarsh@gmail.com', 'bad');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `Id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Training_Center` varchar(60) NOT NULL,
  `Delivery_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`Id`, `description`, `Quantity`, `Training_Center`, `Delivery_Date`) VALUES
(1, 'knitted table cloth', 40, 'shilp', '2018-07-31'),
(2, 'knitted table cloth', 40, 'shilp', '2018-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `CAddress` varchar(60) NOT NULL,
  `PAddress` varchar(60) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Aadhar` int(12) NOT NULL,
  `Bid` int(11) NOT NULL,
  `Acc` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`Id`, `Name`, `PhoneNo`, `DOB`, `CAddress`, `PAddress`, `Email`, `Aadhar`, `Bid`, `Acc`) VALUES
(1, 'sarika', 2147483647, '1994-06-14', 'jamshedpur', 'jamshedpur', 'sarika@gmail.com', 2147483647, 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `trainingcenter`
--

CREATE TABLE `trainingcenter` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `CAddress` varchar(100) NOT NULL,
  `PAddress` varchar(100) NOT NULL,
  `BAC` varchar(20) NOT NULL,
  `Aadhar` varchar(12) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Comp` tinyint(1) NOT NULL,
  `mac` varchar(12) DEFAULT NULL,
  `DateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainingcenter`
--

INSERT INTO `trainingcenter` (`Id`, `Name`, `PhoneNo`, `DOB`, `CAddress`, `PAddress`, `BAC`, `Aadhar`, `Username`, `Password`, `Comp`, `mac`, `DateCreated`) VALUES
(14, 'shilp gram', 2147483647, '2007-06-06', 'deoghar', 'deoghar', '876545677777', '698765432109', 'shilp', '123', 1, '862575951922', '2018-07-26 19:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `PhoneNo` int(10) NOT NULL,
  `DOB` date NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `CAddress` varchar(75) NOT NULL,
  `PAddress` varchar(75) NOT NULL,
  `Aadhar` varchar(12) NOT NULL,
  `Bid` varchar(11) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Learner` tinyint(1) NOT NULL DEFAULT '0',
  `skill` varchar(20) DEFAULT NULL,
  `DateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `PhoneNo`, `DOB`, `email`, `CAddress`, `PAddress`, `Aadhar`, `Bid`, `Password`, `Learner`, `skill`, `DateCreated`) VALUES
(11, 'apurv', 2147483647, '1997-10-03', 'apurv@gmail.com', 'bhubaneswar', 'bhubaneswar', '987656789999', '12345987655', '1234', 1, 'Cooking', '2018-07-26 18:55:39'),
(12, 'adarsh', 2147483647, '1998-06-02', 'adarsh@gmail.com', 'dhanbad', 'dhanbad', '698765432109', '78945612301', 'qwerty', 0, NULL, '2018-07-26 18:58:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Bid` (`Bid`);

--
-- Indexes for table `existingskill`
--
ALTER TABLE `existingskill`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Bid` (`Bid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `trainingcenter`
--
ALTER TABLE `trainingcenter`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Aadhar` (`Aadhar`,`Username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Bid`),
  ADD KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `existingskill`
--
ALTER TABLE `existingskill`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainingcenter`
--
ALTER TABLE `trainingcenter`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`Bid`) REFERENCES `user` (`Bid`);

--
-- Constraints for table `existingskill`
--
ALTER TABLE `existingskill`
  ADD CONSTRAINT `existingskill_ibfk_1` FOREIGN KEY (`Bid`) REFERENCES `user` (`Bid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
