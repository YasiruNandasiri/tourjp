-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 23, 2023 at 11:44 PM
-- Server version: 8.0.34-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yf30`
--

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

CREATE TABLE `styles` (
  `styleid` int NOT NULL,
  `boxtype` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'textbox',
  `stylename` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'maintext',
  `margin` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `border` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `padding` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `width` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'fit-content',
  `max-width` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `height` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `max-height` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `background-color` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '#ebf5fb',
  `float1` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'left',
  `color` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '#273746',
  `font-family` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Monospace',
  `font-size` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '1.3em',
  `box-sizing` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'border-box',
  `extra2` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra3` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra4` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra5` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `styles`
--

INSERT INTO `styles` (`styleid`, `boxtype`, `stylename`, `margin`, `border`, `padding`, `width`, `max-width`, `height`, `max-height`, `background-color`, `float1`, `color`, `font-family`, `font-size`, `box-sizing`, `extra2`, `extra3`, `extra4`, `extra5`) VALUES
(1, 'aboutpara', 'aboutpara', 'none', 'none', '20px', '50%', '50%', '350px', '350px', 'none', 'left', '#d35400', 'sans-serif', '1.5em', 'border-box', '', '', '', ''),
(2, 'aboutbanner', 'aboutbanner', 'none', 'none', 'none', '50%', '50%', '350px', '350px', 'none', 'left', 'none', 'none', 'none', 'border-box', '', '', '', ''),
(3, 'menubox', 'menubox', '10px', 'none', '10px', 'fit-content', 'none', 'none', 'none', 'none', 'left', '#fdfefe', 'sans-serif', '2em', 'border-box', '', '', '', ''),
(4, 'videobox', 'videobox', '15px', 'none', '15px', '550px', '550px', 'none', 'none', '#ebf5fb', 'left', '#5dade2', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(5, 'logobox', 'logobox', '15px', 'none', 'none', '150px', '150px', 'none', 'none', '#ebf5fb', 'left', '#5dade2', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(6, 'productbox', 'productbox', 'none', 'none', '20px 20px 0px 20px', '25%', '25%', 'none', 'none', 'none', 'left', '#d35400', 'sans-serif', '0.7em', 'border-box', '', '', '', ''),
(7, 'topbanner', 'topbanner', 'none', 'none', '0px 0px 20px 0px', '100%', '100%', 'auto', 'auto', 'none', 'left', 'none', 'none', 'none', 'border-box', '', '', '', ''),
(8, 'compname', 'compname', 'none', 'none', '0px 0px 30px 0px', '100%', '100%', 'none', 'none', '#FDFEFE', 'left', '#239B56', 'sans-serif', '4em', 'border-box', '', '', '', ''),
(9, 'contactpara', 'contactpara', 'none', 'none', '80px 0px 0px 0px', '50%', '50%', '550px', '550px', 'none', 'left', '#17202a', 'sans-serif', '1.5em', 'border-box', '', '', '', ''),
(10, 'productstitle', 'productstitle', 'none', 'none', '20px 0px 0px 0px', '100%', '100%', 'none', 'none', 'none', 'left', '#283747', 'sans-serif', '3em', 'border-box', '', '', '', ''),
(11, 'sitemapabout', 'sitemapabout', 'none', 'none', '50px 0px 0px 0px', '33.3%', '33.3%', '450px', '450px', '#34495e ', 'left', '#fdfefe', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(12, 'copyrightbox', 'copyrightbox', 'none', 'none', '10px', '100%', '100%', 'none', 'none', ' #34495e ', 'left', '#fdfefe', 'sans-serif', '0.8em', 'border-box', '', '', '', ''),
(13, 'servicespara', 'servicespara', 'none', 'none', '50px', '50%', '50%', '450px', '450px', ' #f8f9f9', 'left', '#17202a', 'sans-serif', '1.5em', 'border-box', '', '', '', ''),
(14, 'servicesbanner', 'servicesbanner', 'none', 'none', 'none', '50%', '50%', '450px', '450px', 'none', 'left', 'none', 'none', 'none', 'border-box', '', '', '', ''),
(15, 'contactbanner', 'contactbanner', 'none', 'none', '50px 0px 0px 0px', '50%', '50%', '550px', '550px', 'none', 'left', 'none', 'none', 'none', 'border-box', '', '', '', ''),
(16, 'sitemapmain', 'sitemapmain', 'none', 'none', '50px 0px 0px 0px', '33.3%', '33.3%', '450px', '450px', '#34495e ', 'left', '#fdfefe', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(17, 'sitemapsignup', 'sitemapsignup', 'none', 'none', '50px 0px 0px 0px', '33.3%', '33.3%', '450px', '450px', '#34495e ', 'left', '#fdfefe', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(18, 'topbar', 'topbar', 'none', 'none', '0.7% 10% 0.7% 10%', '100%', '100%', 'none', 'none', '#145A32', 'left', '#FDFEFE', 'sans-serif', '1em', 'border-box', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stylesmobile`
--

CREATE TABLE `stylesmobile` (
  `styleid` int NOT NULL,
  `boxtype` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'textbox',
  `stylename` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'maintext',
  `margin` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `border` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `padding` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `width` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'fit-content',
  `max-width` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `height` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `max-height` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `background-color` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '#ebf5fb',
  `float1` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'left',
  `color` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '#273746',
  `font-family` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Monospace',
  `font-size` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '1.3em',
  `box-sizing` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'border-box',
  `extra2` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra3` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra4` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra5` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `stylesmobile`
--

INSERT INTO `stylesmobile` (`styleid`, `boxtype`, `stylename`, `margin`, `border`, `padding`, `width`, `max-width`, `height`, `max-height`, `background-color`, `float1`, `color`, `font-family`, `font-size`, `box-sizing`, `extra2`, `extra3`, `extra4`, `extra5`) VALUES
(1, 'aboutpara', 'aboutpara', 'none', 'none', '40px 0px 40px 0px', '100%', '100%', '200px', '200px', 'none', 'left', '#d35400', 'sans-serif', '0.9em', 'border-box', '', '', '', ''),
(2, 'aboutbanner', 'aboutbanner', 'none', 'none', 'none', '100%', '100%', '200px', '200px', 'none', 'left', 'none', 'none', 'none', 'border-box', '', '', '', ''),
(3, 'menubox', 'menubox', '10px', 'none', '10px', 'fit-content', 'none', 'none', 'none', 'none', 'left', '#fdfefe', 'sans-serif', '2em', 'border-box', '', '', '', ''),
(4, 'videobox', 'videobox', '15px', 'none', '15px', '550px', '550px', 'none', 'none', '#ebf5fb', 'left', '#5dade2', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(5, 'logobox', 'logobox', '15px', 'none', 'none', '150px', '150px', 'none', 'none', '#ebf5fb', 'left', '#5dade2', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(6, 'productbox', 'productbox', 'none', 'none', '20px 20px 0px 20px', '50%', '50%', 'none', 'none', 'none', 'left', '#d35400', 'sans-serif', '0.6em', 'border-box', '', '', '', ''),
(7, 'topbanner', 'topbanner', 'none', 'none', '0px 0px 20px 0px', '100%', '100%', '900px', '900px', ' #f8f9f9', 'left', 'none', 'none', 'none', 'border-box', '', '', '', ''),
(8, 'compname', 'compname', 'none', 'none', '0px 0px 30px 0px', '100%', '100%', 'none', 'none', '#27AE60', 'left', '#283747', 'sans-serif', '1.3em', 'border-box', '', '', '', ''),
(9, 'contactpara', 'contactpara', 'none', 'none', '40px 0px 10px 0px', '100%', '100%', '350px', '350px', ' #f8f9f9', 'left', '#17202a', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(10, 'productstitle', 'productstitle', 'none', 'none', '20px 0px 0px 0px', '100%', '100%', 'none', 'none', 'none', 'left', '#283747', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(11, 'sitemapabout', 'sitemapabout', 'none', 'none', '50px 0px 50px 0px', '100%', '100%', '300px', '300px', ' #34495e ', 'left', '#fdfefe', 'Trebuchet MS', '0.7em', 'border-box', '', '', '', ''),
(12, 'copyrightbox', 'copyrightbox', 'none', 'none', '10px', '100%', '100%', 'none', 'none', ' #34495e ', 'left', '#fdfefe', 'Trebuchet MS', '0.6em', 'border-box', '', '', '', ''),
(13, 'servicespara', 'servicespara', 'none', 'none', '40px 0px 40px 0px', '100%', '100%', '300px', '300px', ' #f8f9f9', 'left', '#17202a', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(14, 'servicesbanner', 'servicesbanner', 'none', 'none', '0px 0px 0px 0px', '100%', '100%', '300px', '300px', ' #f8f9f9', 'left', 'none', 'none', 'none', 'border-box', '', '', '', ''),
(15, 'contactbanner', 'contactbanner', 'none', 'none', '40px 0px 0px 0px', '100%', '100%', '350px', '350px', ' #f8f9f9', 'left', 'none', 'none', 'none', 'border-box', '', '', '', ''),
(16, 'sitemapmain', 'sitemapmain', 'none', 'none', '0px 0px 0px 0px', '100%', '100%', '300px', '300px', ' #34495e ', 'left', '#fdfefe', 'Trebuchet MS', '0.7em', 'border-box', '', '', '', ''),
(17, 'sitemapsignup', 'sitemapsignup', 'none', 'none', '50px 0px 33px 0px', '100%', '100%', '300px', '300px', ' #34495e ', 'left', '#fdfefe', 'Trebuchet MS', '0.7em', 'border-box', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `sid` int NOT NULL,
  `sname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`sid`, `sname`, `email`) VALUES
(1, 'Yohan Pandigama', 'pandig911@gmail.com'),
(2, 'Yohan Pandigama', 'pandig911@gmail.com'),
(3, 'Your Name', 'Your E-mail'),
(4, 'Your Name', 'Your E-mail'),
(5, 'Yohan Pandigama', 'y@p.com'),
(6, 'Yohan Pandigama', 'ymig@mail.com'),
(7, 'John Jayapala', 'johnmail.com'),
(8, 'Arya', 'a@p.com'),
(9, 'Meth and Sukliri', 'mns@mail.com'),
(10, 'Saman De Silva', 'saman@mail.com'),
(11, 'Soma Silva', 'soma@mail.com'),
(12, '', ''),
(13, 'Yohan Pandigama', 'pan@mail.com'),
(14, 'Yohan Pandigama', 'pan1@gmail.com'),
(15, 'Yohan Pandigama', 'pan2@gmail.com'),
(16, 'Yohan', 'john@mail.com'),
(17, 'Yohan', 'jhna@mail.com'),
(18, 'Yohan', 'y@o.com'),
(19, 'ddd', 'dddd@ddd.com'),
(20, 'ssss', 'sss@ds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `styles`
--
ALTER TABLE `styles`
  ADD PRIMARY KEY (`styleid`);

--
-- Indexes for table `stylesmobile`
--
ALTER TABLE `stylesmobile`
  ADD PRIMARY KEY (`styleid`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `styles`
--
ALTER TABLE `styles`
  MODIFY `styleid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `stylesmobile`
--
ALTER TABLE `stylesmobile`
  MODIFY `styleid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `sid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
