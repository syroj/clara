-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2016 at 09:34 
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clara_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergies`
--

CREATE TABLE `allergies` (
  `id` int(10) UNSIGNED NOT NULL,
  `mr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pencetus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reaksi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_klinik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institusi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assessmets`
--

CREATE TABLE `assessmets` (
  `id` int(10) UNSIGNED NOT NULL,
  `ass_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diagnosis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icpc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icd_10` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `mr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_kontak` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat_kontak` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telp_kontak` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hubungan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_insurances`
--

CREATE TABLE `data_insurances` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `telp` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_insurances`
--

INSERT INTO `data_insurances` (`id`, `nama`, `alamat`, `telp`, `email`, `status`) VALUES
('', 'BPJS Kesehatan', 'jl. Rasuna Said Jakarta ', '021-2099790', 'mail.bpjs@bpjs-kesehatan.go.id', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `data_jasmeds`
--

CREATE TABLE `data_jasmeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_labs`
--

CREATE TABLE `data_labs` (
  `id` int(10) UNSIGNED NOT NULL,
  `kelompok` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_rads`
--

CREATE TABLE `data_rads` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `id` int(10) UNSIGNED NOT NULL,
  `drg_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `merek` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sediaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lembaga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mulai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `selesai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `env_risks`
--

CREATE TABLE `env_risks` (
  `id` int(10) UNSIGNED NOT NULL,
  `fam_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kepemilikan_rumah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_bangunan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `daerah_perumahan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keamanan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exposure` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fam_archives`
--

CREATE TABLE `fam_archives` (
  `id` int(10) UNSIGNED NOT NULL,
  `fam_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kepala` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tlp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bentuk_keluarga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siklus_keluarga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genogram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hubungan_kelurga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `freq_kumpul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keputusan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spiritual` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stresor_keluarga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan_kk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `interaksi_lingkungan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organisasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kedudukan_keluarga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stressor_sosial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sumber_nafkah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keb_ekonomi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keb_pendidikan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keb_kesehatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faskes_risks`
--

CREATE TABLE `faskes_risks` (
  `id` int(10) UNSIGNED NOT NULL,
  `fam_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faskes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cara_berkunjung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tarif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kualitas` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_characteristics`
--

CREATE TABLE `home_characteristics` (
  `id` int(10) UNSIGNED NOT NULL,
  `fam_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `luas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_penghuni` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `luas_halaman` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bertingkat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lantai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dinding` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_jendela` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ukuran_jendela` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `listrik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kelembapan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kebersihan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kerapihan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sumber_air_minum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sumber_air_mck` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jamban` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `limbah_keluarga` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurances`
--

CREATE TABLE `insurances` (
  `id` int(10) UNSIGNED NOT NULL,
  `mr` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_asuransi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `insurances`
--

INSERT INTO `insurances` (`id`, `mr`, `nama_asuransi`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', 'BPJS Kesehatan', 'Jaminan Utama', '2016-03-13 00:00:00', NULL),
(2, '5', 'BPJS Kesehatan', 'Jaminan utama', '2016-05-21 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `int_risks`
--

CREATE TABLE `int_risks` (
  `id` int(10) UNSIGNED NOT NULL,
  `fam_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mandi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `perlengkapan_mandi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bersih2_rumah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bersih2_wc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengetahuan_penyakit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengetahuan_risiko_kesehatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sumber_makanan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pola` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `perencanaan_dlm_berkeluarga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengambilan_keputusan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fokus_perkembangan_anak` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siklus_menstruasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `koitus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `olahraga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_olahraga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `durasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meorkok` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tidur_malam` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(10) UNSIGNED NOT NULL,
  `lab_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hasil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `med_records`
--

CREATE TABLE `med_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pf_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rad_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lab_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ass_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pln_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_02_29_211538_clara', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) UNSIGNED NOT NULL,
  `fam_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pernikahan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gol_darah` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `fam_id`, `mr`, `nama`, `tanggal_lahir`, `gender`, `alamat`, `telp`, `pekerjaan`, `pernikahan`, `gol_darah`, `updated_at`, `created_at`) VALUES
(1, '45333', '1', 'Rizki Amelia', NULL, 'Wanita', 'Batu Malang', '0857 1449 2283', 'wirawsasta', 'Belum Menikah', 'B', '2016-03-13', '2016-03-08'),
(2, '90827', '2', 'Ahmad', '1993-12-09', 'Pria', 'kemang jakarta', '08571998119', 'karywan', 'Belum Menikah', 'O', '2016-03-08', '2016-03-08'),
(3, '7678', '3', 'Azka', '2008-09-10', 'Pria', 'pamulang', '021-220020', '', 'Belum Menikah', 'AB', '2016-03-08', '2016-03-08'),
(4, '', '4', 'Zidan', '1992-09-12', 'Pria', 'Pasar Senen Jakarta Pusat', '021 88980', 'mahasiswa', 'Belum Menikah', 'A', '2016-03-11', '2016-03-11'),
(5, '90', '5', 'Abdullah', '2009-09-20', 'Pria', 'KAmpung Pulo Jakarta', '021 78556', '', 'Belum Menikah', 'AB', '2016-03-11', '2016-03-11'),
(6, '', '6', 'Darma hadiningrat', '1975-12-09', 'Pria', 'jl. merdeka barat jakarta', '021 7684728', '', '', '', '2016-03-12', '2016-03-12');

-- --------------------------------------------------------

--
-- Table structure for table `pfs`
--

CREATE TABLE `pfs` (
  `id` int(10) UNSIGNED NOT NULL,
  `pf_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kepala` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mata` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tht_kl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `toraks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abdomen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genitalia_anus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ekstrimitas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `st_lokalis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pf_lain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rads`
--

CREATE TABLE `rads` (
  `id` int(10) UNSIGNED NOT NULL,
  `rad_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hasil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(10) UNSIGNED NOT NULL,
  `rec_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rec_contents`
--

CREATE TABLE `rec_contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `rec_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `frekuensi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dosis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `durasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `refers`
--

CREATE TABLE `refers` (
  `id` int(10) UNSIGNED NOT NULL,
  `mr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diagnosis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tujuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `ruangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fungsi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjectives`
--

CREATE TABLE `subjectives` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ku` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rps` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rpd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sosial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kebiasaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lembaga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skp` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prefix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gelar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rules` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `divisi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `code`, `prefix`, `name`, `gelar`, `email`, `password`, `tgl_lahir`, `alamat`, `telp`, `sip`, `rules`, `divisi`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', '', 'Syrojuddin Hadi', '', 'mail.syroj@gmail.com', '$2y$10$NaLFRR0H5hJs1h8LkTVmMurRSLssQJFzPWP6IxTJr72ZLL.Fc/Ui6', '', '', '', '', 'admin', '', '', 'ZOGz6lkOS1BxE474eYY9zrsFD0Muf4SeguXmyn8sJxIK2jWq0Lsf4V6neiDY', '2016-03-03 00:15:26', '2016-03-13 07:11:47'),
(2, '', '', 'Someone Other', '', 'other@gmail.com', '$2y$10$GFt8tw/jMxEhpcc2rpdpZOi6mdQa0j/yJtgl0BU5kRnKkEsGTHdAK', '', '', '', '', 'dokter', 'umum', 'aktif', 'XR65WyeNGVyvoz1E1G1rW0BUj3WQrYQ9wW4S5TLTSqRolyIZYIX3aDSnHaa7', '2016-03-03 00:16:01', '2016-03-08 01:59:19'),
(3, '', '', 'Achmad Zaky', '', 'jack@gmail.com', '$2y$10$RoY3YtPssSHkr5iaa./bvOvapg96LlopPGNapoWaiHmkHDNn2qBcW', '', '', '', '', 'dokter', 'ortopedi', 'aktif', 'Qb7kJhzCoaats219bdJ0g1s0XwTFKVUkvm0N9O27L5xarwDwt93URwuKv1Ri', '2016-03-03 18:22:39', '2016-03-03 18:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `visites`
--

CREATE TABLE `visites` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `mr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tujuan` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `visites`
--

INSERT INTO `visites` (`id`, `tanggal`, `mr`, `nama`, `gender`, `tgl_lahir`, `alamat`, `status`, `tujuan`, `created_at`, `updated_at`) VALUES
(1, '2016-03-08', '1', 'Rizki Amelia', 'Wanita', '1990-02-09', 'Batu Malang', 'menunggu', 'Poli Kandungan', '2016-03-08', '2016-03-08'),
(2, '2016-03-08', '3', 'Azka', 'Pria', '2008-09-10', 'pamulang', 'menunggu', 'Poli Anak', '2016-03-08', '2016-03-08'),
(3, '2016-03-11', '4', 'Zidan', 'Pria', '1992-09-12', 'PAsar Senen Jakarta Pusat', 'konsultasi', 'Poli Umum', '2016-03-11', '2016-03-11'),
(5, '2016-03-13', '3', 'Azka', 'Pria', '2008-09-10', 'pamulang', 'menunggu', 'Poli Anak', '2016-03-13', '2016-03-13'),
(6, '2016-05-21', '5', 'Abdullah', 'Pria', '2009-09-20', 'KAmpung Pulo Jakarta', 'menunggu', '', '2016-05-21', '2016-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `work_risks`
--

CREATE TABLE `work_risks` (
  `id` int(10) UNSIGNED NOT NULL,
  `fam_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `risiko_pekerjaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exposure` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allergies`
--
ALTER TABLE `allergies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assessmets`
--
ALTER TABLE `assessmets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_insurances`
--
ALTER TABLE `data_insurances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_jasmeds`
--
ALTER TABLE `data_jasmeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_labs`
--
ALTER TABLE `data_labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rads`
--
ALTER TABLE `data_rads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `env_risks`
--
ALTER TABLE `env_risks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fam_archives`
--
ALTER TABLE `fam_archives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faskes_risks`
--
ALTER TABLE `faskes_risks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_characteristics`
--
ALTER TABLE `home_characteristics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurances`
--
ALTER TABLE `insurances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `int_risks`
--
ALTER TABLE `int_risks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `med_records`
--
ALTER TABLE `med_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pfs`
--
ALTER TABLE `pfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rads`
--
ALTER TABLE `rads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rec_contents`
--
ALTER TABLE `rec_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refers`
--
ALTER TABLE `refers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectives`
--
ALTER TABLE `subjectives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visites`
--
ALTER TABLE `visites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_risks`
--
ALTER TABLE `work_risks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allergies`
--
ALTER TABLE `allergies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assessmets`
--
ALTER TABLE `assessmets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_jasmeds`
--
ALTER TABLE `data_jasmeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_labs`
--
ALTER TABLE `data_labs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_rads`
--
ALTER TABLE `data_rads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `env_risks`
--
ALTER TABLE `env_risks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fam_archives`
--
ALTER TABLE `fam_archives`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faskes_risks`
--
ALTER TABLE `faskes_risks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `home_characteristics`
--
ALTER TABLE `home_characteristics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `insurances`
--
ALTER TABLE `insurances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `int_risks`
--
ALTER TABLE `int_risks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `med_records`
--
ALTER TABLE `med_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pfs`
--
ALTER TABLE `pfs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rads`
--
ALTER TABLE `rads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rec_contents`
--
ALTER TABLE `rec_contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `refers`
--
ALTER TABLE `refers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjectives`
--
ALTER TABLE `subjectives`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `visites`
--
ALTER TABLE `visites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `work_risks`
--
ALTER TABLE `work_risks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
