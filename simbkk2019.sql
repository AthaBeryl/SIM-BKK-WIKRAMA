-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 04:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simbkk2019`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `datasiswa`
-- (See below for the actual view)
--
CREATE TABLE `datasiswa` (
`id` bigint(20) unsigned
,`user_id` bigint(20)
,`nisn` varchar(100)
,`nis` int(11)
,`name` varchar(100)
,`jk` varchar(20)
,`jurusan_id` varchar(40)
,`jurusan` varchar(40)
,`rayon_id` varchar(40)
,`rayon` varchar(40)
,`masuk` year(4)
,`lulus` year(4)
,`alamat` longtext
,`telp` varchar(20)
,`email` varchar(100)
,`status_id` varchar(30)
,`status` varchar(50)
,`deleted_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `datastatus`
-- (See below for the actual view)
--
CREATE TABLE `datastatus` (
`id` bigint(20) unsigned
,`user_id` bigint(20)
,`nis` int(11)
,`jurusan` varchar(40)
,`masuk` year(4)
,`lulus` year(4)
,`jk` varchar(20)
,`jabatan` varchar(40)
,`nama` longtext
,`alamat` longtext
,`kota` longtext
,`durasi_kontrak` varchar(100)
,`pendapatan` bigint(20)
,`status` varchar(50)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `detailpesan`
-- (See below for the actual view)
--
CREATE TABLE `detailpesan` (
`id` bigint(20) unsigned
,`nis` int(11)
,`foto` longtext
,`jurusan_id` varchar(40)
,`jurusan` varchar(40)
,`name` varchar(100)
,`pesan` longtext
,`status` enum('Aktif','Tidak Aktif')
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info_lowongans`
--

CREATE TABLE `info_lowongans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Aktif','Tidak Aktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info_sekolahs`
--

CREATE TABLE `info_sekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Aktif','Tidak Aktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instansis`
--

CREATE TABLE `instansis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instansis`
--

INSERT INTO `instansis` (`id`, `nama`, `alamat`, `kota`, `telp`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'PD Pudjiastuti Tbk', 'Jr. Setiabudhi No. 132', 'Surabaya', NULL, NULL, NULL),
(3, 'CV Budiman Yuliarti (Persero) Tbk', 'Gg. Laksamana No. 755', 'Bekasi', NULL, NULL, NULL),
(4, 'PD Kusmawati Rajasa', 'Kpg. Gedebage Selatan No. 222', 'Tanggerang', NULL, NULL, NULL),
(5, 'UD Laksmiwati', 'Ki. Wahid Hasyim No. 707', 'Bogor', NULL, NULL, NULL),
(6, 'UD Wasita Tbk', 'Gg. Dipenogoro No. 505', 'Jakarta', NULL, NULL, NULL),
(7, 'Perum Halim (Persero) Tbk', 'Dk. Laksamana No. 537', 'Tanggerang', NULL, NULL, NULL),
(8, 'Perum Wulandari Usamah Tbk', 'Ki. Haji No. 446', 'Bekasi', NULL, NULL, NULL),
(9, 'PT Maryati Prasetyo (Persero) Tbk', 'Jln. Barat No. 985', 'Bogor', NULL, NULL, NULL),
(10, 'CV Megantara', 'Jln. Tambak No. 233', 'Bandung', NULL, NULL, NULL),
(11, 'PT Halim Prabowo (Persero) Tbk', 'Gg. Reksoninten No. 610', 'Bandung', NULL, NULL, NULL),
(12, 'CV Agustina Tbk', 'Jln. Sudiarto No. 167', 'Bogor', NULL, NULL, NULL),
(13, 'PT Usada', 'Jln. Sugiyopranoto No. 461', 'Bogor', NULL, NULL, NULL),
(14, 'PT Purwanti Setiawan', 'Ds. Kusmanto No. 202', 'Tanggerang', NULL, NULL, NULL),
(15, 'UD Natsir Putra', 'Psr. Sutan Syahrir No. 601', 'Bekasi', NULL, NULL, NULL),
(16, 'CV Siregar Maheswara Tbk', 'Ds. Qrisdoren No. 739', 'Bekasi', NULL, NULL, NULL),
(17, 'PD Nasyiah', 'Ki. Kartini No. 884', 'Bandung', NULL, NULL, NULL),
(18, 'Perum Pudjiastuti Suwarno', 'Ds. Cut Nyak Dien No. 359', 'Bekasi', NULL, NULL, NULL),
(19, 'UD Mansur Santoso (Persero) Tbk', 'Psr. Baabur Royan No. 563', 'Jakarta', NULL, NULL, NULL),
(20, 'PT Nugroho Hidayanto (Persero) Tbk', 'Gg. Aceh No. 845', 'Jakarta', NULL, NULL, NULL),
(21, 'Perum Riyanti Yolanda Tbk', 'Ki. Bass No. 680', 'Bandung', NULL, NULL, NULL),
(22, 'PD Mayasari Kusumo Tbk', 'Psr. Dipatiukur No. 121', 'Jakarta', NULL, NULL, NULL),
(23, 'PT Suryatmi Mardhiyah Tbk', 'Ds. Yohanes No. 26', 'Bekasi', NULL, NULL, NULL),
(24, 'PT Budiyanto (Persero) Tbk', 'Jr. Pacuan Kuda No. 536', 'Bandung', NULL, NULL, NULL),
(25, 'PD Usada (Persero) Tbk', 'Jln. Zamrud No. 501', 'Bekasi', NULL, NULL, NULL),
(26, 'PD Firgantoro Lestari', 'Ki. Raden No. 82', 'Bekasi', NULL, NULL, NULL),
(27, 'PT Pertiwi Lestari (Persero) Tbk', 'Psr. Urip Sumoharjo No. 935', 'Bekasi', NULL, NULL, NULL),
(28, 'Perum Safitri Tbk', 'Jln. Kusmanto No. 601', 'Bandung', NULL, NULL, NULL),
(29, 'CV Wacana', 'Jln. Wahid No. 709', 'Bandung', NULL, NULL, NULL),
(30, 'CV Lestari', 'Psr. Umalas No. 742', 'Tanggerang', NULL, NULL, NULL),
(31, 'PD Sirait', 'Gg. Krakatau No. 683', 'Depok', NULL, NULL, NULL),
(32, 'PD Suryatmi', 'Dk. Ikan No. 760', 'Tanggerang', NULL, NULL, NULL),
(33, 'PT Pratama Prasetya (Persero) Tbk', 'Ds. Thamrin No. 836', 'Surabaya', NULL, NULL, NULL),
(34, 'Perum Yuliarti (Persero) Tbk', 'Ki. Laswi No. 992', 'Bekasi', NULL, NULL, NULL),
(35, 'PT Mulyani Damanik', 'Jr. Suprapto No. 423', 'Surabaya', NULL, NULL, NULL),
(36, 'UD Maryati Simbolon (Persero) Tbk', 'Jln. Teuku Umar No. 304', 'Surabaya', NULL, NULL, NULL),
(37, 'UD Maryati Zulaika Tbk', 'Psr. Bakin No. 741', 'Jakarta', NULL, NULL, NULL),
(38, 'PD Yuliarti (Persero) Tbk', 'Jr. Labu No. 246', 'Depok', NULL, NULL, NULL),
(39, 'CV Pradipta', 'Jln. Baranangsiang No. 404', 'Jakarta', NULL, NULL, NULL),
(40, 'UD Mahendra Wibisono Tbk', 'Kpg. Ronggowarsito No. 650', 'Bogor', NULL, NULL, NULL),
(41, 'PT Wahyuni Andriani Tbk', 'Ki. Casablanca No. 298', 'Bekasi', NULL, NULL, NULL),
(42, 'PD Zulaika Tbk', 'Ds. Pasteur No. 535', 'Jakarta', NULL, NULL, NULL),
(43, 'CV Pradana Laksmiwati', 'Psr. Yogyakarta No. 846', 'Bandung', NULL, NULL, NULL),
(44, 'PD Saputra Kuswandari Tbk', 'Ds. Wora Wari No. 563', 'Jakarta', NULL, NULL, NULL),
(45, 'PT Utama', 'Psr. Ki Hajar Dewantara No. 636', 'Surabaya', NULL, NULL, NULL),
(46, 'CV Widiastuti Astuti Tbk', 'Dk. PHH. Mustofa No. 609', 'Jakarta', NULL, NULL, NULL),
(47, 'PT Nasyidah', 'Ds. Industri No. 372', 'Surabaya', NULL, NULL, NULL),
(48, 'PT Puspasari Hassanah Tbk', 'Dk. Orang No. 503', 'Surabaya', NULL, NULL, NULL),
(49, 'PT Handayani Mangunsong Tbk', 'Jr. Bakau No. 129', 'Surabaya', NULL, NULL, NULL),
(50, 'PD Saragih', 'Gg. Gardujati No. 560', 'Tanggerang', NULL, NULL, NULL),
(51, 'PT Palastri Hariyah', 'Ds. Sadang Serang No. 930', 'Bekasi', NULL, NULL, NULL),
(52, 'Perum Wahyuni Dabukke', 'Kpg. Hasanuddin No. 246', 'Bogor', NULL, NULL, NULL),
(53, 'PT Nasyidah Waskita Tbk', 'Gg. Setiabudhi No. 866', 'Bekasi', NULL, NULL, NULL),
(54, 'CV Andriani', 'Dk. Baha No. 936', 'Depok', NULL, NULL, NULL),
(55, 'PD Napitupulu Wastuti', 'Jr. Gardujati No. 746', 'Jakarta', NULL, NULL, NULL),
(56, 'UD Kusmawati (Persero) Tbk', 'Gg. Tangkuban Perahu No. 810', 'Jakarta', NULL, NULL, NULL),
(57, 'CV Tampubolon Rajata', 'Dk. Soekarno Hatta No. 816', 'Jakarta', NULL, NULL, NULL),
(58, 'Perum Gunarto Tbk', 'Ds. Baranang Siang No. 795', 'Bekasi', NULL, NULL, NULL),
(59, 'Perum Rahayu Suryono (Persero) Tbk', 'Ki. Agus Salim No. 300', 'Bogor', NULL, NULL, NULL),
(60, 'CV Prayoga Handayani', 'Ds. Sam Ratulangi No. 626', 'Tanggerang', NULL, NULL, NULL),
(61, 'Perum Wibowo Saputra (Persero) Tbk', 'Jr. Taman No. 157', 'Bekasi', NULL, NULL, NULL),
(62, 'PT Nurdiyanti', 'Ds. Yap Tjwan Bing No. 30', 'Tanggerang', NULL, NULL, NULL),
(63, 'PT Hasanah Hutapea Tbk', 'Ds. Wahidin Sudirohusodo No. 749', 'Jakarta', NULL, NULL, NULL),
(64, 'UD Hastuti Hidayanto Tbk', 'Kpg. Surapati No. 522', 'Bekasi', NULL, NULL, NULL),
(65, 'PD Prastuti Siregar', 'Ki. Baiduri No. 313', 'Bekasi', NULL, NULL, NULL),
(66, 'Perum Habibi Januar (Persero) Tbk', 'Ki. Bara No. 815', 'Surabaya', NULL, NULL, NULL),
(67, 'PT Yuliarti', 'Ds. Kebangkitan Nasional No. 319', 'Tanggerang', NULL, NULL, NULL),
(68, 'Perum Megantara Wulandari (Persero) Tbk', 'Jr. Baladewa No. 338', 'Bogor', NULL, NULL, NULL),
(69, 'Perum Laksmiwati Pradipta Tbk', 'Jln. Ketandan No. 225', 'Depok', NULL, NULL, NULL),
(70, 'PT Iswahyudi Prastuti', 'Kpg. Yos Sudarso No. 403', 'Bekasi', NULL, NULL, NULL),
(71, 'CV Wijaya Maryati Tbk', 'Ki. Zamrud No. 727', 'Jakarta', NULL, NULL, NULL),
(72, 'CV Kuswandari Nuraini (Persero) Tbk', 'Ki. Bappenas No. 619', 'Bandung', NULL, NULL, NULL),
(73, 'CV Pudjiastuti Tbk', 'Jr. Sutami No. 148', 'Bekasi', NULL, NULL, NULL),
(74, 'UD Andriani Tbk', 'Ds. Banda No. 733', 'Depok', NULL, NULL, NULL),
(75, 'UD Padmasari Simanjuntak (Persero) Tbk', 'Kpg. PHH. Mustofa No. 35', 'Jakarta', NULL, NULL, NULL),
(76, 'Perum Natsir', 'Ki. Moch. Toha No. 833', 'Jakarta', NULL, NULL, NULL),
(77, 'Perum Megantara', 'Ds. Kiaracondong No. 722', 'Depok', NULL, NULL, NULL),
(78, 'UD Pratiwi Rahmawati', 'Ds. Salam No. 314', 'Bogor', NULL, NULL, NULL),
(79, 'PD Handayani', 'Dk. Fajar No. 993', 'Bandung', NULL, NULL, NULL),
(80, 'PD Manullang Lailasari (Persero) Tbk', 'Kpg. Flores No. 612', 'Surabaya', NULL, NULL, NULL),
(81, 'UD Ardianto Tbk', 'Dk. Rajawali Barat No. 222', 'Surabaya', NULL, NULL, NULL),
(82, 'Perum Oktaviani Tbk', 'Ki. W.R. Supratman No. 950', 'Bandung', NULL, NULL, NULL),
(83, 'Perum Narpati Purnawati (Persero) Tbk', 'Jr. Bhayangkara No. 869', 'Bandung', NULL, NULL, NULL),
(84, 'UD Hasanah Tbk', 'Jln. Cikapayang No. 152', 'Bekasi', NULL, NULL, NULL),
(85, 'Perum Purwanti', 'Ds. Gambang No. 697', 'Bogor', NULL, NULL, NULL),
(86, 'PD Novitasari Tbk', 'Kpg. Haji No. 769', 'Depok', NULL, NULL, NULL),
(87, 'PT Utami Tbk', 'Ds. M.T. Haryono No. 902', 'Bekasi', NULL, NULL, NULL),
(88, 'PD Budiyanto Simbolon', 'Gg. Abdul. Muis No. 190', 'Depok', NULL, NULL, NULL),
(89, 'CV Latupono Firmansyah (Persero) Tbk', 'Jln. Ters. Kiaracondong No. 821', 'Surabaya', NULL, NULL, NULL),
(90, 'Perum Anggriawan Pangestu Tbk', 'Gg. Gremet No. 79', 'Bandung', NULL, NULL, NULL),
(91, 'Perum Farida', 'Kpg. Sadang Serang No. 378', 'Depok', NULL, NULL, NULL),
(92, 'PD Hasanah Prakasa', 'Ki. Lada No. 173', 'Bogor', NULL, NULL, NULL),
(93, 'CV Rahimah Tbk', 'Ki. Abdul Rahmat No. 783', 'Surabaya', NULL, NULL, NULL),
(94, 'PD Hastuti Tbk', 'Ki. S. Parman No. 336', 'Depok', NULL, NULL, NULL),
(95, 'CV Sihombing (Persero) Tbk', 'Ds. Rajawali No. 955', 'Tanggerang', NULL, NULL, NULL),
(96, 'PD Andriani', 'Psr. Basuki Rahmat  No. 944', 'Depok', NULL, NULL, NULL),
(97, 'PT Napitupulu (Persero) Tbk', 'Jr. Bakhita No. 109', 'Bandung', NULL, NULL, NULL),
(98, 'PT Wahyudin Prabowo', 'Psr. Banda No. 168', 'Bogor', NULL, NULL, NULL),
(99, 'Perum Hartati Saefullah Tbk', 'Ki. Gajah Mada No. 445', 'Surabaya', NULL, NULL, NULL),
(100, 'PD Iswahyudi (Persero) Tbk', 'Jln. Madiun No. 129', 'Bekasi', NULL, NULL, NULL),
(101, 'CV Thamrin Tbk', 'Dk. Astana Anyar No. 414', 'Surabaya', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jurusans`
--

CREATE TABLE `jurusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusans`
--

INSERT INTO `jurusans` (`id`, `short`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, 'RPL', 'Rekayasa Perangkat Lunak', NULL, NULL),
(2, 'TKJ', 'Teknik Komputer dan Jaringan', NULL, NULL),
(3, 'MMD', 'Multimedia', NULL, NULL),
(4, 'OTKP', 'Otomatisasi dan Tata Kelola Perkantoran', NULL, NULL),
(5, 'BDP', 'Bisnis Daring dan Pemasaran', NULL, NULL),
(6, 'TBG', 'Tataboga', NULL, NULL),
(7, 'HTL', 'Perhotelan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(114, '2014_10_12_000000_create_users_table', 1),
(115, '2014_10_12_100000_create_password_resets_table', 1),
(116, '2019_08_19_000000_create_failed_jobs_table', 1),
(117, '2019_09_19_032223_create_products_table', 1),
(118, '2019_10_15_054604_create_siswas_table', 1),
(119, '2019_10_15_062601_create_jurusans_table', 1),
(120, '2019_10_15_062717_create_rayons_table', 1),
(121, '2019_10_15_062929_create_status_details_table', 1),
(122, '2019_10_16_013643_create_statuses_table', 1),
(123, '2019_11_22_031837_create_instansis_table', 1),
(124, '2019_11_22_065158_kota', 1),
(125, '2019_12_04_071814_view_data_status', 1),
(126, '2019_12_04_072741_view_data_siswa', 1),
(127, '2019_12_18_065026_create_presets_table', 1),
(128, '2020_04_08_031340_create_info_sekolahs_table', 1),
(129, '2020_04_09_041211_create_info_lowongans_table', 1),
(130, '2020_04_09_140020_create_resumes_table', 1),
(131, '2020_04_10_084817_create_pesans_table', 1),
(132, '2020_04_10_105720_view_pesan', 1),
(133, '2020_04_10_215717_create_portofolios_table', 1),
(134, '2020_04_11_013435_create_pic_configs_table', 1);

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
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `pesan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Aktif','Tidak Aktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pic_configs`
--

CREATE TABLE `pic_configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portofolios`
--

CREATE TABLE `portofolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Aktif','Tidak Aktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `presets`
--

CREATE TABLE `presets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iconActive` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodyBackround` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headerKiri` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buttonClass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `presets`
--

INSERT INTO `presets` (`id`, `name`, `iconActive`, `bodyBackround`, `headerKiri`, `buttonClass`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Blue Ocean', '#5867dd', '#e6e9ed', '#1958d6', ' btn-primary', 'disable', NULL, NULL),
(2, 'Fire Red', '#c91a1a', '#f4c3c3', '#dd1f1f', 'btn-danger', 'disable', NULL, NULL),
(3, 'Precious Leaf', '#27d838', '#b7f7bb', '#25c447', 'btn-success', 'disable', NULL, NULL),
(4, 'Sun Light', '#ffaa00', '#f3fcae', '#ffe900', 'btn-warning', 'disable', NULL, NULL),
(5, 'Wikrama', '#ffaa00', '#e6e9ed', '#cec631', 'btn-outline-primary', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rayons`
--

CREATE TABLE `rayons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rayon` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembimbing` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rayons`
--

INSERT INTO `rayons` (`id`, `rayon`, `pembimbing`, `created_at`, `updated_at`) VALUES
(1, 'CISARUA 1', 'Sadina Usamah', NULL, NULL),
(2, 'CISARUA 2', 'Putu Nainggolan', NULL, NULL),
(3, 'CISARUA 3', 'Rusman Nashiruddin', NULL, NULL),
(4, 'CISARUA 4', 'Kania Wulandari', NULL, NULL),
(5, 'CISARUA 5', 'Eva Padmasari S.E.I', NULL, NULL),
(6, 'CICURUG 1', 'Genta Rahmawati', NULL, NULL),
(7, 'CICURUG 2', 'Najwa Maryati', NULL, NULL),
(8, 'CICURUG 3', 'Mursinin Siregar S.E.I', NULL, NULL),
(9, 'CICURUG 4', 'Prabowo Winarno', NULL, NULL),
(10, 'CICURUG 5', 'Ghaliyati Uyainah S.Kom', NULL, NULL),
(11, 'SUKASARI 1', 'Calista Nasyiah', NULL, NULL),
(12, 'SUKASARI 2', 'Yosef Widodo', NULL, NULL),
(13, 'SUKASARI 3', 'Cakrawala Prasasta S.E.I', NULL, NULL),
(14, 'SUKASARI 4', 'Maimunah Wastuti M.Ak', NULL, NULL),
(15, 'SUKASARI 5', 'Jumadi Januar S.Ked', NULL, NULL),
(16, 'WIKRAMA 1', 'Yuni Hartati', NULL, NULL),
(17, 'WIKRAMA 2', 'Paramita Azalea Yuliarti M.Pd', NULL, NULL),
(18, 'WIKRAMA 3', 'Ganep Prasasta', NULL, NULL),
(19, 'WIKRAMA 4', 'Pia Salwa Widiastuti', NULL, NULL),
(20, 'WIKRAMA 5', 'Belinda Farida', NULL, NULL),
(21, 'TAJUR 1', 'Legawa Thamrin', NULL, NULL),
(22, 'TAJUR 2', 'Lutfan Wibisono', NULL, NULL),
(23, 'TAJUR 3', 'Dina Mulyani', NULL, NULL),
(24, 'TAJUR 4', 'Mutia Widiastuti', NULL, NULL),
(25, 'TAJUR 5', 'Winda Puspita M.Kom.', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `resume`
-- (See below for the actual view)
--
CREATE TABLE `resume` (
`id` bigint(20) unsigned
,`user_id` bigint(20)
,`nama_siswa` varchar(100)
,`nis` int(11)
,`jurusan` varchar(40)
,`rayon` varchar(40)
,`alamat_siswa` longtext
,`telp` varchar(20)
,`email` varchar(100)
,`masuk` year(4)
,`lulus` year(4)
,`jk` varchar(20)
,`jabatan` varchar(40)
,`nama` longtext
,`alamat` longtext
,`kota` longtext
,`durasi_kontrak` varchar(100)
,`pendapatan` bigint(20)
,`status` varchar(50)
,`created_at` timestamp
,`updated_at` timestamp
,`foto` longtext
);

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nisn` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nis` int(11) NOT NULL,
  `jurusan_id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rayon_id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masuk` year(4) NOT NULL,
  `lulus` year(4) NOT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `user_id`, `nisn`, `nis`, `jurusan_id`, `rayon_id`, `jk`, `masuk`, `lulus`, `alamat`, `telp`, `status_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, '19812101', 11706001, '4', '25', 'Perempuan', 2013, 2016, 'Jr. Ciwastra No. 669', '0997 1919 367', '3', NULL, NULL, NULL),
(2, 3, '19812102', 11706002, '7', '10', 'Perempuan', 2015, 2018, 'Ds. Gedebage Selatan No. 522', '0887 6771 1742', '3', NULL, NULL, NULL),
(3, 4, '19812103', 11706003, '7', '15', 'Laki-laki', 2014, 2017, 'Ki. Ters. Pasir Koja No. 245', '0481 4941 552', '2', NULL, NULL, NULL),
(4, 5, '19812104', 11706004, '5', '18', 'Perempuan', 2017, 2020, 'Gg. Baranang Siang No. 444', '(+62) 653 0363 7904', '1', NULL, NULL, NULL),
(5, 6, '19812105', 11706005, '2', '21', 'Laki-laki', 2014, 2017, 'Ds. Bakit  No. 392', '0369 2084 986', '1', NULL, NULL, NULL),
(6, 7, '19812106', 11706006, '2', '7', 'Laki-laki', 2016, 2019, 'Ds. Peta No. 780', '0385 7333 692', '4', NULL, NULL, NULL),
(7, 8, '19812107', 11706007, '5', '22', 'Perempuan', 2015, 2018, 'Ki. Jaksa No. 395', '(+62) 613 3866 836', '4', NULL, NULL, NULL),
(8, 9, '19812108', 11706008, '3', '7', 'Laki-laki', 2015, 2018, 'Ds. Abdul. Muis No. 705', '0740 8554 480', '1', NULL, NULL, NULL),
(9, 10, '19812109', 11706009, '1', '22', 'Perempuan', 2016, 2019, 'Jln. Flora No. 335', '(+62) 511 7892 6698', '3', NULL, NULL, NULL),
(10, 11, '19812110', 11706010, '6', '22', 'Perempuan', 2014, 2017, 'Ds. Bacang No. 471', '0267 5659 3102', '3', NULL, NULL, NULL),
(11, 12, '19812111', 11706011, '4', '6', 'Perempuan', 2013, 2016, 'Gg. Sentot Alibasa No. 580', '(+62) 694 3973 3929', '4', NULL, NULL, NULL),
(12, 13, '19812112', 11706012, '1', '22', 'Laki-laki', 2017, 2020, 'Psr. Siliwangi No. 289', '(+62) 733 2561 799', '3', NULL, NULL, NULL),
(13, 14, '19812113', 11706013, '5', '15', 'Laki-laki', 2014, 2017, 'Psr. Bayam No. 404', '(+62) 260 9949 4686', '1', NULL, NULL, NULL),
(14, 15, '19812114', 11706014, '2', '11', 'Laki-laki', 2017, 2020, 'Gg. Salak No. 672', '0861 056 121', '4', NULL, NULL, NULL),
(15, 16, '19812115', 11706015, '6', '18', 'Perempuan', 2015, 2018, 'Dk. Moch. Ramdan No. 631', '0919 5169 7936', '1', NULL, NULL, NULL),
(16, 17, '19812116', 11706016, '6', '17', 'Laki-laki', 2014, 2017, 'Dk. Suprapto No. 922', '0916 7290 613', '4', NULL, NULL, NULL),
(17, 18, '19812117', 11706017, '1', '5', 'Perempuan', 2015, 2018, 'Jln. Soekarno Hatta No. 940', '0666 1168 5687', '1', NULL, NULL, NULL),
(18, 19, '19812118', 11706018, '5', '25', 'Perempuan', 2013, 2016, 'Jln. Peta No. 456', '(+62) 886 0313 0416', '1', NULL, NULL, NULL),
(19, 20, '19812119', 11706019, '7', '4', 'Perempuan', 2015, 2018, 'Kpg. Otto No. 744', '0886 4761 0258', '4', NULL, NULL, NULL),
(20, 21, '19812120', 11706020, '1', '23', 'Perempuan', 2016, 2019, 'Kpg. Uluwatu No. 249', '0374 8797 886', '3', NULL, NULL, NULL),
(21, 22, '19812121', 11706021, '1', '9', 'Perempuan', 2013, 2016, 'Dk. Yogyakarta No. 743', '(+62) 387 7573 3847', '4', NULL, NULL, NULL),
(22, 23, '19812122', 11706022, '7', '18', 'Laki-laki', 2014, 2017, 'Gg. Kalimalang No. 603', '(+62) 256 7360 0095', '2', NULL, NULL, NULL),
(23, 24, '19812123', 11706023, '2', '17', 'Laki-laki', 2017, 2020, 'Psr. Gegerkalong Hilir No. 410', '0753 9689 6688', '3', NULL, NULL, NULL),
(24, 25, '19812124', 11706024, '7', '20', 'Perempuan', 2013, 2016, 'Psr. Umalas No. 666', '(+62) 21 6864 911', '4', NULL, NULL, NULL),
(25, 26, '19812125', 11706025, '7', '6', 'Laki-laki', 2015, 2018, 'Kpg. Tubagus Ismail No. 322', '0897 807 434', '2', NULL, NULL, NULL),
(26, 27, '19812126', 11706026, '4', '1', 'Laki-laki', 2013, 2016, 'Ki. Barasak No. 638', '0634 2652 5497', '3', NULL, NULL, NULL),
(27, 28, '19812127', 11706027, '2', '23', 'Perempuan', 2016, 2019, 'Jr. Camar No. 78', '(+62) 504 1745 3412', '4', NULL, NULL, NULL),
(28, 29, '19812128', 11706028, '6', '11', 'Perempuan', 2014, 2017, 'Psr. Bakin No. 605', '0736 7092 8708', '2', NULL, NULL, NULL),
(29, 30, '19812129', 11706029, '4', '17', 'Laki-laki', 2016, 2019, 'Dk. Suprapto No. 713', '0307 2558 236', '1', NULL, NULL, NULL),
(30, 31, '19812130', 11706030, '7', '16', 'Laki-laki', 2016, 2019, 'Kpg. Raya Ujungberung No. 842', '(+62) 677 1777 0246', '2', NULL, NULL, NULL),
(31, 32, '19812131', 11706031, '1', '22', 'Laki-laki', 2017, 2020, 'Ds. Camar No. 698', '(+62) 700 4112 7593', '2', NULL, NULL, NULL),
(32, 33, '19812132', 11706032, '2', '10', 'Laki-laki', 2017, 2020, 'Psr. Kyai Gede No. 489', '0212 9844 085', '4', NULL, NULL, NULL),
(33, 34, '19812133', 11706033, '5', '25', 'Laki-laki', 2016, 2019, 'Ds. Baya Kali Bungur No. 942', '(+62) 682 2092 8385', '4', NULL, NULL, NULL),
(34, 35, '19812134', 11706034, '1', '6', 'Laki-laki', 2016, 2019, 'Dk. Jamika No. 978', '0792 8890 451', '4', NULL, NULL, NULL),
(35, 36, '19812135', 11706035, '4', '1', 'Perempuan', 2014, 2017, 'Ds. Diponegoro No. 455', '(+62) 27 9245 895', '1', NULL, NULL, NULL),
(36, 37, '19812136', 11706036, '4', '6', 'Laki-laki', 2015, 2018, 'Psr. Batako No. 97', '(+62) 21 9518 237', '3', NULL, NULL, NULL),
(37, 38, '19812137', 11706037, '5', '17', 'Laki-laki', 2017, 2020, 'Psr. Kebonjati No. 980', '0822 134 562', '2', NULL, NULL, NULL),
(38, 39, '19812138', 11706038, '1', '3', 'Perempuan', 2015, 2018, 'Ds. Nakula No. 360', '(+62) 859 6289 095', '3', NULL, NULL, NULL),
(39, 40, '19812139', 11706039, '5', '25', 'Laki-laki', 2013, 2016, 'Psr. Pasir Koja No. 760', '0728 5175 824', '1', NULL, NULL, NULL),
(40, 41, '19812140', 11706040, '2', '8', 'Perempuan', 2016, 2019, 'Jln. Umalas No. 880', '0632 5495 280', '2', NULL, NULL, NULL),
(41, 42, '19812141', 11706041, '1', '12', 'Perempuan', 2014, 2017, 'Jln. Dipatiukur No. 68', '(+62) 29 2269 5173', '2', NULL, NULL, NULL),
(42, 43, '19812142', 11706042, '7', '25', 'Laki-laki', 2013, 2016, 'Ki. Acordion No. 184', '0667 2958 058', '1', NULL, NULL, NULL),
(43, 44, '19812143', 11706043, '2', '17', 'Laki-laki', 2015, 2018, 'Ds. Cikutra Timur No. 546', '(+62) 327 3009 4934', '4', NULL, NULL, NULL),
(44, 45, '19812144', 11706044, '2', '7', 'Laki-laki', 2014, 2017, 'Jr. Banceng Pondok No. 276', '(+62) 365 9810 919', '1', NULL, NULL, NULL),
(45, 46, '19812145', 11706045, '7', '10', 'Laki-laki', 2017, 2020, 'Kpg. Villa No. 318', '0615 6320 251', '4', NULL, NULL, NULL),
(46, 47, '19812146', 11706046, '5', '25', 'Perempuan', 2016, 2019, 'Ds. Wora Wari No. 419', '(+62) 330 4889 3691', '2', NULL, NULL, NULL),
(47, 48, '19812147', 11706047, '4', '3', 'Perempuan', 2017, 2020, 'Kpg. Cikutra Barat No. 2', '(+62) 451 3171 5204', '2', NULL, NULL, NULL),
(48, 49, '19812148', 11706048, '6', '10', 'Perempuan', 2014, 2017, 'Psr. Adisumarmo No. 633', '(+62) 514 6581 353', '3', NULL, NULL, NULL),
(49, 50, '19812149', 11706049, '7', '8', 'Perempuan', 2013, 2016, 'Jln. Gotong Royong No. 662', '0933 0731 716', '3', NULL, NULL, NULL),
(50, 51, '19812150', 11706050, '7', '20', 'Perempuan', 2016, 2019, 'Psr. Astana Anyar No. 533', '020 4616 0009', '2', NULL, NULL, NULL),
(51, 52, '19812151', 11706051, '4', '6', 'Perempuan', 2015, 2018, 'Ki. Jend. A. Yani No. 43', '0971 8718 6352', '1', NULL, NULL, NULL),
(52, 53, '19812152', 11706052, '4', '20', 'Laki-laki', 2015, 2018, 'Ds. Sumpah Pemuda No. 793', '(+62) 269 7684 712', '1', NULL, NULL, NULL),
(53, 54, '19812153', 11706053, '3', '7', 'Perempuan', 2015, 2018, 'Psr. Daan No. 148', '(+62) 218 6639 140', '4', NULL, NULL, NULL),
(54, 55, '19812154', 11706054, '2', '10', 'Laki-laki', 2015, 2018, 'Ki. Baranang Siang No. 329', '0379 0441 8146', '4', NULL, NULL, NULL),
(55, 56, '19812155', 11706055, '5', '22', 'Laki-laki', 2014, 2017, 'Ds. Reksoninten No. 158', '0323 7293 859', '3', NULL, NULL, NULL),
(56, 57, '19812156', 11706056, '6', '8', 'Perempuan', 2017, 2020, 'Jr. Pelajar Pejuang 45 No. 987', '(+62) 802 974 307', '1', NULL, NULL, NULL),
(57, 58, '19812157', 11706057, '2', '21', 'Perempuan', 2014, 2017, 'Ki. Umalas No. 54', '0460 3262 7251', '1', NULL, NULL, NULL),
(58, 59, '19812158', 11706058, '6', '12', 'Perempuan', 2013, 2016, 'Jr. Diponegoro No. 251', '(+62) 202 7928 089', '1', NULL, NULL, NULL),
(59, 60, '19812159', 11706059, '5', '9', 'Perempuan', 2015, 2018, 'Ds. Bakit  No. 529', '022 5335 5180', '3', NULL, NULL, NULL),
(60, 61, '19812160', 11706060, '5', '3', 'Perempuan', 2014, 2017, 'Kpg. Perintis Kemerdekaan No. 794', '0540 4463 700', '4', NULL, NULL, NULL),
(61, 62, '19812161', 11706061, '2', '10', 'Laki-laki', 2015, 2018, 'Kpg. Pattimura No. 829', '(+62) 690 2708 643', '4', NULL, NULL, NULL),
(62, 63, '19812162', 11706062, '5', '1', 'Laki-laki', 2013, 2016, 'Jln. Madiun No. 736', '(+62) 499 5671 576', '2', NULL, NULL, NULL),
(63, 64, '19812163', 11706063, '6', '12', 'Laki-laki', 2015, 2018, 'Ki. Krakatau No. 28', '(+62) 22 4724 826', '2', NULL, NULL, NULL),
(64, 65, '19812164', 11706064, '3', '23', 'Laki-laki', 2015, 2018, 'Psr. Bhayangkara No. 126', '(+62) 676 0721 1066', '1', NULL, NULL, NULL),
(65, 66, '19812165', 11706065, '1', '25', 'Perempuan', 2015, 2018, 'Dk. Bhayangkara No. 486', '0418 1378 2523', '4', NULL, NULL, NULL),
(66, 67, '19812166', 11706066, '5', '3', 'Laki-laki', 2013, 2016, 'Gg. Bak Air No. 326', '0448 2640 5543', '4', NULL, NULL, NULL),
(67, 68, '19812167', 11706067, '5', '1', 'Perempuan', 2013, 2016, 'Psr. Villa No. 428', '0521 7073 758', '1', NULL, NULL, NULL),
(68, 69, '19812168', 11706068, '5', '11', 'Perempuan', 2015, 2018, 'Dk. Kalimalang No. 697', '(+62) 455 4783 176', '1', NULL, NULL, NULL),
(69, 70, '19812169', 11706069, '4', '2', 'Perempuan', 2014, 2017, 'Gg. R.M. Said No. 996', '(+62) 832 0998 204', '3', NULL, NULL, NULL),
(70, 71, '19812170', 11706070, '2', '5', 'Laki-laki', 2015, 2018, 'Dk. Sugiyopranoto No. 728', '0603 2131 136', '1', NULL, NULL, NULL),
(71, 72, '19812171', 11706071, '5', '11', 'Laki-laki', 2015, 2018, 'Dk. Abang No. 670', '0578 9117 766', '2', NULL, NULL, NULL),
(72, 73, '19812172', 11706072, '4', '4', 'Laki-laki', 2014, 2017, 'Psr. Tambun No. 145', '0759 8519 5246', '2', NULL, NULL, NULL),
(73, 74, '19812173', 11706073, '7', '13', 'Laki-laki', 2016, 2019, 'Ds. Rajiman No. 981', '(+62) 264 1373 0720', '4', NULL, NULL, NULL),
(74, 75, '19812174', 11706074, '7', '18', 'Perempuan', 2016, 2019, 'Jr. Bakhita No. 952', '0947 4154 950', '2', NULL, NULL, NULL),
(75, 76, '19812175', 11706075, '4', '12', 'Laki-laki', 2017, 2020, 'Kpg. Jagakarsa No. 170', '0871 636 469', '3', NULL, NULL, NULL),
(76, 77, '19812176', 11706076, '1', '21', 'Perempuan', 2017, 2020, 'Ds. Warga No. 861', '(+62) 430 1279 095', '2', NULL, NULL, NULL),
(77, 78, '19812177', 11706077, '1', '7', 'Perempuan', 2016, 2019, 'Kpg. Thamrin No. 157', '(+62) 820 9708 0547', '1', NULL, NULL, NULL),
(78, 79, '19812178', 11706078, '3', '1', 'Perempuan', 2014, 2017, 'Dk. Suharso No. 532', '0850 7483 7690', '3', NULL, NULL, NULL),
(79, 80, '19812179', 11706079, '3', '19', 'Laki-laki', 2016, 2019, 'Jr. Baranangsiang No. 178', '(+62) 935 7437 7169', '3', NULL, NULL, NULL),
(80, 81, '19812180', 11706080, '4', '8', 'Perempuan', 2015, 2018, 'Jr. Badak No. 397', '(+62) 28 5521 6710', '2', NULL, NULL, NULL),
(81, 82, '19812181', 11706081, '1', '19', 'Laki-laki', 2016, 2019, 'Ki. Ir. H. Juanda No. 145', '0812 1215 3127', '3', NULL, NULL, NULL),
(82, 83, '19812182', 11706082, '2', '6', 'Perempuan', 2013, 2016, 'Jr. Ronggowarsito No. 213', '(+62) 24 7408 492', '2', NULL, NULL, NULL),
(83, 84, '19812183', 11706083, '1', '15', 'Laki-laki', 2014, 2017, 'Gg. Labu No. 717', '(+62) 749 3716 042', '4', NULL, NULL, NULL),
(84, 85, '19812184', 11706084, '7', '19', 'Laki-laki', 2013, 2016, 'Gg. Urip Sumoharjo No. 683', '(+62) 272 4457 7014', '1', NULL, NULL, NULL),
(85, 86, '19812185', 11706085, '3', '10', 'Laki-laki', 2014, 2017, 'Ki. Juanda No. 34', '(+62) 516 7635 3654', '4', NULL, NULL, NULL),
(86, 87, '19812186', 11706086, '5', '25', 'Laki-laki', 2016, 2019, 'Gg. Otto No. 511', '(+62) 229 9510 6282', '1', NULL, NULL, NULL),
(87, 88, '19812187', 11706087, '4', '23', 'Laki-laki', 2017, 2020, 'Jr. Kiaracondong No. 284', '0722 1089 2984', '3', NULL, NULL, NULL),
(88, 89, '19812188', 11706088, '1', '1', 'Perempuan', 2015, 2018, 'Jln. Bak Mandi No. 619', '0365 6243 3357', '4', NULL, NULL, NULL),
(89, 90, '19812189', 11706089, '6', '22', 'Laki-laki', 2013, 2016, 'Dk. Katamso No. 232', '(+62) 205 1578 4682', '4', NULL, NULL, NULL),
(90, 91, '19812190', 11706090, '5', '5', 'Laki-laki', 2015, 2018, 'Ki. Krakatau No. 265', '(+62) 741 8593 549', '2', NULL, NULL, NULL),
(91, 92, '19812191', 11706091, '7', '8', 'Perempuan', 2013, 2016, 'Ki. Sutoyo No. 881', '0581 9031 9654', '2', NULL, NULL, NULL),
(92, 93, '19812192', 11706092, '6', '23', 'Laki-laki', 2015, 2018, 'Jr. Hasanuddin No. 689', '(+62) 310 0155 6830', '4', NULL, NULL, NULL),
(93, 94, '19812193', 11706093, '3', '13', 'Laki-laki', 2013, 2016, 'Ki. Warga No. 253', '(+62) 21 8919 1620', '4', NULL, NULL, NULL),
(94, 95, '19812194', 11706094, '3', '2', 'Laki-laki', 2014, 2017, 'Kpg. R.M. Said No. 220', '(+62) 751 6828 4740', '1', NULL, NULL, NULL),
(95, 96, '19812195', 11706095, '3', '1', 'Laki-laki', 2016, 2019, 'Kpg. Cokroaminoto No. 620', '0840 809 034', '4', NULL, NULL, NULL),
(96, 97, '19812196', 11706096, '7', '12', 'Perempuan', 2013, 2016, 'Ki. Wahidin Sudirohusodo No. 353', '(+62) 446 2825 024', '2', NULL, NULL, NULL),
(97, 98, '19812197', 11706097, '5', '6', 'Perempuan', 2015, 2018, 'Jln. Honggowongso No. 206', '(+62) 832 5315 531', '2', NULL, NULL, NULL),
(98, 99, '19812198', 11706098, '7', '16', 'Perempuan', 2017, 2020, 'Ds. Basuki Rahmat  No. 791', '(+62) 457 5540 4323', '1', NULL, NULL, NULL),
(99, 100, '19812199', 11706099, '5', '2', 'Perempuan', 2017, 2020, 'Kpg. Bara Tambar No. 678', '(+62) 531 7057 1623', '2', NULL, NULL, NULL),
(100, 101, '19812200', 11706100, '3', '25', 'Perempuan', 2013, 2016, 'Jln. Jend. A. Yani No. 597', '0679 0984 3383', '1', NULL, NULL, NULL),
(101, 102, '19812201', 11706101, '6', '25', 'Laki-laki', 2016, 2019, 'Gg. Ciwastra No. 845', '(+62) 896 2147 5136', '3', NULL, NULL, NULL),
(102, 103, '19812202', 11706102, '2', '5', 'Perempuan', 2017, 2020, 'Jr. Jaksa No. 326', '024 4661 4481', '3', NULL, NULL, NULL),
(103, 104, '19812203', 11706103, '3', '7', 'Perempuan', 2013, 2016, 'Ds. Lembong No. 130', '(+62) 462 9155 8213', '4', NULL, NULL, NULL),
(104, 105, '19812204', 11706104, '5', '10', 'Perempuan', 2014, 2017, 'Psr. Flores No. 295', '(+62) 628 0801 683', '4', NULL, NULL, NULL),
(105, 106, '19812205', 11706105, '1', '5', 'Laki-laki', 2017, 2020, 'Psr. Orang No. 955', '(+62) 276 4746 205', '1', NULL, NULL, NULL),
(106, 107, '19812206', 11706106, '6', '18', 'Perempuan', 2013, 2016, 'Kpg. Suryo No. 792', '(+62) 896 239 740', '3', NULL, NULL, NULL),
(107, 108, '19812207', 11706107, '1', '25', 'Perempuan', 2016, 2019, 'Psr. Ters. Kiaracondong No. 808', '(+62) 808 8101 329', '3', NULL, NULL, NULL),
(108, 109, '19812208', 11706108, '2', '5', 'Perempuan', 2016, 2019, 'Jr. K.H. Wahid Hasyim (Kopo) No. 309', '(+62) 209 3670 894', '2', NULL, NULL, NULL),
(109, 110, '19812209', 11706109, '1', '4', 'Laki-laki', 2017, 2020, 'Jr. Jend. Sudirman No. 521', '0891 966 756', '4', NULL, NULL, NULL),
(110, 111, '19812210', 11706110, '4', '7', 'Laki-laki', 2017, 2020, 'Ki. Suryo No. 285', '(+62) 24 0526 0882', '4', NULL, NULL, NULL),
(111, 112, '19812211', 11706111, '5', '3', 'Perempuan', 2016, 2019, 'Psr. Jaksa No. 48', '0829 006 006', '1', NULL, NULL, NULL),
(112, 113, '19812212', 11706112, '5', '7', 'Laki-laki', 2014, 2017, 'Dk. Fajar No. 360', '(+62) 771 8098 322', '3', NULL, NULL, NULL),
(113, 114, '19812213', 11706113, '3', '2', 'Laki-laki', 2017, 2020, 'Jln. Otista No. 317', '(+62) 986 5292 4547', '2', NULL, NULL, NULL),
(114, 115, '19812214', 11706114, '2', '25', 'Perempuan', 2015, 2018, 'Psr. Bakaru No. 734', '0539 6641 448', '1', NULL, NULL, NULL),
(115, 116, '19812215', 11706115, '7', '13', 'Perempuan', 2015, 2018, 'Kpg. Ekonomi No. 423', '(+62) 638 1978 9085', '4', NULL, NULL, NULL),
(116, 117, '19812216', 11706116, '2', '9', 'Laki-laki', 2016, 2019, 'Jr. Raden No. 5', '(+62) 831 9943 1741', '2', NULL, NULL, NULL),
(117, 118, '19812217', 11706117, '4', '7', 'Perempuan', 2013, 2016, 'Dk. Qrisdoren No. 12', '0254 6023 6185', '3', NULL, NULL, NULL),
(118, 119, '19812218', 11706118, '2', '9', 'Laki-laki', 2017, 2020, 'Jln. Villa No. 470', '0908 7487 910', '4', NULL, NULL, NULL),
(119, 120, '19812219', 11706119, '5', '6', 'Perempuan', 2016, 2019, 'Jln. Gotong Royong No. 682', '0325 0871 301', '3', NULL, NULL, NULL),
(120, 121, '19812220', 11706120, '5', '13', 'Laki-laki', 2016, 2019, 'Jln. Agus Salim No. 881', '0405 0359 5997', '1', NULL, NULL, NULL),
(121, 122, '19812221', 11706121, '5', '19', 'Perempuan', 2013, 2016, 'Ds. Bah Jaya No. 73', '(+62) 618 7929 785', '3', NULL, NULL, NULL),
(122, 123, '19812222', 11706122, '3', '20', 'Laki-laki', 2014, 2017, 'Dk. B.Agam 1 No. 867', '(+62) 774 7708 606', '4', NULL, NULL, NULL),
(123, 124, '19812223', 11706123, '6', '20', 'Perempuan', 2015, 2018, 'Kpg. Baranang Siang Indah No. 133', '0268 5671 699', '3', NULL, NULL, NULL),
(124, 125, '19812224', 11706124, '5', '9', 'Perempuan', 2016, 2019, 'Psr. Sutarjo No. 311', '(+62) 535 8034 944', '4', NULL, NULL, NULL),
(125, 126, '19812225', 11706125, '6', '20', 'Laki-laki', 2013, 2016, 'Jr. Cemara No. 660', '(+62) 432 5979 709', '1', NULL, NULL, NULL),
(126, 127, '19812226', 11706126, '6', '20', 'Perempuan', 2017, 2020, 'Ki. Supomo No. 82', '022 2849 290', '1', NULL, NULL, NULL),
(127, 128, '19812227', 11706127, '2', '5', 'Perempuan', 2016, 2019, 'Dk. Nangka No. 618', '0354 6088 5352', '1', NULL, NULL, NULL),
(128, 129, '19812228', 11706128, '4', '1', 'Perempuan', 2017, 2020, 'Ki. Bak Air No. 845', '0902 2717 3383', '4', NULL, NULL, NULL),
(129, 130, '19812229', 11706129, '1', '7', 'Laki-laki', 2016, 2019, 'Jln. Kebonjati No. 250', '0895 0285 550', '1', NULL, NULL, NULL),
(130, 131, '19812230', 11706130, '1', '24', 'Perempuan', 2013, 2016, 'Ki. Bambon No. 534', '(+62) 442 1643 125', '2', NULL, NULL, NULL),
(131, 132, '19812231', 11706131, '4', '21', 'Laki-laki', 2015, 2018, 'Ds. Mulyadi No. 399', '0298 2314 7156', '4', NULL, NULL, NULL),
(132, 133, '19812232', 11706132, '7', '6', 'Perempuan', 2014, 2017, 'Kpg. Tambun No. 410', '0737 1830 891', '1', NULL, NULL, NULL),
(133, 134, '19812233', 11706133, '7', '15', 'Laki-laki', 2014, 2017, 'Gg. Ters. Pasir Koja No. 588', '0373 9151 861', '2', NULL, NULL, NULL),
(134, 135, '19812234', 11706134, '4', '1', 'Laki-laki', 2017, 2020, 'Jr. Bahagia No. 322', '0272 8617 3696', '1', NULL, NULL, NULL),
(135, 136, '19812235', 11706135, '7', '17', 'Laki-laki', 2013, 2016, 'Kpg. Kartini No. 84', '(+62) 440 3856 475', '1', NULL, NULL, NULL),
(136, 137, '19812236', 11706136, '7', '22', 'Laki-laki', 2015, 2018, 'Gg. B.Agam Dlm No. 252', '0232 9519 080', '4', NULL, NULL, NULL),
(137, 138, '19812237', 11706137, '5', '18', 'Perempuan', 2017, 2020, 'Jln. Kyai Gede No. 117', '(+62) 828 4947 6519', '3', NULL, NULL, NULL),
(138, 139, '19812238', 11706138, '2', '5', 'Laki-laki', 2015, 2018, 'Ki. Pahlawan No. 705', '0388 8200 2537', '3', NULL, NULL, NULL),
(139, 140, '19812239', 11706139, '2', '9', 'Laki-laki', 2017, 2020, 'Ds. Bagis Utama No. 303', '0451 5742 9328', '4', NULL, NULL, NULL),
(140, 141, '19812240', 11706140, '3', '19', 'Perempuan', 2017, 2020, 'Dk. Ki Hajar Dewantara No. 591', '(+62) 644 9852 3501', '1', NULL, NULL, NULL),
(141, 142, '19812241', 11706141, '7', '13', 'Laki-laki', 2014, 2017, 'Gg. R.E. Martadinata No. 799', '0443 4320 8273', '2', NULL, NULL, NULL),
(142, 143, '19812242', 11706142, '1', '18', 'Perempuan', 2014, 2017, 'Ds. Jambu No. 988', '0508 9743 8204', '1', NULL, NULL, NULL),
(143, 144, '19812243', 11706143, '7', '5', 'Perempuan', 2017, 2020, 'Gg. Thamrin No. 480', '(+62) 440 7973 082', '3', NULL, NULL, NULL),
(144, 145, '19812244', 11706144, '5', '17', 'Perempuan', 2015, 2018, 'Ki. Urip Sumoharjo No. 19', '0535 0175 6851', '1', NULL, NULL, NULL),
(145, 146, '19812245', 11706145, '6', '24', 'Laki-laki', 2016, 2019, 'Dk. Umalas No. 1', '0608 3909 575', '1', NULL, NULL, NULL),
(146, 147, '19812246', 11706146, '5', '8', 'Perempuan', 2013, 2016, 'Gg. Achmad Yani No. 336', '024 2202 6490', '2', NULL, NULL, NULL),
(147, 148, '19812247', 11706147, '6', '4', 'Laki-laki', 2014, 2017, 'Gg. Diponegoro No. 511', '0831 9015 1182', '3', NULL, NULL, NULL),
(148, 149, '19812248', 11706148, '5', '1', 'Laki-laki', 2016, 2019, 'Gg. Ciumbuleuit No. 815', '(+62) 273 4065 2018', '2', NULL, NULL, NULL),
(149, 150, '19812249', 11706149, '7', '16', 'Laki-laki', 2014, 2017, 'Ds. Bambon No. 63', '(+62) 332 3386 595', '3', NULL, NULL, NULL),
(150, 151, '19812250', 11706150, '5', '6', 'Perempuan', 2014, 2017, 'Jr. Badak No. 194', '0393 6657 8228', '3', NULL, NULL, NULL),
(151, 152, '19812251', 11706151, '1', '15', 'Perempuan', 2017, 2020, 'Jr. Dipenogoro No. 330', '(+62) 766 4777 360', '2', NULL, NULL, NULL),
(152, 153, '19812252', 11706152, '2', '17', 'Laki-laki', 2016, 2019, 'Dk. Baya Kali Bungur No. 537', '(+62) 910 3617 4385', '4', NULL, NULL, NULL),
(153, 154, '19812253', 11706153, '6', '24', 'Laki-laki', 2013, 2016, 'Psr. Sutarto No. 323', '0200 0466 164', '2', NULL, NULL, NULL),
(154, 155, '19812254', 11706154, '1', '21', 'Perempuan', 2013, 2016, 'Ds. Kebangkitan Nasional No. 396', '(+62) 946 0211 097', '3', NULL, NULL, NULL),
(155, 156, '19812255', 11706155, '2', '13', 'Laki-laki', 2017, 2020, 'Kpg. Wahid Hasyim No. 771', '0648 7263 8002', '1', NULL, NULL, NULL),
(156, 157, '19812256', 11706156, '2', '12', 'Laki-laki', 2017, 2020, 'Kpg. Bah Jaya No. 284', '(+62) 835 0040 5089', '1', NULL, NULL, NULL),
(157, 158, '19812257', 11706157, '1', '22', 'Laki-laki', 2017, 2020, 'Dk. Babakan No. 711', '(+62) 798 7984 685', '3', NULL, NULL, NULL),
(158, 159, '19812258', 11706158, '4', '19', 'Laki-laki', 2013, 2016, 'Dk. Nangka No. 489', '0298 8125 5466', '3', NULL, NULL, NULL),
(159, 160, '19812259', 11706159, '3', '20', 'Perempuan', 2014, 2017, 'Ds. Perintis Kemerdekaan No. 341', '(+62) 727 3292 073', '4', NULL, NULL, NULL),
(160, 161, '19812260', 11706160, '5', '8', 'Laki-laki', 2013, 2016, 'Gg. Banceng Pondok No. 718', '0868 961 132', '4', NULL, NULL, NULL),
(161, 162, '19812261', 11706161, '2', '8', 'Perempuan', 2016, 2019, 'Gg. Rajiman No. 249', '0221 3080 480', '3', NULL, NULL, NULL),
(162, 163, '19812262', 11706162, '5', '3', 'Perempuan', 2016, 2019, 'Psr. Tambun No. 719', '(+62) 20 1669 210', '4', NULL, NULL, NULL),
(163, 164, '19812263', 11706163, '2', '17', 'Perempuan', 2016, 2019, 'Jln. Astana Anyar No. 786', '(+62) 832 7744 794', '4', NULL, NULL, NULL),
(164, 165, '19812264', 11706164, '6', '23', 'Perempuan', 2017, 2020, 'Ki. Wahid No. 851', '(+62) 884 7510 1423', '4', NULL, NULL, NULL),
(165, 166, '19812265', 11706165, '3', '11', 'Laki-laki', 2015, 2018, 'Dk. Bata Putih No. 972', '0610 9262 4869', '4', NULL, NULL, NULL),
(166, 167, '19812266', 11706166, '5', '3', 'Perempuan', 2015, 2018, 'Ds. Dipenogoro No. 905', '0849 975 343', '1', NULL, NULL, NULL),
(167, 168, '19812267', 11706167, '7', '17', 'Laki-laki', 2016, 2019, 'Ki. Jagakarsa No. 736', '0382 6712 1648', '3', NULL, NULL, NULL),
(168, 169, '19812268', 11706168, '3', '18', 'Perempuan', 2017, 2020, 'Jln. Yos No. 294', '0512 2893 399', '4', NULL, NULL, NULL),
(169, 170, '19812269', 11706169, '3', '9', 'Perempuan', 2013, 2016, 'Psr. B.Agam Dlm No. 688', '0221 3052 247', '4', NULL, NULL, NULL),
(170, 171, '19812270', 11706170, '4', '2', 'Laki-laki', 2013, 2016, 'Ki. Baranang Siang No. 443', '(+62) 697 6834 902', '1', NULL, NULL, NULL),
(171, 172, '19812271', 11706171, '3', '7', 'Laki-laki', 2015, 2018, 'Gg. S. Parman No. 578', '(+62) 25 0874 4805', '3', NULL, NULL, NULL),
(172, 173, '19812272', 11706172, '6', '16', 'Perempuan', 2016, 2019, 'Gg. Ronggowarsito No. 713', '0766 7229 0316', '2', NULL, NULL, NULL),
(173, 174, '19812273', 11706173, '5', '8', 'Perempuan', 2017, 2020, 'Jr. Wahidin Sudirohusodo No. 240', '(+62) 841 4689 214', '4', NULL, NULL, NULL),
(174, 175, '19812274', 11706174, '6', '11', 'Perempuan', 2014, 2017, 'Jr. Sugiono No. 572', '0344 3128 554', '2', NULL, NULL, NULL),
(175, 176, '19812275', 11706175, '3', '13', 'Laki-laki', 2017, 2020, 'Ds. Bass No. 925', '(+62) 604 0226 2817', '4', NULL, NULL, NULL),
(176, 177, '19812276', 11706176, '2', '7', 'Laki-laki', 2016, 2019, 'Psr. K.H. Maskur No. 893', '0509 5013 0670', '2', NULL, NULL, NULL),
(177, 178, '19812277', 11706177, '2', '25', 'Perempuan', 2016, 2019, 'Jr. Sutami No. 625', '0423 9942 036', '4', NULL, NULL, NULL),
(178, 179, '19812278', 11706178, '4', '18', 'Laki-laki', 2016, 2019, 'Gg. Salam No. 669', '(+62) 386 4002 608', '2', NULL, NULL, NULL),
(179, 180, '19812279', 11706179, '5', '19', 'Perempuan', 2013, 2016, 'Dk. Aceh No. 732', '0859 4882 0398', '1', NULL, NULL, NULL),
(180, 181, '19812280', 11706180, '5', '23', 'Perempuan', 2013, 2016, 'Psr. Gajah Mada No. 154', '(+62) 381 3495 1769', '2', NULL, NULL, NULL),
(181, 182, '19812281', 11706181, '4', '4', 'Perempuan', 2014, 2017, 'Dk. Labu No. 773', '(+62) 874 3137 8206', '4', NULL, NULL, NULL),
(182, 183, '19812282', 11706182, '7', '11', 'Laki-laki', 2014, 2017, 'Kpg. Umalas No. 900', '0665 6776 861', '2', NULL, NULL, NULL),
(183, 184, '19812283', 11706183, '5', '13', 'Laki-laki', 2013, 2016, 'Jln. Suryo Pranoto No. 566', '0599 8377 152', '4', NULL, NULL, NULL),
(184, 185, '19812284', 11706184, '1', '1', 'Perempuan', 2016, 2019, 'Jln. Haji No. 528', '0388 4957 934', '1', NULL, NULL, NULL),
(185, 186, '19812285', 11706185, '4', '8', 'Perempuan', 2016, 2019, 'Ki. Bahagia No. 626', '0496 7652 6609', '3', NULL, NULL, NULL),
(186, 187, '19812286', 11706186, '1', '5', 'Laki-laki', 2017, 2020, 'Kpg. Madrasah No. 677', '(+62) 712 5662 2315', '3', NULL, NULL, NULL),
(187, 188, '19812287', 11706187, '3', '17', 'Laki-laki', 2013, 2016, 'Psr. Achmad No. 310', '0875 1021 263', '2', NULL, NULL, NULL),
(188, 189, '19812288', 11706188, '4', '20', 'Laki-laki', 2014, 2017, 'Psr. Kyai Mojo No. 696', '0323 1199 4147', '2', NULL, NULL, NULL),
(189, 190, '19812289', 11706189, '7', '7', 'Laki-laki', 2014, 2017, 'Ds. Tambun No. 609', '(+62) 750 2645 8976', '4', NULL, NULL, NULL),
(190, 191, '19812290', 11706190, '5', '10', 'Laki-laki', 2016, 2019, 'Psr. Halim No. 643', '(+62) 694 7522 811', '2', NULL, NULL, NULL),
(191, 192, '19812291', 11706191, '7', '3', 'Perempuan', 2015, 2018, 'Ds. Halim No. 323', '(+62) 217 3067 617', '3', NULL, NULL, NULL),
(192, 193, '19812292', 11706192, '4', '3', 'Laki-laki', 2017, 2020, 'Ds. Abdul No. 797', '(+62) 244 6360 015', '3', NULL, NULL, NULL),
(193, 194, '19812293', 11706193, '7', '24', 'Laki-laki', 2015, 2018, 'Gg. Antapani Lama No. 963', '(+62) 722 5727 315', '1', NULL, NULL, NULL),
(194, 195, '19812294', 11706194, '5', '21', 'Perempuan', 2013, 2016, 'Ki. Imam No. 98', '026 2829 6624', '4', NULL, NULL, NULL),
(195, 196, '19812295', 11706195, '7', '22', 'Perempuan', 2016, 2019, 'Jln. Kebangkitan Nasional No. 174', '0291 1427 4343', '2', NULL, NULL, NULL),
(196, 197, '19812296', 11706196, '2', '10', 'Perempuan', 2016, 2019, 'Kpg. Sumpah Pemuda No. 991', '0571 0072 4680', '3', NULL, NULL, NULL),
(197, 198, '19812297', 11706197, '4', '14', 'Laki-laki', 2015, 2018, 'Ki. Gajah No. 862', '(+62) 269 6524 9439', '3', NULL, NULL, NULL),
(198, 199, '19812298', 11706198, '3', '24', 'Laki-laki', 2015, 2018, 'Ds. Suharso No. 254', '0766 0685 8637', '4', NULL, NULL, NULL),
(199, 200, '19812299', 11706199, '4', '2', 'Laki-laki', 2016, 2019, 'Gg. Wahidin Sudirohusodo No. 623', '(+62) 739 9965 5390', '1', NULL, NULL, NULL),
(200, 201, '19812300', 11706200, '3', '11', 'Perempuan', 2017, 2020, 'Psr. Gremet No. 911', '0271 9951 3659', '4', NULL, NULL, NULL),
(201, 202, '19812301', 11706201, '6', '4', 'Laki-laki', 2014, 2017, 'Ki. Lada No. 344', '0616 2454 077', '3', NULL, NULL, NULL),
(202, 203, '19812302', 11706202, '3', '23', 'Laki-laki', 2017, 2020, 'Jr. Suharso No. 889', '(+62) 354 2139 7204', '1', NULL, NULL, NULL),
(203, 204, '19812303', 11706203, '2', '8', 'Laki-laki', 2015, 2018, 'Ki. Batako No. 295', '0643 2662 4228', '3', NULL, NULL, NULL),
(204, 205, '19812304', 11706204, '4', '15', 'Perempuan', 2013, 2016, 'Psr. Mahakam No. 751', '0612 6568 1062', '4', NULL, NULL, NULL),
(205, 206, '19812305', 11706205, '1', '7', 'Laki-laki', 2015, 2018, 'Jln. Moch. Toha No. 177', '(+62) 483 1068 1362', '1', NULL, NULL, NULL),
(206, 207, '19812306', 11706206, '4', '20', 'Perempuan', 2015, 2018, 'Jln. Otista No. 48', '0502 1011 0203', '1', NULL, NULL, NULL),
(207, 208, '19812307', 11706207, '7', '14', 'Laki-laki', 2016, 2019, 'Ki. Moch. Ramdan No. 604', '(+62) 611 5287 077', '2', NULL, NULL, NULL),
(208, 209, '19812308', 11706208, '3', '10', 'Laki-laki', 2013, 2016, 'Jln. Gegerkalong Hilir No. 182', '025 9065 8708', '4', NULL, NULL, NULL),
(209, 210, '19812309', 11706209, '6', '4', 'Laki-laki', 2016, 2019, 'Jln. Samanhudi No. 976', '0818 6180 0662', '2', NULL, NULL, NULL),
(210, 211, '19812310', 11706210, '1', '21', 'Laki-laki', 2014, 2017, 'Jln. Baja Raya No. 647', '0797 8100 091', '3', NULL, NULL, NULL),
(211, 212, '19812311', 11706211, '4', '12', 'Perempuan', 2016, 2019, 'Kpg. Bah Jaya No. 293', '(+62) 806 432 943', '2', NULL, NULL, NULL),
(212, 213, '19812312', 11706212, '2', '23', 'Laki-laki', 2013, 2016, 'Psr. Rumah Sakit No. 926', '0634 0089 3275', '4', NULL, NULL, NULL),
(213, 214, '19812313', 11706213, '1', '11', 'Laki-laki', 2017, 2020, 'Jln. Tambak No. 146', '(+62) 483 0378 957', '3', NULL, NULL, NULL),
(214, 215, '19812314', 11706214, '5', '23', 'Perempuan', 2013, 2016, 'Kpg. Diponegoro No. 203', '0564 8860 1738', '1', NULL, NULL, NULL),
(215, 216, '19812315', 11706215, '6', '13', 'Laki-laki', 2015, 2018, 'Ki. Bagonwoto  No. 106', '(+62) 927 2777 005', '3', NULL, NULL, NULL),
(216, 217, '19812316', 11706216, '3', '24', 'Perempuan', 2015, 2018, 'Ds. Baiduri No. 110', '0828 411 446', '1', NULL, NULL, NULL),
(217, 218, '19812317', 11706217, '4', '11', 'Laki-laki', 2017, 2020, 'Ki. Cikutra Timur No. 390', '(+62) 29 3998 4863', '1', NULL, NULL, NULL),
(218, 219, '19812318', 11706218, '7', '1', 'Laki-laki', 2016, 2019, 'Dk. Ciumbuleuit No. 607', '0497 3224 7027', '3', NULL, NULL, NULL),
(219, 220, '19812319', 11706219, '5', '21', 'Laki-laki', 2016, 2019, 'Dk. Bayam No. 422', '0864 8944 0943', '1', NULL, NULL, NULL),
(220, 221, '19812320', 11706220, '4', '11', 'Perempuan', 2017, 2020, 'Jln. Ters. Buah Batu No. 553', '(+62) 854 3789 7348', '2', NULL, NULL, NULL),
(221, 222, '19812321', 11706221, '7', '22', 'Perempuan', 2014, 2017, 'Ki. Tambun No. 422', '0685 4101 6945', '3', NULL, NULL, NULL),
(222, 223, '19812322', 11706222, '7', '20', 'Laki-laki', 2016, 2019, 'Jr. Baja No. 732', '0603 0567 995', '2', NULL, NULL, NULL),
(223, 224, '19812323', 11706223, '7', '10', 'Perempuan', 2014, 2017, 'Jr. Sutan Syahrir No. 102', '(+62) 842 5044 517', '2', NULL, NULL, NULL),
(224, 225, '19812324', 11706224, '7', '17', 'Perempuan', 2017, 2020, 'Dk. Kartini No. 244', '(+62) 919 7460 2382', '3', NULL, NULL, NULL),
(225, 226, '19812325', 11706225, '5', '15', 'Perempuan', 2015, 2018, 'Ki. Kalimalang No. 218', '0220 3724 089', '1', NULL, NULL, NULL),
(226, 227, '19812326', 11706226, '2', '20', 'Laki-laki', 2017, 2020, 'Ki. Baan No. 857', '(+62) 344 3876 1315', '3', NULL, NULL, NULL),
(227, 228, '19812327', 11706227, '3', '20', 'Perempuan', 2013, 2016, 'Dk. Kalimalang No. 427', '0319 9330 2571', '2', NULL, NULL, NULL),
(228, 229, '19812328', 11706228, '2', '11', 'Perempuan', 2017, 2020, 'Kpg. Bahagia  No. 484', '(+62) 928 4617 688', '3', NULL, NULL, NULL),
(229, 230, '19812329', 11706229, '4', '7', 'Perempuan', 2015, 2018, 'Kpg. Setia Budi No. 194', '(+62) 493 2027 3579', '3', NULL, NULL, NULL),
(230, 231, '19812330', 11706230, '1', '23', 'Laki-laki', 2013, 2016, 'Psr. Banda No. 761', '0500 2228 063', '1', NULL, NULL, NULL),
(231, 232, '19812331', 11706231, '2', '22', 'Perempuan', 2016, 2019, 'Psr. Otista No. 516', '0840 0686 145', '3', NULL, NULL, NULL),
(232, 233, '19812332', 11706232, '2', '22', 'Perempuan', 2016, 2019, 'Dk. Sunaryo No. 150', '0989 2165 8463', '3', NULL, NULL, NULL),
(233, 234, '19812333', 11706233, '2', '7', 'Perempuan', 2014, 2017, 'Jr. Untung Suropati No. 448', '0428 3636 6214', '4', NULL, NULL, NULL),
(234, 235, '19812334', 11706234, '3', '2', 'Laki-laki', 2014, 2017, 'Jr. Abdullah No. 1', '0761 4543 9111', '1', NULL, NULL, NULL),
(235, 236, '19812335', 11706235, '5', '8', 'Laki-laki', 2017, 2020, 'Jln. Baabur Royan No. 661', '(+62) 609 5147 404', '4', NULL, NULL, NULL),
(236, 237, '19812336', 11706236, '3', '9', 'Perempuan', 2016, 2019, 'Gg. Siliwangi No. 689', '0214 3359 9854', '4', NULL, NULL, NULL),
(237, 238, '19812337', 11706237, '4', '18', 'Laki-laki', 2014, 2017, 'Jln. Ikan No. 558', '0260 0229 3686', '4', NULL, NULL, NULL),
(238, 239, '19812338', 11706238, '5', '13', 'Perempuan', 2016, 2019, 'Ki. Babakan No. 515', '(+62) 532 1264 5165', '3', NULL, NULL, NULL),
(239, 240, '19812339', 11706239, '4', '16', 'Laki-laki', 2013, 2016, 'Jln. Qrisdoren No. 979', '0220 9981 8196', '4', NULL, NULL, NULL),
(240, 241, '19812340', 11706240, '6', '13', 'Perempuan', 2014, 2017, 'Gg. Basuki No. 41', '0968 4485 4702', '3', NULL, NULL, NULL),
(241, 242, '19812341', 11706241, '3', '23', 'Laki-laki', 2014, 2017, 'Psr. Sudirman No. 948', '0849 7953 2642', '3', NULL, NULL, NULL),
(242, 243, '19812342', 11706242, '7', '25', 'Laki-laki', 2015, 2018, 'Jln. Bak Air No. 503', '(+62) 452 8132 8527', '2', NULL, NULL, NULL),
(243, 244, '19812343', 11706243, '4', '12', 'Perempuan', 2016, 2019, 'Psr. Juanda No. 787', '(+62) 422 4938 692', '4', NULL, NULL, NULL),
(244, 245, '19812344', 11706244, '3', '12', 'Perempuan', 2015, 2018, 'Psr. Salak No. 317', '(+62) 455 8969 4458', '3', NULL, NULL, NULL),
(245, 246, '19812345', 11706245, '1', '6', 'Perempuan', 2015, 2018, 'Psr. Bah Jaya No. 740', '0879 7411 703', '2', NULL, NULL, NULL),
(246, 247, '19812346', 11706246, '6', '17', 'Perempuan', 2013, 2016, 'Gg. Ters. Buah Batu No. 84', '0297 7058 846', '4', NULL, NULL, NULL),
(247, 248, '19812347', 11706247, '5', '4', 'Perempuan', 2015, 2018, 'Dk. Dago No. 91', '0682 8608 027', '3', NULL, NULL, NULL),
(248, 249, '19812348', 11706248, '1', '19', 'Laki-laki', 2015, 2018, 'Psr. Rajawali Timur No. 59', '(+62) 955 7773 201', '2', NULL, NULL, NULL),
(249, 250, '19812349', 11706249, '6', '21', 'Laki-laki', 2016, 2019, 'Dk. Suryo No. 297', '(+62) 360 3997 1213', '1', NULL, NULL, NULL),
(250, 251, '19812350', 11706250, '7', '17', 'Perempuan', 2015, 2018, 'Jr. Sudirman No. 940', '(+62) 415 5505 7961', '3', NULL, NULL, NULL),
(251, 252, '19812351', 11706251, '3', '3', 'Perempuan', 2013, 2016, 'Kpg. Sam Ratulangi No. 648', '0261 6776 0672', '4', NULL, NULL, NULL),
(252, 253, '19812352', 11706252, '1', '5', 'Laki-laki', 2014, 2017, 'Jln. Basuki No. 416', '025 6153 3155', '4', NULL, NULL, NULL),
(253, 254, '19812353', 11706253, '1', '20', 'Laki-laki', 2013, 2016, 'Gg. Siliwangi No. 725', '0357 9889 975', '2', NULL, NULL, NULL),
(254, 255, '19812354', 11706254, '6', '17', 'Perempuan', 2016, 2019, 'Ds. Yosodipuro No. 9', '(+62) 705 8700 399', '3', NULL, NULL, NULL),
(255, 256, '19812355', 11706255, '5', '14', 'Perempuan', 2013, 2016, 'Jln. Merdeka No. 826', '(+62) 893 8568 7684', '2', NULL, NULL, NULL),
(256, 257, '19812356', 11706256, '2', '13', 'Laki-laki', 2017, 2020, 'Ki. Bayam No. 828', '(+62) 281 7030 392', '4', NULL, NULL, NULL),
(257, 258, '19812357', 11706257, '7', '13', 'Perempuan', 2013, 2016, 'Ki. S. Parman No. 519', '(+62) 544 6838 8221', '1', NULL, NULL, NULL),
(258, 259, '19812358', 11706258, '1', '17', 'Laki-laki', 2017, 2020, 'Ki. Supono No. 460', '028 6507 1194', '1', NULL, NULL, NULL),
(259, 260, '19812359', 11706259, '1', '5', 'Perempuan', 2017, 2020, 'Ki. Bakin No. 281', '0883 8689 850', '3', NULL, NULL, NULL),
(260, 261, '19812360', 11706260, '1', '5', 'Perempuan', 2013, 2016, 'Ki. Bakau Griya Utama No. 284', '(+62) 869 832 768', '4', NULL, NULL, NULL),
(261, 262, '19812361', 11706261, '1', '4', 'Perempuan', 2013, 2016, 'Kpg. Flora No. 595', '(+62) 20 0822 7797', '1', NULL, NULL, NULL),
(262, 263, '19812362', 11706262, '2', '10', 'Laki-laki', 2013, 2016, 'Ds. Raya Ujungberung No. 655', '(+62) 815 8626 2100', '4', NULL, NULL, NULL),
(263, 264, '19812363', 11706263, '7', '9', 'Perempuan', 2017, 2020, 'Kpg. Gajah Mada No. 590', '(+62) 703 8455 064', '2', NULL, NULL, NULL),
(264, 265, '19812364', 11706264, '3', '3', 'Laki-laki', 2013, 2016, 'Kpg. R.M. Said No. 762', '0686 7011 7742', '4', NULL, NULL, NULL),
(265, 266, '19812365', 11706265, '2', '16', 'Laki-laki', 2015, 2018, 'Psr. Ikan No. 547', '(+62) 489 8602 7651', '4', NULL, NULL, NULL),
(266, 267, '19812366', 11706266, '2', '25', 'Laki-laki', 2013, 2016, 'Psr. Juanda No. 682', '0510 3678 0408', '3', NULL, NULL, NULL),
(267, 268, '19812367', 11706267, '7', '22', 'Laki-laki', 2016, 2019, 'Psr. Baya Kali Bungur No. 256', '(+62) 423 1751 7987', '1', NULL, NULL, NULL),
(268, 269, '19812368', 11706268, '5', '18', 'Perempuan', 2014, 2017, 'Gg. Gambang No. 516', '0930 7192 181', '2', NULL, NULL, NULL),
(269, 270, '19812369', 11706269, '7', '9', 'Laki-laki', 2014, 2017, 'Kpg. Pasirkoja No. 886', '0468 9554 846', '3', NULL, NULL, NULL),
(270, 271, '19812370', 11706270, '3', '6', 'Perempuan', 2013, 2016, 'Psr. M.T. Haryono No. 364', '(+62) 507 3594 506', '1', NULL, NULL, NULL),
(271, 272, '19812371', 11706271, '4', '2', 'Laki-laki', 2016, 2019, 'Kpg. Juanda No. 683', '0782 0965 190', '1', NULL, NULL, NULL),
(272, 273, '19812372', 11706272, '5', '12', 'Perempuan', 2015, 2018, 'Gg. Madiun No. 466', '(+62) 277 7177 628', '1', NULL, NULL, NULL),
(273, 274, '19812373', 11706273, '5', '10', 'Perempuan', 2015, 2018, 'Jr. Dr. Junjunan No. 880', '0220 3255 573', '4', NULL, NULL, NULL),
(274, 275, '19812374', 11706274, '1', '10', 'Perempuan', 2013, 2016, 'Jr. Antapani Lama No. 170', '0742 4428 657', '4', NULL, NULL, NULL),
(275, 276, '19812375', 11706275, '3', '1', 'Perempuan', 2015, 2018, 'Ds. Kebonjati No. 632', '029 7088 4429', '3', NULL, NULL, NULL),
(276, 277, '19812376', 11706276, '3', '12', 'Laki-laki', 2015, 2018, 'Jr. Tentara Pelajar No. 59', '(+62) 746 7643 552', '3', NULL, NULL, NULL),
(277, 278, '19812377', 11706277, '6', '20', 'Laki-laki', 2017, 2020, 'Ki. Astana Anyar No. 994', '(+62) 955 4421 888', '2', NULL, NULL, NULL),
(278, 279, '19812378', 11706278, '7', '15', 'Perempuan', 2017, 2020, 'Jr. Ters. Pasir Koja No. 176', '(+62) 965 5941 914', '4', NULL, NULL, NULL),
(279, 280, '19812379', 11706279, '7', '24', 'Laki-laki', 2016, 2019, 'Dk. Aceh No. 438', '0480 9953 079', '2', NULL, NULL, NULL),
(280, 281, '19812380', 11706280, '7', '6', 'Laki-laki', 2014, 2017, 'Dk. Barasak No. 287', '0622 1139 874', '4', NULL, NULL, NULL),
(281, 282, '19812381', 11706281, '2', '12', 'Laki-laki', 2014, 2017, 'Kpg. Ki Hajar Dewantara No. 747', '(+62) 597 1171 8970', '3', NULL, NULL, NULL),
(282, 283, '19812382', 11706282, '1', '6', 'Perempuan', 2016, 2019, 'Jr. Teuku Umar No. 128', '0713 9255 781', '3', NULL, NULL, NULL),
(283, 284, '19812383', 11706283, '6', '23', 'Laki-laki', 2014, 2017, 'Ki. Tangkuban Perahu No. 704', '029 6131 212', '3', NULL, NULL, NULL),
(284, 285, '19812384', 11706284, '3', '18', 'Laki-laki', 2017, 2020, 'Dk. Rajawali Timur No. 853', '0423 3927 5143', '4', NULL, NULL, NULL),
(285, 286, '19812385', 11706285, '6', '19', 'Perempuan', 2017, 2020, 'Dk. Pahlawan No. 113', '(+62) 915 3321 181', '4', NULL, NULL, NULL),
(286, 287, '19812386', 11706286, '5', '1', 'Perempuan', 2017, 2020, 'Gg. Ikan No. 879', '(+62) 496 9324 535', '4', NULL, NULL, NULL),
(287, 288, '19812387', 11706287, '5', '11', 'Laki-laki', 2015, 2018, 'Gg. Baja No. 45', '(+62) 428 1959 9914', '4', NULL, NULL, NULL),
(288, 289, '19812388', 11706288, '4', '6', 'Perempuan', 2013, 2016, 'Jr. Gardujati No. 970', '0844 680 540', '4', NULL, NULL, NULL),
(289, 290, '19812389', 11706289, '7', '12', 'Perempuan', 2013, 2016, 'Ds. Banda No. 447', '(+62) 770 9320 9334', '1', NULL, NULL, NULL),
(290, 291, '19812390', 11706290, '2', '12', 'Perempuan', 2015, 2018, 'Kpg. Pattimura No. 493', '(+62) 551 0740 702', '3', NULL, NULL, NULL),
(291, 292, '19812391', 11706291, '4', '4', 'Perempuan', 2014, 2017, 'Kpg. Yosodipuro No. 751', '(+62) 948 4294 8807', '3', NULL, NULL, NULL),
(292, 293, '19812392', 11706292, '3', '16', 'Perempuan', 2017, 2020, 'Dk. Salam No. 94', '0810 005 950', '2', NULL, NULL, NULL),
(293, 294, '19812393', 11706293, '3', '13', 'Perempuan', 2013, 2016, 'Kpg. Bagonwoto  No. 610', '0913 0387 6251', '1', NULL, NULL, NULL),
(294, 295, '19812394', 11706294, '1', '19', 'Laki-laki', 2014, 2017, 'Gg. Adisucipto No. 887', '(+62) 724 8193 6005', '1', NULL, NULL, NULL),
(295, 296, '19812395', 11706295, '6', '16', 'Perempuan', 2014, 2017, 'Jln. Jakarta No. 456', '(+62) 762 8788 594', '3', NULL, NULL, NULL),
(296, 297, '19812396', 11706296, '7', '10', 'Laki-laki', 2017, 2020, 'Ki. Flores No. 677', '025 3907 699', '1', NULL, NULL, NULL),
(297, 298, '19812397', 11706297, '7', '14', 'Perempuan', 2015, 2018, 'Jr. Basuki Rahmat  No. 143', '(+62) 303 3692 7754', '4', NULL, NULL, NULL),
(298, 299, '19812398', 11706298, '7', '1', 'Laki-laki', 2017, 2020, 'Ki. Rajawali No. 990', '(+62) 410 8343 433', '3', NULL, NULL, NULL),
(299, 300, '19812399', 11706299, '5', '18', 'Perempuan', 2016, 2019, 'Gg. Qrisdoren No. 137', '0733 0457 190', '3', NULL, NULL, NULL),
(300, 301, '19812400', 11706300, '1', '2', 'Perempuan', 2013, 2016, 'Ds. Bank Dagang Negara No. 449', '(+62) 561 9016 9919', '2', NULL, NULL, NULL),
(301, 302, '19812401', 11706301, '7', '9', 'Perempuan', 2015, 2018, 'Ds. Cut Nyak Dien No. 612', '(+62) 603 4575 491', '1', NULL, NULL, NULL),
(302, 303, '19812402', 11706302, '6', '20', 'Perempuan', 2013, 2016, 'Gg. Kiaracondong No. 280', '(+62) 361 4748 437', '4', NULL, NULL, NULL),
(303, 304, '19812403', 11706303, '4', '16', 'Perempuan', 2014, 2017, 'Ds. Jayawijaya No. 575', '0573 9599 2370', '4', NULL, NULL, NULL),
(304, 305, '19812404', 11706304, '3', '24', 'Perempuan', 2014, 2017, 'Jr. Sukajadi No. 559', '(+62) 419 8697 923', '1', NULL, NULL, NULL),
(305, 306, '19812405', 11706305, '5', '8', 'Perempuan', 2013, 2016, 'Ds. Bara Tambar No. 89', '(+62) 407 0952 7866', '3', NULL, NULL, NULL),
(306, 307, '19812406', 11706306, '3', '13', 'Perempuan', 2014, 2017, 'Jln. Gegerkalong Hilir No. 469', '(+62) 28 4442 092', '2', NULL, NULL, NULL),
(307, 308, '19812407', 11706307, '1', '7', 'Perempuan', 2017, 2020, 'Ki. BKR No. 627', '(+62) 394 5799 409', '2', NULL, NULL, NULL),
(308, 309, '19812408', 11706308, '1', '16', 'Laki-laki', 2014, 2017, 'Kpg. Gajah Mada No. 381', '(+62) 716 6022 7228', '4', NULL, NULL, NULL),
(309, 310, '19812409', 11706309, '1', '11', 'Laki-laki', 2014, 2017, 'Psr. Moch. Yamin No. 526', '(+62) 234 5181 6497', '2', NULL, NULL, NULL),
(310, 311, '19812410', 11706310, '5', '4', 'Laki-laki', 2014, 2017, 'Jln. Teuku Umar No. 460', '0838 108 735', '2', NULL, NULL, NULL),
(311, 312, '19812411', 11706311, '5', '13', 'Perempuan', 2013, 2016, 'Ki. Hang No. 750', '0633 0662 680', '2', NULL, NULL, NULL),
(312, 313, '19812412', 11706312, '4', '25', 'Laki-laki', 2015, 2018, 'Ds. Honggowongso No. 45', '(+62) 339 7410 0963', '1', NULL, NULL, NULL),
(313, 314, '19812413', 11706313, '2', '19', 'Laki-laki', 2013, 2016, 'Jln. Jayawijaya No. 781', '0693 2773 229', '3', NULL, NULL, NULL),
(314, 315, '19812414', 11706314, '5', '4', 'Laki-laki', 2016, 2019, 'Ds. Yoga No. 231', '0235 4235 8523', '2', NULL, NULL, NULL),
(315, 316, '19812415', 11706315, '5', '19', 'Perempuan', 2016, 2019, 'Dk. Baladewa No. 194', '0498 1310 803', '2', NULL, NULL, NULL),
(316, 317, '19812416', 11706316, '3', '17', 'Perempuan', 2014, 2017, 'Jr. Imam No. 957', '(+62) 595 6679 834', '3', NULL, NULL, NULL),
(317, 318, '19812417', 11706317, '1', '15', 'Laki-laki', 2016, 2019, 'Jr. Gambang No. 740', '(+62) 553 3024 884', '2', NULL, NULL, NULL),
(318, 319, '19812418', 11706318, '6', '19', 'Perempuan', 2014, 2017, 'Ds. Supomo No. 549', '(+62) 355 5268 279', '1', NULL, NULL, NULL),
(319, 320, '19812419', 11706319, '1', '5', 'Laki-laki', 2014, 2017, 'Psr. Bawal No. 314', '(+62) 855 6474 2638', '2', NULL, NULL, NULL),
(320, 321, '19812420', 11706320, '2', '24', 'Laki-laki', 2014, 2017, 'Dk. Baung No. 940', '(+62) 253 2316 2594', '1', NULL, NULL, NULL),
(321, 322, '19812421', 11706321, '6', '16', 'Perempuan', 2016, 2019, 'Dk. Sutarjo No. 303', '0411 1396 2960', '2', NULL, NULL, NULL),
(322, 323, '19812422', 11706322, '2', '15', 'Perempuan', 2016, 2019, 'Dk. Basoka Raya No. 745', '(+62) 24 4619 0403', '1', NULL, NULL, NULL),
(323, 324, '19812423', 11706323, '6', '4', 'Laki-laki', 2017, 2020, 'Jr. Banceng Pondok No. 799', '(+62) 574 3927 4687', '1', NULL, NULL, NULL),
(324, 325, '19812424', 11706324, '7', '4', 'Perempuan', 2013, 2016, 'Psr. Soekarno Hatta No. 37', '(+62) 852 315 648', '2', NULL, NULL, NULL),
(325, 326, '19812425', 11706325, '4', '7', 'Laki-laki', 2015, 2018, 'Psr. Raden No. 760', '(+62) 993 6811 288', '4', NULL, NULL, NULL),
(326, 327, '19812426', 11706326, '2', '11', 'Laki-laki', 2017, 2020, 'Ki. Reksoninten No. 238', '0726 5584 0278', '2', NULL, NULL, NULL),
(327, 328, '19812427', 11706327, '5', '14', 'Perempuan', 2015, 2018, 'Ki. Teuku Umar No. 892', '0310 9019 562', '1', NULL, NULL, NULL),
(328, 329, '19812428', 11706328, '5', '17', 'Laki-laki', 2017, 2020, 'Ki. Casablanca No. 920', '(+62) 876 6548 328', '3', NULL, NULL, NULL),
(329, 330, '19812429', 11706329, '3', '22', 'Perempuan', 2016, 2019, 'Psr. Yogyakarta No. 921', '0812 284 579', '1', NULL, NULL, NULL),
(330, 331, '19812430', 11706330, '2', '10', 'Laki-laki', 2015, 2018, 'Psr. Bass No. 747', '(+62) 690 8791 246', '1', NULL, NULL, NULL),
(331, 332, '19812431', 11706331, '6', '5', 'Laki-laki', 2014, 2017, 'Jr. B.Agam Dlm No. 861', '0982 6233 132', '4', NULL, NULL, NULL),
(332, 333, '19812432', 11706332, '5', '10', 'Laki-laki', 2013, 2016, 'Ds. Sutoyo No. 880', '(+62) 22 7980 420', '4', NULL, NULL, NULL),
(333, 334, '19812433', 11706333, '4', '20', 'Perempuan', 2015, 2018, 'Dk. Bank Dagang Negara No. 113', '(+62) 301 2616 0670', '3', NULL, NULL, NULL),
(334, 335, '19812434', 11706334, '6', '18', 'Perempuan', 2015, 2018, 'Dk. Baranang Siang No. 134', '(+62) 489 9116 031', '2', NULL, NULL, NULL),
(335, 336, '19812435', 11706335, '6', '12', 'Laki-laki', 2015, 2018, 'Jr. Sutoyo No. 581', '0583 1258 263', '2', NULL, NULL, NULL),
(336, 337, '19812436', 11706336, '4', '24', 'Perempuan', 2016, 2019, 'Jln. Krakatau No. 41', '(+62) 810 682 828', '4', NULL, NULL, NULL),
(337, 338, '19812437', 11706337, '2', '14', 'Laki-laki', 2015, 2018, 'Psr. Baranang Siang Indah No. 869', '(+62) 658 9570 1118', '3', NULL, NULL, NULL),
(338, 339, '19812438', 11706338, '6', '12', 'Perempuan', 2015, 2018, 'Jr. M.T. Haryono No. 545', '020 2577 2798', '1', NULL, NULL, NULL),
(339, 340, '19812439', 11706339, '2', '3', 'Perempuan', 2016, 2019, 'Gg. Yogyakarta No. 14', '0466 1086 7209', '1', NULL, NULL, NULL),
(340, 341, '19812440', 11706340, '4', '14', 'Laki-laki', 2017, 2020, 'Psr. Jambu No. 384', '0867 584 536', '4', NULL, NULL, NULL),
(341, 342, '19812441', 11706341, '6', '24', 'Perempuan', 2016, 2019, 'Gg. Kali No. 105', '0506 3173 8497', '1', NULL, NULL, NULL),
(342, 343, '19812442', 11706342, '2', '2', 'Perempuan', 2013, 2016, 'Psr. Cikapayang No. 373', '(+62) 23 3024 3790', '2', NULL, NULL, NULL),
(343, 344, '19812443', 11706343, '2', '8', 'Laki-laki', 2015, 2018, 'Dk. Muwardi No. 205', '0499 8982 2959', '3', NULL, NULL, NULL),
(344, 345, '19812444', 11706344, '1', '14', 'Laki-laki', 2016, 2019, 'Kpg. Dipenogoro No. 150', '0887 3069 1850', '3', NULL, NULL, NULL),
(345, 346, '19812445', 11706345, '6', '25', 'Laki-laki', 2014, 2017, 'Psr. Kartini No. 464', '(+62) 28 3460 6842', '3', NULL, NULL, NULL),
(346, 347, '19812446', 11706346, '1', '12', 'Perempuan', 2014, 2017, 'Jr. B.Agam 1 No. 154', '0792 8386 562', '4', NULL, NULL, NULL),
(347, 348, '19812447', 11706347, '4', '18', 'Laki-laki', 2017, 2020, 'Dk. S. Parman No. 859', '0727 7651 0345', '3', NULL, NULL, NULL),
(348, 349, '19812448', 11706348, '2', '15', 'Laki-laki', 2015, 2018, 'Jln. Jambu No. 189', '(+62) 488 9599 941', '4', NULL, NULL, NULL),
(349, 350, '19812449', 11706349, '5', '6', 'Laki-laki', 2017, 2020, 'Jr. Yogyakarta No. 605', '(+62) 531 0309 254', '4', NULL, NULL, NULL),
(350, 351, '19812450', 11706350, '4', '20', 'Laki-laki', 2015, 2018, 'Kpg. Sutarjo No. 79', '(+62) 24 4683 6960', '3', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kerja', NULL, NULL),
(2, 'Kuliah', NULL, NULL),
(3, 'Wirausaha', NULL, NULL),
(4, 'Belum Memilih', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_details`
--

CREATE TABLE `status_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `jabatan` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_instansi` bigint(20) DEFAULT NULL,
  `pendapatan` bigint(20) DEFAULT NULL,
  `durasi_kontrak` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_details`
--

INSERT INTO `status_details` (`id`, `nis`, `status_id`, `jabatan`, `id_instansi`, `pendapatan`, `durasi_kontrak`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 11706001, 1, 'CEO', 10, 1000000, '8', '2020-05-08 18:23:44', '2020-05-08 18:23:44', NULL),
(2, 11706002, 1, 'Teknik Informatika', 25, 30000000, 'Bachelor', '2020-05-08 18:23:44', '2020-05-08 18:23:44', NULL),
(3, 11706003, 2, 'Sastra Inggris', 84, 4500000, 'Bachelor', '2020-05-08 18:23:44', '2020-05-08 18:23:44', NULL),
(4, 11706004, 1, 'Data Analist', 78, 300000, '7', '2020-05-08 18:23:44', '2020-05-08 18:23:44', NULL),
(5, 11706005, 2, 'Project Manager', 48, 1000000, '9', '2020-05-08 18:23:44', '2020-05-08 18:23:44', NULL),
(6, 11706006, 1, 'CEO', 99, 7770000, '2', '2020-05-08 18:23:44', '2020-05-08 18:23:44', NULL),
(7, 11706007, 3, 'Boss', 40, 300000, '4', '2020-05-08 18:23:44', '2020-05-08 18:23:44', NULL),
(8, 11706008, 2, 'CEO', 66, 5000000, '6', '2020-05-08 18:23:44', '2020-05-08 18:23:44', NULL),
(9, 11706009, 2, 'Sistem Informasi', 98, 30000000, 'Doktor', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(10, 11706010, 1, 'Manager', 26, 7770000, '4', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(11, 11706011, 1, 'Teknik Informatika', 4, 3000000, 'Bachelor', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(12, 11706012, 1, 'Tester', 60, 2000000, '7', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(13, 11706013, 2, 'DKV', 19, 4500000, 'Doktor', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(14, 11706014, 2, 'CEO', 7, 10000000, '8', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(15, 11706015, 3, 'Pegawai Negri', 23, 900000, '1', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(16, 11706016, 2, 'Sastra Inggris', 37, 3000000, 'Master', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(17, 11706017, 3, 'Manager', 77, 1000000, '9', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(18, 11706018, 2, 'Boss', 47, 2000000, '6', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(19, 11706019, 2, 'Karyawan', 32, 10000000, '1', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(20, 11706020, 1, 'Matematika Terapan', 57, 1000000, 'Master', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(21, 11706021, 1, 'Data Analist', 94, 2000000, '9', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(22, 11706022, 1, 'Matematika Murni', 94, 500000, 'Sarjana', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(23, 11706023, 2, 'Boss', 52, 300000, '1', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(24, 11706024, 3, 'Sekretaris', 20, 3000000, '6', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(25, 11706025, 3, 'CEO', 91, 2000000, '1', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(26, 11706026, 2, 'Pegawai Negri', 98, 500000, '7', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(27, 11706027, 3, 'IT Security', 92, 10000000, '2', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(28, 11706028, 3, 'Sekretaris', 23, 300000, '1', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(29, 11706029, 2, 'Pegawai Negri', 16, 900000, '7', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(30, 11706030, 3, 'Karyawan', 94, 2000000, '6', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(31, 11706031, 1, 'Tester', 72, 10000000, '9', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(32, 11706032, 3, 'Boss', 45, 4500000, '3', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(33, 11706033, 3, 'Matematika Terapan', 56, 1000000, 'Doktor', '2020-05-08 18:23:45', '2020-05-08 18:23:45', NULL),
(34, 11706034, 2, 'IT Security', 59, 30000000, '4', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(35, 11706035, 3, 'Boss', 56, 7770000, '5', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(36, 11706036, 1, 'Manager', 89, 900000, '8', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(37, 11706037, 3, 'IT Security', 89, 2000000, '7', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(38, 11706038, 2, 'Ilmu Komputer', 71, 30000000, 'Magister', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(39, 11706039, 3, 'Tester', 56, 7770000, '8', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(40, 11706040, 2, 'DKV', 100, 5000000, 'Diploma', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(41, 11706041, 1, 'Pegawai Negri', 55, 30000000, '6', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(42, 11706042, 3, 'Karyawan', 21, 500000, '2', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(43, 11706043, 3, 'Sastra Inggris', 24, 3000000, 'Sarjana', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(44, 11706044, 2, 'Karyawan', 97, 5000000, '7', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(45, 11706045, 3, 'IT Security', 5, 3000000, '1', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(46, 11706046, 1, 'Sistem Informasi', 26, 5000000, 'Bachelor', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(47, 11706047, 2, 'Karyawan', 85, 900000, '6', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(48, 11706048, 1, 'DKV', 76, 7770000, 'Doktor', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(49, 11706049, 2, 'DKV', 100, 1000000, 'Bachelor', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(50, 11706050, 1, 'Teknik Informatika', 45, 900000, 'Doktor', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(51, 11706051, 2, 'DKV', 99, 10000000, 'Diploma', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(52, 11706052, 1, 'Pegawai Negri', 27, 300000, '8', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(53, 11706053, 2, 'Sekretaris', 65, 300000, '6', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(54, 11706054, 2, 'IT Security', 54, 5000000, '2', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(55, 11706055, 1, 'Sastra Inggris', 59, 3000000, 'Sarjana', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(56, 11706056, 2, 'Manager', 49, 500000, '3', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(57, 11706057, 1, 'Data Analist', 59, 1000000, '5', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(58, 11706058, 1, 'Direktur', 82, 10000000, '9', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(59, 11706059, 2, 'Matematika Terapan', 52, 10000000, 'Diploma', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(60, 11706060, 2, 'Data Analist', 13, 3000000, '8', '2020-05-08 18:23:46', '2020-05-08 18:23:46', NULL),
(61, 11706061, 2, 'Data Analist', 50, 500000, '1', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(62, 11706062, 1, 'Project Manager', 30, 10000000, '9', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(63, 11706063, 3, 'Ilmu Komputer', 41, 900000, 'Master', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(64, 11706064, 2, 'Project Manager', 17, 300000, '1', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(65, 11706065, 3, 'DKV', 83, 500000, 'Sarjana', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(66, 11706066, 2, 'Teknik Elektro', 99, 4500000, 'Doktor', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(67, 11706067, 3, 'Pegawai Negri', 41, 2000000, '2', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(68, 11706068, 3, 'Teknik Informatika', 4, 2000000, 'Magister', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(69, 11706069, 2, 'Data Analist', 77, 10000000, '3', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(70, 11706070, 2, 'Sistem Informasi', 10, 900000, 'Diploma', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(71, 11706071, 1, 'Teknik Elektro', 78, 30000000, 'Sarjana', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(72, 11706072, 1, 'Sistem Informasi', 27, 30000000, 'Diploma', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(73, 11706073, 1, 'Matematika Terapan', 9, 1000000, 'Master', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(74, 11706074, 2, 'Sistem Informasi', 78, 7770000, 'Diploma', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(75, 11706075, 1, 'Pegawai Negri', 89, 900000, '1', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(76, 11706076, 2, 'Karyawan', 18, 30000000, '4', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(77, 11706077, 2, 'Direktur', 25, 4500000, '9', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(78, 11706078, 2, 'Sekretaris', 46, 1000000, '2', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(79, 11706079, 1, 'Matematika Terapan', 49, 4500000, 'Sarjana', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(80, 11706080, 2, 'CEO', 90, 500000, '1', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(81, 11706081, 2, 'CEO', 39, 300000, '9', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(82, 11706082, 2, 'Sastra Inggris', 62, 3000000, 'Master', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(83, 11706083, 3, 'Direktur', 50, 500000, '5', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(84, 11706084, 1, 'IT Security', 52, 7770000, '9', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(85, 11706085, 1, 'Project Manager', 55, 7770000, '4', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(86, 11706086, 3, 'Data Analist', 50, 30000000, '7', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(87, 11706087, 1, 'Manager', 6, 4500000, '2', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(88, 11706088, 1, 'Project Manager', 50, 500000, '5', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(89, 11706089, 1, 'IT Security', 26, 5000000, '6', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(90, 11706090, 2, 'Sekretaris', 97, 5000000, '5', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(91, 11706091, 1, 'Ilmu Komputer', 29, 4500000, 'Bachelor', '2020-05-08 18:23:47', '2020-05-08 18:23:47', NULL),
(92, 11706092, 2, 'Ilmu Komputer', 10, 30000000, 'Master', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(93, 11706093, 1, 'Data Analist', 50, 900000, '2', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(94, 11706094, 3, 'Boss', 64, 2000000, '4', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(95, 11706095, 3, 'Data Analist', 18, 900000, '8', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(96, 11706096, 1, 'Karyawan', 55, 500000, '4', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(97, 11706097, 1, 'Pegawai Negri', 1, 1000000, '7', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(98, 11706098, 1, 'IT Security', 90, 4500000, '6', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(99, 11706099, 2, 'Sastra Inggris', 56, 2000000, 'Bachelor', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(100, 11706100, 3, 'Project Manager', 62, 2000000, '1', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(101, 11706101, 2, 'Matematika Murni', 20, 500000, 'Diploma', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(102, 11706102, 2, 'IT Security', 22, 30000000, '8', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(103, 11706103, 2, 'Teknik Elektro', 5, 300000, 'Master', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(104, 11706104, 2, 'Sistem Informasi', 2, 900000, 'Sarjana', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(105, 11706105, 1, 'Pegawai Negri', 55, 2000000, '8', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(106, 11706106, 2, 'Sekretaris', 74, 7770000, '9', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(107, 11706107, 1, 'Matematika Terapan', 63, 300000, 'Diploma', '2020-05-08 18:23:48', '2020-05-08 18:23:48', NULL),
(108, 11706108, 1, 'Data Analist', 66, 500000, '7', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(109, 11706109, 3, 'CEO', 41, 900000, '1', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(110, 11706110, 2, 'Boss', 92, 500000, '1', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(111, 11706111, 2, 'Sistem Informasi', 59, 3000000, 'Master', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(112, 11706112, 2, 'Sastra Inggris', 86, 4500000, 'Magister', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(113, 11706113, 2, 'DKV', 12, 500000, 'Doktor', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(114, 11706114, 1, 'Project Manager', 28, 10000000, '4', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(115, 11706115, 2, 'Karyawan', 65, 10000000, '8', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(116, 11706116, 1, 'Data Analist', 83, 5000000, '1', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(117, 11706117, 3, 'Ilmu Komputer', 79, 900000, 'Doktor', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(118, 11706118, 2, 'Karyawan', 16, 3000000, '3', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(119, 11706119, 1, 'IT Security', 47, 30000000, '1', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(120, 11706120, 3, 'Direktur', 58, 900000, '1', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(121, 11706121, 1, 'Sistem Informasi', 100, 30000000, 'Magister', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(122, 11706122, 1, 'Tester', 87, 500000, '4', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(123, 11706123, 2, 'Manager', 32, 3000000, '7', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(124, 11706124, 1, 'CEO', 79, 2000000, '6', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(125, 11706125, 3, 'Ilmu Komputer', 37, 300000, 'Master', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(126, 11706126, 3, 'Project Manager', 56, 300000, '4', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(127, 11706127, 2, 'Project Manager', 1, 1000000, '3', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(128, 11706128, 2, 'Boss', 35, 500000, '2', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(129, 11706129, 3, 'CEO', 30, 7770000, '4', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(130, 11706130, 2, 'Pegawai Negri', 77, 900000, '2', '2020-05-08 18:23:49', '2020-05-08 18:23:49', NULL),
(131, 11706131, 1, 'Tester', 2, 900000, '5', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(132, 11706132, 2, 'Teknik Elektro', 73, 7770000, 'Diploma', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(133, 11706133, 2, 'Direktur', 89, 900000, '7', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(134, 11706134, 2, 'Tester', 58, 1000000, '7', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(135, 11706135, 2, 'Sastra Inggris', 1, 10000000, 'Magister', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(136, 11706136, 1, 'Project Manager', 57, 30000000, '1', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(137, 11706137, 1, 'Sekretaris', 32, 500000, '9', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(138, 11706138, 3, 'Boss', 52, 3000000, '9', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(139, 11706139, 2, 'Manager', 18, 300000, '6', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(140, 11706140, 3, 'CEO', 9, 1000000, '5', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(141, 11706141, 2, 'Project Manager', 7, 4500000, '8', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(142, 11706142, 3, 'Tester', 94, 1000000, '4', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(143, 11706143, 1, 'Boss', 67, 500000, '3', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(144, 11706144, 1, 'Teknik Informatika', 18, 10000000, 'Diploma', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(145, 11706145, 2, 'Ilmu Komputer', 40, 5000000, 'Doktor', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(146, 11706146, 3, 'Boss', 5, 4500000, '8', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(147, 11706147, 1, 'Project Manager', 29, 10000000, '8', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(148, 11706148, 1, 'Pegawai Negri', 16, 300000, '5', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(149, 11706149, 1, 'Boss', 5, 500000, '6', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(150, 11706150, 1, 'IT Security', 63, 300000, '1', '2020-05-08 18:23:50', '2020-05-08 18:23:50', NULL),
(151, 11706151, 3, 'Matematika Murni', 28, 5000000, 'Diploma', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(152, 11706152, 2, 'IT Security', 88, 300000, '4', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(153, 11706153, 1, 'IT Security', 79, 900000, '3', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(154, 11706154, 1, 'Psikologi', 17, 1000000, 'Bachelor', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(155, 11706155, 2, 'Direktur', 71, 300000, '5', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(156, 11706156, 1, 'Teknik Elektro', 95, 10000000, 'Sarjana', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(157, 11706157, 1, 'Manager', 40, 5000000, '6', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(158, 11706158, 1, 'CEO', 68, 500000, '5', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(159, 11706159, 2, 'Project Manager', 72, 7770000, '8', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(160, 11706160, 2, 'Pegawai Negri', 79, 500000, '6', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(161, 11706161, 1, 'Karyawan', 13, 30000000, '8', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(162, 11706162, 3, 'Teknik Elektro', 70, 900000, 'Magister', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(163, 11706163, 1, 'Matematika Terapan', 81, 300000, 'Diploma', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(164, 11706164, 2, 'Matematika Murni', 96, 900000, 'Doktor', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(165, 11706165, 2, 'Teknik Elektro', 96, 500000, 'Doktor', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(166, 11706166, 3, 'Matematika Terapan', 81, 1000000, 'Doktor', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(167, 11706167, 2, 'Matematika Terapan', 48, 5000000, 'Bachelor', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(168, 11706168, 2, 'Ilmu Komputer', 51, 1000000, 'Magister', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(169, 11706169, 1, 'Pegawai Negri', 63, 5000000, '7', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(170, 11706170, 2, 'Sekretaris', 42, 1000000, '5', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(171, 11706171, 2, 'Matematika Terapan', 70, 300000, 'Doktor', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(172, 11706172, 3, 'Data Analist', 95, 1000000, '9', '2020-05-08 18:23:51', '2020-05-08 18:23:51', NULL),
(173, 11706173, 2, 'IT Security', 74, 5000000, '5', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(174, 11706174, 3, 'Manager', 16, 5000000, '7', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(175, 11706175, 1, 'Sastra Inggris', 12, 500000, 'Sarjana', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(176, 11706176, 2, 'Pegawai Negri', 86, 5000000, '7', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(177, 11706177, 2, 'DKV', 91, 10000000, 'Sarjana', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(178, 11706178, 1, 'Manager', 23, 7770000, '5', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(179, 11706179, 2, 'Teknik Elektro', 11, 3000000, 'Doktor', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(180, 11706180, 2, 'CEO', 99, 900000, '4', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(181, 11706181, 1, 'IT Security', 43, 2000000, '3', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(182, 11706182, 2, 'Project Manager', 27, 4500000, '2', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(183, 11706183, 2, 'CEO', 29, 1000000, '2', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(184, 11706184, 2, 'Direktur', 5, 2000000, '8', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(185, 11706185, 3, 'Karyawan', 53, 2000000, '7', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(186, 11706186, 2, 'Teknik Informatika', 35, 1000000, 'Diploma', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(187, 11706187, 1, 'IT Security', 25, 3000000, '6', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(188, 11706188, 3, 'Sistem Informasi', 16, 4500000, 'Sarjana', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(189, 11706189, 1, 'Project Manager', 52, 5000000, '3', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(190, 11706190, 3, 'Teknik Elektro', 52, 500000, 'Doktor', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(191, 11706191, 1, 'Project Manager', 9, 1000000, '1', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(192, 11706192, 3, 'Ilmu Komputer', 27, 1000000, 'Diploma', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(193, 11706193, 3, 'Data Analist', 67, 500000, '5', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(194, 11706194, 2, 'Data Analist', 30, 30000000, '2', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(195, 11706195, 3, 'Data Analist', 60, 7770000, '7', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(196, 11706196, 1, 'Project Manager', 57, 500000, '9', '2020-05-08 18:23:52', '2020-05-08 18:23:52', NULL),
(197, 11706197, 1, 'Psikologi', 62, 500000, 'Diploma', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(198, 11706198, 3, 'CEO', 14, 1000000, '7', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(199, 11706199, 1, 'Sastra Inggris', 92, 30000000, 'Diploma', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(200, 11706200, 1, 'Boss', 64, 2000000, '9', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(201, 11706201, 1, 'Boss', 68, 4500000, '1', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(202, 11706202, 3, 'Manager', 88, 1000000, '9', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(203, 11706203, 2, 'DKV', 27, 500000, 'Diploma', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(204, 11706204, 3, 'Direktur', 54, 3000000, '4', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(205, 11706205, 2, 'Tester', 36, 500000, '4', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(206, 11706206, 1, 'IT Security', 27, 30000000, '4', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(207, 11706207, 3, 'Teknik Informatika', 94, 30000000, 'Doktor', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(208, 11706208, 3, 'Boss', 94, 7770000, '9', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(209, 11706209, 2, 'Pegawai Negri', 54, 300000, '4', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(210, 11706210, 2, 'Sastra Inggris', 14, 3000000, 'Bachelor', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(211, 11706211, 3, 'Project Manager', 97, 300000, '6', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(212, 11706212, 2, 'Direktur', 67, 4500000, '2', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(213, 11706213, 2, 'Data Analist', 58, 5000000, '1', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(214, 11706214, 3, 'Project Manager', 53, 300000, '2', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(215, 11706215, 2, 'Teknik Elektro', 74, 7770000, 'Diploma', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(216, 11706216, 2, 'CEO', 48, 10000000, '4', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(217, 11706217, 1, 'Boss', 32, 2000000, '6', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(218, 11706218, 3, 'Karyawan', 11, 10000000, '2', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(219, 11706219, 2, 'CEO', 43, 1000000, '2', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(220, 11706220, 3, 'Matematika Murni', 27, 1000000, 'Magister', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(221, 11706221, 3, 'Sastra Inggris', 41, 3000000, 'Magister', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(222, 11706222, 3, 'Psikologi', 80, 900000, 'Master', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(223, 11706223, 3, 'Tester', 23, 5000000, '2', '2020-05-08 18:23:53', '2020-05-08 18:23:53', NULL),
(224, 11706224, 3, 'Matematika Murni', 55, 900000, 'Diploma', '2020-05-08 18:23:54', '2020-05-08 18:23:54', NULL),
(225, 11706225, 2, 'Sekretaris', 50, 7770000, '5', '2020-05-08 18:23:54', '2020-05-08 18:23:54', NULL),
(226, 11706226, 3, 'IT Security', 81, 500000, '7', '2020-05-08 18:23:54', '2020-05-08 18:23:54', NULL),
(227, 11706227, 2, 'Ilmu Komputer', 78, 300000, 'Sarjana', '2020-05-08 18:23:54', '2020-05-08 18:23:54', NULL),
(228, 11706228, 2, 'Matematika Murni', 5, 5000000, 'Sarjana', '2020-05-08 18:23:54', '2020-05-08 18:23:54', NULL),
(229, 11706229, 3, 'Sekretaris', 94, 900000, '4', '2020-05-08 18:23:54', '2020-05-08 18:23:54', NULL),
(230, 11706230, 2, 'IT Security', 31, 300000, '5', '2020-05-08 18:23:54', '2020-05-08 18:23:54', NULL),
(231, 11706231, 3, 'Project Manager', 94, 300000, '7', '2020-05-08 18:23:54', '2020-05-08 18:23:54', NULL),
(232, 11706232, 2, 'Boss', 23, 2000000, '6', '2020-05-08 18:23:54', '2020-05-08 18:23:54', NULL),
(233, 11706233, 1, 'IT Security', 19, 1000000, '9', '2020-05-08 18:23:54', '2020-05-08 18:23:54', NULL),
(234, 11706234, 2, 'Direktur', 27, 30000000, '4', '2020-05-08 18:23:54', '2020-05-08 18:23:54', NULL),
(235, 11706235, 3, 'Matematika Terapan', 35, 5000000, 'Bachelor', '2020-05-08 18:23:54', '2020-05-08 18:23:54', NULL),
(236, 11706236, 2, 'Pegawai Negri', 41, 4500000, '1', '2020-05-08 18:23:54', '2020-05-08 18:23:54', NULL),
(237, 11706237, 1, 'Manager', 38, 10000000, '7', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(238, 11706238, 3, 'Karyawan', 39, 500000, '6', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(239, 11706239, 1, 'Pegawai Negri', 36, 7770000, '4', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(240, 11706240, 3, 'Teknik Informatika', 80, 3000000, 'Bachelor', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(241, 11706241, 1, 'IT Security', 73, 300000, '8', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(242, 11706242, 1, 'Sistem Informasi', 93, 4500000, 'Bachelor', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(243, 11706243, 1, 'Teknik Elektro', 54, 900000, 'Sarjana', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(244, 11706244, 3, 'Boss', 36, 900000, '4', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(245, 11706245, 2, 'Tester', 31, 30000000, '7', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(246, 11706246, 2, 'DKV', 35, 4500000, 'Diploma', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(247, 11706247, 3, 'Psikologi', 10, 900000, 'Bachelor', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(248, 11706248, 3, 'Tester', 6, 2000000, '9', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(249, 11706249, 1, 'Tester', 22, 3000000, '8', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(250, 11706250, 3, 'Matematika Murni', 42, 5000000, 'Doktor', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(251, 11706251, 2, 'Project Manager', 42, 10000000, '1', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(252, 11706252, 2, 'Matematika Terapan', 4, 30000000, 'Magister', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(253, 11706253, 2, 'DKV', 94, 5000000, 'Diploma', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(254, 11706254, 1, 'Tester', 29, 7770000, '4', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(255, 11706255, 3, 'Project Manager', 9, 500000, '8', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(256, 11706256, 1, 'Pegawai Negri', 27, 4500000, '4', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(257, 11706257, 1, 'DKV', 14, 4500000, 'Doktor', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(258, 11706258, 2, 'Sastra Inggris', 35, 30000000, 'Bachelor', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(259, 11706259, 3, 'DKV', 99, 300000, 'Magister', '2020-05-08 18:23:55', '2020-05-08 18:23:55', NULL),
(260, 11706260, 3, 'Sistem Informasi', 71, 4500000, 'Doktor', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(261, 11706261, 3, 'Pegawai Negri', 15, 300000, '8', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(262, 11706262, 2, 'Project Manager', 2, 4500000, '7', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(263, 11706263, 1, 'Psikologi', 41, 3000000, 'Master', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(264, 11706264, 1, 'Matematika Terapan', 94, 10000000, 'Doktor', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(265, 11706265, 1, 'Karyawan', 47, 1000000, '3', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(266, 11706266, 3, 'Project Manager', 11, 3000000, '3', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(267, 11706267, 2, 'Sekretaris', 53, 1000000, '6', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(268, 11706268, 1, 'Teknik Elektro', 70, 30000000, 'Diploma', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(269, 11706269, 1, 'Sastra Inggris', 74, 3000000, 'Doktor', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(270, 11706270, 1, 'Sekretaris', 68, 4500000, '4', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(271, 11706271, 3, 'Direktur', 15, 1000000, '6', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(272, 11706272, 3, 'Direktur', 86, 2000000, '8', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(273, 11706273, 3, 'Pegawai Negri', 81, 2000000, '5', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(274, 11706274, 1, 'Karyawan', 16, 900000, '9', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(275, 11706275, 1, 'Direktur', 54, 5000000, '7', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(276, 11706276, 3, 'Sekretaris', 55, 2000000, '6', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(277, 11706277, 3, 'Sekretaris', 88, 30000000, '2', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(278, 11706278, 3, 'Karyawan', 57, 10000000, '7', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(279, 11706279, 2, 'CEO', 14, 10000000, '7', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(280, 11706280, 1, 'Matematika Murni', 59, 500000, 'Master', '2020-05-08 18:23:56', '2020-05-08 18:23:56', NULL),
(281, 11706281, 2, 'Pegawai Negri', 39, 7770000, '5', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(282, 11706282, 1, 'Sekretaris', 69, 10000000, '3', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(283, 11706283, 3, 'Matematika Terapan', 24, 3000000, 'Diploma', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(284, 11706284, 1, 'Ilmu Komputer', 1, 3000000, 'Sarjana', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(285, 11706285, 3, 'Data Analist', 70, 5000000, '7', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(286, 11706286, 1, 'Direktur', 2, 10000000, '5', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(287, 11706287, 3, 'Direktur', 24, 4500000, '1', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(288, 11706288, 3, 'Data Analist', 26, 900000, '3', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(289, 11706289, 3, 'Pegawai Negri', 91, 300000, '2', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(290, 11706290, 2, 'Matematika Murni', 99, 1000000, 'Doktor', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(291, 11706291, 1, 'Sistem Informasi', 54, 3000000, 'Diploma', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(292, 11706292, 2, 'DKV', 20, 5000000, 'Bachelor', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(293, 11706293, 1, 'Data Analist', 39, 900000, '4', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(294, 11706294, 1, 'Sekretaris', 43, 900000, '4', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(295, 11706295, 3, 'Karyawan', 11, 4500000, '9', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(296, 11706296, 1, 'Sastra Inggris', 9, 5000000, 'Doktor', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(297, 11706297, 2, 'Teknik Elektro', 13, 30000000, 'Sarjana', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(298, 11706298, 2, 'Sekretaris', 29, 1000000, '5', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(299, 11706299, 3, 'Data Analist', 4, 30000000, '9', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(300, 11706300, 3, 'Sastra Inggris', 34, 4500000, 'Sarjana', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(301, 11706301, 1, 'Project Manager', 34, 1000000, '8', '2020-05-08 18:23:57', '2020-05-08 18:23:57', NULL),
(302, 11706302, 2, 'DKV', 48, 900000, 'Magister', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(303, 11706303, 2, 'CEO', 63, 10000000, '2', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(304, 11706304, 3, 'DKV', 53, 1000000, 'Sarjana', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(305, 11706305, 3, 'Psikologi', 80, 4500000, 'Magister', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(306, 11706306, 1, 'IT Security', 11, 4500000, '7', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(307, 11706307, 2, 'Pegawai Negri', 75, 500000, '8', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(308, 11706308, 3, 'Tester', 22, 7770000, '4', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(309, 11706309, 1, 'Data Analist', 9, 500000, '8', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(310, 11706310, 3, 'Manager', 53, 4500000, '7', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(311, 11706311, 1, 'Data Analist', 96, 5000000, '1', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(312, 11706312, 1, 'CEO', 62, 500000, '2', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(313, 11706313, 1, 'CEO', 9, 10000000, '1', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(314, 11706314, 3, 'Boss', 14, 2000000, '8', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(315, 11706315, 1, 'Boss', 76, 300000, '9', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(316, 11706316, 3, 'CEO', 13, 5000000, '3', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(317, 11706317, 1, 'Project Manager', 20, 2000000, '2', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(318, 11706318, 1, 'CEO', 27, 5000000, '7', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(319, 11706319, 3, 'Teknik Elektro', 89, 10000000, 'Doktor', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(320, 11706320, 2, 'Direktur', 93, 2000000, '4', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(321, 11706321, 2, 'Manager', 1, 30000000, '4', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(322, 11706322, 2, 'IT Security', 93, 10000000, '9', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(323, 11706323, 1, 'Sekretaris', 57, 2000000, '1', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(324, 11706324, 1, 'DKV', 72, 1000000, 'Diploma', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(325, 11706325, 1, 'Pegawai Negri', 24, 7770000, '4', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(326, 11706326, 2, 'Data Analist', 49, 300000, '8', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(327, 11706327, 1, 'Pegawai Negri', 3, 7770000, '3', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(328, 11706328, 1, 'Karyawan', 5, 30000000, '8', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(329, 11706329, 2, 'Pegawai Negri', 45, 2000000, '8', '2020-05-08 18:23:58', '2020-05-08 18:23:58', NULL),
(330, 11706330, 2, 'DKV', 8, 300000, 'Diploma', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(331, 11706331, 2, 'Teknik Elektro', 55, 900000, 'Bachelor', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(332, 11706332, 1, 'Pegawai Negri', 67, 500000, '5', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(333, 11706333, 3, 'Manager', 66, 30000000, '1', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(334, 11706334, 3, 'Ilmu Komputer', 61, 500000, 'Bachelor', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(335, 11706335, 2, 'Sekretaris', 17, 4500000, '2', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(336, 11706336, 1, 'Boss', 72, 10000000, '4', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(337, 11706337, 3, 'Karyawan', 39, 2000000, '4', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(338, 11706338, 2, 'Sekretaris', 17, 1000000, '9', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(339, 11706339, 3, 'Karyawan', 9, 300000, '4', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(340, 11706340, 2, 'Sistem Informasi', 34, 900000, 'Master', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(341, 11706341, 1, 'Manager', 59, 500000, '2', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(342, 11706342, 2, 'Tester', 36, 10000000, '7', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(343, 11706343, 3, 'Karyawan', 77, 300000, '2', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(344, 11706344, 1, 'Project Manager', 2, 7770000, '8', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(345, 11706345, 2, 'Data Analist', 95, 900000, '3', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(346, 11706346, 1, 'Boss', 73, 2000000, '1', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(347, 11706347, 3, 'Matematika Terapan', 83, 2000000, 'Sarjana', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(348, 11706348, 2, 'Ilmu Komputer', 78, 2000000, 'Sarjana', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(349, 11706349, 3, 'IT Security', 59, 30000000, '3', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL),
(350, 11706350, 3, 'Pegawai Negri', 59, 5000000, '3', '2020-05-08 18:23:59', '2020-05-08 18:23:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `username`, `email_verified_at`, `password`, `role`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'adminbkk@gmail.com', 'admin', 'admin', '2020-05-08 18:23:02', '$2y$10$gyhTCOJA2W6QBgy8KG8cAu2yz1mTGhf2terVyr7jvCOYQmghU9Wlm', 'admin', 'admin.jpg', NULL, NULL, NULL),
(2, 'violet.wibowo@kuswandari.ac.id', 'Puji Rahimah', '11706001', '2020-05-09 01:23:02', '$2y$10$YAd7H6X.cKzKe9qwwR8oYum6iQbX1NFBhNV98ZMSYVxmn8qOjxwmC', 'alumni', 'default.png', NULL, NULL, NULL),
(3, 'galur40@gmail.co.id', 'Jamalia Yani Laksita', '11706002', '2020-05-09 01:23:02', '$2y$10$kcqCpKQ0lmGQ4jeGni/Nhe6NWl.v0CK.IReukE1L78LXZrRnck9Cu', 'alumni', 'default.png', NULL, NULL, NULL),
(4, 'halima.mandasari@siregar.desa.id', 'Diah Ghaliyati Hasanah', '11706003', '2020-05-09 01:23:02', '$2y$10$Qpr8NerK5zfsatB6.DTej.NGqVuasQPlWQTjJrmU1FGv6Juz.UMFy', 'alumni', 'default.png', NULL, NULL, NULL),
(5, 'lprakasa@pratama.ac.id', 'Hari Marbun', '11706004', '2020-05-09 01:23:02', '$2y$10$e5wE4i9wd3gaRILwwNi1reTJoswNPxSaRdELObEK54y/yu29SKU32', 'alumni', 'default.png', NULL, NULL, NULL),
(6, 'caturangga.hutagalung@nababan.co.id', 'Jamil Hakim', '11706005', '2020-05-09 01:23:02', '$2y$10$bspXsMkI6bDe8ip.34iFI.QkaD5nhsJ6jcWV6aQIWRSUDLnu4gwti', 'alumni', 'default.png', NULL, NULL, NULL),
(7, 'dian05@gmail.com', 'Bala Nugroho', '11706006', '2020-05-09 01:23:02', '$2y$10$smhWHAq1nDNmX9loFgM69OtZptrl8zSLEqYckcZou9IffbErQzLuK', 'alumni', 'default.png', NULL, NULL, NULL),
(8, 'asirwanda10@megantara.com', 'Juli Kuswandari S.Farm', '11706007', '2020-05-09 01:23:02', '$2y$10$.5qNVgMCBNK9Muot9g0ROOefdrevzGx8hNrXCeCFvHLozjD84qt12', 'alumni', 'default.png', NULL, NULL, NULL),
(9, 'rini23@sudiati.biz.id', 'Diana Safina Laksmiwati S.Sos', '11706008', '2020-05-09 01:23:03', '$2y$10$NEGAlbfFlg1C/zWl3g7f2ecu00kyWwRQdbPK4sEULpOS3x33ra/ee', 'alumni', 'default.png', NULL, NULL, NULL),
(10, 'raisa81@hidayat.sch.id', 'Jarwi Himawan Maheswara S.Sos', '11706009', '2020-05-09 01:23:03', '$2y$10$nnV2XUxcYdRtiQS0Bs3Dze5ON6w7GF3VnJ25owE4qc7zpUm6UsBCG', 'alumni', 'default.png', NULL, NULL, NULL),
(11, 'upurnawati@gmail.co.id', 'Genta Yuliarti', '11706010', '2020-05-09 01:23:03', '$2y$10$XxwBuah7/O1ZxqbCyWnUUek4S2Jrpt.Hge5LnmtQ3C7Q/M1scFQ2K', 'alumni', 'default.png', NULL, NULL, NULL),
(12, 'simbolon.yessi@gmail.co.id', 'Julia Hassanah', '11706011', '2020-05-09 01:23:03', '$2y$10$DO7YtPOxt/Z/zUDmuJ/WKuLJA8t23ISCXzg6HbWQO1EvyYc5EKV.6', 'alumni', 'default.png', NULL, NULL, NULL),
(13, 'prabawa.pangestu@gmail.co.id', 'Balamantri Ardianto', '11706012', '2020-05-09 01:23:03', '$2y$10$f6AHPmOd2GeFSdo1TbTSBetcTFpUiF15UnAruntndHpCFELV3FcAC', 'alumni', 'default.png', NULL, NULL, NULL),
(14, 'oktaviani.wira@yahoo.com', 'Elisa Hartati S.H.', '11706013', '2020-05-09 01:23:03', '$2y$10$2by8bVsk5fiYAsik3zi85.FeLJYHbRBO5YmvOkaDgnAZz/dYn9Lti', 'alumni', 'default.png', NULL, NULL, NULL),
(15, 'pfujiati@gmail.com', 'Irwan Gading Saputra S.Gz', '11706014', '2020-05-09 01:23:03', '$2y$10$VpkbzJ35NRw1SVemMMSTUeNl29einVt3Exa3AWrLHZjvclJIL9HFm', 'alumni', 'default.png', NULL, NULL, NULL),
(16, 'ami.wahyudin@wasita.sch.id', 'Drajat Pradana', '11706015', '2020-05-09 01:23:03', '$2y$10$9wCNvSyvMwFtIffUQTffK.sEh9bkBINT0PDefT0CAVahzQhuclZQy', 'alumni', 'default.png', NULL, NULL, NULL),
(17, 'dnababan@kurniawan.biz.id', 'Michelle Haryanti', '11706016', '2020-05-09 01:23:03', '$2y$10$0/NsY4dAUB7qVgH.NVNOvOuWTwZiWxg7m68NX6ofc2.QLtfW9X8Du', 'alumni', 'default.png', NULL, NULL, NULL),
(18, 'sirait.zelaya@agustina.biz', 'Samiah Padmasari', '11706017', '2020-05-09 01:23:03', '$2y$10$ohtC/Lxxy8S669HXWkdR2.VF.sbXZS425fz6zs7zlF1fkJxeoOrqi', 'alumni', 'default.png', NULL, NULL, NULL),
(19, 'zulaika.dadap@gunarto.in', 'Ophelia Uyainah', '11706018', '2020-05-09 01:23:04', '$2y$10$xaXVEVVt/Z06UG02Zrx7NOkKcF4ac6g1UgiWxeA8vrfqE3bi.txRa', 'alumni', 'default.png', NULL, NULL, NULL),
(20, 'raisa49@yahoo.co.id', 'Nalar Opan Sitorus S.T.', '11706019', '2020-05-09 01:23:04', '$2y$10$u5KYhwQ35Fe9HpLaHpqZL.UMPZGf5mqnBci0NH55Ffq1XAiksz4gW', 'alumni', 'default.png', NULL, NULL, NULL),
(21, 'dina.pratiwi@yahoo.com', 'Jumari Hakim', '11706020', '2020-05-09 01:23:04', '$2y$10$W29D3Kv.h4lnhOKDAMNd5uf1g3WRDyscgH2Nno8eq51Y3NwFUTlf.', 'alumni', 'default.png', NULL, NULL, NULL),
(22, 'lailasari.setya@tamba.mil.id', 'Ismail Saefullah', '11706021', '2020-05-09 01:23:04', '$2y$10$o6Wsm4.UX.wdIueFAHf6gOyT7kcUasGvq1vmZfPacnI86k4STgi.i', 'alumni', 'default.png', NULL, NULL, NULL),
(23, 'zulkarnain.ifa@rahimah.biz', 'Kartika Novitasari', '11706022', '2020-05-09 01:23:04', '$2y$10$YNRAhZCQSoADaQ8aJLN2BuECGpAuBjjb1Bvxe.07.cKOXvNntHY0S', 'alumni', 'default.png', NULL, NULL, NULL),
(24, 'psudiati@yahoo.co.id', 'Zahra Agustina', '11706023', '2020-05-09 01:23:04', '$2y$10$uIkNZ/IkldqWS6SQzMF/oufz31etzKfR5FFpM1cUd0rCIM8h5.5v6', 'alumni', 'default.png', NULL, NULL, NULL),
(25, 'umar89@gmail.co.id', 'Dalima Yolanda', '11706024', '2020-05-09 01:23:04', '$2y$10$7CJcJAyY5VIVtRjPcMbREOOgAbTC2DrNr7nt6sgMu3QJfgv54NRZW', 'alumni', 'default.png', NULL, NULL, NULL),
(26, 'jamalia15@yahoo.com', 'Rahayu Maryati M.Pd', '11706025', '2020-05-09 01:23:04', '$2y$10$1Vg3HM.mCOi.zwugQ2IiX.YPu/pk1Py8GV/K67E99N1Pskc/LUKse', 'alumni', 'default.png', NULL, NULL, NULL),
(27, 'sadina.hartati@yahoo.com', 'Laswi Murti Najmudin', '11706026', '2020-05-09 01:23:04', '$2y$10$wJWRot4N.rIg3UNDY39yJ.KeVL8HYK45W7AZgrLlXEXfAzgWkVJtq', 'alumni', 'default.png', NULL, NULL, NULL),
(28, 'dmanullang@halimah.ac.id', 'Suci Ciaobella Winarsih', '11706027', '2020-05-09 01:23:04', '$2y$10$kCm002xdtrtySA/ChA.JTeCv2ZKgQysBDylgQ4KdMpuHrwOL7DKyG', 'alumni', 'default.png', NULL, NULL, NULL),
(29, 'mfujiati@usamah.sch.id', 'Hairyanto Mandala', '11706028', '2020-05-09 01:23:05', '$2y$10$/IgV8B6MnJrZj.MTDYIzreAAbOtBeHYOKwR/qqWAgBX6pSC7/nWmK', 'alumni', 'default.png', NULL, NULL, NULL),
(30, 'asmuni.prasetya@maryati.co.id', 'Vino Karja Setiawan S.I.Kom', '11706029', '2020-05-09 01:23:05', '$2y$10$zhrP/sY9qtciiBCvfeHOI.MlQGu9hczdJ962Rf.pqkDT64dm8rs0y', 'alumni', 'default.png', NULL, NULL, NULL),
(31, 'suryono.dadap@gmail.co.id', 'Dewi Laksita M.Farm', '11706030', '2020-05-09 01:23:05', '$2y$10$6d2A0uZs.3DsYNb.g1p4CO3jywB3tR.XIxaLbevhWOcW6HkrVcnqK', 'alumni', 'default.png', NULL, NULL, NULL),
(32, 'bsuryatmi@gmail.co.id', 'Prasetya Darsirah Siregar S.Pd', '11706031', '2020-05-09 01:23:05', '$2y$10$ULYnCN7/skcZA6AHapNoqOA4GziPXYGSohChLQCqLpKHcBpRE16tq', 'alumni', 'default.png', NULL, NULL, NULL),
(33, 'dariati87@gmail.co.id', 'Wasis Cakrawala Prakasa M.Kom.', '11706032', '2020-05-09 01:23:05', '$2y$10$4ek.s87spJv3CaXFd6cGdul6IpYgmHNzhMFmQEXgkyhINs5Qm/oSm', 'alumni', 'default.png', NULL, NULL, NULL),
(34, 'kamaria81@maulana.biz.id', 'Amalia Lestari', '11706033', '2020-05-09 01:23:05', '$2y$10$s3YJ9KdN7nifEwrcg3Z64O3ng1TUrlLF5pSwo/UIHfOEr2vqdp2/.', 'alumni', 'default.png', NULL, NULL, NULL),
(35, 'ganjaran39@anggriawan.my.id', 'Natalia Indah Yulianti S.Gz', '11706034', '2020-05-09 01:23:06', '$2y$10$DnTWKnDbsqHzFXfEOXthTe60WAgHspb3/XeG4dbBIk70qxsMIRFpm', 'alumni', 'default.png', NULL, NULL, NULL),
(36, 'hilda81@gmail.com', 'Aswani Prayoga', '11706035', '2020-05-09 01:23:06', '$2y$10$.ozP1X3FFoYmGShyb7wsfuec/OhlV4hv/Eoo3EzVWwOIS2UWMkoDG', 'alumni', 'default.png', NULL, NULL, NULL),
(37, 'gmaulana@gmail.co.id', 'Gadang Prabowo', '11706036', '2020-05-09 01:23:06', '$2y$10$VqhKbUR/0bJiSmqFMv9tOuInaF0OwNbbXXxnAgkPrlZrHJotdcDo2', 'alumni', 'default.png', NULL, NULL, NULL),
(38, 'siregar.cengkal@santoso.in', 'Cakrawala Nainggolan', '11706037', '2020-05-09 01:23:06', '$2y$10$ZhQnZMlNFa2tVbNN2SDRzOnomeAnlCN2w/X0jwS48pqIWtWDZm1lq', 'alumni', 'default.png', NULL, NULL, NULL),
(39, 'puput.salahudin@pudjiastuti.web.id', 'Tami Puspa Kuswandari S.E.', '11706038', '2020-05-09 01:23:06', '$2y$10$dbuKOCD3h/H6RQmUo2/CoOrLOUKE7QHXnkMdlby86QEMJI2zBYbhm', 'alumni', 'default.png', NULL, NULL, NULL),
(40, 'ulailasari@widodo.go.id', 'Pia Farida', '11706039', '2020-05-09 01:23:06', '$2y$10$98ZtP8EUrMe.AQY72aHXj.BtHk4TdUMzjufglgkQqFu7aAXn5JSGK', 'alumni', 'default.png', NULL, NULL, NULL),
(41, 'kuswandari.viman@prasetya.go.id', 'Syahrini Permata', '11706040', '2020-05-09 01:23:06', '$2y$10$5P86LbZpTkdTrkKHSYHjb.ObXmwP.9TMOgdcpCFYBDlp8Eq4oG0di', 'alumni', 'default.png', NULL, NULL, NULL),
(42, 'yusuf10@yahoo.co.id', 'Jarwa Simanjuntak', '11706041', '2020-05-09 01:23:06', '$2y$10$S6utAAc1uLl4fVsGykWveOoXrYFbgQkNoL/EYvvUGSlEzhT3JRWsK', 'alumni', 'default.png', NULL, NULL, NULL),
(43, 'dina64@uyainah.id', 'Galang Lutfan Putra', '11706042', '2020-05-09 01:23:06', '$2y$10$0FoueFELEz3agmbvbCd4UeOH6xdAVQ48Ntzx0lc7lcP4Zh0l5s9Ta', 'alumni', 'default.png', NULL, NULL, NULL),
(44, 'dmelani@yahoo.com', 'Rahmi Sarah Hastuti S.Kom', '11706043', '2020-05-09 01:23:07', '$2y$10$wyeKqK6HSfRB8IvtgKBEyudrnggJZjCnOFr.RVsGdrmkG5Yr5fdbG', 'alumni', 'default.png', NULL, NULL, NULL),
(45, 'rhalimah@situmorang.com', 'Jail Megantara M.Farm', '11706044', '2020-05-09 01:23:07', '$2y$10$fO6rKL/6/zf8aQBZG5newuq7FgHxcLU0TliEd7Ipk0BpZw.EC2h3m', 'alumni', 'default.png', NULL, NULL, NULL),
(46, 'irma11@gmail.com', 'Ihsan Iswahyudi', '11706045', '2020-05-09 01:23:07', '$2y$10$RD0qehKogFTmrEH3YYvr1eOjYtcy560nvpkUd/Dccm/0mB1egxNKm', 'alumni', 'default.png', NULL, NULL, NULL),
(47, 'hesti10@halim.id', 'Hartaka Irsad Damanik S.E.I', '11706046', '2020-05-09 01:23:07', '$2y$10$alvVMX8v3FovGW.ejP3jpe1iVLvoje2J2xABs4RDzPo0a.OGW8Lba', 'alumni', 'default.png', NULL, NULL, NULL),
(48, 'winarno.vera@adriansyah.tv', 'Gamani Irawan', '11706047', '2020-05-09 01:23:07', '$2y$10$s1ep.//VE42Zp.V.xqUB5.0r1EOZwLJH6tJV87OdqfLXJobOvQOBe', 'alumni', 'default.png', NULL, NULL, NULL),
(49, 'msafitri@gmail.co.id', 'Cinta Clara Maryati', '11706048', '2020-05-09 01:23:07', '$2y$10$IkO1n0zfJYdV44ixRng2ceF3w.rzKjPkkp7.nOPzI/sQmmwZh6Hz.', 'alumni', 'default.png', NULL, NULL, NULL),
(50, 'emardhiyah@yahoo.com', 'Vera Qori Sudiati M.Pd', '11706049', '2020-05-09 01:23:07', '$2y$10$2jSblk/ixwsmwBs3rj7QmuDSU2mjYtCgDoFQSYnitCgs.wpHIJmNK', 'alumni', 'default.png', NULL, NULL, NULL),
(51, 'melinda.astuti@gmail.com', 'Gasti Pudjiastuti M.Farm', '11706050', '2020-05-09 01:23:07', '$2y$10$lkvNrYZ66vQl3yGwVV5yd.r4lxBvpyR5d9chm4eWEoC2dPZga6jTu', 'alumni', 'default.png', NULL, NULL, NULL),
(52, 'ratih04@wahyuni.tv', 'Kardi Saptono', '11706051', '2020-05-09 01:23:07', '$2y$10$FdGvdwnO8VDONQzdJo0.4.jIO.yPeu3NcRvcuGNEZqZd.MhUPkCXu', 'alumni', 'default.png', NULL, NULL, NULL),
(53, 'adikara.utami@pratama.co.id', 'Gandi Simbolon', '11706052', '2020-05-09 01:23:08', '$2y$10$5nLHH0qhIWGkjbB7UZfJ0.LUIWEyYANdsjAt2BNUExfymqHQyyi1q', 'alumni', 'default.png', NULL, NULL, NULL),
(54, 'raharja.purwanti@maryati.com', 'Taswir Wacana S.Ked', '11706053', '2020-05-09 01:23:08', '$2y$10$10/pcdpP6K4E8i7Qm1Q2IuIFi69kM/RtyvHfACypg41VwojQYI4D.', 'alumni', 'default.png', NULL, NULL, NULL),
(55, 'bdabukke@siregar.go.id', 'Saiful Wacana', '11706054', '2020-05-09 01:23:08', '$2y$10$h1LPVm5EmOQokrk3LAG3.OUvkyc0PdnM4GXdKrm6o8.xQ9BAb6zj2', 'alumni', 'default.png', NULL, NULL, NULL),
(56, 'kalim48@purwanti.desa.id', 'Padmi Namaga S.H.', '11706055', '2020-05-09 01:23:08', '$2y$10$/4bnxa9LuctfJZvXRbhgLug.dKvz/fTmTIjujwwH3cakBfUZjXuZS', 'alumni', 'default.png', NULL, NULL, NULL),
(57, 'ajeng.susanti@gmail.co.id', 'Olga Simbolon M.M.', '11706056', '2020-05-09 01:23:08', '$2y$10$f6CRv1jx8dd15DPAA51ZIuFoi3nRf/GswygT8hA6dcnxHikXaqBkC', 'alumni', 'default.png', NULL, NULL, NULL),
(58, 'dprasetyo@putra.biz', 'Gamanto Wacana', '11706057', '2020-05-09 01:23:08', '$2y$10$nX/58BInl2Q7Z0A1ZIE6NeG8FnXsqxqO5CAXnu6DHZ9KFxysmq4Ai', 'alumni', 'default.png', NULL, NULL, NULL),
(59, 'xsafitri@yahoo.co.id', 'Gangsa Situmorang S.Pd', '11706058', '2020-05-09 01:23:08', '$2y$10$HQgRtft/4B6ZoTDLk5HDA.25UZpjUdx6nXOYpbeHmuNT7tikDX4O.', 'alumni', 'default.png', NULL, NULL, NULL),
(60, 'tasnim35@gmail.co.id', 'Baktiadi Wasita', '11706059', '2020-05-09 01:23:08', '$2y$10$coVoBTg36tJkuEifSXO7Je5FwhI6G1ryHoxCqe/MwalgozkTicpUy', 'alumni', 'default.png', NULL, NULL, NULL),
(61, 'emin.adriansyah@lazuardi.my.id', 'Bagya Ramadan', '11706060', '2020-05-09 01:23:08', '$2y$10$2x00xAdtnBEjYGhqQ5KMYO6VeV5Myrxe2rC5DQVFGfiNDv2/eqzdy', 'alumni', 'default.png', NULL, NULL, NULL),
(62, 'mahesa.firmansyah@zulaika.net', 'Cornelia Puspita', '11706061', '2020-05-09 01:23:09', '$2y$10$In.7k2BcTS/gFa/mxk0e.ulLuQ/eiJ1dDAAnBrOHV0TbS6dbbwhAq', 'alumni', 'default.png', NULL, NULL, NULL),
(63, 'prasetya60@nasyiah.sch.id', 'Jaya Irawan S.I.Kom', '11706062', '2020-05-09 01:23:09', '$2y$10$fP.Nw.knO2YRs0bwuqMqweqgcbF5raV3BJx8INC.x9TK069IyG3l.', 'alumni', 'default.png', NULL, NULL, NULL),
(64, 'usamah.cinta@yahoo.co.id', 'Opan Ramadan', '11706063', '2020-05-09 01:23:09', '$2y$10$9IISmLcHbAaBreVxCvahiOOjrJY/XQiJKfCdS90wwlrFV9BvDVlUS', 'alumni', 'default.png', NULL, NULL, NULL),
(65, 'nurdiyanti.rangga@jailani.com', 'Elma Gasti Farida', '11706064', '2020-05-09 01:23:09', '$2y$10$paJIseNXGeDwJD3Mnyl5M.RZgaql4H4tpuUA/jEe8n5eBa3Eb7/Tu', 'alumni', 'default.png', NULL, NULL, NULL),
(66, 'eja13@kuswoyo.tv', 'Gina Wahyuni S.Gz', '11706065', '2020-05-09 01:23:09', '$2y$10$X1n9PJixSb5Lt1nLnla0XOOPn.u.rFhFHk0NcXpPawwkEU6nsIVJ.', 'alumni', 'default.png', NULL, NULL, NULL),
(67, 'prakosa62@yahoo.com', 'Ilsa Zulaika', '11706066', '2020-05-09 01:23:09', '$2y$10$Vfk0n4FIrUj1ntl0zLAojOVYjqsQSSicPgQKhCD2W0XabD9.XTCBC', 'alumni', 'default.png', NULL, NULL, NULL),
(68, 'daruna01@yahoo.co.id', 'Hasna Farida', '11706067', '2020-05-09 01:23:09', '$2y$10$944jIHCyjS4cGh8rVxQQ8.wSQ2MJOhsOyIPIsj4XN1P0h7JicrWU.', 'alumni', 'default.png', NULL, NULL, NULL),
(69, 'wmahendra@yahoo.co.id', 'Margana Budiman S.IP', '11706068', '2020-05-09 01:23:09', '$2y$10$jLpPKLir7znvdjFwSpKIl.i9IGI6MCxcjBD0WWk9QmT/YJLIX2lPW', 'alumni', 'default.png', NULL, NULL, NULL),
(70, 'nwibisono@haryanto.info', 'Harimurti Natsir S.T.', '11706069', '2020-05-09 01:23:09', '$2y$10$zFt070bnc1cK/C6ottNwU.HbwhJsGEr2wWl4Myj694fdVZd7IENlK', 'alumni', 'default.png', NULL, NULL, NULL),
(71, 'damar.hutasoit@widodo.biz', 'Rahmat Budiyanto M.Pd', '11706070', '2020-05-09 01:23:09', '$2y$10$R9jL3SwrMvwMOVoFrI7CteD1KmWTMXMA0VW5z1ymS8kPBGdGqNVZa', 'alumni', 'default.png', NULL, NULL, NULL),
(72, 'haryanti.padmi@yahoo.com', 'Gaduh Sitorus', '11706071', '2020-05-09 01:23:10', '$2y$10$ZpEetA2sO.1SzC5xd/FkNu9TE3VJarx.ZlCB4yMX7Pz89cRWuhOfW', 'alumni', 'default.png', NULL, NULL, NULL),
(73, 'silvia02@yahoo.co.id', 'Eman Warta Tarihoran S.I.Kom', '11706072', '2020-05-09 01:23:10', '$2y$10$vQ6z3hmJ/esoJ9exy0gsQukxKLjMLu0x9q8Np/TTcmipSr7gnc8j6', 'alumni', 'default.png', NULL, NULL, NULL),
(74, 'novi45@purnawati.id', 'Soleh Harja Hidayanto M.TI.', '11706073', '2020-05-09 01:23:10', '$2y$10$ONJ1F/v2fUF0a329YPGCO.GCmWZmuzFm3OW6BaL8UIc3iFaUgnMwC', 'alumni', 'default.png', NULL, NULL, NULL),
(75, 'adriansyah.ulva@najmudin.info', 'Hasna Fitria Safitri', '11706074', '2020-05-09 01:23:10', '$2y$10$cknaKXa2si6m9vuiXgav/ez0PgDsuIPrtsHQJW/Nj88e6T1xkjGte', 'alumni', 'default.png', NULL, NULL, NULL),
(76, 'sudiati.digdaya@gmail.co.id', 'Titin Nuraini', '11706075', '2020-05-09 01:23:10', '$2y$10$4HctnuRgFbAPrvMsJt0aueAcgRMQltsj53qNsvhtrprKoAPM7pJym', 'alumni', 'default.png', NULL, NULL, NULL),
(77, 'rajasa.kiandra@gmail.com', 'Nilam Aurora Susanti S.Pd', '11706076', '2020-05-09 01:23:10', '$2y$10$8d8eVqA950CPjaD57ssxF.IBGXnB24fC2u5k5AZiRz7wTPoKe6rLq', 'alumni', 'default.png', NULL, NULL, NULL),
(78, 'sitorus.balapati@gmail.co.id', 'Mutia Yunita Laksita', '11706077', '2020-05-09 01:23:10', '$2y$10$INoh2xJFf4SuOsizEaz/POu9viUMrnAjpt5KXfog1A4aSODSQZyx2', 'alumni', 'default.png', NULL, NULL, NULL),
(79, 'ellis70@gmail.co.id', 'Tami Halimah S.Kom', '11706078', '2020-05-09 01:23:10', '$2y$10$HfPHaVVTpWscMhpxh168zeIBe0iYg6oMsjBgr98FkSowzCCNtAmw.', 'alumni', 'default.png', NULL, NULL, NULL),
(80, 'permadi.eli@gmail.com', 'Kanda Najmudin M.Ak', '11706079', '2020-05-09 01:23:10', '$2y$10$HK9XLuQkPqhOAyks7.MIJ.YkIfB6vpsR6dRW0PZZ/g5AGuhGBvn66', 'alumni', 'default.png', NULL, NULL, NULL),
(81, 'prakasa.kuncara@gmail.com', 'Ega Siregar', '11706080', '2020-05-09 01:23:10', '$2y$10$1ZAqkZswAFqVx8wbSi8rU.BsZ1tXhGjyFO4n2QBlOagOFXmY7SVqu', 'alumni', 'default.png', NULL, NULL, NULL),
(82, 'bsaragih@namaga.sch.id', 'Gaiman Siregar', '11706081', '2020-05-09 01:23:11', '$2y$10$c/e9HwtExv1rgWFeZinTI.2y5KE64frMoHj7tCeMAt6H1EsPQ.3gi', 'alumni', 'default.png', NULL, NULL, NULL),
(83, 'budiyanto.aslijan@yahoo.co.id', 'Cinta Pratiwi', '11706082', '2020-05-09 01:23:11', '$2y$10$0XpnKrQV2FR8veHqdvFfF.IrpdKFWv/sySSd5bBWgoYkOrDNGYpEu', 'alumni', 'default.png', NULL, NULL, NULL),
(84, 'puspasari.malika@gmail.co.id', 'Cawuk Damu Wibowo', '11706083', '2020-05-09 01:23:11', '$2y$10$wM2JQsGfsvHr5A6PgnDvSeO9pmepW2/.NdSx2pWB.s0YXBYAeepKC', 'alumni', 'default.png', NULL, NULL, NULL),
(85, 'ana79@utami.name', 'Prabu Firgantoro', '11706084', '2020-05-09 01:23:11', '$2y$10$IPWyuaq7wa1gfOw7vDCZV.v2gRq0jJgnK//gBJbvPJk6h1nmDqdt.', 'alumni', 'default.png', NULL, NULL, NULL),
(86, 'shartati@yulianti.info', 'Mahfud Damu Prabowo', '11706085', '2020-05-09 01:23:11', '$2y$10$AppZePw3DflDLS3G0fDhROWneCyut83kIlVsGw.Z42CzeRGVNqAbK', 'alumni', 'default.png', NULL, NULL, NULL),
(87, 'gnatsir@gmail.com', 'Jelita Faizah Hartati M.TI.', '11706086', '2020-05-09 01:23:11', '$2y$10$C/X0FAnITlaBTFRjPqOwdOzoaV0Jg1lWe3GPlDKxR/qIftAKaaulq', 'alumni', 'default.png', NULL, NULL, NULL),
(88, 'purwanti.irma@rahimah.asia', 'Ifa Yani Halimah S.Sos', '11706087', '2020-05-09 01:23:12', '$2y$10$YEQczH/vwrx9F4HPXERODe.7pgIYZ5znDXi5sF/0kW2LUlkUKC3F2', 'alumni', 'default.png', NULL, NULL, NULL),
(89, 'ssihombing@yahoo.com', 'Banawa Siregar', '11706088', '2020-05-09 01:23:12', '$2y$10$s93WdQVJoL0QBiNUvx7KU.OaE.rKHOvATo3o8KDT50FAiE2vHw7Ru', 'alumni', 'default.png', NULL, NULL, NULL),
(90, 'zsantoso@agustina.biz.id', 'Maya Hassanah', '11706089', '2020-05-09 01:23:12', '$2y$10$9mLgIrreeWTk/feIlbWwUuLBlr5ZcHiUjupkvaBUvVVnu/nfs1tv.', 'alumni', 'default.png', NULL, NULL, NULL),
(91, 'kayun.hidayat@yahoo.com', 'Adhiarja Heryanto Maheswara', '11706090', '2020-05-09 01:23:12', '$2y$10$q/l6N9fATiprfqteL5ct0.oF4hKVFVHOmKt7wovwZUKLJNcoT.Ad.', 'alumni', 'default.png', NULL, NULL, NULL),
(92, 'winarsih.tasdik@nuraini.name', 'Argono Haryanto', '11706091', '2020-05-09 01:23:12', '$2y$10$sOE6gyUp66l4VeXSAEOh2.xUOKJLY2bb7cswEnjuhISYNF/SkIT9W', 'alumni', 'default.png', NULL, NULL, NULL),
(93, 'maheswara.niyaga@gmail.co.id', 'Widya Carla Susanti', '11706092', '2020-05-09 01:23:12', '$2y$10$5ll6y72PxjElxqJgmeUc8OUiPpBQTHNc4bHfkJsSG6kc3wHy/HJIC', 'alumni', 'default.png', NULL, NULL, NULL),
(94, 'safitri.kamila@yolanda.org', 'Karimah Kuswandari', '11706093', '2020-05-09 01:23:12', '$2y$10$GFFsvFvbYY2pADuW0ex.Jec.7Fxt8kF5ZMXYsROqoDHcOGxaSZW4q', 'alumni', 'default.png', NULL, NULL, NULL),
(95, 'oni.marpaung@yahoo.co.id', 'Humaira Vanesa Puspasari S.H.', '11706094', '2020-05-09 01:23:12', '$2y$10$6Nsl5ScW3MugG1c.PRI/XeKZgzKFyPfTEXgSmnBGBygZsHpEWchIC', 'alumni', 'default.png', NULL, NULL, NULL),
(96, 'puti09@yahoo.com', 'Wadi Gambira Situmorang M.Ak', '11706095', '2020-05-09 01:23:12', '$2y$10$RemqivVFG3XnQo8.ojJCw.ottqs/JGKjWIcDqy9Tg7vaYPTbmhICq', 'alumni', 'default.png', NULL, NULL, NULL),
(97, 'ksiregar@yahoo.co.id', 'Chelsea Cici Usada', '11706096', '2020-05-09 01:23:13', '$2y$10$gYHktyNXjrVDUBkDC26mUeqYMbh5lhcgL9X.iEZnMvJY7Ggn4R0Z.', 'alumni', 'default.png', NULL, NULL, NULL),
(98, 'usaputra@gmail.co.id', 'Harsana Kajen Budiman M.Kom.', '11706097', '2020-05-09 01:23:13', '$2y$10$DJ5pP5mQdfM7fOQNOfS64.d2gzqBbZWO9q4nBh1xegiSY0.zGjED.', 'alumni', 'default.png', NULL, NULL, NULL),
(99, 'marsudi51@napitupulu.go.id', 'Rahmat Prakosa Januar S.I.Kom', '11706098', '2020-05-09 01:23:13', '$2y$10$vfybyKpioOojfJxjAZOspOv5TpMhDbZIHW2HGEysABjADKX2N0rCe', 'alumni', 'default.png', NULL, NULL, NULL),
(100, 'wibowo.jumadi@padmasari.id', 'Fitria Utami S.Pt', '11706099', '2020-05-09 01:23:13', '$2y$10$BhEmOCGLKUG2obHNevkSfueCXiS8csF8uVcpPIIlJewh2VIw6wnBG', 'alumni', 'default.png', NULL, NULL, NULL),
(101, 'nasyidah.gina@yahoo.co.id', 'Ifa Farida', '11706100', '2020-05-09 01:23:13', '$2y$10$JLBd.O3qZ9K1e/rtEWpL5eMzYSgIaamaJ4kYVZfo1NbPnJoJd1hYS', 'alumni', 'default.png', NULL, NULL, NULL),
(102, 'cindy.permadi@gmail.com', 'Emas Putra S.Kom', '11706101', '2020-05-09 01:23:13', '$2y$10$NDFan4X7q3bB7AZJIxbcr.Wk.mtP2vYmbGbgwko4p78VoG3VgQbG2', 'alumni', 'default.png', NULL, NULL, NULL),
(103, 'vpertiwi@yahoo.com', 'Radit Manullang M.Pd', '11706102', '2020-05-09 01:23:13', '$2y$10$jW7BII8gpnAeM4HQLJ0Xde/xnfV3.vQTB2z6lwAWNn4cNlhXajMgy', 'alumni', 'default.png', NULL, NULL, NULL),
(104, 'puti53@hassanah.asia', 'Teddy Siregar', '11706103', '2020-05-09 01:23:14', '$2y$10$uFAy4caLWLprcb46dpd1Xe7HH/YbRrZhCQV8CJd60Wg80W4FP.XLC', 'alumni', 'default.png', NULL, NULL, NULL),
(105, 'nwijayanti@yahoo.co.id', 'Cawuk Balidin Wacana', '11706104', '2020-05-09 01:23:14', '$2y$10$my9Vy6H01ZvUe4ms4kS7XOrvrVRmcS0P9tEQ5o/pPulLRyAFr7fL6', 'alumni', 'default.png', NULL, NULL, NULL),
(106, 'hidayat.jessica@yahoo.co.id', 'Indah Farida', '11706105', '2020-05-09 01:23:14', '$2y$10$pjMu.Nk7hH4fz4gw12WRfuQ7YzithKyW94CisIp5qUi13oFNarkRy', 'alumni', 'default.png', NULL, NULL, NULL),
(107, 'jelita.situmorang@padmasari.net', 'Margana Hidayanto M.Ak', '11706106', '2020-05-09 01:23:14', '$2y$10$/sPZCiroNH63LyR2fSML/ugCejuerKRE2dnfLPwTFDiqtQA/8p5Fq', 'alumni', 'default.png', NULL, NULL, NULL),
(108, 'lmansur@sihotang.biz.id', 'Najwa Rahayu S.T.', '11706107', '2020-05-09 01:23:14', '$2y$10$s5bV2w4OTTpAGV0sCiaukeuTz6/ZDGUXBoVvd.6JYvgsQu22EaSQm', 'alumni', 'default.png', NULL, NULL, NULL),
(109, 'cinthia.sudiati@maheswara.co', 'Kania Anita Hastuti S.T.', '11706108', '2020-05-09 01:23:15', '$2y$10$t3GrIovqwKcZ3q9NRD3vauhvUc7mCpge7BueWa/o5b03zNWA1vbbG', 'alumni', 'default.png', NULL, NULL, NULL),
(110, 'kurnia51@gmail.co.id', 'Jamalia Ade Prastuti', '11706109', '2020-05-09 01:23:15', '$2y$10$ueeqlvFaKpoXXvOBnpVG5ehWB4k.cei.nbob3CrvXwWYoMt8fo7wi', 'alumni', 'default.png', NULL, NULL, NULL),
(111, 'yolanda.paiman@gmail.co.id', 'Kala Sihombing', '11706110', '2020-05-09 01:23:15', '$2y$10$4Zla8XQl7d.hLLUq1rERIOElDO0tbEYwiqiq1oL3xBpEJEwSkISIa', 'alumni', 'default.png', NULL, NULL, NULL),
(112, 'vagustina@saefullah.tv', 'Najwa Maryati S.Pt', '11706111', '2020-05-09 01:23:15', '$2y$10$LfgVQNH6ObQNKemWuK9fZO92UnXx03CHz0Pn.eFS4J3Fu2CFAgIhG', 'alumni', 'default.png', NULL, NULL, NULL),
(113, 'ulya.mansur@ardianto.asia', 'Ridwan Uwais', '11706112', '2020-05-09 01:23:15', '$2y$10$zIoWelBqbQZ.1K5jz/nO/OQzn6mZ8GpeVQ38TUDwCBfIBKBFXX/Za', 'alumni', 'default.png', NULL, NULL, NULL),
(114, 'melani.paulin@latupono.in', 'Ida Victoria Safitri S.Pt', '11706113', '2020-05-09 01:23:15', '$2y$10$/dW1GFWT5ixXsxZxOnDjcuhrGWuSSeMX9A2oEICXC8CFZLlg/Pcbu', 'alumni', 'default.png', NULL, NULL, NULL),
(115, 'febi.budiman@yahoo.co.id', 'Aslijan Hasta Salahudin', '11706114', '2020-05-09 01:23:15', '$2y$10$tzojLeUQTPYOWHUCDa4Mxeu6SAxRaL.J0yBgv7FHhAsX1yNQ5bvPq', 'alumni', 'default.png', NULL, NULL, NULL),
(116, 'mardhiyah.kasiran@mandala.go.id', 'Najwa Wulandari', '11706115', '2020-05-09 01:23:15', '$2y$10$hiqkkt4.9f3z.z1vkwh7oO3qF97X27r1qHN45w5qE9TQuasCnijvW', 'alumni', 'default.png', NULL, NULL, NULL),
(117, 'nardi17@damanik.desa.id', 'Hasna Mayasari S.Pt', '11706116', '2020-05-09 01:23:15', '$2y$10$KbJI.aMC1tBObnjxtoOzZ.ibrgqrq0qsSakFmvwRd0OlO.hcxGiUK', 'alumni', 'default.png', NULL, NULL, NULL),
(118, 'kasiyah.natsir@gmail.com', 'Cahyono Rajasa', '11706117', '2020-05-09 01:23:15', '$2y$10$ut.ojg2S2VPEjwFKNHZUWunzD2qCTTKQC9Ob3VUDuDVDoCeLQD07y', 'alumni', 'default.png', NULL, NULL, NULL),
(119, 'hpratiwi@nasyiah.tv', 'Ifa Ulva Oktaviani M.M.', '11706118', '2020-05-09 01:23:16', '$2y$10$h01C0WLCQs/yhK5hV.NID.OJe.7aM/jz5VgG1b4rLJooNwWFbdZay', 'alumni', 'default.png', NULL, NULL, NULL),
(120, 'dfarida@irawan.biz', 'Emong Sihombing', '11706119', '2020-05-09 01:23:16', '$2y$10$K/VDaRE58LvQKBQe0946Lu1lSOnVVByT8043Ga0lFeHU/KM362U9K', 'alumni', 'default.png', NULL, NULL, NULL),
(121, 'yolanda.prasetyo@yahoo.com', 'Drajat Habibi', '11706120', '2020-05-09 01:23:16', '$2y$10$4la3yeEZUr70Ilm.dtET7.lNvdM8T3Dv6qWBOAsxHtcy6XbT82mZm', 'alumni', 'default.png', NULL, NULL, NULL),
(122, 'julia.wulandari@wasita.co.id', 'Kadir Hidayat', '11706121', '2020-05-09 01:23:16', '$2y$10$8oaBn0EY4/dIMDbbv6tK8upNdRhnwGxWBgFfXOimPwXfAs1oGmcSm', 'alumni', 'default.png', NULL, NULL, NULL),
(123, 'diana.hutapea@pertiwi.id', 'Usyi Safitri M.Farm', '11706122', '2020-05-09 01:23:16', '$2y$10$LCAxWTzuLR3rwRwn3rSfauzwbHEQbqquUWCcHFL.ujY5hGOc1p8bO', 'alumni', 'default.png', NULL, NULL, NULL),
(124, 'prayogo.pudjiastuti@gmail.co.id', 'Utama Anggriawan', '11706123', '2020-05-09 01:23:16', '$2y$10$SLby0qE3jB1ptW7mN359V.hSYTmrA2rhl7woJZbxnIAIG0vq24pcC', 'alumni', 'default.png', NULL, NULL, NULL),
(125, 'hilda27@gmail.co.id', 'Cinthia Iriana Hasanah S.Psi', '11706124', '2020-05-09 01:23:16', '$2y$10$SsGXeZMQYeRepPq2uPvWReO6VrapcWUaVCYmrWuFhSEjeg5cWwiJG', 'alumni', 'default.png', NULL, NULL, NULL),
(126, 'ibrani.yuniar@yahoo.co.id', 'Mala Yuniar', '11706125', '2020-05-09 01:23:16', '$2y$10$q46Nd1xik.G3wTbJJrbzuOW3CnYUpsmJ2FMxe3moIB7qdXNNJpGhK', 'alumni', 'default.png', NULL, NULL, NULL),
(127, 'jandriani@yahoo.com', 'Zulfa Novitasari', '11706126', '2020-05-09 01:23:16', '$2y$10$ysDTnNTOUSvoiOUO505rE.DCk59IobYyVV80CITZTacn4PgpD.rvu', 'alumni', 'default.png', NULL, NULL, NULL),
(128, 'patricia.andriani@gmail.com', 'Panca Cakrajiya Nababan', '11706127', '2020-05-09 01:23:17', '$2y$10$215s2st58ktSwW5u5tdSz.hATCfvX8iwp1LpSsQ4JDA3KfsqLWkUS', 'alumni', 'default.png', NULL, NULL, NULL),
(129, 'purwanto.nasyidah@situmorang.id', 'Yulia Padmasari', '11706128', '2020-05-09 01:23:17', '$2y$10$.beJceoEwxX7ty.6scQ9ueBqPAEhtHPQ038SjLCf320YJf/JTRjfC', 'alumni', 'default.png', NULL, NULL, NULL),
(130, 'cyolanda@rahmawati.or.id', 'Carla Usamah S.Gz', '11706129', '2020-05-09 01:23:17', '$2y$10$AOeyHM8ujOkso7GSNuPd5uANJxlb/6DVs2s8AOR2xIZFl2c3GsH/u', 'alumni', 'default.png', NULL, NULL, NULL),
(131, 'mutia94@gmail.co.id', 'Ida Hastuti S.Psi', '11706130', '2020-05-09 01:23:17', '$2y$10$t2qdWsKizzlJuoXGQObgDu3im4n535pYVSbGTIqW2ZjTF3VnzXEne', 'alumni', 'default.png', NULL, NULL, NULL),
(132, 'hastuti.melinda@wibowo.in', 'Artawan Nainggolan', '11706131', '2020-05-09 01:23:17', '$2y$10$vN0h52YyNYJRw5jslW6CZuQPm5u80NLK/twoPpg5tCHJ83jKVYlvu', 'alumni', 'default.png', NULL, NULL, NULL),
(133, 'viktor88@yahoo.co.id', 'Carub Januar S.Pt', '11706132', '2020-05-09 01:23:17', '$2y$10$LsyzREOfyuua38IzhsJJj.ierUI4jULRIb.8zCLyfE27Zp3rYniLa', 'alumni', 'default.png', NULL, NULL, NULL),
(134, 'iutami@padmasari.biz', 'Radit Jailani', '11706133', '2020-05-09 01:23:17', '$2y$10$ECMCLgdBOylkP8h3GLRFDO2SBLx19Ga6x/I3YZNW1PGa46FnF0qM2', 'alumni', 'default.png', NULL, NULL, NULL),
(135, 'wahyu84@hakim.biz', 'Karen Susanti M.Farm', '11706134', '2020-05-09 01:23:17', '$2y$10$k3EkU7uxyBmNzSnxLz/Zh.L2vMCTbxDaZz7Z.tl1uwY3gXTvODRc.', 'alumni', 'default.png', NULL, NULL, NULL),
(136, 'zelaya.prastuti@yahoo.com', 'Yoga Indra Waskita', '11706135', '2020-05-09 01:23:17', '$2y$10$OsJ3/UGdlAn438lyG9H2wecNSbXUoO4qgTf3HKhaRw4GTzDRrC/NC', 'alumni', 'default.png', NULL, NULL, NULL),
(137, 'violet.laksita@hariyah.co', 'Koko Samosir', '11706136', '2020-05-09 01:23:17', '$2y$10$7z4o800rh.XtINi09Bde0O2f.nXAtcsV.yZCxNrY.vXI1d5ymzYHW', 'alumni', 'default.png', NULL, NULL, NULL),
(138, 'handayani.ina@aryani.ac.id', 'Yani Permata', '11706137', '2020-05-09 01:23:18', '$2y$10$Iuxs1VRBXRN086iNCWOcceA8fVyOM1JRCJXPg/TymN45YEKiTw.Li', 'alumni', 'default.png', NULL, NULL, NULL),
(139, 'kurniawan.kambali@gmail.co.id', 'Mulyanto Saefullah', '11706138', '2020-05-09 01:23:18', '$2y$10$tEs7TNMvTM4Zon7LPhiU7eMNuVPEUmCUMG5wFnS4ey48xa5vsvMTi', 'alumni', 'default.png', NULL, NULL, NULL),
(140, 'xmelani@prabowo.in', 'Tiara Laksmiwati', '11706139', '2020-05-09 01:23:18', '$2y$10$NKq3Z1jS29dBPnYZa6xnh.wqRI0he.tBTL4/IqOUDHIYXcS3K5b9G', 'alumni', 'default.png', NULL, NULL, NULL),
(141, 'clara.hakim@halimah.sch.id', 'Darmanto Saefullah', '11706140', '2020-05-09 01:23:18', '$2y$10$hPW/DWsHxOx8LdCBNIVcxOSiDf/fTi30oceA4gFyqZIGObFnX5KDW', 'alumni', 'default.png', NULL, NULL, NULL),
(142, 'elvina.habibi@gmail.com', 'Jasmin Pratiwi', '11706141', '2020-05-09 01:23:18', '$2y$10$rFp0SCYyRZxKvdkhBgCBsu6Z3JXNFKiQ4isYbw7kMY7xONEi5FgCq', 'alumni', 'default.png', NULL, NULL, NULL),
(143, 'mandala.putri@gmail.com', 'Prakosa Kardi Napitupulu', '11706142', '2020-05-09 01:23:18', '$2y$10$Tn/I8Jw9CXXxjCcgUlXVnewIUY9r4rafshGc3JTw21j5SUHc1IZbG', 'alumni', 'default.png', NULL, NULL, NULL),
(144, 'usitompul@gmail.com', 'Vinsen Siregar', '11706143', '2020-05-09 01:23:18', '$2y$10$YdXk4bBibyz2owdLvqWw3.pREVZTpqw0rpMpsa8ruO5o3FeHIi6dK', 'alumni', 'default.png', NULL, NULL, NULL),
(145, 'balijan.nurdiyanti@hastuti.net', 'Cecep Pangestu Kuswoyo', '11706144', '2020-05-09 01:23:18', '$2y$10$ovd.51EJNecufmRqSjgn5eFUNXCzD/nlYjhllQ7FMwMSViSJPqhhy', 'alumni', 'default.png', NULL, NULL, NULL),
(146, 'ami.kusumo@yahoo.com', 'Lamar Gaduh Wijaya', '11706145', '2020-05-09 01:23:18', '$2y$10$4tYzPwSr2g4jKkrZiovRH.atb27mFzsTuNDQRXM5OQQpz/zV2CBR2', 'alumni', 'default.png', NULL, NULL, NULL),
(147, 'ypalastri@yahoo.com', 'Irsad Budi Pradana', '11706146', '2020-05-09 01:23:19', '$2y$10$a7qjbLG7BOdxskXDhCK1wOgBO/go1yf1U7unDQDAN9xo2kd5jux9a', 'alumni', 'default.png', NULL, NULL, NULL),
(148, 'hassanah.humaira@suwarno.in', 'Violet Pudjiastuti M.Kom.', '11706147', '2020-05-09 01:23:19', '$2y$10$jc5f79aDKpu8zpVkoGOJYOJN46J/lhOkC9TO0HMIYoaZoaPb0aD.W', 'alumni', 'default.png', NULL, NULL, NULL),
(149, 'hasna.agustina@pudjiastuti.go.id', 'Rendy Januar', '11706148', '2020-05-09 01:23:19', '$2y$10$V3ikHMdMx18tyPEaiDL0teLpTYP4iVl4SSxU7uFtzwhQpNtwJi34C', 'alumni', 'default.png', NULL, NULL, NULL),
(150, 'eanggraini@marbun.id', 'Maida Haryanti', '11706149', '2020-05-09 01:23:19', '$2y$10$SaWZ4kM91kHuuyKtp/.0/uqzuk2FXDWqtQEWzgceCrZ8C5//xRYZ2', 'alumni', 'default.png', NULL, NULL, NULL),
(151, 'nasyiah.virman@yahoo.co.id', 'Warsita Budiman', '11706150', '2020-05-09 01:23:19', '$2y$10$FzAfWPzxcowyZrP9A0SlguvE/Pjump68dQBnllma3Q8Q3orP3FmuS', 'alumni', 'default.png', NULL, NULL, NULL),
(152, 'utama.shania@wulandari.my.id', 'Humaira Puji Suryatmi', '11706151', '2020-05-09 01:23:19', '$2y$10$kYHH946t0hZjYrt.02QVm.3uQrCpmGLmMI20eLxOStAGHTQOtFkum', 'alumni', 'default.png', NULL, NULL, NULL),
(153, 'uchita00@yahoo.co.id', 'Dina Rahimah', '11706152', '2020-05-09 01:23:19', '$2y$10$SAPWIrN88YKohvqxvG09pe8zgwwzVW0JRuf/WVHOoAaO2hKFnkFM2', 'alumni', 'default.png', NULL, NULL, NULL),
(154, 'ssaragih@gmail.com', 'Rahmat Cawisono Wibisono S.E.', '11706153', '2020-05-09 01:23:19', '$2y$10$b9SL6z62QSp28fwikclObudh0dam.5IpXynrMHWm./tiIUE2Du2l2', 'alumni', 'default.png', NULL, NULL, NULL),
(155, 'prabowo.prasetyo@suartini.net', 'Julia Tania Mandasari', '11706154', '2020-05-09 01:23:19', '$2y$10$JdaWS0vvZTd7rEYRXVfZTelosWImPbosVYy6c/oKTSJU8xl7WqXOO', 'alumni', 'default.png', NULL, NULL, NULL),
(156, 'raditya08@yahoo.co.id', 'Emong Waluyo', '11706155', '2020-05-09 01:23:20', '$2y$10$nOXK5jZ2e0rePrd/ag2QuuE7K14Fhei/e8sRgilyYBzG77h.Yq86G', 'alumni', 'default.png', NULL, NULL, NULL),
(157, 'lasmanto17@rahimah.asia', 'Zulfa Puspasari M.M.', '11706156', '2020-05-09 01:23:20', '$2y$10$PT/xIFckH4slX5rZ2zNmIO49cch4SH1FM2Dt/Af5ikSQ/ixJ1yO7y', 'alumni', 'default.png', NULL, NULL, NULL),
(158, 'ina32@susanti.mil.id', 'Bagiya Wacana', '11706157', '2020-05-09 01:23:20', '$2y$10$qZ0FekR3KGSpYZtYs89WI.ebXEzbbqiuUzg8toEMol8sS2btSPWWu', 'alumni', 'default.png', NULL, NULL, NULL),
(159, 'prakosa39@ardianto.com', 'Gaiman Zulkarnain', '11706158', '2020-05-09 01:23:20', '$2y$10$EMLVpUOydrj/bTALI7YVd.DV4Aik9KBU6SX3dtrs88zgEdSYxNN96', 'alumni', 'default.png', NULL, NULL, NULL),
(160, 'candrakanta57@yahoo.co.id', 'Salman Nainggolan', '11706159', '2020-05-09 01:23:20', '$2y$10$Yj0058bsLPE52Q6e9Dv9VuE3BJ9CauJwMcTL2uTWgrv1g8xZpFHJ6', 'alumni', 'default.png', NULL, NULL, NULL),
(161, 'azalea83@yahoo.com', 'Ulya Prastuti', '11706160', '2020-05-09 01:23:20', '$2y$10$lfw8aN7gfvgkpd1cq2729Otnwaew0HDHL.awkcU98yTjB46ec7mNq', 'alumni', 'default.png', NULL, NULL, NULL),
(162, 'aslijan83@adriansyah.co.id', 'Zalindra Vanya Nasyidah', '11706161', '2020-05-09 01:23:20', '$2y$10$Cy0SrJ22ZjulobA6CNWZoO1C04xdtgaWu3haI.uhKSGXA5HwBW0A.', 'alumni', 'default.png', NULL, NULL, NULL),
(163, 'ani62@yahoo.com', 'Pranawa Marbun', '11706162', '2020-05-09 01:23:20', '$2y$10$CLomZTLzMHnNJNuFn7AY9.RB8pOD4bVi76dLh4i8VWnwNbWKCfmFK', 'alumni', 'default.png', NULL, NULL, NULL),
(164, 'vpudjiastuti@tampubolon.sch.id', 'Yuliana Novitasari', '11706163', '2020-05-09 01:23:20', '$2y$10$pV2W0qOt658w.h3lnApz7Os0getffI50V0iFWyXQhc9sUMsAS4nXq', 'alumni', 'default.png', NULL, NULL, NULL),
(165, 'cahyono.namaga@nuraini.or.id', 'Rangga Galih Mangunsong', '11706164', '2020-05-09 01:23:20', '$2y$10$XIIGRe1Hzz64xuYEGedrYOEIalzT/j9DxvY8di1DlOoVRs7gqTP9W', 'alumni', 'default.png', NULL, NULL, NULL),
(166, 'jfujiati@gmail.co.id', 'Galur Sabri Suryono M.TI.', '11706165', '2020-05-09 01:23:21', '$2y$10$UfcJYRuZtq./M04WXWul0uPD1.F.8EI5j3oEoeJj2ZXwgNehDampy', 'alumni', 'default.png', NULL, NULL, NULL),
(167, 'lputra@anggriawan.asia', 'Ibrahim Purwadi Nugroho M.TI.', '11706166', '2020-05-09 01:23:21', '$2y$10$jKUfg.6Hd2e5gUtzMs8cI.NT82Faq2vsMwUBQ1anAveVlLJlCl9Te', 'alumni', 'default.png', NULL, NULL, NULL),
(168, 'aryani.sari@maryati.my.id', 'Ifa Nasyiah', '11706167', '2020-05-09 01:23:21', '$2y$10$jn9HKa/jhKN1qsBsgSWXJOnt0irZbRRSCL44f/s0FcpPP3j5nd8mK', 'alumni', 'default.png', NULL, NULL, NULL),
(169, 'mahesa85@gmail.co.id', 'Lalita Yuniar', '11706168', '2020-05-09 01:23:21', '$2y$10$QbAHA8qtoM4G6EwGIcH2me.CVZmVf9CFXO7Fo0wAYZMJecBHeHWYu', 'alumni', 'default.png', NULL, NULL, NULL),
(170, 'rama.pradipta@gmail.co.id', 'Laila Intan Wahyuni', '11706169', '2020-05-09 01:23:21', '$2y$10$UszUdK7pP7383jlWJusd3e2NDobQGjSJ1wNejUAVl9Ixhvm4tKXGu', 'alumni', 'default.png', NULL, NULL, NULL),
(171, 'zahra83@yahoo.com', 'Gaduh Anggriawan S.Pt', '11706170', '2020-05-09 01:23:21', '$2y$10$1uMqEF/P63kPZDoAsNt2CuGb8JN1t/RBcYYt5qSaCAQNauD73z4hO', 'alumni', 'default.png', NULL, NULL, NULL),
(172, 'rkusumo@yahoo.co.id', 'Tami Novitasari', '11706171', '2020-05-09 01:23:21', '$2y$10$8vuM/Xv3T48rx7DpSwTs3O9..d/Mrua/H7Fm6lNmO7CA2cG/WQHjq', 'alumni', 'default.png', NULL, NULL, NULL),
(173, 'susanti.reza@pudjiastuti.web.id', 'Patricia Purnawati', '11706172', '2020-05-09 01:23:21', '$2y$10$j/D2Uh/lr5eTcSRBB/NQA.oTGf59MxxyiELE1gglo9kTG3cZxcApC', 'alumni', 'default.png', NULL, NULL, NULL),
(174, 'dongoran.dalimin@yahoo.com', 'Michelle Usada S.H.', '11706173', '2020-05-09 01:23:22', '$2y$10$k8ufJ5jy.oR9BlpuPq.ZEui4LzjAWLQ8RAp60KCu/dBAdy0nkdbXK', 'alumni', 'default.png', NULL, NULL, NULL),
(175, 'harimurti11@gmail.com', 'Kayla Farida', '11706174', '2020-05-09 01:23:22', '$2y$10$VM1xwDzt/.m.msR2p28A3OG0/UngsllfBdWMQFlf9oeSmZlm3jd12', 'alumni', 'default.png', NULL, NULL, NULL),
(176, 'mala62@yahoo.com', 'Balijan Ihsan Hidayat', '11706175', '2020-05-09 01:23:22', '$2y$10$.PAbchm8bXFUAdpdQ5/VlOKheYzqPRRAh0tdHox2gG/V6TztU5f3m', 'alumni', 'default.png', NULL, NULL, NULL),
(177, 'nasrullah51@susanti.co', 'Yono Daru Budiman S.Psi', '11706176', '2020-05-09 01:23:22', '$2y$10$CvATAhNuEtuqll7noCuuOOSJTTcitUYzw6r1sKEroRq6IYGKxCLZq', 'alumni', 'default.png', NULL, NULL, NULL),
(178, 'djailani@pratiwi.info', 'Ismail Jagaraga Rajata', '11706177', '2020-05-09 01:23:22', '$2y$10$3OdIFApR0Ka/z7y0gDdHxeE/qGRnrZNm7DK2gYIx/P5bSSFP4YN/O', 'alumni', 'default.png', NULL, NULL, NULL),
(179, 'bakti80@astuti.biz', 'Victoria Pratiwi', '11706178', '2020-05-09 01:23:22', '$2y$10$n5hren20DoCtnDJcsFNOTeN8QWa7j.7o43rK7wThFRmSwaphSllqC', 'alumni', 'default.png', NULL, NULL, NULL),
(180, 'galang44@gmail.com', 'Nasrullah Narpati', '11706179', '2020-05-09 01:23:22', '$2y$10$4pMBj83yZv8Lg0S2T.P.UeEGemKPpP.EVzWFCauVeO9/TdbVpzG/i', 'alumni', 'default.png', NULL, NULL, NULL),
(181, 'iusada@gmail.com', 'Hesti Haryanti', '11706180', '2020-05-09 01:23:22', '$2y$10$FYwWsvdQSVtXYvXHPH9Pw.lvWh93nDvReBKLy41D7nkZPS5d7HYIK', 'alumni', 'default.png', NULL, NULL, NULL),
(182, 'patricia.prayoga@yahoo.com', 'Oman Wijaya', '11706181', '2020-05-09 01:23:22', '$2y$10$v2xUugBl0E2Z.c1.ibDSweKDqi6taEvm6NP19lIr34AEEVEtGvVGC', 'alumni', 'default.png', NULL, NULL, NULL),
(183, 'fitriani19@mardhiyah.desa.id', 'Novi Purwanti', '11706182', '2020-05-09 01:23:22', '$2y$10$YrXeMm.Bf958xAN8b7y/OOVT.vjkzInB40ALxr2oXREO8rbVe0DIm', 'alumni', 'default.png', NULL, NULL, NULL),
(184, 'lala.rahayu@gmail.co.id', 'Viktor Kuswoyo', '11706183', '2020-05-09 01:23:23', '$2y$10$jLaVoa54.MKydE55nZL7nul8w00lEJ7hItoLMzYIN6m6aMeSdRmc2', 'alumni', 'default.png', NULL, NULL, NULL),
(185, 'situmorang.violet@yahoo.co.id', 'Dian Zelda Mandasari', '11706184', '2020-05-09 01:23:23', '$2y$10$hdzhh8v5goS8aH8/77QGvOPkOuCm.z6QZJcqqALU2d7xOjt/0Glqa', 'alumni', 'default.png', NULL, NULL, NULL),
(186, 'tkusmawati@gmail.co.id', 'Syahrini Syahrini Mardhiyah M.Pd', '11706185', '2020-05-09 01:23:23', '$2y$10$hFF5.5F8RzwMBrIO1DiWNu7T1WG9fsJbb1ScMDnd9YmajGPlW84pq', 'alumni', 'default.png', NULL, NULL, NULL),
(187, 'lsuartini@padmasari.in', 'Halima Rahimah', '11706186', '2020-05-09 01:23:23', '$2y$10$...x9QuKoLOi/xIt9HcitO3G86bPmvBos2cOw2WEXfSy6ly3yr1Ma', 'alumni', 'default.png', NULL, NULL, NULL),
(188, 'gilda14@yahoo.co.id', 'Mustika Dongoran', '11706187', '2020-05-09 01:23:23', '$2y$10$6b06YXtu3iOSSS25BV77.elaNOoE.tfR7K9onaQbyfFuN.JcXxQMi', 'alumni', 'default.png', NULL, NULL, NULL),
(189, 'susanti.pandu@gmail.co.id', 'Elma Usada', '11706188', '2020-05-09 01:23:23', '$2y$10$EojnTHxVgqqK/X/MUp0Zcuga4kpnGvwWOjckZlyDUEaZSsJUom3Ti', 'alumni', 'default.png', NULL, NULL, NULL),
(190, 'victoria.rahimah@rajasa.desa.id', 'Shania Laksmiwati S.IP', '11706189', '2020-05-09 01:23:23', '$2y$10$1smTxEUXdkk5.uPtQVAVBu2q0oo4d94YMdBr5xhu2bvvIzwA5Gtjm', 'alumni', 'default.png', NULL, NULL, NULL),
(191, 'sari.pertiwi@salahudin.sch.id', 'Farhunnisa Amelia Hassanah S.H.', '11706190', '2020-05-09 01:23:23', '$2y$10$ROeBmR6j6CKXf4o6ER36yOJmB9izJeWsr6DskInfochk1QurPJH4S', 'alumni', 'default.png', NULL, NULL, NULL),
(192, 'abyasa.pradipta@budiyanto.ac.id', 'Eva Anastasia Laksmiwati', '11706191', '2020-05-09 01:23:23', '$2y$10$aP8xfKKyC6TpMkKWC320Gu3phrn3bS92O0B9whXFQfgFEdvLyTA7.', 'alumni', 'default.png', NULL, NULL, NULL),
(193, 'raihan.rahimah@gmail.com', 'Raharja Dongoran', '11706192', '2020-05-09 01:23:24', '$2y$10$2Tt2l9IWQHON2FDd5iVvmel/kIWpkzJ0KDKICfqrwul09/ZmMoCiy', 'alumni', 'default.png', NULL, NULL, NULL),
(194, 'prabowo.elon@gmail.com', 'Darijan Santoso', '11706193', '2020-05-09 01:23:24', '$2y$10$Dpv8X.xwK0Bk9iVM3JjWseM0G3dzonTah6OikmxP4oZokPPVoDQ1C', 'alumni', 'default.png', NULL, NULL, NULL),
(195, 'raharja52@riyanti.in', 'Hendra Kuswoyo', '11706194', '2020-05-09 01:23:24', '$2y$10$ep59GQRuhNMozgBG7SvEjutZdwbHbo4NQoHhmaIk8YNognSjj4K6S', 'alumni', 'default.png', NULL, NULL, NULL),
(196, 'purnawati.kania@nuraini.name', 'Niyaga Wibowo', '11706195', '2020-05-09 01:23:24', '$2y$10$6OSSrKr.d2/0mmg38Ary3u9LNFDETnc50kLxgK3cy8gMkOoynOFHy', 'alumni', 'default.png', NULL, NULL, NULL),
(197, 'budiman.dagel@gmail.com', 'Carla Safitri', '11706196', '2020-05-09 01:23:24', '$2y$10$zZIL2P3hNsq2BqwIxtDCCODBvEh6hVoBtkVMSNVuc7/lPpcMkJC3K', 'alumni', 'default.png', NULL, NULL, NULL),
(198, 'saadat.purwanti@pertiwi.co.id', 'Devi Alika Halimah S.Psi', '11706197', '2020-05-09 01:23:24', '$2y$10$VbjTdwfGNte.nFgna.X/OuJ4EFjxQnCvzPoU/yUgkg0UNrRsMEqxK', 'alumni', 'default.png', NULL, NULL, NULL),
(199, 'wfarida@yahoo.com', 'Jaiman Nugroho S.Ked', '11706198', '2020-05-09 01:23:24', '$2y$10$sae9QbjFZeYBNS1LxQNDZOuHbOn0aDyyvb0YsfUPyUtwddivmc5iq', 'alumni', 'default.png', NULL, NULL, NULL),
(200, 'pardi30@widiastuti.co', 'Umi Rahayu', '11706199', '2020-05-09 01:23:24', '$2y$10$kZJ9pLpx2OE39a7/oTSDl.MZdF1xEFyStHYioV75QfymESRixSUCK', 'alumni', 'default.png', NULL, NULL, NULL),
(201, 'zelda.maryadi@yahoo.co.id', 'Ellis Mulyani', '11706200', '2020-05-09 01:23:25', '$2y$10$ykFnt5WV3.1lJ.cVw.fTRe4yN.BFvz5ZGij0wiaQxYy0NWinhPdqm', 'alumni', 'default.png', NULL, NULL, NULL),
(202, 'padmi.natsir@pradipta.co.id', 'Cager Cecep Budiyanto', '11706201', '2020-05-09 01:23:25', '$2y$10$seV1oXtwkfPcOph7Vauu2uovbJrmJkIGiU5jwBylv7nh7vTC7CgkS', 'alumni', 'default.png', NULL, NULL, NULL),
(203, 'kamal.permata@yuliarti.asia', 'Fitriani Pratiwi', '11706202', '2020-05-09 01:23:25', '$2y$10$GKQS0rMkmt/UC35HeAVQL.qptzBTEeUIbgNJpRbKg2n3ddYAO30Uu', 'alumni', 'default.png', NULL, NULL, NULL),
(204, 'marsudi08@susanti.go.id', 'Makara Manah Nababan', '11706203', '2020-05-09 01:23:25', '$2y$10$kZTU.dWDgyW4vvoa0E7xseWdk17PTVnBv4eKfHS26AckKxIz7xZO6', 'alumni', 'default.png', NULL, NULL, NULL),
(205, 'atmaja86@haryanto.biz.id', 'Lalita Handayani', '11706204', '2020-05-09 01:23:25', '$2y$10$74hOPoTUEGTDf7TC/kEn6uJS5pq4bjTGCtRtMrovzUOzsFx3UCPXG', 'alumni', 'default.png', NULL, NULL, NULL),
(206, 'mardhiyah.ina@gmail.com', 'Warsa Yahya Pangestu S.E.I', '11706205', '2020-05-09 01:23:25', '$2y$10$/UpimA11/Gj0MKCFPatQF.EIS55hzNrF33zTuLX07PfRqitmBRJum', 'alumni', 'default.png', NULL, NULL, NULL),
(207, 'bakiman.kusmawati@nurdiyanti.net', 'Faizah Qori Wahyuni M.Ak', '11706206', '2020-05-09 01:23:25', '$2y$10$r9/YmBSmIUzRLJWsB9k8XeuBwbCzW2j1mnFp7k8gcF6TlSPXtruWO', 'alumni', 'default.png', NULL, NULL, NULL),
(208, 'suwarno.tina@gmail.com', 'Sari Lestari S.Farm', '11706207', '2020-05-09 01:23:25', '$2y$10$q3XajxJZYg50Okdjq6buSeGiyUufS2bHxi5loSmTLCGNb3bUh8s72', 'alumni', 'default.png', NULL, NULL, NULL),
(209, 'gsaputra@yahoo.com', 'Rosman Mansur', '11706208', '2020-05-09 01:23:26', '$2y$10$S18Z8IVCjLH0WMxzun613udc2QC6wgV9r.3TKsKQy0.Ek.zSAFRQi', 'alumni', 'default.png', NULL, NULL, NULL),
(210, 'mansur.kenes@wijayanti.biz.id', 'Emas Kusumo S.Farm', '11706209', '2020-05-09 01:23:26', '$2y$10$AUoE/dggu5QnIOCDFq7xMugeg/izMvDH5771Q7P9Jl5xfparpvyCW', 'alumni', 'default.png', NULL, NULL, NULL),
(211, 'jpurnawati@yahoo.co.id', 'Uda Lazuardi', '11706210', '2020-05-09 01:23:26', '$2y$10$dSWmWJkohtVpCGJa8rKLF.CFZAr4npCmWc8Z8TqoNZew3y1cyo6ku', 'alumni', 'default.png', NULL, NULL, NULL),
(212, 'kajen.tampubolon@wahyuni.tv', 'Wirda Hastuti', '11706211', '2020-05-09 01:23:26', '$2y$10$Emzx3EU7CqH/oE2FSamL.OuigX3RexQP/ARymfYJdhz7cdOKB4kAO', 'alumni', 'default.png', NULL, NULL, NULL),
(213, 'asirwanda.pratiwi@gmail.com', 'Kacung Sinaga', '11706212', '2020-05-09 01:23:26', '$2y$10$fDKGTJxtgprzhQRdehhN7.oYThP0hOnVdzeflMJVHDedyHS9lRqDW', 'alumni', 'default.png', NULL, NULL, NULL),
(214, 'daniswara.hastuti@yahoo.com', 'Mila Puspita M.Ak', '11706213', '2020-05-09 01:23:26', '$2y$10$8A9LT2pDPCZ5tcMOxU3GOeUMbh/ZEdiFIwX7KEZ/QC9NnE8fiPjoW', 'alumni', 'default.png', NULL, NULL, NULL),
(215, 'igunarto@saptono.org', 'Liman Ajimat Ramadan S.Sos', '11706214', '2020-05-09 01:23:26', '$2y$10$gno8amMARYx0Dkuq0H5GiuPGAwQKfhOl3HiqbzSeeYYbq79lqwhje', 'alumni', 'default.png', NULL, NULL, NULL),
(216, 'taufan41@yahoo.co.id', 'Ajiman Putra', '11706215', '2020-05-09 01:23:26', '$2y$10$Sv875fHGV1RNE3H/NTgcZ.JydGT2y2fBtooDrCeJPPSY5Z7l5yGZW', 'alumni', 'default.png', NULL, NULL, NULL),
(217, 'ciaobella.lailasari@yahoo.co.id', 'Caket Marpaung', '11706216', '2020-05-09 01:23:26', '$2y$10$UCWCk2q7eVPjA2TadoPQG.c772FjWNkAPj6guGdoSHI.56WbWCWi.', 'alumni', 'default.png', NULL, NULL, NULL),
(218, 'fwaskita@gmail.com', 'Bahuraksa Tamba', '11706217', '2020-05-09 01:23:26', '$2y$10$OxYrAxucjxstVQnhwEfYbuwydqKyLqgajpm4Hv6NpkFRCmvxmnPPW', 'alumni', 'default.png', NULL, NULL, NULL),
(219, 'suryatmi.oskar@gmail.com', 'Luis Saefullah', '11706218', '2020-05-09 01:23:27', '$2y$10$HQd2fMJ.agkCyDnNajCWkO1qGGMPPh92Jg/66S2r3FA5IGdJV..mq', 'alumni', 'default.png', NULL, NULL, NULL),
(220, 'hesti.pangestu@sitorus.info', 'Genta Yuliarti', '11706219', '2020-05-09 01:23:27', '$2y$10$QeHJK6EnJOrPOIqnVgcKjuGO63yaRgWuI0ykFgPqca4UeF4FsSQz2', 'alumni', 'default.png', NULL, NULL, NULL),
(221, 'farida.prima@yahoo.co.id', 'Balapati Latupono S.IP', '11706220', '2020-05-09 01:23:27', '$2y$10$o2ppFTilMKCkCv6P823vBOdqL33MfVkzivoGHLhss0StcrlEUiHNW', 'alumni', 'default.png', NULL, NULL, NULL),
(222, 'virman59@suryatmi.biz', 'Jinawi Mahendra', '11706221', '2020-05-09 01:23:27', '$2y$10$iFu29nfL.WEkFe9M0atSHOD2U9GXUSRxP4Xpe7YQqppdUczIc9En6', 'alumni', 'default.png', NULL, NULL, NULL),
(223, 'vpuspita@yahoo.co.id', 'Hardana Omar Saptono', '11706222', '2020-05-09 01:23:27', '$2y$10$A8Ho/NRC6XMACG0ZSmgBB.LLiTOjOObHJxdYocnfRr2yEVdfd9CCa', 'alumni', 'default.png', NULL, NULL, NULL),
(224, 'apadmasari@yahoo.com', 'Marwata Halim', '11706223', '2020-05-09 01:23:27', '$2y$10$jKlGv4nJt.HRoseM00of8.fjCKEnTfUe.ISCUpGFP/wIHpHiYw4pC', 'alumni', 'default.png', NULL, NULL, NULL),
(225, 'genta.waskita@yahoo.com', 'Humaira Haryanti', '11706224', '2020-05-09 01:23:27', '$2y$10$VIBoiiYcVJ8OcJmhSo91v.DNrVTbR81.KqA9YWR5MLSE5Vs78MeGe', 'alumni', 'default.png', NULL, NULL, NULL),
(226, 'bhidayat@wacana.net', 'Laswi Maryadi', '11706225', '2020-05-09 01:23:27', '$2y$10$VuUYN47ymiHo9TsxQ2IrU.qW1yqDGxeHmszWBGtY.BtZoUEEHIOby', 'alumni', 'default.png', NULL, NULL, NULL),
(227, 'zahra.ardianto@gmail.com', 'Luluh Wibisono S.Pt', '11706226', '2020-05-09 01:23:27', '$2y$10$gyXJFNLm9fSdrHX0b2MmcesBNu3wXqY5j3gjngLYpbIVezDJ2N9wW', 'alumni', 'default.png', NULL, NULL, NULL),
(228, 'yuliarti.mursinin@puspita.my.id', 'Eman Siregar', '11706227', '2020-05-09 01:23:28', '$2y$10$AeXyLHijox8JJBhJGXReleRUt3PhmPXAMSEKaFs/X0DV5JbLqmgCG', 'alumni', 'default.png', NULL, NULL, NULL),
(229, 'ade.hutagalung@yolanda.my.id', 'Lili Mulyani', '11706228', '2020-05-09 01:23:28', '$2y$10$B6X8wzQdhI9mr0CUiiqE/umdo7MoIe5ontblqFZLpXO4bgLVHXdAu', 'alumni', 'default.png', NULL, NULL, NULL),
(230, 'palastri.danang@yahoo.com', 'Unggul Mursinin Mustofa S.Pd', '11706229', '2020-05-09 01:23:28', '$2y$10$pgsRHiK6f2LCWi3EKfBhKei23vWwUEvek3gYt5.9AYjVYjLVJBn.2', 'alumni', 'default.png', NULL, NULL, NULL),
(231, 'ozy.gunarto@agustina.info', 'Indah Mayasari', '11706230', '2020-05-09 01:23:28', '$2y$10$MbZaQ9NyC2sZ938wwI.QJeiJcW4OWFwE.bZVUItTbOFzBX6uvj3je', 'alumni', 'default.png', NULL, NULL, NULL),
(232, 'iyolanda@suryatmi.co', 'Umi Azalea Rahmawati', '11706231', '2020-05-09 01:23:28', '$2y$10$ayrs2cZtmTaZDJxzRSwqvOQyWa2n2QvpmZLs6iTEX5mZ2IpQHoxVq', 'alumni', 'default.png', NULL, NULL, NULL),
(233, 'vera.pangestu@yahoo.co.id', 'Puji Mardhiyah', '11706232', '2020-05-09 01:23:28', '$2y$10$YP7gW0Puq0jDgDcrF7sYTO.nrfEQaqwe.zv7cZoaw6pQn683rNCXm', 'alumni', 'default.png', NULL, NULL, NULL),
(234, 'febi.wahyudin@gmail.co.id', 'Kalim Gilang Gunarto M.Farm', '11706233', '2020-05-09 01:23:29', '$2y$10$SZbvlsEalaJdPtdT6chsBeN94P3qLFoFBuoJdeWKAVDSqx2CdYk6e', 'alumni', 'default.png', NULL, NULL, NULL),
(235, 'drajat.habibi@haryanti.co.id', 'Sidiq Pradipta', '11706234', '2020-05-09 01:23:29', '$2y$10$a9HNM7dm70bWZmJ2ofK22ehaDzKqtHzK.9tobzRdHxVLKKVgZ2Zyq', 'alumni', 'default.png', NULL, NULL, NULL),
(236, 'emil19@yahoo.co.id', 'Niyaga Saptono', '11706235', '2020-05-09 01:23:29', '$2y$10$pgUIz0BmI6eO7Xk.Cy7OseaqpuDIiEtLFu0NWnUKffXWDO8iE688q', 'alumni', 'default.png', NULL, NULL, NULL),
(237, 'faizah.marbun@mangunsong.mil.id', 'Eli Utami', '11706236', '2020-05-09 01:23:29', '$2y$10$l/S3/O2S57kjuT19eFdtGOutuBcomqtxHj2zXEnPHj6QKm4IDDE6m', 'alumni', 'default.png', NULL, NULL, NULL),
(238, 'mayasari.aurora@kusumo.net', 'Dadi Rajata M.Farm', '11706237', '2020-05-09 01:23:29', '$2y$10$p2CZzo1uijHH8yEEiTCay.yo9M4tOYjGiAXcPEmgpnugxDEn4xP5S', 'alumni', 'default.png', NULL, NULL, NULL),
(239, 'cahya.purnawati@yahoo.com', 'Lidya Wulandari S.I.Kom', '11706238', '2020-05-09 01:23:29', '$2y$10$mF0Mnp/d3.f1nYqqUTh.we7Rqp.nXOc1yGiCoRH8HnxcnSD9RAvNW', 'alumni', 'default.png', NULL, NULL, NULL),
(240, 'purnawati.darmanto@gmail.co.id', 'Farah Rahayu Maryati M.TI.', '11706239', '2020-05-09 01:23:29', '$2y$10$U9.QDFTFSEk2i3Og/Dijg.BymD17mXa1dUOPKuOhDnZxCbtRqcg4m', 'alumni', 'default.png', NULL, NULL, NULL),
(241, 'prima.andriani@padmasari.ac.id', 'Zelaya Novitasari', '11706240', '2020-05-09 01:23:29', '$2y$10$5VVIiluVsX66MSje6YaX8OuFs7GazRwquFBUcN4scKecnVERwnoJG', 'alumni', 'default.png', NULL, NULL, NULL),
(242, 'vmanullang@yahoo.com', 'Rangga Sihotang', '11706241', '2020-05-09 01:23:29', '$2y$10$EYwoVe3CHShdKAChT400h.nIhXG4B9xYnTd7qBug0RGNW6v2wSga2', 'alumni', 'default.png', NULL, NULL, NULL),
(243, 'mahdi.marpaung@wastuti.desa.id', 'Julia Padmasari', '11706242', '2020-05-09 01:23:29', '$2y$10$d5QznE6cTANywuJb3tz1/.uIvoo5JqSseOwh8P89l/qxpTGpipg4G', 'alumni', 'default.png', NULL, NULL, NULL),
(244, 'joko21@sinaga.biz', 'Kamila Janet Mandasari S.Psi', '11706243', '2020-05-09 01:23:30', '$2y$10$oHLfM4dohdiQ6WwRAfHhZ.Z35YzH8RU0rOvKq/wpCMN/7BBx.1F9W', 'alumni', 'default.png', NULL, NULL, NULL),
(245, 'suci.maheswara@salahudin.co', 'Ganjaran Prasetyo', '11706244', '2020-05-09 01:23:30', '$2y$10$o0jybUTYXXHumbLKazA2BOsl1gRLQ00iegbN33q9mQ.AisUH08caK', 'alumni', 'default.png', NULL, NULL, NULL),
(246, 'ghani65@gmail.com', 'Gina Mandasari', '11706245', '2020-05-09 01:23:30', '$2y$10$hq6eFDE3hGpyVWFb.QCCEe8QBdzHkxYqTfVz5GP3eBR8DECx4IWh2', 'alumni', 'default.png', NULL, NULL, NULL),
(247, 'rlestari@usada.sch.id', 'Lega Budi Napitupulu S.H.', '11706246', '2020-05-09 01:23:30', '$2y$10$nUftXuDFv5zBy0b8Wb.qremPZjYnEO6bS2iu3NTb3V0Ek0m8ER4Eu', 'alumni', 'default.png', NULL, NULL, NULL),
(248, 'kala86@haryanto.asia', 'Lalita Laksita', '11706247', '2020-05-09 01:23:30', '$2y$10$fPKR7Fs4pd3GqRToUO8RQeGPuLwFvjEJEdirQGunk.PHQVWLB/evu', 'alumni', 'default.png', NULL, NULL, NULL),
(249, 'marpaung.yani@gmail.com', 'Umay Hidayanto M.Pd', '11706248', '2020-05-09 01:23:30', '$2y$10$c11Whb572PH/MuA1q96RQ.APlGKMS9SqX/8gaU4FAHW9NRbfUoj76', 'alumni', 'default.png', NULL, NULL, NULL),
(250, 'eli00@prayoga.co.id', 'Ika Novitasari', '11706249', '2020-05-09 01:23:30', '$2y$10$IdAcKKC4fUNmvlIH/1Z0auGCN2ctDA6m1ksz4ODFYKf5MZ7TJ3iNm', 'alumni', 'default.png', NULL, NULL, NULL),
(251, 'endra.siregar@yahoo.com', 'Ira Anggraini M.Pd', '11706250', '2020-05-09 01:23:30', '$2y$10$G24rdOQKwNl8MducLPJ8PO8OYWfuABbPOyz.xky/dkuRK6yDNoTBS', 'alumni', 'default.png', NULL, NULL, NULL),
(252, 'lili.mulyani@yahoo.co.id', 'Sakura Calista Pudjiastuti M.Farm', '11706251', '2020-05-09 01:23:30', '$2y$10$3nNMyEKVJFnbSjvuRS3nCeT5AAgoXfBKy9LrsRZWZKw5Hw6uJu3N.', 'alumni', 'default.png', NULL, NULL, NULL),
(253, 'mandasari.cinthia@gmail.com', 'Raina Nasyidah', '11706252', '2020-05-09 01:23:30', '$2y$10$oi3JiWUFMdRTbSZknMvHmeU2wirxBkSL0f1N.ODn7BuYn1ctr4Z5y', 'alumni', 'default.png', NULL, NULL, NULL),
(254, 'hairyanto75@yahoo.com', 'Janet Aryani', '11706253', '2020-05-09 01:23:31', '$2y$10$DAMCKxt8aoNZ24se54dqxOE1pO1paguV0yOiMsW2E86W/mvW.aRFe', 'alumni', 'default.png', NULL, NULL, NULL);
INSERT INTO `users` (`id`, `email`, `name`, `username`, `email_verified_at`, `password`, `role`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(255, 'rusman98@mustofa.asia', 'Nova Febi Hasanah S.Pt', '11706254', '2020-05-09 01:23:31', '$2y$10$GMZMols/6dnWeWZIlxF5r.64HwMjhZarHFqKz/MhkI4S4G68HEEm2', 'alumni', 'default.png', NULL, NULL, NULL),
(256, 'trahmawati@gmail.com', 'Pangeran Megantara', '11706255', '2020-05-09 01:23:31', '$2y$10$DzFglD2kJklSXWXernY2/.qz8nWeLs4hpp8rdOPyCgURXiwu2EB72', 'alumni', 'default.png', NULL, NULL, NULL),
(257, 'farhunnisa01@maulana.com', 'Chelsea Ratih Aryani S.Pd', '11706256', '2020-05-09 01:23:31', '$2y$10$xo16ZLr3ATxVFnoKcRV2wO.kA3nGPd0JMKSaLWP.9e1200N6a3qGO', 'alumni', 'default.png', NULL, NULL, NULL),
(258, 'mardhiyah.mulya@nababan.biz', 'Fathonah Uyainah', '11706257', '2020-05-09 01:23:31', '$2y$10$jGFwk4wHidAaWd1AmT3tGeYf6hxVmeikIdWGyM.IjJJBj57dgZAFi', 'alumni', 'default.png', NULL, NULL, NULL),
(259, 'jtarihoran@yahoo.com', 'Hamzah Lurhur Wacana', '11706258', '2020-05-09 01:23:31', '$2y$10$Z2x8qlT7lVE4.crYadCi0uBOz0NbmyLD/qqOg2I3oOd25B5aNvHzy', 'alumni', 'default.png', NULL, NULL, NULL),
(260, 'hasna66@yahoo.co.id', 'Luis Uwais', '11706259', '2020-05-09 01:23:31', '$2y$10$lCZFvixYUSltHzPgKOyq7uLpoT0DhbjlXbNDGJtwpcMQkdS7QdWPW', 'alumni', 'default.png', NULL, NULL, NULL),
(261, 'birawan@gmail.co.id', 'Cakrawala Parman Marpaung S.Pd', '11706260', '2020-05-09 01:23:31', '$2y$10$7OhvY2lHHT.lroyMUShDYONly7MOWUPnf1PjLta1JCSfwBw2jvCUe', 'alumni', 'default.png', NULL, NULL, NULL),
(262, 'karsana25@yahoo.com', 'Ivan Kanda Prabowo S.E.', '11706261', '2020-05-09 01:23:31', '$2y$10$/ghtzkfZfo.m7sG85olfV.UIwaiaHZ9QiX9n4zjVfpPvjqY5KBVAy', 'alumni', 'default.png', NULL, NULL, NULL),
(263, 'xsaefullah@yahoo.co.id', 'Ridwan Sirait', '11706262', '2020-05-09 01:23:32', '$2y$10$65qsN7OZHH6/niwayQ7LxOrxTW/SJhYePOOkqjeJkIlWVkJO3P0Jy', 'alumni', 'default.png', NULL, NULL, NULL),
(264, 'hutapea.edison@winarsih.co.id', 'Puti Mala Widiastuti S.I.Kom', '11706263', '2020-05-09 01:23:32', '$2y$10$rqNYgjIJJWHbz07/wgN5J.Nx9yl1VNZy7.6ISdp5tIRoLEw8OqJP.', 'alumni', 'default.png', NULL, NULL, NULL),
(265, 'vsihombing@yahoo.com', 'Harjasa Chandra Nababan', '11706264', '2020-05-09 01:23:32', '$2y$10$4lUX4oATRYKpQzCml6T4EOWVe8k9H7V4kQtdrVtuZOcQqbd33bLNK', 'alumni', 'default.png', NULL, NULL, NULL),
(266, 'permata.dewi@namaga.org', 'Gilang Permadi', '11706265', '2020-05-09 01:23:32', '$2y$10$nndXB48J0FfwivYzMpFDoulv6CmmE27FS2xGyYD00RKd6muSFnfs2', 'alumni', 'default.png', NULL, NULL, NULL),
(267, 'pertiwi.juli@gmail.com', 'Aditya Kurniawan S.T.', '11706266', '2020-05-09 01:23:32', '$2y$10$w1Tre8ho9vLUsx.6xmYOuehsRgRck8pyUmjwM20tf4hDTRAZsK6kO', 'alumni', 'default.png', NULL, NULL, NULL),
(268, 'aryani.ilsa@yahoo.com', 'Cindy Sadina Riyanti', '11706267', '2020-05-09 01:23:32', '$2y$10$KfFqU9REfMMe5bA0XCv8POhjEkCXCxDfBNNEDBvWClcIDPtsGchBe', 'alumni', 'default.png', NULL, NULL, NULL),
(269, 'vicky.farida@yahoo.com', 'Latika Padmasari M.M.', '11706268', '2020-05-09 01:23:32', '$2y$10$m2k/Gi7UbKjsigqLMli6/exAMHrDjwgTf/kO9Pzm/sw/nF/IbQG4e', 'alumni', 'default.png', NULL, NULL, NULL),
(270, 'sari.lestari@yahoo.co.id', 'Kezia Yulia Usada', '11706269', '2020-05-09 01:23:32', '$2y$10$iArx/LdFzbCxPvqoRp1cV.OJrt64nDI44j0zkBMwb01wdWdOsZDNK', 'alumni', 'default.png', NULL, NULL, NULL),
(271, 'jefri23@yahoo.co.id', 'Yance Hariyah', '11706270', '2020-05-09 01:23:32', '$2y$10$F5q5g7X0ZKm6ReqhpvRMVufjVGiyNcZBIgMee.yJo0cpBnX6s61WG', 'alumni', 'default.png', NULL, NULL, NULL),
(272, 'hassanah.unjani@iswahyudi.biz', 'Winda Nabila Puspita S.Kom', '11706271', '2020-05-09 01:23:32', '$2y$10$j0pjYvPJMNOv515MGpzfwu1ysElahcE05TVsfC826XiK34N3AZcL.', 'alumni', 'default.png', NULL, NULL, NULL),
(273, 'yunita.kusumo@gmail.co.id', 'Zulaikha Puspasari S.E.', '11706272', '2020-05-09 01:23:33', '$2y$10$fWXq9FEhHjliiT97B7l5s.lsK9CNUc6La3GsvA4HcnKah3N8dVpUu', 'alumni', 'default.png', NULL, NULL, NULL),
(274, 'cakrajiya87@yahoo.co.id', 'Nadine Lestari', '11706273', '2020-05-09 01:23:33', '$2y$10$sPhuqF.2Ka3nsyZh3j9f.OozJjYlaFiBwNqQm3uaCHBXbp6fPm/g2', 'alumni', 'default.png', NULL, NULL, NULL),
(275, 'baktianto68@wulandari.mil.id', 'Kadir Pangestu S.E.I', '11706274', '2020-05-09 01:23:33', '$2y$10$qZ/o/4ijpsnrguH18lHpVeff8Ry8Ma2jVCBtpLDBe9g4vd0/6tsPW', 'alumni', 'default.png', NULL, NULL, NULL),
(276, 'pmulyani@hastuti.web.id', 'Darmanto Nainggolan', '11706275', '2020-05-09 01:23:33', '$2y$10$NUh33H5iJZXypqA7OkpvFu1I5h0ofaHjkjZ/gwc/jgBNoPnMzfPVq', 'alumni', 'default.png', NULL, NULL, NULL),
(277, 'pratama.balapati@sudiati.desa.id', 'Puspa Usamah', '11706276', '2020-05-09 01:23:33', '$2y$10$JnDrVMFPEPJXa0f65fLVBeu6m3kLm.PEN/Y4CcmqcJFgDtrei.7yS', 'alumni', 'default.png', NULL, NULL, NULL),
(278, 'izulkarnain@rahmawati.desa.id', 'Zahra Zalindra Pratiwi S.Pd', '11706277', '2020-05-09 01:23:33', '$2y$10$QQjA13aqsljBB/fgTgY6uO0nkJ7E8dd.zfJcrvClz3JdQ/NoZblXS', 'alumni', 'default.png', NULL, NULL, NULL),
(279, 'rahayu.tari@yahoo.co.id', 'Ana Yolanda', '11706278', '2020-05-09 01:23:33', '$2y$10$e9QIY8VD8WFVYEagqvaOOOowhqB9lP.bathqQi09ovbr28ugzLGQO', 'alumni', 'default.png', NULL, NULL, NULL),
(280, 'bagya.firgantoro@yahoo.com', 'Raden Wahyudin', '11706279', '2020-05-09 01:23:33', '$2y$10$FKEnkKwVXnMkWYQCA2KLjeXPHZ4iZ1CrnY2DRk8c9/7l4syR.8tAq', 'alumni', 'default.png', NULL, NULL, NULL),
(281, 'ina38@salahudin.desa.id', 'Dalimin Mahendra', '11706280', '2020-05-09 01:23:33', '$2y$10$Ej7D/gyztCfvdQCbqWIX..SqWhP6WAKPhl0jNGuG6ZJa3V4FFpef.', 'alumni', 'default.png', NULL, NULL, NULL),
(282, 'gilda28@yahoo.com', 'Carla Novitasari', '11706281', '2020-05-09 01:23:34', '$2y$10$Lka20IiFa/idi2f8ExDzh.ANETXLq.iZ/L5eAPhIuilqYyM1zxfi6', 'alumni', 'default.png', NULL, NULL, NULL),
(283, 'bhandayani@sihombing.net', 'Jagapati Wardi Marpaung S.Ked', '11706282', '2020-05-09 01:23:34', '$2y$10$bD7CW7OfWQEV2D/9noI.eO2frNMTs9YOW833.nXlhaDtS2v5b.xre', 'alumni', 'default.png', NULL, NULL, NULL),
(284, 'najwa23@lazuardi.ac.id', 'Sidiq Endra Waluyo', '11706283', '2020-05-09 01:23:34', '$2y$10$MS4XGocxFgbrTLDnK1Bt8Ob.O7fLy1KIf/q/HXtqllQfxKf7CGnAu', 'alumni', 'default.png', NULL, NULL, NULL),
(285, 'hutami@widodo.my.id', 'Gilda Mayasari', '11706284', '2020-05-09 01:23:34', '$2y$10$HTbHpFyHNmElaf7/yH885.85dsWSQQkiW3QqATemR0tGJPP22UFy2', 'alumni', 'default.png', NULL, NULL, NULL),
(286, 'lalita01@uyainah.tv', 'Umi Wahyuni', '11706285', '2020-05-09 01:23:34', '$2y$10$DzVqMTgHvkfiZ7sGl/wzseMvdTGcDdUt9BiqnrCuZPaDMOPwn4wCS', 'alumni', 'default.png', NULL, NULL, NULL),
(287, 'blatupono@saputra.ac.id', 'Ani Widiastuti', '11706286', '2020-05-09 01:23:34', '$2y$10$9dy9HfuO0WH/4gSrzuqQ8OGKdDvGkU21SErDJQP9TUE2mjTDzlcGy', 'alumni', 'default.png', NULL, NULL, NULL),
(288, 'oharyanti@simbolon.sch.id', 'Aisyah Maryati', '11706287', '2020-05-09 01:23:34', '$2y$10$yPxPZgw3lndtYugTSNr.7ujRAzw4L.T13XLO5n/F2FDOM.qfSARcO', 'alumni', 'default.png', NULL, NULL, NULL),
(289, 'haryanti.hasim@kuswandari.biz.id', 'Eka Haryanti', '11706288', '2020-05-09 01:23:34', '$2y$10$ZfPrXyChXM90bN7Os3owkeH//IpJ8pjbuNslJdjnXqJ73SqaD0e/S', 'alumni', 'default.png', NULL, NULL, NULL),
(290, 'kuswoyo.hafshah@waluyo.go.id', 'Lalita Umi Aryani S.Sos', '11706289', '2020-05-09 01:23:34', '$2y$10$sreHs2btAf/s6aYPBSXdxu/wFwNCyYiLidtANBXrIuHF4GLpYRX8e', 'alumni', 'default.png', NULL, NULL, NULL),
(291, 'rahayu.irawan@gmail.co.id', 'Ajimat Dasa Pranowo S.Kom', '11706290', '2020-05-09 01:23:35', '$2y$10$P.hmsHG0KrB0YGFk75a1HumKyIqlnsc8RJczKgzl6QzKZfive0lLW', 'alumni', 'default.png', NULL, NULL, NULL),
(292, 'luis.yuliarti@wibowo.in', 'Ulya Zizi Wastuti S.IP', '11706291', '2020-05-09 01:23:35', '$2y$10$jpc5llP19Si4zZ1SY2565uNkXt8iJBvLya6Avx6hBjc6.S6.FaB6u', 'alumni', 'default.png', NULL, NULL, NULL),
(293, 'halimah.purwanto@melani.net', 'Aurora Andriani', '11706292', '2020-05-09 01:23:35', '$2y$10$NAfFfGADjTOKz5.d1cmwdO/BNNQUdfqvZIYigwwBoJklHSnIltV8e', 'alumni', 'default.png', NULL, NULL, NULL),
(294, 'banawi93@pradana.com', 'Hani Laksita S.Pd', '11706293', '2020-05-09 01:23:35', '$2y$10$I0XnN/gC3GQqNKgz40B1M.TmL50fclz6LCKyiA54GO1gNjW5ZcMZG', 'alumni', 'default.png', NULL, NULL, NULL),
(295, 'ibrahim.wastuti@yahoo.com', 'Faizah Hassanah', '11706294', '2020-05-09 01:23:35', '$2y$10$05cmGmFmCwJiY4.sarhNWOlNB.Jsm68oBABsH5X495T3/f5fkDlVC', 'alumni', 'default.png', NULL, NULL, NULL),
(296, 'vrahimah@yulianti.my.id', 'Hardi Megantara', '11706295', '2020-05-09 01:23:35', '$2y$10$QriAfmp1h5jEqF587zvJk.4Gml3aLiRO1sWuKQxmcyK4UzRGvgDVe', 'alumni', 'default.png', NULL, NULL, NULL),
(297, 'septi.purnawati@hastuti.mil.id', 'Hasan Maryadi S.Sos', '11706296', '2020-05-09 01:23:35', '$2y$10$Z.cUtBcU61tsQlX39zZ5j.ElTpqqDjzTSzkWdGxxKQZMKli1aF.fG', 'alumni', 'default.png', NULL, NULL, NULL),
(298, 'zwastuti@salahudin.web.id', 'Nardi Rajasa S.Ked', '11706297', '2020-05-09 01:23:35', '$2y$10$vIzRJlqcXFuUBQ8J7ey4y.q41bqYpuLqxMwwo2GeMy17VncCAFcPq', 'alumni', 'default.png', NULL, NULL, NULL),
(299, 'laksita.lanjar@yulianti.my.id', 'Galar Martana Saefullah', '11706298', '2020-05-09 01:23:36', '$2y$10$rn.5ef/3nAEn71YqoLQYfO7Xn0hfsdqCBtcadFAnNxtOPC7cljreK', 'alumni', 'default.png', NULL, NULL, NULL),
(300, 'ajeng.wacana@mandasari.info', 'Cahyo Saragih', '11706299', '2020-05-09 01:23:36', '$2y$10$F7jG8qr2i/ZVDNIiHxA65eJNUt0piOcfRpDskh2QdaHoaiFx6NQMC', 'alumni', 'default.png', NULL, NULL, NULL),
(301, 'zizi.setiawan@sirait.in', 'Cahyanto Marpaung', '11706300', '2020-05-09 01:23:36', '$2y$10$Vq.DuhEZI1Mfe49PWUQZ4e79CX/yom2vHsBl.goes/3o.Nbz7u0Ve', 'alumni', 'default.png', NULL, NULL, NULL),
(302, 'usamah.gadang@yahoo.co.id', 'Ghani Hutapea', '11706301', '2020-05-09 01:23:36', '$2y$10$MUfr13872YheqMQZn7ZjduxF0q.VjSO66ECxnE5M8ix4yS252KJai', 'alumni', 'default.png', NULL, NULL, NULL),
(303, 'uda29@yuniar.info', 'Patricia Hasanah', '11706302', '2020-05-09 01:23:36', '$2y$10$bt5Kyuy.UmrMKSKyH9Ab/OiDbxR4flY5uOfHuaY7MHWrmAx5KOOz2', 'alumni', 'default.png', NULL, NULL, NULL),
(304, 'wirda.tamba@gmail.com', 'Rahmi Novitasari', '11706303', '2020-05-09 01:23:36', '$2y$10$FpTzPjKrzP38m9zuY2dSH./.DQHAp2OWPY0YhyEu0UgvEXFJYi0cS', 'alumni', 'default.png', NULL, NULL, NULL),
(305, 'uprastuti@yahoo.co.id', 'Luis Jagapati Prayoga M.Ak', '11706304', '2020-05-09 01:23:36', '$2y$10$QrXm2zlEEaxRVZucTnQ9Z.g64cK3b1ZAOQroreUXHPM/PTfkZrIBC', 'alumni', 'default.png', NULL, NULL, NULL),
(306, 'ika.pangestu@hartati.biz.id', 'Gangsa Ibrani Haryanto M.Ak', '11706305', '2020-05-09 01:23:36', '$2y$10$reMoJXKPIQloHIjRkgYz4eMDVS/zm5rfMMeIFoQ7ccCgLkoDf3yq.', 'alumni', 'default.png', NULL, NULL, NULL),
(307, 'harjaya.maheswara@gmail.co.id', 'Septi Lestari', '11706306', '2020-05-09 01:23:37', '$2y$10$xFE9EMJGB0qFRfZjuCtpX.tEI2alhmlblOH.2ArmFXwDv.AR3XHwq', 'alumni', 'default.png', NULL, NULL, NULL),
(308, 'darmana.mayasari@gmail.com', 'Gantar Olga Winarno', '11706307', '2020-05-09 01:23:37', '$2y$10$DGuZwP/3six2dGQwbZnzY.lld9RhT/Sy1SU9H8D9m.iaJj/OwV8r.', 'alumni', 'default.png', NULL, NULL, NULL),
(309, 'bprakasa@lailasari.id', 'Wirda Uli Purwanti S.Farm', '11706308', '2020-05-09 01:23:37', '$2y$10$0fUDeOzSxV87BBRA9Wb94ujp/AZGgJGU/.HmJbZmmYuHA7EycjWjC', 'alumni', 'default.png', NULL, NULL, NULL),
(310, 'caryani@mustofa.web.id', 'Pangestu Saka Prabowo', '11706309', '2020-05-09 01:23:37', '$2y$10$m3KiTB9ZFaW6yTjXWig2k.y/7ly7.eJhKhr.A0wWTuMNxA3WSjWmS', 'alumni', 'default.png', NULL, NULL, NULL),
(311, 'mprastuti@santoso.or.id', 'Tari Ayu Laksmiwati M.Ak', '11706310', '2020-05-09 01:23:37', '$2y$10$H8V6CYE95GyT9mLxlMz5suR4z3afxZYtyw0CjJa5xGrgUg5l1wUuq', 'alumni', 'default.png', NULL, NULL, NULL),
(312, 'gina.purnawati@yahoo.co.id', 'Jumadi Margana Manullang', '11706311', '2020-05-09 01:23:37', '$2y$10$Fi0FH7eUqv1aOsWVfRkU7OXShbxhyAxWHvqlP9Van1wouz3uCkx4e', 'alumni', 'default.png', NULL, NULL, NULL),
(313, 'sadina.yuliarti@gmail.com', 'Syahrini Karen Uyainah', '11706312', '2020-05-09 01:23:37', '$2y$10$/mepojrnQ8C5DQBvOFiDCePR6YpBPxNG5XMt5DZ1WFdzHWO05EUyC', 'alumni', 'default.png', NULL, NULL, NULL),
(314, 'gaiman85@gmail.co.id', 'Gambira Anggriawan', '11706313', '2020-05-09 01:23:38', '$2y$10$SIMk2qC.w2DiamuJISiyDOCLf4DJ/JRRSpTmHswYz5P4Fn0X5XI4S', 'alumni', 'default.png', NULL, NULL, NULL),
(315, 'belinda.gunarto@iswahyudi.com', 'Dewi Melani', '11706314', '2020-05-09 01:23:38', '$2y$10$/.qawpQbh5mc0fDpulX.1eCDtD6OHPe1Q4LgJQ9cSI.c/OJiqJOOy', 'alumni', 'default.png', NULL, NULL, NULL),
(316, 'padmasari.candra@nuraini.info', 'Martaka Purwanto Sitompul M.TI.', '11706315', '2020-05-09 01:23:38', '$2y$10$vvrQVUpAPGXvVE/7V6oXO.oC9/elEMW6cbMqcECQHmNJjcmRGGp7K', 'alumni', 'default.png', NULL, NULL, NULL),
(317, 'gsinaga@gmail.co.id', 'Rahmat Halim', '11706316', '2020-05-09 01:23:38', '$2y$10$Lpf/KOGHb3di3w5Pzxj7Wuf4bqS3ZLV8vr9hJ69/W0NoJDu9QeRKe', 'alumni', 'default.png', NULL, NULL, NULL),
(318, 'zelaya.wasita@usada.go.id', 'Paris Yulianti', '11706317', '2020-05-09 01:23:38', '$2y$10$QwMv4FVlZw9rDMdJVxUlBOnhg2Iuv3m14vdLeBpBEg3Tit.FgO5X6', 'alumni', 'default.png', NULL, NULL, NULL),
(319, 'ausada@yahoo.co.id', 'Yunita Mayasari S.Sos', '11706318', '2020-05-09 01:23:38', '$2y$10$XPNeFWmPHPsNS/zITYZuHeTI6Ng7BXKxR9TsCrjFGRr23XF4yEJJG', 'alumni', 'default.png', NULL, NULL, NULL),
(320, 'eoktaviani@yahoo.co.id', 'Gaduh Jatmiko Marpaung S.Gz', '11706319', '2020-05-09 01:23:38', '$2y$10$CJxlHacAXnv2Fe/pf4UlgOBGQDAHTx.e5ojKgIy20iMf1lvXavK7W', 'alumni', 'default.png', NULL, NULL, NULL),
(321, 'wahyuni.capa@yahoo.com', 'Kemal Adriansyah', '11706320', '2020-05-09 01:23:38', '$2y$10$UDKFqUG6ulAKHkX9jKr4Zuvb96qnOfYN1.UcNNGpxxWeTqJAnh.EG', 'alumni', 'default.png', NULL, NULL, NULL),
(322, 'gkuswandari@lailasari.co.id', 'Diana Ilsa Suryatmi S.IP', '11706321', '2020-05-09 01:23:38', '$2y$10$JxQUfOipZdFSLYY2oiERtumYgl70C1tmBWVZ5swUzaMPkX185YWgC', 'alumni', 'default.png', NULL, NULL, NULL),
(323, 'okuswoyo@usada.desa.id', 'Raihan Megantara S.I.Kom', '11706322', '2020-05-09 01:23:39', '$2y$10$SRjnniSULXNEOJRD..HTteELwGA6ce3fcFNHXUb26Yka/zD5bcmXC', 'alumni', 'default.png', NULL, NULL, NULL),
(324, 'lazuardi.mulya@hutapea.com', 'Ajiman Nainggolan', '11706323', '2020-05-09 01:23:39', '$2y$10$erBHQzIsOx.qJspCKIVA2Omk590Af6oSOhiReMSzzgWbw3GzARMgy', 'alumni', 'default.png', NULL, NULL, NULL),
(325, 'muni19@sihombing.tv', 'Ulya Riyanti', '11706324', '2020-05-09 01:23:39', '$2y$10$W.g.SIWj/nz.bVtwMSGP9e29kOpe5lYixXjnk8H5bIxasX789La2.', 'alumni', 'default.png', NULL, NULL, NULL),
(326, 'paiman58@oktaviani.tv', 'Prabowo Paiman Anggriawan S.E.I', '11706325', '2020-05-09 01:23:39', '$2y$10$i80jOPj11WfWB6bus2N8MOX1QBW81sZKghl8A.u1ncvak0ZEQYPfa', 'alumni', 'default.png', NULL, NULL, NULL),
(327, 'iharyanti@hidayanto.in', 'Saiful Baktiadi Wacana', '11706326', '2020-05-09 01:23:39', '$2y$10$MdEg/ZWrmoasOyaNLwDEKuP3g6.hwjixmX2fDwQiQkv.avz76LzFq', 'alumni', 'default.png', NULL, NULL, NULL),
(328, 'zulfa32@wasita.sch.id', 'Prakosa Lega Hutapea S.Pt', '11706327', '2020-05-09 01:23:39', '$2y$10$Dqg3PRwf6MpClDDrAX1lU.0FdX1dDUWovAjm7nr9hBjoNGluHliCG', 'alumni', 'default.png', NULL, NULL, NULL),
(329, 'iriana02@yolanda.co', 'Tira Laksita', '11706328', '2020-05-09 01:23:39', '$2y$10$UsNgc/qdxsm9qppOgvU1cesUfKvcqEOUtPGz5yY1EGlY8g8xcBYfS', 'alumni', 'default.png', NULL, NULL, NULL),
(330, 'siska25@yahoo.com', 'Lala Uchita Pratiwi', '11706329', '2020-05-09 01:23:39', '$2y$10$GLcy2zqWaDbeRxvgZkhsweL0rQhRwDZozWqk81LH6tJ.szDvyWJCG', 'alumni', 'default.png', NULL, NULL, NULL),
(331, 'jabal15@yahoo.co.id', 'Marwata Luhung Ramadan S.Pd', '11706330', '2020-05-09 01:23:40', '$2y$10$7gh2acG02n.s8mbkBLs7HOIxZ3uZFVPnJ7u4I8vnU.xXvFjmj1BNS', 'alumni', 'default.png', NULL, NULL, NULL),
(332, 'apratama@marpaung.mil.id', 'Sari Rahmawati', '11706331', '2020-05-09 01:23:40', '$2y$10$cBuEC8olQ9GMjTN/UTbQB.MWJJJ9U7SNvLPHhUFI2LAGKM.mld0Se', 'alumni', 'default.png', NULL, NULL, NULL),
(333, 'puji.lestari@yuliarti.net', 'Cakrawala Dariati Gunarto S.Psi', '11706332', '2020-05-09 01:23:40', '$2y$10$ce5JoGxCqda8O2ysiVqYbevfC/FHflBz47dxJqw2HjAyUVv3BW9/O', 'alumni', 'default.png', NULL, NULL, NULL),
(334, 'cindy35@gmail.co.id', 'Warta Zulkarnain', '11706333', '2020-05-09 01:23:40', '$2y$10$C6Odkm48G1lvc/..Y5aZsejhY7ihRimQ.wcHQdx/5jnxaUufvzite', 'alumni', 'default.png', NULL, NULL, NULL),
(335, 'ymardhiyah@yahoo.co.id', 'Imam Budiyanto S.Gz', '11706334', '2020-05-09 01:23:40', '$2y$10$MI6dQAAOQLrnapgNSlaOtOw4KIkfsvOC2Bh/8ggFhZS0NNRt08IOG', 'alumni', 'default.png', NULL, NULL, NULL),
(336, 'iswahyudi.shakila@wibisono.name', 'Eka Farida', '11706335', '2020-05-09 01:23:40', '$2y$10$o6wRls9OrKyNctNAbkoHvO7.3A/TeG/aFRqLUs0yGDcSGE3zk2o5S', 'alumni', 'default.png', NULL, NULL, NULL),
(337, 'rosman.prastuti@sihombing.info', 'Mahfud Aswani Ramadan', '11706336', '2020-05-09 01:23:40', '$2y$10$C9MUOvorh7ZT3dc8jx74e.WJ2oAz9aBUipGIX/iuhko0vXdHL06IK', 'alumni', 'default.png', NULL, NULL, NULL),
(338, 'hariyah.azalea@suryono.biz.id', 'Carla Palastri', '11706337', '2020-05-09 01:23:40', '$2y$10$qtuVKjMpMlsq1o1z97s0a.EhXsTMdNl9mka0HpRLPKQ9Jb7TYOYXe', 'alumni', 'default.png', NULL, NULL, NULL),
(339, 'qoktaviani@prasasta.my.id', 'Jati Kurniawan', '11706338', '2020-05-09 01:23:41', '$2y$10$w8Rv9jpa61VnWA3RGKXsGOSIHbIqiKwQpOnXXhprpbJajPDDzaVFu', 'alumni', 'default.png', NULL, NULL, NULL),
(340, 'nurdiyanti.lasmanto@anggriawan.web.id', 'Natalia Kuswandari S.Pt', '11706339', '2020-05-09 01:23:41', '$2y$10$3/NlBQSevJ/y3ZAo0HQqT.o5IXML54F87QnZkIksPmVwLoV0.F.1y', 'alumni', 'default.png', NULL, NULL, NULL),
(341, 'tiswahyudi@hasanah.biz.id', 'Purwanto Siregar', '11706340', '2020-05-09 01:23:41', '$2y$10$30vxmabbJGLiyuCeh5Gq3OGNSVlugasgiLByhFCY0lG2oLFypeNnW', 'alumni', 'default.png', NULL, NULL, NULL),
(342, 'zahra.rajasa@wijayanti.info', 'Shania Yolanda', '11706341', '2020-05-09 01:23:41', '$2y$10$RZqaNU4EkbowqRkjclPBMOXuzJKV/WKO/qVokNnhTq88pq.yZC64K', 'alumni', 'default.png', NULL, NULL, NULL),
(343, 'gandewa.pranowo@gmail.com', 'Eli Pertiwi', '11706342', '2020-05-09 01:23:41', '$2y$10$y3WcD0YuLyl5lJv8ATPs3uyNgf1c/gC3H3XtlMOX.E6qLhTemJCTC', 'alumni', 'default.png', NULL, NULL, NULL),
(344, 'zulkarnain.cici@saptono.info', 'Pranawa Setiawan S.Kom', '11706343', '2020-05-09 01:23:41', '$2y$10$zt8q1EVUKxG6zBFt2NWlWu519YmpZMTjcOUVddOVN8XOsOLkTR3r.', 'alumni', 'default.png', NULL, NULL, NULL),
(345, 'zprasetya@budiyanto.ac.id', 'Cahyo Megantara', '11706344', '2020-05-09 01:23:41', '$2y$10$5Z0Ju7SKMlhNp2/qIFR7De6IZ2ZLn3jDfnPME10gT5tKmTR3Zq5Na', 'alumni', 'default.png', NULL, NULL, NULL),
(346, 'maras65@yahoo.co.id', 'Prakosa Marpaung', '11706345', '2020-05-09 01:23:41', '$2y$10$dNNKDjgmJl6pLQtvRiY5eeLN9w8OOHPmi5kFygpVjckdm/wosTDPe', 'alumni', 'default.png', NULL, NULL, NULL),
(347, 'phasanah@gmail.co.id', 'Kezia Wastuti M.Pd', '11706346', '2020-05-09 01:23:41', '$2y$10$CYVH4Y90KYkLXrgOlOtd1ebxcvmmTrNuQYRyVzB7w4yhCuYv8E5bS', 'alumni', 'default.png', NULL, NULL, NULL),
(348, 'purwa68@yahoo.co.id', 'Vivi Hariyah M.Farm', '11706347', '2020-05-09 01:23:42', '$2y$10$2zkCcOBqdTYUZ79y13.3k.sraDuGE0OA.9DJiCb6btmJgJKCsLVZS', 'alumni', 'default.png', NULL, NULL, NULL),
(349, 'onasyidah@sihombing.sch.id', 'Laswi Siregar M.M.', '11706348', '2020-05-09 01:23:42', '$2y$10$lkSBq95UohDCiEDfcK8Dsu136sbNzTn7aX2bYxgS3GrPeRIVXE0EK', 'alumni', 'default.png', NULL, NULL, NULL),
(350, 'cengkir45@yahoo.com', 'Ifa Lestari', '11706349', '2020-05-09 01:23:42', '$2y$10$THScVAjS5FEdVffv1dab8ulO0efhPAHiqp994ehtQgtRW9jW2RAmK', 'alumni', 'default.png', NULL, NULL, NULL),
(351, 'mnurdiyanti@yahoo.com', 'Ulva Ana Prastuti S.Pd', '11706350', '2020-05-09 01:23:42', '$2y$10$om9/ywvo5TuFHGmmS3xm3O0oLfTWiMg8Q2LV1SMkKcMG3DP4cI1Ty', 'alumni', 'default.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure for view `datasiswa`
--
DROP TABLE IF EXISTS `datasiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datasiswa`  AS  select `siswas`.`id` AS `id`,`siswas`.`user_id` AS `user_id`,`siswas`.`nisn` AS `nisn`,`siswas`.`nis` AS `nis`,`users`.`name` AS `name`,`siswas`.`jk` AS `jk`,`siswas`.`jurusan_id` AS `jurusan_id`,`jurusans`.`jurusan` AS `jurusan`,`siswas`.`rayon_id` AS `rayon_id`,`rayons`.`rayon` AS `rayon`,`siswas`.`masuk` AS `masuk`,`siswas`.`lulus` AS `lulus`,`siswas`.`alamat` AS `alamat`,`siswas`.`telp` AS `telp`,`users`.`email` AS `email`,`siswas`.`status_id` AS `status_id`,`statuses`.`status` AS `status`,`siswas`.`deleted_at` AS `deleted_at` from ((((`siswas` join `jurusans` on(`jurusans`.`id` = `siswas`.`jurusan_id`)) join `users` on(`users`.`id` = `siswas`.`user_id`)) join `rayons` on(`rayons`.`id` = `siswas`.`rayon_id`)) join `statuses` on(`statuses`.`id` = `siswas`.`status_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `datastatus`
--
DROP TABLE IF EXISTS `datastatus`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datastatus`  AS  select `status_details`.`id` AS `id`,`siswas`.`user_id` AS `user_id`,`status_details`.`nis` AS `nis`,`jurusans`.`jurusan` AS `jurusan`,`siswas`.`masuk` AS `masuk`,`siswas`.`lulus` AS `lulus`,`siswas`.`jk` AS `jk`,`status_details`.`jabatan` AS `jabatan`,`instansis`.`nama` AS `nama`,`instansis`.`alamat` AS `alamat`,`instansis`.`kota` AS `kota`,`status_details`.`durasi_kontrak` AS `durasi_kontrak`,`status_details`.`pendapatan` AS `pendapatan`,`statuses`.`status` AS `status`,`status_details`.`created_at` AS `created_at`,`status_details`.`updated_at` AS `updated_at` from ((((`status_details` join `siswas` on(`siswas`.`nis` = `status_details`.`nis`)) left join `instansis` on(`instansis`.`id` = `status_details`.`id_instansi`)) join `statuses` on(`statuses`.`id` = `status_details`.`status_id`)) join `jurusans` on(`jurusans`.`id` = `siswas`.`jurusan_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `detailpesan`
--
DROP TABLE IF EXISTS `detailpesan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detailpesan`  AS  select `users`.`id` AS `id`,`siswas`.`nis` AS `nis`,`users`.`foto` AS `foto`,`siswas`.`jurusan_id` AS `jurusan_id`,`jurusans`.`jurusan` AS `jurusan`,`users`.`name` AS `name`,`pesans`.`pesan` AS `pesan`,`pesans`.`status` AS `status`,`pesans`.`updated_at` AS `updated_at` from (((`users` join `siswas` on(`siswas`.`user_id` = `users`.`id`)) join `pesans` on(`pesans`.`user_id` = `users`.`id`)) join `jurusans` on(`siswas`.`jurusan_id` = `jurusans`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `resume`
--
DROP TABLE IF EXISTS `resume`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `resume`  AS  select `status_details`.`id` AS `id`,`siswas`.`user_id` AS `user_id`,`users`.`name` AS `nama_siswa`,`status_details`.`nis` AS `nis`,`jurusans`.`jurusan` AS `jurusan`,`rayons`.`rayon` AS `rayon`,`siswas`.`alamat` AS `alamat_siswa`,`siswas`.`telp` AS `telp`,`users`.`email` AS `email`,`siswas`.`masuk` AS `masuk`,`siswas`.`lulus` AS `lulus`,`siswas`.`jk` AS `jk`,`status_details`.`jabatan` AS `jabatan`,`instansis`.`nama` AS `nama`,`instansis`.`alamat` AS `alamat`,`instansis`.`kota` AS `kota`,`status_details`.`durasi_kontrak` AS `durasi_kontrak`,`status_details`.`pendapatan` AS `pendapatan`,`statuses`.`status` AS `status`,`status_details`.`created_at` AS `created_at`,`status_details`.`updated_at` AS `updated_at`,`users`.`foto` AS `foto` from ((((((`status_details` join `siswas` on(`siswas`.`nis` = `status_details`.`nis`)) left join `instansis` on(`instansis`.`id` = `status_details`.`id_instansi`)) join `statuses` on(`statuses`.`id` = `status_details`.`status_id`)) join `jurusans` on(`jurusans`.`id` = `siswas`.`jurusan_id`)) join `users` on(`siswas`.`user_id` = `users`.`id`)) join `rayons` on(`siswas`.`rayon_id` = `rayons`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_lowongans`
--
ALTER TABLE `info_lowongans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_sekolahs`
--
ALTER TABLE `info_sekolahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instansis`
--
ALTER TABLE `instansis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jurusans_short_unique` (`short`),
  ADD UNIQUE KEY `jurusans_jurusan_unique` (`jurusan`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pic_configs`
--
ALTER TABLE `pic_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolios`
--
ALTER TABLE `portofolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presets`
--
ALTER TABLE `presets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rayons`
--
ALTER TABLE `rayons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rayons_rayon_unique` (`rayon`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswas_user_id_unique` (`user_id`),
  ADD UNIQUE KEY `siswas_nis_unique` (`nis`),
  ADD UNIQUE KEY `siswas_nisn_unique` (`nisn`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statuses_status_unique` (`status`);

--
-- Indexes for table `status_details`
--
ALTER TABLE `status_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_lowongans`
--
ALTER TABLE `info_lowongans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_sekolahs`
--
ALTER TABLE `info_sekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instansis`
--
ALTER TABLE `instansis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pic_configs`
--
ALTER TABLE `pic_configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portofolios`
--
ALTER TABLE `portofolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `presets`
--
ALTER TABLE `presets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rayons`
--
ALTER TABLE `rayons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status_details`
--
ALTER TABLE `status_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=352;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
