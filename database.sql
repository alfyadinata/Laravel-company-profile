-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 12:31 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelancer`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `images`, `status`, `url`, `category_id`, `created_at`, `updated_at`) VALUES
(18, 'Kalahkan Argentina, Brasil ke Final Copa America 2019', '<p>Dani Alves melakukan penetrasi dan melewati dua pemain Argentina sebelum memberikan umpan kepada Roberto Firmino. Firmino lalu melepaskan umpan ke muka gawang.<br />\r\n<br />\r\n<br />\r\nGabriel Jesus berdiri bebas dan dengan mudah menceploskan bola ke dalam gawang Argentina.<br />\r\n<br />\r\nSetelah ketinggalan 0-1, Argentina lebih agresif memberikan tekanan pada Brasil. Di babak pertama, Argentina punya peluang menyamakan kedudukan lewat Sergio Aguero. Namun sundulan Aguero memanfaatkan umpan Lionel Messi hanya menerpa mistar gawang.</p>\r\n\r\n<p><img alt=\"Lionel Messi beberapa kali memiliki peluang untuk mencetak gol.\" src=\"https://akcdn.detik.net.id/community/media/visual/2019/07/03/25e781e4-8b67-41c8-8168-948ac26d083e_169.jpeg?w=620\" /></p>\r\n\r\n<p>Memasuki babak kedua, Brasil dan Argentina saling bertukar serangan. Tempo pertandingan pun makin tinggi.<br />\r\n<br />\r\nBrasil punya peluang menggandakan keunggulan lewat Philippe Coutinho namun tendangan Coutinho melambung jauh.<br />\r\n<br />\r\nLionel Messi berhasil melakukan tusukan berbahaya di menit ke-57 yang berujung pada tendangan kaki kiri. Namun tendangan Messi hanya membuat bola membentur tiang gawang.<br />\r\n<br />\r\nSepuluh menit berselang, tendangan bebas Messi ke pojok kanan gawang bisa ditangkap dengan sempurna oleh Alisson Becker.<br />\r\n&nbsp;</p>', 'blogs/lSb0SMkQYAiWEdrSTgSfqq2mbbZX6UvSkOUTsTkF.jpeg', 'show', 'kalahkan-argentina-brasil-ke-final-copa-america-2019', 1, '2019-07-02 23:16:07', '2019-07-02 23:16:07'),
(19, 'Facebook Dukung Aturan Data Pribadi Diterapkan di Produknya', '<p>Produk Facebook ini artinya mencakup platform media sosial Facebook dan Instagram, platform perpesanan WhatsApp, hingga layanan uang kripto Calibra.&nbsp;<br />\r\n<br />\r\nKepala Kebijakan Publik Facebook Indonesia Ruben Hattari menjelaskan RUU PDP penting untuk meningkatkan kepercayaan masyarakat Indonesia ketika menggunakan sebuah teknologi.&nbsp;</p>\r\n\r\n<p>&quot;Oleh karena itu kami memandang pentingnya menjaga privasi dam keamanan sekaligus mengimplementasikan di seluruh lapisan produk kami,&quot; kata Ruben dalam diskusi &#39;Melindungi Privasi Data di Indonesia&#39;, di Jakarta Selatan, Rabu (3/7).<br />\r\n<br />\r\nRuben menjelaskan kepercayaan masyarakat terhadap teknologi penting apabila sebuah negara hendak mengimplementasikan sebuah teknologi dengan cepat dan merata.&nbsp;<br />\r\n<br />\r\n&quot;Teknologi semakin canggih, akses jaringan semakin mudah dan masyarakat melek teknologi. Harus bisa terus meningkatkan kepercayaan mereka dengan semua jenis teknologi. Saya lihat pengguna teknologi apapun harus punya rasa kepercayaan,&quot; kata Ruben .</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ruben mengatakan kepercayaan masyarakat terbentuk dari dua hal. Hal pertama adalah kepercayaan terhadap perusahaaan teknologi yang mengelola data milik masyarakat. Hal kedua adalah masyarakat melihat peran pemerintah dalam melindungi privasi data masyarakat .<br />\r\n<br />\r\n&quot;Kepercayaan ada dua arah. Pertama kepercayaan tehadap perusahaan teknologi, seperti menjaga privasi data dan secara beretika. Kedua masyarakat dapat melihat peran pemerintah untuk melindungi hak-hak privasinya,&quot;ujar Ruben.&nbsp;<br />\r\n<br />\r\nRuben mengatakan Facebook mendorong agar RUU PDP tak hanya mengontrol pengelolaan data, tapi juga bisa sesuai dengan standar internasional dan praktek terbaik (best practices).</p>', 'blogs/83Ks9Df6Lkn0CH1isfZVS5rLwr4GJO7ojpnAGaBf.jpeg', 'show', 'facebook-dukung-aturan-data-pribadi-diterapkan-di-produknya', 2, '2019-07-02 23:18:18', '2019-07-02 23:18:39'),
(20, 'Pesta Imajinasi dalam Debut Desainer Anyar Schiaparelli', '<p>Paris, CNN Indonesia --&nbsp;<strong><a href=\"https://www.cnnindonesia.com/tag/schiaparelli\" target=\"_blank\">Elsa Schiaparelli</a></strong>&nbsp;menjadi salah satu desainer paling berpengaruh dan terkenal dalam dunia&nbsp;<a href=\"https://www.cnnindonesia.com/tag/fashion\" target=\"_blank\"><strong>fesyen&nbsp;</strong></a>pada era 1930-an. Caranya menerjemahkan seni ke dalam konstruksi pakaian tak main-main bikin mulut ternganga lantaran takjub.<br />\r\n<br />\r\nPendekatan Schiaparelli dalam menggunakan seni dan sensibilitasnya pada&nbsp;<em>zeitgeist</em>&nbsp;atau tanda-tanda zaman ini-lah yang menginspirasi Daniel Roseberry. Perancang anyar untuk rumah mode Schiaparelli ini mempresentasikan koleksi perdananya untuk musim dingin 2019/2020 pada gelaran Paris Couture Week. Seperti Elsa Schiaparelli, koleksi Roseberry buat mata tercengang.<br />\r\n<br />\r\nKendati sama-sama bikin tercengang, namun Roseberry mengaku tak terlalu banyak mempelajari arsip dan koleksi lama Schiaparelli.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Saya tentu saja mengenal beberapa&nbsp;<em>looks</em>&nbsp;Schiaparelli yang ikonik. Namun, saya tidak ingin terlalu jauh melihat ke belakang. Saya ingin memulai dengan sesuatu yang baru,&quot; ujar Roseberry kepada&nbsp;<em>CNNIndonesia.com</em>.<br />\r\n<br />\r\nRoseberry menggebrak presentasi dengan kehadirannya di tengah&nbsp;<em>runway</em>. Dia duduk di atas kursi dengan meja di depannya. Titik itu menjadi tempat Roseberry menggurat sketsa untuk masing-masing&nbsp;<em>look</em>&nbsp;secara simultan.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://akcdn.detik.net.id/community/media/visual/2019/07/02/d7c6b98f-de27-44c3-9915-1ece7cc5d75f_169.jpeg?w=620\" /></p>\r\n\r\n<p>Bukan tanpa alasan aksi itu dilakoni Roseberry. Kehadirannya menggambar di tengah&nbsp;<em>runway</em>&nbsp;dianggapnya penting agar para tamu yang hadir mengetahui proses pembuatan&nbsp;<em>haute couture</em>. Dengan rata-rata 15 detik untuk setiap tampilan, Roseberry dengan sigap menggambar siluet berwarna dengan krayon Gioconda miliknya.<br />\r\n<br />\r\nRoseberry menghadirkan jukstaposisi warna yang kontras dan material dengan tekstur berbeda. Penggabungan kulit buaya dengan sutera atau kulit biawak dengan satin, hingga sebuah atasan sutera&nbsp;<em>faille</em>&nbsp;bertabur 80 ribu kristal. Rentetan tampilan yang &#39;menyalak&#39; itu membuat seluruh isi ruang terasa bersemangat.</p>\r\n\r\n<p>Roseberry membagi presentasinya menjadi tiga bagian: The Day, The Night, dan The Dream. Dia mengeluarkan deretan tampilan dengan spektrum yang panjang, dari sangat kasual hingga nyaris&nbsp;<em>unwearable</em>.&nbsp;<br />\r\n<br />\r\nTengok saja dua tampilan terakhir dalam presentasi: gaun sutera&nbsp;<em>faille</em>&nbsp;berwarna merah muda berhias sulaman serta gaun putih terinspirasi dari karya pematung Jack Whitten yang tampak seperti kepulan asap berwarna merah muda dan gumpalan awan.<br />\r\n<br />\r\nSiluet dan tampilan dalam koleksi ini barangkali terlihat baru. Namun, jika ditilik lebih dalam, banyak detail-detail surealis yang dihadirkan. Mulai dari sebuah&nbsp;<em>bustier</em>bertabur payet berbentuk kepik merah, setelan jas hitam dengan payet tiga dimensi berbentuk lipstik yang panjang berayun, hingga sarung tangan lengkap dengan hiasan yang menghasilkan efek&nbsp;<em>trompe-l&#39;oeil</em>&nbsp;pada jari dengan cat kuku.<br />\r\n<br />\r\n<img src=\"https://akcdn.detik.net.id/community/media/visual/2019/07/02/50c54ef4-26ce-410f-937f-5c0b7ee8c8a2_169.jpeg?w=620\" /></p>\r\n\r\n<p>Mata yang memicing tak berhenti sampai di sana. Roseberry juga menghadirkan gaun berwarna kuning kunyit berbahan kulit burung unta yang khas dengan bintik-bintik folikel berhias payet dan bulu.<br />\r\n<br />\r\nSemuanya penuh imajinasi, menandai bahwa Roseberry telah menjalani proses yang sangat rumit dan memakan waktu.</p>', 'blogs/Eqj45cL0CWfIVGTihJSj1OC3dMn1q3whqvJdX60b.jpeg', 'show', 'pesta-imajinasi-dalam-debut-desainer-anyar-schiaparelli', 3, '2019-07-02 23:20:56', '2019-07-02 23:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Internasional', '2019-01-12 17:00:00', '2019-01-13 06:01:16'),
(2, 'Technology', '2019-01-12 17:00:00', '2019-01-13 06:00:06'),
(3, 'Fashion & Style', '2019-01-12 17:00:00', '2019-01-13 06:00:48'),
(4, 'Sains', '2019-01-12 17:00:00', '2019-01-13 06:00:32'),
(5, 'Health', '2019-01-12 17:00:00', '2019-01-13 06:01:07'),
(6, 'Politic', '2019-07-03 08:41:48', '2019-07-03 08:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slogan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slogan_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `why_choose_us` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ig` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tweet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `maps` text COLLATE utf8_unicode_ci,
  `captcha` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `company_name`, `meta_keyword`, `meta_author`, `slogan`, `slogan_description`, `why_choose_us`, `about`, `meta_description`, `logo`, `address`, `banner_1`, `banner_2`, `fb`, `ig`, `tweet`, `fax`, `phone`, `email`, `maps`, `captcha`, `created_at`, `updated_at`) VALUES
(1, 'PT Dreamer Indonesia', 'Molestie at elementum eu facilisis sed odio.', 'Alfy Adinata', 'WE ARE CREATIVE AGENCY', 'Morbi mattis felis at nunc. Duis viverra diam non justo. In nisl. Nullam sit amet magna in magna gravida vehicula. Mauris tincidunt sem sed arcu. Nunc posuere.', 'Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris. Ultrices sagittis orci a scelerisque purus.', 'Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris. Ultrices sagittis orci a scelerisque purus.Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris. Ultrices sagittis orci a scelerisque purus.', 'Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris. Ultrices sagittis orci a scelerisque purus.', 'config/JbXtqHVTFWWLhyVYrDyd0dLT6EJkL8Rw0RqyNAxC.png', 'Bogor, East Java', 'config/7DqbFZ61FCgLTr95f8muS5pqHCM6L05uA6Etv6f4.jpeg', 'config/p4OMFAjBgWF5jpz5niZxeHdrvJmxWB2sqo3vgmLh.jpeg', 'https://www.facebook.com/alfy.adinata.98', 'https://www.instagram.com/alfyadinata_', 'https://twitter.com/tweeter', '021-8328128', '08123318737', 'alfymuhammad7@gmail.com', NULL, NULL, NULL, '2019-07-08 04:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email`, `name`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sad@ff.aa', 'alfy', 'asds', 'asd', '2019-01-13 17:17:47', '2019-01-13 17:17:47'),
(5, 'hilman@gmail.com', 'aku', 'Price Question', '{\r\n  temperature: \'212\',\r\n  scale: \'f\'\r\n}', '2019-07-03 08:36:29', '2019-07-03 08:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_05_014909_create_categories_table', 1),
(4, '2019_01_05_044714_create_services_table', 1),
(5, '2019_01_05_125206_create_portfolios_table', 1),
(6, '2019_01_06_144432_create_blogs_table', 1),
(10, '2019_01_08_042512_create_configs_table', 2),
(11, '2018_03_12_104620_create_menus_table', 3),
(12, '2018_03_12_104633_create_menu_items_table', 3),
(13, '2019_01_12_113329_create_menus_table', 4),
(14, '2019_01_13_024639_create_menus_table', 5),
(15, '2019_01_13_090907_create_menus_table', 6),
(16, '2019_01_13_091005_create_submenus_table', 6),
(17, '2019_01_13_130732_create_testimonis_table', 7),
(18, '2019_01_13_144511_create_emails_table', 8),
(19, '2019_07_06_075241_create_visitors_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `category`, `status`, `images`, `created_at`, `updated_at`) VALUES
(2, 'Lord kane', 'hoho', 'show', 'portfolio/H3MTW3nNqpGAdZTD6VQlI4NuYj9rKwakO4Zig5yI.jpeg', '2019-01-13 09:09:52', '2019-01-13 09:11:53'),
(3, 'ROZAGINA FLORIST', 'Technology', 'show', 'portfolio/IWx5ZtZlULXvhaW7eYft8YF0XcGOsVFxc8GHhX5k.jpeg', '2019-01-13 09:12:30', '2019-01-13 09:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `status`, `icon`, `created_at`, `updated_at`) VALUES
(3, 'Graphic Design', 'no one way can make me lose', 'show', 'fa fa-rocket', '2019-01-10 06:17:23', '2019-01-13 09:20:11'),
(5, 'Creative Idea', 'Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.', 'show', 'fa fa-cogs', '2019-01-13 09:19:08', '2019-01-13 09:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jobs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `name`, `jobs`, `description`, `avatar`, `status`, `created_at`, `updated_at`) VALUES
(2, 'alfyadinata', 'Manager at Filosofi ID', 'terima kasih, sangat membantu sekali !', 'male', 'show', '2019-01-13 06:48:45', '2019-02-02 05:43:01'),
(3, 'Angela J.', 'Designer', 'this is very a simple app:D thanks !', 'female', 'show', '2019-01-13 06:49:54', '2019-02-02 05:43:17'),
(4, 'Jhon', 'CEO FOUNDER at PT Dreamer.id', 'wow, very nice !', 'male', 'show', '2019-04-12 08:57:39', '2019-04-12 08:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `isAdmin`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alfyadinata', 1, 'alfymuhammad7@gmail.com', '$2y$10$ZKPBJc5wu/GAnYUCSi8aJOOZG2YRpqSptZeCTa85NK2u69APM7eYe', 'WB89FfcF3eKiC2rtBAqI0OXniWa5UFOO4f3yLBeLeTQltAggvGCa3x0XgixW', '2019-01-14 06:41:06', '2019-06-30 01:03:38'),
(15, 'Administrator', NULL, 'admin@gmail.com', '$2y$10$ibk1P4etWVn1wuDrOJoXsewS.YWxg2.Qix7i0yAb8DtDn6647DSu.', NULL, '2019-04-12 08:36:54', '2019-07-08 03:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `date`, `month`, `year`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', '08', '07', '2019', '2019-07-08 03:01:13', '2019-07-08 03:01:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
