-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2017 at 01:56 PM
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
-- Table structure for table `data_base`
--

CREATE TABLE `data_base` (
  `id` int(100) NOT NULL,
  `host` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `user` varchar(256) NOT NULL,
  `data_base` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_base`
--

INSERT INTO `data_base` (`id`, `host`, `password`, `username`, `user`, `data_base`) VALUES
(10, 'localhost', '615065f332d5a002e3034e3b2183acdaa9f55b30d9863f62d53867195b9ff7b5ac6fcbbd8330abeb2d41bf9d175e1597702129e92a8eaad6112a73c5cf46efc8wS1NWT7OhzrZKXyWM/0Qx2XOSok0j5UknSMeTH8OW2Y=', 'root', 'ashik', 'prorep'),
(11, 'localhost', 'd2bda838125e636062a663052e7533c6e34bd769a50c84d27b28c84eea05a90c0503a01965cda80f47828a8a0f189f268a42eed956f68dc73e79a0eb95f0fcc5+RYlrnq4Di6Sb2d5z+aNa3XXJR2dxNqF2xqUPnrEOF4=', 'root', 'ashik', 'qwerty');

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
-- Indexes for table `data_base`
--
ALTER TABLE `data_base`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_base`
--
ALTER TABLE `data_base`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
