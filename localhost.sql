-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 28, 2021 at 04:51 PM
-- Server version: 10.3.30-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taufanhm_semarang`
--
CREATE DATABASE IF NOT EXISTS `taufanhm_semarang` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `taufanhm_semarang`;

-- --------------------------------------------------------

--
-- Table structure for table `dataindikator`
--

CREATE TABLE `dataindikator` (
  `data_id` int(11) NOT NULL,
  `tipe` varchar(60) NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  `link_file` varchar(200) NOT NULL,
  `periode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataindikator`
--

INSERT INTO `dataindikator` (`data_id`, `tipe`, `nama_file`, `link_file`, `periode`) VALUES
(1, 'bulanan', 'Indikator Bulan Periode Januari 2021', 'indikator_apel_cantik.xlsx', 'Januari 2021'),
(2, 'tahunan', 'Indikator Tahunan Periode 2021', 'indikator_apel_cantik.xlsx', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `image_konten_detail`
--

CREATE TABLE `image_konten_detail` (
  `id_detail` int(11) NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `slider_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image_slider`
--

CREATE TABLE `image_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_url` varchar(200) DEFAULT NULL,
  `slider_file_name` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `tipe` varchar(50) NOT NULL,
  `jenis` enum('video','image','pdf') DEFAULT NULL,
  `judul` varchar(250) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_slider`
--

INSERT INTO `image_slider` (`slider_id`, `slider_url`, `slider_file_name`, `created_at`, `created_by`, `start_date`, `end_date`, `tipe`, `jenis`, `judul`, `deskripsi`, `active_status`) VALUES
(4, 'https://taufanh.my.id/upload/imageslider/1622358516-1618641278-image_3.png', '1622358516-1618641278-image_3.png', '2021-04-18 12:42:46', 1, '2021-04-18 00:00:00', '2021-07-30 23:59:59', 'slider', 'video', NULL, NULL, 1),
(5, 'https://taufanh.my.id/upload/imageslider/1622357933-image1.png', '1622357933-image1.png', '2021-04-18 12:43:10', 1, '2021-04-19 00:00:00', '2021-07-30 23:59:59', 'slider', 'video', NULL, NULL, 1),
(6, 'https://taufanh.my.id/upload/images/1625493352-big_buck_bunny_720p_1mb.mp4', '1625493352-big_buck_bunny_720p_1mb.mp4', '2021-07-05 20:55:52', 1, '1970-01-01 00:00:00', '1970-01-01 23:59:59', 'konten', 'video', 'test video edit', 'ini deksirpsi test video yahh editt', 1),
(7, 'https://taufanh.my.id/upload/imageslider/1625619220-11._Muyan_Kec._Tembalang.jpg', '1625619220-11._Muyan_Kec._Tembalang.jpg', '2021-07-05 21:41:09', 1, NULL, NULL, 'konten', 'image', 'test judul konten', 'test deskripsi konten', 1),
(8, 'https://taufanh.my.id/upload/imageslider/1625619384-surat_kepala_bkkbnpdf.pdf', '1625619384-surat_kepala_bkkbnpdf.pdf', '2021-07-06 07:03:51', 1, NULL, NULL, 'konten', 'pdf', 'Surat Kepala BKKBN Perihal Pengintegrasian Materi KKBPK Pada Diklat Fungsional Instansi Pemda', NULL, 1),
(9, 'https://taufanh.my.id/upload/imageslider/1625619436-surat_bkkbn_dikti.pdf', '1625619436-surat_bkkbn_dikti.pdf', '2021-07-07 07:57:16', 1, NULL, NULL, 'konten', 'pdf', 'Surat Tindak Lanjut MoU BKKBN dan Kemenristekdikti', NULL, 1),
(10, 'https://taufanh.my.id/upload/imageslider/1625815682-2_Best_Practice_SSK_SMAN_6_Semarang.pdf', '1625815682-2_Best_Practice_SSK_SMAN_6_Semarang.pdf', '2021-07-09 14:28:14', 5, NULL, NULL, 'konten', 'pdf', 'Best Practice SSK SMAN 6 Semarang', NULL, 1),
(11, 'https://taufanh.my.id/upload/imageslider/1625815758-Kebijakan_dan_Strategi_Pendidikan_Kependudukan_Direktur_Penduk_BKKBN.pdf', '1625815758-Kebijakan_dan_Strategi_Pendidikan_Kependudukan_Direktur_Penduk_BKKBN.pdf', '2021-07-09 14:29:21', 5, NULL, NULL, 'konten', 'pdf', 'Kebijakan dan Strategi Pendidikan Kependudukan - Direktur Penduk BKKBN', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `indikatorbulanan`
--

CREATE TABLE `indikatorbulanan` (
  `indikator_id` int(11) NOT NULL,
  `nama_indikator` varchar(250) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nilai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indikatorbulanan`
--

INSERT INTO `indikatorbulanan` (`indikator_id`, `nama_indikator`, `bulan`, `tahun`, `nilai`) VALUES
(1, 'Cakupan PUS unmet need', 'Januari', 2021, '120'),
(2, 'TFR', 'Januari', 2021, '120'),
(3, 'Cakupan tingkat putus pakai alat kontrasepsi (DO)', 'Januari', 2021, '120'),
(4, 'Cakupan peserta KB aktif', 'Januari', 2021, '120'),
(5, 'Cakupan PUS umur istri <20 th', 'Januari', 2021, '120'),
(6, 'Cakupan anggota bina keluarga aktif', 'Januari', 2021, '120'),
(7, 'Rasio akseptor KB per 100 PUS', 'Januari', 2021, '120'),
(8, 'Cakupan PUS unmet need', 'Juni', 2021, '120'),
(9, 'TFR', 'Juni', 2021, '120'),
(10, 'Cakupan tingkat putus pakai alat kontrasepsi (DO)', 'Juni', 2021, '120'),
(11, 'Cakupan peserta KB aktif', 'Juni', 2021, '120'),
(12, 'Cakupan PUS umur istri <20 th', 'Juni', 2021, '120'),
(13, 'Cakupan anggota bina keluarga aktif', 'Juni', 2021, '120'),
(14, 'Rasio akseptor KB per 100 PUS', 'Juni', 2021, '120');

-- --------------------------------------------------------

--
-- Table structure for table `info_jadwalpelayananterpusat`
--

CREATE TABLE `info_jadwalpelayananterpusat` (
  `jadwal_id` int(11) NOT NULL,
  `lokasipelayanan_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `tempat_pelayanan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_jadwalpelayananterpusat`
--

INSERT INTO `info_jadwalpelayananterpusat` (`jadwal_id`, `lokasipelayanan_id`, `tanggal`, `keterangan`, `jam_mulai`, `jam_selesai`, `created_at`, `created_by`, `kecamatan_id`, `tempat_pelayanan`) VALUES
(2, 0, '2021-05-30', 'Mobil Unit Pelayanan', '08:00:00', '13:00:00', '2021-05-30 08:19:46', 1, 9, 'PT. ICCS Semarang');

-- --------------------------------------------------------

--
-- Table structure for table `info_jadwalpelayanantetap`
--

CREATE TABLE `info_jadwalpelayanantetap` (
  `info_jadwal_id` int(11) NOT NULL,
  `lokasipelayanan_id` int(11) DEFAULT NULL,
  `tanggal` varchar(100) DEFAULT NULL,
  `keterangan` varchar(250) NOT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_jadwalpelayanantetap`
--

INSERT INTO `info_jadwalpelayanantetap` (`info_jadwal_id`, `lokasipelayanan_id`, `tanggal`, `keterangan`, `jam_mulai`, `jam_selesai`, `created_at`, `created_by`) VALUES
(1, 1, '2021-05-03', 'Peserta dilayani terbatas', '08:00:00', '17:00:00', '2021-04-19 07:03:24', 8),
(2, 1, '2021-05-04', 'Peserta dilayani terbatas', '08:00:00', '17:00:00', '2021-04-19 07:34:28', 1),
(3, 1, '2021-04-30', 'Peserta dilayani terbatas', '08:00:00', '17:00:00', '2021-04-25 19:32:24', 1),
(4, 4, 'Setiap Hari Selasa ke II', '', '08:00:00', '17:00:00', '2021-05-30 07:44:33', 1),
(5, 1, '2021-06-26', 'Peserta dilayani terbatas', '08:00:00', '17:00:00', '2021-06-24 21:20:31', 8);

-- --------------------------------------------------------

--
-- Table structure for table `lokasidanjeniskb`
--

CREATE TABLE `lokasidanjeniskb` (
  `id` int(11) NOT NULL,
  `lokasipelayanan_id` int(11) NOT NULL,
  `tipekb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasidanjeniskb`
--

INSERT INTO `lokasidanjeniskb` (`id`, `lokasipelayanan_id`, `tipekb_id`) VALUES
(22, 1, 5),
(23, 1, 4),
(24, 1, 3),
(25, 1, 2),
(26, 1, 1),
(27, 2, 5),
(28, 2, 4),
(29, 2, 3),
(30, 2, 2),
(31, 2, 1),
(32, 3, 5),
(33, 3, 4),
(34, 3, 3),
(35, 3, 2),
(36, 3, 1),
(37, 4, 5),
(38, 4, 4),
(39, 4, 3),
(40, 4, 2),
(41, 4, 1),
(42, 5, 5),
(43, 5, 4),
(44, 5, 3),
(45, 5, 2),
(46, 5, 1),
(47, 6, 5),
(48, 6, 4),
(49, 6, 3),
(50, 6, 2),
(51, 6, 1),
(52, 7, 5),
(53, 7, 4),
(54, 7, 3),
(55, 7, 2),
(56, 7, 1),
(57, 8, 5),
(58, 8, 4),
(59, 8, 3),
(60, 8, 2),
(61, 8, 1),
(62, 9, 5),
(63, 9, 4),
(64, 9, 3),
(65, 9, 2),
(66, 9, 1),
(67, 10, 5),
(68, 10, 4),
(69, 10, 3),
(70, 10, 2),
(71, 10, 1),
(72, 11, 5),
(73, 11, 4),
(74, 11, 3),
(75, 11, 2),
(76, 11, 1),
(77, 12, 5),
(78, 12, 4),
(79, 12, 3),
(80, 12, 2),
(81, 12, 1),
(82, 13, 5),
(83, 13, 4),
(84, 13, 3),
(85, 13, 2),
(86, 13, 1),
(87, 14, 5),
(88, 14, 4),
(89, 14, 3),
(90, 14, 2),
(91, 14, 1),
(92, 15, 5),
(93, 15, 4),
(94, 15, 3),
(95, 15, 2),
(96, 15, 1),
(97, 39, 5),
(98, 39, 4),
(99, 39, 3),
(100, 39, 2),
(101, 39, 1),
(102, 40, 5),
(103, 40, 4),
(104, 40, 3),
(105, 40, 2),
(106, 40, 1),
(107, 41, 5),
(108, 41, 4),
(109, 41, 3),
(110, 41, 2),
(111, 41, 1),
(112, 42, 5),
(113, 42, 4),
(114, 42, 3),
(115, 42, 2),
(116, 42, 1),
(117, 43, 5),
(118, 43, 4),
(119, 43, 3),
(120, 43, 2),
(121, 43, 1),
(122, 44, 5),
(123, 44, 4),
(124, 44, 3),
(125, 44, 2),
(126, 44, 1),
(127, 45, 5),
(128, 45, 4),
(129, 45, 3),
(130, 45, 2),
(131, 45, 1),
(132, 46, 5),
(133, 46, 4),
(134, 46, 3),
(135, 46, 2),
(136, 46, 1),
(137, 47, 5),
(138, 47, 4),
(139, 47, 3),
(140, 47, 2),
(141, 47, 1),
(142, 48, 5),
(143, 48, 4),
(144, 48, 3),
(145, 48, 2),
(146, 48, 1),
(147, 49, 5),
(148, 49, 4),
(149, 49, 3),
(150, 49, 2),
(151, 49, 1),
(152, 50, 5),
(153, 50, 4),
(154, 50, 3),
(155, 50, 2),
(156, 50, 1),
(157, 51, 5),
(158, 51, 4),
(159, 51, 3),
(160, 51, 2),
(161, 51, 1),
(162, 52, 5),
(163, 52, 4),
(164, 52, 3),
(165, 52, 2),
(166, 52, 1),
(167, 53, 5),
(168, 53, 4),
(169, 53, 3),
(170, 53, 2),
(171, 53, 1),
(172, 54, 5),
(173, 54, 4),
(174, 54, 3),
(175, 54, 2),
(176, 54, 1),
(177, 55, 5),
(178, 55, 4),
(179, 55, 3),
(180, 55, 2),
(181, 55, 1),
(182, 56, 5),
(183, 56, 4),
(184, 56, 3),
(185, 56, 2),
(186, 56, 1),
(187, 57, 5),
(188, 57, 4),
(189, 57, 3),
(190, 57, 2),
(191, 57, 1),
(192, 58, 5),
(193, 58, 4),
(194, 58, 3),
(195, 58, 2),
(196, 58, 1),
(197, 59, 5),
(198, 59, 4),
(199, 59, 3),
(200, 59, 2),
(201, 59, 1),
(202, 60, 5),
(203, 60, 4),
(204, 60, 3),
(205, 60, 2),
(206, 60, 1),
(207, 61, 5),
(208, 61, 4),
(209, 61, 3),
(210, 61, 2),
(211, 61, 1),
(212, 62, 7),
(213, 62, 6),
(214, 62, 5),
(215, 62, 4),
(216, 62, 3),
(217, 62, 2),
(218, 62, 1),
(219, 63, 7),
(220, 63, 6),
(221, 63, 5),
(222, 63, 4),
(223, 63, 3),
(224, 63, 2),
(225, 63, 1),
(226, 64, 7),
(227, 64, 6),
(228, 64, 5),
(229, 64, 4),
(230, 64, 3),
(231, 64, 2),
(232, 64, 1),
(233, 65, 7),
(234, 65, 6),
(235, 65, 5),
(236, 65, 4),
(237, 65, 3),
(238, 65, 2),
(239, 65, 1),
(240, 66, 7),
(241, 66, 6),
(242, 66, 5),
(243, 66, 4),
(244, 66, 3),
(245, 66, 2),
(246, 66, 1),
(247, 67, 7),
(248, 67, 6),
(249, 67, 5),
(250, 67, 4),
(251, 67, 3),
(252, 67, 2),
(253, 67, 1),
(254, 68, 7),
(255, 68, 6),
(256, 68, 5),
(257, 68, 4),
(258, 68, 3),
(259, 68, 2),
(260, 68, 1),
(261, 69, 7),
(262, 69, 6),
(263, 69, 5),
(264, 69, 4),
(265, 69, 3),
(266, 69, 2),
(267, 69, 1),
(268, 70, 7),
(269, 70, 6),
(270, 70, 5),
(271, 70, 4),
(272, 70, 3),
(273, 70, 2),
(274, 70, 1),
(275, 71, 7),
(276, 71, 6),
(277, 71, 5),
(278, 71, 4),
(279, 71, 3),
(280, 71, 2),
(281, 71, 1),
(282, 72, 7),
(283, 72, 6),
(284, 72, 5),
(285, 72, 4),
(286, 72, 3),
(287, 72, 2),
(288, 72, 1),
(289, 73, 7),
(290, 73, 6),
(291, 73, 5),
(292, 73, 4),
(293, 73, 3),
(294, 73, 2),
(295, 73, 1),
(296, 74, 7),
(297, 74, 6),
(298, 74, 5),
(299, 74, 4),
(300, 74, 3),
(301, 74, 2),
(302, 74, 1),
(303, 75, 7),
(304, 75, 6),
(305, 75, 5),
(306, 75, 4),
(307, 75, 3),
(308, 75, 2),
(309, 75, 1),
(310, 76, 7),
(311, 76, 6),
(312, 76, 5),
(313, 76, 4),
(314, 76, 3),
(315, 76, 2),
(316, 76, 1),
(317, 77, 7),
(318, 77, 6),
(319, 77, 5),
(320, 77, 4),
(321, 77, 3),
(322, 77, 2),
(323, 77, 1),
(324, 78, 7),
(325, 78, 6),
(326, 78, 5),
(327, 78, 4),
(328, 78, 3),
(329, 78, 2),
(330, 78, 1),
(331, 79, 7),
(332, 79, 6),
(333, 79, 5),
(334, 79, 4),
(335, 79, 3),
(336, 79, 2),
(337, 79, 1),
(338, 80, 7),
(339, 80, 6),
(340, 80, 5),
(341, 80, 4),
(342, 80, 3),
(343, 80, 2),
(344, 80, 1),
(345, 81, 7),
(346, 81, 6),
(347, 81, 5),
(348, 81, 4),
(349, 81, 3),
(350, 81, 2),
(351, 81, 1),
(352, 82, 7),
(353, 82, 6),
(354, 82, 5),
(355, 82, 4),
(356, 82, 3),
(357, 82, 2),
(358, 82, 1),
(359, 83, 7),
(360, 83, 6),
(361, 83, 5),
(362, 83, 4),
(363, 83, 3),
(364, 83, 2),
(365, 83, 1),
(366, 84, 7),
(367, 84, 6),
(368, 84, 5),
(369, 84, 4),
(370, 84, 3),
(371, 84, 2),
(372, 84, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mstadmin`
--

CREATE TABLE `mstadmin` (
  `admin_id` int(11) NOT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `lokasipelayanan_id` int(11) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `level_akses` int(2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `active_status` int(1) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstadmin`
--

INSERT INTO `mstadmin` (`admin_id`, `unit_id`, `lokasipelayanan_id`, `full_name`, `level_akses`, `created_at`, `email`, `password`, `active_status`, `last_login`) VALUES
(1, 1, 0, 'taufan hidayatullah', 1, '2021-04-16 13:21:55', 'taufan_h@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, NULL),
(2, NULL, 0, 'admin', 1, '2021-04-21 02:11:20', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL),
(3, NULL, 76, 'Faskes Bhakti Wira', 7, '2021-06-17 10:37:24', 'faskesbhaktiwira@cms.com', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL),
(4, NULL, 0, 'customer services', 2, '2021-06-17 20:11:59', 'cs@cms.com', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL),
(5, NULL, 0, 'admin konten 1', 8, '2021-06-17 20:12:35', 'konten@cms.com', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL),
(6, NULL, 0, 'pelayanan KB 1', 9, '2021-06-17 20:19:32', 'pelayanankb@cms.com', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL),
(7, NULL, 11, 'faskes PKM Poncol', 7, '2021-06-17 22:10:23', 'faskespkmponcol@cms.com', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL),
(8, NULL, 1, 'faskes PKM Pandanaran', 7, '2021-06-17 23:15:40', 'pkmpandanaran@cms.com', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mstdesa`
--

CREATE TABLE `mstdesa` (
  `desa_id` int(11) NOT NULL,
  `kecamatan_id` int(11) DEFAULT NULL,
  `nama_desa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstdesa`
--

INSERT INTO `mstdesa` (`desa_id`, `kecamatan_id`, `nama_desa`) VALUES
(1, 1, 'Brumbungan'),
(2, 1, 'Bangunharjo'),
(3, 1, 'Gabahan'),
(4, 4, 'Bugangan'),
(5, 4, 'Karangtempel'),
(6, 3, 'Bandarharjo'),
(7, 3, 'Bulu Lor'),
(8, 2, 'Bojongsalaman'),
(9, 2, 'Bongsari'),
(10, 15, 'Banyumanik'),
(11, 15, 'Gedawang'),
(12, 15, 'Jabungan'),
(13, 15, 'Ngesrep'),
(14, 15, 'Padangsari'),
(15, 15, 'Pedalangan'),
(16, 15, 'Pudakpayung'),
(17, 15, 'Srondol Kulon'),
(18, 15, 'Srondol Wetan'),
(19, 15, 'Sumurboto'),
(20, 15, 'Tinjomoyo'),
(21, 11, 'Candi'),
(22, 11, 'Jatingaleh'),
(23, 11, 'Jomblang'),
(24, 11, 'Kaliwiru'),
(25, 11, 'Karanganyar Gunung'),
(26, 11, 'Tegalsari'),
(27, 11, 'Wonotingal'),
(28, 12, 'Bendanduwur'),
(29, 12, 'Bendan Ngisor'),
(30, 12, 'Bendungan'),
(31, 12, 'Gajahmungkur'),
(32, 12, 'Karangrejo'),
(33, 12, 'Lempongsari'),
(34, 12, 'Petompon'),
(35, 12, 'Sampangan'),
(36, 10, 'Gayamsari'),
(37, 10, 'Kaligawe'),
(38, 10, 'Pandean Lamper'),
(39, 10, 'Sambirejo'),
(40, 10, 'Sawahbesar'),
(41, 10, 'Siwalan'),
(42, 10, 'Tambakrejo'),
(43, 6, 'Bangetayu Kulon'),
(44, 6, 'Bangetayu Wetan'),
(45, 6, 'Banjardowo'),
(46, 6, 'Gebangsari'),
(47, 6, 'Genuksari'),
(48, 6, 'Karangroto'),
(49, 6, 'Kudu'),
(50, 6, 'Muktiharjo Lor'),
(51, 6, 'Penggaron Lor'),
(52, 6, 'Sembungharjo'),
(53, 6, 'Terboyo Kulon'),
(54, 6, 'Terboyo Wetan'),
(55, 6, 'Trimulyo'),
(56, 7, 'Cepoko'),
(57, 7, 'Gunungpati'),
(58, 7, 'Jatirejo'),
(59, 7, 'Kalisegoro'),
(60, 7, 'Kandri'),
(61, 7, 'Mangunsari'),
(62, 7, 'Ngijo'),
(63, 7, 'Nongkosawit'),
(64, 7, 'Pakintelan'),
(65, 7, 'Patemon'),
(66, 7, 'Plalangan'),
(67, 7, 'Pongangan'),
(68, 7, 'Sadeng'),
(69, 7, 'Sekaran'),
(70, 7, 'Sukorejo'),
(71, 7, 'Sumurejo'),
(72, 8, 'Bubakan'),
(73, 8, 'Cangkiran'),
(74, 8, 'Jatibarang'),
(75, 8, 'Jatisari'),
(76, 8, 'Karangmalang'),
(77, 8, 'Kedungpane'),
(78, 8, 'Mijen'),
(79, 8, 'Ngadirgo'),
(80, 8, 'Pesantren'),
(81, 8, 'Polaman'),
(82, 8, 'Purwosari'),
(83, 8, 'Tambangan'),
(84, 8, 'Wonolopo'),
(85, 8, 'Wonoplumbon'),
(86, 16, 'Bambankerep'),
(87, 16, 'Bringin'),
(88, 16, 'Gondoriyo'),
(89, 16, 'Kalipancur'),
(90, 16, 'Ngaliyan'),
(91, 16, 'Podorejo'),
(92, 16, 'Purwoyoso'),
(93, 16, 'Tambakaji'),
(94, 16, 'Wonosari'),
(95, 16, 'Wates'),
(96, 13, 'Gemah'),
(97, 13, 'Kalicari'),
(98, 13, 'Muktiharjo Kidul'),
(99, 13, 'Palebon'),
(100, 13, 'Pedurungan Kidul'),
(101, 13, 'Pedurungan Lor'),
(102, 13, 'Pedurungan Tengah'),
(103, 13, 'Penggaron Kidul'),
(104, 13, 'Plamongan Sari'),
(105, 13, 'Tlogomulyo'),
(106, 13, 'Tlogosari Kulon'),
(107, 13, 'Tlogosari Wetan'),
(110, 2, 'Cabean'),
(111, 2, 'Gisikdrono'),
(112, 2, 'Kalibanteng Kidul'),
(113, 2, 'Kalibanteng Kulon'),
(114, 2, 'Karangayu'),
(115, 2, 'Kembangarum'),
(116, 2, 'Krapyak'),
(117, 2, 'Krobokan'),
(118, 2, 'Manyaran'),
(119, 2, 'Ngemplak Simongan'),
(120, 2, 'Salaman Mloyo'),
(121, 2, 'Tambakharjo'),
(122, 2, 'Tawang Mas'),
(123, 2, 'Tawangsari'),
(124, 5, 'Barusari'),
(125, 5, 'Bulustalan'),
(126, 5, 'Lamper Kidul'),
(127, 5, 'Lamper Lor'),
(128, 5, 'Lamper Tengah'),
(129, 5, 'Mugassari'),
(130, 5, 'Peterongan'),
(131, 5, 'Pleburan'),
(132, 5, 'Randusari'),
(133, 5, 'Wonodri'),
(134, 1, 'Jagalan'),
(135, 1, 'Karangkidul'),
(136, 1, 'Kauman'),
(137, 1, 'Kembangsari'),
(138, 1, 'Kranggan'),
(139, 1, 'Miroto'),
(140, 1, 'Pandansari'),
(141, 1, 'Pekunden'),
(142, 1, 'Pendrikan Kidul'),
(143, 1, 'Pendrikan Lor'),
(144, 1, 'Purwodinatan'),
(145, 1, 'Sekayu'),
(146, 4, 'Karangturi'),
(147, 4, 'Kebonagung'),
(148, 4, 'Kemijen'),
(149, 4, 'Mlatibaru'),
(150, 4, 'Mlatiharjo'),
(151, 4, 'Rejomulyo'),
(152, 4, 'Rejosari'),
(153, 4, 'Sarirejo'),
(154, 3, 'Dadapsari'),
(155, 3, 'Kuningan'),
(156, 3, 'Panggung Kidul'),
(157, 3, 'Panggung Lor'),
(158, 3, 'Plombokan'),
(159, 3, 'Purwosari'),
(160, 3, 'Tanjung Mas'),
(161, 14, 'Bulusan'),
(162, 14, 'Jangli'),
(163, 14, 'Kedungmundu'),
(164, 14, 'Kramas'),
(165, 14, 'Mangunharjo'),
(166, 14, 'Meteseh'),
(167, 14, 'Rowosari'),
(168, 14, 'Sambiroto'),
(169, 14, 'Sendangguwo'),
(170, 14, 'Sendangmulyo'),
(171, 14, 'Tandang'),
(172, 14, 'Tembalang'),
(173, 9, 'Jerakah'),
(174, 9, 'Karanganyar'),
(175, 9, 'Mangkang Kulon'),
(176, 9, 'Mangkang Wetan'),
(177, 9, 'Mangunharjo'),
(178, 9, 'Randu Garut'),
(179, 9, 'Tugurejo');

-- --------------------------------------------------------

--
-- Table structure for table `mstinfo`
--

CREATE TABLE `mstinfo` (
  `info_id` int(11) NOT NULL,
  `info_title` varchar(100) DEFAULT NULL,
  `image_url` varchar(200) NOT NULL,
  `info_summary` varchar(200) NOT NULL,
  `info_desc` text DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstinfo`
--

INSERT INTO `mstinfo` (`info_id`, `info_title`, `image_url`, `info_summary`, `info_desc`, `created_by`, `created_at`, `active_status`) VALUES
(3, 'PELAYANAN KB GRATIS MELALUI MUYAN KECAMATAN TEMBALANG', 'https://taufanh.my.id/upload/images/1622331913-test.jpg', 'Dinas Pengendalian Penduduk dan KB Kota Semarang, mengadakan pelayanan KB gratis di Balai KB Kecamatan Tembalang', '<p>Dinas Pengendalian Penduduk dan KB Kota Semarang,&nbsp;mengadakan pelayanan KB gratis di Balai KB Kecamatan Tembalang pada Selasa, 9&nbsp;Februari 2021 dan diikuti 70 akseptor.&nbsp;Pelayanan medis KB gratis ini dilaksanakan Dinas Pengendalian Penduduk dan KB Kota Semarang secara rutin, terjadwal dan harus memenuhi target. Selain melakukan pelayanan medis KB, Dinas Pengendalian Penduduk dan KB memberikan ruang tersendiri bagi akseptor untuk melakukan konsultasi mengenai alat kontrasepsi apa yang cocok bagi dirinya dan sesuai dengan kepentingannya pula.. Selain dari pada itu Dinas Pengendalian Penduduk dan KB mengharapkan kegiatan ini juga untuk mendorong Pasangan Usia Subur (PUS) agar tidak hanya melakukan pemasangan alat kontrasepsi KB jangka pendek atau jangka menengah, tetapi melakukan pemasangan alat kontrasepsi KB jangka panjang</p>\r\n', 1, '2021-05-30 06:45:13', 1),
(4, 'BANTUAN SOSIAL BANJIR', 'https://taufanh.my.id/upload/images/1622332187-bansos_semarang.jpg', 'Dinas Pengendalian Penduduk dan KB Kota Semarang menyalurkan bantuan kepada kader Sub PPKBD korban banjir di Kota Semarang. ', '<p>Dinas Pengendalian Penduduk dan KB Kota Semarang, Selasa (09/2/2021), menyalurkan bantuan kepada kader Sub PPKBD korban banjir di&nbsp;Kota Semarang.&nbsp;</p>\r\n', 1, '2021-05-30 06:48:46', 1),
(5, 'RAKOR PENGUATAN KAMPUNG KB BAGI MITRA KERJA MUSLIMAT NU', 'https://taufanh.my.id/upload/images/1622332281-rakor_nu.jpg', 'Dinas Pengendalian Penduduk dan KB Kota Semarang bekerjasama dengan Muslimat NU Kota Semarang mengadakan Rakor Penguatan Kampung KB Bagi Mitra Kerja Muslimat NU', '<p>Dalam rangka meningkatkan efiktifitas sosialisasi KB di lingkungan Kota Semarang, Dinas Pengendalian Penduduk dan KB Kota Semarang bekerjasama dengan Muslimat NU Kota Semarang mengadakan&nbsp;Rakor Penguatan Kampung KB Bagi Mitra Kerja Muslimat NU. Kegiatan ini dilaksanakan di Gedung Muslimat NU Kota Semarang pada Selasa, 16 Februari 2021.</p>\r\n\r\n<p>Ibu-ibu Muslimat NU punya peran penting dalam mendidik dan menyiapkan putra-putrinya menata masa depan, dalam hal ini membina sebuah keluarga yang harmonis dan sejahtera.</p>\r\n', 1, '2021-05-30 06:51:23', 1),
(6, 'LAUNCHING PELAYANAN KB MKJP DANA BANTUAN OPERASIONAL KELUARGA BERENCANA', 'https://taufanh.my.id/upload/images/1622332510-launching.jpg', 'Dinas Pengendalian Penduduk dan KB Kota Semarang menyelenggarakan acara Launching Pelayanan KB MKJP Dana Bantuan Operasional Keluarga Berencana', '<p>Ditengah menurunnya keanggotan KB pada masa pandemi covid-19 ini, Dinas Pengendalian Penduduk dan KB Kota Semarang menyelenggarakan acara&nbsp;Launching Pelayanan KB MKJP Dana Bantuan Operasional Keluarga Berencana yang bertempat di Klinik Budi Asih Kecamatan Semarang Utara pada hari Kamis, 4 Februari 2021.</p>\r\n', 1, '2021-05-30 06:55:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mstjenispelayanan`
--

CREATE TABLE `mstjenispelayanan` (
  `id_pelayanan` int(11) NOT NULL,
  `nama_pelayanan` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstjenispelayanan`
--

INSERT INTO `mstjenispelayanan` (`id_pelayanan`, `nama_pelayanan`, `created_at`, `created_by`) VALUES
(1, 'Pendaftaran KB', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mstjumlahkk`
--

CREATE TABLE `mstjumlahkk` (
  `idjumlahkk` int(11) NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `idperiode` int(11) NOT NULL,
  `jml_lakilaki` bigint(20) NOT NULL,
  `jml_perempuan` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstjumlahkk`
--

INSERT INTO `mstjumlahkk` (`idjumlahkk`, `kecamatan_id`, `idperiode`, `jml_lakilaki`, `jml_perempuan`) VALUES
(1, 1, 1, 5432, 3345),
(2, 4, 1, 18000, 6408),
(3, 2, 1, 8228, 6557);

-- --------------------------------------------------------

--
-- Table structure for table `mstkecamatan`
--

CREATE TABLE `mstkecamatan` (
  `kecamatan_id` int(11) NOT NULL,
  `nama_kecamatan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstkecamatan`
--

INSERT INTO `mstkecamatan` (`kecamatan_id`, `nama_kecamatan`) VALUES
(1, 'Semarang Tengah'),
(2, 'Semarang Barat'),
(3, 'Semarang Utara'),
(4, 'Semarang Timur'),
(5, 'Semarang Selatan'),
(6, 'Genuk'),
(7, 'Gunungpati'),
(8, 'Mijen'),
(9, 'Tugu'),
(10, 'Gayamsari'),
(11, 'Candisari'),
(12, 'Gajahmungkur'),
(13, 'Pedurungan'),
(14, 'Tembalang'),
(15, 'Banyumanik'),
(16, 'Ngalian');

-- --------------------------------------------------------

--
-- Table structure for table `mstlaporan`
--

CREATE TABLE `mstlaporan` (
  `id_laporan` int(11) NOT NULL,
  `link` varchar(250) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `tipe` text NOT NULL,
  `nama_file` varchar(250) NOT NULL,
  `tahun` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstlaporan`
--

INSERT INTO `mstlaporan` (`id_laporan`, `link`, `file_name`, `tipe`, `nama_file`, `tahun`, `created_at`, `created_by`) VALUES
(1, 'https://taufanh.my.id/upload/file/laporan_bulanan.xls', 'laporan_bulanan.xls', 'bulanan', 'Laporan Bulanan', 2021, '2021-07-10 14:55:28', 1),
(5, 'https://taufanh.my.id/upload/file/1626491745-laporan_tahunan.xls', '', 'tahunan', 'Laporan Tahunan', 0, '2021-07-17 10:15:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mstlevel_akses`
--

CREATE TABLE `mstlevel_akses` (
  `level_id` int(11) NOT NULL,
  `nama_level` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstlevel_akses`
--

INSERT INTO `mstlevel_akses` (`level_id`, `nama_level`) VALUES
(1, 'Super Admin'),
(2, 'Customer Service'),
(7, 'Bidang Pelayanan Faskes'),
(8, 'Admin Konten'),
(9, 'Bidang Pelayanan KB');

-- --------------------------------------------------------

--
-- Table structure for table `mstlokasipelayanan`
--

CREATE TABLE `mstlokasipelayanan` (
  `lokasipelayanan_id` int(11) NOT NULL,
  `nama_lokasi` varchar(200) DEFAULT NULL,
  `kecamatan_id` int(11) DEFAULT NULL,
  `layanan_jenis_kb` varchar(200) NOT NULL,
  `desa_id` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstlokasipelayanan`
--

INSERT INTO `mstlokasipelayanan` (`lokasipelayanan_id`, `nama_lokasi`, `kecamatan_id`, `layanan_jenis_kb`, `desa_id`, `created_by`, `created_at`) VALUES
(1, 'PKM Pandanaran', 5, '', 2, 0, '0000-00-00 00:00:00'),
(2, 'PKM Karangdoro', 4, '', 2, 0, '0000-00-00 00:00:00'),
(3, 'PKM Bugangan', 4, '', 5, 0, '0000-00-00 00:00:00'),
(4, 'PKM Halmahera', 4, '', NULL, 0, '0000-00-00 00:00:00'),
(5, 'PKM lamper Tengah', 5, '', NULL, 0, '0000-00-00 00:00:00'),
(6, 'PKM Manyaran', 2, '', NULL, 0, '0000-00-00 00:00:00'),
(7, 'PKM Lebdosari', 2, '', NULL, 0, '0000-00-00 00:00:00'),
(8, 'PKM Ngempak Simongan', 2, '', NULL, 0, '0000-00-00 00:00:00'),
(9, 'PKM Karangayu', 2, '', NULL, 0, '0000-00-00 00:00:00'),
(10, 'PKM Krobokan', 2, '', NULL, 0, '0000-00-00 00:00:00'),
(11, 'PKM Poncol', 1, '', NULL, 0, '0000-00-00 00:00:00'),
(12, 'PKM Miroto', 1, '', NULL, 0, '0000-00-00 00:00:00'),
(13, 'PKM Bandarharjo', 3, '', NULL, 0, '0000-00-00 00:00:00'),
(14, 'PKM Bulu Lor', 3, '', NULL, 0, '0000-00-00 00:00:00'),
(15, 'PKM Genuk', 6, '', NULL, 0, '0000-00-00 00:00:00'),
(39, 'PKM Bangetayu', 6, '', NULL, 0, '0000-00-00 00:00:00'),
(40, 'PKM Sekaran', 7, '', NULL, 0, '0000-00-00 00:00:00'),
(41, 'PKM Gunungpati', 7, '', NULL, 0, '0000-00-00 00:00:00'),
(42, 'PKM Mijen', 8, '', NULL, 0, '0000-00-00 00:00:00'),
(43, 'PKM Karangmalang', 8, '', NULL, 0, '0000-00-00 00:00:00'),
(44, 'PKM Mangkang', 9, '', NULL, 0, '0000-00-00 00:00:00'),
(45, 'PKM Karang Anyar', 9, '', NULL, 0, '0000-00-00 00:00:00'),
(46, 'PKM Gayamsari', 10, '', NULL, 0, '0000-00-00 00:00:00'),
(47, 'RS Bhayangkara', 10, '', NULL, 0, '0000-00-00 00:00:00'),
(48, 'PKM Candilama', 11, '', NULL, 0, '0000-00-00 00:00:00'),
(49, 'PKM Kagok', 11, '', NULL, 0, '0000-00-00 00:00:00'),
(50, 'PKM Pegandan', 12, '', NULL, 0, '0000-00-00 00:00:00'),
(51, 'PKM Tlogosari Wetan', 13, '', NULL, 0, '0000-00-00 00:00:00'),
(52, 'PKM Tlogosari Kulon', 13, '', NULL, 0, '0000-00-00 00:00:00'),
(53, 'PKM Kedungmundu', 14, '', NULL, 0, '0000-00-00 00:00:00'),
(54, 'PKM Rowosari', 14, '', NULL, 0, '0000-00-00 00:00:00'),
(55, 'PKM Ngesrep', 15, '', NULL, 0, '0000-00-00 00:00:00'),
(56, 'PKM Padangsari', 15, '', NULL, 0, '0000-00-00 00:00:00'),
(57, 'PKM Srondol', 15, '', NULL, 0, '0000-00-00 00:00:00'),
(58, 'PKM Pundak Payung', 15, '', NULL, 0, '0000-00-00 00:00:00'),
(59, 'PKM Purwoyoso', 16, '', NULL, 0, '0000-00-00 00:00:00'),
(60, 'PKM Ngalian', 16, '', NULL, 0, '0000-00-00 00:00:00'),
(61, 'PKM Tambak Aji', 16, '', NULL, 0, '0000-00-00 00:00:00'),
(62, 'RS Columbia Asia Semarang', 2, '', NULL, 0, '0000-00-00 00:00:00'),
(63, 'RS St. Elisabeth Semarang', 11, '', NULL, 0, '0000-00-00 00:00:00'),
(64, 'RS Sultan Agung Semarang', 6, '', NULL, 0, '0000-00-00 00:00:00'),
(65, 'RS Telogorejo', 1, '', NULL, 0, '0000-00-00 00:00:00'),
(66, 'RSUD K.M.R.T Wongso Negoro', 14, '', NULL, 0, '0000-00-00 00:00:00'),
(67, 'RSUD Tugurejo Semarang', 16, '', NULL, 0, '0000-00-00 00:00:00'),
(68, 'RS Bhayangkara', 10, '', NULL, 0, '0000-00-00 00:00:00'),
(69, 'RS Hermina Banyumanik', 15, '', NULL, 0, '0000-00-00 00:00:00'),
(70, 'RS Hermina', 1, '', NULL, 0, '0000-00-00 00:00:00'),
(71, 'RS Nasional Diponegoro', 14, '', NULL, 0, '0000-00-00 00:00:00'),
(72, 'RS Panti Wilasa Citarum', 4, '', NULL, 0, '0000-00-00 00:00:00'),
(73, 'RS Panti Wilasa', 4, '', NULL, 0, '0000-00-00 00:00:00'),
(74, 'RS Permata Medika', 16, '', NULL, 0, '0000-00-00 00:00:00'),
(75, 'RS Roemani', 5, '', NULL, 0, '0000-00-00 00:00:00'),
(76, 'RS Tk.III Bhakti Wira Tamtama', 5, '', NULL, 0, '0000-00-00 00:00:00'),
(77, 'RS William Booth', 12, '', NULL, 0, '0000-00-00 00:00:00'),
(78, 'RSIA Ananda Pasar Ace', 8, '', NULL, 0, '0000-00-00 00:00:00'),
(79, 'RSIA Anugerah', 5, '', NULL, 0, '0000-00-00 00:00:00'),
(80, 'RSIA Bunda', 4, '', NULL, 0, '0000-00-00 00:00:00'),
(81, 'RSIA Gunung Sawo', 12, '', NULL, 0, '0000-00-00 00:00:00'),
(82, 'RSIA Kusuma Pradja', 4, '', NULL, 0, '0000-00-00 00:00:00'),
(83, 'RSIA Plamongan Indah', 13, '', NULL, 0, '0000-00-00 00:00:00'),
(84, 'RS Banyumanik', 15, '', NULL, 0, '0000-00-00 00:00:00'),
(86, 'Rumah Sakit sekar kamulyan', NULL, '', NULL, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mstmenu`
--

CREATE TABLE `mstmenu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(200) DEFAULT NULL,
  `parent_menu` int(11) DEFAULT NULL,
  `script_menu` varchar(100) DEFAULT NULL,
  `menu_fas` varchar(200) DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstmenu`
--

INSERT INTO `mstmenu` (`menu_id`, `menu_name`, `parent_menu`, `script_menu`, `menu_fas`, `active_status`) VALUES
(1, 'Image Slider', 0, 'imageslider', 'fa fa-desktop', 1),
(2, 'Data Master', 0, '#', 'fa fa-align-justify', 1),
(3, 'Pelayanan', 0, '#', 'fa fa-desktop', 1),
(4, 'Master Menu', 0, '#', 'fa fa-desktop', 1),
(5, 'User Admin CMS', 0, 'useradmin', 'fa fa-group', 1),
(6, 'List Desa', 2, 'mstdesa', 'fa fa-book', 1),
(7, 'List Kecamatan', 2, 'listkecamatan', 'fa fa-book', 1),
(8, 'Jenis Pelayanan', 3, 'jenispelayanan', 'fa fa-desktop', 1),
(9, 'Artikel', 32, 'sekilasinfo', 'fa fa-align-justify', 1),
(10, 'level Akses', 4, 'levelakses', 'fa fa-desktop', 1),
(11, 'Lokasi Pelayanan', 3, 'lokasipelayanan', 'fa fa-automobile', 1),
(12, 'List Menu', 4, 'mstmenu', 'fa fa-align-justify', 1),
(13, 'Tipe KB', 2, 'msttipekb', 'fa fa-desktop', 1),
(15, 'Data User Aplikasi', 0, 'userapps', 'fa fa-group', 1),
(17, 'Data Pendaftaran pelayanan', 20, 'reg_pelayanan', 'fa fa-desktop', 1),
(19, 'Level User Menu', 4, 'usermenu', 'fa fa-align-justify', 1),
(20, 'Data Pelayanan', 0, '#', 'fa fa-align-justify', 1),
(21, 'Jadwal Pelayanan Tetap', 20, 'jadwalpelayanantetap', 'fa fa-group', 1),
(22, 'Data Master Grafik', 0, '#', 'fa fa-desktop', 1),
(23, 'Data Periode', 2, 'dataperiode', 'fa fa-book', 1),
(24, 'Jumlah Kartu Keluarga', 2, 'datakartukeluarga', 'fa fa-book', 1),
(25, 'Jumlah Keluarga Dalam Grafik', 2, 'datakartukeluargagrafik', 'fa fa-desktop', 1),
(26, 'Pesan Masuk', 0, 'pesanmasuk', 'fa fa-envelope ', 1),
(27, 'Jadwal pelayanan Terpusat', 20, 'jadwalpelayananterpusat', 'fa fa-group', 1),
(28, 'Laporan', 0, '#', 'fa fa-book', 1),
(29, 'Input Historis Pelayanan', 20, 'user_history_pelayanan', 'fa fa-group', 1),
(30, 'Laporan Indikator Bulanan', 2, 'indikatorbulanan', 'fa fa-book', 1),
(31, 'Laporan Indikator Tahunan', 2, 'indikatortahunan', 'fa fa-book', 1),
(32, 'KIE', 0, '#', 'fa fa-desktop', 1),
(33, 'Konten', 32, 'kiekonten', 'fa fa-book', 1),
(34, 'Perpustakaan', 32, 'kieperpustakaan', 'fa fa-book', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mstperiode`
--

CREATE TABLE `mstperiode` (
  `idperiode` int(11) NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `tahun` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstperiode`
--

INSERT INTO `mstperiode` (`idperiode`, `bulan`, `tahun`) VALUES
(1, 'Januari', '2020'),
(3, 'Februari', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `msttipekb`
--

CREATE TABLE `msttipekb` (
  `tipekb_id` int(11) NOT NULL,
  `nama_tipe` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msttipekb`
--

INSERT INTO `msttipekb` (`tipekb_id`, `nama_tipe`) VALUES
(1, 'IUD'),
(2, 'Suntik'),
(3, 'Implant'),
(4, 'Pil'),
(5, 'Kondom'),
(6, 'MOP'),
(7, 'MOW');

-- --------------------------------------------------------

--
-- Table structure for table `mstunit`
--

CREATE TABLE `mstunit` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstunit`
--

INSERT INTO `mstunit` (`unit_id`, `unit_name`, `created_at`) VALUES
(1, 'Admin', '2021-04-24 12:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `mstuser`
--

CREATE TABLE `mstuser` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `desa_id` int(11) NOT NULL,
  `alamat_detail` varchar(250) NOT NULL,
  `pin` varchar(250) NOT NULL,
  `otp_code` int(6) DEFAULT NULL,
  `link_kartu_digital_depan` varchar(200) DEFAULT NULL,
  `link_kartu_digital_belakang` varchar(200) DEFAULT NULL,
  `otp_request_date` datetime DEFAULT NULL,
  `link_image` varchar(200) DEFAULT NULL,
  `active_status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `token_login` varchar(250) NOT NULL,
  `token_fcm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstuser`
--

INSERT INTO `mstuser` (`user_id`, `full_name`, `email`, `no_hp`, `no_ktp`, `tgl_lahir`, `kecamatan_id`, `desa_id`, `alamat_detail`, `pin`, `otp_code`, `link_kartu_digital_depan`, `link_kartu_digital_belakang`, `otp_request_date`, `link_image`, `active_status`, `created_at`, `token_login`, `token_fcm`) VALUES
(14, 'Taufan Hidayatullah', 'taufan_h@hotmail.com2', '085770699410', '3208300410910001', '1992-10-04', 1, 1, 'jalan nila no 48B, rt 1 rw 2', 'c8d278dd28e1c4ac23774d004bce1d74', 645394, NULL, NULL, '2021-04-30 10:50:38', 'IMG_AKUN_14.png', 1, '2021-04-25 21:21:00', '25a610fb45ff77fb1691147dbfc8cb15', ''),
(15, 'trivantiko rezki', 'trivantiko.rezki@gmail.com', '085880382838', '3374150111910003', '1991-11-01', 1, 2, '', '733d7be2196ff70efaf6913fc8bdcabf', 378545, NULL, NULL, '2021-06-09 21:07:49', '', 1, '2021-04-26 18:18:07', 'b5ceb55218eb0ddbb29fd889c3884fb7', 'fQQ8VXtKfRU:APA91bE98C27WcIl-kzMOEkpgErCTptvQJb1_QiD7Ui35hO2oU3wiAdZN-LDeFDoGSPmlrksDZtpg89w704w353nqhBmE0zB6-8OTyZ0lOG_aU5Q5JN0XskgoLSNSKCL_UsuogoyZBhK'),
(16, 'taufan hidayatullah2', 'taufan_h@hotmail.com2', '085770699410', '3208300410910002', '1992-10-04', 1, 1, '', 'c8d278dd28e1c4ac23774d004bce1d74', NULL, NULL, NULL, NULL, NULL, 1, '2021-04-25 21:21:00', '8acc06d48904212a09c2fc44e6927702', ''),
(17, 'taufan hidayatullah3', 'taufan_h@hotmail.com3', '085770699410', '3208300410910003', '1992-10-04', 1, 1, '', 'c8d278dd28e1c4ac23774d004bce1d74', NULL, NULL, NULL, NULL, NULL, 1, '2021-04-25 21:21:00', '8acc06d48904212a09c2fc44e6927702', ''),
(18, 'dadang ade', 'adesufyan48@gmail.com', '085740588781', '3322132712930002', '1993-12-27', 1, 1, '', '2355030467c541016456c8d644f02a7f', 184355, NULL, NULL, '2021-06-18 00:04:39', 'IMG_AKUN_18.png', 1, '2021-04-27 18:30:50', 'c3af6535061b0ee1acaa2866f28b38ac', 'cDA1V3GEoKM:APA91bED4ka3r9KZK90g71Ul9lwNtoreg11ALhJ1O81H8zxG5KGmRxRw2_M4XlE5f0w2X47CgfaEvlgxKeDGT6Ev0gwaxnmtvRvm507xmXSj_F4sAFf5n_yMq93rn3gLd9p4qSfS9aI0'),
(19, 'dadang ade', 'adesufyan48@gmail.com', '085740588781', '3322132712930002', '1993-12-27', 1, 1, '', '2355030467c541016456c8d644f02a7f', 184355, NULL, NULL, '2021-06-18 00:04:39', NULL, 1, '2021-04-27 18:30:54', 'c3af6535061b0ee1acaa2866f28b38ac', 'cDA1V3GEoKM:APA91bED4ka3r9KZK90g71Ul9lwNtoreg11ALhJ1O81H8zxG5KGmRxRw2_M4XlE5f0w2X47CgfaEvlgxKeDGT6Ev0gwaxnmtvRvm507xmXSj_F4sAFf5n_yMq93rn3gLd9p4qSfS9aI0'),
(20, 'Aditya Nugroho', 'aditya.nugroho.84@gmail.com', '08257146210', '3374101303840005', '1984-03-13', 4, 4, '', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, 'IMG_AKUN_2020210625135103.png', 1, '2021-04-29 09:08:23', '71a3d117890456e442c074e867e71b88', 'dHErSlVGY5E:APA91bFrZcD8rGgkG473XWytua7evufQ3tkBtD3bBZrP5zZgrh2oYIxGZCiLjjLmtNehBysHk7dsCcNtTC9g3geT0AtHedZdXoQWN7mZoKu3nv49oNSX0N_64Y8dUbA6rQAEoBg7JDVh'),
(21, 'dicky', 'ingindicintai00@gmail.com', '081928231662', '3374041002950001', '1996-02-10', 10, 41, 'medoho 1', '4a90b9c6fa3a2022f7392230fc84b364', NULL, NULL, NULL, NULL, 'IMG_AKUN_21.png', 1, '2021-05-31 08:07:02', '7ded2010cd6666a46f85997dcc7b6014', ''),
(22, 'maryadi', 'm4ry4di80@gmail.com', '082138240976', '3374102412760002', '1976-12-24', 14, 170, 'jl bukit kenanga 3/390a Sendangmulyo', '10eea21b6842a1d55af4c92513e2b735', NULL, NULL, NULL, NULL, 'IMG_AKUN_2220210616155307.png', 1, '2021-05-31 08:07:46', 'de41f0ae866e9f579bd5dc0bfe553c4e', ''),
(23, 'taufan wae', 'taufan_h@hotmail.com', '085770699412', '1111111111111111', '1992-01-01', 9, 178, 'jalan nila', '733d7be2196ff70efaf6913fc8bdcabf', 532508, NULL, NULL, '2021-06-18 05:05:59', 'IMG_AKUN_2320210706212226.png', 1, '2021-06-02 08:07:07', 'b98050dee1248ca7626f63ab98a76420', 'fNOkAJeh3pI:APA91bGDrI7vHN25owca3QjAGmRE7ph8iUiS_Pcdg5BppQ0RZQtOB6c0lDHR2XeHDZCQ1HNCZgiM0Yt4SnqMiAXNLZuXSQl7kU5hnR7Q48Q8ZNBv4Zgp0a3gseOL4x6TgmQ0I3044M9y'),
(24, 'HARI MULYA', 'harimulyacom@gmail.com', '0819800460', '3303111908850001', '1985-08-19', 7, 69, 'PERUMAHAN AYODYA SEKARAN', '2abf3df07ec964b30307ebcc8c50df03', NULL, NULL, NULL, NULL, 'IMG_AKUN_24.png', 1, '2021-06-02 08:43:35', 'fe24d8e1a81cb79cc6ca29371778ac36', ''),
(25, 'gani adhitya tama', 'gani7tama@yahoo.com', '085743759994', '3374101905870004', '1987-05-19', 16, 90, 'jalan wismasari ngaliyan', '8f9b468710bf682c11ee7dec07161a01', NULL, NULL, NULL, NULL, NULL, 1, '2021-06-02 08:44:36', 'b0cfd1a56ffc9b653cc9a562c81cae5d', ''),
(26, 'Suhadi', 'suhadibrata@gmail.com', '081225043098', '3374071106630002', '1963-06-11', 15, 12, 'Jl. Villa Mulawarman', 'e10adc3949ba59abbe56e057f20f883e', 331842, NULL, NULL, '2021-06-09 11:41:55', 'IMG_AKUN_26.png', 1, '2021-06-02 08:48:33', 'f938ebfe681d012ed185810894769012', ''),
(27, 'Erlin Resminingsih', 'erlinresminingsih@gmail..com', '085713560707', '3374065808660003', '1966-08-18', 13, 107, 'gasem raya no.37, Rt.02/Rw.04, Tlogosari Wetan, Kecamatan Pedurungan', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, 1, '2021-06-02 08:49:10', '5391810977ecca6ae82ed6b6342d40cb', ''),
(28, 'achmad oktanis sediatmoko', 'achmadoktanis@gmail.com', '081326658644', '3374101710850002', '2000-02-03', 14, 170, 'jl ketilengbindah', '858915f1d2d425959fd4da867ba6b599', NULL, NULL, NULL, NULL, NULL, 1, '2021-06-02 08:51:29', '7b1f7cc1d4887d5e7e8c732866aa023b', ''),
(29, 'widayanta', 'akbarwidi2018@gmail.com', '081332674416', '3374102605640001', '1964-05-26', 14, 161, 'semarang', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, 1, '2021-06-02 08:52:46', '8bfea64e8c910e95378c9aa21382b17d', ''),
(30, 'zaqia arista', 'ts.berkarya@gmail.com', '081298106606', '3374150111910004', '1998-01-18', 5, 124, 'aspol kalisari blok 1 no 10', '733d7be2196ff70efaf6913fc8bdcabf', 712052, NULL, NULL, '2021-06-18 00:13:36', NULL, 1, '2021-06-17 21:50:39', '251b3f8af21ee7f6e445e30e9380a4f1', 'exLYM3sk71k:APA91bEjWC-nK3fwwNnHDAx6NQsPJinGu88sVlJiDU-b2jtRgD2XFDPOfZ0M4VE7TvwJxH3pBBSuPfuvRikSxq5XOvrhZRnKWTBlowF7ii60xHVVRQVpi72hf3X4y5BMvbmw6JAZzhXI'),
(31, 'dicky wahyu setiawan', 'disdaldukkb@gmail.com', '081928231663', '3374041002960001', '1995-02-10', 10, 41, 'medoho 1', '4a90b9c6fa3a2022f7392230fc84b364', NULL, NULL, NULL, NULL, NULL, 1, '2021-06-25 13:44:30', 'bd72358063283f7979f9324816a761cb', 'fMYBDjS-jmc:APA91bHeoUtIxI_S0GOpkrXtTD3ey4SnnGIj8AnqnP1ahNUnbeLYjaBSE5dRlQSjubAkveJQLTvH8frP7ZCwgobDLLcPud9_nTGjHotsSNu-uRcoCoG-D75Em3OoEqfESsl0WMYQ3ubt'),
(32, 'Ilham Indra Praja', 'ilhamstartover@gmail.com', '085740906600', '3374150604910002', '2021-04-06', 16, 87, 'Pandana Merdeka Q6', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, 1, '2021-06-25 13:44:35', '15cf8c40b4f1143d0ac51c31dd03d818', 'ffg9R5eO5JQ:APA91bEs55BYTXlpVEWrjjNCLIL_l5LS4GuvcRGAWIQVHDzv3_ZkaQr-U6nutG-O8ulkwZufcrQBA8KOYR3gF0NQi2UHJFA_khkMBhV-G6InjT2KqaBMmPVFXqIwwxwjZo4mAvS9pGwh'),
(33, 'Daru Adiprana', 'daruadiprana@gmail.com', '081226741189', '3374163010850001', '1985-10-30', 9, 173, 'Perum PLN No. 16 Jerakah RT 02/RW 04', '4973593666ec027e03b28b0cbe18cf7a', NULL, NULL, NULL, NULL, 'IMG_AKUN_3320210625142431.png', 1, '2021-06-25 14:01:21', '5eb7edad9e6007a1338eb7489b0d75e1', 'dfqGvPjPErk:APA91bE8dJxe8s6IBLZPgta0t0x-JGvjfYUqKUNypP51EZozcs4Fe3qxwqB3fO5msXcljyrf_pDmquxXL4Q0D4GC7GbciBIDtyqWlsmTcp0Z83nyN6wYub1rKKD0EYDaAM8PmL0vZdcn');

-- --------------------------------------------------------

--
-- Table structure for table `mst_pesan`
--

CREATE TABLE `mst_pesan` (
  `id_pesan` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_pesan`
--

INSERT INTO `mst_pesan` (`id_pesan`, `admin_id`, `user_id`, `created_date`, `STATUS`) VALUES
(17, 0, 13, '2021-04-25 20:21:45', 1),
(18, 0, 15, '2021-04-29 13:57:35', 1),
(19, 0, 20, '2021-06-25 13:54:16', 1),
(20, 0, 18, '2021-06-25 13:59:08', 0),
(21, 0, 25, '2021-06-25 13:55:33', 1),
(22, 0, 31, '2021-06-25 13:54:41', 1),
(23, 0, 30, '2021-06-30 05:51:55', 1),
(24, 0, 23, '2021-07-18 19:17:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_pesan_detail`
--

CREATE TABLE `mst_pesan_detail` (
  `id_pesan_detail` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `message` text NOT NULL,
  `pesan_Dari` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_pesan_detail`
--

INSERT INTO `mst_pesan_detail` (`id_pesan_detail`, `id_pesan`, `admin_id`, `user_id`, `date_created`, `message`, `pesan_Dari`) VALUES
(78, 17, 0, 13, '2021-04-25 20:20:46', 'Hi min', 'user'),
(79, 17, 1, 13, '2021-04-25 20:21:12', 'hai juga kak, ada yang bisa kami bantu ?', 'admin'),
(80, 17, 0, 13, '2021-04-25 20:21:25', 'Ada kak', 'user'),
(81, 17, 1, 13, '2021-04-25 20:21:45', 'ok', 'admin'),
(82, 18, 0, 15, '2021-04-26 18:19:51', 'Test', 'user'),
(83, 18, 1, 15, '2021-04-28 08:50:21', 'testing balasan', 'admin'),
(84, 19, 0, 20, '2021-04-29 13:35:33', 'Test 123', 'user'),
(85, 19, 0, 20, '2021-04-29 13:35:38', 'Admin', 'user'),
(86, 19, 0, 20, '2021-04-29 13:35:42', '123456', 'user'),
(87, 19, 2, 20, '2021-04-29 13:38:50', '', 'admin'),
(88, 19, 2, 20, '2021-04-29 13:38:54', '', 'admin'),
(89, 19, 2, 20, '2021-04-29 13:38:55', '', 'admin'),
(90, 19, 2, 20, '2021-04-29 13:39:31', 'Ada yang bisa kami bantu?', 'admin'),
(91, 20, 0, 18, '2021-04-29 13:40:09', 'Mau ank 5', 'user'),
(92, 19, 0, 20, '2021-04-29 13:40:37', 'Test 123', 'user'),
(93, 20, 2, 18, '2021-04-29 13:41:06', 'Program KB ', 'admin'),
(94, 18, 0, 15, '2021-04-29 13:56:47', 'Program apa?', 'user'),
(95, 18, 2, 15, '2021-04-29 13:57:35', 'Program KB ', 'admin'),
(96, 21, 0, 25, '2021-06-02 08:54:54', 'Halo tes', 'user'),
(97, 20, 0, 18, '2021-06-18 00:01:42', 'Tes', 'user'),
(98, 22, 0, 31, '2021-06-25 13:51:50', 'Faq nya sudah ada belum', 'user'),
(99, 20, 0, 18, '2021-06-25 13:53:53', 'Tes 2', 'user'),
(100, 22, 0, 31, '2021-06-25 13:54:14', 'Balas dong', 'user'),
(101, 19, 2, 20, '2021-06-25 13:54:16', 'Test 123', 'admin'),
(102, 22, 2, 31, '2021-06-25 13:54:41', 'Baiklah', 'admin'),
(103, 20, 2, 18, '2021-06-25 13:55:06', 'Test 123', 'admin'),
(104, 20, 2, 18, '2021-06-25 13:55:09', '', 'admin'),
(105, 21, 2, 25, '2021-06-25 13:55:33', 'Mas Gani,,', 'admin'),
(106, 20, 0, 18, '2021-06-25 13:59:08', 'Test', 'user'),
(107, 23, 0, 30, '2021-06-30 05:46:47', 'Test', 'user'),
(108, 23, 2, 30, '2021-06-30 05:51:31', 'Bisa di bantu', 'admin'),
(109, 23, 0, 30, '2021-06-30 05:51:48', 'Sdh mkn?', 'user'),
(110, 23, 2, 30, '2021-06-30 05:51:55', 'Blm ', 'admin'),
(111, 24, 0, 23, '2021-07-18 19:17:52', 'Hai min,mau bertanya', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `reg_pelayanan`
--

CREATE TABLE `reg_pelayanan` (
  `id_reg_pelayanan` int(11) NOT NULL,
  `id_pelayanan` int(11) DEFAULT NULL,
  `status_pendaftaran` int(1) NOT NULL DEFAULT 1 COMMENT '1 = reg, 2 approve, 3 reject',
  `user_id` int(11) DEFAULT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_bpjs` varchar(50) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `iva_test` int(1) DEFAULT NULL,
  `register_date` datetime DEFAULT NULL,
  `tipe_kb` int(11) DEFAULT NULL,
  `lokasipelayanan_id` int(11) DEFAULT NULL,
  `no_pendaftaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_pelayanan`
--

INSERT INTO `reg_pelayanan` (`id_reg_pelayanan`, `id_pelayanan`, `status_pendaftaran`, `user_id`, `no_ktp`, `nama_lengkap`, `alamat`, `email`, `no_bpjs`, `no_telp`, `iva_test`, `register_date`, `tipe_kb`, `lokasipelayanan_id`, `no_pendaftaran`) VALUES
(5, 1, 1, 14, '3208300410910001', 'taufan hidayatullah', 'jalan nila no 48B, ciganjur jakarta selatan', 'taufan.hidayatullah28@gmail.com', '084546469494184884', '085770699410', 0, '2021-04-26 19:17:19', 1, 1, ''),
(6, 1, 1, 16, '3208300410910001', 'taufan hidayatullah', 'jalan nila no 48B, ciganjur jakarta selatan', 'taufan.hidayatullah28@gmail.com', '084546469494184884', '085770699410', 0, '2021-04-26 19:17:19', 1, 1, ''),
(7, 1, 1, 17, '3208300410910001', 'taufan hidayatullah', 'jalan nila no 48B, ciganjur jakarta selatan', 'taufan.hidayatullah28@gmail.com', '084546469494184884', '085770699410', 0, '2021-04-26 19:17:19', 1, 3, ''),
(8, 1, 1, 17, '3208300410910001', 'taufan hidayatullah', 'jalan nila no 48B, ciganjur jakarta selatan', 'taufan.hidayatullah28@gmail.com', '084546469494184884', '085770699410', 0, '2021-04-26 19:17:19', 2, 3, ''),
(9, 1, 1, 22, '3374102412760002', 'Maryadi', 'jl bukit kenanga', 'm4ry4di80@gmail.com', '123456', '082138240976', 0, '2021-06-02 08:42:12', 5, 53, ''),
(10, 1, 1, 20, '3374121002850002', 'Sumartono', 'Jl. Sumurboto', 'sumartono@gmail.com', '0000525231313', '085640336688', 0, '2021-06-02 08:44:00', 1, 3, ''),
(11, 1, 1, 21, '3374047402960001', 'Dicky', 'medoho', 'ingindicintai00@gmail.com', '33', '081928231663', 1, '2021-06-02 08:45:56', 1, 46, ''),
(12, 1, 1, 25, '3374565656555455', 'Ita', 'tembalang', 'hakahab@yahoo.com', '34346', '08121566205', 0, '2021-06-02 08:52:32', 1, 71, ''),
(13, 1, 1, 24, '00', 'Hh', 'ff', 'gg@m.com', '25', '00', 1, '2021-06-02 08:58:41', 1, 1, ''),
(17, 1, 3, 30, '3374150111910004', 'zaqia arista', 'aspol kalisari blok 1 no 10', 'ts.berkarya@gmail.com', 'BPJS', '081298106606', 1, '2021-06-17 21:51:29', 2, 1, ''),
(18, 1, 1, 23, '1111111111111111', 'taufan wae', 'jalan nila', 'taufan_h@hotmail.com', 'UHJ', '085770699412', 1, '2021-06-17 22:38:02', 5, 76, '231623944282'),
(19, 1, 1, 18, '3322132712930002', 'dadang ade', 'hjjj', 'adesufyan48@gmail.com', 'BPJS', '085740588781', 1, '2021-06-18 00:00:10', 1, 7, '181623949210'),
(20, 1, 1, 18, '3322132712930002', 'dadang ade', 'hjjj', 'adesufyan48@gmail.com', 'BPJS', '085740588781', 1, '2021-06-18 00:00:11', 1, 7, '181623949211'),
(21, 1, 1, 30, '3374150111910004', 'zaqia arista', 'aspol kalisari blok 1 no 10', 'ts.berkarya@gmail.com', 'BPJS', '081298106606', 1, '2021-06-18 10:17:21', 2, 9, '301623986241'),
(22, 1, 2, 30, '3374150111910004', 'zaqia arista', 'aspol kalisari blok 1 no 10', 'ts.berkarya@gmail.com', 'BPJS', '081298106606', 1, '2021-06-25 13:41:52', 6, 63, '301624603312'),
(23, 1, 1, 31, '3374041002960001', 'dicky wahyu setiawan', 'medoho 1', 'disdaldukkb@gmail.com', 'BPJS', '081928231663', 1, '2021-06-25 13:45:10', 1, 46, '311624603510');

-- --------------------------------------------------------

--
-- Table structure for table `stok_alat_kontrasepsi`
--

CREATE TABLE `stok_alat_kontrasepsi` (
  `stok_id` int(11) NOT NULL,
  `tipekb_id` int(11) DEFAULT NULL,
  `jml_stok` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_alat_kontrasepsi`
--

INSERT INTO `stok_alat_kontrasepsi` (`stok_id`, `tipekb_id`, `jml_stok`, `updated_at`, `updated_by`) VALUES
(1, 1, 500, '2021-04-17 12:25:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usermenu`
--

CREATE TABLE `usermenu` (
  `idusermenu` int(11) NOT NULL,
  `level_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermenu`
--

INSERT INTO `usermenu` (`idusermenu`, `level_id`, `menu_id`) VALUES
(2, 1, 1),
(3, 1, 2),
(4, 1, 3),
(5, 1, 4),
(6, 1, 5),
(7, 1, 6),
(8, 1, 7),
(10, 1, 9),
(11, 1, 10),
(12, 1, 11),
(13, 1, 12),
(14, 1, 13),
(15, 1, 14),
(16, 1, 15),
(17, 1, 16),
(18, 1, 17),
(19, 1, 18),
(20, 1, 19),
(34, 1, 21),
(36, 1, 23),
(37, 1, 24),
(38, 1, 25),
(39, 1, 26),
(40, 1, 27),
(41, 1, 20),
(42, 1, 29),
(43, 7, 20),
(44, 7, 17),
(45, 7, 29),
(46, 7, 18),
(47, 7, 3),
(48, 8, 9),
(49, 8, 20),
(50, 8, 27),
(51, 8, 21),
(52, 8, 1),
(54, 8, 23),
(55, 8, 24),
(56, 8, 25),
(57, 8, 2),
(58, 8, 6),
(59, 8, 7),
(60, 2, 26),
(61, 9, 3),
(63, 9, 11),
(64, 9, 20),
(65, 9, 17),
(66, 9, 27),
(67, 9, 21),
(68, 1, 30),
(69, 1, 31),
(70, 8, 30),
(71, 8, 31),
(73, 7, 21),
(74, 1, 32),
(75, 1, 33),
(76, 8, 32),
(77, 8, 33),
(78, 1, 34),
(79, 8, 34);

-- --------------------------------------------------------

--
-- Table structure for table `user_history_pelayanan`
--

CREATE TABLE `user_history_pelayanan` (
  `id_history` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `lokasipelayanan_id` int(11) DEFAULT NULL,
  `id_pelayanan` int(11) DEFAULT NULL,
  `history_datetime` datetime DEFAULT NULL,
  `text_keluhan` text DEFAULT NULL,
  `text_tindakan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_history_pelayanan`
--

INSERT INTO `user_history_pelayanan` (`id_history`, `user_id`, `lokasipelayanan_id`, `id_pelayanan`, `history_datetime`, `text_keluhan`, `text_tindakan`) VALUES
(1, 14, 1, NULL, '2021-04-27 08:20:06', 'Pasang KB', 'Dilakukan pemasangan KB');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_detail` text NOT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `desa_id` int(11) NOT NULL,
  `otp_code` int(6) DEFAULT NULL,
  `otp_request_date` datetime DEFAULT NULL,
  `reg_status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `full_name`, `email`, `no_hp`, `no_ktp`, `tgl_lahir`, `alamat_detail`, `kecamatan_id`, `desa_id`, `otp_code`, `otp_request_date`, `reg_status`, `created_at`) VALUES
(60, 'taufan hidayatullah', 'taufan_h@hotmail.com', '085770699410', '3208300410910001', '1992-10-04', '', 1, 1, NULL, NULL, 1, '2021-04-25 21:20:49'),
(61, 'trivantiko rezki', 'trivantiko.rezki@gmail.com', '085880382838', '3374150111910003', '1991-11-01', '', 1, 2, NULL, NULL, 1, '2021-04-26 18:17:55'),
(62, 'dadang ade', 'adesufyan48@gmail.com', '085740588781', '3322132712930002', '1993-12-27', '', 1, 1, NULL, NULL, 1, '2021-04-27 18:30:24'),
(63, 'Aditya Nugroho', 'aditya.nugroho.84@gmail.com', '08257146210', '3374101303840005', '1984-03-13', '', 4, 4, NULL, NULL, 1, '2021-04-29 09:08:05'),
(64, 'dicky', 'ingindicintai00@gmail.com', '081928231662', '3374041002950001', '1996-02-10', 'medoho 1', 10, 41, NULL, NULL, 1, '2021-05-31 08:06:46'),
(65, 'maryadi', 'm4ry4di80@gmail.com', '082138240976', '3374102412760002', '1976-12-24', 'jl bukit kenanga 3/390a Sendangmulyo', 14, 170, NULL, NULL, 1, '2021-05-31 08:07:16'),
(66, 'taufan wae', 'taufan.hidayatullah@mnclife.com', '085770699412', '1111111111111111', '1992-01-01', 'jalan nila', 9, 178, NULL, NULL, 1, '2021-06-02 08:06:59'),
(67, 'HARI MULYA', 'harimulyacom@gmail.com', '0819800460', '3303111908850001', '1985-08-19', 'PERUMAHAN AYODYA SEKARAN', 7, 69, NULL, NULL, 1, '2021-06-02 08:42:54'),
(68, 'gani adhitya tama', 'gani7tama@yahoo.com', '085743759994', '3374101905870004', '1987-05-19', 'jalan wismasari ngaliyan', 16, 90, NULL, NULL, 1, '2021-06-02 08:42:59'),
(69, 'Suhadi', 'suhadibrata@gmail.com', '081225043098', '3374071106630002', '1963-06-11', 'Jl. Villa Mulawarman', 15, 12, NULL, NULL, 1, '2021-06-02 08:48:18'),
(70, 'Erlin Resminingsih', 'erlinresminingsih@gmail..com', '085713560707', '3374065808660003', '1966-08-18', 'gasem raya no.37, Rt.02/Rw.04, Tlogosari Wetan, Kecamatan Pedurungan', 13, 107, NULL, NULL, 1, '2021-06-02 08:48:27'),
(71, 'achmad oktanis sediatmoko', 'achmadoktanis@gmail.com', '081326658644', '3374101710850002', '2000-02-03', 'jl ketilengbindah', 14, 170, NULL, NULL, 1, '2021-06-02 08:51:16'),
(72, 'widayanta', 'akbarwidi2018@gmail.com', '081332674416', '3374102605640001', '1964-05-26', 'semarang', 14, 161, NULL, NULL, 1, '2021-06-02 08:52:18'),
(73, 'zaqia arista', 'ts.berkarya@gmail.com', '081298106606', '3374150111910004', '1998-01-18', 'aspol kalisari blok 1 no 10', 5, 124, NULL, NULL, 1, '2021-06-17 21:50:28'),
(74, 'Ilham Indra Praja', 'ilhamstartover@gmail.com', '085740906600', '3374150604910002', '2021-04-06', 'Pandana Merdeka Q6', 16, 87, NULL, NULL, 1, '2021-06-25 13:43:46'),
(75, 'dicky wahyu setiawan', 'disdaldukkb@gmail.com', '081928231663', '3374041002960001', '1995-02-10', 'medoho 1', 10, 41, NULL, NULL, 1, '2021-06-25 13:44:19'),
(76, 'Daru Adiprana', 'daruadiprana@gmail.com', '081226741189', '3374163010850001', '1985-10-30', 'Perum PLN No. 16 Jerakah RT 02/RW 04', 9, 173, NULL, NULL, 1, '2021-06-25 14:01:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataindikator`
--
ALTER TABLE `dataindikator`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `image_konten_detail`
--
ALTER TABLE `image_konten_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `image_slider`
--
ALTER TABLE `image_slider`
  ADD PRIMARY KEY (`slider_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `indikatorbulanan`
--
ALTER TABLE `indikatorbulanan`
  ADD PRIMARY KEY (`indikator_id`);

--
-- Indexes for table `info_jadwalpelayananterpusat`
--
ALTER TABLE `info_jadwalpelayananterpusat`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indexes for table `info_jadwalpelayanantetap`
--
ALTER TABLE `info_jadwalpelayanantetap`
  ADD PRIMARY KEY (`info_jadwal_id`),
  ADD KEY `lokasipelayanan_id` (`lokasipelayanan_id`);

--
-- Indexes for table `lokasidanjeniskb`
--
ALTER TABLE `lokasidanjeniskb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mstadmin`
--
ALTER TABLE `mstadmin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `mstdesa`
--
ALTER TABLE `mstdesa`
  ADD PRIMARY KEY (`desa_id`);

--
-- Indexes for table `mstinfo`
--
ALTER TABLE `mstinfo`
  ADD PRIMARY KEY (`info_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `mstjenispelayanan`
--
ALTER TABLE `mstjenispelayanan`
  ADD PRIMARY KEY (`id_pelayanan`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `mstjumlahkk`
--
ALTER TABLE `mstjumlahkk`
  ADD PRIMARY KEY (`idjumlahkk`);

--
-- Indexes for table `mstkecamatan`
--
ALTER TABLE `mstkecamatan`
  ADD PRIMARY KEY (`kecamatan_id`);

--
-- Indexes for table `mstlaporan`
--
ALTER TABLE `mstlaporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `mstlevel_akses`
--
ALTER TABLE `mstlevel_akses`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `mstlokasipelayanan`
--
ALTER TABLE `mstlokasipelayanan`
  ADD PRIMARY KEY (`lokasipelayanan_id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`),
  ADD KEY `desa_id` (`desa_id`);

--
-- Indexes for table `mstmenu`
--
ALTER TABLE `mstmenu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `mstperiode`
--
ALTER TABLE `mstperiode`
  ADD PRIMARY KEY (`idperiode`);

--
-- Indexes for table `msttipekb`
--
ALTER TABLE `msttipekb`
  ADD PRIMARY KEY (`tipekb_id`);

--
-- Indexes for table `mstunit`
--
ALTER TABLE `mstunit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `mstuser`
--
ALTER TABLE `mstuser`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `mst_pesan`
--
ALTER TABLE `mst_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `mst_pesan_detail`
--
ALTER TABLE `mst_pesan_detail`
  ADD PRIMARY KEY (`id_pesan_detail`);

--
-- Indexes for table `reg_pelayanan`
--
ALTER TABLE `reg_pelayanan`
  ADD PRIMARY KEY (`id_reg_pelayanan`),
  ADD KEY `id_pelayanan` (`id_pelayanan`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tipe_kb` (`tipe_kb`),
  ADD KEY `lokasipelayanan_id` (`lokasipelayanan_id`);

--
-- Indexes for table `stok_alat_kontrasepsi`
--
ALTER TABLE `stok_alat_kontrasepsi`
  ADD PRIMARY KEY (`stok_id`),
  ADD KEY `tipekb_id` (`tipekb_id`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `usermenu`
--
ALTER TABLE `usermenu`
  ADD PRIMARY KEY (`idusermenu`);

--
-- Indexes for table `user_history_pelayanan`
--
ALTER TABLE `user_history_pelayanan`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `lokasipelayanan_id` (`lokasipelayanan_id`),
  ADD KEY `id_pelayanan` (`id_pelayanan`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataindikator`
--
ALTER TABLE `dataindikator`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image_konten_detail`
--
ALTER TABLE `image_konten_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_slider`
--
ALTER TABLE `image_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `indikatorbulanan`
--
ALTER TABLE `indikatorbulanan`
  MODIFY `indikator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `info_jadwalpelayananterpusat`
--
ALTER TABLE `info_jadwalpelayananterpusat`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `info_jadwalpelayanantetap`
--
ALTER TABLE `info_jadwalpelayanantetap`
  MODIFY `info_jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lokasidanjeniskb`
--
ALTER TABLE `lokasidanjeniskb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=373;

--
-- AUTO_INCREMENT for table `mstadmin`
--
ALTER TABLE `mstadmin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mstdesa`
--
ALTER TABLE `mstdesa`
  MODIFY `desa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `mstinfo`
--
ALTER TABLE `mstinfo`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mstjenispelayanan`
--
ALTER TABLE `mstjenispelayanan`
  MODIFY `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mstjumlahkk`
--
ALTER TABLE `mstjumlahkk`
  MODIFY `idjumlahkk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mstkecamatan`
--
ALTER TABLE `mstkecamatan`
  MODIFY `kecamatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mstlaporan`
--
ALTER TABLE `mstlaporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mstlevel_akses`
--
ALTER TABLE `mstlevel_akses`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mstlokasipelayanan`
--
ALTER TABLE `mstlokasipelayanan`
  MODIFY `lokasipelayanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `mstmenu`
--
ALTER TABLE `mstmenu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `mstperiode`
--
ALTER TABLE `mstperiode`
  MODIFY `idperiode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `msttipekb`
--
ALTER TABLE `msttipekb`
  MODIFY `tipekb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mstunit`
--
ALTER TABLE `mstunit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mstuser`
--
ALTER TABLE `mstuser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `mst_pesan`
--
ALTER TABLE `mst_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mst_pesan_detail`
--
ALTER TABLE `mst_pesan_detail`
  MODIFY `id_pesan_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `reg_pelayanan`
--
ALTER TABLE `reg_pelayanan`
  MODIFY `id_reg_pelayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `stok_alat_kontrasepsi`
--
ALTER TABLE `stok_alat_kontrasepsi`
  MODIFY `stok_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usermenu`
--
ALTER TABLE `usermenu`
  MODIFY `idusermenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `user_history_pelayanan`
--
ALTER TABLE `user_history_pelayanan`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image_slider`
--
ALTER TABLE `image_slider`
  ADD CONSTRAINT `image_slider_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `mstadmin` (`admin_id`);

--
-- Constraints for table `info_jadwalpelayanantetap`
--
ALTER TABLE `info_jadwalpelayanantetap`
  ADD CONSTRAINT `info_jadwalpelayanantetap_ibfk_1` FOREIGN KEY (`lokasipelayanan_id`) REFERENCES `mstlokasipelayanan` (`lokasipelayanan_id`);

--
-- Constraints for table `mstadmin`
--
ALTER TABLE `mstadmin`
  ADD CONSTRAINT `mstadmin_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `mstunit` (`unit_id`);

--
-- Constraints for table `mstinfo`
--
ALTER TABLE `mstinfo`
  ADD CONSTRAINT `mstinfo_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `mstadmin` (`admin_id`);

--
-- Constraints for table `mstjenispelayanan`
--
ALTER TABLE `mstjenispelayanan`
  ADD CONSTRAINT `mstjenispelayanan_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `mstadmin` (`admin_id`);

--
-- Constraints for table `mstlokasipelayanan`
--
ALTER TABLE `mstlokasipelayanan`
  ADD CONSTRAINT `mstlokasipelayanan_ibfk_1` FOREIGN KEY (`kecamatan_id`) REFERENCES `mstkecamatan` (`kecamatan_id`),
  ADD CONSTRAINT `mstlokasipelayanan_ibfk_2` FOREIGN KEY (`desa_id`) REFERENCES `mstdesa` (`desa_id`);

--
-- Constraints for table `reg_pelayanan`
--
ALTER TABLE `reg_pelayanan`
  ADD CONSTRAINT `reg_pelayanan_ibfk_1` FOREIGN KEY (`id_pelayanan`) REFERENCES `mstjenispelayanan` (`id_pelayanan`),
  ADD CONSTRAINT `reg_pelayanan_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `mstuser` (`user_id`),
  ADD CONSTRAINT `reg_pelayanan_ibfk_3` FOREIGN KEY (`tipe_kb`) REFERENCES `msttipekb` (`tipekb_id`),
  ADD CONSTRAINT `reg_pelayanan_ibfk_4` FOREIGN KEY (`lokasipelayanan_id`) REFERENCES `mstlokasipelayanan` (`lokasipelayanan_id`);

--
-- Constraints for table `stok_alat_kontrasepsi`
--
ALTER TABLE `stok_alat_kontrasepsi`
  ADD CONSTRAINT `stok_alat_kontrasepsi_ibfk_1` FOREIGN KEY (`tipekb_id`) REFERENCES `msttipekb` (`tipekb_id`),
  ADD CONSTRAINT `stok_alat_kontrasepsi_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `mstadmin` (`admin_id`);

--
-- Constraints for table `user_history_pelayanan`
--
ALTER TABLE `user_history_pelayanan`
  ADD CONSTRAINT `user_history_pelayanan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `mstuser` (`user_id`),
  ADD CONSTRAINT `user_history_pelayanan_ibfk_2` FOREIGN KEY (`lokasipelayanan_id`) REFERENCES `mstlokasipelayanan` (`lokasipelayanan_id`),
  ADD CONSTRAINT `user_history_pelayanan_ibfk_3` FOREIGN KEY (`id_pelayanan`) REFERENCES `mstjenispelayanan` (`id_pelayanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
