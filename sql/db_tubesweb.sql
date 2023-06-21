/*
Navicat MySQL Data Transfer

Source Server         : phpMyAdmin
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_tubesweb

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-06-21 13:36:58
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `t_details`
-- ----------------------------
DROP TABLE IF EXISTS `t_details`;
CREATE TABLE `t_details` (
  `id_menupesanan` int(6) NOT NULL,
  `kode_menupesanan` varchar(100) DEFAULT NULL,
  `tanggal_menupesanan` datetime DEFAULT NULL,
  `nama_menupesanan` varchar(100) DEFAULT NULL,
  `hargasatuan_menupesanan` varchar(100) DEFAULT NULL,
  `qty_menupesanan` varchar(100) DEFAULT NULL,
  `total_menupesanan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_menupesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_details
-- ----------------------------
INSERT INTO `t_details` VALUES ('0', '123456', '2023-06-20 23:35:48', 'nasi goreng', '20000', '5', '100000');
INSERT INTO `t_details` VALUES ('1', '123456', '2023-06-20 23:35:48', 'jus alpukat', '20000', '5', '100000');
INSERT INTO `t_details` VALUES ('2', '654321', '2023-06-21 00:45:15', 'set menu a', '10000', '1', '100000');

-- ----------------------------
-- Table structure for `t_pemesanan`
-- ----------------------------
DROP TABLE IF EXISTS `t_pemesanan`;
CREATE TABLE `t_pemesanan` (
  `id_pesanan` int(6) NOT NULL AUTO_INCREMENT,
  `tanggal_pesanan` datetime DEFAULT NULL,
  `kode_pesanan` varchar(100) DEFAULT NULL,
  `nama_pesanan` varchar(100) DEFAULT NULL,
  `total_pesanan` int(50) DEFAULT NULL,
  PRIMARY KEY (`id_pesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of t_pemesanan
-- ----------------------------
INSERT INTO `t_pemesanan` VALUES ('1', '2023-06-20 23:35:48', '123456', 'John', '200000');
INSERT INTO `t_pemesanan` VALUES ('2', '2023-06-21 00:45:15', '654321', 'David', '100000');
