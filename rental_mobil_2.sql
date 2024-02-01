/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : rental_mobil_2

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-05-29 18:21:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of admin
-- ----------------------------

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('5', 'Dimas', 'dimas', 'rawabogo', 'Laki-laki', '089602933134', '1234567891011121315', '7d49e40f4b3d8f68c19406a58303f826', '2');
INSERT INTO `customer` VALUES ('6', 'Aldo', 'aldo', 'Bogor', 'Laki - laki', '085889792096', '12345678910', '21232f297a57a5a743894a0e4a801fc3', '1');
INSERT INTO `customer` VALUES ('8', 'Abdul', 'abdul', 'jl.abas', 'Laki-laki', '089602933134', '1234567891011121316', '82027888c5bb8fc395411cb6804a066c', '2');
INSERT INTO `customer` VALUES ('9', 'Adit', 'adit', 'rawabogo', 'Laki-laki', '085889792096', '1234567891011121315', '486b6c6b267bc61677367eb6b6458764', '2');

-- ----------------------------
-- Table structure for mobil
-- ----------------------------
DROP TABLE IF EXISTS `mobil`;
CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL AUTO_INCREMENT,
  `kode_type` varchar(120) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `ac` int(11) NOT NULL,
  `supir` int(11) NOT NULL,
  `mp3_player` int(11) NOT NULL,
  `central_lock` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_mobil`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of mobil
-- ----------------------------
INSERT INTO `mobil` VALUES ('1', 'SDN', 'Toyota Camry', 'B 1457 FOH', 'Hitam', '2014', '0', '400000', '30000', '1', '1', '0', '0', 'camry4.jpg');
INSERT INTO `mobil` VALUES ('2', 'SDN', 'Toyota City', 'B 1456 DAG', 'Hitam', '2015', '0', '600000', '50000', '0', '0', '0', '0', 'city.png');
INSERT INTO `mobil` VALUES ('4', 'SPT', 'Lamborghini', 'B 1456 ABC', 'Merah', '2020', '1', '10000000', '500000', '1', '0', '1', '0', 'lamborghini.jpg');
INSERT INTO `mobil` VALUES ('5', 'SDN', 'Subaru', 'B 1236 XYZ', 'Biru', '2019', '0', '500000', '100000', '0', '0', '1', '1', 'subaru.jpg');

-- ----------------------------
-- Table structure for rental
-- ----------------------------
DROP TABLE IF EXISTS `rental`;
CREATE TABLE `rental` (
  `id_rental` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  PRIMARY KEY (`id_rental`),
  CONSTRAINT `rental_ibfk_1` FOREIGN KEY (`id_rental`) REFERENCES `transaksi` (`id_rental`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of rental
-- ----------------------------

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id_rental` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` varchar(120) NOT NULL,
  `total_denda` varchar(120) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(120) NOT NULL,
  `status_pembayaran` int(11) NOT NULL,
  PRIMARY KEY (`id_rental`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES ('4', '5', '1', '2021-05-21', '2021-05-24', '400000', '30000', '120000', '2021-05-28', 'Kembali', 'Selesai', 'Bukti_Latihan_Ujian_IMK.pdf', '1');
INSERT INTO `transaksi` VALUES ('5', '8', '5', '2021-05-23', '2021-05-24', '500000', '100000', '400000', '2021-05-28', 'Kembali', 'Selesai', '', '0');
INSERT INTO `transaksi` VALUES ('7', '5', '2', '2021-05-29', '2021-05-30', '600000', '50000', '', '0000-00-00', 'Belum Kembali', 'Belum Selesai', '', '0');

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `kode_type` varchar(10) NOT NULL,
  `nama_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('1', 'SDN', 'Sedan');
INSERT INTO `type` VALUES ('2', 'HTB', 'Hatchback');
INSERT INTO `type` VALUES ('3', 'MPV', 'Multi Puspose Vehicle');
INSERT INTO `type` VALUES ('4', 'SPT', 'Sport');
