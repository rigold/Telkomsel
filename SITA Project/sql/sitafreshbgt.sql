-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jul 2017 pada 04.45
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
('Bangkalan'),
('Blitar Kab.'),
('Malang Kota'),
('Surabaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ho`
--

CREATE TABLE `ho` (
  `no` int(10) NOT NULL,
  `ho_nomor` varchar(25) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ho_daftar_ulang` date NOT NULL,
  `ho_start` date NOT NULL,
  `ho_finish` date NOT NULL,
  `ho_status` varbinary(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ho`
--

INSERT INTO `ho` (`no`, `ho_nomor`, `sites_id`, `ho_daftar_ulang`, `ho_start`, `ho_finish`, `ho_status`) VALUES
(1, '123', 'BLR061', '2017-07-30', '2016-08-02', '2017-08-02', 0x4265726d6173616c6168),
(2, '770', 'MLG069', '2017-07-25', '2016-07-30', '2017-07-30', 0x4265726d6173616c6168);

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas_pemilik`
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

--
-- Dumping data untuk tabel `identitas_pemilik`
--

INSERT INTO `identitas_pemilik` (`no`, `identitas_pemilik_ktp`, `sites_id`, `identitas_pemilik_kk`, `identitas_pemilik_lahan`, `identitas_pemilik_kuasa`, `identitas_pemilik_alamat`, `identitas_pemilik_telepon`, `identitas_pemilik_hp`, `identitas_pemilik_email`, `identitas_pemilik_sp_keluarga`, `sp`, `sp_ahli_waris`, `sp_janda`, `sp_kepemilikan_tanah`, `sp_pelepasan_hak`, `sp_pembayaran`, `sp_penguasaan_fisik_tanah`, `sp_peralihan_atas_pekarangan`, `sp_persetujuan_kepala_desa`, `sp_tanah_pemohon`, `sp_tidak_keberatan_jalan_pribadi`, `sp_tidak_keberatan_jalan_umum`, `akta_hibah`, `akta_jualbeli_sewa`, `akta_hak_bersama`, `akta_warisan`, `akta_pemisahan`, `akta_nikah`, `ijin_ippt`, `ijin_warga`, `ijin_ukl_upl`, `ijin_sertifikat_tanah`, `sket_beda_nama`, `sket_akses_lahan_jalan`, `sket_asal_tanah`, `sket_beda_luas_tanah`, `sket_fatwa_waris`, `sket_kematian`, `sket_penduduk`, `sket_permohonan_imb_ho_ip`, `sket_persetujuan_sewa_lahan`, `sket_riwayat_tanah`, `sket_suami_istri`, `sket_tanah`, `sket_tidak_sengketa`, `sket_keberatan`, `sl_sk`, `sl_sk_pengambilan_jaminan_asli`, `sl_surat_jaminan_hukum`, `sl_pks`, `sl_surat_perjanjian_sewa_tanah`) VALUES
(1, '2147483647', 'BLR061', '2147483647', 'Sumiran', '-', 'Jalan Kusuma Bangsa No.60, Kanigoro, Blitar, Jawa Timur 66171, Indonesia', '13641648', '0812641649', 'CoolSumiran@gmail.com', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Ada', 'hibah/0.12.345.6789/XIX', 'jbs/9.87.765.43210/IXI', 'hb/1.02.938.4756/XXX', '-', '-', '-', '-', 'warga/1234.567.89.0/VII', '-', 'st/0987.654.32.1/IVV', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Ada', 'Tidak', 'Ada', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', '-', 'Ada'),
(2, '2147483647', 'MLG069', '2147483647', 'Sumanto', 'Suminto', 'Balaikota Malang, Jl. Tugu No.1, Kiduldalem, Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '62341325644', '08446523143', '2Sum_intoanto@rocketmail.com', 'Ada', 'Tidak', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Ada', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Tidak', 'Ada', 'Ada', 'Ada', 'Tidak', 'Ada', 'Ada', 'Ada', 'Tidak', 'Ada', 'Ada', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Tidak', 'Ada', '1.35.7911.2468', 'Ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ijin_dephub`
--

CREATE TABLE `ijin_dephub` (
  `no` int(10) NOT NULL,
  `ijin_dephub_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_dephub_start` date NOT NULL,
  `ijin_dephub_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ijin_dephub`
--

INSERT INTO `ijin_dephub` (`no`, `ijin_dephub_nomor`, `sites_id`, `ijin_dephub_start`, `ijin_dephub_finish`) VALUES
(1, '456789', 'BLR061', '0000-00-00', '0000-00-00'),
(2, 'ijin/30.08.2017', 'MLG069', '2016-08-12', '2017-08-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ijin_genset`
--

CREATE TABLE `ijin_genset` (
  `no` int(10) NOT NULL,
  `ijin_genset_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_genset_status` varchar(50) NOT NULL,
  `ijin_genset_start` date NOT NULL,
  `ijin_genset_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ijin_genset`
--

INSERT INTO `ijin_genset` (`no`, `ijin_genset_nomor`, `sites_id`, `ijin_genset_status`, `ijin_genset_start`, `ijin_genset_finish`) VALUES
(1, 'Genset/4120.321.22.11.1938', 'BLR061', 'Ada', '2007-07-30', '2017-07-30'),
(2, 'Genset/5231.432.33.22.2006', 'MLG069', 'Ada', '2008-07-13', '2018-07-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ijin_prinsip`
--

CREATE TABLE `ijin_prinsip` (
  `no` int(10) NOT NULL,
  `ijin_prinsip_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_prinsip_start` date NOT NULL,
  `ijin_prinsip_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ijin_prinsip`
--

INSERT INTO `ijin_prinsip` (`no`, `ijin_prinsip_nomor`, `sites_id`, `ijin_prinsip_start`, `ijin_prinsip_finish`) VALUES
(1, '1', 'BLR061', '0000-00-00', '0000-00-00'),
(2, '-', 'MLG069', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ijin_ptt`
--

CREATE TABLE `ijin_ptt` (
  `no` int(10) NOT NULL,
  `ijin_ptt_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_ptt_start` date NOT NULL,
  `ijin_ptt_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ijin_ptt`
--

INSERT INTO `ijin_ptt` (`no`, `ijin_ptt_nomor`, `sites_id`, `ijin_ptt_start`, `ijin_ptt_finish`) VALUES
(1, '1', 'BLR061', '0000-00-00', '0000-00-00'),
(2, 'iptt/4120/21/07/2017', 'MLG069', '2016-08-30', '2017-08-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `imb`
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

--
-- Dumping data untuk tabel `imb`
--

INSERT INTO `imb` (`no`, `imb_nomor`, `sites_id`, `imb_mitra_pengurus`, `imb_status_kepengurusan`, `imb_status`, `imb_daftar_ulang`, `imb_start`, `imb_finish`) VALUES
(6, '647.503/23/409.103/2007', 'BLR061', 0x2d, 0x416d616e, 0x494d42204c656e676b6170, '2017-10-12', '2016-10-12', '2017-10-12'),
(7, 'imb/ 234567/ 18/ 3128', 'MLG069', 0x4672616e6b204d696c6c6572, 0x2d, 0x42656c756d204c756e6173, '2017-08-12', '2016-08-20', '2017-08-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `imtu`
--

CREATE TABLE `imtu` (
  `no` int(10) NOT NULL,
  `ijin_imtu_nomor` varchar(50) NOT NULL,
  `sites_id` varchar(6) NOT NULL,
  `ijin_imtu_start` date NOT NULL,
  `ijin_imtu_finish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `imtu`
--

INSERT INTO `imtu` (`no`, `ijin_imtu_nomor`, `sites_id`, `ijin_imtu_start`, `ijin_imtu_finish`) VALUES
(1, '1', 'BLR061', '0000-00-00', '0000-00-00'),
(2, '-', 'MLG069', '0000-00-00', '0000-00-00');

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
('-', 'MLG069', '0000-00-00', '0000-00-00'),
('0214.7102.70.99', 'BLR061', '2016-10-30', '2017-10-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pbb`
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

--
-- Dumping data untuk tabel `pbb`
--

INSERT INTO `pbb` (`no`, `nop`, `sites_id`, `nilai_pbb_site`, `tanggal_mulai`, `tanggal_jatuh_tempo`, `status`, `njop_tanah`, `njop_bangunan`, `surat_pbb`, `koef_pbb`, `pbb_mitra`, `pbb_denda`, `pbb_fee`) VALUES
(6, '35.05.020.008.000.2961.7', 'BLR061', 473430, '2016-08-02', '2017-08-02', 0x50616964, 2730000, 470700000, 'PBB1500600326.', 1.1, 0x2d, 0, 0),
(7, '46.16.131.119.111.3072.8', 'MLG069', 548360, '2016-12-20', '2017-12-20', 0x42656c756d204c756e6173, 3850000, 254000000, 'PBB1500603914.', 0.2, 0x4a6f737320576865646f6e, 150000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `site`
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
('BLR061', 'Wonotirto', 0x53657761, 0x42656c69, 0x54656c6b6f6d73656c, 'Dsn Wungu Kerep RT/RW 001/005, Ds Wonotirto, Kec. Wonotirto, Kab. Blitar', 'Blitar Kab.', 0x50542e20546f74616c, 0x54656c6b6f6d73656c, 'Blitar Kab.', -8.22275, 112.154, '2007-01-30', 'site 1, site 2', 'cpm', 'Greenfield', 72, 'SST 72', 'type 1', '120', '49', '50', 'DT1500600326.', 'PL1500600326.', 'SBL1500600326.', '2007-08-05', '2017-08-04', 6000000, 'Kekurangan Surat tanah letter C. Sirkulasi tanda tangan ke Mgr. NS Madiun tgl. 11 Jan 2017 (16 Jan 2017) TTD NS Madiun done, dikirim kembali ke Surabaya tgl 20 Jan 2017', 500000, 'Greg Capullo', 350000, 0x53616d73756e672c205669766f2c204f70706f, '2017-07-30', '44444444', '2016-12-28', 40000000, 0x50616964, '2017-02-20', 0x2d202020202020202020202020202020202020202020, 0x2d, 0x2d, 'Cs1500600326.', 0x2d),
('MLG069', 'Plaza Araya', 0x53657761, 0x42656c69, 0x54656c6b6f6d73656c, 'Jl. Panji Suroso, Purwodadi, Blimbing, Kota Malang, Jawa Timur 65126, Indonesia', 'Malang Kota', 0x505420546f7765722053656e746f7361, 0x54656c6b6f6d73656c, 'Malang Kota', -7.93639, 112.65, '2004-10-18', '-', '-', 'Rooftop', 3, 'Pole', '-', '-', '-', '-', 'DT1500603914.', 'PL1500603914.', 'SBL1500603914.', '2014-09-07', '2019-09-06', 13000000, '-', 1500000, 'Donald', 345000, 0x53616d73756e672c205869616f6d69, '2017-08-30', '4120.22.11.1995', '2017-07-29', 350000, 0x50616964, '2016-09-12', 0x546f77657220526f626f68206b6172656e6120616e67696e2020202020, 0x53656c65736169, 0x50656d62616e67756e616e20556c616e67, 'Cs1500603914.', 0x53636f747420536e79646572);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skrd_rpm`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skrd_rpm`
--

INSERT INTO `skrd_rpm` (`no`, `no_skrd`, `sites_id`, `status`, `surat_skrd`, `harga_skrd`, `koef_skrd`, `tanggal_jatuh_tempo`) VALUES
(6, '21.07.2017.4120', 'BLR061', 0x4265726d6173616c6168, 'RPM1500600326.', 2281000, 1.1, '2017-07-30'),
(7, '57.27.242.220.222.4183.9', 'MLG069', 0x4c756e6173, 'RPM1500603914.', 2387000, 1.2, '2017-08-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nik`, `password`, `nama_user`, `link_profile_pic`, `jabatan`, `admin`) VALUES
(54321, '54321', 'Neji Hyuga', '1500598898.pngNeji.png', 'Staff Senior', 'User'),
(99999, 'admin', 'Admin 1', '1500598869.jpgsaitamacut.jpg', 'Administrator Web', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `z_comcase`
--

CREATE TABLE `z_comcase` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `z_datasites`
--

CREATE TABLE `z_datasites` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `z_datasites`
--

INSERT INTO `z_datasites` (`no`, `no_surat`, `nama`) VALUES
(1, 'DATASITE/Malang Kota//99999/2017', 'Admin 1'),
(2, 'DATASITE/Malang Kota/1/99999/2017', 'Admin 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `z_detail_pbb`
--

CREATE TABLE `z_detail_pbb` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `z_detail_rpm`
--

CREATE TABLE `z_detail_rpm` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `z_monitoring`
--

CREATE TABLE `z_monitoring` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `z_pbb`
--

CREATE TABLE `z_pbb` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `z_perizinan`
--

CREATE TABLE `z_perizinan` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `z_perpanjangan`
--

CREATE TABLE `z_perpanjangan` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `z_rpm`
--

CREATE TABLE `z_rpm` (
  `no` int(10) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `identitas_pemilik`
--
ALTER TABLE `identitas_pemilik`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `ijin_dephub`
--
ALTER TABLE `ijin_dephub`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `ijin_genset`
--
ALTER TABLE `ijin_genset`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `ijin_prinsip`
--
ALTER TABLE `ijin_prinsip`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `ijin_ptt`
--
ALTER TABLE `ijin_ptt`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `imb`
--
ALTER TABLE `imb`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `imtu`
--
ALTER TABLE `imtu`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pbb`
--
ALTER TABLE `pbb`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `skrd_rpm`
--
ALTER TABLE `skrd_rpm`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `z_comcase`
--
ALTER TABLE `z_comcase`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `z_datasites`
--
ALTER TABLE `z_datasites`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `z_detail_pbb`
--
ALTER TABLE `z_detail_pbb`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `z_detail_rpm`
--
ALTER TABLE `z_detail_rpm`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `z_monitoring`
--
ALTER TABLE `z_monitoring`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `z_pbb`
--
ALTER TABLE `z_pbb`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `z_perizinan`
--
ALTER TABLE `z_perizinan`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `z_perpanjangan`
--
ALTER TABLE `z_perpanjangan`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `z_rpm`
--
ALTER TABLE `z_rpm`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
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
