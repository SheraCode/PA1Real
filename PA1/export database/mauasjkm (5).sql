-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Jun 20, 2023 at 04:30 PM
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
(145, 1, 12000, 1, 18, 100);

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
(145, 2, 24000, 1, 18, 200, 'keranjang');

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

--
-- Dumping data for table `checkout_produk`
--

INSERT INTO `checkout_produk` (`id_checkout`, `tanggal_pemesanan`, `status_bayar`, `bukti_bayar`, `total_pembayaran`, `akun_id`, `pembatalan`, `lampiran_keranjang`) VALUES
(42, '18 June 2023', 'Pesanan Selesai', '', 462000, 1, NULL, '648f30af85179.jpeg'),
(43, '18 June 2023', 'Pesanan Selesai', '', 331000, 1, NULL, '648f30e133eb5.jpeg'),
(44, '19 June 2023', 'Pesanan Dibatalkan', '64904ff2823cf.jpeg', 936000, 1, 'Tes', '6490489435c67.jpeg'),
(45, '19 June 2023', 'Terkonfirmasi', '64904fad2ae46.jpeg', 744000, 1, NULL, '64904f844744b.png'),
(46, '19 June 2023', 'Pesanan Selesai', '64905685c7a32.jpeg', 1068000, 1, NULL, '6490565410504.png'),
(47, '19 June 2023', 'Bayar Sekarang', '', 1016000, 1, NULL, '64905ea5d5a31.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_ulasan` int(11) DEFAULT NULL,
  `urutan` int(11) NOT NULL,
  `review` text DEFAULT NULL,
  `id_akun` int(11) DEFAULT NULL,
  `picture` varchar(120) NOT NULL,
  `username` varchar(120) DEFAULT NULL,
  `id_produk` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_ulasan`, `urutan`, `review`, `id_akun`, `picture`, `username`, `id_produk`) VALUES
(1, 47, 'Madu nya Enak', 1, '648aac1e6ce1c.jpeg', 'Johannes', 18);

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
(34, 'Tes', 18, 1, 'TEs');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` text NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `gambar_1` varchar(250) NOT NULL,
  `gambar_2` varchar(225) NOT NULL,
  `gambar_3` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `berat_produk`, `harga_produk`, `deskripsi_produk`, `gambar_1`, `gambar_2`, `gambar_3`) VALUES
(18, 'Madu Mauas', 100, 12000, 'Madu Mauas adalah Madu asli hutan yang dimana madu ini dibuat dengan 100% berbahan alami dan madu ini di packaging dengan wadah kaca sehingga terlihat lebih elegan dan aman untuk disimpan beserta di konsumsi .', 'produk/648a9f7802463.jpeg', 'produk/648a9f7802463.jpeg', 'produk/648a9f7802463.jpeg'),
(20, 'Cookies Mauas', 250, 35000, 'Cookies Mauas adalah Cookies yang dibuat dengan bahan pemanis alami,Cookies Mauas ini menggunakan Madu sebagai bahan pemanisnya sehingga tentunya sangat aman untuk di konsumsi dan Cookies ini di packing dengan finishing yang aman untuk digunakan.\r\n\r\n', 'produk/648ab02f8a2dc.jpeg', 'produk/648ab02f8a2dc.jpeg', 'produk/648ab02f8a2dc.jpeg'),
(21, 'Sambal Teri Andaliman', 250, 35000, 'Sambal Teri Andaliman adalah Sambal yang berasal dari Bahan Olahan utama Andaliman yang kemudian di masak dengan bahan campuran lainnya yang akhirnya menjadi sambal Andaliman.Sambal Andaliman mempunyai EXP produk yang lama.', 'produk/648ab17c05686.jpeg', 'produk/648aae974d8dc.jpeg', 'produk/648abaccc075e.jpg');

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
  ADD KEY `akun_id` (`id_akun`),
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
  MODIFY `id_chart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `chart_data`
--
ALTER TABLE `chart_data`
  MODIFY `id_chartdata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `checkout_produk`
--
ALTER TABLE `checkout_produk`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `urutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chart`
--
ALTER TABLE `chart`
  ADD CONSTRAINT `chart_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_akun`),
  ADD CONSTRAINT `chart_ibfk_3` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `chart_data`
--
ALTER TABLE `chart_data`
  ADD CONSTRAINT `chart_data_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_akun`),
  ADD CONSTRAINT `chart_data_ibfk_3` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `checkout_produk`
--
ALTER TABLE `checkout_produk`
  ADD CONSTRAINT `checkout_produk_ibfk_1` FOREIGN KEY (`akun_id`) REFERENCES `akun` (`id_akun`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `pertanyaan_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_akun`),
  ADD CONSTRAINT `pertanyaan_ibfk_4` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
