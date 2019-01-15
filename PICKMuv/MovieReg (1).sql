-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 15, 2019 at 04:35 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MovieReg`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmovie`
--

CREATE TABLE `addmovie` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `rottom` int(11) NOT NULL,
  `imdb` int(11) NOT NULL,
  `usernames` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addmovie`
--

INSERT INTO `addmovie` (`id`, `Name`, `rottom`, `imdb`, `usernames`) VALUES
(1, 'aquaman Returns', 0, 1, NULL),
(2, 'insidious', 0, 1, NULL),
(3, 'insidious', 0, 1, NULL),
(4, 'insidious', 0, 1, NULL),
(5, 'KGF', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `addmuv`
--

CREATE TABLE `addmuv` (
  `name` text NOT NULL,
  `imdb` int(11) NOT NULL,
  `rottom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Moviesdb`
--

CREATE TABLE `Moviesdb` (
  `Name` text NOT NULL,
  `numbers` int(11) NOT NULL,
  `Action` int(11) NOT NULL,
  `VFX` int(11) NOT NULL,
  `Story` int(11) NOT NULL,
  `Cast` int(11) NOT NULL,
  `Entert` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Moviesdb`
--

INSERT INTO `Moviesdb` (`Name`, `numbers`, `Action`, `VFX`, `Story`, `Cast`, `Entert`, `img`) VALUES
('Insidious', 4, 6, 5, 6, 6, 5, 'images/insidious.jpg'),
('Insidious', 4, 6, 5, 6, 6, 5, 'images/insidious.jpg'),
('The Conjuring', 1, 3, 9, 8, 5, 6, 'images/theconjuring.jpg'),
('The Conjuring', 1, 3, 9, 8, 5, 6, 'images/theconjuring.jpg'),
('Aquaman', 2, 3, 3, 3, 3, 3, 'images/aquaman.jpg'),
('Aquaman', 2, 3, 3, 3, 3, 3, 'images/aquaman.jpg'),
('Deadpool', 0, 8, 7, 7, 7, 9, 'images/deadpool.png'),
('Shutter Island', 0, 5, 5, 9, 9, 8, 'images/shutter.jpg'),
('Deadpool', 0, 8, 7, 7, 7, 9, 'images/deadpool.png'),
('Shutter Island', 0, 5, 5, 9, 9, 8, 'images/shutter.jpg'),
('Zodiac', 0, 5, 4, 10, 8, 8, 'images/zodiac.jpeg'),
('Zodiac', 0, 5, 4, 10, 8, 8, 'images/zodiac.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `newmovie`
--

CREATE TABLE `newmovie` (
  `Name` text NOT NULL,
  `imdb` int(11) NOT NULL,
  `rottentomatoes` int(11) NOT NULL,
  `upvote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `username` text NOT NULL,
  `action` int(11) NOT NULL,
  `vfx` int(11) NOT NULL,
  `story` int(11) NOT NULL,
  `cast` int(11) NOT NULL,
  `entert` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`username`, `action`, `vfx`, `story`, `cast`, `entert`) VALUES
('asdasd', 5, 5, 5, 5, 5),
('a.bharamb123@gmail.com', 8, 4, 7, 6, 8),
('2222', 3, 9, 5, 5, 10),
('18116019', 6, 7, 10, 5, 7),
('ajain06', 7, 8, 10, 1, 7),
('randi@123', 5, 7, 10, 3, 1),
('Gustofeb', 2, 2, 9, 8, 5),
('Gustofeb', 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `name` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`name`, `username`, `email`, `password`) VALUES
('swastik sinha', 'abb26700', 'himanshu26597@gmail.com', 'asada'),
('Agastya', '2222', 'mrinalini.patil.58@gmail.com', 'AXASDASD'),
('himanshu', '18116019', 'swastiksinha1997@gmail.com', 'wasdasd'),
('himanshu', 'a.bharamb123@gmail.com', 'a.bharambe@rediffmail.com', 'sdsfs'),
('asdas', 'asdasd', 'asda@asd', 'asdasd'),
('Agastya', 'a.bharamb123@gmail.com', 'a.bharambe@rediffmail.com', 'sadasdasd'),
('Akshat Jain', 'ajain06', 'abharambe@ec.iitr.ac.in', 'ajkshdkasjh'),
('Aditya KS', 'randi@123', 'aks123@aks.com', 'urvi123'),
('Agastya Varahala', 'Gustofeb', 'abharambe@ec.iitr.ac.in', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmovie`
--
ALTER TABLE `addmovie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmovie`
--
ALTER TABLE `addmovie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
