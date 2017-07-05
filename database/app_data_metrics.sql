-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 08:22 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_data_metrics`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_kpi_metrics_android`
--

CREATE TABLE `app_kpi_metrics_android` (
  `login_time_in_ms` int(100) NOT NULL,
  `search_time_in_ms` int(100) NOT NULL,
  `video_playback_time_in_ms` int(100) NOT NULL,
  `logout_time_in_ms` int(100) NOT NULL,
  `device_id` varchar(50) NOT NULL,
  `os_version` varchar(50) NOT NULL,
  `device_model` varchar(50) NOT NULL,
  `app_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `app_kpi_metrics_ios`
--

CREATE TABLE `app_kpi_metrics_ios` (
  `login_time_in_ms` int(100) NOT NULL,
  `search_time_in_ms` int(100) NOT NULL,
  `video_playback_time_in_ms` int(100) NOT NULL,
  `logout_time_in_ms` int(100) NOT NULL,
  `device_id` varchar(50) NOT NULL,
  `os_version` varchar(50) NOT NULL,
  `device_model` varchar(50) NOT NULL,
  `app_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
