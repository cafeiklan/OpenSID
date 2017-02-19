-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.0.24a-community-nt-log - MySQL Community Edition (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table sid__310.analisis_indikator
CREATE TABLE IF NOT EXISTS `analisis_indikator` (
  `id` int(11) NOT NULL auto_increment,
  `id_master` int(11) NOT NULL,
  `nomor` int(3) NOT NULL,
  `pertanyaan` varchar(400) NOT NULL,
  `id_tipe` tinyint(4) NOT NULL default '1',
  `bobot` tinyint(4) NOT NULL default '0',
  `act_analisis` tinyint(1) NOT NULL default '2',
  `id_kategori` tinyint(4) NOT NULL,
  `is_publik` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `id_master` (`id_master`,`id_tipe`),
  KEY `id_tipe` (`id_tipe`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.analisis_kategori_indikator
CREATE TABLE IF NOT EXISTS `analisis_kategori_indikator` (
  `id` tinyint(4) NOT NULL auto_increment,
  `id_master` tinyint(4) NOT NULL,
  `kategori_kode` varchar(3) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id_master` (`id_master`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.analisis_klasifikasi
CREATE TABLE IF NOT EXISTS `analisis_klasifikasi` (
  `id` int(11) NOT NULL auto_increment,
  `id_master` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `minval` double(5,2) NOT NULL,
  `maxval` double(5,2) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id_master` (`id_master`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.analisis_master
CREATE TABLE IF NOT EXISTS `analisis_master` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(40) NOT NULL,
  `subjek_tipe` tinyint(4) NOT NULL,
  `lock` tinyint(1) NOT NULL default '1',
  `deskripsi` text NOT NULL,
  `kode_analisis` varchar(5) NOT NULL default '00000',
  `id_child` smallint(4) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `pembagi` varchar(10) NOT NULL default '100',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.analisis_parameter
CREATE TABLE IF NOT EXISTS `analisis_parameter` (
  `id` int(11) NOT NULL auto_increment,
  `id_indikator` int(11) NOT NULL,
  `kode_jawaban` int(3) NOT NULL,
  `asign` tinyint(1) NOT NULL default '0',
  `jawaban` varchar(200) NOT NULL,
  `nilai` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `id_indikator` (`id_indikator`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.analisis_partisipasi
CREATE TABLE IF NOT EXISTS `analisis_partisipasi` (
  `id` int(11) NOT NULL auto_increment,
  `id_subjek` int(11) NOT NULL,
  `id_master` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `id_klassifikasi` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  KEY `id_subjek` (`id_subjek`,`id_master`,`id_periode`,`id_klassifikasi`),
  KEY `id_master` (`id_master`),
  KEY `id_periode` (`id_periode`),
  KEY `id_klassifikasi` (`id_klassifikasi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.analisis_periode
CREATE TABLE IF NOT EXISTS `analisis_periode` (
  `id` int(11) NOT NULL auto_increment,
  `id_master` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_state` tinyint(4) NOT NULL default '1',
  `aktif` tinyint(1) NOT NULL default '0',
  `keterangan` varchar(100) NOT NULL,
  `tahun_pelaksanaan` year(4) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id_master` (`id_master`),
  KEY `id_state` (`id_state`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.analisis_ref_state
CREATE TABLE IF NOT EXISTS `analisis_ref_state` (
  `id` tinyint(4) NOT NULL auto_increment,
  `nama` varchar(40) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.analisis_ref_subjek
CREATE TABLE IF NOT EXISTS `analisis_ref_subjek` (
  `id` tinyint(4) NOT NULL auto_increment,
  `subjek` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.analisis_respon
CREATE TABLE IF NOT EXISTS `analisis_respon` (
  `id_indikator` int(11) NOT NULL,
  `id_parameter` int(11) NOT NULL,
  `id_subjek` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.analisis_respon_bukti
CREATE TABLE IF NOT EXISTS `analisis_respon_bukti` (
  `id_master` tinyint(4) NOT NULL,
  `id_periode` tinyint(4) NOT NULL,
  `id_subjek` int(11) NOT NULL,
  `pengesahan` varchar(100) NOT NULL,
  `tgl_update` timestamp NOT NULL default CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.analisis_respon_hasil
CREATE TABLE IF NOT EXISTS `analisis_respon_hasil` (
  `id_master` tinyint(4) NOT NULL,
  `id_periode` tinyint(4) NOT NULL,
  `id_subjek` int(11) NOT NULL,
  `akumulasi` double(8,3) NOT NULL,
  `tgl_update` timestamp NOT NULL default CURRENT_TIMESTAMP,
  UNIQUE KEY `id_master` (`id_master`,`id_periode`,`id_subjek`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.analisis_tipe_indikator
CREATE TABLE IF NOT EXISTS `analisis_tipe_indikator` (
  `id` tinyint(4) NOT NULL auto_increment,
  `tipe` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.area
CREATE TABLE IF NOT EXISTS `area` (
  `id` int(4) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  `path` text NOT NULL,
  `enabled` int(11) NOT NULL default '1',
  `ref_polygon` int(9) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_cluster` int(11) NOT NULL,
  `desk` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.artikel
CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(11) NOT NULL auto_increment,
  `gambar` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `enabled` int(2) NOT NULL default '1',
  `tgl_upload` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `id_kategori` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `headline` int(1) NOT NULL default '0',
  `gambar1` varchar(200) NOT NULL,
  `gambar2` varchar(200) NOT NULL,
  `gambar3` varchar(200) NOT NULL,
  `dokumen` varchar(400) NOT NULL,
  `link_dokumen` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.config
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(5) NOT NULL auto_increment,
  `nama_desa` varchar(100) NOT NULL,
  `kode_desa` varchar(100) NOT NULL,
  `nama_kepala_desa` varchar(100) NOT NULL,
  `nip_kepala_desa` varchar(100) NOT NULL,
  `kode_pos` varchar(6) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `kode_kecamatan` varchar(100) NOT NULL,
  `nama_kepala_camat` varchar(100) NOT NULL,
  `nip_kepala_camat` varchar(100) NOT NULL,
  `nama_kabupaten` varchar(100) NOT NULL,
  `kode_kabupaten` varchar(100) NOT NULL,
  `nama_propinsi` varchar(100) NOT NULL,
  `kode_propinsi` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `lat` varchar(20) NOT NULL,
  `lng` varchar(20) NOT NULL,
  `zoom` tinyint(4) NOT NULL,
  `map_tipe` varchar(20) NOT NULL,
  `path` text NOT NULL,
  `alamat_kantor` varchar(200) default NULL,
  `g_analytic` varchar(200) NOT NULL,
  `regid` varchar(60) NOT NULL,
  `macid` varchar(60) NOT NULL,
  `email_desa` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.data_persil
CREATE TABLE IF NOT EXISTS `data_persil` (
  `id` int(11) NOT NULL auto_increment,
  `nik` varchar(64) NOT NULL,
  `nama` varchar(128) NOT NULL COMMENT 'nomer persil',
  `persil_jenis_id` tinyint(2) NOT NULL,
  `id_clusterdesa` varchar(64) NOT NULL,
  `alamat_ext` varchar(64) NOT NULL,
  `luas` decimal(7,2) NOT NULL,
  `kelas` varchar(128) default NULL,
  `peta` text,
  `no_sppt_pbb` varchar(128) NOT NULL,
  `persil_peruntukan_id` tinyint(2) NOT NULL,
  `rdate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `userID` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `nik` (`nik`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.data_persil_jenis
CREATE TABLE IF NOT EXISTS `data_persil_jenis` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(128) NOT NULL,
  `ndesc` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.data_persil_log
CREATE TABLE IF NOT EXISTS `data_persil_log` (
  `id` int(11) NOT NULL auto_increment,
  `persil_id` int(11) NOT NULL,
  `persil_transaksi_jenis` tinyint(2) NOT NULL,
  `pemilik_lama` varchar(24) NOT NULL,
  `pemilik_baru` varchar(24) NOT NULL,
  `rdate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Tabel untuk menyimpan catatan transaksi atas data persil';

-- Data exporting was unselected.


-- Dumping structure for table sid__310.data_persil_peruntukan
CREATE TABLE IF NOT EXISTS `data_persil_peruntukan` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(128) NOT NULL,
  `ndesc` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.detail_log_penduduk
CREATE TABLE IF NOT EXISTS `detail_log_penduduk` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.dokumen
CREATE TABLE IF NOT EXISTS `dokumen` (
  `id` int(11) NOT NULL auto_increment,
  `id_pend` int(11) NOT NULL default '0',
  `satuan` varchar(200) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `enabled` int(2) NOT NULL default '1',
  `tgl_upload` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.gambar_gallery
CREATE TABLE IF NOT EXISTS `gambar_gallery` (
  `id` int(11) NOT NULL auto_increment,
  `parrent` int(4) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `enabled` int(2) NOT NULL default '1',
  `tgl_upload` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `tipe` int(4) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `parrent` (`parrent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.garis
CREATE TABLE IF NOT EXISTS `garis` (
  `id` int(4) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  `path` text NOT NULL,
  `enabled` int(11) NOT NULL default '1',
  `ref_line` int(9) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `desk` text NOT NULL,
  `id_cluster` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.gis_simbol
CREATE TABLE IF NOT EXISTS `gis_simbol` (
  `simbol` varchar(40) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.inbox
CREATE TABLE IF NOT EXISTS `inbox` (
  `UpdatedInDB` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL default '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL default '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL default 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL default '',
  `Class` int(11) NOT NULL default '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL auto_increment,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL default 'false',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(5) NOT NULL auto_increment,
  `kategori` varchar(100) NOT NULL,
  `tipe` int(4) NOT NULL default '1',
  `urut` tinyint(4) NOT NULL,
  `enabled` tinyint(4) NOT NULL,
  `parrent` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.kelompok
CREATE TABLE IF NOT EXISTS `kelompok` (
  `id` int(11) NOT NULL auto_increment,
  `id_master` int(11) NOT NULL,
  `id_ketua` int(11) NOT NULL,
  `kode` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `id_ketua` (`id_ketua`),
  KEY `id_master` (`id_master`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.kelompok_anggota
CREATE TABLE IF NOT EXISTS `kelompok_anggota` (
  `id` int(11) NOT NULL auto_increment,
  `id_kelompok` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id_kelompok` (`id_kelompok`,`id_penduduk`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.kelompok_master
CREATE TABLE IF NOT EXISTS `kelompok_master` (
  `id` int(11) NOT NULL auto_increment,
  `kelompok` varchar(50) NOT NULL,
  `deskripsi` varchar(400) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.komentar
CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(5) NOT NULL auto_increment,
  `id_artikel` int(7) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_upload` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `enabled` int(2) NOT NULL default '2',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.kontak
CREATE TABLE IF NOT EXISTS `kontak` (
  `id` int(11) NOT NULL auto_increment,
  `id_pend` int(11) default NULL,
  `no_hp` varchar(15) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.kontak_grup
CREATE TABLE IF NOT EXISTS `kontak_grup` (
  `id` int(11) NOT NULL auto_increment,
  `nama_grup` varchar(30) NOT NULL,
  `id_kontak` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.line
CREATE TABLE IF NOT EXISTS `line` (
  `id` int(4) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  `simbol` varchar(50) NOT NULL,
  `color` varchar(10) NOT NULL default 'ff0000',
  `tipe` int(4) NOT NULL,
  `parrent` int(4) default '1',
  `enabled` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  KEY `parrent` (`parrent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.log_bulanan
CREATE TABLE IF NOT EXISTS `log_bulanan` (
  `id` int(11) NOT NULL auto_increment,
  `pend` int(11) NOT NULL,
  `lk` int(11) NOT NULL,
  `pr` int(11) NOT NULL,
  `kk` int(11) NOT NULL,
  `tgl` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.log_penduduk
CREATE TABLE IF NOT EXISTS `log_penduduk` (
  `id` int(10) NOT NULL auto_increment,
  `id_pend` int(11) NOT NULL,
  `id_detail` int(4) NOT NULL,
  `tanggal` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `bulan` varchar(2) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `tgl_peristiwa` date NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id_pend` (`id_pend`,`id_detail`,`tgl_peristiwa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.log_perubahan_penduduk
CREATE TABLE IF NOT EXISTS `log_perubahan_penduduk` (
  `id` int(11) NOT NULL auto_increment,
  `id_pend` int(11) NOT NULL,
  `id_cluster` varchar(200) NOT NULL,
  `tanggal` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.log_surat
CREATE TABLE IF NOT EXISTS `log_surat` (
  `id` int(11) NOT NULL auto_increment,
  `id_format_surat` int(4) NOT NULL,
  `id_pend` int(11) NOT NULL,
  `id_pamong` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `tanggal` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `bulan` varchar(2) default NULL,
  `tahun` varchar(4) default NULL,
  `no_surat` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.lokasi
CREATE TABLE IF NOT EXISTS `lokasi` (
  `id` int(4) NOT NULL auto_increment,
  `desk` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `enabled` int(11) NOT NULL default '1',
  `lat` varchar(30) NOT NULL,
  `lng` varchar(30) NOT NULL,
  `ref_point` int(9) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_cluster` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `ref_point` (`ref_point`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.media_sosial
CREATE TABLE IF NOT EXISTS `media_sosial` (
  `id` int(11) NOT NULL auto_increment,
  `gambar` text NOT NULL,
  `link` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  `enabled` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(4) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  `link` varchar(500) NOT NULL,
  `tipe` int(4) NOT NULL,
  `parrent` int(4) NOT NULL default '1',
  `link_tipe` tinyint(1) NOT NULL default '0',
  `enabled` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.outbox
CREATE TABLE IF NOT EXISTS `outbox` (
  `UpdatedInDB` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL default '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL default '0000-00-00 00:00:00',
  `SendBefore` time NOT NULL default '23:59:59',
  `SendAfter` time NOT NULL default '00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL default '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL default 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) default '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL auto_increment,
  `MultiPart` enum('false','true') default 'false',
  `RelativeValidity` int(11) default '-1',
  `SenderID` varchar(255) default NULL,
  `SendingTimeOut` timestamp NULL default '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') default 'default',
  `CreatorID` text NOT NULL,
  PRIMARY KEY  (`ID`),
  KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`),
  KEY `outbox_sender` (`SenderID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.point
CREATE TABLE IF NOT EXISTS `point` (
  `id` int(4) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  `simbol` varchar(50) NOT NULL,
  `tipe` int(4) NOT NULL,
  `parrent` int(4) NOT NULL default '1',
  `enabled` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  KEY `parrent` (`parrent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.polygon
CREATE TABLE IF NOT EXISTS `polygon` (
  `id` int(4) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  `simbol` varchar(50) NOT NULL,
  `color` varchar(10) NOT NULL default 'ff0000',
  `tipe` int(4) NOT NULL,
  `parrent` int(4) default '1',
  `enabled` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  KEY `parrent` (`parrent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.program
CREATE TABLE IF NOT EXISTS `program` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(256) NOT NULL,
  `ndesc` text NOT NULL,
  `sasaran` tinyint(1) NOT NULL default '0',
  `sdate` datetime NOT NULL,
  `edate` datetime NOT NULL,
  `userID` int(11) NOT NULL,
  `rdate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.program_peserta
CREATE TABLE IF NOT EXISTS `program_peserta` (
  `id` int(11) NOT NULL auto_increment,
  `program_id` int(11) NOT NULL,
  `peserta` decimal(18,0) NOT NULL,
  `sasaran` tinyint(1) NOT NULL,
  `userID` int(11) NOT NULL,
  `rdate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.sentitems
CREATE TABLE IF NOT EXISTS `sentitems` (
  `UpdatedInDB` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL default '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL default '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL default NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL default '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL default 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL default '',
  `Class` int(11) NOT NULL default '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL default '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL default '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL default 'SendingOK',
  `StatusError` int(11) NOT NULL default '-1',
  `TPMR` int(11) NOT NULL default '-1',
  `RelativeValidity` int(11) NOT NULL default '-1',
  `CreatorID` text NOT NULL,
  PRIMARY KEY  (`ID`,`SequencePosition`),
  KEY `sentitems_date` (`DeliveryDateTime`),
  KEY `sentitems_tpmr` (`TPMR`),
  KEY `sentitems_dest` (`DestinationNumber`),
  KEY `sentitems_sender` (`SenderID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.setting_modul
CREATE TABLE IF NOT EXISTS `setting_modul` (
  `id` int(11) NOT NULL auto_increment,
  `modul` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `aktif` tinyint(1) NOT NULL default '0',
  `ikon` varchar(50) NOT NULL,
  `urut` tinyint(4) NOT NULL,
  `level` tinyint(1) NOT NULL default '2',
  `hidden` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.setting_sms
CREATE TABLE IF NOT EXISTS `setting_sms` (
  `autoreply_text` varchar(160) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.sys_traffic
CREATE TABLE IF NOT EXISTS `sys_traffic` (
  `Tanggal` date NOT NULL,
  `ipAddress` text NOT NULL,
  `Jumlah` int(10) NOT NULL,
  PRIMARY KEY  (`Tanggal`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_alamat_sekarang
CREATE TABLE IF NOT EXISTS `tweb_alamat_sekarang` (
  `id` int(11) NOT NULL,
  `jalan` varchar(100) NOT NULL,
  `rt` varchar(100) NOT NULL,
  `rw` varchar(100) NOT NULL,
  `dusun` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_cacat
CREATE TABLE IF NOT EXISTS `tweb_cacat` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_desa_pamong
CREATE TABLE IF NOT EXISTS `tweb_desa_pamong` (
  `pamong_id` int(5) NOT NULL auto_increment,
  `pamong_nama` varchar(100) default NULL,
  `pamong_nip` varchar(20) default NULL,
  `pamong_nik` varchar(20) default NULL,
  `jabatan` varchar(50) default '0',
  `pamong_status` varchar(45) default NULL,
  `pamong_tgl_terdaftar` date default NULL,
  PRIMARY KEY  (`pamong_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_golongan_darah
CREATE TABLE IF NOT EXISTS `tweb_golongan_darah` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(15) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_keluarga
CREATE TABLE IF NOT EXISTS `tweb_keluarga` (
  `id` int(10) NOT NULL auto_increment,
  `no_kk` varchar(160) default NULL,
  `nik_kepala` varchar(200) default NULL,
  `tgl_daftar` timestamp NULL default CURRENT_TIMESTAMP,
  `kelas_sosial` int(4) default NULL,
  `raskin` int(4) NOT NULL default '2',
  `id_bedah_rumah` int(2) NOT NULL default '2',
  `id_pkh` int(2) NOT NULL default '2',
  `id_blt` int(2) NOT NULL default '2',
  PRIMARY KEY  (`id`),
  KEY `nik_kepala` (`nik_kepala`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_penduduk
CREATE TABLE IF NOT EXISTS `tweb_penduduk` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  `nik` decimal(16,0) NOT NULL,
  `id_kk` int(11) default '0',
  `kk_level` tinyint(2) NOT NULL default '0',
  `id_rtm` int(11) NOT NULL,
  `rtm_level` int(11) NOT NULL,
  `sex` tinyint(4) unsigned default NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `agama_id` int(10) unsigned NOT NULL,
  `pendidikan_kk_id` int(10) unsigned NOT NULL,
  `pendidikan_id` int(10) unsigned NOT NULL,
  `pendidikan_sedang_id` int(10) unsigned NOT NULL,
  `pekerjaan_id` int(10) unsigned NOT NULL,
  `status_kawin` tinyint(4) unsigned NOT NULL,
  `warganegara_id` int(10) unsigned NOT NULL,
  `dokumen_pasport` varchar(45) default NULL,
  `dokumen_kitas` int(10) default NULL,
  `ayah_nik` varchar(16) NOT NULL,
  `ibu_nik` varchar(16) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `golongan_darah_id` int(11) NOT NULL,
  `id_cluster` int(11) NOT NULL,
  `status` int(10) unsigned default NULL,
  `alamat_sebelumnya` varchar(200) NOT NULL,
  `alamat_sekarang` varchar(200) NOT NULL,
  `status_dasar` tinyint(4) NOT NULL default '1',
  `hamil` int(1) default NULL,
  `cacat_id` int(11) default NULL,
  `sakit_menahun_id` int(11) NOT NULL,
  `jamkesmas` int(11) NOT NULL default '2',
  `akta_lahir` varchar(40) NOT NULL,
  `akta_perkawinan` varchar(40) NOT NULL,
  `tanggalperkawinan` date NOT NULL,
  `akta_perceraian` varchar(40) NOT NULL,
  `tanggalperceraian` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_penduduk_agama
CREATE TABLE IF NOT EXISTS `tweb_penduduk_agama` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_penduduk_hubungan
CREATE TABLE IF NOT EXISTS `tweb_penduduk_hubungan` (
  `id` int(10) NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_penduduk_kawin
CREATE TABLE IF NOT EXISTS `tweb_penduduk_kawin` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_penduduk_mandiri
CREATE TABLE IF NOT EXISTS `tweb_penduduk_mandiri` (
  `nik` varchar(20) NOT NULL,
  `pin` varchar(60) NOT NULL,
  `tanggal_buat` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL,
  UNIQUE KEY `nik` (`nik`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_penduduk_map
CREATE TABLE IF NOT EXISTS `tweb_penduduk_map` (
  `id` int(11) NOT NULL,
  `lat` varchar(24) NOT NULL,
  `lng` varchar(24) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_penduduk_pekerjaan
CREATE TABLE IF NOT EXISTS `tweb_penduduk_pekerjaan` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nama` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_penduduk_pendidikan
CREATE TABLE IF NOT EXISTS `tweb_penduduk_pendidikan` (
  `id` tinyint(3) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_penduduk_pendidikan_kk
CREATE TABLE IF NOT EXISTS `tweb_penduduk_pendidikan_kk` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_penduduk_sex
CREATE TABLE IF NOT EXISTS `tweb_penduduk_sex` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nama` varchar(15) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_penduduk_status
CREATE TABLE IF NOT EXISTS `tweb_penduduk_status` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nama` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_penduduk_umur
CREATE TABLE IF NOT EXISTS `tweb_penduduk_umur` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(25) default NULL,
  `dari` int(11) default NULL,
  `sampai` int(11) default NULL,
  `status` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_penduduk_warganegara
CREATE TABLE IF NOT EXISTS `tweb_penduduk_warganegara` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nama` varchar(25) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_rtm
CREATE TABLE IF NOT EXISTS `tweb_rtm` (
  `id` int(11) NOT NULL auto_increment,
  `nik_kepala` int(11) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `tgl_daftar` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `kelas_sosial` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_rtm_hubungan
CREATE TABLE IF NOT EXISTS `tweb_rtm_hubungan` (
  `id` tinyint(4) NOT NULL auto_increment,
  `nama` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_sakit_menahun
CREATE TABLE IF NOT EXISTS `tweb_sakit_menahun` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_status_dasar
CREATE TABLE IF NOT EXISTS `tweb_status_dasar` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nama` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_surat_atribut
CREATE TABLE IF NOT EXISTS `tweb_surat_atribut` (
  `id` int(11) NOT NULL auto_increment,
  `id_surat` int(11) NOT NULL,
  `id_tipe` tinyint(4) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `long` tinyint(4) NOT NULL,
  `kode` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_surat_format
CREATE TABLE IF NOT EXISTS `tweb_surat_format` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  `url_surat` varchar(100) NOT NULL,
  `kode_surat` varchar(10) NOT NULL,
  `kunci` tinyint(1) NOT NULL default '0',
  `favorit` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.tweb_wil_clusterdesa
CREATE TABLE IF NOT EXISTS `tweb_wil_clusterdesa` (
  `id` int(11) NOT NULL auto_increment,
  `rt` varchar(10) NOT NULL default '0',
  `rw` varchar(10) NOT NULL default '0',
  `dusun` varchar(50) NOT NULL default '0',
  `id_kepala` int(11) NOT NULL,
  `lat` varchar(20) NOT NULL,
  `lng` varchar(20) NOT NULL,
  `zoom` int(5) NOT NULL,
  `path` text NOT NULL,
  `map_tipe` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `rt` (`rt`,`rw`,`dusun`),
  KEY `id_kepala` (`id_kepala`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `id_grup` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `last_login` datetime NOT NULL,
  `active` tinyint(1) unsigned default '0',
  `nama` varchar(50) default NULL,
  `company` varchar(100) default NULL,
  `phone` varchar(20) default NULL,
  `foto` varchar(100) NOT NULL,
  `session` varchar(40) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table sid__310.user_grup
CREATE TABLE IF NOT EXISTS `user_grup` (
  `id` tinyint(4) NOT NULL,
  `nama` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
