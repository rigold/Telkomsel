-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jul 2017 pada 04.01
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `daerah`
--

CREATE TABLE `daerah` (
  `kota_kabupaten` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daerah`
--

INSERT INTO `daerah` (`kota_kabupaten`) VALUES
('-'),
('Bangkalan'),
('Banyuwangi'),
('Batu'),
('Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ho`
--

CREATE TABLE `ho` (
  `ho_nomor` int(25) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ho_daftar_ulang` date NOT NULL,
  `ho_start` date NOT NULL,
  `ho_finish` date NOT NULL,
  `ho_status` varbinary(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ho`
--

INSERT INTO `ho` (`ho_nomor`, `sites_id`, `ho_daftar_ulang`, `ho_start`, `ho_finish`, `ho_status`) VALUES
(111111, '111111', '0000-00-00', '0000-00-00', '0000-00-00', 0x313131313131),
(121212, '121212', '0000-00-00', '0000-00-00', '0000-00-00', 0x313131313131),
(131313, '131313', '0000-00-00', '0000-00-00', '0000-00-00', 0x313131313131),
(212121, '212121', '0000-00-00', '0000-00-00', '0000-00-00', ''),
(222222, '222222', '0000-00-00', '0000-00-00', '0000-00-00', ''),
(333333, '333333', '0000-00-00', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas_pemilik`
--

CREATE TABLE `identitas_pemilik` (
  `identitas_pemilik_ktp` int(16) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `identitas_pemilik_kk` int(16) NOT NULL,
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

--
-- Dumping data untuk tabel `identitas_pemilik`
--

INSERT INTO `identitas_pemilik` (`identitas_pemilik_ktp`, `sites_id`, `identitas_pemilik_kk`, `identitas_pemilik_lahan`, `identitas_pemilik_kuasa`, `identitas_pemilik_alamat`, `identitas_pemilik_telepon`, `identitas_pemilik_hp`, `identitas_pemilik_email`, `identitas_pemilik_sp_keluarga`, `sp`, `sp_ahli_waris`, `sp_janda`, `sp_kepemilikan_tanah`, `sp_pelepasan_hak`, `sp_pembayaran`, `sp_penguasaan_fisik_tanah`, `sp_peralihan_atas_pekarangan`, `sp_persetujuan_kepala_desa`, `sp_tanah_pemohon`, `sp_tidak_keberatan_jalan_pribadi`, `sp_tidak_keberatan_jalan_umum`, `akta_hibah`, `akta_jualbeli_sewa`, `akta_hak_bersama`, `akta_warisan`, `akta_pemisahan`, `akta_nikah`, `ijin_ippt`, `ijin_warga`, `ijin_ukl_upl`, `ijin_sertifikat_tanah`, `sket_beda_nama`, `sket_akses_lahan_jalan`, `sket_asal_tanah`, `sket_beda_luas_tanah`, `sket_fatwa_waris`, `sket_kematian`, `sket_penduduk`, `sket_permohonan_imb_ho_ip`, `sket_persetujuan_sewa_lahan`, `sket_riwayat_tanah`, `sket_suami_istri`, `sket_tanah`, `sket_tidak_sengketa`, `sket_keberatan`, `sl_sk`, `sl_sk_pengambilan_jaminan_asli`, `sl_surat_jaminan_hukum`, `sl_pks`, `sl_surat_perjanjian_sewa_tanah`) VALUES
(111111, '111111', 0, '', '', '', '', '', '', '', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '111111', 'Ada'),
(121212, '121212', 0, '', '', '', '', '', '', '', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '121212', 'Ada'),
(131313, '131313', 0, '', '', '', '', '', '', '', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '131313', 'Ada'),
(212121, '212121', 0, '', '', '', '', '', '', '', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '212121', 'Ada'),
(222222, '222222', 0, '', '', '', '', '', '', '', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '222222', 'Ada'),
(333333, '333333', 0, '', '', '', '', '', '', '', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '333333', 'Ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ijin_dephub`
--

CREATE TABLE `ijin_dephub` (
  `ijin_dephub_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_dephub_start` date NOT NULL,
  `ijin_dephub_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ijin_dephub`
--

INSERT INTO `ijin_dephub` (`ijin_dephub_nomor`, `sites_id`, `ijin_dephub_start`, `ijin_dephub_finish`) VALUES
('', '111111', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ijin_genset`
--

CREATE TABLE `ijin_genset` (
  `ijin_genset_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_genset_status` varchar(50) NOT NULL,
  `ijin_genset_start` date NOT NULL,
  `ijin_genset_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ijin_genset`
--

INSERT INTO `ijin_genset` (`ijin_genset_nomor`, `sites_id`, `ijin_genset_status`, `ijin_genset_start`, `ijin_genset_finish`) VALUES
('111111', '111111', '111111', '0000-00-00', '0000-00-00'),
('121212', '121212', '111111', '0000-00-00', '0000-00-00'),
('131313', '131313', '111111', '0000-00-00', '0000-00-00'),
('212121', '212121', '222222', '0000-00-00', '0000-00-00'),
('222222', '222222', '222222', '0000-00-00', '0000-00-00'),
('333333', '333333', '333333', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ijin_prinsip`
--

CREATE TABLE `ijin_prinsip` (
  `ijin_prinsip_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_prinsip_start` date NOT NULL,
  `ijin_prinsip_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ijin_prinsip`
--

INSERT INTO `ijin_prinsip` (`ijin_prinsip_nomor`, `sites_id`, `ijin_prinsip_start`, `ijin_prinsip_finish`) VALUES
('111111', '111111', '0000-00-00', '0000-00-00'),
('121212', '121212', '0000-00-00', '0000-00-00'),
('131313', '131313', '0000-00-00', '0000-00-00'),
('212121', '212121', '2016-07-20', '2017-07-20'),
('222222', '222222', '2016-07-20', '2017-07-20'),
('333333', '333333', '2016-07-20', '2017-07-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ijin_ptt`
--

CREATE TABLE `ijin_ptt` (
  `ijin_ptt_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_ptt_start` date NOT NULL,
  `ijin_ptt_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ijin_ptt`
--

INSERT INTO `ijin_ptt` (`ijin_ptt_nomor`, `sites_id`, `ijin_ptt_start`, `ijin_ptt_finish`) VALUES
('111111', '111111', '0000-00-00', '0000-00-00'),
('121212', '121212', '0000-00-00', '0000-00-00'),
('131313', '131313', '0000-00-00', '0000-00-00'),
('212121', '212121', '0000-00-00', '0000-00-00'),
('222222', '222222', '0000-00-00', '0000-00-00'),
('333333', '333333', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `imb`
--

CREATE TABLE `imb` (
  `imb_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `imb_mitra_pengurus` varbinary(30) NOT NULL,
  `imb_status_kepengurusan` varbinary(50) NOT NULL,
  `imb_status` varbinary(50) NOT NULL,
  `imb_daftar_ulang` date NOT NULL,
  `imb_start` date NOT NULL,
  `imb_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `imb`
--

INSERT INTO `imb` (`imb_nomor`, `sites_id`, `imb_mitra_pengurus`, `imb_status_kepengurusan`, `imb_status`, `imb_daftar_ulang`, `imb_start`, `imb_finish`) VALUES
('111111', '111111', 0x313131313131, 0x313131313131, 0x313131313131, '0000-00-00', '2016-08-12', '2017-08-12'),
('121212', '121212', 0x313231323132, 0x313131313131, 0x313131313131, '0000-00-00', '2016-08-12', '2017-08-12'),
('131313', '131313', 0x313331333133, 0x313131313131, 0x313131313131, '0000-00-00', '2017-07-12', '2018-07-12'),
('212121', '212121', '', 0x323232323232, 0x323232323232, '0000-00-00', '2016-08-12', '2017-08-12'),
('222222', '222222', '', 0x323232323232, 0x323232323232, '0000-00-00', '2016-07-20', '2017-07-20'),
('333333', '333333', '', 0x333333333333, 0x333333333333, '0000-00-00', '2016-09-18', '2017-09-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `imtu`
--

CREATE TABLE `imtu` (
  `ijin_imtu_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_imtu_start` date NOT NULL,
  `ijin_imtu_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `imtu`
--

INSERT INTO `imtu` (`ijin_imtu_nomor`, `sites_id`, `ijin_imtu_start`, `ijin_imtu_finish`) VALUES
('111111', '111111', '0000-00-00', '0000-00-00'),
('121212', '121212', '0000-00-00', '0000-00-00'),
('131313', '131313', '0000-00-00', '0000-00-00'),
('212121', '212121', '0000-00-00', '0000-00-00'),
('222222', '222222', '0000-00-00', '0000-00-00'),
('333333', '333333', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ipb`
--

CREATE TABLE `ipb` (
  `ijin_ipb_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_ipb_start` date NOT NULL,
  `ijin_ipb_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ipb`
--

INSERT INTO `ipb` (`ijin_ipb_nomor`, `sites_id`, `ijin_ipb_start`, `ijin_ipb_finish`) VALUES
('111111', '111111', '0000-00-00', '0000-00-00'),
('121212', '121212', '0000-00-00', '0000-00-00'),
('131313', '131313', '0000-00-00', '0000-00-00'),
('212121', '212121', '0000-00-00', '0000-00-00'),
('222222', '222222', '0000-00-00', '0000-00-00'),
('333333', '333333', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbb`
--

CREATE TABLE `pbb` (
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

--
-- Dumping data untuk tabel `pbb`
--

INSERT INTO `pbb` (`nop`, `sites_id`, `nilai_pbb_site`, `tanggal_mulai`, `tanggal_jatuh_tempo`, `status`, `njop_tanah`, `njop_bangunan`, `surat_pbb`, `koef_pbb`, `pbb_mitra`, `pbb_denda`, `pbb_fee`) VALUES
('111111', '111111', 5000000, '2016-08-12', '2017-08-12', 0x313131313131, 5000000, 5000000, 'PBB1500180347.', 111111, '', 0, 0),
('121212', '121212', 4000000, '2016-08-12', '2017-08-12', 0x313131313131, 121212, 121212, 'PBB1500180875.', 111111, '', 0, 0),
('131313', '131313', 4000000, '2017-07-12', '2018-07-12', 0x313131313131, 131313, 131313, 'PBB1500181753.', 111111, '', 0, 0),
('212121', '212121', 4500000, '2016-09-20', '2017-07-20', 0x323232323232, 4500000, 4500000, 'PBB1500257951.', 222222, '', 0, 0),
('222222', '222222', 3500000, '2016-07-20', '2017-07-20', 0x323232323232, 3500000, 3500000, 'PBB1500257726.', 222222, '', 0, 0),
('333333', '333333', 4500000, '2016-08-18', '2017-09-18', 0x333333333333, 4500000, 4500000, 'PBB1500258231.', 333333, '', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `site`
--

CREATE TABLE `site` (
  `sites_id` varchar(6) NOT NULL,
  `sites_nama` varchar(30) NOT NULL,
  `sites_status_lahan` varbinary(10) NOT NULL,
  `sites_status_tower` varbinary(10) NOT NULL,
  `sites_pemilik_tower` varbinary(30) NOT NULL,
  `sites_alamat` varbinary(200) NOT NULL,
  `sites_kota_kabupaten` varchar(30) NOT NULL,
  `sites_kontraktor_utama` varbinary(30) NOT NULL,
  `sites_penyedia_menara` varbinary(30) NOT NULL,
  `sites_branch` varchar(30) NOT NULL,
  `sites_long` double NOT NULL,
  `sites_lat` double NOT NULL,
  `sites_on_air_date` date NOT NULL,
  `sites_colocated_site` varchar(30) NOT NULL,
  `sites_type_bts` varchar(10) NOT NULL,
  `sites_type_site` varchar(15) NOT NULL,
  `sites_tower_height` int(5) NOT NULL,
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
  `sites_remark` varchar(200) NOT NULL,
  `perpanjangan_pagu` int(11) NOT NULL,
  `perpanjangan_pic` varchar(30) NOT NULL,
  `perpanjangan_spph` int(11) NOT NULL,
  `perpanjangan_vendor_list` varbinary(30) NOT NULL,
  `perpanjangan_invoice` date NOT NULL,
  `bak_nomor` varchar(50) NOT NULL,
  `bak_tanggal` date NOT NULL,
  `bak_harga` int(11) NOT NULL,
  `bak_status` varbinary(50) NOT NULL,
  `comcase_tanggal` date NOT NULL,
  `comcase_keterangan` varbinary(50) NOT NULL,
  `comcase_status` varbinary(50) NOT NULL,
  `comcase_solusi` varbinary(50) NOT NULL,
  `comcase_file` varchar(100) NOT NULL,
  `comcase_mitra` varbinary(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `site`
--

INSERT INTO `site` (`sites_id`, `sites_nama`, `sites_status_lahan`, `sites_status_tower`, `sites_pemilik_tower`, `sites_alamat`, `sites_kota_kabupaten`, `sites_kontraktor_utama`, `sites_penyedia_menara`, `sites_branch`, `sites_long`, `sites_lat`, `sites_on_air_date`, `sites_colocated_site`, `sites_type_bts`, `sites_type_site`, `sites_tower_height`, `sites_tower_type`, `sites_shelter_type`, `sites_shelter_size`, `sites_luas_lahan`, `sites_luas_jalan_akses`, `sites_denah_tanah`, `sites_peta_lrt`, `sites_sketsa_bt`, `sites_tanggal_start`, `sites_tanggal_finish`, `sites_harga_per_tahun`, `sites_remark`, `perpanjangan_pagu`, `perpanjangan_pic`, `perpanjangan_spph`, `perpanjangan_vendor_list`, `perpanjangan_invoice`, `bak_nomor`, `bak_tanggal`, `bak_harga`, `bak_status`, `comcase_tanggal`, `comcase_keterangan`, `comcase_status`, `comcase_solusi`, `comcase_file`, `comcase_mitra`) VALUES
('111111', '111111', 0x313131313131, 0x42656c69, 0x313131313131, 0x616e676b613131, 'Bangkalan', 0x313131313131, 0x313131313131, '111111', 111111, 111111, '2017-07-12', '111111', '111111', '111111', 111111, '', '', '', '', '', 'DT1500180347.', 'PL1500180347.', 'SBL1500180347.', '2007-08-12', '2017-08-12', 5000000, '', 5000000, '111111', 111111, 0x313131313131, '0000-00-00', '111111', '0000-00-00', 5000000, 0x313131313131, '0000-00-00', 0x202020, '', '', 'Cs1500180347.', ''),
('121212', '121212', 0x313231323132, 0x42656c69, 0x313231323132, 0x616e676b613132, 'Bangkalan', 0x313231323132, 0x313231323132, '121212', 121212, 121212, '2017-07-12', '121212', '121212', '121212', 121212, '', '', '', '', '', 'DT1500180875.', 'PL1500180875.', 'SBL1500180875.', '2007-09-12', '2017-09-12', 4000000, '', 4000000, '121212', 121212, 0x313231323132, '0000-00-00', '121212', '0000-00-00', 4000000, 0x313131313131, '0000-00-00', 0x2020, '', '', 'Cs1500180875.', ''),
('131313', '131313', 0x313331333133, 0x42656c69, 0x313331333133, 0x616e676b613133, 'Bangkalan', 0x313331333133, 0x313331333133, '131313', 131313, 131313, '2017-07-12', '131313', '131313', '131313', 131313, '', '', '', '', '', 'DT1500181753.', 'PL1500181753.', 'SBL1500181753.', '2008-09-12', '2018-09-12', 4000000, '', 4000000, '131313', 131313, 0x313331333133, '0000-00-00', '131313', '0000-00-00', 4000000, 0x313131313131, '2015-07-12', 0x546f77657220526f626f682020, 0x53656c65736169, 0x50657274656d75616e, 'Cs1500181753.', 0x476f626572),
('212121', '212121', 0x323132313231, 0x42656c69, 0x323132313231, 0x68757275663231, 'Banyuwangi', 0x323132313231, '', '', 0, 0, '0000-00-00', '', '', '', 0, '', '', '', '', '', 'DT1500257951.', 'PL1500257951.', 'SBL1500257951.', '2007-08-12', '2017-08-12', 4500000, '', 4500000, '', 0, '', '2015-07-20', '212121', '0000-00-00', 0, '', '0000-00-00', 0x2020, '', '', 'Cs1500257951.', ''),
('222222', '222222', 0x323232323232, 0x42656c69, 0x323232323232, 0x68757275663232, 'Banyuwangi', 0x323232323232, '', '', 0, 0, '0000-00-00', '', '', '', 0, '', '', '', '', '', 'DT1500257726.', 'PL1500257726.', 'SBL1500257726.', '2007-07-20', '2017-07-20', 3500000, '', 3500000, '', 0, '', '2015-07-20', '222222', '0000-00-00', 0, '', '0000-00-00', 0x2020, '', '', 'Cs1500257726.', ''),
('333333', '333333', 0x333333333333, 0x42656c69, 0x333333333333, 0x616e676b6168757275663333, 'Batu', 0x333333333333, '', '', 0, 0, '0000-00-00', '', '', '', 0, '', '', '', '', '', 'DT1500258231.', 'PL1500258231.', 'SBL1500258231.', '2008-06-29', '2018-06-29', 4500000, '', 4500000, '', 0, '', '2015-07-20', '333333', '0000-00-00', 0, '', '2017-03-18', 0x44696c656d706172204d6f6c6f746f762020, 0x4265726d6173616c6168, 0x50656e6a616761616e204b65746174, 'Cs1500258231.', 0x506f6c697369);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skrd_rpm`
--

CREATE TABLE `skrd_rpm` (
  `no_skrd` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `status` varbinary(50) NOT NULL,
  `surat_skrd` varchar(100) NOT NULL,
  `harga_skrd` int(11) NOT NULL,
  `koef_skrd` double NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skrd_rpm`
--

INSERT INTO `skrd_rpm` (`no_skrd`, `sites_id`, `status`, `surat_skrd`, `harga_skrd`, `koef_skrd`, `tanggal_jatuh_tempo`) VALUES
('111111', '111111', 0x313131313131, 'RPM1500180347.', 5000000, 111111, '2017-08-12'),
('121212', '121212', 0x313131313131, 'RPM1500180875.', 4000000, 111111, '2017-08-12'),
('131313', '131313', 0x313131313131, 'RPM1500181753.', 4000000, 111111, '2018-07-12'),
('212121', '212121', 0x323232323232, 'RPM1500257951.', 4500000, 222222, '2017-07-20'),
('222222', '222222', 0x323232323232, 'RPM1500257726.', 3500000, 222222, '2017-07-20'),
('333333', '333333', 0x333333333333, 'RPM1500258231.', 4500000, 333333, '2017-09-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nik` varchar(7) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `link_profile_pic` varchar(100) DEFAULT NULL,
  `jabatan` varchar(50) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nik`, `password`, `nama_user`, `link_profile_pic`, `jabatan`, `admin`) VALUES
('12345', '12345', 'Hinata Hyuga', '1500276519.pngHinata.png', 'Istri Hokage', 0),
('54321', '54321', 'Neji Hyuga', '1500278146.Neji.png', 'Satpam Afterlife', 0);

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
  ADD PRIMARY KEY (`ho_nomor`),
  ADD KEY `fk_ho_site` (`sites_id`);

--
-- Indexes for table `identitas_pemilik`
--
ALTER TABLE `identitas_pemilik`
  ADD PRIMARY KEY (`identitas_pemilik_ktp`),
  ADD KEY `fk_idp_site` (`sites_id`);

--
-- Indexes for table `ijin_dephub`
--
ALTER TABLE `ijin_dephub`
  ADD PRIMARY KEY (`ijin_dephub_nomor`),
  ADD KEY `fk_dephub_site` (`sites_id`);

--
-- Indexes for table `ijin_genset`
--
ALTER TABLE `ijin_genset`
  ADD PRIMARY KEY (`ijin_genset_nomor`),
  ADD KEY `fk_genset_site` (`sites_id`);

--
-- Indexes for table `ijin_prinsip`
--
ALTER TABLE `ijin_prinsip`
  ADD PRIMARY KEY (`ijin_prinsip_nomor`),
  ADD KEY `sites_id` (`sites_id`);

--
-- Indexes for table `ijin_ptt`
--
ALTER TABLE `ijin_ptt`
  ADD PRIMARY KEY (`ijin_ptt_nomor`),
  ADD KEY `fk_ippt_site` (`sites_id`);

--
-- Indexes for table `imb`
--
ALTER TABLE `imb`
  ADD PRIMARY KEY (`imb_nomor`),
  ADD KEY `fk_imb_site` (`sites_id`);

--
-- Indexes for table `imtu`
--
ALTER TABLE `imtu`
  ADD PRIMARY KEY (`ijin_imtu_nomor`),
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
  ADD PRIMARY KEY (`nop`),
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
  ADD PRIMARY KEY (`no_skrd`),
  ADD KEY `fk_rpm_site` (`sites_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ho`
--
ALTER TABLE `ho`
  ADD CONSTRAINT `fk_ho_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `identitas_pemilik`
--
ALTER TABLE `identitas_pemilik`
  ADD CONSTRAINT `fk_idp_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ijin_dephub`
--
ALTER TABLE `ijin_dephub`
  ADD CONSTRAINT `fk_dephub_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ijin_genset`
--
ALTER TABLE `ijin_genset`
  ADD CONSTRAINT `fk_genset_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ijin_prinsip`
--
ALTER TABLE `ijin_prinsip`
  ADD CONSTRAINT `sites_id` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ijin_ptt`
--
ALTER TABLE `ijin_ptt`
  ADD CONSTRAINT `fk_ippt_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `imb`
--
ALTER TABLE `imb`
  ADD CONSTRAINT `fk_imb_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `imtu`
--
ALTER TABLE `imtu`
  ADD CONSTRAINT `fk_imtu_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ipb`
--
ALTER TABLE `ipb`
  ADD CONSTRAINT `fk_ipb_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pbb`
--
ALTER TABLE `pbb`
  ADD CONSTRAINT `fk_pbb_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `site`
--
ALTER TABLE `site`
  ADD CONSTRAINT `fk_site_daerah` FOREIGN KEY (`sites_kota_kabupaten`) REFERENCES `daerah` (`kota_kabupaten`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `skrd_rpm`
--
ALTER TABLE `skrd_rpm`
  ADD CONSTRAINT `fk_rpm_site` FOREIGN KEY (`sites_id`) REFERENCES `site` (`sites_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
