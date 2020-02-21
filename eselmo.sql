-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 20, 2020 at 10:25 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eselmo`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `barangay` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `address`, `zipcode`, `country_id`, `city_id`, `barangay`, `created_at`, `updated_at`) VALUES
(6, 1, '#2 Barcena St., Central Signal Village Taguig City', NULL, NULL, NULL, NULL, '2020-02-03 23:38:00', '2020-02-03 23:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agencies`
--

INSERT INTO `agencies` (`id`, `name`, `address`, `contact_no`, `created_at`, `updated_at`) VALUES
(1, 'Agency one', 'manila', '123456', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apps_cities`
--

CREATE TABLE `apps_cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apps_countries`
--

CREATE TABLE `apps_countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apps_countries`
--

INSERT INTO `apps_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `province_id` int(11) UNSIGNED NOT NULL,
  `zipcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `province_id`, `zipcode`) VALUES
(1, 'Bangued', 1, '2800'),
(2, 'Boliney', 1, '2815'),
(3, 'Bucay', 1, '2805'),
(4, 'Bucloc', 1, '2817'),
(5, 'Daguioman', 1, '2816'),
(6, 'Danglas', 1, '2825'),
(7, 'Dolores', 1, '2801'),
(8, 'La Paz', 1, '2826'),
(9, 'Lacub', 1, '2821'),
(10, 'Lagangilang', 1, '2902'),
(11, 'Lagayan', 1, '2824'),
(12, 'Langiden', 1, '2807'),
(13, 'Licuan-Baay', 1, ''),
(14, 'Luba', 1, '2813'),
(15, 'Malibcong', 1, '2820'),
(16, 'Manabo', 1, '2810'),
(17, 'Peñarrubia', 1, ''),
(18, 'Pidigan', 1, '2806'),
(19, 'Pilar', 1, '2812'),
(20, 'Sallapadan', 1, '2818'),
(21, 'San Isidro', 1, '2809'),
(22, 'San Juan', 1, '2823'),
(23, 'San Quintin', 1, '2808'),
(24, 'Tayum', 1, '2803'),
(25, 'Tineg', 1, '2822'),
(26, 'Tubo', 1, '2814'),
(27, 'Villaviciosa', 1, '2811'),
(28, 'Butuan City', 2, '8600'),
(29, 'Buenavista', 2, '8601'),
(30, 'Cabadbaran', 2, '8605'),
(31, 'Carmen', 2, '8603'),
(32, 'Jabonga', 2, '8607'),
(33, 'Kitcharao', 2, '8609'),
(34, 'Las Nieves', 2, '8610'),
(35, 'Magallanes', 2, '8604'),
(36, 'Nasipit', 2, '8602'),
(37, 'Remedios T. Romualdez', 2, '8611'),
(38, 'Santiago', 2, '8608'),
(39, 'Tubay', 2, '8606'),
(40, 'Bayugan', 3, '8502'),
(41, 'Bunawan', 3, '8506'),
(42, 'Esperanza', 3, '8513'),
(43, 'La Paz', 3, '8508'),
(44, 'Loreto', 3, '8507'),
(45, 'Prosperidad', 3, '8500'),
(46, 'Rosario', 3, '8504'),
(47, 'San Francisco', 3, '8501'),
(48, 'San Luis', 3, '8511'),
(49, 'Santa Josefa', 3, '8512'),
(50, 'Sibagat', 3, '8503'),
(51, 'Talacogon', 3, '8510'),
(52, 'Trento', 3, '8505'),
(53, 'Veruela', 3, '8509'),
(54, 'Altavas', 4, '5616'),
(55, 'Balete', 4, ''),
(56, 'Banga', 4, '5601'),
(57, 'Batan', 4, '5615'),
(58, 'Buruanga', 4, '5609'),
(59, 'Ibajay', 4, '5613'),
(60, 'Kalibo', 4, '5600'),
(61, 'Lezo', 4, '5605'),
(62, 'Libacao', 4, '5602'),
(63, 'Madalag', 4, '5603'),
(64, 'Makato', 4, '5611'),
(65, 'Malay', 4, '5608'),
(66, 'Malinao', 4, '5606'),
(67, 'Nabas', 4, '5607'),
(68, 'New Washington', 4, '5610'),
(69, 'Numancia', 4, '5604'),
(70, 'Tangalan', 4, '5612'),
(71, 'Legazpi City', 5, '4500'),
(72, 'Ligao City', 5, '4504'),
(73, 'Tabaco City', 5, '4511'),
(74, 'Bacacay', 5, '4509'),
(75, 'Camalig', 5, '4502'),
(76, 'Daraga', 5, '4501'),
(77, 'Guinobatan', 5, '4503'),
(78, 'Jovellar', 5, '4515'),
(79, 'Libon', 5, '4507'),
(80, 'Malilipot', 5, '4510'),
(81, 'Malinao', 5, '4512'),
(82, 'Manito', 5, '4514'),
(83, 'Oas', 5, '4505'),
(84, 'Pio Duran', 5, '4516'),
(85, 'Polangui', 5, '4506'),
(86, 'Rapu-Rapu', 5, '4517'),
(87, 'Santo Domingo', 5, '4508'),
(88, 'Tiwi', 5, '4513'),
(89, 'Anini-y', 6, '5717'),
(90, 'Barbaza', 6, '5706'),
(91, 'Belison', 6, '5701'),
(92, 'Bugasong', 6, '5704'),
(93, 'Caluya', 6, '5711'),
(94, 'Culasi', 6, '5708'),
(95, 'Hamtic', 6, '5715'),
(96, 'Laua-an', 6, '5705'),
(97, 'Libertad', 6, '5710'),
(98, 'Pandan', 6, '5712'),
(99, 'Patnongon', 6, '5702'),
(100, 'San Jose', 6, '6202'),
(101, 'San Remigio', 6, '6011'),
(102, 'Sebaste', 6, '5709'),
(103, 'Sibalom', 6, '5713'),
(104, 'Tibiao', 6, '5707'),
(105, 'Tobias Fornier', 6, '5716'),
(106, 'Valderrama', 6, '5703'),
(107, 'Calanasan', 7, '3814'),
(108, 'Conner', 7, '3807'),
(109, 'Flora', 7, '3810'),
(110, 'Kabugao', 7, '3809'),
(111, 'Luna', 7, '3813'),
(112, 'Pudtol', 7, '3812'),
(113, 'Santa Marcela', 7, '3811'),
(114, 'Baler', 8, '3200'),
(115, 'Casiguran', 8, '3204'),
(116, 'Dilasag', 8, '3205'),
(117, 'Dinalungan', 8, '3206'),
(118, 'Dingalan', 8, '3207'),
(119, 'Dipaculao', 8, '3203'),
(120, 'Maria Aurora', 8, '3202'),
(121, 'San Luis', 8, '3201'),
(122, 'Isabela City', 9, '7300'),
(123, 'Akbar', 9, ''),
(124, 'Al-Barka', 9, ''),
(125, 'Hadji Mohammad Ajul', 9, ''),
(126, 'Hadji Muhtamad', 9, ''),
(127, 'Lamitan', 9, '7302'),
(128, 'Lantawan', 9, '7301'),
(129, 'Maluso', 9, '7303'),
(130, 'Sumisip', 9, '7305'),
(131, 'Tabuan-Lasa', 9, ''),
(132, 'Tipo-Tipo', 9, '7304'),
(133, 'Tuburan', 9, '7306'),
(134, 'Ungkaya Pukan', 9, ''),
(135, 'Balanga City', 10, '2100'),
(136, 'Abucay', 10, '2114'),
(137, 'Bagac', 10, '2107'),
(138, 'Dinalupihan', 10, '2110'),
(139, 'Hermosa', 10, '2111'),
(140, 'Limay', 10, '2103'),
(141, 'Mariveles', 10, '2106'),
(142, 'Morong', 10, '2108'),
(143, 'Orani', 10, '2112'),
(144, 'Orion', 10, '2102'),
(145, 'Pilar', 10, '2101'),
(146, 'Samal', 10, '2113'),
(147, 'Basco', 11, '3900'),
(148, 'Itbayat', 11, '3905'),
(149, 'Ivana', 11, '3902'),
(150, 'Mahatao', 11, '3901'),
(151, 'Sabtang', 11, '3904'),
(152, 'Uyugan', 11, '3903'),
(153, 'Batangas City', 12, '4200'),
(154, 'Lipa City', 12, '4217'),
(155, 'Tanauan City', 12, '4232'),
(156, 'Agoncillo', 12, '4211'),
(157, 'Alitagtag', 12, '4205'),
(158, 'Balayan', 12, '4213'),
(159, 'Balete', 12, ''),
(160, 'Bauan', 12, '4201'),
(161, 'Calaca', 12, '4212'),
(162, 'Calatagan', 12, '4215'),
(163, 'Cuenca', 12, '4222'),
(164, 'Ibaan', 12, '4230'),
(165, 'Laurel', 12, '4221'),
(166, 'Lemery', 12, '4209'),
(167, 'Lian', 12, '4216'),
(168, 'Lobo', 12, '4229'),
(169, 'Mabini', 12, '4202'),
(170, 'Malvar', 12, '4233'),
(171, 'Mataas na Kahoy', 12, '4223'),
(172, 'Nasugbu', 12, '4231'),
(173, 'Padre Garcia', 12, '4224'),
(174, 'Rosario', 12, '4225'),
(175, 'San Jose', 12, '4227'),
(176, 'San Juan', 12, '4226'),
(177, 'San Luis', 12, '4210'),
(178, 'San Nicolas', 12, '4207'),
(179, 'San Pascual', 12, '4204'),
(180, 'Santa Teresita', 12, '4206'),
(181, 'Santo Tomas', 12, '4234'),
(182, 'Taal', 12, '4208'),
(183, 'Talisay', 12, '4220'),
(184, 'Taysan', 12, '4228'),
(185, 'Tingloy', 12, '4203'),
(186, 'Tuy', 12, '4214'),
(187, 'Baguio City', 13, '2600'),
(188, 'Atok', 13, '2612'),
(189, 'Bakun', 13, '2610'),
(190, 'Bokod', 13, '2605'),
(191, 'Buguias', 13, '2607'),
(192, 'Itogon', 13, '2604'),
(193, 'Kabayan', 13, '2606'),
(194, 'Kapangan', 13, '2613'),
(195, 'Kibungan', 13, '2611'),
(196, 'La Trinidad', 13, '2601'),
(197, 'Mankayan', 13, '2608'),
(198, 'Sablan', 13, '2614'),
(199, 'Tuba', 13, '2603'),
(200, 'Tublay', 13, '2615'),
(201, 'Almeria', 14, '6544'),
(202, 'Biliran', 14, '6544'),
(203, 'Cabucgayan', 14, '6550'),
(204, 'Caibiran', 14, '6548'),
(205, 'Culaba', 14, '6547'),
(206, 'Kawayan', 14, '6545'),
(207, 'Maripipi', 14, '6546'),
(208, 'Naval', 14, '6543'),
(209, 'Tagbilaran City', 15, '6300'),
(210, 'Alburquerque', 15, ''),
(211, 'Alicia', 15, '6314'),
(212, 'Anda', 15, '6311'),
(213, 'Antequera', 15, '6335'),
(214, 'Baclayon', 15, '6301'),
(215, 'Balilihan', 15, '6342'),
(216, 'Batuan', 15, '6318'),
(217, 'Bien Unido', 15, '6326'),
(218, 'Bilar', 15, '6317'),
(219, 'Buenavista', 15, '6333'),
(220, 'Calape', 15, '6328'),
(221, 'Candijay', 15, '6312'),
(222, 'Carmen', 15, '6319'),
(223, 'Catigbian', 15, '6343'),
(224, 'Clarin', 15, '6330'),
(225, 'Corella', 15, '6337'),
(226, 'Cortes', 15, ''),
(227, 'Dagohoy', 15, '6322'),
(228, 'Danao', 15, '6344'),
(229, 'Dauis', 15, '6339'),
(230, 'Dimiao', 15, '6305'),
(231, 'Duero', 15, '6309'),
(232, 'Garcia Hernandez', 15, '6307'),
(233, 'Getafe', 15, ''),
(234, 'Guindulman', 15, '6310'),
(235, 'Inabanga', 15, '6332'),
(236, 'Jagna', 15, '6308'),
(237, 'Lila', 15, '6304'),
(238, 'Loay', 15, '6303'),
(239, 'Loboc', 15, '6316'),
(240, 'Loon', 15, '6327'),
(241, 'Mabini', 15, '6313'),
(242, 'Maribojoc', 15, '6336'),
(243, 'Panglao', 15, '6340'),
(244, 'Pilar', 15, '6321'),
(245, 'President Carlos P. Garcia', 15, ''),
(246, 'Sagbayan', 15, '6331'),
(247, 'San Isidro', 15, '6345'),
(248, 'San Miguel', 15, '6323'),
(249, 'Sevilla', 15, '6347'),
(250, 'Sierra Bullones', 15, '6320'),
(251, 'Sikatuna', 15, '6338'),
(252, 'Talibon', 15, '6325'),
(253, 'Trinidad', 15, '6324'),
(254, 'Tubigon', 15, '6329'),
(255, 'Ubay', 15, '6315'),
(256, 'Valencia', 15, '6306'),
(257, 'Malaybalay City', 16, '8700'),
(258, 'Valencia City', 16, '8709'),
(259, 'Baungon', 16, '8707'),
(260, 'Cabanglasan', 16, '8723'),
(261, 'Damulog', 16, '8721'),
(262, 'Dangcagan', 16, '8719'),
(263, 'Don Carlos', 16, '8712'),
(264, 'Impasug-ong', 16, '8702'),
(265, 'Kadingilan', 16, '8713'),
(266, 'Kalilangan', 16, '8718'),
(267, 'Kibawe', 16, '8720'),
(268, 'Kitaotao', 16, '8716'),
(269, 'Lantapan', 16, '8722'),
(270, 'Libona', 16, '8706'),
(271, 'Malitbog', 16, '8704'),
(272, 'Manolo Fortich', 16, '8703'),
(273, 'Maramag', 16, '8714'),
(274, 'Pangantucan', 16, '8717'),
(275, 'Quezon', 16, '8715'),
(276, 'San Fernando', 16, '8711'),
(277, 'Sumilao', 16, '8701'),
(278, 'Talakag', 16, '8708'),
(279, 'Malolos City', 17, '3000'),
(280, 'Meycauayan City', 17, '3020'),
(281, 'San Jose del Monte City', 17, '3023'),
(282, 'Angat', 17, '3012'),
(283, 'Balagtas', 17, '3016'),
(284, 'Baliuag', 17, '3006'),
(285, 'Bocaue', 17, '3018'),
(286, 'Bulacan', 17, '3012'),
(287, 'Bustos', 17, '3007'),
(288, 'Calumpit', 17, '3003'),
(289, 'Doña Remedios Trinidad', 17, ''),
(290, 'Guiguinto', 17, '3015'),
(291, 'Hagonoy', 17, '3002'),
(292, 'Marilao', 17, '3019'),
(293, 'Norzagaray', 17, '3013'),
(294, 'Obando', 17, '3021'),
(295, 'Pandi', 17, '3014'),
(296, 'Paombong', 17, '3001'),
(297, 'Plaridel', 17, '3004'),
(298, 'Pulilan', 17, '3005'),
(299, 'San Ildefonso', 17, '3010'),
(300, 'San Miguel', 17, '3011'),
(301, 'San Rafael', 17, '3008'),
(302, 'Santa Maria', 17, '3022'),
(303, 'Tuguegarao City', 18, '3500'),
(304, 'Abulug', 18, '3517'),
(305, 'Alcala', 18, '3507'),
(306, 'Allacapan', 18, '3523'),
(307, 'Amulung', 18, '3505'),
(308, 'Aparri', 18, '3515'),
(309, 'Baggao', 18, '3506'),
(310, 'Ballesteros', 18, '3516'),
(311, 'Buguey', 18, '3511'),
(312, 'Calayan', 18, '3520'),
(313, 'Camalaniugan', 18, '3510'),
(314, 'Claveria', 18, '3519'),
(315, 'Enrile', 18, '3501'),
(316, 'Gattaran', 18, '3508'),
(317, 'Gonzaga', 18, '3513'),
(318, 'Iguig', 18, '3504'),
(319, 'Lal-lo', 18, '3509'),
(320, 'Lasam', 18, '3524'),
(321, 'Pamplona', 18, '3522'),
(322, 'Peñablanca', 18, '3502'),
(323, 'Piat', 18, '3527'),
(324, 'Rizal', 18, '3526'),
(325, 'Sanchez-Mira', 18, ''),
(326, 'Santa Ana', 18, '3514'),
(327, 'Santa Praxedes', 18, '3521'),
(328, 'Santa Teresita', 18, '3512'),
(329, 'Santo Niño', 18, '3525'),
(330, 'Solana', 18, '3503'),
(331, 'Tuao', 18, '3528'),
(332, 'Basud', 19, '4608'),
(333, 'Capalonga', 19, '4607'),
(334, 'Daet', 19, '4600'),
(335, 'Jose Panganiban', 19, '4606'),
(336, 'Labo', 19, '4604'),
(337, 'Mercedes', 19, '4601'),
(338, 'Paracale', 19, '4605'),
(339, 'San Lorenzo Ruiz', 19, '4610'),
(340, 'San Vicente', 19, '4609'),
(341, 'Santa Elena', 19, '4611'),
(342, 'Talisay', 19, '4602'),
(343, 'Vinzons', 19, '4603'),
(344, 'Iriga City', 20, '4431'),
(345, 'Naga City', 20, '4400'),
(346, 'Baao', 20, '4432'),
(347, 'Balatan', 20, '4436'),
(348, 'Bato', 20, '4435'),
(349, 'Bombon', 20, '4404'),
(350, 'Buhi', 20, '4433'),
(351, 'Bula', 20, '4430'),
(352, 'Cabusao', 20, '4406'),
(353, 'Calabanga', 20, '4405'),
(354, 'Camaligan', 20, '4401'),
(355, 'Canaman', 20, '4402'),
(356, 'Caramoan', 20, '4429'),
(357, 'Del Gallego', 20, '4411'),
(358, 'Gainza', 20, '4412'),
(359, 'Garchitorena', 20, '4428'),
(360, 'Goa', 20, '4422'),
(361, 'Lagonoy', 20, '4425'),
(362, 'Libmanan', 20, '4407'),
(363, 'Lupi', 20, '4409'),
(364, 'Magarao', 20, '4403'),
(365, 'Milaor', 20, '4413'),
(366, 'Minalabac', 20, '4414'),
(367, 'Nabua', 20, '4434'),
(368, 'Ocampo', 20, '4419'),
(369, 'Pamplona', 20, '4416'),
(370, 'Pasacao', 20, '4417'),
(371, 'Pili', 20, '4418'),
(372, 'Presentacion', 20, '4424'),
(373, 'Ragay', 20, '4410'),
(374, 'Sagñay', 20, '4421'),
(375, 'San Fernando', 20, '4415'),
(376, 'San Jose', 20, '4423'),
(377, 'Sipocot', 20, '4408'),
(378, 'Siruma', 20, '4427'),
(379, 'Tigaon', 20, '4420'),
(380, 'Tinambac', 20, '4426'),
(381, 'Catarman', 21, '9104'),
(382, 'Guinsiliban', 21, '9102'),
(383, 'Mahinog', 21, '9101'),
(384, 'Mambajao', 21, '9100'),
(385, 'Sagay', 21, '9103'),
(386, 'Roxas City', 22, '5800'),
(387, 'Cuartero', 22, '5811'),
(388, 'Dao', 22, '5810'),
(389, 'Dumalag', 22, '5813'),
(390, 'Dumarao', 22, '5812'),
(391, 'Ivisan', 22, '5805'),
(392, 'Jamindan', 22, '5808'),
(393, 'Ma-ayon', 22, '5809'),
(394, 'Mambusao', 22, '5807'),
(395, 'Panay', 22, '5801'),
(396, 'Panitan', 22, '5815'),
(397, 'Pilar', 22, '5804'),
(398, 'Pontevedra', 22, '5802'),
(399, 'President Roxas', 22, '5803'),
(400, 'Sapi-an', 22, ''),
(401, 'Sigma', 22, '5816'),
(402, 'Tapaz', 22, '5814'),
(403, 'Bagamanoc', 23, '4807'),
(404, 'Baras', 23, '4803'),
(405, 'Bato', 23, '4801'),
(406, 'Caramoran', 23, '4808'),
(407, 'Gigmoto', 23, '4804'),
(408, 'Pandan', 23, '4809'),
(409, 'Panganiban', 23, '4806'),
(410, 'San Andres', 23, '4810'),
(411, 'San Miguel', 23, '4802'),
(412, 'Viga', 23, '4805'),
(413, 'Virac', 23, '4800'),
(414, 'Cavite City', 24, '4100'),
(415, 'Dasmariñas City', 24, '4114'),
(416, 'Tagaytay City', 24, '4120'),
(417, 'Trece Martires City', 24, '4109'),
(418, 'Alfonso', 24, '4123'),
(419, 'Amadeo', 24, '4119'),
(420, 'Bacoor', 24, '4102'),
(421, 'Carmona', 24, '4116'),
(422, 'General Mariano Alvarez', 24, '4117'),
(423, 'General Emilio Aguinaldo', 24, '4124'),
(424, 'General Trias', 24, '4107'),
(425, 'Imus', 24, '4103'),
(426, 'Indang', 24, '4122'),
(427, 'Kawit', 24, '4104'),
(428, 'Magallanes', 24, '4113'),
(429, 'Maragondon', 24, '4112'),
(430, 'Mendez', 24, '4121'),
(431, 'Naic', 24, '4110'),
(432, 'Noveleta', 24, '4105'),
(433, 'Rosario', 24, '4106'),
(434, 'Silang', 24, '4118'),
(435, 'Tanza', 24, '4108'),
(436, 'Ternate', 24, '4111'),
(437, 'Bogo City', 25, '6010'),
(438, 'Cebu City', 25, '6000'),
(439, 'Carcar City', 25, '6019'),
(440, 'Danao City', 25, '6004'),
(441, 'Lapu-Lapu City', 25, '6015'),
(442, 'Mandaue City', 25, '6014'),
(443, 'Naga City', 25, '6037'),
(444, 'Talisay City', 25, '6045'),
(445, 'Toledo City', 25, '6038'),
(446, 'Alcantara', 25, '6033'),
(447, 'Alcoy', 25, '6023'),
(448, 'Alegria', 25, '6030'),
(449, 'Aloguinsan', 25, '6040'),
(450, 'Argao', 25, '6021'),
(451, 'Asturias', 25, '6042'),
(452, 'Badian', 25, '6031'),
(453, 'Balamban', 25, '6041'),
(454, 'Bantayan', 25, '6052'),
(455, 'Barili', 25, '6036'),
(456, 'Boljoon', 25, '6024'),
(457, 'Borbon', 25, '6008'),
(458, 'Carmen', 25, '6005'),
(459, 'Catmon', 25, '6006'),
(460, 'Compostela', 25, '6003'),
(461, 'Consolacion', 25, '6001'),
(462, 'Cordoba', 25, ''),
(463, 'Daanbantayan', 25, '6013'),
(464, 'Dalaguete', 25, '6022'),
(465, 'Dumanjug', 25, '6035'),
(466, 'Ginatilan', 25, '6028'),
(467, 'Liloan', 25, '6002'),
(468, 'Madridejos', 25, '6053'),
(469, 'Malabuyoc', 25, '6029'),
(470, 'Medellin', 25, '6012'),
(471, 'Minglanilla', 25, '6046'),
(472, 'Moalboal', 25, '6032'),
(473, 'Oslob', 25, '6025'),
(474, 'Pilar', 25, '6048'),
(475, 'Pinamungahan', 25, '6039'),
(476, 'Poro', 25, '6049'),
(477, 'Ronda', 25, '6034'),
(478, 'Samboan', 25, '6027'),
(479, 'San Fernando', 25, '6018'),
(480, 'San Francisco', 25, '6050'),
(481, 'San Remigio', 25, '6011'),
(482, 'Santa Fe', 25, '6047'),
(483, 'Santander', 25, '6026'),
(484, 'Sibonga', 25, '6020'),
(485, 'Sogod', 25, '6007'),
(486, 'Tabogon', 25, '6009'),
(487, 'Tabuelan', 25, '6044'),
(488, 'Tuburan', 25, '6043'),
(489, 'Tudela', 25, '6051'),
(490, 'Compostela', 26, '9413'),
(491, 'Laak', 26, ''),
(492, 'Mabini', 26, ''),
(493, 'Maco', 26, ''),
(494, 'Maragusan', 26, ''),
(495, 'Mawab', 26, ''),
(496, 'Monkayo', 26, ''),
(497, 'Montevista', 26, ''),
(498, 'Nabunturan', 26, ''),
(499, 'New Bataan', 26, ''),
(500, 'Pantukan', 26, ''),
(501, 'Kidapawan City', 27, '9400'),
(502, 'Alamada', 27, '9413'),
(503, 'Aleosan', 27, '9415'),
(504, 'Antipas', 27, '9414'),
(505, 'Arakan', 27, '9417'),
(506, 'Banisilan', 27, '9416'),
(507, 'Carmen', 27, '9408'),
(508, 'Kabacan', 27, '9407'),
(509, 'Libungan', 27, '9411'),
(510, 'M\'lang', 27, '9402'),
(511, 'Magpet', 27, '9404'),
(512, 'Makilala', 27, '9401'),
(513, 'Matalam', 27, '9406'),
(514, 'Midsayap', 27, '9410'),
(515, 'Pigkawayan', 27, '9412'),
(516, 'Pikit', 27, '9409'),
(517, 'President Roxas', 27, '9405'),
(518, 'Tulunan', 27, '9403'),
(519, 'Panabo City', 28, ''),
(520, 'Island Garden City of Samal', 28, ''),
(521, 'Tagum City', 28, ''),
(522, 'Asuncion', 28, ''),
(523, 'Braulio E. Dujali', 28, ''),
(524, 'Carmen', 28, '9408'),
(525, 'Kapalong', 28, ''),
(526, 'New Corella', 28, ''),
(527, 'San Isidro', 28, '8421'),
(528, 'Santo Tomas', 28, ''),
(529, 'Talaingod', 28, ''),
(530, 'Davao City', 29, '9413'),
(531, 'Digos City', 29, ''),
(532, 'Bansalan', 29, ''),
(533, 'Don Marcelino', 29, ''),
(534, 'Hagonoy', 29, ''),
(535, 'Jose Abad Santos', 29, ''),
(536, 'Kiblawan', 29, ''),
(537, 'Magsaysay', 29, ''),
(538, 'Malalag', 29, ''),
(539, 'Malita', 29, ''),
(540, 'Matanao', 29, ''),
(541, 'Padada', 29, ''),
(542, 'Santa Cruz', 29, ''),
(543, 'Santa Maria', 29, ''),
(544, 'Sarangani', 29, '9501'),
(545, 'Sulop', 29, ''),
(546, 'Mati City', 30, ''),
(547, 'Baganga', 30, ''),
(548, 'Banaybanay', 30, ''),
(549, 'Boston', 30, ''),
(550, 'Caraga', 30, ''),
(551, 'Cateel', 30, ''),
(552, 'Governor Generoso', 30, ''),
(553, 'Lupon', 30, ''),
(554, 'Manay', 30, ''),
(555, 'San Isidro', 30, '8421'),
(556, 'Tarragona', 30, ''),
(557, 'Arteche', 31, '6822'),
(558, 'Balangiga', 31, '6812'),
(559, 'Balangkayan', 31, '6801'),
(560, 'Borongan', 31, '6800'),
(561, 'Can-avid', 31, '6806'),
(562, 'Dolores', 31, '6817'),
(563, 'General MacArthur', 31, '6805'),
(564, 'Giporlos', 31, '6811'),
(565, 'Guiuan', 31, '6809'),
(566, 'Hernani', 31, '6804'),
(567, 'Jipapad', 31, '6819'),
(568, 'Lawaan', 31, '6813'),
(569, 'Llorente', 31, '6803'),
(570, 'Maslog', 31, '6820'),
(571, 'Maydolong', 31, '6802'),
(572, 'Mercedes', 31, '6808'),
(573, 'Oras', 31, '6818'),
(574, 'Quinapondan', 31, ''),
(575, 'Salcedo', 31, '6807'),
(576, 'San Julian', 31, '6814'),
(577, 'San Policarpo', 31, '6821'),
(578, 'Sulat', 31, '6815'),
(579, 'Taft', 31, '6816'),
(580, 'Buenavista', 32, '5044'),
(581, 'Jordan', 32, '5045'),
(582, 'Nueva Valencia', 32, '5046'),
(583, 'San Lorenzo', 32, ''),
(584, 'Sibunag', 32, ''),
(585, 'Aguinaldo', 33, '3606'),
(586, 'Alfonso Lista', 33, ''),
(587, 'Asipulo', 33, '3610'),
(588, 'Banaue', 33, '3601'),
(589, 'Hingyon', 33, '3607'),
(590, 'Hungduan', 33, '3603'),
(591, 'Kiangan', 33, '3604'),
(592, 'Lagawe', 33, '3600'),
(593, 'Lamut', 33, '3605'),
(594, 'Mayoyao', 33, '3602'),
(595, 'Tinoc', 33, '3609'),
(596, 'Batac City', 34, '2906'),
(597, 'Laoag City', 34, '2900'),
(598, 'Adams', 34, '2922'),
(599, 'Bacarra', 34, '2916'),
(600, 'Badoc', 34, '2904'),
(601, 'Bangui', 34, '2920'),
(602, 'Banna', 34, '2908'),
(603, 'Burgos', 34, '2918'),
(604, 'Carasi', 34, '2911'),
(605, 'Currimao', 34, '2903'),
(606, 'Dingras', 34, '2913'),
(607, 'Dumalneg', 34, '2921'),
(608, 'Marcos', 34, '2907'),
(609, 'Nueva Era', 34, '2909'),
(610, 'Pagudpud', 34, '2919'),
(611, 'Paoay', 34, '2902'),
(612, 'Pasuquin', 34, '2917'),
(613, 'Piddig', 34, '2912'),
(614, 'Pinili', 34, '2905'),
(615, 'San Nicolas', 34, '2901'),
(616, 'Sarrat', 34, '2914'),
(617, 'Solsona', 34, '2910'),
(618, 'Vintar', 34, '2915'),
(619, 'Candon City', 35, '2710'),
(620, 'Vigan City', 35, '2700'),
(621, 'Alilem', 35, '2716'),
(622, 'Banayoyo', 35, '2708'),
(623, 'Bantay', 35, '2727'),
(624, 'Burgos', 35, '2724'),
(625, 'Cabugao', 35, '2732'),
(626, 'Caoayan', 35, '2702'),
(627, 'Cervantes', 35, '2718'),
(628, 'Galimuyod', 35, '2709'),
(629, 'Gregorio Del Pilar', 35, '2720'),
(630, 'Lidlidda', 35, '2723'),
(631, 'Magsingal', 35, '2730'),
(632, 'Nagbukel', 35, '2725'),
(633, 'Narvacan', 35, '2704'),
(634, 'Quirino', 35, '2721'),
(635, 'Salcedo', 35, '2711'),
(636, 'San Emilio', 35, '2722'),
(637, 'San Esteban', 35, '2706'),
(638, 'San Ildefonso', 35, '2728'),
(639, 'San Juan', 35, '2731'),
(640, 'San Vicente', 35, '2726'),
(641, 'Santa', 35, '2703'),
(642, 'Santa Catalina', 35, '2701'),
(643, 'Santa Cruz', 35, '2713'),
(644, 'Santa Lucia', 35, '2712'),
(645, 'Santa Maria', 35, '2440'),
(646, 'Santiago', 35, '2707'),
(647, 'Santo Domingo', 35, '2729'),
(648, 'Sigay', 35, '2719'),
(649, 'Sinait', 35, '2733'),
(650, 'Sugpon', 35, '2717'),
(651, 'Suyo', 35, '2715'),
(652, 'Tagudin', 35, '2714'),
(653, 'Iloilo City', 36, '5000'),
(654, 'Passi City', 36, '5037'),
(655, 'Ajuy', 36, '5012'),
(656, 'Alimodian', 36, '5028'),
(657, 'Anilao', 36, '5009'),
(658, 'Badiangan', 36, '5033'),
(659, 'Balasan', 36, '5018'),
(660, 'Banate', 36, '5010'),
(661, 'Barotac Nuevo', 36, '5007'),
(662, 'Barotac Viejo', 36, '5011'),
(663, 'Batad', 36, '5016'),
(664, 'Bingawan', 36, '5041'),
(665, 'Cabatuan', 36, '5031'),
(666, 'Calinog', 36, '5040'),
(667, 'Carles', 36, '5019'),
(668, 'Concepcion', 36, '5013'),
(669, 'Dingle', 36, '5035'),
(670, 'Dueñas', 36, '5038'),
(671, 'Dumangas', 36, '5006'),
(672, 'Estancia', 36, '5017'),
(673, 'Guimbal', 36, '5022'),
(674, 'Igbaras', 36, '5029'),
(675, 'Janiuay', 36, '5034'),
(676, 'Lambunao', 36, '5042'),
(677, 'Leganes', 36, '5003'),
(678, 'Lemery', 36, '5043'),
(679, 'Leon', 36, '5026'),
(680, 'Maasin', 36, '5030'),
(681, 'Miagao', 36, '5023'),
(682, 'Mina', 36, '5032'),
(683, 'New Lucena', 36, '5005'),
(684, 'Oton', 36, '5020'),
(685, 'Pavia', 36, '5001'),
(686, 'Pototan', 36, '5008'),
(687, 'San Dionisio', 36, '5015'),
(688, 'San Enrique', 36, '5036'),
(689, 'San Joaquin', 36, '5024'),
(690, 'San Miguel', 36, '5025'),
(691, 'San Rafael', 36, '5039'),
(692, 'Santa Barbara', 36, '5002'),
(693, 'Sara', 36, '5014'),
(694, 'Tigbauan', 36, '5021'),
(695, 'Tubungan', 36, '5027'),
(696, 'Zarraga', 36, '5004'),
(697, 'Cauayan City', 37, '3305'),
(698, 'Santiago City', 37, '3311'),
(699, 'Alicia', 37, '3306'),
(700, 'Angadanan', 37, '3307'),
(701, 'Aurora', 37, '3316'),
(702, 'Benito Soliven', 37, '3331'),
(703, 'Burgos', 37, '3322'),
(704, 'Cabagan', 37, '3328'),
(705, 'Cabatuan', 37, '3315'),
(706, 'Cordon', 37, '3312'),
(707, 'Delfin Albano', 37, '3326'),
(708, 'Dinapigue', 37, '3336'),
(709, 'Divilacan', 37, ''),
(710, 'Echague', 37, '3309'),
(711, 'Gamu', 37, '3301'),
(712, 'Ilagan', 37, '3300'),
(713, 'Jones', 37, '3313'),
(714, 'Luna', 37, '3304'),
(715, 'Maconacon', 37, '3333'),
(716, 'Mallig', 37, '3323'),
(717, 'Naguilian', 37, '3302'),
(718, 'Palanan', 37, '3334'),
(719, 'Quezon', 37, '3324'),
(720, 'Quirino', 37, '3321'),
(721, 'Ramon', 37, '3319'),
(722, 'Reina Mercedes', 37, '3303'),
(723, 'Roxas', 37, '3320'),
(724, 'San Agustin', 37, '3314'),
(725, 'San Guillermo', 37, '3308'),
(726, 'San Isidro', 37, '3310'),
(727, 'San Manuel', 37, '3317'),
(728, 'San Mariano', 37, '3332'),
(729, 'San Mateo', 37, '3318'),
(730, 'San Pablo', 37, '3329'),
(731, 'Santa Maria', 37, '3330'),
(732, 'Santo Tomas', 37, '3327'),
(733, 'Tumauini', 37, '3325'),
(734, 'Tabuk', 38, '3800'),
(735, 'Balbalan', 38, '3801'),
(736, 'Lubuagan', 38, '3802'),
(737, 'Pasil', 38, '3803'),
(738, 'Pinukpuk', 38, '3806'),
(739, 'Rizal', 38, '3808'),
(740, 'Tanudan', 38, '3805'),
(741, 'Tinglayan', 38, '3804'),
(742, 'San Fernando City', 39, '2500'),
(743, 'Agoo', 39, '2504'),
(744, 'Aringay', 39, '2503'),
(745, 'Bacnotan', 39, '2515'),
(746, 'Bagulin', 39, '2512'),
(747, 'Balaoan', 39, '2517'),
(748, 'Bangar', 39, '2519'),
(749, 'Bauang', 39, '2501'),
(750, 'Burgos', 39, '2510'),
(751, 'Caba', 39, '2502'),
(752, 'Luna', 39, '2518'),
(753, 'Naguilian', 39, '3302'),
(754, 'Pugo', 39, '2508'),
(755, 'Rosario', 39, '2506'),
(756, 'San Gabriel', 39, '2513'),
(757, 'San Juan', 39, '2514'),
(758, 'Santo Tomas', 39, '2505'),
(759, 'Santol', 39, '2516'),
(760, 'Sudipen', 39, '2520'),
(761, 'Tubao', 39, '2509'),
(762, 'Biñan City', 40, '4024'),
(763, 'Calamba City', 40, '4027'),
(764, 'San Pablo City', 40, '4000'),
(765, 'Santa Rosa City', 40, '4026'),
(766, 'Alaminos', 40, '4001'),
(767, 'Bay', 40, '4033'),
(768, 'Cabuyao', 40, '4025'),
(769, 'Calauan', 40, '4012'),
(770, 'Cavinti', 40, '4013'),
(771, 'Famy', 40, '4021'),
(772, 'Kalayaan', 40, '4015'),
(773, 'Liliw', 40, '4004'),
(774, 'Los Baños', 40, '4031'),
(775, 'Luisiana', 40, '4032'),
(776, 'Lumban', 40, '4014'),
(777, 'Mabitac', 40, '4020'),
(778, 'Magdalena', 40, '4007'),
(779, 'Majayjay', 40, '4005'),
(780, 'Nagcarlan', 40, '4002'),
(781, 'Paete', 40, '4016'),
(782, 'Pagsanjan', 40, '4008'),
(783, 'Pakil', 40, '4017'),
(784, 'Pangil', 40, '4018'),
(785, 'Pila', 40, '4010'),
(786, 'Rizal', 40, '4003'),
(787, 'San Pedro', 40, '4023'),
(788, 'Santa Cruz', 40, '4009'),
(789, 'Santa Maria', 40, '4022'),
(790, 'Siniloan', 40, '4019'),
(791, 'Victoria', 40, '4011'),
(792, 'Iligan City', 41, '9200'),
(793, 'Bacolod', 41, '9205'),
(794, 'Baloi', 41, '9217'),
(795, 'Baroy', 41, '9210'),
(796, 'Kapatagan', 41, '9214'),
(797, 'Kauswagan', 41, '9202'),
(798, 'Kolambugan', 41, '9207'),
(799, 'Lala', 41, '9211'),
(800, 'Linamon', 41, '9201'),
(801, 'Magsaysay', 41, '9221'),
(802, 'Maigo', 41, '9206'),
(803, 'Matungao', 41, '9203'),
(804, 'Munai', 41, '9219'),
(805, 'Nunungan', 41, '9216'),
(806, 'Pantao Ragat', 41, '9208'),
(807, 'Pantar', 41, '9218'),
(808, 'Poona Piagapo', 41, '9204'),
(809, 'Salvador', 41, '9212'),
(810, 'Sapad', 41, '9213'),
(811, 'Sultan Naga Dimaporo', 41, '9215'),
(812, 'Tagoloan', 41, '9222'),
(813, 'Tangcal', 41, '9220'),
(814, 'Tubod', 41, '9209'),
(815, 'Marawi City', 42, ''),
(816, 'Bacolod-Kalawi', 42, ''),
(817, 'Balabagan', 42, '9302'),
(818, 'Balindong', 42, '9318'),
(819, 'Bayang', 42, '9309'),
(820, 'Binidayan', 42, '9310'),
(821, 'Buadiposo-Buntong', 42, ''),
(822, 'Bubong', 42, '9708'),
(823, 'Bumbaran', 42, '9320'),
(824, 'Butig', 42, '9305'),
(825, 'Calanogas', 42, '9319'),
(826, 'Ditsaan-Ramain', 42, ''),
(827, 'Ganassi', 42, '9311'),
(828, 'Kapai', 42, '9709'),
(829, 'Kapatagan', 42, '9214'),
(830, 'Lumba-Bayabao', 42, ''),
(831, 'Lumbaca-Unayan', 42, ''),
(832, 'Lumbatan', 42, '9307'),
(833, 'Lumbayanague', 42, '9306'),
(834, 'Madalum', 42, '9315'),
(835, 'Madamba', 42, '9314'),
(836, 'Maguing', 42, '9715'),
(837, 'Malabang', 42, '9300'),
(838, 'Marantao', 42, ''),
(839, 'Marogong', 42, ''),
(840, 'Masiu', 42, ''),
(841, 'Mulondo', 42, ''),
(842, 'Pagayawan', 42, ''),
(843, 'Piagapo', 42, '9204'),
(844, 'Poona Bayabao', 42, ''),
(845, 'Pualas', 42, ''),
(846, 'Saguiaran', 42, ''),
(847, 'Sultan Dumalondong', 42, ''),
(848, 'Picong', 42, ''),
(849, 'Tagoloan II', 42, ''),
(850, 'Tamparan', 42, ''),
(851, 'Taraka', 42, ''),
(852, 'Tubaran', 42, ''),
(853, 'Tugaya', 42, ''),
(854, 'Wao', 42, ''),
(855, 'Ormoc City', 43, '6541'),
(856, 'Tacloban City', 43, '6500'),
(857, 'Abuyog', 43, '6510'),
(858, 'Alangalang', 43, '6517'),
(859, 'Albuera', 43, '6542'),
(860, 'Babatngon', 43, '6520'),
(861, 'Barugo', 43, '6519'),
(862, 'Bato', 43, '6525'),
(863, 'Baybay', 43, '6521'),
(864, 'Burauen', 43, '6516'),
(865, 'Calubian', 43, '6534'),
(866, 'Capoocan', 43, '6530'),
(867, 'Carigara', 43, '6529'),
(868, 'Dagami', 43, '6515'),
(869, 'Dulag', 43, '6505'),
(870, 'Hilongos', 43, '6524'),
(871, 'Hindang', 43, '6523'),
(872, 'Inopacan', 43, '6522'),
(873, 'Isabel', 43, '6539'),
(874, 'Jaro', 43, '6527'),
(875, 'Javier', 43, '6511'),
(876, 'Julita', 43, '6506'),
(877, 'Kananga', 43, '6531'),
(878, 'La Paz', 43, '6508'),
(879, 'Leyte', 43, '6510'),
(880, 'Liloan', 43, '6612'),
(881, 'MacArthur', 43, '6509'),
(882, 'Mahaplag', 43, '6512'),
(883, 'Matag-ob', 43, '6532'),
(884, 'Matalom', 43, '6526'),
(885, 'Mayorga', 43, '6507'),
(886, 'Merida', 43, '6540'),
(887, 'Palo', 43, '6501'),
(888, 'Palompon', 43, '6538'),
(889, 'Pastrana', 43, '6514'),
(890, 'San Isidro', 43, '6535'),
(891, 'San Miguel', 43, '6518'),
(892, 'Santa Fe', 43, '6513'),
(893, 'Sogod', 43, '6606'),
(894, 'Tabango', 43, '6536'),
(895, 'Tabontabon', 43, '6504'),
(896, 'Tanauan', 43, '6502'),
(897, 'Tolosa', 43, '6503'),
(898, 'Tunga', 43, '6528'),
(899, 'Villaba', 43, '6537'),
(900, 'Cotabato City', 44, '9600'),
(901, 'Ampatuan', 44, '9609'),
(902, 'Barira', 44, '9614'),
(903, 'Buldon', 44, '9615'),
(904, 'Buluan', 44, '9616'),
(905, 'Datu Abdullah Sangki', 44, ''),
(906, 'Datu Anggal Midtimbang', 44, ''),
(907, 'Datu Blah T. Sinsuat', 44, ''),
(908, 'Datu Hoffer Ampatuan', 44, ''),
(909, 'Datu Montawal', 44, ''),
(910, 'Datu Odin Sinsuat', 44, '9601'),
(911, 'Datu Paglas', 44, '9617'),
(912, 'Datu Piang', 44, '9607'),
(913, 'Datu Salibo', 44, ''),
(914, 'Datu Saudi-Ampatuan', 44, ''),
(915, 'Datu Unsay', 44, ''),
(916, 'General Salipada K. Pendatun', 44, ''),
(917, 'Guindulungan', 44, ''),
(918, 'Kabuntalan', 44, ''),
(919, 'Mamasapano', 44, ''),
(920, 'Mangudadatu', 44, ''),
(921, 'Matanog', 44, '9613'),
(922, 'Northern Kabuntalan', 44, ''),
(923, 'Pagalungan', 44, '9610'),
(924, 'Paglat', 44, ''),
(925, 'Pandag', 44, ''),
(926, 'Parang', 44, '9604'),
(927, 'Rajah Buayan', 44, ''),
(928, 'Shariff Aguak', 44, '9608'),
(929, 'Shariff Saydona Mustapha', 44, ''),
(930, 'South Upi', 44, '9603'),
(931, 'Sultan Kudarat', 44, '9605'),
(932, 'Sultan Mastura', 44, ''),
(933, 'Sultan sa Barongis', 44, '9611'),
(934, 'Talayan', 44, '9612'),
(935, 'Talitay', 44, ''),
(936, 'Upi', 44, '9603'),
(937, 'Boac', 45, '4900'),
(938, 'Buenavista', 45, '4904'),
(939, 'Gasan', 45, '4905'),
(940, 'Mogpog', 45, '4901'),
(941, 'Santa Cruz', 45, '4902'),
(942, 'Torrijos', 45, '4903'),
(943, 'Masbate City', 46, '5414'),
(944, 'Aroroy', 46, '5414'),
(945, 'Baleno', 46, '5413'),
(946, 'Balud', 46, '5412'),
(947, 'Batuan', 46, '5415'),
(948, 'Cataingan', 46, '5405'),
(949, 'Cawayan', 46, '5409'),
(950, 'Claveria', 46, '5419'),
(951, 'Dimasalang', 46, '5403'),
(952, 'Esperanza', 46, '5407'),
(953, 'Mandaon', 46, '5411'),
(954, 'Milagros', 46, '5410'),
(955, 'Mobo', 46, '5401'),
(956, 'Monreal', 46, '5418'),
(957, 'Palanas', 46, '5404'),
(958, 'Pio V. Corpuz', 46, '5406'),
(959, 'Placer', 46, '5408'),
(960, 'San Fernando', 46, '5416'),
(961, 'San Jacinto', 46, '5417'),
(962, 'San Pascual', 46, '5420'),
(963, 'Uson', 46, '5402'),
(964, 'Caloocan', 47, ''),
(965, 'Las Piñas', 47, '1740'),
(966, 'Makati', 47, '1224'),
(967, 'Malabon', 47, '1470'),
(968, 'Mandaluyong', 47, ''),
(969, 'Manila', 47, ''),
(970, 'Marikina', 47, '1800'),
(971, 'Muntinlupa', 47, '1770'),
(972, 'Navotas', 47, '1485'),
(973, 'Parañaque', 47, '1700'),
(974, 'Pasay', 47, '1300'),
(975, 'Pasig', 47, '1600'),
(976, 'Quezon City', 47, '1100'),
(977, 'San Juan City', 47, '1500'),
(978, 'Taguig', 47, ''),
(979, 'Valenzuela City', 47, '1208'),
(980, 'Pateros', 47, ''),
(981, 'Oroquieta City', 48, '7207'),
(982, 'Ozamiz City', 48, ''),
(983, 'Tangub City', 48, '7214'),
(984, 'Aloran', 48, '7206'),
(985, 'Baliangao', 48, '7211'),
(986, 'Bonifacio', 48, '7215'),
(987, 'Calamba', 48, '7210'),
(988, 'Clarin', 48, '7201'),
(989, 'Concepcion', 48, '7213'),
(990, 'Don Victoriano Chiongbian', 48, ''),
(991, 'Jimenez', 48, '7204'),
(992, 'Lopez Jaena', 48, '7208'),
(993, 'Panaon', 48, '7205'),
(994, 'Plaridel', 48, '7209'),
(995, 'Sapang Dalaga', 48, '7212'),
(996, 'Sinacaban', 48, '7203'),
(997, 'Tudela', 48, '7202'),
(998, 'Cagayan de Oro', 49, '9000'),
(999, 'Gingoog City', 49, '9014'),
(1000, 'Alubijid', 49, '9018'),
(1001, 'Balingasag', 49, '9005'),
(1002, 'Balingoan', 49, '9011'),
(1003, 'Binuangan', 49, '9008'),
(1004, 'Claveria', 49, '9004'),
(1005, 'El Salvador', 49, '9017'),
(1006, 'Gitagum', 49, '9020'),
(1007, 'Initao', 49, '9022'),
(1008, 'Jasaan', 49, '9003'),
(1009, 'Kinoguitan', 49, '9010'),
(1010, 'Lagonglong', 49, '9006'),
(1011, 'Laguindingan', 49, '9019'),
(1012, 'Libertad', 49, '9021'),
(1013, 'Lugait', 49, '9025'),
(1014, 'Magsaysay', 49, '9015'),
(1015, 'Manticao', 49, '9024'),
(1016, 'Medina', 49, '9013'),
(1017, 'Naawan', 49, '9023'),
(1018, 'Opol', 49, '9016'),
(1019, 'Salay', 49, '9007'),
(1020, 'Sugbongcogon', 49, '9009'),
(1021, 'Tagoloan', 49, '9001'),
(1022, 'Talisayan', 49, '9012'),
(1023, 'Villanueva', 49, '9002'),
(1024, 'Barlig', 50, '2623'),
(1025, 'Bauko', 50, '2621'),
(1026, 'Besao', 50, '2618'),
(1027, 'Bontoc', 50, '2616'),
(1028, 'Natonin', 50, '2624'),
(1029, 'Paracelis', 50, '2625'),
(1030, 'Sabangan', 50, '2622'),
(1031, 'Sadanga', 50, '2617'),
(1032, 'Sagada', 50, '2619'),
(1033, 'Tadian', 50, '2620'),
(1034, 'Bacolod City', 51, '6100'),
(1035, 'Bago City', 51, '6101'),
(1036, 'Cadiz City', 51, '6121'),
(1037, 'Escalante City', 51, '6124'),
(1038, 'Himamaylan City', 51, '6108'),
(1039, 'Kabankalan City', 51, '6111'),
(1040, 'La Carlota City', 51, '6130'),
(1041, 'Sagay City', 51, '6122'),
(1042, 'San Carlos City', 51, '6127'),
(1043, 'Silay City', 51, '6116'),
(1044, 'Sipalay City', 51, '6113'),
(1045, 'Talisay City', 51, '6115'),
(1046, 'Victorias City', 51, '6119'),
(1047, 'Binalbagan', 51, '6107'),
(1048, 'Calatrava', 51, '6126'),
(1049, 'Candoni', 51, '6110'),
(1050, 'Cauayan', 51, '6112'),
(1051, 'Enrique B. Magalona', 51, '6118'),
(1052, 'Hinigaran', 51, '6106'),
(1053, 'Hinoba-an', 51, '6114'),
(1054, 'Ilog', 51, '6109'),
(1055, 'Isabela', 51, '6128'),
(1056, 'La Castellana', 51, '6131'),
(1057, 'Manapla', 51, '6120'),
(1058, 'Moises Padilla', 51, '6132'),
(1059, 'Murcia', 51, '6129'),
(1060, 'Pontevedra', 51, '6105'),
(1061, 'Pulupandan', 51, '6102'),
(1062, 'Salvador Benedicto', 51, ''),
(1063, 'San Enrique', 51, '6104'),
(1064, 'Toboso', 51, '6125'),
(1065, 'Valladolid', 51, '6103'),
(1066, 'Bais City', 52, '6206'),
(1067, 'Bayawan City', 52, '6221'),
(1068, 'Canlaon City', 52, '6223'),
(1069, 'Guihulngan City', 52, '6214'),
(1070, 'Dumaguete City', 52, '6200'),
(1071, 'Tanjay City', 52, '6204'),
(1072, 'Amlan', 52, '6203'),
(1073, 'Ayungon', 52, '6210'),
(1074, 'Bacong', 52, '6216'),
(1075, 'Basay', 52, '6222'),
(1076, 'Bindoy', 52, '6209'),
(1077, 'Dauin', 52, '6217'),
(1078, 'Jimalalud', 52, '6212'),
(1079, 'La Libertad', 52, '6213'),
(1080, 'Mabinay', 52, '6207'),
(1081, 'Manjuyod', 52, '6208'),
(1082, 'Pamplona', 52, '6205'),
(1083, 'San Jose', 52, '6202'),
(1084, 'Santa Catalina', 52, '6220'),
(1085, 'Siaton', 52, '6219'),
(1086, 'Sibulan', 52, '6201'),
(1087, 'Tayasan', 52, '6211'),
(1088, 'Valencia', 52, '6215'),
(1089, 'Vallehermoso', 52, '6224'),
(1090, 'Zamboanguita', 52, '6218'),
(1091, 'Allen', 53, '6405'),
(1092, 'Biri', 53, '6410'),
(1093, 'Bobon', 53, '6401'),
(1094, 'Capul', 53, '6408'),
(1095, 'Catarman', 53, '6400'),
(1096, 'Catubig', 53, '6418'),
(1097, 'Gamay', 53, '6422'),
(1098, 'Laoang', 53, '6411'),
(1099, 'Lapinig', 53, '6423'),
(1100, 'Las Navas', 53, '6420'),
(1101, 'Lavezares', 53, '6404'),
(1102, 'Lope de Vega', 53, '6403'),
(1103, 'Mapanas', 53, '6412'),
(1104, 'Mondragon', 53, '6417'),
(1105, 'Palapag', 53, '6421'),
(1106, 'Pambujan', 53, '6413'),
(1107, 'Rosario', 53, '6416'),
(1108, 'San Antonio', 53, '6407'),
(1109, 'San Isidro', 53, '6409'),
(1110, 'San Jose', 53, '6402'),
(1111, 'San Roque', 53, '6415'),
(1112, 'San Vicente', 53, '6419'),
(1113, 'Silvino Lobos', 53, '6414'),
(1114, 'Victoria', 53, '6406'),
(1115, 'Cabanatuan City', 54, '3100'),
(1116, 'Gapan City', 54, '3105'),
(1117, 'Science City of Muñoz', 54, ''),
(1118, 'Palayan City', 54, '3132'),
(1119, 'San Jose City', 54, '3121'),
(1120, 'Aliaga', 54, '3111'),
(1121, 'Bongabon', 54, '3128'),
(1122, 'Cabiao', 54, '3107'),
(1123, 'Carranglan', 54, '3123'),
(1124, 'Cuyapo', 54, '3117'),
(1125, 'Gabaldon', 54, '3131'),
(1126, 'General Mamerto Natividad', 54, '3125'),
(1127, 'General Tinio', 54, '3104'),
(1128, 'Guimba', 54, '3115'),
(1129, 'Jaen', 54, '3109'),
(1130, 'Laur', 54, '3129'),
(1131, 'Licab', 54, '3112'),
(1132, 'Llanera', 54, '3126'),
(1133, 'Lupao', 54, '3122'),
(1134, 'Nampicuan', 54, '3116'),
(1135, 'Pantabangan', 54, '3124'),
(1136, 'Peñaranda', 54, '3103'),
(1137, 'Quezon', 54, '3113'),
(1138, 'Rizal', 54, '3127'),
(1139, 'San Antonio', 54, '3108'),
(1140, 'San Isidro', 54, '3106'),
(1141, 'San Leonardo', 54, '3102'),
(1142, 'Santa Rosa', 54, '3101'),
(1143, 'Santo Domingo', 54, '3133'),
(1144, 'Talavera', 54, '3114'),
(1145, 'Talugtug', 54, ''),
(1146, 'Zaragoza', 54, ''),
(1147, 'Alfonso Castaneda', 55, ''),
(1148, 'Ambaguio', 55, '3701'),
(1149, 'Aritao', 55, '3704'),
(1150, 'Bagabag', 55, '3711'),
(1151, 'Bambang', 55, '3702'),
(1152, 'Bayombong', 55, '3700'),
(1153, 'Diadi', 55, '3712'),
(1154, 'Dupax del Norte', 55, '3706'),
(1155, 'Dupax del Sur', 55, '3707'),
(1156, 'Kasibu', 55, '3703'),
(1157, 'Kayapa', 55, '3708'),
(1158, 'Quezon', 55, '3713'),
(1159, 'Santa Fe', 55, '3705'),
(1160, 'Solano', 55, '3709'),
(1161, 'Villaverde', 55, '3710'),
(1162, 'Abra de Ilog', 56, '5108'),
(1163, 'Calintaan', 56, '5102'),
(1164, 'Looc', 56, '5111'),
(1165, 'Lubang', 56, '5109'),
(1166, 'Magsaysay', 56, '5101'),
(1167, 'Mamburao', 56, '5106'),
(1168, 'Paluan', 56, '5107'),
(1169, 'Rizal', 56, '5103'),
(1170, 'Sablayan', 56, '5104'),
(1171, 'San Jose', 56, '5100'),
(1172, 'Santa Cruz', 56, '5105'),
(1173, 'Calapan City', 57, '5200'),
(1174, 'Baco', 57, '5201'),
(1175, 'Bansud', 57, '5210'),
(1176, 'Bongabong', 57, '5211'),
(1177, 'Bulalacao', 57, '5214'),
(1178, 'Gloria', 57, '5209'),
(1179, 'Mansalay', 57, '5213'),
(1180, 'Naujan', 57, '5204'),
(1181, 'Pinamalayan', 57, '5208'),
(1182, 'Pola', 57, '5206'),
(1183, 'Puerto Galera', 57, '5203'),
(1184, 'Roxas', 57, '5212'),
(1185, 'San Teodoro', 57, '5202'),
(1186, 'Socorro', 57, '5207'),
(1187, 'Victoria', 57, '5205'),
(1188, 'Puerto Princesa City', 58, '5300'),
(1189, 'Aborlan', 58, '5302'),
(1190, 'Agutaya', 58, '5320'),
(1191, 'Araceli', 58, '5311'),
(1192, 'Balabac', 58, '5307'),
(1193, 'Bataraza', 58, '5306'),
(1194, 'Brooke\'s Point', 58, '5305'),
(1195, 'Busuanga', 58, '5317'),
(1196, 'Cagayancillo', 58, '5321'),
(1197, 'Coron', 58, '5316'),
(1198, 'Culion', 58, '5315'),
(1199, 'Cuyo', 58, '5318'),
(1200, 'Dumaran', 58, '5310'),
(1201, 'El Nido', 58, '5313'),
(1202, 'Kalayaan', 58, '5322'),
(1203, 'Linapacan', 58, '5314'),
(1204, 'Magsaysay', 58, '5319'),
(1205, 'Narra', 58, '5303'),
(1206, 'Quezon', 58, '5304'),
(1207, 'Rizal', 58, '7104'),
(1208, 'Roxas', 58, '5308'),
(1209, 'San Vicente', 58, '5309'),
(1210, 'Sofronio Española', 58, ''),
(1211, 'Taytay', 58, '5312'),
(1212, 'Angeles City', 59, '2009'),
(1213, 'City of San Fernando', 59, '2000'),
(1214, 'Apalit', 59, '2016'),
(1215, 'Arayat', 59, '2012'),
(1216, 'Bacolor', 59, '2001'),
(1217, 'Candaba', 59, '2013'),
(1218, 'Floridablanca', 59, '2006'),
(1219, 'Guagua', 59, '2003'),
(1220, 'Lubao', 59, '2005'),
(1221, 'Mabalacat', 59, '2010'),
(1222, 'Macabebe', 59, '2018'),
(1223, 'Magalang', 59, '2011'),
(1224, 'Masantol', 59, '2017'),
(1225, 'Mexico', 59, '2021'),
(1226, 'Minalin', 59, '2019'),
(1227, 'Porac', 59, '2008'),
(1228, 'San Luis', 59, '2014'),
(1229, 'San Simon', 59, '2015'),
(1230, 'Santa Ana', 59, '2022'),
(1231, 'Santa Rita', 59, '2002'),
(1232, 'Santo Tomas', 59, '2020'),
(1233, 'Sasmuan', 59, ''),
(1234, 'Alaminos City', 60, '2404'),
(1235, 'Dagupan City', 60, '2400'),
(1236, 'San Carlos City', 60, '2420'),
(1237, 'Urdaneta City', 60, '2428'),
(1238, 'Agno', 60, '2408'),
(1239, 'Aguilar', 60, '2415'),
(1240, 'Alcala', 60, '2425'),
(1241, 'Anda', 60, '2405'),
(1242, 'Asingan', 60, '2439'),
(1243, 'Balungao', 60, '2442'),
(1244, 'Bani', 60, '2407'),
(1245, 'Basista', 60, '2422'),
(1246, 'Bautista', 60, '2424'),
(1247, 'Bayambang', 60, '2423'),
(1248, 'Binalonan', 60, '2436'),
(1249, 'Binmaley', 60, '2417'),
(1250, 'Bolinao', 60, '2406'),
(1251, 'Bugallon', 60, '2416'),
(1252, 'Burgos', 60, '2410'),
(1253, 'Calasiao', 60, '2418'),
(1254, 'Dasol', 60, '2411'),
(1255, 'Infanta', 60, '2412'),
(1256, 'Labrador', 60, '2402'),
(1257, 'Laoac', 60, '2437'),
(1258, 'Lingayen', 60, '2401'),
(1259, 'Mabini', 60, '2409'),
(1260, 'Malasiqui', 60, '2421'),
(1261, 'Manaoag', 60, '2430'),
(1262, 'Mangaldan', 60, '2432'),
(1263, 'Mangatarem', 60, '2413'),
(1264, 'Mapandan', 60, '2429'),
(1265, 'Natividad', 60, '2446'),
(1266, 'Pozzorubio', 60, ''),
(1267, 'Rosales', 60, '2441'),
(1268, 'San Fabian', 60, '2433'),
(1269, 'San Jacinto', 60, '2431'),
(1270, 'San Manuel', 60, '2438'),
(1271, 'San Nicolas', 60, '2447'),
(1272, 'San Quintin', 60, '2444'),
(1273, 'Santa Barbara', 60, '2419'),
(1274, 'Santa Maria', 60, '2440'),
(1275, 'Santo Tomas', 60, '2426'),
(1276, 'Sison', 60, '2434'),
(1277, 'Sual', 60, '2403'),
(1278, 'Tayug', 60, '2445'),
(1279, 'Umingan', 60, '2443'),
(1280, 'Urbiztondo', 60, '2414'),
(1281, 'Villasis', 60, '2427'),
(1282, 'Lucena City', 61, '4301'),
(1283, 'Tayabas City', 61, '4327'),
(1284, 'Agdangan', 61, '4304'),
(1285, 'Alabat', 61, '4333'),
(1286, 'Atimonan', 61, '4331'),
(1287, 'Buenavista', 61, '4320'),
(1288, 'Burdeos', 61, '4340'),
(1289, 'Calauag', 61, '4318'),
(1290, 'Candelaria', 61, '4323'),
(1291, 'Catanauan', 61, '4311'),
(1292, 'Dolores', 61, '4326'),
(1293, 'General Luna', 61, '4310'),
(1294, 'General Nakar', 61, '4338'),
(1295, 'Guinayangan', 61, '4319'),
(1296, 'Gumaca', 61, '4307'),
(1297, 'Infanta', 61, '4336'),
(1298, 'Jomalig', 61, '4342'),
(1299, 'Lopez', 61, '4316'),
(1300, 'Lucban', 61, '4328'),
(1301, 'Macalelon', 61, '4309'),
(1302, 'Mauban', 61, '4330'),
(1303, 'Mulanay', 61, '4312'),
(1304, 'Padre Burgos', 61, '4303'),
(1305, 'Pagbilao', 61, '4302'),
(1306, 'Panukulan', 61, '4337'),
(1307, 'Patnanungan', 61, '4341'),
(1308, 'Perez', 61, '4334'),
(1309, 'Pitogo', 61, '4308'),
(1310, 'Plaridel', 61, '4306'),
(1311, 'Polillo', 61, '4339'),
(1312, 'Quezon', 61, '4304'),
(1313, 'Real', 61, '4335'),
(1314, 'Sampaloc', 61, '4329'),
(1315, 'San Andres', 61, '4314'),
(1316, 'San Antonio', 61, '4324'),
(1317, 'San Francisco', 61, '4315'),
(1318, 'San Narciso', 61, '4313'),
(1319, 'Sariaya', 61, '4322'),
(1320, 'Tagkawayan', 61, '4321'),
(1321, 'Tiaong', 61, '4325'),
(1322, 'Unisan', 61, '4305'),
(1323, 'Aglipay', 62, '3403'),
(1324, 'Cabarroguis', 62, '3400'),
(1325, 'Diffun', 62, '3401'),
(1326, 'Maddela', 62, '3404'),
(1327, 'Nagtipunan', 62, '3405'),
(1328, 'Saguday', 62, '3402'),
(1329, 'Antipolo City', 63, '1870'),
(1330, 'Angono', 63, '1930'),
(1331, 'Baras', 63, '1970'),
(1332, 'Binangonan', 63, '1940'),
(1333, 'Cainta', 63, '1900'),
(1334, 'Cardona', 63, '1950'),
(1335, 'Jalajala', 63, ''),
(1336, 'Morong', 63, '1960'),
(1337, 'Pililla', 63, '1910'),
(1338, 'Rodriguez', 63, '1860'),
(1339, 'San Mateo', 63, '1850'),
(1340, 'Tanay', 63, '1980'),
(1341, 'Taytay', 63, '1920'),
(1342, 'Teresa', 63, '1880'),
(1343, 'Alcantara', 64, '5509'),
(1344, 'Banton', 64, '5515'),
(1345, 'Cajidiocan', 64, '5512'),
(1346, 'Calatrava', 64, '5503'),
(1347, 'Concepcion', 64, '5516'),
(1348, 'Corcuera', 64, '5514'),
(1349, 'Ferrol', 64, '5506'),
(1350, 'Looc', 64, '5507'),
(1351, 'Magdiwang', 64, '5511'),
(1352, 'Odiongan', 64, '5505'),
(1353, 'Romblon', 64, '5509'),
(1354, 'San Agustin', 64, '5501'),
(1355, 'San Andres', 64, '5504'),
(1356, 'San Fernando', 64, '5513'),
(1357, 'San Jose', 64, '5510'),
(1358, 'Santa Fe', 64, '5508'),
(1359, 'Santa Maria', 64, '5502'),
(1360, 'Calbayog City', 65, '6710'),
(1361, 'Catbalogan City', 65, '6700'),
(1362, 'Almagro', 65, '6724'),
(1363, 'Basey', 65, '6720'),
(1364, 'Calbiga', 65, '6715'),
(1365, 'Daram', 65, '6722'),
(1366, 'Gandara', 65, '6706'),
(1367, 'Hinabangan', 65, '6713'),
(1368, 'Jiabong', 65, '6701'),
(1369, 'Marabut', 65, '6721'),
(1370, 'Matuguinao', 65, '6708'),
(1371, 'Motiong', 65, '6702'),
(1372, 'Pagsanghan', 65, '6705'),
(1373, 'Paranas', 65, '6703'),
(1374, 'Pinabacdao', 65, '6716'),
(1375, 'San Jorge', 65, '6707'),
(1376, 'San Jose De Buan', 65, '6723'),
(1377, 'San Sebastian', 65, '6714'),
(1378, 'Santa Margarita', 65, '6709'),
(1379, 'Santa Rita', 65, '6718'),
(1380, 'Santo Niño', 65, '6711'),
(1381, 'Tagapul-an', 65, '6712'),
(1382, 'Talalora', 65, '6719'),
(1383, 'Tarangnan', 65, '6704'),
(1384, 'Villareal', 65, '6717'),
(1385, 'Zumarraga', 65, '6725'),
(1386, 'Alabel', 66, '9501'),
(1387, 'Glan', 66, '9517'),
(1388, 'Kiamba', 66, '9514'),
(1389, 'Maasim', 66, '9502'),
(1390, 'Maitum', 66, '9515'),
(1391, 'Malapatan', 66, '9516'),
(1392, 'Malungon', 66, '9503'),
(1393, 'Enrique Villanueva', 67, '6230'),
(1394, 'Larena', 67, '6226'),
(1395, 'Lazi', 67, '6228'),
(1396, 'Maria', 67, '6229'),
(1397, 'San Juan', 67, '6227'),
(1398, 'Siquijor', 67, '6230'),
(1399, 'Sorsogon City', 68, '4701'),
(1400, 'Barcelona', 68, '4712'),
(1401, 'Bulan', 68, '4706'),
(1402, 'Bulusan', 68, '4704'),
(1403, 'Casiguran', 68, '4702'),
(1404, 'Castilla', 68, '4713'),
(1405, 'Donsol', 68, '4715'),
(1406, 'Gubat', 68, '4710'),
(1407, 'Irosin', 68, '4707'),
(1408, 'Juban', 68, '4703'),
(1409, 'Magallanes', 68, '4705'),
(1410, 'Matnog', 68, '4708'),
(1411, 'Pilar', 68, '4714'),
(1412, 'Prieto Diaz', 68, '4711'),
(1413, 'Santa Magdalena', 68, '4709'),
(1414, 'General Santos City', 69, '9500'),
(1415, 'Koronadal City', 69, '9506'),
(1416, 'Banga', 69, '9511'),
(1417, 'Lake Sebu', 69, ''),
(1418, 'Norala', 69, '9508'),
(1419, 'Polomolok', 69, '9504'),
(1420, 'Santo Niño', 69, '9509'),
(1421, 'Surallah', 69, '9512'),
(1422, 'T\'boli', 69, '9513'),
(1423, 'Tampakan', 69, '9507'),
(1424, 'Tantangan', 69, '9510'),
(1425, 'Tupi', 69, '9505'),
(1426, 'Maasin City', 70, '6600'),
(1427, 'Anahawan', 70, '6610'),
(1428, 'Bontoc', 70, '6604'),
(1429, 'Hinunangan', 70, '6608'),
(1430, 'Hinundayan', 70, '6609'),
(1431, 'Libagon', 70, '6615'),
(1432, 'Liloan', 70, '6612'),
(1433, 'Limasawa', 70, ''),
(1434, 'Macrohon', 70, '6601'),
(1435, 'Malitbog', 70, '6603'),
(1436, 'Padre Burgos', 70, '6602'),
(1437, 'Pintuyan', 70, '6614'),
(1438, 'Saint Bernard', 70, '6616'),
(1439, 'San Francisco', 70, '6613'),
(1440, 'San Juan', 70, '6611'),
(1441, 'San Ricardo', 70, '6617'),
(1442, 'Silago', 70, '6607'),
(1443, 'Sogod', 70, '6606'),
(1444, 'Tomas Oppus', 70, '6605'),
(1445, 'Tacurong City', 71, '9800'),
(1446, 'Bagumbayan', 71, '9810'),
(1447, 'Columbio', 71, '9801'),
(1448, 'Esperanza', 71, '9806'),
(1449, 'Isulan', 71, '9805'),
(1450, 'Kalamansig', 71, '9808'),
(1451, 'Lambayong', 71, '9802'),
(1452, 'Lebak', 71, '9807'),
(1453, 'Lutayan', 71, '9803'),
(1454, 'Palimbang', 71, '9809'),
(1455, 'President Quirino', 71, '9804'),
(1456, 'Senator Ninoy Aquino', 71, '9811'),
(1457, 'Banguingui', 72, ''),
(1458, 'Hadji Panglima Tahil', 72, ''),
(1459, 'Indanan', 72, '7407'),
(1460, 'Jolo', 72, '7400'),
(1461, 'Kalingalan Caluang', 72, ''),
(1462, 'Lugus', 72, '7411'),
(1463, 'Luuk', 72, '7404'),
(1464, 'Maimbung', 72, '7409'),
(1465, 'Old Panamao', 72, ''),
(1466, 'Omar', 72, ''),
(1467, 'Pandami', 72, ''),
(1468, 'Panglima Estino', 72, '7415'),
(1469, 'Pangutaran', 72, ''),
(1470, 'Parang', 72, '7408'),
(1471, 'Pata', 72, '7405'),
(1472, 'Patikul', 72, '7401'),
(1473, 'Siasi', 72, '7412'),
(1474, 'Talipao', 72, '7403'),
(1475, 'Tapul', 72, '7410'),
(1476, 'Surigao City', 73, '8425'),
(1477, 'Alegria', 73, '8425'),
(1478, 'Bacuag', 73, '8408'),
(1479, 'Basilisa', 73, '8413'),
(1480, 'Burgos', 73, '8424'),
(1481, 'Cagdianao', 73, '8411'),
(1482, 'Claver', 73, '8410'),
(1483, 'Dapa', 73, '8417'),
(1484, 'Del Carmen', 73, '8418'),
(1485, 'Dinagat', 73, '8412'),
(1486, 'General Luna', 73, '8419'),
(1487, 'Gigaquit', 73, '8409'),
(1488, 'Libjo', 73, '8414'),
(1489, 'Loreto', 73, '8415'),
(1490, 'Mainit', 73, '8407'),
(1491, 'Malimono', 73, ''),
(1492, 'Pilar', 73, '8420'),
(1493, 'Placer', 73, '8405'),
(1494, 'San Benito', 73, '8423'),
(1495, 'San Francisco', 73, '8401'),
(1496, 'San Isidro', 73, '8421'),
(1497, 'San Jose', 73, '8427'),
(1498, 'Santa Monica', 73, '8422'),
(1499, 'Sison', 73, '8404'),
(1500, 'Socorro', 73, '8416'),
(1501, 'Tagana-an', 73, ''),
(1502, 'Tubajon', 73, ''),
(1503, 'Tubod', 73, ''),
(1504, 'Bislig City', 74, '8311'),
(1505, 'Tandag City', 74, '8300'),
(1506, 'Barobo', 74, '8309'),
(1507, 'Bayabas', 74, '8303'),
(1508, 'Cagwait', 74, '8304'),
(1509, 'Cantilan', 74, ''),
(1510, 'Carmen', 74, '8315'),
(1511, 'Carrascal', 74, '8318'),
(1512, 'Cortes', 74, ''),
(1513, 'Hinatuan', 74, '8310'),
(1514, 'Lanuza', 74, '8314'),
(1515, 'Lianga', 74, '8307'),
(1516, 'Lingig', 74, '8312'),
(1517, 'Madrid', 74, '8316'),
(1518, 'Marihatag', 74, '8306'),
(1519, 'San Agustin', 74, '8305'),
(1520, 'San Miguel', 74, '8301'),
(1521, 'Tagbina', 74, '8308'),
(1522, 'Tago', 74, '8302'),
(1523, 'Tarlac City', 75, '2310'),
(1524, 'Anao', 75, '2310'),
(1525, 'Bamban', 75, '2317'),
(1526, 'Camiling', 75, '2306'),
(1527, 'Capas', 75, '2315'),
(1528, 'Concepcion', 75, '2316'),
(1529, 'Gerona', 75, '2302'),
(1530, 'La Paz', 75, '2314'),
(1531, 'Mayantoc', 75, '2304'),
(1532, 'Moncada', 75, '2308'),
(1533, 'Paniqui', 75, '2307'),
(1534, 'Pura', 75, '2312'),
(1535, 'Ramos', 75, '2311'),
(1536, 'San Clemente', 75, '2305'),
(1537, 'San Jose', 75, '4227'),
(1538, 'San Manuel', 75, '2309'),
(1539, 'Santa Ignacia', 75, '2303'),
(1540, 'Victoria', 75, '2313'),
(1541, 'Bongao', 76, '7500'),
(1542, 'Languyan', 76, '7509'),
(1543, 'Mapun', 76, ''),
(1544, 'Panglima Sugala', 76, ''),
(1545, 'Sapa-Sapa', 76, '7503'),
(1546, 'Sibutu', 76, ''),
(1547, 'Simunul', 76, ''),
(1548, 'Sitangkai', 76, '7506'),
(1549, 'South Ubian', 76, '7504'),
(1550, 'Tandubas', 76, ''),
(1551, 'Turtle Islands', 76, '7507'),
(1552, 'Olongapo City', 77, '2200'),
(1553, 'Botolan', 77, '2202'),
(1554, 'Cabangan', 77, '2203'),
(1555, 'Candelaria', 77, '2212'),
(1556, 'Castillejos', 77, ''),
(1557, 'Iba', 77, '2201'),
(1558, 'Masinloc', 77, '2211'),
(1559, 'Palauig', 77, '2210'),
(1560, 'San Antonio', 77, '2206'),
(1561, 'San Felipe', 77, '2204'),
(1562, 'San Marcelino', 77, '2207'),
(1563, 'San Narciso', 77, '2205'),
(1564, 'Santa Cruz', 77, '2213'),
(1565, 'Subic', 77, ''),
(1566, 'Dapitan City', 78, '7101'),
(1567, 'Dipolog City', 78, '7100'),
(1568, 'Bacungan', 78, ''),
(1569, 'Baliguian', 78, '7123'),
(1570, 'Godod', 78, ''),
(1571, 'Gutalac', 78, '7118'),
(1572, 'Jose Dalman', 78, '7111'),
(1573, 'Kalawit', 78, '7124'),
(1574, 'Katipunan', 78, '7109'),
(1575, 'La Libertad', 78, '7119'),
(1576, 'Labason', 78, '7117'),
(1577, 'Liloy', 78, '7115'),
(1578, 'Manukan', 78, '7110'),
(1579, 'Mutia', 78, '7107'),
(1580, 'Piñan', 78, '7105'),
(1581, 'Polanco', 78, '7106'),
(1582, 'President Manuel A. Roxas', 78, ''),
(1583, 'Rizal', 78, '7104'),
(1584, 'Salug', 78, '7114'),
(1585, 'Sergio Osmeña Sr.', 78, ''),
(1586, 'Siayan', 78, '7113'),
(1587, 'Sibuco', 78, '7122'),
(1588, 'Sibutad', 78, '7103'),
(1589, 'Sindangan', 78, '7112'),
(1590, 'Siocon', 78, '7120'),
(1591, 'Sirawai', 78, ''),
(1592, 'Tampilisan', 78, '7116'),
(1593, 'Pagadian City', 79, '7016'),
(1594, 'Zamboanga City', 79, '7000'),
(1595, 'Aurora', 79, '7020'),
(1596, 'Bayog', 79, '7011'),
(1597, 'Dimataling', 79, '7032'),
(1598, 'Dinas', 79, '7030'),
(1599, 'Dumalinao', 79, '7015'),
(1600, 'Dumingag', 79, '7028'),
(1601, 'Guipos', 79, '7042'),
(1602, 'Josefina', 79, '7027'),
(1603, 'Kumalarang', 79, '7013'),
(1604, 'Labangan', 79, '7017'),
(1605, 'Lakewood', 79, '7014'),
(1606, 'Lapuyan', 79, '7037'),
(1607, 'Mahayag', 79, '7026'),
(1608, 'Margosatubig', 79, ''),
(1609, 'Midsalip', 79, '7021'),
(1610, 'Molave', 79, '7023'),
(1611, 'Pitogo', 79, '7033'),
(1612, 'Ramon Magsaysay', 79, '7024'),
(1613, 'San Miguel', 79, '7029'),
(1614, 'San Pablo', 79, '7031'),
(1615, 'Sominot', 79, ''),
(1616, 'Tabina', 79, '7034'),
(1617, 'Tambulig', 79, '7025'),
(1618, 'Tigbao', 79, '7043'),
(1619, 'Tukuran', 79, '7019'),
(1620, 'Vincenzo A. Sagun', 79, ''),
(1621, 'Alicia', 80, '7040'),
(1622, 'Buug', 80, ''),
(1623, 'Diplahan', 80, '7039'),
(1624, 'Imelda', 80, '7007'),
(1625, 'Ipil', 80, '7001'),
(1626, 'Kabasalan', 80, '7005'),
(1627, 'Mabuhay', 80, '7010'),
(1628, 'Malangas', 80, '7038'),
(1629, 'Naga', 80, '7004'),
(1630, 'Olutanga', 80, '7041'),
(1631, 'Payao', 80, '7008'),
(1632, 'Roseller Lim', 80, '7002'),
(1633, 'Siay', 80, '7006'),
(1634, 'Talusan', 80, '7012'),
(1635, 'Titay', 80, '7003'),
(1636, 'Tungawan', 80, '7018');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featured_units`
--

CREATE TABLE `featured_units` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `unit_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_units`
--

INSERT INTO `featured_units` (`id`, `user_id`, `unit_id`, `created_at`, `updated_at`) VALUES
(8, 37, 40, '2020-02-13 06:52:38', '2020-02-13 06:52:38'),
(9, 37, 41, '2020-02-13 07:50:03', '2020-02-13 07:50:03'),
(10, 37, 42, '2020-02-13 07:58:22', '2020-02-13 07:58:22'),
(11, 37, 43, '2020-02-13 08:03:08', '2020-02-13 08:03:08'),
(12, 37, 45, '2020-02-13 08:25:12', '2020-02-13 08:25:12'),
(13, 37, 46, '2020-02-13 08:25:57', '2020-02-13 08:25:57'),
(14, 37, 47, '2020-02-13 08:27:11', '2020-02-13 08:27:11'),
(15, 37, 48, '2020-02-14 06:41:03', '2020-02-14 06:41:03'),
(16, 37, 49, '2020-02-14 07:14:26', '2020-02-14 07:14:26'),
(17, 37, 1, '2020-02-17 06:57:28', '2020-02-17 06:57:28'),
(18, 37, 2, '2020-02-17 07:07:03', '2020-02-17 07:07:03'),
(19, 38, 3, '2020-02-17 07:53:20', '2020-02-17 07:53:20'),
(20, 37, 4, '2020-02-17 08:26:43', '2020-02-17 08:26:43'),
(21, 37, 5, '2020-02-17 08:27:52', '2020-02-17 08:27:52'),
(22, 37, 6, '2020-02-17 08:41:45', '2020-02-17 08:41:45'),
(23, 37, 7, '2020-02-17 08:42:17', '2020-02-17 08:42:17'),
(24, 37, 8, '2020-02-17 08:48:33', '2020-02-17 08:48:33'),
(25, 37, 9, '2020-02-17 08:51:35', '2020-02-17 08:51:35'),
(26, 37, 10, '2020-02-17 08:52:05', '2020-02-17 08:52:05'),
(27, 37, 11, '2020-02-17 09:42:49', '2020-02-17 09:42:49'),
(28, 37, 12, '2020-02-17 09:45:13', '2020-02-17 09:45:13'),
(29, 37, 13, '2020-02-17 09:45:43', '2020-02-17 09:45:43'),
(30, 37, 14, '2020-02-17 09:54:04', '2020-02-17 09:54:04'),
(31, 37, 15, '2020-02-17 09:57:47', '2020-02-17 09:57:47'),
(32, 37, 16, '2020-02-18 09:02:27', '2020-02-18 09:02:27'),
(33, 37, 17, '2020-02-18 09:13:29', '2020-02-18 09:13:29'),
(34, 37, 18, '2020-02-19 02:47:58', '2020-02-19 02:47:58'),
(35, 37, 19, '2020-02-19 02:50:24', '2020-02-19 02:50:24'),
(36, 37, 20, '2020-02-19 02:51:55', '2020-02-19 02:51:55'),
(37, 37, 21, '2020-02-19 07:22:24', '2020-02-19 07:22:24'),
(38, 37, 22, '2020-02-19 07:27:24', '2020-02-19 07:27:24'),
(39, 37, 23, '2020-02-19 08:04:46', '2020-02-19 08:04:46'),
(40, 37, 24, '2020-02-19 08:05:38', '2020-02-19 08:05:38'),
(41, 37, 25, '2020-02-19 08:21:09', '2020-02-19 08:21:09'),
(42, 37, 26, '2020-02-19 08:21:44', '2020-02-19 08:21:44'),
(43, 37, 27, '2020-02-19 08:24:31', '2020-02-19 08:24:31'),
(44, 37, 28, '2020-02-19 08:25:08', '2020-02-19 08:25:08'),
(45, 37, 29, '2020-02-20 01:09:38', '2020-02-20 01:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(51, '2014_10_12_000000_create_users_table', 1),
(52, '2014_10_12_100000_create_password_resets_table', 1),
(53, '2017_06_19_215505_create_rooms_table', 1),
(54, '2017_06_23_163545_create_clients_table', 1),
(55, '2017_06_23_163617_create_reservations_table', 1),
(56, '2020_01_17_062832_create_sample_models_table', 1),
(57, '2020_01_20_081054_create_apps_countries_table', 1),
(59, '2020_01_21_071945_create_agencies_table', 1),
(60, '2020_01_22_015543_create_property_type_models_table', 1),
(61, '2020_01_24_020631_create_properties_table', 1),
(62, '2020_01_24_080932_create_apps_cities_table', 2),
(63, '2020_01_27_100939_create_property_fetures_table', 2),
(64, '2020_02_03_085721_create_photos_table', 3),
(68, '2020_02_04_021535_create_videos_table', 4),
(69, '2020_02_04_021552_create_tags_table', 4),
(70, '2020_02_04_021626_create_taggables_table', 4),
(71, '2020_02_04_032123_create_addresses_table', 5),
(72, '2020_02_05_055306_create_roles_table', 6),
(73, '2019_08_19_000000_create_failed_jobs_table', 7),
(74, '2020_02_05_092724_create_user_models_table', 7),
(75, '2020_02_06_010402_create_role_user_tabble', 8),
(76, '2020_02_06_050312_create_featured_units_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jerryaustria@gmail.com', '$2y$10$lCtzzsgx8KRWvh16tlmhsuKhmHX0kxXQV1YsmqwrseADZSKWSEHcm', '2020-01-30 01:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` int(20) UNSIGNED DEFAULT NULL,
  `imageable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `path`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(74, '1581933180jerry 1x1.jpg', 37, 'App\\User', '2020-02-17 01:53:00', '2020-02-17 01:53:00', NULL),
(75, '1582160978banner.jpg', 29, 'App\\Unit', '2020-02-20 01:09:38', '2020-02-20 01:09:38', NULL),
(76, '1582160978condo1.jpg', 29, 'App\\Unit', '2020-02-20 01:09:38', '2020-02-20 01:09:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_fetures`
--

CREATE TABLE `property_fetures` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_fetures`
--

INSERT INTO `property_fetures` (`id`, `name`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Air Conditioning', 0, '2020-01-12 16:00:00', '2020-01-09 16:00:00'),
(2, 'Internet', 0, '2020-01-22 16:00:00', '2020-01-22 16:00:00'),
(7, 'Use of pool', 0, '2020-01-12 16:00:00', '2020-01-09 16:00:00'),
(8, 'Cable Tv', 0, '2020-01-22 16:00:00', '2020-01-22 16:00:00'),
(9, 'Terrace', 0, '2020-01-12 16:00:00', '2020-01-09 16:00:00'),
(10, 'Wi-Fi', 0, '2020-01-22 16:00:00', '2020-01-22 16:00:00'),
(11, 'Bedding', 0, '2020-01-12 16:00:00', '2020-01-09 16:00:00'),
(12, 'Microwave', 0, '2020-01-22 16:00:00', '2020-01-22 16:00:00'),
(13, 'Toaster', 0, '2020-01-12 16:00:00', '2020-01-09 16:00:00'),
(14, 'Parquet', 0, '2020-01-22 16:00:00', '2020-01-22 16:00:00'),
(15, 'Balcony', 0, '2020-01-12 16:00:00', '2020-01-09 16:00:00'),
(16, 'Beach', 0, '2020-01-22 16:00:00', '2020-01-22 16:00:00'),
(17, 'Heating', 0, '2020-01-12 16:00:00', '2020-01-09 16:00:00'),
(18, 'Smoking allowed', 0, '2020-01-22 16:00:00', '2020-01-22 16:00:00'),
(19, 'Coffee pot', 0, '2020-01-12 16:00:00', '2020-01-09 16:00:00'),
(20, 'Roof Terrace', 0, '2020-01-22 16:00:00', '2020-01-22 16:00:00'),
(21, 'Iron', 0, '2020-01-12 16:00:00', '2020-01-09 16:00:00'),
(22, 'Garage', 0, '2020-01-22 16:00:00', '2020-01-22 16:00:00'),
(23, 'Swimming fool', 37, '2020-02-14 01:53:18', '2020-02-14 01:53:18'),
(24, 'another', 37, '2020-02-14 01:56:16', '2020-02-14 01:56:16'),
(25, 'isa pa', 37, '2020-02-14 01:56:33', '2020-02-14 01:56:33'),
(26, 'anothe uli', 37, '2020-02-14 01:57:49', '2020-02-14 01:57:49'),
(27, 'isang chicken book', 37, '2020-02-14 01:58:01', '2020-02-14 01:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `property_type_models`
--

CREATE TABLE `property_type_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_type_models`
--

INSERT INTO `property_type_models` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Apartment', '2020-01-07 16:00:00', '2020-01-15 16:00:00'),
(2, 'Condominium', '2020-01-22 16:00:00', '2020-01-22 16:00:00'),
(3, 'Cottage', '2020-01-14 16:00:00', '2020-01-09 16:00:00'),
(4, 'Flat', '2020-01-24 16:00:00', '2020-01-22 16:00:00'),
(5, 'House', '2020-01-12 16:00:00', '2020-01-09 16:00:00'),
(6, 'sample type', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`) VALUES
(1, 'Abra'),
(2, 'Agusan del Norte'),
(3, 'Agusan del Sur'),
(4, 'Aklan'),
(5, 'Albay'),
(6, 'Antique'),
(7, 'Apayao'),
(8, 'Aurora'),
(9, 'Basilan'),
(10, 'Bataan'),
(11, 'Batanes'),
(12, 'Batangas'),
(13, 'Benguet'),
(14, 'Biliran'),
(15, 'Bohol'),
(16, 'Bukidnon'),
(17, 'Bulacan'),
(18, 'Cagayan'),
(19, 'Camarines Norte'),
(20, 'Camarines Sur'),
(21, 'Camiguin'),
(22, 'Capiz'),
(23, 'Catanduanes'),
(24, 'Cavite'),
(25, 'Cebu'),
(26, 'Compostela Valley'),
(27, 'Cotabato'),
(28, 'Davao del Norte'),
(29, 'Davao del Sur'),
(30, 'Davao Oriental'),
(31, 'Eastern Samar'),
(32, 'Guimaras'),
(33, 'Ifugao'),
(34, 'Ilocos Norte'),
(35, 'Ilocos Sur'),
(36, 'Iloilo'),
(37, 'Isabela'),
(38, 'Kalinga'),
(39, 'La Union'),
(40, 'Laguna'),
(41, 'Lanao del Norte'),
(42, 'Lanao del Sur'),
(43, 'Leyte'),
(44, 'Maguindanao'),
(45, 'Marinduque'),
(46, 'Masbate'),
(47, 'Metro Manila'),
(48, 'Misamis Occidental'),
(49, 'Misamis Oriental'),
(50, 'Mountain Province'),
(51, 'Negros Occidental'),
(52, 'Negros Oriental'),
(53, 'Northern Samar'),
(54, 'Nueva Ecija'),
(55, 'Nueva Vizcaya'),
(56, 'Occidental Mindoro'),
(57, 'Oriental Mindoro'),
(58, 'Palawan'),
(59, 'Pampanga'),
(60, 'Pangasinan'),
(61, 'Quezon'),
(62, 'Quirino'),
(63, 'Rizal'),
(64, 'Romblon'),
(65, 'Samar'),
(66, 'Sarangani'),
(67, 'Siquijor'),
(68, 'Sorsogon'),
(69, 'South Cotabato'),
(70, 'Southern Leyte'),
(71, 'Sultan Kudarat'),
(72, 'Sulu'),
(73, 'Surigao del Norte'),
(74, 'Surigao del Sur'),
(75, 'Tarlac'),
(76, 'Tawi-Tawi'),
(77, 'Zambales'),
(78, 'Zamboanga del Norte'),
(79, 'Zamboanga del Sur'),
(80, 'Zamboanga Sibugay');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `room_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', NULL, NULL),
(3, 'Free', NULL, NULL),
(4, 'Silver', NULL, NULL),
(5, 'Gold', NULL, NULL),
(6, 'Subscriber', NULL, NULL),
(7, 'Guest', NULL, NULL),
(8, 'Agent', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 0, 0, NULL, NULL),
(2, 2, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sample_models`
--

CREATE TABLE `sample_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sale', '2020-01-12 16:00:00', '2020-01-09 16:00:00'),
(2, 'Rent', '2020-01-22 16:00:00', '2020-01-22 16:00:00'),
(3, 'unknown', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taggables`
--

CREATE TABLE `taggables` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(11) NOT NULL,
  `taggable_id` int(11) NOT NULL,
  `taggable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taggables`
--

INSERT INTO `taggables` (`id`, `tag_id`, `taggable_id`, `taggable_type`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'App\\Video', NULL, NULL),
(2, 2, 1, 'App\\Unit', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'units', NULL, NULL),
(2, 'users', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `Title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cities` int(11) NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `beds` int(11) DEFAULT NULL,
  `baths` int(11) DEFAULT NULL,
  `area` double DEFAULT NULL,
  `garages` double DEFAULT NULL,
  `israting` tinyint(4) NOT NULL DEFAULT '1',
  `map_lat` double DEFAULT NULL,
  `map_lon` double DEFAULT NULL,
  `price` double NOT NULL,
  `property_features` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `user_id`, `country_id`, `Title`, `Description`, `Cities`, `Address`, `property_type`, `status`, `beds`, `baths`, `area`, `garages`, `israting`, `map_lat`, `map_lon`, `price`, `property_features`, `photos`, `created_at`, `updated_at`, `deleted_at`) VALUES
(23, 37, NULL, 'This is my first post', 'this is my first post', 1189, 'mandaluyong', 1, 1, 1, 1, 1, 1, 1, 48.869407199794665, 2.2900429153442525, 1, '15|18', NULL, '2020-02-19 08:04:46', '2020-02-19 00:11:48', '2020-02-19 08:11:48'),
(24, 37, NULL, 'This is my second Post', 'This is my second Post', 1189, 'makati', 1, 1, 2, 2, 2, 2, 0, 48.869322513477734, 2.2895708465576314, 2, '18|21', NULL, '2020-02-19 08:05:38', '2020-02-19 00:11:48', '2020-02-19 08:11:48'),
(25, 37, NULL, 'Thei si first', 'Thei si first', 1189, 'makati', 1, 1, 1, 1, 1, 1, 1, 48.869068453666905, 2.2884979629516744, 1, '15|16', NULL, '2020-02-19 08:21:09', '2020-02-19 00:23:40', '2020-02-19 08:23:40'),
(26, 37, NULL, 'This is second', 'This is second', 1189, 'mandaluyong', 1, 1, 1, 1, 20, 20, 1, 48.870169370197246, 2.2917595291137838, 2, '15|16', NULL, '2020-02-19 08:21:44', '2020-02-19 00:23:40', '2020-02-19 08:23:40'),
(27, 37, NULL, 'First post', 'first post', 1189, 'mandaluyong', 1, 1, 1, 1, 20, 20, 1, 48.8700846851703, 2.290557899475112, 12, '12|15', NULL, '2020-02-19 08:24:31', '2020-02-19 00:25:32', '2020-02-19 08:25:32'),
(28, 37, NULL, 'Second Post', 'Second Post', 1189, 'makati', 1, 1, 2, 2, 20, 20, 1, 48.87033873982119, 2.2906866455078267, 2, '9|15', NULL, '2020-02-19 08:25:08', '2020-02-19 00:25:32', '2020-02-19 08:25:32'),
(29, 37, NULL, 'First post', '12312 ten characters', 1189, 'mandaluyong', 1, 1, 1, 1, 1, 1, 1, 48.87000000000001, 2.2889700317382955, 1, '18|21|27', NULL, '2020-02-20 01:09:38', '2020-02-20 01:09:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Account_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Regular User',
  `Agency_id` int(11) DEFAULT NULL,
  `country_id` bigint(197) DEFAULT NULL,
  `role_id` bigint(197) UNSIGNED DEFAULT '7',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `photo_id` bigint(197) DEFAULT NULL,
  `phone` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `Account_type`, `Agency_id`, `country_id`, `role_id`, `is_active`, `photo_id`, `phone`, `skype`, `twitter`, `facebook`, `instagram`, `about_me`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(37, 'Jerry Austria', 'jerryaustria@gmail.com', '$2y$10$zNVkRY84z1r/EbE2LHw4D.Xm.TIXCb5rNnzUruTQVyTdnIpOSa8BG', 'Regular User', NULL, NULL, 8, 1, 74, '12345', 'idko', NULL, 'https://www.facebook.com/potpot.airtsua/about?lst=100002623026165%3A100002623026165%3A1581486050', NULL, 'this is my description', NULL, '2020-02-11 21:37:12', '2020-02-17 01:53:00', NULL),
(38, 'Lovella Austria', 'lovella@gmailcom', '$2y$10$MCqCRsfR.Y0AZ.DWTTwoDerGvcBTIDZYQQ/B4baEREDnPXmc9a3ry', 'Regular User', NULL, NULL, 7, 1, 39, NULL, NULL, NULL, NULL, NULL, 'This is about me', NULL, '2020-02-16 23:50:16', '2020-02-16 23:51:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_models`
--

CREATE TABLE `user_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'units_video.mov', NULL, NULL),
(2, 'User_mov', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps_cities`
--
ALTER TABLE `apps_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps_countries`
--
ALTER TABLE `apps_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_units`
--
ALTER TABLE `featured_units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `featured_units_user_id_index` (`user_id`),
  ADD KEY `featured_units_unit_id_index` (`unit_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_fetures`
--
ALTER TABLE `property_fetures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_type_models`
--
ALTER TABLE `property_type_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_client_id_foreign` (`client_id`),
  ADD KEY `reservations_room_id_foreign` (`room_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_index` (`user_id`),
  ADD KEY `role_user_role_id_index` (`role_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sample_models`
--
ALTER TABLE `sample_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taggables`
--
ALTER TABLE `taggables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Drop` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_models`
--
ALTER TABLE `user_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apps_cities`
--
ALTER TABLE `apps_cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apps_countries`
--
ALTER TABLE `apps_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1637;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featured_units`
--
ALTER TABLE `featured_units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_fetures`
--
ALTER TABLE `property_fetures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `property_type_models`
--
ALTER TABLE `property_type_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sample_models`
--
ALTER TABLE `sample_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `taggables`
--
ALTER TABLE `taggables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_models`
--
ALTER TABLE `user_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `reservations_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `Drop` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
