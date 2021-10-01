-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 05:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `place` varchar(70) NOT NULL,
  `feed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `name` text NOT NULL,
  `email` varchar(70) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `place` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`name`, `email`, `mob`, `place`, `state`) VALUES
('Jitendra Bisoi', 'jitutour@gmail.com', '9945678900', 'konark', 'odisha'),
('Abhisek', 'odishatour@gmail.com', '9945678900', 'konark', 'odisha'),
('Prabhudatta', 'abctour@gmail.com', '9945678900', 'konark', 'odisha'),
('Surendra Bisoi', 'jitutour@gmail.com', '9945678900', 'konark', 'odisha'),
('Subhrajit', 'jittour@gmail.com', '9945678900', 'konark', 'odisha'),
('Amanjit Das', 'guideaman@gmail.com', '9876543290', 'puri', 'odisha'),
('Bhakti Prasad', 'guideb45@gmail.com', '9876543290', 'puri', 'odisha'),
('S.Pranay', 'spguideaman2@gmail.com', '9876543290', 'puri', 'odisha'),
('Anil Das', 'guideanil2@gmail.com', '9876543290', 'puri', 'odisha'),
('Subhrajyoti Nayak', 'guidesj2@gmail.com', '9876543290', 'puri', 'odisha'),
('Sovan Jena', 'guideaman2gmail.com', '9876543290', 'chilika', 'odisha'),
('Amanjit Das', 'guideaman2@gmail.com', '9876543290', 'chilika', 'odisha'),
('Aditya baral', 'guideadi2@gmail.com', '9876543290', 'similipal', 'odisha'),
('Sandeep sahoo', 'guideaman2@gmail.com', '9876543290', 'similipal', 'odisha'),
('Raghu Das', 'guideaman2gmail.com', '9876543290', 'chandipur', 'odisha');

-- --------------------------------------------------------

--
-- Table structure for table `tourist`
--

CREATE TABLE `tourist` (
  `tname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Mob` varchar(10) NOT NULL,
  `Place` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Num` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourist`
--

INSERT INTO `tourist` (`tname`, `email`, `Mob`, `Place`, `Date`, `Num`) VALUES
('qwerew', 'soumyapatra9937@gmail.com', '9337847130', 'Nandan kan', '2020-03-12', 3),
('qwerew', 'soumyapatra9937@gmail.com', '9337847130', 'Nandan kan', '2020-03-12', 3),
('qwerew', 'soumyapatra9937@gmail.com', '9337847130', 'Nandan kan', '2020-03-12', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
