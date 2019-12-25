-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 04:22 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_bencana`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_brg` varchar(10) NOT NULL,
  `nama_brg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`) VALUES
('Brg001', 'Klambi'),
('Brg002', 'Selimut'),
('Brg003', 'Makanan Instan'),
('Brg004', 'Makanan Pokok'),
('Brg005', 'Susu');

-- --------------------------------------------------------

--
-- Table structure for table `bencana`
--

CREATE TABLE `bencana` (
  `id_bencana` varchar(10) NOT NULL,
  `jenis_bencana` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bencana`
--

INSERT INTO `bencana` (`id_bencana`, `jenis_bencana`) VALUES
('Bencana001', 'Gempa Bumi'),
('Bencana002', 'Banjir'),
('Bencana003', 'Gunung Meletus'),
('Bencana004', 'Tanah Longsor');

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_detail_bantuan`
-- (See below for the actual view)
--
CREATE TABLE `data_detail_bantuan` (
`dbid_bantuan` varchar(10)
,`dbid_brg` varchar(10)
,`dbid_stok` varchar(10)
,`dbid_operator` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_detail_permintaan`
-- (See below for the actual view)
--
CREATE TABLE `data_detail_permintaan` (
`dpid_permintaan` varchar(10)
,`dpid_brg` varchar(10)
,`dpid_stok` varchar(10)
,`dpid_operator` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_kelurahan_imbas`
-- (See below for the actual view)
--
CREATE TABLE `data_kelurahan_imbas` (
`id_imbas` varchar(10)
,`kid_kel` varchar(10)
,`jml_kor_laki` int(10)
,`jml_kor_perempuan` int(10)
,`jml_hil_laki` int(10)
,`jml_hil_perempuan` int(10)
,`jml_eva_laki` int(10)
,`jml_eva_perempuan` int(10)
,`jml_meninggal_laki` int(10)
,`jml_meninggal_perempuan` int(10)
,`pjg_jln_imbas` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_master_bantuan`
-- (See below for the actual view)
--
CREATE TABLE `data_master_bantuan` (
`id_bantuan` varchar(10)
,`mbid_wilayah` varchar(10)
,`tanggal_bantuan` date
,`mbid_operator` varchar(10)
,`tanggal_input` date
,`nama_prov` varchar(10)
,`nama_operator` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_master_bencana`
-- (See below for the actual view)
--
CREATE TABLE `data_master_bencana` (
`id_master_bencana` varchar(10)
,`mid_bencana` varchar(10)
,`mid_kab` varchar(10)
,`latitude` float
,`longitude` float
,`tanggal_bencana` date
,`jml_kor_luka` int(10)
,`jml_kor_meninggal` int(10)
,`jml_kor_hilang` int(10)
,`jml_kor_evakuasi` int(10)
,`jml_rmh_rusak` int(10)
,`jml_rmh_hancur` int(10)
,`status_komunikasi` enum('Lancar','Terputus')
,`status_transportasi` enum('Lancar','Macet')
,`status_tpt_kesehatan` enum('Layak','Tidak')
,`status_pra_pendidikan` enum('Ada','Tidak')
,`status_listrik` enum('Ada','Tidak')
,`status_air_bersih` enum('Layak','Tidak')
,`mid_operator` varchar(10)
,`jenis_bencana` varchar(30)
,`nama_kab` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_master_permintaan`
-- (See below for the actual view)
--
CREATE TABLE `data_master_permintaan` (
`id_permintaan` varchar(10)
,`mpid_wilayah` varchar(10)
,`tanggal_permintaan` date
,`mpid_operator` varchar(10)
,`tanggal_approve` date
,`tanggal_input` date
,`nama_prov` varchar(10)
,`nama_operator` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `detail_bantuan`
--

CREATE TABLE `detail_bantuan` (
  `dbid_bantuan` varchar(10) NOT NULL,
  `dbid_brg` varchar(10) NOT NULL,
  `dbid_stok` varchar(10) NOT NULL,
  `dbid_operator` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_permintaan`
--

CREATE TABLE `detail_permintaan` (
  `dpid_permintaan` varchar(10) NOT NULL,
  `dpid_brg` varchar(10) NOT NULL,
  `dpid_stok` varchar(10) NOT NULL,
  `dpid_operator` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kab` varchar(10) NOT NULL,
  `nama_kab` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kab`, `nama_kab`) VALUES
('33.01', 'Cilacap'),
('33.02', 'Banyumas'),
('33.03', 'Purbalingga'),
('33.04', 'Banjarnegara'),
('33.05', 'Kebumen'),
('33.06', 'Purworejo'),
('33.07', 'Wonosobo'),
('33.08', 'Magelang'),
('33.09', 'Boyolali'),
('33.10', 'Klaten'),
('33.11', 'Sukoharjo'),
('33.12', 'Wonogiri'),
('33.13', 'Karanganyar'),
('33.14', 'Sragen'),
('33.15', 'Grobogan'),
('33.16', 'Blora'),
('33.17', 'Rembang'),
('33.18', 'Pati'),
('33.19', 'Kudus'),
('33.20', 'Jepara'),
('33.21', 'Demak'),
('33.22', 'Semarang'),
('33.23', 'Temanggung'),
('33.24', 'Kendal'),
('33.25', 'Batang'),
('33.26', 'Pekalongan'),
('33.27', 'Pemalang'),
('33.28', 'Tegal'),
('33.29', 'Brebes');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` varchar(10) NOT NULL,
  `nama_kec` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `nama_kec`) VALUES
('33.01.01', 'Kedungreja'),
('33.01.02', 'Kesugihan'),
('33.01.03', 'Adipala'),
('33.01.04', 'Binangun'),
('33.01.05', 'Nusawungu'),
('33.01.06', 'Kroya'),
('33.01.07', 'Maos'),
('33.01.08', 'Jeruklegi'),
('33.01.09', 'Kawungaten'),
('33.01.10', 'Gandrungmangu');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kel` varchar(10) NOT NULL,
  `nama_kel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kel`, `nama_kel`) VALUES
('33.01.0121', 'Tambakreja'),
('33.01.0122', 'Bumireja'),
('33.01.0123', 'Ciklapa'),
('33.01.0124', 'Kedungreja'),
('33.01.0125', 'Tambaksari'),
('33.01.0221', 'Menganti'),
('33.01.0222', 'Slarang'),
('33.01.0223', 'Kesugihan'),
('33.01.0224', 'Kalisabuk'),
('33.01.0225', 'Karangkandri');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan_imbas`
--

CREATE TABLE `kelurahan_imbas` (
  `id_imbas` varchar(10) NOT NULL,
  `kid_kel` varchar(10) NOT NULL,
  `jml_kor_laki` int(10) NOT NULL,
  `jml_kor_perempuan` int(10) NOT NULL,
  `jml_hil_laki` int(10) NOT NULL,
  `jml_hil_perempuan` int(10) NOT NULL,
  `jml_eva_laki` int(10) NOT NULL,
  `jml_eva_perempuan` int(10) NOT NULL,
  `jml_meninggal_laki` int(10) NOT NULL,
  `jml_meninggal_perempuan` int(10) NOT NULL,
  `pjg_jln_imbas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan_imbas`
--

INSERT INTO `kelurahan_imbas` (`id_imbas`, `kid_kel`, `jml_kor_laki`, `jml_kor_perempuan`, `jml_hil_laki`, `jml_hil_perempuan`, `jml_eva_laki`, `jml_eva_perempuan`, `jml_meninggal_laki`, `jml_meninggal_perempuan`, `pjg_jln_imbas`) VALUES
('Imbas001', '33.01.0121', 20, 20, 20, 20, 20, 20, 20, 20, '100');

-- --------------------------------------------------------

--
-- Table structure for table `master_bantuan`
--

CREATE TABLE `master_bantuan` (
  `id_bantuan` varchar(10) NOT NULL,
  `mbid_wilayah` varchar(10) NOT NULL,
  `tanggal_bantuan` date NOT NULL,
  `mbid_operator` varchar(10) NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_bantuan`
--

INSERT INTO `master_bantuan` (`id_bantuan`, `mbid_wilayah`, `tanggal_bantuan`, `mbid_operator`, `tanggal_input`) VALUES
('Bantu001', '33A', '2019-07-13', 'Oper004', '2019-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `master_bencana`
--

CREATE TABLE `master_bencana` (
  `id_master_bencana` varchar(10) NOT NULL,
  `mid_bencana` varchar(10) NOT NULL,
  `mid_kab` varchar(10) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `tanggal_bencana` date NOT NULL,
  `jml_kor_luka` int(10) NOT NULL,
  `jml_kor_meninggal` int(10) NOT NULL,
  `jml_kor_hilang` int(10) NOT NULL,
  `jml_kor_evakuasi` int(10) NOT NULL,
  `jml_rmh_rusak` int(10) NOT NULL,
  `jml_rmh_hancur` int(10) NOT NULL,
  `status_komunikasi` enum('Lancar','Terputus') NOT NULL,
  `status_transportasi` enum('Lancar','Macet') NOT NULL,
  `status_tpt_kesehatan` enum('Layak','Tidak') NOT NULL,
  `status_pra_pendidikan` enum('Ada','Tidak') NOT NULL,
  `status_listrik` enum('Ada','Tidak') NOT NULL,
  `status_air_bersih` enum('Layak','Tidak') NOT NULL,
  `mid_operator` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_bencana`
--

INSERT INTO `master_bencana` (`id_master_bencana`, `mid_bencana`, `mid_kab`, `latitude`, `longitude`, `tanggal_bencana`, `jml_kor_luka`, `jml_kor_meninggal`, `jml_kor_hilang`, `jml_kor_evakuasi`, `jml_rmh_rusak`, `jml_rmh_hancur`, `status_komunikasi`, `status_transportasi`, `status_tpt_kesehatan`, `status_pra_pendidikan`, `status_listrik`, `status_air_bersih`, `mid_operator`) VALUES
('MBnc001', 'Bencana001', '33.01', -7.6983, 109.023, '2018-12-05', 20, 20, 10, 10, 15, 15, 'Lancar', 'Macet', 'Layak', 'Ada', 'Ada', 'Tidak', 'Oper005'),
('MBnc002', 'Bencana002', '33.02', -7.55201, 110.83, '2018-12-04', 20, 20, 20, 20, 20, 20, 'Lancar', 'Lancar', 'Layak', 'Ada', 'Ada', 'Layak', 'Oper006'),
('MBnc003', 'Bencana003', '33.04', -7.44657, 109.424, '2017-01-02', 100, 0, 16, 15, 29, 1, 'Terputus', 'Lancar', 'Tidak', 'Ada', 'Ada', 'Tidak', 'Oper006');

-- --------------------------------------------------------

--
-- Table structure for table `master_permintaan`
--

CREATE TABLE `master_permintaan` (
  `id_permintaan` varchar(10) NOT NULL,
  `mpid_wilayah` varchar(10) NOT NULL,
  `tanggal_permintaan` date NOT NULL,
  `mpid_operator` varchar(10) NOT NULL,
  `tanggal_approve` date NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_permintaan`
--

INSERT INTO `master_permintaan` (`id_permintaan`, `mpid_wilayah`, `tanggal_permintaan`, `mpid_operator`, `tanggal_approve`, `tanggal_input`) VALUES
('Minta001', '33A', '2019-07-08', 'Oper004', '2019-07-10', '2019-07-11');

-- --------------------------------------------------------

--
-- Stand-in structure for view `no1`
-- (See below for the actual view)
--
CREATE TABLE `no1` (
`id_brg` varchar(10)
,`nama_brg` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id_operator` varchar(10) NOT NULL,
  `oid_kab` varchar(10) NOT NULL,
  `nama_operator` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_operator`, `oid_kab`, `nama_operator`) VALUES
('Oper004', '33.04', 'Nurmajid H'),
('Oper005', '33.05', 'Wafi Hamdani'),
('Oper006', '33.06', 'Arfani Eka');

-- --------------------------------------------------------

--
-- Table structure for table `stok_logistik`
--

CREATE TABLE `stok_logistik` (
  `id_stok` varchar(10) NOT NULL,
  `sid_brg` varchar(10) NOT NULL,
  `sid_kab` varchar(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `satuan` enum('Kg','Dus','Liter','Pack') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` varchar(10) NOT NULL,
  `nama_prov` varchar(10) NOT NULL,
  `wid_kab` varchar(10) NOT NULL,
  `wid_kec` varchar(10) NOT NULL,
  `wid_kel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `nama_prov`, `wid_kab`, `wid_kec`, `wid_kel`) VALUES
('33A', 'Jateng', '33.01', '33.01.01', '33.01.0122');

-- --------------------------------------------------------

--
-- Structure for view `data_detail_bantuan`
--
DROP TABLE IF EXISTS `data_detail_bantuan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_detail_bantuan`  AS  select `detail_bantuan`.`dbid_bantuan` AS `dbid_bantuan`,`detail_bantuan`.`dbid_brg` AS `dbid_brg`,`detail_bantuan`.`dbid_stok` AS `dbid_stok`,`detail_bantuan`.`dbid_operator` AS `dbid_operator` from `detail_bantuan` ;

-- --------------------------------------------------------

--
-- Structure for view `data_detail_permintaan`
--
DROP TABLE IF EXISTS `data_detail_permintaan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_detail_permintaan`  AS  select `detail_permintaan`.`dpid_permintaan` AS `dpid_permintaan`,`detail_permintaan`.`dpid_brg` AS `dpid_brg`,`detail_permintaan`.`dpid_stok` AS `dpid_stok`,`detail_permintaan`.`dpid_operator` AS `dpid_operator` from `detail_permintaan` ;

-- --------------------------------------------------------

--
-- Structure for view `data_kelurahan_imbas`
--
DROP TABLE IF EXISTS `data_kelurahan_imbas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_kelurahan_imbas`  AS  select `kelurahan_imbas`.`id_imbas` AS `id_imbas`,`kelurahan_imbas`.`kid_kel` AS `kid_kel`,`kelurahan_imbas`.`jml_kor_laki` AS `jml_kor_laki`,`kelurahan_imbas`.`jml_kor_perempuan` AS `jml_kor_perempuan`,`kelurahan_imbas`.`jml_hil_laki` AS `jml_hil_laki`,`kelurahan_imbas`.`jml_hil_perempuan` AS `jml_hil_perempuan`,`kelurahan_imbas`.`jml_eva_laki` AS `jml_eva_laki`,`kelurahan_imbas`.`jml_eva_perempuan` AS `jml_eva_perempuan`,`kelurahan_imbas`.`jml_meninggal_laki` AS `jml_meninggal_laki`,`kelurahan_imbas`.`jml_meninggal_perempuan` AS `jml_meninggal_perempuan`,`kelurahan_imbas`.`pjg_jln_imbas` AS `pjg_jln_imbas` from `kelurahan_imbas` ;

-- --------------------------------------------------------

--
-- Structure for view `data_master_bantuan`
--
DROP TABLE IF EXISTS `data_master_bantuan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_master_bantuan`  AS  select `master_bantuan`.`id_bantuan` AS `id_bantuan`,`master_bantuan`.`mbid_wilayah` AS `mbid_wilayah`,`master_bantuan`.`tanggal_bantuan` AS `tanggal_bantuan`,`master_bantuan`.`mbid_operator` AS `mbid_operator`,`master_bantuan`.`tanggal_input` AS `tanggal_input`,`wilayah`.`nama_prov` AS `nama_prov`,`operator`.`nama_operator` AS `nama_operator` from ((`master_bantuan` join `wilayah`) join `operator`) where ((`master_bantuan`.`mbid_wilayah` = `wilayah`.`id_wilayah`) and (`master_bantuan`.`mbid_operator` = `operator`.`id_operator`)) ;

-- --------------------------------------------------------

--
-- Structure for view `data_master_bencana`
--
DROP TABLE IF EXISTS `data_master_bencana`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_master_bencana`  AS  select `master_bencana`.`id_master_bencana` AS `id_master_bencana`,`master_bencana`.`mid_bencana` AS `mid_bencana`,`master_bencana`.`mid_kab` AS `mid_kab`,`master_bencana`.`latitude` AS `latitude`,`master_bencana`.`longitude` AS `longitude`,`master_bencana`.`tanggal_bencana` AS `tanggal_bencana`,`master_bencana`.`jml_kor_luka` AS `jml_kor_luka`,`master_bencana`.`jml_kor_meninggal` AS `jml_kor_meninggal`,`master_bencana`.`jml_kor_hilang` AS `jml_kor_hilang`,`master_bencana`.`jml_kor_evakuasi` AS `jml_kor_evakuasi`,`master_bencana`.`jml_rmh_rusak` AS `jml_rmh_rusak`,`master_bencana`.`jml_rmh_hancur` AS `jml_rmh_hancur`,`master_bencana`.`status_komunikasi` AS `status_komunikasi`,`master_bencana`.`status_transportasi` AS `status_transportasi`,`master_bencana`.`status_tpt_kesehatan` AS `status_tpt_kesehatan`,`master_bencana`.`status_pra_pendidikan` AS `status_pra_pendidikan`,`master_bencana`.`status_listrik` AS `status_listrik`,`master_bencana`.`status_air_bersih` AS `status_air_bersih`,`master_bencana`.`mid_operator` AS `mid_operator`,`bencana`.`jenis_bencana` AS `jenis_bencana`,`kabupaten`.`nama_kab` AS `nama_kab` from ((`master_bencana` join `bencana`) join `kabupaten`) where ((`master_bencana`.`mid_bencana` = `bencana`.`id_bencana`) and (`master_bencana`.`mid_kab` = `kabupaten`.`id_kab`)) ;

-- --------------------------------------------------------

--
-- Structure for view `data_master_permintaan`
--
DROP TABLE IF EXISTS `data_master_permintaan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_master_permintaan`  AS  select `master_permintaan`.`id_permintaan` AS `id_permintaan`,`master_permintaan`.`mpid_wilayah` AS `mpid_wilayah`,`master_permintaan`.`tanggal_permintaan` AS `tanggal_permintaan`,`master_permintaan`.`mpid_operator` AS `mpid_operator`,`master_permintaan`.`tanggal_approve` AS `tanggal_approve`,`master_permintaan`.`tanggal_input` AS `tanggal_input`,`wilayah`.`nama_prov` AS `nama_prov`,`operator`.`nama_operator` AS `nama_operator` from ((`master_permintaan` join `wilayah`) join `operator`) where ((`master_permintaan`.`mpid_wilayah` = `wilayah`.`id_wilayah`) and (`master_permintaan`.`mpid_operator` = `operator`.`id_operator`)) ;

-- --------------------------------------------------------

--
-- Structure for view `no1`
--
DROP TABLE IF EXISTS `no1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `no1`  AS  select `barang`.`id_brg` AS `id_brg`,`barang`.`nama_brg` AS `nama_brg` from `barang` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `bencana`
--
ALTER TABLE `bencana`
  ADD PRIMARY KEY (`id_bencana`);

--
-- Indexes for table `detail_bantuan`
--
ALTER TABLE `detail_bantuan`
  ADD KEY `dbid_bantuan` (`dbid_bantuan`),
  ADD KEY `dbid_brg` (`dbid_brg`),
  ADD KEY `dbid_stok` (`dbid_stok`),
  ADD KEY `dbid_operator` (`dbid_operator`);

--
-- Indexes for table `detail_permintaan`
--
ALTER TABLE `detail_permintaan`
  ADD KEY `dpid_permintaan` (`dpid_permintaan`),
  ADD KEY `dpid_brg` (`dpid_brg`),
  ADD KEY `dpid_stok` (`dpid_stok`),
  ADD KEY `dpid_operator` (`dpid_operator`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kab`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kel`);

--
-- Indexes for table `kelurahan_imbas`
--
ALTER TABLE `kelurahan_imbas`
  ADD PRIMARY KEY (`id_imbas`),
  ADD KEY `kid_kel` (`kid_kel`);

--
-- Indexes for table `master_bantuan`
--
ALTER TABLE `master_bantuan`
  ADD PRIMARY KEY (`id_bantuan`),
  ADD KEY `mbid_wilayah` (`mbid_wilayah`),
  ADD KEY `mbid_operator` (`mbid_operator`);

--
-- Indexes for table `master_bencana`
--
ALTER TABLE `master_bencana`
  ADD PRIMARY KEY (`id_master_bencana`),
  ADD KEY `mid_bencana` (`mid_bencana`),
  ADD KEY `mid_kab` (`mid_kab`),
  ADD KEY `mid_operator` (`mid_operator`);

--
-- Indexes for table `master_permintaan`
--
ALTER TABLE `master_permintaan`
  ADD PRIMARY KEY (`id_permintaan`),
  ADD KEY `mpid_wilayah` (`mpid_wilayah`),
  ADD KEY `mpid_operator` (`mpid_operator`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`),
  ADD KEY `oid_kab` (`oid_kab`);

--
-- Indexes for table `stok_logistik`
--
ALTER TABLE `stok_logistik`
  ADD PRIMARY KEY (`id_stok`),
  ADD KEY `sid_brg` (`sid_brg`),
  ADD KEY `sid_kab` (`sid_kab`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`),
  ADD KEY `wid_kab` (`wid_kab`),
  ADD KEY `wid_kec` (`wid_kec`),
  ADD KEY `wid_kel` (`wid_kel`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_bantuan`
--
ALTER TABLE `detail_bantuan`
  ADD CONSTRAINT `detail_bantuan_ibfk_1` FOREIGN KEY (`dbid_brg`) REFERENCES `barang` (`id_brg`),
  ADD CONSTRAINT `detail_bantuan_ibfk_2` FOREIGN KEY (`dbid_operator`) REFERENCES `operator` (`id_operator`),
  ADD CONSTRAINT `detail_bantuan_ibfk_3` FOREIGN KEY (`dbid_stok`) REFERENCES `stok_logistik` (`id_stok`),
  ADD CONSTRAINT `detail_bantuan_ibfk_4` FOREIGN KEY (`dbid_bantuan`) REFERENCES `master_bantuan` (`id_bantuan`);

--
-- Constraints for table `detail_permintaan`
--
ALTER TABLE `detail_permintaan`
  ADD CONSTRAINT `detail_permintaan_ibfk_1` FOREIGN KEY (`dpid_permintaan`) REFERENCES `master_permintaan` (`id_permintaan`),
  ADD CONSTRAINT `detail_permintaan_ibfk_2` FOREIGN KEY (`dpid_brg`) REFERENCES `barang` (`id_brg`),
  ADD CONSTRAINT `detail_permintaan_ibfk_3` FOREIGN KEY (`dpid_stok`) REFERENCES `stok_logistik` (`id_stok`),
  ADD CONSTRAINT `detail_permintaan_ibfk_4` FOREIGN KEY (`dpid_operator`) REFERENCES `operator` (`id_operator`);

--
-- Constraints for table `kelurahan_imbas`
--
ALTER TABLE `kelurahan_imbas`
  ADD CONSTRAINT `kelurahan_imbas_ibfk_1` FOREIGN KEY (`kid_kel`) REFERENCES `kelurahan` (`id_kel`);

--
-- Constraints for table `master_bantuan`
--
ALTER TABLE `master_bantuan`
  ADD CONSTRAINT `master_bantuan_ibfk_1` FOREIGN KEY (`mbid_operator`) REFERENCES `operator` (`id_operator`),
  ADD CONSTRAINT `master_bantuan_ibfk_2` FOREIGN KEY (`mbid_wilayah`) REFERENCES `wilayah` (`id_wilayah`);

--
-- Constraints for table `master_bencana`
--
ALTER TABLE `master_bencana`
  ADD CONSTRAINT `master_bencana_ibfk_1` FOREIGN KEY (`mid_bencana`) REFERENCES `bencana` (`id_bencana`),
  ADD CONSTRAINT `master_bencana_ibfk_2` FOREIGN KEY (`mid_kab`) REFERENCES `kabupaten` (`id_kab`),
  ADD CONSTRAINT `master_bencana_ibfk_3` FOREIGN KEY (`mid_operator`) REFERENCES `operator` (`id_operator`);

--
-- Constraints for table `master_permintaan`
--
ALTER TABLE `master_permintaan`
  ADD CONSTRAINT `master_permintaan_ibfk_1` FOREIGN KEY (`mpid_wilayah`) REFERENCES `wilayah` (`id_wilayah`),
  ADD CONSTRAINT `master_permintaan_ibfk_2` FOREIGN KEY (`mpid_operator`) REFERENCES `operator` (`id_operator`);

--
-- Constraints for table `operator`
--
ALTER TABLE `operator`
  ADD CONSTRAINT `operator_ibfk_1` FOREIGN KEY (`oid_kab`) REFERENCES `kabupaten` (`id_kab`);

--
-- Constraints for table `stok_logistik`
--
ALTER TABLE `stok_logistik`
  ADD CONSTRAINT `stok_logistik_ibfk_1` FOREIGN KEY (`sid_brg`) REFERENCES `barang` (`id_brg`),
  ADD CONSTRAINT `stok_logistik_ibfk_2` FOREIGN KEY (`sid_kab`) REFERENCES `kabupaten` (`id_kab`);

--
-- Constraints for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD CONSTRAINT `wilayah_ibfk_1` FOREIGN KEY (`wid_kab`) REFERENCES `kabupaten` (`id_kab`),
  ADD CONSTRAINT `wilayah_ibfk_2` FOREIGN KEY (`wid_kec`) REFERENCES `kecamatan` (`id_kec`),
  ADD CONSTRAINT `wilayah_ibfk_3` FOREIGN KEY (`wid_kel`) REFERENCES `kelurahan` (`id_kel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
