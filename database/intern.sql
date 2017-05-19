-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2017 at 12:49 PM
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
('ashik', 'Q', 'c98a0c9e2261b44349810cab88e5fd2c872fd42c88497ecc2fb957ae26fc4d66f9b52b1c0381ca6bdd2bea694b7c04c009e336e3e91e53f64d459e7a367adffc', 'Q', 'Q'),
('ashik', 'A', 'a78101396a876a62ade0003e33183b93b1b0c74d05a56a67ce1ef41a8ea503d8d6a995f405a405b45629042fe8b2abef861a6ca238bb9289289b1748fa2162c2', 'A', 'A'),
('ashik', 'Z', 'ed65af8cc55dc93a309f7ddd6a880aab1359bc492559cebc80fa79c408be867c778c2c101abf7986f4c112b8c6c0f4bb207116b36140303cfb2c829cced9c8ff', 'Z', 'Z'),
('ashik', 'W', 'a20d6650db1bd223dd4987db0903ff300329c2470c0ccbd003609e3eaba3d0cf6f6f3d1ff73fac518f67ff6dec13433bc86506291ce9c37d61e6d153f394f2d6', 'W', 'W'),
('ashik', 'q', 'e1f4990046f14b2763d630995eee3696c39650a58fa34b66babb3357365dfe0861652de4255b762be57ef298c1c06ad5deee09c8de33a240298eb5b7eff3aa54', 'q', 'qq'),
('ashik', 'q', 'a1908faa2fde266e0205cb38cdebd55810c923cf18f66fd4b45a86c86863bcfb0dc731bb61fcf1581f1d1d6649c170f4960c293288ad4b165d11557681fcfb42', 'qq', 'q');

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
