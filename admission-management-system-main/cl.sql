-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 09:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cl`
--

-- --------------------------------------------------------

--
-- Table structure for table `a`
--

CREATE TABLE `a` (
  `t_id` int(11) NOT NULL,
  `Reg_no` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `ac` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `a`
--

INSERT INTO `a` (`t_id`, `Reg_no`, `roll`, `ac`) VALUES
(83771070, 2020, 63702528, 'uil'),
(70402916, 400, 6020964, 'uil');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `Reg_no` int(11) NOT NULL,
  `nationality` text NOT NULL,
  `language` text NOT NULL,
  `district` text NOT NULL,
  `tribal` text NOT NULL,
  `ffstatus` text NOT NULL,
  `gur1` varchar(100) NOT NULL,
  `dis1` text NOT NULL,
  `vil1` text NOT NULL,
  `up1` text NOT NULL,
  `post1` text NOT NULL,
  `land1` int(11) DEFAULT NULL,
  `cont1` int(11) NOT NULL,
  `cont2` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `gur2` varchar(100) NOT NULL,
  `vil2` text NOT NULL,
  `up2` text NOT NULL,
  `dist2` text NOT NULL,
  `post2` text NOT NULL,
  `land2` int(11) DEFAULT NULL,
  `pic` varchar(200) NOT NULL,
  `sign` varchar(200) NOT NULL,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`Reg_no`, `nationality`, `language`, `district`, `tribal`, `ffstatus`, `gur1`, `dis1`, `vil1`, `up1`, `post1`, `land1`, `cont1`, `cont2`, `email`, `gur2`, `vil2`, `up2`, `dist2`, `post2`, `land2`, `pic`, `sign`, `pass`) VALUES
(2020, 'Bangladeshi', 'bangla', 'Dhaka', 'none', 'NO', 'Anawer', 'Dhaka', 'Town joinkati', 'Town joinkati', '1011', 17915943, 1791594313, 1791594313, 'jannattamim31@gmail.com', 'Taimur', 'Town joinkati', 'Town joinkati', 'Dhaka', '1011', 17667141, 'TA.jpg', 'si.jpg', 736762),
(400, 'Bangladeshi', 'bangla', 'Dhaka', 'none', 'NO', 'Pulok', 'Dhaka', 'kathiyar bari', 'Sarishabari', '2050', 1718650215, 1718650215, 1718650215, 'sanzidaislampromi@gmail.com', 'Pulok', 'Kathierbari', 'Sarishabari', 'Dhaka', '2050', 1718650215, 'regis.png', 'regis.png', 704013);

-- --------------------------------------------------------

--
-- Table structure for table `b`
--

CREATE TABLE `b` (
  `t_id` int(11) NOT NULL,
  `Reg_no` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `ac` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c`
--

CREATE TABLE `c` (
  `t_id` int(11) NOT NULL,
  `Reg_no` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `ac` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `c`
--

INSERT INTO `c` (`t_id`, `Reg_no`, `roll`, `ac`) VALUES
(49041844, 2020, 39577129, 'uil');

-- --------------------------------------------------------

--
-- Table structure for table `d`
--

CREATE TABLE `d` (
  `t_id` int(11) NOT NULL,
  `Reg_no` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `ac` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `e`
--

CREATE TABLE `e` (
  `t_id` int(11) NOT NULL,
  `Reg_no` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `ac` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hsc_result`
--

CREATE TABLE `hsc_result` (
  `roll` int(11) NOT NULL,
  `Reg_no` int(11) NOT NULL,
  `board2` text NOT NULL,
  `year2` int(11) NOT NULL,
  `gr2` text NOT NULL,
  `result2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hsc_result`
--

INSERT INTO `hsc_result` (`roll`, `Reg_no`, `board2`, `year2`, `gr2`, `result2`) VALUES
(1987, 2019, 'Dhaka', 2021, 'Science', 4.9),
(1970, 2020, 'Dhaka', 2021, 'Science', 5),
(402, 400, 'Dhaka', 2021, 'Science', 4.99),
(1965, 64, 'Dhaka', 2021, 'Science', 4.98),
(2002, 65, 'Dhaka', 2021, 'Science', 2.25);

-- --------------------------------------------------------

--
-- Table structure for table `ssc_result`
--

CREATE TABLE `ssc_result` (
  `Roll` int(11) NOT NULL,
  `Reg_no` int(11) NOT NULL,
  `board1` text NOT NULL,
  `year1` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fathers_name` varchar(100) NOT NULL,
  `mothers_name` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `DOB` date NOT NULL,
  `gr` text NOT NULL,
  `result` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ssc_result`
--

INSERT INTO `ssc_result` (`Roll`, `Reg_no`, `board1`, `year1`, `name`, `fathers_name`, `mothers_name`, `gender`, `DOB`, `gr`, `result`) VALUES
(1986, 2019, 'Dhaka', 2019, 'Sanzida Promi', 'Md.Nurul Islam', 'Anowara Begum', 'Female', '0000-00-00', 'Science', 4.9),
(1970, 2020, 'Dhaka', 2019, 'Tamim', 'Md. Zakir', 'Ruma', 'Female', '0000-00-00', 'Science', 5),
(401, 400, 'Dhaka', 2019, 'Prethil', 'Md.Nurul Islam', 'Anowara Begum', 'Male', '2023-04-18', 'Science', 4.99),
(1964, 64, 'Dhaka', 2019, 'Susmita', 'Md.Karim', 'Mst.Amena', 'Female', '2003-04-20', 'Science', 4.98),
(2001, 65, 'Dhaka', 2019, 'Mashiyaat', 'Md.Gofur', 'Mst.Rabeya Sultana', 'Female', '2003-04-10', 'Science', 2.25);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
