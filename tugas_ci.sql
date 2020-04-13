/*
 Navicat Premium Data Transfer

 Source Server         : Bimbel
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : tugas_ci

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 13/04/2020 14:04:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for kcmt
-- ----------------------------
DROP TABLE IF EXISTS `kcmt`;
CREATE TABLE `kcmt`  (
  `id_wilayah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_wilayah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `wilayah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_wilayah`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 189 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kcmt
-- ----------------------------
INSERT INTO `kcmt` VALUES (1, 'Banyumanik', 'Banyumanik');
INSERT INTO `kcmt` VALUES (3, 'Gedawang', 'Banyumanik');
INSERT INTO `kcmt` VALUES (4, 'Jabungan', 'Banyumanik');
INSERT INTO `kcmt` VALUES (5, 'Ngasrep', 'Banyumanik');
INSERT INTO `kcmt` VALUES (6, 'Padangsari', 'Banyumanik');
INSERT INTO `kcmt` VALUES (7, 'Pedalangan', 'Banyumanik');
INSERT INTO `kcmt` VALUES (8, 'Pudakpayung', 'Banyumanik');
INSERT INTO `kcmt` VALUES (9, 'Srondol Kulon', 'Banyumanik');
INSERT INTO `kcmt` VALUES (10, 'Srondol', 'Banyumanik');
INSERT INTO `kcmt` VALUES (11, 'Wetan', 'Banyumanik');
INSERT INTO `kcmt` VALUES (12, 'Sumurboto', 'Banyumanik');
INSERT INTO `kcmt` VALUES (13, 'Tinjomoyo', 'Banyumanik');
INSERT INTO `kcmt` VALUES (14, 'Jatingaleh', 'Candisari');
INSERT INTO `kcmt` VALUES (15, 'Karanganyar Gunung', 'Candisari');
INSERT INTO `kcmt` VALUES (16, 'Jomblang', 'Candisari');
INSERT INTO `kcmt` VALUES (17, 'Candi', 'Candisari');
INSERT INTO `kcmt` VALUES (18, 'Kaliwiru', 'Candisari');
INSERT INTO `kcmt` VALUES (19, 'Wonotingal', 'Candisari');
INSERT INTO `kcmt` VALUES (20, 'Tegalsari', 'Candisari');
INSERT INTO `kcmt` VALUES (21, 'Bendan Duwur', 'Gajahmungkur');
INSERT INTO `kcmt` VALUES (22, 'Bendan Ngisor', 'Gajahmungkur');
INSERT INTO `kcmt` VALUES (23, 'Bandungan', 'Gajahmungkur');
INSERT INTO `kcmt` VALUES (24, 'Gajahmungkur', 'Gajahmungkur');
INSERT INTO `kcmt` VALUES (25, 'Karangrejo', 'Gajahmungkur');
INSERT INTO `kcmt` VALUES (26, 'Lempongsari', 'Gajahmungkur');
INSERT INTO `kcmt` VALUES (27, 'Petompon', 'Gajahmungkur');
INSERT INTO `kcmt` VALUES (28, 'Sampangan', 'Gajahmungkur');
INSERT INTO `kcmt` VALUES (29, 'Gayamsari', 'Gayamsari');
INSERT INTO `kcmt` VALUES (30, 'Kaligawe', 'Gayamsari');
INSERT INTO `kcmt` VALUES (31, 'Pandean Lamper', 'Gayamsari');
INSERT INTO `kcmt` VALUES (32, 'Sambirejo', 'Gayamsari');
INSERT INTO `kcmt` VALUES (33, 'Sawah Besar', 'Gayamsari');
INSERT INTO `kcmt` VALUES (34, 'Siwalan', 'Gayamsari');
INSERT INTO `kcmt` VALUES (35, 'Tambakrejo', 'Gayamsari');
INSERT INTO `kcmt` VALUES (37, 'Bangetayu Kulon', 'Genuk');
INSERT INTO `kcmt` VALUES (38, 'Bangetayu Kulon', 'Genuk');
INSERT INTO `kcmt` VALUES (39, 'Bangetayu Wetan', 'Genuk');
INSERT INTO `kcmt` VALUES (40, 'Banjardowo', 'Genuk');
INSERT INTO `kcmt` VALUES (41, 'Gebangsari', 'Genuk');
INSERT INTO `kcmt` VALUES (42, 'Genuksari', 'Genuk');
INSERT INTO `kcmt` VALUES (43, 'Karangroto', 'Genuk');
INSERT INTO `kcmt` VALUES (44, 'Kudu', 'Genuk');
INSERT INTO `kcmt` VALUES (45, 'Muktiharjo Lor', 'Genuk');
INSERT INTO `kcmt` VALUES (46, 'Penggaron Lor', 'Genuk');
INSERT INTO `kcmt` VALUES (47, 'Sembungharjo', 'Genuk');
INSERT INTO `kcmt` VALUES (48, 'Terboyo Kulon', 'Genuk');
INSERT INTO `kcmt` VALUES (49, 'Terboyo Wetan', 'Genuk');
INSERT INTO `kcmt` VALUES (50, 'Trimulyo', 'Genuk');
INSERT INTO `kcmt` VALUES (51, 'Cepoko', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (52, 'Gunungpati', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (53, 'Jatirejo', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (54, 'Kalisegoro', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (55, 'Kandri', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (56, 'Mangunsari', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (57, 'Ngijo', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (58, 'Nongkosawit', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (59, 'Pakintelan', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (60, 'Petemon', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (61, 'Plalangan', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (62, 'Pongangan', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (63, 'Sadeng', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (64, 'Sekaran', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (65, 'Sukrejo', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (66, 'Sumurejo', 'Gunungpathi');
INSERT INTO `kcmt` VALUES (67, 'Bubakan', 'Mijen');
INSERT INTO `kcmt` VALUES (68, 'Cangkiran', 'Mijen');
INSERT INTO `kcmt` VALUES (69, 'Jatibarang', 'Mijen');
INSERT INTO `kcmt` VALUES (70, 'Jatisari', 'Mijen');
INSERT INTO `kcmt` VALUES (71, 'Karangmalang', 'Mijen');
INSERT INTO `kcmt` VALUES (72, 'Kedungpane', 'Mijen');
INSERT INTO `kcmt` VALUES (73, 'Mijen', 'Mijen');
INSERT INTO `kcmt` VALUES (74, 'Ngadirgo', 'Mijen');
INSERT INTO `kcmt` VALUES (75, 'Pesantren', 'Mijen');
INSERT INTO `kcmt` VALUES (76, 'Polaman', 'Mijen');
INSERT INTO `kcmt` VALUES (77, 'Purwosari', 'Mijen');
INSERT INTO `kcmt` VALUES (78, 'Tambangan', 'Mijen');
INSERT INTO `kcmt` VALUES (79, 'Wonolopo', 'Mijen');
INSERT INTO `kcmt` VALUES (80, 'Wonoplumbon', 'Mijen');
INSERT INTO `kcmt` VALUES (81, 'Bambankerep', 'Ngaliyan');
INSERT INTO `kcmt` VALUES (82, 'Bringin', 'Ngaliyan');
INSERT INTO `kcmt` VALUES (83, 'Gondoriyo', 'Ngaliyan');
INSERT INTO `kcmt` VALUES (84, 'Kalipancur', 'Ngaliyan');
INSERT INTO `kcmt` VALUES (85, 'Ngaliyan', 'Ngaliyan');
INSERT INTO `kcmt` VALUES (86, 'Podorejo', 'Ngaliyan');
INSERT INTO `kcmt` VALUES (87, 'Purwoyoso', 'Ngaliyan');
INSERT INTO `kcmt` VALUES (88, 'Tambakaji', 'Ngaliyan');
INSERT INTO `kcmt` VALUES (89, 'Wates', 'Ngaliyan');
INSERT INTO `kcmt` VALUES (90, 'Wonosari', 'Ngaliyan');
INSERT INTO `kcmt` VALUES (91, 'Gemah', 'Pedurungan');
INSERT INTO `kcmt` VALUES (92, 'Kalicari', 'Pedurungan');
INSERT INTO `kcmt` VALUES (93, 'Muktiharjo Kidul', 'Pedurungan');
INSERT INTO `kcmt` VALUES (94, 'Palebon', 'Pedurungan');
INSERT INTO `kcmt` VALUES (95, 'Pedurungan Kidul', 'Pedurungan');
INSERT INTO `kcmt` VALUES (96, 'Pedurungan Lor', 'Pedurungan');
INSERT INTO `kcmt` VALUES (97, 'Pedurungan Tengah', 'Pedurungan');
INSERT INTO `kcmt` VALUES (98, 'Penggaron Kidul', 'Pedurungan');
INSERT INTO `kcmt` VALUES (99, 'Plomongan Sari', 'Pedurungan');
INSERT INTO `kcmt` VALUES (100, 'Tlogomulyo', 'Pedurungan');
INSERT INTO `kcmt` VALUES (101, 'Tlogosari Kulon', 'Pedurungan');
INSERT INTO `kcmt` VALUES (102, 'Tlogosari Wetan', 'Pedurungan');
INSERT INTO `kcmt` VALUES (103, 'Bojongsalaman', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (104, 'Bongsari', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (105, 'Cabean', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (106, 'Gisikdrono', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (107, 'Kalibanteng Kidul', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (108, 'Kalibanteng Kulon', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (109, 'Karangayu', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (110, 'Kembangarum', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (111, 'Krapyak', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (112, 'Krobokan', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (113, 'Manyaran', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (114, 'Ngemplak Simongan', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (115, 'Salaman Mloyo', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (116, 'Tambakharjo', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (117, 'Tawang Mas', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (118, 'Tawangsari', 'Semarang Kulon');
INSERT INTO `kcmt` VALUES (119, 'Barusari', 'Semarang Kidul');
INSERT INTO `kcmt` VALUES (120, 'Bulustalan', 'Semarang Kidul');
INSERT INTO `kcmt` VALUES (121, 'Lamper Kidul', 'Semarang Kidul');
INSERT INTO `kcmt` VALUES (122, 'Lamper Lor', 'Semarang Kidul');
INSERT INTO `kcmt` VALUES (123, 'Lamper Tengah', 'Semarang Kidul');
INSERT INTO `kcmt` VALUES (124, 'Mugassari', 'Semarang Kidul');
INSERT INTO `kcmt` VALUES (125, 'Peterongan', 'Semarang Kidul');
INSERT INTO `kcmt` VALUES (126, 'Pleburan', 'Semarang Kidul');
INSERT INTO `kcmt` VALUES (127, 'Randusari', 'Semarang Kidul');
INSERT INTO `kcmt` VALUES (128, 'Wonodri', 'Semarang Kidul');
INSERT INTO `kcmt` VALUES (129, 'Bangunharjo', 'Semarang Tengah');
INSERT INTO `kcmt` VALUES (130, 'Brumbungan', 'Semarang Tengah');
INSERT INTO `kcmt` VALUES (131, 'Gabahan', 'Semarang Tengah');
INSERT INTO `kcmt` VALUES (132, 'Jagalan', 'Semarang Tengah');
INSERT INTO `kcmt` VALUES (133, 'Karangkidul', 'Semarang Tengah');
INSERT INTO `kcmt` VALUES (134, 'Kauman', 'Semarang Tengah');
INSERT INTO `kcmt` VALUES (135, 'Kembangsari', 'Semarang Tengah');
INSERT INTO `kcmt` VALUES (136, 'Kranggan', 'Semarang Tengah');
INSERT INTO `kcmt` VALUES (137, 'Miroto', 'Semarang Tengah');
INSERT INTO `kcmt` VALUES (138, 'Pandansari', 'Semarang Tengah');
INSERT INTO `kcmt` VALUES (139, 'Pekunden', 'Semarang Tengah');
INSERT INTO `kcmt` VALUES (140, 'Pendrikan Kidu', 'Semarang Tengah');
INSERT INTO `kcmt` VALUES (141, 'Pendrikan Lor', 'Semarang Tengah');
INSERT INTO `kcmt` VALUES (142, 'Purwodinatan', 'Semarang Tengah');
INSERT INTO `kcmt` VALUES (143, 'Sekayu', 'Semarang Tengah');
INSERT INTO `kcmt` VALUES (144, 'Bugangan', 'Semarang Wetan');
INSERT INTO `kcmt` VALUES (145, 'Karangtempel', 'Semarang Wetan');
INSERT INTO `kcmt` VALUES (146, 'Karangturi', 'Semarang Wetan');
INSERT INTO `kcmt` VALUES (147, 'Kebonagung', 'Semarang Wetan');
INSERT INTO `kcmt` VALUES (148, 'Kemijen', 'Semarang Wetan');
INSERT INTO `kcmt` VALUES (149, 'Mlatibaru', 'Semarang Wetan');
INSERT INTO `kcmt` VALUES (150, 'Mlatiharjo', 'Semarang Wetan');
INSERT INTO `kcmt` VALUES (151, 'Rejomulyo', 'Semarang Wetan');
INSERT INTO `kcmt` VALUES (152, 'Rejosari', 'Semarang Wetan');
INSERT INTO `kcmt` VALUES (153, 'Sarirejo', 'Semarang Wetan');
INSERT INTO `kcmt` VALUES (154, 'Bandarharjo', 'Semarang Lor');
INSERT INTO `kcmt` VALUES (155, 'Bulu Lor', 'Semarang Lor');
INSERT INTO `kcmt` VALUES (156, 'Dadapsari', 'Semarang Lor');
INSERT INTO `kcmt` VALUES (157, 'Kuningan', 'Semarang Lor');
INSERT INTO `kcmt` VALUES (158, 'Panggung Kidul', 'Semarang Lor');
INSERT INTO `kcmt` VALUES (159, 'Panggung Lor', 'Semarang Lor');
INSERT INTO `kcmt` VALUES (160, 'Plombokan', 'Semarang Lor');
INSERT INTO `kcmt` VALUES (161, 'Purwosari', 'Semarang Lor');
INSERT INTO `kcmt` VALUES (162, 'Tanjung Mas', 'Semarang Lor');
INSERT INTO `kcmt` VALUES (163, 'Bulusan', 'Tembalang');
INSERT INTO `kcmt` VALUES (164, 'Jangli', 'Tembalang');
INSERT INTO `kcmt` VALUES (165, 'Kedungmundu', 'Tembalang');
INSERT INTO `kcmt` VALUES (166, 'Kramas', 'Tembalang');
INSERT INTO `kcmt` VALUES (167, 'Mangunharjo', 'Tembalang');
INSERT INTO `kcmt` VALUES (168, 'Meteseh', 'Tembalang');
INSERT INTO `kcmt` VALUES (169, 'Rowosari', 'Tembalang');
INSERT INTO `kcmt` VALUES (170, 'Sambiroto', 'Tembalang');
INSERT INTO `kcmt` VALUES (171, 'Sendangmulyo', 'Tembalang');
INSERT INTO `kcmt` VALUES (172, 'Sendangguwo', 'Tembalang');
INSERT INTO `kcmt` VALUES (173, 'Tandang', 'Tembalang');
INSERT INTO `kcmt` VALUES (174, 'Tembalang', 'Tembalang');
INSERT INTO `kcmt` VALUES (175, 'Jerakah', 'Tugu');
INSERT INTO `kcmt` VALUES (176, 'Karanganyar', 'Tugu');
INSERT INTO `kcmt` VALUES (177, 'Mangkang Kulon', 'Tugu');
INSERT INTO `kcmt` VALUES (178, 'Mangkang Wetan', 'Tugu');
INSERT INTO `kcmt` VALUES (179, 'Mangunharjo', 'Tugu');
INSERT INTO `kcmt` VALUES (180, 'Randugarut', 'Tugu');
INSERT INTO `kcmt` VALUES (181, 'Tugurejo', 'Tugu');
INSERT INTO `kcmt` VALUES (188, 'coba edit5', 'mana aja');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` int(11) NOT NULL,
  `is_active` int(1) NULL DEFAULT NULL,
  `date_created` int(255) NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `status`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (4, 'yusuf@gmail.com', 'Yusuf', '$2y$10$1W9QxJSWH9tev5Vk9zzLBeBNmCybUh6s1hMswTE7UIHtIgR/pRyKC', 1, 1, 1586635845, 'default.png');
INSERT INTO `user` VALUES (5, 'petrik@yahoo.com', 'petrik', '$2y$10$gXEmd2JPc2YLFPTa87rEV.OO92Ibh2Mts7L/MO/HTdN5YKLNhKrTq', 3, 1, 1586636463, 'default.png');

-- ----------------------------
-- Table structure for user_access_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_access_menu`;
CREATE TABLE `user_access_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_access_menu
-- ----------------------------
INSERT INTO `user_access_menu` VALUES (1, 1, 1);
INSERT INTO `user_access_menu` VALUES (2, 2, 2);
INSERT INTO `user_access_menu` VALUES (3, 3, 3);
INSERT INTO `user_access_menu` VALUES (4, 1, 2);
INSERT INTO `user_access_menu` VALUES (5, 1, 3);
INSERT INTO `user_access_menu` VALUES (6, 2, 3);

-- ----------------------------
-- Table structure for user_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_menu`;
CREATE TABLE `user_menu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_menu
-- ----------------------------
INSERT INTO `user_menu` VALUES (1, 'superuser');
INSERT INTO `user_menu` VALUES (2, 'admin');
INSERT INTO `user_menu` VALUES (3, 'user');

-- ----------------------------
-- Table structure for user_role
-- ----------------------------
DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_role
-- ----------------------------
INSERT INTO `user_role` VALUES (1, 'Administrator');
INSERT INTO `user_role` VALUES (2, 'Operator');
INSERT INTO `user_role` VALUES (3, 'Member');

SET FOREIGN_KEY_CHECKS = 1;
