-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2024 at 11:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_cat`
--

CREATE TABLE `food_cat` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `food_cat`
--

INSERT INTO `food_cat` (`cat_id`, `cat_name`) VALUES
(1, 'อาหารคาว'),
(2, 'ของหวาน');

-- --------------------------------------------------------

--
-- Table structure for table `food_menu`
--

CREATE TABLE `food_menu` (
  `menu_id` int(11) NOT NULL,
  `food_cat` varchar(255) DEFAULT NULL,
  `food_menu` varchar(255) DEFAULT NULL,
  `food_price` int(11) DEFAULT NULL,
  `food_des` varchar(255) DEFAULT NULL,
  `food_img` varchar(255) DEFAULT NULL,
  `vendor_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_menu` (`menu_id`, `food_cat`, `food_menu`, `food_price`, `food_des`, `food_img`, `vendor_id`) VALUES
(2, 'อาหารคาว', 'ไก่', 999, 'ไก่ย่าง เนื้อแน่น', '2_pic.png', '16'),
(3, 'ของหวาน', 'ข้าวเเหนียว มะม่วงสุก', 49, 'มะม่วงน้ำดอกไม้', '2_pic.png', '19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_img` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `fname`, `email`, `password`, `user_img`, `address`, `tel`, `age`, `user_type`) VALUES
(1, 'admin', 'admin', 'pondpo2548@gmail.com', '123', '1_pic.png', '', '', '20', 'admin'),
(3, 'pun', 'ปัณณวัฒน์11', 'www@w.com', '122', '', '6/13 ม.5', '0805555555', '20', 'user'),
(9, 'res1', 'vender1', 'asd@ss.c', '123', '9_pic.png', '', '', '', 'res'),
(10, 'res2', 'vender2', 'e@sss.com', '123', '', '', '', '', 'res');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(255) DEFAULT NULL,
  `vendor_address` varchar(255) DEFAULT NULL,
  `vendor_tel` varchar(255) DEFAULT NULL,
  `vendor_img` varchar(255) DEFAULT NULL,
  `vendor_owner` varchar(255) DEFAULT NULL,
  `vendor_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_name`, `vendor_address`, `vendor_tel`, `vendor_img`, `vendor_owner`, `vendor_status`) VALUES
(16, 'ไก่ทอด หาดทราย', 'ยะลา', '0805555555', '_pic.png', 'res1', 'อนุมัติ'),
(19, 'ข้าวเหนียวมะม่วง ฉ่ำๆ', 'LA', '0856498444', '16_pic.png', 'res2', 'อนุมัติ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_cat`
--
ALTER TABLE `food_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `food_menu`
--
ALTER TABLE `food_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_cat`
--
ALTER TABLE `food_cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food_menu`
--
ALTER TABLE `food_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
