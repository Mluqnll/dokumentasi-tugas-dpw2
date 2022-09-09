-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2022 at 03:02 PM
-- Server version: 5.7.33
-- PHP Version: 8.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_dpw`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `nama`, `username`, `email`, `nomor_hp`, `password`, `created_at`, `updated_at`) VALUES
('9716e328-b254-48b8-b0a7-a58bcab490c2', 'diqi', 'diqiiiii', 'diqi@gmail.com', '2637568465', '$2y$10$trtrM6wUkocO3mNdig8btuqk9bd7A5bQu.JkWPj6rpWpzGFEfsvo.', '2022-08-23 02:06:01', '2022-08-23 02:06:01'),
('97292e23-4fd5-4017-9f26-fb588786af92', 'ririn', 'ririrnnnnn', 'ririn@gmail.com', '27368421284', '$2y$10$Wbw9mtYNBmltYjXXsjhVpuDLf43Cf9pab/HXtZTYk1.Fqn9MMJ/.q', '2022-09-01 04:20:35', '2022-09-01 04:20:35');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('970d630c-45f3-469b-a027-720f998341ee', 'bibit', '2022-08-18 08:45:21', '2022-08-18 08:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nomor_hp` varchar(15) DEFAULT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id`, `nama`, `username`, `email`, `nomor_hp`, `jenis_kelamin`, `nama_toko`, `password`, `created_at`, `updated_at`) VALUES
('9736fe58-83a2-4867-b083-5f03fdc3f858', 'Luqinul', 'mluqnl_', 'luqinul@gmail.com', '0843174183174', 1, 'luqinul shop', '$2y$10$mPcpIqNOpvQhM6/DPkcl6O3vIx3KDYql0MZxAu6rH.s4l.MfRo0zG', '2022-09-08 01:08:32', '2022-09-08 01:08:32'),
('973715d3-d356-41f3-9bb8-6a38f11bc942', 'dimas', 'dimasssss', 'dimas@gmail.com', '089742614528', 1, 'dimasshop', '$2y$10$YEzIQSOUPrE374qaYBJsje3rJmXDnS7LzfRZbfIYlf2Goiw.TokKm', '2022-09-08 02:14:12', '2022-09-08 02:14:12'),
('97371649-7270-4574-a153-926fe5b94628', 'inul', 'inulllllllll', 'inul@gmail.com', '2637568465', 2, 'inulllllshop', '$2y$10$jXz7eL7uQPTLWa.dIK3kgOURiXhR3ND2E3ZyLxIornXWNr7kUieWO', '2022-09-08 02:15:29', '2022-09-08 02:15:29'),
('973716b7-e211-4798-9a69-d0fd9e989fcb', 'arjun', 'arjunnn', 'arjun@gmail.com', '4718347214', 1, 'arjunnnnshop', '$2y$10$y1uhVgFZEBE1J2wwKDUtm./620wDQLO9l2zddSG716PgcK5GlKUy.', '2022-09-08 02:16:41', '2022-09-08 02:16:41'),
('97371700-a7d3-4365-b004-5067737b73d2', 'azzam', 'azzammmmmm', 'azzam@gmail.com', '4128948714', 1, 'azzammmmshop', '$2y$10$ZJ178bKHobRhT0QMHfKdBe2kkWODb7nIqRLmJlfou0EoEde5Tj41S', '2022-09-08 02:17:29', '2022-09-08 02:17:29');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` char(36) NOT NULL,
  `id_penjual` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_penjual`, `nama`, `foto`, `harga`, `stock`, `deskripsi`, `created_at`, `updated_at`) VALUES
('97375933-91d2-456a-bc41-e2bc2cd50bcc', '9736fe58-83a2-4867-b083-5f03fdc3f858', 'bibit kecambah kelapa sawit merek SRIWIJAYA 1', 'app/images/produk/9736fe58-83a2-4867-b083-5f03fdc3f858-1662639754-cDk1x.jpg', 230000, 1712, 'kondisi sudah berkecambah dan siap ditanam di dalam polibek. \r\nIsi 250butir kami packing dengan aman dan ada tambahan kardus+Doublle Bubble wrap jadi aman sampai tujuan.\r\nJANGAN TANYAKAN STOK, STOK SELALU READY LANGSUNG SAJA BUAT PESANAN DAN BAYAR COD TANPA KELUAR RUMAH\r\nSELAMAT BERBELANJA', '2022-09-08 05:22:35', '2022-09-08 05:22:35'),
('97376c5f-07ff-477c-a6d9-9d38a3cc029c', '9736fe58-83a2-4867-b083-5f03fdc3f858', 'BIBIT BENIH KECAMBAH POLONG SAWIT SRIWIJAYA 5', 'app/images/produk/9736fe58-83a2-4867-b083-5f03fdc3f858-1662642971-x4YFh.jpg', 700000, 1414, 'PUSAT PENELITIAN KELAPA SAWIT UNGGUL PENGIRIMAN KECAMBAH DxP PPKS MEDAN\r\n\r\nISI 250 Butir ( 1 kotak )\r\n\r\nBibit Sawit DxP PPKS High CPO\r\nKualitas Persilangan Dura dan Psifera\r\n\r\n- DxP PPKS High CPO and PKO\r\n\r\n(New Variates )\r\n\r\n* Hasil seleksi siklus kedua program RRS ( Recipcoal Recurrent Selection) yang dimulai tahun 1986.\r\n* Memiliki keunggulan dalam persentase daging buah ( mesokarp) yang sangat tinggi hingga 89%.\r\n* Tingkat rendemen minyak laboratorium mencapai 32,3%\r\n* Tingkat produksi CPO 8,1Ton/Ha/Tahun.', '2022-09-08 06:16:11', '2022-09-08 06:16:11'),
('97376fb9-d78a-4ff7-a186-86ddaa0acaf9', '97371649-7270-4574-a153-926fe5b94628', 'Benih Timun Lalap Bibit Mentimun', 'app/images/produk/97371649-7270-4574-a153-926fe5b94628-1662643534-64ja3.jpg', 47000, 6238, 'Benih Timun Lalap\r\nisi 20 biji per-kemasan\r\n\r\n- Beradaptasi baik pada dataran rendah sampai menengah di musim hujan dan musim kemarau.\r\n- Buah berwarna putih kehijauan dengan warna pangkal buah lebih hijau.\r\n- Berumur genjah, dapat dipanen mulai umur 33 HST.\r\n- Berbuah lebat, potensi hasil 3-4 kg pertanaman.\r\n- Tekstur manis renyah, cocok untuk lalapan.\r\n- Toleran penyakit Downy Mildew So dan Kresek.\r\n\r\nCocok untuk ditanam baik secara sistem hidroponik, organik, tradisional atau konvensional.\r\n\r\nCatatan : \r\n- Benih berasal dari: perusahaan benih ternama di Indonesia, benih lokal berkualitas, dan benih import berkualitas sehingga memiliki tingkat germinasi dan pertumbuhan yang baik.\r\n- Benih kemasan repack, kualitas tetap terjaga, dikemas dalam plastik kedap udara serta diberi label nama dan masa kadaluarsa.\r\n- Packing aman dan rapi.', '2022-09-08 06:25:34', '2022-09-08 06:25:34'),
('97377059-2919-4c7c-b132-c6fb6b608c49', '973716b7-e211-4798-9a69-d0fd9e989fcb', 'Bibit tanaman terong-bibit pohon terong-terong ungu panjang', 'app/images/produk/973716b7-e211-4798-9a69-d0fd9e989fcb-1662643638-dlIDZ.jpg', 59000, 1525, 'Tinggi bibit:20-30\r\nasal bibit:semai biji\r\n\r\n\r\nTerung[1] (Solanum melongena, di Pulau Jawalebih dikenal sebagai terong) adalah tumbuhan penghasil buah yang dijadikansayur-sayuran. Asalnya adalah India dan Sri Lanka[2][3]. Terung berkerabat dekat dengankentang dan leunca, dan agak jauh dari tomat.\r\n\r\nTerung ialah terna yang sering ditanam secara tahunan. Tanaman ini tumbuh hingga 40–150 cm (16-57 inci) tingginya. Daunnya besar, dengan lobus yang kasar. Ukurannya 10–20 cm (4-8 inci) panjangnya dan 5–10 cm (2-4 inci) lebarnya. Jenis-jenis setengah liar lebih besar dan tumbuh hingga setinggi 225 cm (7 kaki), dengan daun yang melebihi 30 cm (12 inci) dan 15 cm (6 inci) panjangnya. Batangnya biasanya berduri. Warna bunganya antara putih hingga ungu, dengan mahkota yang memiliki lima lobus.Benang sarinya berwarna kuning. Buah tepung berisi, dengan diameter yang kurang dari 3 cm untuk yang liar, dan lebih besar lagi untuk jenis yang ditanam.\r\n\r\nCara menanam tanaman terung adalah disemai, setelah tumbuh 4 daun sejati kemudian ditanam (dijadikan bibit terlebih dahulu). Panen dimulai pada 70-80 hari setelah semai selanjutnya setiap 5 hari.', '2022-09-08 06:27:18', '2022-09-08 06:27:18'),
('97377182-718c-49dd-8e4d-136b93aab1b6', '97371649-7270-4574-a153-926fe5b94628', 'Benih Terong putih kania F1 bibit tanaman sayuran terung', 'app/images/produk/97371649-7270-4574-a153-926fe5b94628-1662643833-aj55d.jpg', 55000, 7525, 'ISI 50 BUTIR/BIJI PER KEMASAN.\r\nSpesifikasi benih terong putih hibrida:\r\n- Ideal untuk di tanam di dataran rendah\r\n- Bentuk buah silindris serta panjang\r\n- Warna buah putih dan mengkilat\r\n- Bobot buah 130 gram/buah dan panjang buah 26 x 5,5 cm\r\n- Umur panen 45-50 HST\r\n- Potensi hasil panen 2,5-3 kg/tanaman', '2022-09-08 06:30:33', '2022-09-08 06:30:33'),
('97377213-5a17-4b0a-ac4b-4735b74f28f1', '97371700-a7d3-4365-b004-5067737b73d2', 'Bibit Terong Hijau KOPEK', 'app/images/produk/97371700-a7d3-4365-b004-5067737b73d2-1662643928-5CzdR.jpg', 49000, 6528, 'Benih terong hijau KOOPEK\r\nProduk benih unggul JAWARA\r\nTanaman kuat dan kokoh\r\nToleran penyakit layu bakteri\r\nBuah berwarna hijau muda\r\nKeras dan tahan simpan\r\nRasa manis, enak disukai pasar\r\nPanjang buah 24-26 cm, berat 250-300 gram/buah\r\nPotensi hasil 6 kg/batang', '2022-09-08 06:32:08', '2022-09-08 06:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `nama`, `foto`, `jenis_kelamin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'mluqnl_', 'luqinul@gmail.com', 'Luqinul', 'app/images/user/-1662606437-9luZU.jpg', 1, '$2y$10$2D5X4bjDfIH9CuNJqOl5LePs0QuWOi2Saznos0IuXsqRocHxM7cGu', NULL, '2022-09-07 20:07:17', '2022-09-07 20:07:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
