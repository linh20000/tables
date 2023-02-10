-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 12:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tables_chairs`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phoneNumber` int(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `status` varchar(2) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `phoneNumber`, `email`, `address`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'adfasdfasdf', 123213231, 'asdfasdf', 'asdfasdf', 'asdfasdfas', '1', '2023-02-09 08:32:07.000000', '2023-02-10 06:00:38.000000'),
(2, 'ngo quang linh', 921559498, 'ngoq', 'ngõ 313 lĩnh nam hoàng mai hà nooij', 'không có câu hỏi', '0', '2023-02-09 11:00:24.000000', '2023-02-09 11:00:24.000000'),
(3, 'ngo quang linh', 921559498, 'ngoq', 'ngõ 313 lĩnh nam hoàng mai hà nooij', 'không có câu hỏi', '0', '2023-02-09 11:00:26.000000', '2023-02-09 11:00:26.000000'),
(4, 'ngo quang linh', 921559498, 'ngoq', 'ngõ 313 lĩnh nam hoàng mai hà nooij', 'không có câu hỏi', '0', '2023-02-09 11:00:28.000000', '2023-02-09 11:00:28.000000'),
(5, 'ngo quang linh', 921559498, 'ngoq', 'ngõ 313 lĩnh nam hoàng mai hà nooij', 'không có câu hỏi', '0', '2023-02-09 11:00:28.000000', '2023-02-09 11:00:28.000000'),
(6, 'ngo quang linh', 921559498, 'ngoq', 'ngõ 313 lĩnh nam hoàng mai hà nooij', 'không có câu hỏi', '0', '2023-02-09 11:02:29.000000', '2023-02-09 11:02:29.000000'),
(7, 'ngo quang linh', 921559498, 'ngoq', 'ngõ 313 lĩnh nam hoàng mai hà nooij', 'không có câu hỏi', '0', '2023-02-09 11:02:39.000000', '2023-02-09 11:02:39.000000'),
(8, 'ngo quang linh', 921559498, 'ngoq', 'ngõ 313 lĩnh nam hoàng mai hà nooij', 'không có câu hỏi', '0', '2023-02-09 11:02:40.000000', '2023-02-09 11:02:40.000000'),
(9, 'ngo quang linh', 921559498, 'ngoq', 'ngõ 313 lĩnh nam hoàng mai hà nooij', 'không có câu hỏi', '0', '2023-02-09 11:02:40.000000', '2023-02-09 11:02:40.000000'),
(10, 'ngo quang linh', 921559498, 'ngoq', 'ngõ 313 lĩnh nam hoàng mai hà nooij', 'không có câu hỏi', '0', '2023-02-09 11:02:41.000000', '2023-02-09 11:02:41.000000'),
(11, 'ngo quang linh', 921559498, 'ngoq', 'ngõ 313 lĩnh nam hoàng mai hà nooij', 'không có câu hỏi', '0', '2023-02-09 11:02:41.000000', '2023-02-09 11:02:41.000000'),
(12, 'ngo quang linh', 921559498, 'ngoq', 'ngõ 313 lĩnh nam hoàng mai hà nooij', 'không có câu hỏi', '0', '2023-02-09 11:02:41.000000', '2023-02-09 11:02:41.000000'),
(13, 'ngo quang linh', 921559498, 'ngoq', 'ngõ 313 lĩnh nam hoàng mai hà nooij', 'không có câu hỏi', '0', '2023-02-09 11:02:41.000000', '2023-02-09 11:02:41.000000'),
(14, 'ngo quang linh', 921559498, 'ngoq', 'ngõ 313 lĩnh nam hoàng mai hà nooij', 'không có câu hỏi', '1', '2023-02-09 11:04:24.000000', '2023-02-10 06:00:21.000000'),
(53, 'ngo quang linh', 123456789, 'admin1@gmail.com', 'lâm đòng', 'không có nội dung', '1', '2023-02-10 04:55:57.000000', '2023-02-10 05:54:01.000000'),
(54, 'dsd', 123456789, 'admin1@gmail.com', 'lâm đòng', 'sdada', '1', '2023-02-10 05:59:33.000000', '2023-02-10 05:59:33.000000');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keyword` varchar(255) DEFAULT NULL,
  `seo_description` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `thumbnail`, `title`, `seo_title`, `seo_keyword`, `seo_description`, `created_at`, `updated_at`) VALUES
(3, 'kích thước', 'http://127.0.0.1:8000/upload/files/banner/Banner-2-1.jpg', 'ảnh banner 1', 'bàn ghế bosan', 'bàn ghế bosan', 'bàn ghế bosan', '2023-02-07 20:57:02.000000', '2023-02-07 20:57:02.000000'),
(4, 'Kích thước bàn ghế bộ', 'http://127.0.0.1:8000/upload/files/banner/Banner-KD17-24_10_2017.jpg', 'Hình ảnh Banner 2', 'Kích thước bàn ghế bộ', 'Kích thước bàn ghế bộ', 'Kích thước bàn ghế bộ', '2023-02-07 21:02:48.000000', '2023-02-07 21:02:48.000000');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `image`, `subname`, `description`, `seo_title`, `seo_description`, `seo_keyword`, `created_at`, `updated_at`) VALUES
(2, 'Chọn bàn học cho trẻ – Những điều cần lưu ý', 'http://127.0.0.1:8000/upload/files/blog/b10.jpg', 'POSTED ON 16/11/2017 BY ADMIN', '<p>Trong ph&ograve;ng trẻ,&nbsp;<strong>chọn b&agrave;n học cho trẻ</strong>&nbsp;l&agrave;&nbsp;việc&nbsp;đ&aacute;ng lưu t&acirc;m nhất đối với cha mẹ hay c&aacute;c nh&agrave; thiết kế. Kh&ocirc;ng chỉ l&agrave; kh&ocirc;ng gian ri&ecirc;ng d&agrave;nh cho học tập, kh&ocirc;ng qu&aacute; cứng nhắc hay sa đ&agrave; v&agrave;o mục đ&iacute;ch kh&aacute;c. Ph&ograve;ng học của b&eacute; cũng cần c&oacute; sự sống động, th&uacute; vị hay tạo được cảm hứng học tập.</p>', 'Chọn bàn học cho trẻ – Những điều cần lưu ý', 'Chọn bàn học cho trẻ – Những điều cần lưu ý', 'Chọn bàn học cho trẻ – Những điều cần lưu ý', '2023-02-08 00:01:09', '2023-02-08 19:57:06'),
(3, 'Tổng quan sản phẩm bàn KD19', 'http://127.0.0.1:8000/upload/files/blog/b.jpg', 'POSTED ON 16/11/2017 BY ADMIN', '<p>Bigsan muốn đưa tới kh&aacute;ch h&agrave;ng một c&aacute;i nh&igrave;n tổng quan hơn về sản phẩm b&agrave;n KD19 &ndash; một trong số những sản phẩm hiện đang b&aacute;n chạy nhất của Bigsan. Kh&ocirc;ng chỉ để kh&aacute;ch h&agrave;ng hiểu r&otilde; hơn về sản phẩm m&agrave; c&ograve;n đem tới một &ldquo;bức ch&acirc;n dung&rdquo; r&otilde; n&eacute;t về những lợi &iacute;ch của sản phẩm nhằm gi&uacute;p kh&aacute;ch h&agrave;ng c&oacute; một lựa chọn đ&uacute;ng đắn.</p>', 'Tổng quan sản phẩm bàn KD19', 'Tổng quan sản phẩm bàn KD19', 'Tổng quan sản phẩm bàn KD19', '2023-02-08 19:55:31', '2023-02-08 19:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `parent_id` int(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seo_keyword` varchar(255) DEFAULT NULL,
  `seo_description` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `description`, `thumbnail`, `title`, `seo_keyword`, `seo_description`, `seo_title`, `created_at`, `updated_at`) VALUES
(2, 'Bộ bàn ghế chống cận gù', 0, 'Bộ bàn ghế chống cận gù', 'http://127.0.0.1:8000/upload/files/product/b5.jpg', 'bộ bàn ghế chống cận gù', 'Bộ bàn ghế chống cận gù', 'Bộ bàn ghế chống cận gù', 'Bộ bàn ghế chống cận gù', '2023-02-07 10:49:23.000000', '2023-02-08 00:03:46.000000'),
(3, 'Ghế chống gù', 0, 'Ghế chống gù', 'http://127.0.0.1:8000/upload/files/product/g1-300x300.jpg', 'ghế chống gù', 'ghế chống gù', 'ghế chống gù', 'ghế chống gù', '2023-02-07 10:49:33.000000', '2023-02-08 00:04:29.000000'),
(4, 'Phụ kiện', 0, 'phụ kiện', 'http://127.0.0.1:8000/upload/files/product/b5.jpg', 'phụ kiện', 'phụ kiện bàn ghế', 'phụ kiện bàn ghế', 'phụ kiện bàn ghế', '2023-02-08 00:05:54.000000', '2023-02-08 00:05:54.000000');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `network_fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `network_ins` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `network_tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `network_shopee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `name`, `logo`, `address`, `time`, `email`, `hotline`, `video`, `network_fb`, `network_ins`, `network_tiktok`, `network_shopee`, `google_map`, `seo_title`, `seo_description`, `seo_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Bàn ghế thông minh - Bàn học Cận gù', 'http://127.0.0.1:8000/upload/files/chu-ky-so-logo.png', 'Số 16 Khu đô thị Văn Phú - Phú La - Hà Đông - Hà Nội', '9.00 - 21.00', 'Ommanisoft@gmail.com', '0987654321', 'https://www.youtube.com/embed/rmXKdCWA030', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.google.com.vn/?hl=vi', 'https://www.google.com.vn/?hl=vi', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d993.9958863081504!2d105.76413481793809!3d20.959363044443222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1673343494219!5m2!1svi!2s', 'Bàn ghế thông minh', 'Bàn ghế thông minh', 'Bàn ghế thông minh', '2023-01-17 03:01:12', '2023-02-10 10:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `comment` varchar(2000) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `avatar`, `comment`, `created_at`, `updated_at`) VALUES
(3, 'Minh thi', 'http://127.0.0.1:8000/upload/files/feedback/avatar.jpg', 'Chị Lan 45 tuổi , Ba Đình ,Hà Nội.Chúng tôi đã mua bộ bàn ghế thông minh của công ty, sản phẩm rất phù hợp với phù hợp với chiều cao và sự phát triển của trẻ,cháu nhà tôi rất thích. Các bạn của tôi tới chơi ai cũng khen Bộ bàn ghế đẹp và tiện lợi.Kính chúc quý công ty làm ăn phát đạt và cho ra nhiều loại sản phẩm tiện lợi , bền, đẹp !”', '2023-01-17 21:28:44.000000', '2023-02-07 21:34:36.000000'),
(8, 'Minh Thi', 'http://127.0.0.1:8000/upload/files/feedback/avater-2.jpg', 'Chị Lan 45 tuổi , Ba Đình ,Hà Nội.Chúng tôi đã mua bộ bàn ghế thông minh của công ty, sản phẩm rất phù hợp với phù hợp với chiều cao và sự phát triển của trẻ,cháu nhà tôi rất thích. Các bạn của tôi tới chơi ai cũng khen Bộ bàn ghế đẹp và tiện lợi.Kính chúc quý công ty làm ăn phát đạt và cho ra nhiều loại sản phẩm tiện lợi , bền, đẹp !”', '2023-01-17 21:30:15.000000', '2023-02-07 21:34:26.000000'),
(9, 'Minh', 'http://127.0.0.1:8000/upload/files/feedback/avatar.jpg', 'Anh Thông, 38 tuổi, chúng tôi đã mua bộ bàn ghế thông minh của quý công ty và vẫn đang sử dụng , trong thời gian sử dụng chúng tôi chưa thấy vấn đề gì xảy ra . Cảm ơn quý công ty đã cho tôi sử dụng bộ bàn ghế xếp thật gọn nhẹ ,đơn giản, tiết kiệm diện tích và đó tính thẩm Mỹ cao.”', '2023-01-17 21:47:46.000000', '2023-02-07 21:34:12.000000'),
(10, 'ngo quang linh', 'http://127.0.0.1:8000/upload/files/feedback/avatar.jpg', 'Kính đẹp, đóng gói cẩn thận, phù hợp vs những b mặt tròn, mình cắt mắt chống as xanh đeo vào khá dịu mắt. Sẽ', '2023-02-10 10:31:23.000000', '2023-02-10 10:31:23.000000');

-- --------------------------------------------------------

--
-- Table structure for table `form_comments`
--

CREATE TABLE `form_comments` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_comments`
--

INSERT INTO `form_comments` (`id`, `author`, `comment`, `email`, `url`, `created_at`, `updated_at`) VALUES
(20, 'eee', 'aaaaaaaa', 'admin@gmail.com', NULL, '2023-02-09 20:36:02', '2023-02-09 20:36:02'),
(21, 'aaaaa', 'aaaaaaaaaaa', 'truong@gmail.com', 'http://127.0.0.1:8000/tin-tuc', '2023-02-09 20:36:41', '2023-02-09 20:36:41'),
(22, 'aaaa', 'aaaaaaa', 'truong@gmail.com', 'http://127.0.0.1:8000/tin-tuc', '2023-02-09 20:37:06', '2023-02-09 20:37:06'),
(30, 'ádf', 'adsfdas', 'truong@gmail.com', NULL, '2023-02-09 20:52:41', '2023-02-09 20:52:41'),
(31, 'sss', 'Bigsan muốn đưa tới khách hàng một cái nhìn tổng quan hơn về sản phẩm bàn KD19 – một trong số những sản phẩm hiện đang bán chạy nhất của Bigsan. Không chỉ để khách hàng hiểu rõ hơn về sản phẩm mà còn đem tới một “bức chân dung” rõ nét về những lợi ích của sản phẩm nhằm giúp khách hàng có một lựa chọn đúng đắn.', 'truong@gmail.com', NULL, '2023-02-09 21:21:17', '2023-02-09 21:21:17'),
(32, 'awaef amwepmwa epfm', 'Bigsan muốn đưa tới khách hàng một cái nhìn tổng quan hơn về sản phẩm bàn KD19 – một trong số những sản phẩm hiện đang bán chạy nhất của Bigsan. Không chỉ để khách hàng hiểu rõ hơn về sản phẩm mà còn đem tới một “bức chân dung” rõ nét về những lợi ích của sản phẩm nhằm giúp khách hàng có một lựa chọn đúng đắn.Bigsan muốn đưa tới khách hàng một cái nhìn tổng quan hơn về sản phẩm bàn KD19 – một trong số những sản phẩm hiện đang bán chạy nhất của Bigsan. Không chỉ để khách hàng hiểu rõ hơn về sản phẩm mà còn đem tới một “bức chân dung” rõ nét về những lợi ích của sản phẩm nhằm giúp khách hàng có một lựa chọn đúng đắn.', 'truong@gmail.com', 'http://127.0.0.1:8000/tin-tuc', '2023-02-09 21:50:33', '2023-02-09 21:50:33'),
(33, 'd', 'Bigsan muốn đưa tới khách hàng một cái nhìn tổng quan hơn về sản phẩm bàn KD19 – một trong số những sản phẩm hiện đang bán chạy nhất của Bigsan. Không chỉ để khách hàng hiểu rõ hơn về sản phẩm mà còn đem tới một “bức chân dung” rõ nét về những lợi ích của sản phẩm nhằm giúp khách hàng có một lựa chọn đúng đắn.\nBigsan muốn đưa tới khách hàng một cái nhìn tổng quan hơn về sản phẩm bàn KD19 – một trong số những sản phẩm hiện đang bán chạy nhất của Bigsan. Không chỉ để khách hàng hiểu rõ hơn về sản phẩm mà còn đem tới một “bức chân dung” rõ nét về những lợi ích của sản phẩm nhằm giúp khách hàng có một lựa chọn đúng đắn.', 'admin2@gmail.com', NULL, '2023-02-09 21:51:35', '2023-02-09 21:51:35'),
(34, 'àdasdfasdfsa', 'ádfasfasfasdfsadfsadfsadfsafd', 'fasfasdfasdf@gmail.com', 'àdasfasdfasddfasf', '2023-02-10 10:29:27', '2023-02-10 10:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `introduces`
--

CREATE TABLE `introduces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `introduces`
--

INSERT INTO `introduces` (`id`, `name`, `thumbnail`, `description`, `title`, `seo_title`, `seo_description`, `seo_keyword`, `created_at`, `updated_at`) VALUES
(1, 'Giới thiệu về chúng tôi', 'http://127.0.0.1:8000/upload/files/chu-ky-so-logo.png', '<p>Đ&acirc;y l&agrave; giao diện b&aacute;n h&agrave;ng được thiết kế v&agrave; duy tr&igrave; bởi ommanisoft. Mọi nhu cầu mua giao diện web, thắc mắc, tư vấn,&hellip; xin vui l&ograve;ng li&ecirc;n hệ theo th&ocirc;ng tin dưới đ&acirc;y:</p>\r\n\r\n<p>&ndash; Phone:098.765.4321<br />\r\n&ndash; Email: Ommanisoft@gmail.com<br />\r\n&ndash; Website:&nbsp;<a href=\"http://topweb.com.vn/\">O</a>mmanisoft.com</p>', 'Update By ADMIN', 'Bàn ghế chống cận thị', 'Bàn ghế chống cận thị', 'Bàn ghế chống cận thi', NULL, '2023-02-10 10:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2017_12_11_115853_create_seo_pages_table', 2),
(6, '2017_12_11_115949_create_seo_meta_tags_table', 2),
(7, '2017_12_11_120055_create_seo_page__meta_tags_table', 2),
(8, '2017_12_11_120139_create_seo_links__tags_table', 2),
(9, '2017_12_11_120225_create_seo_page_images_table', 2),
(10, '2017_12_11_120225_create_seo_settings_table', 2),
(11, '2017_12_26_123638_add_xml_columns_to_seo_pages_table', 2),
(12, '2018_02_12_123638_add_schema_to_seo_pages_table', 2),
(13, '2018_03_08_123638_add_focus_keyword_to_seo_pages_table', 2),
(14, '2019_08_21_081423_add_tags_column_to_seo_pages_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phoneNumber` int(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `ward` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `product_rowId` varchar(5000) DEFAULT NULL,
  `total` text DEFAULT NULL,
  `qty` int(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phoneNumber`, `province`, `district`, `ward`, `address`, `note`, `product_rowId`, `total`, `qty`, `status`, `created_at`, `updated_at`) VALUES
(29, 'ádfasdfasd', 1231231231, 'ádfa', 'ádcsac', 'áda', 'ádcsacas', NULL, '[\"{\\\"a2b4961c40854d25751bbad74c75824f\\\":{\\\"rowId\\\":\\\"a2b4961c40854d25751bbad74c75824f\\\",\\\"id\\\":2,\\\"name\\\":\\\"B\\\\u00c0N GH\\\\u1ebe CH\\\\u1ed0NG G\\\\u00d9 CH\\\\u1ed0NG C\\\\u1eacN KD15 + K15\\\",\\\"qty\\\":1,\\\"price\\\":10904000,\\\"weight\\\":1,\\\"options\\\":{\\\"thumbnail\\\":\\\"http:\\\\\\/\\\\\\/127.0.0.1:8000\\\\\\/upload\\\\\\/files\\\\\\/product\\\\\\/b5.jpg\\\",\\\"product_code\\\":\\\"KD15 + K15\\\",\\\"discount\\\":\\\"6\\\",\\\"old_price\\\":11600000},\\\"discount\\\":0,\\\"tax\\\":2289840,\\\"subtotal\\\":10904000}}\"]', '10,904,000', 1, '0', '2023-02-08 09:17:57', '2023-02-09 00:28:42'),
(31, 'ngo quang linh', 123456789, 'daklak', 'thanh xuân', 'muongche', 'lâm đòng', 'khong co ghi chu', '[\"{\\\"25fe4bc205490996b3916c3387e80aea\\\":{\\\"rowId\\\":\\\"25fe4bc205490996b3916c3387e80aea\\\",\\\"id\\\":3,\\\"name\\\":\\\"B\\\\u00c0N GH\\\\u1ebe CH\\\\u1ed0NG G\\\\u00d9 CH\\\\u1ed0NG C\\\\u1eacN KD21\\\",\\\"qty\\\":1,\\\"price\\\":3520000,\\\"weight\\\":1,\\\"options\\\":{\\\"thumbnail\\\":\\\"http:\\\\\\/\\\\\\/127.0.0.1:8000\\\\\\/upload\\\\\\/files\\\\\\/product\\\\\\/g1-300x300.jpg\\\",\\\"product_code\\\":\\\"KD21\\\",\\\"discount\\\":\\\"20\\\",\\\"old_price\\\":4400000},\\\"discount\\\":0,\\\"tax\\\":739200,\\\"subtotal\\\":3520000}}\"]', '3,520,000', 1, '0', '2023-02-09 13:51:53', '2023-02-09 13:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subname` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_description` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `name`, `subname`, `description`, `thumbnail`, `status`, `seo_title`, `seo_description`, `seo_keyword`, `created_at`, `updated_at`) VALUES
(10, 'Vận chuyển miễn phí', 'Vận chuyển miễn phí', '<p>Trong phạm vi 10 Km t&iacute;nh từ showrom gần nhất đến địa chỉ giao h&agrave;ng</p>', 'http://127.0.0.1:8000/empty/empty_img.png', 0, 'Vận chuyển miễn phí', 'Vận chuyển miễn phí', 'Vận chuyển miễn phí', '2023-02-08 19:04:44', '2023-02-08 19:04:51'),
(11, 'Chất lượng bảo đảm', 'Chất lượng bảo đảm', '<p>H&agrave;ng ch&iacute;nh h&atilde;ng</p>', 'http://127.0.0.1:8000/empty/empty_img.png', 0, 'Chất lượng bảo đảm', 'Chất lượng bảo đảm', 'Chất lượng bảo đảm', '2023-02-08 19:05:20', '2023-02-08 19:05:20'),
(12, 'Chính sách đổi hàng', 'Chính sách đổi hàng', '<p>Đổi h&agrave;ng mất ph&iacute; vận chuyển trong vong 15 ng&agrave;y</p>', 'http://127.0.0.1:8000/empty/empty_img.png', 1, 'Chính sách đổi hàng', 'Chính sách đổi hàng', 'Chính sách đổi hàng', '2023-02-08 19:05:45', '2023-02-08 19:05:45'),
(13, 'Hỗ trợ miễn phí', 'Hỗ trợ miễn phí', '<p>Từ: 06h30 &ndash; 23h00</p>', 'http://127.0.0.1:8000/empty/empty_img.png', 1, 'Hỗ trợ miễn phí', 'Hỗ trợ miễn phí', 'Hỗ trợ miễn phí', '2023-02-08 19:06:04', '2023-02-08 19:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `old_price` bigint(20) NOT NULL,
  `percent_discount` bigint(20) NOT NULL,
  `current_price` bigint(20) NOT NULL,
  `seo_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `thumbnail`, `product_code`, `category_id`, `old_price`, `percent_discount`, `current_price`, `seo_keyword`, `description`, `seo_description`, `seo_title`, `status`, `created_at`, `updated_at`) VALUES
(2, 'BÀN GHẾ CHỐNG GÙ CHỐNG CẬN KD15 + K15', 'http://127.0.0.1:8000/upload/files/product/b5.jpg', 'KD15 + K15', 4, 11600000, 6, 10904000, 'bàn ghế chống cận kd15', '<p>⭐&nbsp;B&agrave;n ghế điều chỉnh độ cao thấp<br />\r\n⭐&nbsp;Mặt b&agrave;n c&oacute; thể điều chỉnh độ nghi&ecirc;ng từ 0 &ndash; 80 độ<br />\r\n⭐&nbsp;B&agrave;n: 123*64*115-137<br />\r\n⭐&nbsp;M&agrave;u sắc: Hồng/ Xanh<br />\r\n⭐&nbsp;Chất liệu: khung sắt sơn tĩnh điện; mặt ghế, tựa lưng, ngăn b&agrave;n, bọc cạnh b&agrave;n bằng nhựa PP, mặt b&agrave;n gỗ c&ocirc;ng nghiệp<br />\r\n⭐&nbsp;Phần gỗ MDF, th&acirc;n thiện với m&ocirc;i trường, chống ch&aacute;y, xước<br />\r\n⭐&nbsp;Phần ch&acirc;n th&eacute;p carbon độ bền cao gấp 5 lần nhựa thường<br />\r\n⭐&nbsp;Bộ sản phẩm bao gồm 1 b&agrave;n KD19 + 1 ghế K15<br />\r\n⭐&nbsp;Mặt b&agrave;n được phủ một lớp silicon chống l&oacute;a mắt, chống xước c&oacute; thể vẽ l&ecirc;n mặt b&agrave;n dễ d&agrave;ng lau ch&ugrave;i</p>', 'bàn ghế chống cận kd15', 'bàn ghế chống cận kd15', '1', '2023-02-07 21:41:09', '2023-02-08 08:47:37'),
(3, 'BÀN GHẾ CHỐNG GÙ CHỐNG CẬN KD21', 'http://127.0.0.1:8000/upload/files/product/g1-300x300.jpg', 'KD21', 3, 4400000, 20, 3520000, 'bàn ghế chống gù kd21', '<p>Thỏa sức s&aacute;ng tạo với b&agrave;n ghế chống cận chống g&ugrave; KD21:</p>\r\n\r\n<p>⭐Mặt b&agrave;n: L&agrave;m bằng chất liệu chống trầy xước, c&oacute; thể điều chỉnh từ 0 &ndash; 80 độ, vừa l&agrave;m b&agrave;n viết, vừa l&agrave;m b&agrave;n vẽ dễ d&agrave;ng lau ch&ugrave;i</p>\r\n\r\n<p>⭐Kệ để s&aacute;ch: Được nghi&ecirc;n cứu đặt ở vị tr&iacute; ti&ecirc;u chuẩn tạo khoảng c&aacute;ch ph&ugrave; hợp từ mắt đến gi&aacute; s&aacute;ch tr&aacute;nh cho việc trẻ để s&aacute;ch qu&aacute; gần hoặc qu&aacute; xa g&acirc;y ảnh hưởng đến mắt.</p>\r\n\r\n<p>⭐B&agrave;n, ghế điều chỉnh cao thấp: Sơn bột tĩnh điện bề mặt, mặt b&agrave;n c&oacute; thể điều chỉnh từ 0 &ndash; 80 độ, th&acirc;n thiện m&ocirc;i trường, chống ch&aacute;y, xước</p>\r\n\r\n<p>⭐Chất liệu: khung kim loại, cơ chế chống nghi&ecirc;ng</p>\r\n\r\n<p>⭐K&iacute;ch thước: ghế: 38*33*30-42 cm; B&agrave;n: 60*43*54-78 cm</p>', 'bàn ghế chống gù kd21', 'bàn ghế chống gù kd21', '1', '2023-02-07 21:43:39', '2023-02-07 23:53:59'),
(4, 'GHẾ NGỒI KIÊM TỦ ĐỒ TAG 01', 'http://127.0.0.1:8000/upload/files/product/p3.jpg', 'tag 1', 4, 2500000, 24, 1900000, 'ghế kiêm tủ đồ', '<p>⭐&nbsp;B&agrave;n ghế điều chỉnh độ cao thấp<br />\r\n⭐&nbsp;Mặt b&agrave;n c&oacute; thể điều chỉnh độ nghi&ecirc;ng từ 0 &ndash; 80 độ<br />\r\n⭐&nbsp;B&agrave;n: 123*64*115-137<br />\r\n⭐&nbsp;M&agrave;u sắc: Hồng/ Xanh<br />\r\n⭐&nbsp;Chất liệu: khung sắt sơn tĩnh điện; mặt ghế, tựa lưng, ngăn b&agrave;n, bọc cạnh b&agrave;n bằng nhựa PP, mặt b&agrave;n gỗ c&ocirc;ng nghiệp<br />\r\n⭐&nbsp;Phần gỗ MDF, th&acirc;n thiện với m&ocirc;i trường, chống ch&aacute;y, xước<br />\r\n⭐&nbsp;Phần ch&acirc;n th&eacute;p carbon độ bền cao gấp 5 lần nhựa thường<br />\r\n⭐&nbsp;Bộ sản phẩm bao gồm 1 b&agrave;n KD19 + 1 ghế K15<br />\r\n⭐&nbsp;Mặt b&agrave;n được phủ một lớp silicon chống l&oacute;a mắt, chống xước c&oacute; thể vẽ l&ecirc;n mặt b&agrave;n dễ d&agrave;ng lau ch&ugrave;i</p>', 'ghế kiêm tủ đồ', 'ghế kiêm tủ đồ', '1', '2023-02-08 00:09:19', '2023-02-08 00:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `seo_link_tags`
--

CREATE TABLE `seo_link_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `rel` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `page_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_meta_tags`
--

CREATE TABLE `seo_meta_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `group` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `default_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_placeholder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visibility` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'page',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_meta_tags`
--

INSERT INTO `seo_meta_tags` (`id`, `name`, `property`, `status`, `group`, `input_type`, `default_value`, `input_placeholder`, `input_label`, `input_info`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 'author', '', 'active', '', 'text', '', '', 'Author of this article/webpage', 'Author of this article/webpage', 'page', NULL, NULL),
(2, 'generator', '', 'active', '', 'text', 'Laravel 5.5', 'e.g. Laravel 5.4', 'Website building Program', 'Name of the program you used to build this website', 'global', NULL, NULL),
(3, '', 'og:locale', 'active', 'og', 'text', 'en_US', 'e.g. en_US', 'Website Language', '', 'global', NULL, NULL),
(4, '', 'og:type', 'active', 'og', 'text', 'article|webpage', 'either article or webpage', 'Page Type', '', 'page', NULL, NULL),
(5, '', 'og:title', 'active', 'og', 'text', '', 'Page title', 'Page Title', 'If blank default page title will be used', 'page', NULL, NULL),
(6, '', 'og:description', 'active', 'og', 'text', '', '', 'Meta description', 'When share to social media this will be shown along with image.', 'page', NULL, NULL),
(7, '', 'og:url', 'active', 'og', 'text', '', 'e.g. www.example.com/page.php', 'Page Url', 'If blank page url will be used', 'page', NULL, NULL),
(8, '', 'og:site_name', 'active', 'og', 'text', '', 'e.g. MyCms', 'Site Name', 'Your site name', 'global', NULL, NULL),
(9, '', 'og:image', 'active', 'og', 'file', '', '', 'Image', 'This image will be used on social media', 'page', NULL, NULL),
(10, '', 'og:image:alt', 'active', 'og', 'text', '', '', 'Image Alt Property', ' If the page specifies an og:image it should specify og:image:alt', 'page', NULL, NULL),
(11, '', 'og:image:width', 'inactive', 'og', 'text', '', '', 'Image Width', 'This image width. Recommended by Facebook', 'page', NULL, NULL),
(12, '', 'og:image:height', 'inactive', 'og', 'text', '', '', 'Image Height', 'This image height. Recommended by Facebook', 'page', NULL, NULL),
(13, '', 'og:video', 'inactive', 'og', 'url', '', '', 'Video URL', 'Video URL.If page have any', 'page', NULL, NULL),
(14, '', 'og:audio', 'inactive', 'og', 'url', '', '', 'Audio URL', 'Audio URL. If page have any', 'page', NULL, NULL),
(15, '', 'fb:admins', 'active', 'og', 'number', '', 'Facebook numeric ID', 'Facebook Admin Id', 'Visit: https://developers.facebook.com/tools/debug/accesstoken to get your id', 'global', NULL, NULL),
(16, '', 'fb:app_id', 'active', 'og', 'number', '', 'Facebook numeric ID', 'Facebook App ID', 'Visit: https://developers.facebook.com/tools/debug/accesstoken to get your id', 'global', NULL, NULL),
(17, '', 'article:publisher', 'inactive', 'article', 'text', '', '', 'Author of this page/post', '', 'page', NULL, NULL),
(18, '', 'article:tag', 'inactive', 'og', 'text', '', 'e.g. Html, Css', ' Article Tags', ' Tag words associated with this article', 'page', NULL, NULL),
(19, '', 'article:section', 'inactive', 'article', 'text', '', '', 'Category of this article', '', 'page', NULL, NULL),
(20, '', 'article:published_time', 'inactive', 'og', 'text', '', 'e.g. 2013-09-16T19:08:47+01:00', 'Article Publication time', 'Format:  2013-09-16T19:08:47+01:00', 'page', NULL, NULL),
(21, '', 'article:modified_time', 'inactive', 'og', 'text', '', 'e.g. 2013-09-16T19:08:47+01:00', 'Article Modification time', 'Format: 2013-09-16T19:08:47+01:00', 'page', NULL, NULL),
(22, 'twitter:card', '', 'active', 'twitter', 'text', 'summary|summary_large_image|app|player', 'e.g. summary_large_image', 'Twitter Card', '', 'page', NULL, NULL),
(23, 'twitter:creator', '', 'active', 'twitter', 'text', '', 'e.g. @tuhinbepari12', 'Twitter account holder', '@username for the content creator / author.', 'global', NULL, NULL),
(24, 'twitter:site', '', 'active', 'twitter', 'text', '', 'e.g. @tuhinbepari12', 'Twitter username', '@username for the website used in the card footer.', 'global', NULL, NULL),
(25, 'twitter:description', '', 'active', 'twitter', 'text', '', '', 'Twitter description', 'If blank page description will be used', 'page', NULL, NULL),
(26, 'twitter:title', '', 'active', 'twitter', 'text', '', '', 'Twitter title', 'If blank page title will be used', 'page', NULL, NULL),
(27, 'twitter:image', '', 'active', 'twitter', 'file', '', '', 'Twitter Image', 'This image will be shown when shared to twitter', 'page', NULL, NULL),
(28, 'google-site-verification', '', 'active', 'webmaster_tools', 'text', '', 'e.g. 46CfjAikO4_0A9rp1...', 'Google Site Verification Token', 'Google Webmaster Tools', 'global', NULL, NULL),
(29, 'msvalidate.01', '', 'active', 'webmaster_tools', 'text', '', 'e.g. F69E1D33598A85...', 'Bing Site Verification Token', 'Bing Webmaster Tools', 'global', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages`
--

CREATE TABLE `seo_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `object` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `object_id` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `robot_index` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'noindex',
  `robot_follow` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'nofollow',
  `canonical_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_source` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_source` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `change_frequency` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'monthly',
  `priority` double NOT NULL DEFAULT 0.5,
  `schema` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `focus_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_page_images`
--

CREATE TABLE `seo_page_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_page_meta_tags`
--

CREATE TABLE `seo_page_meta_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `seo_page_id` int(10) UNSIGNED DEFAULT NULL,
  `seo_meta_tag_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE `seo_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `label`, `key`, `value`, `description`, `status`, `group`, `created_at`, `updated_at`) VALUES
(1, 'Site Title', 'site_title', '', 'Site title must be below 70-80 words', 'active', 'site', NULL, NULL),
(2, 'Robot Index', 'robot_index', '', 'Change global settings for Robot index. \n                If value presents then it will overwrite all of the page robot_index.', 'active', 'site', NULL, NULL),
(3, 'Robot Follow', 'robot_follow', '', 'Change global settings for Robot Follow. \n                If value presents then it will overwrite all of the page robot_follow.', 'active', 'site', NULL, NULL),
(4, 'How frequently the page is likely to change', 'page_changefreq', 'monthly', 'Please note that the value of this tag is considered a hint and not a command', 'active', 'sitemap', NULL, NULL),
(5, 'Priority of this URL', 'page_priority', '0.5', 'The priority of this URL relative to other URLs on your site', 'active', 'sitemap', NULL, NULL),
(6, 'Number of entries per sitemap', 'entries_per_sitemap', '1000', '', 'active', 'sitemap', NULL, NULL),
(7, 'Facebook Page URL', 'facebook_page_url', '', '', 'active', 'social_media_links', NULL, NULL),
(8, 'Facebook Default Image', 'facebook_default_image', '', 'When no image found for a page then this image will be used', 'active', 'facebook', NULL, NULL),
(9, 'Twitter Username', 'twitter_username', '', '', 'active', 'social_media_links', NULL, NULL),
(10, 'Twitter Default Image', 'twitter_default_image', '', 'When no image found for a page then this image will be used', 'active', 'twitter', NULL, NULL),
(11, 'Instagram URL', 'instagram_url', '', '', 'inactive', 'social_media_links', NULL, NULL),
(12, 'LinkedIn URL', 'linkedin_url', '', '', 'inactive', 'social_media_links', NULL, NULL),
(13, 'YouTube URL', 'youtube_url', '', '', 'inactive', 'social_media_links', NULL, NULL),
(14, 'Google+ URL', 'google_plus_url', '', '', 'inactive', 'site', NULL, NULL),
(15, 'Organization or person', 'ownership_type', '', 'Either Person or Organization', 'active', 'ownership', NULL, NULL),
(16, 'Name', 'ownership_name', '', 'Either Person or Organization name', 'active', 'ownership', NULL, NULL),
(17, 'Web Site', 'ownership_url', '', '', 'active', 'ownership', NULL, NULL),
(18, 'Email Address', 'ownership_email', '', '', 'active', 'ownership', NULL, NULL),
(19, 'Address', 'ownership_address', '', 'Physical address of Company', 'active', 'ownership', NULL, NULL),
(20, 'Logo', 'ownership_logo', '', '  URL of a logo that is representative of the organization.', 'active', 'ownership', NULL, NULL),
(21, 'Contact Type Telephone', 'ownership_contact_point_telephone', '', '  URL of a logo that is representative of the organization.', 'active', 'ownership', NULL, NULL),
(22, 'Contact Type', 'ownership_contact_point_contact_type', 'customer service', '', 'active', 'ownership', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin@ommanisoft.com', NULL, '$2y$10$XEpvADq0PIvLdndOhLiLXOxTncDRLKErL43iLmhiC.RPfz8oeQi8i', NULL, '2023-02-07 02:19:43', '2023-02-07 02:19:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_comments`
--
ALTER TABLE `form_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introduces`
--
ALTER TABLE `introduces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_link_tags`
--
ALTER TABLE `seo_link_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_link_tags_page_id_foreign` (`page_id`);

--
-- Indexes for table `seo_meta_tags`
--
ALTER TABLE `seo_meta_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pages`
--
ALTER TABLE `seo_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seo_pages_path_unique` (`path`),
  ADD KEY `seo_pages_object_index` (`object`),
  ADD KEY `seo_pages_object_id_index` (`object_id`),
  ADD KEY `seo_pages_title_index` (`title`),
  ADD KEY `seo_pages_title_source_index` (`title_source`);

--
-- Indexes for table `seo_page_images`
--
ALTER TABLE `seo_page_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_page_images_page_id_foreign` (`page_id`),
  ADD KEY `seo_page_images_src_index` (`src`);

--
-- Indexes for table `seo_page_meta_tags`
--
ALTER TABLE `seo_page_meta_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_page_meta_tags_seo_page_id_foreign` (`seo_page_id`),
  ADD KEY `seo_page_meta_tags_seo_meta_tag_id_foreign` (`seo_meta_tag_id`);

--
-- Indexes for table `seo_settings`
--
ALTER TABLE `seo_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seo_settings_key_unique` (`key`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `form_comments`
--
ALTER TABLE `form_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `introduces`
--
ALTER TABLE `introduces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seo_link_tags`
--
ALTER TABLE `seo_link_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_meta_tags`
--
ALTER TABLE `seo_meta_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `seo_pages`
--
ALTER TABLE `seo_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_page_images`
--
ALTER TABLE `seo_page_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_page_meta_tags`
--
ALTER TABLE `seo_page_meta_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_settings`
--
ALTER TABLE `seo_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seo_link_tags`
--
ALTER TABLE `seo_link_tags`
  ADD CONSTRAINT `seo_link_tags_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `seo_pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seo_page_images`
--
ALTER TABLE `seo_page_images`
  ADD CONSTRAINT `seo_page_images_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `seo_pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seo_page_meta_tags`
--
ALTER TABLE `seo_page_meta_tags`
  ADD CONSTRAINT `seo_page_meta_tags_seo_meta_tag_id_foreign` FOREIGN KEY (`seo_meta_tag_id`) REFERENCES `seo_meta_tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `seo_page_meta_tags_seo_page_id_foreign` FOREIGN KEY (`seo_page_id`) REFERENCES `seo_pages` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
