-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020 年 06 月 14 日 15:06
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `tbyii2020`
--

-- --------------------------------------------------------

--
-- 資料表結構 `contactme`
--

CREATE TABLE `contactme` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `request_time` char(30) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `contactme`
--

INSERT INTO `contactme` (`id`, `name`, `request_time`, `content`) VALUES
(1, '1', '1', '1'),
(2, '2', '22', '2'),
(3, '3', '3', '3'),
(325, 'ao', 'li', 'gei');

-- --------------------------------------------------------

--
-- 資料表結構 `dxyarea`
--

CREATE TABLE `dxyarea` (
  `id` int(11) NOT NULL,
  `locationId` varchar(255) DEFAULT NULL,
  `continentName` varchar(255) DEFAULT NULL,
  `continentEnglishName` varchar(255) DEFAULT NULL,
  `countryName` varchar(255) DEFAULT NULL,
  `countryEnglishName` varchar(255) DEFAULT NULL,
  `countryFullName` varchar(255) DEFAULT NULL,
  `provinceName` varchar(255) DEFAULT NULL,
  `provinceEnglishName` varchar(255) DEFAULT NULL,
  `provinceShortName` varchar(255) DEFAULT NULL,
  `currentConfirmedCount` varchar(255) DEFAULT NULL,
  `confirmedCount` varchar(255) DEFAULT NULL,
  `suspectedCount` varchar(255) DEFAULT NULL,
  `curedCount` varchar(255) DEFAULT NULL,
  `deadCount` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `cities` varchar(255) DEFAULT NULL,
  `updateTime` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- 傾印資料表的資料 `dxyarea`
--

INSERT INTO `dxyarea` (`id`, `locationId`, `continentName`, `continentEnglishName`, `countryName`, `countryEnglishName`, `countryFullName`, `provinceName`, `provinceEnglishName`, `provinceShortName`, `currentConfirmedCount`, `confirmedCount`, `suspectedCount`, `curedCount`, `deadCount`, `comment`, `cities`, `updateTime`) VALUES
(1, '971002', '北美洲', 'North America', '美国', 'United States of America', 'United States of America', '美国', 'United States of America', '美国', '1309410', '1920061', '0', '500849', '109802', '', NULL, '1591501699203'),
(2, '971002', '北美洲', 'North America', '美国', 'United States of America', 'United States of America', '美国', 'United States of America', '美国', '1309410', '1920061', '0', '500849', '109802', '', NULL, '1591501699203'),
(3, '963003', '欧洲', 'Europe', '德国', 'Germany', 'Germany', '德国', 'Germany', '德国', '6211', '183979', '0', '169100', '8668', '', NULL, '1591500591364'),
(4, '964003', '欧洲', 'Europe', '拉脱维亚', 'Latvia', 'Latvia', '拉脱维亚', 'Latvia', '拉脱维亚', '593', '1082', '0', '464', '25', '', NULL, '1591500591364'),
(5, '951004', '亚洲', 'Asia', '韩国', 'Korea', 'Republic of Korea', '韩国', 'Korea', '韩国', '951', '11776', '0', '10552', '273', '', NULL, '1591500591364'),
(6, '951002', '亚洲', 'Asia', '日本', 'Japan', 'Japan', '日本', 'Japan', '日本', '1842', '17164', '0', '14406', '916', '', NULL, '1591500591364'),
(7, '973003', '南美洲', 'South America', '巴西', 'Brazil', 'Brazil', '巴西', 'Brazil', '巴西', '338366', '676494', '0', '302084', '36044', '', NULL, '1591500591364'),
(8, '971003', '北美洲', 'North America', '墨西哥', 'Mexico', 'Mexico', '墨西哥', 'Mexico', '墨西哥', '18564', '113619', '0', '81544', '13511', '', NULL, '1591500591364'),
(9, '982003', '非洲', 'Africa', '乍得', 'Chad', 'Chad', '乍得', 'Chad', '乍得', '768', '836', '0', '0', '68', '', NULL, '1591495307619'),
(10, '0', '北美洲', 'North America', '瓜德罗普岛', NULL, 'Guadeloupe', '瓜德罗普岛', NULL, '瓜德罗普岛', '150', '164', '0', '0', '14', '', NULL, '1591495307619'),
(11, '983002', '非洲', 'Africa', '中非共和国', 'Central African Republic', 'Central African Republic', '中非共和国', 'Central African Republic', '中非共和国', '1528', '1570', '0', '37', '5', '', NULL, '1591495307619'),
(12, '963004', '欧洲', 'Europe', '匈牙利', 'Hungary', 'Hungary', '匈牙利', 'Hungary', '匈牙利', '1166', '3990', '0', '2279', '545', '', NULL, '1591495307619'),
(13, '973008', '南美洲', 'South America', '秘鲁', 'Peru', 'Peru', '秘鲁', 'Peru', '秘鲁', '103726', '191758', '0', '82731', '5301', '', NULL, '1591495307619'),
(14, '963008', '欧洲', 'Europe', '瑞士', 'Switzerland', 'Switzerland', '瑞士', 'Switzerland', '瑞士', '669', '30874', '0', '28545', '1660', '', NULL, '1591495307619'),
(15, '963006', '欧洲', 'Europe', '波兰', 'Poland', 'Poland', '波兰', 'Poland', '波兰', '11625', '25419', '0', '12641', '1153', '', NULL, '1591495307619'),
(16, '0', '亚洲', 'Asia', '蒙古', 'Mongolia', 'Mongolia', '蒙古', 'Mongolia', '蒙古', '167', '191', '0', '24', '0', '', NULL, '1591495307619'),
(17, '985002', '非洲', 'Africa', '吉布提', 'Djibouti', 'The Republic of Djibouti', '吉布提', 'Djibouti', '吉布提', '2412', '4123', '0', '1685', '26', '', NULL, '1591495307619'),
(18, '965015', '欧洲', 'Europe', '西班牙', 'Spain', 'Spain', '西班牙', 'Spain', '西班牙', '63799', '241310', '0', '150376', '27135', '', NULL, '1591495307619'),
(19, '985005', '非洲', 'Africa', '肯尼亚', 'Kenya', 'Kenya', '肯尼亚', 'Kenya', '肯尼亚', '1874', '2600', '0', '643', '83', '', NULL, '1591495307619'),
(20, '955019', '亚洲', 'Asia', '阿联酋', 'United Arab Emirates', 'United Arab Emirates', '阿联酋', 'United Arab Emirates', '阿联酋', '16932', '38268', '0', '21061', '275', '', NULL, '1591495307619'),
(21, '955008', '亚洲', 'Asia', '伊拉克', 'Iraq', 'Iraq', '伊拉克', 'Iraq', '伊拉克', '5876', '11098', '0', '4904', '318', '', NULL, '1591495307619'),
(22, '955015', '亚洲', 'Asia', '卡塔尔', 'Qatar', 'Qatar', '卡塔尔', 'Qatar', '卡塔尔', '24617', '67195', '0', '42527', '51', '', NULL, '1591495307619'),
(23, '972002', '北美洲', 'North America', '哥斯达黎加', 'Costa Rica', 'Costa Rica', '哥斯达黎加', 'Costa Rica', '哥斯达黎加', '1184', '1194', '0', '0', '10', '', NULL, '1591495307619'),
(24, '965010', '欧洲', 'Europe', '葡萄牙', 'Portugal', 'Portugal', '葡萄牙', 'Portugal', '葡萄牙', '13325', '34351', '0', '19552', '1474', '', NULL, '1591495307619'),
(25, '955005', '亚洲', 'Asia', '塞浦路斯', 'Cyprus', 'Cyprus', '塞浦路斯', 'Cyprus', '塞浦路斯', '430', '960', '0', '504', '26', '', NULL, '1591495307619'),
(26, '965011', '欧洲', 'Europe', '罗马尼亚', 'Romania', 'Romania', '罗马尼亚', 'Romania', '罗马尼亚', '4553', '20290', '0', '14419', '1318', '', NULL, '1591495307619'),
(27, '0', '非洲', 'Africa', '刚果（金）', 'Democratic Republic of the Congo', 'Democratic Republic of the Congo', '刚果（金）', 'Democratic Republic of the Congo', '刚果（金）', '3258', '3877', '0', '537', '82', '', NULL, '1591495307619'),
(28, '0', '南美洲', 'South America', '委内瑞拉', 'Venezuela', 'Venezuela', '委内瑞拉', 'Venezuela', '委内瑞拉', '2067', '2087', '0', '0', '20', '', NULL, '1591495307619'),
(29, '955002', '亚洲', 'Asia', '亚美尼亚', 'Armenia', 'Armenia', '亚美尼亚', 'Armenia', '亚美尼亚', '8454', '12364', '0', '3720', '190', '', NULL, '1591495307619'),
(30, '963002', '欧洲', 'Europe', '捷克', 'Czech Republic', 'Czechia', '捷克', 'Czech Republic', '捷克', '2318', '9529', '0', '6884', '327', '', NULL, '1591495307619'),
(31, '984005', '非洲', 'Africa', '马达加斯加', 'Madagascar', 'Madagascar', '马达加斯加', 'Madagascar', '马达加斯加', '806', '1026', '0', '212', '8', '', NULL, '1591495307619'),
(32, '953001', '亚洲', 'Asia', '孟加拉国', 'Bangladesh', 'Bangladesh', '孟加拉国', 'Bangladesh', '孟加拉国', '48855', '63026', '0', '13325', '846', '', NULL, '1591495307619'),
(33, '981005', '非洲', 'Africa', '苏丹', 'Sudan', 'Sudan', '苏丹', 'Sudan', '苏丹', '3594', '5865', '0', '1924', '347', '', NULL, '1591495307619'),
(34, '982011', '非洲', 'Africa', '尼日尔', 'Niger', 'Niger', '尼日尔', 'Niger', '尼日尔', '167', '966', '0', '734', '65', '', NULL, '1591495307619'),
(35, '972005', '北美洲', 'North America', '洪都拉斯', 'Honduras', 'Honduras', '洪都拉斯', 'Honduras', '洪都拉斯', '5637', '5880', '0', '0', '243', '', NULL, '1591495307619'),
(36, '973011', '南美洲', 'South America', '乌拉圭', 'Uruguay', 'Uruguay', '乌拉圭', 'Uruguay', '乌拉圭', '111', '832', '0', '698', '23', '', NULL, '1591495307619'),
(37, '964007', '欧洲', 'Europe', '乌克兰', 'Ukraine', 'Ukraine', '乌克兰', 'Ukraine', '乌克兰', '18162', '26514', '0', '7575', '777', '', NULL, '1591495307619'),
(38, '962005', '欧洲', 'Europe', '瑞典', 'Sweden', 'Sweden', '瑞典', 'Sweden', '瑞典', '34260', '43887', '0', '4971', '4656', '', NULL, '1591495307619'),
(39, '961003', '欧洲', 'Europe', '爱尔兰', 'Ireland', 'Ireland', '爱尔兰', 'Ireland', '爱尔兰', '2433', '25163', '0', '21060', '1670', '', NULL, '1591495307619'),
(40, '954002', '亚洲', 'Asia', '吉尔吉斯斯坦', NULL, 'Kyrgyzstan', '吉尔吉斯斯坦', NULL, '吉尔吉斯斯坦', '972', '1974', '0', '980', '22', '', NULL, '1591495307619'),
(41, '953007', '亚洲', 'Asia', '斯里兰卡', 'SriLanka', 'Sri Lanka', '斯里兰卡', 'SriLanka', '斯里兰卡', '951', '1801', '0', '839', '11', '', NULL, '1591495307619'),
(42, '954001', '亚洲', 'Asia', '哈萨克斯坦', 'Kazakhstan', 'Kazakhstan', '哈萨克斯坦', 'Kazakhstan', '哈萨克斯坦', '5853', '12511', '0', '6606', '52', '', NULL, '1591495307619'),
(43, '982004', '非洲', 'Africa', '科特迪瓦', 'Ivory Coast', 'Cote d Ivoire', '科特迪瓦', 'Ivory Coast', '科特迪瓦', '1850', '3431', '0', '1545', '36', '', NULL, '1591495307619'),
(44, '961002', '欧洲', 'Europe', '法国', 'France', 'France', '法国', 'France', '法国', '53686', '153634', '0', '70806', '29142', '', NULL, '1591495307619'),
(45, '0', '南美洲', 'South America', '法属圭亚那', 'French Guiana', 'French Guiana', '法属圭亚那', 'French Guiana', '法属圭亚那', '588', '589', '0', '0', '1', '', NULL, '1591495307619'),
(46, '965013', '欧洲', 'Europe', '塞尔维亚', 'Republic of Serbia', 'Serbia', '塞尔维亚', 'Republic of Serbia', '塞尔维亚', '678', '12883', '0', '11927', '278', '', NULL, '1591495307619'),
(47, '952011', '亚洲', 'Asia', '越南', 'Vietnam', 'Vietnam', '越南', 'Vietnam', '越南', '62', '329', '0', '267', '0', '', NULL, '1591495307619'),
(48, '955004', '亚洲', 'Asia', '巴林', 'Bahrain', 'Bahrain', '巴林', 'Bahrain', '巴林', '5181', '14224', '0', '9020', '23', '', NULL, '1591495307619'),
(49, '982014', '非洲', 'Africa', '塞内加尔', 'Senegal', 'Senegal', '塞内加尔', 'Senegal', '塞内加尔', '1690', '4249', '0', '2512', '47', '', NULL, '1591495307619'),
(50, '0', '欧洲', 'Europe', '北马其顿', 'North Macedonia', 'North Macedonia', '北马其顿', 'North Macedonia', '北马其顿', '1124', '2915', '0', '1640', '151', '', NULL, '1591495307619'),
(51, '0', '北美洲', 'North America', '波多黎各', 'Puerto Rico', 'Puerto Rico', '波多黎各', 'Puerto Rico', '波多黎各', '4479', '4620', '0', '0', '141', '', NULL, '1591495307619'),
(52, '985004', '非洲', 'Africa', '埃塞俄比亚', 'Ethiopia', 'Ethiopia', '埃塞俄比亚', 'Ethiopia', '埃塞俄比亚', '1633', '1934', '0', '281', '20', '', NULL, '1591495307619'),
(53, '953006', '亚洲', 'Asia', '巴基斯坦', 'Pakistan', 'Pakistan', '巴基斯坦', 'Pakistan', '巴基斯坦', '59467', '93983', '0', '32581', '1935', '', NULL, '1591495307619'),
(54, '965001', '欧洲', 'Europe', '阿尔巴尼亚', 'Albania', 'Albania', '阿尔巴尼亚', 'Albania', '阿尔巴尼亚', '484', '1232', '0', '714', '34', '', NULL, '1591495307619'),
(55, '974004', '北美洲', 'North America', '古巴', 'Cuba', 'Cuba', '古巴', 'Cuba', '古巴', '1525', '2133', '0', '525', '83', '', NULL, '1591495307619'),
(56, '963001', '欧洲', 'Europe', '奥地利', 'Austria', 'Austria', '奥地利', 'Austria', '奥地利', '1180', '16803', '0', '14951', '672', '', NULL, '1591495307619'),
(57, '965008', '欧洲', 'Europe', '意大利', 'Italy', 'Italy', '意大利', 'Italy', '意大利', '35877', '234801', '0', '165078', '33846', '', NULL, '1591495307619'),
(58, '953003', '亚洲', 'Asia', '印度', 'India', 'India', '印度', 'India', '印度', '115942', '236657', '0', '114073', '6642', '', NULL, '1591495307619'),
(59, '955001', '亚洲', 'Asia', '阿富汗', 'Afghanistan', 'Afghanistan', '阿富汗', 'Afghanistan', '阿富汗', '17394', '19551', '0', '1830', '327', '', NULL, '1591495307619'),
(60, '974006', '北美洲', 'North America', '多米尼加', 'Dominican Republic', 'Dominican Republic', '多米尼加', 'Dominican Republic', '多米尼加', '17190', '18708', '0', '993', '525', '', NULL, '1591495307619'),
(61, '954005', '亚洲', 'Asia', '乌兹别克斯坦', 'Uzbekistan', 'Uzbekstan', '乌兹别克斯坦', 'Uzbekistan', '乌兹别克斯坦', '1370', '4022', '0', '2636', '16', '', NULL, '1591495307619'),
(62, '955006', '亚洲', 'Asia', '格鲁吉亚', 'Georgia', 'Georgia', '格鲁吉亚', 'Georgia', '格鲁吉亚', '161', '808', '0', '634', '13', '', NULL, '1591495307619'),
(63, '984010', '非洲', 'Africa', '斯威士兰', 'Swaziland', 'Swaziland', '斯威士兰', 'Swaziland', '斯威士兰', '289', '305', '0', '13', '3', '', NULL, '1591495307619'),
(64, '964006', '欧洲', 'Europe', '俄罗斯', 'Russia', 'Russian Federation', '俄罗斯', 'Russia', '俄罗斯', '231576', '458689', '0', '221388', '5725', '', NULL, '1591495307619'),
(65, '955011', '亚洲', 'Asia', '科威特', 'Kuwait', 'Kuwait', '科威特', 'Kuwait', '科威特', '11595', '31131', '0', '19282', '254', '', NULL, '1591495307619'),
(66, '973009', '南美洲', 'South America', '巴拉圭', 'Paraguay', 'Paraguay', '巴拉圭', 'Paraguay', '巴拉圭', '878', '1087', '0', '198', '11', '', NULL, '1591495307619'),
(67, '955007', '亚洲', 'Asia', '伊朗', 'Iran', 'Iran (Islamic Republic of)', '伊朗', 'Iran', '伊朗', '29178', '169425', '0', '132038', '8209', '', NULL, '1591495307619'),
(68, '955012', '亚洲', 'Asia', '黎巴嫩', 'Lebanon', 'Lebanon', '黎巴嫩', 'Lebanon', '黎巴嫩', '553', '1312', '0', '731', '28', '', NULL, '1591495307619'),
(69, '0', '北美洲', 'North America', '开曼群岛', 'Cayman Is', 'Cayman Islands', '开曼群岛', 'Cayman Is', '开曼群岛', '158', '160', '0', '0', '2', '', NULL, '1591495307619'),
(70, '973004', '南美洲', 'South America', '智利', 'Chile', 'Chile', '智利', 'Chile', '智利', '81258', '127745', '0', '44946', '1541', '', NULL, '1591495307619'),
(71, '973006', '南美洲', 'South America', '厄瓜多尔', 'Ecuador', 'Ecuador', '厄瓜多尔', 'Ecuador', '厄瓜多尔', '34514', '42106', '0', '4000', '3592', '', NULL, '1591495307619'),
(72, '981001', '非洲', 'Africa', '阿尔及利亚', 'Algeria', 'Algeria', '阿尔及利亚', 'Algeria', '阿尔及利亚', '2721', '10050', '0', '6631', '698', '', NULL, '1591495307619'),
(73, '961004', '欧洲', 'Europe', '卢森堡', 'Luxembourg', 'Luxembourg', '卢森堡', 'Luxembourg', '卢森堡', '133', '4032', '0', '3789', '110', '', NULL, '1591495307619'),
(74, '964004', '欧洲', 'Europe', '立陶宛', 'Lithuania', 'Lithuania', '立陶宛', 'Lithuania', '立陶宛', '574', '1694', '0', '1049', '71', '', NULL, '1591495307619'),
(75, '983004', '非洲', 'Africa', '加蓬', 'Gabon', 'Gabon', '加蓬', 'Gabon', '加蓬', '2247', '3101', '0', '833', '21', '', NULL, '1591495307619'),
(76, '982009', '非洲', 'Africa', '利比里亚', 'Liberia', 'Liberia', '利比里亚', 'Liberia', '利比里亚', '219', '334', '0', '85', '30', '', NULL, '1591495307619'),
(77, '981004', '非洲', 'Africa', '摩洛哥', 'Morocco', 'Morocco', '摩洛哥', 'Morocco', '摩洛哥', '646', '8132', '0', '7278', '208', '', NULL, '1591495307619'),
(78, '981003', '非洲', 'Africa', '利比亚', 'Libya', 'Libya', '利比亚', 'Libya', '利比亚', '159', '239', '0', '75', '5', '', NULL, '1591495307619'),
(79, '0', '非洲', 'Africa', '留尼旺', 'Reunion', 'Réunion', '留尼旺', 'Reunion', '留尼旺', '479', '480', '0', '0', '1', '', NULL, '1591495307619'),
(80, '961001', '欧洲', 'Europe', '比利时', 'Belgium', 'Belgium', '比利时', 'Belgium', '比利时', '33380', '59072', '0', '16112', '9580', '', NULL, '1591495307619'),
(81, '962001', '欧洲', 'Europe', '丹麦', 'Denmark', 'Denmark', '丹麦', 'Denmark', '丹麦', '1694', '11924', '0', '9643', '587', '', NULL, '1591495307619'),
(82, '961007', '欧洲', 'Europe', '英国', 'United Kingdom', 'The United Kingdom', '英国', 'United Kingdom', '英国', '243864', '284868', '0', '539', '40465', '', NULL, '1591495307619'),
(83, '974009', '北美洲', 'North America', '牙买加', 'Jamaica', 'Jamaica', '牙买加', 'Jamaica', '牙买加', '581', '591', '0', '0', '10', '', NULL, '1591495307619'),
(84, '984011', '非洲', 'Africa', '南非', 'South Africa', 'South Africa', '南非', 'South Africa', '南非', '20763', '45973', '0', '24258', '952', '', NULL, '1591495307619'),
(85, '955009', '亚洲', 'Asia', '以色列', 'Israel', 'Israel', '以色列', 'Israel', '以色列', '2415', '17752', '0', '15042', '295', '', NULL, '1591495307619'),
(86, '0', '非洲', 'Africa', '马约特', NULL, 'Mayotte', '马约特', NULL, '马约特', '2054', '2079', '0', '0', '25', '', NULL, '1591495307619'),
(87, '982016', '非洲', 'Africa', '多哥', 'Togo', 'Togo', '多哥', 'Togo', '多哥', '365', '485', '0', '107', '13', '', NULL, '1591495307619'),
(88, '953002', '亚洲', 'Asia', '不丹', 'Kingdom of Bhutan', 'Bhutan', '不丹', 'Kingdom of Bhutan', '不丹', '48', '48', '0', '0', '0', '', NULL, '1591495307619'),
(89, '972007', '北美洲', 'North America', '巴拿马', 'Panama', 'Panama', '巴拿马', 'Panama', '巴拿马', '14226', '15044', '0', '455', '363', '', NULL, '1591495307619'),
(90, '952010', '亚洲', 'Asia', '泰国', 'Thailand', 'Thailand', '泰国', 'Thailand', '泰国', '78', '3104', '0', '2968', '58', '', NULL, '1591495307619'),
(91, '972004', '北美洲', 'North America', '危地马拉', 'Guatemala', 'Guatemala', '危地马拉', 'Guatemala', '危地马拉', '5996', '6154', '0', '0', '158', '', NULL, '1591495307619'),
(92, '985006', '非洲', 'Africa', '卢旺达', 'Republic of Rwanda', 'Rwanda', '卢旺达', 'Republic of Rwanda', '卢旺达', '240', '420', '0', '178', '2', '', NULL, '1591495307619'),
(93, '955018', '亚洲', 'Asia', '土耳其', 'Turkey', 'Turkey', '土耳其', 'Turkey', '土耳其', '29228', '169218', '0', '135322', '4668', '', NULL, '1591495307619'),
(94, '0', '欧洲', 'Europe', '直布罗陀', 'Gibraltar', 'Gibraltar', '直布罗陀', 'Gibraltar', '直布罗陀', '173', '174', '0', '0', '1', '', NULL, '1591495307619'),
(95, '983001', '非洲', 'Africa', '喀麦隆', 'Cameroon', 'Cameroon', '喀麦隆', 'Cameroon', '喀麦隆', '5191', '7392', '0', '1996', '205', '', NULL, '1591495307619'),
(96, '953005', '亚洲', 'Asia', '尼泊尔', 'Nepal', 'Nepal', '尼泊尔', 'Nepal', '尼泊尔', '2857', '3235', '0', '365', '13', '', NULL, '1591495307619'),
(97, '952005', '亚洲', 'Asia', '印度尼西亚', 'Indonesia', 'Indonesia', '印度尼西亚', 'Indonesia', '印度尼西亚', '18806', '30514', '0', '9907', '1801', '', NULL, '1591495307619'),
(98, '982006', '非洲', 'Africa', '加纳', 'Ghana', 'Ghana', '加纳', 'Ghana', '加纳', '5871', '9462', '0', '3547', '44', '', NULL, '1591495307619'),
(99, '974011', '北美洲', 'North America', '圣卢西亚', 'St.Lucia', 'Saint Lucia', '圣卢西亚', 'St.Lucia', '圣卢西亚', '19', '19', '0', '0', '0', '', NULL, '1591495307619'),
(100, '971001', '北美洲', 'North America', '加拿大', 'Canada', 'Canada', '加拿大', 'Canada', '加拿大', '35545', '95057', '0', '51739', '7773', '', NULL, '1591495307619'),
(101, '955013', '亚洲', 'Asia', '阿曼', 'Oman', 'Oman', '阿曼', 'Oman', '阿曼', '12493', '16016', '0', '3451', '72', '', NULL, '1591495307619'),
(102, '973001', '南美洲', 'South America', '阿根廷', 'Argentina', 'Argentina', '阿根廷', 'Argentina', '阿根廷', '14317', '21037', '0', '6088', '632', '', NULL, '1591495307619'),
(103, '985010', '非洲', 'Africa', '乌干达', 'Uganda', 'Uganda', '乌干达', 'Uganda', '乌干达', '607', '686', '0', '79', '0', '', NULL, '1591495307619'),
(104, '955016', '亚洲', 'Asia', '沙特阿拉伯', 'Saudi Arabia', 'Saudi Arabia', '沙特阿拉伯', 'Saudi Arabia', '沙特阿拉伯', '26402', '98869', '0', '71791', '676', '', NULL, '1591495307619'),
(105, '952008', '亚洲', 'Asia', '菲律宾', 'Philippines', 'Philippines', '菲律宾', 'Philippines', '菲律宾', '15905', '21340', '0', '4441', '994', '', NULL, '1591495307619'),
(106, '973005', '南美洲', 'South America', '哥伦比亚', 'Colombia', 'Colombia', '哥伦比亚', 'Colombia', '哥伦比亚', '22440', '38027', '0', '14382', '1205', '', NULL, '1591495307619'),
(107, '965004', '欧洲', 'Europe', '保加利亚', 'Bulgaria', 'Bulgaria', '保加利亚', 'Bulgaria', '保加利亚', '1781', '2668', '0', '727', '160', '', NULL, '1591495307619'),
(108, '952007', '亚洲', 'Asia', '马来西亚', 'Malaysia', 'Malaysia', '马来西亚', 'Malaysia', '马来西亚', '1591', '8266', '0', '6559', '116', '', NULL, '1591495307619'),
(109, '982017', '非洲', 'Africa', '佛得角', NULL, 'Cabo Verde', '佛得角', NULL, '佛得角', '487', '536', '0', '44', '5', '', NULL, '1591495307619'),
(110, '984014', '非洲', 'Africa', '毛里求斯', 'Mauritius', 'Mauritius', '毛里求斯', 'Mauritius', '毛里求斯', '5', '337', '0', '322', '10', '', NULL, '1591495307619'),
(111, '955003', '亚洲', 'Asia', '阿塞拜疆', 'Azerbaijan', 'Azerbaijan', '阿塞拜疆', 'Azerbaijan', '阿塞拜疆', '3131', '7239', '0', '4024', '84', '', NULL, '1591495307619'),
(112, '0', '非洲', 'Africa', '刚果（布）', NULL, 'Congo', '刚果（布）', NULL, '刚果（布）', '440', '639', '0', '179', '20', '', NULL, '1591495307619'),
(113, '972003', '北美洲', 'North America', '萨尔瓦多', 'El Salvador', 'The Republic of El Salvador', '萨尔瓦多', 'El Salvador', '萨尔瓦多', '2796', '2849', '0', '0', '53', '', NULL, '1591495307619'),
(114, '953004', '亚洲', 'Asia', '马尔代夫', 'Maldives', 'Maldives', '马尔代夫', 'Maldives', '马尔代夫', '1159', '1883', '0', '717', '7', '', NULL, '1591495307619'),
(115, '0', '亚洲', 'Asia', '也门共和国', NULL, 'The Republic of Yemen', '也门共和国', NULL, '也门共和国', '335', '473', '0', '26', '112', '', NULL, '1591495307619'),
(116, '952009', '亚洲', 'Asia', '新加坡', 'Singapore', 'Singapore', '新加坡', 'Singapore', '新加坡', '15037', '37527', '0', '22466', '24', '', NULL, '1591495307619'),
(117, '974008', '北美洲', 'North America', '海地', 'Haiti', 'The Republic of Haiti', '海地', 'Haiti', '海地', '2590', '2640', '0', '0', '50', '', NULL, '1591495307619'),
(118, '981002', '非洲', 'Africa', '埃及', 'Egypt', 'Egypt', '埃及', 'Egypt', '埃及', '22876', '32612', '0', '8538', '1198', '', NULL, '1591495307619'),
(119, '982015', '非洲', 'Africa', '塞拉利昂', 'Sierra Leone', 'Sierra Leone', '塞拉利昂', 'Sierra Leone', '塞拉利昂', '677', '929', '0', '205', '47', '', NULL, '1591495307619'),
(120, '961006', '欧洲', 'Europe', '荷兰', 'Netherlands', 'Netherlands', '荷兰', 'Netherlands', '荷兰', '29542', '47335', '0', '11782', '6011', '', NULL, '1591495307619'),
(121, '973002', '南美洲', 'South America', '玻利维亚', 'Bolivia', 'Bolivia (Plurinational State of)', '玻利维亚', 'Bolivia', '玻利维亚', '11671', '12245', '0', '159', '415', '', NULL, '1591495307619');

-- --------------------------------------------------------

--
-- 資料表結構 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1591934819),
('m130524_201442_init', 1591970132),
('m190124_110200_add_verification_token_column_to_user_table', 1591970132),
('m200611_162030_tb_user_authhority', 1591970132),
('m200611_162250_contactme', 1591970132),
('m200611_162333_dxyarea', 1591970132),
('m200611_162346_tb_bulletinboard', 1591970133),
('m200611_162353_tb_goods_type', 1591970133),
('m200611_162358_tb_demand_goods', 1591970133),
('m200611_162416_tb_order_status', 1591970133),
('m200611_162420_tb_weal_goods', 1591970133),
('m200611_162423_tb_orders', 1591970133);

-- --------------------------------------------------------

--
-- 資料表結構 `tb_bulletinboard`
--

CREATE TABLE `tb_bulletinboard` (
  `tb_bId` int(10) UNSIGNED NOT NULL COMMENT '公告编号',
  `tb_bContent` text DEFAULT NULL COMMENT '公告内容',
  `tb_bUserid` int(11) DEFAULT NULL COMMENT '公告发布者',
  `tb_bPosttime` datetime NOT NULL COMMENT '公告发布时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='公告表' ROW_FORMAT=DYNAMIC;

--
-- 傾印資料表的資料 `tb_bulletinboard`
--

INSERT INTO `tb_bulletinboard` (`tb_bId`, `tb_bContent`, `tb_bUserid`, `tb_bPosttime`) VALUES
(1, '浙江温州浙江温州江南皮革厂倒闭啦', 1811425, '2020-06-07 21:41:00'),
(2, '窝窝头一块钱四个嘿嘿', 1811425, '2020-06-07 21:41:01'),
(3, 'WOW熔火之心副本大螺丝掉落武器概率翻倍', 9999999, '2010-10-10 10:10:10'),
(4, '受疫情影响，众多地区发生医疗物资匮乏现象，在疫情中心武汉此类现象则是更为广泛，请各位朋友互相帮助', 1811425, '2020-04-02 10:00:00'),
(5, '受疫情影响，众多地区发生生活物资匮乏现象，美国疫情风暴的中心纽约更是上演了超市抢购', 1811425, '2020-05-22 18:00:00'),
(6, '炉石传说新版本纳克萨玛斯即将上线', 1428577, '2018-05-10 02:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `tb_demand_goods`
--

CREATE TABLE `tb_demand_goods` (
  `tb_dgId` int(10) UNSIGNED NOT NULL COMMENT '需求编号',
  `tb_dgUser` int(11) NOT NULL COMMENT '需求发布者',
  `tb_dgType` int(11) NOT NULL COMMENT '物资类型',
  `tb_dgNum` int(10) UNSIGNED DEFAULT NULL COMMENT '物资数量',
  `tb_dgPrice` int(10) UNSIGNED DEFAULT NULL COMMENT '物资价格',
  `tb_dgRemark` text DEFAULT NULL COMMENT '物资信息备注',
  `tb_dgAddress` varchar(255) DEFAULT NULL COMMENT '需求地址'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='物资需求表' ROW_FORMAT=DYNAMIC;

--
-- 傾印資料表的資料 `tb_demand_goods`
--

INSERT INTO `tb_demand_goods` (`tb_dgId`, `tb_dgUser`, `tb_dgType`, `tb_dgNum`, `tb_dgPrice`, `tb_dgRemark`, `tb_dgAddress`) VALUES
(1, 1, 1, 5, 5, '统一方便面五桶（滑稽', '台湾省台北市中正区重庆南路一段122号'),
(2, 2, 2, 5, 105, '达菲', '台湾省台北市中正区重庆南路一段122号'),
(3, 1, 6, 1, 100, '漱口水', '天津市南开大学津南校区教三宿舍'),
(5, 1, 4, 2, 66, '呼吸机滤芯								', '12345\r\n												'),
(6, 1, 2, 1111, 12, '\r\n		1111										', '\r\n				111111								');

-- --------------------------------------------------------

--
-- 資料表結構 `tb_goods_type`
--

CREATE TABLE `tb_goods_type` (
  `tb_gtId` int(10) UNSIGNED NOT NULL COMMENT 'wuzi',
  `tb_gtName` varchar(100) NOT NULL COMMENT 'temp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='物资类别表' ROW_FORMAT=DYNAMIC;

--
-- 傾印資料表的資料 `tb_goods_type`
--

INSERT INTO `tb_goods_type` (`tb_gtId`, `tb_gtName`) VALUES
(1, '食品'),
(2, '药品(处方药)'),
(3, '药品(非处方药)'),
(4, '医疗用品(耗材)'),
(5, '个人防护用品'),
(6, '生活用品'),
(7, '其他');

-- --------------------------------------------------------

--
-- 資料表結構 `tb_orders`
--

CREATE TABLE `tb_orders` (
  `tb_oId` int(10) UNSIGNED NOT NULL COMMENT '订单编号',
  `tb_oSellId` int(10) UNSIGNED NOT NULL COMMENT '订单卖方需求编号',
  `tb_oBuyId` int(10) UNSIGNED NOT NULL COMMENT '订单买方需求编号',
  `tb_ostatus` int(11) NOT NULL COMMENT '订单状态'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='订单表' ROW_FORMAT=DYNAMIC;

--
-- 傾印資料表的資料 `tb_orders`
--

INSERT INTO `tb_orders` (`tb_oId`, `tb_oSellId`, `tb_oBuyId`, `tb_ostatus`) VALUES
(8, 1, 1, 3);

-- --------------------------------------------------------

--
-- 資料表結構 `tb_order_status`
--

CREATE TABLE `tb_order_status` (
  `tb_osId` int(11) NOT NULL COMMENT '订单状态编号',
  `tb_osRemark` varchar(255) NOT NULL COMMENT '订单状态名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='订单状态名称对应表' ROW_FORMAT=DYNAMIC;

--
-- 傾印資料表的資料 `tb_order_status`
--

INSERT INTO `tb_order_status` (`tb_osId`, `tb_osRemark`) VALUES
(1, '进行中'),
(2, '未支付'),
(3, '已支付'),
(4, '未发货'),
(5, '已发货'),
(6, '已完成');

-- --------------------------------------------------------

--
-- 資料表結構 `tb_user_authority`
--

CREATE TABLE `tb_user_authority` (
  `tb_uaId` int(10) UNSIGNED NOT NULL COMMENT '权限编号',
  `tb_uaRemark` varchar(100) DEFAULT NULL COMMENT '权限说明',
  `tb_uaIsmanager` tinyint(1) DEFAULT NULL COMMENT '是否为管理员'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户权限表' ROW_FORMAT=DYNAMIC;

--
-- 傾印資料表的資料 `tb_user_authority`
--

INSERT INTO `tb_user_authority` (`tb_uaId`, `tb_uaRemark`, `tb_uaIsmanager`) VALUES
(1, '管理员权限', 1),
(2, '用户权限', 0),
(3, '游客权限', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `tb_weal_goods`
--

CREATE TABLE `tb_weal_goods` (
  `tb_wgId` int(10) UNSIGNED NOT NULL COMMENT '物资编号',
  `tb_wgUser` int(11) NOT NULL COMMENT '发布者编号',
  `tb_wgType` int(10) UNSIGNED NOT NULL COMMENT '物资类型',
  `tb_wgNum` mediumint(8) UNSIGNED DEFAULT NULL COMMENT '物资数量',
  `tb_wgPrice` int(10) UNSIGNED DEFAULT NULL COMMENT '物资价格',
  `tb_wgRemark` text DEFAULT NULL COMMENT '物资信息备注',
  `tb_wgAddress` varchar(255) NOT NULL COMMENT '需求地址'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='富裕物资表' ROW_FORMAT=DYNAMIC;

--
-- 傾印資料表的資料 `tb_weal_goods`
--

INSERT INTO `tb_weal_goods` (`tb_wgId`, `tb_wgUser`, `tb_wgType`, `tb_wgNum`, `tb_wgPrice`, `tb_wgRemark`, `tb_wgAddress`) VALUES
(1, 1, 1, 5, 5, '救灾食品', '津湾广场12号'),
(2, 2, 2, 5, 200, '达菲', '气象台路12345号'),
(3, 1, 6, 1, 100, '漱口水', '天津市南开大学津南校区5B宿舍');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `userphone` int(11) NOT NULL,
  `userRealName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `uAuthority` int(11) NOT NULL DEFAULT 3,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `userphone`, `userRealName`, `uAuthority`, `verification_token`) VALUES
(1, 'admin1', 'mP9B9koDHIDA_rXMhMvcD8pL9kHch7CK', '$2y$13$Tua5oHIX84.fOk48DFkw4.VcV4ITWyaDca8YL86ia7RBiAI9MQNeu', NULL, '123@qq.com', 10, 1391885313, 1391885313, 123456, '王刚', 1, NULL),
(2, 'admin2', 'Mj-AE8rn3NsgClluQvEJ4Le0J0IFqtYl', '$2y$13$Tua5oHIX84.fOk48DFkw4.VcV4ITWyaDca8YL86ia7RBiAI9MQNeu', NULL, '1234@qq.com', 10, 1391885313, 1391885313, 654321, '李达', 1, NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `contactme`
--
ALTER TABLE `contactme`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `dxyarea`
--
ALTER TABLE `dxyarea`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 資料表索引 `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- 資料表索引 `tb_bulletinboard`
--
ALTER TABLE `tb_bulletinboard`
  ADD PRIMARY KEY (`tb_bId`) USING BTREE;

--
-- 資料表索引 `tb_demand_goods`
--
ALTER TABLE `tb_demand_goods`
  ADD PRIMARY KEY (`tb_dgId`) USING BTREE,
  ADD KEY `tb_dgUser` (`tb_dgUser`) USING BTREE;

--
-- 資料表索引 `tb_goods_type`
--
ALTER TABLE `tb_goods_type`
  ADD PRIMARY KEY (`tb_gtId`) USING BTREE;

--
-- 資料表索引 `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD PRIMARY KEY (`tb_oId`) USING BTREE,
  ADD KEY `tb_orders_ibfk_1` (`tb_ostatus`) USING BTREE,
  ADD KEY `tb_oBuyId` (`tb_oBuyId`) USING BTREE,
  ADD KEY `tb_oSellId` (`tb_oSellId`) USING BTREE;

--
-- 資料表索引 `tb_order_status`
--
ALTER TABLE `tb_order_status`
  ADD PRIMARY KEY (`tb_osId`) USING BTREE;

--
-- 資料表索引 `tb_user_authority`
--
ALTER TABLE `tb_user_authority`
  ADD PRIMARY KEY (`tb_uaId`) USING BTREE;

--
-- 資料表索引 `tb_weal_goods`
--
ALTER TABLE `tb_weal_goods`
  ADD PRIMARY KEY (`tb_wgId`) USING BTREE,
  ADD KEY `tb_wgUser` (`tb_wgUser`) USING BTREE,
  ADD KEY `tb_wgType` (`tb_wgType`) USING BTREE;

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `contactme`
--
ALTER TABLE `contactme`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tb_bulletinboard`
--
ALTER TABLE `tb_bulletinboard`
  MODIFY `tb_bId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '公告编号', AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tb_demand_goods`
--
ALTER TABLE `tb_demand_goods`
  MODIFY `tb_dgId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '需求编号', AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tb_orders`
--
ALTER TABLE `tb_orders`
  MODIFY `tb_oId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '订单编号', AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tb_weal_goods`
--
ALTER TABLE `tb_weal_goods`
  MODIFY `tb_wgId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '物资编号', AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `tb_demand_goods`
--
ALTER TABLE `tb_demand_goods`
  ADD CONSTRAINT `tb_demand_goods_ibfk_1` FOREIGN KEY (`tb_dgUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD CONSTRAINT `tb_orders_ibfk_1` FOREIGN KEY (`tb_ostatus`) REFERENCES `tb_order_status` (`tb_osId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_orders_ibfk_2` FOREIGN KEY (`tb_oBuyId`) REFERENCES `tb_demand_goods` (`tb_dgId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_orders_ibfk_3` FOREIGN KEY (`tb_oSellId`) REFERENCES `tb_weal_goods` (`tb_wgId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `tb_weal_goods`
--
ALTER TABLE `tb_weal_goods`
  ADD CONSTRAINT `tb_weal_goods_ibfk_1` FOREIGN KEY (`tb_wgUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_weal_goods_ibfk_2` FOREIGN KEY (`tb_wgType`) REFERENCES `tb_goods_type` (`tb_gtId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
