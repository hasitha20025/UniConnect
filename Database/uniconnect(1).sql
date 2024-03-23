-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 06:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `club_president`
--

CREATE TABLE `club_president` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `F_name` varchar(255) NOT NULL,
  `L_name` varchar(255) NOT NULL,
  `role_id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club_president`
--

INSERT INTO `club_president` (`id`, `image`, `F_name`, `L_name`, `role_id`, `email`, `phone`, `password`) VALUES
(1, '', 'sadun', 'saduni', 3, 'paka@gmail.com', '0701112454', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_admins`
--

CREATE TABLE `faculty_admins` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `F_name` varchar(255) NOT NULL,
  `L_name` varchar(255) NOT NULL,
  `role_id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_admins`
--

INSERT INTO `faculty_admins` (`id`, `image`, `F_name`, `L_name`, `role_id`, `email`, `phone`, `password`) VALUES
(1, 'default_image.jpg', 'prabid', 'klna', 2, 'someone@gmaill.com', '0705140790', '1234'),
(2, 'admins3845.JPG', 'sccccc', 'ccccccccccc', 2, 'vinod@gmail.com', '0701112454', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `products_sellers`
--

CREATE TABLE `products_sellers` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `F_name` varchar(255) NOT NULL,
  `L_name` varchar(255) NOT NULL,
  `role_id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_sellers`
--

INSERT INTO `products_sellers` (`id`, `image`, `F_name`, `L_name`, `role_id`, `email`, `phone`, `password`) VALUES
(1, '', 'samantha', 'kadanarachchi', 4, 'haitha123@gmail.com', '0701112454', '1234'),
(2, 'admins6611.JPG', 'cx', 'xczc', 4, 'stu@gmail.com', '0701112454', '$2y$10$3zJD6TafwwK/uN7nV8dSv.G1LZffu5Xh32ef2v7kaaTWqcQaO7zDi'),
(3, '', 'ds', 'ds', 4, 'haitha123@gmail.com', '0701112454', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `services_owners`
--

CREATE TABLE `services_owners` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `F_name` varchar(255) NOT NULL,
  `L_name` varchar(255) NOT NULL,
  `role_id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services_owners`
--

INSERT INTO `services_owners` (`id`, `image`, `F_name`, `L_name`, `role_id`, `email`, `phone`, `password`) VALUES
(1, '2', 'zx', 'xz', 5, 'stu@gmail.com', '0705140790', '12345'),
(2, '', 'zx', 'xz', 5, 'stu@gmail.com', '0705140790', '$2y$10$Dlfsyq1dGge6UHDuE1ZMJOHZ0um4eVVlNlYUD7Y9Kdy9/dkHbSIJm'),
(3, 'admins7231.JPG', 'vish', 'uda', 5, 'haitha123@gmail.com', '0112404505', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `F_name` varchar(255) NOT NULL,
  `L_name` varchar(255) NOT NULL,
  `role_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`id`, `image`, `F_name`, `L_name`, `role_id`, `email`, `phone`, `password`) VALUES
(1, 'super_admin1778.JPG', 'prabod', 'pubudu', 1, 'prabashanapubudu@gmail.com', '0705140790', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `titile` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `view` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `image`, `titile`, `date`, `description`, `view`) VALUES
(1, 'EDIT_event4102.jpg', 'The rotrac news   ', '2024-01-11', 'the rotrac club held the drama event ', 'yes'),
(2, 'EDIT_event8765.jpg', 'the lio club news ', '2024-01-25', 'the lio club of uva wellassa university held the game funtion via the online', 'no'),
(4, 'add_event8309.JPG', 'unoin event ', '2024-01-26', 'union foing to held new evebt call ', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `massage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `view` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `image`, `title`, `date`, `description`, `view`) VALUES
(11, 'EDIT_news2217.JPG', 'ROTRACdd                   ', '2024-01-23', 'news eva', 'yes'),
(12, 'EDIT_news7628.JPG', 'nesss    ', '2024-01-24', 'dddddddddddddddd', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notifictions`
--

CREATE TABLE `tbl_notifictions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `massage` varchar(255) NOT NULL,
  `view` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_notifictions`
--

INSERT INTO `tbl_notifictions` (`id`, `title`, `date`, `massage`, `view`) VALUES
(1, 'new   dfsddsds   ', '2024-01-24', 'd', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `descripition` varchar(255) NOT NULL,
  `availability` varchar(20) NOT NULL,
  `PO_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `product_name`, `img`, `title`, `date`, `category`, `price`, `descripition`, `availability`, `PO_ID`) VALUES
(1, 'new iorn', 'product_516.jpg', 'new iorn', '2024-01-23', 'school', 150, 'lorempo', '', 1),
(2, 'ssssssssssssssss', 'product_8051.JPG', 'ssssssssssssssss', '2024-01-16', 'ssssssssssssss', 100, 'sssssssssssssssssssaaaaaaaaaaaaaaa', '150', 2),
(3, 'ssssssssssssssss', 'product_9813.JPG', 'ssssssssssssssss', '2024-01-16', 'ssssssssssssss', 100, 'sssssssssssssssssssaaaaaaaaaaaaaaa', '150', 2),
(4, 'ssssssssssssssss', 'product_1258.JPG', 'ssssssssssssssss', '2024-01-16', 'ssssssssssssss', 100, 'sssssssssssssssssssaaaaaaaaaaaaaaa', '150', 2),
(5, 'dsds', 'product_3730.JPG', 'dsds', '2024-01-24', 'sds', 45, 'y8ui', '54', 3),
(6, 'dsds', 'product_8205.JPG', 'dsds', '2024-01-24', 'sds', 45, 'y8ui', '54', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reminder`
--

CREATE TABLE `tbl_reminder` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `discription` varchar(255) NOT NULL,
  `view` varchar(20) NOT NULL,
  `LastupdateAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_reminder`
--

INSERT INTO `tbl_reminder` (`id`, `image`, `title`, `date`, `discription`, `view`, `LastupdateAt`) VALUES
(1, 'EDIT_Remainder7182.JPG', '  works well   ', '2024-01-30', 'the two days more', 'no', '2024-01-26 08:49:35'),
(2, '0', '0', '2024-01-24', 'dsaasdas', 'yes', '2024-01-25 17:58:38'),
(3, 'add_reminders9219.JPG', 'try this', '2024-01-29', 'sdasada', 'yes', '2024-01-25 18:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `titile` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `availability` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ticket`
--

CREATE TABLE `tbl_ticket` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `PO_ID` int(11) NOT NULL,
  `availability` int(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `F_name` varchar(255) NOT NULL,
  `L_name` varchar(255) NOT NULL,
  `role_id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club_president`
--
ALTER TABLE `club_president`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_admins`
--
ALTER TABLE `faculty_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_sellers`
--
ALTER TABLE `products_sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_owners`
--
ALTER TABLE `services_owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_notifictions`
--
ALTER TABLE `tbl_notifictions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reminder`
--
ALTER TABLE `tbl_reminder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club_president`
--
ALTER TABLE `club_president`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty_admins`
--
ALTER TABLE `faculty_admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products_sellers`
--
ALTER TABLE `products_sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services_owners`
--
ALTER TABLE `services_owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_notifictions`
--
ALTER TABLE `tbl_notifictions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_reminder`
--
ALTER TABLE `tbl_reminder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
