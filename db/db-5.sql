/*
SQLyog Enterprise v12.4.3 (64 bit)
MySQL - 5.7.24 : Database - visterpr_vister
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`visterpr_vister` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `visterpr_vister`;

/*Table structure for table `abouts` */

DROP TABLE IF EXISTS `abouts`;

CREATE TABLE `abouts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `abouts` */

insert  into `abouts`(`id`,`deskripsi`,`foto`,`created_at`,`updated_at`) values 
(1,'<p><strong><a href=\"https://visterpro.com/\">PT GRAHA VISTER MANDIRI</a> </strong>adalah perusahaan <span dir=\"auto\">Developer dan Agent property</span> di Provinsi Lampung. Wilayah property yang dipasarkan <strong><a href=\"https://visterpro.com/\">PT GRAHA VISTER MANDIRI</a></strong> adalah Kota Bandar Lampung, Kabupaten Pesawaran dan Lampung Selatan.</p>','assets/about/JW8CEPo9bHVO5FMRT0NxJ518HrefdCXzcI9n3YtK.png',NULL,'2021-02-04 08:50:55');

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` longtext COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admin` */

insert  into `admin`(`id`,`name`,`email`,`level`,`foto`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Prasetyo Bella','ptgrahavistermandiri@gmail.com','admin','assets/pengguna/u7WRkqN0etV9jelLeB9F8Ttb9jWA0CK87RnNTarG.jpg',NULL,'$2y$10$v9782zWQq.YpUkgiPmX3Q.FUyz9LEemuIbxIxLl/TfpJzawtxKVP2',NULL,'2021-01-26 12:42:33','2021-02-02 08:45:01'),
(3,'Ispan Alfadqi','ispanalfadqi@gmail.com','admin','assets/pengguna/H6c3jnXnMz867QS5gaMDL48wYBltxJLqLLi6ocnW.jpg',NULL,'$2y$10$BQN53zB16AI1eriGAU0B5u68L7YcYga3.3ZNvOkCZ1VEBG2hb74Pu',NULL,'2021-02-23 03:37:24','2021-02-23 03:39:12');

/*Table structure for table `banner` */

DROP TABLE IF EXISTS `banner`;

CREATE TABLE `banner` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titleBanner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgBanner` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `banner` */

insert  into `banner`(`id`,`titleBanner`,`imgBanner`,`created_at`,`updated_at`) values 
(3,'Banner Vister Cluster','assets/banner/zelydiZGxqH0kKqclvYPmD9X3eGDVIy08Dtm1DHz.jpg','2021-03-15 08:42:56','2021-03-15 08:42:56');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2019_08_19_000000_create_failed_jobs_table',1),
(3,'2021_01_26_142409_create_property_table',2),
(4,'2021_02_02_023118_create_abouts_table',3),
(5,'2021_03_12_185458_add_status_sold_out_to_property',4),
(6,'2021_03_14_022919_create_banner_table',5);

/*Table structure for table `property` */

DROP TABLE IF EXISTS `property`;

CREATE TABLE `property` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_properti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_dp` int(11) DEFAULT NULL,
  `harga_cash` int(11) DEFAULT NULL,
  `harga_permeter` int(11) DEFAULT NULL,
  `kata_thumb` longtext COLLATE utf8mb4_unicode_ci,
  `foto` longtext COLLATE utf8mb4_unicode_ci,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kabkot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `syarat` longtext COLLATE utf8mb4_unicode_ci,
  `dekat` longtext COLLATE utf8mb4_unicode_ci,
  `status1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `statusSoldOut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'READY',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `property` */

insert  into `property`(`id`,`nama_properti`,`ukuran`,`harga_dp`,`harga_cash`,`harga_permeter`,`kata_thumb`,`foto`,`deskripsi`,`lokasi`,`kabkot`,`syarat`,`dekat`,`status1`,`status2`,`slug`,`deleted_at`,`created_at`,`updated_at`,`statusSoldOut`) values 
(1,'a','a',100000,1000000,1000000,'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa','','aaaaaaaaaaaaa','a','1','a','aaa','1','1',NULL,'2021-01-27 06:16:38','2021-01-26 23:01:27','2021-01-27 06:16:38','READY'),
(2,'Kavling Mangku Disa','8 x 12,5 (100m2)',50000000,150000000,1500000,'<p>Tanah kavling <span class=\"marker\"><strong>Siap Bangun</strong></span> Mangku Disa ini memiliki lokasi sangat strategis.</p>','assets/property/fm40jQ9S5GdWTgpwwksCI9LFDL2CfaORMDZSUUmL.jpg','<p>Lokasi JalanPramuka, Bandar Lampung. Kavling Siap Bangun.</p>\r\n\r\n<ul>\r\n	<li>Ukuran 8 x 12,5</li>\r\n	<li>Luas Mulai 100 m2</li>\r\n	<li>Harga Permeter Rp. 1.500.000</li>\r\n	<li>DP Rp. 50.000.000</li>\r\n	<li>Anguran 2,7 jt-an selama 36 bulan</li>\r\n	<li>Konsumen Terima AJB Notaris</li>\r\n	<li>Tanpa Bank</li>\r\n	<li>Tanpa Denda</li>\r\n	<li>Tanpa Sita</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>','Jalan Pramuka','1','<ol>\r\n	<li>KTP</li>\r\n	<li>KK</li>\r\n</ol>','<p>Lokasi Sangat Strategis Dekat dengan :</p>\r\n\r\n<ol>\r\n	<li>Kampus Mahalayati</li>\r\n	<li>SPBU Pramuka</li>\r\n	<li>Samsat Bandar Lampung</li>\r\n</ol>','1','1','kavling-mangku-disa',NULL,'2021-01-27 06:11:01','2021-02-28 13:07:22','READY'),
(3,'a','a',1,1,1,'<p>1</p>','assets/property/Jlv3nWCXzT0iyRWUBeofjvdlIe2xnPi2sHMb9NF8.jpg','<p>1</p>','1','2','<p>1</p>','<p>1</p>','1','1','a','2021-01-27 06:18:57','2021-01-27 06:15:16','2021-01-27 06:18:57','READY'),
(4,'Kavling Usup Tahap 10','8 x 14',10000000,89600000,800000,'<p>Tanah Kavling yang strategis ITERA Kota Baru</p>','assets/property/eJm4LumeCZxtbNRJYIPWCwTFjGf26MasarXZ0Ip0.jpg','<p>Lokasi Strategis</p>\r\n\r\n<ul>\r\n	<li>Luas Tanah 112 m2</li>\r\n	<li>Ukuran 8x14</li>\r\n	<li>DP 10 jt</li>\r\n	<li>Harga Permeter 800 rb</li>\r\n	<li>Harga Cash Rp. 89.600.000</li>\r\n	<li>Angsuran 1,3 jt-an selama 60 bulan</li>\r\n	<li>Konsumen Terima AJB Notaris</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>','ITERA Kota Baru','2','<ol>\r\n	<li>KTP</li>\r\n	<li>KK</li>\r\n</ol>','<ol>\r\n	<li>SPBU Kota Baru</li>\r\n	<li>Pintu Tol ITERA</li>\r\n	<li>Kampus ITERA</li>\r\n</ol>','1','1','kavling-usup-tahap-10',NULL,'2021-02-01 19:38:20','2021-02-13 06:16:42','READY'),
(5,'KAVLING AQUR 2','100 m2 - 142 m2',40000000,0,1145000,'<p>Tanah Kavling Siap Bangun <strong>Lokasi Strategis</strong></p>','assets/property/wOWBPRZH6Thn11vrv0MwFxgxo3Kuh04DD7r4rHSG.jpg','<p>Kavling Aqur 2<br />\r\nLokasi belakang SPBU ITERA</p>\r\n\r\n<p>Spesifikasi :</p>\r\n\r\n<ul>\r\n	<li>Kav.Ruko 1.225.000 per m</li>\r\n	<li>Uk 63 m2-91 m2</li>\r\n	<li>Cash disc 20 jt</li>\r\n	<li>Cash tempo disc 10 jt</li>\r\n	<li>Kredit dp 50 jt</li>\r\n	<li>Angs mulai 774.500 maks tenor 48 bulan</li>\r\n	<li>Kav Rumah 1.145.000 per m</li>\r\n	<li>Uk 100 m2-142 m2</li>\r\n	<li>Cash disc 20 jt</li>\r\n	<li>Cash tempo disc 10 jt</li>\r\n	<li>Kredit dp 40 jt</li>\r\n	<li>Angs mulai 1.760.500 maks tenor 48 bulan</li>\r\n	<li>Konsumen terima pecahan SHM Balik Nama</li>\r\n	<li>Akses jalan Disabes</li>\r\n	<li>Jalan blok 5.5 m</li>\r\n	<li>Tersedia drainase</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>','ITERA Kota Baru','2','<ol>\r\n	<li>KTP</li>\r\n	<li>KK</li>\r\n</ol>','<ol>\r\n	<li>Spbu ITERA</li>\r\n	<li>Pintu TOL Itera</li>\r\n	<li>Kampus ITERA</li>\r\n	<li>Polsek Sukarame</li>\r\n</ol>','1','1','kavling-aqur-2',NULL,'2021-02-02 08:12:52','2021-02-02 08:12:52','READY'),
(6,'KAVLING AQUR 4','96 - 137 m2',0,0,0,'<p>Tanah kavling bersebelahan dengan hotel dan resto. Bebas banjir dan Bukan tanah sawah</p>','assets/property/rM50Scs4k8XpBjccbqUJD3Q2cCBb2NLupmrqX4RC.jpg','<p>Spesifikasi Kavling :</p>\r\n\r\n<p>&bull;&nbsp; Luas tanah 96-137 m&sup2;<br />\r\n&bull;&nbsp; Tersedia kavling ruko &amp; kavling rumah<br />\r\n&bull;&nbsp; DP awal bisa pilih Rp 20 atau 30 Juta<br />\r\n&bull;&nbsp; Dengan Angsuran rata- rata Rp 1,1 jt-an<br />\r\n&bull;&nbsp; Tenor s.d 50 bulan<br />\r\n&bull;&nbsp; Jalan utama 6m akan diaspal<br />\r\n&bull;&nbsp; Banyak kavling hook<br />\r\n&bull;&nbsp; Bebas banjir<br />\r\n&bull;&nbsp; Bukan tanah sawah<br />\r\n&bull;&nbsp; Dibuatkan drainase<br />\r\n&bull;&nbsp; Surat&nbsp; SHM</p>','ITERA Kota Baru','2','<ol>\r\n	<li>DP</li>\r\n	<li>Fotokopi KTP &amp; KK</li>\r\n</ol>','<p>&bull;&nbsp; 5 menit dari Pintu Tol ITERA<br />\r\n&bull;&nbsp; 7&nbsp; menit dari Kampus ITERA<br />\r\n&bull;&nbsp; 10 menit dari Kantor Polda Lampung<br />\r\n&bull;&nbsp; Hanya 100m dari Dua Jalur Jl. Ryacudu<br />\r\n&bull;&nbsp; Dekat Perumahan yang sudah ramai<br />\r\n&bull;&nbsp; Dekat dengan&nbsp; pondok pesantren Aalu Salim</p>','1','1','kavling-aqur-4',NULL,'2021-02-02 08:28:59','2021-02-02 08:28:59','READY'),
(7,'KAVLING BAYUR RESIDENCE','8 x 12',25000000,0,1450000,'<p>Kavling Siap Bangun Di <strong>Kota Bandar Lampung. Tanpa Riba, Bank dan Sita.</strong></p>','assets/property/5t6eT9uuX7mqNtNk4uiusAn5VZI3NUSpcszSg2bP.jpg','<ul>\r\n	<li>Ukuran Standar 8x12</li>\r\n	<li>Harga Permeter Rp. 1.450.000</li>\r\n	<li>Pembelian Cash Dapat Diskon Spesial</li>\r\n	<li>Kredit DP 25 Juta Angsuran mulai 2,2 jt-an selama 50 bulan</li>\r\n	<li>Free Biaya Administrasi</li>\r\n	<li>Rata-Rata luas tanah 96 m2</li>\r\n	<li>Terima SHM pecahan dan AJB Notaris</li>\r\n	<li>Jalan di Sub-Base</li>\r\n	<li>Tiang Listrik dan Drainase</li>\r\n	<li>Jalan Kavling 5-6 meter</li>\r\n</ul>','Jl. Padat Karya Rajabasa','1','<ol>\r\n	<li>Fotocopy KTP</li>\r\n	<li>Fotocopy KK</li>\r\n</ol>','<ul>\r\n	<li>Samping SMAN 13 Bandar Lampung</li>\r\n	<li>5 menit ke flayover Untung Suropati</li>\r\n	<li>5 menit ke Unila</li>\r\n	<li>15 menit ke Transmart Kedaton</li>\r\n	<li>5 menit ke Indogrosir</li>\r\n	<li>24 menit ke Pintu TOL Kotabaru</li>\r\n</ul>','1','1','kavling-bayur-residence',NULL,'2021-02-02 08:42:03','2021-02-02 08:42:03','READY'),
(8,'KAVLING DZIKRA RESIDENCE','7 x 11,5',35000000,0,1500000,'<p>Tanah Kavling ditengah Perumahan, dengan lokasi yang strategis. <strong>Tanpa Bank, Riba dan Bunga.</strong></p>','assets/property/ApzMMDU0frqhITVkFmhmI0wylVO1ISE2k3NlE0AO.jpg','<p>Kavling Dzikra Residence</p>\r\n\r\n<p>Alamat : Jalan Pulau Singkep Sukarame</p>\r\n\r\n<p><strong>*Lahan Siap Bangun</strong></p>\r\n\r\n<p><strong>*Unit Terbatas</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Tenor Hingga 36 Bulan</strong></li>\r\n	<li><strong>Angsuran Mulai 2,5 jt-an</strong></li>\r\n	<li><strong>Harga per m Rp. 1.500.000</strong></li>\r\n	<li><strong>Ukuran standar 80 m2 (7 x 11,5)</strong></li>\r\n	<li><strong>Konsumen Terima Pecahan SHM</strong></li>\r\n	<li><strong>Jalan Komplek 5 meter</strong></li>\r\n	<li><strong>Lahan datar siap bangun</strong></li>\r\n	<li><strong>Free Drainase</strong></li>\r\n	<li><strong>Tersedia Jalur Listrik</strong></li>\r\n	<li><strong>Legalitas Terjamin akad di Notari</strong>s</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* Tanpa Bank</p>\r\n\r\n<p>* Tanpa Riba</p>\r\n\r\n<p>* Tanpa Bunga</p>\r\n\r\n<p>&nbsp;</p>','Jalan Pulau Singkep Sukarame','1','<ul>\r\n	<li>Fotocopy KTP</li>\r\n	<li>DP</li>\r\n</ul>','<ul>\r\n	<li>Kotamadya akses kemana-keman dekat</li>\r\n	<li>Dekat dengan Kampus UIN dan Kampus ITERA</li>\r\n	<li>Dekat dengan kantor kejaksaan dan Puskesmas Sukarame</li>\r\n	<li>Dekat dengan pasar Waydadi serta ramai pemukiman</li>\r\n</ul>','1','1','kavling-dzikra-residence',NULL,'2021-02-15 02:42:40','2021-02-15 02:42:40','READY'),
(9,'SINGKEP SAKTI 1','152 m2 Untuk Tanah & 90 m2 Untuk Ruko',0,250000000,0,'<p>Kavling Murah di <strong>Sukarame, DP Hanya 50%</strong></p>','assets/property/JqNEmNgkwjUZictDov3ANzFXWSgjDcJde2v6prlD.jpg','<ul>\r\n	<li>DP 50%</li>\r\n	<li>Ruko\r\n	<ul>\r\n		<li>Luas 90 m2</li>\r\n		<li>Harga Cash 250 jt</li>\r\n		<li>Harga Permeter Rp. 2.778.000</li>\r\n	</ul>\r\n	</li>\r\n	<li>Tanah\r\n	<ul>\r\n		<li>Luas 152 m2</li>\r\n		<li>Harga Cash 250 jt</li>\r\n		<li>Harga Permeter Rp. 1.645.000</li>\r\n	</ul>\r\n	</li>\r\n	<li>Mekanisme Pembayaran Kapling Ruko dan Tanah DP 50% Sisa Angsuran 2 Tahun</li>\r\n	<li>Lokasi Terima Timbun Rata Jalan dan Pondasi Keliling Per Kavling an</li>\r\n	<li>Pembayaran Luas Langsung Terima Sertifikat Hak Milik Atas Nama Pembeli</li>\r\n	<li>Jalan Kavling Paving Block</li>\r\n	<li>Untuk Ruko Ukuran 4 x 12,5 harga Cash 610 JT</li>\r\n	<li>Rumah Type 70 / 152 Harga 560 JT</li>\r\n</ul>','Jalan Pulau Singkep Sukarame','1','<ul>\r\n	<li>Fotocopy KTP</li>\r\n	<li>Fotocopy KK</li>\r\n</ul>','<p>Lokasi Dekat Dengan</p>\r\n\r\n<ul>\r\n	<li>Kampus UIN</li>\r\n	<li>Kampus Itera</li>\r\n</ul>','1','1','singkep-sakti-1',NULL,'2021-02-15 03:19:59','2021-02-15 03:19:59','READY'),
(10,'NUWA PUSPITA RESIDENCE','49 m2 / 91 m2',132720000,276500000,0,'<p><strong>Rumah Komersil Kredit Tanpa Bank, FREE TOWER 500 L</strong></p>','assets/property/AolKCTntAvij61wId3R3zpwmJyCvWip3vDUbJAng.jpg','<ul>\r\n	<li>Type 49 m2 dan 91 m2</li>\r\n	<li>Kredit Tenor 5 Tahun</li>\r\n	<li>Angsuran Rp. 3.318.000 / bulan</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Spesifikasi :\r\n	<ul>\r\n		<li>Pondasi Batu Belah</li>\r\n		<li>Dinding Bata Merah</li>\r\n		<li>Atap Genteng Mantili</li>\r\n		<li>Kusen Kayu Kelas 2</li>\r\n		<li>Lantai Keramik 40 x 40</li>\r\n		<li>Sumur Bor 30 m Free Mesin Air</li>\r\n		<li>Beton Bertulang</li>\r\n		<li>Platfond Gypsum</li>\r\n		<li>Kloset Duduk</li>\r\n		<li>Listrik 1300 Watt</li>\r\n	</ul>\r\n	</li>\r\n</ul>','Sabah Balau','2','<ul>\r\n	<li>Fotocopy KTP</li>\r\n	<li>Fotocopy KK</li>\r\n</ul>','<ol>\r\n	<li>Kampus UIN Lampung</li>\r\n	<li>Lapangan Golf</li>\r\n	<li>SMKN 7 Bandar Lampung</li>\r\n	<li>SMAN 12 Bandar Lampung</li>\r\n	<li>SMPN 24 Bandar Lampung</li>\r\n	<li>Kampus ITERA</li>\r\n	<li>SMPN 36 Bandar Lampung</li>\r\n</ol>','2','1','nuwa-puspita-residence',NULL,'2021-02-15 03:38:02','2021-02-15 06:11:33','READY'),
(11,'KAVLING NUWA PUSPITA SABAH BALAU','101 m2 - 116 m2',0,0,0,'<p><strong>Kavling Siap Bangun, LOKASI STRATEGIS</strong></p>','assets/property/mkd9uwSYXD2M0MQnL2AF3xXCr1M23hbduaSjohnZ.jpg','<p>Detail Tanah :</p>\r\n\r\n<ul>\r\n	<li>Ukuran Tanah 101 - 116 m2</li>\r\n	<li>Harga Cash Mulai <strong>Rp. 60.840.000</strong></li>\r\n	<li>Terima SHM Pecahan</li>\r\n	<li>Angsuran mulai Rp. 1.249.292 Maksimal Tenor 4 Tahun</li>\r\n</ul>','Jalan M Azizi Sabah Balau','2','<ul>\r\n	<li>Fotocopy KTP</li>\r\n	<li>Fotocopy KK</li>\r\n</ul>','<ul>\r\n	<li>Balai Desa Sabah Balau</li>\r\n	<li>SDN 1 Sabah Balau</li>\r\n	<li>UIN Raden Intan Lampung</li>\r\n	<li>Kejaksaan Negeri Bandar Lampung</li>\r\n	<li>Lapangan Golf Sukarame</li>\r\n	<li>Perumahan</li>\r\n</ul>','1','1','kavling-nuwa-puspita-sabah-balau',NULL,'2021-02-15 04:01:57','2021-02-15 04:01:57','READY'),
(12,'PERUMAHAN EL\'BIRUNI','Luas Rumah 48 m2 & Luas Tanah 88m2',29900000,299000000,0,'<p><strong>Perumahan Bebas Biaya Proses Bank dan Bebas Biaya Notaris</strong></p>','assets/property/xZ17ClNbDTnI73pp6bNduslgHp1WUzl4UYxRs35n.jpg','<ul>\r\n	<li>Proses KPR DP 10%</li>\r\n	<li>Angsuran Estimasi Perbulan\r\n	<ul>\r\n		<li>2,8 Jutaan / 15 Tahun</li>\r\n		<li>2,5 Jutaan / 20 Tahun</li>\r\n	</ul>\r\n	</li>\r\n	<li>Type Tanah 88 m2</li>\r\n	<li>Type Rumah 48 m2</li>\r\n	<li>Spesifikasi Rumah :\r\n	<ul>\r\n		<li>Kamar Tidur 2</li>\r\n		<li>Kamar Mandi 1 &amp; Clossed Duduk</li>\r\n		<li>Dapur Keramik Tempel</li>\r\n		<li>Plapon Gibsun</li>\r\n		<li>Carfot Batu Sikat</li>\r\n		<li>Dinding Depan Batu Alam</li>\r\n		<li>Sumur Bor</li>\r\n		<li>Listrik Token 1300</li>\r\n	</ul>\r\n	</li>\r\n</ul>','Pinang Jaya Kemiling','1','<ul>\r\n	<li>Fotocopy KTP</li>\r\n	<li>Fotocopy KK</li>\r\n</ul>','<ul>\r\n	<li>SMAN 7 Bandar Lampung</li>\r\n	<li>SMPN 14 Bandar Lampung</li>\r\n	<li>Chandra Keliming dan pusat Ekonomi lainnya</li>\r\n</ul>','2','1','perumahan-elbiruni',NULL,'2021-02-15 05:28:19','2021-02-15 06:07:00','READY'),
(13,'KAVLING VISTER LAND','8 x 15 (120m2)',0,0,0,'<p><strong>Kavling Murah Strategis Dekat Dengan Pondok Pesantren. Tanpa Bunga dan Denda</strong></p>','assets/property/7ANw29uJPsGNHfcN0RmUCiEKFRbXZvI4cZ0X8Inj.jpg','<p>Kavling Murah Tanpa Bunga dan Denda</p>\r\n\r\n<p>Ukuran Mulai 120 m2 ( 8 x 15 )</p>\r\n\r\n<p>DP Mulai :</p>\r\n\r\n<ul>\r\n	<li>DP 0&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -- Angsuran 900 rb</li>\r\n	<li>DP 5 jt &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -- Angsuran 817 rb</li>\r\n	<li>DP 7,5 jt&nbsp;&nbsp;&nbsp;&nbsp; -- Angsuran 775 rb</li>\r\n	<li>DP 10 jt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -- Angsuran 734 rb</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Fasilitas Kavling :</p>\r\n\r\n<ul>\r\n	<li>Jalan Kavling 6 m dan 5 m (sabes)</li>\r\n	<li>Mushola</li>\r\n	<li>Tiang Listrik</li>\r\n	<li>Pecahan SHM</li>\r\n</ul>','Tanjung Sari, Natar','2','<ul>\r\n	<li>Fotocopy KTP</li>\r\n	<li>Fotocopy KK</li>\r\n</ul>','<ol>\r\n	<li>Ponpes Darul Iman</li>\r\n	<li>Ponpes Darul Fattah</li>\r\n	<li>SDN 2 Tanjung Sari</li>\r\n	<li>Pasar Tumpah Tanjung Sari</li>\r\n	<li>Puskesmas</li>\r\n	<li>Terminal Induk Lampung</li>\r\n	<li>POM Bensin</li>\r\n	<li>Chandramart</li>\r\n	<li>Exit TOL</li>\r\n</ol>','1','1','kavling-vister-land',NULL,'2021-02-15 06:06:51','2021-02-15 06:06:51','READY'),
(14,'TANGKIL RESIDENCE','Type 60m2 / 84m2',187500000,375000000,0,'<p><strong>SYARI&#39;AH Tanpa RIBA, BANK, dan SITA</strong></p>','assets/property/MVXjPgB7tCFQfn0n46AWhK12OuY7EwMMiTimnk2s.jpg','<ul>\r\n	<li>SYARI&#39;AH Tanpa RIBA, BANK, dan SITA</li>\r\n	<li>Type 60/84</li>\r\n	<li>Harga 375 Jt</li>\r\n	<li>DP 50%</li>\r\n	<li>Sisa Diangsur selama 7 Tahun</li>\r\n	<li>Spesifikasi :\r\n	<ul>\r\n		<li>Atap Baja Ringan Genteng Pasir</li>\r\n		<li>Kusen Pintu Kayu Cempaka</li>\r\n		<li>Plapon PVC</li>\r\n		<li>Sumur Bor</li>\r\n		<li>Listrik 1300</li>\r\n		<li>Keramik 60 x 60</li>\r\n		<li>Keramik dinding Kamar Mandi 20 x 40</li>\r\n		<li>Lantai Kamar Mandi 25 x 25</li>\r\n		<li>Closet Duduk Otomatis</li>\r\n	</ul>\r\n	</li>\r\n</ul>','Jalan Pulau Singkep Sukarame','1','<ul>\r\n	<li>Fotocopy KTP</li>\r\n	<li>Fotocopy KK</li>\r\n</ul>','<ul>\r\n	<li>UIN Raden Intan Lampung</li>\r\n	<li>Kejaksaan Negeri Bandar Lampung</li>\r\n	<li>SMAN 12 Bandar Lampung</li>\r\n</ul>','2','1','tangkil-residence',NULL,'2021-02-15 08:09:20','2021-02-15 08:09:20','READY'),
(15,'Perumahan Abdul Kadir Kluster','Type 65/130',104000000,520000000,0,'<p>Rumah Murah dan Strategis&nbsp;</p>\r\n\r\n<p>#..bebas reques desain&nbsp;</p>\r\n\r\n<p>#..bebas penambahan luas bangunan&nbsp;</p>','assets/property/OHPZkXSpZG97VWdhOvx0zMJlYpisQw8aQ5A0iAj8.png','<p>Type 65/130</p>\r\n\r\n<p>Harga 520 juta</p>\r\n\r\n<p>Bebas biaya:</p>\r\n\r\n<p>Notaris, Pajak, Proses Bank</p>\r\n\r\n<p>Spesifikasi :</p>\r\n\r\n<ul>\r\n	<li>3 Kamar Tidur</li>\r\n	<li>2 Kamar Mandi</li>\r\n	<li>1 Carport</li>\r\n	<li>1 Ruang Tamu</li>\r\n	<li>1 Ruang Keluarga</li>\r\n	<li>1 Dapur&nbsp;</li>\r\n	<li>1 Listrik 1300 watt</li>\r\n	<li>1 Sumur Bor (mesin pompa air + tower)</li>\r\n</ul>\r\n\r\n<p>Kualitas :</p>\r\n\r\n<ul>\r\n	<li>Lantai Granit 60x60</li>\r\n	<li>Plavon Gypsum</li>\r\n	<li>Kusen Kayu Cempaka</li>\r\n	<li>Lighting LED</li>\r\n	<li>Cat Jotun&nbsp;</li>\r\n	<li>Dll</li>\r\n</ul>\r\n\r\n<p>Free :</p>\r\n\r\n<ul>\r\n	<li>Jasa Arsitektur&nbsp;</li>\r\n	<li>Garansi 6 bulan</li>\r\n</ul>','Jl. Abdul Kadir','1','<ul>\r\n	<li>Fotocopy KTP</li>\r\n	<li>Fotocopy KK</li>\r\n</ul>','<ul>\r\n	<li>Robinson&nbsp;</li>\r\n	<li>UNILA</li>\r\n	<li>Ramayana</li>\r\n</ul>','2','1','perumahan-abdul-kadir-kluster',NULL,'2021-02-21 03:16:43','2021-03-15 09:29:03','READY'),
(16,'Kavlingan Banjaran Village','105m2 x 193m2',15000000,0,0,'<p>Free biaya admin+notaris</p>','assets/property/ObyzioF64lQWTRnI9Apu8ZWnFMKCMjGGMqb4x3FZ.png','<p>Promo Dp mulai dari 15 jutaan</p>\r\n\r\n<p>Tenor hingga 60 bulan</p>\r\n\r\n<p>Free biaya admin+notaris</p>\r\n\r\n<p>Spesifikasi:</p>\r\n\r\n<ul>\r\n	<li>Jalan kavling 6 meter (paving block) dan tiang listrik</li>\r\n	<li>Tersedia lahan fasos (akan dibangun musholla)</li>\r\n	<li>Luas mulai 105 m2 - 193.5 m2</li>\r\n	<li>Lahan datar siap bangun</li>\r\n	<li>Free drainese</li>\r\n	<li>Terima SHM an, Pembeli</li>\r\n	<li>Legalitas terjamin (akad di notaris<strong>)</strong></li>\r\n</ul>','Desa Banjar Agung. Kecamatan Jati Agung','1','<ul>\r\n	<li>Fotocopy KTP</li>\r\n	<li>DP</li>\r\n</ul>','<ul>\r\n	<li>Dekat dengan Pintu Tol Kotabaru</li>\r\n	<li>Dekat dengan Kampus Itera</li>\r\n	<li>Dekat dengan Puskesmas Rawat Inap Banjar Agung</li>\r\n	<li>Dekat dengan SPBU Itera</li>\r\n	<li>Dekat dengan Fasum dan Fasos</li>\r\n	<li>Lokasi ramai dekat denngan perumahan Jati Indah Permai 3</li>\r\n</ul>','1','1','kavlingan-banjaran-village',NULL,'2021-02-23 04:17:22','2021-03-15 09:28:28','READY'),
(17,'Perumahan Vister Cluster','64 / 120 m2',50000000,390000000,0,'<p>Desain Limas Elegant</p>','assets/property/Qfl9IBoZusYXcOAj3QiXTMjBhCnBPN2OHeBtWmvP.png','<p>Harga dan Mekanisme :</p>\r\n\r\n<ul>\r\n	<li>KPR = 390 juta (DP Min 50 juta) Estimasi angsuran 3.5 juta perbulan (15 thn)</li>\r\n	<li>Cash Progres = DP 50%, 30%, 20%</li>\r\n</ul>\r\n\r\n<p>Spesifikasi Teknis :</p>\r\n\r\n<ul>\r\n	<li>2 Kamar Tidur &amp; 2 Kamar Mandi</li>\r\n	<li>1 Ruang Tamu &amp; ! Ruang Keluarga</li>\r\n	<li>1 Dapur dan Ruang Jemur</li>\r\n	<li>Pondasi Batu belah</li>\r\n	<li>Lantai Granit 60x60</li>\r\n	<li>Mini Taman</li>\r\n	<li>Closet Duduk dan jongkok</li>\r\n	<li>Listrik 1300 watt</li>\r\n	<li>Sumur Bor, Tower 500</li>\r\n</ul>\r\n\r\n<p>Bonus Gratis :</p>\r\n\r\n<ul>\r\n	<li>Biaya Pajak Pembelian</li>\r\n	<li>Biaya Balik Nama SHM</li>\r\n	<li>Biaya KPR Bank</li>\r\n</ul>','Jl. M Yunus Gg.Duku/Gg.Bumi Harta II. Tanjung Seneng','1','<p>Fotocopy KTP</p>\r\n\r\n<p>Fotocopy KK</p>','<ul>\r\n	<li>Jalan Utama Ratu Dibalau</li>\r\n	<li>Kampus ITERA, New POLDA, RS Airan Raya dan Exit Tol ITERA</li>\r\n	<li>PKOR Way Halim dan Transmart</li>\r\n</ul>','2','1','perumahan-vister-cluster',NULL,'2021-03-06 07:54:46','2021-03-15 09:27:24','READY'),
(18,'Gunter Estate V','52/72 m2',54000000,270000000,0,'<p>Bonus (Free/Gratis)</p>\r\n\r\n<ul>\r\n	<li>Biaya Pajak Pembeli (BPHTB)</li>\r\n	<li>Biaya Balik Nama SHM an Pembeli&nbsp;</li>\r\n	<li>Biaya KPR Bank (Kec Asuransi&amp;Pembukaan Rekening Bank 0</li>\r\n</ul>','assets/property/Hca4RcHFr0nE2QhV8GxkJXx7VZmGsffSrCwIaYRw.png','<p>Hunian berkonsep Cluster One Gate System berdesain Limas Modern dilengkapi Pos Jaga &amp; Area Bermain Anak dengan Harga Sangat Terjangkau</p>\r\n\r\n<p>Lokasi :</p>\r\n\r\n<p>Jln. Swadaya 5, Purnawiran Raya Gunung Terang - Bandar Lampung</p>\r\n\r\n<p>Type :</p>\r\n\r\n<ul>\r\n	<li>Luas Bangunan 52 m2</li>\r\n	<li>Luas Tanah 72 m2</li>\r\n</ul>\r\n\r\n<p>Pilihan Luas Tanah Bervariasi&nbsp;</p>\r\n\r\n<p>Mulai : 72 m2 - 106 m2</p>\r\n\r\n<p>Mekanisme &amp; Harga</p>\r\n\r\n<p>1. Cash on Progres (3 Bulan )</p>\r\n\r\n<ul>\r\n	<li>Harga Rp 270 Juta</li>\r\n	<li>Dp/Termin 1 = 50% X Harga</li>\r\n	<li>Progres/Termin 2 = 30% X Harga</li>\r\n	<li>Pelunasan/Termin 3 = 20% X Harga</li>\r\n</ul>\r\n\r\n<p>2. Kpr (Bank Syariah&amp;Konvensional)</p>\r\n\r\n<ul>\r\n	<li>Harga Rp 280 Juta&nbsp;</li>\r\n	<li>Dp Mulai 15% sd 20 % dari harga</li>\r\n	<li>Estimasi Angsuran</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; * 10 Tahun = 2,6 Jutaan&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;* 15 Tahun = 2,2 Jutaan&nbsp;</p>\r\n\r\n<p>3. Cash Tempo (12 Bulan )</p>\r\n\r\n<ul>\r\n	<li>Harga Rp 295 Juta&nbsp;</li>\r\n	<li>Dp = 50% X Harga</li>\r\n	<li>Sisa diangsur selama 12 bulan&nbsp;</li>\r\n</ul>\r\n\r\n<p>Harga Kelebihan Tanah =&nbsp; Rp 1.800.000,- /m2</p>\r\n\r\n<p>Layout Ruangan &amp; Utilitas</p>\r\n\r\n<ul>\r\n	<li>2 kamar tidur</li>\r\n	<li>2 kamar mandi&nbsp;</li>\r\n	<li>ruang tamu&nbsp;</li>\r\n	<li>ruang keluarga + ruang makan&nbsp;</li>\r\n	<li>dapur + ruang jemur</li>\r\n	<li>carport 5 meter</li>\r\n	<li>listrik token 1.300 watt</li>\r\n	<li>sumur bor + mesin + torrent</li>\r\n</ul>\r\n\r\n<p>Spesifikasi Teknis&nbsp;</p>\r\n\r\n<ul>\r\n	<li>lantai granit</li>\r\n	<li>plafon gypsum</li>\r\n	<li>rangka atap baja ringan&nbsp;</li>\r\n	<li>penutup atap genteng mantili</li>\r\n	<li>pintu + jendela kusen kayu&nbsp;</li>\r\n	<li>closet duduk + closet jongkok&nbsp;</li>\r\n</ul>\r\n\r\n<p>Bonus (Free/Gratis)</p>\r\n\r\n<ul>\r\n	<li>biaya pajak pembeli (BPHTB)</li>\r\n	<li>biaya balik nama SHM an pembeli&nbsp;</li>\r\n	<li>biaya Kpr Bank ( Kec asuransi &amp; pembukaaan rekening bank )</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>','Jln. Swadaya 5, Purnawirawan Raya Gunung Terang','1','<ul>\r\n	<li>FC KTP</li>\r\n	<li>FC KK</li>\r\n	<li>NPWP</li>\r\n	<li>Slip Gaji&nbsp;</li>\r\n	<li>S.K Kerja</li>\r\n	<li>Rek. koran 3 bulan&nbsp;</li>\r\n	<li>SPT</li>\r\n	<li>FC Buku Nikah/ S.ket belum menikah&nbsp;</li>\r\n</ul>','<p>Keunggulan Perumahan&nbsp;</p>\r\n\r\n<ul>\r\n	<li>mudah dijangkau, hanya 1150 m dari jalan utama purnawirawan raya&nbsp;</li>\r\n	<li>jalan komplek lebar 10 m&nbsp; &amp; 5 m&nbsp;</li>\r\n	<li>dilengkapi pos jaga</li>\r\n	<li>disediakan area bermain anak&nbsp;</li>\r\n	<li>dekat SDIT Muhammadiyah, Ar Raihan, Darmajaya, UBL, UNILA</li>\r\n</ul>','2','1','gunter-estate-v',NULL,'2021-03-12 06:12:59','2021-03-15 09:25:53','READT');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
