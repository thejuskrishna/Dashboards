-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2017 at 01:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `database`
--

CREATE TABLE `database` (
  `user` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `host` varchar(256) NOT NULL,
  `database` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `database`
--

INSERT INTO `database` (`user`, `username`, `password`, `host`, `database`) VALUES
('ashik', 'q', '55f3806f5a192d59a8c7de9f9cbe29d61ee5a3381553fa97bedbff8732851103034298dd7be938bdadba1d2fcdc7e5212ccae25b3784e14f5bd42383313d3173', 'q', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `flogin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `email`, `flogin`) VALUES
('a', 'ef474638b8897e9b4a9eda2a23eeb606a5b454ccc889ff15a193021344ef341979184d9e81dae2517791f12f463ae7ee8a626ea38d4f9a27ba79d0ffabb19520', 'ashik.alias@gmail.com', 1),
('ashik', '233b87834eb859087972bd1075f36fa84d5a15974082240b80d9738d32d5631412d7caa66afe2c85fe3ea059d93ba4c83db19ce57b438da2bc4e825b2fabd111', 'ashik.alias@gmail.com', 0),
('azx', 'a5936d79cbe810720278facc8ed2b59ab41ee15291f32eac5248a6fc7465b26a123ed5d1d6f0eab77078d5b0539172b1f481cf3f8ce5c09c722321fa1d063bb6', 'ashik.alias@gmail.com', 1),
('q', 'd4928fb03a7290dc412fa5917a5bfd4d0df1af2463803169d3480d977921635be35738ecb92877544a051d615700ff2d3e8d1f73d94873aca0d50da0c13564af', 'ashik.alias@gmail.com', 1),
('singlebrain', '81621a117baf36284e5a032aa269528d83be056d9ee5d8c7c836dc0f7bee359f0540e156c2b9b30effa94aabbc6e25522f544eb3d289a6f9817f7c794083933d', 'ashik.alias@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `database`
--
ALTER TABLE `database`
  ADD PRIMARY KEY (`user`,`database`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
