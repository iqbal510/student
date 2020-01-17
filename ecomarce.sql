-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2019 at 07:15 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomarce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registations`
--

CREATE TABLE `admin_registations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_registations`
--

INSERT INTO `admin_registations` (`id`, `admin_name`, `admin_email`, `admin_password`, `admin_phone`, `created_at`, `updated_at`) VALUES
(8, 'iqbal', 'mdabuhanif077@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01723357226', '2019-09-18 04:33:32', '2019-09-18 04:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2019_09_10_190303_create_user_tbl_table', 2),
(5, '2019_09_10_191704_create_student_tbl_table', 3),
(7, '2014_10_12_000000_create_users_table', 4),
(8, '2014_10_12_100000_create_password_resets_table', 4),
(9, '2019_09_06_191123_create_admin_registations_table', 4),
(10, '2019_09_13_144943_create_student_tbls_table', 4),
(11, '2019_09_14_064222_create_student_tbl', 5),
(12, '2019_09_14_071841_create_student_tbls_table', 6),
(13, '2019_09_14_072150_create_student_tbls_table', 7),
(14, '2019_09_14_093345_create_tests_table', 8),
(15, '2019_09_14_124021_create_tests_table', 9),
(16, '2019_09_17_065228_create_teachers_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_tbls`
--

CREATE TABLE `student_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_roll` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_fathername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_mothername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_admissionyear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deperment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_tbls`
--

INSERT INTO `student_tbls` (`id`, `student_name`, `student_roll`, `student_fathername`, `student_mothername`, `student_email`, `student_phone`, `student_address`, `student_password`, `student_admissionyear`, `student_image`, `deperment`, `created_at`, `updated_at`) VALUES
(3, 'Abu Hanif', '91311', 'Sona Miah', 'Fatema Khatun', 'abuhanif@gmail.com', '01723375521', 'Mohammodpur, Dhaka', 'e10adc3949ba59abbe56e057f20f883e', '2019-09-14', '1568474205FD=17013-.jpg', 'BBA', '2019-09-14 09:16:45', '2019-09-18 10:22:37'),
(5, 'Sajib saha', '171600028', 'Badal saha', 'Sarasatee saha', 'sajib.saha6060@gmail.com', '01722118371', 'Mohammodpur, Dhaka', 'e10adc3949ba59abbe56e057f20f883e', '2019-09-15', '156849004970510226_520308118781725_1700027976508243968_n.jpg', 'MBA', '2019-09-14 13:40:49', '2019-09-18 10:11:44'),
(7, 'jwel rana', '7124', 'jani na', 'jani na', 'jwelranaif@gmail.com', '01544568985', 'Mohammodpur, Dhaka', 'e10adc3949ba59abbe56e057f20f883e', '2019-09-16', '156866071320158064_314228218989225_5321420891852697788_o.jpg', 'CSE', '2019-09-16 09:44:28', '2019-09-18 10:23:32'),
(9, 'jonee hossain', '1723', 'jani na', 'jani naa', 'joneehossain@gmail.com', '0172355825', 'Mohammodpur, Dhaka', 'e10adc3949ba59abbe56e057f20f883e', '2019-09-16', '156864911128827306_2137697239787165_5896700531811102940_o.jpg', 'CSE', '2019-09-16 09:51:51', '2019-09-18 10:21:57'),
(10, 'Hridoy', '17235', 'Shaalom', 'jani na', 'hridoy@gmail.com', '01726596321', 'Mohammodpur, Dhaka', 'e10adc3949ba59abbe56e057f20f883e', '2019-09-18', '156864928026992323_1120830401353358_6412767057375932784_n.jpg', 'ENGLISH', '2019-09-16 09:54:40', '2019-09-18 10:22:15'),
(11, 'Tanvir', '23562', 'jani na', 'jani na', 'tanvir@gmail.com', '0171723566', 'Mohammodpur, Dhaka', 'e10adc3949ba59abbe56e057f20f883e', '2019-09-16', '156864937017493139_858852480919427_2679553496068890293_o.jpg', 'EEE', '2019-09-16 09:56:10', '2019-09-18 10:22:26'),
(12, 'iqbal hossain', '35', 'Nazrul Islam', 'Yesmin', 'iqbal510hossain@gmail.com', '01723357226', 'mohammodpur, dhaka', 'e10adc3949ba59abbe56e057f20f883e', '2019-09-17', '156870406620190124_183144 (2).jpg', 'CSE', '2019-09-17 01:07:47', '2019-09-18 10:21:49'),
(13, 'Jakir Hossain', '13354', 'Jhangir', 'murnahar', 'sajib.remix@gmail.com', '01717256393', 'Badda,Dhaka', 'e10adc3949ba59abbe56e057f20f883e', '2019-09-17', '156872174071063299_3002233136470277_1050609830223413248_o.jpg', 'CSE', '2019-09-17 06:02:20', '2019-09-18 10:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacher_name`, `teacher_email`, `teacher_phone`, `teacher_address`, `teacher_image`, `department`, `created_at`, `updated_at`) VALUES
(1, 'Kaji Hossain robin', 'kajihossainrobin@gmail.com', '123456562', 'Dhanmondi,Dhaka', '156870548221433000_2005066766375143_7169077783450210143_n.jpg', 'CSE', '2019-09-17 01:31:22', '2019-09-17 01:31:22'),
(2, 'Ayesha Siddika', 'ayeshasiddika@gmail.com', '0172536987', 'Prantopath,Dhaka', '1568705872477_Ayesha-Siddika.jpg', 'CSE', '2019-09-17 01:37:52', '2019-09-17 01:37:52'),
(3, 'AFZAL HOSSAIN', 'afzalhossain@gmail.com', '545612', 'Dhanmondi,Dhaka', '1568705992267_Afzal-Hossain.jpg', 'CSE', '2019-09-17 01:39:52', '2019-09-17 01:39:52'),
(5, 'SHAHINUL ISLAM', 'shahinulislam@gmail.com', '01256789144', 'Dhaka,Mirpur', '1568725638Shahinul-Islam.jpg', 'ENGLISH', '2019-09-17 07:07:18', '2019-09-17 07:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_registations`
--
ALTER TABLE `admin_registations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_registations_admin_email_unique` (`admin_email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `student_tbls`
--
ALTER TABLE `student_tbls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_tbls_student_email_unique` (`student_email`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_registations`
--
ALTER TABLE `admin_registations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student_tbls`
--
ALTER TABLE `student_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
