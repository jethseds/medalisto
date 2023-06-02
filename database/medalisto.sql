-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 08:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medalisto`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `code` text NOT NULL,
  `fullname` text NOT NULL,
  `address` text NOT NULL,
  `age` text NOT NULL,
  `email` text NOT NULL,
  `contactnumber` text NOT NULL,
  `medicalhistory` text NOT NULL,
  `type` text NOT NULL,
  `formulation` text NOT NULL,
  `manufacturer` text NOT NULL,
  `name` text NOT NULL,
  `mlmg` text NOT NULL,
  `price` text NOT NULL,
  `expirationdate` date NOT NULL DEFAULT current_timestamp(),
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `code`, `fullname`, `address`, `age`, `email`, `contactnumber`, `medicalhistory`, `type`, `formulation`, `manufacturer`, `name`, `mlmg`, `price`, `expirationdate`, `month`, `year`, `date_created`) VALUES
(25, '10642272d0aec9f', 'bryan starl', 'na', '45', 'staff@email.com', '09123456789', 'sfsdf', 'Branded', 'sdf', 'sdfsd', 'fsdf', '56', '565', '2023-04-08', 3, 2023, '2023-03-27'),
(26, '106422c6fa503f7', 'sorar sorar', 'asdasdasdasda', '34', 'sorar@email.com', '234234', 'sorar sorar', 'Branded', 'sorar sorar', 'sorar sorar', 'asdas', '56', '34', '2023-04-01', 3, 2023, '2023-03-28'),
(27, '106422c78d1bca1', 'godeg kola', 'na', '45', 'staff@email.com', '09123456789', 'godeg kola', 'Branded', 'godeg kola', 'godeg kola', 'godeg kola', '33', '33', '2023-04-02', 3, 2023, '2023-03-28'),
(28, '1064339c72726fe', 'est', 'addres', '34', 'councilor@email.com', '53453534', 'test', 'Branded', 'tes', 'tes', 'test', '45', '454', '2023-04-30', 4, 2023, '2023-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `qrcode`
--

CREATE TABLE `qrcode` (
  `id` int(1) NOT NULL,
  `qrcode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qrcode`
--

INSERT INTO `qrcode` (`id`, `qrcode`) VALUES
(1, '10641052d45c0ef');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `usedevice` text NOT NULL,
  `date` text NOT NULL,
  `intervention` text NOT NULL,
  `code` text NOT NULL,
  `awareness` text NOT NULL,
  `awarenessq1` text NOT NULL,
  `awarenessq2` text NOT NULL,
  `awarenessq3` text NOT NULL,
  `awarenessq4` text NOT NULL,
  `diffidence` text NOT NULL,
  `diffidenceq1` text NOT NULL,
  `diffidenceq2` text NOT NULL,
  `diffidenceq3` text NOT NULL,
  `diffidenceq4` text NOT NULL,
  `diffidenceq5` text NOT NULL,
  `diffidenceq6` text NOT NULL,
  `diffidenceq7` text NOT NULL,
  `diffidenceq8` text NOT NULL,
  `lethargy` text NOT NULL,
  `lethargyq1` text NOT NULL,
  `lethargyq2` text NOT NULL,
  `lethargyq3` text NOT NULL,
  `lethargyq4` text NOT NULL,
  `lethargyq5` text NOT NULL,
  `lethargyq6` text NOT NULL,
  `fear` text NOT NULL,
  `fearq1` text NOT NULL,
  `fearq2` text NOT NULL,
  `fearq3` text NOT NULL,
  `fearq4` text NOT NULL,
  `culpability` text NOT NULL,
  `culpabilityq1` text NOT NULL,
  `culpabilityq2` text NOT NULL,
  `culpabilityq3` text NOT NULL,
  `culpabilityq4` text NOT NULL,
  `ambition` text NOT NULL,
  `ambitionq1` text NOT NULL,
  `ambitionq2` text NOT NULL,
  `ambitionq3` text NOT NULL,
  `ambitionq4` text NOT NULL,
  `complacency` text NOT NULL,
  `complacencyq1` text NOT NULL,
  `complacencyq2` text NOT NULL,
  `complacencyq3` text NOT NULL,
  `complacencyq4` text NOT NULL,
  `complacencyq5` text NOT NULL,
  `complacencyq6` text NOT NULL,
  `complacencyq7` text NOT NULL,
  `complacencyq8` text NOT NULL,
  `complacencyq9` text NOT NULL,
  `complacencyq10` text NOT NULL,
  `daily` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `usedevice`, `date`, `intervention`, `code`, `awareness`, `awarenessq1`, `awarenessq2`, `awarenessq3`, `awarenessq4`, `diffidence`, `diffidenceq1`, `diffidenceq2`, `diffidenceq3`, `diffidenceq4`, `diffidenceq5`, `diffidenceq6`, `diffidenceq7`, `diffidenceq8`, `lethargy`, `lethargyq1`, `lethargyq2`, `lethargyq3`, `lethargyq4`, `lethargyq5`, `lethargyq6`, `fear`, `fearq1`, `fearq2`, `fearq3`, `fearq4`, `culpability`, `culpabilityq1`, `culpabilityq2`, `culpabilityq3`, `culpabilityq4`, `ambition`, `ambitionq1`, `ambitionq2`, `ambitionq3`, `ambitionq4`, `complacency`, `complacencyq1`, `complacencyq2`, `complacencyq3`, `complacencyq4`, `complacencyq5`, `complacencyq6`, `complacencyq7`, `complacencyq8`, `complacencyq9`, `complacencyq10`, `daily`) VALUES
(2, '', '', '', '10642272d0aec9f', 'Strongly agree', 'Agree', 'Neither Agree', 'Disagree', 'Strongly Disagree', 'Disagree', 'Neither Agree', 'Agree', 'Strongly agree', 'Agree', 'Neither Agree', 'Disagree', 'Strongly Disagree', 'Disagree', 'Neither Agree', 'Agree', 'Strongly agree', 'Agree', 'Neither Agree', 'Disagree', 'Strongly Disagree', 'Disagree', 'Neither Agree', 'Agree', 'Strongly agree', 'Agree', 'Neither Agree', 'Disagree', 'Strongly Disagree', 'Disagree', 'Neither Agree', 'Agree', 'Strongly agree', 'Agree', 'Neither Agree', 'Disagree', 'Strongly Disagree', 'Disagree', 'Neither Agree', 'Agree', 'Strongly agree', 'Agree', 'Neither Agree', 'Disagree', 'Strongly Disagree', 'Disagree', 'Neither Agree', '2023-04-16'),
(3, '', '', '', '106422c6fa503f7', 'Strongly agree', 'Strongly agree', 'Strongly agree', 'Strongly agree', 'Strongly agree', 'Agree', 'Agree', 'Agree', 'Agree', 'Agree', 'Neither Agree', 'Neither Agree', 'Neither Agree', 'Neither Agree', 'Disagree', 'Disagree', 'Disagree', 'Disagree', 'Disagree', 'Disagree', 'Disagree', 'Strongly Disagree', 'Strongly Disagree', 'Strongly Disagree', 'Strongly Disagree', 'Strongly Disagree', 'Disagree', 'Disagree', 'Disagree', 'Disagree', 'Disagree', 'Neither Agree', 'Neither Agree', 'Neither Agree', 'Neither Agree', 'Neither Agree', 'Agree', 'Agree', 'Agree', 'Agree', 'Agree', 'Agree', 'Agree', 'Agree', 'Agree', 'Agree', 'Agree', '2023-04-16'),
(4, 'Yes', '', '', '106422c78d1bca1', 'Strongly agree', 'Agree', 'Strongly agree', 'Agree', 'Strongly agree', 'Strongly Disagree', 'Disagree', 'Strongly Disagree', 'Disagree', 'Strongly Disagree', 'Disagree', 'Neither Agree', 'Disagree', 'Neither Agree', 'Disagree', 'Neither Agree', 'Disagree', 'Neither Agree', 'Agree', 'Neither Agree', 'Agree', 'Neither Agree', 'Agree', 'Neither Agree', 'Agree', 'Neither Agree', 'Agree', 'Strongly agree', 'Agree', 'Strongly agree', 'Agree', 'Agree', 'Neither Agree', 'Agree', 'Neither Agree', 'Agree', 'Neither Agree', 'Disagree', 'Neither Agree', 'Disagree', 'Neither Agree', 'Disagree', 'Neither Agree', 'Disagree', 'Neither Agree', 'Disagree', 'Neither Agree', '2023-04-16'),
(5, 'Yes', '2023-04-29', 'Standee', '10643b7364c3c35', 'Strongly agree', 'Agree', 'Neither Agree', 'Disagree', 'Strongly Disagree', 'Strongly Disagree', 'Strongly Disagree', 'Disagree', 'Disagree', 'Neither Agree', 'Neither Agree', 'Disagree', 'Agree', 'Neither Agree', 'Strongly agree', 'Neither Agree', 'Disagree', 'Disagree', 'Strongly Disagree', 'Strongly agree', 'Strongly agree', 'Agree', 'Neither Agree', 'Disagree', 'Disagree', 'Disagree', 'Disagree', 'Neither Agree', 'Agree', 'Strongly agree', 'Agree', 'Neither Agree', 'Disagree', 'Strongly Disagree', 'Disagree', 'Neither Agree', 'Neither Agree', 'Neither Agree', 'Neither Agree', 'Neither Agree', 'Neither Agree', 'Neither Agree', 'Neither Agree', 'Neither Agree', 'Disagree', 'Strongly Disagree', 'Disagree', '2023-04-16'),
(6, 'No', '2023-05-06', 'Card', '10643b85ffca7b3', 'Strongly agree', 'Agree', 'Neither Agree', 'Neither Agree', 'Neither Agree', 'Disagree', 'Strongly Disagree', 'Disagree', 'Disagree', 'Disagree', 'Disagree', 'Disagree', 'Neither Agree', 'Agree', 'Strongly agree', 'Agree', 'Agree', 'Neither Agree', 'Neither Agree', 'Agree', 'Agree', 'Neither Agree', 'Disagree', 'Disagree', 'Disagree', 'Neither Agree', 'Agree', 'Strongly agree', 'Agree', 'Agree', 'Agree', 'Agree', 'Neither Agree', 'Neither Agree', 'Disagree', 'Disagree', 'Disagree', 'Disagree', 'Disagree', 'Strongly Disagree', 'Disagree', 'Neither Agree', 'Neither Agree', 'Agree', 'Strongly agree', 'Strongly agree', 'Strongly agree', '2023-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `img` text NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `birthdate` date NOT NULL DEFAULT current_timestamp(),
  `age` int(11) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `passwordtxt` text NOT NULL,
  `type` int(1) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `img`, `fullname`, `firstname`, `lastname`, `middlename`, `birthdate`, `age`, `address`, `contact`, `email`, `password`, `passwordtxt`, `type`, `code`) VALUES
(2, 'sdfsdfsdf.png', 'asd23434adasdasd', 'asd', '', '', '2022-08-26', 0, '', '', 'superadmin', '$2y$10$kO58E8M9AlYv6A0dpODANum95TDgnae7xGMV7QH7xupVBkgF7rnYG', 'superadmin', 1, 0),
(15, '', '', 'sorar', 'sorar', 'sdf', '1997-10-24', 24, 'asdasdasdasda', '1111-222-3333', 'sorar384@gmail.com', '$2y$10$PIuiT4Ve0p0/PNVkn5eBpOE/N5ZU2lzwdmVVO876H6jRp2R1Wj56u', 'sorar384@gmail.com', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qrcode`
--
ALTER TABLE `qrcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `qrcode`
--
ALTER TABLE `qrcode`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
