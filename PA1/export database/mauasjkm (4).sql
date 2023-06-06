-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Apr 19, 2023 at 03:33 PM
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
  `alamat` varchar(120) NOT NULL,
  `foto` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `role`, `nama_lengkap`, `alamat_email`, `alamat`, `foto`) VALUES
(1, 'Johannes', 'oan123', 1, 'Johannes Sipayung', 'johannesssipayung27@gmail.com', 'Medan', ''),
(2, 'oan', 'oan123', 1, '', '', '', ''),
(3, 'Jeremia', 'Jeremia123', 1, 'Johannes Bastian Jasa Sipayung', 'johannesssipayung27@gmail.com', 'Porsea', ''),
(4, 'bastian', 'bastian123', 1, '', '', '', ''),
(5, 'Volder', 'volder123', 1, 'Samuel Volder', 'SamDer@gmail.com', 'Jalan Besar Tanah Jawa No 56, Pematang Siantar', ''),
(6, 'Iphone', 'iphone123', 1, 'Johannes Bastian Jasa Sipayung', 'johannesssipayung27@gmail.com', 'Medan', ''),
(9, 'William', 'william123', 1, 'William Panjaitan', 'willian@gmail.com', 'Balige', ''),
(10, 'mauasjkm\r\n', 'mauasjkm123', 1, 'Mauas JKM', 'Mauas@gmail.com', 'Parapat', ''),
(11, 'RipCurl', 'ripcurl123', 1, 'RipCurl Nababan', 'rpcurl@gmail.com', 'Sibolangit, Deli Serdang , Sumatera Utara', ''),
(12, 'sampol', 'sampol123', 1, 'Samuel Volder Naibaho', 'sampol@gmail.com', 'Jln Tanah Jawa No.129 ,Pematang Siantar', ''),
(13, 'David', 'david123', 1, 'David Kristian Silalahi', 'johannesssipayung27@gmail.com', 'Balige', ''),
(14, 'logitech', 'logi123', 1, 'bastian', 'johannesssipayung27@gmail.com', 'Medan', ''),
(15, '', '', 1, '', '', '', ''),
(16, 'Jasa', 'jasa123', 1, 'Jasa Bastian Sipayung', 'jasa@gmail.com', 'Medan', '54D08E94-801B-42AC-810C-AE4B846058DE.jpeg');

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
(1, 'Jeremia', 'jeremia123'),
(2, 'oan', 'oan123'),
(3, 'Johannes', 'oan123'),
(4, '', '');

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
(79, 'Jasa', 2, 'Medan', '01 April 2023', 1, 'Pesanan Selesai', 'WhatsApp Image 2023-03-28 at 08.42.09 (1).jpeg', 16, NULL),
(80, 'Jasa', 2, 'Medan', '01 April 2023', 2, 'Pesanan Selesai', '2958C49C-78EC-4170-B395-E957C2F08CC6.jpeg', 16, NULL),
(81, 'Jasa', 2, 'Medan', '01 April 2023', 1, 'Pesanan Selesai', 'image.png', 16, NULL),
(82, 'Jasa', 1, 'Medan', '01 April 2023', 1, 'Pesanan Selesai', '248412B4-C9AA-4CC5-8B3D-C48B8358F494.jpeg', 16, NULL),
(83, 'Jasa', 10, 'Medan', '01 April 2023', 3, 'Pesanan Selesai', 'WhatsApp Image 2023-03-28 at 08.42.09 (1).jpeg', 16, NULL),
(84, 'Jasa', 12, 'Medan', '01 April 2023', 1, 'Pesanan Selesai', '', 16, NULL),
(85, 'Jasa', 1, 'Medan', '01 April 2023', 1, 'Bayar Sekarang', '', 16, NULL);

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
(14, 26, 'Bagus', 14, 'MaduMauasJKM.jpeg', 'RipCurl', 'MaduMauas'),
(14, 27, 'Bagus', 14, 'background_register.jpg', 'RipCurl', 'MaduMauas'),
(14, 28, 'Paten', 14, 'background_login.jpeg', 'RipCurl', 'MaduMauas'),
(1, 29, 'produk yang dijual bagus dan bermanfaat serta finishing tempat yang mewah', 1, 'background_register.jpg', 'RipCurl', 'MaduMauas'),
(1, 30, 'Bagus', 1, 'background_login.jpeg', 'Johannes', 'cookies'),
(1, 31, 'Bagus', 1, 'background_register.jpg', 'RipCurl', 'MaduMauas'),
(1, 32, 'Bagus', 1, 'background_register.jpg', 'Johannes', 'MaduMauas'),
(1, 33, '', 1, '7F1ADF1E-7AF0-4049-B5C6-6840D0C83A89.jpeg', 'Johannes', 'MaduMauas'),
(1, 34, 'Bagus', 1, '7F1ADF1E-7AF0-4049-B5C6-6840D0C83A89.jpeg', 'Johannes', 'MaduMauas');

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
(12, 'Apakah Produk ini dapat disimpan dalam jangkauan waktu yang lama?', 3, 12, 'Bisa Kak'),
(13, 'Apakah Madu ini memang madu yang berasal dari hutan/lebah Liar?', 1, 11, 'Iya Kak'),
(14, 'Apakah produk ini bisa dikirimkan ke Medan?', 2, 11, 'Bisa Kak'),
(15, 'Apakah produk ini tersedia?', 1, 11, 'Tersdia kak'),
(16, 'Apakah produk ini tersedia?', 1, 11, 'Bisa kak'),
(17, 'Apakah produk Ini Bisa dikirim Ke pulau Jawa', 1, 14, 'Bisa Kak'),
(18, '', 1, 15, '');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `akun_admin`
--
ALTER TABLE `akun_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `checkout_produk`
--
ALTER TABLE `checkout_produk`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `urutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
