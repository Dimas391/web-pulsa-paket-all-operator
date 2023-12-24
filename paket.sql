-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 08:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paket`
--

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(5) NOT NULL,
  `id` int(5) DEFAULT NULL,
  `id_paket_telkomsel` int(6) DEFAULT NULL,
  `id_paket_axis` int(5) DEFAULT NULL,
  `id_paket_indosat` int(5) DEFAULT NULL,
  `id_paket_xl` int(5) DEFAULT NULL,
  `id_paket_smartfren` int(5) DEFAULT NULL,
  `No_Telepon` varchar(288) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_paket_axis`
--

CREATE TABLE `products_paket_axis` (
  `id` int(5) NOT NULL,
  `Nama_kartu` varchar(288) NOT NULL,
  `Nama_produk` varchar(288) NOT NULL,
  `Kuota_utama` varchar(288) NOT NULL,
  `Kuota_local` varchar(288) NOT NULL,
  `Kuota_video` varchar(288) NOT NULL,
  `Kuota_game` varchar(288) NOT NULL,
  `Kuota_sosmed` varchar(288) NOT NULL,
  `Kuota_malam` varchar(288) NOT NULL,
  `Harga` int(15) NOT NULL,
  `Masa_aktif` varchar(288) NOT NULL,
  `Keterangan` varchar(288) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_paket_axis`
--

INSERT INTO `products_paket_axis` (`id`, `Nama_kartu`, `Nama_produk`, `Kuota_utama`, `Kuota_local`, `Kuota_video`, `Kuota_game`, `Kuota_sosmed`, `Kuota_malam`, `Harga`, `Masa_aktif`, `Keterangan`) VALUES
(1, 'Axis Telkom', 'Warnet Unlimited 3 Hari', '3 GB', '-', '-', '-', '-', '-', 13200, '3 Hari', '3 GB | 3 hari'),
(2, 'Axis', 'Warnet Unlimited 7 Hari', '10 GB', '', '', '', '', '', 24500, ' 7 Hari', '10 GB | 7 Hari'),
(3, 'Axis', 'Warnet Unlimited 14 Hari', '20 GB', '', '', '', '', '', 30000, ' 14 Hari', '20 GB | 14 Hari'),
(4, 'Axis', 'Warnet Unlimited 30 Hari', '14 GB', '', '', '', '', '', 25000, '30 Hari', '14 GB | 30 Hari'),
(5, 'Axis', 'Warnet Unlimited 30 Hari', '10 GB', '', '', '', '', '', 35000, '30 Hari', '10 GB | 30 Hari'),
(6, 'Axis', 'Bronet 1 Hari', '1 GB', '', '', '', '', '', 5200, '1 Hari', '1 GB | 1 Hari'),
(7, 'Axis', 'Bronet 1 Hari', '2 GB', '', '', '', '', '', 8100, '1 Hari', '2 GB | 1 Hari\r\n'),
(8, 'Axis', 'Bronet 3 Hari', 'Kuota Utama 1 GB', 'Kuota Local 1 GB', '', '', '', '', 7500, '3 Hari', '2 GB | 3 Hari\r\n'),
(9, 'Axis', 'Bronet 3 Hari', 'Kuota Utama 1.5 GB', 'Kuota Local 1 GB', '', '', '', '', 8500, '3 Hari', '2.5 GB | 3 Hari'),
(10, 'Axis', 'Bronet 3 Hari', 'Kuota Utama\n2 GB', 'Kuota Local 1.5 GB', '', '', '', '', 9500, '3 Hari', '3.5 GB | 3 Hari\r\n'),
(11, 'Axis', 'Bronet 3 Hari', 'Kuota Utama\r\n3 GB', 'Kuota Local\r\n2 GB', '', '', '', '', 11000, '3 Hari', '5 GB | 3 Hari'),
(12, 'Axis', 'Bronet 3 Hari\r\n', 'Kuota Utama\r\n5 GB', 'Kuota Local\r\n2 GB', '', '', '', '', 13000, '3 Hari', '7 GB | 3 Hari'),
(13, 'Axis', 'Bronet 3 Hari', 'Kuota Utama\r\n8 GB', 'Kuota Local\r\n2 GB', '', '', '', '', 16500, '3 Hari', '10 GB | 3 Hari'),
(14, 'Axis', 'Owsem 16 GB', 'Kuota Utama\r\n2 GB', '', 'Kuota Video\r\n2 GB\r\n\r\n', 'Kuota Game\r\nUnlimited', 'Kuota Sosmed\r\n2 GB', 'Kuota Malam 00:00-06:00\r\n8 GB', 40900, '30 Hari', '16 GB | 30 Hari'),
(15, 'Axis', 'Owsem 24 GB', 'Kuota Utama\r\n3 GB', '', 'Kuota Video\r\n3 GB', 'Kuota Game\r\nUnlimited', 'Kuota Sosmed\r\n3 GB', 'Kuota Malam 00:00-06:00 :\r\n12 GB', 50900, '30 Hari', '24 GB | 30 Hari'),
(16, 'Axis', 'Owsem 40 GB', 'Kuota Utama\r\n5 GB', '', 'Kuota Video\r\n5 GB', 'Kuota Game\r\nUnlimited', 'Kuota Sosmed\r\n5 GB', 'Kuota Malam 00:00-06:00 :\r\n20 GB', 60900, '30 Hari', '40 GB | 30 Hari\r\n'),
(17, 'Axis', 'Owsem 64 GB', 'Kuota Utama\r\n8 GB', '', 'Kuota Video\r\n8 GB', 'Kuota Game\r\nUnlimited', 'Kuota Sosmed\r\n8 GB', 'Kuota Malam 00:00-06:00\r\n32 GB', 76400, '30 Hari', '64 GB | 30 Hari'),
(18, 'Axis', 'Owsem 120 GB', 'Kuota Utama\r\n15 GB', '', 'Kuota Video\r\n15 GB', 'Kuota Game\r\nUnlimited', 'Kuota Sosmed\r\n15 GB', 'Kuota Malam 00:00-06:00 :\r\n60 GB', 96700, '30 Hari', '120 GB | 30 Hari');

-- --------------------------------------------------------

--
-- Table structure for table `products_paket_indosat`
--

CREATE TABLE `products_paket_indosat` (
  `id` int(5) NOT NULL,
  `Nama_kartu` varchar(288) NOT NULL,
  `Nama_produk` varchar(288) NOT NULL,
  `Kuota_utama` varchar(288) NOT NULL,
  `Kuota_nelpon` varchar(255) NOT NULL,
  `Kuota_malam` varchar(288) NOT NULL,
  `Kuota_aplikasi` varchar(288) NOT NULL,
  `Harga` int(15) NOT NULL,
  `Masa_aktif` varchar(288) NOT NULL,
  `Keterangan` varchar(288) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_paket_indosat`
--

INSERT INTO `products_paket_indosat` (`id`, `Nama_kartu`, `Nama_produk`, `Kuota_utama`, `Kuota_nelpon`, `Kuota_malam`, `Kuota_aplikasi`, `Harga`, `Masa_aktif`, `Keterangan`) VALUES
(1, 'Indosat', 'Freedom Internet ', ' Kuota Utama 3 GB', '', '', '', 20000, '30 Hari', '3 GB | 30 Hari'),
(2, 'Indosat', 'Freedom Internet 5 GB', 'Kuota Utama 5 GB', 'Nelpon ke IM3 dan Tri Sepuasnya\r\n(5,000 Menit)', '', '', 30000, '30 Hari', ' 5 GB | 30 Hari'),
(3, 'Indosat', 'Freedom Internet 12 GB ', 'Kuota Utama 12 GB', 'Nelpon ke IM3 dan Tri Sepuasnya\r\n(5,000 Menit)', '', '', 50000, '30 Hari', ' 12 GB | 30 Hari'),
(4, 'Indosat', 'Freedom Internet 24 GB', 'Kuota Utama 24 GB', '', 'ccccccc', '', 80000, ' 30 Hari', '24 GB | 30 Hari'),
(5, 'Indosat', 'Freedom Internet 50 GB ', 'Kuota Utama 50 GB', 'Nelpon ke IM3 dan Tri Sepuasnya\r\n(5,000 Menit)', '', '', 120000, '30 Hari', '50 GB | 30 Hari'),
(6, 'Indosat', 'Freedom Internet 100 GB', 'Kuota Utama 100 GB', 'Nelpon ke IM3 dan Tri Sepuasnya\r\n(5,000 Menit)', '', '', 150000, ' 30 Hari', '100 GB | 30 Hari'),
(7, 'Indosat', 'Freedom Internet 2 GB', 'Kuota Utama 2 GB', '', '', '', 10000, '5 Hari', '2 GB | 5 Hari'),
(8, 'Indosat', 'Freedom Internet 5 GB', 'Kuota Utama 5 GB', '', '', '', 15000, '5 Hari', '5 GB | 5 Hari'),
(9, 'Indosat', 'Freedom Internet 7 GB', ' Kuota Utama 7 GB', '', '', '', 20000, ' 7 Hari', '7 GB | 7 Hari'),
(10, 'Indosat', 'Freedom Internet 15 GB', 'Kuota Utama 15 GB', '', '', '', 25000, '3 Hari', ' 15 GB | 3 Hari'),
(11, 'Indosat', 'Freedom Internet 100 GB', 'Kuota Utama 100 GB', 'Nelpon ke IM3 dan Tri Sepuasnya\r\n(5,000 Menit)', '', '', 250000, '90 Hari', '100 GB | 90 Hari'),
(12, 'Indosat', 'Freedom Internet 200 GB ', 'Kuota Utama 200 GB', 'Nelpon ke IM3 dan Tri Sepuasnya\r\n(5,000 Menit)', '', '', 450000, ' 180 Hari', '200 GB | 180 Hari'),
(13, 'Indosat', 'Freedom Internet 400 GB', 'Kuota Utama 400 GB', 'Nelpon ke IM3 dan Tri Sepuasnya\r\n(5,000 Menit)', '', '', 850000, '360 Hari', ' 400 GB | 360 Hari'),
(14, 'Indosat', 'Freedom Combo 6 GB & Nelp', 'Kuota Utama 4 GB', 'Telepon 5 Menit', 'Kuota Malam 2 GB\r\n\r\n', '', 31000, ' 30 Hari', '6 GB | 30 Hari'),
(15, 'Indosat', 'Freedom Combo 10 GB & Nelp ', 'Kuota Utama 7 GB', 'Telepon 10 Menit', 'Kuota Malam 3 GB', '', 42000, '30 Hari', '10 GB | 30 Hari'),
(16, 'Indosat', 'Freedom Combo 20 GB & Nelp ', 'Kuota Utama 15 GB', 'Telepon 15 Menit', 'Kuota Malam 5 GB', '', 64000, '30 Hari', '20 GB | 30 Hari'),
(17, 'Indosat', 'Freedom U 10 GB', 'Kuota Utama 2 GB', 'Nelpon ke IM3 dan Tri Sepuasnya\r\n(5,000 Menit) Harga', '', 'Kuota Aplikasi 8 GB', 52000, '30 Hari', '10 GB | 30 Hari'),
(18, 'Indosat', 'Freedom U 20 GB ', 'Kuota Utama 3 GB', 'Sepuasnya Menit/Hari Nelpon Ke Operator Lain', '', 'Kuota Aplikasi 17 GB', 74000, '30 Hari', ' 20 GB | 30 Hari'),
(19, 'Indosat', 'Freedom U 30 GB ', 'Kuota Utama 7 GB', 'Sepuasnya Menit/Hari Nelpon Ke Operator Lain', '', 'Kuota Aplikasi 28 GB', 96000, '30 Hari', '30 GB | 30 Hari');

-- --------------------------------------------------------

--
-- Table structure for table `products_paket_smartfren`
--

CREATE TABLE `products_paket_smartfren` (
  `id` int(5) NOT NULL,
  `Nama_kartu` varchar(288) NOT NULL,
  `Nama_produk` varchar(288) NOT NULL,
  `Kuota_utama` varchar(288) NOT NULL,
  `Kuota_aplikasi` varchar(288) NOT NULL,
  `Kuota_local` varchar(288) NOT NULL,
  `Harga` varchar(15) NOT NULL,
  `Masa_aktif` varchar(288) NOT NULL,
  `Keterangan` varchar(288) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_paket_smartfren`
--

INSERT INTO `products_paket_smartfren` (`id`, `Nama_kartu`, `Nama_produk`, `Kuota_utama`, `Kuota_aplikasi`, `Kuota_local`, `Harga`, `Masa_aktif`, `Keterangan`) VALUES
(1, 'Smartfren', 'Paket Data\r\nKuota 100 GB', 'Kuota Utama 25 GB\r\n', '', 'Kuota Lokal 75 GB\r\n', '100000', '30 Hari', '100 GB | 30 Hari'),
(2, 'Smartfren', 'Paket Data\r\nKuota 200 GB', 'Kuota Utama 60 GB\r\n', '', 'Kuota Lokal 140 GB\r\n', '200000', '30 Hari', '200 GB | 30 Hari'),
(3, 'Smartfren', 'Paket Data\r\nKuota 300 GB', 'Kuota Utama 80 GB\r\n', '', 'Kuota Lokal 220 GB\r\n', '300000', '30 Hari', '300 GB | 30 Hari'),
(4, 'Smartfren', 'Paket Data\r\nKuota 500 GB', 'Kuota Utama 150 GB\r\n', '', 'Kuota Lokal 350 GB\r\n', '500000', '30 Hari', '500 GB | 30 Hari'),
(5, 'Smartfren', 'Paket Data\r\nKuota M', 'Kuota Utama 6 GB\r\n', 'Kuota Aplikasi 5 GB\r\n', 'Kuota Lokal 10 GB\r\n', '42000', '30 Hari', '21 GB | 30 Hari'),
(6, 'Smartfren', 'Paket DataKuota L', 'Kuota Utama 12 GB', 'Kuota Aplikasi 10 GB', 'Kuota Lokal 18 GBaaaaa', '60500', '30 Hari', '40 GB | 30 Hari'),
(7, 'Smartfren', 'Paket Data\r\nKuota 2L', 'Kuota Utama 20 GB\r\n', 'Kuota Aplikasi 10 GB\r\n', 'Kuota Lokal 35 GB\r\n', '90500', '30 Hari', '65 GB | 30 Hari'),
(8, 'Smartfren', 'Paket DataKuota 3L', 'Kuota Utama 32 GB', 'Kuota Aplikasi 15 GB', 'Kuota Lokal 53 GB', '126500', '30 Hari', '47 GB | 30 Hari'),
(9, 'Smartfren', 'Paket Data\r\nKuota 4L', 'Kuota Utama 44 GB\r\n', 'Kuota Aplikasi 15 GB\r\n', 'Kuota Lokal 66 GB\n', '151000', '30 Hari', '125 GB | 30 Hari');

-- --------------------------------------------------------

--
-- Table structure for table `products_paket_telkomsel`
--

CREATE TABLE `products_paket_telkomsel` (
  `id` int(6) NOT NULL,
  `Nama_Kartu` varchar(288) NOT NULL,
  `Nama_produk` varchar(258) NOT NULL,
  `Kuota_Internet` varchar(258) NOT NULL,
  `Kuota_Sosmed` varchar(258) NOT NULL,
  `Kuota_Nelpon` varchar(258) NOT NULL,
  `Kuota_SMS` varchar(258) NOT NULL,
  `Harga` int(20) NOT NULL,
  `Masa_aktif` varchar(258) NOT NULL,
  `Keterangan` varchar(288) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_paket_telkomsel`
--

INSERT INTO `products_paket_telkomsel` (`id`, `Nama_Kartu`, `Nama_produk`, `Kuota_Internet`, `Kuota_Sosmed`, `Kuota_Nelpon`, `Kuota_SMS`, `Harga`, `Masa_aktif`, `Keterangan`) VALUES
(3, 'Telkomsel', 'Combo Sakti 32 GB', 'Internet22 GB', 'Sosmed10 GB', 'Nelpon700 Menit', 'SMS500 sms', 98000, '30 Hari', '32 GB | 30 hari'),
(4, 'Telkomsel', 'Combo Sakti 45 GB', 'Internet30 GB', 'Sosmed15 GB ', 'Nelpon1000 Menit', 'SMS1000 sms', 120000, '30 Hari', '45 GB | 30 hari'),
(5, 'Telkomsel ', 'Internet Malam 5 GB', 'Internet Malam 5 GB', '-', '-', '-', 7000, '3 Hari', '5 GB | 3 hari'),
(6, 'Telkomsel', 'Internet Malam 5 GB', 'Internet Malam 5 GB', '-', '-', '-', 13000, '7 Hari', '5 GB | 7 hari'),
(7, 'Telkomsel ', 'Internet Malam 10 GB', '10 GB | 7 hari', '-', '-', '-', 18000, '7 hari', '10 GB | 7 hari'),
(8, 'Telkomsel', 'Internet Malam 10 GB', 'Internet Malam 10 GB', '-', '-', '-', 20000, '15 hari', '10 GB | 15 hari\r\n'),
(9, 'Telkomsel', 'Internet Malam 8 GB', 'Internet Malam 8 GB', '-', '-', '-', 20000, '30 hari', '8 GB | 30 hari\r\n'),
(10, 'Telkomsel 14 GB', 'Internet Malam 15 GB', '15 GB | 30 hari', '-', '-', '-', 28000, '30 hari', '15 GB | 30 hari'),
(11, 'Telkomsel', 'Internet Spesial 14 GB', 'Internet Spesial 14 GB', '-', '-', '-', 30000, '30 hari\r\n', ''),
(12, 'Telkomsel', 'Internet Spesial 20 GB', 'Internet Spesial 20 GB', '-', '-', '-', 55000, '30 hari', ''),
(13, 'Telkomsel 14 GB', 'Combo Sakti', '12 GB', '2 GB', '500 Menit', '500 SMS', 45000, '30 Hari', '14 GB | 30 Hari');

-- --------------------------------------------------------

--
-- Table structure for table `products_paket_xl`
--

CREATE TABLE `products_paket_xl` (
  `id` int(5) NOT NULL,
  `Nama_kartu` varchar(288) NOT NULL,
  `Nama_produk` varchar(288) NOT NULL,
  `Kuota_utama` varchar(288) NOT NULL,
  `Kuota_aplikasi` varchar(288) NOT NULL,
  `Kuota_area` varchar(288) NOT NULL,
  `Kuota_Nelpon` varchar(288) NOT NULL,
  `Kuota_sosmed` varchar(288) NOT NULL,
  `Kuota_pribadi` varchar(288) NOT NULL,
  `Harga` int(15) NOT NULL,
  `Masa_aktif` varchar(288) NOT NULL,
  `Keterangan` varchar(288) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_paket_xl`
--

INSERT INTO `products_paket_xl` (`id`, `Nama_kartu`, `Nama_produk`, `Kuota_utama`, `Kuota_aplikasi`, `Kuota_area`, `Kuota_Nelpon`, `Kuota_sosmed`, `Kuota_pribadi`, `Harga`, `Masa_aktif`, `Keterangan`) VALUES
(1, 'XLMMMM', 'Xtra Combo Flex S+', 'Kuota Utama 3 GB', 'dddddddddaa', 'Kuota Area 7 GB', 'Telepon Semua Operator 5 Menit', 'WhatsApp,Line 5 GB', ' ccccdd', 32000, '30 Hari', '15 GB | 30 hari'),
(2, 'XL', 'Xtra Combo Flex M\r\n', 'Kuota Utama 5 GB', '', 'Kuota Area 10 GB', 'Telepon Semua Operator 5 Menit', 'WhatsApp,Line 5 GB', '', 43000, '30 Hari', '15 GB | 30 hari'),
(3, 'XL', 'Xtra Combo Flex L', 'Kuota Utama 9 GB', '', 'Kuota Area 18 GB', 'Telepon Semua Operator 5 Menit', 'WhatsApp,Line 5 GB', '', 65000, '30 Hari', '32 GB | 30 hari'),
(4, 'XL', 'Xtra Combo Flex XL', 'Kuota Utama 15 GB', '', 'Kuota Area 30 GB', 'Telepon Semua Operator 5 Menit', 'WhatsApp,Line 5 GB', '', 93000, '30 Hari', '50 GB | 30 hari'),
(5, 'XL', 'Akrab S', 'Kuota Utama 26 GB', '', '', 'Telepon & SMS Ke XL/Axis Unlimited', '', 'Kuota Pribadi 8 GB', 57500, '30 Hari', '34 GB | 30 Hari'),
(6, 'XL', 'Akrab SM', 'Kuota Utama 38 GB', '', '', 'Telepon & SMS Ke XL/Axis Unlimited', '', 'Kuota Pribadi 11 GB', 77500, '30 Hari', '49 GB | 30 Hari'),
(7, 'XL', 'Akrab M', 'Kuota Utama 59 GB', '', '', 'Telepon & SMS Ke XL/Axis Unlimited', '', 'Kuota Pribadi 17 GB', 110000, '30 Hari', '76 GB'),
(8, 'XL', 'Akrab L', 'Kuota Utama 129 GB', '', '', 'Telepon & SMS Ke XL/Axis Unlimited', '', 'Kuota Pribadi 28 GB', 180000, '30 Hari', '157 GB | 30 Hari'),
(9, 'XL', 'Xtra Combo VIP Plus ', 'Kuota Utama 10 GB', '', 'Kuota Area 10 GB', 'Telepon ke Semua Operator 20 Menit', '', '', 71500, '30 Hari', '23 GB | 30 Hari '),
(10, 'XL', 'Xtra Combo VIP Plus', 'Kuota Utama 20 GB', 'Kuota Aplikasi 3 GB', 'Kuota Area 20 GB', 'Telepon ke Semua Operator 30 Menit', '', '', 101000, '30 Hari', '43 GB | 30 Hari'),
(11, 'XL', 'Xtra Combo VIP Plus', 'Kuota Utama 30 GB', 'Kuota Aplikasi 6 GB', 'Kuota Area 24 GB', 'Telepon ke Semua Operator 40 Menit', '', '', 141000, '30 Hari', '60 GB | 30 Hari'),
(12, 'XL', 'Xtra Combo VIP Plus ', 'Kuota Utama 52 GB', 'Kuota Aplikasi 9 GB', 'Kuota Area 40 GB', 'Telepon ke Semua Operator 60 Menit', '', '', 192000, '30 Hari', '101 GB | 30 Hari'),
(13, 'XL', 'Xtra Combo Mini', 'Kuota Utama 1 GB', 'Youtube 0.5 GB', 'Kuota Area 2.5 GB', '', '', '', 9900, '7 Hari', '4 GB | 7 Hari'),
(14, 'XL', 'Xtra Combo Mini', 'Kuota Utama 1.5 GB', 'Youtube 1 GB', 'Kuota Area 4 GB', '', '', '', 14900, '7 Hari', '6.5 GB | 7 Hari'),
(15, 'XL', 'Xtra Combo Mini', 'Kuota Utama 2 GB', 'Youtube 2 GB', 'Kuota Area 6 GB', '', '', '', 18900, '7 Hari', '10 GB | 7 Hari'),
(16, 'XL', 'Xtra Combo Mini', 'Kuota Utama 3 GB', 'Youtube 3 GB', 'Kuota Area 8.5 GB', '', '', '', 24900, '7 Hari', '14.5 GB | 7 Hari');

-- --------------------------------------------------------

--
-- Table structure for table `products_pulsa`
--

CREATE TABLE `products_pulsa` (
  `id` int(5) NOT NULL,
  `Jenis_pulsa` varchar(288) NOT NULL,
  `harga` varchar(288) NOT NULL,
  `image` varchar(288) NOT NULL,
  `harga_asli` varchar(288) NOT NULL,
  `Keterangan` varchar(288) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_pulsa`
--

INSERT INTO `products_pulsa` (`id`, `Jenis_pulsa`, `harga`, `image`, `harga_asli`, `Keterangan`) VALUES
(2, 'Pulsa Telkomsel 2000 MM', '8000', '', '11000', 'hanya'),
(3, 'Pulsa Indosat 8000', '10000', '', '15000', 'hanya'),
(5, 'Pulsa Axis 50000', '55000', '', '60000', 'hanya'),
(6, 'Pulsa Indosat 40000', '45000', '', '60000', 'hanya'),
(7, 'Pulsa XL 20000', '22000', '', '25000', 'hanya'),
(9, 'Telkomsel 5000', '5000', '', '6000', ''),
(10, 'Telkomsel', '10000', '', 'Rp. 11500', ''),
(11, 'Telkomsel', '15000', '', 'Rp. 16500', ''),
(12, 'Telkomsel', '20000', '', 'Rp. 21000', ''),
(13, 'Telkomsel', '25000', '', 'Rp. 25000', ''),
(15, 'Telkomsel', '40000', '', 'Rp. 40000', ''),
(16, 'Telkomsel', '50000', '', 'Rp 50000', ''),
(17, 'Telkomsel', '60000', '', 'Rp. 60000', ''),
(18, 'Telkomsel', '75000', '', 'Rp. 75000', ''),
(19, 'Telkomsel', '80000', '', 'Rp. 80000', ''),
(20, 'Telkomsel', '100000', '', 'Rp. 100000', ''),
(21, 'Axis', '5000', '', 'Rp. 6050', ''),
(22, 'Axis', '10000', '', 'Rp. 11099', ''),
(23, 'Axis', '15000', '', 'Rp. 15150', ''),
(24, 'Axis ', '25000', '', 'Rp. 25250', ''),
(25, 'Axis ', '30000', '', 'Rp 30250', ''),
(26, 'Axis', '50000', '', 'Rp 50000', ''),
(27, 'Axis', '100000', '', '99750', ''),
(28, 'Axis', '20000', '', 'Rp 198900', ''),
(29, 'Axis', '300000', '', 'Rp. 297900', ''),
(30, 'Axis', '500.000', '', 'Rp 496.500', ''),
(31, 'Axis', '1.000.000', '', 'Rp 995.000', ''),
(32, 'Indosat', '5000', '', 'Rp. 6450', ''),
(33, 'Indosat', '12000', '', 'Rp. 12200', ''),
(34, 'Indosat', '15000', '', 'Rp. 15100', ''),
(35, 'Indosat', '20000', '', 'Rp. 20250', ''),
(36, 'Indosat', '25000', '', 'Rp 25000', ''),
(37, 'Indosat', '30000', '', 'Rp. 29995', ''),
(38, 'Indosat', '40000', '', 'Rp 39900', ''),
(39, 'Indosat', '80000', '', 'Rp 79500', ''),
(40, 'Indosat', '100000', '', 'Rp. 98750', ''),
(41, 'Indosat', '125000', '', 'Rp 124700', ''),
(42, 'Indosat', '150000', '', 'Rp 147700', ''),
(43, 'Indosat', '150000', '', 'Rp 147700', ''),
(44, 'Indosat', '200000', '', 'Rp. 191100', ''),
(45, 'Indosat', '10000', '', 'Rp. 11250', ''),
(46, 'XL', '5000', '', 'Rp. 6000', ''),
(47, 'XL', '10000', '', 'Rp. 11200', ''),
(48, 'XL', '15000', '', 'Rp. 15100', ''),
(49, 'XL', '25000', '', 'Rp. 24900', ''),
(50, 'XL', '30000', '', 'Rp. 29990', ''),
(51, 'XL', '50000', '', 'Rp.49700', ''),
(52, 'XL', '100000', '', 'Rp. 99500', ''),
(53, 'XL', '150000', '', 'Rp. 148000', ''),
(54, 'XL', '200000', '', 'Rp 198600', ''),
(55, 'XL', '300000', '', 'Rp. 297990', ''),
(56, 'XL', '500000', '', 'Rp. 497500', ''),
(57, 'XL', '1000000', '', 'Rp 995000', ''),
(58, 'By.U', '5000', '', 'Rp 6000', ''),
(59, 'By.U', '10000', '', 'Rp 11500', ''),
(60, 'By.U', '15000', '', 'Rp. 16500', ''),
(61, 'By.U', '20000', '', 'Rp 21000', ''),
(62, 'By.U', '25000', '', '25000', ''),
(63, 'By.U', '30000', '', 'Rp. 30000', ''),
(64, 'By.U', '40000', '', 'Rp. 40000', ''),
(65, 'By.U', '50000', '', 'Rp. 50000', ''),
(66, 'By.U', '60000', '', 'Rp 60000', ''),
(67, 'By.U', '75000', '', 'Rp. 75000', ''),
(68, 'By.U', '80000', '', 'Rp. 80000', ''),
(69, 'By.U', '100000', '', 'Rp. 100000', ''),
(70, 'Smartfren', '5000', '', 'Rp. 5500', ''),
(71, 'Smartfren', '10000', '', 'Rp 10490', ''),
(72, 'Smartfren', '20000', '', 'Rp. 19900', ''),
(73, 'Smartfren', '25000', '', 'Rp. 24950', ''),
(74, 'Smartfren', '30000', '', 'Rp 30000', ''),
(75, 'Smartfren', '50000', '', 'Rp. 49750', ''),
(76, 'Smartfren', '60000', '', 'Rp. 59600', ''),
(77, 'Smartfren', '100000', '', 'Rp. 98000', ''),
(78, 'Smartfren', '150000', '', 'Rp. 148000', ''),
(79, 'Smartfren', '200000', '', 'Rp. 198000', ''),
(80, 'Smartfren', '250000', '', 'Rp. 247700', ''),
(81, 'Smartfren', '300000', '', 'Rp. 297000', ''),
(82, 'Smartfren', '500000', '', 'Rp. 495000', ''),
(83, 'Smartfren', '1000000', '', 'Rp. 990000', ''),
(85, 'Tri 5000', '60000', '', '7000', ''),
(86, '', '', '', '', ''),
(87, '', '', '', '', ''),
(88, '', '', '', '', ''),
(89, '', '', '', '', ''),
(90, '', '', '', '', ''),
(91, '', '', '', '', ''),
(92, '', '', '', '', ''),
(93, '', '', '', '', ''),
(94, '', '', '', '', ''),
(95, '', '', '', '', ''),
(96, '', '', '', '', ''),
(97, '', '', '', '', ''),
(98, '', '', '', '', ''),
(99, '', '', '', '', ''),
(100, '', '', '', '', ''),
(101, '', '', '', '', ''),
(102, '', '', '', '', ''),
(103, '', '', '', '', ''),
(104, '', '', '', '', ''),
(105, '', '', '', '', ''),
(106, '', '', '', '', ''),
(107, '', '', '', '', ''),
(108, '', '', '', '', ''),
(109, '', '', '', '', ''),
(110, '', '', '', '', ''),
(111, '', '', '', '', ''),
(112, '', '', '', '', ''),
(113, '', '', '', '', ''),
(114, '', '', '', '', ''),
(115, '', '', '', '', ''),
(116, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `id_penjualan` int(5) DEFAULT NULL,
  `Tanggal_transaksi` date NOT NULL,
  `Waktu_transaksi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `No_Telepon` varchar(50) NOT NULL,
  `level` varchar(288) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `No_Telepon`, `level`) VALUES
(35, 'admin', '123', 'admin@admin.com', '093848581998', 'admin'),
(36, 'Dimas', '123', 'Dimas@gmail.com', '109293993', 'pelanggan'),
(37, 'Febri Fanisa', '20114', 'Febri2gmail,com', '099w8e8e', 'pelanggan'),
(38, 'Nora Syuhada', '20114', 'Nora@gmail.com', '9w9e9w9288', 'pelanggan'),
(39, 'Teuku', '20114', 'Teuku@gmail.com', '19299292', 'pelanggan'),
(42, 'abil', '123', 'abil@bodat.com', '01ioo1o', 'pelanggan'),
(45, 'Abil', '', 'abil@bodat.com', '083999292', 'pemain'),
(46, 'aldi', '20114', 'aldi@gmail.com', '08838892', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `penjualan` (`id`),
  ADD KEY `refpentelkom` (`id_paket_telkomsel`),
  ADD KEY `refpenaxis` (`id_paket_axis`),
  ADD KEY `refpenindo` (`id_paket_indosat`),
  ADD KEY `refpenxl` (`id_paket_xl`),
  ADD KEY `refpensmart` (`id_paket_smartfren`);

--
-- Indexes for table `products_paket_axis`
--
ALTER TABLE `products_paket_axis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_paket_indosat`
--
ALTER TABLE `products_paket_indosat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_paket_smartfren`
--
ALTER TABLE `products_paket_smartfren`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_paket_telkomsel`
--
ALTER TABLE `products_paket_telkomsel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_paket_xl`
--
ALTER TABLE `products_paket_xl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_pulsa`
--
ALTER TABLE `products_pulsa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `refpen` (`id_penjualan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `products_paket_axis`
--
ALTER TABLE `products_paket_axis`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products_paket_indosat`
--
ALTER TABLE `products_paket_indosat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products_paket_smartfren`
--
ALTER TABLE `products_paket_smartfren`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products_paket_telkomsel`
--
ALTER TABLE `products_paket_telkomsel`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products_paket_xl`
--
ALTER TABLE `products_paket_xl`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products_pulsa`
--
ALTER TABLE `products_pulsa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan` FOREIGN KEY (`id`) REFERENCES `products_pulsa` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `refpenaxis` FOREIGN KEY (`id_paket_axis`) REFERENCES `products_paket_axis` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `refpenindo` FOREIGN KEY (`id_paket_indosat`) REFERENCES `products_paket_indosat` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `refpensmart` FOREIGN KEY (`id_paket_smartfren`) REFERENCES `products_paket_smartfren` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `refpentelkom` FOREIGN KEY (`id_paket_telkomsel`) REFERENCES `products_paket_telkomsel` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `refpenxl` FOREIGN KEY (`id_paket_xl`) REFERENCES `products_paket_xl` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `refpen` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualan` (`id_penjualan`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
