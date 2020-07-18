-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 01:58 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_paulina_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_paulina_biglibrary` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cr10_paulina_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `pub_addresse` varchar(150) NOT NULL,
  `pub_size` enum('small','medium','big','') NOT NULL,
  `ISBN` int(11) NOT NULL,
  `short_description` varchar(200) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `type` enum('book','music','movie','') NOT NULL,
  `img` blob DEFAULT NULL,
  `status` enum('available','reserved') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `title`, `author_name`, `publisher_name`, `pub_addresse`, `pub_size`, `ISBN`, `short_description`, `publish_date`, `type`, `img`, `status`) VALUES
(1, 'Baking Bread', 'Martin Philip', 'Marta Doe', 'Blustreet 55, Las Vegas', 'medium', 12340, '75 Recipes by Martin Philip', '2020-06-30', 'book', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f313837313032342f706578656c732d70686f746f2d313837313032342e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3226683d36353026773d393430, 'available'),
(2, 'Baking Time', 'Joanna Moore', 'Gregory Jones', 'Mariahilferstrasse 55, Vienna', 'big', 34567, 'Cakes, Chocolate, Cookies, Desserts, Muffin and more', '2020-04-01', 'book', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f343039393132362f706578656c732d70686f746f2d343039393132362e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3226683d36353026773d393430, 'reserved'),
(3, 'Yoga for beginners', 'Donna Lopez', 'Marta Doe', 'Blustreet 55, Las Vegas', 'medium', 12345, ' Because of its slower pace, hatha is a great class to start.', '2020-02-25', 'book', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f343035363532392f706578656c732d70686f746f2d343035363532392e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3226683d36353026773d393430, 'available'),
(4, 'How to became a ballerina', 'Robert Smith', 'Tim Burton', 'Sevenstrret 66, New York', 'big', 18887, 'History of the most famous prima ballerina', '2019-09-04', 'movie', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f333538373331362f706578656c732d70686f746f2d333538373331362e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'available'),
(5, 'Sing me a song', 'Milo Santos', 'Rita Ora', 'Arbeitergasse 98, Vienna', 'small', 21345, 'First debut album of Milo Santos', '2020-07-05', 'music', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f3839343135362f706578656c732d70686f746f2d3839343135362e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3226683d36353026773d393430, 'available'),
(6, 'Quiet piano', 'Zoe Green', 'Vera Wang', 'Siebensterngasse 87, Salzburg', 'big', 12300, 'Relaxing piano music for stress relief composed by Zoe Green.', '2020-04-08', 'music', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f313834383931352f706578656c732d70686f746f2d313834383931352e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3226683d36353026773d393430, 'reserved'),
(7, 'All about cats', 'Rob Don', 'Martin Bolan', 'Rodeo Drive 77, Las Vegas', 'big', 12778, 'All secrets of those amazing pets will be revealed.', '0000-00-00', 'movie', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f333439303837312f706578656c732d70686f746f2d333439303837312e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3226683d36353026773d393430, 'reserved'),
(8, 'Travel', 'Eva Loren', 'Marta Doe', 'Blustreet 55, Las Vegas', 'medium', 56544, 'The mosy beatiful places which you need to travel to.', '2020-04-01', 'book', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f323236353837362f706578656c732d70686f746f2d323236353837362e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3226683d36353026773d393430, 'reserved'),
(9, 'U2 - Denver, concert', 'U2', 'Jim Con', 'Philistreet 678, London', 'big', 12355, 'Legendary concert U2 in Denver.', '0000-00-00', 'movie', 0x68747470733a2f2f63646e2e706978616261792e636f6d2f70686f746f2f323031372f30392f30322f31382f35312f6d7573696369616e2d323730383138395f3936305f3732302e6a7067, 'available'),
(10, 'Girl with violin', 'Meg West', 'Rita Ora', 'Arbeitergasse 98, Vienna', 'small', 12789, 'Meg West knows how to play violin in a modern way.', '0000-00-00', 'music', 0x68747470733a2f2f63646e2e706978616261792e636f6d2f70686f746f2f323031392f30312f32372f32312f35322f6769726c2d333935393134345f3936305f3732302e6a7067, 'reserved'),
(11, 'My journey', 'Hanna Gates', 'Rita Ora', 'Arbeitergasse 98, Vienna', 'small', 12399, 'Guitar player Hanna Gates and her compositions.', '2019-11-11', 'music', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f323131383034362f706578656c732d70686f746f2d323131383034362e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3226683d36353026773d393430, 'reserved'),
(12, 'Last soldier', 'Robert Smith', 'Tim Burton', 'Sevenstrret 66, New York', 'big', 88721, 'It tells a tale of a WWII Japanese soldier who refuses to surrender even after the war has ended.', '2020-03-01', 'movie', 0x68747470733a2f2f696d616765732e706578656c732e636f6d2f70686f746f732f3837363334352f706578656c732d70686f746f2d3837363334352e6a7065673f6175746f3d636f6d70726573732663733d74696e7973726762266470723d3126773d353030, 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
