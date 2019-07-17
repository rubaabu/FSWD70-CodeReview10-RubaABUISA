-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2019 at 09:29 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_name_surname_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `Authorr_id` int(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `Medias_medias_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`Authorr_id`, `name`, `surname`, `Medias_medias_id`) VALUES
(1, 'Mia ', ' Sheridan', NULL),
(2, 'Colleen  ', ' Hoover', NULL),
(4, 'Cassandra ', 'Clare', NULL),
(5, 'Kiera  ', 'Cass', NULL),
(6, 'Belle  ', 'Aurora', NULL),
(7, 'Tahereh  ', 'Mafi', NULL),
(8, ' Colleen  ', 'Hoover', NULL),
(9, 'K ', 'Bromberg', NULL),
(10, 'Jake Furie ', 'Lapin', NULL),
(11, 'Sarah J.  ', 'Maas', NULL),
(12, 'Cassandra ', 'Clare', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `medias_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `author` varchar(50) DEFAULT NULL,
  `ISBN` int(11) NOT NULL,
  `short_description` varchar(200) NOT NULL,
  `publish_date` date DEFAULT NULL,
  `publisher` varchar(20) DEFAULT NULL,
  `type` varchar(5) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`medias_id`, `title`, `image`, `author`, `ISBN`, `short_description`, `publish_date`, `publisher`, `type`, `status`) VALUES
(1, 'ArchersVoice', '', 'Mia Sheridan', 123456789, 'I wanted to lose myself in the small town of Pelion, Maine. To forget everything I had left behind. The sound of rain. The blood. The coldness of a gun against my skin. For six months, each breath has', '2018-10-10', ' Forever', 'BOOK', 'available'),
(2, 'Maybe Someday', '', 'Colleen Hoover', 123456321, 'Sydney is living in an idyllic bubble she is a dedicated student with a steady job on the side She lives with her best friend, has a great boyfriend  the music coming from the balcony opposite hers is', '2014-03-12', 'Atria Books', 'BOOK', 'reserved'),
(3, 'City of Heavenly Fir', '', ' Cassandra Clare', 123456987, 'In this dazzling  long awaited conclusion to the acclaimed Mortal Instruments series, Clary  her friends fight the greatest evil they have ever faced: Clarys own brother.', '2014-10-17', 'Margaret K. McElderr', 'CD', 'available'),
(4, 'The One', '', 'Kiera Cass', 13456789, 'The time has come for one winner to be crowned.', '2014-12-12', ' HarperTeen', 'BOOK', 'available'),
(5, 'Raw', '', ' Belle Aurora', 23456321, 'Author Note: This is not a love story. This is a story of love gone wrong', '2014-01-13', 'NY', 'DVD', 'reserved'),
(6, 'Ignite Me', '', ' Tahereh Mafi', 33456987, 'With Omega Point destroyed, Juliette doesnâ€™t know if the rebels, her friends, or even Adam are alive', '2014-02-04', ' HarperCollins', 'Book', 'available'),
(7, 'Ugly Love', '', '  Colleen Hoover', 43456987, 'When Tate Collins meets airline pilot Miles Archer, she knows it isnâ€™t love at first sight. They wouldnâ€™t even go so far as to consider themselves friends. ', '2014-08-05', '  Atria Books', 'Book', 'available'),
(8, 'Crashed', '', ' K. Bromberg', 53456987, 'When life crashes down around us, how hard are we willing to fight for the one thing we canâ€™t live without, each other?\r\n ', '2014-03-03', '   JKB Publishing', 'Book', 'available'),
(9, 'The Spice of Life', '', ' Jake Furie Lapin', 1499145349, 'The Spice of Life (or #TSOL, to fans) follows Jake Furie Lapin, a 37-year-old sexaholic and loving Dom. As the first book in a three-part series, TSOL explores Jakeâ€™s transformation from a submissiv', '2014-09-07', '   Blackman Morgan S', 'DVD', 'available'),
(10, 'Heir of Fire', '', ' Sarah J. Maas', 1619630656, 'She was the heir of ash and fire, and she would bow to no one.\r\n ', '2014-09-02', ' Bloomsbury USA Chil', 'Book', 'available'),
(11, 'alchemist', '', 'paulo', 2145698712, 'aboutOptimistic', '0000-00-00', 'ny', 'book', ''),
(12, 'book2', '', 'paulo', 2145698712, 'about optimistic', '2000-02-02', 'ny', 'book', '');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `size` varchar(10) NOT NULL,
  `Medias_medias_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `name`, `address`, `size`, `Medias_medias_id`) VALUES
(1, ' Forever', 'USA', 'big', NULL),
(2, ' Atria Books', 'EU', 'big', NULL),
(3, ' Margaret K. McElder', 'LA', 'big', NULL),
(4, ' HarperTeen', 'UE', 'big', NULL),
(5, ' NY', 'USA', 'big', NULL),
(6, ' HarperCollins', 'USA', 'big', NULL),
(7, ' Atria Books', 'USA', 'big', NULL),
(8, ' JKB Publishing', 'USA', 'big', NULL),
(9, ' Blackman Morgan S', 'USA', 'big', NULL),
(10, ' Bloomsbury ', 'USA Chil', 'big', NULL),
(11, ' Forever', 'USA', 'big', NULL),
(12, ' Atria Books', 'EU', 'big', NULL),
(13, ' Margaret K. McElder', 'LA', 'big', NULL),
(14, ' HarperTeen', 'UE', 'big', NULL),
(15, ' NY', 'USA', 'big', NULL),
(16, ' HarperCollins', 'USA', 'big', NULL),
(17, ' Atria Books', 'USA', 'big', NULL),
(18, ' JKB Publishing', 'USA', 'big', NULL),
(19, ' Blackman Morgan S', 'USA', 'big', NULL),
(20, ' Bloomsbury ', 'USA Chil', 'big', NULL),
(21, ' Forever', 'USA', 'big', NULL),
(22, ' Atria Books', 'EU', 'big', NULL),
(23, ' Margaret K. McElder', 'LA', 'big', NULL),
(24, ' HarperTeen', 'UE', 'big', NULL),
(25, ' NY', 'USA', 'big', NULL),
(26, ' HarperCollins', 'USA', 'big', NULL),
(27, ' Atria Books', 'USA', 'big', NULL),
(28, ' JKB Publishing', 'USA', 'big', NULL),
(29, ' Blackman Morgan S', 'USA', 'big', NULL),
(30, ' Bloomsbury ', 'USA Chil', 'big', NULL),
(31, ' Forever', 'USA', 'big', NULL),
(32, ' Atria Books', 'EU', 'big', NULL),
(33, ' Margaret K. McElder', 'LA', 'big', NULL),
(34, ' HarperTeen', 'UE', 'big', NULL),
(35, ' NY', 'USA', 'big', NULL),
(36, ' HarperCollins', 'USA', 'big', NULL),
(37, ' Atria Books', 'USA', 'big', NULL),
(38, ' JKB Publishing', 'USA', 'big', NULL),
(39, ' Blackman Morgan S', 'USA', 'big', NULL),
(40, ' Bloomsbury ', 'USA Chil', 'big', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`Authorr_id`),
  ADD KEY `Medias_medias_id` (`Medias_medias_id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`medias_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`),
  ADD KEY `Medias_medias_id` (`Medias_medias_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `Authorr_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `medias_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`Medias_medias_id`) REFERENCES `medias` (`medias_id`);

--
-- Constraints for table `publisher`
--
ALTER TABLE `publisher`
  ADD CONSTRAINT `publisher_ibfk_1` FOREIGN KEY (`Medias_medias_id`) REFERENCES `medias` (`medias_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
