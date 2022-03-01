-- phpMyAdmin SQL Dump
-- version 5.1.2-dev+20220120.2a906047e0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2022 at 05:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `international_rescue`
--

-- --------------------------------------------------------

--
-- Table structure for table `issue_reports`
--

CREATE TABLE `issue_reports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `resource` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_reports`
--

INSERT INTO `issue_reports` (`id`, `name`, `message`, `lat`, `lng`, `resource`, `date`, `type`) VALUES
(1, 'haris ', 'Help', '51.511296', '-0.1376256', 'Rubber', '2022-03-01', 'Medium'),
(2, 'Test2', 'Test2', '52.511296', '-0.1376256', 'Plastic', '2022-03-01', 'High'),
(3, 'Test3', 'GPU help', '51.711296', '-0.0376256', 'Silicon', '2022-03-01', 'Low'),
(4, 'Test3', 'Very big Problems', '50.511296', '-2.7590656', 'Silicon', '2022-03-01', 'High'),
(5, 'test4', 'test3', '40.511296', '-0.1376256', 'Iron', '2022-03-01', 'Low'),
(6, 'Haris', 'Low Iron', '52.375599', '13.658203', 'Iron', '0000-00-00', 'Medium'),
(7, 'yES', 'low on Silicon', '54.262658', '18.667967', 'Silicon', '0000-00-00', 'High'),
(8, 'yES', 'Other Option Test', '48.870496', '2.37744', 'Other', '0000-00-00', 'Medium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `issue_reports`
--
ALTER TABLE `issue_reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `issue_reports`
--
ALTER TABLE `issue_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
