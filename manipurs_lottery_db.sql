-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2018 at 11:22 AM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manipurs_lottery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `lottery_list`
--

CREATE TABLE `lottery_list` (
  `id` int(11) NOT NULL,
  `timee` varchar(20) NOT NULL,
  `datee` date NOT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lottery_list`
--

INSERT INTO `lottery_list` (`id`, `timee`, `datee`, `a`, `b`, `c`, `active`) VALUES
(1, '09:00AM', '2018-03-31', 10, 20, 10, '0'),
(2, '09:15AM', '2018-03-31', 10, 10, 10, '0'),
(3, '09:30AM', '2018-03-31', 10, 15, 10, '0'),
(4, '09:45AM', '2018-03-31', 10, 15, 10, '0'),
(5, '10:00AM', '2018-03-31', 10, 10, 10, '0'),
(6, '10:15AM', '2018-03-31', 10, 10, 10, '0'),
(7, '10:30AM', '2018-03-31', 10, 10, 10, '0'),
(8, '10:45AM', '2018-03-31', 10, 10, 10, '0'),
(9, '11:00AM', '2018-03-31', 10, 10, 10, '0'),
(10, '11:15AM', '2018-03-31', 10, 10, 10, '0'),
(11, '11:30AM', '2018-03-31', 10, 10, 10, '0'),
(12, '11:45AM', '2018-03-31', 10, 10, 10, '0'),
(13, '12:00PM', '2018-03-31', 10, 10, 10, '0'),
(14, '12:15PM', '2018-03-31', 10, 10, 10, '0'),
(15, '12:30PM', '2018-03-31', 10, 10, 10, '0'),
(16, '12:45PM', '2018-03-31', 10, 10, 10, '0'),
(17, '01:00PM', '2018-03-31', 10, 10, 10, '0'),
(18, '01:15PM', '2018-03-31', 10, 10, 10, '0'),
(19, '01:30PM', '2018-03-31', 10, 10, 10, '0'),
(20, '01:45PM', '2018-03-31', 10, 10, 10, '0'),
(21, '02:00PM', '2018-03-31', 10, 10, 10, '0'),
(22, '02:15PM', '2018-03-31', 10, 10, 10, '0'),
(23, '02:30PM', '2018-03-31', 10, 10, 10, '0'),
(24, '02:45PM', '2018-03-31', 10, 10, 10, '0'),
(25, '03:00PM', '2018-03-31', 10, 10, 10, '0'),
(26, '03:15PM', '2018-03-31', 10, 10, 10, '0'),
(27, '03:30PM', '2018-03-31', 10, 10, 10, '0'),
(28, '03:45PM', '2018-03-31', 10, 10, 10, '0'),
(29, '04:00PM', '2018-03-31', 10, 10, 10, '0'),
(30, '04:15PM', '2018-03-31', 1010, 10, 1010, '0'),
(31, '04:30PM', '2018-03-31', 10, 10, 10, '0'),
(32, '04:45PM', '2018-03-31', 10, 10, 10, '0'),
(33, '05:00PM', '2018-03-31', 10, 10, 10, '0'),
(34, '05:15PM', '2018-03-31', 10, 10, 10, '0'),
(35, '05:30PM', '2018-03-31', 10, 10, 10, '0'),
(36, '05:45PM', '2018-03-31', 10, 10, 10, '0'),
(37, '06:00PM', '2018-03-31', 20, 30, 10, '0'),
(38, '06:15PM', '2018-03-31', 100, 200, 300, '0'),
(39, '06:30PM', '2018-03-31', 927, 456, 302, '0'),
(40, '06:45PM', '2018-03-31', 10, 10, 10, '0'),
(41, '07:00PM', '2018-03-31', 10, 10, 10, '0'),
(42, '07:15PM', '2018-03-31', 10, 10, 10, '0'),
(43, '07:30PM', '2018-03-31', 10, 10, 10, '0'),
(44, '07:45PM', '2018-03-31', 10, 10, 10, '0'),
(45, '08:00PM', '2018-03-31', 10, 10, 10, '0'),
(46, '08:15PM', '2018-03-31', 10, 10, 10, '0'),
(47, '08:30PM', '2018-03-31', 10, 10, 10, '0'),
(48, '08:45PM', '2018-03-31', 10, 10, 10, '0'),
(49, '09:00PM', '2018-03-31', 10, 10, 10, '0'),
(50, '09:00AM', '2018-04-01', 20, 20, 20, '0'),
(51, '09:15AM', '2018-04-01', 15, 67, 15, '0'),
(52, '09:30AM', '2018-04-01', 15, 34, 15, '0'),
(53, '09:45AM', '2018-04-01', 15, 78, 15, '0'),
(54, '10:00AM', '2018-04-01', 15, 56, 15, '0'),
(55, '10:15AM', '2018-04-01', 15, 34, 15, '0'),
(56, '10:30AM', '2018-04-01', 15, 45, 15, '0'),
(57, '10:45AM', '2018-04-01', 15, 23, 15, '0'),
(58, '11:00AM', '2018-04-01', 15, 76, 15, '0'),
(59, '11:15AM', '2018-04-01', 15, 76, 15, '0'),
(60, '11:30AM', '2018-04-01', 15, 76, 15, '0'),
(61, '11:45AM', '2018-04-01', 15, 76, 15, '0'),
(62, '12:00PM', '2018-04-01', 15, 76, 15, '0'),
(63, '12:15PM', '2018-04-01', 15, 76, 15, '0'),
(64, '12:30PM', '2018-04-01', 76, 12, 76, '0'),
(65, '12:45PM', '2018-04-01', 76, 67, 76, '0'),
(66, '01:00PM', '2018-04-01', 76, 34, 76, '0'),
(67, '01:15PM', '2018-04-01', 76, 76, 76, '0'),
(68, '01:30PM', '2018-04-01', 76, 76, 76, '0'),
(69, '01:45PM', '2018-04-01', 76, 76, 76, '0'),
(70, '02:00PM', '2018-04-01', 76, 46, 76, '0'),
(71, '02:15PM', '2018-04-01', 76, 76, 76, '0'),
(72, '02:30PM', '2018-04-01', 55, 76, 76, '0'),
(73, '02:45PM', '2018-04-01', 90, 76, 90, '0'),
(74, '03:00PM', '2018-04-01', 76, 34, 76, '0'),
(75, '03:15PM', '2018-04-01', 22, 76, 67, '0'),
(76, '03:30PM', '2018-04-01', 11, 66, 78, '0'),
(77, '03:45PM', '2018-04-01', 55, 76, 99, '0'),
(78, '04:00PM', '2018-04-01', 76, 45, 76, '0'),
(79, '04:15PM', '2018-04-01', 34, 56, 34, '0'),
(80, '04:30PM', '2018-04-01', 22, 12, 22, '0'),
(81, '04:45PM', '2018-04-01', 56, 23, 56, '0'),
(82, '05:00PM', '2018-04-01', 67, 12, 67, '0'),
(83, '05:15PM', '2018-04-01', 78, 23, 78, '0'),
(84, '05:30PM', '2018-04-01', 89, 45, 89, '0'),
(85, '05:45PM', '2018-04-01', 76, 67, 76, '0'),
(86, '06:00PM', '2018-04-01', 76, 50, 76, '0'),
(87, '06:15PM', '2018-04-01', 23, 76, 23, '0'),
(88, '06:30PM', '2018-04-01', 76, 89, 76, '0'),
(89, '06:45PM', '2018-04-01', 12, 12, 12, '0'),
(90, '07:00PM', '2018-04-01', 45, 99, 45, '0'),
(91, '07:15PM', '2018-04-01', 12, 23, 12, '0'),
(92, '07:30PM', '2018-04-01', 12, 44, 12, '0'),
(93, '07:45PM', '2018-04-01', 44, 44, 44, '0'),
(94, '08:00PM', '2018-04-01', 44, 44, 44, '0'),
(95, '08:15PM', '2018-04-01', 21, 88, 21, '0'),
(96, '08:30PM', '2018-04-01', 33, 99, 33, '0'),
(97, '08:45PM', '2018-04-01', 22, 88, 22, '0'),
(98, '09:00PM', '2018-04-01', 24, 78, 24, '0'),
(99, '09:00AM', '2018-04-02', 15, 20, 20, '0'),
(100, '09:15AM', '2018-04-02', 12, 38, 66, '0'),
(101, '09:30AM', '2018-04-02', 11, 12, 13, '0'),
(102, '09:45AM', '2018-04-02', 14, 66, 88, '0'),
(103, '10:00AM', '2018-04-02', 33, 66, 99, '0'),
(104, '10:15AM', '2018-04-02', 22, 33, 67, '0'),
(105, '10:30AM', '2018-04-02', 12, 76, 98, '0'),
(106, '10:45AM', '2018-04-02', 45, 65, 34, '0'),
(107, '11:00AM', '2018-04-02', 11, 45, 76, '0'),
(108, '11:15AM', '2018-04-02', 34, 23, 67, '0'),
(109, '11:30AM', '2018-04-02', 11, 45, 87, '0'),
(110, '11:45AM', '2018-04-02', 23, 34, 66, '0'),
(111, '12:00PM', '2018-04-02', 45, 56, 78, '0'),
(112, '12:15PM', '2018-04-02', 11, 54, 61, '0'),
(113, '12:30PM', '2018-04-02', 21, 63, 62, '0'),
(114, '12:45PM', '2018-04-02', 22, 32, 23, '0'),
(115, '01:00PM', '2018-04-02', 56, 38, 37, '0'),
(116, '01:15PM', '2018-04-02', 45, 67, 78, '0'),
(117, '01:30PM', '2018-04-02', 44, 67, 11, '0'),
(118, '01:45PM', '2018-04-02', 55, 34, 12, '0'),
(119, '02:00PM', '2018-04-02', 33, 66, 22, '0'),
(120, '02:15PM', '2018-04-02', 45, 33, 21, '0'),
(121, '02:30PM', '2018-04-02', 55, 67, 22, '0'),
(122, '02:45PM', '2018-04-02', 66, 45, 23, '0'),
(123, '03:00PM', '2018-04-02', 66, 11, 24, '0'),
(124, '03:15PM', '2018-04-02', 78, 22, 25, '0'),
(125, '03:30PM', '2018-04-02', 11, 42, 26, '0'),
(126, '03:45PM', '2018-04-02', 12, 45, 55, '0'),
(127, '04:00PM', '2018-04-02', 12, 76, 36, '0'),
(128, '04:15PM', '2018-04-02', 12, 45, 66, '0'),
(129, '04:30PM', '2018-04-02', 12, 87, 67, '0'),
(130, '04:45PM', '2018-04-02', 23, 44, 46, '0'),
(131, '05:00PM', '2018-04-02', 45, 56, 88, '0'),
(132, '05:15PM', '2018-04-02', 67, 37, 80, '0'),
(133, '05:30PM', '2018-04-02', 89, 46, 70, '0'),
(134, '05:45PM', '2018-04-02', 79, 18, 60, '0'),
(135, '06:00PM', '2018-04-02', 98, 28, 50, '0'),
(136, '06:15PM', '2018-04-02', 90, 29, 61, '0'),
(137, '06:30PM', '2018-04-02', 80, 28, 63, '0'),
(138, '06:45PM', '2018-04-02', 55, 26, 64, '0'),
(139, '07:00PM', '2018-04-02', 44, 23, 65, '0'),
(140, '07:15PM', '2018-04-02', 66, 34, 66, '0'),
(141, '07:30PM', '2018-04-02', 22, 45, 67, '0'),
(142, '07:45PM', '2018-04-02', 11, 67, 68, '0'),
(143, '08:00PM', '2018-04-02', 34, 56, 69, '0'),
(144, '08:15PM', '2018-04-02', 55, 22, 78, '0'),
(145, '08:30PM', '2018-04-02', 55, 34, 49, '0'),
(146, '08:45PM', '2018-04-02', 56, 56, 80, '0'),
(147, '09:00PM', '2018-04-02', 21, 65, 31, '0'),
(295, '09:00AM', '2018-04-04', 77, 58, 82, '0'),
(296, '09:15AM', '2018-04-04', 20, 14, 60, '0'),
(297, '09:30AM', '2018-04-04', 52, 56, 40, '0'),
(298, '09:45AM', '2018-04-04', 92, 15, 88, '0'),
(299, '10:00AM', '2018-04-04', 11, 54, 63, '0'),
(300, '10:15AM', '2018-04-04', 16, 68, 14, '0'),
(301, '10:30AM', '2018-04-04', 35, 14, 35, '0'),
(302, '10:45AM', '2018-04-04', 27, 35, 46, '0'),
(303, '11:00AM', '2018-04-04', 78, 67, 76, '0'),
(304, '11:15AM', '2018-04-04', 83, 83, 89, '0'),
(305, '11:30AM', '2018-04-04', 88, 76, 91, '0'),
(306, '11:45AM', '2018-04-04', 16, 18, 14, '0'),
(307, '12:00PM', '2018-04-04', 33, 46, 31, '0'),
(308, '12:15PM', '2018-04-04', 96, 49, 76, '0'),
(309, '12:30PM', '2018-04-04', 14, 25, 34, '0'),
(310, '12:45PM', '2018-04-04', 44, 17, 52, '0'),
(311, '01:00PM', '2018-04-04', 57, 55, 21, '0'),
(312, '01:15PM', '2018-04-04', 48, 96, 16, '0'),
(313, '01:30PM', '2018-04-04', 9, 2, 1, '0'),
(314, '01:45PM', '2018-04-04', 5, 4, 9, '0'),
(315, '02:00PM', '2018-04-04', 55, 33, 79, '0'),
(316, '02:15PM', '2018-04-04', 45, 92, 82, '0'),
(317, '02:30PM', '2018-04-04', 11, 58, 35, '0'),
(318, '02:45PM', '2018-04-04', 17, 67, 22, '0'),
(319, '03:00PM', '2018-04-04', 34, 34, 53, '0'),
(320, '03:15PM', '2018-04-04', 99, 45, 92, '0'),
(321, '03:30PM', '2018-04-04', 92, 12, 14, '0'),
(322, '03:45PM', '2018-04-04', 26, 27, 93, '0'),
(323, '04:00PM', '2018-04-04', 43, 53, 76, '0'),
(324, '04:15PM', '2018-04-04', 14, 29, 45, '0'),
(325, '04:30PM', '2018-04-04', 74, 95, 63, '0'),
(326, '04:45PM', '2018-04-04', 88, 65, 90, '0'),
(327, '05:00PM', '2018-04-04', 28, 73, 24, '0'),
(328, '05:15PM', '2018-04-04', 53, 13, 34, '0'),
(329, '05:30PM', '2018-04-04', 31, 24, 43, '0'),
(330, '05:45PM', '2018-04-04', 96, 56, 67, '0'),
(331, '06:00PM', '2018-04-04', 34, 44, 98, '0'),
(332, '06:15PM', '2018-04-04', 87, 31, 72, '0'),
(333, '06:30PM', '2018-04-04', 16, 20, 17, '0'),
(334, '06:45PM', '2018-04-04', 17, 43, 43, '0'),
(335, '07:00PM', '2018-04-04', 52, 57, 25, '0'),
(336, '07:15PM', '2018-04-04', 39, 89, 13, '0'),
(337, '07:30PM', '2018-04-04', 66, 99, 47, '0'),
(338, '07:45PM', '2018-04-04', 72, 42, 68, '0'),
(339, '08:00PM', '2018-04-04', 43, 11, 42, '0'),
(340, '08:15PM', '2018-04-04', 25, 37, 14, '0'),
(341, '08:30PM', '2018-04-04', 66, 52, 48, '0'),
(342, '08:45PM', '2018-04-04', 57, 99, 97, '0'),
(343, '09:00PM', '2018-04-04', 69, 15, 37, '0'),
(344, '09:00AM', '2018-04-05', 78, 62, 82, '0'),
(345, '09:15AM', '2018-04-05', 4, 82, 73, '0'),
(346, '09:30AM', '2018-04-05', 79, 83, 84, '0'),
(347, '09:45AM', '2018-04-05', 4, 72, 84, '0'),
(348, '10:00AM', '2018-04-05', 7, 97, 29, '0'),
(349, '10:15AM', '2018-04-05', 46, 73, 83, '0'),
(350, '10:30AM', '2018-04-05', 68, 84, 51, '0'),
(351, '10:45AM', '2018-04-05', 9, 82, 74, '0'),
(352, '11:00AM', '2018-04-05', 46, 91, 47, '0'),
(353, '11:15AM', '2018-04-05', 67, 64, 84, '0'),
(354, '11:30AM', '2018-04-05', 43, 73, 82, '0'),
(355, '11:45AM', '2018-04-05', 88, 92, 84, '0'),
(356, '12:00PM', '2018-04-05', 79, 41, 48, '0'),
(357, '12:15PM', '2018-04-05', 36, 67, 29, '0'),
(358, '12:30PM', '2018-04-05', 9, 92, 74, '0'),
(359, '12:45PM', '2018-04-05', 34, 13, 89, '0'),
(360, '01:00PM', '2018-04-05', 79, 83, 85, '0'),
(361, '01:15PM', '2018-04-05', 79, 83, 11, '0'),
(362, '01:30PM', '2018-04-05', 68, 8, 97, '0'),
(363, '01:45PM', '2018-04-05', 78, 61, 63, '0'),
(364, '02:00PM', '2018-04-05', 76, 72, 73, '0'),
(365, '02:15PM', '2018-04-05', 68, 81, 73, '0'),
(366, '02:30PM', '2018-04-05', 65, 91, 84, '0'),
(367, '02:45PM', '2018-04-05', 90, 73, 73, '0'),
(368, '03:00PM', '2018-04-05', 78, 92, 73, '0'),
(369, '03:15PM', '2018-04-05', 55, 82, 18, '0'),
(370, '03:30PM', '2018-04-05', 58, 62, 83, '0'),
(371, '03:45PM', '2018-04-05', 58, 53, 91, '0'),
(372, '04:00PM', '2018-04-05', 68, 72, 77, '0'),
(373, '04:15PM', '2018-04-05', 46, 43, 92, '0'),
(374, '04:30PM', '2018-04-05', 78, 91, 63, '0'),
(375, '04:45PM', '2018-04-05', 79, 64, 74, '0'),
(376, '05:00PM', '2018-04-05', 46, 63, 72, '0'),
(377, '05:15PM', '2018-04-05', 36, 83, 84, '0'),
(378, '05:30PM', '2018-04-05', 79, 92, 73, '0'),
(379, '05:45PM', '2018-04-05', 68, 72, 84, '0'),
(380, '06:00PM', '2018-04-05', 7, 74, 91, '0'),
(381, '06:15PM', '2018-04-05', 36, 41, 83, '0'),
(382, '06:30PM', '2018-04-05', 78, 94, 74, '0'),
(383, '06:45PM', '2018-04-05', 90, 47, 93, '0'),
(384, '07:00PM', '2018-04-05', 89, 73, 82, '0'),
(385, '07:15PM', '2018-04-05', 64, 62, 91, '0'),
(386, '07:30PM', '2018-04-05', 37, 91, 3, '0'),
(387, '07:45PM', '2018-04-05', 99, 63, 83, '0'),
(388, '08:00PM', '2018-04-05', 85, 91, 74, '0'),
(389, '08:15PM', '2018-04-05', 82, 46, 92, '0'),
(390, '08:30PM', '2018-04-05', 93, 93, 1, '0'),
(391, '08:45PM', '2018-04-05', 52, 99, 83, '0'),
(392, '09:00PM', '2018-04-05', 63, 91, 80, '0'),
(393, '09:00AM', '2018-04-06', 7, 4, 9, '0'),
(394, '09:15AM', '2018-04-06', 7, 57, 74, '0'),
(395, '09:30AM', '2018-04-06', 5, 8, 52, '0'),
(396, '09:45AM', '2018-04-06', 67, 2, 1, '0'),
(397, '10:00AM', '2018-04-06', 55, 77, 4, '0'),
(398, '10:15AM', '2018-04-06', 7, 19, 64, '0'),
(399, '10:30AM', '2018-04-06', 6, 14, 3, '0'),
(400, '10:45AM', '2018-04-06', 56, 28, 91, '0'),
(401, '11:00AM', '2018-04-06', 45, 35, 72, '0'),
(402, '11:15AM', '2018-04-06', 49, 46, 52, '0'),
(403, '11:30AM', '2018-04-06', 57, 54, 62, '0'),
(404, '11:45AM', '2018-04-06', 46, 69, 71, '0'),
(405, '12:00PM', '2018-04-06', 96, 76, 28, '0'),
(406, '12:15PM', '2018-04-06', 57, 83, 82, '0'),
(407, '12:30PM', '2018-04-06', 56, 99, 38, '0'),
(408, '12:45PM', '2018-04-06', 89, 72, 62, '0'),
(409, '01:00PM', '2018-04-06', 57, 72, 69, '0'),
(410, '01:15PM', '2018-04-06', 67, 91, 16, '0'),
(411, '01:30PM', '2018-04-06', 46, 71, 72, '0'),
(412, '01:45PM', '2018-04-06', 67, 83, 77, '0'),
(413, '02:00PM', '2018-04-06', 57, 18, 26, '0'),
(414, '02:15PM', '2018-04-06', 46, 59, 64, '0'),
(415, '02:30PM', '2018-04-06', 67, 16, 97, '0'),
(416, '02:45PM', '2018-04-06', 46, 74, 81, '0'),
(417, '03:00PM', '2018-04-06', 85, 61, 77, '0'),
(418, '03:15PM', '2018-04-06', 58, 39, 38, '0'),
(419, '03:30PM', '2018-04-06', 97, 49, 62, '0'),
(420, '03:45PM', '2018-04-06', 67, 17, 65, '0'),
(421, '04:00PM', '2018-04-06', 56, 37, 64, '0'),
(422, '04:15PM', '2018-04-06', 86, 78, 83, '0'),
(423, '04:30PM', '2018-04-06', 68, 62, 84, '0'),
(424, '04:45PM', '2018-04-06', 68, 94, 65, '0'),
(425, '05:00PM', '2018-04-06', 46, 64, 28, '0'),
(426, '05:15PM', '2018-04-06', 99, 72, 37, '0'),
(427, '05:30PM', '2018-04-06', 78, 84, 46, '0'),
(428, '05:45PM', '2018-04-06', 46, 91, 19, '0'),
(429, '06:00PM', '2018-04-06', 92, 92, 83, '0'),
(430, '06:15PM', '2018-04-06', 23, 48, 49, '0'),
(431, '06:30PM', '2018-04-06', 67, 72, 92, '0'),
(432, '06:45PM', '2018-04-06', 44, 79, 79, '0'),
(433, '07:00PM', '2018-04-06', 25, 17, 73, '0'),
(434, '07:15PM', '2018-04-06', 79, 64, 74, '0'),
(435, '07:30PM', '2018-04-06', 57, 71, 63, '0'),
(436, '07:45PM', '2018-04-06', 78, 92, 61, '0'),
(437, '08:00PM', '2018-04-06', 46, 64, 84, '0'),
(438, '08:15PM', '2018-04-06', 25, 91, 86, '0'),
(439, '08:30PM', '2018-04-06', 97, 62, 81, '0'),
(440, '08:45PM', '2018-04-06', 57, 1, 88, '0'),
(441, '09:00PM', '2018-04-06', 4, 64, 1, '0'),
(442, '09:00AM', '2018-04-07', 2, 1, 2, '0'),
(443, '09:15AM', '2018-04-07', 63, 83, 82, '0'),
(444, '09:30AM', '2018-04-07', 82, 73, 73, '0'),
(445, '09:45AM', '2018-04-07', 61, 73, 92, '0'),
(446, '10:00AM', '2018-04-07', 62, 89, 83, '0'),
(447, '10:15AM', '2018-04-07', 93, 63, 2, '0'),
(448, '10:30AM', '2018-04-07', 62, 62, 73, '0'),
(449, '10:45AM', '2018-04-07', 63, 63, 63, '0'),
(450, '11:00AM', '2018-04-07', 2, 92, 64, '0'),
(451, '11:15AM', '2018-04-07', 0, 70, 82, '1'),
(452, '11:30AM', '2018-04-07', 73, 73, 72, '0'),
(453, '11:45AM', '2018-04-07', 72, 62, 93, '0'),
(454, '12:00PM', '2018-04-07', 53, 62, 73, '0'),
(455, '12:15PM', '2018-04-07', 72, 1, 64, '0'),
(456, '12:30PM', '2018-04-07', 2, 63, 92, '0'),
(457, '12:45PM', '2018-04-07', 63, 73, 63, '0'),
(458, '01:00PM', '2018-04-07', 73, 62, 63, '0'),
(459, '01:15PM', '2018-04-07', 82, 93, 68, '0'),
(460, '01:30PM', '2018-04-07', 93, 63, 72, '0'),
(461, '01:45PM', '2018-04-07', 63, 73, 62, '0'),
(462, '02:00PM', '2018-04-07', 37, 9, 68, '0'),
(463, '02:15PM', '2018-04-07', 63, 72, 62, '0'),
(464, '02:30PM', '2018-04-07', 92, 62, 71, '0'),
(465, '02:45PM', '2018-04-07', 39, 91, 83, '0'),
(466, '03:00PM', '2018-04-07', 73, 62, 73, '0'),
(467, '03:15PM', '2018-04-07', 82, 72, 39, '0'),
(468, '03:30PM', '2018-04-07', 73, 73, 63, '0'),
(469, '03:45PM', '2018-04-07', 63, 87, 63, '0'),
(470, '04:00PM', '2018-04-07', 73, 73, 92, '0'),
(471, '04:15PM', '2018-04-07', 2, 72, 63, '0'),
(472, '04:30PM', '2018-04-07', 63, 41, 62, '0'),
(473, '04:45PM', '2018-04-07', 73, 83, 92, '0'),
(474, '05:00PM', '2018-04-07', 92, 63, 64, '0'),
(475, '05:15PM', '2018-04-07', 63, 92, 63, '0'),
(476, '05:30PM', '2018-04-07', 63, 73, 36, '0'),
(477, '05:45PM', '2018-04-07', 83, 90, 63, '0'),
(478, '06:00PM', '2018-04-07', 72, 61, 82, '0'),
(479, '06:15PM', '2018-04-07', 79, 28, 96, '0'),
(480, '06:30PM', '2018-04-07', 31, 73, 82, '0'),
(481, '06:45PM', '2018-04-07', 83, 27, 52, '0'),
(482, '07:00PM', '2018-04-07', 93, 36, 37, '0'),
(483, '07:15PM', '2018-04-07', 63, 48, 28, '0'),
(484, '07:30PM', '2018-04-07', 62, 57, 18, '0'),
(485, '07:45PM', '2018-04-07', 3, 67, 84, '0'),
(486, '08:00PM', '2018-04-07', 52, 71, 52, '0'),
(487, '08:15PM', '2018-04-07', 82, 82, 48, '0'),
(488, '08:30PM', '2018-04-07', 63, 93, 50, '0'),
(489, '08:45PM', '2018-04-07', 82, 0, 92, '0'),
(490, '09:00PM', '2018-04-07', 72, 10, 10, '0');

-- --------------------------------------------------------

--
-- Table structure for table `lottery_time`
--

CREATE TABLE `lottery_time` (
  `id` int(11) NOT NULL,
  `timee` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lottery_time`
--

INSERT INTO `lottery_time` (`id`, `timee`) VALUES
(1, '09:00AM'),
(2, '09:15AM'),
(3, '09:30AM'),
(4, '09:45AM'),
(5, '10:00AM'),
(6, '10:15AM'),
(7, '10:30AM'),
(8, '10:45AM'),
(9, '11:00AM'),
(10, '11:15AM'),
(11, '11:30AM'),
(12, '11:45AM'),
(13, '12:00PM'),
(14, '12:15PM'),
(15, '12:30PM'),
(16, '12:45PM'),
(17, '01:00PM'),
(18, '01:15PM'),
(19, '01:30PM'),
(20, '01:45PM'),
(21, '02:00PM'),
(22, '02:15PM'),
(23, '02:30PM'),
(24, '02:45PM'),
(25, '03:00PM'),
(26, '03:15PM'),
(27, '03:30PM'),
(28, '03:45PM'),
(29, '04:00PM'),
(30, '04:15PM'),
(31, '04:30PM'),
(32, '04:45PM'),
(33, '05:00PM'),
(34, '05:15PM'),
(35, '05:30PM'),
(36, '05:45PM'),
(37, '06:00PM'),
(38, '06:15PM'),
(39, '06:30PM'),
(40, '06:45PM'),
(41, '07:00PM'),
(42, '07:15PM'),
(43, '07:30PM'),
(44, '07:45PM'),
(45, '08:00PM'),
(46, '08:15PM'),
(47, '08:30PM'),
(48, '08:45PM'),
(49, '09:00PM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'lottery_admin', '$2y$12$qCM0S1fR.wzWerkmUFAsi.VFST0rpdP3MvuVX9INlQ5OgKYicz7J2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lottery_list`
--
ALTER TABLE `lottery_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lottery_time`
--
ALTER TABLE `lottery_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lottery_list`
--
ALTER TABLE `lottery_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=491;

--
-- AUTO_INCREMENT for table `lottery_time`
--
ALTER TABLE `lottery_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
