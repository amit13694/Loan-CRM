-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 12:06 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_documentor`
--

CREATE TABLE `add_documentor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `joining_date` varchar(50) NOT NULL,
  `docu_password` varchar(50) NOT NULL,
  `tl_name` varchar(50) NOT NULL,
  `target` varchar(50) NOT NULL,
  `month_target_cmplt` int(11) NOT NULL,
  `target_add_month` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `month_wise_target_left` int(11) NOT NULL,
  `target_cmplt` int(11) NOT NULL,
  `unique_number` int(11) NOT NULL,
  `today_target` int(11) NOT NULL,
  `today_target_left` int(11) NOT NULL,
  `day_1` int(11) NOT NULL,
  `day_2` int(11) NOT NULL,
  `day_3` int(11) NOT NULL,
  `day_4` int(11) NOT NULL,
  `day_5` int(11) NOT NULL,
  `day_6` int(11) NOT NULL,
  `day_7` int(11) NOT NULL,
  `day_8` int(11) NOT NULL,
  `day_9` int(11) NOT NULL,
  `day_10` int(11) NOT NULL,
  `day_11` int(11) NOT NULL,
  `day_12` int(11) NOT NULL,
  `day_13` int(11) NOT NULL,
  `day_14` int(11) NOT NULL,
  `day_15` int(11) NOT NULL,
  `day_16` int(11) NOT NULL,
  `day_17` int(11) NOT NULL,
  `day_18` int(11) NOT NULL,
  `day_19` int(11) NOT NULL,
  `day_20` int(11) NOT NULL,
  `day_21` int(11) NOT NULL,
  `day_22` int(11) NOT NULL,
  `day_23` int(11) NOT NULL,
  `day_24` int(11) NOT NULL,
  `day_25` int(11) NOT NULL,
  `day_26` int(11) NOT NULL,
  `day_27` int(11) NOT NULL,
  `day_28` int(11) NOT NULL,
  `day_29` int(11) NOT NULL,
  `day_30` int(11) NOT NULL,
  `day_31` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_documentor`
--

INSERT INTO `add_documentor` (`id`, `name`, `contact`, `email`, `joining_date`, `docu_password`, `tl_name`, `target`, `month_target_cmplt`, `target_add_month`, `month_wise_target_left`, `target_cmplt`, `unique_number`, `today_target`, `today_target_left`, `day_1`, `day_2`, `day_3`, `day_4`, `day_5`, `day_6`, `day_7`, `day_8`, `day_9`, `day_10`, `day_11`, `day_12`, `day_13`, `day_14`, `day_15`, `day_16`, `day_17`, `day_18`, `day_19`, `day_20`, `day_21`, `day_22`, `day_23`, `day_24`, `day_25`, `day_26`, `day_27`, `day_28`, `day_29`, `day_30`, `day_31`) VALUES
(1, 'documentor', '88878978', 'doc@gmail.com', '2019-04-01', '0000', 'doctl@gmail.com', '25', 17, '2019-04-18 05:43:50', 8, 1, 3073, 15, 14, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'akka', '78987798', 'ak@gmail.com', '2019-04-01', '0000', 'doctl@gmail.com', '25', 0, '2019-04-16 12:22:21', 0, 0, 7395, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'jkjk', '564564', 'ranishjha92@gmail.com', '2019-04-03', '0000', 'doctl@gmail.com', '25', 0, '2019-04-16 12:22:21', 0, 0, 876, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'wq', '79787', 'wq@gmail.com', '2019-04-01', '0000', 'doctl@gmail.com', '25', 0, '2019-04-16 12:22:21', 0, 0, 2484, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `add_linker`
--

CREATE TABLE `add_linker` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `joining_date` varchar(50) NOT NULL,
  `linker_pass` varchar(50) NOT NULL,
  `target` int(11) NOT NULL,
  `month_target_cmplt` int(11) NOT NULL,
  `target_add_month` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `month_wise_target_left` int(11) NOT NULL,
  `tl_name` varchar(50) NOT NULL,
  `target_cmplt` int(11) NOT NULL,
  `today_target` int(11) NOT NULL,
  `today_target_left` int(11) NOT NULL,
  `unique_number` int(11) NOT NULL,
  `day_1` int(11) NOT NULL,
  `day_2` int(11) NOT NULL,
  `day_3` int(11) NOT NULL,
  `day_4` int(11) NOT NULL,
  `day_5` int(11) NOT NULL,
  `day_6` int(11) NOT NULL,
  `day_7` int(11) NOT NULL,
  `day_8` int(11) NOT NULL,
  `day_9` int(11) NOT NULL,
  `day_10` int(11) NOT NULL,
  `day_11` int(11) NOT NULL,
  `day_12` int(11) NOT NULL,
  `day_13` int(11) NOT NULL,
  `day_14` int(11) NOT NULL,
  `day_15` int(11) NOT NULL,
  `day_16` int(11) NOT NULL,
  `day_17` int(11) NOT NULL,
  `day_18` int(11) NOT NULL,
  `day_19` int(11) NOT NULL,
  `day_20` int(11) NOT NULL,
  `day_21` int(11) NOT NULL,
  `day_22` int(11) NOT NULL,
  `day_23` int(11) NOT NULL,
  `day_24` int(11) NOT NULL,
  `day_25` int(11) NOT NULL,
  `day_26` int(11) NOT NULL,
  `day_27` int(11) NOT NULL,
  `day_28` int(11) NOT NULL,
  `day_29` int(11) NOT NULL,
  `day_30` int(11) NOT NULL,
  `day_31` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_linker`
--

INSERT INTO `add_linker` (`id`, `name`, `contact`, `email`, `joining_date`, `linker_pass`, `target`, `month_target_cmplt`, `target_add_month`, `month_wise_target_left`, `tl_name`, `target_cmplt`, `today_target`, `today_target_left`, `unique_number`, `day_1`, `day_2`, `day_3`, `day_4`, `day_5`, `day_6`, `day_7`, `day_8`, `day_9`, `day_10`, `day_11`, `day_12`, `day_13`, `day_14`, `day_15`, `day_16`, `day_17`, `day_18`, `day_19`, `day_20`, `day_21`, `day_22`, `day_23`, `day_24`, `day_25`, `day_26`, `day_27`, `day_28`, `day_29`, `day_30`, `day_31`) VALUES
(1, 'linker', 89878788, 'link@gmail.com', '2019-04-01', '0000', 34, 3, '2019-04-17 09:46:17', 0, 'linktl@gmail.com', 0, 1, 0, 965, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'll', 48878789, 'll@gmail.com', '2019-04-01', '0000', 34, 0, '2019-04-17 09:45:45', 0, 'linktl@gmail.com', 0, 1, 0, 6882, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'lo', 2147483647, 'lo@gmail.com', '2019-04-01', '0000', 34, 0, '2019-04-17 09:45:45', 0, 'linktl@gmail.com', 0, 1, 0, 3523, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'checklinker', 454654654, 'clink@gmail.com', '2019-04-01', '0000', 74, 0, '2019-04-18 05:41:39', 0, 'db@gmail.com', 0, 0, 0, 1513, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'kl', 464654, 'kl@gmail.com', '2019-04-01', '0000', 74, 0, '2019-04-18 05:41:39', 0, 'db@gmail.com', 0, 0, 0, 8576, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'aclink', 465465454, 'aclink@gmail.com', '2019-04-01', '0000', 74, 7, '2019-04-18 05:41:39', 67, 'db@gmail.com', 0, 0, 0, 9974, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `add_paymentor`
--

CREATE TABLE `add_paymentor` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `joining_date` varchar(50) NOT NULL,
  `paymentor_pass` varchar(50) NOT NULL,
  `target` int(11) NOT NULL,
  `month_target_cmplt` int(11) NOT NULL,
  `target_add_month` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `month_wise_target_left` int(11) NOT NULL,
  `tl_name` varchar(50) NOT NULL,
  `target_cmplt` int(11) NOT NULL,
  `today_target` int(11) NOT NULL,
  `today_target_left` int(11) NOT NULL,
  `unique_number` int(11) NOT NULL,
  `day_1` int(11) NOT NULL,
  `day_2` int(11) NOT NULL,
  `day_3` int(11) NOT NULL,
  `day_4` int(11) NOT NULL,
  `day_5` int(11) NOT NULL,
  `day_6` int(11) NOT NULL,
  `day_7` int(11) NOT NULL,
  `day_8` int(11) NOT NULL,
  `day_9` int(11) NOT NULL,
  `day_10` int(11) NOT NULL,
  `day_11` int(11) NOT NULL,
  `day_12` int(11) NOT NULL,
  `day_13` int(11) NOT NULL,
  `day_14` int(11) NOT NULL,
  `day_15` int(11) NOT NULL,
  `day_16` int(11) NOT NULL,
  `day_17` int(11) NOT NULL,
  `day_18` int(11) NOT NULL,
  `day_19` int(11) NOT NULL,
  `day_20` int(11) NOT NULL,
  `day_21` int(11) NOT NULL,
  `day_22` int(11) NOT NULL,
  `day_23` int(11) NOT NULL,
  `day_24` int(11) NOT NULL,
  `day_25` int(11) NOT NULL,
  `day_26` int(11) NOT NULL,
  `day_27` int(11) NOT NULL,
  `day_28` int(11) NOT NULL,
  `day_29` int(11) NOT NULL,
  `day_30` int(11) NOT NULL,
  `day_31` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_paymentor`
--

INSERT INTO `add_paymentor` (`id`, `name`, `contact`, `email`, `joining_date`, `paymentor_pass`, `target`, `month_target_cmplt`, `target_add_month`, `month_wise_target_left`, `tl_name`, `target_cmplt`, `today_target`, `today_target_left`, `unique_number`, `day_1`, `day_2`, `day_3`, `day_4`, `day_5`, `day_6`, `day_7`, `day_8`, `day_9`, `day_10`, `day_11`, `day_12`, `day_13`, `day_14`, `day_15`, `day_16`, `day_17`, `day_18`, `day_19`, `day_20`, `day_21`, `day_22`, `day_23`, `day_24`, `day_25`, `day_26`, `day_27`, `day_28`, `day_29`, `day_30`, `day_31`) VALUES
(1, 'balance', '878978988', 'bal@gmail.com', '2019-04-01', '0000', 50, 2, '2019-04-18 05:26:02', 48, 'balancetl@gmail.com', 1, 4, 3, 9273, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'ku', '4564564', 'ku@gmail.com', '2019-04-01', '0000', 50, 0, '2019-04-18 05:25:58', 0, 'balancetl@gmail.com', 0, 4, 0, 6449, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `add_tl`
--

CREATE TABLE `add_tl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `joining_date` varchar(50) NOT NULL,
  `tl_pass` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `unique_number` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `target_cmplt` int(11) NOT NULL,
  `target_left` int(11) NOT NULL,
  `target_add_month` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `daily_target` int(11) NOT NULL,
  `daily_target_cmplt` int(11) NOT NULL,
  `daily_target_left` int(11) NOT NULL,
  `daily_target_cmplt_var` int(11) NOT NULL,
  `daily_target_left_var` int(11) NOT NULL,
  `month_target_cmplt_var` int(11) NOT NULL,
  `month_target_left_var` int(11) NOT NULL,
  `target_var` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_tl`
--

INSERT INTO `add_tl` (`id`, `name`, `contact`, `email`, `joining_date`, `tl_pass`, `status`, `unique_number`, `target`, `target_cmplt`, `target_left`, `target_add_month`, `daily_target`, `daily_target_cmplt`, `daily_target_left`, `daily_target_cmplt_var`, `daily_target_left_var`, `month_target_cmplt_var`, `month_target_left_var`, `target_var`) VALUES
(1, 'documentor TL', '8787888878', 'doctl@gmail.com', '2019-04-26', '0000', 'documentor_tl', 9089, 100, 3, 97, '2019-04-16 12:22:21', 4, 0, 4, 0, 0, 0, 0, 0),
(2, 'linktl', '887897987', 'linktl@gmail.com', '2019-04-24', '0000', 'linker_tl', 9509, 100, 8, 92, '2019-04-12 05:00:07', 4, 0, 4, 0, 4, 5, 95, 100),
(3, 'balance TL', '878787888', 'balancetl@gmail.com', '2019-04-17', '0000', 'paymentor_tl', 621, 100, 7, 93, '2019-04-18 05:25:34', 4, 0, 4, 0, 0, 0, 0, 0),
(4, 'rahul', '897987897', 'rahul@gmail.com', '2019-04-01', '0000', 'documentor_tl', 5625, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'rahul', '987987', 'rahul@gmail.com', '2019-04-01', '0000', 'documentor_tl', 3991, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'rahul', '987987', 'rahul@gmail.com', '2019-04-01', '0000', 'documentor_tl', 8699, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'rahul', '987987', 'rahul@gmail.com', '2019-04-01', '0000', 'documentor_tl', 3493, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'amit', '4646545', 'amit@gmail.com', '2019-04-01', '0000', 'documentor_tl', 6553, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'amit', '4646545', 'amit@gmail.com', '2019-04-01', '0000', 'documentor_tl', 4427, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'amit', '465455', 'amit@gmail.com', '2019-04-01', '0000', 'documentor_tl', 1923, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'amit', '465455', 'amit@gmail.com', '2019-04-01', '0000', 'documentor_tl', 1960, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 0),
(12, 'amit', '4654654', 'amit@gmail.com', '2019-04-01', '0000', 'documentor_tl', 2385, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'asas', '654654', 'a@gmail.com', '2019-04-01', '0000', 'documentor_tl', 7989, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'kl', '8798798789', 'kl@gmail.com', '2019-04-01', '0000', 'documentor_tl', 2965, 0, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'kp', '9879878', 'kp@gmail.com', '2019-04-01', '0000', 'documentor_tl', 1285, 101, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'new doc', '87987987', 'new@gmail.com', '2019-04-01', '0000', 'documentor_tl', 4020, 100, 0, 0, '0000-00-00 00:00:00', 0, 0, 0, 0, 0, 0, 0, 0),
(17, 'double', '878978787', 'db@gmail.com', '2019-04-01', '0000', 'linker_tl', 595, 220, 6, 214, '2019-04-18 05:41:39', 9, 0, 9, 0, 0, 0, 0, 220),
(18, 'double', '878978787', 'db@gmail.com', '2019-04-01', '0000', 'varifier_tl', 595, 0, 0, 0, '2019-04-18 05:41:39', 17, 0, 0, 0, 17, 10, 415, 425),
(19, 'ak', '66454', 'ranishjha92@gmail.com', '2019-04-02', '0000', 'linker_tl', 1301, 0, 0, 0, '2019-04-12 05:38:33', 0, 0, 0, 0, 0, 0, 0, 0),
(20, 'ak', '66454', 'ranishjha92@gmail.com', '2019-04-02', '0000', 'varifier_tl', 1301, 0, 0, 0, '2019-04-12 05:38:33', 0, 0, 0, 0, 0, 0, 0, 0),
(21, 'ed', '13213212', 'ranishjha92@gmail.com', '2019-04-01', '0000', 'documentor_tl', 8513, 0, 0, 0, '2019-04-12 05:39:39', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `add_varifier`
--

CREATE TABLE `add_varifier` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `joining_date` datetime NOT NULL,
  `varifier_pass` varchar(50) NOT NULL,
  `target` varchar(50) NOT NULL,
  `month_target_cmplt` int(11) NOT NULL,
  `target_add_month` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `month_wise_target_left` int(11) NOT NULL,
  `tl_name` varchar(50) NOT NULL,
  `target_cmplt` int(11) NOT NULL,
  `today_target` int(11) NOT NULL,
  `today_target_left` int(11) NOT NULL,
  `unique_number` int(11) NOT NULL,
  `day_1` int(11) NOT NULL,
  `day_2` int(11) NOT NULL,
  `day_3` int(11) NOT NULL,
  `day_4` int(11) NOT NULL,
  `day_5` int(11) NOT NULL,
  `day_6` int(11) NOT NULL,
  `day_7` int(11) NOT NULL,
  `day_8` int(11) NOT NULL,
  `day_9` int(11) NOT NULL,
  `day_10` int(11) NOT NULL,
  `day_11` int(11) NOT NULL,
  `day_12` int(11) NOT NULL,
  `day_13` int(11) NOT NULL,
  `day_14` int(11) NOT NULL,
  `day_15` int(11) NOT NULL,
  `day_16` int(11) NOT NULL,
  `day_17` int(11) NOT NULL,
  `day_18` int(11) NOT NULL,
  `day_19` int(11) NOT NULL,
  `day_20` int(11) NOT NULL,
  `day_21` int(11) NOT NULL,
  `day_22` int(11) NOT NULL,
  `day_23` int(11) NOT NULL,
  `day_24` int(11) NOT NULL,
  `day_25` int(11) NOT NULL,
  `day_26` int(11) NOT NULL,
  `day_27` int(11) NOT NULL,
  `day_28` int(11) NOT NULL,
  `day_29` int(11) NOT NULL,
  `day_30` int(11) NOT NULL,
  `day_31` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_varifier`
--

INSERT INTO `add_varifier` (`id`, `name`, `contact`, `email`, `joining_date`, `varifier_pass`, `target`, `month_target_cmplt`, `target_add_month`, `month_wise_target_left`, `tl_name`, `target_cmplt`, `today_target`, `today_target_left`, `unique_number`, `day_1`, `day_2`, `day_3`, `day_4`, `day_5`, `day_6`, `day_7`, `day_8`, `day_9`, `day_10`, `day_11`, `day_12`, `day_13`, `day_14`, `day_15`, `day_16`, `day_17`, `day_18`, `day_19`, `day_20`, `day_21`, `day_22`, `day_23`, `day_24`, `day_25`, `day_26`, `day_27`, `day_28`, `day_29`, `day_30`, `day_31`) VALUES
(1, 'var', '89789788878', 'var@gmail.com', '2019-04-16 00:00:00', '0000', '25', 0, '2019-04-18 05:40:53', 25, 'linktl@gmail.com', 0, 0, 0, 1778, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'kp', '789798789', 'kp@gmail.com', '2019-04-01 00:00:00', '0000', '25', 0, '0000-00-00 00:00:00', 0, 'linktl@gmail.com', 0, 0, 0, 8518, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'amit', '9878789', 'am@gmail.com', '2019-04-01 00:00:00', '0000', '25', 0, '0000-00-00 00:00:00', 0, 'linktl@gmail.com', 0, 0, 0, 8966, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'ko', '7987978', 'ko@gmail.com', '2019-04-01 00:00:00', '0000', '25', 0, '0000-00-00 00:00:00', 0, 'linktl@gmail.com', 0, 0, 0, 3076, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'cvar', '454564564', 'cvar@gmail.com', '2019-04-01 00:00:00', '0000', '425', 11, '2019-04-18 05:42:12', 414, 'db@gmail.com', 0, 6, 6, 1503, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usename` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tl_name` varchar(50) NOT NULL,
  `login` timestamp NULL DEFAULT NULL,
  `logout` timestamp NULL DEFAULT NULL,
  `attendance` varchar(50) NOT NULL,
  `unique_tl` int(11) NOT NULL,
  `documentor_unique` int(11) NOT NULL,
  `linker_unique` int(11) NOT NULL,
  `paymentor_unique` int(11) NOT NULL,
  `varifier_unique` int(11) NOT NULL,
  `message` varchar(200) DEFAULT NULL,
  `sidenav` varchar(50) NOT NULL,
  `container` varchar(50) NOT NULL,
  `header` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `usename`, `name`, `password`, `status`, `tl_name`, `login`, `logout`, `attendance`, `unique_tl`, `documentor_unique`, `linker_unique`, `paymentor_unique`, `varifier_unique`, `message`, `sidenav`, `container`, `header`) VALUES
(1, 'admin', '', '12345', 'admin', '', '2019-06-14 09:15:42', NULL, '1', 0, 0, 0, 0, 0, 'hello', '#ff8000', '#808000', '#004080'),
(2, 'doctl@gmail.com', 'aj', '0000', 'documentor_tl', 'NULL', '2019-04-16 12:22:19', NULL, '1', 9089, 0, 0, 0, 0, NULL, '#0000ff', '#8080ff', '#008080'),
(3, 'linktl@gmail.com', 'linker', '0000', 'linker_tl', 'NULL', '2019-04-12 05:41:41', NULL, '1', 9509, 0, 0, 0, 0, NULL, '#8080ff', '#00ffff', '#004080'),
(4, 'balancetl@gmail.com', 'rahul', '0000', 'paymentor_tl', 'NULL', '2019-04-17 10:04:19', NULL, '1', 621, 0, 0, 0, 0, NULL, '#804000', '#808000', '#004000'),
(5, 'doc@gmail.com', 'ak', '0000', 'documentor', 'doctl@gmail.com', '2019-04-18 05:43:22', '2019-04-18 05:44:03', 'NULL', 0, 3073, 0, 0, 0, NULL, '#0080c0', '#008040', '#009f9f'),
(6, 'link@gmail.com', 'am', '0000', 'linker', 'linktl@gmail.com', '2019-04-17 09:45:44', '2019-04-17 09:46:10', 'NULL', 0, 0, 965, 0, 0, NULL, '#00ff00', '#00ce67', '#1e3c00'),
(7, 'bal@gmail.com', 'am', '0000', 'payment', 'balancetl@gmail.com', '2019-04-18 05:25:47', '2019-04-18 05:26:08', 'NULL', 0, 0, 0, 9273, 0, NULL, '#ff8000', '#ffb693', '#9d4f00'),
(8, 'var@gmail.com', '', '0000', 'varifier', 'linktl@gmail.com', '2019-04-18 05:40:52', '2019-04-18 05:42:02', 'NULL', 0, 0, 0, 0, 1778, NULL, '#800000', '#0000ff', '#000000'),
(9, 'kp@gmail.com', '', '0000', 'varifier', 'linktl@gmail.com', '2019-04-04 06:50:17', '2019-04-04 06:52:53', 'NULL', 0, 0, 0, 0, 8518, NULL, '', '', ''),
(10, 'am@gmail.com', 'tk', '0000', 'varifier', 'linktl@gmail.com', '2019-04-04 06:53:04', '2019-04-04 06:57:18', 'NULL', 0, 0, 0, 0, 3339, NULL, '', '', ''),
(11, 'am@gmail.com', '', '0000', 'varifier', 'linktl@gmail.com', '2019-04-04 06:53:04', '2019-04-04 06:57:18', 'NULL', 0, 0, 0, 0, 8966, NULL, '', '', ''),
(12, 'ak@gmail.com', 'akka', '0000', 'documentor', 'doctl@gmail.com', NULL, '2019-04-04 12:02:51', '', 0, 7395, 0, 0, 0, NULL, '', '', ''),
(13, 'kp@gmail.com', 'kp', '0000', 'documentor_tl', '1285', '2019-04-06 11:05:54', '2019-04-06 11:05:39', '1', 0, 0, 0, 0, 0, NULL, '', '', ''),
(14, 'new@gmail.com', 'new doc', '0000', 'documentor_tl', '4020', '2019-04-06 11:14:44', '2019-04-06 11:14:30', '1', 0, 0, 0, 0, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(15, 'ranishjha92@gmail.com', 'jkjk', '0000', 'documentor', 'new@gmail.com', NULL, '2019-04-06 11:22:45', '', 0, 876, 0, 0, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(16, 'ko@gmail.com', 'ko', '0000', 'linker', 'linktl@gmail.com', NULL, '2019-04-08 07:03:15', '', 0, 0, 6943, 0, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(17, 'kop@gmail.com', 'kop', '0000', 'linker', 'linktl@gmail.com', NULL, '2019-04-08 07:16:58', '', 0, 0, 3080, 0, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(18, 'kl@gmail.com', 'kl', '0000', 'linker', 'linktl@gmail.com', NULL, '2019-04-08 07:27:42', '', 0, 0, 4284, 0, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(19, 'wq@gmail.com', 'wq', '0000', 'documentor', 'doctl@gmail.com', NULL, '2019-04-08 07:29:17', '', 0, 2484, 0, 0, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(20, 'kl@gmail.com', 'kl', '0000', 'payment', 'balancetl@gmail.com', NULL, '2019-04-08 07:32:53', '', 0, 0, 0, 6447, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(21, 'ko@gmail.com', 'ko', '0000', 'varifier', 'linktl@gmail.com', NULL, '2019-04-08 07:33:28', '', 0, 0, 0, 0, 3076, NULL, '#343A40', '#6D6E6A', '#343A40'),
(22, 'll@gmail.com', 'll', '0000', 'documentor', 'linktl@gmail.com', NULL, '2019-04-08 07:38:10', '', 0, 5994, 0, 0, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(23, 'll@gmail.com', 'll', '0000', 'documentor', 'linktl@gmail.com', NULL, '2019-04-08 07:39:12', '', 0, 6882, 0, 0, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(24, 'lo@gmail.com', 'lo', '0000', 'documentor', 'linktl@gmail.com', NULL, '2019-04-08 07:39:53', '', 0, 3523, 0, 0, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(25, 'ku@gmail.com', 'ku', '0000', 'documentor', 'balancetl@gmail.com', NULL, '2019-04-08 07:42:00', '', 0, 6449, 0, 0, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(26, 'db@gmail.com', 'double', '0000', 'linker_tl', '595', '2019-04-18 05:41:39', '2019-04-10 12:02:04', '1', 0, 0, 0, 0, 0, NULL, '#0000ff', '#8080ff', '#000040'),
(27, 'ranishjha92@gmail.com', 'ak', '0000', 'linker_tl', '1301', NULL, '2019-04-12 05:38:34', '', 0, 0, 0, 0, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(28, 'ranishjha92@gmail.com', 'ed', '0000', 'documentor_tl', '8513', NULL, '2019-04-12 05:39:39', '', 0, 0, 0, 0, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(29, 'clink@gmail.com', 'checklinker', '0000', 'documentor', 'db@gmail.com', '2019-04-12 06:36:00', '2019-04-12 06:39:53', 'NULL', 0, 1513, 0, 0, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(30, 'kl@gmail.com', 'kl', '0000', 'documentor', 'db@gmail.com', NULL, '2019-04-12 06:40:44', '', 0, 8576, 0, 0, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(31, 'aclink@gmail.com', 'aclink', '0000', 'linker', 'db@gmail.com', '2019-04-18 05:41:21', '2019-04-18 05:41:30', 'NULL', 0, 9974, 0, 0, 0, NULL, '#343A40', '#6D6E6A', '#343A40'),
(32, 'cvar@gmail.com', 'cvar', '0000', 'varifier', 'db@gmail.com', '2019-04-18 05:42:08', '2019-04-18 05:42:30', 'NULL', 0, 0, 0, 0, 1503, NULL, '#343A40', '#6D6E6A', '#343A40');

-- --------------------------------------------------------

--
-- Table structure for table `balance_graph`
--

CREATE TABLE `balance_graph` (
  `jan` int(11) NOT NULL,
  `feb` int(11) NOT NULL,
  `march` int(11) NOT NULL,
  `april` int(11) NOT NULL,
  `may` int(11) NOT NULL,
  `june` int(11) NOT NULL,
  `july` int(11) NOT NULL,
  `aug` int(11) NOT NULL,
  `sep` int(11) NOT NULL,
  `oct` int(11) NOT NULL,
  `nov` int(11) NOT NULL,
  `december` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crm_status`
--

CREATE TABLE `crm_status` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crm_status`
--

INSERT INTO `crm_status` (`id`, `status`, `username`, `password`) VALUES
(1, 'on', 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `documentor_document`
--

CREATE TABLE `documentor_document` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adhar_number` varchar(50) NOT NULL,
  `pan_number` varchar(20) NOT NULL,
  `pan_image` varchar(70) NOT NULL,
  `adhar_image` varchar(70) NOT NULL,
  `bank_image` varchar(70) NOT NULL,
  `photo` varchar(70) NOT NULL,
  `other_document` varchar(70) NOT NULL,
  `documentor_name` varchar(50) NOT NULL,
  `when_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dob` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `civil_report` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `follow_up` varchar(50) NOT NULL DEFAULT '0000-00-00',
  `tl_name` varchar(50) NOT NULL,
  `linkup_cnfrm` varchar(50) NOT NULL,
  `balance_maintainer_name` varchar(50) NOT NULL,
  `linker_name` varchar(50) NOT NULL,
  `varifier_status` varchar(50) NOT NULL,
  `varifier_name` varchar(50) NOT NULL,
  `varified_dat` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `linkup_dat` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `balance_dat` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `follow_cmnt` varchar(100) NOT NULL,
  `documentor_status` varchar(50) NOT NULL,
  `varifier_flw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documentor_document`
--

INSERT INTO `documentor_document` (`id`, `name`, `address`, `zip_code`, `contact`, `email`, `adhar_number`, `pan_number`, `pan_image`, `adhar_image`, `bank_image`, `photo`, `other_document`, `documentor_name`, `when_added`, `dob`, `qualification`, `civil_report`, `comment`, `follow_up`, `tl_name`, `linkup_cnfrm`, `balance_maintainer_name`, `linker_name`, `varifier_status`, `varifier_name`, `varified_dat`, `linkup_dat`, `balance_dat`, `follow_cmnt`, `documentor_status`, `varifier_flw`) VALUES
(1, 'sasa', 'asaas22', '545454', '54564654', '', '', '', 'sasa.jpg', 'sasa.jpg', 'sasa.jpg', 'sasa.jpg', 'sasa.jpg', 'doc@gmail.com', '2019-04-08 12:22:08', '', '', '', 'INST', '', 'linktl@gmail.com', 'cnfrm', '', 'link@gmail.com', 'yes', 'var@gmail.com', '2019-04-08 12:16:21', '2019-04-08 12:22:08', '0000-00-00 00:00:00', '', '', ''),
(8, 'sdas', 'wdwd3', '312232', '23223', '', '', '', 'sdas.jpg', 'sdas.jpg', 'sdas.jpg', 'sdas.jpg', 'sdas.jpg', 'doc@gmail.com', '2019-04-10 08:23:34', '', '', '', 'NULL', '', 'linktl@gmail.com', 'ncnfrm', '', 'link@gmail.com', 'yes', 'var@gmail.com', '0000-00-00 00:00:00', '2019-04-10 08:23:34', '0000-00-00 00:00:00', '', '', ''),
(10, 'dsfasW', 'WSDFES4', '422323', '4232423', '', '', '', 'dsfasW.jpg', 'dsfasW.jpg', 'dsfasW.jpg', 'dsfasW.jpg', 'dsfasW.jpg', 'doc@gmail.com', '2019-04-05 05:28:01', '', '', '', 'INST', '', 'balancetl@gmail.com', 'cnfrm', 'bal@gmail.com', 'link@gmail.com', 'yes', 'var@gmail.com', '2019-04-05 05:23:57', '2019-04-05 05:26:46', '2019-04-05 05:28:01', '', '', ''),
(11, 'SADASDW', 'DWWWWW33', '322323', '3444335', '', '', '', 'SADASDW.jpg', 'SADASDW.jpg', 'SADASDW.jpg', 'SADASDW.jpg', 'SADASDW.jpg', 'doc@gmail.com', '2019-04-08 12:19:26', '', '', '', 'NULL', '', 'linktl@gmail.com', 'cnfrm', '', 'link@gmail.com', 'yes', 'var@gmail.com', '0000-00-00 00:00:00', '2019-04-08 12:19:26', '0000-00-00 00:00:00', '', '', ''),
(12, 'eeww', 'qweqwe3', '2332', '23423423', '', '', '', 'eeww.jpg', 'eeww.jpg', 'eeww.jpg', 'eeww.jpg', 'eeww.jpg', 'doc@gmail.com', '2019-04-10 09:28:57', '', '', '', 'INST', '', 'balancetl@gmail.com', 'cnfrm', 'bal@gmail.com', 'link@gmail.com', 'yes', 'var@gmail.com', '2019-04-08 12:13:40', '2019-04-08 12:14:45', '2019-04-10 09:28:57', '', '', ''),
(15, 'wew', '232e', '323', '2323', '', '', '', 'wew.jpg', 'wew.jpg', 'wew.jpg', 'wew.jpg', 'wew.jpg', 'doc@gmail.com', '2019-04-12 07:51:55', '', '', '', 'NULL', '', 'db@gmail.com', 'cnfrm', '', 'aclink@gmail.com', 'yes', 'var@gmail.com', '0000-00-00 00:00:00', '2019-04-12 07:51:55', '0000-00-00 00:00:00', '', '', ''),
(17, 'err44', 'erer4', '444', '4444', '', '', '', 'err44.jpg', 'err44.jpg', 'err44.jpg', 'err44.jpg', 'err44.jpg', 'doc@gmail.com', '2019-04-09 07:20:35', '', '', '', 'INST', '', 'balancetl@gmail.com', 'cnfrm', 'bal@gmail.com', 'link@gmail.com', 'yes', 'var@gmail.com', '2019-04-08 10:45:25', '2019-04-08 11:52:17', '2019-04-09 07:20:35', '', '', ''),
(18, 'ewe', '2323e', '232', '232323', '', '', '', 'ewe.jpg', 'ewe.jpg', 'ewe.jpg', 'ewe.jpg', 'ewe.jpg', 'doc@gmail.com', '2019-04-08 11:51:23', '', '', '', 'NULL', '', 'linktl@gmail.com', 'lflw', '', 'link@gmail.com', 'yes', 'var@gmail.com', '2019-04-08 10:45:46', '2019-04-08 11:51:23', '0000-00-00 00:00:00', '', '', ''),
(19, 'uuii', 'iiii99', '9999', '99999', '', '', '', 'uuii.jpg', 'uuii.jpg', 'uuii.jpg', 'uuii.jpg', 'uuii.jpg', 'doc@gmail.com', '2019-04-08 11:51:00', '', '', '', 'NULL', '', 'linktl@gmail.com', 'lflw', '', 'link@gmail.com', 'yes', 'var@gmail.com', '2019-04-08 10:47:41', '2019-04-08 11:51:00', '0000-00-00 00:00:00', '', '', ''),
(20, 'uuu', 'uuu', '888', '888', '', '', '', 'uuu.jpg', 'uuu.jpg', 'uuu.jpg', 'uuu.jpg', 'uuu.jpg', 'doc@gmail.com', '2019-04-09 07:19:01', '', '', '', 'INST', '2019-04-02T13:00', 'balancetl@gmail.com', 'cnfrm', 'bal@gmail.com', 'link@gmail.com', 'yes', 'var@gmail.com', '2019-04-08 12:22:47', '2019-04-08 12:23:12', '2019-04-09 07:19:01', 'sasas', '', ''),
(21, 'wqew', 'wqeq3', '322323', '2322', '3@gmail.com', '', '', 'wqew.jpg', 'wqew.jpg', 'wqew.jpg', 'wqew.jpg', 'wqew.jpg', 'doc@gmail.com', '2019-04-09 07:21:07', '', '', '', 'INST', '', 'balancetl@gmail.com', 'cnfrm', 'bal@gmail.com', 'link@gmail.com', 'yes', 'var@gmail.com', '2019-04-08 12:09:49', '2019-04-08 12:12:22', '2019-04-09 07:21:07', '', '', ''),
(22, 'qwwq', 'qwqw3', '3333', '33333333', '3@gmail.com', '', '', 'qwwq.jpg', 'qwwq.jpg', 'qwwq.jpg', 'qwwq.jpg', 'qwwq.jpg', 'doc@gmail.com', '2019-04-09 07:18:20', '', '', '', 'INST', '', 'balancetl@gmail.com', 'cnfrm', 'bal@gmail.com', 'link@gmail.com', 'yes', 'var@gmail.com', '2019-04-08 12:09:35', '2019-04-08 12:10:09', '2019-04-09 07:18:20', '', '', ''),
(23, 'ewewq', 'qwewq3', '223', '3232', 'ee@gmail.com', '', '', 'ewewq.jpg', 'ewewq.jpg', 'ewewq.jpg', 'ewewq.jpg', 'ewewq.jpg', 'doc@gmail.com', '2019-04-10 08:23:14', '', '', '', 'NULL', '', 'linktl@gmail.com', 'cnfrm', '', 'link@gmail.com', 'yes', 'var@gmail.com', '2019-04-10 08:03:31', '2019-04-10 08:23:14', '0000-00-00 00:00:00', '', '', ''),
(24, 'wwe', 'wwewe3', '333', '232323', 'asas@gmail.com', '', '', 'wwe.jpg', 'wwe.jpg', 'wwe.jpg', 'wwe.jpg', 'wwe.jpg', 'doc@gmail.com', '2019-04-10 04:49:07', '', '', '', 'NULL', '', 'doctl@gmail.com', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(25, 'wew', 'sdwdw', '3232', '323222', '3@gmail.com', '', '', 'wew.', 'wew.', 'wew.', 'wew.', 'wew.', 'doc@gmail.com', '2019-04-12 07:06:12', '', '', '', 'NULL', '', 'db@gmail.com', '', '', '', 'no', 'cvar@gmail.com', '2019-04-12 07:06:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(26, 'sdsd', 'sdwwe3', '3434', '34343', '3@gmail.com', '', '', 'sdsd.jpg', 'sdsd.jpg', 'sdsd.jpg', 'sdsd.jpg', 'sdsd.jpg', 'doc@gmail.com', '2019-04-10 09:28:22', '', '', '', 'NULL', '', 'linktl@gmail.com', 'cnfrm', '', 'link@gmail.com', 'yes', 'var@gmail.com', '2019-04-10 08:18:23', '2019-04-10 09:28:22', '0000-00-00 00:00:00', '', '', ''),
(27, 'qwqewq', 'qweqw', '1312', '1312122', 'ranishjha92@gmail.com', '', '', 'qwqewq.', 'qwqewq.', 'qwqewq.', 'qwqewq.', 'qwqewq.', 'doc@gmail.com', '2019-04-12 07:05:42', '', '', 'Delhi', 'NULL', '', 'db@gmail.com', '', '', '', 'vflw', 'cvar@gmail.com', '2019-04-12 07:05:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(28, 'wqeqwe', '3123', '1312', '123123213', 'ranishjha92@gmail.com', '', '', 'wqeqwe.jpg', 'wqeqwe.jpg', 'wqeqwe.jpg', 'wqeqwe.jpg', 'wqeqwe.jpg', 'doc@gmail.com', '2019-04-12 06:46:14', '', '', 'Delhi', 'NULL', '', 'doctl@gmail.com', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(29, 'wqdsdc', '21ewds', '3123', '31421321', 'ranishjha92@gmail.com', '', '', 'wqdsdc.jpg', 'wqdsdc.jpg', 'wqdsdc.jpg', 'wqdsdc.jpg', 'wqdsdc.jpg', 'doc@gmail.com', '2019-04-12 07:55:34', '', '', 'Delhi', 'NULL', '', 'db@gmail.com', 'cnfrm', '', 'aclink@gmail.com', 'yes', 'cvar@gmail.com', '2019-04-12 07:54:22', '2019-04-12 07:55:34', '0000-00-00 00:00:00', '', '', ''),
(30, 'gfdss', 'fwfecs', '2312312', '213123', 'ranishjha92@gmail.com', '', '', 'gfdss.', 'gfdss.', 'gfdss.', 'gfdss.', 'gfdss.', 'doc@gmail.com', '2019-04-12 06:54:06', '', '', 'Delhi', 'NULL', '', 'db@gmail.com', '', '', '', 'no', 'cvar@gmail.com', '2019-04-12 06:54:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(31, 'fdsafds', '132wsa21312', '212', '2131212', 'ranishjha92@gmail.com', '', '', 'fdsafds.jpg', 'fdsafds.jpg', 'fdsafds.jpg', 'fdsafds.jpg', 'fdsafds.jpg', 'doc@gmail.com', '2019-04-12 07:11:13', '', '', 'Delhi', 'NULL', '', 'db@gmail.com', 'ncnfrm', '', 'aclink@gmail.com', 'yes', 'cvar@gmail.com', '2019-04-12 06:53:46', '2019-04-12 07:11:13', '0000-00-00 00:00:00', '', '', ''),
(32, 'etrgfd', '21ews3213', '213123', '213123213', 'ranishjha92@gmail.com', '', '', 'etrgfd.jpg', 'etrgfd.jpg', 'etrgfd.jpg', 'etrgfd.jpg', 'etrgfd.jpg', 'doc@gmail.com', '2019-04-17 10:10:05', '', '', 'Delhi', 'INST', '', 'balancetl@gmail.com', 'cnfrm', 'bal@gmail.com', 'aclink@gmail.com', 'yes', 'cvar@gmail.com', '2019-04-12 06:53:26', '2019-04-12 07:07:18', '2019-04-17 10:10:05', '', '', ''),
(33, 'jhkjhe', 'eh2hj333', '21312', '321312', 'ranishjha92@gmail.com', '', '', 'jhkjhe.', 'jhkjhe.', 'jhkjhe.', 'jhkjhe.', 'jhkjhe.', 'doc@gmail.com', '2019-04-12 07:05:32', '', '', 'Delhi', 'NULL', '', 'db@gmail.com', '', '', '', 'no', 'cvar@gmail.com', '2019-04-12 07:05:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(34, 'wqhdjhkjh', 'jhjh32', '5456', '87455645', 'ranishjha92@gmail.com', '', '', 'wqhdjhkjh.jpg', 'wqhdjhkjh.jpg', 'wqhdjhkjh.jpg', 'wqhdjhkjh.jpg', 'wqhdjhkjh.jpg', 'doc@gmail.com', '2019-04-12 06:48:10', '', '', 'Delhi', 'NULL', '', 'doctl@gmail.com', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(35, 'iuyiuyeuiwq', 'qwewe2', '54564', '456464', 'ranishjha92@gmail.com', '', '', 'iuyiuyeuiwq.jpg', 'iuyiuyeuiwq.jpg', 'iuyiuyeuiwq.jpg', 'iuyiuyeuiwq.jpg', 'iuyiuyeuiwq.jpg', 'doc@gmail.com', '2019-04-12 07:19:38', '', '', 'Delhi', 'NULL', '', 'db@gmail.com', 'cnfrm', '', 'aclink@gmail.com', 'yes', 'cvar@gmail.com', '2019-04-12 07:05:23', '2019-04-12 07:19:38', '0000-00-00 00:00:00', '', '', ''),
(36, 'sasa', 'wq', '3123', '213', 'ranishjha92@gmail.com', '', '', 'sasa.', 'sasa.', 'sasa.', 'sasa.', 'sasa.', 'doc@gmail.com', '2019-04-12 07:05:52', '', '', 'Delhi', 'NULL', '', 'db@gmail.com', '', '', '', 'vflw', 'cvar@gmail.com', '2019-04-12 07:05:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', ''),
(37, 'SS', 'aSAS2', '3232', '232323', 'ranishjha92@gmail.com', '', '', 'SS.jpg', 'SS.jpg', 'SS.jpg', 'SS.jpg', 'SS.jpg', 'doc@gmail.com', '2019-04-12 07:33:12', '', '', 'Delhi', 'NULL', '', 'db@gmail.com', 'cnfrm', '', 'aclink@gmail.com', 'yes', 'cvar@gmail.com', '2019-04-12 07:06:02', '2019-04-12 07:33:12', '0000-00-00 00:00:00', '', '', ''),
(38, 'jljsl', 'jjlkjs', '456456', '4564564', 'l@gmail.com', '', '', 'jljsl.jpg', 'jljsl.jpg', 'jljsl.jpg', 'jljsl.jpg', 'jljsl.jpg', 'doc@gmail.com', '2019-04-17 10:02:57', '', '', '', 'NULL', '', 'db@gmail.com', 'cnfrm', '', 'aclink@gmail.com', 'yes', 'cvar@gmail.com', '2019-04-17 09:45:26', '2019-04-17 10:02:57', '0000-00-00 00:00:00', '', '', ''),
(39, 'sAS', 'AsA', '4545', '456465456', 'amit@gmail.com', '', '', 'sAS.jpg', 'sAS.jpg', 'sAS.jpg', 'sAS.jpg', 'sAS.jpg', 'doc@gmail.com', '2019-04-18 05:43:46', '', '', '', 'NULL', '', 'doctl@gmail.com', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_documentor`
--
ALTER TABLE `add_documentor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_linker`
--
ALTER TABLE `add_linker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_paymentor`
--
ALTER TABLE `add_paymentor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_tl`
--
ALTER TABLE `add_tl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_varifier`
--
ALTER TABLE `add_varifier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crm_status`
--
ALTER TABLE `crm_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documentor_document`
--
ALTER TABLE `documentor_document`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_documentor`
--
ALTER TABLE `add_documentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_linker`
--
ALTER TABLE `add_linker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `add_paymentor`
--
ALTER TABLE `add_paymentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_tl`
--
ALTER TABLE `add_tl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `add_varifier`
--
ALTER TABLE `add_varifier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `crm_status`
--
ALTER TABLE `crm_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documentor_document`
--
ALTER TABLE `documentor_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
