-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for tb_henny
CREATE DATABASE IF NOT EXISTS `tb_henny` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tb_henny`;

-- Dumping structure for table tb_henny.fasilitas
CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT,
  `fasilitas` varchar(50) NOT NULL DEFAULT '0',
  `gambar` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_fasilitas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table tb_henny.fasilitas: ~3 rows (approximately)
/*!40000 ALTER TABLE `fasilitas` DISABLE KEYS */;
INSERT INTO `fasilitas` (`id_fasilitas`, `fasilitas`, `gambar`) VALUES
	(1, 'Ilmu yang bermanfaat', 'book'),
	(2, 'Alat musik yang sudah tersedia selama kursus', 'music_note'),
	(3, 'Sertifikat', 'credit_card');
/*!40000 ALTER TABLE `fasilitas` ENABLE KEYS */;

-- Dumping structure for table tb_henny.info
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tema` varchar(50) DEFAULT NULL,
  `id_warna` int(11) DEFAULT NULL,
  `ikon` varchar(50) DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `whatsapp` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_warna` (`id_warna`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table tb_henny.info: ~1 rows (approximately)
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` (`id`, `tema`, `id_warna`, `ikon`, `visi`, `alamat`, `telepon`, `website`, `facebook`, `whatsapp`, `instagram`) VALUES
	(1, 'Cendrawasih Music', 4, 'Oapple-touch-icon-152x152.png', 'Menjadikan Lembaga Kursus Musik Sebagai wadah pengembangan bakat terutama di bidang Musik, serta manjadi tempat pelatihan yang Berperan serta dalam mengembangkan bakat dan minat pencinta musik', 'Jl. Brig Jend. Hasan Basri, No.45, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70124', '(0741) 668723', 'www.cendrawasihmusic.com', 'Cendrawasih Music', '+6285236754900', 'Cendrawasih_Music');
/*!40000 ALTER TABLE `info` ENABLE KEYS */;

-- Dumping structure for table tb_henny.jadwal
CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_kursus` int(11) NOT NULL DEFAULT 0,
  `hari` varchar(50) NOT NULL DEFAULT '0',
  `waktu_mulai` varchar(50) NOT NULL DEFAULT '0',
  `waktu_selesai` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_jadwal`),
  KEY `id_kursus` (`id_kursus`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table tb_henny.jadwal: ~5 rows (approximately)
/*!40000 ALTER TABLE `jadwal` DISABLE KEYS */;
INSERT INTO `jadwal` (`id_jadwal`, `id_kursus`, `hari`, `waktu_mulai`, `waktu_selesai`) VALUES
	(1, 1, 'Senin', '10', '13'),
	(2, 2, 'Selasa', '10', '13'),
	(3, 3, 'Rabu', '10', '13'),
	(4, 4, 'Kamis', '08', '11'),
	(5, 5, 'Jumat', '10', '13');
/*!40000 ALTER TABLE `jadwal` ENABLE KEYS */;

-- Dumping structure for table tb_henny.kursus
CREATE TABLE IF NOT EXISTS `kursus` (
  `id_kursus` int(11) NOT NULL AUTO_INCREMENT,
  `kursus` varchar(50) NOT NULL DEFAULT '0',
  `iuran` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kursus`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table tb_henny.kursus: ~5 rows (approximately)
/*!40000 ALTER TABLE `kursus` DISABLE KEYS */;
INSERT INTO `kursus` (`id_kursus`, `kursus`, `iuran`) VALUES
	(1, 'Gitar', 300000),
	(2, 'Piano', 300000),
	(3, 'Biola', 235000),
	(4, 'Drum', 280000),
	(5, 'Vokal', 250000);
/*!40000 ALTER TABLE `kursus` ENABLE KEYS */;

-- Dumping structure for table tb_henny.misi
CREATE TABLE IF NOT EXISTS `misi` (
  `id_misi` int(11) NOT NULL AUTO_INCREMENT,
  `misi` text DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_misi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table tb_henny.misi: ~3 rows (approximately)
/*!40000 ALTER TABLE `misi` DISABLE KEYS */;
INSERT INTO `misi` (`id_misi`, `misi`, `gambar`) VALUES
	(1, 'Menyelenggarakan pelatihan bagi siswa kursus', 'assignment_ind'),
	(2, 'Menyelenggarakan dan mengembangkan bakat siswa', 'timeline'),
	(3, 'mencetak generasi muda yang berbakat dan profesional dibidang musik', 'business_center');
/*!40000 ALTER TABLE `misi` ENABLE KEYS */;

-- Dumping structure for table tb_henny.peserta
CREATE TABLE IF NOT EXISTS `peserta` (
  `id_peserta` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `id_kursus` int(11) NOT NULL DEFAULT 0,
  `alamat` text NOT NULL,
  `jk` char(1) NOT NULL DEFAULT '0',
  `no_hp` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `foto` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_peserta`),
  UNIQUE KEY `email` (`email`),
  KEY `id_kursus` (`id_kursus`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table tb_henny.peserta: ~1 rows (approximately)
/*!40000 ALTER TABLE `peserta` DISABLE KEYS */;
INSERT INTO `peserta` (`id_peserta`, `nama`, `id_kursus`, `alamat`, `jk`, `no_hp`, `email`, `foto`) VALUES
	(6, 'Henny Oktapiyana', 3, 'Anjir Pasar', 'p', '082251222131', 'henny@user.com', '037-arab-woman.png'),
	(8, 'M. Iqbal Effendi', 3, 'Jl. Padat Karya ', 'l', '082159142175', 'iqbal@user.com', '055-bodybuilder.png'),
	(9, 'Septiana Rahayu', 5, 'Anjir Pasar Kota II', 'p', '085249892125', 'septianra23@gmail.com', '026-girl-4.png'),
	(10, 'Rio Andi Saputra', 1, 'Banjarmasin', 'l', '082282793864', 'ardiansyah@iptek.or.id', '011-man-2.png');
/*!40000 ALTER TABLE `peserta` ENABLE KEYS */;

-- Dumping structure for table tb_henny.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL DEFAULT '2',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `sandi` varchar(256) NOT NULL DEFAULT '0',
  `peran` int(11) NOT NULL DEFAULT 2,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table tb_henny.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `nama`, `email`, `sandi`, `peran`) VALUES
	(4, 'Henny Oktapiyana', 'henny@admin.com', '$2y$10$5rdEgr3URb.KISk2hQxlW.GIe6CuPbiI7Qcaw5wBnXSnidkw3oBcm', 1),
	(7, 'Henny Oktapiyana', 'henny@user.com', '$2y$10$5rdEgr3URb.KISk2hQxlW.GIe6CuPbiI7Qcaw5wBnXSnidkw3oBcm', 2),
	(9, 'M. Iqbal Effendi', 'iqbal@user.com', '$2y$10$5rdEgr3URb.KISk2hQxlW.GIe6CuPbiI7Qcaw5wBnXSnidkw3oBcm', 2),
	(10, 'Septiana Rahayu', 'septianra23@gmail.com', '$2y$10$5rdEgr3URb.KISk2hQxlW.GIe6CuPbiI7Qcaw5wBnXSnidkw3oBcm', 2),
	(11, 'Rio Andi Saputra', 'ardiansyah@iptek.or.id', '$2y$10$5rdEgr3URb.KISk2hQxlW.GIe6CuPbiI7Qcaw5wBnXSnidkw3oBcm', 2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table tb_henny.warna
CREATE TABLE IF NOT EXISTS `warna` (
  `id_warna` int(11) NOT NULL AUTO_INCREMENT,
  `warna` varchar(50) NOT NULL DEFAULT '0',
  `kode` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_warna`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table tb_henny.warna: ~14 rows (approximately)
/*!40000 ALTER TABLE `warna` DISABLE KEYS */;
INSERT INTO `warna` (`id_warna`, `warna`, `kode`) VALUES
	(1, 'Biru', 'blue'),
	(2, 'Merah', 'red'),
	(3, 'Hijau', 'green'),
	(4, 'Merah Jambu', 'pink'),
	(5, 'Hitam', 'black'),
	(6, 'Kuning', 'yellow'),
	(7, 'Cyan', 'cyan'),
	(8, 'Teal', 'teal'),
	(9, 'Amber', 'amber'),
	(10, 'Transparan', 'transparent'),
	(11, 'Ungu', 'purple'),
	(12, 'Indigo', 'indigo'),
	(13, 'Jingga', 'orange'),
	(14, 'Coklat', 'brown');
/*!40000 ALTER TABLE `warna` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
