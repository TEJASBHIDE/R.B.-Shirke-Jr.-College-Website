-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2024 at 10:03 AM
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
-- Database: `smbtjunior`
--

-- --------------------------------------------------------

--
-- Table structure for table `11thcom`
--

CREATE TABLE `11thcom` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `cast` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `aadhar` varchar(15) NOT NULL,
  `passingyear` int(4) NOT NULL,
  `board` varchar(100) NOT NULL,
  `total` int(3) NOT NULL,
  `marks` int(11) NOT NULL,
  `percent` decimal(5,1) NOT NULL,
  `adimg` varchar(1000) NOT NULL,
  `markimg` varchar(1000) NOT NULL,
  `add1` varchar(50) NOT NULL,
  `add2` varchar(50) NOT NULL,
  `area` varchar(20) NOT NULL,
  `states` varchar(30) NOT NULL,
  `district` varchar(15) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `11thcom`
--

INSERT INTO `11thcom` (`id`, `firstName`, `middleName`, `lastName`, `dob`, `email`, `mobile`, `gender`, `religion`, `cast`, `category`, `aadhar`, `passingyear`, `board`, `total`, `marks`, `percent`, `adimg`, `markimg`, `add1`, `add2`, `area`, `states`, `district`, `pincode`) VALUES
(1, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-20', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Secondary Education', 600, 368, 61.0, '11thCom/Aadhar/Screenshot 2024-01-04 112626.png', '11thCom/Marksheet/Screenshot 2024-01-04 112720.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(2, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-20', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Secondary Education', 600, 368, 61.0, '11thCom/Aadhar/Screenshot 2024-01-04 112626.png', '11thCom/Marksheet/Screenshot 2024-01-04 112720.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(3, 'Sahil', 'Mahesh', 'Amberkar', '2024-03-16', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Muslim', 'Kharvi', 'SBC', '486758465496', 2023, 'Maharashtra State Board of Secondary and Higher Secondary Education', 500, 400, 80.0, '11thCom/Aadhar/Screenshot 2024-01-04 112530.png', '11thCom/Marksheet/Screenshot 2024-01-04 112735.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612);

-- --------------------------------------------------------

--
-- Table structure for table `11thsci`
--

CREATE TABLE `11thsci` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `cast` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `aadhar` varchar(15) NOT NULL,
  `passingyear` int(4) NOT NULL,
  `board` varchar(100) NOT NULL,
  `total` int(3) NOT NULL,
  `marks` int(11) NOT NULL,
  `percent` decimal(5,1) NOT NULL,
  `adimg` varchar(1000) NOT NULL,
  `markimg` varchar(1000) NOT NULL,
  `add1` varchar(50) NOT NULL,
  `add2` varchar(50) NOT NULL,
  `area` varchar(20) NOT NULL,
  `states` varchar(30) NOT NULL,
  `district` varchar(15) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `11thsci`
--

INSERT INTO `11thsci` (`id`, `firstName`, `middleName`, `lastName`, `dob`, `email`, `mobile`, `gender`, `religion`, `cast`, `category`, `aadhar`, `passingyear`, `board`, `total`, `marks`, `percent`, `adimg`, `markimg`, `add1`, `add2`, `area`, `states`, `district`, `pincode`) VALUES
(66, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-16', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'Open', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 0, 400, 66.7, '11thSci/Aadhar/Screenshot 2024-01-04 101407.png', '11thSci/Marksheet/Screenshot 2024-01-04 112735.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(67, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-16', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'Open', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 0, 400, 66.7, '11thSci/Aadhar/Screenshot 2024-01-04 101407.png', '11thSci/Marksheet/Screenshot 2024-01-04 112735.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(68, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-16', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'Open', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 0, 400, 66.7, '11thSci/Aadhar/Screenshot 2024-01-04 101407.png', '11thSci/Marksheet/Screenshot 2024-01-04 112735.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(69, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-16', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'Open', '789456123789', 2024, 'Maharashtra State Board of Secondary and Higher Se', 0, 400, 66.7, '11thSci/Aadhar/Screenshot 2024-01-04 112626.png', '11thSci/Marksheet/Screenshot 2024-01-04 112720.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(70, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-22', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'Open', '789456123789', 2024, 'Board of Secondary Education, Madhya Pradesh (MPBS', 0, 368, 61.3, '11thSci/Aadhar/Screenshot 2024-01-04 112626.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(71, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-22', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'Open', '789456123789', 2024, 'Board of Secondary Education, Madhya Pradesh (MPBS', 0, 368, 61.3, '11thSci/Aadhar/Screenshot 2024-01-04 112626.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(72, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-08', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 0, 368, 61.3, '11thSci/Aadhar/Screenshot 2024-01-04 112626.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(73, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-08', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 0, 368, 61.3, '11thSci/Aadhar/Screenshot 2024-01-04 112626.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(74, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-08', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 0, 368, 61.3, '11thSci/Aadhar/Screenshot 2024-01-04 112626.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(75, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-08', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'Open', '486758465496', 2024, 'Board of Secondary Education, Assam (SEBA)', 0, 400, 66.7, '11thSci/Aadhar/Screenshot 2024-01-04 112626.png', '11thSci/Marksheet/Screenshot 2024-01-04 112600.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(76, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-08', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'Open', '486758465496', 2024, 'Board of Secondary Education, Assam (SEBA)', 0, 400, 66.7, '11thSci/Aadhar/Screenshot 2024-01-04 112626.png', '11thSci/Marksheet/Screenshot 2024-01-04 112600.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(77, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-08', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'Open', '486758465496', 2024, 'Board of Secondary Education, Assam (SEBA)', 0, 400, 66.7, '11thSci/Aadhar/Screenshot 2024-01-04 112626.png', '11thSci/Marksheet/Screenshot 2024-01-04 112600.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(78, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-08', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'Open', '486758465496', 2024, 'Board of Secondary Education, Assam (SEBA)', 0, 400, 66.7, '11thSci/Aadhar/Screenshot 2024-01-04 112626.png', '11thSci/Marksheet/Screenshot 2024-01-04 112600.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(79, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-08', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'Open', '486758465496', 2024, 'Board of Secondary Education, Assam (SEBA)', 0, 400, 66.7, '11thSci/Aadhar/Screenshot 2024-01-04 112626.png', '11thSci/Marksheet/Screenshot 2024-01-04 112600.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(80, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-16', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Board of Secondary Education, Assam (SEBA)', 0, 400, 66.7, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112600.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(81, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-13', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'Open', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 0, 400, 66.7, '11thSci/Aadhar/Screenshot 2024-01-04 112720.png', '11thSci/Marksheet/Screenshot 2024-01-04 112735.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(82, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-16', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'Open', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 0, 400, 66.7, '11thSci/Aadhar/Screenshot 2024-01-04 101407.png', '11thSci/Marksheet/Screenshot 2024-01-04 112735.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(83, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-16', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'Open', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 0, 400, 66.7, '11thSci/Aadhar/Screenshot 2024-01-04 101407.png', '11thSci/Marksheet/Screenshot 2024-01-04 112735.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(84, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-16', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 0, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 095857.png', '11thSci/Marksheet/Screenshot 2024-01-04 095427.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(85, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-16', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 0, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 095857.png', '11thSci/Marksheet/Screenshot 2024-01-04 095427.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(86, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-16', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 0, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 095857.png', '11thSci/Marksheet/Screenshot 2024-01-04 095427.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'ratnagiri', 415612),
(87, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-15', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 0, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(88, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-15', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 600, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(89, 'Tejas', 'Mahesh', 'Bhide', '2024-03-15', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 600, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(90, 'Tejas', 'Mahesh', 'Bhide', '2024-03-15', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 600, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(91, 'Tejas', 'Mahesh', 'Bhide', '2024-03-15', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 600, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(92, 'Tejas', 'Mahesh', 'Bhide', '2024-03-15', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 600, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(93, 'Tejas', 'Mahesh', 'Bhide', '2024-03-15', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 600, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(94, 'Tejas', 'Mahesh', 'Bhide', '2024-03-15', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 600, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(95, 'Tejas', 'Mahesh', 'Bhide', '2024-03-15', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 600, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(96, 'Tejas', 'Mahesh', 'Bhide', '2024-03-15', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 600, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(97, 'Tejas', 'Mahesh', 'Bhide', '2024-03-15', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 600, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(98, 'Tejas', 'Mahesh', 'Bhide', '2024-03-15', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 600, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(99, 'Tejas', 'Mahesh', 'Bhide', '2024-03-15', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 600, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(100, 'Tejas', 'Mahesh', 'Bhide', '2024-03-15', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Se', 600, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(101, 'Tejas', 'Mahesh', 'Bhide', '2024-03-15', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Secondary Education', 600, 400, 66.0, '11thSci/Aadhar/Screenshot 2024-01-04 112530.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(102, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-20', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Secondary Education', 600, 368, 61.0, '11thSci/Aadhar/Screenshot 2024-01-04 112720.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612),
(103, 'Sahil', 'Shailesh', 'Amberkar', '2024-03-20', 'sahilamberkar2003@gmail.com', '7057635016', 'Male', 'Hindu', 'Kharvi', 'SBC', '486758465496', 2024, 'Maharashtra State Board of Secondary and Higher Secondary Education', 600, 368, 61.0, '11thSci/Aadhar/Screenshot 2024-01-04 112720.png', '11thSci/Marksheet/Screenshot 2024-01-04 112626.png', 'Room no. 7,Yash Siddhi Apartment', 'Sanmitra Nagar, Boarding Road', 'Urban', 'Maharashtra', 'Khed', 415612);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `uname` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `messages` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`uname`, `phone`, `email`, `messages`) VALUES
('sahil', '123456789', 'sahilamberkar@gmail.com', 'hjshjghiurhaijgfuia'),
('sahil', '123456789', 'sahilamberkar@gmail.com', 'hjshjghiurhaijgfuia'),
('Sahil', '7057635016', 'sahilamberkar2003@gmail.com', 'noice');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image_url` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_url`) VALUES
(2, 'uploads/1.jpg'),
(3, 'uploads/2.jpg'),
(4, 'uploads/3.jpg'),
(5, 'uploads/4.jpg'),
(6, 'uploads/5.jpg'),
(7, 'uploads/6.jpg'),
(8, 'uploads/7.jpg'),
(9, 'uploads/8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `merit`
--

CREATE TABLE `merit` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `merit_pdf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merit`
--

INSERT INTO `merit` (`id`, `title`, `merit_pdf`) VALUES
(18, '2019', 'smbtjunior.pdf'),
(19, 'Merit List for batch 2024', 'smbtjunior.pdf'),
(20, 'Merit List for 2020', 'admission.pdf'),
(21, '1234', 'smbtjunior.pdf'),
(22, '123456789', 'smbtjunior.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `notice_id` int(11) NOT NULL,
  `notice1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`notice_id`, `notice1`) VALUES
(1, 'All the Best to the HSC Students');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `names` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `email`, `pass`) VALUES
(1, '', 'sahil@gmail.com', '12345'),
(2, 'Tejas', 'tejas@gmail.com', '54321'),
(3, 'Sarvesh', 'sahil123@gmail.com', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `11thcom`
--
ALTER TABLE `11thcom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `11thsci`
--
ALTER TABLE `11thsci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merit`
--
ALTER TABLE `merit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `11thcom`
--
ALTER TABLE `11thcom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `11thsci`
--
ALTER TABLE `11thsci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `merit`
--
ALTER TABLE `merit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
