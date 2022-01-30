-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 04:19 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sppt`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarpelajar`
--

CREATE TABLE `daftarpelajar` (
  `No.` int(255) NOT NULL,
  `noic` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarpelajar`
--

INSERT INTO `daftarpelajar` (`No.`, `noic`, `psw`) VALUES
(1, '940917125500', '0000'),
(2, '950319126115', 'freedom.95'),
(3, '960730125454', '1234'),
(4, '970321125113', '1234'),
(5, '91021335455', '1234'),
(6, '980515125280', '1234'),
(7, '900320115430', '1234'),
(8, '902350115432', '1234'),
(9, '951213125431', '1234'),
(10, '960321128874', '1234'),
(11, '900000125120', '1234'),
(12, '950000000012', '1234'),
(13, '891213125432', '1234'),
(14, '900119126115', '123456'),
(15, '950319111234', '1234'),
(16, '882121125344', '122'),
(17, '970319126115', 'freedom.95'),
(18, '900320125594', '12345'),
(19, '890319126114', 'abc123'),
(22, '950311123420', '1234'),
(23, '00', '1234'),
(24, '88', '1234'),
(26, '1234567890', '1234'),
(27, 'admin', '1234'),
(28, '980425125850', 'Haliza098');

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `noic` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nopelajar` varchar(20) NOT NULL,
  `kursus` varchar(255) NOT NULL,
  `notel` varchar(20) NOT NULL,
  `emel` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `poskod` varchar(255) NOT NULL,
  `daerah` varchar(255) NOT NULL,
  `negeri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`noic`, `nama`, `nopelajar`, `kursus`, `notel`, `emel`, `alamat`, `poskod`, `daerah`, `negeri`) VALUES
('882121125344', 'AWANG BOLA', '21213456', 'SILA PILIH KURSUS', '', '', '', '', '', 'KEDAH'),
('891213125432', 'ARMAN BIN SENTOSA', '', 'SILA PILIH KURSUS', '', '', '', '', '', 'SILA PILIH KURSUS'),
('900000125120', 'HASLAM TAHIRR', 'BI17110053', 'CDM', '013889654878', 'haslam@yahoo.com', 'TAMAN INDAH PERMAI, LORONG 17 LOT C34-9', '88450', 'KOTA KINABALU, SABAH', 'SABAH'),
('900119126115', 'AHMAD NOR ', 'BI18110111', 'CSB', '0146782778', 'ahmad@gmail.com', 'TAMAN BUKIT SETIA', '88450', 'KOTA KINABALU', 'SABAH'),
('900320115430', 'ARMAN BIN SENTOSA', 'BI17110010', 'PPG', '0138895471', 'arman@gmail.com', 'KAMPUNG BONDULON, JALAN SEPANGGAR', '88450', 'KOTA KINABALU', 'SABAH'),
('900320125594', 'NOR SHEILAH BINTI HARRIS', 'BS13112101', 'CDM', '0138554021', 'sheilahharris@gmail.com', 'KAMPUNG MENGGARIS, JALAN MEROTAI BESAR', '88450', 'TAWAU', 'SABAH'),
('902350115432', 'ARMAN BIN SENTOSA', 'BI17110022', 'AUTO', '0146552341', 'arman@gmail.com', 'KOTA KINABALU SABAH', '', '', ''),
('940917125500', 'NUR HASYIMAH ABDUL HALIM', 'BI16120021', 'AUTO', '0136558974', 'hasyimah@gmail.com', 'KAMPUNG LIANG JALAN USUKAN', '89157', 'KOTA BELUD', 'SABAH'),
('950000000012', 'HALIM OSMAN', 'BI17110053', 'TPM', '0135567895', 'hanafieharris@gmail.com', 'LORONG 16', '', '', ''),
('950319111234', 'AMIRAH BINTI RAMLAN', 'BI17111211', 'CDM', '0125887412', 'amirahlan@gmail.com', 'KAMPUNG GUDON, LORONG 2, LOT C21-9', '88450', 'KOTA KINABALU', 'SABAH'),
('950319126115', 'MOHD HANAFIE BIN HARRIS', 'BI17110053', 'AUTO', '0146552341', 'hanafieharris@gmail.com', 'TAMAN INDAH PERMAI, LORONG 16 LOT C34-9', '88450', 'KOTA KINABALU', 'SABAH'),
('951213125431', 'RIDZUAN HALIM', 'BI17110212', 'CSB', '0169201241', 'ridzuan@gmail.com', 'KOTA KINABALU SABAH', '', '', ''),
('960321128874', 'INARA BINTI ZIKRI', 'BK16110256', 'TEI', '0138896021', 'inara@gmail.com', 'KOTA KINABALU SABAH', '', '', ''),
('960730125454', 'DEANDRA ELLEANOR', 'BI17110010', 'AUTO', '0169954874', 'hanafieharris@gmail.com', 'JALAN PENAMPANG, LORONG 21', '88450', 'PENAMPANG', 'SABAH'),
('970319126115', 'FANIEZAH ABD LATIF', 'BI17110053', 'ELEKTRIK', '0135564512', 'fanie@gmail.com', 'JALAN SINGKAT LORONG 16', '69541', 'BEAUFORT', 'SABAH'),
('970321125113', 'STEVEN PETRUS', 'NR12340987', 'AUTO', '0138876531', 'stevenp@gmail.com', 'LORONG 2,  JALAN LINTAS, BLOK A, 22', '85320', 'KOTA KINABALU', 'SABAH'),
('980425125850', 'NURUL HALIZA ZAKARIAH', 'BS17110482', 'PPG', '0102034527', 'izzajzack@gmail.com', 'KAMPUNG TASS ANDRASSY ', '91008', 'TAWAU', 'SABAH'),
('980515125280', 'SITI AISYAH BINTI MOHD YASSIN', 'BI17110146', 'CDM', '0128547895', 'AISYAH@GMAIL.COM', 'KOTA KINABALU SABAH', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pentadbir`
--

CREATE TABLE `pentadbir` (
  `id` int(255) UNSIGNED NOT NULL,
  `noid` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pentadbir`
--

INSERT INTO `pentadbir` (`id`, `noid`, `pass`) VALUES
(1, 'admin02', '1234'),
(2, 'admin01', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `noic` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kursus` varchar(255) NOT NULL,
  `notel` varchar(255) NOT NULL,
  `jenis_sijil` text NOT NULL,
  `jenis_sijil1` varchar(255) NOT NULL,
  `jenis_sijil2` varchar(255) NOT NULL,
  `jenis_sijil3` varchar(255) NOT NULL,
  `tarikh` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`noic`, `nama`, `kursus`, `notel`, `jenis_sijil`, `jenis_sijil1`, `jenis_sijil2`, `jenis_sijil3`, `tarikh`, `status`, `catatan`) VALUES
('00', 'FATIMAH', 'SILA PILIH KURSUS', '', 'TRANSKRIP AKADEMIK', 'SIJIL PEMASANGAN PAIP GAS', 'SIJIL KEMAHIRAN SURUHANJAYA (SKM)', 'SIJIL SURUHANJAYA TENAGA (ST)', '2021-08-03', 'BELUM SELESAI', '-SIJIL MASIH DALAM PROSES.'),
('88', '', 'CSB', '66', 'TRANSKRIP AKADEMIK', 'SIJIL PEMASANGAN PAIP GAS', 'SIJIL KEMAHIRAN SURUHANJAYA (SKM) ', '', '2021-07-28', 'BOLEH AMBIL DI JTM', ''),
('882121125344', 'AWANG BOLA', 'TPM', '0169954874', 'TRANSKRIP AKADEMIK', '', 'SIJIL KEMAHIRAN SURUHANJAYA (SKM)', '', '2021-06-02', 'SIJIL BERMASALAH', '- Sijil Belum Sampai'),
('891213125432', 'ARMAN BIN SENTOSA', 'SILA PILIH KURSUS', '', 'TRANSKRIP AKADEMIK', '', 'SIJIL KEMAHIRAN SURUHANJAYA (SKM)', '', '2021-07-22', 'BELUM SELESAI', ''),
('900000125120', 'HASLAM TAHIRR', 'CDM', '013889654878', 'TRANSKRIP AKADEMIK', 'SIJIL PEMASANGAN PAIP GAS', '', '', '2021-07-26', 'BELUM SELESAI', ' '),
('950000000012', 'HALIM OSMAN', 'TPM', '0135567895', 'TRANSKRIP AKADEMIK', 'SIJIL PEMASANGAN PAIP GAS', 'SIJIL KEMAHIRAN SURUHANJAYA (SKM)', 'SIJIL SURUHANJAYA TENAGA (ST)', '2021-07-07', 'SIJIL BERMASALAH', ''),
('950319111234', 'AMIRAH BINTI RAMLAN', 'CDM', '0125887412', 'TRANSKRIP AKADEMIK', '', '', 'SIJIL SURUHANJAYA TENAGA (ST)', '2021-06-01', 'BOLEH AMBIL DI JTM', ''),
('950319126115', 'MOHD HANAFIE BIN HARRIS', 'TPM', '0169954874', 'TRANSKRIP AKADEMIK', 'SIJIL PEMASANGAN PAIP GAS', 'SIJIL KEMAHIRAN SURUHANJAYA (SKM)', 'SIJIL SURUHANJAYA TENAGA (ST)', '2021-05-27', 'BELUM SELESAI', '-Sijil belum ada'),
('960730125454', 'DEANDRA ELLEANOR', 'AUTO', '0169954874', 'TRANSKRIP AKADEMIK', '', 'SIJIL KEMAHIRAN SURUHANJAYA (SKM) ', '', '2021-05-25', 'BELUM SELESAI', ''),
('970319126115', 'FANIEZAH ABD LATIF', 'ELEKTRIK', '0135564512', 'TRANSKRIP AKADEMIK', 'SIJIL PEMASANGAN PAIP GAS', '', '', '2021-06-23', 'BELUM SELESAI', ''),
('970321125113', 'STEVEN PETRUS', 'CSB', '0138215432', 'TRANSKRIP AKADEMIK', 'SIJIL PEMASANGAN PAIP GAS', '', '', '2021-06-15', 'SIJIL BERMASALAH', '-SIJIL BERMASALAH DISEBABKAN ADA TUNGGAKAN BAYARAN, SILA RUJUK KE PEJABAT ILP.'),
('980425125850', 'NURUL HALIZA ZAKARIAH', 'PPG', '0102034527', 'TRANSKRIP AKADEMIK', '', '', '', '2021-12-15', 'BOLEH AMBIL DI JTM', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarpelajar`
--
ALTER TABLE `daftarpelajar`
  ADD PRIMARY KEY (`No.`),
  ADD UNIQUE KEY `noic` (`noic`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD UNIQUE KEY `noic` (`noic`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `pentadbir`
--
ALTER TABLE `pentadbir`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `noid` (`noid`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD UNIQUE KEY `noic` (`noic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarpelajar`
--
ALTER TABLE `daftarpelajar`
  MODIFY `No.` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `pentadbir`
--
ALTER TABLE `pentadbir`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD CONSTRAINT `pelajar_ibfk_1` FOREIGN KEY (`noic`) REFERENCES `daftarpelajar` (`noic`);

--
-- Constraints for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD CONSTRAINT `permohonan_ibfk_2` FOREIGN KEY (`noic`) REFERENCES `daftarpelajar` (`noic`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
