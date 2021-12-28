-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 28 Ara 2021, 20:44:37
-- Sunucu sürümü: 5.5.68-MariaDB
-- PHP Sürümü: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ahmetbarut_odev`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `cevap_metni` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `question_id` int(11) NOT NULL,
  `like_count` int(11) NOT NULL DEFAULT '0',
  `dislike_count` int(11) NOT NULL DEFAULT '0',
  `kullanici_soyadi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `cevap_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `answer`
--

INSERT INTO `answer` (`id`, `cevap_metni`, `kullanici_adi`, `question_id`, `like_count`, `dislike_count`, `kullanici_soyadi`, `cevap_tarihi`) VALUES
(23, 'Elem', 'Aa', 0, 0, 0, 'BB', '2021-12-27 18:38:57'),
(24, 'Elem', 'Aa', 0, 0, 0, 'BB', '2021-12-27 18:40:27'),
(25, 'Elem', 'Aa', 0, 0, 0, 'BB', '2021-12-27 18:40:30'),
(26, 'Elem', 'Aa', 64, 0, 0, 'BB', '2021-12-27 18:48:08'),
(27, 'Elem', 'Aa', 64, 0, 0, 'ddBB', '2021-12-27 18:55:22'),
(28, 'Elem', 'Aa22', 64, 0, 0, 'ddBB', '2021-12-27 18:55:34'),
(29, 'asdsad', 'asdasdasd', 64, 0, 0, 'asdasdas', '2021-12-27 18:56:07'),
(30, 'jnjıonıkl', 'kjnkjnk', 43, 0, 0, 'kjnkjnj', '2021-12-27 20:41:52'),
(31, 'sadasd', 'asdasd', 47, 0, 0, 'asdasd', '2021-12-27 21:40:29'),
(36, 'merhba', 'asdasd', 69, 4, 2, 'asdasd', '2021-12-28 17:18:06'),
(38, 'dasdas', 'dasdasdasdas', 56, 0, 0, 'dasdasd', '2021-12-28 17:42:37');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `authentication`
--

CREATE TABLE `authentication` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `authentication`
--

INSERT INTO `authentication` (`id`, `kullanici_adi`, `email`, `password`) VALUES
(1, 'Furkan ', 'furkanayaz.dev@gmail.com', '123456'),
(2, 'Murat', 'muratakdeniz.145@gmail.com', '123456'),
(3, 'hurşit', 'hursitwww@outlook.com', '123456'),
(4, 'Emircan', 'emircnayyildiz@gmail.com', '123456'),
(5, 'Ahmet Emir', 'aedemirtas00@gmail.com', '123456'),
(6, 'murat', 'muratakdeniz.145@gmail.com', '123456'),
(7, 'fe', 'df', 'fd'),
(8, '2129090518', 'ahmetb.@gma.co', '7b3ff33f66a175b61808b06de7f7e5eb'),
(9, '2129090518', 'ahmetb.@gma.co', '7b3ff33f66a175b61808b06de7f7e5eb'),
(10, 'furkanayaz', 'furkan.yz@outlook.com', 'e10adc3949ba59abbe56e057f20f883e'),
(11, 'asdasd', 'furkan.yz2@outlook.com', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'naber', 'naber@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'kkjsdnaskjd', 'askjdnaskjd@gmail.com', '056f32ee5cf49404607e368bd8d3f2af'),
(14, 'furkanayaz69', 'furkanayaz69@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(15, 'kessesini', 'kessesini@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(16, 'test', 'ahmet@ahmet.co', '7b3ff33f66a175b61808b06de7f7e5eb'),
(17, 'furkanyz', 'furkanyz@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e'),
(18, 'test', 'ahmetbarut588@gmail.com', '7b3ff33f66a175b61808b06de7f7e5eb'),
(19, 'hursitwww', 'hursitwww@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(20, 'hursitarslan', 'hursitarslan@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(21, 'naber', 'naber@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(7, 'deneme', 'deneme refresh'),
(8, 'deneme', 'deneme refresh'),
(9, 'deneme', 'deneme refresh'),
(11, 'debene', 'dasdsadasd'),
(12, 'debene', 'dasdsadasd'),
(13, 'debene', 'dasdsadasd'),
(14, 'debene', 'dasdsadasd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `like_table`
--

CREATE TABLE `like_table` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `like_date` timestamp NULL DEFAULT NULL,
  `soru_id` int(11) NOT NULL,
  `begenme_id` int(11) DEFAULT '1',
  `begenme_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `like_table`
--

INSERT INTO `like_table` (`id`, `kullanici_id`, `like_date`, `soru_id`, `begenme_id`, `begenme_tarihi`) VALUES
(1, 1, NULL, 36, 0, '2021-12-27 13:47:31'),
(2, 1, NULL, 36, 1, '2021-12-27 13:47:32'),
(3, 1, NULL, 36, 1, '2021-12-27 13:48:02'),
(4, 1, NULL, 36, 1, '2021-12-27 13:48:03'),
(5, 1, NULL, 36, 1, '2021-12-27 13:48:04'),
(6, 1, NULL, 43, 1, '2021-12-27 13:48:05'),
(7, 1, NULL, 44, 1, '2021-12-27 13:48:06'),
(8, 1, NULL, 44, 1, '2021-12-27 13:48:07'),
(9, 1, NULL, 44, 1, '2021-12-27 13:48:08'),
(10, 1, NULL, 45, 1, '2021-12-27 13:48:08'),
(11, 1, NULL, 44, 1, '2021-12-27 13:48:10'),
(12, 1, NULL, 44, 1, '2021-12-27 13:48:11'),
(13, 1, NULL, 47, 1, '2021-12-27 13:48:13'),
(14, 1, NULL, 48, 1, '2021-12-27 13:48:14'),
(15, 1, NULL, 46, 1, '2021-12-27 13:48:15'),
(16, 1, NULL, 46, 1, '2021-12-27 13:48:16'),
(17, 1, NULL, 46, 1, '2021-12-27 13:48:17'),
(18, 1, NULL, 46, 1, '2021-12-27 13:48:17'),
(19, 1, NULL, 46, 1, '2021-12-27 13:48:18'),
(20, 1, NULL, 46, 1, '2021-12-27 13:48:20'),
(21, 1, NULL, 47, 1, '2021-12-27 13:50:52'),
(22, 1, NULL, 47, 1, '2021-12-27 13:50:53'),
(23, 1, NULL, 47, 1, '2021-12-27 13:50:54'),
(24, 1, NULL, 47, 1, '2021-12-27 13:50:54'),
(25, 1, NULL, 47, 1, '2021-12-27 13:50:55'),
(26, 1, NULL, 47, 1, '2021-12-27 13:50:55'),
(27, 1, NULL, 47, 1, '2021-12-27 13:50:56'),
(28, 1, NULL, 47, 1, '2021-12-27 13:50:56'),
(29, 1, NULL, 47, 1, '2021-12-27 13:50:56'),
(30, 1, NULL, 47, 1, '2021-12-27 13:50:57'),
(31, 1, NULL, 47, 1, '2021-12-27 13:50:57'),
(32, 1, NULL, 47, 1, '2021-12-27 13:50:57'),
(33, 1, NULL, 47, 1, '2021-12-27 13:50:57'),
(34, 1, NULL, 36, 1, '2021-12-27 14:19:56'),
(35, 1, NULL, 36, 1, '2021-12-27 14:19:57'),
(36, 1, NULL, 36, 1, '2021-12-27 14:20:37'),
(37, 1, NULL, 36, 1, '2021-12-27 14:20:37'),
(38, 1, NULL, 36, 1, '2021-12-27 14:21:07'),
(39, 1, NULL, 43, 1, '2021-12-27 14:21:08'),
(40, 1, NULL, 45, 1, '2021-12-27 14:21:09'),
(41, 1, NULL, 36, 1, '2021-12-27 14:21:10'),
(42, 1, NULL, 36, 1, '2021-12-27 14:21:10'),
(43, 1, NULL, 36, 1, '2021-12-27 14:21:11'),
(44, 1, NULL, 36, 1, '2021-12-27 14:21:17'),
(45, 1, NULL, 36, 1, '2021-12-27 14:21:18'),
(46, 1, NULL, 36, 0, '2021-12-27 14:22:09'),
(47, 1, NULL, 36, 1, '2021-12-27 14:22:10'),
(48, 1, NULL, 43, 1, '2021-12-27 14:22:12'),
(49, 1, NULL, 36, 1, '2021-12-27 14:28:37'),
(50, 1, NULL, 36, 0, '2021-12-27 14:34:00'),
(51, 1, NULL, 36, 0, '2021-12-27 14:34:01'),
(52, 1, NULL, 36, 0, '2021-12-27 14:34:04'),
(53, 1, NULL, 36, 0, '2021-12-27 14:34:11'),
(54, 1, NULL, 36, 0, '2021-12-27 14:34:12'),
(55, 1, NULL, 36, 0, '2021-12-27 14:34:14'),
(56, 1, NULL, 43, 0, '2021-12-27 14:34:15'),
(57, 1, NULL, 43, 0, '2021-12-27 14:34:18'),
(58, 1, NULL, 36, 0, '2021-12-27 14:34:42'),
(59, 1, NULL, 36, 1, '2021-12-27 14:34:59'),
(60, 1, NULL, 36, 1, '2021-12-27 14:35:01'),
(61, 1, NULL, 43, 1, '2021-12-27 14:35:01'),
(62, 1, NULL, 43, 1, '2021-12-27 14:35:02'),
(63, 1, NULL, 43, 1, '2021-12-27 14:35:03'),
(64, 1, NULL, 43, 1, '2021-12-27 14:35:03'),
(65, 1, NULL, 43, 1, '2021-12-27 14:35:04'),
(66, 1, NULL, 43, 1, '2021-12-27 14:35:05'),
(67, 1, NULL, 43, 1, '2021-12-27 14:35:05'),
(68, 1, NULL, 43, 1, '2021-12-27 14:35:05'),
(69, 1, NULL, 43, 1, '2021-12-27 14:35:06'),
(70, 1, NULL, 43, 1, '2021-12-27 14:35:07'),
(71, 1, NULL, 43, 1, '2021-12-27 14:35:07'),
(72, 1, NULL, 43, 1, '2021-12-27 14:35:08'),
(73, 1, NULL, 43, 1, '2021-12-27 14:35:08'),
(74, 1, NULL, 43, 1, '2021-12-27 14:35:09'),
(75, 1, NULL, 43, 1, '2021-12-27 14:35:10'),
(76, 1, NULL, 44, 1, '2021-12-27 14:38:22'),
(77, 1, NULL, 45, 1, '2021-12-27 14:38:24'),
(78, 1, NULL, 44, 1, '2021-12-27 14:38:25'),
(79, 1, NULL, 45, 1, '2021-12-27 14:38:26'),
(80, 1, NULL, 63, 1, '2021-12-27 15:39:25'),
(81, 1, NULL, 63, 1, '2021-12-27 15:39:25'),
(82, 1, NULL, 1, 1, '2021-12-27 15:40:04'),
(83, 1, NULL, 1, 1, '2021-12-27 15:40:06'),
(84, 1, NULL, 13, 1, '2021-12-27 15:50:02'),
(85, 1, NULL, 13, 1, '2021-12-27 15:50:03'),
(86, 1, NULL, 13, 1, '2021-12-27 15:50:04'),
(87, 1, NULL, 13, 0, '2021-12-27 15:50:06'),
(88, 1, NULL, 13, 1, '2021-12-27 15:50:07'),
(89, 1, NULL, 13, 1, '2021-12-27 15:50:08'),
(90, 1, NULL, 13, 1, '2021-12-27 15:51:37'),
(91, 1, NULL, 13, 1, '2021-12-27 15:51:38'),
(92, 1, NULL, 13, 1, '2021-12-27 15:51:40'),
(93, 1, NULL, 13, 1, '2021-12-27 15:51:59'),
(94, 1, NULL, 13, 0, '2021-12-27 15:57:12'),
(95, 1, NULL, 13, 0, '2021-12-27 15:57:14'),
(96, 1, NULL, 12, 1, '2021-12-27 16:04:52'),
(97, 1, NULL, 43, 1, '2021-12-27 16:12:47'),
(98, 1, NULL, 43, 0, '2021-12-27 16:12:49'),
(99, 1, NULL, 36, 1, '2021-12-27 19:08:36'),
(100, 1, NULL, 64, 1, '2021-12-27 19:08:38'),
(101, 1, NULL, 64, 1, '2021-12-27 19:08:39'),
(102, 1, NULL, 64, 1, '2021-12-27 19:08:40'),
(103, 1, NULL, 64, 1, '2021-12-27 19:08:41'),
(104, 1, NULL, 43, 1, '2021-12-27 19:08:42'),
(105, 1, NULL, 43, 0, '2021-12-27 19:08:43'),
(106, 1, NULL, 36, 1, '2021-12-27 19:08:50'),
(107, 1, NULL, 36, 1, '2021-12-27 19:08:50'),
(108, 1, NULL, 36, 1, '2021-12-27 19:08:51'),
(109, 1, NULL, 36, 1, '2021-12-27 19:08:51'),
(110, 1, NULL, 36, 1, '2021-12-27 19:08:51'),
(111, 1, NULL, 36, 1, '2021-12-27 19:08:52'),
(112, 1, NULL, 36, 1, '2021-12-27 19:08:52'),
(113, 1, NULL, 36, 1, '2021-12-27 19:08:53'),
(114, 1, NULL, 36, 1, '2021-12-27 19:08:53'),
(115, 1, NULL, 43, 1, '2021-12-27 19:08:54'),
(116, 1, NULL, 64, 1, '2021-12-27 19:17:05'),
(117, 1, NULL, 64, 0, '2021-12-27 19:17:07'),
(118, 1, NULL, 64, 0, '2021-12-27 19:17:08'),
(119, 14, NULL, 64, 1, '2021-12-27 20:45:33'),
(120, 14, NULL, 64, 1, '2021-12-27 20:45:34'),
(121, 14, NULL, 64, 1, '2021-12-27 20:45:35'),
(122, 14, NULL, 64, 1, '2021-12-27 20:45:36'),
(123, 14, NULL, 64, 1, '2021-12-27 20:45:36'),
(124, 14, NULL, 64, 1, '2021-12-27 20:45:37'),
(125, 12, NULL, 46, 1, '2021-12-27 20:48:47'),
(126, 12, NULL, 46, 1, '2021-12-27 20:48:58'),
(127, 18, NULL, 64, 1, '2021-12-27 21:13:14'),
(128, 18, NULL, 64, 1, '2021-12-27 21:13:18'),
(129, 18, NULL, 64, 1, '2021-12-27 21:20:45'),
(130, 18, NULL, 64, 1, '2021-12-27 21:20:47'),
(131, 18, NULL, 64, 1, '2021-12-27 21:20:50'),
(132, 18, NULL, 64, 1, '2021-12-27 21:20:51'),
(133, 18, NULL, 43, 1, '2021-12-27 21:20:53'),
(134, 18, NULL, 43, 1, '2021-12-27 21:20:54'),
(135, 18, NULL, 64, 1, '2021-12-27 21:21:13'),
(136, 18, NULL, 64, 1, '2021-12-27 21:28:09'),
(137, 18, NULL, 64, 1, '2021-12-27 21:28:10'),
(138, 18, NULL, 64, 1, '2021-12-27 21:28:10'),
(139, 18, NULL, 64, 1, '2021-12-27 21:28:11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Tablo döküm verisi `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'odevgrubu', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"odevgrubu\",\"phpmyadmin\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"@TABLE@ tablosunun yapısı\",\"latex_structure_continued_caption\":\"@TABLE@ tablosunun yapısı (devam eden)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"@TABLE@ tablosunun içeriği\",\"latex_data_continued_caption\":\"@TABLE@ tablosunun içeriği (devam eden)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Tablo döküm verisi `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"odevgrubu\",\"table\":\"authentication\"},{\"db\":\"odevgrubu\",\"table\":\"like_table\"},{\"db\":\"odevgrubu\",\"table\":\"questions\"},{\"db\":\"odevgrubu\",\"table\":\"answer\"},{\"db\":\"ybs2\",\"table\":\"likes\"},{\"db\":\"ybs2\",\"table\":\"user\"},{\"db\":\"ybs2\",\"table\":\"question\"},{\"db\":\"odevgrubu\",\"table\":\"question\"},{\"db\":\"phpmyadmin\",\"table\":\"pma__central_columns\"}]');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Tablo döküm verisi `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-12-26 18:00:36', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"tr\"}');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `q_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `q_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `soru_basligi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '1',
  `soru_metni` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_soyadi` varchar(100) CHARACTER SET utf32 COLLATE utf32_turkish_ci NOT NULL,
  `sorunun_olusturuldugu_tarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `liked` int(15) NOT NULL DEFAULT '0',
  `dislike` int(15) NOT NULL DEFAULT '0',
  `begenme_durum` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `questions`
--

INSERT INTO `questions` (`id`, `soru_basligi`, `category_id`, `soru_metni`, `kullanici_adi`, `kullanici_soyadi`, `sorunun_olusturuldugu_tarihi`, `liked`, `dislike`, `begenme_durum`) VALUES
(50, 'Tarih', 1, 'Yedi harikalar nelerdir', 'Murat', 'Akdeniz', '2021-12-26 14:13:15', 7, 3, 0),
(51, 'Tarih', 1, 'Yedi harikalar nelerdirrrr', 'Murat', 'Akdeniz', '2021-12-26 14:33:11', 8, 0, 0),
(52, 'Tarih', 1, 'f', 'f', 'm', '2021-12-26 14:48:14', 0, 0, 0),
(53, 'Tarih', 1, 'eeg', 'd', 'b', '2021-12-26 14:49:49', 0, 10, 0),
(54, 'Tarih', 1, 'he', 'e', 'e', '2021-12-26 16:21:09', 0, 0, 0),
(55, 'Tarih', 1, 'r', 'r', 'r', '2021-12-26 16:31:34', 0, 0, 0),
(56, 'x', 1, 'x', 'x', 'x', '2021-12-26 16:59:35', 0, 0, 0),
(57, 'Tarih', 1, 'ne', 'b', 'db', '2021-12-26 17:00:44', 0, 0, 0),
(58, 'Tarih', 1, 'b', 'bd', 'bd', '2021-12-26 17:03:09', 0, 0, 0),
(59, 'Tarih', 1, '123456', 'Murat', 'Akdeniz', '2021-12-26 18:32:52', 0, 0, 0),
(60, 'Tarih', 1, '', 's', '', '2021-12-26 18:42:26', 0, 0, 0),
(61, 'Tarih', 1, 'hh', 'hh', 'hh', '2021-12-26 19:20:27', 0, 0, 0),
(62, '', 1, '', '', '', '2021-12-27 15:26:10', 0, 0, 0),
(65, 'Lorem ipsum dolor', 12, 'sit amet bla bla', 'Ahmet', 'barut', '2021-12-27 16:04:47', 0, 0, 0),
(66, '', 0, '', '', '', '2021-12-27 19:14:41', 0, 0, 0),
(67, '', 0, '', '', '', '2021-12-27 19:14:49', 0, 0, 0),
(68, 'asdsdas', 9, 'adasda', 'asdasdas', 'asdasdasd', '2021-12-27 19:17:03', 0, 0, 0),
(69, 'kjnkjn', 8, 'kklm', 'asdasd', 'asdasd', '2021-12-27 19:46:55', 0, 0, 0),
(70, '', 0, '', '', '', '2021-12-27 21:03:07', 0, 0, 0),
(71, '', 0, '', '', '', '2021-12-27 21:03:53', 0, 0, 0),
(72, '', 0, '', '', '', '2021-12-27 21:04:38', 0, 0, 0),
(73, '', 0, '', '', '', '2021-12-27 21:06:12', 0, 0, 0),
(74, '', 0, '', '', '', '2021-12-27 21:07:05', 0, 0, 0),
(75, '', 0, '', '', '', '2021-12-27 21:07:26', 0, 0, 0),
(76, '', 0, '', '', '', '2021-12-27 21:09:24', 0, 0, 0),
(77, '', 0, '', '', '', '2021-12-27 21:22:28', 0, 0, 0),
(78, '', 0, '', '', '', '2021-12-27 21:22:50', 0, 0, 0),
(79, '', 0, '', '', '', '2021-12-27 21:25:06', 0, 0, 0),
(80, '', 0, '', '', '', '2021-12-27 21:26:36', 0, 0, 0),
(81, '', 0, '', '', '', '2021-12-27 21:29:07', 0, 0, 0),
(82, '', 0, '', '', '', '2021-12-27 21:32:57', 0, 0, 0),
(83, '', 0, '', '', '', '2021-12-27 21:41:57', 0, 0, 0),
(84, '', 0, '', '', '', '2021-12-27 21:42:56', 0, 0, 0),
(85, '', 0, '', '', '', '2021-12-28 16:31:57', 0, 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `counter` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `views`
--

INSERT INTO `views` (`id`, `question_id`, `counter`) VALUES
(11, 36, 23),
(12, 64, 22),
(13, 45, 1),
(14, 43, 4),
(15, 63, 1),
(16, 47, 1),
(17, 51, 1),
(18, 69, 8),
(19, 56, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `authentication`
--
ALTER TABLE `authentication`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `like_table`
--
ALTER TABLE `like_table`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Tablo için indeksler `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Tablo için indeksler `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Tablo için indeksler `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Tablo için indeksler `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Tablo için indeksler `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Tablo için indeksler `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Tablo için indeksler `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Tablo için indeksler `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Tablo için indeksler `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Tablo için indeksler `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Tablo için indeksler `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Tablo için indeksler `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Tablo için indeksler `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Tablo için indeksler `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Tablo için indeksler `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Tablo için indeksler `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Tablo için indeksler `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Tablo için indeksler `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Tablo için AUTO_INCREMENT değeri `authentication`
--
ALTER TABLE `authentication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `like_table`
--
ALTER TABLE `like_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- Tablo için AUTO_INCREMENT değeri `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Tablo için AUTO_INCREMENT değeri `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
