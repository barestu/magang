-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2016 at 11:31 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_plne`
--
CREATE DATABASE IF NOT EXISTS `db_plne` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_plne`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE IF NOT EXISTS `tbl_pegawai` (
  `id_peg` decimal(20,0) NOT NULL,
  `id_status` int(10) NOT NULL,
  `id_bid` int(10) NOT NULL,
  `id_jab` int(10) NOT NULL,
  `id_direktorat` int(10) NOT NULL,
  `id_kompetensi` int(10) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `email2` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(22) NOT NULL,
  `status` varchar(22) NOT NULL,
  `jml_keluarga` int(11) NOT NULL,
  PRIMARY KEY (`id_peg`),
  KEY `id_peg` (`id_peg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_peg`, `id_status`, `id_bid`, `id_jab`, `id_direktorat`, `id_kompetensi`, `nip`, `nama`, `alamat`, `no_telp`, `email`, `email2`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `status`, `jml_keluarga`) VALUES
('1', 1, 1, 1, 1, 0, '0000001-RTZ', 'Artour Babaev', 'Cengkareng, Jakarta Barat', '081804323001', 'artour1990@gmail.com', 'artour@plne.com', 'Jakarta', '1994-12-05', 'Laki-Laki', 'Islam', 'Menikah', 1),
('7', 1, 9, 14, 3, 0, '0000003-STR', 'Bryan Cranston', 'Jakarta', '123432123123', 'qwe@we', 'wefae@w', 'Gertadef', '1985-01-05', 'Perempuan', 'Islam', 'Belum Menikah', 0),
('9', 2, 19, 6, 2, 0, 'KONTRAK', 'Aaron Paul', 'Fertwa', '1212121212', 'bbbbb@qqq', 'qqqqq@aaa', 'Feraste', '1988-11-02', 'Laki-Laki', 'Islam', 'Belum Menikah', 0),
('11', 2, 1, 91, 1, 0, 'PENSIUN PLN', 'Georg Prime', 'Ferawd', '121212122112', 'qqq@qq', 'qqq@qq', 'Ferpos', '1978-09-03', 'Laki-Laki', 'Katholik', 'Menikah', 0),
('12', 2, 19, 5, 2, 0, 'OUTSOURCING', 'Alexandr Daskovich', 'Gertyu', '121212121212', 'wqeqw@qq', 'dddd@qqq', 'Vertas', '1987-11-28', 'Laki-Laki', 'Kristen', 'Belum Menikah', 0),
('13', 1, 4, 18, 3, 0, '11', 'asdf', 'awer', '12312', 'sdf@q', 'aweqw@qwe', 'ewr', '2014-09-29', 'Perempuan', 'Kristen', 'Belum Menikah', 1),
('14', 2, 1, 2, 1, 0, 'PENSIUN PLN', 'Nicholas Saputra', 'Jakarta', '0002223331', 'yes@plne.com', 'ter@yes.com', 'Jakarta', '1989-03-31', 'Laki-Laki', 'Kristen', 'Belum Menikah', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_login`
--

CREATE TABLE IF NOT EXISTS `tbl_user_login` (
  `id_user_login` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` enum('Adm.super','Adm.pkwt','Adm.organik','user') NOT NULL,
  `status_akun` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_user_login`
--

INSERT INTO `tbl_user_login` (`id_user_login`, `username`, `password`, `email`, `level`, `status_akun`, `nip`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'Adm.super', 1, ''),
(4, 'user01', 'b75705d7e35e7014521a46b532236ec3', 'qqq@qq.c', 'user', 1, '0000001-RTZ'),
(5, 'pkwt01', '66f15e319b2a86c826c7ad37022a9041', 'abcd@abbb', 'user', 1, 'KONTRAK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aktivitas_proyek`
--

CREATE TABLE IF NOT EXISTS `tb_aktivitas_proyek` (
  `id_ap` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyek` int(11) NOT NULL,
  `id_peg` int(11) NOT NULL,
  `nama_ap` text,
  PRIMARY KEY (`id_ap`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_aktivitas_proyek`
--

INSERT INTO `tb_aktivitas_proyek` (`id_ap`, `id_proyek`, `id_peg`, `nama_ap`) VALUES
(2, 12, 9, 'Review design proposed for the construction of PLTU Parit Baru based on the Contract Document');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bidang`
--

CREATE TABLE IF NOT EXISTS `tb_bidang` (
  `id_bid` int(20) NOT NULL,
  `nama_bid` varchar(50) NOT NULL,
  PRIMARY KEY (`id_bid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bidang`
--

INSERT INTO `tb_bidang` (`id_bid`, `nama_bid`) VALUES
(1, 'Direksi'),
(2, 'Pemasaran'),
(3, 'Pengembangan Usaha'),
(4, 'Pengusahaan'),
(5, 'Pembangkit'),
(6, 'Transmisi dan Distribusi'),
(7, 'Konstruksi'),
(8, 'Keuangan'),
(9, 'Akuntansi'),
(10, 'SDM'),
(11, 'Umum'),
(12, 'Hukum'),
(13, 'Humas'),
(14, 'Pengadaan'),
(15, 'Audit Internal'),
(16, 'Manajemen Mutu dan Risiko'),
(17, 'Pengawas Internal'),
(18, 'Pengawas Internal'),
(19, 'Informasi Teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cv`
--

CREATE TABLE IF NOT EXISTS `tb_cv` (
  `id_cv` int(11) NOT NULL AUTO_INCREMENT,
  `id_peg` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `member_asosiasi` varchar(100) NOT NULL,
  `tahun_member` varchar(22) NOT NULL,
  `warga_negara` varchar(22) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `negara_bekerja` varchar(22) NOT NULL,
  `bahasa1` varchar(22) NOT NULL,
  `bahasa2` varchar(22) NOT NULL,
  `bahasa3` varchar(22) DEFAULT NULL,
  `speaking1` varchar(22) NOT NULL,
  `speaking2` varchar(22) NOT NULL,
  `speaking3` varchar(22) DEFAULT NULL,
  `reading1` varchar(22) NOT NULL,
  `reading2` varchar(22) NOT NULL,
  `reading3` varchar(22) DEFAULT NULL,
  `writing1` varchar(22) NOT NULL,
  `writing2` varchar(22) NOT NULL,
  `writing3` varchar(22) DEFAULT NULL,
  `record_dari` varchar(22) NOT NULL,
  `record_sampai` varchar(22) NOT NULL,
  `record_perusahaan` varchar(50) NOT NULL,
  `record_jabatan` varchar(22) NOT NULL,
  PRIMARY KEY (`id_cv`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_cv`
--

INSERT INTO `tb_cv` (`id_cv`, `id_peg`, `nama_perusahaan`, `member_asosiasi`, `tahun_member`, `warga_negara`, `pendidikan`, `negara_bekerja`, `bahasa1`, `bahasa2`, `bahasa3`, `speaking1`, `speaking2`, `speaking3`, `reading1`, `reading2`, `reading3`, `writing1`, `writing2`, `writing3`, `record_dari`, `record_sampai`, `record_perusahaan`, `record_jabatan`) VALUES
(1, 9, 'PT. PLN Enjiniring', 'Association of The Grand Maester', '2010', 'Indonesian', 'Bachelor Degree of Civil Engineering', 'Indonesia', 'Indonesian', 'English', '', 'Native', 'Very Good', '', 'Native', 'Very Good', '', 'Native', 'Very Good', '', '2008', 'present', 'PT. PLN Enjiniring', 'Civil Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diklat`
--

CREATE TABLE IF NOT EXISTS `tb_diklat` (
  `id_dik` int(3) NOT NULL AUTO_INCREMENT,
  `id_peg` int(11) NOT NULL,
  `nama_dik` varchar(50) NOT NULL,
  `jenis_dik` varchar(50) NOT NULL,
  `tahun_dik` varchar(5) NOT NULL,
  PRIMARY KEY (`id_dik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tb_diklat`
--

INSERT INTO `tb_diklat` (`id_dik`, `id_peg`, `nama_dik`, `jenis_dik`, `tahun_dik`) VALUES
(7, 1, 'DIKLAT BABY RAGE', 'Diklat Profesi', '2007'),
(8, 1, 'DIKLAT NA DOTO BEST DOTO', 'Diklat Profesi', '2013'),
(9, 9, 'Personal Empowerment Training', 'Diklat Profesi', '2005'),
(10, 9, 'Geotechnical Problems in Indonesia - Plaxis', 'Diklat Profesi', '2014');

-- --------------------------------------------------------

--
-- Table structure for table `tb_direktorat`
--

CREATE TABLE IF NOT EXISTS `tb_direktorat` (
  `id_direktorat` int(11) NOT NULL,
  `nama_direktorat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_direktorat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_direktorat`
--

INSERT INTO `tb_direktorat` (`id_direktorat`, `nama_direktorat`) VALUES
(1, 'Utama'),
(2, 'Enjiniring'),
(3, 'Keuangan & SDM'),
(4, 'Manajemen Mutu & Risiko'),
(5, 'Pemasaran & Pengembangan Usaha'),
(6, 'Pengawas Internal'),
(7, 'Sekretaris Perusahaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_grade`
--

CREATE TABLE IF NOT EXISTS `tb_grade` (
  `id_grade` int(11) NOT NULL,
  `nama_grade` varchar(20) NOT NULL,
  PRIMARY KEY (`id_grade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_grade`
--

INSERT INTO `tb_grade` (`id_grade`, `nama_grade`) VALUES
(1, 'Basic'),
(2, 'Specific'),
(3, 'System');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE IF NOT EXISTS `tb_jabatan` (
  `id_jab` int(20) NOT NULL,
  `nama_jab` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jab`, `nama_jab`) VALUES
(1, 'Direktur Utama'),
(2, 'Direktur Enjiniring'),
(3, 'Direktur Pemasaran & Pengembangan Usaha'),
(4, 'Direktur Keuangan & SDM'),
(5, 'Admin IT'),
(6, 'Administrasi'),
(7, 'Administrasi Proyek'),
(8, 'Administrasi T&D'),
(9, 'Analyst Keuangan'),
(10, 'Asman Keuangan'),
(11, 'Asman Perpajakan'),
(12, 'Asman SDM'),
(13, 'Asman Umum'),
(14, 'Assistant Analyst Akuntansi'),
(15, 'Assistant Analyst Anggaran & Biaya'),
(16, 'Assistant Analyst Audit Internal Operasional'),
(17, 'Assistant Analyst Komunikasi Pemasaran'),
(18, 'Assistant Analyst Pengembangan Produk'),
(19, 'Assistant Civil Engineer'),
(20, 'Assistant Engineer Pengembangan Usaha'),
(21, 'Assistant Engineer Teknik I&C'),
(22, 'Assistant Engineer Teknik Listrik'),
(23, 'Assistant Engineer Teknik Mesin'),
(24, 'Assistant Engineer Teknik Sipil'),
(25, 'Assistant Officer Administrasi'),
(26, 'Assistant Officer  Adm. Pemasaran'),
(27, 'Assistant Officer Adm. SDM'),
(28, 'Assistant Officer Adm. Teknik'),
(29, 'Assistant Officer IT SDM'),
(30, 'Assistant Officer Keuangan'),
(31, 'Assistant Officer Keuangan'),
(32, 'Assistant Officer Keuangan/Kasir'),
(33, 'Assistant Officer Keuangan & Administrasi'),
(34, 'Assistant Officer Pemasaran Internal'),
(35, 'Assistant Officer Pengembangan Usaha'),
(36, 'Assistant Officer Recruitment & Selection'),
(37, 'Audit Internal'),
(38, 'Bilingual Secretary'),
(39, 'Civil Engineer'),
(40, 'Civil Engineer Waterways'),
(41, 'Civil Inspector'),
(42, 'Civil Site Inspector'),
(43, 'Co. Project Manager Const Supervision'),
(44, 'Co. Project Site Manager '),
(45, 'Co. PTL'),
(46, 'Cost Contract Project'),
(47, 'Drafter'),
(48, 'Draftmen'),
(49, 'Electrical Engineer'),
(50, 'Electrical Inspector'),
(51, 'Elektro - Mechaninal Engineer'),
(52, 'Enjinir Audit Internal'),
(53, 'Enjinir Mesin'),
(54, 'Enjinir Process'),
(55, 'Enjinir Sipil'),
(56, 'Enjinir Teknik Lingkungan'),
(57, 'Foundation Engineer'),
(58, 'Foundation Engineer'),
(59, 'Geodetic Engineer'),
(60, 'Hidraulic Engineer'),
(61, 'HSE Engineer'),
(62, 'Inspector Boiler'),
(63, 'Inspector Electrical'),
(64, 'Inspector Mechanical Engineer'),
(65, 'Instrument & Control Engineer'),
(66, 'Junior Administrasi Teknik'),
(67, 'Junior Engineer QA/QC'),
(68, 'Junior Engineer Teknik Mesin'),
(69, 'Junior Engineer Teknik Sipil'),
(70, 'Junior Officer Administrasi Teknik'),
(71, 'Junior Officer Drafter'),
(72, 'Junior Officer Public Relation'),
(73, 'Junior Officer Umum'),
(74, 'Kep. Satuan Manajemen Mutu & Risiko'),
(75, 'Kep. Satuan Pengawas Internal'),
(76, 'Lead Engineer Electrical'),
(77, 'Leader QA/QC Mechanical Engineer'),
(78, 'Manajer Administrasi dan Pengendalian TND'),
(79, 'Manajer Akuntansi'),
(80, 'Manajer IT'),
(81, 'Manajer Jasa Survei'),
(82, 'Manajer Keuangan dan Anggaran'),
(83, 'Manajer Legal'),
(84, 'Manajer Pemasaran'),
(85, 'Manajer Pengembangan Usaha'),
(86, 'Manajer SDM'),
(87, 'Manajer Senior Keuangan'),
(88, 'Manajer Senior Pengusahaan'),
(89, 'Manajer Senior SDM & Umum'),
(90, 'Manajer Senior Transmisi & Distribusi'),
(91, 'Manajer Umum'),
(92, 'Mechanical Engineer'),
(93, 'Mechanical Inspector'),
(94, 'Officer Administrasi Pemasaran'),
(95, 'Pemeriksa Keuangan & Administrasi'),
(96, 'Personil O&M'),
(97, 'Piping Engineer'),
(98, 'PLT Asman Administrasi Kontrak'),
(99, 'PLT Asman Keuangan'),
(100, 'PLT Manajer Adm. & Pengendalian Kontrak Pembangkit'),
(101, 'PLT Manajer Adm. & Control Supervisi Konstruksi'),
(102, 'PLT Manajer Jasa Enjiniring Pembangkit'),
(103, 'PLT Manajer Jasa Enjiniring TND'),
(104, 'PLT Manajer Pengadaan'),
(105, 'PLT Manajer Senior Pemasaran'),
(106, 'Project Administrasi'),
(107, 'Project Administrator'),
(108, 'Project Director'),
(109, 'Project Engineer Civil'),
(110, 'Project Engineer I&C'),
(111, 'Project Engineer Support'),
(112, 'Project Engineer Support/Reporting'),
(113, 'Project Liason Engineer'),
(114, 'Project Liason Officer Engineer'),
(115, 'Project Manager'),
(116, 'Project Team Leader'),
(117, 'Project Team Leader/Manager'),
(118, 'Project Administrasi'),
(119, 'Project Administrasi 2'),
(120, 'PTL Jawa/Bali Crossing'),
(121, 'QA/QC Engineer'),
(122, 'Scheduler Engineer'),
(123, 'Sekretariat'),
(124, 'Sekretaris'),
(125, 'Sekretaris DIRUT'),
(126, 'Sekretaris MS T&D'),
(127, 'Senior Advisor Pengembangan Usaha'),
(128, 'Senior Engineer'),
(129, 'Senior Engineer Mesin'),
(130, 'Senior Engineer Listrik'),
(131, 'Senior Engineer Scada'),
(132, 'Senior Engineer Sipil'),
(133, 'Sipil Inspektor'),
(134, 'Site Civil Engineer'),
(135, 'Site Electrical Engineer'),
(136, 'Site Mechanical Engineer'),
(137, 'Staf Administrasi'),
(138, 'Staf Manajemen Mutu & Risiko'),
(139, 'Staf Pemasaran'),
(140, 'Staf Penagihan'),
(141, 'Staf Sekper'),
(142, 'Staf Survey'),
(143, 'Staf Umum'),
(144, 'Structure Engineer '),
(145, 'Survey Enjinir'),
(146, 'Tim C&G'),
(147, 'Tim QA/QC'),
(148, 'Typist'),
(149, 'Warranty Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluarga`
--

CREATE TABLE IF NOT EXISTS `tb_keluarga` (
  `id_kel` int(5) NOT NULL AUTO_INCREMENT,
  `id_peg` int(5) NOT NULL,
  `nama_kel` varchar(50) NOT NULL,
  `hub_kel` varchar(20) NOT NULL,
  `jk_kel` varchar(20) NOT NULL,
  `tgl_kel` date NOT NULL,
  `ket_kel` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_keluarga`
--

INSERT INTO `tb_keluarga` (`id_kel`, `id_peg`, `nama_kel`, `hub_kel`, `jk_kel`, `tgl_kel`, `ket_kel`) VALUES
(3, 1, 'Jacky Lmao', 'Istri', 'Perempuan', '1989-01-05', 'Ditanggung'),
(6, 1, 'Matthew Bailey', 'Anak', 'Laki-laki', '1994-10-31', 'Tidak Ditanggung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kompetensi`
--

CREATE TABLE IF NOT EXISTS `tb_kompetensi` (
  `id_kompetensi` int(11) NOT NULL,
  `nama_kompetensi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kompetensi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kompetensi`
--

INSERT INTO `tb_kompetensi` (`id_kompetensi`, `nama_kompetensi`) VALUES
(1, 'Administrasi'),
(2, 'Administrasi Niaga'),
(3, 'Akuntansi'),
(4, 'Arsitektur'),
(5, 'Ekonomi'),
(6, 'Elektro'),
(7, 'Fisika'),
(8, 'Gambar Teknik'),
(9, 'Geodesi'),
(10, 'Geologi'),
(11, 'Hukum'),
(12, 'Ilmu Komputer'),
(13, 'Industri'),
(14, 'Informatika'),
(15, 'Instrument & Control'),
(16, 'Keuangan'),
(17, 'Kimia'),
(18, 'Komunikasi'),
(19, 'Lingkungan'),
(20, 'Manajemen'),
(21, 'Manajemen Informatika'),
(22, 'Manajemen Keuangan'),
(23, 'Mesin'),
(24, 'Metalurgi'),
(25, 'Mineral'),
(26, 'Nuklir'),
(27, 'Planologi'),
(28, 'Sipil'),
(29, 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mutasi`
--

CREATE TABLE IF NOT EXISTS `tb_mutasi` (
  `id_mut` int(11) NOT NULL AUTO_INCREMENT,
  `id_peg` int(5) NOT NULL,
  `nama_mut` varchar(50) NOT NULL,
  `tgl_sejak` date NOT NULL,
  `tgl_hingga` date NOT NULL,
  PRIMARY KEY (`id_mut`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_mutasi`
--

INSERT INTO `tb_mutasi` (`id_mut`, `id_peg`, `nama_mut`, `tgl_sejak`, `tgl_hingga`) VALUES
(1, 1, 'ASSISTANT ENGINEER PEMELIHARAAN DISTRIBUSI', '2011-06-01', '2011-11-14'),
(3, 1, 'ASSISTANT OF THE KAPPA CRUSADER', '2011-11-15', '2011-12-31'),
(5, 1, 'DIRECTOR OF THE SADBOYS', '2016-11-29', '2016-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai_organik`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai_organik` (
  `id_peg` int(20) NOT NULL,
  `tgl_masuk` varchar(50) NOT NULL,
  `tgl_angkat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_peg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai_organik`
--

INSERT INTO `tb_pegawai_organik` (`id_peg`, `tgl_masuk`, `tgl_angkat`) VALUES
(1, '2008-01-05', '2008-01-10'),
(7, '2006-05-04', '2006-05-05'),
(13, '2014-10-29', '2014-10-28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai_pkwt`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai_pkwt` (
  `id_peg` int(20) NOT NULL,
  `no_npwp` varchar(30) NOT NULL,
  `no_kontrak` varchar(30) NOT NULL,
  `mulai_kontrak` date NOT NULL,
  `berakhir_kontrak` date NOT NULL,
  `lama_kontrak` int(10) NOT NULL,
  `uang_tugas` int(20) NOT NULL,
  `uang_insentif` int(20) NOT NULL,
  `uang_makan` int(20) NOT NULL,
  `uang_transport` int(20) NOT NULL,
  PRIMARY KEY (`id_peg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai_pkwt`
--

INSERT INTO `tb_pegawai_pkwt` (`id_peg`, `no_npwp`, `no_kontrak`, `mulai_kontrak`, `berakhir_kontrak`, `lama_kontrak`, `uang_tugas`, `uang_insentif`, `uang_makan`, `uang_transport`) VALUES
(9, '1', '1', '2011-03-27', '2016-07-02', 64, 9000000, 9000000, 800000, 200000),
(11, '3', '3', '2014-01-04', '2018-11-29', 58, 19000000, 9000000, 900000, 200000),
(12, '4', '4', '2012-10-29', '2016-05-31', 43, 5000000, 5000000, 600000, 400000),
(14, '12', '12', '2014-10-29', '2016-10-29', 24, 2000000, 3000000, 1000000, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE IF NOT EXISTS `tb_pendidikan` (
  `id_pen` int(5) NOT NULL AUTO_INCREMENT,
  `id_peg` int(5) NOT NULL,
  `tingkat_pen` varchar(50) NOT NULL,
  `tahun_pen` varchar(10) NOT NULL,
  `lembaga_pen` varchar(50) NOT NULL,
  `status_pen` varchar(20) NOT NULL,
  `gelar_pen` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id_pen`, `id_peg`, `tingkat_pen`, `tahun_pen`, `lembaga_pen`, `status_pen`, `gelar_pen`) VALUES
(2, 1, 'SD', '2007', 'SD NEGERI 1 JAKARTA', '', ''),
(3, 1, 'SMP', '2010', 'SMP NEGERI 1 WONOSARI', '', ''),
(4, 1, 'SMA IPA', '2012', 'SMA NEGERI 1 WONOSARI', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pensiun`
--

CREATE TABLE IF NOT EXISTS `tb_pensiun` (
  `id_pensiun` int(20) NOT NULL,
  `id_peg` int(20) NOT NULL,
  `no_skpen` varchar(75) NOT NULL,
  `tgl_skpen` date NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id_pensiun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_proyek`
--

CREATE TABLE IF NOT EXISTS `tb_proyek` (
  `id_proyek` int(11) NOT NULL,
  `id_peg` int(11) NOT NULL,
  `nama_proyek` varchar(100) NOT NULL,
  `mulai_proyek` varchar(22) NOT NULL,
  `berakhir_proyek` varchar(22) NOT NULL,
  `lokasi_proyek` varchar(50) NOT NULL,
  `nama_lokasi_proyek` varchar(20) NOT NULL,
  `pemilik_proyek` varchar(50) NOT NULL,
  `fitur_proyek` varchar(50) NOT NULL,
  `jabatan_proyek` varchar(50) NOT NULL,
  PRIMARY KEY (`id_proyek`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_proyek`
--

INSERT INTO `tb_proyek` (`id_proyek`, `id_peg`, `nama_proyek`, `mulai_proyek`, `berakhir_proyek`, `lokasi_proyek`, `nama_lokasi_proyek`, `pemilik_proyek`, `fitur_proyek`, `jabatan_proyek`) VALUES
(2, 9, 'PLTU KALTENG 2x60 MW (1st Stage CFSPP Crashed Programme)', '2000', '2006', 'Pulau Pisau, Central Kalimantan', 'PLTU KALTENG', 'PT PLN (Persero)', 'Engineering Supervision', 'Lead Civil Engineer'),
(12, 9, 'PLTU Parit Baru 2x50', '2005', '2010', 'Parit, Kalimantan', 'PLTU Parit', 'PT PLN (Persero)', '', 'Lead Civil Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sertifikasi`
--

CREATE TABLE IF NOT EXISTS `tb_sertifikasi` (
  `id_ser` int(10) NOT NULL AUTO_INCREMENT,
  `id_peg` int(10) NOT NULL,
  `tanggal_ser` date NOT NULL,
  `nama_ser` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_sertifikasi`
--

INSERT INTO `tb_sertifikasi` (`id_ser`, `id_peg`, `tanggal_ser`, `nama_ser`) VALUES
(2, 1, '2011-02-05', 'SERTIFIKASI OF THE MEMELORD'),
(4, 1, '2009-03-30', 'SERTIFIKASI 322 YOLO'),
(6, 1, '2009-10-05', 'SERTIFIKASI BABYRAEG '),
(7, 9, '2010-10-28', 'Insinyur Professional Pratama, certified by The Grand Maester');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE IF NOT EXISTS `tb_status` (
  `id_status` int(20) NOT NULL,
  `nama_status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `nama_status`) VALUES
(1, 'Organik'),
(2, 'PKWT');

-- --------------------------------------------------------

--
-- Table structure for table `tb_talenta`
--

CREATE TABLE IF NOT EXISTS `tb_talenta` (
  `id_talenta` int(5) NOT NULL AUTO_INCREMENT,
  `id_peg` int(5) NOT NULL,
  `mulai_tanggal` date NOT NULL,
  `berakhir_tanggal` date NOT NULL,
  `semester` varchar(10) NOT NULL,
  `id_grade` int(5) NOT NULL,
  `poin` varchar(10) NOT NULL,
  PRIMARY KEY (`id_talenta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_talenta`
--

INSERT INTO `tb_talenta` (`id_talenta`, `id_peg`, `mulai_tanggal`, `berakhir_tanggal`, `semester`, `id_grade`, `poin`) VALUES
(1, 1, '2011-07-01', '2011-12-31', '1', 3, 'A'),
(2, 1, '2012-01-01', '2012-06-30', '2', 3, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload_gambar`
--

CREATE TABLE IF NOT EXISTS `tb_upload_gambar` (
  `id_gambar` int(11) NOT NULL AUTO_INCREMENT,
  `id_peg` int(11) NOT NULL,
  `nama_gambar` varchar(35) NOT NULL,
  `tipe_gambar` varchar(10) NOT NULL,
  `status_gambar` enum('default','custom') NOT NULL,
  PRIMARY KEY (`id_gambar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_upload_gambar`
--

INSERT INTO `tb_upload_gambar` (`id_gambar`, `id_peg`, `nama_gambar`, `tipe_gambar`, `status_gambar`) VALUES
(1, 13, 'avatar.jpg', 'image/jpg', 'default'),
(2, 1, 'avatar.png', 'image/png', 'custom'),
(3, 9, 'avatar_1465888441.jpg', 'image/jpeg', 'custom'),
(4, 14, 'avatar.jpg', 'image/jpg', 'default');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
