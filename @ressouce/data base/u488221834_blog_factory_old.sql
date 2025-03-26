-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 02:36 PM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u488221834_blog_factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonnement`
--

CREATE TABLE `abonnement` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `day` date NOT NULL DEFAULT current_timestamp(),
  `position` int(110) NOT NULL DEFAULT 0,
  `permalien` varchar(100) NOT NULL,
  `matricule_entreprise` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abonnement`
--

INSERT INTO `abonnement` (`id`, `nom`, `telephone`, `matricule`, `date`, `day`, `position`, `permalien`, `matricule_entreprise`) VALUES
(1, 'dony', '690386539', '', '2022-12-19 00:36:28', '2022-12-19', 0, 'college-Nkoualong-Adolph', '1');

-- --------------------------------------------------------

--
-- Table structure for table `addresse_ip`
--

CREATE TABLE `addresse_ip` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addresse_ip`
--

INSERT INTO `addresse_ip` (`id`, `ip`) VALUES
(1, '154.72.167.236'),
(2, '66.249.65.220'),
(3, '2a03:2880:11ff:c::face:b00c'),
(4, '209.141.41.193'),
(5, '209.141.36.231'),
(6, '205.185.122.184'),
(7, '209.141.55.120'),
(8, '154.72.167.254'),
(9, '129.0.76.165'),
(10, '154.72.167.253'),
(11, '129.0.76.197'),
(12, '2a03:2880:31ff:1d::face:b00c'),
(13, '2a03:2880:31ff:1c::face:b00c'),
(14, '40.77.167.20'),
(15, '154.72.150.219'),
(16, '205.185.116.89'),
(17, '2a02:4780:1:5::1a'),
(18, '154.72.150.242'),
(19, '154.72.167.133'),
(20, '40.77.167.66'),
(21, '157.55.39.207'),
(22, '154.72.167.167'),
(23, '2a03:2880:31ff:c::face:b00c'),
(24, '2a03:2880:31ff:a::face:b00c'),
(25, '2a03:2880:31ff:e::face:b00c'),
(26, '2a03:2880:31ff:16::face:b00c'),
(27, '2a03:2880:31ff:19::face:b00c'),
(28, '2a03:2880:31ff:13::face:b00c'),
(29, '2a03:2880:31ff:11::face:b00c'),
(30, '2a03:2880:31ff:4::face:b00c'),
(31, '2a03:2880:31ff:3::face:b00c'),
(32, '2a03:2880:31ff:1::face:b00c'),
(33, '2a03:2880:31ff:d::face:b00c'),
(34, '2a03:2880:31ff:2::face:b00c'),
(35, '2a03:2880:31ff:17::face:b00c'),
(36, '2a03:2880:31ff:12::face:b00c'),
(37, '2a03:2880:31ff:76::face:b00c'),
(38, '2a03:2880:31ff:74::face:b00c'),
(39, '2a03:2880:31ff::face:b00c'),
(40, '2a03:2880:31ff:8::face:b00c'),
(41, '2a03:2880:31ff:7::face:b00c'),
(42, '2a03:2880:31ff:15::face:b00c'),
(43, '2a03:2880:31ff:6::face:b00c'),
(44, '2a03:2880:31ff:18::face:b00c'),
(45, '2a03:2880:31ff:5::face:b00c'),
(46, '2a03:2880:31ff:9::face:b00c'),
(47, '2a03:2880:31ff:b::face:b00c'),
(48, '2a03:2880:31ff:f::face:b00c'),
(49, '207.46.13.19'),
(50, '154.72.167.228'),
(51, '2a06:98c0:3600::103'),
(52, '2a03:2880:27ff:75::face:b00c'),
(53, '2a03:2880:27ff:71::face:b00c'),
(54, '2a03:2880:27ff:12::face:b00c'),
(55, '2a03:2880:27ff:2::face:b00c'),
(56, '2a03:2880:27ff:1::face:b00c'),
(57, '2a03:2880:27ff:15::face:b00c'),
(58, '2a03:2880:27ff:f::face:b00c'),
(59, '66.249.65.222'),
(60, '66.249.65.218'),
(61, '154.72.167.183'),
(62, '147.78.47.249'),
(63, '2a03:2880:10ff:76::face:b00c'),
(64, '2a03:2880:10ff::face:b00c'),
(65, '2a03:2880:10ff:14::face:b00c'),
(66, '2a03:2880:20ff:2::face:b00c'),
(67, '2a03:2880:20ff:d::face:b00c'),
(68, '207.46.13.39'),
(69, '2a03:2880:27ff:3::face:b00c'),
(70, '51.15.164.30'),
(71, '217.182.175.162'),
(72, '205.210.31.20'),
(73, '154.72.167.173'),
(74, '154.72.167.149'),
(75, '154.72.167.188'),
(76, '154.72.167.201'),
(77, '2a03:2880:31ff:14::face:b00c'),
(78, '2a03:2880:31ff:78::face:b00c'),
(79, '2a03:2880:31ff:77::face:b00c'),
(80, '2a03:2880:22ff:e::face:b00c'),
(81, '2a03:2880:31ff:1b::face:b00c'),
(82, '2a03:2880:27ff:14::face:b00c'),
(83, '2a03:2880:27ff:17::face:b00c'),
(84, '154.72.167.218'),
(85, '209.141.35.128'),
(86, '207.46.13.222'),
(87, '2a03:2880:12ff:d::face:b00c'),
(88, '2a03:2880:12ff:e::face:b00c'),
(89, '2a03:2880:12ff:8::face:b00c'),
(90, '2a03:2880:12ff:f::face:b00c'),
(91, '2a03:2880:10ff:75::face:b00c'),
(92, '209.141.49.169'),
(93, '154.72.167.240'),
(94, '27.115.124.38'),
(95, '180.163.220.3'),
(96, '42.236.10.75'),
(97, '154.72.167.209'),
(98, '129.0.99.129'),
(99, '190.115.175.73'),
(100, '129.0.76.110'),
(101, '154.72.167.250'),
(102, '88.202.5.195'),
(103, '41.216.47.138'),
(104, '129.0.99.37'),
(105, '41.202.219.71'),
(106, '154.66.172.33'),
(107, '154.72.169.140'),
(108, '102.244.220.236'),
(109, '154.72.167.128'),
(110, '102.244.178.93'),
(111, '129.0.76.59'),
(112, '102.244.220.37'),
(113, '91.205.43.161'),
(114, '2a03:2880:22ff:d::face:b00c'),
(115, '2a03:2880:22ff:3::face:b00c'),
(116, '2a03:2880:22ff:2::face:b00c'),
(117, '2a03:2880:22ff:7::face:b00c'),
(118, '45.32.168.177'),
(119, '2a03:2880:20ff:77::face:b00c'),
(120, '2a03:2880:22ff::face:b00c'),
(121, '154.72.150.156'),
(122, '42.236.10.84'),
(123, '2a03:2880:22ff:c::face:b00c'),
(124, '2a03:2880:24ff:4::face:b00c'),
(125, '154.72.150.228'),
(126, '2a03:2880:23ff:7::face:b00c'),
(127, '2a03:2880:22ff:75::face:b00c'),
(128, '2a03:2880:22ff:b::face:b00c'),
(129, '2a03:2880:22ff:74::face:b00c'),
(130, '2a03:2880:22ff:10::face:b00c'),
(131, '2a03:2880:13ff:10::face:b00c'),
(132, '2a03:2880:10ff:8::face:b00c'),
(133, '2a03:2880:13ff:d::face:b00c'),
(134, '2a03:2880:3ff:5::face:b00c'),
(135, '2a03:2880:27ff:10::face:b00c'),
(136, '40.77.167.21'),
(137, '41.202.207.15'),
(138, '209.141.36.112'),
(139, '209.141.51.222'),
(140, '205.185.116.25'),
(141, '113.172.148.99'),
(142, '77.119.196.87'),
(143, '2a03:2880:13ff:b::face:b00c'),
(144, '2a03:2880:21ff:77::face:b00c'),
(145, '2a03:2880:24ff:75::face:b00c'),
(146, '2a03:2880:24ff:74::face:b00c'),
(147, '2a03:2880:24ff:77::face:b00c'),
(148, '2a03:2880:21ff:8::face:b00c'),
(149, '2a03:2880:21ff:76::face:b00c'),
(150, '41.243.2.72'),
(151, '205.210.31.40'),
(152, '2a03:2880:23ff:14::face:b00c'),
(153, '129.0.99.210'),
(154, '190.115.175.134'),
(155, '2a03:2880:27ff:76::face:b00c'),
(156, '154.72.167.181'),
(157, '209.141.34.187'),
(158, '2a03:2880:ff::face:b00c'),
(159, '2a03:2880:ff:2::face:b00c'),
(160, '157.55.39.224'),
(161, '2a03:2880:11ff:d::face:b00c'),
(162, '89.106.127.108'),
(163, '129.0.226.180'),
(164, '154.72.167.134'),
(165, '180.163.220.67'),
(166, '27.115.124.45'),
(167, '121.4.105.222'),
(168, '180.163.220.68'),
(169, '65.154.226.166'),
(170, '66.249.65.214'),
(171, '2a03:2880:27ff:8::face:b00c'),
(172, '2a03:2880:25ff:78::face:b00c'),
(173, '129.0.76.159'),
(174, '87.236.176.53'),
(175, '2a03:2880:23ff:74::face:b00c'),
(176, '66.249.65.216'),
(177, '66.249.65.212'),
(178, '198.235.24.128'),
(179, '129.0.99.59'),
(180, '2a03:2880:13ff:6::face:b00c'),
(181, '2a03:2880:13ff::face:b00c'),
(182, '2a03:2880:13ff:14::face:b00c'),
(183, '2a03:2880:13ff:74::face:b00c'),
(184, '2a03:2880:32ff:78::face:b00c'),
(185, '2a03:2880:22ff:f::face:b00c'),
(186, '129.0.99.226'),
(187, '129.0.99.16'),
(188, '207.46.13.160'),
(189, '205.210.31.48'),
(190, '2a03:2880:10ff:74::face:b00c'),
(191, '5.161.144.64'),
(192, '5.161.133.63'),
(193, '2a01:4ff:f0:81c::1'),
(194, '2a01:4ff:f0:b4e3::1'),
(195, '2a03:2880:11ff:76::face:b00c'),
(196, '2a03:2880:22ff:11::face:b00c'),
(197, '2a03:2880:11ff:77::face:b00c'),
(198, '129.0.76.147'),
(199, '27.115.124.101'),
(200, '154.72.150.209'),
(201, '27.115.124.6'),
(202, '2a03:2880:30ff:3::face:b00c'),
(203, '129.0.99.204'),
(204, '198.235.24.11'),
(205, '196.202.236.195'),
(206, '5.75.232.211'),
(207, '129.0.99.137'),
(208, '2a03:2880:22ff:76::face:b00c'),
(209, '2a03:2880:22ff:12::face:b00c'),
(210, '129.0.76.3'),
(211, '154.73.203.145'),
(212, '154.73.203.174'),
(213, '2a03:2880:32ff:1::face:b00c'),
(214, '195.24.193.222'),
(215, '129.0.99.208'),
(216, '129.0.76.61'),
(217, '40.77.167.22'),
(218, '157.55.39.14'),
(219, '2a03:2880:30ff:75::face:b00c'),
(220, '2a03:2880:30ff:c::face:b00c'),
(221, '2a03:2880:27ff:c::face:b00c'),
(222, '35.206.243.197'),
(223, '2a03:2880:13ff:78::face:b00c'),
(224, '2a03:2880:27ff::face:b00c'),
(225, '2a03:2880:3ff:4::face:b00c'),
(226, '129.0.205.85'),
(227, '2a03:2880:32ff:17::face:b00c'),
(228, '154.72.150.178'),
(229, '154.72.150.202'),
(230, '154.72.167.210'),
(231, '129.0.99.187'),
(232, '129.0.99.8'),
(233, '2a03:2880:22ff:4::face:b00c'),
(234, '159.65.0.220'),
(235, '66.249.70.58'),
(236, '209.141.33.65'),
(237, '2a03:2880:12ff:74::face:b00c'),
(238, '2a03:2880:12ff:76::face:b00c'),
(239, '154.72.150.177'),
(240, '129.0.76.72'),
(241, '2a03:2880:27ff:e::face:b00c'),
(242, '154.72.150.215'),
(243, '207.46.13.169'),
(244, '157.55.39.19'),
(245, '129.0.76.91'),
(246, '196.171.33.178'),
(247, '66.249.70.60'),
(248, '66.249.70.56'),
(249, '207.46.13.96'),
(250, '2a03:2880:22ff:8::face:b00c'),
(251, '157.55.39.222'),
(252, '154.72.167.226'),
(253, '154.72.167.148'),
(254, '2a03:2880:31ff:75::face:b00c'),
(255, '2a03:2880:27ff:13::face:b00c'),
(256, '2a03:2880:27ff:16::face:b00c'),
(257, '2a03:2880:27ff:11::face:b00c'),
(258, '2a03:2880:27ff:74::face:b00c'),
(259, '2a03:2880:27ff:a::face:b00c'),
(260, '2a03:2880:27ff:4::face:b00c'),
(261, '2a03:2880:27ff:d::face:b00c'),
(262, '2a03:2880:11ff:13::face:b00c'),
(263, '2a03:2880:13ff:9::face:b00c'),
(264, '2a03:2880:32ff:76::face:b00c'),
(265, '2a03:2880:23ff:5::face:b00c'),
(266, '2a03:2880:23ff:4::face:b00c'),
(267, '2a03:2880:23ff:15::face:b00c'),
(268, '2a03:2880:32ff:c::face:b00c'),
(269, '129.0.76.176'),
(270, '2a03:2880:25ff:74::face:b00c'),
(271, '2a03:2880:12ff:4::face:b00c'),
(272, '2a03:2880:12ff:77::face:b00c'),
(273, '2a03:2880:12ff:10::face:b00c'),
(274, '2a03:2880:25ff:3::face:b00c'),
(275, '2a03:2880:20ff:7::face:b00c'),
(276, '207.46.13.91'),
(277, '2a03:2880:11ff:10::face:b00c'),
(278, '154.72.150.189'),
(279, '2a03:2880:24ff:76::face:b00c'),
(280, '207.46.13.175'),
(281, '129.0.76.155'),
(282, '139.59.100.179'),
(283, '154.72.150.188'),
(284, '154.72.150.216'),
(285, '129.0.76.43'),
(286, '2a03:2880:3ff::face:b00c'),
(287, '2a03:2880:3ff:76::face:b00c'),
(288, '2a03:2880:27ff:78::face:b00c'),
(289, '2a03:2880:3ff:6::face:b00c'),
(290, '2a03:2880:ff:4::face:b00c'),
(291, '129.0.99.144'),
(292, '181.215.185.146'),
(293, '134.202.250.246'),
(294, '179.60.183.31'),
(295, '200.10.35.184'),
(296, '168.196.236.217'),
(297, '168.196.236.57'),
(298, '200.10.34.149'),
(299, '168.196.236.79'),
(300, '194.233.150.201'),
(301, '181.215.185.17'),
(302, '45.152.177.93'),
(303, '103.230.69.166'),
(304, '23.26.229.196'),
(305, '194.233.150.192'),
(306, '168.196.236.116'),
(307, '134.202.250.194'),
(308, '2.59.60.95'),
(309, '2a03:2880:13ff:13::face:b00c'),
(310, '2a03:2880:25ff:77::face:b00c'),
(311, '2a03:2880:11ff:a::face:b00c'),
(312, '2a03:2880:11ff:9::face:b00c'),
(313, '2a03:2880:ff:5::face:b00c'),
(314, '205.210.31.59'),
(315, '51.158.109.3'),
(316, '2a03:2880:13ff:75::face:b00c'),
(317, '2a03:2880:13ff:16::face:b00c'),
(318, '2a03:2880:13ff:5::face:b00c'),
(319, '2a03:2880:12ff:c::face:b00c'),
(320, '157.55.39.142'),
(321, '2a03:2880:22ff:14::face:b00c'),
(322, '2a03:2880:22ff:77::face:b00c'),
(323, '198.235.24.164'),
(324, '34.28.38.210'),
(325, '207.46.13.87'),
(326, '129.0.76.111'),
(327, '205.210.31.174'),
(328, '87.236.176.77'),
(329, '2a03:2880:30ff:e::face:b00c'),
(330, '2a03:2880:30ff:d::face:b00c'),
(331, '205.210.31.25'),
(332, '207.46.13.18'),
(333, '157.55.39.1'),
(334, '207.46.13.71'),
(335, '129.0.76.28'),
(336, '154.72.167.192'),
(337, '66.249.64.218'),
(338, '66.249.64.220'),
(339, '66.249.64.216'),
(340, '52.167.144.95'),
(341, '2a03:2880:10ff:13::face:b00c'),
(342, '129.0.76.140'),
(343, '157.55.39.86'),
(344, '41.99.90.230'),
(345, '2a03:2880:32ff:13::face:b00c'),
(346, '154.72.150.236'),
(347, '157.55.39.115'),
(348, '52.167.144.29'),
(349, '52.167.144.76'),
(350, '45.128.160.176'),
(351, '2a03:2880:3ff:1::face:b00c'),
(352, '2a03:2880:3ff:2::face:b00c'),
(353, '154.72.167.206'),
(354, '129.0.99.135'),
(355, '2a03:2880:3ff:74::face:b00c'),
(356, '85.202.81.174'),
(357, '129.0.76.14'),
(358, '190.115.179.50'),
(359, '85.202.81.6'),
(360, '205.185.121.69'),
(361, '154.72.167.162'),
(362, '154.72.167.175'),
(363, '41.202.219.77'),
(364, '185.40.63.177'),
(365, '41.82.89.254'),
(366, '137.255.10.69'),
(367, '2a03:2880:13ff:2::face:b00c'),
(368, '2a03:2880:25ff:4::face:b00c'),
(369, '198.235.24.180'),
(370, '2a03:2880:10ff:7::face:b00c'),
(371, '159.223.168.91'),
(372, '157.55.39.18'),
(373, '40.77.167.188'),
(374, '2a03:2880:27ff:9::face:b00c'),
(375, '205.210.31.173'),
(376, '41.202.219.69'),
(377, '2a03:2880:22ff:5::face:b00c'),
(378, '2a03:2880:32ff:11::face:b00c'),
(379, '2a03:2880:23ff:11::face:b00c'),
(380, '129.0.99.229'),
(381, '27.115.124.70'),
(382, '42.236.10.117'),
(383, '37.34.242.16'),
(384, '45.55.112.20'),
(385, '129.0.76.79'),
(386, '2a03:2880:22ff:16::face:b00c'),
(387, '2a03:2880:27ff:6::face:b00c'),
(388, '2a03:2880:13ff:7::face:b00c'),
(389, '52.41.74.250'),
(390, '52.209.4.190'),
(391, '205.210.31.172');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `tel_whatwapp` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sup_admin` varchar(10) DEFAULT 'non',
  `profile` varchar(225) NOT NULL,
  `permalien` varchar(100) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `verie` varchar(10) NOT NULL DEFAULT 'chef',
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `matricule_admin` varchar(20) NOT NULL,
  `matricule_akila_blog` varchar(110) NOT NULL,
  `permission` int(11) NOT NULL DEFAULT 1,
  `matricule_admin_ajout_admin` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `mat_entreprise_coment` varchar(15) NOT NULL,
  `coment` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `telephone`, `tel_whatwapp`, `email`, `matricule`, `ville`, `pays`, `region`, `poste`, `password`, `sup_admin`, `profile`, `permalien`, `active`, `verie`, `date`, `matricule_admin`, `matricule_akila_blog`, `permission`, `matricule_admin_ajout_admin`, `ip_address`, `mat_entreprise_coment`, `coment`) VALUES
(1, 'bayiha', 'dieudonne', '+237 690386539', '', 'soukoulou2022@gmail.com', '53751220913\r\n', 'Douala', '8', '', 'CTO', 'soukoulou', 'oui', 'WIN_20230123_11_59_30_Pro.jpg', 'soukoulou', 2, 'chef', '2022-12-23 15:10:26', '15215885894', '1012.1121', 2, '', '', '', '0'),
(14, 'NEO 47', 'COMPANY', '679298548', '', 'neo-company@gmail.com', '96471230316', 'Douala', '8', 'Littoral', '', 'password', 'non', '23-04-02-22akila_blog.jpg', '', 2, 'chef', '2023-03-16 12:16:04', '14983230316', '', 1, '15215885894', '', '', '0'),
(15, 'Bianana', 'Frank', '0690386539', '2369669586', 'frankbiananna@gmail.com', '60295230325', 'Douala', '8', 'Littoral', '', 'password', 'oui', '', '', 2, 'chef', '2023-03-25 08:58:35', '2159230325', '', 2, '15215885894', '', '', '0'),
(16, 'Cabrole', 'Leugueng', '0690386539', '', 'cabole@gmail.com', '', 'Douala', '8', 'Littoral', '', 'password', 'non', '', '', 1, 'chef', '2023-04-03 07:38:17', '95156230403', '', 1, '14983230316', '', '', '0'),
(17, 'Blog', 'Akila', '+237690386539', '+237690386539', 'akilablogfactory@gmail.com', '', 'Douala', '8', 'Littoral', '', 'password', 'non', '', '', 1, 'chef', '2023-04-27 08:50:50', '40508230427', '', 1, '15215885894', '', '', '0'),
(18, 'Ngamga', 'Sharon', '6 73 02 71 60', '673027160', 'tchambacharonne@gmail.com', '', 'Douala', '8', 'Littoral', '', 'jG!$#Z6cM)YCQ6&amp;3', 'non', '', '', 2, 'chef', '2023-05-05 14:44:23', '63523230505', '', 1, '15215885894', '', '', '0'),
(19, 'Zambo', 'Joseph', '237656140453', '237656140453', 'anjgroup2019@gmail.com', '', 'Yaoundé', '8', 'Centre', '', 'ffA!CBeYkjd$g(Ct', 'non', '', '', 2, 'chef', '2023-05-13 05:33:06', '23457230513', '', 1, '15215885894', '', '', '0'),
(20, 'Cabrole', '', '', '', 'ca@gmail.com', '', '', '', '', '', '', 'non', '', '', 1, 'chef', '2023-05-20 07:50:40', '4022762Com', '', 1, '', '129.0.82.230', '68650230326', '1'),
(21, 'Dieudonné Bayiha', '', '', '', 'dieudonnebayiha@manaschool.net', '', '', '', '', '', '', 'non', '', '', 1, 'chef', '2023-05-22 08:21:00', '3149001Com', '', 1, '', '154.72.167.97', '68650230326', '1'),
(22, 'BIANANNA FRANK WILLIAM', '', '', '', 'akilaeshopfactory@gmail.com', '', '', '', '', '', '', 'non', '', '', 1, 'chef', '2023-05-23 19:40:36', '9043975Com', '', 1, '', '169.150.196.66', '84022230430', '1'),
(23, 'FRANK BIANANNA', '', '', '', 'frankbiananna@gmail.com', '', '', '', '', '', '', 'non', '', '', 1, 'chef', '2023-05-23 20:24:03', '9209993Com', '', 1, '', '169.150.196.66', '68650230326', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_entreprise`
--

CREATE TABLE `admin_entreprise` (
  `id` int(11) NOT NULL,
  `matricule_admin` varchar(15) NOT NULL,
  `matricule_entreprise` varchar(15) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_entreprise`
--

INSERT INTO `admin_entreprise` (`id`, `matricule_admin`, `matricule_entreprise`, `date`) VALUES
(1, '14983230316', '11885230316', '2023-03-24 10:12:21'),
(17, '95156230403', '68650230326', '2023-04-04 00:53:28'),
(18, '40508230427', '30491230427', '2023-04-27 09:56:39'),
(19, '40508230427', '13369230429', '2023-04-29 14:20:00'),
(20, '40508230427', '84022230430', '2023-04-30 07:23:42'),
(21, '40508230427', '16508230505', '2023-05-05 11:24:51'),
(22, '63523230505', '16508230505', '2023-05-05 15:22:59'),
(23, '40508230427', '18690230510', '2023-05-10 06:56:20'),
(24, '40508230427', '11885230316', '2023-05-12 10:29:38'),
(25, '95156230403', '11885230316', '2023-05-12 10:34:06'),
(27, '23457230513', '30491230427', '2023-05-13 05:34:03'),
(28, '95156230403', '30491230427', '2023-05-13 05:45:44'),
(31, '14983230316', '30491230427', '2023-05-13 06:06:01'),
(33, '40508230427', '4579230515', '2023-05-15 11:50:28'),
(34, '40508230427', '25995230523', '2023-05-23 22:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `titre` varchar(255) NOT NULL,
  `sous_titre` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `id_categorie` varchar(20) NOT NULL,
  `user_admin` varchar(100) NOT NULL,
  `matricule_entreprise` varchar(110) NOT NULL,
  `date1` varchar(10) NOT NULL,
  `publie` int(1) NOT NULL DEFAULT 1,
  `mots_cles` varchar(255) NOT NULL,
  `img_vedette` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_titre` varchar(100) NOT NULL,
  `siviteurs` longtext NOT NULL,
  `jaime` int(2) NOT NULL,
  `matricule_admin` varchar(15) NOT NULL,
  `lien_service` varchar(255) NOT NULL,
  `call_action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `photo`, `titre`, `sous_titre`, `content`, `matricule`, `date`, `time`, `datetime`, `id_categorie`, `user_admin`, `matricule_entreprise`, `date1`, `publie`, `mots_cles`, `img_vedette`, `meta_description`, `meta_titre`, `siviteurs`, `jaime`, `matricule_admin`, `lien_service`, `call_action`) VALUES
(1, '167805909806323.jpeg', 'tenue une réunion assise extraordinaire', '', '<p>⭐️⭐️⭐️ ACTUALITE ⭐️⭐️⭐️<br />\r\n<br />\r\nCe Vendredi 03/03/2023, s&rsquo;est tenue une r&eacute;union/assise extraordinaire au sein du prestigieux groupe d&rsquo;&eacute;cole Tunisien ESPRIT en pr&eacute;sence de l&rsquo;administration et des &eacute;tudiants &eacute;trangers principalement d&rsquo;Afrique Subsaharienne.<br />\r\n<br />\r\nS&eacute;ance qui portait sur la situation actuelle en Tunisie afin d&rsquo;&eacute;couter les &eacute;tudiants et les rassurer. Un &eacute;lan qui a permis aux &eacute;tudiants de s&rsquo;exprimer. &Eacute;taient pr&eacute;sents : Le Directeur G&eacute;n&eacute;ral, le pr&eacute;sident du club inter culturel et service des internationaux. Le service des internationaux prendra le temps de continuer &agrave; r&eacute;soudre leurs pr&eacute;occupations. ????<br />\r\n<br />\r\n<a href=\"https://www.linkedin.com/company/esprit_2/\">ESPRIT (Ecole Sup&eacute;rieure Priv&eacute;e d&#39;Ing&eacute;nierie et de Technologies)</a>&nbsp;Esprit pr&eacute;pa&nbsp;<a href=\"https://www.linkedin.com/company/esprit-school-of-business-esb/\">Esprit School of Business</a>&nbsp;<a href=\"https://www.linkedin.com/in/ACoAACu_bssB2VhZISgyGDf5e84N9TlIM1WO-38\">JOVELLE ROLIXTE METUNO FOMEKONG</a>&nbsp;<a href=\"https://www.linkedin.com/in/ACoAABwoFwcBli8suJ_h_isQmN-KqMwB8CF4A2s\">TAWAMBA DOMINIQUE</a>&nbsp;<a href=\"https://www.linkedin.com/in/ACoAAAWzwIkBV49-5ou6zVMKw8Qti4U4qbTTXF8\">Salah Bousbia</a>&nbsp;<a href=\"https://www.linkedin.com/company/honorisuni/\">Honoris United Universities</a>&nbsp;<a href=\"https://www.linkedin.com/company/honoriseducationalnetwork/\">Honoris Educational Network</a>&nbsp;<a href=\"https://www.linkedin.com/in/ACoAACvaFL4B77xeJlLZQi0AaMY4VQ8Zxg0tmDs\">FRANCK ARTHUR TONKAM NOTOUOM</a>&nbsp;<a href=\"https://www.linkedin.com/in/ACoAACU61nABanRhCU6hB8W0lrg5JmibRT05D94\">Karl KENFACK TSOPGOU</a><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>Activez pour voir l&rsquo;image en plus grand.</strong></p>', '53751220913\r\n', '2023-03-17', '11:11:23', '2023-03-17 11:11:23', '1', 'NEO COMPANY', '11885230316', '', 2, '', '', '', '', '', 1, '', '', ''),
(2, 'Brown42NEO-COMPANY.png', 'Comment devenir un grand parleur ?', '', '<p>moi et toi</p>', '52057230324', '2023-03-24', '15:05:42', '2023-03-24 15:05:42', '1', 'NEO COMPANY', '11885230316', '2023-03-25', 2, '', '', '', '', '', 1, '', '', ''),
(3, '23-04-04-55akila_blog.jpg', 'Activités commerciales', '', '<p>Le commerce est une activit&eacute; &eacute;conomique d&#39;achat et de revente de biens et de services, en particulier l&#39;achat dans le but de revendre avec un profit ou un b&eacute;n&eacute;fice.<br />\r\nLes lois qui le r&eacute;gissent sont indiqu&eacute;es dans le Code de commerce et poss&egrave;de ses propres juridictions nationales ou internationales.</p>\r\n\r\n<h3>Les fondements du commerce</h3>\r\n\r\n<p>Le commerce comme d&rsquo;autres activit&eacute;s participe &agrave; l&rsquo;&eacute;conomie d&rsquo;un pays. C&rsquo;est une activit&eacute; exerc&eacute;e dans le respect de certaines r&egrave;gles.</p>\r\n\r\n<p>Commerce et droit</p>\r\n\r\n<p>Sur le plan juridique, on parle de commerce comme tout acte qualifi&eacute; de commercial par la loi. Ainsi, est commer&ccedil;ant, toute personne qui effectue des actes de commerce et en fait sa profession, agissant en son nom et pour son compte. Ces actes d&eacute;pendent de chaque pays.</p>\r\n\r\n<p>Commerce et &eacute;conomie</p>\r\n\r\n<p>L&rsquo;activit&eacute; commerciale vise &agrave; la satisfaction des besoins multiples de l&rsquo;homme. Les connaissances, la force physique et le temps dont dispose celui-ci ne lui permettent pas de produire seul tout ce dont il a besoin pour vivre. Pour donc y arriver, il lui suffit de s&rsquo;organiser : soit d&#39;une part de produire ce qu&#39;il peut et d&#39;autre part d&#39;&eacute;changer ce qu&#39;il produit contre ce dont il a besoin et qu&#39;il ne produit pas lui-m&ecirc;me.</p>\r\n\r\n<ul>\r\n	<li>L&#39;&eacute;change de marchandises</li>\r\n	<li>Stockage en amont de l&#39;exp&eacute;dition et distribution en aval</li>\r\n	<li>L&#39;assurance</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Les diff&eacute;rentes formes de commerce au Cameroun</h2>\r\n\r\n<p>La concurrence, l&rsquo;exigence des consommateurs ont fait na&icirc;tre trois formes de commerce principales en r&eacute;seaux pour accompagner les commer&ccedil;ants isol&eacute;s. Parmi elles :</p>\r\n\r\n<ul>\r\n	<li><strong>Le commerce int&eacute;gr&eacute; ou succursaliste :</strong>&nbsp;elle est compos&eacute;e de r&eacute;seaux de points de vente contr&ocirc;l&eacute;s par un groupe, qui appartient &agrave; une famille, des investisseurs ou divers actionnaires (boursiers ou non). Les points de vente sont dirig&eacute;s par des salari&eacute;s du groupe.</li>\r\n	<li><strong>Le commerce ind&eacute;pendant &laquo; isol&eacute; &raquo; :</strong>&nbsp;Ici, c&rsquo;est un commer&ccedil;ant ind&eacute;pendant qui n&rsquo;est affili&eacute; &agrave; aucun r&eacute;seau qui d&eacute;tient le point de vente. Ses magasins ne portent pas d&rsquo;enseigne. Avec seulement deux points de vente, on peut ais&eacute;ment affirmer qu&rsquo;il d&eacute;veloppe un &laquo; mini-r&eacute;seau &raquo; succursaliste.</li>\r\n	<li><strong>Le commerce ind&eacute;pendant organis&eacute; :</strong>&nbsp;c&rsquo;est une activit&eacute; commerciale qui emprunte la force de l&rsquo;entrepreneuriat ind&eacute;pendant et les effets de puissance des groupes int&eacute;gr&eacute;s. Il est compos&eacute; de deux formes principales:<br />\r\n	<strong>La franchise :</strong>&nbsp;R&eacute;seau organis&eacute; par une entreprise, &ldquo;le franchiseur&rdquo;, conc&egrave;de contractuellement sa marque, son concept et un savoir-faire &agrave; d&#39;autres entreprises ind&eacute;pendantes appel&eacute;es &ldquo;franchis&eacute;es&rdquo;.<br />\r\n	<strong>Le Commerce Coop&eacute;ratif et Associ&eacute; :</strong>&nbsp;R&eacute;seau organis&eacute; et contr&ocirc;l&eacute; par des commer&ccedil;ants ind&eacute;pendants, propri&eacute;taires des points de vente, qui se sont associ&eacute;s au sein d&#39;un groupement de commer&ccedil;ants, pour mutualiser leurs moyens et d&eacute;velopper des politiques communes : achat, enseigne, op&eacute;rations commerciales, services, etc.</li>\r\n</ul>\r\n\r\n<p>A ces trois formes de commerce, s&rsquo;ajoutent le Commerce national et le Commerce international.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Commerce et distribution</h2>\r\n\r\n<p>Deux grands modes de distribution sont possibles :</p>\r\n\r\n<ul>\r\n	<li>La mise &agrave; disposition du produit dans les locaux du fournisseur : plus pratiqu&eacute; par les petits commer&ccedil;ants, la grande distribution ou les grossistes.</li>\r\n	<li>La livraison par le fournisseur dans les locaux du client : plus pratiqu&eacute; par les installateurs du produit ou la vente via internet.</li>\r\n</ul>\r\n\r\n<p>Le secteur du commerce est tr&egrave;s vaste, il y a plusieurs domaines tels que l&rsquo;Ameublement / Mobilier, les Appareils &eacute;lectrom&eacute;nagers, les Articles m&eacute;nagers, les Centres commerciaux, Les Fleuristes, les Lingeries, les Restaurants &ndash; Bars, la Vente en ligne, etc.</p>', '61421230330', '2023-03-30', '08:10:47', '2023-03-30 08:10:47', '1258452', 'NEO', '11885230316', '', 2, '//mot/toi/je suis pas la/commerciales', '23-04-04-55akila_blog.jpg', 'La mise à disposition du produit dans les locaux du fournisseur : plus pratiqué par les petits commerçants, la grande distribution ou les grossistes.\r\nLa livraison par le fournisseur dans les locaux du client : plus pratiqué par les installateurs du produ', 'Activités commerciales', '', 0, '', '', ''),
(6, 'lapto.jpg', 'Formations professionnelles', '', '<p>Les formations professionnelles sont des programmes &eacute;ducatifs con&ccedil;us pour enseigner des comp&eacute;tences et des connaissances sp&eacute;cifiques n&eacute;cessaires pour exercer une profession ou pour am&eacute;liorer les comp&eacute;tences dans un domaine particulier. Ces formations peuvent &ecirc;tre dispens&eacute;es dans des &eacute;tablissements d&#39;enseignement, des entreprises, des associations professionnelles ou en ligne. Les avantages de suivre une formation professionnelle incluent l&#39;am&eacute;lioration des perspectives d&#39;emploi, l&#39;augmentation des salaires et l&#39;acquisition de comp&eacute;tences pratiques pour les t&acirc;ches professionnelles.</p>', '14670230330', '2023-03-30', '08:41:59', '2023-03-30 08:41:59', '1258452', 'NEO', '11885230316', '', 2, '/Les formations/professionnelles/sont', 'black.jpg', 'Des entreprises, des associations professionnelles ou en ligne. Les avantages de suivre une formation professionnelle incluent', '', '', 0, '', '', ''),
(7, '23-04-04-35akila_blog.jpg', 'Pourquoi votre entreprise doit avoir un site internet en 6 raisons', '', '<p><strong>1. Avec 60,8 millions de africain&nbsp;qui passent plus de 2h par jour sur Internet en moyenne, vos clients sont en ligne et y passent beaucoup de temps !</strong></p>\r\n\r\n<p>Quand un consommateur est &agrave; la recherche d&rsquo;un produit ou d&rsquo;un service, son r&eacute;flexe est de se renseigner via les moteurs de recherche. 80% des consommateurs cherchent des renseignements sur Internet avant de r&eacute;aliser un achat. Soyez pr&eacute;sent via votre site internet pour l&rsquo;aider, le conseiller &hellip; et lui proposer vos services ! 93% des exp&eacute;riences en ligne commencent avec un moteur de recherche, et le num&eacute;ro 1 dans le domaine est Google avec 80 000 requ&ecirc;tes chaque seconde, soit 6,9 milliards par jour. En mars 2020 ; Quand un internaute cherche sur Google, votre site peut appara&icirc;tre dans les r&eacute;sultats naturels (on parle de SEO &ndash; Search Engine Optimisation).Les annonces payantes sont un bon moyen d&rsquo;appara&icirc;tre dans le top des r&eacute;sultats Google, cependant les internautes ont tendance &agrave; privil&eacute;gier le r&eacute;f&eacute;rencement naturel, 80% des utilisateurs de Google d&eacute;clarent m&ecirc;me ignorer ses annonces</p>\r\n\r\n<p>&quot;lorsque vous arretez de communiquer, vous disparaissez &quot;</p>\r\n\r\n<p>-1pub agency -</p>\r\n\r\n<p><img alt=\"image\" src=\"https://1pub.net/assets/images/icons/blog-stand-qote.svg\" /></p>\r\n\r\n<p><strong>2. Un site internet vous permet d&rsquo;&ecirc;tre trouv&eacute; sur les moteurs de recherche, o&ugrave; 93% des exp&eacute;riences en ligne commencent.</strong></p>\r\n\r\n<p>Un site internet peut &ecirc;tre consult&eacute; par n&rsquo;importe qui, alors que le contenu publi&eacute; sur un r&eacute;seau social est en grande majorit&eacute; r&eacute;serv&eacute; &agrave; ses utilisateurs. Une partie des internautes ne pourront donc pas avoir acc&egrave;s &agrave; vos publications.</p>\r\n\r\n<p>3. Un site internet vous permet d&rsquo;inspirer confiance et de ma&icirc;triser votre communication en ligne. 56% des internautes n&rsquo;ont pas confiance dans les entreprises sans site web.</p>\r\n\r\n<p>56% des internautes n&rsquo;ont pas confiance en une entreprise sans site internet. Faire l&rsquo;impasse sur un site internet, c&rsquo;est tourner donc le dos &agrave; de nombreux clients potentiels. Poss&eacute;der son propre nom de domaine et sa propre adresse email est la base d&rsquo;une r&eacute;putation ma&icirc;tris&eacute;e (et qui dit nom de domaine, dit site internet). Il faut seulement 50 millisecondes &agrave; un internaute pour se faire une opinion de votre site internet.</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"image\" src=\"https://1pub.net/admin/assets/images_posts/1pub-agency/564622_vedette_post.png\" /></td>\r\n			<td><img alt=\"image\" src=\"https://1pub.net/admin/assets/images_posts/1pub-agency/564622_vedette_post.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt=\"image\" src=\"https://1pub.net/admin/assets/images_posts/1pub-agency/564622_vedette_post.jpg\" /></td>\r\n			<td><img alt=\"image\" src=\"https://1pub.net/admin/assets/images_posts/1pub-agency/564622_vedette_post.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt=\"image\" src=\"https://1pub.net/admin/assets/images_posts/1pub-agency/564622_vedette_post.jpg\" /></td>\r\n			<td><img alt=\"image\" src=\"https://1pub.net/admin/assets/images_posts/1pub-agency/564622_vedette_post.png\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>4. Un site vous permet de vendre en ligne &agrave; plus de 36 millions de Fran&ccedil;ais.</strong></p>\r\n\r\n<p>Il en est de la p&eacute;rennit&eacute; de votre entreprise : il vous faut des clients et Internet est un moyen efficace d&rsquo;en g&eacute;n&eacute;rer. Au vue de l&rsquo;explosion du nombre d&rsquo;utilisateurs d&rsquo;Internet, pass&eacute; de 2.485 millions en 2014 &agrave; 4.388 millions d&rsquo;utilisateurs en 2019, on peut vite se rendre compte de l&rsquo;importance et du potentiel que repr&eacute;sente Internet aujourd&rsquo;hui pour une entreprise. Et si un bon moyen de cr&eacute;er plus de trafic vers votre site internet &eacute;tait des pages web d&eacute;di&eacute;es ? Des pages de votre site internet (&ldquo;landing page&rdquo;) peuvent &ecirc;tre utilis&eacute;es dans des campagnes publicitaires sur Internet. Un internaute consultant un site internet en rapport avec votre domaine d&rsquo;activit&eacute; (ou vos produits) voit votre banni&egrave;re, clique dessus et arrive sur une page de votre site.&nbsp;<strong>Chaque clic sur la banni&egrave;re repr&eacute;sente un client potentiel qui prend connaissance de votre entreprise.</strong></p>\r\n\r\n<p>Il est d&eacute;conseill&eacute;, voire impossible selon les plateformes, d&rsquo;envoyer les internautes qui cliquent sur votre banni&egrave;re vers votre page Facebook ou LinkedIn. Vous n&rsquo;avez en effet aucune certitude que l&rsquo;internaute a un compte qui lui permettra d&rsquo;acc&eacute;der au contenu sur le r&eacute;seau social.</p>\r\n\r\n<p>Les formulaires de contact permettent aux visiteurs de poser des questions, de faire des remarques ou d&rsquo;exposer un probl&egrave;me en un rien de temps et m&ecirc;me en plein milieu de la nuit. Contrairement aux hotlines et leurs horaires diurnes,<strong>&nbsp;votre formulaire en ligne accessible tout le temps rassure&nbsp;</strong>et incite &agrave; prendre contact avec vous.</p>\r\n\r\n<p>Les formulaires sont &eacute;galement utiles dans le cadre d&rsquo;un recrutement, de d&eacute;marchage commercial, de contact avec la presse.</p>', '60512230404', '2023-04-04', '22:22:39', '2023-04-04 22:22:39', '333656', 'bayiha', '68650230326', '', 2, '//Un site/internet/vous permet d’être/trouvé sur/les moteurs', '23-04-04-39akila_blog.jpg', 'Un site internet peut être consulté par n’importe qui, alors que le contenu publié sur un réseau social est en grande majorité réservé à ses utilisateurs. Une partie des internautes ne pourront donc pas avoir accès à vos publications.', '', '', 0, '', '', ''),
(8, '23-04-26-43akila_blog.png', 'Qu\'est ce qu\'un blog ?', '', '<p>Qu&#39;est ce qu&#39;un blog ?</p>\r\n\r\n<p>Un blog est un site web ou une plateforme en ligne sur laquelle une personne ou un groupe de personnes peuvent publier des articles, des histoires ou des opinions sur un sujet particulier. Les blogs peuvent &ecirc;tre utilis&eacute;s &agrave; des fins personnelles ou professionnelles et peuvent &ecirc;tre mis &agrave; jour r&eacute;guli&egrave;rement avec de nouveaux contenus.</p>\r\n\r\n<p><strong>Pourquoi une entreprise devrait-elle avoir un blog ?</strong></p>\r\n\r\n<p>Une entreprise devrait avoir un blog pour plusieurs raisons :</p>\r\n\r\n<ol>\r\n	<li><strong>Am&eacute;liorer la visibilit&eacute; en ligne :</strong> un blog permet &agrave; l&#39;entreprise de publier du contenu r&eacute;guli&egrave;rement, ce qui peut aider &agrave; am&eacute;liorer son classement dans les moteurs de recherche.</li>\r\n	<li><strong>&Eacute;tablir l&#39;expertise de l&#39;entreprise : </strong>en partageant des informations utiles et pertinentes dans son domaine d&#39;activit&eacute;, l&#39;entreprise peut se positionner en tant qu&#39;experte dans son domaine.</li>\r\n	<li><strong>Accro&icirc;tre l&#39;engagement des clients :</strong> un blog peut aider &agrave; cr&eacute;er un lien avec les clients en leur fournissant des informations int&eacute;ressantes et en leur permettant de s&#39;engager dans des discussions.</li>\r\n	<li><strong>G&eacute;n&eacute;rer du trafic vers le site web de l&#39;entreprise :</strong> en publiant r&eacute;guli&egrave;rement du contenu de qualit&eacute; sur son blog, l&#39;entreprise peut attirer les visiteurs vers son site web.</li>\r\n</ol>\r\n\r\n<p>En r&eacute;sum&eacute;, un blog peut &ecirc;tre un outil puissant pour aider une entreprise &agrave; am&eacute;liorer sa visibilit&eacute; en ligne, &agrave; &eacute;tablir son expertise, &agrave; accro&icirc;tre l&#39;engagement des clients et &agrave; g&eacute;n&eacute;rer du trafic vers son site web.</p>', '62340230426', '2023-04-26', '13:52:43', '2023-04-26 13:52:43', '4162322', 'bayiha', '1012.1121', '', 2, '//blog/site web/visibilité/Blog Akila', '23-04-26-43akila_blog.jpg', 'Un blog peut est un outil puissant qui aide une entreprise à améliorer sa visibilité en ligne', '', '', 0, '15215885894', '', ''),
(9, '23-04-26-54akila_blog.jpg', 'Qu\'est ce qu\'un blog', '', '<p>Qu&#39;est ce qu&#39;un blog</p>\r\n\r\n<p>Un blog est un site web ou une plateforme en ligne sur laquelle une personne ou un groupe de personnes peuvent publier des articles, des histoires ou des opinions sur un sujet particulier. Les blogs peuvent &ecirc;tre utilis&eacute;s &agrave; des fins personnelles ou professionnelles et peuvent &ecirc;tre mis &agrave; jour r&eacute;guli&egrave;rement avec de nouveaux contenus.</p>\r\n\r\n<p>pourquoi une entreprise devais qu&#39;il avoir un blog</p>\r\n\r\n<p>Une entreprise devrait avoir un blog pour plusieurs raisons :</p>\r\n\r\n<ol>\r\n	<li>Am&eacute;liorer la visibilit&eacute; en ligne : un blog permet &agrave; l&#39;entreprise de publier du contenu r&eacute;guli&egrave;rement, ce qui peut aider &agrave; am&eacute;liorer son classement dans les moteurs de recherche.</li>\r\n	<li>&Eacute;tablir l&#39;expertise de l&#39;entreprise : en partageant des informations utiles et pertinentes dans son domaine d&#39;activit&eacute;, l&#39;entreprise peut se positionner en tant qu&#39;experte dans son domaine.</li>\r\n	<li>Accro&icirc;tre l&#39;engagement des clients : un blog peut aider &agrave; cr&eacute;er un lien avec les clients en leur fournissant des informations int&eacute;ressantes et en leur permettant de s&#39;engager dans des discussions.</li>\r\n	<li>G&eacute;n&eacute;rer du trafic vers le site web de l&#39;entreprise : en publiant r&eacute;guli&egrave;rement du contenu de qualit&eacute; sur son blog, l&#39;entreprise peut attirer les visiteurs vers son site web.</li>\r\n</ol>\r\n\r\n<p>En r&eacute;sum&eacute;, un blog peut &ecirc;tre un outil puissant pour aider une entreprise &agrave; am&eacute;liorer sa visibilit&eacute; en ligne, &agrave; &eacute;tablir son expertise, &agrave; accro&icirc;tre l&#39;engagement des clients et &agrave; g&eacute;n&eacute;rer du trafic vers son site web.</p>', '72355230426', '2023-04-26', '18:40:54', '2023-04-26 18:40:54', '660821', 'bayiha', '68650230326', '', 2, '/blog personnel/site web/1pub agence', '23-04-26-54akila_blog.jpg', 'Générer du trafic vers le site web de l\'entreprise : en publiant régulièrement du contenu de qualité sur son blog, l\'entreprise peut attirer les visiteurs vers son site web', 'Pourquoi une entreprise devais qu\'il avoir un blog', '', 0, '15215885894', '', ''),
(10, '23-04-27-04akila_blog.jpg', 'Comment communiquer auprès de vos clients', '', '<p>Comment communiquer aupr&egrave;s de vos clients</p>\r\n\r\n<p>L&#39;objectif premier de la communication est de faire conna&icirc;tre les produits/services de votre entreprise pour vendre !</p>\r\n\r\n<p>S&eacute;rieusement, si vous n&#39;&ecirc;tes pas pr&ecirc;ts &agrave; investir sur la communication de votre entreprise, prenez un moment de recul et relancez vous quand vous serez pr&ecirc;ts &agrave; investir...</p>\r\n\r\n<p>The primary objective of communication is to make known the products/services of your company to sell!</p>\r\n\r\n<p>Seriously, if you&#39;re not ready to invest on the communication of your entreprise, take a step back and get back on track when you&#39;re ready to invest...</p>', '72146230427', '2023-04-27', '10:50:04', '2023-04-27 10:50:04', '8003132', 'bayiha', '30491230427', '', 2, '/communiquer/clients/OneCom-x Africa', '23-04-27-04akila_blog.jpg', 'L\'objectif premier de la communication est de faire connaître les produits/services de votre entreprise pour vendre !', 'Comment communiquer auprès de vos clients', '', 0, '15215885894', '', ''),
(11, '23-04-29-53akila_blog.jpg', 'Quels sont les différents types de stocks ?', '', '<p>Quels sont les diff&eacute;rents types de stocks ?</p>\r\n\r\n<p>Pour une entreprise , la gestion des stocks en entrep&ocirc;t est un r&eacute;el challenge, et ce, non seulement pour sa rentabilit&eacute; financi&egrave;re, mais &eacute;galement pour s&rsquo;assurer de la satisfaction des clients. Il existe diff&eacute;rentes mani&egrave;res de classer les types de stocks en fonction de votre activit&eacute; ou du service dans lequel vous exercez vos fonctions.</p>\r\n\r\n<p>G&eacute;rer ses stocks correctement est une r&eacute;elle n&eacute;cessit&eacute; de nos jours, surtout lorsque la concurrence devient de plus en plus performante, il est primordial de ne pas mettre en p&eacute;ril l&rsquo;image de son entreprise en livrant ses produits en temps et en heure, et dans un parfait &eacute;tat.</p>\r\n\r\n<p>Ainsi, pour analyser vos stocks de mani&egrave;re pr&eacute;cise, il est possible de les diviser en plusieurs cat&eacute;gories, selon le crit&egrave;re de classification utilis&eacute;. Voici donc 3 cat&eacute;gories de types de stocks possibles :</p>\r\n\r\n<p><strong>D&eacute;finition Stock:</strong></p>\r\n\r\n<p>Ensemble des mati&egrave;res (directes ou indirectes) et des produits (finis ou en cours de fabrication) qui appartiennent &agrave; une entreprise industrielle ou commerciale &agrave; une date donn&eacute;e et qui sont entrepos&eacute;s dans l&#39;attente de leur utilisation ou de leur vente.</p>\r\n\r\n<ul>\r\n	<li><strong>1) Types de stocks selon leur fonction</strong></li>\r\n</ul>\r\n\r\n<p>Stock de s&eacute;curit&eacute;</p>\r\n\r\n<p>Pour pallier &agrave; des circonstances extraordinaires telles qu&rsquo;un pic de commandes ou un retard de la part de l&rsquo;un de vos fournisseurs, il est n&eacute;cessaire de disposer d&rsquo;un stock de s&eacute;curit&eacute;.</p>\r\n\r\n<p>Stock d&rsquo;alerte</p>\r\n\r\n<p>Comme vous pourriez vous en doutez, ce &laquo; stock &raquo; est en r&eacute;alit&eacute; un indicateur qui vous alerte lorsqu&rsquo;est venu le moment de vous r&eacute;approvisionner. Vous devrez d&eacute;terminer le seuil de d&eacute;clenchement de ce stock, qui doit imp&eacute;rativement &ecirc;tre sup&eacute;rieur &agrave; celui du stock de s&eacute;curit&eacute; puisque sa finalit&eacute; est diff&eacute;rente.</p>\r\n\r\n<p>Stock saisonnier</p>\r\n\r\n<p>Ce stock permet d&rsquo;anticiper les p&eacute;riodes de l&rsquo;ann&eacute;e o&ugrave; votre activit&eacute; augmente et que vous devez traiter plus de commandes qu&rsquo;habituellement.</p>\r\n\r\n<p>Stock dormant</p>\r\n\r\n<p>Dans cette cat&eacute;gorie, vous devrez comptabiliser l&rsquo;ensemble des r&eacute;f&eacute;rences obsol&egrave;tes immobilis&eacute;es, que vous ne pouvez plus vendre et int&eacute;grer aux commandes clients (changement de packaging, nouvelles normes etc.).</p>\r\n\r\n<p>Stock en transit</p>\r\n\r\n<p>Il s&rsquo;agit de toutes les marchandises encore pr&eacute;sentes dans les processus de production ou de commercialisation : en cours d&rsquo;acheminement, en cours d&rsquo;emballage, en cours de fabrication, etc.</p>\r\n\r\n<p>Stock sp&eacute;culatif</p>\r\n\r\n<p>Vous constituez ce stock lorsque vous achetez des produits dans des quantit&eacute;s sup&eacute;rieures &agrave; celles dont vous avez r&eacute;ellement besoin pour profiter de remises, ou prix inf&eacute;rieurs aux prix pratiqu&eacute;s habituellement. Vous pouvez &eacute;galement &ecirc;tre amen&eacute; &agrave; cr&eacute;er ce type de stock lorsque vos fournisseurs envisagent d&rsquo;augmenter les prix de certains produits.</p>\r\n\r\n<ul>\r\n	<li><strong>2) Types de stocks selon la date de p&eacute;remption</strong></li>\r\n</ul>\r\n\r\n<p>Stock p&eacute;rissable</p>\r\n\r\n<p>Dans cette cat&eacute;gorie de stock nous retrouvons tous les produits et marchandises qui se d&eacute;t&eacute;riorent avec le temps.</p>\r\n\r\n<p>Stock non p&eacute;rissable</p>\r\n\r\n<p>A contrario du stock p&eacute;rissable, le temps n&rsquo;a presque pas d&rsquo;impact sur les produits de ce type de stock.</p>\r\n\r\n<p>Stock avec date de p&eacute;remption</p>\r\n\r\n<p>Ces produits ne pourront plus &ecirc;tre vendus une fois la date inscrite d&eacute;pass&eacute;e.</p>\r\n\r\n<ul>\r\n	<li><strong>3) Types de stocks selon l&rsquo;organisation op&eacute;rationnelle</strong></li>\r\n</ul>\r\n\r\n<p>Pour classer les stocks selon l&rsquo;organisation op&eacute;rationnelle, les entreprises logistiques tentent d&rsquo;appr&eacute;hender leurs stocks d&rsquo;une mani&egrave;re diff&eacute;rente, en prenant en compte de leur quotidien.</p>\r\n\r\n<p>Stock optimal</p>\r\n\r\n<p>Il s&rsquo;agit du juste &eacute;quilibre que chaque entreprise cherche &agrave; atteindre. Il permet d&rsquo;obtenir une rentabilit&eacute; maximale et ce, en minimisant l&rsquo;int&eacute;gralit&eacute; des co&ucirc;ts de maintenance. En hors saison, vous pourrez r&eacute;pondre favorablement &agrave; la demande et &agrave; la consommation de mat&eacute;riaux de votre entreprise et de vos clients gr&acirc;ce &agrave; ce type de stock.</p>\r\n\r\n<p>Le stock optimal permet d&rsquo;&eacute;viter des situations telles que les ruptures de stock ou bien le sur-stockage. Tout est calcul&eacute; de mani&egrave;re &agrave; ce que vous disposiez de la quantit&eacute; exacte de produits dont vous avez besoin.</p>\r\n\r\n<p>Stock physique</p>\r\n\r\n<p>Comme son nom l&rsquo;indique, il comptabilise l&rsquo;ensemble des r&eacute;f&eacute;rences disponibles dans l&rsquo;entrep&ocirc;t.</p>\r\n\r\n<p>Stock net</p>\r\n\r\n<p>Correspond au stock physique moins les commandes clients qui n&rsquo;ont pas encore &eacute;t&eacute; trait&eacute;es.</p>\r\n\r\n<p>Stock disponible</p>\r\n\r\n<p>Ce stock correspond &agrave; la somme de votre stock net, et des commandes pass&eacute;es aupr&egrave;s de vos fournisseurs que vous n&rsquo;avez pas encore re&ccedil;u.</p>\r\n\r\n<p>Stock minimum</p>\r\n\r\n<p>C&rsquo;est la quantit&eacute; minimale de stock &agrave; toujours avoir au sein de son entrep&ocirc;t. Si vous l&rsquo;atteignez, dans ce cas vous devrez recommander la marchandise pour vous r&eacute;approvisionner.</p>\r\n\r\n<p>Stock maximum</p>\r\n\r\n<p>Ce type de stock repr&eacute;sente la quantit&eacute; maximale de stock &agrave; ne pas d&eacute;passer. Il est de votre ressort de d&eacute;terminer son plafond, en fonction des besoins de votre entreprise, et ce, pour chacun des produits stock&eacute;s.</p>\r\n\r\n<p>Classer ses stocks par cat&eacute;gories est primordial en logistique. Comme vous l&rsquo;aurez constat&eacute;, il existe diverses mani&egrave;res de s&eacute;parer les types de stocks : par fonction, selon la date de p&eacute;remption, selon l&rsquo;organisation op&eacute;rationnelle, etc. Il est &eacute;galement possible de diviser les stocks selon leur valeur &eacute;conomique (syst&egrave;me ABC) et leur utilit&eacute; pour l&rsquo;entreprise (commerciale ou industrielle).</p>\r\n\r\n<p>Cabinet Xtrade Consulting Group Sarl</p>', '61677230429', '2023-04-29', '15:33:53', '2023-04-29 15:33:53', '4186210', 'bayiha', '13369230429', '', 2, '/Cabinet Xtrade Consulting Group Sarl/comptabilité', '0', '1) Types de stocks selon leur fonction\r\n2) Types de stocks selon la date de péremption\r\n3) Types de stocks selon l’organisation opérationnelle', 'Quels sont les différents types de stocks ?', '', 0, '15215885894', '', ''),
(12, '23-04-30-42akila_blog.jpg', 'Rréoccupation avec l’opérationnalisation des COMITES de DEVELOPPEMENT de nos villages', '', '<p><strong>Bonjours aux Chers Fr&egrave;res et S&oelig;urs du Groupement NTOUESSONG.</strong></p>\r\n\r\n<p>J&rsquo;esp&egrave;re que chacun est sur pied pour amorcer ses engagements de la semaine qui commence, et que l&rsquo;agenda en rapport avec l&rsquo;op&eacute;rationnalisation des COMITES de DEVELOPPEMENT de nos villages est une pr&eacute;occupation constante qui m&eacute;rite notre implication.</p>\r\n\r\n<p>Le Bureau Ex&eacute;cutif de l&rsquo;ADEN reste &agrave; la disposition des responsables des Comit&eacute; de D&eacute;veloppement pour toutes fins utiles y relative.</p>\r\n\r\n<p>Paisible et Fructueuse semaine &agrave; chacun sous la bienveillance de nos Anc&ecirc;tres et du Tr&egrave;s Haut.</p>\r\n\r\n<p>Bien Fraternellement</p>\r\n\r\n<p>-------------------------------------------</p>\r\n\r\n<p><strong>BILO&rsquo;O Alain Didier</strong></p>\r\n\r\n<p><strong>Pr&eacute;sident du B. E. de l&rsquo;ADEN</strong></p>', '96289230430', '2023-04-30', '08:52:42', '2023-04-30 08:52:42', '1235700', 'bayiha', '84022230430', '', 2, '//Anyang Ntouessong/ADEN/Cameroun', '0', '', '', '', 0, '15215885894', '', ''),
(13, '23-04-30-14akila_blog.jpg', 'DESCENTE DU BUREAU EXECUTIF DE L’ADEN DANS LES VILLAGES', '', '<p><strong>DESCENTE DU BUREAU EXECUTIF</strong></p>\r\n\r\n<p><strong>DE L&rsquo;ADEN DANS LES VILLAGES</strong></p>\r\n\r\n<p>La premi&egrave;re phase du programme de descente du Bureau Ex&eacute;cutif de l&rsquo;ADEN mis en place lors de l&rsquo;Assembl&eacute;e G&eacute;n&eacute;rale Extraordinaire du 08 janvier 2023 qui a commenc&eacute; le 04 mars 2023 s&rsquo;est achev&eacute;e le dimanche 26 mars 2023.</p>\r\n\r\n<p>Cette descente vers la BASE est la troisi&egrave;me articulation du plan d&rsquo;action du Bureau Ex&eacute;cutif qui dont les deux premi&egrave;res ont consist&eacute; en :</p>\r\n\r\n<p>- La rencontre des autorit&eacute;s de l&rsquo;arrondissement de SOA</p>\r\n\r\n<p>- La rencontre avec les &eacute;lus (D&eacute;put&eacute;, Conseiller R&eacute;gional, Conseillers municipaux du Groupement Ntouessong) et la Haute Autorit&eacute; Traditionnelle du Groupement,</p>\r\n\r\n<p>a pour objectif :</p>\r\n\r\n<p>- La prise de contact avec la BASE&nbsp;<em>(Comit&eacute;s de D&eacute;veloppement)</em></p>\r\n\r\n<p>- L&rsquo;&eacute;valuation du niveau d&rsquo;organisation de la BASE</p>\r\n\r\n<p>- La mise sur pied d&rsquo;un plan d&rsquo;action de court terme</p>\r\n\r\n<p>Des quinze (15) villages que comprend le Groupement Ntouessong :</p>\r\n\r\n<p>- dix (10) ont pu accueillir le Bureau Ex&eacute;cutif du fait de leur capacit&eacute; d&rsquo;organisation :</p>\r\n\r\n<p><strong>1.</strong>&nbsp;<strong>OVANGOUL</strong></p>\r\n\r\n<p><strong>2.</strong>&nbsp;<strong>ANDON</strong></p>\r\n\r\n<p><strong>3.</strong>&nbsp;<strong>AKAK 2</strong></p>\r\n\r\n<p><strong>4.</strong>&nbsp;<strong>MBANSAN 1</strong></p>\r\n\r\n<p><strong>5.</strong>&nbsp;<strong>NKOLTSIT</strong></p>\r\n\r\n<p><strong>6.</strong>&nbsp;<strong>NTOUESSONG 9</strong></p>\r\n\r\n<p><strong>7.</strong>&nbsp;<strong>MBANSAN 2</strong></p>\r\n\r\n<p><strong>8.</strong>&nbsp;<strong>MEBOUGOU</strong></p>\r\n\r\n<p><strong>9.</strong>&nbsp;<strong>NTOUESSONG 7</strong></p>\r\n\r\n<p><strong>10.</strong>&nbsp;<strong>NTOUESSONG 4</strong></p>\r\n\r\n<p>- Cinq (05) ont demand&eacute; un report de rendez-vous au motif de pouvoir s&rsquo;organiser au pr&eacute;alable :</p>\r\n\r\n<p><strong>1.</strong>&nbsp;<strong>NTOUESSONG 5</strong></p>\r\n\r\n<p><strong>2.</strong>&nbsp;<strong>NTOUESSONG 6</strong></p>\r\n\r\n<p><strong>3.</strong>&nbsp;<strong>NTOUESSONG 8</strong></p>\r\n\r\n<p><strong>4.</strong>&nbsp;<strong>ONGANDI</strong></p>\r\n\r\n<p><strong>5.</strong>&nbsp;<strong>TING-MELEN</strong></p>\r\n\r\n<p>PRISE DE CONTACT</p>\r\n\r\n<p>Elle consistait en la pr&eacute;sentation du nouveau Bureau Ex&eacute;cutif aux diff&eacute;rents acteurs et animateurs de l&rsquo;action de D&eacute;veloppement dans les villages h&ocirc;te.</p>\r\n\r\n<p>EVALUATION DU NIVEAU D&rsquo;ORGANISATION</p>\r\n\r\n<p>Elle consistait en la communication des missions du Bureau Ex&eacute;cutif de l&rsquo;ADEN, en corr&eacute;lation avec les recommandations de Monsieur le Sous-pr&eacute;fet de SOA lors de sa r&eacute;cente tourn&eacute;e de prise de contact, suivie d&rsquo;un &eacute;tat des lieux du niveau d&rsquo;organisation de chaque village relativement aux exigences des dispositions r&eacute;glementaires qu&rsquo;impose la D&eacute;centralisation.</p>\r\n\r\n<p>Etat des lieux qui visait &agrave; connaitre si chaque village visit&eacute; disposait d&rsquo;un le Comit&eacute; de D&eacute;veloppement op&eacute;rationnel avec :</p>\r\n\r\n<p>- un Bureau</p>\r\n\r\n<p>- des textes pour son fonctionnement&nbsp;<em>(Statuts et R&egrave;glement Int&eacute;rieur)</em></p>\r\n\r\n<p>- des comptes rendus d&rsquo;activit&eacute;s</p>\r\n\r\n<p>- Un plan d&rsquo;action</p>\r\n\r\n<p>- Des activit&eacute;s et de projets en cours de r&eacute;alisation</p>\r\n\r\n<p>- Un Comit&eacute; de vigilance</p>\r\n\r\n<p>- Des Conseils d&rsquo;&eacute;tablissements scolaires</p>\r\n\r\n<p>- Des Comit&eacute;s de Gestions d&rsquo;infrastructures&nbsp;<em>(points d&rsquo;eau, march&eacute;s, Centres de Sant&eacute;&hellip;)</em></p>\r\n\r\n<p>MISE SUR PIED D&rsquo;UN PLAN D&rsquo;ACTION DE COURT TERME</p>\r\n\r\n<p>Le constat d&rsquo;ensemble &eacute;tant que ceux des comit&eacute;s exer&ccedil;ant des activit&eacute;s, le faisait de mani&egrave;re informelle avec une organisation approximative. Aucun n&rsquo;&eacute;tant l&eacute;galement reconnu par l&rsquo;autorit&eacute; administrative, aucune d&eacute;marche dans ce sens n&rsquo;ayant encore &eacute;t&eacute; initi&eacute;e avec accus&eacute;e de r&eacute;ception qui au terme du processus donne droit &agrave; un &laquo; R&eacute;c&eacute;piss&eacute; de D&eacute;claration.</p>\r\n\r\n<p>Un plan d&rsquo;action sur trois mois a &eacute;t&eacute; propos&eacute; &agrave; chacun desdits Comit&eacute; de D&eacute;veloppement pour une organisation en interne qui doit aboutir au d&eacute;p&ocirc;t de leurs dossiers de d&eacute;claration aupr&egrave;s de l&rsquo;autorit&eacute; administrative, r&eacute;gularisation qui leur donnera la l&eacute;gitimit&eacute; exig&eacute;e dans les d&eacute;marches vers les multiples partenaires qui accompagnent les Communaut&eacute;s dans les actions de d&eacute;veloppement.</p>\r\n\r\n<p>Pour que tous les Comit&eacute;s de D&eacute;veloppement puissent &ecirc;tre au m&ecirc;me niveau d&rsquo;op&eacute;rationnalisation, des documents leur ont &eacute;t&eacute; remis ; mod&egrave;les de Statuts et de R&egrave;glement Int&eacute;rieur, supports de gestions des op&eacute;rations.</p>\r\n\r\n<p>Les deux prochaines &eacute;tapes dans le plan d&rsquo;action du Bureau Ex&eacute;cutif de l&rsquo;ADEN vont consister en :</p>\r\n\r\n<p>- La mobilisation et la sensibilisation des FORCES VIVES r&eacute;sidant hors des villages afin qu&rsquo;elles soutiennent les initiatives de d&eacute;veloppement dans leurs villages respectifs,</p>\r\n\r\n<p>- l&rsquo;exploration des opportunit&eacute;s, la mise sur pied et l&rsquo;accompagnement de strat&eacute;gies pour l&rsquo;ex&eacute;cution des plans d&rsquo;actions adopt&eacute;s par chacun des Comit&eacute;s de D&eacute;veloppement des quinze villages du Groupement Ntouessong.</p>\r\n\r\n<p>Le Bureau Ex&eacute;cutif de l&rsquo;ADEN esp&egrave;re pouvoir compter sur la disponibilit&eacute; et l&rsquo;engagement de chaque fils (originaire et d&rsquo;adoption) du Groupement Ntouessong pour l&rsquo;appropriation optimale des opportunit&eacute;s de d&eacute;veloppement qui doivent contribuer &agrave; l&rsquo;am&eacute;lioration de l&rsquo;environnement de vie de notre Groupement.</p>\r\n\r\n<p><strong>Fait &agrave; Ntouessong le 27 mars 2023</strong></p>\r\n\r\n<p><strong><em>LE SECRETAIRE GENERAL</em></strong></p>\r\n\r\n<p><strong>ANGUISSA ANGUISSA Tobie</strong></p>\r\n\r\n<p><a href=\"https://web.facebook.com/photo/?fbid=10224119271557707&amp;set=pcb.6142992769090562&amp;__cft__[0]=AZXP_UHiCE4nR7cavhwrdBI-6lqY9jeW2Zvx9GWc-P6qI3Ft2-DRnaeFOfDngsuP2daMNkq43TAGHqrkewGGT5GddUu2hOzLkDabsubffjOQAcqEW8H45xtKrQvFiiZZ3jGdaWxPiUayuSDB2MAodwcdX_H4Lg1tpUZGCJ4H8J2149hLuOl8sShYuvxo9yFFjcc&amp;__tn__=*bH-R\"><img alt=\"\" src=\"https://z-p3-scontent.fdla2-1.fna.fbcdn.net/v/t39.30808-6/337992539_510223644656150_6672471680164951329_n.jpg?stp=dst-jpg_p130x130&amp;_nc_cat=109&amp;ccb=1-7&amp;_nc_sid=5cd70e&amp;_nc_eui2=AeHQr3lxX6yJFLd0ZWfP_MHCgSs5h2Y8RDKBKzmHZjxEMvWdbdF0kWUr53xus8OIOh5dHw7RUq4qs2u8EVux9waX&amp;_nc_ohc=Gh8NpObqSx0AX9IepzG&amp;_nc_zt=23&amp;_nc_ht=z-p3-scontent.fdla2-1.fna&amp;oh=00_AfBJvk5B7vrQQsG_jsfFf3KCp4fLYIlbW-_pMs2OYVc-tw&amp;oe=64539ED2\" /></a></p>\r\n\r\n<table align=\"center\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"https://web.facebook.com/photo/?fbid=10224119274957792&amp;set=pcb.6142992769090562&amp;__cft__[0]=AZXP_UHiCE4nR7cavhwrdBI-6lqY9jeW2Zvx9GWc-P6qI3Ft2-DRnaeFOfDngsuP2daMNkq43TAGHqrkewGGT5GddUu2hOzLkDabsubffjOQAcqEW8H45xtKrQvFiiZZ3jGdaWxPiUayuSDB2MAodwcdX_H4Lg1tpUZGCJ4H8J2149hLuOl8sShYuvxo9yFFjcc&amp;__tn__=*bH-R\"><img alt=\"\" src=\"https://z-p3-scontent.fdla2-1.fna.fbcdn.net/v/t39.30808-6/337881425_886125245795980_1376903013658165575_n.jpg?stp=dst-jpg_s600x600&amp;_nc_cat=103&amp;ccb=1-7&amp;_nc_sid=5cd70e&amp;_nc_eui2=AeF5hlhF1D4-l4byQXIcYSv5EwNEj-R1EGsTA0SP5HUQa5oWpBxTgi8vDj6XBvZArZw-sH0ym1B0VO3HxbEnt_Ub&amp;_nc_ohc=5FvpAuOwDLEAX-b-7OE&amp;_nc_zt=23&amp;_nc_ht=z-p3-scontent.fdla2-1.fna&amp;oh=00_AfDM9WSTpsZ0oiohbtmnnr2wzDeR5GNneQh9cbIlJYgQAw&amp;oe=64531CD9\" /></a></td>\r\n			<td><a href=\"https://web.facebook.com/photo/?fbid=10224119276077820&amp;set=pcb.6142992769090562&amp;__cft__[0]=AZXP_UHiCE4nR7cavhwrdBI-6lqY9jeW2Zvx9GWc-P6qI3Ft2-DRnaeFOfDngsuP2daMNkq43TAGHqrkewGGT5GddUu2hOzLkDabsubffjOQAcqEW8H45xtKrQvFiiZZ3jGdaWxPiUayuSDB2MAodwcdX_H4Lg1tpUZGCJ4H8J2149hLuOl8sShYuvxo9yFFjcc&amp;__tn__=*bH-R\"><img alt=\"\" src=\"https://z-p3-scontent.fdla2-1.fna.fbcdn.net/v/t39.30808-6/337724348_128592713495201_1119497620984467843_n.jpg?stp=dst-jpg_s600x600&amp;_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=5cd70e&amp;_nc_eui2=AeHWH4UpTOO1Qp-1_DiWEkptFtq8jJpiRzIW2ryMmmJHMvJ726DlwKpuxpasiXDDtK6KHEH3Q74N4Zu6Am7Xavde&amp;_nc_ohc=nPW_2kGnA9YAX-vt45G&amp;_nc_zt=23&amp;_nc_ht=z-p3-scontent.fdla2-1.fna&amp;oh=00_AfCVfBBT495ISDP_W3tI5_oBrd1yJLwn3xQWe3MwEck4lw&amp;oe=64533C03\" /></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><a href=\"https://web.facebook.com/photo/?fbid=10224119280077920&amp;set=pcb.6142992769090562&amp;__cft__[0]=AZXP_UHiCE4nR7cavhwrdBI-6lqY9jeW2Zvx9GWc-P6qI3Ft2-DRnaeFOfDngsuP2daMNkq43TAGHqrkewGGT5GddUu2hOzLkDabsubffjOQAcqEW8H45xtKrQvFiiZZ3jGdaWxPiUayuSDB2MAodwcdX_H4Lg1tpUZGCJ4H8J2149hLuOl8sShYuvxo9yFFjcc&amp;__tn__=*bH-R\"><img alt=\"\" src=\"https://z-p3-scontent.fdla2-1.fna.fbcdn.net/v/t39.30808-6/338442578_515368013921013_4397862370261855797_n.jpg?stp=dst-jpg_s600x600&amp;_nc_cat=105&amp;ccb=1-7&amp;_nc_sid=5cd70e&amp;_nc_eui2=AeG-nVs7jh2emsUo7ZV0LAKZUwCe33rbDI9TAJ7fetsMjwM_jEByYt7HVi2AoShXOeIhcJX4dt7Vm5L9odXwVrCp&amp;_nc_ohc=rcZzj2ZkvuwAX87Xczb&amp;_nc_zt=23&amp;_nc_ht=z-p3-scontent.fdla2-1.fna&amp;oh=00_AfDFMpn25-aVr8skSpSG31NLvh9xWTSwlmcSRtHF8Jse6Q&amp;oe=64531C1A\" /></a></td>\r\n			<td><a href=\"https://web.facebook.com/photo/?fbid=10224119278557882&amp;set=pcb.6142992769090562&amp;__cft__[0]=AZXP_UHiCE4nR7cavhwrdBI-6lqY9jeW2Zvx9GWc-P6qI3Ft2-DRnaeFOfDngsuP2daMNkq43TAGHqrkewGGT5GddUu2hOzLkDabsubffjOQAcqEW8H45xtKrQvFiiZZ3jGdaWxPiUayuSDB2MAodwcdX_H4Lg1tpUZGCJ4H8J2149hLuOl8sShYuvxo9yFFjcc&amp;__tn__=*bH-R\"><img alt=\"\" src=\"https://z-p3-scontent.fdla2-1.fna.fbcdn.net/v/t39.30808-6/338001928_564294399103031_8031154883217290963_n.jpg?stp=dst-jpg_s600x600&amp;_nc_cat=110&amp;ccb=1-7&amp;_nc_sid=5cd70e&amp;_nc_eui2=AeEz_oChEP0L0D_F74U3-yCRTIPrmrdljVZMg-uat2WNVjQ6_M7ks2JJpcGDX2Z8-MQ1T6WqUPQq6VpLBS4Qm046&amp;_nc_ohc=JtpNTNV3df8AX9SfQ2D&amp;_nc_zt=23&amp;_nc_ht=z-p3-scontent.fdla2-1.fna&amp;oh=00_AfBP8-xvs3pr9S_pvhhOX-9qBUtt0_r1IkIXRtm1FNakzg&amp;oe=6453E57C\" /></a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '30110230430', '2023-04-30', '09:08:14', '2023-04-30 09:08:14', '1235700', 'bayiha', '84022230430', '', 2, '//DESCENTE DU BUREAU EXECUTIF/DE L’ADEN/DANS LES VILLAGES', '0', '', '', '', 0, '15215885894', '', ''),
(14, '23-05-05-43akila_blog.jpg', 'Quel type de mémoire ont tes prospects/clients ?', '', '<p><strong>Quel type de m&eacute;moire ont tes prospects/clients ?</strong></p>\r\n\r\n<p><br />\r\nLors d&#39;une communication, on use de plusieurs supports, soit ; un visuel (flyer), une image, de simples &eacute;crits ou d&#39;un &lt;&lt;<strong>support vid&eacute;o</strong>&gt;&gt;</p>\r\n\r\n<p>Pour en revenir aux types de m&eacute;moires, il y a des m&eacute;moires linguistiques ; ceux-l&agrave; qui sont plus captiv&eacute;s par la lecture et qui pr&ecirc;teront plus attention aux supports de communication &eacute;crits (texte, visuel etc.)</p>\r\n\r\n<p>Pour d&#39;autres, ils ont une m&eacute;moire audiovisuelle ; c&#39;est-&agrave;-dire tout ce qui est lecture, ils ne sont pas dedans, quand ils voient un visuel ou un simple texte, ennuyeux par la lecture ils passent comme un taxi plein. Par contre, lorsqu&#39;ils voient une &oelig;uvre audiovisuelle (Spot publicitaire, vid&eacute;ogrammes) ils s&#39;arr&ecirc;tent imm&eacute;diatement et sont passionn&eacute;s &agrave; regarder et &agrave; &eacute;couter.</p>\r\n\r\n<p>Donc, pour une communication r&eacute;ussie et impactante, faudrait toucher tous ses types de m&eacute;moire, de la lecture &agrave; l&#39;audiovisuel visuel.</p>\r\n\r\n<p>Une &eacute;tude fran&ccedil;aise &agrave; prouver que 59% des prospects sont plus captiv&eacute;s &agrave; regarder une r&eacute;alisation audiovisuelle qu&#39;&agrave; lire des &eacute;l&eacute;ments sur un visuel ou d&#39;un texte.</p>\r\n\r\n<p>Suite &agrave; cette analyse TARGET COMMUNICATION fait une offre exceptionnelle ;<strong> la r&eacute;alisation compl&eacute;te d&#39;un sport publicitaire pour te permet de te positionner avec diff&eacute;rents supports de communication impactant pour atteindre ta cible et sublimer ton businness/projet/entreprise.</strong></p>\r\n\r\n<p>&nbsp;N&#39;est-ce-pas g&eacute;nial &ccedil;a ?</p>\r\n\r\n<p><strong>&nbsp;Tu n&#39;as qu&#39;une seule&nbsp;chose&nbsp;&agrave;&nbsp;faire:</strong></p>\r\n\r\n<p><img alt=\"☎️\" src=\"https://z-p3-static.xx.fbcdn.net/images/emoji.php/v9/t22/1/16/260e.png\" style=\"height:16px; width:16px\" /> Tu n&#39;as qu&#39;une seule chose &agrave; faire.</p>', '33633230505', '2023-05-05', '13:46:43', '2023-05-05 13:46:43', '5968105', 'bayiha', '16508230505', '', 2, '//#spotpublicitaire/#targetcom/#agencedecommunication/#MONTAGEAUDIOVISUELLE/#communitymanagement', '0', '', '', '', 0, '15215885894', 'http://wa.me/+237697322902', ' Cliquer sur ce bouton et fait réaliser le sport publicitaire qui sera à la hauteur de ta vision :'),
(15, '23-05-15-25akila_blog.jpg', 'Ma déception est grande', '', '<p>Cher r&eacute;seau,<br />\r\n<br />\r\nJ&rsquo;ai le c&oelig;ur vraiment gros.<br />\r\n<br />\r\nPourquoi?<br />\r\n<br />\r\nJe viens de m&rsquo;entretenir avec l&rsquo;employeur d&rsquo;un jeune que j&rsquo;ai eu &agrave; accompagner pendant des semaines jusqu&rsquo;&agrave; l&rsquo;obtention d&rsquo;un premier emploi. Je me rappelle encore du d&eacute;sespoir que je pouvais lire dans ses yeux lors de notre rencontre, de ce parcours du combattant pour obtenir ne ce reste un entretien. Je me souviens encore de cette joie immense que nous avions ressenti tous les deux en recevant une r&eacute;ponse favorable de la part de cet employeur. Ce dernier vient de me faire part de sa grande col&egrave;re vis &agrave; vis du comportement de ce jeune au travail. Des retards r&eacute;p&eacute;titifs, des journ&eacute;es pass&eacute;es sur son t&eacute;l&eacute;phone, un style vestimentaire inadapt&eacute;. Tout ceci, malgr&eacute; plusieurs avertissements et des rappels &agrave; l&rsquo;ordre. L&rsquo;employeur veut se s&eacute;parer de lui. Sur le coup je ne sais quoi dire, je suis plut&ocirc;t mal &agrave; l&rsquo;aise, profond&eacute;ment d&eacute;&ccedil;u ????. Je vais parler au jeune pour conna&icirc;tre sa version des faits.<br />\r\n<br />\r\nJ&rsquo;aimerai dire ceci &agrave; tous ces jeunes qui sont &agrave; la recherche d&rsquo;un emploi. Une chose est d&rsquo;obtenir un travail et une autre chose est de garder celui ci. La maturit&eacute;, le sens de la responsabilit&eacute;, l&rsquo;autodiscipline sont indispensables pour y arriver. M&eacute;ritez la confiance qu&rsquo;on vous accorde.<br />\r\n&nbsp;</p>', '17936230515', '2023-05-15', '13:37:25', '2023-05-15 13:37:25', '7022801', 'bayiha', '4579230515', '', 2, '//#emploi/#jeunesse', '0', '', '', '', 0, '15215885894', '', ''),
(16, '23-05-15-19akila_blog.jpg', 'La vie ne s’arrête pas à ton diplôme ni à ton école quelque soit sa réputation .', '', '<p>Cher jeune dipl&ocirc;m&eacute;,<br />\r\n<br />\r\nLa vie ne s&rsquo;arr&ecirc;te pas &agrave; ton dipl&ocirc;me ni &agrave; ton &eacute;cole quelque soit sa r&eacute;putation .<br />\r\n<br />\r\nTu es certes bien form&eacute;, avec des ambitions et un potentiel respectables, mais il te reste encore beaucoup de choses &agrave; d&eacute;couvrir, &agrave; conna&icirc;tre, &agrave; apprendre.<br />\r\n<br />\r\nNon !!!tu ne d&eacute;tiens pas la science infuse, tu n&rsquo;a pas le monopole du savoir, il te reste du chemin &agrave; faire. Le monde professionnel a ses r&eacute;alit&eacute;s et ses codes. On ne t&rsquo;a pas tout dit &agrave; l&rsquo;&eacute;cole, tu n&rsquo;as pas tout vu &agrave; l&rsquo;universit&eacute;. Alors, fait preuve d&rsquo;humilit&eacute; en poursuivant tes apprentissages et en respectant l&rsquo;exp&eacute;rience de ces personnes form&eacute;es sur le tas que tu trouveras sur le terrain.<br />\r\nPour grandir, il faut accepter d&rsquo;&ecirc;tre petit.<br />\r\n<br />\r\nNe fais pas comme ce jeune dont l&rsquo;histoire m&rsquo;a inspir&eacute; ce post. Il est pass&eacute; &agrave; c&ocirc;t&eacute; d&rsquo;une belle opportunit&eacute; estimant qu&#39;il n&rsquo;avait rien &agrave; apprendre d&rsquo;un vieux (son N+1 ) qui est moins dipl&ocirc;m&eacute; que lui.<br />\r\n<br />\r\n&laquo;Je suis plus dipl&ocirc;m&eacute; que lui, alors il n&rsquo;a rien &agrave; m&rsquo;apprendre &raquo; tels sont ses propos &agrave; en croire son employeur qui selon lui, apr&egrave;s plusieurs avertissements a finit par se s&eacute;parer de lui &agrave; cause de son arrogance et de son indiscipline vis &agrave; vis de son sup&eacute;rieur.<br />\r\n<br />\r\nNe sous estimez personne! chaque &ecirc;tre humain peut vous apprendre quelque chose.<br />\r\n<br />\r\n&nbsp;</p>', '46662230515', '2023-05-15', '13:46:19', '2023-05-15 13:46:19', '7022801', 'bayiha', '4579230515', '', 2, '/#humilité/ #jeunesse/ #discipline', '0', 'Tu es certes bien formé, avec des ambitions et un potentiel respectables, mais il te reste encore beaucoup de choses à découvrir, à connaître, à apprendre.', '', '', 0, '15215885894', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `categorie_article`
--

CREATE TABLE `categorie_article` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `permalien` varchar(56) NOT NULL,
  `matricule_entreprise` varchar(100) NOT NULL,
  `matricule_cat` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorie_article`
--

INSERT INTO `categorie_article` (`id`, `nom`, `date`, `permalien`, `matricule_entreprise`, `matricule_cat`) VALUES
(1, 'Culture', '2023-03-17 11:07:16', '', '11885230316', '1258452'),
(2, 'Education', '2023-03-24 15:04:42', '', '11885230316', '5212547'),
(3, 'public', '2023-03-29 23:29:50', '', '11885230316', '12458712'),
(4, 'Bayiha', '2023-03-30 19:13:52', '', '11885230316', '40518'),
(5, 'Site web', '2023-04-04 22:16:46', '', '68650230326', '333656'),
(6, 'Informatique', '2023-04-16 20:13:14', '', '68650230326', '660821'),
(7, 'Communication', '2023-04-16 20:20:05', '', '68650230326', '505'),
(8, 'Digital', '2023-04-26 13:29:22', '', '1012.1121', '4162322'),
(9, 'Communication', '2023-04-27 10:47:32', '', '30491230427', '8003132'),
(10, 'Comptabilité', '2023-04-29 15:24:10', '', '13369230429', '4186210'),
(11, 'Annonce', '2023-04-30 08:44:00', '', '84022230430', '1235700'),
(12, 'Communication', '2023-05-05 13:37:05', '', '16508230505', '5968105'),
(13, 'Conseils', '2023-05-15 13:27:01', '', '4579230515', '7022801'),
(14, 'Diverse', '2023-05-24 06:32:48', '', '68650230326', '5054548');

-- --------------------------------------------------------

--
-- Table structure for table `commentaire_blog`
--

CREATE TABLE `commentaire_blog` (
  `id` int(11) NOT NULL,
  `matricule_blog` varchar(13) NOT NULL,
  `coment` varchar(255) NOT NULL,
  `date_visite` datetime NOT NULL DEFAULT current_timestamp(),
  `nom_admin` varchar(35) NOT NULL,
  `mat_coment` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commentaire_blog`
--

INSERT INTO `commentaire_blog` (`id`, `matricule_blog`, `coment`, `date_visite`, `nom_admin`, `mat_coment`) VALUES
(3, '60512230404', 'Bonjour', '2023-05-20 07:51:25', 'Cabrole', '67015649'),
(4, '61677230429', 'Yh', '2023-05-20 10:36:43', 'Cabrole', '919971233'),
(5, '72355230426', 'merci', '2023-05-22 08:25:51', 'Dieudonné Bayiha', '522983349'),
(6, '60512230404', 'merci pour le partage', '2023-05-23 20:24:21', 'FRANK BIANANNA', '150522557'),
(7, '60512230404', 'C\'est très explicatif', '2023-05-23 20:24:38', 'FRANK BIANANNA', '274387966');

-- --------------------------------------------------------

--
-- Table structure for table `commentaire_blog_all`
--

CREATE TABLE `commentaire_blog_all` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `id_blog` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `day` date NOT NULL DEFAULT current_timestamp(),
  `position` int(11) NOT NULL DEFAULT 0,
  `contact` text NOT NULL,
  `permalien` varchar(111) NOT NULL,
  `matricule_entreprise` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commentaire_blog_all`
--

INSERT INTO `commentaire_blog_all` (`id`, `nom`, `content`, `id_blog`, `matricule`, `date`, `day`, `position`, `contact`, `permalien`, `matricule_entreprise`) VALUES
(1, 'nini', 'merci', 1, '53073221215', '2022-12-19 01:04:44', '2022-12-19', 0, '', '', ''),
(2, 'nini', 'merci', 1, '', '2022-12-19 01:27:59', '2022-12-19', 0, '', 'college-Nkoualong-Adolph', '1');

-- --------------------------------------------------------

--
-- Table structure for table `connexion_admin`
--

CREATE TABLE `connexion_admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `connexion` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `permalien` varchar(100) NOT NULL,
  `matricule_entreprise` varchar(100) NOT NULL,
  `matricule_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `connexion_admin`
--

INSERT INTO `connexion_admin` (`id`, `nom`, `date`, `connexion`, `matricule`, `permalien`, `matricule_entreprise`, `matricule_admin`) VALUES
(1, 'bayiha dieudonne', '2023-03-16 10:16:20', 0, '15215885894', '', '01', ''),
(2, 'bayiha dieudonne', '2023-03-16 10:16:35', 1, '15215885894', '', '1012.1121', ''),
(3, 'NEO COMPANY', '2023-03-20 07:43:55', 1, '14983230316', '', '11885230316', ''),
(4, 'NEO COMPANY', '2023-03-20 08:01:56', 0, '14983230316', '', '11885230316', ''),
(5, 'bayiha dieudonne', '2023-03-20 08:02:33', 1, '15215885894', '', '1012.1121', ''),
(6, 'bayiha dieudonne', '2023-03-20 08:02:59', 0, '15215885894', '', '1012.1121', ''),
(7, 'bayiha dieudonne', '2023-03-20 08:04:01', 1, '15215885894', '', '1012.1121', ''),
(8, 'bayiha dieudonne', '2023-03-20 08:09:29', 0, '15215885894', '', '1012.1121', ''),
(9, 'bayiha dieudonne', '2023-03-20 08:09:47', 1, '15215885894', '', '1012.1121', ''),
(10, 'bayiha dieudonne', '2023-03-20 08:14:47', 0, '15215885894', '', '1012.1121', ''),
(11, 'bayiha dieudonne', '2023-03-20 08:14:56', 1, '15215885894', '', '1012.1121', ''),
(12, 'bayiha dieudonne', '2023-03-20 08:16:24', 0, '15215885894', '', '1', ''),
(13, 'NEO COMPANY', '2023-03-20 08:16:45', 1, '14983230316', '', '11885230316', ''),
(14, 'NEO COMPANY', '2023-03-20 08:17:02', 0, '14983230316', '', '11885230316', ''),
(15, 'bayiha dieudonne', '2023-03-20 08:17:23', 1, '15215885894', '', '1012.1121', ''),
(16, '', '2023-04-14 15:01:23', 0, '', '', '1012.1121', '15215885894');

-- --------------------------------------------------------

--
-- Table structure for table `core1`
--

CREATE TABLE `core1` (
  `id` int(11) NOT NULL,
  `matricule_entreprise` varchar(15) NOT NULL,
  `annee` varchar(255) NOT NULL,
  `siteweb` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `permalien` varchar(100) NOT NULL,
  `titre_des_posts` varchar(255) NOT NULL,
  `priorite1` int(11) NOT NULL DEFAULT 0,
  `sup_admin` varchar(10) NOT NULL DEFAULT 'oui',
  `bouton_whatsapp` char(4) NOT NULL DEFAULT 'oui',
  `site` varchar(4) NOT NULL DEFAULT 'oui',
  `g_titre` varchar(200) DEFAULT 'Nos services',
  `banniere_site1` varchar(200) NOT NULL,
  `banniere_site2` int(11) NOT NULL,
  `t_baniere1` varchar(255) DEFAULT 'Etude de projet',
  `d_baniere1` varchar(255) DEFAULT NULL,
  `t_baniere2` varchar(255) DEFAULT 'Recherche des marchés',
  `d_baniere2` varchar(255) DEFAULT NULL,
  `t_baniere3` varchar(255) DEFAULT 'Service clients',
  `d_baniere3` varchar(255) DEFAULT NULL,
  `color1` varchar(100) NOT NULL,
  `color2` varchar(100) NOT NULL,
  `propos` text NOT NULL,
  `titre_baniere` varchar(100) NOT NULL,
  `descrip_baniere` varchar(100) NOT NULL,
  `about_image1` varchar(200) NOT NULL,
  `titre_banniere_service` varchar(255) NOT NULL DEFAULT 'Toute nos services',
  `titre_banniere_blog` varchar(255) NOT NULL DEFAULT 'Tous nos posts'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core1`
--

INSERT INTO `core1` (`id`, `matricule_entreprise`, `annee`, `siteweb`, `date`, `time`, `permalien`, `titre_des_posts`, `priorite1`, `sup_admin`, `bouton_whatsapp`, `site`, `g_titre`, `banniere_site1`, `banniere_site2`, `t_baniere1`, `d_baniere1`, `t_baniere2`, `d_baniere2`, `t_baniere3`, `d_baniere3`, `color1`, `color2`, `propos`, `titre_baniere`, `descrip_baniere`, `about_image1`, `titre_banniere_service`, `titre_banniere_blog`) VALUES
(1, '11885230316', '/', '', '2023-03-16', '17:49:20', 'NEO-COMPANY', 'Tous les articles récents de notre journal', 0, 'oui', 'oui', 'oui', 'Nos meilleurs services', '16740.jpeg', 0, 'Nos formations professionnelle', 'Apprenez de nouvelles compétences pour atteindre vos objectifs professionnels.', 'Acquérez les compétences', 'Centre de formation professionnelle : Acquérez les compétences pour réussir dans votre carrière !', 'Centre de formation professionnelle', 'La première étape vers une carrière enrichissante !', '#0e528f', '#ffbf30', '<h2>Pr&eacute;sentation</h2>\r\n\r\n<p>Bienvenue &agrave; vous! Nous sommes une agence professionnelle qui, vous ouvre les portes aux grandes &eacute;coles &eacute;trang&egrave;res, vous aide &agrave; voyager &agrave; l&#39;&eacute;tranger (&eacute;tudes ou affaires), vous propose des formations professionnelles de pointes et qui, vous loue des salles &eacute;quip&eacute;es.</p>\r\n\r\n<p>T&eacute;l&eacute;phone</p>\r\n\r\n<p><a href=\"tel:+237679298548\" target=\"_blank\">&nbsp;t&eacute;l&eacute;phone est le +237679298548</a></p>\r\n\r\n<p>Secteur</p>\r\n\r\n<p>Services professionnels</p>\r\n\r\n<p>Taille de l&rsquo;entreprise</p>\r\n\r\n<p>2-10 employ&eacute;s</p>\r\n\r\n<p>1 sur LinkedIn&nbsp;Inclut des membres avec NEO COMPANY comme employeur actuel, y compris les postes &agrave; temps partiel.</p>\r\n\r\n<p>Si&egrave;ge social</p>\r\n\r\n<p>Douala, Cameroun/Littoral/Wourri/Sawa</p>\r\n\r\n<p>Fond&eacute;e en</p>\r\n\r\n<p>2022</p>', '', '', '16762.jpeg', 'Toute nos services', 'découvrez nos publications'),
(5, '68650230326', '/', '', '2023-03-26', '10:38:54', '1pub-agency', '0', 0, 'oui', 'oui', 'oui', 'Nos meilleurs services', '23-04-16-50akila_blog.jpg', 0, 'Nous communiquons pour vous', 'Lorsque vous arrêtez de communiquer vous disparaissez !', 'Nous améliorons votre présence en ligne', 'À l\'heure de la digitalisation, votre croissance dépend de votre présence sur internet; Créez vous un site web et commencez a exister, professionnaliser votre activité grâce au digital.', 'Vous avez besoin de visibilité', 'À l\'heure de la digitalisation, votre croissance dépend de votre présence sur internet. Grâce à notre équipe de suivi et aux différentes solution que nous mettons à votre disposition, vous n\'en serez que satisfaits !', '#ff5722', '#000000', '<h3>Nous fournissons des meilleurs services pour votre site Web</h3>\r\n\r\n<p>&Agrave; l&#39;heure de la digitalisation, votre&nbsp;<strong>croissance</strong>&nbsp;d&eacute;pend de votre&nbsp;<strong>pr&eacute;sence sur internet</strong>&nbsp;. Gr&acirc;ce &agrave; notre&nbsp;<strong>&eacute;quipe de suivi</strong>&nbsp;et aux diff&eacute;rentes solution que nous mettons &agrave; votre disposition, vous n&#39;en serez que satisfaits. Nous vous&nbsp;<strong>accompagnons dans votre parcours sur le web</strong>&nbsp;afin de vous permettre de profiter au mieux de ce nouvel&nbsp;<strong>outil de communication</strong>&nbsp;.</p>\r\n\r\n<p>Votre&nbsp;<strong>Vitrine</strong>&nbsp;aura pour principal objectif&nbsp;<strong>d&#39;informer les internautes</strong>&nbsp;sur l&#39;activit&eacute; de votre entreprise et de&nbsp;<strong>communiquer vos coordonn&eacute;es</strong>&nbsp;pour permettre &agrave; ceux qui sont int&eacute;ress&eacute;s de vous contacter et d&#39;en savoir plus en vue d&#39;acheter vos&nbsp;<strong>produits et services</strong>.</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<h3><strong><a href=\"https://api.whatsapp.com/send/?phone=237682465068&amp;text=Bonjour!%20Je%20viens%20de%20visiter%20votre%20site.%20J%27aimerais%20en%20creer%20un%20siteweb%20pour%20mon%20activit%C3%A9!!\">Obtenir Votre Site</a></strong></h3>\r\n\r\n<p>Nous vous accompagnons dans votre parcours sur le web afin de vous permettre de profiter au mieux de ce nouvel outil de communication.</p>\r\n\r\n<h3>Nous ne cr&eacute;ons pas juste un site, Nous cr&eacute;ons une solution digitale afin de r&eacute;soudre un probl&egrave;me pr&eacute;cis que nous avons identifi&eacute;.</h3>\r\n\r\n<p>Il y a environs 3 milliards de personnes connect&eacute;es sur Google dans le monde ! Votre entreprise/projet doit pouvoir en profiter. En vous cr&eacute;ant un site vous allez...</p>\r\n\r\n<p>ce n&#39;est pas une depense, c&#39;est un investissement</p>\r\n\r\n<ul>\r\n	<li>Gagner en visibilit&eacute;</li>\r\n	<li>Augmenter votre chiffre d&#39;affaire</li>\r\n	<li>Servir votre notori&eacute;t&eacute; et votre image</li>\r\n	<li>Offrir un support &agrave; vos clients</li>\r\n</ul>', '', '', 'bannejpg', 'Tous nos services', 'Tous nos articles'),
(6, '30491230427', '', '', '2023-04-27', '09:56:39', '', '', 0, 'oui', 'oui', 'oui', 'Nos services', '23-04-27-16akila_blog.jpg', 0, 'OneCom-X Africa', 'Une agence de communication  qui se démarque par sa créativité et sa réactivité', 'Nous développons votre image', 'Notre mission est de vous aider à vous faire connaître', 'Communication', 'Mieux vous connaître, c\'est mieux comprendre vos besoins et vos envies.', '', '', '<h2>OneCom-X Africa</h2>\r\n\r\n<p>OneCom-X Africa est une agence de communication bas&eacute;e &agrave; Yaound&eacute; Cameroun qui se d&eacute;marque par sa cr&eacute;ativit&eacute; et sa r&eacute;activit&eacute;.</p>\r\n\r\n<h2>Notre mission</h2>\r\n\r\n<p>Notre mission est de vous aider &agrave; vous faire conna&icirc;tre, d&eacute;velopper votre image, promouvoir vos services et g&eacute;n&eacute;rer vos contacts afin de gagner des parts de march&eacute;.</p>\r\n\r\n<p>Et aussi nous vous permettons de G&eacute;n&eacute;rer des prospects , Fixer des rendez-vous, &Eacute;tude de march&eacute;, Enqu&ecirc;tes y compris analyse statistique, Information sur la base de donn&eacute;es ou la liste de diffusion, D&eacute;veloppement des affaires, Invitation s&eacute;minaires et conf&eacute;rences, Service d&#39;assistance de premier niveau, Promotion des produits en point de vente, Service de livraison, Service apr&egrave;s-vente, t&eacute;l&eacute;marketing, t&eacute;l&eacute;vente et communication</p>\r\n\r\n<p>Mieux vous conna&icirc;tre, c&#39;est mieux comprendre vos besoins et vos envies.</p>\r\n\r\n<p>Alors contactez nous !</p>\r\n\r\n<p>&nbsp;</p>', '', '', '23-04-27-50akila_blog.jpg', 'Tous nos services', 'Tous nos posts'),
(7, '13369230429', '', '', '2023-04-29', '14:20:00', '', '', 0, 'oui', 'oui', 'oui', 'Nos services', '23-04-29-58akila_blog.jpg', 0, 'CRÉATION D\'ENTREPRISE', 'Nous accompagnerons dans la création de votre entreprise', 'COMPTABILITÉ', 'Nous formons dans la gestion de vos finances', 'CONSEIL', 'Nous vous aux déroulement de  votre entreprise', '', '', '<h2>Transformez votre business</h2>\r\n\r\n<p>&nbsp;Cabinet xtrade Consulting Group Sart est une entreprise bas&eacute;e &agrave; douale au Cameroun, specialis&eacute;e dans la creation d&#39;entreprise, la comptabilit&eacute; le conseil fiscal, le conseil financier, la formation et l&#39;accompagnement.</p>\r\n\r\n<p>La crise &eacute;conomique dont fait face le march&eacute; des affaires dans le monde, pousse les acteurs &eacute;conomiques &agrave; faire preuvent de beaucoup de maitrise et rigueur dans leurs diff&eacute;rentes op&eacute;rations.</p>\r\n\r\n<p>Ainsi les professionnels de la finances et les cabinets d&#39;expertise sont l&agrave; pour aider ces op&eacute;rateurs &agrave; mieux faire face &agrave; cette situation et &agrave; minimiser les risques.</p>\r\n\r\n<p>D&#39;o&ugrave; le Cabinet comptable Xtrade Consulting se met &agrave; la disposition des entrepreuneurs dans ce sens &agrave; pouvoir leur permettre d&#39;optimiser leur rendement.</p>\r\n\r\n<p><img alt=\"????\" src=\"https://z-p3-static.xx.fbcdn.net/images/emoji.php/v9/t6a/1/16/1f530.png\" style=\"height:16px; width:16px\" /> EXPERTISE</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://z-p3-static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" style=\"height:16px; width:16px\" /> Audit fiscal</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://z-p3-static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" style=\"height:16px; width:16px\" /> Comptabilit&eacute; et gestion</p>\r\n\r\n<p><img alt=\"✅\" src=\"https://z-p3-static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" style=\"height:16px; width:16px\" /> Conseils et formation</p>\r\n\r\n<p>Le Cabinet comptable Xtrade Consulting c&#39;est plusieurs ann&eacute;es dans l&#39;accompagne &agrave; la legalisation des entreprises au Cameroun.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '', '', '23-04-29-18akila_blog.jpg', 'Tous nos services', 'Tous nos posts'),
(8, '84022230430', '', '', '2023-04-30', '07:23:42', '', '', 0, 'oui', 'oui', 'oui', 'Nos services', '23-04-30-47akila_blog.png', 0, 'Bienvenue à Ntouessong', 'Le Développement n’est possible que si tous ceux que le destin a bien voulu regroupé dans un même espace géographique, partagent en plus de cet espace les valeurs.', 'Notre histoire est notre force !', 'Un peuple qui néglige sa culure et son histoire ne peut pas se développer.', 'Bienvenue à Ntouessong', 'Le Développement n’est possible que si tous ceux que le destin a bien voulu regroupé dans un même espace géographique, partagent en plus de cet espace les valeurs.', '', '', '<h3><strong>LE MOT DU CHEF DU GROUPEMENT</strong></h3>\r\n\r\n<p>Chers filles et fils, natifs ou d&rsquo;adoption de Ntouessong Je suis heureux et fier de vous pr&eacute;senter &laquo;le site web anyang-touessong.com&raquo;.<br />\r\nTout d&rsquo;abord, je tiens &agrave; f&eacute;liciter et &agrave; remercier ceux qui ont contribu&eacute; &agrave; le cr&eacute;er, et tout particuli&egrave;rement notre fr&egrave;re Alain Didier BILO&rsquo;O qui en a eu l&rsquo;initiative et a tout mis en &oelig;uvre pour le rendre fonctionnel.</p>\r\n\r\n<p>Ce site est une grande avanc&eacute;e pour notre Groupement et m&ecirc;me pour notre Arrondissement parce qu&rsquo;il est destin&eacute; &agrave; &ecirc;tre la vitrine de ce que nous sommes et ce que nous souhaitons faire aussi bien au Cameroun que dans le monde entier, pour faire conna&icirc;tre ; &ndash; nos id&eacute;es, &ndash; nos actions &ndash; l&rsquo;identit&eacute; et l&rsquo;image de notre Groupement et de l&rsquo;Arrondissement de Soa, ainsi que les voies et moyens propos&eacute;s pour leur renaissance et leur arrimage aux exigences de la mondialisation et du d&eacute;veloppement.</p>\r\n\r\n<p>Ntouessong dispose d&eacute;sormais d&rsquo;un remarquable outil d&rsquo;information et de concertation pour ses fils et filles qui peuvent s&rsquo;impliquer chacun selon son potentiel au jour le jour &agrave; l&rsquo;am&eacute;lioration des conditions de vie de tous tant du pays que de la diaspora. J&rsquo;engage donc les uns et les autres &agrave; s&rsquo;approprier ce site et &agrave; en aire le meilleur usage pour assurer le rayonnement et le d&eacute;veloppement de notre Groupement et de notre arrondissement. Je souhaite plein succ&egrave;s et longue vie &agrave; anytouessong.com.</p>\r\n\r\n<p><br />\r\n<strong>SM EMINI DZINGA II Lucien Marie</strong></p>', '', '', '23-04-30-53akila_blog.jpeg', 'Le bureau exécutif', 'Tous nos posts'),
(9, '16508230505', '', '', '2023-05-05', '11:24:51', '', '', 0, 'oui', 'oui', 'oui', 'Nos services', '23-05-05-04akila_blog.jpg', 0, 'Communication', 'Nous aidons votre  entreprise à faire une bonne Communication', 'Gagner des marchés', 'Nous vous aidons à gagner des marchés grâce à une présence digitale.', 'Service clients', 'Nous améliorons le service client de votre entreprise.', '', '', '<h3>Target communication by&nbsp;NTC</h3>\r\n\r\n<p><strong>Est une Agence de&nbsp;communication digitale conseille, qui accompagne et assiste ses clients dans la d&eacute;termination pr&eacute;alable d&rsquo;une strat&eacute;gie, selon l&rsquo;&eacute;ventuel dispositif existant, la vision, les valeurs et les buts &agrave; atteindre, en vue de d&eacute;ployer une Marque M&eacute;dia sur l&rsquo;ensemble des canaux num&eacute;riques. </strong></p>\r\n\r\n<h3><strong>Objectif :</strong></h3>\r\n\r\n<p><strong>Nous&nbsp;assurons&nbsp;la meilleure visibilit&eacute; possible &agrave; l&rsquo;entreprise concern&eacute;e. Le premier support est le site internet assist&eacute; de ses r&eacute;seaux sociaux comme canaux secondaires de partage.</strong></p>\r\n\r\n<h3><strong>L&rsquo;ambition:</strong></h3>\r\n\r\n<p><strong>Notre ambition poursuivie est le plus souvent de g&eacute;n&eacute;rer plus de trafic qualifi&eacute; pour d&eacute;velopper &agrave; la fois l&rsquo;image, la marque employeur et le chiffre d&rsquo;affaires via le web marketing pour cette entr&eacute;e particuli&egrave;re</strong></p>', '', '', '23-05-05-46akila_blog.jpg', 'Tous nos services', 'Tous nos posts'),
(10, '18690230510', '', '', '2023-05-10', '06:56:20', '', '', 0, 'oui', 'oui', 'oui', 'Nos services', '23-05-10-45akila_blog.jpg', 0, 'Notre engagement', 'Nous nous engageons à apporter des solutions fiable à nos clients', 'Accompagnement', 'Nous avons une équipe d\'expert qui vous accompagne dans la réalisation de votre projet', 'Plus proche de chez vous', 'La distance n\'est pas un souci pour satisfaire nos clients', '', '', '<p><strong>Cap Electric Engineering</strong></p>\r\n\r\n<p>Acteur global du b&acirc;timent et des travaux publics,&nbsp;<strong>Cap Electric Engineering</strong>&nbsp;est un op&eacute;rateur complet qui couvre l&rsquo;ensemble des m&eacute;tiers de l&rsquo;&eacute;nergie et des services associ&eacute;s :&nbsp;<em>g&eacute;nie &eacute;lectrique</em>,&nbsp;<em>g&eacute;nie climatique</em>,&nbsp;<em>solutions technologiques</em>,&nbsp;<em>s&eacute;curit&eacute;s</em>,&nbsp;<em>&eacute;nergies renouvelables</em>&nbsp;ou encore la&nbsp;<em>maintenance multi technique</em>&nbsp;avec des &eacute;quipes qui interviennent en travaux neufs ou de r&eacute;novation, ainsi qu&rsquo;en&nbsp;<em>travaux de proximit&eacute;</em>, notamment en&nbsp;<em>maintenance des installations techniques</em>.<br />\r\n<br />\r\nNous intervenons dans&nbsp;<strong>tout le cycle des projets de nos clients</strong>&nbsp;en commen&ccedil;ant par la sp&eacute;cification du besoin, l&rsquo;&eacute;tude puis la r&eacute;alisation et la mise en service en assurant un niveau de qualit&eacute; &eacute;lev&eacute; et constant.<br />\r\n<br />\r\n<strong>Cap Electric Engineering</strong>&nbsp;a cette forte dimension qui permet de comprendre le besoin de sa client&egrave;le et d&rsquo;assurer une proximit&eacute; n&eacute;cessaire pour un soutien permanant afin d&rsquo;offrir des prestations conformes et adapt&eacute;es au besoin du client.</p>\r\n\r\n<p>&nbsp;</p>', '', '', '23-05-10-29akila_blog.jpg', 'Toute nos services', 'Tous nos posts'),
(11, '4579230515', '', '', '2023-05-15', '11:50:28', '', '', 0, 'oui', 'oui', 'oui', 'Nos services', '23-05-15-04akila_blog.jpeg', 0, 'Conseil en management', 'Je vous donne des conseils pour mieux faire le suivis de votre équipe', 'Formation en entreprise', 'Je vous offre une formation dans la gestion interne de votre entreprise', 'Développement de leadership', 'Le développement du leadership est un processus intensif qui permet de développer des compétences managériales essentielles pour préparer une personne', '', '', '<h3>Ousmane Ndiaye</h3>\r\n\r\n<p>Avec un parcours multidisciplinaire, Je suis dipl&ocirc;m&eacute; de la Sorbonne avec 3 Masters et une vingtaine d&rsquo;ann&eacute;es d&rsquo;exp&eacute;rience entre la France, le S&eacute;n&eacute;gal et le Canada o&ugrave; j&#39;interviens ces dix derni&egrave;res ann&eacute;es.<br />\r\n<br />\r\nMon expertise recouvre les champs suivants : La motivation, l&rsquo;intervention et l&rsquo;encadrement jeunesse, la recherche d&rsquo;emploi, la gestion de carri&egrave;re, l&rsquo;&eacute;volution professionnelle, le leadership, le d&eacute;veloppement personnel et organisationnel, la prise de parole en public, l&rsquo;Art oratoire, le management des &eacute;quipes, l&rsquo;intelligence &eacute;motionnelle, le marketing de soi, les relations publiques, la gestion du changement, le team building et l&rsquo;&eacute;ducation &agrave; l&rsquo;enfance.<br />\r\n<br />\r\nJe transforme vos contraintes en d&eacute;fis tout en vous donnant les moyens de les relever haut la main.</p>', '', '', '23-05-15-49akila_blog.jpeg', 'Tous nos services', 'Tous nos posts'),
(12, '25995230523', '', '', '2023-05-23', '22:06:31', '', '', 0, 'oui', 'oui', 'oui', 'Nos services', '23-05-23-38akila_blog.jpeg', 0, 'Gabriel Chinomso Gideon', 'Born in 18/08/1997 in Abia State Nigeria and train in portharcourt when he was at age of 10 years, with his uncle, GCG is a christian gospel singer', 'THE BEST GOSPEL MUSIC EVER', 'Although live was not easy for me and also my parents, i tried many things and many works in oder to move forward', 'What can i share with my Fan', 'I want to encourage everyone out there to keep believing in Christ Jesus', '', '', '<p>Born in 18/08/1997 in Abia State Nigeria and train in portharcourt when he was at age of 10 years, with his uncle, GCG is a christian gospel singer, musician, song writer, song composer, Mc,motivational speaker, encourager ,comedian and<br />\r\nBase on portharcourt/ river Nigeria,GCG started his music career at age of 17 years when he was living with his uncle , first son of his parents before other&#39;s, but they are five in numbers. GCG now is a brillant and intelligent guy that loves everythings about Jesus Christ and has decided in his life to use his Golden Voice that God gave to him to preach to the nations and glorified the father in heaven.</p>', '', '', '23-05-23-07akila_blog.jpeg', 'Toute nos services', 'Tous nos posts');

-- --------------------------------------------------------

--
-- Table structure for table `evenement`
--

CREATE TABLE `evenement` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `permalien` varchar(111) NOT NULL,
  `matricule_entreprise` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evenement`
--

INSERT INTO `evenement` (`id`, `titre`, `content`, `date`, `time`, `matricule`, `photo`, `permalien`, `matricule_entreprise`) VALUES
(1, 'jolie plan pour tous le monde', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi magnam blanditiis temporibus quam illum debitis recusandae beatae aperiam tenetur maiores quibusdam obcaecati, vel ut necessitatibus corrupti esse at iste veniam?<br />', '2023-01-12', '18:25:00', '53751220913\r\n', 'téléchargement09College-Christina.jpg', '', '36');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name_file` varchar(200) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `id_cat` varchar(15) NOT NULL,
  `permalien` varchar(255) DEFAULT NULL,
  `mat_membre` varchar(20) DEFAULT NULL,
  `date_ajout` date DEFAULT current_timestamp(),
  `heure_ajout` time NOT NULL DEFAULT current_timestamp(),
  `matricule_entreprise` varchar(15) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name_file`, `titre`, `id_cat`, `permalien`, `mat_membre`, `date_ajout`, `heure_ajout`, `matricule_entreprise`, `description`) VALUES
(8, 'plan_d\'accompagnementakila_blog.pdf', 'plan d\'accompagnement', '4585114 ', 'plan_d\'accompagnement', NULL, '2023-05-03', '08:24:23', '68650230326', '');

-- --------------------------------------------------------

--
-- Table structure for table `info_visiteurs`
--

CREATE TABLE `info_visiteurs` (
  `id` int(11) NOT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `ville` varchar(200) DEFAULT NULL,
  `pays` varchar(200) DEFAULT NULL,
  `code_pays` varchar(250) DEFAULT NULL,
  `continent` varchar(200) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `region_code` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(200) DEFAULT NULL,
  `timezone` varchar(200) DEFAULT NULL,
  `code_iso` varchar(200) DEFAULT NULL,
  `exchange` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info_visiteurs1`
--

CREATE TABLE `info_visiteurs1` (
  `id` int(11) NOT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `ville` varchar(200) DEFAULT NULL,
  `pays` varchar(200) DEFAULT NULL,
  `code_pays` varchar(250) DEFAULT NULL,
  `continent` varchar(200) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `region_code` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(200) DEFAULT NULL,
  `timezone` varchar(200) DEFAULT NULL,
  `code_iso` varchar(200) DEFAULT NULL,
  `exchange` varchar(200) DEFAULT NULL,
  `traiter` int(11) DEFAULT 0,
  `heure` varchar(10) NOT NULL,
  `date_visite` varchar(10) NOT NULL,
  `nbre_visiter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_visiteurs1`
--

INSERT INTO `info_visiteurs1` (`id`, `ip`, `ville`, `pays`, `code_pays`, `continent`, `region`, `region_code`, `latitude`, `longitude`, `timezone`, `code_iso`, `exchange`, `traiter`, `heure`, `date_visite`, `nbre_visiter`) VALUES
(1, '157.55.39.86', 'Yonkers', 'United States', 'US', 'North America', 'New York', 'NY', '40.9186', '-73.8932', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(2, '52.167.144.29', 'Boydton', 'United States', 'US', 'North America', 'Virginia', 'VA', '36.6534', '-78.375', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(3, '205.210.31.172', '', 'United States', 'US', 'North America', '', '', '37.751', '-97.822', 'America/Chicago', '&#36;', '0', 1, '', '', ''),
(4, '157.55.39.18', 'Yonkers', 'United States', 'US', 'North America', 'New York', 'NY', '40.9186', '-73.8932', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(5, '52.167.144.76', 'Boydton', 'United States', 'US', 'North America', 'Virginia', 'VA', '36.6534', '-78.375', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(6, '37.34.242.16', 'As Salimiyah', 'Kuwait', 'KW', 'Asia', 'Hawalli', 'HA', '29.3323', '48.074', 'Asia/Kuwait', 'KD', '0.3056', 1, '', '', ''),
(7, '45.55.112.20', 'San Francisco', 'United States', 'US', 'North America', 'California', 'CA', '37.7308', '-122.3838', 'America/Los_Angeles', '&#36;', '0', 1, '', '', ''),
(8, '129.0.99.229', 'Douala', 'Cameroon', 'CM', 'Africa', 'Littoral', 'LT', '4.0505', '9.7023', 'Africa/Douala', 'CFAF', '611.5351', 1, '', '', ''),
(9, '129.0.76.79', 'Douala', 'Cameroon', 'CM', 'Africa', 'Littoral', 'LT', '4.0505', '9.7023', 'Africa/Douala', 'CFAF', '611.5351', 1, '', '', ''),
(10, '2a03:2880:31ff:11::face:b00c', 'Clonee', 'Ireland', 'IE', 'Europe', 'Meath', 'MH', '53.4117', '-6.4495', 'Europe/Dublin', '&#8364;', '0.932', 1, '', '', ''),
(11, '2a03:2880:22ff:16::face:b00c', 'Sandston', 'United States', 'US', 'North America', 'Virginia', 'VA', '37.5157', '-77.2758', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(12, '2a03:2880:22ff:76::face:b00c', 'Sandston', 'United States', 'US', 'North America', 'Virginia', 'VA', '37.5157', '-77.2758', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(13, '2a03:2880:22ff:3::face:b00c', 'Sandston', 'United States', 'US', 'North America', 'Virginia', 'VA', '37.5157', '-77.2758', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(14, '2a03:2880:27ff:74::face:b00c', 'Ashburn', 'United States', 'US', 'North America', 'Virginia', 'VA', '39.0469', '-77.4903', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(15, '2a03:2880:27ff:6::face:b00c', 'Ashburn', 'United States', 'US', 'North America', 'Virginia', 'VA', '39.0469', '-77.4903', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(16, '2a02:4780:1:5::1a', 'Asheville', 'United States', 'US', 'North America', 'North Carolina', 'NC', '35.5947', '-82.5545', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(17, '2a03:2880:13ff:7::face:b00c', 'Springfield', 'United States', 'US', 'North America', 'Nebraska', 'NE', '41.0765', '-96.1438', 'America/Chicago', '&#36;', '0', 1, '', '', ''),
(18, '2a03:2880:3ff::face:b00c', 'Eagle Mountain', 'United States', 'US', 'North America', 'Utah', 'UT', '40.3833', '-111.9895', 'America/Denver', '&#36;', '0', 1, '', '', ''),
(19, '2a03:2880:3ff:76::face:b00c', 'Eagle Mountain', 'United States', 'US', 'North America', 'Utah', 'UT', '40.3833', '-111.9895', 'America/Denver', '&#36;', '0', 1, '', '', ''),
(20, '52.41.74.250', 'Boardman', 'United States', 'US', 'North America', 'Oregon', 'OR', '45.8234', '-119.7257', 'America/Los_Angeles', '&#36;', '0', 1, '', '', ''),
(21, '52.209.4.190', 'Dublin', 'Ireland', 'IE', 'Europe', 'Leinster', 'L', '53.3379', '-6.2591', 'Europe/Dublin', '&#8364;', '0.932', 1, '', '', ''),
(22, '2a03:2880:22ff:77::face:b00c', 'Sandston', 'United States', 'US', 'North America', 'Virginia', 'VA', '37.5157', '-77.2758', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(23, '41.202.219.69', '', 'Cameroon', 'CM', 'Africa', '', '', '6', '12.5', 'Africa/Douala', 'CFAF', '611.5351', 1, '', '', ''),
(24, '2a03:2880:22ff:b::face:b00c', 'Sandston', 'United States', 'US', 'North America', 'Virginia', 'VA', '37.5157', '-77.2758', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(25, '2a03:2880:22ff:5::face:b00c', 'Sandston', 'United States', 'US', 'North America', 'Virginia', 'VA', '37.5157', '-77.2758', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(26, '2a03:2880:32ff:11::face:b00c', 'Odense', 'Denmark', 'DK', 'Europe', 'South Denmark', '83', '55.3945', '10.3903', 'Europe/Copenhagen', '&#107;&#114;', '6.9351', 1, '', '', ''),
(27, '2a03:2880:23ff:11::face:b00c', 'New Albany', 'United States', 'US', 'North America', 'Ohio', 'OH', '40.0847', '-82.7988', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(28, '42.236.10.75', '', 'China', 'CN', 'Asia', '', '', '34.7732', '113.722', 'Asia/Shanghai', '&#20803;', '6.7855', 1, '', '', ''),
(29, '27.115.124.70', 'Shanghai', 'China', 'CN', 'Asia', 'Shanghai', 'SH', '31.2222', '121.4581', 'Asia/Shanghai', '&#20803;', '6.7828', 1, '', '', ''),
(30, '42.236.10.117', '', 'China', 'CN', 'Asia', '', '', '34.7732', '113.722', 'Asia/Shanghai', '&#20803;', '6.7855', 1, '', '', ''),
(31, '157.55.39.115', 'Yonkers', 'United States', 'US', 'North America', 'New York', 'NY', '40.9186', '-73.8932', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(32, '2a03:2880:27ff:9::face:b00c', 'Ashburn', 'United States', 'US', 'North America', 'Virginia', 'VA', '39.0469', '-77.4903', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(33, '2a03:2880:27ff:16::face:b00c', 'Ashburn', 'United States', 'US', 'North America', 'Virginia', 'VA', '39.0469', '-77.4903', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(34, '205.210.31.173', '', 'United States', 'US', 'North America', '', '', '37.751', '-97.822', 'America/Chicago', '&#36;', '0', 1, '', '', ''),
(35, '40.77.167.188', 'Boydton', 'United States', 'US', 'North America', 'Virginia', 'VA', '36.6534', '-78.375', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(36, '2a03:2880:27ff:14::face:b00c', 'Ashburn', 'United States', 'US', 'North America', 'Virginia', 'VA', '39.0469', '-77.4903', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(37, '2a03:2880:27ff:78::face:b00c', 'Ashburn', 'United States', 'US', 'North America', 'Virginia', 'VA', '39.0469', '-77.4903', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(38, '2a03:2880:31ff::face:b00c', 'Clonee', 'Ireland', 'IE', 'Europe', 'Meath', 'MH', '53.4117', '-6.4495', 'Europe/Dublin', '&#8364;', '0.932', 1, '', '', ''),
(39, '2a03:2880:31ff:f::face:b00c', 'Clonee', 'Ireland', 'IE', 'Europe', 'Meath', 'MH', '53.4117', '-6.4495', 'Europe/Dublin', '&#8364;', '0.932', 1, '', '', ''),
(40, '2a03:2880:31ff:17::face:b00c', 'Clonee', 'Ireland', 'IE', 'Europe', 'Meath', 'MH', '53.4117', '-6.4495', 'Europe/Dublin', '&#8364;', '0.932', 1, '', '', ''),
(41, '2a03:2880:31ff:78::face:b00c', 'Clonee', 'Ireland', 'IE', 'Europe', 'Meath', 'MH', '53.4117', '-6.4495', 'Europe/Dublin', '&#8364;', '0.9312', 1, '', '', ''),
(42, '2a03:2880:31ff:1::face:b00c', 'Clonee', 'Ireland', 'IE', 'Europe', 'Meath', 'MH', '53.4117', '-6.4495', 'Europe/Dublin', '&#8364;', '0.932', 1, '', '', ''),
(43, '198.235.24.180', '', 'United States', 'US', 'North America', '', '', '37.751', '-97.822', 'America/Chicago', '&#36;', '0', 1, '', '', ''),
(44, '2a03:2880:10ff:7::face:b00c', 'Altoona', 'United States', 'US', 'North America', 'Iowa', 'IA', '41.6473', '-93.4744', 'America/Chicago', '&#36;', '0', 1, '', '', ''),
(45, '159.223.168.91', 'North Bergen', 'United States', 'US', 'North America', 'New Jersey', 'NJ', '40.793', '-74.0247', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(46, '66.249.64.216', '', 'United States', 'US', 'North America', '', '', '37.751', '-97.822', 'America/Chicago', '&#36;', '0', 1, '', '', ''),
(47, '85.202.81.6', 'Helsinki', 'Finland', 'FI', 'Europe', 'Uusimaa', '18', '60.1797', '24.9344', 'Europe/Helsinki', '&#8364;', '0.932', 1, '', '', ''),
(48, '205.185.121.69', 'Las Vegas', 'United States', 'US', 'North America', 'Nevada', 'NV', '36.102', '-115.1447', 'America/Los_Angeles', '&#36;', '0', 1, '', '', ''),
(49, '209.141.34.187', 'Las Vegas', 'United States', 'US', 'North America', 'Nevada', 'NV', '36.102', '-115.1447', 'America/Los_Angeles', '&#36;', '0', 1, '', '', ''),
(50, '154.72.167.162', '', 'Cameroon', 'CM', 'Africa', '', '', '6', '12.5', 'Africa/Douala', 'CFAF', '611.5351', 1, '', '', ''),
(51, '154.72.167.175', '', 'Cameroon', 'CM', 'Africa', '', '', '6', '12.5', 'Africa/Douala', 'CFAF', '611.5351', 1, '', '', ''),
(52, '41.202.219.77', '', 'Cameroon', 'CM', 'Africa', '', '', '6', '12.5', 'Africa/Douala', 'CFAF', '611.5351', 1, '', '', ''),
(53, '2a03:2880:12ff:d::face:b00c', 'Los Lunas', 'United States', 'US', 'North America', 'New Mexico', 'NM', '34.7814', '-106.714', 'America/Denver', '&#36;', '0', 1, '', '', ''),
(54, '185.40.63.177', 'Luxembourg', 'Luxembourg', 'LU', 'Europe', 'Luxembourg', 'LU', '49.6113', '6.1294', 'Europe/Luxembourg', '&#8364;', '0.932', 1, '', '', ''),
(55, '41.82.89.254', 'Dakar', 'Senegal', 'SN', 'Africa', 'Dakar', 'DK', '14.667', '-17.4445', 'Africa/Dakar', 'CFAF', '611.5408', 1, '', '', ''),
(56, '154.72.167.210', '', 'Cameroon', 'CM', 'Africa', '', '', '6', '12.5', 'Africa/Douala', 'CFAF', '611.5351', 1, '', '', ''),
(57, '137.255.10.69', 'Djougou', 'Benin', 'BJ', 'Africa', 'Donga', 'DO', '9.7064', '1.6703', 'Africa/Porto-Novo', 'CFAF', '610.6982', 1, '', '', ''),
(58, '129.0.99.144', 'Douala', 'Cameroon', 'CM', 'Africa', 'Littoral', 'LT', '4.0505', '9.7023', 'Africa/Douala', 'CFAF', '611.5351', 1, '', '', ''),
(59, '2a03:2880:13ff:2::face:b00c', 'Springfield', 'United States', 'US', 'North America', 'Nebraska', 'NE', '41.0765', '-96.1438', 'America/Chicago', '&#36;', '0', 1, '', '', ''),
(60, '2a03:2880:25ff:4::face:b00c', 'Huntsville', 'United States', 'US', 'North America', 'Alabama', 'AL', '34.7269', '-86.5885', 'America/Chicago', '&#36;', '0', 1, '', '', ''),
(61, '52.167.144.95', 'Boydton', 'United States', 'US', 'North America', 'Virginia', 'VA', '36.6534', '-78.375', 'America/New_York', '&#36;', '0', 1, '', '', ''),
(62, '154.72.150.236', 'Douala', 'Cameroon', 'CM', 'Africa', 'Littoral', 'LT', '4.0505', '9.7023', 'Africa/Douala', 'CFAF', '611.5351', 1, '', '', ''),
(63, '2a03:2880:31ff:b::face:b00c', 'Clonee', 'Ireland', 'IE', 'Europe', 'Meath', 'MH', '53.4117', '-6.4495', 'Europe/Dublin', '&#8364;', '0.932', 1, '', '', ''),
(64, '45.128.160.176', 'Vilnius', 'Lithuania', 'LT', 'Europe', 'Vilnius City Municipality', '57', '54.6816', '25.3225', 'Europe/Vilnius', '&#8364;', '0.932', 1, '', '', ''),
(65, '2a03:2880:3ff:1::face:b00c', 'Eagle Mountain', 'United States', 'US', 'North America', 'Utah', 'UT', '40.3833', '-111.9895', 'America/Denver', '&#36;', '0', 1, '', '', ''),
(66, '2a03:2880:3ff:2::face:b00c', 'Eagle Mountain', 'United States', 'US', 'North America', 'Utah', 'UT', '40.3833', '-111.9895', 'America/Denver', '&#36;', '0', 1, '', '', ''),
(67, '154.72.167.206', '', 'Cameroon', 'CM', 'Africa', '', '', '6', '12.5', 'Africa/Douala', 'CFAF', '611.5351', 1, '', '', ''),
(68, '129.0.99.135', 'Douala', 'Cameroon', 'CM', 'Africa', 'Littoral', 'LT', '4.0505', '9.7023', 'Africa/Douala', 'CFAF', '611.5351', 1, '', '', ''),
(69, '2a03:2880:3ff:74::face:b00c', 'Eagle Mountain', 'United States', 'US', 'North America', 'Utah', 'UT', '40.3833', '-111.9895', 'America/Denver', '&#36;', '0', 1, '', '', ''),
(70, '85.202.81.174', 'Helsinki', 'Finland', 'FI', 'Europe', 'Uusimaa', '18', '60.1797', '24.9344', 'Europe/Helsinki', '&#8364;', '0.932', 1, '', '', ''),
(71, '129.0.76.14', 'Douala', 'Cameroon', 'CM', 'Africa', 'Littoral', 'LT', '4.0505', '9.7023', 'Africa/Douala', 'CFAF', '611.5351', 1, '', '', ''),
(72, '190.115.179.50', 'Port-au-Prince', 'Haiti', 'HT', 'North America', 'Departement de l\'Ouest', 'OU', '18.5413', '-72.3362', 'America/Port-au-Prince', NULL, '150.2694', 1, '', '', ''),
(73, '66.249.64.218', '', 'United States', 'US', 'North America', '', '', '37.751', '-97.822', 'America/Chicago', '&#36;', '0', 1, '', '', ''),
(74, '66.249.64.220', '', 'United States', 'US', 'North America', '', '', '37.751', '-97.822', 'America/Chicago', '&#36;', '0', 1, '', '', ''),
(75, '207.46.13.18', '', 'United States', 'US', 'North America', '', '', '37.751', '-97.822', 'America/Chicago', '&#36;', '0', 1, '', '', ''),
(76, '207.46.13.71', '', 'United States', 'US', 'North America', '', '', '37.751', '-97.822', 'America/Chicago', '&#36;', '0', 1, '', '', ''),
(77, '2a03:2880:10ff:13::face:b00c', 'Altoona', 'United States', 'US', 'North America', 'Iowa', 'IA', '41.6473', '-93.4744', 'America/Chicago', '&#36;', '0', 1, '', '', ''),
(78, '129.0.76.140', 'Douala', 'Cameroon', 'CM', 'Africa', 'Littoral', 'LT', '4.0505', '9.7023', 'Africa/Douala', 'CFAF', '610.6953', 1, '', '', ''),
(79, '41.99.90.230', 'Oran', 'Algeria', 'DZ', 'Africa', 'Oran', '31', '35.7204', '-0.6659', 'Africa/Algiers', 'DA', '136.3761', 1, '', '', ''),
(80, '2a03:2880:32ff:13::face:b00c', 'Odense', 'Denmark', 'DK', 'Europe', 'South Denmark', '83', '55.3945', '10.3903', 'Europe/Copenhagen', '&#107;&#114;', '6.9351', 1, '', '', ''),
(81, '2a03:2880:30ff:e::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(82, '2a03:2880:30ff:d::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(83, '205.210.31.25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(84, '157.55.39.1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(85, '129.0.76.28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(86, '154.72.167.192', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(87, '205.210.31.174', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(88, '87.236.176.77', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(89, '2a03:2880:22ff:d::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(90, '147.78.47.249', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(91, '207.46.13.169', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(92, '157.55.39.19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(93, '207.46.13.87', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(94, '209.141.36.112', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(95, '157.55.39.142', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(96, '157.55.39.14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(97, '2a03:2880:22ff:c::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(98, '207.46.13.91', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(99, '34.28.38.210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(100, '217.182.175.162', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(101, '66.249.70.56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(102, '66.249.70.60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(103, '66.249.70.58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(104, '2a03:2880:31ff:18::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(105, '2a03:2880:11ff:a::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(106, '129.0.76.111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(107, '207.46.13.96', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(108, '209.141.41.193', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(109, '209.141.55.120', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(110, '2a03:2880:11ff:76::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(111, '2a03:2880:22ff:14::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(112, '198.235.24.164', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(113, '181.215.185.146', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(114, '134.202.250.246', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(115, '179.60.183.31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(116, '200.10.35.184', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(117, '168.196.236.217', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(118, '168.196.236.57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(119, '200.10.34.149', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(120, '168.196.236.79', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(121, '194.233.150.201', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(122, '181.215.185.17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(123, '45.152.177.93', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(124, '103.230.69.166', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(125, '23.26.229.196', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(126, '194.233.150.192', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(127, '168.196.236.116', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(128, '134.202.250.194', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(129, '2.59.60.95', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(130, '2a03:2880:13ff:13::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(131, '2a03:2880:25ff:3::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(132, '2a03:2880:25ff:77::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(133, '2a03:2880:23ff:4::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(134, '209.141.35.128', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(135, '40.77.167.22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(136, '2a03:2880:11ff:9::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(137, '2a03:2880:27ff:8::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(138, '2a03:2880:ff:5::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(139, '205.210.31.59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(140, '2a03:2880:13ff:78::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(141, '51.158.109.3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(142, '2a03:2880:13ff:14::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(143, '2a03:2880:13ff:75::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(144, '2a03:2880:13ff:16::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(145, '2a03:2880:13ff:10::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(146, '2a03:2880:13ff:5::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(147, '2a03:2880:12ff:c::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(148, '2a03:2880:12ff:4::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(149, '139.59.100.179', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(150, '209.141.49.169', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(151, '154.72.150.188', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(152, '2a03:2880:30ff:c::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(153, '2a03:2880:31ff:4::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(154, '2a03:2880:31ff:74::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(155, '154.72.150.216', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(156, '129.0.76.43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(157, '2a03:2880:27ff:d::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(158, '154.72.150.228', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(159, '2a03:2880:3ff:6::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(160, '2a03:2880:ff:4::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(161, '2a03:2880:31ff:75::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(162, '2a03:2880:31ff:14::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(163, '2a03:2880:31ff:77::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(164, '2a03:2880:31ff:8::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(165, '154.72.150.219', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(166, '2a03:2880:31ff:3::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(167, '2a03:2880:27ff:10::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(168, '2a03:2880:27ff:13::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(169, '2a03:2880:27ff:76::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(170, '2a03:2880:27ff:11::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(171, '2a03:2880:27ff:a::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(172, '2a03:2880:27ff:4::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(173, '2a03:2880:27ff:12::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(174, '2a03:2880:27ff:3::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(175, '2a03:2880:27ff::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(176, '2a03:2880:11ff:13::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(177, '2a03:2880:11ff:77::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(178, '2a03:2880:10ff::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(179, '2a03:2880:13ff:9::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(180, '2a03:2880:31ff:a::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(181, '2a03:2880:27ff:1::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(182, '2a03:2880:32ff:76::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(183, '2a03:2880:23ff:5::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(184, '2a03:2880:23ff:15::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(185, '2a03:2880:22ff:7::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(186, '2a03:2880:32ff:c::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(187, '129.0.76.176', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(188, '2a03:2880:25ff:74::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(189, '2a03:2880:12ff:77::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(190, '2a03:2880:12ff:10::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(191, '2a03:2880:31ff:5::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(192, '2a03:2880:27ff:75::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(193, '2a03:2880:24ff:74::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(194, '2a03:2880:20ff:7::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(195, '2a03:2880:24ff:4::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(196, '2a03:2880:11ff:10::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(197, '154.72.150.189', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(198, '2a03:2880:24ff:76::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(199, '207.46.13.175', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(200, '129.0.76.155', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(201, '2a03:2880:31ff:16::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(202, '2a03:2880:31ff:c::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(203, '196.171.33.178', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(204, '2a03:2880:31ff:12::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(205, '157.55.39.207', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(206, '2a03:2880:22ff:8::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(207, '157.55.39.222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(208, '154.72.167.226', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(209, '154.72.167.148', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(210, '209.141.51.222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(211, '154.72.150.177', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(212, '2a03:2880:22ff:2::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(213, '205.185.122.184', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(214, '209.141.36.231', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(215, '129.0.76.72', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(216, '2a03:2880:27ff:e::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(217, '154.72.150.215', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(218, '129.0.76.91', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(219, '40.77.167.66', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(220, '209.141.33.65', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(221, '2a03:2880:12ff:74::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(222, '2a03:2880:12ff:76::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(223, '207.46.13.39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(224, '207.46.13.222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(225, '2a03:2880:32ff:17::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(226, '154.72.150.178', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(227, '154.72.150.202', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(228, '129.0.99.187', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(229, '129.0.99.8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(230, '2a03:2880:22ff:4::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(231, '159.65.0.220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(232, '2a03:2880:27ff:c::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(233, '35.206.243.197', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(234, '2a03:2880:3ff:4::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(235, '129.0.205.85', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(236, '2a03:2880:10ff:74::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(237, '205.185.116.89', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(238, '2a03:2880:30ff:75::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(239, '5.75.232.211', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(240, '129.0.99.137', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(241, '2a03:2880:22ff:12::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(242, '129.0.76.3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(243, '154.73.203.145', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(244, '154.73.203.174', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(245, '2a03:2880:32ff:1::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(246, '195.24.193.222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(247, '154.72.167.250', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(248, '129.0.99.208', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(249, '40.77.167.21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(250, '40.77.167.21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(251, '207.46.13.19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(252, '129.0.76.61', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(253, '129.0.76.147', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(254, '27.115.124.101', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(255, '27.115.124.101', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(256, '27.115.124.45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(257, '27.115.124.45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(258, '154.72.150.209', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(259, '180.163.220.3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(260, '27.115.124.6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(261, '2a03:2880:30ff:3::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(262, '129.0.99.204', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(263, '198.235.24.11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(264, '196.202.236.195', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(265, '5.161.144.64', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(266, '5.161.133.63', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(267, '2a01:4ff:f0:81c::1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(268, '2a01:4ff:f0:b4e3::1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(269, '2a03:2880:22ff:74::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(270, '2a03:2880:22ff:11::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(271, '198.235.24.128', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(272, '129.0.99.59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(273, '2a03:2880:13ff:6::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(274, '2a03:2880:13ff::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(275, '2a03:2880:13ff:74::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(276, '2a03:2880:32ff:78::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(277, '2a03:2880:22ff:f::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(278, '129.0.99.226', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(279, '129.0.99.16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(280, '207.46.13.160', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(281, '205.210.31.48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(282, '157.55.39.224', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(283, '2a03:2880:11ff:d::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(284, '89.106.127.108', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(285, '51.15.164.30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(286, '129.0.226.180', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(287, '154.72.167.134', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(288, '180.163.220.67', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(289, '121.4.105.222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(290, '180.163.220.68', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(291, '65.154.226.166', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(292, '66.249.65.214', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(293, '2a03:2880:25ff:78::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(294, '129.0.76.159', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(295, '87.236.176.53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(296, '2a03:2880:23ff:74::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(297, '66.249.65.216', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(298, '66.249.65.212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(299, '41.202.207.15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(300, '205.185.116.25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(301, '113.172.148.99', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(302, '77.119.196.87', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(303, '2a03:2880:13ff:b::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(304, '2a03:2880:21ff:77::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(305, '2a03:2880:24ff:75::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(306, '2a03:2880:24ff:77::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(307, '2a03:2880:21ff:8::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(308, '2a03:2880:21ff:76::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(309, '41.243.2.72', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(310, '205.210.31.40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(311, '2a03:2880:23ff:14::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(312, '129.0.99.210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(313, '190.115.175.134', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(314, '2a03:2880:27ff:f::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(315, '154.72.167.181', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(316, '2a03:2880:27ff:2::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(317, '2a03:2880:ff::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(318, '2a03:2880:ff:2::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(319, '40.77.167.20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(320, '154.72.167.240', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(321, '27.115.124.38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(322, '27.115.124.38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(323, '2a03:2880:31ff:13::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(324, '2a03:2880:31ff:13::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(325, '154.72.167.209', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(326, '129.0.99.129', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(327, '190.115.175.73', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(328, '129.0.76.110', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(329, '88.202.5.195', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(330, '41.216.47.138', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(331, '129.0.99.37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(332, '41.202.219.71', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(333, '154.66.172.33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(334, '154.72.169.140', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(335, '102.244.220.236', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(336, '154.72.167.128', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(337, '102.244.178.93', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(338, '129.0.76.59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(339, '102.244.220.37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(340, '91.205.43.161', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(341, '45.32.168.177', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(342, '2a03:2880:20ff:77::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(343, '2a03:2880:22ff::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(344, '154.72.150.156', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(345, '154.72.150.156', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(346, '42.236.10.84', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(347, '2a03:2880:23ff:7::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(348, '2a03:2880:22ff:75::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(349, '2a03:2880:22ff:10::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(350, '2a03:2880:10ff:8::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(351, '2a03:2880:13ff:d::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(352, '2a03:2880:3ff:5::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(353, '205.210.31.20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(354, '154.72.167.173', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(355, '154.72.167.149', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(356, '154.72.167.188', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(357, '154.72.167.201', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(358, '2a03:2880:31ff:76::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(359, '2a03:2880:31ff:6::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(360, '2a03:2880:31ff:9::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(361, '2a03:2880:31ff:e::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(362, '2a03:2880:22ff:e::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(363, '2a03:2880:31ff:1b::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(364, '2a03:2880:27ff:17::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(365, '154.72.167.218', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(366, '2a03:2880:12ff:e::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(367, '2a03:2880:12ff:e::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(368, '2a03:2880:12ff:8::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(369, '2a03:2880:12ff:8::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(370, '2a03:2880:12ff:f::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(371, '2a03:2880:12ff:f::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(372, '2a03:2880:10ff:75::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(373, '129.0.76.197', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(374, '129.0.76.197', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(375, '154.72.150.242', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(376, '154.72.150.242', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(377, '154.72.167.133', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(378, '154.72.167.167', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(379, '154.72.167.167', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(380, '2a03:2880:31ff:19::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(381, '2a03:2880:31ff:19::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(382, '2a03:2880:31ff:d::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(383, '2a03:2880:31ff:2::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(384, '2a03:2880:31ff:7::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(385, '2a03:2880:31ff:15::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(386, '154.72.167.228', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(387, '2a06:98c0:3600::103', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(388, '2a03:2880:27ff:71::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(389, '2a03:2880:27ff:71::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(390, '2a03:2880:27ff:15::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(391, '2a03:2880:27ff:15::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(392, '66.249.65.222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(393, '66.249.65.218', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(394, '66.249.65.218', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(395, '154.72.167.183', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(396, '2a03:2880:10ff:76::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(397, '2a03:2880:10ff:76::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(398, '2a03:2880:10ff:14::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(399, '2a03:2880:20ff:2::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(400, '2a03:2880:20ff:d::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(401, '2a03:2880:20ff:d::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(402, '154.72.167.236', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(403, '66.249.65.220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(404, '2a03:2880:11ff:c::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(405, '154.72.167.254', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(406, '129.0.76.165', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(407, '154.72.167.253', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(408, '154.72.167.253', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(409, '2a03:2880:31ff:1d::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(410, '2a03:2880:31ff:1d::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(411, '2a03:2880:31ff:1c::face:b00c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '', '', ''),
(412, '::1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '16:56:52', '2023-02-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `id_to` int(11) NOT NULL,
  `id_from` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `date_day` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `matricule_entreprise` varchar(12) NOT NULL,
  `matricule_page` varchar(12) NOT NULL,
  `nom_page` varchar(30) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `img_banniere` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `publie` int(11) NOT NULL DEFAULT 1,
  `matricule_admin` varchar(15) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `permalien_page` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `matricule_entreprise`, `matricule_page`, `nom_page`, `titre`, `img_banniere`, `content`, `publie`, `matricule_admin`, `date`, `time`, `permalien_page`) VALUES
(1, '68650230326', '68314230504', 'entreprise', '', '', '', 1, '2159230325', '2023-05-04', '07:55:20', ''),
(2, '68650230326', '35112230504', 'histoire-villages', 'Histoire des Villages de Ntouessong', '23-05-04-32akila_blog.jpg', '<h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h3>\r\n\r\n<table align=\"center\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h3>&nbsp; Les Pr&eacute;cieux Villages de Notre Groupement</h3>\r\n\r\n			<h3>Notre Histoire...</h3>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"2\" cellpadding=\"5\" cellspacing=\"5\" style=\"width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">\r\n			<h3>AKAK II</h3>\r\n\r\n			<p>Tout comme AKAK I, AKAK II a &eacute;t&eacute; fond&eacute; par les BA&rsquo;ABA. Selon nos informateurs, ils descendent du m&ecirc;me lignage. Mais AKAK II se trouve plut&ocirc;t dans le groupement NTOUESSONG &agrave; plus de 30 kilom&egrave;tres d&rsquo;AKAK I. Cette situation s&rsquo;explique par l&rsquo;histoire des migrations de ces peuples.<br />\r\n			En effet apr&egrave;s la travers&eacute;e de la SANAGA, les Ba&rsquo;aba vont s&rsquo;installer tout d&rsquo;abord &agrave; OBALA puis se regrouper au bord de la rivi&egrave;re FOULOU qui traverse de nos jours AKAK I.</p>\r\n			</th>\r\n			<th scope=\"col\">\r\n			<h3>ANDON</h3>\r\n\r\n			<p>ANDON est situ&eacute; &agrave; 3 kilom&egrave;tres du centre urbain de SOA, son histoire est li&eacute;e &agrave; celle de NKOLTSIT, En effet jusqu&rsquo;en 1972, ANDON est un sous ensemble de la chefferie de NKOLTSIT.<br />\r\n			A cette date NKOLTSIT est &eacute;clat&eacute; en trois chefferies et ANDON devient chefferie du 3&egrave;me degr&eacute; son premier chef &eacute;tant EDZOA ETOUNDI. Le second ETOUNDI MVOGO puis d&rsquo;ETOUNDI Dieudonn&eacute; d&egrave;s 1993. ANDON est le village de l&rsquo;une des &eacute;lites de SOA, l&rsquo;ancien ministre JOSEPH MBEDE..</p>\r\n			</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h3>MEBOUGOU</h3>\r\n\r\n			<p>MEBOUGOU signifie aisance, lieu de profit, lieu d&rsquo;abondance, bref une esp&egrave;ce de&nbsp;<strong>jardin d&rsquo;EDEN o&ugrave; le sol est fertile et o&ugrave; les moindres semis donnent des r&eacute;coltes abondantes et o&ugrave; la faune est tr&egrave;s riche</strong>. Les premi&egrave;res familles qui arriv&egrave;rent sur ce site et s&rsquo;y install&egrave;rent fuyaient les travaux forc&eacute;s. On peut donc faire remonter cette installation &agrave; l&rsquo;&eacute;poque allemande. Les peuples qu&rsquo;on rencontre aujourd&rsquo;hui &agrave; MEBOUGOU sont les Ba&rsquo;aba, les EMBE, les ETENGA et les EBANDA.<br />\r\n			A l&rsquo;instar d&rsquo;ANDON, MEBOUGOU resta sous la tutelle de NKOLTSIT jusqu&rsquo;en 1972, ann&eacute;e de l&rsquo;&eacute;clatement de la chefferie de troisi&egrave;me degr&eacute; de NKOLTSIT en trois chefferies de troisi&egrave;me degr&eacute;. MEBOUGOU devint autonome et ONDOA MVOGO fut d&eacute;sign&eacute; chef de ce village.</p>\r\n			</td>\r\n			<td>\r\n			<p>NKOLTSIT</p>\r\n\r\n			<p>NKOLTSIT signifie &laquo; la colline de gibier &raquo;. L&rsquo;origine de ce nom est intimement li&eacute;e &agrave; l&rsquo;histoire du grand chasseur MESSI ME NYEGA nagu&egrave;re impliqu&eacute; dans la fondation de la chefferie NKOLFOULOU.<br />\r\n			Il faut ici relever que NKOLTSIT a constitu&eacute; une premi&egrave;re &eacute;tape dans les migrations des ETENGA et m&ecirc;me des Baaba dans l&rsquo;actuel arrondissement de SOA. C&rsquo;est donc l&rsquo;un des sites les plus anciennement peupl&eacute;s de la r&eacute;gion. Apr&egrave;s la cr&eacute;ation de NKOLFOULOU, c&rsquo;est OBAM EDUA un fils de MESSI ME NYEGA qui devint le premier chef de NKOLTSIT.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"1\" cellpadding=\"5\" cellspacing=\"5\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h3>NTOUESSONG IV, V, VI, VII, VIII, IX</h3>\r\n\r\n			<p>NTOUESSONG signifie litt&eacute;ralement vieux sissongho. L&rsquo;espace occup&eacute; par ces villages est un lieu de pr&eacute;dilection pour ces hautes herbes appel&eacute;es sissongho. Dans le pays ewondo, ce nom a &eacute;t&eacute; donn&eacute; aux endroits qui pr&eacute;sentaient les m&ecirc;mes caract&eacute;ristiques.<br />\r\n			On trouve ainsi les chefferies de NTOUESSONG I, II et III dans l&rsquo;arrondissement de MBANKOMO et celles de NTOUESSONG IV, V VI, VII, VIII et IX dans l&rsquo;arrondissement de SOA. Ici, ce nom est aussi vieux que la p&eacute;riode d&rsquo;occupation du lieu par les Ba&rsquo;aba et les ETENGA</p>\r\n			</td>\r\n			<td>\r\n			<h3>TING-MELEN ET ONGANDI</h3>\r\n\r\n			<p>TlNG-MELEN signifie &laquo; tiges innombrables de palmiers. &raquo; C&rsquo;est une r&eacute;gion &agrave; forte concentration d&rsquo;&eacute;la&eacute;is, palmiers &agrave; huile qui poussent naturellement en Afrique tropicale. Quant &agrave; ONGANDI ce nom signifie jour de battue, ce qui implique un peuple de chasseurs et surtout la pr&eacute;sence abondante du gibier.<br />\r\n			Ces deux villages sont peupl&eacute;s par les ESSOMBA qui seraient partis de BATSCHENGA, dans la LEKIE, auraient s&eacute;journ&eacute; &agrave; NKOMETOU avant de s&rsquo;installer &agrave; Ting Melen sous la direction de MVOGO AKA&rsquo;A. Plus tard, des dissensions naquirent entre ce dernier et son fr&egrave;re ETOUNDI ESSAMA. Le chef sup&eacute;rieur Charles ATANGANA mit fin &agrave; ces dissensions en donnant une chefferie &agrave; ETOUNDI ESSAMA vers les ann&eacute;es 1920. Celle-ci portera le nom ONGANDI.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 1, '2159230325', '2023-05-04', '07:55:20', 'histoire-villages'),
(3, '13369230429', '5111230504', 'Cours', 'Comment devenir un grand parleur ?', '', '', 2, '15215885894', '2023-05-04', '19:12:33', 'cours');

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id_pays` int(11) NOT NULL,
  `code_pays` varchar(10) DEFAULT NULL,
  `nom_fr` varchar(255) DEFAULT NULL,
  `nom_en` varchar(255) DEFAULT NULL,
  `code_tel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id_pays`, `code_pays`, `nom_fr`, `nom_en`, `code_tel`) VALUES
(1, 'ZA', 'Afrique du Sud', 'South Africa', NULL),
(2, 'DZ', 'Algérie', 'Algeria', NULL),
(3, 'AO', 'Angola', 'Angola', NULL),
(4, 'BJ', 'Bénin', 'Benin', NULL),
(5, 'BW', 'Botswana', 'Botswana', NULL),
(6, 'BF', 'Burkina Faso', 'Burkina Faso', NULL),
(7, 'BI', 'Burundi', 'Burundi', NULL),
(8, 'CM', 'Cameroun', 'Cameroon', NULL),
(9, 'CV', 'Cap-Vert', 'Cabo Verde', NULL),
(10, 'CF', 'République Centrafricaine', 'Central African Republic', NULL),
(11, 'KM', 'Comores', 'Comoros', NULL),
(12, 'CG', 'Congo', 'Congo', NULL),
(13, 'CD', 'République Démocratique du Congo', 'Democratic Republic of Congo', NULL),
(14, 'CI', 'Côte d’Ivoire', 'Ivory Coast', NULL),
(15, 'DJ', 'Djibouti', 'Djibouti', NULL),
(16, 'EG', 'Égypte', 'Egypt', NULL),
(17, 'ER', 'Érythrée', 'Eritrea', NULL),
(18, 'SZ', 'Eswatini', 'Swaziland', NULL),
(19, 'ET', 'Éthiopie', 'Ethiopia', NULL),
(20, 'GA', 'Gabon', 'Gabon', NULL),
(21, 'GM', 'Gambie', 'Gambia', NULL),
(22, 'GH', 'Ghana', 'Ghana', NULL),
(23, 'GN', 'Guinée', 'Guinea', NULL),
(24, 'GW', 'Guinée-Bissau', 'Guinea-Bissau', NULL),
(25, 'GQ', 'Guinée équatoriale', 'Equatorial Guinea', NULL),
(26, 'KE', 'Kenya', 'Kenya', NULL),
(27, 'LS', 'Lesotho', 'Lesotho', NULL),
(28, 'LR', 'Liberia', 'Liberia', NULL),
(29, 'LY', 'Libye', 'Libya', NULL),
(30, 'MG', 'Madagascar', 'Madagascar', NULL),
(31, 'MW', 'Malawi', 'Malawi', NULL),
(32, 'ML', 'Mali', 'Mali', NULL),
(33, 'MA', 'Maroc', 'Morocco', NULL),
(34, 'MU', 'Maurice', 'Mauritius', NULL),
(35, 'MR', 'Mauritanie', 'Mauritania', NULL),
(36, 'MZ', 'Mozambique', 'Mozambique', NULL),
(37, 'NA', 'Namibie', 'Namibia', NULL),
(38, 'NE', 'Niger', 'Niger', NULL),
(39, 'NG', 'Nigeria', 'Nigeria', NULL),
(40, 'UG', 'Ouganda', 'Uganda', NULL),
(41, 'RW', 'Rwanda', 'Rwanda', NULL),
(42, 'ST', 'São Tomé-et-Principe', 'São Tomé-et-Principe', NULL),
(43, 'SN', 'Sénégal', 'Senegal', NULL),
(44, 'SC', 'Seychelles', 'Seychelles', NULL),
(45, 'SL', 'Sierra Leone', 'Sierra Leone', NULL),
(46, 'SO', 'Somalie', 'Somalia', NULL),
(47, 'SD', 'Soudan', 'Sudan', NULL),
(48, 'SS', 'Soudan du Sud', 'South Sudan', NULL),
(49, 'TZ', 'Tanzanie', 'Tanzania', NULL),
(50, 'TD', 'Tchad', 'Chad', NULL),
(51, 'TG', 'Togo', 'Togo', NULL),
(52, 'TN', 'Tunisie', 'Tunisia', NULL),
(53, 'ZM', 'Zambie', 'Zambia', NULL),
(54, 'ZW', 'Zimbabwe', 'Zimbabwe', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `matricule_entreprise` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `at_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `nom`, `description`, `matricule_entreprise`, `image`, `at_date`) VALUES
(1, 'Formations professionnelles', 'Centre de formation professionnelle : Acquérez les compétences pour réussir dans votre carrière', '11885230316', '16780.jpeg', '2023-03-16'),
(2, 'Vente de billets d\'avion', 'Rapprochez-vous de l’un des établissements d’examens ou Contactez-nous pour ample information :', '11885230316', '16782.jpeg', '2023-03-16'),
(3, 'Co-working', 'Le co-working est une pratique professionnelle consistant à travailler dans un espace partagé avec d\'autres personnes ayant des activités professionnelles différentes', '11885230316', '16780.jpeg', '2023-03-16'),
(4, 'La rentre de IPME', 'Le co-working est une pratique professionnelle consistant à travailler dans un espace partagé avec d\'autres personnes ayant des activités professionnelles différentes', '11885230316', 'beaut.png', '2023-03-24'),
(5, 'Création de contenue numérique', 'Vos pages ont besoin de contenu numérique pour faire plus d\'effet, nous vous proposons des contenus qui vous aideront a mieux les gerer', '68650230326', '1c.jpjpg', '2023-03-26'),
(6, 'Création et Gestion des pages n', 'Votre entreprise n\'as pas de page professionnelle sur les reseaux sociaux?? nous sommes la pour vous accompagner en toute circonstance', '68650230326', '5r.jpjpg', '2023-03-26'),
(7, 'Création des boutique e-commerce', 'Nous vous créons votre site e-commerce afin de faire grimper vos ventes, le commerce n\'aura plus aucun secret pour vous.', '68650230326', 'bannejpg', '2023-03-26'),
(9, 'Recherche des marchés', 'Le cahier des charges que l\'on abrège souvent en CDC, est un document qui synthétise l\'ensemble des fonctions qu\'aura la solution souhaitée à la fin du projet.', '68650230326', '23-04-01-26akila_blog.png', '2023-04-01'),
(10, 'Community manager', 'Nous vous aidons a animer votre communauté grâce à vos différent réseaux sociaux telque Facebook, Twitter, Instagram, TikTok, ou encore LinkedIn parmi les principaux.', '30491230427', '23-04-27-19akila_blog.jpg', '2023-04-27'),
(11, 'Conseil en communication', 'Nous vous aidons à communiquer auprès de vos clients\r\nL\'objectif premier de la communication est de faire connaître les produits/services de votre entreprise pour vendre', '30491230427', '23-04-27-57akila_blog.jpg', '2023-04-27'),
(12, 'création de site web', 'Nous vous aidons à la création du site web  de votre entreprise, car un site web est un moyen de communication très puissant pour l\'évolution de votre entreprise', '30491230427', '23-04-27-00akila_blog.jpg', '2023-04-27'),
(13, 'CRÉATION D\'ENTREPRISE', 'Nous vous aidons dans la creation de votre entreprise', '13369230429', '23-04-29-19akila_blog.jpg', '2023-04-29'),
(14, 'COMPTABILITÉ', 'Une bonne comptabilité est importent alors, Nous vous aidons la faire la comptabilité de votre entreprise', '13369230429', '23-04-29-32akila_blog.jpg', '2023-04-29'),
(15, 'CONSEIL', 'Avoir une personne qui vous suit est très bénéfique pour votre activité. Alors nous vous donnerons des conseils pour la gestion de vos votre entreprise', '13369230429', '23-04-29-57akila_blog.jpg', '2023-04-29'),
(16, 'Alain Didier BILO\'O', 'PRÉSIDENT', '84022230430', '23-05-22-04akila_blog.png', '2023-04-30'),
(17, 'MESSI NDONGO Francis', '1ER VICE PRÉSIDENT', '84022230430', '23-05-22-55akila_blog.png', '2023-04-30'),
(18, 'MANGA Aimée Célestine', '2e VICE PRÉSIDENT', '84022230430', '23-05-22-42akila_blog.png', '2023-04-30'),
(19, 'ANGUISSA ANGUISSA Tobie', 'SÉCRÉTAIRE GÉNÉRAL', '84022230430', '23-05-22-13akila_blog.png', '2023-04-30'),
(20, 'EKODO NOAH Henri Philippe', 'TRÉSORIER', '84022230430', '23-05-22-40akila_blog.png', '2023-04-30'),
(21, 'ENOBO Antoine Armand', 'SG ADGOINT', '84022230430', '23-05-22-39akila_blog.png', '2023-04-30'),
(22, 'ABANDA EYEBE Nicole', 'COMMISSAIRE AUX COMPTES', '84022230430', '23-05-22-16akila_blog.png', '2023-04-30'),
(23, 'EYEBE Daniel Joël', 'INTENDANT', '84022230430', '23-05-22-47akila_blog.png', '2023-04-30'),
(24, 'ABOMO MBIDA Raphaël Urbain', 'CENSEUR', '84022230430', '23-05-22-21akila_blog.png', '2023-04-30'),
(25, 'ESSIMBI ESSIMBI François', 'CONSEILLER', '84022230430', '23-04-30-24akila_blog.png', '2023-04-30'),
(26, 'MANGA MANGA', 'CONSEILLER', '84022230430', '23-04-30-22akila_blog.png', '2023-04-30'),
(27, 'ELOMO NDONGO Jacques', 'CONSEILLER', '84022230430', '23-04-30-56akila_blog.png', '2023-04-30'),
(28, 'CENSEUR', 'ZANGA Jean Ferdinant', '84022230430', '23-04-30-28akila_blog.png', '2023-04-30'),
(29, 'ENOBO Antoine', 'CENSEUR', '84022230430', '23-04-30-01akila_blog.png', '2023-04-30'),
(30, 'ACCÉDEZ AUX IMAGES', 'RELANCE DE L\'ADEN (2012 - 2013)', '84022230430', '23-04-30-44akila_blog.png', '2023-04-30'),
(31, 'BUREAU COMPLET', 'À partir de 2022, l\'ADEN va reposer sur les comités de développement des villages', '84022230430', '23-04-30-32akila_blog.png', '2023-04-30'),
(32, 'La gestion de la communication médiatique', 'est la prise en charge de la communication à mener auprès des médias.', '16508230505', '23-05-05-18akila_blog.jpg', '2023-05-05'),
(33, 'Création de votre identité visuelle', 'Notre objectif est de créer une représentation graphique unique et originale, pour le public cible identifier', '16508230505', '23-05-05-57akila_blog.jpg', '2023-05-05'),
(34, 'Conception des Blogs professionnels', 'Nous accompagnons nos clients à atteindre leurs objectifs en les proposant des solutions efficaces qui s’adaptent parfaitement à leurs attentes', '16508230505', '23-05-05-35akila_blog.jpg', '2023-05-05'),
(35, 'Sécurité', 'Vidéo Surveillance, Système de sécurité incendie et intrusion, Système de contrôle d\'accés et gestion des présences', '18690230510', '23-05-10-38akila_blog.jpeg', '2023-05-10'),
(36, 'Electricité Bâtiment', 'Nous réalisons des travaux d\'installation et de mise en service d\'équipements électriques dans des bâtiments à usage domestique, tertiaire et industriel selon les règles de sécurité.', '18690230510', '23-05-10-45akila_blog.jpg', '2023-05-10'),
(37, 'Energie Solaire', 'Spécialiste de l\'énergie solaire autonome, découvrez nos services : tutoriel installation, diagnostic de panne, retour produit, devis solaire.', '18690230510', '23-05-10-30akila_blog.jpg', '2023-05-10'),
(38, 'Conseil en management', 'conseil en management et organisation est la branche la plus large du secteur, regroupant la majorité des cabinets et consultants', '4579230515', '23-05-15-10akila_blog.jpeg', '2023-05-15'),
(39, 'Développement de leadership', 'Le développement du leadership est un processus intensif qui permet de développer des compétences managériales essentielles pour préparer une personne', '4579230515', '23-05-15-17akila_blog.jpeg', '2023-05-15'),
(40, 'Formation en entreprise', 'La formation professionnelle est une obligation pour les entreprises, pour maintenir les niveaux de compétences des salariés et les faire évoluer', '4579230515', '23-05-15-40akila_blog.jpeg', '2023-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `ville` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`id`, `ville`) VALUES
(1, 'Douala'),
(2, 'Yaoundé'),
(3, 'Garoua'),
(4, 'Bamenda'),
(5, 'Maroua'),
(6, 'Nkongsamba'),
(7, 'Bafoussam'),
(8, 'Ngaoundéré'),
(9, 'Bertoua'),
(10, 'Loum'),
(11, 'Kumba'),
(12, 'Edéa'),
(13, 'Kumbo'),
(14, 'Foumban'),
(15, 'Mbouda'),
(16, 'Dschang'),
(17, 'Limbé'),
(18, 'Ebolowa'),
(19, 'Kousséri'),
(20, 'Guider'),
(21, 'Meiganga'),
(22, 'Yagoua'),
(23, 'Mbalmayo'),
(24, 'Bafang'),
(25, 'Tiko'),
(26, 'Bafia'),
(27, 'Wum'),
(28, 'Kribi'),
(29, 'Buea'),
(30, 'Sangmélima'),
(31, 'Foumbot'),
(32, 'Bangangté'),
(33, 'Batouri'),
(34, 'Banyo'),
(35, 'Nkambé'),
(36, 'Bali'),
(37, 'Mbanga'),
(38, 'Mokolo'),
(39, 'Melong'),
(40, 'Manjo'),
(41, 'Garoua-Boulaï'),
(42, 'Mora'),
(43, 'Kaélé'),
(44, 'Tibati'),
(45, 'Ndop'),
(46, 'Akonolinga'),
(47, 'Eséka'),
(48, 'Mamfé'),
(49, 'Obala'),
(50, 'Muyuka'),
(51, 'Nanga-Eboko'),
(52, 'Abong-Mbang'),
(53, 'Fundong'),
(54, 'Nkoteng'),
(55, 'Fontem'),
(56, 'Mbandjock'),
(57, 'Touboro'),
(58, 'Ngaoundal'),
(59, 'Yokadouma'),
(60, 'Pitoa'),
(61, 'Tombel'),
(62, 'Kékem'),
(63, 'Magba'),
(64, 'Bélabo'),
(65, 'Tonga'),
(66, 'Maga'),
(67, 'Koutaba'),
(68, 'Blangoua'),
(69, 'Guidiguis'),
(70, 'Bogo'),
(71, 'Batibo'),
(72, 'Yabassi'),
(73, 'Figuil'),
(74, 'Makénéné'),
(75, 'Gazawa'),
(76, 'Tcholliré');

-- --------------------------------------------------------

--
-- Table structure for table `visiteurs_blog`
--

CREATE TABLE `visiteurs_blog` (
  `id` int(11) NOT NULL,
  `id_blog` varchar(15) NOT NULL,
  `ip_visiteurs` text NOT NULL,
  `nbre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visiteurs_blog`
--

INSERT INTO `visiteurs_blog` (`id`, `id_blog`, `ip_visiteurs`, `nbre`) VALUES
(1, '7', '::1*03:25:49#2023-04-14/::1*03:34:06#2023-04-14/::1*03:38:15#2023-04-14/::1*03:41:40#2023-04-14/::1*03:42:51#2023-04-14/::1*03:43:16#2023-04-14/::1*03:44:08#2023-04-14/::1*03:44:19#2023-04-14/::1*03:46:33#2023-04-14/::1*03:48:30#2023-04-14/::1*03:52:31#2023-04-14/::1*03:53:12#2023-04-14/::1*03:53:41#2023-04-14/::1*04:05:14#2023-04-14/::1*04:07:40#2023-04-14/::1*04:08:18#2023-04-14/::1*19:35:59#2023-04-14/::1*16:48:30#2023-04-15/::1*17:25:14#2023-04-15/::1*17:27:00#2023-04-15/::1*17:27:35#2023-04-15/::1*17:35:38#2023-04-15/::1*17:35:41#2023-04-15/::1*17:36:00#2023-04-15/::1*17:36:30#2023-04-15/::1*17:45:51#2023-04-15/::1*17:46:09#2023-04-15/::1*17:52:36#2023-04-15/::1*17:53:14#2023-04-15/::1*17:53:22#2023-04-15/::1*17:55:13#2023-04-15/::1*17:57:09#2023-04-15/::1*18:24:58#2023-04-15/::1*18:25:48#2023-04-15/::1*18:30:09#2023-04-15/::1*18:30:57#2023-04-15/::1*20:08:31#2023-04-15/::1*20:16:59#2023-04-15/::1*20:18:18#2023-04-15/::1*20:19:34#2023-04-15/::1*07:50:07#2023-04-16/::1*19:23:55#2023-04-16/::1*19:25:41#2023-04-16/::1*19:29:04#2023-04-16/::1*19:47:23#2023-04-16/::1*19:47:39#2023-04-16/::1*20:36:55#2023-04-16/::1*20:43:29#2023-04-16/::1*20:43:50#2023-04-16/::1*20:44:20#2023-04-16/41.202.219.73*18:57:13#2023-04-26/41.202.219.73*18:57:28#2023-04-26/41.202.219.73*19:03:18#2023-04-26/41.202.219.73*19:05:39#2023-04-26/2a03:2880:27ff:6::face:b00c*19:05:45#2023-04-26/2a03:2880:27ff:5::face:b00c*19:05:49#2023-04-26/41.202.219.73*19:10:35#2023-04-26/2a03:2880:27ff:13::face:b00c*19:11:59#2023-04-26/2a03:2880:27ff::face:b00c*19:11:59#2023-04-26/2a03:2880:27ff:17::face:b00c*19:12:00#2023-04-26/41.202.219.73*19:15:10#2023-04-26/41.202.219.73*19:18:14#2023-04-26/41.202.219.73*19:18:40#2023-04-26/41.202.219.73*19:19:06#2023-04-26', 64),
(6, '1', '::1*19:39:06#2023-04-15/::1*19:39:26#2023-04-15/154.72.167.243*09:43:43#2023-05-02', 3),
(7, '333656', '::1*20:30:34#2023-04-16/::1*20:30:57#2023-04-16', 2),
(8, '660821', '::1*20:30:52#2023-04-16', 1),
(9, '8', '41.202.219.73*16:03:15#2023-04-26/41.202.219.73*16:06:47#2023-04-26/41.202.219.73*16:06:55#2023-04-26/41.202.219.73*17:10:29#2023-04-26/41.202.219.73*17:48:11#2023-04-26/41.202.219.73*17:49:12#2023-04-26/2a03:2880:10ff:17::face:b00c*17:49:46#2023-04-26/2a03:2880:10ff:76::face:b00c*17:49:46#2023-04-26/2a03:2880:10ff:16::face:b00c*17:49:47#2023-04-26/41.202.219.73*17:50:34#2023-04-26/41.202.219.73*17:51:10#2023-04-26/41.202.219.73*17:51:35#2023-04-26/41.202.219.73*17:57:52#2023-04-26/41.202.219.73*17:59:02#2023-04-26/41.202.219.73*18:13:19#2023-04-26/41.202.219.73*18:22:41#2023-04-26/41.202.219.73*18:23:02#2023-04-26/41.202.219.73*18:23:08#2023-04-26/41.202.219.73*18:23:21#2023-04-26/41.202.219.73*18:26:03#2023-04-26/41.202.219.73*18:26:29#2023-04-26/41.202.219.73*18:27:12#2023-04-26/41.202.219.73*18:27:17#2023-04-26/41.202.219.73*18:27:36#2023-04-26/41.202.219.73*18:29:58#2023-04-26/41.202.219.73*18:34:08#2023-04-26/41.202.219.73*18:34:34#2023-04-26/41.202.219.73*18:35:16#2023-04-26/41.202.219.73*18:44:00#2023-04-26/41.202.219.73*18:44:00#2023-04-26/41.202.219.73*19:22:16#2023-04-26/129.0.99.239*19:34:19#2023-04-26/41.202.219.73*19:34:40#2023-04-26/2a03:2880:31ff:1e::face:b00c*19:34:55#2023-04-26/2a03:2880:30ff:c::face:b00c*19:34:56#2023-04-26/2a03:2880:31ff:3::face:b00c*19:35:00#2023-04-26/2a03:2880:30ff:15::face:b00c*19:35:01#2023-04-26/129.0.99.239*19:36:18#2023-04-26/129.0.99.239*19:36:26#2023-04-26/129.0.99.239*19:37:55#2023-04-26/52.167.144.95*19:57:31#2023-04-26/20.15.133.170*20:12:21#2023-04-26/129.0.76.1*20:34:12#2023-04-26/129.0.76.1*12:39:22#2023-04-27/129.0.76.1*12:55:03#2023-04-27/129.0.76.1*12:58:12#2023-04-27/2a03:2880:32ff::face:b00c*13:11:40#2023-04-27/2a03:2880:32ff:77::face:b00c*13:11:42#2023-04-27/2a03:2880:11ff:77::face:b00c*16:34:36#2023-04-27/2a03:2880:27ff:5::face:b00c*16:35:29#2023-04-27/41.202.207.167*21:32:52#2023-04-27/2a03:2880:21ff:16::face:b00c*08:39:19#2023-04-28/2a03:2880:31ff:14::face:b00c*08:40:16#2023-04-28/2a03:2880:10ff:4::face:b00c*16:10:57#2023-04-28/2a03:2880:31ff:5::face:b00c*16:11:33#2023-04-28/129.0.76.71*15:28:37#2023-04-29/2a03:2880:32ff:d::face:b00c*15:28:51#2023-04-29/2a03:2880:32ff:78::face:b00c*15:28:51#2023-04-29/2a03:2880:32ff:c::face:b00c*15:28:53#2023-04-29/2a03:2880:3ff:2::face:b00c*05:55:44#2023-04-30/2a03:2880:3ff:76::face:b00c*05:55:52#2023-04-30/2a03:2880:3ff:77::face:b00c*05:55:53#2023-04-30/2a03:2880:3ff:76::face:b00c*05:55:53#2023-04-30/2a03:2880:3ff:78::face:b00c*05:55:56#2023-04-30/2a03:2880:3ff:74::face:b00c*05:55:57#2023-04-30/2a03:2880:20ff:2::face:b00c*05:36:34#2023-05-01/2a03:2880:31ff:3::face:b00c*05:37:09#2023-05-01/2a03:2880:20ff:6::face:b00c*12:24:06#2023-05-01/2a03:2880:31ff:a::face:b00c*12:24:40#2023-05-01/2a03:2880:3ff:76::face:b00c*05:45:12#2023-05-03/2a03:2880:31ff:c::face:b00c*15:20:14#2023-05-08/2a03:2880:30ff::face:b00c*15:20:40#2023-05-08/2a03:2880:31ff:1e::face:b00c*15:21:14#2023-05-08/2a03:2880:21ff:13::face:b00c*18:05:17#2023-05-08/2a03:2880:31ff:14::face:b00c*18:06:32#2023-05-08/2a03:2880:27ff:70::face:b00c*14:12:20#2023-05-09/2a03:2880:31ff:3::face:b00c*09:03:40#2023-05-10/2a03:2880:13ff:3::face:b00c*09:04:14#2023-05-10/2a03:2880:25ff:74::face:b00c*17:33:08#2023-05-13/129.0.80.244*15:45:26#2023-05-16', 80),
(10, '9', '41.202.219.73*18:42:10#2023-04-26/129.0.99.140*20:44:15#2023-05-04/2a03:2880:31ff:21::face:b00c*20:44:54#2023-05-04/2a03:2880:31ff:4::face:b00c*20:45:04#2023-05-04', 4),
(11, '0', '2a03:2880:27ff::face:b00c*19:12:00#2023-04-26/2a03:2880:27ff:5::face:b00c*19:12:00#2023-04-26/2a03:2880:27ff:5::face:b00c*19:12:00#2023-04-26/2a03:2880:27ff:d::face:b00c*19:12:00#2023-04-26/2a03:2880:27ff:f::face:b00c*19:12:01#2023-04-26/2a03:2880:27ff:12::face:b00c*19:12:01#2023-04-26/2a03:2880:27ff:5::face:b00c*19:12:01#2023-04-26/2a03:2880:27ff:12::face:b00c*19:12:01#2023-04-26/2a03:2880:27ff:d::face:b00c*19:12:01#2023-04-26/2a03:2880:27ff:f::face:b00c*19:12:01#2023-04-26/2a03:2880:27ff:13::face:b00c*19:12:01#2023-04-26/2a03:2880:27ff:12::face:b00c*19:12:01#2023-04-26/2a03:2880:27ff:d::face:b00c*19:12:01#2023-04-26/2a03:2880:27ff:12::face:b00c*19:12:01#2023-04-26/2a03:2880:27ff:f::face:b00c*19:12:01#2023-04-26/2a03:2880:27ff:d::face:b00c*19:12:01#2023-04-26/2a03:2880:27ff:13::face:b00c*19:12:01#2023-04-26/2a03:2880:31ff:9::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:14::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:2::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:1a::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:2::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:71::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:2::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:71::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:10::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:2::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:14::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:9::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:2::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:1a::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:71::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:2::face:b00c*20:58:46#2023-05-04/2a03:2880:31ff:2::face:b00c*20:58:47#2023-05-04/2a03:2880:31ff:10::face:b00c*20:58:47#2023-05-04/2a03:2880:31ff:71::face:b00c*20:58:47#2023-05-04/2a03:2880:31ff:2::face:b00c*20:58:47#2023-05-04/2a03:2880:31ff:1c::face:b00c*21:15:47#2023-05-04/2a03:2880:31ff:11::face:b00c*21:15:47#2023-05-04/2a03:2880:31ff:1b::face:b00c*21:15:47#2023-05-04/2a03:2880:31ff:1::face:b00c*21:15:47#2023-05-04/2a03:2880:31ff:1b::face:b00c*21:15:47#2023-05-04/2a03:2880:31ff:5::face:b00c*21:15:47#2023-05-04/2a03:2880:31ff:1c::face:b00c*21:15:47#2023-05-04/2a03:2880:31ff:13::face:b00c*21:15:47#2023-05-04/2a03:2880:31ff:10::face:b00c*21:15:47#2023-05-04/2a03:2880:31ff:11::face:b00c*21:15:47#2023-05-04/2a03:2880:31ff:1::face:b00c*21:15:47#2023-05-04/2a03:2880:31ff:5::face:b00c*21:15:47#2023-05-04/2a03:2880:31ff:1c::face:b00c*21:15:47#2023-05-04/2a03:2880:31ff:10::face:b00c*21:15:47#2023-05-04/2a03:2880:31ff:13::face:b00c*21:15:47#2023-05-04/2a03:2880:31ff:1b::face:b00c*21:15:47#2023-05-04/2a03:2880:25ff:4::face:b00c*19:59:22#2023-05-05/2a03:2880:25ff:2::face:b00c*19:59:22#2023-05-05/2a03:2880:25ff::face:b00c*19:59:22#2023-05-05/2a03:2880:25ff::face:b00c*19:59:22#2023-05-05/2a03:2880:25ff::face:b00c*19:59:22#2023-05-05/2a03:2880:25ff::face:b00c*19:59:22#2023-05-05/2a03:2880:25ff:3::face:b00c*19:59:22#2023-05-05/2a03:2880:25ff::face:b00c*19:59:22#2023-05-05/2a03:2880:25ff:4::face:b00c*19:59:22#2023-05-05/2a03:2880:25ff:4::face:b00c*19:59:22#2023-05-05/2a03:2880:25ff::face:b00c*19:59:22#2023-05-05/2a03:2880:25ff::face:b00c*19:59:22#2023-05-05/2a03:2880:25ff::face:b00c*19:59:22#2023-05-05/2a03:2880:25ff:3::face:b00c*19:59:23#2023-05-05/2a03:2880:25ff::face:b00c*19:59:23#2023-05-05/2a03:2880:25ff:4::face:b00c*19:59:23#2023-05-05/2a03:2880:25ff::face:b00c*19:59:23#2023-05-05/2a03:2880:25ff::face:b00c*19:59:23#2023-05-05', 79),
(12, '10', '41.202.207.160*10:50:41#2023-04-27/41.202.207.160*10:54:22#2023-04-27/41.202.207.166*11:24:09#2023-04-27/41.202.207.166*11:24:21#2023-04-27/129.0.76.71*15:54:46#2023-04-29', 5),
(13, '11', '129.0.76.71*15:53:50#2023-04-29/129.0.76.71*16:02:04#2023-04-29/129.0.76.71*16:17:52#2023-04-29/129.0.76.71*16:40:06#2023-04-29/129.0.76.71*16:40:11#2023-04-29/129.0.76.71*16:45:39#2023-04-29/129.0.76.71*16:46:17#2023-04-29/129.0.76.71*17:17:28#2023-04-29/154.72.167.187*23:35:36#2023-04-29/129.0.99.140*21:12:37#2023-05-04/129.0.99.140*21:15:05#2023-05-04/2a03:2880:31ff:11::face:b00c*21:15:41#2023-05-04/2a03:2880:31ff:1c::face:b00c*21:15:41#2023-05-04/2a03:2880:31ff:12::face:b00c*21:15:41#2023-05-04/2a03:2880:31ff:1::face:b00c*21:15:41#2023-05-04/2a03:2880:31ff:10::face:b00c*21:15:42#2023-05-04/2a03:2880:31ff:1b::face:b00c*21:15:42#2023-05-04/2a03:2880:31ff:1::face:b00c*21:15:46#2023-05-04/129.0.99.140*21:16:24#2023-05-04', 19),
(14, '2', '129.0.76.71*07:01:00#2023-04-30/129.0.99.140*20:55:38#2023-05-04/129.0.99.140*20:57:56#2023-05-04/2a03:2880:31ff:2::face:b00c*20:58:38#2023-05-04/2a03:2880:31ff:9::face:b00c*20:58:38#2023-05-04/2a03:2880:31ff:13::face:b00c*20:58:46#2023-05-04/129.0.99.140*21:01:24#2023-05-04', 7),
(15, '12', '129.0.76.71*08:53:05#2023-04-30/129.0.76.71*08:54:06#2023-04-30/154.72.167.190*18:45:54#2023-04-30/154.72.167.190*18:48:30#2023-04-30/129.0.99.8*19:09:40#2023-04-30/129.0.99.8*19:12:10#2023-04-30/154.72.167.152*16:33:55#2023-05-04/129.0.99.140*18:31:54#2023-05-04', 8),
(16, '13', '129.0.76.71*09:08:29#2023-04-30/154.72.167.214*09:12:40#2023-04-30/129.0.76.71*09:18:59#2023-04-30/129.0.76.71*09:20:08#2023-04-30/129.0.76.71*09:20:47#2023-04-30/129.0.76.175*10:14:59#2023-05-02/129.0.76.175*10:38:51#2023-05-02/129.0.76.175*11:17:25#2023-05-02', 8),
(17, '6', '129.0.99.140*21:02:34#2023-05-04/2a03:2880:31ff:b::face:b00c*21:02:42#2023-05-04/2a03:2880:31ff:20::face:b00c*21:02:49#2023-05-04/129.0.99.140*21:05:55#2023-05-04/129.0.99.140*21:06:26#2023-05-04/154.72.167.153*21:08:04#2023-05-04/154.72.167.153*21:08:05#2023-05-04/154.72.167.153*21:08:55#2023-05-04/2a03:2880:31ff:12::face:b00c*21:10:38#2023-05-04/2a03:2880:31ff:e::face:b00c*21:10:39#2023-05-04/2a03:2880:31ff::face:b00c*21:10:41#2023-05-04/129.0.99.140*21:11:12#2023-05-04/154.72.167.153*21:16:52#2023-05-04/129.0.99.140*21:17:33#2023-05-04/2a03:2880:31ff:7::face:b00c*21:38:52#2023-05-04/2a03:2880:31ff:c::face:b00c*21:38:52#2023-05-04/2a03:2880:31ff::face:b00c*21:38:52#2023-05-04/2a03:2880:31ff:16::face:b00c*21:38:52#2023-05-04/2a03:2880:31ff:10::face:b00c*21:38:58#2023-05-04/129.0.99.227*13:38:04#2023-05-05', 21),
(19, '14', '129.0.99.140*20:04:52#2023-05-05/2a03:2880:ff:d::face:b00c*20:15:12#2023-05-05/2a03:2880:ff:b::face:b00c*20:15:12#2023-05-05/2a03:2880:ff:b::face:b00c*20:15:16#2023-05-05/2a03:2880:32ff:4::face:b00c*20:34:44#2023-05-05/2a03:2880:32ff:c::face:b00c*20:34:50#2023-05-05/2a03:2880:32ff:4::face:b00c*20:34:54#2023-05-05/2a03:2880:32ff::face:b00c*21:00:42#2023-05-05/2a03:2880:32ff:74::face:b00c*21:00:45#2023-05-05/2a03:2880:32ff:4::face:b00c*21:01:27#2023-05-05/2a03:2880:11ff:13::face:b00c*22:02:26#2023-05-05/2a03:2880:11ff:a::face:b00c*22:02:26#2023-05-05/2a03:2880:11ff:77::face:b00c*22:02:29#2023-05-05/2a03:2880:11ff:15::face:b00c*23:30:32#2023-05-05/2a03:2880:11ff:9::face:b00c*23:30:33#2023-05-05/2a03:2880:11ff:10::face:b00c*23:30:34#2023-05-05/2a03:2880:ff:75::face:b00c*00:15:45#2023-05-06/2a03:2880:31ff:e::face:b00c*00:16:23#2023-05-06/129.0.76.76*00:16:59#2023-05-06', 19),
(20, '33633230505', '154.72.167.153*00:33:47#2023-05-06/154.72.167.153*00:35:32#2023-05-06/2a03:2880:27ff:11::face:b00c*04:25:13#2023-05-06/2a03:2880:27ff:76::face:b00c*04:25:13#2023-05-06/2a03:2880:27ff:76::face:b00c*04:25:16#2023-05-06/154.72.167.153*05:50:20#2023-05-06/154.72.167.153*05:50:20#2023-05-06/154.72.167.153*05:51:05#2023-05-06/154.72.167.153*05:51:06#2023-05-06/154.72.167.153*05:51:45#2023-05-06/2a03:2880:27ff:3::face:b00c*08:25:03#2023-05-06/2a03:2880:27ff:78::face:b00c*08:25:04#2023-05-06/2a03:2880:27ff:3::face:b00c*08:25:04#2023-05-06/2a03:2880:27ff:75::face:b00c*08:25:05#2023-05-06/2a03:2880:27ff:6::face:b00c*08:25:05#2023-05-06/2a03:2880:32ff:2::face:b00c*08:25:06#2023-05-06/2a03:2880:32ff:3::face:b00c*08:25:06#2023-05-06/2a03:2880:27ff:78::face:b00c*08:25:06#2023-05-06/2a03:2880:27ff:10::face:b00c*08:25:09#2023-05-06/154.72.167.198*11:37:25#2023-05-06/2a03:2880:27ff:6::face:b00c*11:37:44#2023-05-06/2a03:2880:27ff:6::face:b00c*11:37:46#2023-05-06/2a03:2880:27ff:3::face:b00c*11:37:46#2023-05-06/2a03:2880:21ff:e::face:b00c*16:33:17#2023-05-06/66.220.149.4*16:33:55#2023-05-06/2a03:2880:27ff:2::face:b00c*22:05:30#2023-05-06/2a03:2880:27ff:b::face:b00c*22:05:31#2023-05-06/2a03:2880:27ff:76::face:b00c*22:05:32#2023-05-06/2a03:2880:3ff:74::face:b00c*22:05:44#2023-05-06/2a03:2880:3ff:76::face:b00c*22:05:44#2023-05-06/2a03:2880:3ff:1::face:b00c*22:05:46#2023-05-06/2a03:2880:3ff::face:b00c*10:01:47#2023-05-07/2a03:2880:3ff:77::face:b00c*10:01:48#2023-05-07/2a03:2880:3ff:4::face:b00c*10:01:49#2023-05-07/2a03:2880:22ff:12::face:b00c*12:02:31#2023-05-07/2a03:2880:22ff:b::face:b00c*12:02:32#2023-05-07/2a03:2880:22ff:17::face:b00c*12:02:45#2023-05-07/2a03:2880:22ff:10::face:b00c*12:02:45#2023-05-07/2a03:2880:22ff:77::face:b00c*12:02:51#2023-05-07/2a03:2880:31ff:1c::face:b00c*18:05:56#2023-05-07/2a03:2880:13ff:1::face:b00c*18:06:31#2023-05-07/2a03:2880:13ff:9::face:b00c*22:06:55#2023-05-07/2a03:2880:27ff:10::face:b00c*08:27:28#2023-05-08/2a03:2880:27ff:16::face:b00c*08:27:29#2023-05-08/2a03:2880:27ff:17::face:b00c*08:27:31#2023-05-08/2a03:2880:10ff:5::face:b00c*11:47:43#2023-05-08/2a03:2880:30ff:4::face:b00c*11:48:18#2023-05-08/129.0.76.166*11:49:20#2023-05-08/2a03:2880:32ff:c::face:b00c*11:49:20#2023-05-08/2a03:2880:32ff:13::face:b00c*11:49:21#2023-05-08/2a03:2880:32ff:11::face:b00c*11:49:25#2023-05-08/129.0.76.166*13:33:12#2023-05-08/129.0.99.55*19:16:31#2023-05-08/2a03:2880:22ff:f::face:b00c*22:00:09#2023-05-08/2a03:2880:13ff:75::face:b00c*23:00:16#2023-05-08/2a03:2880:23ff:6::face:b00c*23:00:17#2023-05-08/2a03:2880:30ff:5::face:b00c*23:00:52#2023-05-08/2a03:2880:13ff::face:b00c*06:03:28#2023-05-09/2a03:2880:21ff:1::face:b00c*06:32:18#2023-05-09/2a03:2880:31ff:e::face:b00c*06:33:14#2023-05-09/2a03:2880:3ff:76::face:b00c*08:51:32#2023-05-09/2a03:2880:23ff:8::face:b00c*11:14:01#2023-05-09/2a03:2880:32ff:e::face:b00c*12:29:27#2023-05-09/2a03:2880:21ff:10::face:b00c*13:57:27#2023-05-09/2a03:2880:27ff:b::face:b00c*13:58:03#2023-05-09/2a03:2880:11ff:4::face:b00c*15:33:05#2023-05-09/2a03:2880:3ff:76::face:b00c*06:57:59#2023-05-10/2a03:2880:13ff:1::face:b00c*10:47:24#2023-05-11/2a03:2880:13ff:76::face:b00c*10:47:27#2023-05-11/2a03:2880:13ff:1::face:b00c*10:47:28#2023-05-11/2a03:2880:13ff:1::face:b00c*10:47:28#2023-05-11/2a03:2880:13ff:1::face:b00c*10:47:31#2023-05-11/2a03:2880:10ff:1::face:b00c*10:03:53#2023-05-12/154.72.167.166*12:37:19#2023-05-12/2a03:2880:23ff:11::face:b00c*01:10:57#2023-05-14/2a03:2880:23ff:e::face:b00c*01:10:59#2023-05-14/2a03:2880:23ff:3::face:b00c*01:10:59#2023-05-14/2a03:2880:23ff:12::face:b00c*01:11:01#2023-05-14/2a03:2880:23ff:12::face:b00c*01:11:03#2023-05-14/154.72.167.227*10:20:22#2023-05-15/2a03:2880:27ff:e::face:b00c*10:20:36#2023-05-15/2a03:2880:27ff:77::face:b00c*10:20:36#2023-05-15/2a03:2880:27ff:e::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:e::face:b00c*10:20:38#2023-05-15/154.72.167.227*10:21:51#2023-05-15/154.72.167.227*10:22:22#2023-05-15/154.72.167.227*10:24:46#2023-05-15/154.72.167.227*10:25:24#2023-05-15/154.72.167.227*10:27:33#2023-05-15/154.72.167.227*10:27:37#2023-05-15/154.72.167.227*10:35:17#2023-05-15/154.72.167.227*10:35:20#2023-05-15/154.72.167.227*10:35:56#2023-05-15/154.72.167.227*10:36:08#2023-05-15/154.72.167.227*12:38:33#2023-05-15/2a03:2880:3ff:77::face:b00c*22:27:25#2023-05-15/2a03:2880:ff::face:b00c*05:50:24#2023-05-16/2a03:2880:10ff::face:b00c*08:59:50#2023-05-16/2a03:2880:22ff:9::face:b00c*10:36:47#2023-05-16/2a03:2880:22ff:14::face:b00c*10:36:49#2023-05-16/129.0.99.223*15:10:52#2023-05-16/2a03:2880:32ff:8::face:b00c*08:25:45#2023-05-18/2a03:2880:27ff:5::face:b00c*12:59:17#2023-05-18/2a03:2880:27ff:b::face:b00c*12:59:22#2023-05-18/2a03:2880:27ff:1::face:b00c*12:59:24#2023-05-18/2a03:2880:27ff:a::face:b00c*12:59:24#2023-05-18/2a03:2880:27ff:1::face:b00c*12:59:24#2023-05-18/2a03:2880:27ff:a::face:b00c*12:59:26#2023-05-18/2a03:2880:27ff:a::face:b00c*12:59:26#2023-05-18/2a03:2880:27ff:7::face:b00c*12:59:27#2023-05-18/2a03:2880:11ff:5::face:b00c*13:00:33#2023-05-18/2a03:2880:31ff:25::face:b00c*14:36:05#2023-05-18/2a03:2880:31ff:75::face:b00c*14:36:08#2023-05-18/2a03:2880:31ff:1f::face:b00c*14:36:12#2023-05-18/2a03:2880:27ff:e::face:b00c*21:01:43#2023-05-18/2a03:2880:31ff:15::face:b00c*20:32:45#2023-05-19/2a03:2880:ff:f::face:b00c*05:07:17#2023-05-21/2a03:2880:ff:1::face:b00c*05:07:21#2023-05-21/2a03:2880:ff:11::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:f::face:b00c*05:07:26#2023-05-21/2a03:2880:ff:74::face:b00c*05:07:26#2023-05-21/2a03:2880:ff:14::face:b00c*05:07:27#2023-05-21/154.72.150.241*20:03:24#2023-05-23/154.72.150.241*20:07:25#2023-05-23/154.72.150.241*20:10:52#2023-05-23/154.72.150.241*20:20:36#2023-05-23/154.72.150.241*20:31:11#2023-05-23/154.72.167.196*21:42:23#2023-05-23', 132),
(21, '', '2a03:2880:3ff:1::face:b00c*22:05:46#2023-05-06/2a03:2880:3ff:1::face:b00c*22:05:46#2023-05-06/2a03:2880:3ff:4::face:b00c*22:05:46#2023-05-06/2a03:2880:3ff:2::face:b00c*22:05:46#2023-05-06/2a03:2880:3ff:1::face:b00c*22:05:46#2023-05-06/2a03:2880:3ff:76::face:b00c*22:05:47#2023-05-06/2a03:2880:3ff:4::face:b00c*22:05:47#2023-05-06/2a03:2880:3ff:1::face:b00c*22:05:47#2023-05-06/2a03:2880:3ff:2::face:b00c*22:05:47#2023-05-06/2a03:2880:3ff:77::face:b00c*22:05:47#2023-05-06/2a03:2880:3ff:3::face:b00c*22:05:47#2023-05-06/2a03:2880:3ff:76::face:b00c*22:05:47#2023-05-06/2a03:2880:3ff:77::face:b00c*22:05:48#2023-05-06/2a03:2880:3ff:76::face:b00c*22:05:48#2023-05-06/2a03:2880:3ff:2::face:b00c*22:05:48#2023-05-06/2a03:2880:3ff:76::face:b00c*22:05:48#2023-05-06/2a03:2880:3ff:76::face:b00c*22:05:48#2023-05-06/2a03:2880:3ff:76::face:b00c*22:05:48#2023-05-06/2a03:2880:3ff:2::face:b00c*22:05:48#2023-05-06/2a03:2880:32ff:7::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:76::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:11::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:f::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:11::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:13::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:77::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:c::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:11::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:77::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:7::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:76::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:f::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:11::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:13::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:77::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:c::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:11::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:77::face:b00c*11:49:22#2023-05-08/2a03:2880:32ff:11::face:b00c*11:49:23#2023-05-08/2a03:2880:27ff:e::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:e::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:e::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:e::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:14::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:a::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:77::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:a::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:e::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:a::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:4::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:e::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:e::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:2::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:a::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:14::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:77::face:b00c*10:20:38#2023-05-15/2a03:2880:27ff:78::face:b00c*12:59:27#2023-05-18/2a03:2880:27ff:7::face:b00c*12:59:28#2023-05-18/2a03:2880:27ff:2::face:b00c*12:59:28#2023-05-18/2a03:2880:27ff:1::face:b00c*12:59:28#2023-05-18/2a03:2880:27ff:4::face:b00c*12:59:28#2023-05-18/2a03:2880:27ff:4::face:b00c*12:59:28#2023-05-18/2a03:2880:27ff:a::face:b00c*12:59:28#2023-05-18/2a03:2880:27ff:1::face:b00c*12:59:28#2023-05-18/2a03:2880:27ff:2::face:b00c*12:59:28#2023-05-18/2a03:2880:27ff:2::face:b00c*12:59:28#2023-05-18/2a03:2880:27ff:74::face:b00c*12:59:28#2023-05-18/2a03:2880:27ff:4::face:b00c*12:59:28#2023-05-18/2a03:2880:27ff:4::face:b00c*12:59:28#2023-05-18/2a03:2880:27ff:a::face:b00c*12:59:28#2023-05-18/2a03:2880:27ff:76::face:b00c*12:59:28#2023-05-18/2a03:2880:31ff:10::face:b00c*14:36:08#2023-05-18/2a03:2880:31ff:25::face:b00c*14:36:08#2023-05-18/2a03:2880:31ff:f::face:b00c*14:36:08#2023-05-18/2a03:2880:31ff:75::face:b00c*14:36:08#2023-05-18/2a03:2880:31ff:25::face:b00c*14:36:09#2023-05-18/2a03:2880:31ff:25::face:b00c*14:36:09#2023-05-18/2a03:2880:31ff:f::face:b00c*14:36:09#2023-05-18/2a03:2880:31ff:75::face:b00c*14:36:09#2023-05-18/2a03:2880:31ff:25::face:b00c*14:36:09#2023-05-18/2a03:2880:31ff:f::face:b00c*14:36:09#2023-05-18/2a03:2880:31ff:15::face:b00c*14:36:09#2023-05-18/2a03:2880:31ff:75::face:b00c*14:36:09#2023-05-18/2a03:2880:31ff:5::face:b00c*14:36:09#2023-05-18/2a03:2880:31ff:25::face:b00c*14:36:09#2023-05-18/2a03:2880:31ff:f::face:b00c*14:36:09#2023-05-18/2a03:2880:31ff:75::face:b00c*14:36:09#2023-05-18/2a03:2880:31ff:15::face:b00c*14:36:09#2023-05-18/2a03:2880:ff:f::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:b::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:10::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:3::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:16::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:1::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:b::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:11::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:b::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:10::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:11::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:78::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:b::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:16::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:b::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:11::face:b00c*05:07:23#2023-05-21/2a03:2880:ff:78::face:b00c*05:07:24#2023-05-21/2a03:2880:ff:b::face:b00c*05:07:24#2023-05-21/2a03:2880:27ff::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:f::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:c::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:d::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:d::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:77::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:76::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:4::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:77::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:76::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:d::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:d::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:77::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:d::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:76::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:76::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:4::face:b00c*19:08:04#2023-05-23/2a03:2880:27ff:d::face:b00c*19:08:04#2023-05-23/169.150.196.66*19:49:29#2023-05-23/169.150.196.66*19:49:35#2023-05-23/169.150.196.66*19:49:51#2023-05-23/169.150.196.66*19:57:04#2023-05-23/169.150.196.66*19:57:30#2023-05-23/169.150.196.66*19:57:41#2023-05-23/169.150.196.66*20:44:54#2023-05-23/169.150.196.66*20:45:22#2023-05-23/169.150.196.66*20:45:28#2023-05-23/109.234.165.63*21:23:10#2023-05-23/109.234.165.63*21:23:13#2023-05-23/109.234.165.63*21:27:25#2023-05-23/109.234.165.63*21:43:52#2023-05-23/169.150.196.66*22:41:13#2023-05-23/169.150.196.66*22:44:52#2023-05-23/169.150.196.66*22:44:56#2023-05-23/169.150.196.66*22:45:24#2023-05-23/169.150.196.66*22:45:26#2023-05-23/169.150.196.66*22:45:36#2023-05-23/109.234.165.63*06:36:18#2023-05-24/109.234.165.63*09:53:13#2023-05-24/109.234.165.63*09:53:17#2023-05-24/109.234.165.63*09:53:27#2023-05-24/109.234.165.63*09:53:45#2023-05-24/109.234.165.63*09:53:56#2023-05-24/109.234.165.63*09:55:26#2023-05-24/109.234.165.63*09:55:47#2023-05-24/109.234.165.63*09:55:52#2023-05-24/109.234.165.63*09:56:01#2023-05-24/109.234.165.63*09:56:15#2023-05-24/109.234.165.63*09:56:44#2023-05-24/109.234.165.63*09:58:56#2023-05-24/109.234.165.63*09:59:04#2023-05-24/109.234.165.63*09:59:08#2023-05-24/109.234.165.63*09:59:12#2023-05-24/109.234.165.63*09:59:15#2023-05-24/109.234.165.63*09:59:20#2023-05-24/109.234.165.63*09:59:26#2023-05-24/109.234.165.63*09:59:33#2023-05-24/109.234.165.63*09:59:54#2023-05-24/109.234.165.63*10:01:07#2023-05-24/109.234.165.63*10:01:09#2023-05-24/109.234.165.63*10:01:20#2023-05-24/109.234.165.63*11:33:21#2023-05-24/109.234.165.63*11:33:21#2023-05-24/109.234.165.63*11:33:22#2023-05-24/109.234.165.63*11:33:23#2023-05-24/109.234.165.63*11:33:23#2023-05-24/109.234.165.63*11:33:24#2023-05-24/109.234.165.63*11:33:34#2023-05-24/109.234.165.63*12:02:07#2023-05-24/109.234.165.63*12:02:08#2023-05-24/109.234.165.63*12:02:49#2023-05-24/109.234.165.63*12:02:49#2023-05-24/109.234.165.63*12:04:13#2023-05-24/109.234.165.63*12:04:13#2023-05-24/109.234.165.63*12:04:13#2023-05-24/109.234.165.63*12:04:13#2023-05-24/109.234.165.63*12:04:13#2023-05-24/109.234.165.63*12:04:13#2023-05-24/109.234.165.63*12:04:13#2023-05-24/109.234.165.63*12:04:13#2023-05-24/109.234.165.63*12:04:13#2023-05-24/109.234.165.63*12:04:14#2023-05-24/109.234.165.63*12:04:14#2023-05-24/109.234.165.63*12:04:14#2023-05-24/109.234.165.63*12:04:14#2023-05-24/109.234.165.63*12:04:14#2023-05-24/109.234.165.63*12:04:14#2023-05-24/109.234.165.63*12:04:14#2023-05-24/109.234.165.63*12:04:14#2023-05-24/109.234.165.63*12:04:14#2023-05-24/109.234.165.63*12:04:14#2023-05-24/109.234.165.63*12:04:14#2023-05-24/109.234.165.63*12:18:05#2023-05-24/109.234.165.63*12:18:05#2023-05-24/109.234.165.63*12:18:05#2023-05-24/109.234.165.63*12:18:05#2023-05-24/109.234.165.63*12:18:05#2023-05-24/109.234.165.63*12:18:05#2023-05-24/109.234.165.63*12:18:05#2023-05-24/109.234.165.63*12:18:05#2023-05-24/109.234.165.63*12:18:05#2023-05-24/109.234.165.63*12:18:05#2023-05-24/109.234.165.63*12:18:05#2023-05-24/109.234.165.63*12:18:05#2023-05-24/109.234.165.63*12:18:06#2023-05-24/109.234.165.63*12:18:06#2023-05-24/109.234.165.63*12:18:06#2023-05-24/109.234.165.63*12:18:06#2023-05-24/109.234.165.63*12:18:06#2023-05-24/109.234.165.63*12:18:06#2023-05-24/109.234.165.63*12:18:06#2023-05-24/109.234.165.63*12:18:06#2023-05-24/109.234.165.63*12:18:06#2023-05-24/109.234.165.63*12:18:06#2023-05-24/109.234.165.63*12:18:06#2023-05-24/109.234.165.63*12:18:07#2023-05-24/109.234.165.63*12:20:24#2023-05-24/109.234.165.63*12:20:24#2023-05-24/109.234.165.63*12:20:24#2023-05-24/109.234.165.63*12:20:25#2023-05-24/109.234.165.63*12:20:26#2023-05-24/109.234.165.63*12:20:26#2023-05-24/109.234.165.63*12:20:30#2023-05-24/109.234.165.63*12:43:16#2023-05-24/109.234.165.63*13:42:29#2023-05-24/109.234.165.63*13:42:29#2023-05-24/109.234.165.63*13:42:29#2023-05-24/109.234.165.63*13:42:30#2023-05-24/109.234.165.63*13:42:30#2023-05-24/109.234.165.63*13:42:30#2023-05-24/109.234.165.63*13:42:33#2023-05-24/109.234.165.63*13:42:34#2023-05-24/109.234.165.63*13:42:35#2023-05-24/109.234.165.63*14:10:32#2023-05-24/109.234.165.63*14:10:32#2023-05-24/109.234.165.63*14:10:32#2023-05-24/109.234.165.63*14:10:33#2023-05-24/109.234.165.63*14:10:33#2023-05-24/109.234.165.63*14:10:33#2023-05-24/109.234.165.63*14:10:34#2023-05-24', 264),
(22, '61677230429', '154.72.167.190*15:56:38#2023-05-08/129.0.207.237*16:04:11#2023-05-08/129.0.207.237*16:06:27#2023-05-08/154.72.167.166*12:35:26#2023-05-12/129.0.76.117*10:36:22#2023-05-20/129.0.76.117*10:46:00#2023-05-20', 6),
(23, '17936230515', '154.72.167.227*13:51:57#2023-05-15/154.72.167.227*14:14:52#2023-05-15/154.72.167.227*14:15:30#2023-05-15', 3),
(24, '46662230515', '154.72.167.227*14:15:18#2023-05-15/24.48.81.250*23:15:38#2023-05-15', 2),
(25, '60512230404', '154.72.167.208*06:52:52#2023-05-20/154.72.167.208*06:55:42#2023-05-20/154.72.167.208*07:33:38#2023-05-20/129.0.82.230*07:49:03#2023-05-20/129.0.82.230*07:51:03#2023-05-20/169.150.196.66*20:21:53#2023-05-23/169.150.196.66*20:28:38#2023-05-23/109.234.165.63*09:53:51#2023-05-24/109.234.165.63*09:55:58#2023-05-24/109.234.165.63*09:56:42#2023-05-24/109.234.165.63*11:15:03#2023-05-24/154.72.167.241*11:32:32#2023-05-24/154.72.167.241*11:32:33#2023-05-24/154.72.167.241*11:33:15#2023-05-24/109.234.165.63*11:53:47#2023-05-24/109.234.165.63*11:54:31#2023-05-24/109.234.165.63*11:54:33#2023-05-24/109.234.165.63*11:55:00#2023-05-24/109.234.165.63*11:55:57#2023-05-24/109.234.165.63*11:56:03#2023-05-24/109.234.165.63*11:56:34#2023-05-24/109.234.165.63*11:56:54#2023-05-24/109.234.165.63*11:56:55#2023-05-24/109.234.165.63*11:57:05#2023-05-24/109.234.165.63*12:04:06#2023-05-24/109.234.165.63*12:04:06#2023-05-24/109.234.165.63*12:04:09#2023-05-24/109.234.165.63*12:14:26#2023-05-24/109.234.165.63*12:14:33#2023-05-24/109.234.165.63*12:14:41#2023-05-24/109.234.165.63*12:17:07#2023-05-24/109.234.165.63*12:18:04#2023-05-24/109.234.165.63*12:18:06#2023-05-24/109.234.165.63*12:18:11#2023-05-24/109.234.165.63*12:18:37#2023-05-24/109.234.165.63*12:19:54#2023-05-24/109.234.165.63*12:19:56#2023-05-24/109.234.165.63*12:20:23#2023-05-24/109.234.165.63*12:30:12#2023-05-24/109.234.165.63*12:30:16#2023-05-24/109.234.165.63*14:10:23#2023-05-24/109.234.165.63*14:10:31#2023-05-24', 42),
(26, '72355230426', '154.72.167.208*07:01:31#2023-05-20/154.72.167.208*07:41:34#2023-05-20/154.72.167.97*08:17:10#2023-05-22/109.234.165.63*09:59:51#2023-05-24/109.234.165.63*10:01:18#2023-05-24', 5),
(27, '72146230427', '129.0.99.53*19:09:58#2023-05-22', 1),
(28, '96289230430', '129.0.76.165*20:25:11#2023-05-22/129.0.76.165*20:25:56#2023-05-22/129.0.76.165*20:29:40#2023-05-22/129.0.76.165*20:29:56#2023-05-22/129.0.76.165*20:30:22#2023-05-22/129.0.76.165*20:34:37#2023-05-22/129.0.76.165*20:34:43#2023-05-22/129.0.76.165*20:34:51#2023-05-22/129.0.76.165*20:34:57#2023-05-22/129.0.76.165*20:35:08#2023-05-22/129.0.76.165*20:35:17#2023-05-22/129.0.76.165*20:35:53#2023-05-22/169.150.196.66*19:07:40#2023-05-23/2a03:2880:27ff:8::face:b00c*19:08:01#2023-05-23/2a03:2880:27ff:75::face:b00c*19:08:04#2023-05-23/169.150.196.66*19:21:09#2023-05-23/169.150.196.66*19:37:42#2023-05-23', 17),
(29, '30110230430', '169.150.196.66*19:14:56#2023-05-23/169.150.196.66*19:38:55#2023-05-23', 2);

-- --------------------------------------------------------

--
-- Table structure for table `visiteurs_journaliers`
--

CREATE TABLE `visiteurs_journaliers` (
  `id` int(11) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `date_visite` date NOT NULL,
  `visiteurs` mediumtext NOT NULL,
  `nbre` int(11) NOT NULL DEFAULT 0,
  `heure_visite` time NOT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `permalien` varchar(100) NOT NULL,
  `matricule_entreprise` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visiteurs_journaliers`
--

INSERT INTO `visiteurs_journaliers` (`id`, `matricule`, `date_visite`, `visiteurs`, `nbre`, `heure_visite`, `position`, `permalien`, `matricule_entreprise`) VALUES
(1, '', '2023-04-05', '::1*15:57:47', 1, '15:57:47', 0, '', '68650230326'),
(2, '', '2023-04-13', '::1*20:28:22', 1, '20:28:22', 0, '', '11885230316'),
(3, '', '2023-04-14', '::1*01:39:20', 1, '01:39:20', 0, '', '11885230316'),
(4, '', '2023-04-14', '::1*22:38:45', 1, '22:38:45', 0, '', '68650230326'),
(5, '', '2023-04-15', '::1*20:24:23', 1, '20:24:23', 0, '', '68650230326'),
(6, '', '2023-04-15', '::1*19:44:33', 1, '19:44:33', 0, '', '11885230316'),
(7, '', '2023-04-16', '::1*21:11:44|102.244.221.71*20:21:19', 2, '20:21:19', 0, '', '68650230326'),
(8, '', '2023-04-17', '102.244.223.46*01:05:05', 1, '01:05:05', 0, '', '11885230316'),
(9, '', '2023-04-17', '102.244.223.46*02:43:55', 1, '02:43:55', 0, '', '68650230326'),
(10, '', '2023-04-25', '41.202.207.163*10:09:12', 1, '10:09:12', 0, '', '11885230316'),
(11, '', '2023-04-26', '41.202.219.73*19:34:40|165.22.39.64*16:43:36|2a03:2880:10ff:17::face:b00c*17:49:46|2a03:2880:10ff:76::face:b00c*17:49:46|2a03:2880:10ff:16::face:b00c*17:49:47|45.128.163.132*18:43:32|129.0.99.239*19:37:55|2a03:2880:31ff:1e::face:b00c*19:34:55|2a03:2880:30ff:c::face:b00c*19:34:56|2a03:2880:31ff:3::face:b00c*19:35:00|2a03:2880:30ff:15::face:b00c*19:35:01|52.167.144.95*19:57:31|20.15.133.170*20:12:21|129.0.76.1*20:34:12', 14, '20:34:12', 0, '', '1012.1121'),
(12, '', '2023-04-26', '41.202.219.73*19:19:14|2a03:2880:27ff:6::face:b00c*19:05:45|2a03:2880:27ff:5::face:b00c*19:12:01|2a03:2880:27ff:13::face:b00c*19:12:01|2a03:2880:27ff::face:b00c*19:12:00|2a03:2880:27ff:17::face:b00c*19:12:00|2a03:2880:27ff:d::face:b00c*19:12:01|2a03:2880:27ff:f::face:b00c*19:12:01|2a03:2880:27ff:12::face:b00c*19:12:01', 9, '19:19:14', 0, '', '68650230326'),
(13, '', '2023-04-27', '2a02:4780:b:c0de::54*02:01:02|129.0.76.1*12:58:12|41.244.244.5*12:45:23|2a03:2880:32ff::face:b00c*13:11:40|2a03:2880:32ff:77::face:b00c*13:11:42|2a03:2880:27ff:74::face:b00c*17:26:19|2a03:2880:27ff:1::face:b00c*16:18:16|2a03:2880:11ff:77::face:b00c*16:34:36|2a03:2880:27ff:5::face:b00c*16:35:29|2a03:2880:22ff:8::face:b00c*17:09:13|2a03:2880:22ff:3::face:b00c*17:09:16|41.202.207.167*21:32:52', 12, '21:32:52', 0, '', '1012.1121'),
(14, '', '2023-04-27', '41.202.207.160*08:44:25', 1, '08:44:25', 0, '', '11885230316'),
(15, '', '2023-04-27', '41.202.207.160*11:04:38|41.202.207.166*19:33:18|154.72.150.110*11:47:15|102.244.88.1*16:00:18|41.244.244.5*11:32:56|154.72.167.27*12:03:52|77.204.147.150*11:52:07|129.0.76.1*12:50:25|41.244.244.4*12:37:20|154.72.167.50*14:35:10|41.202.207.3*15:21:48|154.72.150.46*15:55:27|129.0.226.252*17:30:11', 13, '19:33:18', 0, '', '30491230427'),
(16, '', '2023-04-27', '41.202.207.166*19:00:55', 1, '19:00:55', 0, '', '68650230326'),
(17, '', '2023-04-28', '2a02:4780:b:c0de::54*02:01:02|2a03:2880:31ff:78::face:b00c*08:25:22|2a03:2880:31ff:77::face:b00c*08:25:27|2a03:2880:21ff:16::face:b00c*08:39:19|2a03:2880:31ff:14::face:b00c*08:40:16|2a03:2880:10ff:4::face:b00c*16:10:57|2a03:2880:31ff:5::face:b00c*16:11:33', 7, '16:11:33', 0, '', '1012.1121'),
(18, '', '2023-04-28', '129.0.209.215*04:05:00|129.0.226.198*08:50:02|41.202.207.2*14:45:43|129.0.99.35*20:38:43', 4, '20:38:43', 0, '', '30491230427'),
(19, '', '2023-04-28', '154.72.167.213*15:13:38', 1, '15:13:38', 0, '', '68650230326'),
(20, '', '2023-04-29', '2a02:4780:b:c0de::54*02:01:02|129.0.76.71*15:28:37|2a03:2880:32ff:d::face:b00c*15:28:51|2a03:2880:32ff:78::face:b00c*15:28:51|2a03:2880:32ff:c::face:b00c*15:28:53', 5, '15:28:53', 0, '', '1012.1121'),
(21, '', '2023-04-29', '102.244.43.99*04:15:29|129.0.76.71*16:03:59|41.244.244.5*15:54:43|154.72.167.187*18:05:21', 4, '18:05:21', 0, '', '30491230427'),
(22, '', '2023-04-29', '129.0.76.71*17:17:28|154.72.167.187*23:35:36|154.72.150.242*19:05:50', 3, '23:35:36', 0, '', '13369230429'),
(23, '', '2023-04-29', '154.72.167.187*23:30:51', 1, '23:30:51', 0, '', '68650230326'),
(24, '', '2023-04-30', '129.0.209.246*05:09:06|154.72.167.226*14:36:15', 2, '14:36:15', 0, '', '30491230427'),
(25, '', '2023-04-30', '2a03:2880:3ff:2::face:b00c*05:55:44|2a03:2880:3ff:76::face:b00c*05:55:53|2a03:2880:3ff:77::face:b00c*05:55:53|2a03:2880:3ff:78::face:b00c*05:55:56|2a03:2880:3ff:74::face:b00c*05:55:57|129.0.76.71*12:16:59|2a02:4780:b:c0de::54*14:20:56', 7, '14:20:56', 0, '', '1012.1121'),
(26, '', '2023-04-30', '129.0.76.71*14:15:57', 1, '14:15:57', 0, '', '11885230316'),
(27, '', '2023-04-30', '129.0.76.71*12:16:29|154.72.167.214*09:16:49|154.72.167.226*09:38:24|154.72.167.190*18:48:30|129.0.99.8*19:12:25', 5, '19:12:25', 0, '', '84022230430'),
(28, '', '2023-04-30', '154.72.167.226*10:08:51|129.0.76.71*09:39:16', 2, '10:08:51', 0, '', '13369230429'),
(29, '', '2023-05-01', '2a03:2880:20ff:2::face:b00c*05:36:34|2a03:2880:31ff:3::face:b00c*05:37:09|2a03:2880:20ff:6::face:b00c*12:24:06|2a03:2880:31ff:a::face:b00c*12:24:40|2a02:4780:b:c0de::54*14:20:56', 5, '14:20:56', 0, '', '1012.1121'),
(30, '', '2023-05-01', '154.72.169.34*09:26:13|154.72.167.243*22:55:34', 2, '22:55:34', 0, '', '84022230430'),
(31, '', '2023-05-02', '154.72.167.243*07:07:08|129.0.76.175*11:17:25|129.0.76.14*11:37:32', 3, '11:37:32', 0, '', '84022230430'),
(32, '', '2023-05-02', '154.72.167.243*09:44:17', 1, '09:44:17', 0, '', '11885230316'),
(33, '', '2023-05-02', '154.72.167.243*09:25:48|129.0.76.14*14:10:29', 2, '14:10:29', 0, '', '68650230326'),
(34, '', '2023-05-02', '129.0.76.175*10:09:55|2a02:4780:b:c0de::54*14:20:57|216.223.222.132*16:02:48|129.0.76.14*16:02:53', 4, '16:02:53', 0, '', '1012.1121'),
(35, '', '2023-05-02', '154.72.150.63*19:09:41|24.200.96.32*19:13:17', 2, '19:13:17', 0, '', '30491230427'),
(36, '', '2023-05-03', '2a03:2880:3ff:76::face:b00c*05:45:12|2a02:4780:b:c0de::54*14:20:56|2a06:4880:d000::e8*16:15:13', 3, '16:15:13', 0, '', '1012.1121'),
(37, '', '2023-05-03', '24.200.96.32*12:57:16', 1, '12:57:16', 0, '', '30491230427'),
(38, '', '2023-05-04', '54.155.252.93*02:39:38|154.72.150.176*12:26:11|2a02:4780:b:c0de::54*14:20:56', 3, '14:20:56', 0, '', '1012.1121'),
(39, '', '2023-05-04', '154.72.167.152*11:41:44|154.72.150.106*09:22:03|129.0.99.51*17:29:42|129.0.99.140*18:30:41', 4, '18:30:41', 0, '', '30491230427'),
(40, '', '2023-05-04', '154.72.167.152*16:33:55|129.0.99.140*18:31:54', 2, '18:31:54', 0, '', '84022230430'),
(41, '', '2023-05-04', '129.0.99.140*21:17:33|2a03:2880:31ff:2::face:b00c*20:58:47|2a03:2880:31ff:9::face:b00c*20:58:46|2a03:2880:31ff:13::face:b00c*20:58:46|2a03:2880:31ff:14::face:b00c*20:58:46|2a03:2880:31ff:1a::face:b00c*20:58:46|2a03:2880:31ff:71::face:b00c*20:58:47|2a03:2880:31ff:10::face:b00c*21:38:58|2a03:2880:31ff:b::face:b00c*21:02:42|2a03:2880:31ff:20::face:b00c*21:02:49|154.72.167.153*21:16:52|2a03:2880:31ff:12::face:b00c*21:10:38|2a03:2880:31ff:e::face:b00c*21:10:39|2a03:2880:31ff::face:b00c*21:38:52|2a03:2880:31ff:7::face:b00c*21:38:52|2a03:2880:31ff:c::face:b00c*21:38:52|2a03:2880:31ff:16::face:b00c*21:38:52', 17, '21:38:58', 0, '', '11885230316'),
(42, '', '2023-05-04', '129.0.99.140*21:16:24|2a03:2880:31ff:11::face:b00c*21:15:47|2a03:2880:31ff:1c::face:b00c*21:15:47|2a03:2880:31ff:12::face:b00c*21:15:41|2a03:2880:31ff:1::face:b00c*21:15:47|2a03:2880:31ff:10::face:b00c*21:15:47|2a03:2880:31ff:1b::face:b00c*21:15:47|2a03:2880:31ff:5::face:b00c*21:15:47|2a03:2880:31ff:13::face:b00c*21:15:47', 9, '21:16:24', 0, '', '13369230429'),
(43, '', '2023-05-04', '129.0.99.140*20:44:15|2a03:2880:31ff:21::face:b00c*20:44:54|2a03:2880:31ff:4::face:b00c*20:45:04', 3, '20:45:04', 0, '', '68650230326'),
(44, '', '2023-05-05', '24.200.96.32*18:31:13|154.72.150.94*14:58:33', 2, '18:31:13', 0, '', '30491230427'),
(45, '', '2023-05-05', '129.0.99.140*21:46:23|129.0.99.227*14:19:14|154.72.167.153*17:52:29|154.72.167.133*16:04:06|154.72.150.218*16:16:53|154.72.150.252*19:26:51|2a03:2880:25ff::face:b00c*19:59:26|2a03:2880:25ff:4::face:b00c*19:59:23|2a03:2880:31ff:f::face:b00c*19:59:18|2a03:2880:25ff:74::face:b00c*19:59:20|2a03:2880:25ff:2::face:b00c*19:59:30|2a03:2880:25ff:3::face:b00c*19:59:23|2a03:2880:22ff:12::face:b00c*19:59:45|2a03:2880:22ff:c::face:b00c*19:59:46|2a03:2880:22ff:74::face:b00c*19:59:46|2a03:2880:ff:d::face:b00c*20:15:12|2a03:2880:ff:b::face:b00c*20:15:16|2a03:2880:32ff:4::face:b00c*21:01:27|2a03:2880:32ff:c::face:b00c*20:34:50|2a03:2880:32ff::face:b00c*21:00:42|2a03:2880:32ff:74::face:b00c*21:00:45|2a03:2880:11ff:13::face:b00c*22:02:26|2a03:2880:11ff:a::face:b00c*22:02:26|2a03:2880:11ff:77::face:b00c*22:02:29|2a03:2880:11ff:15::face:b00c*23:30:32|2a03:2880:11ff:9::face:b00c*23:30:33|2a03:2880:11ff:10::face:b00c*23:30:34', 27, '23:30:34', 0, '', '16508230505'),
(46, '', '2023-05-05', '129.0.99.227*13:38:04', 1, '13:38:04', 0, '', '11885230316'),
(47, '', '2023-05-05', '129.0.99.227*13:38:04', 1, '13:38:04', 0, '', '11885230316'),
(48, '', '2023-05-05', '45.128.163.132*14:09:41|2a02:4780:b:c0de::54*14:20:56', 2, '14:20:56', 0, '', '1012.1121'),
(49, '', '2023-05-05', '154.72.167.153*14:35:11', 1, '14:35:11', 0, '', '84022230430'),
(50, '', '2023-05-06', '2a03:2880:ff:75::face:b00c*00:15:45|2a03:2880:31ff:e::face:b00c*00:16:23|129.0.76.76*00:16:59|154.72.167.153*05:55:26|2a03:2880:27ff:11::face:b00c*04:25:13|2a03:2880:27ff:76::face:b00c*22:05:32|2a03:2880:27ff:3::face:b00c*11:37:46|2a03:2880:27ff:78::face:b00c*08:25:06|2a03:2880:27ff:75::face:b00c*08:25:05|2a03:2880:27ff:6::face:b00c*11:37:46|2a03:2880:32ff:2::face:b00c*08:25:06|2a03:2880:32ff:3::face:b00c*08:25:06|2a03:2880:27ff:10::face:b00c*08:25:09|154.72.167.130*09:15:53|154.72.167.198*15:38:21|2a03:2880:21ff:e::face:b00c*16:33:17|66.220.149.4*16:33:55|2a03:2880:27ff:2::face:b00c*22:05:30|2a03:2880:27ff:b::face:b00c*22:05:31|2a03:2880:3ff:74::face:b00c*22:05:44|2a03:2880:3ff:76::face:b00c*22:05:48|2a03:2880:3ff:1::face:b00c*22:05:47|2a03:2880:3ff:4::face:b00c*22:05:47|2a03:2880:3ff:2::face:b00c*22:05:48|2a03:2880:3ff:77::face:b00c*22:05:47|2a03:2880:3ff:3::face:b00c*22:05:48', 26, '22:05:48', 0, '', '16508230505'),
(51, '', '2023-05-06', '154.72.167.198*11:36:46', 1, '11:36:46', 0, '', '84022230430'),
(52, '', '2023-05-06', '2a02:4780:b:c0de::54*14:20:56', 1, '14:20:56', 0, '', '1012.1121'),
(53, '', '2023-05-06', '184.145.184.3*21:38:53', 1, '21:38:53', 0, '', '30491230427'),
(54, '', '2023-05-07', '2a02:4780:b:c0de::54*03:57:53', 1, '03:57:53', 0, '', '1012.1121'),
(55, '', '2023-05-07', '2a03:2880:3ff::face:b00c*10:01:46|2a03:2880:3ff:77::face:b00c*10:01:48|2a03:2880:3ff:4::face:b00c*10:01:49|2a03:2880:22ff:16::face:b00c*12:02:31|2a03:2880:22ff:b::face:b00c*12:02:32|2a03:2880:22ff:17::face:b00c*12:02:45|2a03:2880:22ff:10::face:b00c*12:02:45|2a03:2880:22ff:77::face:b00c*12:02:51|2a03:2880:31ff:1c::face:b00c*18:05:56|2a03:2880:13ff:1::face:b00c*18:06:31|2a03:2880:13ff:9::face:b00c*22:06:55', 11, '22:06:55', 0, '', '16508230505'),
(56, '', '2023-05-08', '2a02:4780:b:c0de::54*03:57:53|2a03:2880:31ff:c::face:b00c*15:20:14|2a03:2880:30ff::face:b00c*15:20:40|2a03:2880:31ff:1e::face:b00c*15:21:14|2a03:2880:27ff:11::face:b00c*17:28:50|2a03:2880:27ff:2::face:b00c*17:28:54|2a03:2880:21ff:13::face:b00c*18:05:17|2a03:2880:31ff:14::face:b00c*18:06:32|2a03:2880:31ff:11::face:b00c*18:08:21|2a03:2880:23ff:d::face:b00c*18:08:55|2a03:2880:23ff:75::face:b00c*18:08:55|2a03:2880:21ff:15::face:b00c*18:09:05|2a03:2880:10ff:13::face:b00c*18:09:40|2a03:2880:10ff:1::face:b00c*18:09:40|2a03:2880:32ff:6::face:b00c*18:50:56|2a03:2880:32ff:5::face:b00c*18:50:56|2a03:2880:32ff:4::face:b00c*18:50:59|2a03:2880:32ff:14::face:b00c*18:51:00', 18, '18:51:00', 0, '', '1012.1121'),
(57, '', '2023-05-08', '2a03:2880:27ff::face:b00c*08:27:28|2a03:2880:27ff:16::face:b00c*08:27:29|2a03:2880:27ff:17::face:b00c*08:27:31|2a03:2880:10ff:5::face:b00c*11:47:43|2a03:2880:30ff:4::face:b00c*11:48:18|129.0.76.166*13:33:12|2a03:2880:32ff:c::face:b00c*11:49:22|2a03:2880:32ff:13::face:b00c*11:49:22|2a03:2880:32ff:7::face:b00c*11:49:22|2a03:2880:32ff:76::face:b00c*11:49:22|2a03:2880:32ff:11::face:b00c*11:49:25|2a03:2880:32ff:f::face:b00c*11:49:22|2a03:2880:32ff:77::face:b00c*11:49:22|129.0.99.55*19:16:31|2a03:2880:22ff:f::face:b00c*22:00:09|2a03:2880:13ff:75::face:b00c*23:00:16|2a03:2880:23ff:6::face:b00c*23:00:17|2a03:2880:30ff:5::face:b00c*23:00:52', 18, '23:00:52', 0, '', '16508230505'),
(58, '', '2023-05-08', '2a03:2880:27ff::face:b00c*08:27:28|2a03:2880:27ff:16::face:b00c*08:27:29|2a03:2880:27ff:17::face:b00c*08:27:31|2a03:2880:10ff:5::face:b00c*11:47:43|2a03:2880:30ff:4::face:b00c*11:48:18|129.0.76.166*13:33:12|2a03:2880:32ff:c::face:b00c*11:49:22|2a03:2880:32ff:13::face:b00c*11:49:22|2a03:2880:32ff:7::face:b00c*11:49:22|2a03:2880:32ff:76::face:b00c*11:49:22|2a03:2880:32ff:11::face:b00c*11:49:25|2a03:2880:32ff:f::face:b00c*11:49:22|2a03:2880:32ff:77::face:b00c*11:49:22|129.0.99.55*19:16:31|2a03:2880:22ff:f::face:b00c*22:00:09|2a03:2880:13ff:75::face:b00c*23:00:16|2a03:2880:23ff:6::face:b00c*23:00:17|2a03:2880:30ff:5::face:b00c*23:00:52', 18, '23:00:52', 0, '', '16508230505'),
(59, '', '2023-05-08', '154.72.167.190*15:57:44|129.0.207.237*16:08:20|129.0.99.245*18:50:21', 3, '18:50:21', 0, '', '13369230429'),
(60, '', '2023-05-09', '2a02:4780:b:c0de::54*03:57:54|2a03:2880:27ff:70::face:b00c*14:12:20|2a03:2880:25ff:77::face:b00c*21:13:28|2a03:2880:25ff::face:b00c*21:13:31', 4, '21:13:31', 0, '', '1012.1121'),
(61, '', '2023-05-09', '2a03:2880:13ff::face:b00c*06:03:28|2a03:2880:21ff:1::face:b00c*06:32:18|2a03:2880:31ff:e::face:b00c*06:33:14|2a03:2880:3ff:76::face:b00c*08:51:32|2a03:2880:23ff:8::face:b00c*11:14:01|2a03:2880:32ff:e::face:b00c*12:29:27|2a03:2880:21ff:10::face:b00c*13:57:27|2a03:2880:27ff:b::face:b00c*13:58:03|2a03:2880:11ff:4::face:b00c*15:33:05', 9, '15:33:05', 0, '', '16508230505'),
(62, '', '2023-05-09', '129.0.99.234*18:59:49', 1, '18:59:49', 0, '', '68650230326'),
(63, '', '2023-05-09', '129.0.99.234*19:05:31', 1, '19:05:31', 0, '', '84022230430'),
(64, '', '2023-05-09', '129.0.99.234*19:06:17', 1, '19:06:17', 0, '', '13369230429'),
(65, '', '2023-05-10', '2a02:4780:b:c0de::54*03:57:53|2a03:2880:25ff:78::face:b00c*07:14:16|129.0.99.238*08:25:41|63.117.14.75*08:25:42|2a03:2880:31ff:3::face:b00c*09:03:40|2a03:2880:13ff:3::face:b00c*09:04:14|2a03:2880:11ff:75::face:b00c*19:00:08|41.202.207.170*22:45:27', 8, '22:45:27', 0, '', '1012.1121'),
(66, '', '2023-05-10', '154.72.167.198*06:50:39', 1, '06:50:39', 0, '', '13369230429'),
(67, '', '2023-05-10', '2a03:2880:3ff:76::face:b00c*06:57:59', 1, '06:57:59', 0, '', '16508230505'),
(68, '', '2023-05-10', '154.72.167.198*09:15:33|129.0.76.246*13:50:49', 2, '13:50:49', 0, '', '18690230510'),
(69, '', '2023-05-11', '2a03:2880:31ff:1c::face:b00c*00:11:39|2a03:2880:31ff:10::face:b00c*00:11:45|2a02:4780:b:c0de::54*03:57:54|3.249.120.145*09:49:45|2a03:2880:25ff:75::face:b00c*14:18:32|2a03:2880:25ff:76::face:b00c*14:18:36|102.215.255.188*22:25:34', 7, '22:25:34', 0, '', '1012.1121'),
(70, '', '2023-05-11', '154.72.167.215*09:42:40', 1, '09:42:40', 0, '', '18690230510'),
(71, '', '2023-05-11', '2a03:2880:13ff:1::face:b00c*10:47:31|2a03:2880:13ff:76::face:b00c*10:47:27|154.72.167.215*13:22:31', 3, '13:22:31', 0, '', '16508230505'),
(72, '', '2023-05-12', '2a02:4780:b:c0de::54*03:57:53|2a03:2880:25ff:4::face:b00c*07:39:47|2a03:2880:25ff:75::face:b00c*07:39:49|154.72.167.198*09:51:20|154.72.167.166*17:05:06|45.128.160.157*23:51:31', 6, '23:51:31', 0, '', '1012.1121'),
(73, '', '2023-05-12', '2a03:2880:10ff:1::face:b00c*10:03:53|154.72.167.166*12:37:19|154.72.150.141*14:04:43', 3, '14:04:43', 0, '', '16508230505'),
(74, '', '2023-05-12', '154.72.167.166*12:35:26', 1, '12:35:26', 0, '', '13369230429'),
(75, '', '2023-05-13', '2a02:4780:b:c0de::54*03:57:53|2a03:2880:25ff:74::face:b00c*17:33:08|129.0.99.133*18:29:52|40.77.167.248*21:27:48', 4, '21:27:48', 0, '', '1012.1121'),
(76, '', '2023-05-13', '154.72.167.220*17:17:12', 1, '17:17:12', 0, '', '30491230427'),
(77, '', '2023-05-14', '2a02:4780:b:c0de::54*00:39:17|167.94.138.49*00:48:21|167.94.138.52*00:51:52|2a03:2880:24ff:74::face:b00c*02:13:06|102.244.42.203*13:10:58', 5, '13:10:58', 0, '', '1012.1121'),
(78, '', '2023-05-14', '2a03:2880:13ff:4::face:b00c*01:10:57|2a03:2880:23ff:11::face:b00c*01:10:57|2a03:2880:23ff:e::face:b00c*01:10:59|2a03:2880:23ff:3::face:b00c*01:10:59|2a03:2880:23ff:12::face:b00c*01:11:03', 5, '01:11:03', 0, '', '16508230505'),
(79, '', '2023-05-14', '154.72.167.171*15:29:58', 1, '15:29:58', 0, '', '30491230427'),
(80, '', '2023-05-15', '2a02:4780:b:c0de::54*00:39:17|2a03:2880:24ff:3::face:b00c*06:38:18|34.239.150.100*07:10:30|2a03:2880:25ff:78::face:b00c*11:21:43|2a03:2880:25ff:2::face:b00c*11:21:45', 5, '11:21:45', 0, '', '1012.1121'),
(81, '', '2023-05-15', '154.72.167.227*12:38:33|2a03:2880:27ff:e::face:b00c*10:20:38|2a03:2880:27ff:77::face:b00c*10:20:38|2a03:2880:27ff:2::face:b00c*10:20:38|2a03:2880:27ff:14::face:b00c*10:20:38|2a03:2880:27ff:a::face:b00c*10:20:38|154.72.150.244*17:08:07|2a03:2880:3ff:77::face:b00c*22:27:25|129.0.76.147*22:41:53', 9, '22:41:53', 0, '', '16508230505'),
(82, '', '2023-05-15', '154.72.167.227*13:49:40|129.0.76.46*17:49:57|154.72.167.182*18:14:46', 3, '18:14:46', 0, '', '30491230427'),
(83, '', '2023-05-15', '154.72.167.227*14:15:30|108.174.5.113*14:10:01|20.169.168.224*14:11:18|154.72.150.221*16:49:21|129.0.76.46*17:58:15|24.48.81.250*23:16:21', 6, '23:16:21', 0, '', '4579230515'),
(84, '', '2023-05-16', '154.72.167.253*12:50:36|154.72.167.148*02:39:02|2a03:2880:ff::face:b00c*05:50:24|2a03:2880:10ff::face:b00c*08:59:50|2a03:2880:22ff:9::face:b00c*10:36:47|2a03:2880:22ff:14::face:b00c*10:36:49|129.0.99.223*15:10:52', 7, '15:10:52', 0, '', '16508230505'),
(85, '', '2023-05-16', '2a02:4780:b:c0de::54*00:39:17|129.0.80.244*15:45:26', 2, '15:45:26', 0, '', '1012.1121'),
(86, '', '2023-05-17', '2a02:4780:b:c0de::54*00:39:17|45.128.160.157*04:47:15|2a06:4880:3000::29*05:49:22', 3, '05:49:22', 0, '', '1012.1121'),
(87, '', '2023-05-17', '154.72.150.242*01:39:08', 1, '01:39:08', 0, '', '4579230515'),
(88, '', '2023-05-17', '154.72.150.211*19:50:48', 1, '19:50:48', 0, '', '16508230505'),
(89, '', '2023-05-18', '2a02:4780:b:c0de::54*00:39:17|66.249.73.138*04:54:43|66.249.73.131*09:23:26|66.249.73.146*21:16:22', 4, '21:16:22', 0, '', '1012.1121'),
(90, '', '2023-05-18', '2a03:2880:32ff:8::face:b00c*08:25:45|2a03:2880:27ff:5::face:b00c*12:59:17|2a03:2880:27ff:b::face:b00c*12:59:22|2a03:2880:27ff:1::face:b00c*12:59:28|2a03:2880:27ff:a::face:b00c*12:59:28|2a03:2880:27ff:7::face:b00c*12:59:28|2a03:2880:27ff:78::face:b00c*12:59:27|2a03:2880:27ff:2::face:b00c*12:59:28|2a03:2880:27ff:74::face:b00c*12:59:28|2a03:2880:27ff:4::face:b00c*12:59:28|2a03:2880:27ff:76::face:b00c*12:59:28|2a03:2880:11ff:5::face:b00c*13:00:33|2a03:2880:31ff:25::face:b00c*14:36:09|2a03:2880:31ff:75::face:b00c*14:36:09|2a03:2880:31ff:10::face:b00c*14:36:08|2a03:2880:31ff:f::face:b00c*14:36:09|2a03:2880:31ff:15::face:b00c*14:36:09|2a03:2880:31ff:5::face:b00c*14:36:09|2a03:2880:31ff:1f::face:b00c*14:36:12|2a03:2880:27ff:e::face:b00c*21:01:43', 20, '21:01:43', 0, '', '16508230505'),
(91, '', '2023-05-19', '2a02:4780:b:c0de::54*00:39:17|2a03:2880:31ff:75::face:b00c*15:21:07', 2, '15:21:07', 0, '', '1012.1121'),
(92, '', '2023-05-19', '154.72.167.208*19:30:40', 1, '19:30:40', 0, '', '4579230515'),
(93, '', '2023-05-19', '2a03:2880:31ff:15::face:b00c*20:32:45', 1, '20:32:45', 0, '', '16508230505'),
(94, '', '2023-05-20', '2a02:4780:b:c0de::54*00:39:17|154.72.167.208*06:23:19', 2, '06:23:19', 0, '', '1012.1121'),
(95, '', '2023-05-20', '154.72.167.208*07:42:35|129.0.82.230*07:51:57', 2, '07:51:57', 0, '', '68650230326'),
(96, '', '2023-05-20', '129.0.76.117*10:46:00', 1, '10:46:00', 0, '', '13369230429'),
(97, '', '2023-05-21', '2a03:2880:ff:f::face:b00c*05:07:26|2a03:2880:ff:1::face:b00c*05:07:23|2a03:2880:ff:11::face:b00c*05:07:24|2a03:2880:ff:b::face:b00c*05:07:24|2a03:2880:ff:10::face:b00c*05:07:23|2a03:2880:ff:3::face:b00c*05:07:23|2a03:2880:ff:16::face:b00c*05:07:23|2a03:2880:ff:78::face:b00c*05:07:24|2a03:2880:ff:74::face:b00c*05:07:26|2a03:2880:ff:14::face:b00c*05:07:27|154.72.150.251*13:43:28', 11, '13:43:28', 0, '', '16508230505'),
(98, '', '2023-05-21', '66.249.73.138*09:12:25|2a02:4780:b:c0de::54*15:23:30', 2, '15:23:30', 0, '', '1012.1121'),
(99, '', '2023-05-21', '154.72.167.56*21:47:58', 1, '21:47:58', 0, '', '68650230326'),
(100, '', '2023-05-21', '154.72.167.56*21:57:52', 1, '21:57:52', 0, '', '11885230316'),
(101, '', '2023-05-22', '154.72.167.97*07:38:43', 1, '07:38:43', 0, '', '11885230316'),
(102, '', '2023-05-22', '154.72.167.97*08:13:37|129.0.99.53*19:11:17', 2, '19:11:17', 0, '', '30491230427'),
(103, '', '2023-05-22', '154.72.167.97*08:26:44', 1, '08:26:44', 0, '', '68650230326'),
(104, '', '2023-05-22', '2a03:2880:27ff:17::face:b00c*08:19:51|2a02:4780:b:c0de::54*15:23:30', 2, '15:23:30', 0, '', '1012.1121'),
(105, '', '2023-05-22', '154.72.150.223*18:27:40|154.72.167.191*21:00:06|129.0.76.165*20:47:40', 3, '21:00:06', 0, '', '84022230430'),
(106, '', '2023-05-23', '2a02:4780:b:c0de::54*15:23:30', 1, '15:23:30', 0, '', '1012.1121'),
(107, '', '2023-05-23', '169.150.196.66*22:45:36|2a03:2880:27ff:8::face:b00c*19:08:01|2a03:2880:27ff:75::face:b00c*19:08:04|2a03:2880:27ff::face:b00c*19:08:04|2a03:2880:27ff:f::face:b00c*19:08:04|2a03:2880:27ff:c::face:b00c*19:08:04|2a03:2880:27ff:d::face:b00c*19:08:05|2a03:2880:27ff:77::face:b00c*19:08:05|2a03:2880:27ff:76::face:b00c*19:08:05|2a03:2880:27ff:4::face:b00c*19:08:05', 10, '22:45:36', 0, '', '84022230430'),
(108, '', '2023-05-23', '169.150.196.66*22:42:22|104.239.42.2*21:18:39|109.234.165.63*23:10:48|34.254.53.125*23:43:58', 4, '23:43:58', 0, '', '68650230326'),
(109, '', '2023-05-23', '154.72.150.241*20:31:11|154.72.167.196*21:42:23', 2, '21:42:23', 0, '', '16508230505'),
(110, '', '2023-05-23', '169.150.196.66*23:11:06|109.234.165.63*23:06:14', 2, '23:11:06', 0, '', '25995230523'),
(111, '', '2023-05-24', '109.234.165.63*09:20:10|129.0.76.227*12:32:04', 2, '12:32:04', 0, '', '25995230523'),
(112, '', '2023-05-24', '109.234.165.63*14:10:34|129.0.99.26*06:41:38|129.0.76.227*09:06:39|154.72.167.241*11:33:15', 4, '14:10:34', 0, '', '68650230326'),
(113, '', '2023-05-24', '66.249.79.172*09:25:03', 1, '09:25:03', 0, '', '1012.1121'),
(114, '', '2023-05-24', '154.72.150.248*12:24:16', 1, '12:24:16', 0, '', '16508230505'),
(115, '', '2023-05-24', '129.0.76.227*13:03:19', 1, '13:03:19', 0, '', '30491230427');

-- --------------------------------------------------------

--
-- Table structure for table `visite_etablissement`
--

CREATE TABLE `visite_etablissement` (
  `id` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `addresse_ip` varchar(50) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `visit_etable` int(111) NOT NULL DEFAULT 1,
  `visit_blog` int(11) NOT NULL DEFAULT 1,
  `visite_date_ecole` varchar(10) NOT NULL,
  `visite_date_blog` varchar(10) NOT NULL,
  `visit_skl` int(100) NOT NULL DEFAULT 1,
  `visite_date_soukoulou` varchar(111) NOT NULL,
  `permalien` varchar(100) NOT NULL,
  `matricule_entreprise` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `permalien` varchar(255) NOT NULL,
  `nom_entreprise` varchar(255) NOT NULL,
  `cours_nom` varchar(100) NOT NULL,
  `matricule_entreprise` varchar(200) NOT NULL,
  `matricule_admin` varchar(25) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `quartier` varchar(200) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `id_core` int(11) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `color1` varchar(100) NOT NULL,
  `color2` varchar(100) NOT NULL,
  `google_map` text NOT NULL,
  `decription` varchar(255) NOT NULL,
  `pixel_fb` text NOT NULL,
  `lien_fb` varchar(255) NOT NULL,
  `lien_linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `titre_service` varchar(255) NOT NULL DEFAULT 'Nos meilleurs services',
  `titre_blog` varchar(255) NOT NULL DEFAULT 'Tous les articles récents de notre journal',
  `bouton_whatsapp` varchar(3) NOT NULL DEFAULT 'oui',
  `page1` varchar(25) NOT NULL DEFAULT 'Accueil',
  `page2` varchar(25) NOT NULL DEFAULT 'Services',
  `page3` varchar(25) NOT NULL DEFAULT 'blog',
  `page4` varchar(25) NOT NULL DEFAULT 'Contact',
  `nom_domaine` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `permalien`, `nom_entreprise`, `cours_nom`, `matricule_entreprise`, `matricule_admin`, `pays`, `ville`, `region`, `email`, `quartier`, `telephone`, `id_core`, `logo`, `color1`, `color2`, `google_map`, `decription`, `pixel_fb`, `lien_fb`, `lien_linkedin`, `twitter`, `youtube`, `instagram`, `whatsapp`, `titre_service`, `titre_blog`, `bouton_whatsapp`, `page1`, `page2`, `page3`, `page4`, `nom_domaine`) VALUES
(1, 'NEO-COMPANY', 'NEO COMPANY', 'neo compapary', '11885230316', '', '8', 'Douala', '', 'contact@neocompany.org', 'Logpom', '', 1, '23-04-14-31akila_blog.jpeg', '#105cab', '#cc8324', '', '', '', '', '', '', '', '', '', 'Nos meilleurs services', 'Tous les articles récents de notre journal', 'oui', 'Accueil', 'Services', 'blog', 'Contact', NULL),
(2, '1pub-agency', '1pub agency', '1pub', '68650230326', '', '8', 'Douala', 'Littoral', 'info@1pub.net', 'Logpom', '', 1, '23-04-14-13akila_blog.png', '#ff5722', '#000000', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.670270204159!2d9.766509028519922!3d4.087374838316861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610d56336784af%3A0x7f7a7ef2713bf297!2sMosqu%C3%A9e%20%22NJOYA%20Logbessou%22!5e0!3m2!1sen!2scm!4v1679814996901!5m2!1sen!2scm\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Augmenter votre visibilité et professionnaliser votre activité grâce au digital, telle est notre vocation.', '         <!-- Meta Pixel Code -->\r\n<script>\r\n  !function(f,b,e,v,n,t,s)\r\n  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\r\n  n.callMethod.apply(n,arguments):n.queue.push(arguments)};\r\n  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\';\r\n  n.queue=[];t=b.createElement(e);t.async=!0;\r\n  t.src=v;s=b.getElementsByTagName(e)[0];\r\n  s.parentNode.insertBefore(t,s)}(window, document,\'script\',\r\n  \'https://connect.facebook.net/en_US/fbevents.js\');\r\n  fbq(\'init\', \'607354988085284\');\r\n  fbq(\'track\', \'PageView\');\r\n</script>\r\n<noscript><img height=\"1\" width=\"1\" style=\"display:none\"\r\n  src=\"https://www.facebook.com/tr?id=607354988085284&ev=PageView&noscript=1\"\r\n/></noscript>\r\n<!-- End Meta Pixel Code -->', 'Https://web.facebook.com/1PubAgency', '', '', '', '', '237682465068', 'Nos meilleurs services', 'Tous les articles récents de notre journale', 'oui', 'Accueil', 'Services', 'blog', 'Contact', 'https://uncle-gcg.com'),
(3, 'onecom-x-africa', 'OneCom-x Africa', 'OneCom-x', '30491230427', '', '8', 'Yaoundé', 'Centre', 'dieuunivers2017@gmail.com', 'odza borne 10', '+237 6 56 14 04 53', 1, '23-04-27-36akila_blog.jpg', '#244190', '#f6911f', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7962.217234631809!2d11.519200577395926!3d3.786533297046237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bd08020f23c9d%3A0xb3ec8036f0780209!2stotal%20station%20Odza%20terminal%2010!5e0!3m2!1sen!2scm!4v1682590664266!5m2!1sen!2scm\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'OneCom-X Africa est une agence de communication basée à Yaoundé Cameroun qui se démarque par sa créativité et sa réactivité', '', 'Https://web.facebook.com/onecomxafrica', 'Https://www.linkedin.com/company/anj-call/', '', '', '', '237656140453', 'Nos meilleurs services', 'Tous les articles récents de notre journal', 'oui', 'Accueil', 'Services', 'blog', 'Contact', NULL),
(4, 'xtrade-consulting', 'Cabinet Xtrade Consulting', 'Cabinet Xtrade', '13369230429', '', '8', 'Douala', 'Littoral', 'xtradeconsulting338@gmail.com', 'Bependa', '690070605', 1, '23-04-29-24akila_blog.jpg', '#0070ac', '#81cb47', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15919.348557547157!2d9.716795608828882!3d4.053616084721555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610d81a47f4ed7%3A0x3973d1d3d509d87!2sBepanda%2C%20Douala!5e0!3m2!1sen!2scm!4v1682780414485!5m2!1sen!2scm\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', ' Cabinet xtrade Consulting Group Sart est une entreprise basée à douala au Cameroun, spécialisée dans la creation d\'entreprise, la comptabilité le conseil fiscal, le conseil financier, la formation et l\'accompagnement.', '', 'Https://web.facebook.com/profile.php?id=100086984312229', '', '', '', '', '690070605', 'Nos meilleurs services', 'Tous les articles récents de notre journal', 'oui', 'Accueil', 'Services', 'blog', 'Contact', NULL),
(5, 'anyang-ntouessong', 'Anyang Ntouessong', 'ADEN', '84022230430', '', '8', 'Yaoundé', 'Centre', 'info@ntouessong.com', 'Anyang Ntouessong', '+237 6 97 89 60 21', 1, '23-04-30-38akila_blog.png', '#00821b', '#03a24e', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31866.608427376435!2d11.210312067395357!3d3.2690243976810085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1089a4736cc269bb%3A0xdedfbb68c3890e38!2sNtouessong!5e0!3m2!1sfr!2scm!4v1682841421121!5m2!1sfr!2scm\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Ntouessong est un village de la région du Centre au Cameroun, localisé dans l\'arrondissement (commune) de Bikok et le département de la Méfou-et-Akono.', '', 'Https://web.facebook.com/groups/1082535091803047', '', '', '', '', '237697896021', 'Le bureau exécutif', 'Tous les articles récents de notre journal', 'oui', 'Accueil', 'Bureau', 'Actu', 'Contact', NULL),
(6, 'target-communication', 'Target communication by NTC', 'Target-ntc', '16508230505', '15215885894', '8', 'Douala', 'Littoral', 'donalbayiha@gmail.com', 'Akwa', '6 73 02 71 60', 1, '23-05-05-12akila_blog.jpg', '#0057f7', '#f60000', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127357.5729085332!2d9.671764043035585!3d4.035900744423692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1061128be2e1fe6d%3A0x92daa1444781c48b!2sDouala!5e0!3m2!1sen!2scm!4v1683287847722!5m2!1sen!2scm\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Nous vous accompagnons dans l\'implémentation de votre communication digitale', '', 'Https://web.facebook.com/profile.php?id=100091450270256', '', '', '', '', '237697322902', 'Nos meilleurs services', 'Tous les articles récents de notre journal', 'oui', 'Accueil', 'Services', 'blog', 'Contact', ''),
(7, 'cap-electric', 'Cap Electric Engineering', 'cap-electric', '18690230510', '15215885894', '8', 'Yaoundé', 'Centre', 'infocapelectric@gmail.com', 'Mendong(marche)', '+237 670 07 14  85', 1, '23-05-10-44akila_blog.png', '#4f22fd', '#000000', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63694.07364835707!2d11.398717121679695!3d3.8360105000000164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bce2faab2771b%3A0x1c4efac0d5fc8e39!2sMendong%20Market!5e0!3m2!1sen!2scm!4v1683704135676!5m2!1sen!2scm\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'A cette forte dimension qui permet de comprendre le besoin de sa clientèle et d’assurer une proximité nécessaire pour un soutien permanant afin d’offrir des prestations conformes et adaptées au budget du client.', '', 'Https://www.facebook.com/CapElectric.Engineering', 'Https://www.linkedin.com/company/capelectric-engineering', '', '', '', '237670071485', 'Nos meilleurs services', 'Tous les articles récents de notre journal', 'oui', 'Accueil', 'Services', 'blog', 'Contact', ''),
(8, 'ousmane-ndiaye', 'Ousmane Ndiaye', 'Ousmane', '4579230515', '15215885894', '43', '/', '/', 'Ousmane.Ndiaye@gmail.com', '/', '/', 1, '23-05-15-29akila_blog.jpeg', '#375f74', '#7da9c0', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955982.6754501592!2d-17.159647589481338!3d14.469505234646508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec172f5b3c5bb71%3A0x5a46a55099615940!2sSenegal!5e0!3m2!1sen!2scm!4v1684173377697!5m2!1sen!2scm\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Ollowers | Formations | Coaching | Conférences :R-H- Intervention- Éducation-Jeunesse -Développement personnel- Leadership- Art oratoire-Management des équipes- Conduite du changement-Intelligence émotionnelle', '', '', 'Https://www.linkedin.com/in/%E2%9C%94%EF%B8%8Fousmane-ndiaye-91831a18/', '', '', '', '', 'Nos meilleurs services', 'Tous les articles récents de notre journal', 'oui', 'Accueil', 'Services', 'blog', 'Contact', ''),
(9, 'uncle-gcg', 'Uncle GCG', 'Uncle GCG', '25995230523', '2159230325', '39', 'Port Harcourt', 'Rivers', 'info@uncle-gcg.com', 'Mgbuoba', '(+234) 903 895 63 68', 1, '23-05-23-37akila_blog.jpeg', '#720b44', '#dad416', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127223.16357189475!2d6.922394541541497!3d4.817405491330293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cea39f2c48e3%3A0x53562bdd7d8832db!2sPort%20Harcourt%2C%20Rivers%2C%20Nigeria!5e0!3m2!1sen!2snl!4v1684880050642!5m2!1sen!2snl\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '', '', 'Https://www.facebook.com/profile.php?id=100082583448561', 'Https://www.linkedin.com/in/uncle-g-c-g-24a859246', 'Https://twitter.com/Unclegcg?t=ttDBXOsNQLW9fHCVaKNtpA&amp;s=09', 'Https://youtube.com/channel/UCvGjvd82bOoiYJGGbW-GDMg', 'Https://www.instagram.com/p/Cf8hGhbgPHC/?igshid=YmMyMTA2M2Y=', '237653634995', 'Nos meilleurs services', 'Tous les articles récents de notre journal', 'oui', 'Accueil', 'Services', 'blog', 'Contact', 'https://uncle-gcg.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permalien` (`permalien`),
  ADD KEY `matricule` (`matricule`);

--
-- Indexes for table `addresse_ip`
--
ALTER TABLE `addresse_ip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permalien` (`permalien`),
  ADD KEY `matricule` (`matricule`),
  ADD KEY `id_etablissement` (`matricule_akila_blog`);

--
-- Indexes for table `admin_entreprise`
--
ALTER TABLE `admin_entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricule` (`matricule`);

--
-- Indexes for table `categorie_article`
--
ALTER TABLE `categorie_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentaire_blog`
--
ALTER TABLE `commentaire_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentaire_blog_all`
--
ALTER TABLE `commentaire_blog_all`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permalien` (`permalien`),
  ADD KEY `matricule` (`matricule`);

--
-- Indexes for table `connexion_admin`
--
ALTER TABLE `connexion_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core1`
--
ALTER TABLE `core1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permalien` (`permalien`),
  ADD KEY `priorite` (`titre_des_posts`);

--
-- Indexes for table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permalien` (`permalien`),
  ADD KEY `matricule` (`matricule`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`,`name_file`);

--
-- Indexes for table `info_visiteurs`
--
ALTER TABLE `info_visiteurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_visiteurs1`
--
ALTER TABLE `info_visiteurs1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_from` (`id_from`),
  ADD KEY `id_to` (`id_to`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id_pays`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visiteurs_blog`
--
ALTER TABLE `visiteurs_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visiteurs_journaliers`
--
ALTER TABLE `visiteurs_journaliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permalien` (`permalien`),
  ADD KEY `matricule` (`matricule`);

--
-- Indexes for table `visite_etablissement`
--
ALTER TABLE `visite_etablissement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permalien` (`permalien`),
  ADD KEY `matricule` (`matricule`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `addresse_ip`
--
ALTER TABLE `addresse_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=392;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `admin_entreprise`
--
ALTER TABLE `admin_entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categorie_article`
--
ALTER TABLE `categorie_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `commentaire_blog`
--
ALTER TABLE `commentaire_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `connexion_admin`
--
ALTER TABLE `connexion_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `core1`
--
ALTER TABLE `core1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `info_visiteurs`
--
ALTER TABLE `info_visiteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_visiteurs1`
--
ALTER TABLE `info_visiteurs1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=413;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `visiteurs_blog`
--
ALTER TABLE `visiteurs_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `visiteurs_journaliers`
--
ALTER TABLE `visiteurs_journaliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `visite_etablissement`
--
ALTER TABLE `visite_etablissement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
