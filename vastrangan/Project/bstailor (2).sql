-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2014 at 12:00 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bstailor`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE IF NOT EXISTS `buy` (
  `b_id` int(255) NOT NULL AUTO_INCREMENT,
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_no` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cty` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kids_gallery`
--

CREATE TABLE IF NOT EXISTS `kids_gallery` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `a_id` int(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image_description` varchar(255) NOT NULL,
  `gallery_small` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `kids_gallery`
--

INSERT INTO `kids_gallery` (`id`, `a_id`, `image_title`, `image_description`, `gallery_small`, `status`) VALUES
(2, 1, 'Dance Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'k1.jpg', '1'),
(3, 1, 'Westren Dance Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'k2.jpg', '1'),
(4, 1, 'Westren Dance Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'k3.jpg', '1'),
(5, 1, 'Dance Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'k4.jpg', '0'),
(6, 1, 'Batman Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'k5.jpg', '0'),
(7, 1, 'Maharana pratap Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'k7.jpg', '0'),
(8, 1, 'Super man Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'k8.jpg', '0'),
(9, 1, 'Kids Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'k9.jpg', '0'),
(10, 1, 'Costumes ', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'k18.jpg', '0'),
(11, 1, 'Panjabi Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'k20.jpg', '0'),
(12, 1, 'Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'k17.jpg', '0'),
(13, 1, 'Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'k23.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `men_gallery`
--

CREATE TABLE IF NOT EXISTS `men_gallery` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `a_id` int(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image_description` varchar(255) NOT NULL,
  `gallery_small` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `bookingdate` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `men_gallery`
--

INSERT INTO `men_gallery` (`id`, `a_id`, `image_title`, `image_description`, `gallery_small`, `status`, `bookingdate`) VALUES
(11, 1, 'Maharana pratap', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'm1.jpg', 'booked', NULL),
(12, 1, 'Akbar', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'm2.jpg', 'booked', NULL),
(13, 1, 'kings', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'm3.jpg', '1', NULL),
(14, 1, 'Gujarat costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'm4.jpg', '0', NULL),
(15, 1, 'rajasthan costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'm5.jpg', '0', NULL),
(16, 1, 'lord shri Krishna', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'm6.jpg', '0', NULL),
(17, 1, 'Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'm7.jpg', '0', NULL),
(18, 1, 'Westren Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'm8.jpg', '0', NULL),
(19, 1, 'Dance Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'm9.jpg', '0', NULL),
(20, 1, 'Dance Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'm10.jpg', '0', NULL),
(21, 1, 'Karnatak costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'm11.jpg', '0', NULL),
(22, 1, 'Westren Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'm12.jpg', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE IF NOT EXISTS `rent` (
  `r_id` int(255) NOT NULL AUTO_INCREMENT,
  `mid` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pinecode` int(255) NOT NULL,
  `phone_no` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`r_id`),
  KEY `mid` (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`r_id`, `mid`, `first_name`, `last_name`, `date`, `address`, `city`, `state`, `country`, `pinecode`, `phone_no`, `email`) VALUES
(1, 10, 'satish', 'shinde', '2015-02-12', 'parel', 'mumbai', 'maharashtra', 'India', 4000014, 2147483647, 'satish123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sb_admin`
--

CREATE TABLE IF NOT EXISTS `sb_admin` (
  `a_id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sb_admin`
--

INSERT INTO `sb_admin` (`a_id`, `first_name`, `last_name`, `phone_no`, `password`, `email`) VALUES
(1, 'lalita', 'shinde', '3454635', 'l31033130', 'lalita@gmail.com'),
(2, 'aditi', 'prabhudesai', '919004202127', 'a31033130', 'aditi@gmail.com'),
(3, 'swananda', 'sardesai', '8767687678', 's31033130', 'swananda@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sb_blog`
--

CREATE TABLE IF NOT EXISTS `sb_blog` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `suggestion` varchar(255) NOT NULL,
  `mid` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sb_blog`
--

INSERT INTO `sb_blog` (`id`, `name`, `email`, `suggestion`, `mid`) VALUES
(1, 'chitra more', 'chitra678@gmail.com', 'hiiiiiiii', 3),
(2, 'pradnya pawar', 'pradnya687@gmail.com', 'hello', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sb_contact`
--

CREATE TABLE IF NOT EXISTS `sb_contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_no` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `suggestion` varchar(255) NOT NULL,
  `mid` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sb_contact`
--

INSERT INTO `sb_contact` (`id`, `first_name`, `last_name`, `phone_no`, `city`, `country`, `email`, `suggestion`, `mid`) VALUES
(7, 'vinay', 'singh', 2147483647, 'mumbai', 'India', 'vinay687@gmail.com', 'hhefiyefewyfuiw', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sb_feedback`
--

CREATE TABLE IF NOT EXISTS `sb_feedback` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mid` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sb_feedback`
--

INSERT INTO `sb_feedback` (`id`, `name`, `email`, `phone`, `q1`, `q2`, `q3`, `q4`, `address`, `mid`) VALUES
(4, 'chitra more', 'chitra687@gmail.com', '9190042021', 'GOOD', 'FAIR', 'GOOD', 'BEST', 'mulund', 10),
(5, 'pradnya pawar', 'pradnya687@gmail.com', '9190042021', 'GOOD', 'GOOD', 'GOOD', 'BEST', 'matunga', 10),

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE IF NOT EXISTS `visitor` (
  `mid` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`mid`, `first_name`, `last_name`, `phone_no`, `email`, `city`, `country`) VALUES
(10, 'satish', 'shinde', '8693007753', 'satish123@gmail.com', 'mumbai', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `women_gallery`
--

CREATE TABLE IF NOT EXISTS `women_gallery` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `a_id` int(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image_description` varchar(255) NOT NULL,
  `gallery_small` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `women_gallery`
--

INSERT INTO `women_gallery` (`id`, `a_id`, `image_title`, `image_description`, `gallery_small`, `status`) VALUES
(2, 1, 'costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'w1.jpg', '1'),
(3, 1, ' Dance costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'w2.jpg', '0'),
(4, 1, 'Karnatak Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'w3.jpg', '1'),
(5, 1, 'Kathak Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'w4.jpg', '1'),
(6, 1, 'Himachal Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'w5.jpg', '0'),
(7, 1, 'Dance Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'w6.jpg', '0'),
(8, 1, 'Dance Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'w7.jpg', '0'),
(9, 1, 'Dance Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'w8.jpg', '0'),
(10, 1, 'westren Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'w9.jpg', '0'),
(11, 1, 'Rani Laxmi bai costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'w10.jpg', '0'),
(12, 1, 'Rani Laxmi bai', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'w14.jpg', '0'),
(13, 1, 'Lavni Costumes', 'Clothing in India varies from region to region depending on the ethnicity, geography, climate and cultural traditions of the people of that region. ', 'w17.jpg', '0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kids_gallery`
--
ALTER TABLE `kids_gallery`
  ADD CONSTRAINT `kids_gallery_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `sb_admin` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `men_gallery`
--
ALTER TABLE `men_gallery`
  ADD CONSTRAINT `men_gallery_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `sb_admin` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `visitor` (`mid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `women_gallery`
--
ALTER TABLE `women_gallery`
  ADD CONSTRAINT `women_gallery_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `sb_admin` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

