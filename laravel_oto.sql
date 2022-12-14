-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 03:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_oto`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_social`
--

CREATE TABLE `account_social` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` tinyint(4) DEFAULT 0,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `address`, `age`, `avatar`, `password`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'doantotnghiep@gmail.com', NULL, NULL, 0, NULL, '$2y$10$diDOgZLBCVc0h562OXkQ/uvLl2o0nYz4TRcSn0uKuNMbXD8Jj8/j.', 1, NULL, NULL, NULL),
(2, 'Tran Van B', 'tranvanb@gmail.com', NULL, NULL, 0, NULL, '$2y$10$LAuvUT6Cd/hpqgWlXwLok.f7la7VABZwobJqq5hkhyV7op.9t/E4u', 1, NULL, '2021-12-15 16:10:18', '2021-12-15 16:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `a_title` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_menu_id` int(11) DEFAULT 0,
  `a_description` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_admin_id` int(11) DEFAULT 0,
  `a_auth_id` int(11) DEFAULT 0,
  `a_view` int(11) DEFAULT 0,
  `a_active` tinyint(4) DEFAULT 1,
  `a_hot` tinyint(4) DEFAULT 0,
  `a_point_rating` int(11) DEFAULT 0,
  `a_total_ratings` int(11) DEFAULT 0,
  `a_title_seo` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_keyword_seo` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a_description_seo` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `a_title`, `a_slug`, `a_menu_id`, `a_description`, `a_avatar`, `a_content`, `a_admin_id`, `a_auth_id`, `a_view`, `a_active`, `a_hot`, `a_point_rating`, `a_total_ratings`, `a_title_seo`, `a_keyword_seo`, `a_description_seo`, `created_at`, `updated_at`) VALUES
(1, 'B??i vi???t hay', 'bai-viet-hay', 5, 'B??i vi???t hay', NULL, '<p>1212121</p>', 1, 0, 0, 1, 0, 0, 0, 'B??i vi???t hay', 'B??i vi???t hay', 'B??i vi???t hay', '2021-11-28 12:57:15', '2021-11-28 12:57:15'),
(2, 'CH????NG TR??NH H?????NG D???N S??? D???NG XE AN TO??N', 'chuong-trinh-huong-dan-su-dung-xe-an-toan', 5, 'CH????NG TR??NH H?????NG D???N S??? D???NG XE AN TO??N', '2021-12-05__fa80b31865278fc8325fc5eedcfa6854backdrop-25x5m.png', '<p>CH????NG TR&Igrave;NH H?????NG D???N S??? D???NG XE AN TO&Agrave;N</p>\r\n\r\n<p>V???i mong mu???n b??? tr??? th&ecirc;m c&aacute;c th&ocirc;ng tin gi&uacute;p Kh&aacute;ch h&agrave;n<a href=\"http://127.0.0.1:8000/photos/1/fa80b31865278fc8325fc5eedcfa6854Backdrop 2.5x5m.png\"><img alt=\"\" src=\"http://127.0.0.1:8000/photos/1/fa80b31865278fc8325fc5eedcfa6854Backdrop 2.5x5m.png\" style=\"height:100%; width:100%\" /></a>g ch??a n???m r&otilde; v??? t&iacute;nh n??ng xe, ch??? ????? d???ch v??? v&agrave; ch??m s&oacute;c xe. ?????i l&yacute; s??? tr???c ti???p ch??? ?????ng ti???n h&agrave;nh t??? ch???c c&aacute;c ch????ng tr&igrave;nh H?????ng d???n s??? d???ng xe an to&agrave;n ?????nh k??? cho Kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>Ch????ng tr&igrave;nh ???????c gi???ng vi&ecirc;n ??&agrave;o t???o n???i b??? Nguy???n Th??? T&igrave;nh tr???c ti???p ?????ng l???p. C&ugrave;ng v???i ki???n th???c chuy&ecirc;n m&ocirc;n s&acirc;u r???ng, h???a h???n s??? mang l???i nhi???u ki???n th???c th???c t??? v&agrave; b??? &iacute;ch ?????n v???i kh&aacute;ch h&agrave;ng</p>\r\n\r\n<p>K??? thu???t vi&ecirc;n h&agrave;ng ?????u h??? th???ng Hyundai Nguy???n V??n Chinh. K??? thu???t vi&ecirc;n t???ng ?????t gi???i th?????ng cao trong c&aacute;c cu???c thi k??? thu???t c???a Hyundai to&agrave;n c???u</p>\r\n\r\n<p>Khi tham gia ch????ng tr&igrave;nh Hyundai H&agrave; ??&ocirc;ng ch???c ch???n s??? mang l???i cho qu&yacute; kh&aacute;ch h&agrave;ng m???t ch????ng tr&igrave;nh ho&agrave;n thi???n nh???t v???i ch????ng tr&igrave;nh s&aacute;t v???i th???c t???. Gi&uacute;p qu&yacute; kh&aacute;ch c&oacute; kinh nghi???m x??? l&yacute; c&aacute;c t&igrave;nh hu???ng kh???n c???p v&agrave; &ldquo;lu&ocirc;n an to&agrave;n khi s??? d???ng xe&rdquo;</p>\r\n\r\n<p>N???I DUNG ??&Agrave;O T???O:</p>\r\n\r\n<p>&bull; B???o d?????ng &ndash; B???o h&agrave;nh</p>\r\n\r\n<p>&bull; Ch??m s&oacute;c xe v&agrave; x??? l&yacute; c&aacute;c t&igrave;nh hu???ng kh???n c???p</p>\r\n\r\n<p>&bull; Th???c h&agrave;nh x??? l&yacute; c&aacute;c t&igrave;nh hu???ng kh???n c???p</p>\r\n\r\n<p>R???t nhi???u Qu&agrave; t???ng h???p d???n d&agrave;nh cho kh&aacute;ch h&agrave;ng tham d??? s??? ki???n</p>\r\n\r\n<p>TH???I GIAN &amp; ?????A ??I???M</p>\r\n\r\n<p>&bull; B???t ?????u t??? 8h00 &ndash; 12h00 ng&agrave;y 13/11/2021</p>\r\n\r\n<p>&bull; T???i Ph&ograve;ng h???p t???ng 2 ?????i L&yacute; Hyudai H&agrave; ??&ocirc;ng</p>\r\n\r\n<p>&bull; S??T h??? tr???: 02433535455</p>', 1, 0, 0, 1, 0, 0, 0, 'CH????NG TR??NH H?????NG D???N S??? D???NG XE AN TO??N', 'CH????NG TR??NH H?????NG D???N S??? D???NG XE AN TO??N', 'CH????NG TR??NH H?????NG D???N S??? D???NG XE AN TO??N', '2021-12-05 09:27:00', '2021-12-05 09:31:37'),
(3, 'Grand I10 gi??? ra sao ?', 'grand-i10-gio-ra-sao', 5, 'sadawfasfawrwewaedaw', NULL, '<p>r??ertwerewrqwerwerwerwerw</p>', 1, 0, 0, 1, 0, 0, 0, 'Grand I10 gi??? ra sao ?', '????nh gi?? ch???t l?????ng xe', 'sadawfasfawrwewaedaw', '2021-12-15 16:04:02', '2021-12-15 16:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `article_keywords`
--

CREATE TABLE `article_keywords` (
  `id` int(10) UNSIGNED NOT NULL,
  `ak_article_id` int(11) NOT NULL,
  `ak_keyword_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `atr_name` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `atr_type` tinyint(4) DEFAULT 1,
  `atr_menu_id` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `av_name` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `av_slug` char(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `av_attribute_id` int(11) DEFAULT 0,
  `av_price` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commens`
--

CREATE TABLE `commens` (
  `id` int(10) UNSIGNED NOT NULL,
  `cm_content` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cm_user_id` int(11) DEFAULT NULL,
  `cm_admin_id` int(11) DEFAULT NULL,
  `cm_parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `com_user_id` int(11) NOT NULL,
  `com_user_type` tinyint(4) NOT NULL DEFAULT 0,
  `com_source_id` int(11) NOT NULL,
  `com_type` tinyint(4) NOT NULL DEFAULT 0,
  `com_parent_id` int(11) NOT NULL DEFAULT 0,
  `com_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `com_user_id`, `com_user_type`, `com_source_id`, `com_type`, `com_parent_id`, `com_message`, `created_at`, `updated_at`) VALUES
(25, 2, 0, 1, 1, 0, '????ng l?? hay qu?? ??i ??', '2021-11-28 12:58:09', '2021-11-28 12:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(10) UNSIGNED NOT NULL,
  `g_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_phone` char(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `im_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `im_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `im_type` tinyint(4) DEFAULT 0,
  `im_active` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_products`
--

CREATE TABLE `image_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip_product_id` int(11) NOT NULL,
  `ip_image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id` int(10) UNSIGNED NOT NULL,
  `if_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_phone` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_fax` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_email_drive` char(20) COLLATE utf8mb4_unicode_ci DEFAULT 'smtp',
  `if_email_host` char(20) COLLATE utf8mb4_unicode_ci DEFAULT 'smtp.gmail.com',
  `if_email_port` char(20) COLLATE utf8mb4_unicode_ci DEFAULT '587',
  `if_email_encryption` char(20) COLLATE utf8mb4_unicode_ci DEFAULT 'tls',
  `if_time_job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_seo` tinyint(4) DEFAULT 0,
  `if_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_youtobe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_email_send` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_email_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `if_google_map` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id`, `if_company`, `if_phone`, `if_fax`, `if_address`, `if_email`, `if_email_drive`, `if_email_host`, `if_email_port`, `if_email_encryption`, `if_time_job`, `if_seo`, `if_logo`, `if_facebook`, `if_google`, `if_youtobe`, `if_email_send`, `if_email_password`, `if_meta_description`, `if_meta_title`, `if_meta_keywords`, `if_google_map`, `created_at`, `updated_at`) VALUES
(1, 'Xe ?? t??', '0928817228', NULL, 'Xe ?? t??', 'TranvanB@gmail.com', 'smtp', 'smtp.gmail.com', '587', 'tls', NULL, 0, NULL, NULL, NULL, NULL, 'doantotnghiep@gmail.com', '123456789', 'N???i dung b??i vi???t', 'Website b??n xe ?? t??', NULL, NULL, NULL, '2021-12-15 16:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` int(10) UNSIGNED NOT NULL,
  `k_name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `k_name_slug` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `k_hit` int(11) DEFAULT 0,
  `k_active` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keyword_librarys`
--

CREATE TABLE `keyword_librarys` (
  `id` int(10) UNSIGNED NOT NULL,
  `kwl_name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwl_slug` char(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kwl_hit` int(11) DEFAULT 0,
  `kwl_admin_id` int(11) DEFAULT 0,
  `kwl_count_word` tinyint(4) DEFAULT 0,
  `kwl_active` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keyword_temps`
--

CREATE TABLE `keyword_temps` (
  `id` int(10) UNSIGNED NOT NULL,
  `kt_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kt_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kt_active` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `m_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_parent_id` tinyint(4) DEFAULT 0,
  `m_type` tinyint(4) DEFAULT 0,
  `m_active` tinyint(4) DEFAULT 1,
  `m_hot` tinyint(4) DEFAULT 0,
  `m_sort` tinyint(4) DEFAULT 0,
  `m_type_count` tinyint(4) DEFAULT 0,
  `m_type_seo` tinyint(4) DEFAULT 1,
  `m_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_title_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_keyword_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_description_seo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `m_title`, `m_slug`, `m_parent_id`, `m_type`, `m_active`, `m_hot`, `m_sort`, `m_type_count`, `m_type_seo`, `m_avatar`, `m_banner`, `m_title_seo`, `m_keyword_seo`, `m_description_seo`, `m_description`, `created_at`, `updated_at`) VALUES
(1, 'Hyundai I10', 'hyundai-i10', 3, 2, 1, 1, NULL, 0, 0, NULL, NULL, 'Hyundai I10', 'Hyundai I10', 'Hyundai I10', '<p>Hyundai I10</p>', NULL, '2021-12-13 16:43:42'),
(2, 'Hyundai Elantra', 'hyundai-elantra', 3, 2, 1, 1, NULL, 0, 0, NULL, NULL, 'Hyundai Elantra', 'Hyundai Elantra', 'Hyundai Elantra', '<p>Hyundai Elantra</p>', NULL, '2021-12-13 16:43:51'),
(3, 'S???n ph???m', 'san-pham', 0, 2, 1, 0, NULL, 0, 0, NULL, NULL, 'S???n ph???m', 'S???n ph???m', 'S???n ph???m', '<p>S???n ph???m</p>', NULL, NULL),
(5, 'Menu b??i vi???t', 'menu-bai-viet', 0, 1, 1, 0, NULL, 0, 0, NULL, NULL, 'Menu b??i vi???t', 'Menu b??i vi???t', NULL, '<p>Menu b&agrave;i vi???t</p>', NULL, NULL),
(6, 'Xe hundai', 'xe-hundai', 1, 2, 1, 0, 1, 0, 1, '2021-12-05__20210122144140-b378-wm.jpg', NULL, 'Xe hundai', 'Xe hundai', 'Xe hundai', '<p>Xe hundai</p>', NULL, NULL),
(7, '??U ????I', 'uu-dai', 0, 3, 1, 0, 4, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_11_202016_create_admins_table', 1),
(4, '2018_09_13_171852_create_menus_table', 1),
(5, '2018_09_16_013655_create_articles_table', 1),
(6, '2018_09_16_014311_create_keywords_table', 1),
(7, '2018_09_16_014537_create_article_keywords_table', 1),
(8, '2018_09_21_050809_create_keyword_temps_table', 1),
(9, '2018_09_21_163200_entrust_setup_tables', 1),
(10, '2018_09_22_063710_create_keyword_librarys_table', 1),
(11, '2018_09_23_120817_create_images_table', 1),
(12, '2018_09_24_233909_create_products_table', 1),
(13, '2018_09_27_115033_create_cache_table', 1),
(14, '2018_09_27_152401_create_image_products_table', 1),
(15, '2018_09_28_154858_create_informations_table', 1),
(16, '2018_09_29_162032_create_slides_table', 1),
(17, '2018_09_30_231403_create_guests_table', 1),
(18, '2018_10_01_212941_create_orders_table', 1),
(19, '2018_10_07_223034_create_attributes_table', 1),
(20, '2018_10_07_223337_create_attribute_values_table', 1),
(21, '2018_10_08_002330_create_product_value_table', 1),
(22, '2018_10_09_232232_create_commens_table', 1),
(23, '2018_10_13_000845_create_comments_table', 1),
(24, '2018_10_14_075933_create_account_social_table', 1),
(25, '2018_10_18_165441_create_store_table', 1),
(26, '2018_10_25_203614_create_product_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `o_guest_id` int(11) DEFAULT NULL,
  `o_product_id` int(11) NOT NULL DEFAULT 0,
  `o_submit` tinyint(4) DEFAULT 0,
  `o_status` tinyint(4) DEFAULT 0,
  `o_messages` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_viewing_day` date DEFAULT NULL,
  `o_ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `o_menu_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `o_guest_id`, `o_product_id`, `o_submit`, `o_status`, `o_messages`, `car_viewing_day`, `o_ip`, `o_menu_id`, `created_at`, `updated_at`) VALUES
(6, 3, 1, 0, 1, '', '2021-12-16', '127.0.0.1', NULL, '2021-12-13 15:24:56', '2021-12-13 15:25:23'),
(7, 3, 1, 0, 0, '?????i l???ch xem xe', '2021-12-25', '127.0.0.1', NULL, '2021-12-13 15:36:23', '2021-12-13 15:36:23'),
(8, 3, 1, 0, 0, 'Goi cho t??i ????? ch???t l???ch xem xe', '2021-12-17', '127.0.0.1', NULL, '2021-12-13 17:11:45', '2021-12-13 17:11:45'),
(9, 14, 2, 0, 0, 'adbfdgdfgdfgdfg', '2021-12-22', '127.0.0.1', NULL, '2021-12-15 15:17:30', '2021-12-15 15:17:30'),
(10, 15, 0, 0, 0, NULL, NULL, '127.0.0.1', 1, '2021-12-15 15:39:45', '2021-12-15 15:39:45'),
(11, 16, 0, 0, 0, NULL, NULL, '127.0.0.1', 3, '2021-12-15 15:40:16', '2021-12-15 15:40:16');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_permission` tinyint(4) DEFAULT 0,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `group_permission`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Quan ly bai viet', 1, NULL, 'Th??m, s???a, x??a b??i vi???t', '2021-12-15 16:11:28', '2021-12-15 16:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_price` bigint(20) DEFAULT 0,
  `pro_menu_id` int(11) DEFAULT 0,
  `pro_type` tinyint(4) DEFAULT 0,
  `pro_active` tinyint(4) DEFAULT 0,
  `pro_position` tinyint(4) DEFAULT 0,
  `pro_source` tinyint(4) DEFAULT 0 COMMENT 'Ngu???n g???c ,xu???t x??? ',
  `pro_description` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_year_output` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_specifications` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_title_seo` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_keyword_seo` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_description_seo` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_view` int(11) DEFAULT 0,
  `pro_admin_id` int(11) DEFAULT 0,
  `pro_point_rating` int(11) DEFAULT 0,
  `pro_total_ratings` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_price`, `pro_menu_id`, `pro_type`, `pro_active`, `pro_position`, `pro_source`, `pro_description`, `pro_year_output`, `pro_content`, `pro_specifications`, `pro_title_seo`, `pro_keyword_seo`, `pro_description_seo`, `pro_avatar`, `pro_view`, `pro_admin_id`, `pro_point_rating`, `pro_total_ratings`, `created_at`, `updated_at`) VALUES
(1, 'Hyundai i10 sedan b???n ?????', 'hyundai-i10-sedan-ban-du', 120000, 1, 1, 1, 1, 1, 'Hyundai i10 sedan b???n ?????', '2002', '<p style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\">Hyundai i10 sedan b???n ????? - Ni???m m?? ?????c c???a m???i nh&agrave;</span></strong></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><em><span style=\"font-size:14.0pt\">????? ??&aacute;p ???ng nhu c???u c???a ng?????i d&ugrave;ng, c&aacute;c nh&agrave; s???n xu???t kh&ocirc;ng ng???ng c???i ti???n v&agrave; cho ra ?????i nh???ng d&ograve;ng xe h??i v???i nhi???u ki???u d&aacute;ng v&agrave; phong c&aacute;ch kh&aacute;c nhau. Tuy nhi&ecirc;n, kh&ocirc;ng ph???i ai c??ng am hi???u v??? l??nh v???c n&agrave;y ????? c&oacute; th??? l???a ch???n ???????c m???t chi???c xe ph&ugrave; h???p v???i m???c ??&iacute;ch v&agrave; phong c&aacute;ch c???a m&igrave;nh. N???u b???n l&agrave; ng?????i y&ecirc;u th&iacute;ch phong c&aacute;ch n??ng ?????ng v&agrave; c&aacute; t&iacute;nh th&igrave; m???t g???i &yacute; c???a ch&uacute;ng t&ocirc;i d&agrave;nh cho b???n l&agrave; chi???c <strong>hyundai</strong> <strong>i10 sedan b???n ?????</strong> thu???c d&ograve;ng xe H</span></em><em><span style=\"font-size:14.0pt\">yundai ch???c ch???n s??? khi???n b???n h&agrave;i l&ograve;ng. Ch&uacute;ng ta h&atilde;y c&ugrave;ng t&igrave;m hi???u c??? th??? v??? d&ograve;ng xe n&agrave;y trong b&agrave;i vi???t sau ??&acirc;y.</span></em></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\">1. ??&ocirc;i n&eacute;t c?? b???n v??? xe hyundai i10 sedan b???n ?????</span></strong></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"color:null\"><img alt=\"i10 sedan b???n ?????\" src=\"http://hyundaithanhcong.net/photos/15/i10 sedan ban du/i10-sedan-so-san.jpg\" style=\"width:100%\" /></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><em><span style=\"font-size:14.0pt\">Ngo???i h&igrave;nh c???a Sedan b???n ?????</span></em></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">??&acirc;y l&agrave; d&ograve;ng xe ti???p n???i theo d&ograve;ng ch???y c???a Hyundai v???i nh???ng c???i ti???n v?????t tr???i. Kh&aacute;c v???i b???n thi???u, Hyundai i10 sedan b???n ????? ???????c t&iacute;ch h???p kh&aacute; nhi???u ch???c n??ng ??u vi???t gi&uacute;p n&oacute; tr??? th&agrave;nh m???t trong nh???ng d&ograve;ng xe ???????c ??a chu???ng nh???t trong c&ugrave;ng ph&acirc;n kh&uacute;c.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">V???i ngo???i h&igrave;nh ???????c thi???t k??? theo phong c&aacute;ch n??ng ?????ng, c&aacute; t&iacute;nh, tr??? trung c&ugrave;ng v???i nh???ng t&iacute;nh n??ng ??u vi???t d&ograve;ng xe n&agrave;y nhanh ch&oacute;ng chinh ph???c ???????c l&ograve;ng tin c???a ??&ocirc;ng ?????o kh&aacute;ch h&agrave;ng.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Hyundai tung ra 6 phi&ecirc;n b???n xe i10 sedan b???n ????? ???????c l???p r&aacute;p t???i Vi???t Nam, trong ??&oacute; b???n ?????y ????? ???????c c&aacute;c chuy&ecirc;n gia v??? xe c??ng nh?? ng?????i d&ugrave;ng ??&aacute;nh gi&aacute; cao v??? c??? ngo???i h&igrave;nh l???n t&iacute;nh ??u vi???t khi v???n h&agrave;nh. V&igrave; v???y, ch???ng c&oacute; l&yacute; do g&igrave; m&agrave; i10 sedan b???n ????? l???i kh&ocirc;ng tr??? th&agrave;nh d&ograve;ng xe ???????c ??a chu???ng nh???t b???i n&oacute; ph&ugrave; h???p v???i th??? hi???u c??ng nh?? kh??? n??ng kinh t??? c???a ??&ocirc;ng ?????o ng?????i d&ugrave;ng t???i Vi???t Nam.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\">2. Ngo???i th???t c???a xe hyundai i10 sedan b???n ?????</span></strong></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"color:null\"><img alt=\"ngo???i th???t i10 sedan b???n ?????\" src=\"http://hyundaithanhcong.net/photos/15/i10 sedan ban du/ngoai-that-i10-sedan-so-san-ban-du.jpg\" style=\"width:100%\" /></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><em><span style=\"font-size:14.0pt\">Thi???t k??? hi???n ?????i ph&ugrave; h???p v???i gi???i tr???</span></em></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">D&ograve;ng xe n&agrave;y ???????c thi???t k??? v???i ngo???i h&igrave;nh c???c phong c&aacute;ch, n??ng ?????ng v&agrave; tr??? trung nh??ng kh&ocirc;ng l&agrave;m m???t ??i v??? quy???n r?? ch???c ch???n s??? g&acirc;y ???n t?????ng m???nh v???i b???n ngay t??? c&aacute;i nh&igrave;n ?????u ti&ecirc;n. </span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\">- T???ng th??? v??? di???n t&iacute;ch xe</span></strong></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">D&ograve;ng xe n&agrave;y ???????c ??&aacute;nh gi&aacute; c&oacute; kh&ocirc;ng gian n???i th???t r???ng r&atilde;i v&agrave; tho???i m&aacute;i v???i chi???u d&agrave;i c?? s??? l&ecirc;n t???i 2.425 mm. Gh??? ng???i ??? c??? ph&iacute;a tr?????c v&agrave; ph&iacute;a sau ???????c thi???t k??? v???i ch???t li???u da pha n??? k???t h???p v???i 2 t&ocirc;ng m&agrave;u ??en tr???ng mang l???i s??? &ecirc;m &aacute;i nh??ng c??ng c???c k??? th???i trang v&agrave; c&aacute; t&iacute;nh. </span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Hyundai i10 sedan b???n ????? ???????c </span><span style=\"font-size:14.0pt\">l???p ?????t h??? th???ng g????ng ch???nh ??i???n v&agrave; g???p ??i???n t&iacute;ch h???p ??&egrave;n b&aacute;o r??? gi&uacute;p chi???c xe tr??? n&ecirc;n g???n g&agrave;ng v&agrave; ti???n l???i, tr&aacute;nh ???????c nh???ng va ch???m kh&ocirc;ng ??&aacute;ng c&oacute; khi di chuy???n ?????n nh???ng ??o???n ???????ng c&oacute; m???t ????? xe ??&ocirc;ng ??&uacute;c. </span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">N???u nh?? </span><span style=\"font-size:14.0pt\">??? b???n thi???u, lazang ???????c trang b??? b???ng th&eacute;p th&igrave; ??? b???n ????? lazang ???????c thi???t k??? b???ng h???p kim nh&ocirc;m kh&ocirc;ng nh???ng c&oacute; c&ocirc;ng d???ng ch???ng m&ograve;n do t&aacute;c ?????ng c???a m&ocirc;i tr?????ng m&agrave; n&oacute; c&ograve;n t???o ra v??? sang tr???ng c??ng nh?? th??? hi???n ???????c phong c&aacute;ch c???a ch??? xe, c&aacute; t&iacute;nh v&agrave; m???nh m???. </span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">C???m ??&egrave;n ph&iacute;a tr?????c ???????c ???????c trang b??? t&iacute;ch h???p b</span><span style=\"font-size:14.0pt\">??? 3 &nbsp;??&egrave;n pha, ??&egrave;n xi nhan v&agrave; ??&egrave;n c???t v???i b&oacute;ng ??&egrave;n halogen c???c s&aacute;ng gi&uacute;p t&agrave;i x??? c&oacute; th??? quan s&aacute;t v???i t???m nh&igrave;n xa h??n v&agrave; r&otilde; r&agrave;ng h??n c??ng nh?? gi&uacute;p c&aacute;c xe xung quanh c&oacute; th??? quan s&aacute;t ???????c xe ??ang c&oacute; &yacute; ?????nh r??? ?????m b???o an to&agrave;n cho qu&aacute; tr&igrave;nh di chuy???n.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Kh&ocirc;ng ch??? v???y, Hyundai i10 sedan b???n ????? c&ograve;n ???????c trang b??? th&ecirc;m ??&egrave;n </span><span style=\"font-size:14.0pt\">s????ng m&ugrave; m&agrave; b???n thi???u kh&ocirc;ng c&oacute; gi&uacute;p t&agrave;i x??? quan s&aacute;t ???????c xa h??n, t???t h??n ?????m b???o an to&agrave;n cho qu&aacute; tr&igrave;nh di chuy???n, nh???t l&agrave; khi di chuy???n ?????n nh???ng cung ???????ng ph??? ?????y s????ng m&ugrave; nh??: ???????ng ?????i, s?????n n&uacute;i hay di chuy???n trong ??i???u ki???n th???i ti???t x???u, d&agrave;y ?????c s????ng m&ugrave;. H??? th???ng l?????i t???i nhi???t c&oacute; t&aacute;c d???ng l&agrave;m m&aacute;t ?????ng c?? hi???u qu??? t??ng tu???i th??? cho xe. </span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Tay n???m m??? c???a ???????c m??? Crom gi&uacute;p chi???c xe tr??? n&ecirc;n th???t phong c&aacute;ch v&agrave; l???ch l&atilde;m k???t h???p v???i n&uacute;t b???m m??? c???a ??i???n t??? gi&uacute;p ng?????i d&ugrave;ng c&oacute; th??? m??? c???a v&agrave;o xe m???t c&aacute;ch d??? d&agrave;ng ch??? b???ng m???t thao t&aacute;c b???m n&uacute;t ????n gi???n.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\">3. N???i&nbsp;th???t c???a xe hyundai i10 sedan b???n ?????</span></strong></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"color:null\"><img alt=\"n???i th???t i10 sedan b???n ?????\" src=\"http://hyundaithanhcong.net/photos/15/i10 sedan ban du/noi-that-i10-sedan-so-san-san-ban-du.jpg\" style=\"width:100%\" /></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:center\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><em><span style=\"font-size:14.0pt\">H&igrave;nh ???nh n???i th???t c???a Sedan b???n ?????</span></em></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Kh&ocirc;ng ch??? v???y, gh??? ng???i ??? c??? 2 h&agrave;ng gh??? n&agrave;y c&ograve;n ???????c thi???t k??? l??ng t???a l???n v&agrave; c&oacute; c??? t???a ?????u &ecirc;m &aacute;i gi&uacute;p t&agrave;i x??? c??ng nh?? h&agrave;nh kh&aacute;ch c???m th???y tho???i m&aacute;i h??n trong qu&aacute; tr&igrave;nh di chuy???n.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">N???u nh?? b???n thi???u ch??? ???????c trang b??? h??? th???ng &acirc;m thanh 4 loa th&igrave; ??? b???n ?????y ????? h??? th???ng gi???i tr&iacute; ???????c trang b??? kh&aacute; t???t v???i ??&agrave;i Radio AM/FM, Bluetooth, d&agrave;n &acirc;m thanh 4 loa gi&uacute;p t&agrave;i x??? c&oacute; th??? th?? gi&atilde;n c??ng nh?? n???m b???t ???????c nh???ng tin t???c, ?????c bi???t l&agrave; tin t???c v??? giao th&ocirc;ng trong qu&aacute; tr&igrave;nh di chuy???n.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Kh&ocirc;ng ch??? v???y, d&ograve;ng xe n&agrave;y c&ograve;n ???????c l???p ?????t m&agrave;n h&igrave;nh c???m ???ng r???ng 7 inch v???i ????? ph&acirc;n gi???i h&igrave;nh ???nh cao, s???c n&eacute;t hi???n th??? b???n ????? GPS ??? Vi???t Nam gi&uacute;p t&agrave;i x??? c&oacute; th??? n???m b???t ???????c m???i cung ???????ng trong t???m tay v&agrave; ti???t ki???m th???i gian cho qu&aacute; tr&igrave;nh di chuy???n.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Xe c&oacute; trang b??? ??i???u h&ograve;a 2 chi???u n&oacute;ng v&agrave; l???nh gi&uacute;p ?????m b???o s???c kh???e cho t&agrave;i x??? l&aacute;i xe c??ng nh?? nh???ng h&agrave;nh kh&aacute;ch ng???i ph&iacute;a sau. V???i ch&igrave;a kh&oacute;a th&ocirc;ng minh c&oacute; th??? ??i???u khi???n ???????c t??? xa gi&uacute;p t&agrave;i x??? thu???n ti???n h??n trong vi???c ??i???u khi???n xe c??ng nh?? vi???c b???o ?????m an to&agrave;n cho xe.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Xe ???????c l???p ?????t ?????ng h??? ??i???u khi???n c&oacute; k&iacute;ch th?????c l???n cho ph&eacute;p hi???n th??? t???i ??a c&aacute;c th&ocirc;ng tin. V???i &aacute;nh s&aacute;ng m&agrave;u tr???ng xanh th&acirc;n thi???n v???i m???t, c&aacute;c th&ocirc;ng s??? hi???n th??? v&ocirc; c&ugrave;ng d??? ?????c gi&uacute;p xe tr??? n&ecirc;n th&acirc;n thi???n v&agrave; ph&ugrave; h???p v???i m???i ?????i t?????ng.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">C??ng trang b??? v&ocirc;-l??ng ba ch???u nh?? b???n thi???u nh??ng ??i???m kh&aacute;c bi???t l&agrave; v&ocirc;-l??ng ??? b???n ????? ???????c b???c th&ecirc;m 1 l???p da cao c???p gi&uacute;p t??ng t&iacute;nh th???m m??? cho xe. Chi???c v&ocirc;-l??ng n&agrave;y c&oacute; th??? ??i???u khi???n 2 h?????ng linh ho???t k???t h???p v???i gh??? l&aacute;i xoay ???????c 6 h?????ng gi&uacute;p t&agrave;i x??? c&oacute; ???????c m???t t?? th??? ng???i tho???i m&aacute;i nh???t ????? chinh ph???c m???i cung ???????ng. </span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\">4. C?? ch??? v???n h&agrave;nh i10 sedan b???n ?????</span></strong></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Ngay t??? l???n ?????u ti&ecirc;n ch???y th??? chi???c xe n&agrave;y, nhi???u ng?????i ??&atilde; nh???n x&eacute;t ??&acirc;y l&agrave; chi???c xe c&oacute; ?????ng c?? v</span><span style=\"font-size:14.0pt\">???n h&agrave;nh v&ocirc; c&ugrave;ng &ecirc;m &aacute;i v&agrave; ti???t ki???m nhi&ecirc;n li???u.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Hyundai I10 sedan b???n ????? </span><span style=\"font-size:14.0pt\">s??? d???ng ?????ng c?? Kappa dung t&iacute;ch 1.2 l&iacute;t s??? d???ng v???t li???u nh??? ????? gia c&ocirc;ng gi&uacute;p gi???m tr???ng l?????ng c??ng nh?? t??ng t&iacute;nh th???m m??? cho xe m???t c&aacute;ch hi???u qu???. </span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Kh&ocirc;ng ch??? v???y, ?????ng c?? Kappa <span style=\"background-color:white\">k???t h???p v???i c&ocirc;ng ngh??? Dual VTVT c&ograve;n gi&uacute;p t&agrave;i x??? ti???t ki???m nhi&ecirc;n li???u m???t c&aacute;ch ??&aacute;ng k??? c??ng nh?? b???o ?????m s??? b???n b??? c???a ?????ng c?? trong qu&aacute; tr&igrave;nh v???n h&agrave;nh.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"background-color:white\">5. ?????m b???o t&iacute;nh an to&agrave;n </span></span></strong></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"background-color:white\">D&ograve;ng xe n&agrave;y ???????c trang b??? h??? th???ng t&uacute;i kh&iacute; ?????y ????? ??? h&agrave;ng gh??? l&aacute;i gi&uacute;p b???o v??? t&agrave;i x??? v&agrave; h&agrave;nh kh&aacute;ch gi???m b???t nh???ng nguy hi???m khi g???p ph???i va ch???m v???i nh???ng xe kh&aacute;c c??ng nh?? va ch???m v???i nh???ng ch?????ng ng???i v???t tr&ecirc;n ???????ng trong qu&aacute; tr&igrave;nh di chuy???n.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Xe ???????c trang b??? c&ocirc;ng ngh??? ch???ng b&oacute; c???ng phanh ????? h???n ch??? c??ng nh?? ng??n ng???a vi???c tr?????t b&aacute;nh trong qu&aacute; tr&igrave;nh </span><span style=\"font-size:14.0pt\">v???n h&agrave;nh g&acirc;y nguy hi???m. Kh&ocirc;ng ch??? v???y, h??? th???ng phanh n&agrave;y c&ograve;n gi&uacute;p xe ???n ?????nh v&agrave; h???n ch??? vi???c trong qu&aacute; tr&igrave;nh phanh g???p b??? kh&oacute;a b&aacute;nh d???n t???i m???t ki???m so&aacute;t h?????ng l&aacute;i.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">C???m bi???n l&ugrave;i ???????c hi???n th??? tr&ecirc;n g????ng s??? t??? ?????ng ???????c k&iacute;ch ho???t khi xe ??? s??? l&ugrave;i. ?????i v???i nh???ng ng?????i ??ang t???p l&aacute;i xe c??ng nh?? k??? n??ng ??i???u khi???n xe, l&ugrave;i xe c&ograve;n y???u th&igrave; c???m bi???n l&ugrave;i ch???c ch???n s??? gi&uacute;p &iacute;ch nhi???u cho b???n.</span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"color:null\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"background-color:white\">Tr&ecirc;n ??&acirc;y l&agrave; nh???ng th&ocirc;ng tin c?? b???n v??? d&ograve;ng xe i10 sedan b???n ????? c???a H</span></span><span style=\"font-size:14.0pt\"><span style=\"background-color:white\">yundai. Hy v???ng r???ng v???i nh???ng th&ocirc;ng tin m&agrave; ch&uacute;ng t&ocirc;i cung c???p s??? gi&uacute;p c&aacute;c b???n hi???u r&otilde; h??n v??? d&ograve;ng xe n&agrave;y.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:null\"><span style=\"font-size:14.0pt\"><span style=\"background-color:white\">N???u c&ograve;n th???c m???c v??? ??i???u g&igrave; c??ng nh?? mu???n s??? h???u cho m&igrave;nh si&ecirc;u ph</span></span></span><span style=\"font-size:14.0pt\"><span style=\"background-color:white\"><span style=\"color:null\">???m n&agrave;y v???i gi&aacute; th&agrave;nh h???p l&yacute; th&igrave; h&atilde;y nh???c m&aacute;y l&ecirc;n v&agrave; li&ecirc;n h??? v???i ch&uacute;ng t&ocirc;i qua ?????u s??? hotline </span><a href=\"tel: 0985323555\"><span style=\"color:null\">0985.323.555</span></a><span style=\"color:null\"> ho???c truy c???p v&agrave;o website </span><a href=\"http://hyundaithanhcong.net\"><span style=\"color:null\">hyundaithanhcong.net</span></a><span style=\"color:null\"> ????? ???????c ch&uacute;ng t&ocirc;i t?? v???n v&agrave; gi???i ??&aacute;p t???n t&igrave;nh.</span></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"background-color:white\"><span style=\"color:null\">Tham kh???o th&ecirc;m: c&aacute;c d&ograve;ng </span><a href=\"http://hyundaithanhcong.net/chuyen-muc/hyundai-i10-2\"><span style=\"color:null\">hyundai i10</span></a><span style=\"color:null\">.&nbsp;</span></span></span></span></span></p>', '<p style=\"margin-left:0cm; margin-right:0cm\">??ang c???p nh???t</p>', 'Hyundai i10 sedan b???n ?????', 'Hyundai i10 sedan b???n ?????', 'Hyundai i10 sedan b???n ?????', '2021-11-24__sp-1.png', 0, 1, 0, 0, '2021-11-24 05:50:27', '2021-11-24 05:50:30'),
(2, 'B??n xe Ford Focus s???n xu???t n??m 2016, xe ?????p', 'ban-xe-ford-focus-san-xuat-nam-2016-xe-dep', 575, 1, 1, 1, 2, 2, 'B??n xe Ford Focus s???n xu???t n??m 2016, xe ?????p, xe gia ????nh', '2016', '<p>&nbsp;</p>\r\n\r\n<p>Xe ??&atilde; qua s??? d???ng, bao ki???m ?????nh t???i h&atilde;ng - ??????c b&aacute;n t???i Si&ecirc;u Th??? &Ocirc; T&ocirc; H&agrave; N???i.<br />\r\n- Lo???i xe: Focus.<br />\r\n- S???n xu???t: 2016.<br />\r\n- ??K l???n ?????u: 07/2016.<br />\r\n- M&agrave;u: Ghi v&agrave;ng.<br />\r\n- BS: 81.<br />\r\n- L??n b&aacute;nh: 43.000 Km (cam k???t kh&ocirc;ng tua).<br />\r\n- Ph&aacute;p l&yacute;: Xe c&aacute; nh&acirc;n, 1 ch??? t??? ?????u.<br />\r\n- Gi&aacute;: 575tr (c&ograve;n th????ng l?????ng), h??? tr??? vay ng&acirc;n h&agrave;ng l&atilde;i su???t th???p t???i 70% gi&aacute; tr??? xe.<br />\r\nXe ???????c trang b???:<br />\r\n- Gh??? da, m&agrave;n h&igrave;nh DVD, k???t n???i Bluetooth.<br />\r\n- ??i???u h&ograve;a t??? ?????ng 2 v&ugrave;ng ?????c l???p.<br />\r\n- C???a s??? tr???i.<br />\r\n- Ch&igrave;a kh&oacute;a th&ocirc;ng minh, kh???i ?????ng n&uacute;t b???m.<br />\r\n- C???m bi???n tr?????c sau, camera l&ugrave;i.<br />\r\nSi&ecirc;u Th??? &Ocirc; T&ocirc; H&agrave; N&ocirc;i - Chuy&ecirc;n gia xe ??&atilde; qua s??? d???ng ch???t l?????ng cao: Kh&ocirc;ng ??&acirc;m ?????ng - Kh&ocirc;ng ng???p n?????c - ??&uacute;ng Km ?????ng h???.<br />\r\nB&ecirc;n c???nh ??&oacute; ch&uacute;ng t&ocirc;i c&ograve;n c&oacute;:<br />\r\n- Ch&iacute;nh s&aacute;ch b???o h&agrave;nh t???i 06 th&aacute;ng ho???c 10.000km cho t???ng xe b&aacute;n ra, h??? tr??? b???o tr&igrave;, s???a ch???a tr???n ?????i.<br />\r\n- T???ng 2 phi???u thay nh???t mi???n ph&iacute; cho m???i xe b&aacute;n ra.<br />\r\n- Thu mua xe ??&atilde; qua s??? d???ng v???i gi&aacute; cao.<br />\r\n- ?????i xe c?? m???i v???i m???c b&ugrave; ?????i ?????c bi???t ??.</p>', NULL, 'B??n xe Ford Focus s???n xu???t n??m 2016, xe ?????p', 'B??n xe Ford Focus s???n xu???t n??m 2016, xe ?????p', NULL, '2021-12-05__20210122144140-a7bd-wm.jpg', 0, 1, 0, 0, '2021-12-05 08:54:47', '2021-12-05 08:55:32'),
(3, 'Xe BMW 428i ?????i 2013, m??u tr???ng, nh???p kh???u nguy??n chi???c', 'xe-bmw-428i-doi-2013-mau-trang-nhap-khau-nguyen-chiec', 127900000, 2, 1, 1, 2, 1, 'Xe BMW 428i ?????i 2013, m??u tr???ng, nh???p kh???u nguy??n chi???c', '2011', '<p>Nay l&ecirc;n s&oacute;ng em BMW 428i coupe tr???ng n???i th???t ??en.<br />\r\n- Sx 2013 ??kl?? 2014.<br />\r\n- Odo 54.000 km h??n.<br />\r\n- ?????ng c?? 2.0 turbo v???i 245 m&atilde;.<br />\r\n- Body M4 Performance.<br />\r\n- M&acirc;m 19 inch th??? thao.<br />\r\n- Heo v&agrave; ????a tr?????c sau Brembo.<br />\r\n- Full p&ocirc; uy l???c.<br />\r\n- Full LCI tr?????c sau.<br />\r\n- ?????ng h??? hi???n th??? s??? Cluster 6WD.<br />\r\n- M&agrave;n h&igrave;nh NBT.<br />\r\n- N&uacute;m l???n.<br />\r\n- C???n s??? M.<br />\r\n- Volang M.<br />\r\n- Loa Harman Kardon quanh xe.<br />\r\n- 4 ch??? ????? ch???y tu??? ch???nh.<br />\r\n- C&ograve;n nhi???u c&aacute;i linh tinh kh&aacute;c....<br />\r\n- Xe kh&ocirc;ng ??&acirc;m ?????ng, kh&ocirc;ng ng???p n?????c v&agrave; kh&ocirc;ng thu??? k&iacute;ch.<br />\r\n- Test h&atilde;ng tho???i m&aacute;i.<br />\r\n- Gi&aacute; ch??? 1 t??? 279tr.<br />\r\n- H??? tr??? vay bank ???????c 700-800 tr tho???i m&aacute;i.</p>', NULL, 'Xe BMW 428i ?????i 2013, m??u tr???ng, nh???p kh???u nguy??n chi???c', 'Xe BMW 428i ?????i 2013, m??u tr???ng, nh???p kh???u nguy??n chi???c', 'Xe BMW 428i ?????i 2013, m??u tr???ng, nh???p kh???u nguy??n chi???c', '2021-12-05__20211126154725-6456-wm.jpg', 0, 1, 0, 0, '2021-12-05 09:00:10', '2021-12-05 09:00:24'),
(4, 'HyunDai Accent', 'hyundai-accent', 400000000, 3, 1, 1, 0, 3, '?????ng c??: 123414\r\ndung t??ch :56456', '2021', NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 0, 0, '2021-12-15 15:58:01', '2021-12-15 15:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `pi_name` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pi_slug` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pi_product_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `pi_name`, `pi_slug`, `pi_product_id`, `created_at`, `updated_at`) VALUES
(1, '2021-11-24__sp-1.png', '2021-11-24-sp-1png', 1, '2021-11-24 05:51:37', '2021-11-24 05:51:37'),
(2, '2021-12-05__20210122144140-a7bd-wm.jpg', '2021-12-05-20210122144140-a7bd-wmjpg', 2, '2021-12-05 08:54:47', '2021-12-05 08:54:47'),
(3, '2021-12-05__20210122144140-b378-wm.jpg', '2021-12-05-20210122144140-b378-wmjpg', 2, '2021-12-05 08:54:47', '2021-12-05 08:54:47'),
(4, '2021-12-05__20210122144139-8f78-wm.jpg', '2021-12-05-20210122144139-8f78-wmjpg', 2, '2021-12-05 08:54:47', '2021-12-05 08:54:47'),
(5, '2021-12-05__20211126154725-475b-wm.jpg', '2021-12-05-20211126154725-475b-wmjpg', 3, '2021-12-05 09:00:11', '2021-12-05 09:00:11'),
(6, '2021-12-05__20211126154725-d351-wm.jpg', '2021-12-05-20211126154725-d351-wmjpg', 3, '2021-12-05 09:00:11', '2021-12-05 09:00:11'),
(7, '2021-12-05__20211126154725-3373-wm.jpg', '2021-12-05-20211126154725-3373-wmjpg', 3, '2021-12-05 09:00:11', '2021-12-05 09:00:11'),
(8, '2021-12-05__20211126154725-6456-wm.jpg', '2021-12-05-20211126154725-6456-wmjpg', 3, '2021-12-05 09:00:11', '2021-12-05 09:00:11');

-- --------------------------------------------------------

--
-- Table structure for table `product_value`
--

CREATE TABLE `product_value` (
  `id` int(10) UNSIGNED NOT NULL,
  `pv_product_id` int(11) NOT NULL DEFAULT 0,
  `pv_value_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `sl_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl_avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl_type` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `sl_name`, `sl_link`, `sl_description`, `sl_avatar`, `sl_type`, `created_at`, `updated_at`) VALUES
(1, 'Sl1', NULL, NULL, '2021-11-24__sl1.png', 4, NULL, NULL),
(2, 'SL2', NULL, NULL, '2021-11-24__sl2.png', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(10) UNSIGNED NOT NULL,
  `s_script` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_html` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_type` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` tinyint(4) DEFAULT 0,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `password` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'check veriemail chua',
  `confirmation_code` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'token',
  `active` tinyint(4) DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `city`, `age`, `avatar`, `admin_id`, `password`, `confirmed`, `confirmation_code`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'TrungPhuNA', 'doantotnghiep2@gmail.com', '0986420991', NULL, NULL, 0, NULL, NULL, '$2y$10$d/ahhe877XubBCp2JMRHe.1.docKofEH7P4MeEilMirTj4ThnZgZS', 0, NULL, 1, NULL, '2021-11-28 12:57:58', '2021-11-28 12:57:58'),
(3, 'Nguy???n V??n A', 'nguyenvana@gmail.com', '0928817228', '?????a ch???', NULL, 0, NULL, NULL, '$2y$10$nnhyBFEVw48CgNynuCXhEeLMC/cAIsGaErrMzMvX9ioNsLaE/E5Ku', 0, NULL, 1, '7KMqSZd9u1BThDKQeFf6WuVTOgwos1u5EDzqIzN2OTprWApLQaVANPdRpaLb', '2021-12-05 09:05:29', '2021-12-19 10:32:32'),
(5, 'tran van b', 'tranvanb@gmail.com', '012344956', NULL, NULL, 0, NULL, NULL, '$2y$10$oHJKFhKXMTIizcQVweaoHOA/WIacQrYV6yrDOHS6g3ociQ9jJS2R.', 0, NULL, 1, 'fPPaQJrwDiGDtcU1IaGT9ex8uxsGWn3yl5jefgpfnkfiFbBmo1savGeIS5vB', '2021-12-05 09:54:29', '2021-12-05 09:54:29'),
(13, 'Tr???n ti???n v??', 'vu123@gmail.com', '123143245345', NULL, NULL, 0, NULL, NULL, '$2y$10$/b65mocI.CBhK/X1U4a9q.l7hZqYB.Gv65D/UKs0H/5A0IoE3VzV6', 0, NULL, 1, '56Zc4rmkeoAiBJD9S8S3jLmq4QM1sW4CpEREx7CXssjUdOfMnz7MhHiduX09', '2021-12-15 15:12:48', '2021-12-15 15:12:48'),
(14, 'tran van a', 'tranvana@gmail.com', '0123143565', NULL, NULL, 0, NULL, NULL, '$2y$10$TZ2.jlmA92TWPjT7/PZKYORsaYo3kmAE5kxzhfYV2CGyWhMJALanC', 0, NULL, 1, NULL, '2021-12-15 15:17:30', '2021-12-15 15:17:30'),
(15, 'nguyanvanb', 'haibabon@gmail.com', '10243245235', NULL, NULL, 0, NULL, NULL, '$2y$10$mGZpYe4100bEPFi0VANy4OdgTohQan4p5apAulyh4p.1JJ6/SW5MO', 0, NULL, 1, NULL, '2021-12-15 15:37:37', '2021-12-15 15:37:37'),
(16, 'sdfdsfsd', 'haibabson@gmail.com', '3453454', NULL, NULL, 0, NULL, NULL, '$2y$10$7lG6x95CWeBSAeM865IuHuOEGPzNjJaEKcErUrQ2Qu8Q4/reU/m7q', 0, NULL, 1, NULL, '2021-12-15 15:40:16', '2021-12-15 15:40:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_social`
--
ALTER TABLE `account_social`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_social_provider_user_id_index` (`provider_user_id`),
  ADD KEY `account_social_provider_index` (`provider`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_active_index` (`active`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_a_menu_id_index` (`a_menu_id`),
  ADD KEY `articles_a_admin_id_index` (`a_admin_id`),
  ADD KEY `articles_a_auth_id_index` (`a_auth_id`),
  ADD KEY `articles_a_active_index` (`a_active`),
  ADD KEY `articles_a_hot_index` (`a_hot`),
  ADD KEY `articles_a_point_rating_index` (`a_point_rating`),
  ADD KEY `articles_a_total_ratings_index` (`a_total_ratings`);

--
-- Indexes for table `article_keywords`
--
ALTER TABLE `article_keywords`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `article_keywords_ak_article_id_ak_keyword_id_unique` (`ak_article_id`,`ak_keyword_id`),
  ADD KEY `article_keywords_ak_article_id_index` (`ak_article_id`),
  ADD KEY `article_keywords_ak_keyword_id_index` (`ak_keyword_id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `commens`
--
ALTER TABLE `commens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_com_user_id_index` (`com_user_id`),
  ADD KEY `comments_com_source_id_index` (`com_source_id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guests_g_email_unique` (`g_email`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_im_slug_index` (`im_slug`),
  ADD KEY `images_im_type_index` (`im_type`),
  ADD KEY `images_im_active_index` (`im_active`);

--
-- Indexes for table `image_products`
--
ALTER TABLE `image_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image_products_ip_product_id_ip_image_id_unique` (`ip_product_id`,`ip_image_id`),
  ADD KEY `image_products_ip_product_id_index` (`ip_product_id`),
  ADD KEY `image_products_ip_image_id_index` (`ip_image_id`);

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `informations_if_seo_index` (`if_seo`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `keywords_k_name_slug_unique` (`k_name_slug`),
  ADD KEY `keywords_k_active_index` (`k_active`);

--
-- Indexes for table `keyword_librarys`
--
ALTER TABLE `keyword_librarys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `keyword_librarys_kwl_slug_unique` (`kwl_slug`),
  ADD KEY `keyword_librarys_kwl_hit_index` (`kwl_hit`),
  ADD KEY `keyword_librarys_kwl_active_index` (`kwl_active`);

--
-- Indexes for table `keyword_temps`
--
ALTER TABLE `keyword_temps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `keyword_temps_kt_slug_unique` (`kt_slug`),
  ADD KEY `keyword_temps_kt_active_index` (`kt_active`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_m_parent_id_index` (`m_parent_id`),
  ADD KEY `menus_m_type_index` (`m_type`),
  ADD KEY `menus_m_active_index` (`m_active`),
  ADD KEY `menus_m_type_seo_index` (`m_type_seo`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_o_guest_id_index` (`o_guest_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_pro_name_unique` (`pro_name`),
  ADD KEY `products_pro_menu_id_index` (`pro_menu_id`),
  ADD KEY `products_pro_type_index` (`pro_type`),
  ADD KEY `products_pro_active_index` (`pro_active`),
  ADD KEY `products_pro_admin_id_index` (`pro_admin_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_pi_product_id_index` (`pi_product_id`);

--
-- Indexes for table `product_value`
--
ALTER TABLE `product_value`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_value_pv_product_id_pv_value_id_unique` (`pv_product_id`,`pv_value_id`),
  ADD KEY `product_value_pv_product_id_index` (`pv_product_id`),
  ADD KEY `product_value_pv_value_id_index` (`pv_value_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stores_s_type_index` (`s_type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_admin_id_index` (`admin_id`),
  ADD KEY `users_confirmed_index` (`confirmed`),
  ADD KEY `users_confirmation_code_index` (`confirmation_code`),
  ADD KEY `users_active_index` (`active`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_social`
--
ALTER TABLE `account_social`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `article_keywords`
--
ALTER TABLE `article_keywords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commens`
--
ALTER TABLE `commens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_products`
--
ALTER TABLE `image_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keyword_librarys`
--
ALTER TABLE `keyword_librarys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keyword_temps`
--
ALTER TABLE `keyword_temps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_value`
--
ALTER TABLE `product_value`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
