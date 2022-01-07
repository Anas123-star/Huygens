-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 03:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huygens`
--

-- --------------------------------------------------------

--
-- Table structure for table `comp_reg`
--

CREATE TABLE `comp_reg` (
  `comp_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_phone_no` varchar(255) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date_of_comp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_reg`
--

INSERT INTO `comp_reg` (`comp_id`, `customer_name`, `customer_address`, `customer_phone_no`, `dep_id`, `employee_id`, `date_of_comp`) VALUES
(1, 'anas', 'sjhs', 'hddj', 0, 1, '2021-11-12 14:49:55'),
(2, 'anas', 'sjhs', 'hddj', 0, 1, '2021-11-12 14:57:23'),
(3, 'anas', 'sjhs', 'hddj', 0, 1, '2021-11-12 14:57:23'),
(4, 'anas', 'sjhs', 'hddj', 0, 1, '2021-11-12 14:58:17'),
(5, 'anas', 'sjhs', 'hddj', 0, 1, '2021-11-12 14:58:17'),
(6, 'anas', 'sjhs', 'hddj', 0, 1, '2021-11-12 14:58:26'),
(7, 'anas', 'sjhs', 'hddj', 3, 1, '2021-11-12 15:26:47'),
(8, 'Aquil', 'DHOARRAA', '8864913708', 4, 10022, '2021-11-12 15:30:54'),
(9, 'Monis', 'Jamalpur', '8864913708', 4, 10023, '2021-11-22 22:05:41'),
(17, 'anas', 'sahgashg', '8864913708', 1, 10001, '2021-11-23 10:55:35'),
(18, 'anas', 'sahgashg', '8864913708', 1, 10001, '2021-11-23 10:56:22'),
(19, 'Monis', 'kchyujsdh', '8171706539', 1, 10001, '2021-11-23 10:57:36'),
(20, 'Monis', 'Jamalpur', '8171706539', 6, 10023, '2021-11-24 08:16:03'),
(21, 'Monis', 'dhorra', '8171706539', 1, 10021, '2021-11-24 08:39:07'),
(22, 'Aquil', 'Dhoarra', '7857854545', 6, 10021, '2021-11-25 09:28:20'),
(23, 'Monis ', 'Dhoarra', '2323232323', 1, 10021, '2021-11-25 12:16:20'),
(24, 'Barik', 'Aligarh', '8533864067', 4, 10023, '2021-11-26 15:56:39'),
(25, 'FaisaL', 'Sir syed Nagar', '1234567890', 4, 10021, '2021-11-26 20:10:13'),
(26, 'Bunty', 'jshs', '7894561231', 7, 10023, '2021-12-01 09:22:32'),
(27, 'Faisal', 'Dhorra Chowdry chowk', '7078281435', 6, 10040, '2021-12-04 22:08:47'),
(28, 'Asif', 'Rohinda', '9058785312', 9, 10040, '2021-12-05 08:41:11'),
(29, 'zafar', 'dhorara', '2312321321', 1, 10010, '2022-01-01 21:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dep_id`, `dep_name`, `status`) VALUES
(1, 'Electrical', '1'),
(3, 'Photography', '1'),
(4, 'AC & Fridge', '1'),
(5, 'N.A', '1'),
(6, 'Salon & Styling', '1'),
(7, 'RO & Filter', '1'),
(8, 'Sanitary Services', '1'),
(9, 'A.I', '1');

-- --------------------------------------------------------

--
-- Table structure for table `emp_reg`
--

CREATE TABLE `emp_reg` (
  `emp_id` int(11) NOT NULL,
  `password` varchar(300) NOT NULL,
  `usertype` enum('admin','employee') NOT NULL,
  `dep_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` int(10) NOT NULL,
  `adhaar_no` varchar(255) NOT NULL,
  `work_exp` int(3) NOT NULL,
  `date_of_reg` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_reg`
--

INSERT INTO `emp_reg` (`emp_id`, `password`, `usertype`, `dep_id`, `name`, `fathername`, `mothername`, `gender`, `dob`, `phone`, `email`, `address`, `city`, `state`, `pincode`, `adhaar_no`, `work_exp`, `date_of_reg`) VALUES
(10001, '$2y$08$2E47prlDeJmM8yFofSBUpOAD492fSKPeyxiKWBYd5jqDZY3nAyDaK', 'admin', 0, 'anas', 'yameen', 'Sitara', 'male', '2001-02-22', '88649137', 'khanmoh@gmail.com', 'Dhorra', 'Aligarh', 'UP', 202002, '52086407', 2, '2021-11-05'),
(10009, '$2y$08$Epw87oFBAUNU/uvw2ZscSeBuQtAK4Yw7VFyRjn6gofKN6zNhn9wQm', 'admin', 1, 'anas', 'yameen', 'sdghds', 'male', '0000-00-00', '921917140', 'kdggsfgk2@GMIL.COM', 'DHORRA', 'aligarh', 'UP', 202001, '520864074119', 12, '2021-11-06'),
(10010, '$2y$08$mSevnjPGBKmM.HSCbRku/uyQZ60x343W5Ay0I7.ONrgvPGOoXbKKy', 'admin', 1, 'anas', 'yameen', 'sdghds', 'male', '0000-00-00', '921917140', 'kdggsfjkgk2@GMIL.COM', 'DHORRA', 'aligarh', 'UP', 202001, '520864074119', 12, '2021-11-07'),
(10011, '$2y$08$zDBWgFp3A42HCN4PVECCse6NtroIgDmU9I.A9zkLGydS2m58Iulgq', 'admin', 1, 'anas', 'j', 'm', 'male', '2021-11-19', '8864913708', 'khanmoh2@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 2, '2021-11-07'),
(10012, '$2y$08$xIuvUHOp7mFpd./8OZRTVOLjhRdBiv0Os523LPCoD1AxA.7Hmtn7G', 'admin', 1, 'anas', 'j', 'm', 'male', '2021-11-19', '8864913708', 'khanmoh22@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 2, '2021-11-07'),
(10013, '$2y$08$jOQukNOZlGv4P5kMwG5TIu1TFuzS4FYv/pn1uEqLADhnAprWJed1m', 'admin', 1, 'anas', 'j', 'm', 'male', '2021-11-19', '8864913708', 'khanmoh23@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 2, '2021-11-07'),
(10014, '$2y$08$Dtj5Ib7KoiUNX90Jl05KROq5L4qlbPQyd4fhUWgZOwJH4rwWIhPIK', 'admin', 2, 'anas', 'anas', 'anas', 'male', '2021-11-20', '8864913708', 'khanmoh25@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 3, '2021-11-07'),
(10015, '$2y$08$.G7Hygsr2quSTIZu5iv/E.N04kAtS62uvkDrXAQtIVMzQGFaY/tGC', 'admin', 3, 'anas', 'kj', 'kj', 'male', '2021-11-26', '8864913708', 'khaoh@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 2, '2021-11-07'),
(10016, '$2y$08$XDnvaBzU/PFI7mCYwpTY9udOALyo8z2y6J5Ft3nQtFIyjmWjw421q', 'admin', 1, 'anas', 'jg', 'm', 'male', '2021-11-12', '8864913708', 'khanmoh54@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 2, '2021-11-07'),
(10017, '$2y$08$B74iE1B6nLz.hBRxep13P.uDpej.RwIrfCLlY/pTowNldJb5h7OUW', 'admin', 0, 'anas', 'aj', 'ajhg', 'female', '2021-11-28', '8864913708', 'ahsa@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 3, '2021-11-07'),
(10018, '$2y$08$FVJTVBJyo50kpln3mvj/7.92ckAx/Rc9jU0vxiSutHEmX1hpM16z.', 'employee', 2, 'anas', 'jg', 'jhg', 'female', '2021-11-21', '8864913708', 'khanmoh15@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 2, '2021-11-07'),
(10019, '$2y$08$fPX8OUZhEEe1gfQAudvKZ.sUTHsaujbsUqEq90spTtrbSm/Nx/oo2', 'employee', 2, 'anas', 'mn', 'jn', 'male', '2021-11-14', '8864913708', 'ahsak@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 2, '2021-11-07'),
(10020, '$2y$08$ioFGblLyKLJwfvCeqHaG/OHoFkFwPAlZROvcE5jO1xal.B4yBJB6a', 'employee', 0, 'anas', 'gf', 'hf', 'female', '2021-11-11', '8864913708', 'khanmo2h@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 3, '2021-11-07'),
(10021, '$2y$08$oBHmKnHRcr81pNUoLDUtOOha1CVska1fiPMQ62S42hqnbCed87xZO', 'employee', 1, 'anas', 'lkpm', 'hjkol', 'male', '2021-11-20', '8864913708', 'khanmoh78@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 2, '2021-11-07'),
(10022, '$2y$08$vezfw.Chr7bRCT1ljs76pely/zqKO17/gyZnj32br/YoDkzOXBa9K', 'admin', 2, 'anas', 'sd', 'ds', 'male', '2021-11-13', '8864913708', 'khanmoh12@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 2, '2021-11-07'),
(10023, '$2y$08$1pGo/At64svvEgsVLQ1vqu35kBSXPWsnaQQmaMHQ9bBr7baVdcyVG', 'admin', 1, 'anas', 'hj', 'jh', 'male', '2021-11-28', '8864913708', 'ahs12a@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '123412341234', 1, '2021-11-07'),
(10024, '$2y$08$oXe52kDcvruBPXXpdcZuKeDes5UJZq/wSlq72sRagGJQG4KEE7wJS', 'admin', 1, 'anas', 'kj', 'n', 'male', '2021-11-06', '8864913708', 'klahsa@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 1, '2021-11-07'),
(10025, '$2y$08$.Hj8ZYhRNePch6oDPyP8UOEa8uraMk7SgAm.iv02wDceOaSYULzCS', 'admin', 1, 'anas', 'kj', 'n', 'male', '2021-11-06', '8864913708', 'klahs1a@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 1, '2021-11-07'),
(10026, '$2y$08$Nv4VE9GaWY5LyLiwayP3vO1rXMlHRb02t1ytW5oKx0CEalfFgxy7S', 'employee', 1, 'anas', 'hjg', 'ygh', 'male', '2021-11-17', '8864913708', 'khanmnmoh@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 2, '2021-11-07'),
(10027, '$2y$08$YUSlJrucHgtUqGD5LpeGHOkp57zUXG0tojj77J7SF3VwjeuXwl47y', 'admin', 1, 'anas', 'jg', 'df', 'male', '2021-11-20', '8864913708', 'khanmoh275@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 2, '2021-11-08'),
(10028, '$2y$08$qBCLM8GIsYSdq7elAMfLN.DoD4.VUOhTfyv2r3IULyCKn04POGeLW', 'employee', 6, 'anas', 'kj', 'n', 'male', '2021-11-13', '8864913708', 'khanmohammadanas27@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 0, '2021-11-12'),
(10029, '$2y$08$gvLq9DIRddboGCNFYf3E/ued87Z1/5wf2h2X7RA4/PVW9WrL1xrl2', 'employee', 4, 'anas', 'jn', 'jh', 'female', '2021-11-26', '8864913708', 'khanmoh278@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 0, '2021-11-12'),
(10038, '$2y$08$NRrJQcPZ4SJhRjeC58N.2Os5/vsanQcgnKqNIbrxuxQ/tG70WKNGS', '', 6, 'Faisal', 'XYZ', 'ABC', 'male', '1999-05-09', '8864913708', 'loremipsum@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '123456789123', 2, '2021-12-04'),
(10039, '$2y$08$b7DcocSVwlaOOqCZzUONEewecr1TtbNNHQHBD2M7vkxJm7WpsfJju', 'admin', 1, 'anas', 'hjg', 'n', 'male', '2021-12-23', '8864913708', 'ahsa356@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '520864074119', 0, '2021-12-04'),
(10040, '$2y$08$kATOKBPyhnfwEaV/kEOb9uLjorlPkR26mauqcD7l0vanrbLPRipjK', 'employee', 9, 'HExagon', 'fcclub', 'madrid', 'other', '2002-02-02', '8864913708', 'yzh@gmail.com', 'DHOARRAA', 'aLIGARH', 'UP', 202002, '123546554981', 65, '2021-12-04'),
(10041, '$2y$08$uVS14x5xm9OVMFVGfk2IReijH5nJSDHxjXvxGDMPwdgxiTPQRhW.6', 'admin', 7, 'Shu', 'Qam', 'Res', 'male', '2021-12-08', '8864913709', 'shum@gmail.com', 'Dhorra', 'Aligarh', 'UP', 202002, '123412341234', 0, '2021-12-08'),
(10042, '$2y$08$YwuQ3nVGUFvyVnMIp.LuXeLZgPMxgxmwM8D/lc6MHaTzXxXNdD4R2', 'employee', 9, 'Alan walker', 'Walker', 'Alan', 'female', '2021-12-30', '7897897898', 'alanwalker@huygens.in', 'America', 'New york', 'Amsterdam', 1020202, '520864074569', 12, '2022-01-01'),
(10043, '$2y$08$DDjJDIcBUSslPuhhaElH1OBm9WB8FJ1nDjyb7/syDJxi6B1hCn8k2', 'employee', 9, 'Alan walker', 'h', 'jh', 'male', '2022-01-12', '8864913708', 'khanmoh789@gmail.com', 'sahgashg', 'aystyas', 'UP', 202002, '123412341234', 24, '2022-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` int(6) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `invoice_date` datetime NOT NULL DEFAULT current_timestamp(),
  `sub_total` double NOT NULL,
  `new_total` double NOT NULL,
  `vis_charge` double NOT NULL,
  `discount` double NOT NULL,
  `grand_total` double NOT NULL,
  `paid_amt` double NOT NULL,
  `due` double NOT NULL,
  `payment_method` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `comp_id`, `invoice_date`, `sub_total`, `new_total`, `vis_charge`, `discount`, `grand_total`, `paid_amt`, `due`, `payment_method`) VALUES
(59, 21, '2021-12-01 10:35:20', 1900, 8140, 50, 0, 8190, 500, 7690, 'Cash'),
(60, 25, '2021-12-01 15:01:33', 500, 500, 50, 0, 550, 1000, -450, 'Online Payment'),
(61, 25, '2021-12-01 15:17:51', 500, 500, 50, 0, 550, 1000, -450, 'Online Payment'),
(62, 23, '2021-12-01 15:26:27', 1200, 1200, 50, 0, 1250, 500, 750, 'Online Payment'),
(63, 23, '2021-12-01 15:26:27', 1200, 1200, 50, 0, 1250, 500, 750, 'Online Payment'),
(64, 23, '2021-12-01 15:26:27', 1200, 1200, 50, 0, 1250, 500, 750, 'Online Payment'),
(65, 23, '2021-12-01 15:28:13', 1200, 1200, 50, 0, 1250, 500, 750, 'Online Payment'),
(66, 23, '2021-12-01 15:28:13', 1200, 1200, 50, 0, 1250, 500, 750, 'Online Payment'),
(67, 23, '2021-12-01 15:28:13', 1200, 1200, 50, 0, 1250, 500, 750, 'Online Payment'),
(68, 22, '2021-12-01 15:33:23', 3070, 3610, 50, 0, 3660, 500, 3160, 'Cash'),
(69, 25, '2021-12-02 10:13:04', 500, 700, 50, 0, 750, 500, 250, 'Cash'),
(70, 25, '2021-12-02 10:33:41', 1000, 1200, 50, 10, 1130, 100, 1030, 'Cash'),
(71, 23, '2021-12-02 20:30:10', 1200, 2000, 50, 10, 1850, 500, 1350, 'Cash'),
(72, 23, '2021-12-02 21:47:40', 3900, 12000, 50, 10, 10850, 900, 9950, 'Cash'),
(73, 21, '2021-12-02 22:41:00', 2875, 49051, 50, 20, 39290.8, 30000, 9290.800000000003, 'Cash'),
(74, 25, '2021-12-03 08:38:59', 1300, 2940, 50, 10, 2696, 2500, 196, 'Cash'),
(75, 21, '2021-12-03 11:37:39', 2400, 2610, 50, 10, 2399, 2000, 399, 'Cash'),
(76, 23, '2021-12-03 15:07:58', 3422, 4962, 50, 10, 4515.8, 4000, 515.8000000000002, 'Cash'),
(77, 22, '2021-12-04 21:41:39', 12200, 12200, 50, 0, 12250, 12250, 0, 'Online Payment'),
(78, 27, '2021-12-04 22:13:30', 2200, 2740, 50, 10, 2516, 2200, 316, 'Cash'),
(79, 28, '2021-12-05 08:41:51', 1500, 1500, 50, 0, 1550, 1000, 550, 'Cash'),
(80, 28, '2021-12-05 08:44:16', 1500, 1500, 50, 0, 1550, 1500, 50, 'Cash'),
(81, 28, '2021-12-05 08:49:02', 1500, 1500, 50, 10, 1400, 1000, 400, 'Cash'),
(82, 28, '2021-12-05 08:49:50', 1500, 1700, 50, 0, 1750, 1500, 250, 'Cash'),
(83, 28, '2021-12-05 08:50:42', 1500, 1500, 50, 0, 1550, 100, 1450, 'Cash'),
(84, 28, '2021-12-05 09:00:28', 2000, 3500, 50, 5, 3375, 1000, 2375, 'Cash'),
(85, 28, '2021-12-05 09:01:34', 1500, 3000, 50, 0, 3050, 500, 3050, 'Online Payment'),
(86, 28, '2021-12-05 09:03:05', 1500, 6900, 50, 0, 6950, 1000, 5950, 'Cash'),
(87, 28, '2021-12-05 09:10:04', 0, 0, 50, 0, 50, 50, 0, 'Cash'),
(88, 21, '2021-12-05 13:02:07', 700, 700, 50, 0, 750, 5000, -4250, 'Cash'),
(89, 21, '2021-12-05 13:07:18', 700, 700, 50, 0, 750, 100, 750, 'Cash'),
(90, 21, '2021-12-05 18:11:14', 823, 1183, 50, 0, 1233, 100, 1133, 'Cash'),
(91, 21, '2021-12-05 18:31:27', 2250, 2790, 50, 10, 2561, 2500, 61, 'Cash'),
(92, 21, '2021-12-05 18:32:10', 2250, 2490, 50, 10, 2291, 2200, 91, 'Cash'),
(93, 22, '2021-12-08 10:53:19', 2400, 3750, 50, 10, 3425, 3000, 425, 'Cash'),
(94, 21, '2021-12-22 13:34:47', 750, 780, 50, 10, 752, 752, 0, 'Cash'),
(95, 21, '2021-12-24 20:09:04', 720, 760, 50, 10, 734, 734, 0, 'Cash'),
(96, 21, '2021-12-28 20:43:17', 700, 700, 50, 0, 750, 255, 495, 'Cash'),
(97, 21, '2021-12-29 09:26:07', 1200, 1200, 50, 0, 1250, 1200, 50, 'Cash'),
(98, 21, '2021-12-29 09:31:08', 700, 700, 50, 0, 750, 100, 650, 'Cash'),
(99, 21, '2021-12-29 09:35:32', 700, 700, 50, 0, 750, 200, 550, 'Cash'),
(100, 21, '2022-01-01 21:39:37', 1700, 7100, 50, 10, 6440, 1250, 5190, 'Cash'),
(101, 21, '2022-01-04 13:44:24', 4000, 4000, 50, 0, 4050, 450, 3600, 'Cash'),
(102, 23, '2022-01-04 20:55:35', 1520, 1920, 50, 10, 1778, 1700, 78, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `inv_id` int(6) NOT NULL,
  `invoice_no` int(6) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `ser_name` varchar(100) DEFAULT NULL,
  `ser_price` double DEFAULT NULL,
  `oth_ser_name` varchar(255) DEFAULT NULL,
  `oth_ser_price` double DEFAULT NULL,
  `p_name` varchar(255) DEFAULT NULL,
  `p_comp` varchar(255) DEFAULT NULL,
  `retailer` varchar(255) DEFAULT NULL,
  `p_price` double DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`inv_id`, `invoice_no`, `comp_id`, `ser_name`, `ser_price`, `oth_ser_name`, `oth_ser_price`, `p_name`, `p_comp`, `retailer`, `p_price`, `qty`) VALUES
(72, 59, 21, 'Repair', 700, 'Repair', 500, 'bulb', 'Whirlpool', 'shaboo', 780, 8),
(73, 59, 21, NULL, NULL, 'washing', 700, NULL, NULL, NULL, NULL, NULL),
(74, 60, 25, 'Cleaning', 500, 'Repair', 250, 'bulb', 'Whirlpool', 'shaboo', 35, 2),
(75, 60, 25, NULL, NULL, 'Repair', 25, NULL, NULL, NULL, NULL, NULL),
(76, 61, 25, 'Cleaning', 500, '', 0, '', '', '', 0, 0),
(77, 64, 23, 'Repair', 700, 'Repair', 500, 'bulb', 'surya', 'shaboo', 20, 3),
(78, 64, 23, NULL, NULL, 'washing', 100, NULL, NULL, NULL, NULL, NULL),
(79, 67, 23, 'Geyser repair', 1200, '', 0, '', '', '', 0, 0),
(80, 68, 22, 'Body Massage', 1500, 'Repair', 70, 'bulb', 'mjh', 'shaboo', 180, 3),
(81, 68, 22, 'Body Massage', 1500, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 69, 25, 'Cleaning', 500, 'Repair', 0, 'bulb', 'Whirlpool', 'shaboo', 100, 2),
(83, 70, 25, 'Cleaning', 500, 'Repair', 500, 'bulb', 'Khaitan', 'shaboo', 100, 2),
(84, 71, 23, 'Repair', 700, 'Repair', 500, 'bulb', 'Whirlpool', 'shaboo', 100, 8),
(85, 72, 23, 'Repair', 700, 'wiring', 1200, 'bulb', 'Khaitan', 'shaboo', 1200, 3),
(86, 72, 23, 'Geyser repair', 1200, 'Other', 300, 'Fan', 'Whirlpool', 'Aquil', 1500, 3),
(87, 72, 23, NULL, NULL, 'Extras', 500, NULL, NULL, NULL, NULL, NULL),
(88, 73, 21, 'Repair', 700, 'wiring', 900, 'bulb', 'Whirlpool', 'shaboo', 588, 2),
(89, 73, 21, 'Geyser repair', 1200, 'other', 25, 'Cooler', 'Khaitan', 'ajmba', 5000, 9),
(90, 73, 21, NULL, NULL, 'extras', 50, NULL, NULL, NULL, NULL, NULL),
(91, 74, 25, 'Cleaning', 500, 'wiring', 300, 'jjka', 'Whirlpool', 'shaboo', 180, 3),
(92, 74, 25, NULL, NULL, 'Repair', 500, 'bulb', 'surya', 'ajmba', 100, 5),
(93, 74, 25, NULL, NULL, NULL, NULL, 'ajs', 'Khaitan', 'shaboo', 120, 5),
(94, 75, 21, 'Repair', 700, 'wiring', 500, 'bulb', 'surya', 'ajmba', 70, 3),
(95, 75, 21, 'Geyser repair', 1200, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 76, 23, 'Repair', 700, 'Repair', 822, 'bulb', 'Khaitan', 'shaboo', 180, 3),
(97, 76, 23, 'Geyser repair', 1200, 'wiring', 700, 'Cooler', 'Khaitan', 'ajmba', 500, 2),
(98, 77, 22, 'Body Massage', 1500, 'Haircut', 1000, '', '', '', 0, 0),
(99, 77, 22, 'Body Massage', 1500, 'hair wash', 500, NULL, NULL, NULL, NULL, NULL),
(100, 77, 22, 'Body Massage', 1500, 'shampoo', 200, NULL, NULL, NULL, NULL, NULL),
(101, 77, 22, 'Body Massage', 1500, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 77, 22, 'Body Massage', 1500, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 77, 22, 'Body Massage', 1500, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 77, 22, 'Body Massage', 1500, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 78, 27, 'Body Massage', 1500, 'wiring', 500, 'bulb', 'azjha', 'shaboo3', 180, 3),
(106, 78, 27, NULL, NULL, 'Repair', 200, NULL, NULL, NULL, NULL, NULL),
(107, 79, 28, 'Linear Reg', 1500, '', 0, '', '', '', 0, 0),
(108, 80, 28, 'Linear Reg', 1500, '', 0, '', '', '', 0, 0),
(109, 81, 28, 'Linear Reg', 1500, '', 0, '', '', '', 0, 0),
(110, 82, 28, 'Linear Reg', 1500, '', 0, 'bulb', 'Khaitan', 'shaboo3', 100, 2),
(111, 83, 28, 'Linear Reg', 1500, '', 0, '', '', '', 0, 0),
(112, 84, 28, 'Linear Reg', 1500, 'wiring', 500, 'bulb', 'Whirlpool', 'shaboo', 500, 3),
(113, 85, 28, 'Linear Reg', 1500, '', 0, '', '', '', 0, 0),
(114, 85, 28, NULL, NULL, '', 0, '', '', '', 0, 0),
(115, 85, 28, NULL, NULL, NULL, NULL, 'bulb', 'Whirlpool', 'shaboo', 500, 3),
(116, 86, 28, 'Linear Reg', 1500, '', 0, '', '', '', 0, 0),
(117, 86, 28, NULL, NULL, '', 0, '', '', '', 0, 0),
(118, 86, 28, NULL, NULL, NULL, NULL, 'bulb', 'Whirlpool', 'shaboo', 1800, 3),
(119, 87, 28, '', 0, '', 0, '', '', '', 0, 0),
(120, 88, 21, 'Repair', 700, '', 0, '', '', '', 0, 0),
(121, 89, 21, 'Repair', 700, '', 0, '', '', '', 0, 0),
(122, 90, 21, 'Repair', 700, 'Repair', 123, 'bulb', 'Whirlpool', 'shaboo', 120, 3),
(123, 91, 21, 'Repair', 700, 'wiring', 350, 'bulb', 'surya', 'shaboo3', 180, 3),
(124, 91, 21, 'Geyser repair', 1200, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, 92, 21, 'Repair', 700, 'Repair', 250, 'bulb', 'surya', 'shaboo', 80, 3),
(126, 92, 21, 'Geyser repair', 1200, 'wiring', 100, NULL, NULL, NULL, NULL, NULL),
(127, 93, 22, 'Repair', 700, 'Repair', 500, 'bulb', 'Khaitan', 'shaboo3', 150, 3),
(128, 93, 22, 'Geyser repair', 1200, NULL, NULL, 'jjka', 'Whirlpool', 'shaboo', 150, 6),
(129, 94, 21, 'Repair', 700, 'wiring', 50, 'bulb', 'Whirlpool', 'shaboo', 10, 3),
(130, 95, 21, 'Repair', 700, 'Repair', 20, 'bulb', 'Whirlpool', 'shaboo', 20, 2),
(131, 96, 21, 'Repair', 700, '', 0, '', '', '', 0, 0),
(132, 97, 21, 'Repair', 700, 'm', 500, '', '', '', 0, 0),
(133, 98, 21, 'Repair', 700, '', 0, '', '', '', 0, 0),
(134, 99, 21, 'Repair', 700, '', 0, '', '', '', 0, 0),
(135, 100, 21, 'Repair', 1500, 'Repair', 200, 'jjka', 'Whirlpool', 'shaboo', 1800, 3),
(136, 101, 21, '', 0, 'xyz', 4000, '', '', '', 0, 0),
(137, 102, 23, 'Repair', 1500, 'wiring', 20, 'bulb', 'Whirlpool', 'shaboo', 200, 2);

-- --------------------------------------------------------

--
-- Table structure for table `request_signup`
--

CREATE TABLE `request_signup` (
  `reg_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `date_of_reg` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_signup`
--

INSERT INTO `request_signup` (`reg_id`, `name`, `email`, `contact_no`, `dep_id`, `address`, `date_of_reg`) VALUES
(1, 'Anas', 'khanmohamm@gmail.com', '12345678', 2, 'Near Rayyan Masjid', '2022-01-01 00:00:00'),
(4, 'anas', 'khanmoh@gmail.com', '8864913708', 1, 'sahgashg', '2022-01-01 10:00:29'),
(5, 'anas', 'ahsa@gmail.com', '8864913708', 1, 'sahgashg', '2022-01-01 10:04:10'),
(6, 'anas', 'khanmoh@gmail.com', '8864913708', 1, 'sahgashg', '2022-01-01 10:05:24'),
(7, 'anas', 'ahsa@gmail.com', '8864913708', 9, 'sahgashg', '2022-01-01 13:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ser_id` int(11) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `ser_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `date_of_add` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ser_id`, `dep_id`, `ser_name`, `price`, `date_of_add`) VALUES
(23, 8, 'Installation Charge', 700, '2021-11-28 07:09:43'),
(24, 7, 'Repair', 900, '2021-11-28 07:09:55'),
(25, 4, 'Cleaning', 500, '2021-11-28 07:10:07'),
(26, 3, 'wedding photoshoot', 5000, '2021-11-28 07:10:24'),
(27, 6, 'Body Massage', 1500, '2021-11-28 07:10:47'),
(28, 9, 'Linear Reg', 1500, '2021-11-28 07:11:05'),
(29, 8, 'Tap change', 350, '2021-11-28 07:11:22'),
(30, 1, 'Repair', 1500, '2021-11-28 07:32:03'),
(31, 1, 'Geyser repair', 1200, '2021-11-29 22:49:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comp_reg`
--
ALTER TABLE `comp_reg`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dep_id`),
  ADD UNIQUE KEY `dep_name` (`dep_name`);

--
-- Indexes for table `emp_reg`
--
ALTER TABLE `emp_reg`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_no`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `request_signup`
--
ALTER TABLE `request_signup`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ser_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comp_reg`
--
ALTER TABLE `comp_reg`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `emp_reg`
--
ALTER TABLE `emp_reg`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10044;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `inv_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `request_signup`
--
ALTER TABLE `request_signup`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
