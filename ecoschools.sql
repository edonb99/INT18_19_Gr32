-- phpMyAdmin SQL Dump

-- version 4.8.5

-- https://www.phpmyadmin.net/

--
-- Host: localhost

-- Generation Time: May 30, 2019 at 09:09 PM

-- Server version: 8.0.12

-- PHP Version: 7.3.2



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT = 0;

START TRANSACTION;

SET time_zone = "+00:00";




/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;




--

-- Database: `ecoschools`

--


-- --------------------------------------------------------


--

-- Table structure for table `comments`

--


CREATE TABLE `comments` (
  
  `cid` int(11) NOT NULL,

  `username` varchar(255) NOT NULL,

  `date` datetime DEFAULT NULL,

  `message` varchar(255) DEFAULT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



--

-- Dumping data for table `comments`

--


INSERT INTO `comments` (`cid`, `username`, `date`, `message`) VALUES

(1, 'edon', '2019-05-30 18:22:41', '    dsdfsdsdfsdf'),

(2, 'edon', '2019-05-30 18:23:15', '    hghhgghhg'),

(3, 'whatever', '2019-05-30 18:24:28', '    sdfsgh'),

(4, 'whatever', '2019-05-30 18:24:28', '    sdfsgh');



-- --------------------------------------------------------



--

-- Table structure for table `users`

--


CREATE TABLE `users` (

  `id` int(11) NOT NULL,

  `username` varchar(255) NOT NULL,

  `email` varchar(255) NOT NULL,

  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



--

-- Dumping data for table `users`

--


INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES

(12, 'blerine', 'blerinafejza98@gmail.com', 'b29a0f60c24b0093cd8969d24bb8ee30'),

(14, 'whatever', 'whatever77@gmail.com', '140a6e4da3ec91c8e8b7ceb8e1d2f950'),

(15, 'edon', 'edon@gmail.com', '140a6e4da3ec91c8e8b7ceb8e1d2f950');




--

-- Indexes for dumped tables

--



--

-- Indexes for table `comments`

--

ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`,`username`);



--

-- Indexes for table `users`

--

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);



--

-- AUTO_INCREMENT for dumped tables

--



--

-- AUTO_INCREMENT for table `comments`

--
ALTER TABLE `comments`

  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;



--

-- AUTO_INCREMENT for table `users`

--

ALTER TABLE `users`

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
