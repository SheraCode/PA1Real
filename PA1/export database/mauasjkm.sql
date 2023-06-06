-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Mar 23, 2023 at 03:34 PM
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
-- Database: `mauasjkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `nama_lengkap` varchar(120) NOT NULL,
  `alamat_email` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `role`, `nama_lengkap`, `alamat_email`, `alamat`) VALUES
(1, 'Johannes', 'oan123', 1, 'Johannes Bastian Jasa Sipayung', 'johannesssipayung27@gmail.com', 'Perumahan Sempurna Garden'),
(2, 'oan', 'oan123', 1, '', '', ''),
(3, 'Jeremia', 'Jeremia123', 1, 'Johannes Bastian Jasa Sipayung', 'johannesssipayung27@gmail.com', 'Porsea'),
(4, 'bastian', 'bastian123', 1, '', '', ''),
(5, 'Volder', 'volder123', 1, 'Samuel Volder', 'SamDer@gmail.com', 'Jalan Besar Tanah Jawa No 56, Pematang Siantar'),
(6, 'Iphone', 'iphone123', 1, 'Iphone Tumbler', 'iptumbler@gmail.com', 'Kalimantan Utara'),
(9, 'William', 'william123', 1, 'William Panjaitan', 'willian@gmail.com', 'Balige'),
(10, 'mauasjkm\r\n', 'mauasjkm123', 1, 'Mauas JKM', 'Mauas@gmail.com', 'Parapat'),
(11, 'RipCurl', 'ripcurl123', 1, 'RipCurl Nababan', 'rpcurl@gmail.com', 'Sibolangit, Deli Serdang , Sumatera Utara'),
(12, 'sampol', 'sampol123', 1, 'Samuel Volder Naibaho', 'sampol@gmail.com', 'Jln Tanah Jawa No.129 ,Pematang Siantar'),
(13, 'David', 'david123', 1, 'David Kristian Silalahi', 'johannesssipayung27@gmail.com', 'Balige'),
(14, 'logitech', 'logi123', 1, 'bastian', 'johannesssipayung27@gmail.com', 'Medan');

-- --------------------------------------------------------

--
-- Table structure for table `akun_admin`
--

CREATE TABLE `akun_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun_admin`
--

INSERT INTO `akun_admin` (`id`, `username`, `password`) VALUES
(1, 'Jeremia', 'jeremia123');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `quantity` varchar(120) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_pemesanan` varchar(120) NOT NULL,
  `nama_produk` int(11) NOT NULL,
  `status_bayar` varchar(120) NOT NULL DEFAULT 'Bayar Sekarang',
  `bukti_bayar` varchar(150) DEFAULT NULL,
  `akun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `username`, `quantity`, `alamat`, `tanggal_pemesanan`, `nama_produk`, `status_bayar`, `bukti_bayar`, `akun_id`) VALUES
(2, 'oan', '5', 'Perumahan Sempurna Garden', '17 March 2023', 1, 'Pesanan Dibatalkan', 'bukti.jpg', 0),
(5, 'bastian', '5', 'Institut Teknologi Del', '18 March 2023', 1, 'Pesanan Dibatalkan', 'bukti.jpg', 0),
(7, 'Volder', '5', 'Institut Teknologi Del', '18 March 2023', 1, 'Pesanan Dibatalkan', NULL, 0),
(8, 'Iphone', '4', 'Jalan Melinjo Gang Horas No 12, Kabupaten  Nunukan,Kalimantan Utara', '18 March 2023', 1, 'Pesanan Dibatalkan', NULL, 0),
(9, '', '', '', '18 March 2023', 1, 'Pesanan Dibatalkan', NULL, 0),
(10, '', '4', 'Jalan Melinjo Gang Horas No 12, Kabupaten  Nunukan, Kalimantan Utara', '18 March 2023', 1, 'Pesanan Dibatalkan', NULL, 0),
(11, 'Iphone', '4', 'Jalan Melinjo Gang Horas No 12, Kabupaten  Nunukan, Kalimantan Utara', '18 March 2023', 1, 'Pesanan Dibatalkan', NULL, 0),
(12, '<body style=></body>', '2', 'asd', '18 March 2023', 1, 'Pesanan Dibatalkan', NULL, 0),
(13, '<body style=\"background-color:red;\">hahahaha</body>', '2', 'asd', '18 March 2023', 1, 'Pesanan Dibatalkan', NULL, 0),
(14, 'samuel', '2', 'jakarta\r\n', '18 March 2023', 1, 'Pesanan Dibatalkan', NULL, 0),
(15, '<body style=\"background-color:red;\">tes</body>', '2', '<body style=\"background-color:red;\">tes</body>', '18 March 2023', 1, 'Pesanan Dibatalkan', NULL, 0),
(16, 'William', '4', 'Tambunan', '18 March 2023', 1, 'Pesanan Dibatalkan', NULL, 0),
(17, 'mauasjkm', '3', 'Porsea, Toba', '18 March 2023', 1, 'Pesanan Dibatalkan', NULL, 0),
(18, '', '', '', '18 March 2023', 2, 'Pesanan Dibatalkan', NULL, 0),
(19, 'mauasjkm', '4', 'Laguboti', '18 March 2023', 2, 'Pesanan Dibatalkan', NULL, 0),
(20, '', '8', 'Parapat', '18 March 2023', 2, 'Pesanan Dibatalkan', NULL, 0),
(21, 'mauasjkm', '10', 'Parapat', '18 March 2023', 2, 'Pesanan Dibatalkan', NULL, 0),
(22, 'mauasjkm', '3', 'Balige', '18 March 2023', 3, 'Pesanan Dibatalkan', NULL, 0),
(23, 'mauasjkm', '2', 'Tebing Tinggi', '18 March 2023', 3, 'Pesanan Dibatalkan', NULL, 0),
(24, 'RipCurl', '3', 'Jalan Besar Sembahe-Berastagi  No. 126, Deli Serdang , Sumatera Utara', '18 March 2023', 1, 'Pesanan Dibatalkan', 'background_register.jpg', 0),
(25, 'Johannes', '4', 'Perumahan Sempurna Garden', '18 March 2023', 1, 'Pesanan Dibatalkan', NULL, 0),
(26, 'RipCurl', '4', 'Perumahan Sempurna Garden No 14 Medan ,Kecamatan Medan Kota ,Kota Medan, Sumatera Utara', '19 March 2023', 2, 'Pesanan Dibatalkan', 'background_register.jpg', 0),
(27, 'RipCurl', '4', 'Jalan Sisisngamangaraja nomor 126 ,Kecamatan Medan Kota ,Kota Medan ,Sumatera Utara', '19 March 2023', 3, 'Pesanan Dibatalkan', 'sambalbareman.jpg', 0),
(28, 'RipCurl', '3', 'Medan', '19 March 2023', 1, 'Pesanan Dibatalkan', 'background_register.jpg', 0),
(29, 'RipCurl', '2', 'Menteng 3 ,Gang sekolah ,Kecamatan Medan Denai ,Kota Medan .Sumatera Utara', '19 March 2023', 2, 'Pesanan Dibatalkan', 'cookieslogin.jpeg', 0),
(30, 'RipCurl', '3', 'Institut Teknologi Del ,Desa Sitoluama ,Laguboti ,Kabupaten Toba Samosir ,Sumatera Utara', '19 March 2023', 3, 'Pesanan Dibatalkan', 'sambalbareman.jpeg', 0),
(31, 'RipCurl', '2', 'Institut Teknologi Del', '19 March 2023', 1, 'Pesanan Dibatalkan', 'UlosMauasMadu1.jpg', 0),
(32, 'RipCurl', '2', 'Institut Teknologi Del', '20 March 2023', 1, 'Pesanan Dibatalkan', 'simbol-centang-png.png', 0),
(33, 'RipCurl', '2', 'Porsea', '20 March 2023', 1, 'Pesanan Dibatalkan', 'CV_Johannes Sipayung.png', 0),
(34, 'Jeremia', '3', 'Jl besar porsea No 12', '20 March 2023', 1, 'Pesanan Dibatalkan', 'background_register.jpg', 0),
(35, 'Jeremia', '2', 'Medan', '20 March 2023', 1, 'Pesanan Dibatalkan', 'cookies.jpeg', 0),
(36, 'sampol', '2', 'Medan', '20 March 2023', 1, 'Pesanan Dibatalkan', NULL, 0),
(37, 'RipCurl', '10', 'Perumahan Sempurna Garden', '21 March 2023', 2, 'Pesanan Dibatalkan', NULL, 0),
(38, 'RipCurl', '4', 'Medan', '21 March 2023', 1, 'Pesanan Dibatalkan', 'CV_Johannes Sipayung.png', 0),
(39, 'Jeremia', '2', 'Medan', '21 March 2023', 1, 'Pesanan Dibatalkan', 'CV_Johannes Sipayung.png', 0),
(40, 'Jeremia', '3', 'medan', '21 March 2023', 1, 'Pesanan Dibatalkan', NULL, 0),
(41, 'RipCurl', '2', 'Medan', '22 March 2023', 1, 'Pesanan Dibatalkan', '', 11),
(42, 'Johannes', '3', 'Medan', '22 March 2023', 1, 'Pesanan Dibatalkan', '', 1),
(43, 'Johannes', '2', 'Medan', '22 March 2023', 1, 'Pesanan Dibatalkan', '', 1),
(44, 'Johannes', '2', 'Medan', '22 March 2023', 1, 'Pesanan Dibatalkan', '', 1),
(45, 'Johannes', '3', 'Medan', '22 March 2023', 1, 'Pesanan Dibatalkan', '', 1),
(46, 'Johannes', '2', 'Medan', '22 March 2023', 1, 'Pesanan Dibatalkan', '', 1),
(47, 'Johannes', '3', 'Medan', '22 March 2023', 1, 'Pesanan Dibatalkan', '', 1),
(48, 'RipCurl', '2', 'Medan', '22 March 2023', 1, 'Pesanan Dibatalkan', '', 11),
(49, 'David', '2', 'Balige', '22 March 2023', 1, 'Pesanan Dibatalkan', '', 13),
(50, 'David', '2', 'Balige', '22 March 2023', 1, 'Pesanan Dibatalkan', '', 13),
(51, 'David', '2', 'Medan', '22 March 2023', 1, 'Pesanan Dibatalkan', '', 13),
(52, 'David', '3', 'Medan', '22 March 2023', 1, 'Pesanan Dibatalkan', '', 13),
(53, 'David', '2', 'Medan', '22 March 2023', 1, 'Pesanan Dibatalkan', '', 13),
(54, 'David', '3', 'Medan', '22 March 2023', 1, 'Pesanan Dibatalkan', '', 13),
(55, 'David', '2', 'Medan', '22 March 2023', 1, 'Pesanan Dibatalkan', '', 13);

-- --------------------------------------------------------

--
-- Table structure for table `checkout_produk`
--

CREATE TABLE `checkout_produk` (
  `id_checkout` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `quantity` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_pemesanan` varchar(120) NOT NULL,
  `nama_produk` int(11) NOT NULL,
  `status_bayar` varchar(120) NOT NULL DEFAULT 'Bayar Sekarang',
  `bukti_bayar` varchar(160) NOT NULL,
  `akun_id` int(11) NOT NULL,
  `Pembatalan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout_produk`
--

INSERT INTO `checkout_produk` (`id_checkout`, `username`, `quantity`, `alamat`, `tanggal_pemesanan`, `nama_produk`, `status_bayar`, `bukti_bayar`, `akun_id`, `Pembatalan`) VALUES
(26, 'Johannes', 2, 'Medan', '23 March 2023', 1, 'Pesanan Dibatalkan', 'Sage Glod Brush Stroke Watercolor A4 Blank Page Border.png', 1, 'Tidak Sesuai\r\n'),
(27, 'Johannes', 3, 'Porsea', '23 March 2023', 1, 'Pesanan Dibatalkan', 'CV_Johannes Sipayung.png', 1, 'Tidak Sesuai\r\n'),
(28, 'Johannes', 2, 'Medan', '23 March 2023', 2, 'Pesanan Dibatalkan', 'background_login.jpeg', 1, 'Tidak Sesuai\r\n'),
(29, 'Johannes', 2, 'IT Del', '23 March 2023', 1, 'Pesanan Dibatalkan', 'background_register.jpg', 1, 'Tidak Sesuai\r\n'),
(30, 'logitech', 5, 'Medan', '23 March 2023', 1, 'Pesanan Dibatalkan', 'madulogin.jpeg', 14, 'Tidak Sesuai\r\n'),
(31, 'logitech', 4, 'Balige', '23 March 2023', 1, 'Pesanan Dibatalkan', 'MauasMadu.jpeg', 14, 'Tidak Sesuai\r\n'),
(32, 'logitech', 12, 'Medan', '23 March 2023', 2, 'Pesanan Dibatalkan', 'cookieslogin.jpeg', 14, 'Tidak Sesuai\r\n'),
(33, 'logitech', 12, 'Medan', '23 March 2023', 1, 'Pesanan Dibatalkan', 'background_register.jpg', 14, 'Tidak Sesuai\r\n'),
(34, 'logitech', 2, 'Medan', '23 March 2023', 1, 'Pesanan Dibatalkan', 'background_register.jpg', 14, 'Tidak Sesuai\r\n'),
(35, 'logitech', 3, 'Medan', '23 March 2023', 1, 'Pesanan Dibatalkan', 'background_register.jpg', 14, 'Tidak Sesuai\r\n'),
(36, 'logitech', 3, 'Medan', '23 March 2023', 1, 'Pesanan Dibatalkan', 'background_register.jpg', 14, 'TIDAK SESUAI PEMBAYARANNYA'),
(37, 'logitech', 3, 'Medan', '23 March 2023', 1, 'Pesanan Dibatalkan', 'background_register.jpg', 14, 'TIDAK SESUAI'),
(38, 'logitech', 3, 'MEdan', '23 March 2023', 1, 'Terkonfirmasi', 'background_register.jpg', 14, NULL),
(39, 'logitech', 12, 'MEDAN', '23 March 2023', 1, 'Pesanan Dibatalkan', 'background_login.jpeg', 14, 'PEMBATALAN PRODUK'),
(40, 'logitech', 3, 'MEDAN', '23 March 2023', 2, 'Terkonfirmasi', 'background_register.jpg', 14, NULL),
(41, 'logitech', 2, 'INSTITUT TEKNOLOGI DEL', '23 March 2023', 2, 'Pesanan Dibatalkan', 'cookies.jpeg', 14, 'Pembayaran Produk Cookies yang anda beli tidak sesuai dengan yang sudah ditentukan'),
(42, 'logitech', 2, 'MEDAN', '23 March 2023', 2, 'Terkonfirmasi', 'background_register.jpg', 14, NULL),
(43, 'logitech', 3, 'Medan', '23 March 2023', 3, 'Pesanan Dibatalkan', 'background_register.jpg', 14, 'Pembayaran Sambal Teri Andaliman tidak sesuai'),
(44, 'logitech', 2, 'Medan', '23 March 2023', 3, 'Pesanan Dibatalkan', 'pesanandelivery.png', 14, 'TIDAK SESUAI'),
(45, 'logitech', 3, 'Medan', '23 March 2023', 3, 'Terkonfirmasi', 'CookiesBanyak.jpeg', 14, NULL),
(46, 'logitech', 3, 'Medan', '23 March 2023', 1, 'Pesanan Dibatalkan', 'bankbri.png', 14, 'Produk Madu yang anda pesan tidak dapat di proses dikarenakan pembayaran yang anda lakukan tidak sesuai.'),
(47, 'logitech', 3, 'Medan', '23 March 2023', 1, 'Terkonfirmasi', 'IRTMadu.png', 14, NULL),
(48, 'logitech', 2, 'Medan', '23 March 2023', 2, 'Pesanan Dibatalkan', 'bca.png', 14, 'Produk Cookies yang anda pesan tidak dapat di proses dikarenakan pembayaran yang anda lakukan tidak sesuai.'),
(49, 'logitech', 2, 'Medan', '23 March 2023', 2, 'Terkonfirmasi', 'IzinCookies.png', 14, NULL),
(50, 'logitech', 2, 'Balige', '23 March 2023', 3, 'Pesanan Dibatalkan', 'mandiri.png', 14, 'Produk Sambal Teri Andaliman yang anda pesan tidak dapat di proses dikarenakan pembayaran yang anda lakukan tidak sesuai.'),
(51, 'logitech', 2, 'Parapat', '23 March 2023', 3, 'Terkonfirmasi', 'IRTSambal.png', 14, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_ulasan` int(11) DEFAULT NULL,
  `urutan` int(11) NOT NULL,
  `review` text DEFAULT NULL,
  `akun_id` int(11) DEFAULT NULL,
  `picture` varchar(120) NOT NULL,
  `username` varchar(120) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT 'MaduMauas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_ulasan`, `urutan`, `review`, `akun_id`, `picture`, `username`, `nama_produk`) VALUES
(11, 18, 'Produk Madu Mauas sangat memberikan dampak yang baik bagi manusia dikarenakan madu ini berasal dari madu hutan asli sehingga sangat baik di konsumsi oleh tubuh dan tentunya dikarenakan produk olahan ini dikemas dengan menggunakan toples yang terbuat dari kaca sehingga produk ini tetap higenis dan memberikan finishing produk yang elegan. ', 11, 'background_register.jpg', 'RipCurl', 'MaduMauas'),
(11, 19, 'Produk Cookies ini sangat aman bagi tubuh manusia dikarenakan terbuat dari bahan pemanis yang alami yaitu dari Madu sehingga memberikan dampak yang sangat baik terhadap  kesehatan tubuh bagi yang mengkonsumsi nya.', 11, 'background_login.jpeg', 'RipCurl', 'cookies'),
(11, 20, 'Sambal terbuat dari produk  olahan andaliman dan dimasak dengan suhu yang optimal serta dikarenakan sambal ini memakai bahan yang alami sehingga sambal ini mempunyai masa EXP yang lama.', 11, 'SambalTEMAN1.jpeg', 'RipCurl', 'teman'),
(11, 21, 'Produk Cookies ini sangat aman bagi tubuh manusia dikarenakan terbuat dari bahan pemanis yang alami yaitu dari Madu sehingga memberikan dampak yang sangat baik terhadap kesehatan tubuh bagi yang mengkonsumsi nya.', 11, 'cookieslogin.jpeg', 'RipCurl', 'cookies'),
(11, 22, 'Cookies sangat memberika citra rasa ketika memakannya dan cookies ini sangat baik di konsumsi dikarenakan terbuat dari bahan pemanis alami yaitu madu sehingga cookies ini sangat aman untuk tubuh.', 11, 'cookieslogin.jpeg', '', 'cookies'),
(3, 23, 'Bagus', 3, 'background_register.jpg', 'RipCurl', 'MaduMauas'),
(11, 24, 'Bagus dan sangat recomended tentunya', 11, 'background_register.jpg', 'RipCurl', 'MaduMauas'),
(1, 25, 'Bagus', 1, 'background_register.jpg', 'RipCurl', 'MaduMauas'),
(14, 26, 'Bagus', 14, 'MaduMauasJKM.jpeg', 'RipCurl', 'MaduMauas');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `pertanyaan`, `id_produk`, `id_user`, `jawaban`) VALUES
(10, 'Apakah Produk ini dapat dikirimkan ke Daerah Pulau Jawa?', 1, 12, 'Hai Kakkk, Produk ini dapat dikirimkan ke seluruh Indonesia yaa, jadi silahkan di Order ya kakak :)\r\n'),
(11, 'Apakah Produk ini dapat diantar ke alamat saya yang ada di daerah porsea sekitarnya?', 2, 12, 'Haloo kakak, Produk olahan UMKM Mauas JKM bisa dikirim langsung dan COD dengan radius maksimum 5KM dari Kecamatan Siantar Naurmonda ,Kabupaten Tobasa ,Sumatera Utara'),
(12, 'Apakah Produk ini dapat disimpan dalam jangkauan waktu yang lama?', 3, 12, ''),
(13, 'Apakah Madu ini memang madu yang berasal dari hutan/lebah Liar?', 1, 11, ''),
(14, 'Apakah produk ini bisa dikirimkan ke Medan?', 2, 11, ''),
(15, 'Apakah produk ini tersedia?', 1, 11, ''),
(16, 'Apakah produk ini tersedia?', 1, 11, ''),
(17, 'Apakah produk Ini Bisa dikirim Ke pulau Jawa', 1, 14, 'Bisa Kak');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`) VALUES
(1, 'Madu Mauas'),
(2, 'Cookies Mauas\r\n'),
(3, 'Sambal Teri Andaliman');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(11) NOT NULL,
  `nama_lengkap` varchar(120) NOT NULL,
  `alamat_email` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='1';

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `nama_lengkap`, `alamat_email`, `alamat`, `id_akun`) VALUES
(2, 'bastian', 'iohoh@gmail', 'medan', 2),
(4, 'Johannes Bastian Jasa Sipayung', 'johannesssipayung27@gmail.com', 'Perumahan Sempurna Garden', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `akun_admin`
--
ALTER TABLE `akun_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`),
  ADD KEY `nama_produk` (`nama_produk`);

--
-- Indexes for table `checkout_produk`
--
ALTER TABLE `checkout_produk`
  ADD PRIMARY KEY (`id_checkout`),
  ADD KEY `akun_id` (`akun_id`),
  ADD KEY `nama_produk` (`nama_produk`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`urutan`,`picture`),
  ADD KEY `akun_id` (`akun_id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_akun` (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`),
  ADD KEY `id_akun` (`id_akun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `akun_admin`
--
ALTER TABLE `akun_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `checkout_produk`
--
ALTER TABLE `checkout_produk`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `urutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`nama_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `checkout_produk`
--
ALTER TABLE `checkout_produk`
  ADD CONSTRAINT `checkout_produk_ibfk_1` FOREIGN KEY (`akun_id`) REFERENCES `akun` (`id_akun`),
  ADD CONSTRAINT `checkout_produk_ibfk_2` FOREIGN KEY (`nama_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`akun_id`) REFERENCES `akun` (`id_akun`);

--
-- Constraints for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `pertanyaan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `pertanyaan_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_akun`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
