-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Jun 15, 2023 at 10:28 AM
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
(1, 'Johannes', 'oan123', 1, 'Johannes Bastian Jasa Sipayung', 'johannesssipayung27@gmail.com', 'Medan', 'sebelum.jpeg'),
(2, 'oan', 'oan123', 1, '', '', '', ''),
(3, 'Jeremia', 'Jeremia123', 1, 'Johannes Bastian Jasa Sipayung', 'johannesssipayung27@gmail.com', 'Porsea', ''),
(4, 'bastian', 'bastian123', 1, '', '', '', ''),
(5, 'Volder', 'volder123', 1, 'Samuel Volder Naibaho', 'samuel@gmail.com', 'Jalan Besar Tanah Jawa No 56, Pematang Siantar', 'setelah.jpeg'),
(6, 'Iphone', 'iphone123', 1, 'Johannes Bastian Jasa Sipayung', 'johannesssipayung27@gmail.com', 'Medan', ''),
(9, 'William', 'william123', 1, 'William Panjaitan', 'willian@gmail.com', 'Balige', ''),
(10, 'mauasjkm\r\n', 'mauasjkm123', 1, 'Mauas JKM', 'Mauas@gmail.com', 'Parapat', ''),
(11, 'RipCurl', 'ripcurl123', 1, 'RipCurl Nababan', 'rpcurl@gmail.com', 'Sibolangit, Deli Serdang , Sumatera Utara', ''),
(12, 'sampol', 'sampol123', 1, 'Samuel Volder Naibaho', 'sampol@gmail.com', 'Jln Tanah Jawa No.129 ,Pematang Siantar', ''),
(13, 'David', 'david123', 1, 'David Kristian Silalahi', 'johannesssipayung27@gmail.com', 'Balige', ''),
(14, 'logitech', 'logi123', 1, 'bastian', 'johannesssipayung27@gmail.com', 'Medan', ''),
(15, '', '', 1, '', '', '', ''),
(16, 'Jasa', 'jasa123', 1, 'Jasa Bastian Sipayung', 'jasa@gmail.com', 'Medan', '54D08E94-801B-42AC-810C-AE4B846058DE.jpeg'),
(17, 'Johannes Sipayung', 'oan123456', 1, 'Oan Sipayung', 'medan@gmail.com', 'medan', 'signature (1).png');

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
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `id_chart` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `berat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`id_chart`, `kuantitas`, `total_harga`, `id_user`, `id_produk`, `berat`) VALUES
(88, 5, 750000, 5, 1, 2000),
(89, 2, 70000, 5, 3, 500);

-- --------------------------------------------------------

--
-- Table structure for table `chart_data`
--

CREATE TABLE `chart_data` (
  `id_chartdata` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `status` varchar(225) DEFAULT 'keranjang'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chart_data`
--

INSERT INTO `chart_data` (`id_chartdata`, `kuantitas`, `total_harga`, `id_user`, `id_produk`, `berat`, `status`) VALUES
(10, 5, 750000, 1, 1, 2000, 'include ongkir'),
(13, 2, 40000, 1, 2, 200, 'include ongkir'),
(14, 2, 300000, 1, 1, 800, 'include ongkir'),
(15, 1, 20000, 1, 2, 100, 'include ongkir'),
(16, 2, 300000, 1, 1, 800, 'include ongkir'),
(17, 5, 100000, 1, 2, 500, 'include ongkir'),
(18, 2, 300000, 1, 1, 800, 'include ongkir'),
(19, 5, 100000, 1, 2, 500, 'include ongkir'),
(20, 5, 175000, 1, 3, 1250, 'include ongkir'),
(21, 2, 300000, 1, 1, 800, 'include ongkir'),
(22, 2, 300000, 1, 1, 800, 'include ongkir'),
(23, 1, 150000, 1, 1, 400, 'include ongkir'),
(24, 2, 300000, 1, 1, 800, 'include ongkir'),
(25, 5, 100000, 1, 2, 500, 'include ongkir'),
(26, 2, 40000, 1, 2, 200, 'include ongkir'),
(27, 2, 300000, 1, 1, 800, 'include ongkir'),
(28, 3, 450000, 1, 1, 1200, 'include ongkir'),
(29, 3, 60000, 1, 2, 300, 'include ongkir'),
(30, 3, 60000, 1, 2, 300, 'include ongkir'),
(31, 2, 300000, 1, 1, 800, 'include ongkir'),
(32, 4, 80000, 1, 2, 400, 'include ongkir'),
(33, 5, 100000, 1, 2, 500, 'include ongkir'),
(34, 5, 750000, 5, 1, 2000, 'include ongkir'),
(35, 5, 100000, 5, 2, 500, 'include ongkir'),
(36, 1, 150000, 5, 1, 400, 'include ongkir'),
(37, 2, 40000, 5, 2, 200, 'include ongkir'),
(38, 3, 60000, 5, 2, 300, 'include ongkir'),
(48, 2, 40000, 5, 2, 200, 'include ongkir'),
(88, 5, 750000, 5, 1, 2000, 'keranjang'),
(89, 2, 70000, 5, 3, 500, 'keranjang');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_produk`
--

CREATE TABLE `checkout_produk` (
  `id_checkout` int(11) NOT NULL,
  `tanggal_pemesanan` varchar(225) NOT NULL,
  `status_bayar` varchar(225) NOT NULL DEFAULT 'Bayar Sekarang',
  `bukti_bayar` varchar(225) NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `akun_id` int(11) NOT NULL,
  `pembatalan` varchar(225) DEFAULT NULL,
  `lampiran_keranjang` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id_produk` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_ulasan`, `urutan`, `review`, `akun_id`, `picture`, `username`, `id_produk`) VALUES
(5, 35, 'Produk Sangat Bagus ', 5, 'MauasMadu.jpeg', 'Volder', 1),
(5, 36, 'Produk Sangat Enak', 5, '648ab02f8a2dc.jpeg', 'Volder', 2),
(5, 37, 'Sambal Sangat Pedasss :)', 5, 'sambalbaremanasli.jpg', 'Volder', 3);

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
(18, '', 1, 15, ''),
(19, 'Apakah Produk Ini Dapat Dikirimkan Ke Medan', 1, 1, ''),
(20, 'Apakah Produk Ini Enak?', 1, 1, ''),
(21, 'Apakah Produk ini Bagus?', 2, 1, ''),
(22, 'Apakah Produk Ini Enak?', 3, 1, ''),
(23, 'Tes', 1, 1, ''),
(24, 'Tes', 1, 1, ''),
(25, 'Tes', 2, 1, ''),
(26, 'Tes', 3, 1, ''),
(27, 'Tes', 3, 1, ''),
(28, 'Tes', 2, 1, ''),
(29, 'Tes', 1, 5, ',');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(120) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `link_deskripsi` varchar(100) NOT NULL,
  `link_beli` varchar(100) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `berat_produk`, `harga_produk`, `link_deskripsi`, `link_beli`, `gambar`) VALUES
(1, 'Madu Mauas', 400, 150000, 'shopdetail_madumauas.php', 'belilangsung_madu.php', '648abaccc075e.jpg'),
(2, 'Cookies Mauas', 100, 20000, 'shopdetail_cookies.php', 'belilangsung_cookies.php', '648ab02f8a2dc.jpeg'),
(3, 'Sambal Teri Andaliman', 250, 35000, 'shopdetail_teman.php', 'belilangsung_teman.php', '648ab17c05686.jpeg');

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
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id_chart`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `chart_data`
--
ALTER TABLE `chart_data`
  ADD PRIMARY KEY (`id_chartdata`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `checkout_produk`
--
ALTER TABLE `checkout_produk`
  ADD PRIMARY KEY (`id_checkout`),
  ADD KEY `akun_id` (`akun_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`urutan`,`picture`),
  ADD KEY `akun_id` (`akun_id`),
  ADD KEY `id_produk` (`id_produk`);

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
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `akun_admin`
--
ALTER TABLE `akun_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
  MODIFY `id_chart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `chart_data`
--
ALTER TABLE `chart_data`
  MODIFY `id_chartdata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `checkout_produk`
--
ALTER TABLE `checkout_produk`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `urutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chart`
--
ALTER TABLE `chart`
  ADD CONSTRAINT `chart_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `chart_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_akun`);

--
-- Constraints for table `chart_data`
--
ALTER TABLE `chart_data`
  ADD CONSTRAINT `chart_data_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `chart_data_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_akun`);

--
-- Constraints for table `checkout_produk`
--
ALTER TABLE `checkout_produk`
  ADD CONSTRAINT `checkout_produk_ibfk_1` FOREIGN KEY (`akun_id`) REFERENCES `akun` (`id_akun`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`akun_id`) REFERENCES `akun` (`id_akun`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

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
