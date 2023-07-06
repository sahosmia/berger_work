-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 08:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counter_title` varchar(255) NOT NULL,
  `counter_num` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `counter_title`, `counter_num`, `created_at`, `updated_at`) VALUES
(1, 'EXPERT WORKERS', 100, NULL, NULL),
(2, 'HAPPY CLIENTS', 290, NULL, NULL),
(3, 'COMPLETED PROJECTS', 480, NULL, NULL),
(4, 'RUNNING PROJECTS', 407, NULL, '2023-07-06 11:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `diaries`
--

CREATE TABLE `diaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `action` int(10) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diaries`
--

INSERT INTO `diaries` (`id`, `img`, `title`, `content`, `action`, `created_at`, `updated_at`) VALUES
(1, 'diarie_1.png', 'The Pinnacle of Modern Living', 'Ms. Ayesha Siddika and Mr. Tanim Hasan’s stunning studio apartment is the pinnacle of modern homes', 1, '2021-12-01 21:01:08', '2021-12-14 02:30:27'),
(3, 'diarie_3.jpg', 'Enter The White Palace', 'The “White Palace” is your dream house, to catch a break from the bustling city life', 1, '2021-12-08 17:13:48', '2021-12-14 00:33:27'),
(4, 'diarie_4.png', 'Enter The White Palace', 'The “White Palace” is your dream house, to catch a break from the bustling city life', 1, '2021-12-08 17:14:15', '2021-12-14 02:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lang_name` varchar(255) NOT NULL,
  `lang_value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `lang_name`, `lang_value`, `created_at`, `updated_at`) VALUES
(1, 'HOME', 'Home', NULL, '2021-12-15 04:52:16'),
(2, 'SERVICE', 'Service', NULL, '2021-12-15 04:52:16'),
(3, 'PORTFOLIO', 'Portfolio', NULL, '2021-12-15 04:52:16'),
(4, 'CORPORATE_SPEECH', 'Corporate Speech', NULL, '2021-12-15 04:52:16'),
(5, 'MD_SPEECH', 'MD Speech', NULL, '2021-12-15 04:52:16'),
(6, 'CHAIRMAN_SPEECH', 'Chairman Speech', NULL, '2021-12-15 04:52:16'),
(7, 'GALLERY', 'Gallery', NULL, '2021-12-15 04:52:16'),
(8, 'ABOUT', 'About', NULL, '2021-12-15 04:52:16'),
(9, 'CONTACT_US', 'Contact Us', NULL, '2021-12-15 04:52:16'),
(10, 'CORPORATE_OFFICE', 'Corporate Office:', NULL, '2021-12-15 04:52:16'),
(11, 'DEVELOPED_BY', 'Developed By', NULL, '2021-12-15 04:52:16'),
(12, 'ABOUT_US', 'About Us', NULL, '2021-12-15 04:52:16'),
(13, 'SUBSCRIBE_TO_STAY_UPDATED', 'Subscribe to stay updated', NULL, '2021-12-15 04:52:16'),
(14, 'STAY_CONNECTED_WITH_US', 'Stay Connected with us', NULL, '2021-12-15 04:52:16'),
(15, 'SEARCH', 'Search....', NULL, '2021-12-15 04:52:16'),
(16, 'NAME', 'Name', NULL, '2021-12-15 04:52:16'),
(17, 'EMAIL_ADDRESS', 'Email Address', NULL, '2021-12-15 04:52:16'),
(18, 'MESSAGE', 'Message', NULL, '2021-12-15 04:52:16'),
(19, 'PHONE', 'Phone', NULL, '2021-12-15 04:52:16'),
(20, 'ADDRESS', 'Address', NULL, '2021-12-15 04:52:16'),
(21, 'SUBMIT_YOUR_REQUEST', 'Subnmit Your Request', NULL, '2021-12-15 04:52:16'),
(22, 'MORE_INSPRATIONS', 'More Insprations', NULL, '2021-12-15 04:52:16'),
(23, 'YOUR_NAME', 'Your Name', NULL, '2021-12-15 04:52:16'),
(24, 'YOUR_EMAIL_ADDRESS', 'Your Email Address', NULL, '2021-12-15 04:52:16'),
(25, 'YOUR_PHONE', 'Your Phone', NULL, '2021-12-15 04:52:16'),
(26, 'YOUR_MESSAGE', 'Your Message', NULL, '2021-12-15 04:52:16'),
(27, 'YOUR_ADDRESS', 'Your Address', NULL, '2021-12-15 04:52:16');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'logo.jpg', '2021-09-30 18:15:32', '2021-12-13 01:03:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_08_194901_create_sliders_table', 2),
(6, '2021_12_08_195531_create_portfolios_table', 2),
(7, '2021_12_08_201528_create_diaries_table', 2),
(8, '2021_12_08_201928_create_logos_table', 2),
(9, '2021_12_13_104100_create_languages_table', 3),
(10, '2021_12_13_110752_create_socials_table', 3),
(11, '2021_12_13_110948_create_counters_table', 3),
(12, '2021_12_16_103348_create_pages_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text NOT NULL,
  `portfolio_title` text NOT NULL,
  `portfolio_content` text NOT NULL,
  `diarie_title` text NOT NULL,
  `diarie_content` text NOT NULL,
  `contact_bg` text NOT NULL,
  `contact_head_logo` text NOT NULL,
  `copywrite` text NOT NULL,
  `contact_details` text NOT NULL,
  `contact_map` text NOT NULL,
  `contact_banner` text NOT NULL,
  `contact_logo` text NOT NULL,
  `massenger` text NOT NULL,
  `md_speech` text NOT NULL,
  `md_speech_img` text NOT NULL,
  `chairman_speech` text NOT NULL,
  `chairman_speech_img` text NOT NULL,
  `service_banner` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `logo`, `portfolio_title`, `portfolio_content`, `diarie_title`, `diarie_content`, `contact_bg`, `contact_head_logo`, `copywrite`, `contact_details`, `contact_map`, `contact_banner`, `contact_logo`, `massenger`, `md_speech`, `md_speech_img`, `chairman_speech`, `chairman_speech_img`, `service_banner`, `created_at`, `updated_at`) VALUES
(1, 'logo.jpg', 'Paint Your Imagination', 'Choose from a wide variety of products made to fit all your needs', 'Berger Home Diaries', 'We believe that homes are a reflection of the people who live inside, where everything looks and works the way you want it to. That’s why we’ve gathered tons of different home ideas, from home decoration ideas to organizing tips, to help you build your ideal home.', 'contact_bg.jpg', 'contact_head_logo.png', '© 2018 Shoma. All Rights Reserved', '<p>Berger House House 8, </p><p>Road 2, Sector 3 Uttara Model Town </p><p>Dhaka 1230 f</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14621.340551044052!2d88.85510084999999!3d23.628166049999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fecc3f3968e5b9%3A0x660254aa914ef62b!2sChuadanga%20Sadar%20Hospital%2C%20Hospital%20Rd%2C%20Chuadanga!5e0!3m2!1sen!2sbd!4v1639567788667!5m2!1sen!2sbd\" width=\"500\" height=\"350\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'contact_banner.jpg', 'contact_logo.jpg', '<!-- Messenger Chat Plugin Code --> <div id=\"fb-root\"></div>  <!-- Your Chat Plugin code --> <div id=\"fb-customer-chat\" class=\"fb-customerchat\"> </div>  <script>   var chatbox = document.getElementById(\'fb-customer-chat\');   chatbox.setAttribute(\"page_id\", \"112902083776297\");   chatbox.setAttribute(\"attribution\", \"biz_inbox\"); </script>', '<p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">Thank you for visiting the website of Berger Paints Bangladesh Limited! We truly appreciate your interest in us.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">&nbsp;</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">Since independence, all our efforts have been dedicated to the development and amelioration of Bangladesh. Over the period Berger has achieved numerous noteworthy milestones that have distinguished us as the Best Paint Brand in Bangladesh.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">&nbsp;</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">We offer the finest quality paints and solutions for all substrates, protection, and weather conditions along with services focused to achieve the highest level of customer delight. It has all been possible because we believe in the power of our people. Their dedication towards our values and the highest ethical standards that define our culture has allowed us to reach the crowning.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">&nbsp;</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">Our commitment also goes beyond business and we are constantly engaged in cultural and social activities to help build the nation and spread the happiness of colors. And it is our promise that we shall continue to paint your imagination!</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">&nbsp;</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">Please reach out to us if you have any requirements. We look forward to the opportunity of presenting you with our brilliant products, expert services, and consultancy.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">&nbsp;</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">Thank you.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">&nbsp;</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">Ms. Rupali Chowdhury<br style=\"box-sizing: border-box;\">Managing Director<br style=\"box-sizing: border-box;\">Berger Paints Bangladesh Limited</p>', 'md_speech_img.jpg', '<p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">Thank you for visiting the website of Berger Paints Bangladesh Limited! We truly appreciate your interest in us.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">&nbsp;</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">Since independence, all our efforts have been dedicated to the development and amelioration of Bangladesh. Over the period Berger has achieved numerous noteworthy milestones that have distinguished us as the Best Paint Brand in Bangladesh.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">&nbsp;</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">We offer the finest quality paints and solutions for all substrates, protection, and weather conditions along with services focused to achieve the highest level of customer delight. It has all been possible because we believe in the power of our people. Their dedication towards our values and the highest ethical standards that define our culture has allowed us to reach the crowning.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">&nbsp;</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">Our commitment also goes beyond business and we are constantly engaged in cultural and social activities to help build the nation and spread the happiness of colors. And it is our promise that we shall continue to paint your imagination!</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">&nbsp;</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">Please reach out to us if you have any requirements. We look forward to the opportunity of presenting you with our brilliant products, expert services, and consultancy.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">&nbsp;</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">Thank you.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">&nbsp;</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Poppins, sans-serif; font-size: 16px;\">Ms. Rupali Chowdhury<br style=\"box-sizing: border-box;\">Managing Director<br style=\"box-sizing: border-box;\">Berger Paints Bangladesh Limited</p>', 'chairman_speech_img.jpg', 'service_banner.jpg', NULL, '2021-12-25 03:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `img`, `title`, `created_at`, `updated_at`) VALUES
(1, 'portfolio_1.jpg', 'Portfolio 1', '2021-12-01 23:32:50', NULL),
(2, 'portfolio_2.jpg', 'Portfolio 2', '2021-12-14 23:32:50', NULL),
(3, 'portfolio_3.jpg', 'Portfolio 3', '2021-12-14 23:34:18', NULL),
(4, 'portfolio_4.jpg', 'Portfolio 4', '2021-12-13 23:34:18', NULL),
(5, 'portfolio-jpeg', 'Portfolio 5', '2021-12-01 23:34:18', '2023-07-06 11:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `btn_text` varchar(255) NOT NULL,
  `btn_url` varchar(255) NOT NULL,
  `action` int(10) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `title`, `heading`, `btn_text`, `btn_url`, `action`, `created_at`, `updated_at`) VALUES
(2, 'slider_2.jpg', 'We Are Professional', 'For Your Dream Project', 'Contact Us', 'www.contact.us', 1, '2021-12-08 17:58:22', '2023-07-06 09:55:14'),
(3, 'slider_3.jpg', 'We Are Professional', 'For Your Dream Project', 'Contact Us', '', 1, '2021-12-08 18:00:14', '2021-12-08 18:00:14'),
(4, 'slider_4.jpg', 'We Are Professional', 'For Your Dream Project', 'Contact Us', '', 1, '2021-12-08 18:00:22', '2021-12-08 18:00:22'),
(5, 'slider_5.jpg', 'We Are Professional', 'For Your Dream Project', 'Contact Us', '', 2, '2021-12-08 18:00:30', '2021-12-14 00:34:24'),
(6, 'slider_6.jpg', 'We Are Professional', 'For Your Dream Project', 'Contact Us', '', 2, '2021-12-09 06:59:43', '2021-12-14 00:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_name` varchar(255) NOT NULL,
  `social_icon` varchar(255) NOT NULL,
  `social_value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `social_name`, `social_icon`, `social_value`, `created_at`, `updated_at`) VALUES
(1, 'Facebbok', 'fab fa-facebook-f', 'www.facebook.com', '2021-12-01 06:58:28', '2021-12-14 01:17:37'),
(2, 'Youtube', 'fab fa-youtube', 'www.youtube.com', NULL, '2021-12-14 01:17:37'),
(3, 'Instragram', 'fab fa-instagram', 'www.instrapgarm.com', NULL, '2021-12-14 01:17:37'),
(4, 'Linkedin', 'fab fa-linkedin', NULL, NULL, '2021-12-14 01:17:37'),
(5, 'Twitter', 'fab fa-twitter', NULL, NULL, '2021-12-14 01:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$cpZTzrfaaB3yzzh6uD9fAevGNydIUuvJ9ZvJ2bqTbyZXvkRJq4ali', 'UtxFRyugA71AncyjoMu49FxIxGoLfm8GE9T8bnbuTb10QugRbgs1vVDxAzRK', '2021-12-08 13:17:48', '2021-12-15 00:30:13'),
(2, 'sahos', 'sahos@gmail.com', NULL, '$2y$10$ulKjzFC1MovIlIyCgQgmPuaxeqigJZshiQkJZltJilWZtec5bTQ02', NULL, '2023-07-06 09:51:59', '2023-07-06 09:51:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diaries`
--
ALTER TABLE `diaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
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
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `diaries`
--
ALTER TABLE `diaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
