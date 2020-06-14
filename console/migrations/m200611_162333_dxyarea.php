<?php

use yii\db\Migration;

/**
 * Class m200611_162333_dxyarea
 */
class m200611_162333_dxyarea extends Migration
{
    /**
     * {@inheritdoc}
     */
   public function safeUp()
    {
		$sql = "CREATE TABLE `dxyarea` (
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
  `currentConfirmedCount` int(255) DEFAULT NULL,
  `confirmedCount` int(255) DEFAULT NULL,
  `suspectedCount` int(255) DEFAULT NULL,
  `curedCount` int(255) DEFAULT NULL,
  `deadCount` int(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `cities` varchar(255) DEFAULT NULL,
  `updateTime` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        $this->db->createCommand($sql)->execute();
		$sql="INSERT INTO `dxyarea` (`id`, `locationId`, `continentName`, `continentEnglishName`, `countryName`, `countryEnglishName`, `countryFullName`, `provinceName`, `provinceEnglishName`, `provinceShortName`, `currentConfirmedCount`, `confirmedCount`, `suspectedCount`, `curedCount`, `deadCount`, `comment`, `cities`, `updateTime`) VALUES
(1, '971002', '北美洲', 'North America', '美国', 'United States of America', 'United States of America', '美国', 'United States of America', '美国', 1440351, 1920061, 0, 525891, 109802, '', NULL, '159203492349'),
(2, '963003', '欧洲', 'Europe', '德国', 'Germany', 'Germany', '德国', 'Germany', '德国', 6832, 183979, 0, 177555, 8668, '', NULL, '159203492349'),
(3, '964003', '欧洲', 'Europe', '拉脱维亚', 'Latvia', 'Latvia', '拉脱维亚', 'Latvia', '拉脱维亚', 652, 1082, 0, 487, 25, '', NULL, '159203492349'),
(4, '951004', '亚洲', 'Asia', '韩国', 'Korea', 'Republic of Korea', '韩国', 'Korea', '韩国', 1046, 11776, 0, 11079, 273, '', NULL, '159203492349'),
(5, '951002', '亚洲', 'Asia', '日本', 'Japan', 'Japan', '日本', 'Japan', '日本', 2026, 17164, 0, 15126, 916, '', NULL, '159203492349'),
(6, '973003', '南美洲', 'South America', '巴西', 'Brazil', 'Brazil', '巴西', 'Brazil', '巴西', 372202, 676494, 0, 317188, 36044, '', NULL, '159203492349'),
(7, '971003', '北美洲', 'North America', '墨西哥', 'Mexico', 'Mexico', '墨西哥', 'Mexico', '墨西哥', 20420, 113619, 0, 85621, 13511, '', NULL, '159203492349'),
(8, '982003', '非洲', 'Africa', '乍得', 'Chad', 'Chad', '乍得', 'Chad', '乍得', 844, 836, 0, 0, 68, '', NULL, '159203492349'),
(9, '0', '北美洲', 'North America', '瓜德罗普岛', NULL, 'Guadeloupe', '瓜德罗普岛', NULL, '瓜德罗普岛', 165, 164, 0, 0, 14, '', NULL, '159203492349'),
(10, '983002', '非洲', 'Africa', '中非共和国', 'Central African Republic', 'Central African Republic', '中非共和国', 'Central African Republic', '中非共和国', 1680, 1570, 0, 38, 5, '', NULL, '159203492349'),
(11, '963004', '欧洲', 'Europe', '匈牙利', 'Hungary', 'Hungary', '匈牙利', 'Hungary', '匈牙利', 1282, 3990, 0, 2392, 545, '', NULL, '159203492349'),
(12, '973008', '南美洲', 'South America', '秘鲁', 'Peru', 'Peru', '秘鲁', 'Peru', '秘鲁', 114098, 191758, 0, 86867, 5301, '', NULL, '159203492349'),
(13, '963008', '欧洲', 'Europe', '瑞士', 'Switzerland', 'Switzerland', '瑞士', 'Switzerland', '瑞士', 735, 30874, 0, 29972, 1660, '', NULL, '159203492349'),
(14, '963006', '欧洲', 'Europe', '波兰', 'Poland', 'Poland', '波兰', 'Poland', '波兰', 12787, 25419, 0, 13273, 1153, '', NULL, '159203492349'),
(15, '0', '亚洲', 'Asia', '蒙古', 'Mongolia', 'Mongolia', '蒙古', 'Mongolia', '蒙古', 183, 191, 0, 25, 0, '', NULL, '159203492349'),
(16, '985002', '非洲', 'Africa', '吉布提', 'Djibouti', 'The Republic of Djibouti', '吉布提', 'Djibouti', '吉布提', 2653, 4123, 0, 1769, 26, '', NULL, '159203492349'),
(17, '965015', '欧洲', 'Europe', '西班牙', 'Spain', 'Spain', '西班牙', 'Spain', '西班牙', 70178, 241310, 0, 157894, 27135, '', NULL, '159203492349'),
(18, '985005', '非洲', 'Africa', '肯尼亚', 'Kenya', 'Kenya', '肯尼亚', 'Kenya', '肯尼亚', 2061, 2600, 0, 675, 83, '', NULL, '159203492349'),
(19, '955019', '亚洲', 'Asia', '阿联酋', 'United Arab Emirates', 'United Arab Emirates', '阿联酋', 'United Arab Emirates', '阿联酋', 18625, 38268, 0, 22114, 275, '', NULL, '159203492349'),
(20, '955008', '亚洲', 'Asia', '伊拉克', 'Iraq', 'Iraq', '伊拉克', 'Iraq', '伊拉克', 6463, 11098, 0, 5149, 318, '', NULL, '159203492349'),
(21, '955015', '亚洲', 'Asia', '卡塔尔', 'Qatar', 'Qatar', '卡塔尔', 'Qatar', '卡塔尔', 27078, 67195, 0, 44653, 51, '', NULL, '159203492349'),
(22, '972002', '北美洲', 'North America', '哥斯达黎加', 'Costa Rica', 'Costa Rica', '哥斯达黎加', 'Costa Rica', '哥斯达黎加', 1302, 1194, 0, 0, 10, '', NULL, '159203492349'),
(23, '965010', '欧洲', 'Europe', '葡萄牙', 'Portugal', 'Portugal', '葡萄牙', 'Portugal', '葡萄牙', 14657, 34351, 0, 20529, 1474, '', NULL, '159203492349'),
(24, '955005', '亚洲', 'Asia', '塞浦路斯', 'Cyprus', 'Cyprus', '塞浦路斯', 'Cyprus', '塞浦路斯', 473, 960, 0, 529, 26, '', NULL, '159203492349'),
(25, '965011', '欧洲', 'Europe', '罗马尼亚', 'Romania', 'Romania', '罗马尼亚', 'Romania', '罗马尼亚', 5008, 20290, 0, 15139, 1318, '', NULL, '159203492349'),
(26, '0', '非洲', 'Africa', '刚果（金）', 'Democratic Republic of the Congo', 'Democratic Republic of the Congo', '刚果（金）', 'Democratic Republic of the Congo', '刚果（金）', 3583, 3877, 0, 563, 82, '', NULL, '159203492349'),
(27, '0', '南美洲', 'South America', '委内瑞拉', 'Venezuela', 'Venezuela', '委内瑞拉', 'Venezuela', '委内瑞拉', 2273, 2087, 0, 0, 20, '', NULL, '159203492349'),
(28, '955002', '亚洲', 'Asia', '亚美尼亚', 'Armenia', 'Armenia', '亚美尼亚', 'Armenia', '亚美尼亚', 9299, 12364, 0, 3906, 190, '', NULL, '159203492349'),
(29, '963002', '欧洲', 'Europe', '捷克', 'Czech Republic', 'Czechia', '捷克', 'Czech Republic', '捷克', 2549, 9529, 0, 7228, 327, '', NULL, '159203492349'),
(30, '984005', '非洲', 'Africa', '马达加斯加', 'Madagascar', 'Madagascar', '马达加斯加', 'Madagascar', '马达加斯加', 886, 1026, 0, 222, 8, '', NULL, '159203492349'),
(31, '953001', '亚洲', 'Asia', '孟加拉国', 'Bangladesh', 'Bangladesh', '孟加拉国', 'Bangladesh', '孟加拉国', 53740, 63026, 0, 13991, 846, '', NULL, '159203492349'),
(32, '981005', '非洲', 'Africa', '苏丹', 'Sudan', 'Sudan', '苏丹', 'Sudan', '苏丹', 3953, 5865, 0, 2020, 347, '', NULL, '159203492349'),
(33, '982011', '非洲', 'Africa', '尼日尔', 'Niger', 'Niger', '尼日尔', 'Niger', '尼日尔', 183, 966, 0, 770, 65, '', NULL, '159203492349'),
(34, '972005', '北美洲', 'North America', '洪都拉斯', 'Honduras', 'Honduras', '洪都拉斯', 'Honduras', '洪都拉斯', 6200, 5880, 0, 0, 243, '', NULL, '159203492349'),
(35, '973011', '南美洲', 'South America', '乌拉圭', 'Uruguay', 'Uruguay', '乌拉圭', 'Uruguay', '乌拉圭', 122, 832, 0, 732, 23, '', NULL, '159203492349'),
(36, '964007', '欧洲', 'Europe', '乌克兰', 'Ukraine', 'Ukraine', '乌克兰', 'Ukraine', '乌克兰', 19978, 26514, 0, 7953, 777, '', NULL, '159203492349'),
(37, '962005', '欧洲', 'Europe', '瑞典', 'Sweden', 'Sweden', '瑞典', 'Sweden', '瑞典', 37686, 43887, 0, 5219, 4656, '', NULL, '159203492349'),
(38, '961003', '欧洲', 'Europe', '爱尔兰', 'Ireland', 'Ireland', '爱尔兰', 'Ireland', '爱尔兰', 2676, 25163, 0, 22113, 1670, '', NULL, '159203492349'),
(39, '954002', '亚洲', 'Asia', '吉尔吉斯斯坦', NULL, 'Kyrgyzstan', '吉尔吉斯斯坦', NULL, '吉尔吉斯斯坦', 1069, 1974, 0, 1029, 22, '', NULL, '159203492349'),
(40, '953007', '亚洲', 'Asia', '斯里兰卡', 'SriLanka', 'Sri Lanka', '斯里兰卡', 'SriLanka', '斯里兰卡', 1046, 1801, 0, 880, 11, '', NULL, '159203492349'),
(41, '954001', '亚洲', 'Asia', '哈萨克斯坦', 'Kazakhstan', 'Kazakhstan', '哈萨克斯坦', 'Kazakhstan', '哈萨克斯坦', 6438, 12511, 0, 6936, 52, '', NULL, '159203492349'),
(42, '982004', '非洲', 'Africa', '科特迪瓦', 'Ivory Coast', 'Cote d Ivoire', '科特迪瓦', 'Ivory Coast', '科特迪瓦', 2035, 3431, 0, 1622, 36, '', NULL, '159203492349'),
(43, '961002', '欧洲', 'Europe', '法国', 'France', 'France', '法国', 'France', '法国', 59054, 153634, 0, 74346, 29142, '', NULL, '159203492349'),
(44, '0', '南美洲', 'South America', '法属圭亚那', 'French Guiana', 'French Guiana', '法属圭亚那', 'French Guiana', '法属圭亚那', 646, 589, 0, 0, 1, '', NULL, '159203492349'),
(45, '965013', '欧洲', 'Europe', '塞尔维亚', 'Republic of Serbia', 'Serbia', '塞尔维亚', 'Republic of Serbia', '塞尔维亚', 745, 12883, 0, 12523, 278, '', NULL, '159203492349'),
(46, '952011', '亚洲', 'Asia', '越南', 'Vietnam', 'Vietnam', '越南', 'Vietnam', '越南', 68, 329, 0, 280, 0, '', NULL, '159203492349'),
(47, '955004', '亚洲', 'Asia', '巴林', 'Bahrain', 'Bahrain', '巴林', 'Bahrain', '巴林', 5699, 14224, 0, 9471, 23, '', NULL, '159203492349'),
(48, '982014', '非洲', 'Africa', '塞内加尔', 'Senegal', 'Senegal', '塞内加尔', 'Senegal', '塞内加尔', 1859, 4249, 0, 2637, 47, '', NULL, '159203492349'),
(49, '0', '欧洲', 'Europe', '北马其顿', 'North Macedonia', 'North Macedonia', '北马其顿', 'North Macedonia', '北马其顿', 1236, 2915, 0, 1722, 151, '', NULL, '159203492349'),
(50, '0', '北美洲', 'North America', '波多黎各', 'Puerto Rico', 'Puerto Rico', '波多黎各', 'Puerto Rico', '波多黎各', 4926, 4620, 0, 0, 141, '', NULL, '159203492349'),
(51, '985004', '非洲', 'Africa', '埃塞俄比亚', 'Ethiopia', 'Ethiopia', '埃塞俄比亚', 'Ethiopia', '埃塞俄比亚', 1796, 1934, 0, 295, 20, '', NULL, '159203492349'),
(52, '953006', '亚洲', 'Asia', '巴基斯坦', 'Pakistan', 'Pakistan', '巴基斯坦', 'Pakistan', '巴基斯坦', 65413, 93983, 0, 34210, 1935, '', NULL, '159203492349'),
(53, '965001', '欧洲', 'Europe', '阿尔巴尼亚', 'Albania', 'Albania', '阿尔巴尼亚', 'Albania', '阿尔巴尼亚', 532, 1232, 0, 749, 34, '', NULL, '159203492349'),
(54, '974004', '北美洲', 'North America', '古巴', 'Cuba', 'Cuba', '古巴', 'Cuba', '古巴', 1677, 2133, 0, 551, 83, '', NULL, '159203492349'),
(55, '963001', '欧洲', 'Europe', '奥地利', 'Austria', 'Austria', '奥地利', 'Austria', '奥地利', 1298, 16803, 0, 15698, 672, '', NULL, '159203492349'),
(56, '965008', '欧洲', 'Europe', '意大利', 'Italy', 'Italy', '意大利', 'Italy', '意大利', 39464, 234801, 0, 173331, 33846, '', NULL, '159203492349'),
(57, '953003', '亚洲', 'Asia', '印度', 'India', 'India', '印度', 'India', '印度', 127536, 236657, 0, 119776, 6642, '', NULL, '159203492349'),
(58, '955001', '亚洲', 'Asia', '阿富汗', 'Afghanistan', 'Afghanistan', '阿富汗', 'Afghanistan', '阿富汗', 19133, 19551, 0, 1921, 327, '', NULL, '159203492349'),
(59, '974006', '北美洲', 'North America', '多米尼加', 'Dominican Republic', 'Dominican Republic', '多米尼加', 'Dominican Republic', '多米尼加', 18909, 18708, 0, 1042, 525, '', NULL, '159203492349'),
(60, '954005', '亚洲', 'Asia', '乌兹别克斯坦', 'Uzbekistan', 'Uzbekstan', '乌兹别克斯坦', 'Uzbekistan', '乌兹别克斯坦', 1507, 4022, 0, 2767, 16, '', NULL, '159203492349'),
(61, '955006', '亚洲', 'Asia', '格鲁吉亚', 'Georgia', 'Georgia', '格鲁吉亚', 'Georgia', '格鲁吉亚', 177, 808, 0, 665, 13, '', NULL, '159203492349'),
(62, '984010', '非洲', 'Africa', '斯威士兰', 'Swaziland', 'Swaziland', '斯威士兰', 'Swaziland', '斯威士兰', 317, 305, 0, 13, 3, '', NULL, '159203492349'),
(63, '964006', '欧洲', 'Europe', '俄罗斯', 'Russia', 'Russian Federation', '俄罗斯', 'Russia', '俄罗斯', 254733, 458689, 0, 232457, 5725, '', NULL, '159203492349'),
(64, '955011', '亚洲', 'Asia', '科威特', 'Kuwait', 'Kuwait', '科威特', 'Kuwait', '科威特', 12754, 31131, 0, 20246, 254, '', NULL, '159203492349'),
(65, '973009', '南美洲', 'South America', '巴拉圭', 'Paraguay', 'Paraguay', '巴拉圭', 'Paraguay', '巴拉圭', 965, 1087, 0, 207, 11, '', NULL, '159203492349'),
(66, '955007', '亚洲', 'Asia', '伊朗', 'Iran', 'Iran (Islamic Republic of)', '伊朗', 'Iran', '伊朗', 32095, 169425, 0, 138639, 8209, '', NULL, '159203492349'),
(67, '955012', '亚洲', 'Asia', '黎巴嫩', 'Lebanon', 'Lebanon', '黎巴嫩', 'Lebanon', '黎巴嫩', 608, 1312, 0, 767, 28, '', NULL, '159203492349'),
(68, '0', '北美洲', 'North America', '开曼群岛', 'Cayman Is', 'Cayman Islands', '开曼群岛', 'Cayman Is', '开曼群岛', 173, 160, 0, 0, 2, '', NULL, '159203492349'),
(69, '973004', '南美洲', 'South America', '智利', 'Chile', 'Chile', '智利', 'Chile', '智利', 89383, 127745, 0, 47193, 1541, '', NULL, '159203492349'),
(70, '973006', '南美洲', 'South America', '厄瓜多尔', 'Ecuador', 'Ecuador', '厄瓜多尔', 'Ecuador', '厄瓜多尔', 37965, 42106, 0, 4200, 3592, '', NULL, '159203492349'),
(71, '981001', '非洲', 'Africa', '阿尔及利亚', 'Algeria', 'Algeria', '阿尔及利亚', 'Algeria', '阿尔及利亚', 2993, 10050, 0, 6962, 698, '', NULL, '159203492349'),
(72, '961004', '欧洲', 'Europe', '卢森堡', 'Luxembourg', 'Luxembourg', '卢森堡', 'Luxembourg', '卢森堡', 146, 4032, 0, 3978, 110, '', NULL, '159203492349'),
(73, '964004', '欧洲', 'Europe', '立陶宛', 'Lithuania', 'Lithuania', '立陶宛', 'Lithuania', '立陶宛', 631, 1694, 0, 1101, 71, '', NULL, '159203492349'),
(74, '983004', '非洲', 'Africa', '加蓬', 'Gabon', 'Gabon', '加蓬', 'Gabon', '加蓬', 2471, 3101, 0, 874, 21, '', NULL, '159203492349'),
(75, '982009', '非洲', 'Africa', '利比里亚', 'Liberia', 'Liberia', '利比里亚', 'Liberia', '利比里亚', 240, 334, 0, 89, 30, '', NULL, '159203492349'),
(76, '981004', '非洲', 'Africa', '摩洛哥', 'Morocco', 'Morocco', '摩洛哥', 'Morocco', '摩洛哥', 710, 8132, 0, 7641, 208, '', NULL, '159203492349'),
(77, '981003', '非洲', 'Africa', '利比亚', 'Libya', 'Libya', '利比亚', 'Libya', '利比亚', 174, 239, 0, 78, 5, '', NULL, '159203492349'),
(78, '0', '非洲', 'Africa', '留尼旺', 'Reunion', 'Réunion', '留尼旺', 'Reunion', '留尼旺', 526, 480, 0, 0, 1, '', NULL, '159203492349'),
(79, '961001', '欧洲', 'Europe', '比利时', 'Belgium', 'Belgium', '比利时', 'Belgium', '比利时', 36718, 59072, 0, 16917, 9580, '', NULL, '159203492349'),
(80, '962001', '欧洲', 'Europe', '丹麦', 'Denmark', 'Denmark', '丹麦', 'Denmark', '丹麦', 1863, 11924, 0, 10125, 587, '', NULL, '159203492349'),
(81, '961007', '欧洲', 'Europe', '英国', 'United Kingdom', 'The United Kingdom', '英国', 'United Kingdom', '英国', 268250, 284868, 0, 565, 40465, '', NULL, '159203492349'),
(82, '974009', '北美洲', 'North America', '牙买加', 'Jamaica', 'Jamaica', '牙买加', 'Jamaica', '牙买加', 639, 591, 0, 0, 10, '', NULL, '159203492349'),
(83, '984011', '非洲', 'Africa', '南非', 'South Africa', 'South Africa', '南非', 'South Africa', '南非', 22839, 45973, 0, 25470, 952, '', NULL, '159203492349'),
(84, '955009', '亚洲', 'Asia', '以色列', 'Israel', 'Israel', '以色列', 'Israel', '以色列', 2656, 17752, 0, 15794, 295, '', NULL, '159203492349'),
(85, '0', '非洲', 'Africa', '马约特', NULL, 'Mayotte', '马约特', NULL, '马约特', 2259, 2079, 0, 0, 25, '', NULL, '159203492349'),
(86, '982016', '非洲', 'Africa', '多哥', 'Togo', 'Togo', '多哥', 'Togo', '多哥', 401, 485, 0, 112, 13, '', NULL, '159203492349'),
(87, '953002', '亚洲', 'Asia', '不丹', 'Kingdom of Bhutan', 'Bhutan', '不丹', 'Kingdom of Bhutan', '不丹', 52, 48, 0, 0, 0, '', NULL, '159203492349'),
(88, '972007', '北美洲', 'North America', '巴拿马', 'Panama', 'Panama', '巴拿马', 'Panama', '巴拿马', 15648, 15044, 0, 477, 363, '', NULL, '159203492349'),
(89, '952010', '亚洲', 'Asia', '泰国', 'Thailand', 'Thailand', '泰国', 'Thailand', '泰国', 85, 3104, 0, 3116, 58, '', NULL, '159203492349'),
(90, '972004', '北美洲', 'North America', '危地马拉', 'Guatemala', 'Guatemala', '危地马拉', 'Guatemala', '危地马拉', 6595, 6154, 0, 0, 158, '', NULL, '159203492349'),
(91, '985006', '非洲', 'Africa', '卢旺达', 'Republic of Rwanda', 'Rwanda', '卢旺达', 'Republic of Rwanda', '卢旺达', 264, 420, 0, 186, 2, '', NULL, '159203492349'),
(92, '955018', '亚洲', 'Asia', '土耳其', 'Turkey', 'Turkey', '土耳其', 'Turkey', '土耳其', 32150, 169218, 0, 142088, 4668, '', NULL, '159203492349'),
(93, '0', '欧洲', 'Europe', '直布罗陀', 'Gibraltar', 'Gibraltar', '直布罗陀', 'Gibraltar', '直布罗陀', 190, 174, 0, 0, 1, '', NULL, '159203492349'),
(94, '983001', '非洲', 'Africa', '喀麦隆', 'Cameroon', 'Cameroon', '喀麦隆', 'Cameroon', '喀麦隆', 5710, 7392, 0, 2095, 205, '', NULL, '159203492349'),
(95, '953005', '亚洲', 'Asia', '尼泊尔', 'Nepal', 'Nepal', '尼泊尔', 'Nepal', '尼泊尔', 3142, 3235, 0, 383, 13, '', NULL, '159203492349'),
(96, '952005', '亚洲', 'Asia', '印度尼西亚', 'Indonesia', 'Indonesia', '印度尼西亚', 'Indonesia', '印度尼西亚', 20686, 30514, 0, 10402, 1801, '', NULL, '159203492349'),
(97, '982006', '非洲', 'Africa', '加纳', 'Ghana', 'Ghana', '加纳', 'Ghana', '加纳', 6458, 9462, 0, 3724, 44, '', NULL, '159203492349'),
(98, '974011', '北美洲', 'North America', '圣卢西亚', 'St.Lucia', 'Saint Lucia', '圣卢西亚', 'St.Lucia', '圣卢西亚', 20, 19, 0, 0, 0, '', NULL, '159203492349'),
(99, '971001', '北美洲', 'North America', '加拿大', 'Canada', 'Canada', '加拿大', 'Canada', '加拿大', 39099, 95057, 0, 54325, 7773, '', NULL, '159203492349'),
(100, '955013', '亚洲', 'Asia', '阿曼', 'Oman', 'Oman', '阿曼', 'Oman', '阿曼', 13742, 16016, 0, 3623, 72, '', NULL, '159203492349'),
(101, '973001', '南美洲', 'South America', '阿根廷', 'Argentina', 'Argentina', '阿根廷', 'Argentina', '阿根廷', 15748, 21037, 0, 6392, 632, '', NULL, '159203492349'),
(102, '985010', '非洲', 'Africa', '乌干达', 'Uganda', 'Uganda', '乌干达', 'Uganda', '乌干达', 667, 686, 0, 82, 0, '', NULL, '159203492349'),
(103, '955016', '亚洲', 'Asia', '沙特阿拉伯', 'Saudi Arabia', 'Saudi Arabia', '沙特阿拉伯', 'Saudi Arabia', '沙特阿拉伯', 29042, 98869, 0, 75380, 676, '', NULL, '159203492349'),
(104, '952008', '亚洲', 'Asia', '菲律宾', 'Philippines', 'Philippines', '菲律宾', 'Philippines', '菲律宾', 17495, 21340, 0, 4663, 994, '', NULL, '159203492349'),
(105, '973005', '南美洲', 'South America', '哥伦比亚', 'Colombia', 'Colombia', '哥伦比亚', 'Colombia', '哥伦比亚', 24684, 38027, 0, 15101, 1205, '', NULL, '159203492349'),
(106, '965004', '欧洲', 'Europe', '保加利亚', 'Bulgaria', 'Bulgaria', '保加利亚', 'Bulgaria', '保加利亚', 1959, 2668, 0, 763, 160, '', NULL, '159203492349'),
(107, '952007', '亚洲', 'Asia', '马来西亚', 'Malaysia', 'Malaysia', '马来西亚', 'Malaysia', '马来西亚', 1750, 8266, 0, 6886, 116, '', NULL, '159203492349'),
(108, '982017', '非洲', 'Africa', '佛得角', NULL, 'Cabo Verde', '佛得角', NULL, '佛得角', 535, 536, 0, 46, 5, '', NULL, '159203492349'),
(109, '984014', '非洲', 'Africa', '毛里求斯', 'Mauritius', 'Mauritius', '毛里求斯', 'Mauritius', '毛里求斯', 5, 337, 0, 338, 10, '', NULL, '159203492349'),
(110, '955003', '亚洲', 'Asia', '阿塞拜疆', 'Azerbaijan', 'Azerbaijan', '阿塞拜疆', 'Azerbaijan', '阿塞拜疆', 3444, 7239, 0, 4225, 84, '', NULL, '159203492349'),
(111, '0', '非洲', 'Africa', '刚果（布）', NULL, 'Congo', '刚果（布）', NULL, '刚果（布）', 484, 639, 0, 187, 20, '', NULL, '159203492349'),
(112, '972003', '北美洲', 'North America', '萨尔瓦多', 'El Salvador', 'The Republic of El Salvador', '萨尔瓦多', 'El Salvador', '萨尔瓦多', 3075, 2849, 0, 0, 53, '', NULL, '159203492349'),
(113, '953004', '亚洲', 'Asia', '马尔代夫', 'Maldives', 'Maldives', '马尔代夫', 'Maldives', '马尔代夫', 1274, 1883, 0, 752, 7, '', NULL, '159203492349'),
(114, '0', '亚洲', 'Asia', '也门共和国', NULL, 'The Republic of Yemen', '也门共和国', NULL, '也门共和国', 368, 473, 0, 27, 112, '', NULL, '159203492349'),
(115, '952009', '亚洲', 'Asia', '新加坡', 'Singapore', 'Singapore', '新加坡', 'Singapore', '新加坡', 16540, 37527, 0, 23589, 24, '', NULL, '159203492349'),
(116, '974008', '北美洲', 'North America', '海地', 'Haiti', 'The Republic of Haiti', '海地', 'Haiti', '海地', 2849, 2640, 0, 0, 50, '', NULL, '159203492349'),
(117, '981002', '非洲', 'Africa', '埃及', 'Egypt', 'Egypt', '埃及', 'Egypt', '埃及', 25163, 32612, 0, 8964, 1198, '', NULL, '159203492349'),
(118, '982015', '非洲', 'Africa', '塞拉利昂', 'Sierra Leone', 'Sierra Leone', '塞拉利昂', 'Sierra Leone', '塞拉利昂', 744, 929, 0, 215, 47, '', NULL, '159203492349'),
(119, '961006', '欧洲', 'Europe', '荷兰', 'Netherlands', 'Netherlands', '荷兰', 'Netherlands', '荷兰', 32496, 47335, 0, 12371, 6011, '', NULL, '159203492349'),
(120, '973002', '南美洲', 'South America', '玻利维亚', 'Bolivia', 'Bolivia (Plurinational State of)', '玻利维亚', 'Bolivia', '玻利维亚', 12838, 12245, 0, 166, 415, '', NULL, '159203492349');
";
		$this->db->createCommand($sql)->execute();
		$sql="ALTER TABLE `dxyarea`
  ADD PRIMARY KEY (`id`);";
		$this->db->createCommand($sql)->execute();
		$sql="ALTER TABLE `dxyarea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;";
		$this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dxyarea}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200611_162333_dxyarea cannot be reverted.\n";

        return false;
    }
    */
}
