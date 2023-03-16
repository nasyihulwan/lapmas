-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 07:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latlapmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('0','active','deleted') NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `status`, `telp`) VALUES
('3273241103050003', 'Sain', 'sain', '$2y$10$PUjEwg2/rmLQ3CmXHcbXauCQLBVWf3MTe.w27XpxP7nHqgeoaJyVS', '0', '089123'),
('3273241805140005', 'Nasyih Wawan', 'anasbuek', '$2y$10$PUjEwg2/rmLQ3CmXHcbXauCQLBVWf3MTe.w27XpxP7nHqgeoaJyVS', 'active', '123'),
('ANONYMOUS1', '-', '-', '-', 'deleted', '-'),
('ANONYMOUS2', '-', '-', '-', 'deleted', '-'),
('ANONYMOUS3', '-', '-', '-', 'deleted', '-'),
('ANONYMOUS4', '-', '-', '-', 'deleted', '-'),
('ANONYMOUS5', '-', '-', '-', 'deleted', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(16) NOT NULL,
  `judul_laporan` varchar(255) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `judul_laporan`, `isi_laporan`, `foto`, `status`) VALUES
(1, '2023-02-22', '3273241103050003', 'Pemuda Maling ', 'Maling 50 Pangsit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam aliquid inventore dicta suscipit totam rerum minus commodi quibusdam enim sunt cupiditate ad perferendis, quas consectetur dolores rem voluptatum explicabo consequuntur doloremque! Debitis nulla, deserunt unde quisquam, placeat suscipit vero inventore delectus reprehenderit tempora sunt modi? Perspiciatis quam omnis alias unde? Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, nulla voluptatum! At nobis earum molestias sapiente qui, cupiditate facere deserunt tenetur laboriosam culpa est harum accusantium mollitia rerum, consectetur numquam, quam praesentium et corrupti doloribus. Tempore, deserunt! Unde voluptatum, atque iure suscipit ab molestias amet accusamus labore sed officia? Qui cumque distinctio tenetur quam quidem ipsa nam ratione velit unde ducimus quisquam tempora possimus nostrum quis, perspiciatis, veniam nihil in! Temporibus ullam quod placeat quam inventore commodi aperiam voluptatum laudantium tenetur neque eum, eius, nisi cumque laborum dolor asperiores excepturi explicabo alias sunt at. Et repellat ut eaque dolore fugit totam, earum vero quas reiciendis facilis rerum eius, corporis voluptatum, numquam odit itaque incidunt ipsa in consectetur voluptatem nostrum a qui eveniet cum. Sint vitae ullam iure obcaecati molestias? Placeat sint consequuntur ullam quod! Omnis, et. Dolores, molestias quis asperiores et ullam minus natus reiciendis magni exercitationem reprehenderit saepe odit laboriosam eos quam cumque esse nihil recusandae officia quas tempore ratione perspiciatis. Architecto dolorum repudiandae libero id nostrum labore sunt quaerat! Pariatur, accusantium delectus nesciunt minima fuga excepturi quos quam similique itaque doloremque aut facilis, fugiat quisquam amet eaque beatae ducimus omnis error autem molestias, distinctio mollitia nulla? Alias, odio.', 'maling_pangsit.jpg', 'proses'),
(2, '2023-02-23', '3273241805140005', 'Ormas Buat Onar', 'Pemuda Pancasila Makin Buat Onar. \r\n\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Hic cupiditate esse totam similique aliquid consectetur quas laudantium quibusdam harum odio quod at, corporis quidem earum iste possimus! Alias nulla facere doloribus explicabo officiis! Eum voluptate ipsa enim ex harum suscipit deserunt atque dignissimos fugit voluptates cumque eaque, officiis sequi reprehenderit impedit reiciendis placeat temporibus pariatur inventore molestiae provident eos? Deserunt voluptate ex pariatur eveniet nesciunt consectetur dolores porro provident harum iure ipsam excepturi velit, nam aspernatur, impedit nihil esse facere delectus non architecto sapiente vero deleniti repellendus sed! Necessitatibus quo vel quae molestias repellat nihil tempore assumenda labore, sint quaerat quos perferendis eligendi a cum, consequuntur optio nesciunt dignissimos quia aperiam blanditiis modi ut obcaecati. Architecto perferendis quidem ipsa minus consequatur non aut sed, id voluptatum repudiandae voluptatibus natus ipsam numquam quia ducimus rem ad repellendus at quos debitis amet. Eaque impedit ab labore commodi? Mollitia ipsum corrupti iure doloremque veritatis aut repudiandae, labore rerum at amet? Nam debitis dignissimos recusandae vero animi vel incidunt architecto dicta dolorum cupiditate atque molestiae expedita ullam, eligendi voluptate enim sapiente cum, illum consequatur! Illum, sunt blanditiis deserunt facilis provident labore alias recusandae molestiae aut ea itaque, consequuntur quis. Doloremque, esse nam ex id libero suscipit dignissimos architecto quam recusandae repudiandae sapiente et sed? Optio atque, sequi quaerat ullam error qui officiis ex, cum illo repellat eum voluptate neque debitis odit beatae tempore quas omnis incidunt maxime aliquid vel, sapiente eveniet dolores! Iste soluta repellendus nobis perspiciatis impedit accusantium error aspernatur ex officia quibusdam aliquid doloremque expedita totam, tenetur quos fuga molestiae velit laborum. Quasi, repudiandae excepturi? Quidem rerum rem nobis, magnam delectus molestiae ea natus incidunt sit consequuntur, eligendi pariatur tempore deleniti nemo soluta, explicabo dolor! Commodi aliquid ducimus repudiandae omnis tempora at rerum consequuntur iste! Asperiores unde sunt minima ratione, officiis perferendis molestias quia magnam facere porro dolore corrupti amet repellat similique, quas sed dolorum beatae distinctio excepturi. Tempore iste sint voluptate, minima, reprehenderit quas tenetur neque impedit explicabo obcaecati repellat doloremque cumque illum at officiis eius a distinctio! Magnam facilis, rerum eos fuga earum id. Aliquam voluptas inventore omnis optio asperiores perspiciatis accusantium vitae consectetur vel vero ut, laudantium porro aliquid magni fugit voluptate, sint libero! Unde reprehenderit molestiae soluta, facilis ea sequi pariatur laboriosam velit natus. Exercitationem ducimus vel aliquam, aspernatur a nam earum molestiae suscipit neque pariatur rerum, magni doloremque quia quae, at labore reprehenderit. Sint a omnis dolore?', 'pemuda_pancasila.jpg', 'proses'),
(22657, '2023-02-23', '3273241805140005', 'Balap Liar', '123', 'icikiwir1.jpg', '0'),
(88019, '2023-03-01', '3273241103050003', 'KACAU HATI', 'GABUT AJA SI', 'IMG_20220212_133201.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL,
  `status` enum('0','active','deleted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`, `status`) VALUES
(1, 'Saint', 'admin', '$2y$10$PUjEwg2/rmLQ3CmXHcbXauCQLBVWf3MTe.w27XpxP7nHqgeoaJyVS', '08912345678', 'admin', 'active'),
(2, 'Pablo', 'pablo', '$2y$10$PUjEwg2/rmLQ3CmXHcbXauCQLBVWf3MTe.w27XpxP7nHqgeoaJyVS', '08932112421', 'petugas', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(57303, 2, '2023-02-23', 'ORANG DIFOTO SUDAH DITANGKAP ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ulasan_masyarakat`
--

CREATE TABLE `ulasan_masyarakat` (
  `id_ulasan` int(11) NOT NULL,
  `nik` char(16) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `ulasan` varchar(255) NOT NULL,
  `tingkat_kepuasan` enum('Sangat Puas','Puas','Kurang Puas','Tidak Puas','Sangat Tidak Puas') NOT NULL,
  `is_censored` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasan_masyarakat`
--

INSERT INTO `ulasan_masyarakat` (`id_ulasan`, `nik`, `tgl_tanggapan`, `ulasan`, `tingkat_kepuasan`, `is_censored`) VALUES
(10000, '3273241103050003', '2023-03-01', 'MANTAP LAPMAS! TIDAK PERLU UANG UNTUK MENYELESAIKAN TUGAS! TIDAK SEPERTI APARAT DI NEGARA WAKANDA', 'Sangat Puas', '1'),
(10001, 'ANONYMOUS1', '2023-03-01', 'YA BAGUS COYYYYYYYY', 'Puas', '0'),
(10002, 'ANONYMOUS2', '2023-03-01', 'HMM PERLU DITINGKATKAN LAGI', 'Kurang Puas', '0'),
(10003, 'ANONYMOUS3', '2023-03-01', 'HOEKK APAAN PROSES LAMA!!!!!', 'Sangat Tidak Puas', '0'),
(10004, 'ANONYMOUS4', '2023-03-01', 'MANTAP LAPMAS! TIDAK PERLU KELUAR UANG POKOKNYA OKE!!!', 'Sangat Puas', '0'),
(10005, 'ANONYMOUS5', '2023-03-01', 'MANTAP LAPMAS!! PERTAHANKAN KINERJA SAAT INI! SEMOGA LAPMAS KEDEPANNYA TIDAK DIPENGANG OLEH INSTANSI NEGARA HADUH KEBAYANG DEH RUSAK NAMA LAPMAS PASTI....', 'Sangat Puas', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `ulasan_masyarakat`
--
ALTER TABLE `ulasan_masyarakat`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `nik` (`nik`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`);

--
-- Constraints for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`),
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `ulasan_masyarakat`
--
ALTER TABLE `ulasan_masyarakat`
  ADD CONSTRAINT `ulasan_masyarakat_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
