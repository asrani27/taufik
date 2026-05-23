/*
 Navicat Premium Dump SQL

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 80043 (8.0.43)
 Source Host           : localhost:3306
 Source Schema         : _taufik

 Target Server Type    : MySQL
 Target Server Version : 80043 (8.0.43)
 File Encoding         : 65001

 Date: 23/05/2026 17:31:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cache
-- ----------------------------
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cache
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for cache_locks
-- ----------------------------
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cache_locks
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for gurus
-- ----------------------------
DROP TABLE IF EXISTS `gurus`;
CREATE TABLE `gurus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmt` date NOT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gurus_nip_unique` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of gurus
-- ----------------------------
BEGIN;
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (1, 'rwer', 'wer', '2026-03-09', 'werwerwer', 'werwer', '2026-03-08 13:54:28', '2026-03-08 13:54:33');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (2, '198001012005011001', 'H. Ahmad Fauzi', '2005-01-01', 'Pembina', 'Kepala Sekolah', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (3, '198502022010011002', 'Dra. Siti Aminah', '2010-02-02', 'Penata Tingkat I', 'Wakil Kurikulum', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (5, '198804042012011004', 'Dewi Kartika, S.Pd', '2012-04-04', 'Penata Muda', 'Guru Bahasa Indonesia', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (6, '198905052013011005', 'Eko Prasetyo, S.Kom', '2013-05-05', 'Penata Muda Tingkat I', 'Guru TIK', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (7, '199006062013011006', 'Fitri Handayani, S.Pd', '2013-06-06', 'Penata Muda', 'Guru Biologi', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (8, '199107072014011007', 'Gunawan Wijaya, S.Pd', '2014-07-07', 'Penata Muda Tingkat I', 'Guru Fisika', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (9, '199208082014011008', 'Haryono, S.Pd', '2014-08-08', 'Penata Muda', 'Guru Kimia', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (10, '199309092015011009', 'Indah Permata, S.Pd', '2015-09-09', 'Penata Muda Tingkat I', 'Guru Bahasa Inggris', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (11, '199410102015011010', 'Joko Susilo, S.Pd', '2015-10-10', 'Penata Muda', 'Guru Sejarah', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (12, '199511112016011011', 'Kartika Sari, S.Pd', '2016-11-11', 'Penata Muda Tingkat I', 'Guru Geografi', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (13, '199612122016011012', 'Lukman Hakim, S.Pd', '2016-12-12', 'Penata Muda', 'Guru Ekonomi', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (14, '199701012017011013', 'Maya Indriani, S.Pd', '2017-01-01', 'Penata Muda Tingkat I', 'Guru Sosiologi', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (15, '199802022017011014', 'Novi Anggraini, S.Pd', '2017-02-02', 'Penata Muda', 'Guru Seni Budaya', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (16, '199903032018011015', 'Oscar Pratama, S.Pd', '2018-03-03', 'Penata Muda Tingkat I', 'Guru PJOK', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (17, '200004042018011016', 'Putri Ayu, S.Pd', '2018-04-04', 'Penata Muda', 'Guru Matematika', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (18, '200105052019011017', 'Rian Hidayat, S.Pd', '2019-05-05', 'Penata Muda Tingkat I', 'Guru Fisika', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (19, '200206062019011018', 'Sri Rahayu, S.Pd', '2019-06-06', 'Penata Muda', 'Guru Biologi', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (20, '200307072020011019', 'Taufik Hidayat, S.Kom', '2020-07-07', 'Penata Muda Tingkat I', 'Guru TIK', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
INSERT INTO `gurus` (`id`, `nip`, `nama`, `tmt`, `pangkat`, `jabatan`, `created_at`, `updated_at`) VALUES (21, '200408082020011020', 'Utami Sari, S.Pd', '2020-08-08', 'Penata Muda', 'Guru Bahasa Indonesia', '2026-03-08 14:02:16', '2026-03-08 14:02:16');
COMMIT;

-- ----------------------------
-- Table structure for jenis_pelanggarans
-- ----------------------------
DROP TABLE IF EXISTS `jenis_pelanggarans`;
CREATE TABLE `jenis_pelanggarans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poin` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `jenis_pelanggarans_kode_unique` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of jenis_pelanggarans
-- ----------------------------
BEGIN;
INSERT INTO `jenis_pelanggarans` (`id`, `kode`, `nama`, `poin`, `created_at`, `updated_at`) VALUES (1, 'P01', 'Terlambat Sekolah', 5, '2026-03-08 14:30:27', '2026-03-08 14:30:27');
INSERT INTO `jenis_pelanggarans` (`id`, `kode`, `nama`, `poin`, `created_at`, `updated_at`) VALUES (2, 'P02', 'Tidak Memakai Seragam Lengkap', 10, '2026-03-08 14:30:27', '2026-03-08 14:30:27');
INSERT INTO `jenis_pelanggarans` (`id`, `kode`, `nama`, `poin`, `created_at`, `updated_at`) VALUES (3, 'P03', 'Membawa HP ke Sekolah', 15, '2026-03-08 14:30:27', '2026-03-08 14:30:27');
INSERT INTO `jenis_pelanggarans` (`id`, `kode`, `nama`, `poin`, `created_at`, `updated_at`) VALUES (4, 'P04', 'Bolos Pelajaran', 20, '2026-03-08 14:30:27', '2026-03-08 14:30:27');
INSERT INTO `jenis_pelanggarans` (`id`, `kode`, `nama`, `poin`, `created_at`, `updated_at`) VALUES (5, 'P05', 'Merokok di Lingkungan Sekolah', 25, '2026-03-08 14:30:27', '2026-03-08 14:30:27');
INSERT INTO `jenis_pelanggarans` (`id`, `kode`, `nama`, `poin`, `created_at`, `updated_at`) VALUES (6, 'P06', 'Bertengkar dengan Teman', 30, '2026-03-08 14:30:27', '2026-03-08 14:30:27');
INSERT INTO `jenis_pelanggarans` (`id`, `kode`, `nama`, `poin`, `created_at`, `updated_at`) VALUES (7, 'P07', 'Tidak Mengerjakan Tugas', 10, '2026-03-08 14:30:27', '2026-03-08 14:30:27');
INSERT INTO `jenis_pelanggarans` (`id`, `kode`, `nama`, `poin`, `created_at`, `updated_at`) VALUES (8, 'P08', 'Melanggar Tata Tertib', 15, '2026-03-08 14:30:27', '2026-03-08 14:30:27');
INSERT INTO `jenis_pelanggarans` (`id`, `kode`, `nama`, `poin`, `created_at`, `updated_at`) VALUES (9, 'P09', 'Tidak Mengikuti Upacara', 10, '2026-03-08 14:30:27', '2026-03-08 14:30:27');
INSERT INTO `jenis_pelanggarans` (`id`, `kode`, `nama`, `poin`, `created_at`, `updated_at`) VALUES (10, 'P10', 'Berkelahi', 50, '2026-03-08 14:30:27', '2026-03-08 14:30:27');
INSERT INTO `jenis_pelanggarans` (`id`, `kode`, `nama`, `poin`, `created_at`, `updated_at`) VALUES (11, 'P11', 'Memukul Guru', 100, '2026-03-08 14:30:27', '2026-03-08 14:30:27');
INSERT INTO `jenis_pelanggarans` (`id`, `kode`, `nama`, `poin`, `created_at`, `updated_at`) VALUES (12, 'P12', 'Merusak Fasilitas Sekolah', 75, '2026-03-08 14:30:27', '2026-03-08 14:30:27');
INSERT INTO `jenis_pelanggarans` (`id`, `kode`, `nama`, `poin`, `created_at`, `updated_at`) VALUES (13, 'P13', 'Mencuri', 100, '2026-03-08 14:30:27', '2026-03-08 14:30:27');
INSERT INTO `jenis_pelanggarans` (`id`, `kode`, `nama`, `poin`, `created_at`, `updated_at`) VALUES (14, 'P14', 'Memalsukan Dokumen', 80, '2026-03-08 14:30:27', '2026-03-08 14:30:27');
INSERT INTO `jenis_pelanggarans` (`id`, `kode`, `nama`, `poin`, `created_at`, `updated_at`) VALUES (15, 'P15', 'Tidak Mengikuti Kegiatan Ekstrakurikuler', 10, '2026-03-08 14:30:27', '2026-03-08 14:30:27');
COMMIT;

-- ----------------------------
-- Table structure for job_batches
-- ----------------------------
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of job_batches
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for jurusans
-- ----------------------------
DROP TABLE IF EXISTS `jurusans`;
CREATE TABLE `jurusans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `jurusans_kode_unique` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of jurusans
-- ----------------------------
BEGIN;
INSERT INTO `jurusans` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES (1, 'TKJ', 'Teknik Komputer dan Jaringan', '2026-03-08 14:23:23', '2026-03-08 14:23:23');
INSERT INTO `jurusans` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES (2, 'RPL', 'Rekayasa Perangkat Lunak', '2026-03-08 14:23:23', '2026-03-08 14:23:23');
INSERT INTO `jurusans` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES (3, 'TKR', 'Teknik Kendaraan Ringan', '2026-03-08 14:23:23', '2026-03-08 14:23:23');
INSERT INTO `jurusans` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES (4, 'TBSM', 'Teknik Sepeda Motor', '2026-03-08 14:23:23', '2026-03-08 14:23:23');
INSERT INTO `jurusans` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES (5, 'AKL', 'Akuntansi dan Keuangan Lembaga', '2026-03-08 14:23:23', '2026-03-08 14:23:23');
INSERT INTO `jurusans` (`id`, `kode`, `nama`, `created_at`, `updated_at`) VALUES (6, 'BDP', 'Bisnis Daring dan Pemasaran', '2026-03-08 14:23:23', '2026-03-08 14:23:23');
COMMIT;

-- ----------------------------
-- Table structure for kepala_sekolahs
-- ----------------------------
DROP TABLE IF EXISTS `kepala_sekolahs`;
CREATE TABLE `kepala_sekolahs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_menjabat` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kepala_sekolahs_nip_unique` (`nip`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kepala_sekolahs
-- ----------------------------
BEGIN;
INSERT INTO `kepala_sekolahs` (`id`, `nip`, `nama`, `pangkat`, `tanggal_menjabat`, `created_at`, `updated_at`) VALUES (1, '3423211234', 'udin', 'Penata Tingkat 1', '2026-03-02', '2026-03-08 14:14:34', '2026-03-08 14:23:58');
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1, '0001_01_01_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (2, '0001_01_01_000001_create_cache_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (3, '0001_01_01_000002_create_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (4, '2026_03_08_130541_add_username_to_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (5, '2026_03_08_135018_create_gurus_table', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (6, '2026_03_08_140758_create_kepala_sekolahs_table', 3);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (7, '2026_03_08_141549_create_jurusans_table', 4);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (8, '2026_03_08_142512_create_jenis_pelanggarans_table', 5);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (9, '2026_03_08_143000_create_siswas_table', 6);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (10, '2026_03_08_150000_create_pelanggaran_siswas_table', 7);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (11, '2026_03_08_144905_create_prestasi_siswas_table', 8);
COMMIT;

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for pelanggaran_siswas
-- ----------------------------
DROP TABLE IF EXISTS `pelanggaran_siswas`;
CREATE TABLE `pelanggaran_siswas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siswa_id` bigint unsigned NOT NULL,
  `guru_id` bigint unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `jenis_pelanggaran_id` bigint unsigned NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `catatan` text COLLATE utf8mb4_unicode_ci,
  `tindak_lanjut` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pelanggaran_siswas_nomor_unique` (`nomor`),
  KEY `pelanggaran_siswas_siswa_id_foreign` (`siswa_id`),
  KEY `pelanggaran_siswas_guru_id_foreign` (`guru_id`),
  KEY `pelanggaran_siswas_jenis_pelanggaran_id_foreign` (`jenis_pelanggaran_id`),
  CONSTRAINT `pelanggaran_siswas_guru_id_foreign` FOREIGN KEY (`guru_id`) REFERENCES `gurus` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pelanggaran_siswas_jenis_pelanggaran_id_foreign` FOREIGN KEY (`jenis_pelanggaran_id`) REFERENCES `jenis_pelanggarans` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pelanggaran_siswas_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of pelanggaran_siswas
-- ----------------------------
BEGIN;
INSERT INTO `pelanggaran_siswas` (`id`, `nomor`, `siswa_id`, `guru_id`, `tanggal`, `jam`, `jenis_pelanggaran_id`, `deskripsi`, `catatan`, `tindak_lanjut`, `created_at`, `updated_at`) VALUES (1, 'PLG2026030001', 1, 1, '2026-03-03', '08:30:00', 1, 'Siswa terlambat masuk kelas lebih dari 15 menit tanpa alasan yang jelas', 'Siswa sudah diberi peringatan sebelumnya', 'Diberikan surat peringatan dan wajib menulis pernyataan', '2026-03-08 14:45:50', '2026-03-08 14:45:50');
INSERT INTO `pelanggaran_siswas` (`id`, `nomor`, `siswa_id`, `guru_id`, `tanggal`, `jam`, `jenis_pelanggaran_id`, `deskripsi`, `catatan`, `tindak_lanjut`, `created_at`, `updated_at`) VALUES (2, 'PLG2026030002', 2, 2, '2026-03-05', '10:00:00', 2, 'Siswa menggunakan HP selama pelajaran berlangsung', 'HP diamankan oleh guru piket', 'HP dikembalikan setelah orang tua datang ke sekolah', '2026-03-08 14:45:50', '2026-03-08 14:45:50');
INSERT INTO `pelanggaran_siswas` (`id`, `nomor`, `siswa_id`, `guru_id`, `tanggal`, `jam`, `jenis_pelanggaran_id`, `deskripsi`, `catatan`, `tindak_lanjut`, `created_at`, `updated_at`) VALUES (3, 'PLG2026030003', 3, 3, '2026-03-06', '13:00:00', 3, 'Siswa tidak memakai atribut lengkap seragam sekolah', 'Tidak memakai dasi dan ikat pinggang', 'Ditegur dan diminta memperbaiki penampilan', '2026-03-08 14:45:50', '2026-03-08 14:45:50');
INSERT INTO `pelanggaran_siswas` (`id`, `nomor`, `siswa_id`, `guru_id`, `tanggal`, `jam`, `jenis_pelanggaran_id`, `deskripsi`, `catatan`, `tindak_lanjut`, `created_at`, `updated_at`) VALUES (4, 'PLG2026030004', 1, 5, '2026-03-07', '09:15:00', 4, 'Siswa tidak membawa buku pelajaran', 'Siswa lupa membawa buku mata pelajaran Matematika', 'Orang tua diberi informasi untuk selalu memeriksa tas anak', '2026-03-08 14:45:50', '2026-03-08 14:45:50');
INSERT INTO `pelanggaran_siswas` (`id`, `nomor`, `siswa_id`, `guru_id`, `tanggal`, `jam`, `jenis_pelanggaran_id`, `deskripsi`, `catatan`, `tindak_lanjut`, `created_at`, `updated_at`) VALUES (5, 'PLG2026030005', 4, 1, '2026-03-08', '07:45:00', 1, 'Siswa terlambat masuk sekolah', 'Karena macet jalan', 'Diberi peringatan lisan', '2026-03-08 14:45:50', '2026-03-08 14:45:50');
COMMIT;

-- ----------------------------
-- Table structure for prestasi_siswas
-- ----------------------------
DROP TABLE IF EXISTS `prestasi_siswas`;
CREATE TABLE `prestasi_siswas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `siswa_id` bigint unsigned NOT NULL,
  `kepala_sekolah_id` bigint unsigned NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `prestasi_siswas_nomor_unique` (`nomor`),
  KEY `prestasi_siswas_siswa_id_foreign` (`siswa_id`),
  KEY `prestasi_siswas_kepala_sekolah_id_foreign` (`kepala_sekolah_id`),
  CONSTRAINT `prestasi_siswas_kepala_sekolah_id_foreign` FOREIGN KEY (`kepala_sekolah_id`) REFERENCES `kepala_sekolahs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `prestasi_siswas_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `siswas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of prestasi_siswas
-- ----------------------------
BEGIN;
INSERT INTO `prestasi_siswas` (`id`, `nomor`, `tanggal`, `siswa_id`, `kepala_sekolah_id`, `deskripsi`, `catatan`, `foto`, `created_at`, `updated_at`) VALUES (1, 'PRS20260308001', '2024-01-15', 1, 1, 'Juara 1 Lomba Matematika Tingkat Kabupaten', 'Mendapatkan piala dan uang pembinaan', NULL, '2026-03-08 15:05:28', '2026-03-08 15:05:28');
INSERT INTO `prestasi_siswas` (`id`, `nomor`, `tanggal`, `siswa_id`, `kepala_sekolah_id`, `deskripsi`, `catatan`, `foto`, `created_at`, `updated_at`) VALUES (2, 'PRS20260308002', '2024-02-20', 2, 1, 'Juara 2 Lomba Puisi Tingkat Provinsi', 'Mewakili sekolah dalam ajang provinsi', NULL, '2026-03-08 15:05:28', '2026-03-08 15:05:28');
INSERT INTO `prestasi_siswas` (`id`, `nomor`, `tanggal`, `siswa_id`, `kepala_sekolah_id`, `deskripsi`, `catatan`, `foto`, `created_at`, `updated_at`) VALUES (4, 'PRS20240115001', '2024-01-15', 1, 1, 'Juara 1 Lomba Matematika Tingkat Kabupaten', 'Mendapatkan piala dan uang pembinaan', NULL, '2026-03-08 15:05:57', '2026-03-08 15:05:57');
INSERT INTO `prestasi_siswas` (`id`, `nomor`, `tanggal`, `siswa_id`, `kepala_sekolah_id`, `deskripsi`, `catatan`, `foto`, `created_at`, `updated_at`) VALUES (5, 'PRS20240220002', '2024-02-20', 2, 1, 'Juara 2 Lomba Puisi Tingkat Provinsi', 'Mewakili sekolah dalam ajang provinsi', NULL, '2026-03-08 15:05:57', '2026-03-08 15:05:57');
INSERT INTO `prestasi_siswas` (`id`, `nomor`, `tanggal`, `siswa_id`, `kepala_sekolah_id`, `deskripsi`, `catatan`, `foto`, `created_at`, `updated_at`) VALUES (6, 'PRS20240310003', '2024-03-10', 3, 1, 'Juara 1 Lomba Kebersihan Kelas', 'Kelas terbersih bulan Maret', NULL, '2026-03-08 15:05:57', '2026-03-08 15:05:57');
INSERT INTO `prestasi_siswas` (`id`, `nomor`, `tanggal`, `siswa_id`, `kepala_sekolah_id`, `deskripsi`, `catatan`, `foto`, `created_at`, `updated_at`) VALUES (7, 'PRS20240325004', '2024-03-25', 4, 1, 'Juara 1 Lomba Teknologi Informasi', 'Menciptakan aplikasi sekolah', NULL, '2026-03-08 15:05:57', '2026-03-08 15:05:57');
INSERT INTO `prestasi_siswas` (`id`, `nomor`, `tanggal`, `siswa_id`, `kepala_sekolah_id`, `deskripsi`, `catatan`, `foto`, `created_at`, `updated_at`) VALUES (8, 'PRS20240405005', '2024-04-05', 5, 1, 'Juara 3 Lomba Olahraga Basket', 'Tim basket sekolah', NULL, '2026-03-08 15:05:57', '2026-03-08 15:05:57');
INSERT INTO `prestasi_siswas` (`id`, `nomor`, `tanggal`, `siswa_id`, `kepala_sekolah_id`, `deskripsi`, `catatan`, `foto`, `created_at`, `updated_at`) VALUES (9, 'PRS20240415006', '2024-04-15', 6, 1, 'Juara 1 Lomba Kewirausahaan', 'Produk kerajinan tangan', NULL, '2026-03-08 15:05:57', '2026-03-08 15:05:57');
INSERT INTO `prestasi_siswas` (`id`, `nomor`, `tanggal`, `siswa_id`, `kepala_sekolah_id`, `deskripsi`, `catatan`, `foto`, `created_at`, `updated_at`) VALUES (10, 'PRS20240510007', '2024-05-10', 7, 1, 'Siswa Teladan Semester Genap', 'Prestasi akademik dan perilaku baik', NULL, '2026-03-08 15:05:57', '2026-03-08 15:05:57');
INSERT INTO `prestasi_siswas` (`id`, `nomor`, `tanggal`, `siswa_id`, `kepala_sekolah_id`, `deskripsi`, `catatan`, `foto`, `created_at`, `updated_at`) VALUES (11, 'PRS20240520008', '2024-05-20', 8, 1, 'Juara 2 Lomba Bahasa Inggris', 'Pidato bahasa Inggris', NULL, '2026-03-08 15:05:57', '2026-03-08 15:05:57');
INSERT INTO `prestasi_siswas` (`id`, `nomor`, `tanggal`, `siswa_id`, `kepala_sekolah_id`, `deskripsi`, `catatan`, `foto`, `created_at`, `updated_at`) VALUES (12, 'PRS20240601009', '2024-06-01', 9, 1, 'Juara 1 Lomba Robotika', 'Inovasi robot pembersih', NULL, '2026-03-08 15:05:57', '2026-03-08 15:05:57');
INSERT INTO `prestasi_siswas` (`id`, `nomor`, `tanggal`, `siswa_id`, `kepala_sekolah_id`, `deskripsi`, `catatan`, `foto`, `created_at`, `updated_at`) VALUES (13, 'PRS20240615010', '2024-06-15', 10, 1, 'Juara 1 Lomba Seni Tari', 'Tari tradisional daerah', NULL, '2026-03-08 15:05:57', '2026-03-08 15:05:57');
COMMIT;

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of sessions
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for siswas
-- ----------------------------
DROP TABLE IF EXISTS `siswas`;
CREATE TABLE `siswas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nis` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_masuk` date NOT NULL,
  `jurusan_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `siswas_nis_unique` (`nis`),
  KEY `siswas_jurusan_id_foreign` (`jurusan_id`),
  CONSTRAINT `siswas_jurusan_id_foreign` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusans` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of siswas
-- ----------------------------
BEGIN;
INSERT INTO `siswas` (`id`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat`, `telp`, `tanggal_masuk`, `jurusan_id`, `created_at`, `updated_at`) VALUES (1, '12345', 'Ahmad Fauzi', 'Banjarmasin', '2008-05-15', 'L', 'Budi Santoso', 'Siti Aminah', 'Petani', 'Ibu Rumah Tangga', 'Jl. Merdeka No. 123, Simpang Empat, Tanah Bumbu', '081234567890', '2023-07-15', 1, '2026-03-08 14:36:28', '2026-03-08 14:36:28');
INSERT INTO `siswas` (`id`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat`, `telp`, `tanggal_masuk`, `jurusan_id`, `created_at`, `updated_at`) VALUES (2, '12346', 'Siti Nurhaliza', 'Banjarbaru', '2008-08-20', 'P', 'Hasan Basri', 'Fatimah', 'Wiraswasta', 'Guru', 'Jl. Pahlawan No. 45, Simpang Empat, Tanah Bumbu', '081234567891', '2023-07-15', 2, '2026-03-08 14:36:28', '2026-03-08 14:36:28');
INSERT INTO `siswas` (`id`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat`, `telp`, `tanggal_masuk`, `jurusan_id`, `created_at`, `updated_at`) VALUES (3, '12347', 'Muhammad Rizki', 'Kandangan', '2007-12-10', 'L', 'Abdullah', 'Zainab', 'Pedagang', 'Ibu Rumah Tangga', 'Jl. Sudirman No. 67, Simpang Empat, Tanah Bumbu', '081234567892', '2023-07-15', 3, '2026-03-08 14:36:28', '2026-03-08 14:36:28');
INSERT INTO `siswas` (`id`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat`, `telp`, `tanggal_masuk`, `jurusan_id`, `created_at`, `updated_at`) VALUES (4, '12348', 'Dewi Sartika', 'Batulicin', '2008-03-25', 'P', 'Joko Widodo', 'Iriana', 'PNS', 'Ibu Rumah Tangga', 'Jl. Gatot Subroto No. 89, Simpang Empat, Tanah Bumbu', '081234567893', '2023-07-15', 1, '2026-03-08 14:36:28', '2026-03-08 14:36:28');
INSERT INTO `siswas` (`id`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat`, `telp`, `tanggal_masuk`, `jurusan_id`, `created_at`, `updated_at`) VALUES (5, '12349', 'Andi Pratama', 'Martapura', '2007-09-05', 'L', 'Sukirman', 'Murni', 'Nelayan', 'Pedagang', 'Jl. Ahmad Yani No. 234, Simpang Empat, Tanah Bumbu', '081234567894', '2023-07-15', 2, '2026-03-08 14:36:28', '2026-03-08 14:36:28');
INSERT INTO `siswas` (`id`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat`, `telp`, `tanggal_masuk`, `jurusan_id`, `created_at`, `updated_at`) VALUES (6, '12350', 'Rina Kartika', 'Banjarmasin', '2008-11-30', 'P', 'Bambang', 'Susanti', 'Karyawan Swasta', 'Guru', 'Jl. Diponegoro No. 56, Simpang Empat, Tanah Bumbu', '081234567895', '2023-07-15', 3, '2026-03-08 14:36:28', '2026-03-08 14:36:28');
INSERT INTO `siswas` (`id`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat`, `telp`, `tanggal_masuk`, `jurusan_id`, `created_at`, `updated_at`) VALUES (7, '12351', 'Fajar Nugraha', 'Banjarbaru', '2007-07-18', 'L', 'Herman', 'Linda', 'Petani', 'Ibu Rumah Tangga', 'Jl. Pangeran Antasari No. 78, Simpang Empat, Tanah Bumbu', '081234567896', '2023-07-15', 1, '2026-03-08 14:36:28', '2026-03-08 14:36:28');
INSERT INTO `siswas` (`id`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat`, `telp`, `tanggal_masuk`, `jurusan_id`, `created_at`, `updated_at`) VALUES (8, '12352', 'Putri Ayu', 'Kandangan', '2008-02-14', 'P', 'Dedi', 'Rina', 'Wiraswasta', 'Karyawan Swasta', 'Jl. Ki Hajar Dewantara No. 90, Simpang Empat, Tanah Bumbu', '081234567897', '2023-07-15', 2, '2026-03-08 14:36:28', '2026-03-08 14:36:28');
INSERT INTO `siswas` (`id`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat`, `telp`, `tanggal_masuk`, `jurusan_id`, `created_at`, `updated_at`) VALUES (9, '12353', 'Aldi Firmansyah', 'Batulicin', '2007-04-22', 'L', 'Rudi', 'Dewi', 'PNS', 'Ibu Rumah Tangga', 'Jl. Siliwangi No. 12, Simpang Empat, Tanah Bumbu', '081234567898', '2023-07-15', 3, '2026-03-08 14:36:28', '2026-03-08 14:36:28');
INSERT INTO `siswas` (`id`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat`, `telp`, `tanggal_masuk`, `jurusan_id`, `created_at`, `updated_at`) VALUES (10, '12354', 'Maya Sari', 'Martapura', '2008-06-08', 'P', 'Agus', 'Ani', 'Pedagang', 'Ibu Rumah Tangga', 'Jl. Hasanuddin No. 34, Simpang Empat, Tanah Bumbu', '081234567899', '2023-07-15', 1, '2026-03-08 14:36:28', '2026-03-08 14:36:28');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (1, 'Administrator', 'admin@smkn2.sch.id', 'admin', NULL, '$2y$12$ViYRp17N3N8Gan/EPsjGs.0J2MC6x5NqTQ0bQqAyCA3FqiadjnMpm', NULL, '2026-03-08 13:12:57', '2026-03-08 13:12:57');
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (2, 'Test User', 'test@example.com', 'testuser', '2026-03-08 14:02:11', '$2y$12$UsQAO.y9Q1g/3bn8PPTxZ.LDTXzoV8Pa6aG5tbakJ/FLUvqja6EPG', 'K29bzvMkgs', '2026-03-08 14:02:11', '2026-03-08 14:02:11');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
