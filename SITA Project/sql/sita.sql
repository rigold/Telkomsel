-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2017 at 06:00 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sita`
--

-- --------------------------------------------------------

--
-- Table structure for table `daerah`
--

CREATE TABLE `daerah` (
  `kota_kabupaten` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ho`
--

CREATE TABLE `ho` (
  `no` int(10) NOT NULL,
  `ho_nomor` varchar(25) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ho_daftar_ulang` date NOT NULL,
  `ho_start` date NOT NULL,
  `ho_finish` date NOT NULL,
  `ho_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `identitas_pemilik`
--

CREATE TABLE `identitas_pemilik` (
  `no` int(10) NOT NULL,
  `identitas_pemilik_ktp` varchar(16) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `identitas_pemilik_kk` varchar(16) NOT NULL,
  `identitas_pemilik_lahan` varchar(30) NOT NULL,
  `identitas_pemilik_kuasa` varchar(30) NOT NULL,
  `identitas_pemilik_alamat` varchar(200) NOT NULL,
  `identitas_pemilik_telepon` varchar(15) NOT NULL,
  `identitas_pemilik_hp` varchar(15) NOT NULL,
  `identitas_pemilik_email` varchar(30) NOT NULL,
  `identitas_pemilik_sp_keluarga` char(10) NOT NULL,
  `sp` char(10) NOT NULL,
  `sp_ahli_waris` char(10) NOT NULL,
  `sp_janda` char(10) NOT NULL,
  `sp_kepemilikan_tanah` char(10) NOT NULL,
  `sp_pelepasan_hak` char(10) NOT NULL,
  `sp_pembayaran` char(10) NOT NULL,
  `sp_penguasaan_fisik_tanah` char(10) NOT NULL,
  `sp_peralihan_atas_pekarangan` char(10) NOT NULL,
  `sp_persetujuan_kepala_desa` char(10) NOT NULL,
  `sp_tanah_pemohon` char(10) NOT NULL,
  `sp_tidak_keberatan_jalan_pribadi` char(10) NOT NULL,
  `sp_tidak_keberatan_jalan_umum` char(10) NOT NULL,
  `akta_hibah` varchar(30) NOT NULL,
  `akta_jualbeli_sewa` varchar(30) NOT NULL,
  `akta_hak_bersama` varchar(30) NOT NULL,
  `akta_warisan` varchar(30) NOT NULL,
  `akta_pemisahan` varchar(30) NOT NULL,
  `akta_nikah` varchar(30) NOT NULL,
  `ijin_ippt` varchar(30) NOT NULL,
  `ijin_warga` varchar(30) NOT NULL,
  `ijin_ukl_upl` varchar(30) NOT NULL,
  `ijin_sertifikat_tanah` varchar(30) NOT NULL,
  `sket_beda_nama` char(10) NOT NULL,
  `sket_akses_lahan_jalan` char(10) NOT NULL,
  `sket_asal_tanah` char(10) NOT NULL,
  `sket_beda_luas_tanah` char(10) NOT NULL,
  `sket_fatwa_waris` char(10) NOT NULL,
  `sket_kematian` char(10) NOT NULL,
  `sket_penduduk` char(10) NOT NULL,
  `sket_permohonan_imb_ho_ip` char(10) NOT NULL,
  `sket_persetujuan_sewa_lahan` char(10) NOT NULL,
  `sket_riwayat_tanah` char(10) NOT NULL,
  `sket_suami_istri` char(10) NOT NULL,
  `sket_tanah` char(10) NOT NULL,
  `sket_tidak_sengketa` char(10) NOT NULL,
  `sket_keberatan` char(10) NOT NULL,
  `sl_sk` char(10) NOT NULL,
  `sl_sk_pengambilan_jaminan_asli` char(10) NOT NULL,
  `sl_surat_jaminan_hukum` char(10) NOT NULL,
  `sl_pks` varchar(50) NOT NULL,
  `sl_surat_perjanjian_sewa_tanah` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ijin_dephub`
--

CREATE TABLE `ijin_dephub` (
  `no` int(10) NOT NULL,
  `ijin_dephub_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_dephub_start` date NOT NULL,
  `ijin_dephub_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ijin_genset`
--

CREATE TABLE `ijin_genset` (
  `no` int(10) NOT NULL,
  `ijin_genset_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_genset_status` varchar(50) NOT NULL,
  `ijin_genset_start` date NOT NULL,
  `ijin_genset_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ijin_prinsip`
--

CREATE TABLE `ijin_prinsip` (
  `no` int(10) NOT NULL,
  `ijin_prinsip_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_prinsip_start` date NOT NULL,
  `ijin_prinsip_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ijin_ptt`
--

CREATE TABLE `ijin_ptt` (
  `no` int(10) NOT NULL,
  `ijin_ptt_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_ptt_start` date NOT NULL,
  `ijin_ptt_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imb`
--

CREATE TABLE `imb` (
  `no` int(10) NOT NULL,
  `imb_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `imb_mitra_pengurus` varbinary(30) NOT NULL,
  `imb_status_kepengurusan` varbinary(50) NOT NULL,
  `imb_status` varbinary(50) NOT NULL,
  `imb_daftar_ulang` date NOT NULL,
  `imb_start` date NOT NULL,
  `imb_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imtu`
--

CREATE TABLE `imtu` (
  `no` int(10) NOT NULL,
  `ijin_imtu_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_imtu_start` date NOT NULL,
  `ijin_imtu_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ipb`
--

CREATE TABLE `ipb` (
  `ijin_ipb_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_ipb_start` date NOT NULL,
  `ijin_ipb_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pbb`
--

CREATE TABLE `pbb` (
  `no` int(10) NOT NULL,
  `nop` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `nilai_pbb_site` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `status` varbinary(50) NOT NULL,
  `njop_tanah` int(11) NOT NULL,
  `njop_bangunan` int(11) NOT NULL,
  `surat_pbb` varchar(100) NOT NULL,
  `koef_pbb` double NOT NULL,
  `pbb_mitra` varbinary(50) NOT NULL,
  `pbb_denda` int(10) NOT NULL,
  `pbb_fee` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `sites_id` varchar(7) NOT NULL,
  `sites_nama` varchar(30) NOT NULL,
  `sites_status_lahan` varbinary(10) NOT NULL,
  `sites_status_tower` varbinary(10) NOT NULL,
  `sites_pemilik_tower` varbinary(30) NOT NULL,
  `sites_alamat` varchar(200) NOT NULL,
  `sites_kota_kabupaten` varchar(30) NOT NULL,
  `sites_kontraktor_utama` varbinary(30) NOT NULL,
  `sites_penyedia_menara` varbinary(30) NOT NULL,
  `sites_branch` varchar(30) NOT NULL,
  `sites_long` float NOT NULL,
  `sites_lat` float NOT NULL,
  `sites_on_air_date` date NOT NULL,
  `sites_colocated_site` varchar(30) NOT NULL,
  `sites_type_bts` varchar(10) NOT NULL,
  `sites_type_site` varchar(15) NOT NULL,
  `sites_tower_height` varchar(5) NOT NULL,
  `sites_tower_type` varchar(10) NOT NULL,
  `sites_shelter_type` varchar(10) NOT NULL,
  `sites_shelter_size` varchar(10) NOT NULL,
  `sites_luas_lahan` varchar(10) NOT NULL,
  `sites_luas_jalan_akses` varchar(10) NOT NULL,
  `sites_denah_tanah` varchar(100) NOT NULL,
  `sites_peta_lrt` varchar(100) NOT NULL,
  `sites_sketsa_bt` varchar(100) NOT NULL,
  `sites_tanggal_start` date NOT NULL,
  `sites_tanggal_finish` date NOT NULL,
  `sites_harga_per_tahun` int(11) NOT NULL,
  `sites_penawaran_pemilik_lahan` int(12) NOT NULL,
  `sites_remark` varchar(200) NOT NULL,
  `perpanjangan_pagu` int(11) NOT NULL,
  `perpanjangan_pic` varchar(30) NOT NULL,
  `perpanjangan_spph` int(11) NOT NULL,
  `perpanjangan_spph_tanggal` date NOT NULL,
  `perpanjangan_vendor_list` varbinary(30) NOT NULL,
  `perpanjangan_invoice` date NOT NULL,
  `perpanjangan_invoice_nomor` varchar(50) NOT NULL,
  `bak_nomor` varchar(50) NOT NULL,
  `bak_tanggal` date NOT NULL,
  `bak_harga` int(11) NOT NULL,
  `bak_status` varbinary(50) NOT NULL,
  `comcase_tanggal` date NOT NULL,
  `comcase_keterangan` varbinary(50) NOT NULL,
  `comcase_status` varbinary(50) NOT NULL,
  `comcase_solusi` varbinary(50) NOT NULL,
  `comcase_file` varchar(100) NOT NULL,
  `comcase_mitra` varbinary(30) NOT NULL,
  `tanggal_masuk_pks` date NOT NULL,
  `tanggal_keluar_pks` date NOT NULL,
  `comcase_no_fpp` varchar(100) NOT NULL,
  `comcase_keldok` varchar(100) NOT NULL,
  `comcase_biaya` int(100) NOT NULL,
  `comcase_status_bayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skrd_rpm`
--

CREATE TABLE `skrd_rpm` (
  `no` int(10) NOT NULL,
  `no_skrd` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `status` varbinary(50) NOT NULL,
  `surat_skrd` varchar(100) NOT NULL,
  `harga_skrd` int(11) NOT NULL,
  `koef_skrd` double NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` int(7) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `link_profile_pic` varchar(100) DEFAULT NULL,
  `jabatan` varchar(50) NOT NULL,
  `admin` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `password`, `nama_user`, `link_profile_pic`, `jabatan`, `admin`) VALUES
(10001, '123', 'ADMIN', '1502157921.pngadmin.png', 'ADMIN', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `z_comcase`
--

CREATE TABLE `z_comcase` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z_comcase`
--

INSERT INTO `z_comcase` (`no`, `no_surat`, `nama`) VALUES
(1, 'COMCASE//10001/08-08-2017', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `z_datasites`
--

CREATE TABLE `z_datasites` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z_datasites`
--

INSERT INTO `z_datasites` (`no`, `no_surat`, `nama`) VALUES
(1, 'DATASITE/Bangkalan//10001/08-08-2017', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `z_detail_pbb`
--

CREATE TABLE `z_detail_pbb` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z_detail_pbb`
--

INSERT INTO `z_detail_pbb` (`no`, `no_surat`, `nama`) VALUES
(1, 'PBB/Bangkalan//10001/08-08-2017', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `z_detail_rpm`
--

CREATE TABLE `z_detail_rpm` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z_detail_rpm`
--

INSERT INTO `z_detail_rpm` (`no`, `no_surat`, `nama`) VALUES
(1, 'RPM/Bangkalan//10001/08-08-2017', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `z_monitoring`
--

CREATE TABLE `z_monitoring` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z_monitoring`
--

INSERT INTO `z_monitoring` (`no`, `no_surat`, `nama`) VALUES
(1, 'Monitoring//10001/08-08-2017', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `z_pbb`
--

CREATE TABLE `z_pbb` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z_pbb`
--

INSERT INTO `z_pbb` (`no`, `no_surat`, `nama`) VALUES
(1, 'PBB//10001/08-08-2017', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `z_perizinan`
--

CREATE TABLE `z_perizinan` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z_perizinan`
--

INSERT INTO `z_perizinan` (`no`, `no_surat`, `nama`) VALUES
(1, 'PERIZINAN//10001/08-08-2017', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `z_perpanjangan`
--

CREATE TABLE `z_perpanjangan` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `z_perpanjangan`
--

INSERT INTO `z_perpanjangan` (`no`, `no_surat`, `nama`) VALUES
(1, 'PERPANJANGAN//10001/08-08-2017', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `z_rpm`
--

CREATE TABLE `z_rpm` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z_rpm`
--

INSERT INTO `z_rpm` (`no`, `no_surat`, `nama`) VALUES
(1, 'RPM//10001/08-08-2017', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`kota_kabupaten`);

--
-- Indexes for table `ho`
--
ALTER TABLE `ho`
  ADD PRIMARY KEY (`no`),
  ADD KEY `fk_ho_site` (`sites_id`);

--
-- Indexes for table `identitas_pemilik`
--
ALTER TABLE `identitas_pemilik`
  ADD PRIMARY KEY (`no`),
  ADD KEY `fk_idp_site` (`sites_id`);

--
-- Indexes for table `ijin_dephub`
--
ALTER TABLE `ijin_dephub`
  ADD PRIMARY KEY (`no`),
  ADD KEY `fk_dephub_site` (`sites_id`);

--
-- Indexes for table `ijin_genset`
--
ALTER TABLE `ijin_genset`
  ADD PRIMARY KEY (`no`),
  ADD KEY `fk_genset_site` (`sites_id`);

--
-- Indexes for table `ijin_prinsip`
--
ALTER TABLE `ijin_prinsip`
  ADD PRIMARY KEY (`no`),
  ADD KEY `sites_id` (`sites_id`);

--
-- Indexes for table `ijin_ptt`
--
ALTER TABLE `ijin_ptt`
  ADD PRIMARY KEY (`no`),
  ADD KEY `fk_ippt_site` (`sites_id`);

--
-- Indexes for table `imb`
--
ALTER TABLE `imb`
  ADD PRIMARY KEY (`no`),
  ADD KEY `fk_imb_site` (`sites_id`);

--
-- Indexes for table `imtu`
--
ALTER TABLE `imtu`
  ADD PRIMARY KEY (`no`),
  ADD KEY `fk_imtu_site` (`sites_id`);

--
-- Indexes for table `ipb`
--
ALTER TABLE `ipb`
  ADD PRIMARY KEY (`ijin_ipb_nomor`),
  ADD KEY `fk_ipb_site` (`sites_id`);

--
-- Indexes for table `pbb`
--
ALTER TABLE `pbb`
  ADD PRIMARY KEY (`no`),
  ADD KEY `fk_pbb_site` (`sites_id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`sites_id`),
  ADD KEY `fk_site_daerah` (`sites_kota_kabupaten`);

--
-- Indexes for table `skrd_rpm`
--
ALTER TABLE `skrd_rpm`
  ADD PRIMARY KEY (`no`),
  ADD KEY `fk_rpm_site` (`sites_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `z_comcase`
--
ALTER TABLE `z_comcase`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `z_datasites`
--
ALTER TABLE `z_datasites`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `z_detail_pbb`
--
ALTER TABLE `z_detail_pbb`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `z_detail_rpm`
--
ALTER TABLE `z_detail_rpm`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `z_monitoring`
--
ALTER TABLE `z_monitoring`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `z_pbb`
--
ALTER TABLE `z_pbb`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `z_perizinan`
--
ALTER TABLE `z_perizinan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `z_perpanjangan`
--
ALTER TABLE `z_perpanjangan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `z_rpm`
--
ALTER TABLE `z_rpm`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ho`
--
ALTER TABLE `ho`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `identitas_pemilik`
--
ALTER TABLE `identitas_pemilik`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ijin_dephub`
--
ALTER TABLE `ijin_dephub`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ijin_genset`
--
ALTER TABLE `ijin_genset`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ijin_prinsip`
--
ALTER TABLE `ijin_prinsip`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ijin_ptt`
--
ALTER TABLE `ijin_ptt`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `imb`
--
ALTER TABLE `imb`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `imtu`
--
ALTER TABLE `imtu`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pbb`
--
ALTER TABLE `pbb`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skrd_rpm`
--
ALTER TABLE `skrd_rpm`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `z_comcase`
--
ALTER TABLE `z_comcase`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `z_datasites`
--
ALTER TABLE `z_datasites`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `z_detail_pbb`
--
ALTER TABLE `z_detail_pbb`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `z_detail_rpm`
--
ALTER TABLE `z_detail_rpm`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `z_monitoring`
--
ALTER TABLE `z_monitoring`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `z_pbb`
--
ALTER TABLE `z_pbb`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `z_perizinan`
--
ALTER TABLE `z_perizinan`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `z_perpanjangan`
--
ALTER TABLE `z_perpanjangan`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `z_rpm`
--
ALTER TABLE `z_rpm`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ho`
--
ALTER TABLE `ho`
  ADD CONSTRAINT `fk_ho_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `identitas_pemilik`
--
ALTER TABLE `identitas_pemilik`
  ADD CONSTRAINT `fk_idp_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ijin_dephub`
--
ALTER TABLE `ijin_dephub`
  ADD CONSTRAINT `fk_dephub_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ijin_genset`
--
ALTER TABLE `ijin_genset`
  ADD CONSTRAINT `fk_genset_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ijin_prinsip`
--
ALTER TABLE `ijin_prinsip`
  ADD CONSTRAINT `sites_id` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ijin_ptt`
--
ALTER TABLE `ijin_ptt`
  ADD CONSTRAINT `fk_ippt_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `imb`
--
ALTER TABLE `imb`
  ADD CONSTRAINT `fk_imb_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `imtu`
--
ALTER TABLE `imtu`
  ADD CONSTRAINT `fk_imtu_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ipb`
--
ALTER TABLE `ipb`
  ADD CONSTRAINT `fk_ipb_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pbb`
--
ALTER TABLE `pbb`
  ADD CONSTRAINT `fk_pbb_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `site`
--
ALTER TABLE `site`
  ADD CONSTRAINT `fk_site_daerah` FOREIGN KEY (`sites_kota_kabupaten`) REFERENCES `daerah` (`kota_kabupaten`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skrd_rpm`
--
ALTER TABLE `skrd_rpm`
  ADD CONSTRAINT `fk_rpm_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
