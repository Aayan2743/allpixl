-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 03:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leadmanagmentsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `actid` bigint(20) UNSIGNED NOT NULL,
  `leadid` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`actid`, `leadid`, `name`, `message`, `updated`) VALUES
(30, 25, 'Email', 'Email Done with client', '2024-02-09 07:00:51'),
(31, 25, 'Call', 'Call Done with client', '2024-02-09 07:01:51'),
(32, 25, 'Email', 'Email Done with client', '2024-02-09 09:25:14'),
(33, 25, 'Call', 'Call Done with client', '2024-02-09 09:36:23'),
(34, 25, 'Call', 'Call Done with client', '2024-02-09 10:11:23'),
(35, 30, 'Email', 'Email Done with client', '2024-02-09 13:28:14'),
(36, 35, 'Email', 'Email Done with client', '2024-02-12 10:48:34'),
(37, 35, 'Call', 'Call Done with client', '2024-02-12 10:49:07'),
(38, 34, 'Call', 'Call Done with client', '2024-02-12 12:13:04'),
(39, 34, 'Call', 'Call Done with client', '2024-02-12 12:13:47'),
(40, 34, 'Email', 'Email Done with client', '2024-02-12 12:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `city_state` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `city_state`) VALUES
(1, 'Kolhapur', 'Maharashtra'),
(2, 'Port Blair', 'Andaman & Nicobar Islands'),
(3, 'Adilabad', 'Telangana'),
(4, 'Adoni', 'Andhra Pradesh'),
(5, 'Amadalavalasa', 'Andhra Pradesh'),
(6, 'Amalapuram', 'Andhra Pradesh'),
(7, 'Anakapalle', 'Andhra Pradesh'),
(8, 'Anantapur', 'Andhra Pradesh'),
(9, 'Badepalle', 'Andhra Pradesh'),
(10, 'Banganapalle', 'Andhra Pradesh'),
(11, 'Bapatla', 'Andhra Pradesh'),
(12, 'Bellampalle', 'Andhra Pradesh'),
(13, 'Bethamcherla', 'Andhra Pradesh'),
(14, 'Bhadrachalam', 'Andhra Pradesh'),
(15, 'Bhainsa', 'Andhra Pradesh'),
(16, 'Bheemunipatnam', 'Andhra Pradesh'),
(17, 'Bhimavaram', 'Andhra Pradesh'),
(18, 'Bhongir', 'Andhra Pradesh'),
(19, 'Bobbili', 'Andhra Pradesh'),
(20, 'Bodhan', 'Andhra Pradesh'),
(21, 'Chilakaluripet', 'Andhra Pradesh'),
(22, 'Chirala', 'Andhra Pradesh'),
(23, 'Chittoor', 'Andhra Pradesh'),
(24, 'Cuddapah', 'Andhra Pradesh'),
(25, 'Devarakonda', 'Andhra Pradesh'),
(26, 'Dharmavaram', 'Andhra Pradesh'),
(27, 'Eluru', 'Andhra Pradesh'),
(28, 'Farooqnagar', 'Andhra Pradesh'),
(29, 'Gadwal', 'Andhra Pradesh'),
(30, 'Gooty', 'Andhra Pradesh'),
(31, 'Gudivada', 'Andhra Pradesh'),
(32, 'Gudur', 'Andhra Pradesh'),
(33, 'Guntakal', 'Andhra Pradesh'),
(34, 'Guntur', 'Andhra Pradesh'),
(35, 'Hanuman Junction', 'Andhra Pradesh'),
(36, 'Hindupur', 'Andhra Pradesh'),
(37, 'Hyderabad', 'Andhra Pradesh'),
(38, 'Ichchapuram', 'Andhra Pradesh'),
(39, 'Jaggaiahpet', 'Andhra Pradesh'),
(40, 'Jagtial', 'Andhra Pradesh'),
(41, 'Jammalamadugu', 'Andhra Pradesh'),
(42, 'Jangaon', 'Andhra Pradesh'),
(43, 'Kadapa', 'Andhra Pradesh'),
(44, 'Kadiri', 'Andhra Pradesh'),
(45, 'Kagaznagar', 'Andhra Pradesh'),
(46, 'Kakinada', 'Andhra Pradesh'),
(47, 'Kalyandurg', 'Andhra Pradesh'),
(48, 'Kamareddy', 'Andhra Pradesh'),
(49, 'Kandukur', 'Andhra Pradesh'),
(50, 'Karimnagar', 'Andhra Pradesh'),
(51, 'Kavali', 'Andhra Pradesh'),
(52, 'Khammam', 'Andhra Pradesh'),
(53, 'Koratla', 'Andhra Pradesh'),
(54, 'Kothagudem', 'Andhra Pradesh'),
(55, 'Kothapeta', 'Andhra Pradesh'),
(56, 'Kovvur', 'Andhra Pradesh'),
(57, 'Kurnool', 'Andhra Pradesh'),
(58, 'Kyathampalle', 'Andhra Pradesh'),
(59, 'Macherla', 'Andhra Pradesh'),
(60, 'Machilipatnam', 'Andhra Pradesh'),
(61, 'Madanapalle', 'Andhra Pradesh'),
(62, 'Mahbubnagar', 'Andhra Pradesh'),
(63, 'Mancherial', 'Andhra Pradesh'),
(64, 'Mandamarri', 'Andhra Pradesh'),
(65, 'Mandapeta', 'Andhra Pradesh'),
(66, 'Manuguru', 'Andhra Pradesh'),
(67, 'Markapur', 'Andhra Pradesh'),
(68, 'Medak', 'Andhra Pradesh'),
(69, 'Miryalaguda', 'Andhra Pradesh'),
(70, 'Mogalthur', 'Andhra Pradesh'),
(71, 'Nagari', 'Andhra Pradesh'),
(72, 'Nagarkurnool', 'Andhra Pradesh'),
(73, 'Nandyal', 'Andhra Pradesh'),
(74, 'Narasapur', 'Andhra Pradesh'),
(75, 'Narasaraopet', 'Andhra Pradesh'),
(76, 'Narayanpet', 'Andhra Pradesh'),
(77, 'Narsipatnam', 'Andhra Pradesh'),
(78, 'Nellore', 'Andhra Pradesh'),
(79, 'Nidadavole', 'Andhra Pradesh'),
(80, 'Nirmal', 'Andhra Pradesh'),
(81, 'Nizamabad', 'Andhra Pradesh'),
(82, 'Nuzvid', 'Andhra Pradesh'),
(83, 'Ongole', 'Andhra Pradesh'),
(84, 'Palacole', 'Andhra Pradesh'),
(85, 'Palasa Kasibugga', 'Andhra Pradesh'),
(86, 'Palwancha', 'Andhra Pradesh'),
(87, 'Parvathipuram', 'Andhra Pradesh'),
(88, 'Pedana', 'Andhra Pradesh'),
(89, 'Peddapuram', 'Andhra Pradesh'),
(90, 'Pithapuram', 'Andhra Pradesh'),
(91, 'Pondur', 'Andhra pradesh'),
(92, 'Ponnur', 'Andhra Pradesh'),
(93, 'Proddatur', 'Andhra Pradesh'),
(94, 'Punganur', 'Andhra Pradesh'),
(95, 'Puttur', 'Andhra Pradesh'),
(96, 'Rajahmundry', 'Andhra Pradesh'),
(97, 'Rajam', 'Andhra Pradesh'),
(98, 'Ramachandrapuram', 'Andhra Pradesh'),
(99, 'Ramagundam', 'Andhra Pradesh'),
(100, 'Rayachoti', 'Andhra Pradesh'),
(101, 'Rayadurg', 'Andhra Pradesh'),
(102, 'Renigunta', 'Andhra Pradesh'),
(103, 'Repalle', 'Andhra Pradesh'),
(104, 'Sadasivpet', 'Andhra Pradesh'),
(105, 'Salur', 'Andhra Pradesh'),
(106, 'Samalkot', 'Andhra Pradesh'),
(107, 'Sangareddy', 'Andhra Pradesh'),
(108, 'Sattenapalle', 'Andhra Pradesh'),
(109, 'Siddipet', 'Andhra Pradesh'),
(110, 'Singapur', 'Andhra Pradesh'),
(111, 'Sircilla', 'Andhra Pradesh'),
(112, 'Srikakulam', 'Andhra Pradesh'),
(113, 'Srikalahasti', 'Andhra Pradesh'),
(115, 'Suryapet', 'Andhra Pradesh'),
(116, 'Tadepalligudem', 'Andhra Pradesh'),
(117, 'Tadpatri', 'Andhra Pradesh'),
(118, 'Tandur', 'Andhra Pradesh'),
(119, 'Tanuku', 'Andhra Pradesh'),
(120, 'Tenali', 'Andhra Pradesh'),
(121, 'Tirupati', 'Andhra Pradesh'),
(122, 'Tuni', 'Andhra Pradesh'),
(123, 'Uravakonda', 'Andhra Pradesh'),
(124, 'Venkatagiri', 'Andhra Pradesh'),
(125, 'Vicarabad', 'Andhra Pradesh'),
(126, 'Vijayawada', 'Andhra Pradesh'),
(127, 'Vinukonda', 'Andhra Pradesh'),
(128, 'Visakhapatnam', 'Andhra Pradesh'),
(129, 'Vizianagaram', 'Andhra Pradesh'),
(130, 'Wanaparthy', 'Andhra Pradesh'),
(131, 'Warangal', 'Andhra Pradesh'),
(132, 'Yellandu', 'Andhra Pradesh'),
(133, 'Yemmiganur', 'Andhra Pradesh'),
(134, 'Yerraguntla', 'Andhra Pradesh'),
(135, 'Zahirabad', 'Andhra Pradesh'),
(136, 'Rajampet', 'Andhra Pradesh'),
(137, 'Along', 'Arunachal Pradesh'),
(138, 'Bomdila', 'Arunachal Pradesh'),
(139, 'Itanagar', 'Arunachal Pradesh'),
(140, 'Naharlagun', 'Arunachal Pradesh'),
(141, 'Pasighat', 'Arunachal Pradesh'),
(142, 'Abhayapuri', 'Assam'),
(143, 'Amguri', 'Assam'),
(144, 'Anandnagaar', 'Assam'),
(145, 'Barpeta', 'Assam'),
(146, 'Barpeta Road', 'Assam'),
(147, 'Bilasipara', 'Assam'),
(148, 'Bongaigaon', 'Assam'),
(149, 'Dhekiajuli', 'Assam'),
(150, 'Dhubri', 'Assam'),
(151, 'Dibrugarh', 'Assam'),
(152, 'Digboi', 'Assam'),
(153, 'Diphu', 'Assam'),
(154, 'Dispur', 'Assam'),
(156, 'Gauripur', 'Assam'),
(157, 'Goalpara', 'Assam'),
(158, 'Golaghat', 'Assam'),
(159, 'Guwahati', 'Assam'),
(160, 'Haflong', 'Assam'),
(161, 'Hailakandi', 'Assam'),
(162, 'Hojai', 'Assam'),
(163, 'Jorhat', 'Assam'),
(164, 'Karimganj', 'Assam'),
(165, 'Kokrajhar', 'Assam'),
(166, 'Lanka', 'Assam'),
(167, 'Lumding', 'Assam'),
(168, 'Mangaldoi', 'Assam'),
(169, 'Mankachar', 'Assam'),
(170, 'Margherita', 'Assam'),
(171, 'Mariani', 'Assam'),
(172, 'Marigaon', 'Assam'),
(173, 'Nagaon', 'Assam'),
(174, 'Nalbari', 'Assam'),
(175, 'North Lakhimpur', 'Assam'),
(176, 'Rangia', 'Assam'),
(177, 'Sibsagar', 'Assam'),
(178, 'Silapathar', 'Assam'),
(179, 'Silchar', 'Assam'),
(180, 'Tezpur', 'Assam'),
(181, 'Tinsukia', 'Assam'),
(182, 'Amarpur', 'Bihar'),
(183, 'Araria', 'Bihar'),
(184, 'Areraj', 'Bihar'),
(185, 'Arrah', 'Bihar'),
(186, 'Asarganj', 'Bihar'),
(187, 'Aurangabad', 'Bihar'),
(188, 'Bagaha', 'Bihar'),
(189, 'Bahadurganj', 'Bihar'),
(190, 'Bairgania', 'Bihar'),
(191, 'Bakhtiarpur', 'Bihar'),
(192, 'Banka', 'Bihar'),
(193, 'Banmankhi Bazar', 'Bihar'),
(194, 'Barahiya', 'Bihar'),
(195, 'Barauli', 'Bihar'),
(196, 'Barbigha', 'Bihar'),
(197, 'Barh', 'Bihar'),
(198, 'Begusarai', 'Bihar'),
(199, 'Behea', 'Bihar'),
(200, 'Bettiah', 'Bihar'),
(201, 'Bhabua', 'Bihar'),
(202, 'Bhagalpur', 'Bihar'),
(203, 'Bihar Sharif', 'Bihar'),
(204, 'Bikramganj', 'Bihar'),
(205, 'Bodh Gaya', 'Bihar'),
(206, 'Buxar', 'Bihar'),
(207, 'Chandan Bara', 'Bihar'),
(208, 'Chanpatia', 'Bihar'),
(209, 'Chhapra', 'Bihar'),
(210, 'Colgong', 'Bihar'),
(211, 'Dalsinghsarai', 'Bihar'),
(212, 'Darbhanga', 'Bihar'),
(213, 'Daudnagar', 'Bihar'),
(214, 'Dehri-on-Sone', 'Bihar'),
(215, 'Dhaka', 'Bihar'),
(216, 'Dighwara', 'Bihar'),
(217, 'Dumraon', 'Bihar'),
(218, 'Fatwah', 'Bihar'),
(219, 'Forbesganj', 'Bihar'),
(220, 'Gaya', 'Bihar'),
(221, 'Gogri Jamalpur', 'Bihar'),
(222, 'Gopalganj', 'Bihar'),
(223, 'Hajipur', 'Bihar'),
(224, 'Hilsa', 'Bihar'),
(225, 'Hisua', 'Bihar'),
(226, 'Islampur', 'Bihar'),
(227, 'Jagdispur', 'Bihar'),
(228, 'Jamalpur', 'Bihar'),
(229, 'Jamui', 'Bihar'),
(230, 'Jehanabad', 'Bihar'),
(231, 'Jhajha', 'Bihar'),
(232, 'Jhanjharpur', 'Bihar'),
(233, 'Jogabani', 'Bihar'),
(234, 'Kanti', 'Bihar'),
(235, 'Katihar', 'Bihar'),
(236, 'Khagaria', 'Bihar'),
(237, 'Kharagpur', 'Bihar'),
(238, 'Kishanganj', 'Bihar'),
(239, 'Lakhisarai', 'Bihar'),
(240, 'Lalganj', 'Bihar'),
(241, 'Madhepura', 'Bihar'),
(242, 'Madhubani', 'Bihar'),
(243, 'Maharajganj', 'Bihar'),
(244, 'Mahnar Bazar', 'Bihar'),
(245, 'Makhdumpur', 'Bihar'),
(246, 'Maner', 'Bihar'),
(247, 'Manihari', 'Bihar'),
(248, 'Marhaura', 'Bihar'),
(249, 'Masaurhi', 'Bihar'),
(250, 'Mirganj', 'Bihar'),
(251, 'Mokameh', 'Bihar'),
(252, 'Motihari', 'Bihar'),
(253, 'Motipur', 'Bihar'),
(254, 'Munger', 'Bihar'),
(255, 'Murliganj', 'Bihar'),
(256, 'Muzaffarpur', 'Bihar'),
(257, 'Narkatiaganj', 'Bihar'),
(258, 'Naugachhia', 'Bihar'),
(259, 'Nawada', 'Bihar'),
(260, 'Nokha', 'Bihar'),
(261, 'Patna', 'Bihar'),
(262, 'Piro', 'Bihar'),
(263, 'Purnia', 'Bihar'),
(264, 'Rafiganj', 'Bihar'),
(265, 'Rajgir', 'Bihar'),
(266, 'Ramnagar', 'Bihar'),
(267, 'Raxaul Bazar', 'Bihar'),
(268, 'Revelganj', 'Bihar'),
(269, 'Rosera', 'Bihar'),
(270, 'Saharsa', 'Bihar'),
(271, 'Samastipur', 'Bihar'),
(272, 'Sasaram', 'Bihar'),
(273, 'Sheikhpura', 'Bihar'),
(274, 'Sheohar', 'Bihar'),
(275, 'Sherghati', 'Bihar'),
(276, 'Silao', 'Bihar'),
(277, 'Sitamarhi', 'Bihar'),
(278, 'Siwan', 'Bihar'),
(279, 'Sonepur', 'Bihar'),
(280, 'Sugauli', 'Bihar'),
(281, 'Sultanganj', 'Bihar'),
(282, 'Supaul', 'Bihar'),
(283, 'Warisaliganj', 'Bihar'),
(284, 'Ahiwara', 'Chhattisgarh'),
(285, 'Akaltara', 'Chhattisgarh'),
(286, 'Ambagarh Chowki', 'Chhattisgarh'),
(287, 'Ambikapur', 'Chhattisgarh'),
(288, 'Arang', 'Chhattisgarh'),
(289, 'Bade Bacheli', 'Chhattisgarh'),
(290, 'Balod', 'Chhattisgarh'),
(291, 'Baloda Bazar', 'Chhattisgarh'),
(292, 'Bemetra', 'Chhattisgarh'),
(293, 'Bhatapara', 'Chhattisgarh'),
(294, 'Bilaspur', 'Chhattisgarh'),
(295, 'Birgaon', 'Chhattisgarh'),
(296, 'Champa', 'Chhattisgarh'),
(297, 'Chirmiri', 'Chhattisgarh'),
(298, 'Dalli-Rajhara', 'Chhattisgarh'),
(299, 'Dhamtari', 'Chhattisgarh'),
(300, 'Dipka', 'Chhattisgarh'),
(301, 'Dongargarh', 'Chhattisgarh'),
(302, 'Durg-Bhilai Nagar', 'Chhattisgarh'),
(303, 'Gobranawapara', 'Chhattisgarh'),
(304, 'Jagdalpur', 'Chhattisgarh'),
(305, 'Janjgir', 'Chhattisgarh'),
(306, 'Jashpurnagar', 'Chhattisgarh'),
(307, 'Kanker', 'Chhattisgarh'),
(308, 'Kawardha', 'Chhattisgarh'),
(309, 'Kondagaon', 'Chhattisgarh'),
(310, 'Korba', 'Chhattisgarh'),
(311, 'Mahasamund', 'Chhattisgarh'),
(312, 'Mahendragarh', 'Chhattisgarh'),
(313, 'Mungeli', 'Chhattisgarh'),
(314, 'Naila Janjgir', 'Chhattisgarh'),
(315, 'Raigarh', 'Chhattisgarh'),
(316, 'Raipur', 'Chhattisgarh'),
(317, 'Rajnandgaon', 'Chhattisgarh'),
(318, 'Sakti', 'Chhattisgarh'),
(319, 'Tilda Newra', 'Chhattisgarh'),
(320, 'Amli', 'Dadra & Nagar Haveli'),
(321, 'Silvassa', 'Dadra & Nagar Haveli'),
(322, 'Daman and Diu', 'Daman & Diu'),
(323, 'Daman and Diu', 'Daman & Diu'),
(324, 'Asola', 'Delhi'),
(325, 'Delhi', 'Delhi'),
(326, 'Aldona', 'Goa'),
(327, 'Curchorem Cacora', 'Goa'),
(328, 'Madgaon', 'Goa'),
(329, 'Mapusa', 'Goa'),
(330, 'Margao', 'Goa'),
(331, 'Marmagao', 'Goa'),
(332, 'Panaji', 'Goa'),
(333, 'Ahmedabad', 'Gujarat'),
(334, 'Amreli', 'Gujarat'),
(335, 'Anand', 'Gujarat'),
(336, 'Ankleshwar', 'Gujarat'),
(337, 'Bharuch', 'Gujarat'),
(338, 'Bhavnagar', 'Gujarat'),
(339, 'Bhuj', 'Gujarat'),
(340, 'Cambay', 'Gujarat'),
(341, 'Dahod', 'Gujarat'),
(342, 'Deesa', 'Gujarat'),
(343, 'Dharampur', ' India'),
(344, 'Dholka', 'Gujarat'),
(345, 'Gandhinagar', 'Gujarat'),
(346, 'Godhra', 'Gujarat'),
(347, 'Himatnagar', 'Gujarat'),
(348, 'Idar', 'Gujarat'),
(349, 'Jamnagar', 'Gujarat'),
(350, 'Junagadh', 'Gujarat'),
(351, 'Kadi', 'Gujarat'),
(352, 'Kalavad', 'Gujarat'),
(353, 'Kalol', 'Gujarat'),
(354, 'Kapadvanj', 'Gujarat'),
(355, 'Karjan', 'Gujarat'),
(356, 'Keshod', 'Gujarat'),
(357, 'Khambhalia', 'Gujarat'),
(358, 'Khambhat', 'Gujarat'),
(359, 'Kheda', 'Gujarat'),
(360, 'Khedbrahma', 'Gujarat'),
(361, 'Kheralu', 'Gujarat'),
(362, 'Kodinar', 'Gujarat'),
(363, 'Lathi', 'Gujarat'),
(364, 'Limbdi', 'Gujarat'),
(365, 'Lunawada', 'Gujarat'),
(366, 'Mahesana', 'Gujarat'),
(367, 'Mahuva', 'Gujarat'),
(368, 'Manavadar', 'Gujarat'),
(369, 'Mandvi', 'Gujarat'),
(370, 'Mangrol', 'Gujarat'),
(371, 'Mansa', 'Gujarat'),
(372, 'Mehmedabad', 'Gujarat'),
(373, 'Modasa', 'Gujarat'),
(374, 'Morvi', 'Gujarat'),
(375, 'Nadiad', 'Gujarat'),
(376, 'Navsari', 'Gujarat'),
(377, 'Padra', 'Gujarat'),
(378, 'Palanpur', 'Gujarat'),
(379, 'Palitana', 'Gujarat'),
(380, 'Pardi', 'Gujarat'),
(381, 'Patan', 'Gujarat'),
(382, 'Petlad', 'Gujarat'),
(383, 'Porbandar', 'Gujarat'),
(384, 'Radhanpur', 'Gujarat'),
(385, 'Rajkot', 'Gujarat'),
(386, 'Rajpipla', 'Gujarat'),
(387, 'Rajula', 'Gujarat'),
(388, 'Ranavav', 'Gujarat'),
(389, 'Rapar', 'Gujarat'),
(390, 'Salaya', 'Gujarat'),
(391, 'Sanand', 'Gujarat'),
(392, 'Savarkundla', 'Gujarat'),
(393, 'Sidhpur', 'Gujarat'),
(394, 'Sihor', 'Gujarat'),
(395, 'Songadh', 'Gujarat'),
(396, 'Surat', 'Gujarat'),
(397, 'Talaja', 'Gujarat'),
(398, 'Thangadh', 'Gujarat'),
(399, 'Tharad', 'Gujarat'),
(400, 'Umbergaon', 'Gujarat'),
(401, 'Umreth', 'Gujarat'),
(402, 'Una', 'Gujarat'),
(403, 'Unjha', 'Gujarat'),
(404, 'Upleta', 'Gujarat'),
(405, 'Vadnagar', 'Gujarat'),
(406, 'Vadodara', 'Gujarat'),
(407, 'Valsad', 'Gujarat'),
(408, 'Vapi', 'Gujarat'),
(409, 'Vapi', 'Gujarat'),
(410, 'Veraval', 'Gujarat'),
(411, 'Vijapur', 'Gujarat'),
(412, 'Viramgam', 'Gujarat'),
(413, 'Visnagar', 'Gujarat'),
(414, 'Vyara', 'Gujarat'),
(415, 'Wadhwan', 'Gujarat'),
(416, 'Wankaner', 'Gujarat'),
(417, 'Adalaj', 'Gujrat'),
(418, 'Adityana', 'Gujrat'),
(419, 'Alang', 'Gujrat'),
(420, 'Ambaji', 'Gujrat'),
(421, 'Ambaliyasan', 'Gujrat'),
(422, 'Andada', 'Gujrat'),
(423, 'Anjar', 'Gujrat'),
(424, 'Anklav', 'Gujrat'),
(425, 'Antaliya', 'Gujrat'),
(426, 'Arambhada', 'Gujrat'),
(427, 'Atul', 'Gujrat'),
(428, 'Ballabhgarh', 'Hariyana'),
(429, 'Ambala', 'Haryana'),
(430, 'Ambala', 'Haryana'),
(431, 'Asankhurd', 'Haryana'),
(432, 'Assandh', 'Haryana'),
(433, 'Ateli', 'Haryana'),
(434, 'Babiyal', 'Haryana'),
(435, 'Bahadurgarh', 'Haryana'),
(436, 'Barwala', 'Haryana'),
(437, 'Bhiwani', 'Haryana'),
(438, 'Charkhi Dadri', 'Haryana'),
(439, 'Cheeka', 'Haryana'),
(440, 'Ellenabad 2', 'Haryana'),
(441, 'Faridabad', 'Haryana'),
(442, 'Fatehabad', 'Haryana'),
(443, 'Ganaur', 'Haryana'),
(444, 'Gharaunda', 'Haryana'),
(445, 'Gohana', 'Haryana'),
(446, 'Gurgaon', 'Haryana'),
(447, 'Haibat(Yamuna Nagar)', 'Haryana'),
(448, 'Hansi', 'Haryana'),
(449, 'Hisar', 'Haryana'),
(450, 'Hodal', 'Haryana'),
(451, 'Jhajjar', 'Haryana'),
(452, 'Jind', 'Haryana'),
(453, 'Kaithal', 'Haryana'),
(454, 'Kalan Wali', 'Haryana'),
(455, 'Kalka', 'Haryana'),
(456, 'Karnal', 'Haryana'),
(457, 'Ladwa', 'Haryana'),
(458, 'Mahendragarh', 'Haryana'),
(459, 'Mandi Dabwali', 'Haryana'),
(460, 'Narnaul', 'Haryana'),
(461, 'Narwana', 'Haryana'),
(462, 'Palwal', 'Haryana'),
(463, 'Panchkula', 'Haryana'),
(464, 'Panipat', 'Haryana'),
(465, 'Pehowa', 'Haryana'),
(466, 'Pinjore', 'Haryana'),
(467, 'Rania', 'Haryana'),
(468, 'Ratia', 'Haryana'),
(469, 'Rewari', 'Haryana'),
(470, 'Rohtak', 'Haryana'),
(471, 'Safidon', 'Haryana'),
(472, 'Samalkha', 'Haryana'),
(473, 'Shahbad', 'Haryana'),
(474, 'Sirsa', 'Haryana'),
(475, 'Sohna', 'Haryana'),
(476, 'Sonipat', 'Haryana'),
(477, 'Taraori', 'Haryana'),
(478, 'Thanesar', 'Haryana'),
(479, 'Tohana', 'Haryana'),
(480, 'Yamunanagar', 'Haryana'),
(481, 'Arki', 'Himachal Pradesh'),
(482, 'Baddi', 'Himachal Pradesh'),
(483, 'Bilaspur', 'Himachal Pradesh'),
(484, 'Chamba', 'Himachal Pradesh'),
(485, 'Dalhousie', 'Himachal Pradesh'),
(486, 'Dharamsala', 'Himachal Pradesh'),
(487, 'Hamirpur', 'Himachal Pradesh'),
(488, 'Mandi', 'Himachal Pradesh'),
(489, 'Nahan', 'Himachal Pradesh'),
(490, 'Shimla', 'Himachal Pradesh'),
(491, 'Solan', 'Himachal Pradesh'),
(492, 'Sundarnagar', 'Himachal Pradesh'),
(493, 'Jammu', 'Jammu & Kashmir'),
(494, 'Achabbal', 'Jammu & Kashmir'),
(495, 'Akhnoor', 'Jammu & Kashmir'),
(496, 'Anantnag', 'Jammu & Kashmir'),
(497, 'Arnia', 'Jammu & Kashmir'),
(498, 'Awantipora', 'Jammu & Kashmir'),
(499, 'Bandipore', 'Jammu & Kashmir'),
(500, 'Baramula', 'Jammu & Kashmir'),
(501, 'Kathua', 'Jammu & Kashmir'),
(502, 'Leh', 'Jammu & Kashmir'),
(503, 'Punch', 'Jammu & Kashmir'),
(504, 'Rajauri', 'Jammu & Kashmir'),
(505, 'Sopore', 'Jammu & Kashmir'),
(506, 'Srinagar', 'Jammu & Kashmir'),
(507, 'Udhampur', 'Jammu & Kashmir'),
(508, 'Amlabad', 'Jharkhand'),
(509, 'Ara', 'Jharkhand'),
(510, 'Barughutu', 'Jharkhand'),
(511, 'Bokaro Steel City', 'Jharkhand'),
(512, 'Chaibasa', 'Jharkhand'),
(513, 'Chakradharpur', 'Jharkhand'),
(514, 'Chandrapura', 'Jharkhand'),
(515, 'Chatra', 'Jharkhand'),
(516, 'Chirkunda', 'Jharkhand'),
(517, 'Churi', 'Jharkhand'),
(518, 'Daltonganj', 'Jharkhand'),
(519, 'Deoghar', 'Jharkhand'),
(520, 'Dhanbad', 'Jharkhand'),
(521, 'Dumka', 'Jharkhand'),
(522, 'Garhwa', 'Jharkhand'),
(523, 'Ghatshila', 'Jharkhand'),
(524, 'Giridih', 'Jharkhand'),
(525, 'Godda', 'Jharkhand'),
(526, 'Gomoh', 'Jharkhand'),
(527, 'Gumia', 'Jharkhand'),
(528, 'Gumla', 'Jharkhand'),
(529, 'Hazaribag', 'Jharkhand'),
(530, 'Hussainabad', 'Jharkhand'),
(531, 'Jamshedpur', 'Jharkhand'),
(532, 'Jamtara', 'Jharkhand'),
(533, 'Jhumri Tilaiya', 'Jharkhand'),
(534, 'Khunti', 'Jharkhand'),
(535, 'Lohardaga', 'Jharkhand'),
(536, 'Madhupur', 'Jharkhand'),
(537, 'Mihijam', 'Jharkhand'),
(538, 'Musabani', 'Jharkhand'),
(539, 'Pakaur', 'Jharkhand'),
(540, 'Patratu', 'Jharkhand'),
(541, 'Phusro', 'Jharkhand'),
(542, 'Ramngarh', 'Jharkhand'),
(543, 'Ranchi', 'Jharkhand'),
(544, 'Sahibganj', 'Jharkhand'),
(545, 'Saunda', 'Jharkhand'),
(546, 'Simdega', 'Jharkhand'),
(547, 'Tenu Dam-cum- Kathhara', 'Jharkhand'),
(548, 'Arasikere', 'Karnataka'),
(549, 'Bangalore', 'Karnataka'),
(550, 'Belgaum', 'Karnataka'),
(551, 'Bellary', 'Karnataka'),
(552, 'Chamrajnagar', 'Karnataka'),
(553, 'Chikkaballapur', 'Karnataka'),
(554, 'Chintamani', 'Karnataka'),
(555, 'Chitradurga', 'Karnataka'),
(556, 'Gulbarga', 'Karnataka'),
(557, 'Gundlupet', 'Karnataka'),
(558, 'Hassan', 'Karnataka'),
(559, 'Hospet', 'Karnataka'),
(560, 'Hubli', 'Karnataka'),
(561, 'Karkala', 'Karnataka'),
(562, 'Karwar', 'Karnataka'),
(563, 'Kolar', 'Karnataka'),
(564, 'Kota', 'Karnataka'),
(565, 'Lakshmeshwar', 'Karnataka'),
(566, 'Lingsugur', 'Karnataka'),
(567, 'Maddur', 'Karnataka'),
(568, 'Madhugiri', 'Karnataka'),
(569, 'Madikeri', 'Karnataka'),
(570, 'Magadi', 'Karnataka'),
(571, 'Mahalingpur', 'Karnataka'),
(572, 'Malavalli', 'Karnataka'),
(573, 'Malur', 'Karnataka'),
(574, 'Mandya', 'Karnataka'),
(575, 'Mangalore', 'Karnataka'),
(576, 'Manvi', 'Karnataka'),
(577, 'Mudalgi', 'Karnataka'),
(578, 'Mudbidri', 'Karnataka'),
(579, 'Muddebihal', 'Karnataka'),
(580, 'Mudhol', 'Karnataka'),
(581, 'Mulbagal', 'Karnataka'),
(582, 'Mundargi', 'Karnataka'),
(583, 'Mysore', 'Karnataka'),
(584, 'Nanjangud', 'Karnataka'),
(585, 'Pavagada', 'Karnataka'),
(586, 'Puttur', 'Karnataka'),
(587, 'Rabkavi Banhatti', 'Karnataka'),
(588, 'Raichur', 'Karnataka'),
(589, 'Ramanagaram', 'Karnataka'),
(590, 'Ramdurg', 'Karnataka'),
(591, 'Ranibennur', 'Karnataka'),
(592, 'Robertson Pet', 'Karnataka'),
(593, 'Ron', 'Karnataka'),
(594, 'Sadalgi', 'Karnataka'),
(595, 'Sagar', 'Karnataka'),
(596, 'Sakleshpur', 'Karnataka'),
(597, 'Sandur', 'Karnataka'),
(598, 'Sankeshwar', 'Karnataka'),
(599, 'Saundatti-Yellamma', 'Karnataka'),
(600, 'Savanur', 'Karnataka'),
(601, 'Sedam', 'Karnataka'),
(602, 'Shahabad', 'Karnataka'),
(603, 'Shahpur', 'Karnataka'),
(604, 'Shiggaon', 'Karnataka'),
(605, 'Shikapur', 'Karnataka'),
(606, 'Shimoga', 'Karnataka'),
(607, 'Shorapur', 'Karnataka'),
(608, 'Shrirangapattana', 'Karnataka'),
(609, 'Sidlaghatta', 'Karnataka'),
(610, 'Sindgi', 'Karnataka'),
(611, 'Sindhnur', 'Karnataka'),
(612, 'Sira', 'Karnataka'),
(613, 'Sirsi', 'Karnataka'),
(614, 'Siruguppa', 'Karnataka'),
(615, 'Srinivaspur', 'Karnataka'),
(616, 'Talikota', 'Karnataka'),
(617, 'Tarikere', 'Karnataka'),
(618, 'Tekkalakota', 'Karnataka'),
(619, 'Terdal', 'Karnataka'),
(620, 'Tiptur', 'Karnataka'),
(621, 'Tumkur', 'Karnataka'),
(622, 'Udupi', 'Karnataka'),
(623, 'Vijayapura', 'Karnataka'),
(624, 'Wadi', 'Karnataka'),
(625, 'Yadgir', 'Karnataka'),
(626, 'Adoor', 'Kerala'),
(627, 'Akathiyoor', 'Kerala'),
(628, 'Alappuzha', 'Kerala'),
(629, 'Ancharakandy', 'Kerala'),
(630, 'Aroor', 'Kerala'),
(631, 'Ashtamichira', 'Kerala'),
(632, 'Attingal', 'Kerala'),
(633, 'Avinissery', 'Kerala'),
(634, 'Chalakudy', 'Kerala'),
(635, 'Changanassery', 'Kerala'),
(636, 'Chendamangalam', 'Kerala'),
(637, 'Chengannur', 'Kerala'),
(638, 'Cherthala', 'Kerala'),
(639, 'Cheruthazham', 'Kerala'),
(640, 'Chittur-Thathamangalam', 'Kerala'),
(641, 'Chockli', 'Kerala'),
(642, 'Erattupetta', 'Kerala'),
(643, 'Guruvayoor', 'Kerala'),
(644, 'Irinjalakuda', 'Kerala'),
(645, 'Kadirur', 'Kerala'),
(646, 'Kalliasseri', 'Kerala'),
(647, 'Kalpetta', 'Kerala'),
(648, 'Kanhangad', 'Kerala'),
(649, 'Kanjikkuzhi', 'Kerala'),
(650, 'Kannur', 'Kerala'),
(651, 'Kasaragod', 'Kerala'),
(652, 'Kayamkulam', 'Kerala'),
(653, 'Kochi', 'Kerala'),
(654, 'Kodungallur', 'Kerala'),
(655, 'Kollam', 'Kerala'),
(656, 'Koothuparamba', 'Kerala'),
(657, 'Kothamangalam', 'Kerala'),
(658, 'Kottayam', 'Kerala'),
(659, 'Kozhikode', 'Kerala'),
(660, 'Kunnamkulam', 'Kerala'),
(661, 'Malappuram', 'Kerala'),
(662, 'Mattannur', 'Kerala'),
(663, 'Mavelikkara', 'Kerala'),
(664, 'Mavoor', 'Kerala'),
(665, 'Muvattupuzha', 'Kerala'),
(666, 'Nedumangad', 'Kerala'),
(667, 'Neyyattinkara', 'Kerala'),
(668, 'Ottappalam', 'Kerala'),
(669, 'Palai', 'Kerala'),
(670, 'Palakkad', 'Kerala'),
(671, 'Panniyannur', 'Kerala'),
(672, 'Pappinisseri', 'Kerala'),
(673, 'Paravoor', 'Kerala'),
(674, 'Pathanamthitta', 'Kerala'),
(675, 'Payyannur', 'Kerala'),
(676, 'Peringathur', 'Kerala'),
(677, 'Perinthalmanna', 'Kerala'),
(678, 'Perumbavoor', 'Kerala'),
(679, 'Ponnani', 'Kerala'),
(680, 'Punalur', 'Kerala'),
(681, 'Quilandy', 'Kerala'),
(682, 'Shoranur', 'Kerala'),
(683, 'Taliparamba', 'Kerala'),
(684, 'Thiruvalla', 'Kerala'),
(685, 'Thiruvananthapuram', 'Kerala'),
(686, 'Thodupuzha', 'Kerala'),
(687, 'Thrissur', 'Kerala'),
(688, 'Tirur', 'Kerala'),
(689, 'Vadakara', 'Kerala'),
(690, 'Vaikom', 'Kerala'),
(691, 'Varkala', 'Kerala'),
(692, 'Kavaratti', 'Lakshadweep'),
(693, 'Ashok Nagar', 'Madhya Pradesh'),
(694, 'Balaghat', 'Madhya Pradesh'),
(695, 'Betul', 'Madhya Pradesh'),
(696, 'Bhopal', 'Madhya Pradesh'),
(697, 'Burhanpur', 'Madhya Pradesh'),
(698, 'Chhatarpur', 'Madhya Pradesh'),
(699, 'Dabra', 'Madhya Pradesh'),
(700, 'Datia', 'Madhya Pradesh'),
(701, 'Dewas', 'Madhya Pradesh'),
(702, 'Dhar', 'Madhya Pradesh'),
(703, 'Fatehabad', 'Madhya Pradesh'),
(704, 'Gwalior', 'Madhya Pradesh'),
(705, 'Indore', 'Madhya Pradesh'),
(706, 'Itarsi', 'Madhya Pradesh'),
(707, 'Jabalpur', 'Madhya Pradesh'),
(708, 'Katni', 'Madhya Pradesh'),
(709, 'Kotma', 'Madhya Pradesh'),
(710, 'Lahar', 'Madhya Pradesh'),
(711, 'Lundi', 'Madhya Pradesh'),
(712, 'Maharajpur', 'Madhya Pradesh'),
(713, 'Mahidpur', 'Madhya Pradesh'),
(714, 'Maihar', 'Madhya Pradesh'),
(715, 'Malajkhand', 'Madhya Pradesh'),
(716, 'Manasa', 'Madhya Pradesh'),
(717, 'Manawar', 'Madhya Pradesh'),
(718, 'Mandideep', 'Madhya Pradesh'),
(719, 'Mandla', 'Madhya Pradesh'),
(720, 'Mandsaur', 'Madhya Pradesh'),
(721, 'Mauganj', 'Madhya Pradesh'),
(722, 'Mhow Cantonment', 'Madhya Pradesh'),
(723, 'Mhowgaon', 'Madhya Pradesh'),
(724, 'Morena', 'Madhya Pradesh'),
(725, 'Multai', 'Madhya Pradesh'),
(726, 'Murwara', 'Madhya Pradesh'),
(727, 'Nagda', 'Madhya Pradesh'),
(728, 'Nainpur', 'Madhya Pradesh'),
(729, 'Narsinghgarh', 'Madhya Pradesh'),
(730, 'Narsinghgarh', 'Madhya Pradesh'),
(731, 'Neemuch', 'Madhya Pradesh'),
(732, 'Nepanagar', 'Madhya Pradesh'),
(733, 'Niwari', 'Madhya Pradesh'),
(734, 'Nowgong', 'Madhya Pradesh'),
(735, 'Nowrozabad', 'Madhya Pradesh'),
(736, 'Pachore', 'Madhya Pradesh'),
(737, 'Pali', 'Madhya Pradesh'),
(738, 'Panagar', 'Madhya Pradesh'),
(739, 'Pandhurna', 'Madhya Pradesh'),
(740, 'Panna', 'Madhya Pradesh'),
(741, 'Pasan', 'Madhya Pradesh'),
(742, 'Pipariya', 'Madhya Pradesh'),
(743, 'Pithampur', 'Madhya Pradesh'),
(744, 'Porsa', 'Madhya Pradesh'),
(745, 'Prithvipur', 'Madhya Pradesh'),
(746, 'Raghogarh-Vijaypur', 'Madhya Pradesh'),
(747, 'Rahatgarh', 'Madhya Pradesh'),
(748, 'Raisen', 'Madhya Pradesh'),
(749, 'Rajgarh', 'Madhya Pradesh'),
(750, 'Ratlam', 'Madhya Pradesh'),
(751, 'Rau', 'Madhya Pradesh'),
(752, 'Rehli', 'Madhya Pradesh'),
(753, 'Rewa', 'Madhya Pradesh'),
(754, 'Sabalgarh', 'Madhya Pradesh'),
(755, 'Sagar', 'Madhya Pradesh'),
(756, 'Sanawad', 'Madhya Pradesh'),
(757, 'Sarangpur', 'Madhya Pradesh'),
(758, 'Sarni', 'Madhya Pradesh'),
(759, 'Satna', 'Madhya Pradesh'),
(760, 'Sausar', 'Madhya Pradesh'),
(761, 'Sehore', 'Madhya Pradesh'),
(762, 'Sendhwa', 'Madhya Pradesh'),
(763, 'Seoni', 'Madhya Pradesh'),
(764, 'Seoni-Malwa', 'Madhya Pradesh'),
(765, 'Shahdol', 'Madhya Pradesh'),
(766, 'Shajapur', 'Madhya Pradesh'),
(767, 'Shamgarh', 'Madhya Pradesh'),
(768, 'Sheopur', 'Madhya Pradesh'),
(769, 'Shivpuri', 'Madhya Pradesh'),
(770, 'Shujalpur', 'Madhya Pradesh'),
(771, 'Sidhi', 'Madhya Pradesh'),
(772, 'Sihora', 'Madhya Pradesh'),
(773, 'Singrauli', 'Madhya Pradesh'),
(774, 'Sironj', 'Madhya Pradesh'),
(775, 'Sohagpur', 'Madhya Pradesh'),
(776, 'Tarana', 'Madhya Pradesh'),
(777, 'Tikamgarh', 'Madhya Pradesh'),
(778, 'Ujhani', 'Madhya Pradesh'),
(779, 'Ujjain', 'Madhya Pradesh'),
(780, 'Umaria', 'Madhya Pradesh'),
(781, 'Vidisha', 'Madhya Pradesh'),
(782, 'Wara Seoni', 'Madhya Pradesh'),
(783, 'Ahmednagar', 'Maharashtra'),
(784, 'Akola', 'Maharashtra'),
(785, 'Amravati', 'Maharashtra'),
(786, 'Aurangabad', 'Maharashtra'),
(787, 'Baramati', 'Maharashtra'),
(788, 'Chalisgaon', 'Maharashtra'),
(789, 'Chinchani', 'Maharashtra'),
(790, 'Devgarh', 'Maharashtra'),
(791, 'Dhule', 'Maharashtra'),
(792, 'Dombivli', 'Maharashtra'),
(793, 'Durgapur', 'Maharashtra'),
(794, 'Ichalkaranji', 'Maharashtra'),
(795, 'Jalna', 'Maharashtra'),
(796, 'Kalyan', 'Maharashtra'),
(797, 'Latur', 'Maharashtra'),
(798, 'Loha', 'Maharashtra'),
(799, 'Lonar', 'Maharashtra'),
(800, 'Lonavla', 'Maharashtra'),
(801, 'Mahad', 'Maharashtra'),
(802, 'Mahuli', 'Maharashtra'),
(803, 'Malegaon', 'Maharashtra'),
(804, 'Malkapur', 'Maharashtra'),
(805, 'Manchar', 'Maharashtra'),
(806, 'Mangalvedhe', 'Maharashtra'),
(807, 'Mangrulpir', 'Maharashtra'),
(808, 'Manjlegaon', 'Maharashtra'),
(809, 'Manmad', 'Maharashtra'),
(810, 'Manwath', 'Maharashtra'),
(811, 'Mehkar', 'Maharashtra'),
(812, 'Mhaswad', 'Maharashtra'),
(813, 'Miraj', 'Maharashtra'),
(814, 'Morshi', 'Maharashtra'),
(815, 'Mukhed', 'Maharashtra'),
(816, 'Mul', 'Maharashtra'),
(817, 'Mumbai', 'Maharashtra'),
(818, 'Murtijapur', 'Maharashtra'),
(819, 'Nagpur', 'Maharashtra'),
(820, 'Nalasopara', 'Maharashtra'),
(821, 'Nanded-Waghala', 'Maharashtra'),
(822, 'Nandgaon', 'Maharashtra'),
(823, 'Nandura', 'Maharashtra'),
(824, 'Nandurbar', 'Maharashtra'),
(825, 'Narkhed', 'Maharashtra'),
(826, 'Nashik', 'Maharashtra'),
(827, 'Navi Mumbai', 'Maharashtra'),
(828, 'Nawapur', 'Maharashtra'),
(829, 'Nilanga', 'Maharashtra'),
(830, 'Osmanabad', 'Maharashtra'),
(831, 'Ozar', 'Maharashtra'),
(832, 'Pachora', 'Maharashtra'),
(833, 'Paithan', 'Maharashtra'),
(834, 'Palghar', 'Maharashtra'),
(835, 'Pandharkaoda', 'Maharashtra'),
(836, 'Pandharpur', 'Maharashtra'),
(837, 'Panvel', 'Maharashtra'),
(838, 'Parbhani', 'Maharashtra'),
(839, 'Parli', 'Maharashtra'),
(840, 'Parola', 'Maharashtra'),
(841, 'Partur', 'Maharashtra'),
(842, 'Pathardi', 'Maharashtra'),
(843, 'Pathri', 'Maharashtra'),
(844, 'Patur', 'Maharashtra'),
(845, 'Pauni', 'Maharashtra'),
(846, 'Pen', 'Maharashtra'),
(847, 'Phaltan', 'Maharashtra'),
(848, 'Pulgaon', 'Maharashtra'),
(849, 'Pune', 'Maharashtra'),
(850, 'Purna', 'Maharashtra'),
(851, 'Pusad', 'Maharashtra'),
(852, 'Rahuri', 'Maharashtra'),
(853, 'Rajura', 'Maharashtra'),
(854, 'Ramtek', 'Maharashtra'),
(855, 'Ratnagiri', 'Maharashtra'),
(856, 'Raver', 'Maharashtra'),
(857, 'Risod', 'Maharashtra'),
(858, 'Sailu', 'Maharashtra'),
(859, 'Sangamner', 'Maharashtra'),
(860, 'Sangli', 'Maharashtra'),
(861, 'Sangole', 'Maharashtra'),
(862, 'Sasvad', 'Maharashtra'),
(863, 'Satana', 'Maharashtra'),
(864, 'Satara', 'Maharashtra'),
(865, 'Savner', 'Maharashtra'),
(866, 'Sawantwadi', 'Maharashtra'),
(867, 'Shahade', 'Maharashtra'),
(868, 'Shegaon', 'Maharashtra'),
(869, 'Shendurjana', 'Maharashtra'),
(870, 'Shirdi', 'Maharashtra'),
(871, 'Shirpur-Warwade', 'Maharashtra'),
(872, 'Shirur', 'Maharashtra'),
(873, 'Shrigonda', 'Maharashtra'),
(874, 'Shrirampur', 'Maharashtra'),
(875, 'Sillod', 'Maharashtra'),
(876, 'Sinnar', 'Maharashtra'),
(877, 'Solapur', 'Maharashtra'),
(878, 'Soyagaon', 'Maharashtra'),
(879, 'Talegaon Dabhade', 'Maharashtra'),
(880, 'Talode', 'Maharashtra'),
(881, 'Tasgaon', 'Maharashtra'),
(882, 'Tirora', 'Maharashtra'),
(883, 'Tuljapur', 'Maharashtra'),
(884, 'Tumsar', 'Maharashtra'),
(885, 'Uran', 'Maharashtra'),
(886, 'Uran Islampur', 'Maharashtra'),
(887, 'Wadgaon Road', 'Maharashtra'),
(888, 'Wai', 'Maharashtra'),
(889, 'Wani', 'Maharashtra'),
(890, 'Wardha', 'Maharashtra'),
(891, 'Warora', 'Maharashtra'),
(892, 'Warud', 'Maharashtra'),
(893, 'Washim', 'Maharashtra'),
(894, 'Yevla', 'Maharashtra'),
(895, 'Uchgaon', 'Maharashtra'),
(896, 'Udgir', 'Maharashtra'),
(897, 'Umarga', 'Maharastra'),
(898, 'Umarkhed', 'Maharastra'),
(899, 'Umred', 'Maharastra'),
(900, 'Vadgaon Kasba', 'Maharastra'),
(901, 'Vaijapur', 'Maharastra'),
(902, 'Vasai', 'Maharastra'),
(903, 'Virar', 'Maharastra'),
(904, 'Vita', 'Maharastra'),
(905, 'Yavatmal', 'Maharastra'),
(906, 'Yawal', 'Maharastra'),
(907, 'Imphal', 'Manipur'),
(908, 'Kakching', 'Manipur'),
(909, 'Lilong', 'Manipur'),
(910, 'Mayang Imphal', 'Manipur'),
(911, 'Thoubal', 'Manipur'),
(912, 'Jowai', 'Meghalaya'),
(913, 'Nongstoin', 'Meghalaya'),
(914, 'Shillong', 'Meghalaya'),
(915, 'Tura', 'Meghalaya'),
(916, 'Aizawl', 'Mizoram'),
(917, 'Champhai', 'Mizoram'),
(918, 'Lunglei', 'Mizoram'),
(919, 'Saiha', 'Mizoram'),
(920, 'Dimapur', 'Nagaland'),
(921, 'Kohima', 'Nagaland'),
(922, 'Mokokchung', 'Nagaland'),
(923, 'Tuensang', 'Nagaland'),
(924, 'Wokha', 'Nagaland'),
(925, 'Zunheboto', 'Nagaland'),
(950, 'Anandapur', 'Orissa'),
(951, 'Anugul', 'Orissa'),
(952, 'Asika', 'Orissa'),
(953, 'Balangir', 'Orissa'),
(954, 'Balasore', 'Orissa'),
(955, 'Baleshwar', 'Orissa'),
(956, 'Bamra', 'Orissa'),
(957, 'Barbil', 'Orissa'),
(958, 'Bargarh', 'Orissa'),
(959, 'Bargarh', 'Orissa'),
(960, 'Baripada', 'Orissa'),
(961, 'Basudebpur', 'Orissa'),
(962, 'Belpahar', 'Orissa'),
(963, 'Bhadrak', 'Orissa'),
(964, 'Bhawanipatna', 'Orissa'),
(965, 'Bhuban', 'Orissa'),
(966, 'Bhubaneswar', 'Orissa'),
(967, 'Biramitrapur', 'Orissa'),
(968, 'Brahmapur', 'Orissa'),
(969, 'Brajrajnagar', 'Orissa'),
(970, 'Byasanagar', 'Orissa'),
(971, 'Cuttack', 'Orissa'),
(972, 'Debagarh', 'Orissa'),
(973, 'Dhenkanal', 'Orissa'),
(974, 'Gunupur', 'Orissa'),
(975, 'Hinjilicut', 'Orissa'),
(976, 'Jagatsinghapur', 'Orissa'),
(977, 'Jajapur', 'Orissa'),
(978, 'Jaleswar', 'Orissa'),
(979, 'Jatani', 'Orissa'),
(980, 'Jeypur', 'Orissa'),
(981, 'Jharsuguda', 'Orissa'),
(982, 'Joda', 'Orissa'),
(983, 'Kantabanji', 'Orissa'),
(984, 'Karanjia', 'Orissa'),
(985, 'Kendrapara', 'Orissa'),
(986, 'Kendujhar', 'Orissa'),
(987, 'Khordha', 'Orissa'),
(988, 'Koraput', 'Orissa'),
(989, 'Malkangiri', 'Orissa'),
(990, 'Nabarangapur', 'Orissa'),
(991, 'Paradip', 'Orissa'),
(992, 'Parlakhemundi', 'Orissa'),
(993, 'Pattamundai', 'Orissa'),
(994, 'Phulabani', 'Orissa'),
(995, 'Puri', 'Orissa'),
(996, 'Rairangpur', 'Orissa'),
(997, 'Rajagangapur', 'Orissa'),
(998, 'Raurkela', 'Orissa'),
(999, 'Rayagada', 'Orissa'),
(1000, 'Sambalpur', 'Orissa'),
(1001, 'Soro', 'Orissa'),
(1002, 'Sunabeda', 'Orissa'),
(1003, 'Sundargarh', 'Orissa'),
(1004, 'Talcher', 'Orissa'),
(1005, 'Titlagarh', 'Orissa'),
(1006, 'Umarkote', 'Orissa'),
(1007, 'Karaikal', 'Pondicherry'),
(1008, 'Mahe', 'Pondicherry'),
(1009, 'Pondicherry', 'Pondicherry'),
(1010, 'Yanam', 'Pondicherry'),
(1011, 'Ahmedgarh', 'Punjab'),
(1012, 'Amritsar', 'Punjab'),
(1013, 'Barnala', 'Punjab'),
(1014, 'Batala', 'Punjab'),
(1015, 'Bathinda', 'Punjab'),
(1016, 'Bhagha Purana', 'Punjab'),
(1017, 'Budhlada', 'Punjab'),
(1018, 'Chandigarh', 'Punjab'),
(1019, 'Dasua', 'Punjab'),
(1020, 'Dhuri', 'Punjab'),
(1021, 'Dinanagar', 'Punjab'),
(1022, 'Faridkot', 'Punjab'),
(1023, 'Fazilka', 'Punjab'),
(1024, 'Firozpur', 'Punjab'),
(1025, 'Firozpur Cantt.', 'Punjab'),
(1026, 'Giddarbaha', 'Punjab'),
(1027, 'Gobindgarh', 'Punjab'),
(1028, 'Gurdaspur', 'Punjab'),
(1029, 'Hoshiarpur', 'Punjab'),
(1030, 'Jagraon', 'Punjab'),
(1031, 'Jaitu', 'Punjab'),
(1032, 'Jalalabad', 'Punjab'),
(1033, 'Jalandhar', 'Punjab'),
(1034, 'Jalandhar Cantt.', 'Punjab'),
(1035, 'Jandiala', 'Punjab'),
(1036, 'Kapurthala', 'Punjab'),
(1037, 'Karoran', 'Punjab'),
(1038, 'Kartarpur', 'Punjab'),
(1039, 'Khanna', 'Punjab'),
(1040, 'Kharar', 'Punjab'),
(1041, 'Kot Kapura', 'Punjab'),
(1042, 'Kurali', 'Punjab'),
(1043, 'Longowal', 'Punjab'),
(1044, 'Ludhiana', 'Punjab'),
(1045, 'Malerkotla', 'Punjab'),
(1046, 'Malout', 'Punjab'),
(1047, 'Mansa', 'Punjab'),
(1048, 'Maur', 'Punjab'),
(1049, 'Moga', 'Punjab'),
(1050, 'Mohali', 'Punjab'),
(1051, 'Morinda', 'Punjab'),
(1052, 'Mukerian', 'Punjab'),
(1053, 'Muktsar', 'Punjab'),
(1054, 'Nabha', 'Punjab'),
(1055, 'Nakodar', 'Punjab'),
(1056, 'Nangal', 'Punjab'),
(1057, 'Nawanshahr', 'Punjab'),
(1058, 'Pathankot', 'Punjab'),
(1059, 'Patiala', 'Punjab'),
(1060, 'Patran', 'Punjab'),
(1061, 'Patti', 'Punjab'),
(1062, 'Phagwara', 'Punjab'),
(1063, 'Phillaur', 'Punjab'),
(1064, 'Qadian', 'Punjab'),
(1065, 'Raikot', 'Punjab'),
(1066, 'Rajpura', 'Punjab'),
(1067, 'Rampura Phul', 'Punjab'),
(1068, 'Rupnagar', 'Punjab'),
(1069, 'Samana', 'Punjab'),
(1070, 'Sangrur', 'Punjab'),
(1071, 'Sirhind Fatehgarh Sahib', 'Punjab'),
(1072, 'Sujanpur', 'Punjab'),
(1073, 'Sunam', 'Punjab'),
(1074, 'Talwara', 'Punjab'),
(1075, 'Tarn Taran', 'Punjab'),
(1076, 'Urmar Tanda', 'Punjab'),
(1077, 'Zira', 'Punjab'),
(1078, 'Zirakpur', 'Punjab'),
(1079, 'Bali', 'Rajasthan'),
(1080, 'Banswara', 'Rajastan'),
(1081, 'Ajmer', 'Rajasthan'),
(1082, 'Alwar', 'Rajasthan'),
(1083, 'Bandikui', 'Rajasthan'),
(1084, 'Baran', 'Rajasthan'),
(1085, 'Barmer', 'Rajasthan'),
(1086, 'Bikaner', 'Rajasthan'),
(1087, 'Fatehpur', 'Rajasthan'),
(1088, 'Jaipur', 'Rajasthan'),
(1089, 'Jaisalmer', 'Rajasthan'),
(1090, 'Jodhpur', 'Rajasthan'),
(1091, 'Kota', 'Rajasthan'),
(1092, 'Lachhmangarh', 'Rajasthan'),
(1093, 'Ladnu', 'Rajasthan'),
(1094, 'Lakheri', 'Rajasthan'),
(1095, 'Lalsot', 'Rajasthan'),
(1096, 'Losal', 'Rajasthan'),
(1097, 'Makrana', 'Rajasthan'),
(1098, 'Malpura', 'Rajasthan'),
(1099, 'Mandalgarh', 'Rajasthan'),
(1100, 'Mandawa', 'Rajasthan'),
(1101, 'Mangrol', 'Rajasthan'),
(1102, 'Merta City', 'Rajasthan'),
(1103, 'Mount Abu', 'Rajasthan'),
(1104, 'Nadbai', 'Rajasthan'),
(1105, 'Nagar', 'Rajasthan'),
(1106, 'Nagaur', 'Rajasthan'),
(1107, 'Nargund', 'Rajasthan'),
(1108, 'Nasirabad', 'Rajasthan'),
(1109, 'Nathdwara', 'Rajasthan'),
(1110, 'Navalgund', 'Rajasthan'),
(1111, 'Nawalgarh', 'Rajasthan'),
(1112, 'Neem-Ka-Thana', 'Rajasthan'),
(1113, 'Nelamangala', 'Rajasthan'),
(1114, 'Nimbahera', 'Rajasthan'),
(1115, 'Nipani', 'Rajasthan'),
(1116, 'Niwai', 'Rajasthan'),
(1117, 'Nohar', 'Rajasthan'),
(1118, 'Nokha', 'Rajasthan'),
(1119, 'Pali', 'Rajasthan'),
(1120, 'Phalodi', 'Rajasthan'),
(1121, 'Phulera', 'Rajasthan'),
(1122, 'Pilani', 'Rajasthan'),
(1123, 'Pilibanga', 'Rajasthan'),
(1124, 'Pindwara', 'Rajasthan'),
(1125, 'Pipar City', 'Rajasthan'),
(1126, 'Prantij', 'Rajasthan'),
(1127, 'Pratapgarh', 'Rajasthan'),
(1128, 'Raisinghnagar', 'Rajasthan'),
(1129, 'Rajakhera', 'Rajasthan'),
(1130, 'Rajaldesar', 'Rajasthan'),
(1131, 'Rajgarh (Alwar)', 'Rajasthan'),
(1132, 'Rajgarh (Churu', 'Rajasthan'),
(1133, 'Rajsamand', 'Rajasthan'),
(1134, 'Ramganj Mandi', 'Rajasthan'),
(1135, 'Ramngarh', 'Rajasthan'),
(1136, 'Ratangarh', 'Rajasthan'),
(1137, 'Rawatbhata', 'Rajasthan'),
(1138, 'Rawatsar', 'Rajasthan'),
(1139, 'Reengus', 'Rajasthan'),
(1140, 'Sadri', 'Rajasthan'),
(1141, 'Sadulshahar', 'Rajasthan'),
(1142, 'Sagwara', 'Rajasthan'),
(1143, 'Sambhar', 'Rajasthan'),
(1144, 'Sanchore', 'Rajasthan'),
(1145, 'Sangaria', 'Rajasthan'),
(1146, 'Sardarshahar', 'Rajasthan'),
(1147, 'Sawai Madhopur', 'Rajasthan'),
(1148, 'Shahpura', 'Rajasthan'),
(1149, 'Shahpura', 'Rajasthan'),
(1150, 'Sheoganj', 'Rajasthan'),
(1151, 'Sikar', 'Rajasthan'),
(1152, 'Sirohi', 'Rajasthan'),
(1153, 'Sojat', 'Rajasthan'),
(1154, 'Sri Madhopur', 'Rajasthan'),
(1155, 'Sujangarh', 'Rajasthan'),
(1156, 'Sumerpur', 'Rajasthan'),
(1157, 'Suratgarh', 'Rajasthan'),
(1158, 'Taranagar', 'Rajasthan'),
(1159, 'Todabhim', 'Rajasthan'),
(1160, 'Todaraisingh', 'Rajasthan'),
(1161, 'Tonk', 'Rajasthan'),
(1162, 'Udaipur', 'Rajasthan'),
(1163, 'Udaipurwati', 'Rajasthan'),
(1164, 'Vijainagar', 'Rajasthan'),
(1165, 'Gangtok', 'Sikkim'),
(1166, 'Calcutta', 'West Bengal'),
(1167, 'Arakkonam', 'Tamil Nadu'),
(1168, 'Arcot', 'Tamil Nadu'),
(1169, 'Aruppukkottai', 'Tamil Nadu'),
(1170, 'Bhavani', 'Tamil Nadu'),
(1171, 'Chengalpattu', 'Tamil Nadu'),
(1172, 'Chennai', 'Tamil Nadu'),
(1173, 'Chinna salem', 'Tamil nadu'),
(1174, 'Coimbatore', 'Tamil Nadu'),
(1175, 'Coonoor', 'Tamil Nadu'),
(1176, 'Cuddalore', 'Tamil Nadu'),
(1177, 'Dharmapuri', 'Tamil Nadu'),
(1178, 'Dindigul', 'Tamil Nadu'),
(1179, 'Erode', 'Tamil Nadu'),
(1180, 'Gudalur', 'Tamil Nadu'),
(1181, 'Gudalur', 'Tamil Nadu'),
(1182, 'Gudalur', 'Tamil Nadu'),
(1183, 'Kanchipuram', 'Tamil Nadu'),
(1184, 'Karaikudi', 'Tamil Nadu'),
(1185, 'Karungal', 'Tamil Nadu'),
(1186, 'Karur', 'Tamil Nadu'),
(1187, 'Kollankodu', 'Tamil Nadu'),
(1188, 'Lalgudi', 'Tamil Nadu'),
(1189, 'Madurai', 'Tamil Nadu'),
(1190, 'Nagapattinam', 'Tamil Nadu'),
(1191, 'Nagercoil', 'Tamil Nadu'),
(1192, 'Namagiripettai', 'Tamil Nadu'),
(1193, 'Namakkal', 'Tamil Nadu'),
(1194, 'Nandivaram-Guduvancheri', 'Tamil Nadu'),
(1195, 'Nanjikottai', 'Tamil Nadu'),
(1196, 'Natham', 'Tamil Nadu'),
(1197, 'Nellikuppam', 'Tamil Nadu'),
(1198, 'Neyveli', 'Tamil Nadu'),
(1199, 'O\' Valley', 'Tamil Nadu'),
(1200, 'Oddanchatram', 'Tamil Nadu'),
(1201, 'P.N.Patti', 'Tamil Nadu'),
(1202, 'Pacode', 'Tamil Nadu'),
(1203, 'Padmanabhapuram', 'Tamil Nadu'),
(1204, 'Palani', 'Tamil Nadu'),
(1205, 'Palladam', 'Tamil Nadu'),
(1206, 'Pallapatti', 'Tamil Nadu'),
(1207, 'Pallikonda', 'Tamil Nadu'),
(1208, 'Panagudi', 'Tamil Nadu'),
(1209, 'Panruti', 'Tamil Nadu'),
(1210, 'Paramakudi', 'Tamil Nadu'),
(1211, 'Parangipettai', 'Tamil Nadu'),
(1212, 'Pattukkottai', 'Tamil Nadu'),
(1213, 'Perambalur', 'Tamil Nadu'),
(1214, 'Peravurani', 'Tamil Nadu'),
(1215, 'Periyakulam', 'Tamil Nadu'),
(1216, 'Periyasemur', 'Tamil Nadu'),
(1217, 'Pernampattu', 'Tamil Nadu'),
(1218, 'Pollachi', 'Tamil Nadu'),
(1219, 'Polur', 'Tamil Nadu'),
(1220, 'Ponneri', 'Tamil Nadu'),
(1221, 'Pudukkottai', 'Tamil Nadu'),
(1222, 'Pudupattinam', 'Tamil Nadu'),
(1223, 'Puliyankudi', 'Tamil Nadu'),
(1224, 'Punjaipugalur', 'Tamil Nadu'),
(1225, 'Rajapalayam', 'Tamil Nadu'),
(1226, 'Ramanathapuram', 'Tamil Nadu'),
(1227, 'Rameshwaram', 'Tamil Nadu'),
(1228, 'Rasipuram', 'Tamil Nadu'),
(1229, 'Salem', 'Tamil Nadu'),
(1230, 'Sankarankoil', 'Tamil Nadu'),
(1231, 'Sankari', 'Tamil Nadu'),
(1232, 'Sathyamangalam', 'Tamil Nadu'),
(1233, 'Sattur', 'Tamil Nadu'),
(1234, 'Shenkottai', 'Tamil Nadu'),
(1235, 'Sholavandan', 'Tamil Nadu'),
(1236, 'Sholingur', 'Tamil Nadu'),
(1237, 'Sirkali', 'Tamil Nadu'),
(1238, 'Sivaganga', 'Tamil Nadu'),
(1239, 'Sivagiri', 'Tamil Nadu'),
(1240, 'Sivakasi', 'Tamil Nadu'),
(1241, 'Srivilliputhur', 'Tamil Nadu'),
(1242, 'Surandai', 'Tamil Nadu'),
(1243, 'Suriyampalayam', 'Tamil Nadu'),
(1244, 'Tenkasi', 'Tamil Nadu'),
(1245, 'Thammampatti', 'Tamil Nadu'),
(1246, 'Thanjavur', 'Tamil Nadu'),
(1247, 'Tharamangalam', 'Tamil Nadu'),
(1248, 'Tharangambadi', 'Tamil Nadu'),
(1249, 'Theni Allinagaram', 'Tamil Nadu'),
(1250, 'Thirumangalam', 'Tamil Nadu'),
(1251, 'Thirunindravur', 'Tamil Nadu'),
(1252, 'Thiruparappu', 'Tamil Nadu'),
(1253, 'Thirupuvanam', 'Tamil Nadu'),
(1254, 'Thiruthuraipoondi', 'Tamil Nadu'),
(1255, 'Thiruvallur', 'Tamil Nadu'),
(1256, 'Thiruvarur', 'Tamil Nadu'),
(1257, 'Thoothukudi', 'Tamil Nadu'),
(1258, 'Thuraiyur', 'Tamil Nadu'),
(1259, 'Tindivanam', 'Tamil Nadu'),
(1260, 'Tiruchendur', 'Tamil Nadu'),
(1261, 'Tiruchengode', 'Tamil Nadu'),
(1262, 'Tiruchirappalli', 'Tamil Nadu'),
(1263, 'Tirukalukundram', 'Tamil Nadu'),
(1264, 'Tirukkoyilur', 'Tamil Nadu'),
(1265, 'Tirunelveli', 'Tamil Nadu'),
(1266, 'Tirupathur', 'Tamil Nadu'),
(1267, 'Tirupathur', 'Tamil Nadu'),
(1268, 'Tiruppur', 'Tamil Nadu'),
(1269, 'Tiruttani', 'Tamil Nadu'),
(1270, 'Tiruvannamalai', 'Tamil Nadu'),
(1271, 'Tiruvethipuram', 'Tamil Nadu'),
(1272, 'Tittakudi', 'Tamil Nadu'),
(1273, 'Udhagamandalam', 'Tamil Nadu'),
(1274, 'Udumalaipettai', 'Tamil Nadu'),
(1275, 'Unnamalaikadai', 'Tamil Nadu'),
(1276, 'Usilampatti', 'Tamil Nadu'),
(1277, 'Uthamapalayam', 'Tamil Nadu'),
(1278, 'Uthiramerur', 'Tamil Nadu'),
(1279, 'Vadakkuvalliyur', 'Tamil Nadu'),
(1280, 'Vadalur', 'Tamil Nadu'),
(1281, 'Vadipatti', 'Tamil Nadu'),
(1282, 'Valparai', 'Tamil Nadu'),
(1283, 'Vandavasi', 'Tamil Nadu'),
(1284, 'Vaniyambadi', 'Tamil Nadu'),
(1285, 'Vedaranyam', 'Tamil Nadu'),
(1286, 'Vellakoil', 'Tamil Nadu'),
(1287, 'Vellore', 'Tamil Nadu'),
(1288, 'Vikramasingapuram', 'Tamil Nadu'),
(1289, 'Viluppuram', 'Tamil Nadu'),
(1290, 'Virudhachalam', 'Tamil Nadu'),
(1291, 'Virudhunagar', 'Tamil Nadu'),
(1292, 'Viswanatham', 'Tamil Nadu'),
(1293, 'Agartala', 'Tripura'),
(1294, 'Badharghat', 'Tripura'),
(1295, 'Dharmanagar', 'Tripura'),
(1296, 'Indranagar', 'Tripura'),
(1297, 'Jogendranagar', 'Tripura'),
(1298, 'Kailasahar', 'Tripura'),
(1299, 'Khowai', 'Tripura'),
(1300, 'Pratapgarh', 'Tripura'),
(1301, 'Udaipur', 'Tripura'),
(1302, 'Achhnera', 'Uttar Pradesh'),
(1303, 'Adari', 'Uttar Pradesh'),
(1304, 'Agra', 'Uttar Pradesh'),
(1305, 'Aligarh', 'Uttar Pradesh'),
(1306, 'Allahabad', 'Uttar Pradesh'),
(1307, 'Amroha', 'Uttar Pradesh'),
(1308, 'Azamgarh', 'Uttar Pradesh'),
(1309, 'Bahraich', 'Uttar Pradesh'),
(1310, 'Ballia', 'Uttar Pradesh'),
(1311, 'Balrampur', 'Uttar Pradesh'),
(1312, 'Banda', 'Uttar Pradesh'),
(1313, 'Bareilly', 'Uttar Pradesh'),
(1314, 'Chandausi', 'Uttar Pradesh'),
(1315, 'Dadri', 'Uttar Pradesh'),
(1316, 'Deoria', 'Uttar Pradesh'),
(1317, 'Etawah', 'Uttar Pradesh'),
(1318, 'Fatehabad', 'Uttar Pradesh'),
(1319, 'Fatehpur', 'Uttar Pradesh'),
(1320, 'Fatehpur', 'Uttar Pradesh'),
(1321, 'Greater Noida', 'Uttar Pradesh'),
(1322, 'Hamirpur', 'Uttar Pradesh'),
(1323, 'Hardoi', 'Uttar Pradesh'),
(1324, 'Jajmau', 'Uttar Pradesh'),
(1325, 'Jaunpur', 'Uttar Pradesh'),
(1326, 'Jhansi', 'Uttar Pradesh'),
(1327, 'Kalpi', 'Uttar Pradesh'),
(1328, 'Kanpur', 'Uttar Pradesh'),
(1329, 'Kota', 'Uttar Pradesh'),
(1330, 'Laharpur', 'Uttar Pradesh'),
(1331, 'Lakhimpur', 'Uttar Pradesh'),
(1332, 'Lal Gopalganj Nindaura', 'Uttar Pradesh'),
(1333, 'Lalganj', 'Uttar Pradesh'),
(1334, 'Lalitpur', 'Uttar Pradesh'),
(1335, 'Lar', 'Uttar Pradesh'),
(1336, 'Loni', 'Uttar Pradesh'),
(1337, 'Lucknow', 'Uttar Pradesh'),
(1338, 'Mathura', 'Uttar Pradesh'),
(1339, 'Meerut', 'Uttar Pradesh'),
(1340, 'Modinagar', 'Uttar Pradesh'),
(1341, 'Muradnagar', 'Uttar Pradesh'),
(1342, 'Nagina', 'Uttar Pradesh'),
(1343, 'Najibabad', 'Uttar Pradesh'),
(1344, 'Nakur', 'Uttar Pradesh'),
(1345, 'Nanpara', 'Uttar Pradesh'),
(1346, 'Naraura', 'Uttar Pradesh'),
(1347, 'Naugawan Sadat', 'Uttar Pradesh'),
(1348, 'Nautanwa', 'Uttar Pradesh'),
(1349, 'Nawabganj', 'Uttar Pradesh'),
(1350, 'Nehtaur', 'Uttar Pradesh'),
(1351, 'NOIDA', 'Uttar Pradesh'),
(1352, 'Noorpur', 'Uttar Pradesh'),
(1353, 'Obra', 'Uttar Pradesh'),
(1354, 'Orai', 'Uttar Pradesh'),
(1355, 'Padrauna', 'Uttar Pradesh'),
(1356, 'Palia Kalan', 'Uttar Pradesh'),
(1357, 'Parasi', 'Uttar Pradesh'),
(1358, 'Phulpur', 'Uttar Pradesh'),
(1359, 'Pihani', 'Uttar Pradesh'),
(1360, 'Pilibhit', 'Uttar Pradesh'),
(1361, 'Pilkhuwa', 'Uttar Pradesh'),
(1362, 'Powayan', 'Uttar Pradesh'),
(1363, 'Pukhrayan', 'Uttar Pradesh'),
(1364, 'Puranpur', 'Uttar Pradesh'),
(1365, 'Purquazi', 'Uttar Pradesh'),
(1366, 'Purwa', 'Uttar Pradesh'),
(1367, 'Rae Bareli', 'Uttar Pradesh'),
(1368, 'Rampur', 'Uttar Pradesh'),
(1369, 'Rampur Maniharan', 'Uttar Pradesh'),
(1370, 'Rasra', 'Uttar Pradesh'),
(1371, 'Rath', 'Uttar Pradesh'),
(1372, 'Renukoot', 'Uttar Pradesh'),
(1373, 'Reoti', 'Uttar Pradesh'),
(1374, 'Robertsganj', 'Uttar Pradesh'),
(1375, 'Rudauli', 'Uttar Pradesh'),
(1376, 'Rudrapur', 'Uttar Pradesh'),
(1377, 'Sadabad', 'Uttar Pradesh'),
(1378, 'Safipur', 'Uttar Pradesh'),
(1379, 'Saharanpur', 'Uttar Pradesh'),
(1380, 'Sahaspur', 'Uttar Pradesh'),
(1381, 'Sahaswan', 'Uttar Pradesh'),
(1382, 'Sahawar', 'Uttar Pradesh'),
(1383, 'Sahjanwa', 'Uttar Pradesh'),
(1384, 'Saidpur', ' Ghazipur'),
(1385, 'Sambhal', 'Uttar Pradesh'),
(1386, 'Samdhan', 'Uttar Pradesh'),
(1387, 'Samthar', 'Uttar Pradesh'),
(1388, 'Sandi', 'Uttar Pradesh'),
(1389, 'Sandila', 'Uttar Pradesh'),
(1390, 'Sardhana', 'Uttar Pradesh'),
(1391, 'Seohara', 'Uttar Pradesh'),
(1392, 'Shahabad', ' Hardoi'),
(1393, 'Shahabad', ' Rampur'),
(1394, 'Shahganj', 'Uttar Pradesh'),
(1395, 'Shahjahanpur', 'Uttar Pradesh'),
(1396, 'Shamli', 'Uttar Pradesh'),
(1397, 'Shamsabad', ' Agra'),
(1398, 'Shamsabad', ' Farrukhabad'),
(1399, 'Sherkot', 'Uttar Pradesh'),
(1400, 'Shikarpur', ' Bulandshahr'),
(1401, 'Shikohabad', 'Uttar Pradesh'),
(1402, 'Shishgarh', 'Uttar Pradesh'),
(1403, 'Siana', 'Uttar Pradesh'),
(1404, 'Sikanderpur', 'Uttar Pradesh'),
(1405, 'Sikandra Rao', 'Uttar Pradesh'),
(1406, 'Sikandrabad', 'Uttar Pradesh'),
(1407, 'Sirsaganj', 'Uttar Pradesh'),
(1408, 'Sirsi', 'Uttar Pradesh'),
(1409, 'Sitapur', 'Uttar Pradesh'),
(1410, 'Soron', 'Uttar Pradesh'),
(1411, 'Suar', 'Uttar Pradesh'),
(1412, 'Sultanpur', 'Uttar Pradesh'),
(1413, 'Sumerpur', 'Uttar Pradesh'),
(1414, 'Tanda', 'Uttar Pradesh'),
(1415, 'Tanda', 'Uttar Pradesh'),
(1416, 'Tetri Bazar', 'Uttar Pradesh'),
(1417, 'Thakurdwara', 'Uttar Pradesh'),
(1418, 'Thana Bhawan', 'Uttar Pradesh'),
(1419, 'Tilhar', 'Uttar Pradesh'),
(1420, 'Tirwaganj', 'Uttar Pradesh'),
(1421, 'Tulsipur', 'Uttar Pradesh'),
(1422, 'Tundla', 'Uttar Pradesh'),
(1423, 'Unnao', 'Uttar Pradesh'),
(1424, 'Utraula', 'Uttar Pradesh'),
(1425, 'Varanasi', 'Uttar Pradesh'),
(1426, 'Vrindavan', 'Uttar Pradesh'),
(1427, 'Warhapur', 'Uttar Pradesh'),
(1428, 'Zaidpur', 'Uttar Pradesh'),
(1429, 'Zamania', 'Uttar Pradesh'),
(1430, 'Almora', 'Uttarakhand'),
(1431, 'Bazpur', 'Uttarakhand'),
(1432, 'Chamba', 'Uttarakhand'),
(1433, 'Dehradun', 'Uttarakhand'),
(1434, 'Haldwani', 'Uttarakhand'),
(1435, 'Haridwar', 'Uttarakhand'),
(1436, 'Jaspur', 'Uttarakhand'),
(1437, 'Kashipur', 'Uttarakhand'),
(1438, 'kichha', 'Uttarakhand'),
(1439, 'Kotdwara', 'Uttarakhand'),
(1440, 'Manglaur', 'Uttarakhand'),
(1441, 'Mussoorie', 'Uttarakhand'),
(1442, 'Nagla', 'Uttarakhand'),
(1443, 'Nainital', 'Uttarakhand'),
(1444, 'Pauri', 'Uttarakhand'),
(1445, 'Pithoragarh', 'Uttarakhand'),
(1446, 'Ramnagar', 'Uttarakhand'),
(1447, 'Rishikesh', 'Uttarakhand'),
(1448, 'Roorkee', 'Uttarakhand'),
(1449, 'Rudrapur', 'Uttarakhand'),
(1450, 'Sitarganj', 'Uttarakhand'),
(1451, 'Tehri', 'Uttarakhand'),
(1452, 'Muzaffarnagar', 'Uttar Pradesh'),
(1453, 'Adra', ' Purulia'),
(1454, 'Alipurduar', 'West Bengal'),
(1455, 'Arambagh', 'West Bengal'),
(1456, 'Asansol', 'West Bengal'),
(1457, 'Baharampur', 'West Bengal'),
(1458, 'Bally', 'West Bengal'),
(1459, 'Balurghat', 'West Bengal'),
(1460, 'Bankura', 'West Bengal'),
(1461, 'Barakar', 'West Bengal'),
(1462, 'Barasat', 'West Bengal'),
(1463, 'Bardhaman', 'West Bengal'),
(1464, 'Bidhan Nagar', 'West Bengal'),
(1465, 'Chinsura', 'West Bengal'),
(1466, 'Contai', 'West Bengal'),
(1467, 'Cooch Behar', 'West Bengal'),
(1468, 'Darjeeling', 'West Bengal'),
(1469, 'Durgapur', 'West Bengal'),
(1470, 'Haldia', 'West Bengal'),
(1471, 'Howrah', 'West Bengal'),
(1472, 'Islampur', 'West Bengal'),
(1473, 'Jhargram', 'West Bengal'),
(1474, 'Kharagpur', 'West Bengal'),
(1475, 'Kolkata', 'West Bengal'),
(1476, 'Mainaguri', 'West Bengal'),
(1477, 'Mal', 'West Bengal'),
(1478, 'Mathabhanga', 'West Bengal'),
(1479, 'Medinipur', 'West Bengal'),
(1480, 'Memari', 'West Bengal'),
(1481, 'Monoharpur', 'West Bengal'),
(1482, 'Murshidabad', 'West Bengal'),
(1483, 'Nabadwip', 'West Bengal'),
(1484, 'Naihati', 'West Bengal'),
(1485, 'Panchla', 'West Bengal'),
(1486, 'Pandua', 'West Bengal'),
(1487, 'Paschim Punropara', 'West Bengal'),
(1488, 'Purulia', 'West Bengal'),
(1489, 'Raghunathpur', 'West Bengal'),
(1490, 'Raiganj', 'West Bengal'),
(1491, 'Rampurhat', 'West Bengal'),
(1492, 'Ranaghat', 'West Bengal'),
(1493, 'Sainthia', 'West Bengal'),
(1494, 'Santipur', 'West Bengal'),
(1495, 'Siliguri', 'West Bengal'),
(1496, 'Sonamukhi', 'West Bengal'),
(1497, 'Srirampore', 'West Bengal'),
(1498, 'Suri', 'West Bengal'),
(1499, 'Taki', 'West Bengal'),
(1500, 'Tamluk', 'West Bengal'),
(1501, 'Tarakeswar', 'West Bengal'),
(1502, 'Chikmagalur', 'Karnataka'),
(1503, 'Davanagere', 'Karnataka'),
(1504, 'Dharwad', 'Karnataka'),
(1505, 'Gadag', 'Karnataka'),
(1506, 'Chennai', 'Tamil Nadu'),
(1507, 'Coimbatore', 'Tamil Nadu');

-- --------------------------------------------------------

--
-- Table structure for table `dealspayment`
--

CREATE TABLE `dealspayment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leadid` bigint(20) NOT NULL,
  `fixvalue` bigint(20) DEFAULT 0,
  `adv` bigint(20) NOT NULL DEFAULT 0,
  `balance` bigint(20) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dealspayment`
--

INSERT INTO `dealspayment` (`id`, `leadid`, `fixvalue`, `adv`, `balance`, `created_at`) VALUES
(3, 119, 85000, 10000, 75000, '2024-04-02 17:35:29'),
(5, 119, 75000, 70000, 5000, '2024-04-02 18:08:54'),
(6, 119, 0, 5000, 0, '2024-04-03 12:08:54'),
(8, 122, 0, 4000, 0, '2024-04-03 12:11:55'),
(9, 122, 0, 300, 0, '2024-04-03 12:14:22'),
(10, 121, 0, 50000, 0, '2024-04-03 12:37:34'),
(11, 121, 0, 4000, 0, '2024-04-03 12:45:14'),
(12, 121, 0, 1000, 0, '2024-04-03 13:00:50'),
(13, 122, 0, 200, 0, '2024-04-03 15:04:53'),
(14, 194, 0, 2000, 0, '2024-04-12 18:14:35'),
(15, 194, 0, 100, 0, '2024-04-12 18:45:01'),
(16, 194, 0, 200, 0, '2024-04-16 20:36:11'),
(17, 247, 0, 10, 0, '2024-04-19 19:51:26'),
(18, 247, 0, 250, 0, '2024-04-19 19:58:11'),
(19, 247, 0, 20, 0, '2024-04-19 19:59:49'),
(20, 247, 0, 30, 0, '2024-04-19 20:00:04'),
(21, 247, 0, 30, 0, '2024-04-20 16:22:41'),
(22, 303, 0, 500, 0, '2024-04-30 18:57:48'),
(23, 303, 0, 1000, 0, '2024-04-30 18:58:05'),
(24, 311, 0, 15000, 0, '2024-05-06 17:39:18'),
(25, 311, 0, 2000, 0, '2024-05-06 17:39:29'),
(26, 311, 0, 3000, 0, '2024-05-06 17:39:56'),
(27, 306, 0, 1500, 0, '2024-05-07 11:09:23'),
(28, 306, 0, 1200, 0, '2024-05-07 11:09:36'),
(29, 307, 0, 1200, 0, '2024-05-07 11:10:11'),
(30, 307, 0, 100, 0, '2024-05-07 11:10:20'),
(31, 307, 0, 1200, 0, '2024-05-07 11:10:25'),
(32, 208, 0, 1000, 0, '2024-05-20 15:40:10'),
(33, 208, 0, 500, 0, '2024-05-20 15:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `emailrecords`
--

CREATE TABLE `emailrecords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leadid` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(200) NOT NULL,
  `emailsubject` varchar(200) NOT NULL,
  `mailsenddate` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `folloupstbl`
--

CREATE TABLE `folloupstbl` (
  `fid` bigint(20) UNSIGNED NOT NULL,
  `leadid` bigint(20) NOT NULL,
  `typeoffollowup` varchar(200) DEFAULT NULL,
  `nextfollowup` timestamp NULL DEFAULT NULL,
  `customername` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `project` varchar(200) NOT NULL,
  `companyname` varchar(200) DEFAULT NULL,
  `followupstatus` int(200) NOT NULL DEFAULT 0 COMMENT '0 for pending , 1 resheduled , 2 close',
  `followupnotes` text DEFAULT NULL,
  `teamid` bigint(20) UNSIGNED NOT NULL,
  `teamnames` varchar(120) NOT NULL,
  `companyid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `folloupstbl`
--

INSERT INTO `folloupstbl` (`fid`, `leadid`, `typeoffollowup`, `nextfollowup`, `customername`, `phone`, `email`, `project`, `companyname`, `followupstatus`, `followupnotes`, `teamid`, `teamnames`, `companyid`) VALUES
(153, 303, 'Call', '2024-04-30 13:33:00', 'Srinitha', '7884561230', 'fgf@gmail.com', 'Web Design', 'Jp Constructions', 1, 'call the client for meeting set up ', 101, 'srinitha', '6630df1907368'),
(154, 303, 'Email', '2024-04-30 13:34:00', 'Srinitha', '7884561230', 'fgf@gmail.com', 'Web Design', 'Jp Constructions', 2, 'email is sent , so closing it ', 101, 'srinitha', '6630df1907368'),
(155, 303, 'Call', '2024-05-01 15:40:00', 'Srinitha', '7884561230', 'fgf@gmail.com', 'Web Design', 'Jp Constructions', 0, 'client re scheduled ', 101, 'srinitha', '6630df1907368'),
(156, 307, 'Call', '2024-05-02 04:56:00', 'akash', '3454546565', 'fgf@gmail.com', 'hfghghjgh', 'symnatec space', 2, 'dfdfdf', 104, 'User', '6632419fc87a3'),
(157, 306, 'Call', '2024-05-02 06:08:00', 'fghfgh', '9456451414', 'dfvsd@in', 'hfghghjgh', 'fghfg', 1, 'Call for demo', 104, 'User', '6632419fc87a3'),
(158, 306, 'Email', '2024-05-02 06:08:00', 'fghfgh', '9456451414', 'dfvsd@in', 'hfghghjgh', 'fghfg', 2, 'wwsdfasdf', 104, 'User', '6632419fc87a3'),
(159, 306, 'Email', '2024-05-01 21:19:00', 'fghfgh', '9456451414', 'dfvsd@in', 'hfghghjgh', 'fghfg', 2, 'dfdf', 104, 'User', '6632419fc87a3'),
(160, 308, 'Call', '2024-05-02 14:31:00', 'Asif', '9876543214', 'dfsdf@gmail.com', 'php', 'co', 2, 'Call Done', 96, 'asif', '662f3ac6832b5'),
(161, 311, 'Call', '2024-05-03 14:47:00', 'Atchyut', '9030143896', 'na@na.com', 'eCommerce', 'NA', 1, 'Call Client to enquiry ', 106, 'Bharath', '66339d9b5c5ba'),
(162, 311, 'Call', '2024-05-06 06:55:00', 'Atchyut', '9030143896', 'na@na.com', 'eCommerce', 'NA', 2, '522', 106, 'Bharath', '66339d9b5c5ba'),
(163, 313, 'Call', '2024-05-06 06:02:00', 'Atchyut', '9030143896', 'NA@NA.COM', 'eCommerce', 'NA', 1, 'call', 106, 'Bharath', '66339d9b5c5ba'),
(164, 315, 'Call', '2024-05-07 06:45:00', 'dsfsdf', '4567894568', 'dfgvsd@gmail.com', 'hfghghjgh', 'sdfdsf', 0, 'dsfgdfg', 104, 'User', '6632419fc87a3'),
(165, 315, 'Call', '2024-05-06 09:00:00', 'dsfsdf', '4567894568', 'dfgvsd@gmail.com', 'hfghghjgh', 'sdfdsf', 0, 'cfdgvdf', 104, 'User', '6632419fc87a3'),
(166, 313, 'Call', '2024-05-07 06:03:00', 'Atchyut', '9030143896', 'NA@NA.COM', 'eCommerce', 'NA', 0, 'call', 106, 'Bharath', ''),
(167, 203, 'Call', '2024-05-16 06:26:00', 'huivukvou', '9390024176', 'notavailable@gmail.com', 'Web Development', 'klyufiyf', 0, 'kllnjbu', 121, 'Arya', '66339d9b5c5ba'),
(168, 203, 'Call', '2024-05-14 06:27:00', 'huivukvou', '9390024176', 'notavailable@gmail.com', 'Web Development', 'klyufiyf', 0, 'okiuviub', 121, 'Arya', '66339d9b5c5ba'),
(169, 204, 'Call', '2024-05-17 06:38:00', 'Divya', '7382373824', 'pixldigitalsolutions@gmail.com', 'Web Development', 'PIXL Digital Solutions', 0, 'call back on 17th', 117, 'Ayesha', '66339d9b5c5ba'),
(189, 295, 'Call', '2024-05-20 09:04:00', 'Raj', '9879879874', 'raj@pic2hire.com', 'php', 'pic2hire', 0, 'Email Done call do', 161, 'Shaik Asif', '664ae2146d61e'),
(190, 296, 'Call', '2024-05-20 07:03:00', 'sri kanth', '2581473698', 'fdf@gmail.com', 'php', 'doc clinic', 2, 'fhgf', 162, 'Sameer', '664ae2146d61e'),
(191, 208, 'Email', '2024-05-20 07:13:00', 'Asif', '9440161007', 'ss@gmail.com', 'Php', 'Pixl', 0, 'dsgfdsg dfgdfg ', 162, 'Sameer', '664ae2146d61e'),
(192, 208, 'Call', '2024-05-22 08:33:00', 'Asif', '9440161007', 'ss@gmail.com', 'Php', 'Pixl', 0, 'Call me dfvdsf dssdg', 162, 'Sameer', '664ae2146d61e'),
(193, 298, 'Call', '2024-05-20 12:54:00', 'demo', '2587412587', 'df@gmail.com', 'php', 'demo', 0, 'sdfsdf ssfdsdff', 163, 'Aayan', '664ae2146d61e');

-- --------------------------------------------------------

--
-- Table structure for table `followuptype`
--

CREATE TABLE `followuptype` (
  `fid` int(10) UNSIGNED NOT NULL,
  `ftype` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `followuptype`
--

INSERT INTO `followuptype` (`fid`, `ftype`) VALUES
(1, 'Call'),
(2, 'Email'),
(3, 'Visit'),
(4, 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `lead`
--

CREATE TABLE `lead` (
  `leadid` int(20) UNSIGNED NOT NULL,
  `customer` varchar(200) NOT NULL,
  `ogrinazation` varchar(200) DEFAULT NULL,
  `contactperson` bigint(20) DEFAULT NULL,
  `title` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `value` int(11) DEFAULT NULL,
  `currency` varchar(200) DEFAULT NULL,
  `label` varchar(200) DEFAULT NULL,
  `owner` varchar(200) NOT NULL,
  `leadownerid` int(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `phonetype` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `emailtype` varchar(200) DEFAULT NULL,
  `addressline_1` text DEFAULT NULL,
  `addressline_2` text DEFAULT NULL,
  `addressline_3` text DEFAULT NULL,
  `town` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `zipcode` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(200) NOT NULL,
  `created_by_id` int(20) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 3 COMMENT '0 for close, 1 for reminder later , 2 not respoinding , 3 waiting, 4 for deal',
  `expacteddate` date DEFAULT NULL,
  `filepath` varchar(200) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `team` varchar(200) DEFAULT NULL,
  `dealstatus` int(20) DEFAULT 0 COMMENT '0 - Inprogress , 1 for close , 2 for lost , 3 for repoen\r\n',
  `lead_comments` text DEFAULT NULL,
  `dealfixdate` date DEFAULT NULL,
  `leadsource` varchar(200) NOT NULL,
  `leadstage` int(20) NOT NULL DEFAULT 0 COMMENT '0 : Lead Initiated\r\n, 2 : Proposal Sent\r\n ,3 : Discussion  :4 Follow up Mode\r\n,5 : Closed\r\n',
  `color` varchar(200) NOT NULL DEFAULT 'chart.get("colors").getIndex(0)',
  `leadstagetext` varchar(120) NOT NULL DEFAULT 'Initiated',
  `companyid` text NOT NULL,
  `leaddata` int(20) DEFAULT NULL,
  `dealdata` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lead`
--

INSERT INTO `lead` (`leadid`, `customer`, `ogrinazation`, `contactperson`, `title`, `description`, `value`, `currency`, `label`, `owner`, `leadownerid`, `phone`, `phonetype`, `email`, `emailtype`, `addressline_1`, `addressline_2`, `addressline_3`, `town`, `state`, `zipcode`, `country`, `created_at`, `created_by`, `created_by_id`, `status`, `expacteddate`, `filepath`, `content`, `team`, `dealstatus`, `lead_comments`, `dealfixdate`, `leadsource`, `leadstage`, `color`, `leadstagetext`, `companyid`, `leaddata`, `dealdata`) VALUES
(34, 'Naveen', 'Hotel & Resort', NULL, 'Web Development', 'NA', 20000, NULL, 'Cold', 'sai kiran', 114, 9891977711, NULL, 'no@mail.com', NULL, NULL, NULL, NULL, 'Karnataka', NULL, NULL, NULL, '2024-02-05 15:41:00', 'sai kiran', 5, 4, '2024-02-12', NULL, 'NA', 'Asif', 1, NULL, '2024-02-12', 'Just Dail', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(35, 'Tirumal', 'NA', NULL, 'Web Development', 'Web development', 50000, NULL, 'Cold', 'sai kiran', 114, 7993967896, NULL, 'saikiran@pixl.in', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-09 05:15:29', 'sai kiran', 5, 4, '2024-03-30', NULL, 'Need a website ( PHP & Laravel )', 'Sravan', 0, NULL, '2024-03-09', 'Just Dail', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(41, 'Surender', 'Farm Fresh Chicken', NULL, 'Web Development', 'Deal completed', 8000, NULL, 'Hot', 'sai kiran', 114, 9704314141, NULL, 'info@farmfreshchicken.online', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-02-16 10:06:00', 'Sai Kiran', 5, 4, '2024-02-28', NULL, 'Website Redesign, Changing Images & Payment Integration', NULL, 1, NULL, NULL, 'Just Dail', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(42, 'Reddy', 'Reddy Car Rentals', NULL, 'Digital Marketing', 'Website Redesign', 7000, NULL, 'Hot', 'sai kiran', 114, 9666326033, NULL, 'reddycabs09@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-02-05 10:12:00', 'sai kiran', 5, 4, '2024-02-17', NULL, 'Website Redesign', 'Nikhil', 1, NULL, '2024-02-21', 'Just Dail', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(46, 'KB Reddy', 'KSL RICE', NULL, 'E-commerce website', 'Client needs a E-Commerce website for his RICE Shop similar as https://ricedesk.com/', 21000, NULL, 'Hot', 'sai kiran', 114, 8639591900, NULL, 'kbreddy3636@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-02-29 09:54:09', 'sai kiran', 5, 4, '2024-03-05', NULL, 'Deal Done', 'Nikhil', 1, NULL, '2024-02-29', 'Just Dail', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(47, 'Akhil Santhosh', 'Whimsical Streaks', NULL, 'Web Development', 'Client needs a website', 8000, NULL, 'Hot', 'sai kiran', 114, 7424946793, NULL, 'notavailable1347@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-04 00:30:00', 'Sai Kiran', 5, 4, '2024-03-09', NULL, 'Deal done', NULL, 1, NULL, NULL, 'Referance', 0, 'chart.get(\"colors\").getIndex(0)', 'Closed', '66339d9b5c5ba', NULL, NULL),
(48, 'Vaishali Deshmukh', '3DFOREGOER', NULL, 'Digital Marketing', 'Website Development', 6000, NULL, 'Cold', 'Sai Kiran', 114, 7382450170, NULL, 'contact@3dforegoer.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-09 16:07:30', 'Sai Kiran', 5, 4, '2024-03-11', NULL, 'Website Redesign', NULL, 1, NULL, '2024-03-09', 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(50, 'Uma Shankar', 'NENDRAGANTI AND ASSOCIATES', NULL, 'Web Development', 'Client needs a website', 7000, NULL, 'Hot', 'Sai Kiran', 114, 9703219073, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-12 11:31:19', 'Sai Kiran', 5, 4, '2024-03-18', NULL, 'Client needs a website', NULL, 1, NULL, '2024-03-14', 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(52, 'Piyush Kulkarni', 'Steel', NULL, 'Web Development', 'Website development', 8000, NULL, 'Warm', 'Sai Kiran', 114, 8099338261, NULL, 'saikiran@pixl.in', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-12 11:47:53', 'Sai Kiran', 5, 4, '2024-03-13', NULL, 'Done closed by Bharath', NULL, 1, NULL, '2024-03-12', 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(53, 'S Ram Bhupal Reddy', 'SURAVARAM AND ASSOCIATES ( CHARTERED ACCOUNTS )', NULL, 'Website Re-Design', 'Client needs a website redesign https://www.saacas.in/', 16000, NULL, 'Hot', 'Sai Kiran', 114, 9390024176, NULL, 'ca.client@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-07 18:52:47', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Data', 0, 'chart.get(\"colors\").getIndex(0)', 'Follow Up', '66339d9b5c5ba', NULL, NULL),
(63, 'Sarath', 'bingnbliss', NULL, 'Digital Marketing', 'Need to talk to the client about website development', 35000, NULL, 'Cold', 'Sai Kiran', 114, 7981936857, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-16 11:25:24', 'Sai Kiran', 5, 4, '2024-03-19', NULL, 'Deal done', NULL, 1, NULL, '2024-03-18', 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(65, 'Kasi Vishwanath', 'Vishwa Properties', NULL, 'Web Development', 'Client needs a website for Real-Estate', 15000, NULL, 'Hot', 'Sai Kiran', 114, 9573802429, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-14 15:44:17', 'Sai Kiran', 5, 4, '2024-03-18', NULL, 'Need a website for Real Estate', NULL, 1, NULL, '2024-03-14', 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Closed', '66339d9b5c5ba', NULL, NULL),
(67, 'Cindy Morenas', 'Cindy Morenas', NULL, 'Digital Marketing', 'Client needs a E-commerce website', 22000, NULL, 'Warm', 'Sai Kiran', 114, 9655388289, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-14 18:00:52', 'Sai Kiran', 5, 4, '2024-04-01', NULL, 'Client needs an E-commerce website & paid 11,000 .............Balance due 11,000', NULL, 1, NULL, '2024-03-19', 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(68, 'Karteek', 'OneQsoft', NULL, 'Web Development', 'The client needs a website for Courses', 8000, NULL, 'Cold', 'Sai Kiran', 114, 9603340230, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-15 18:25:23', 'Sai Kiran', 5, 4, '2024-03-20', NULL, 'Educational website due amount 4K', NULL, 1, NULL, NULL, 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(76, 'Suneel', 'Educational Institute', NULL, 'Web Development', 'Client needs a website for his educational institute', 25000, NULL, 'Warm', 'Sai Kiran', 114, 7674924672, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-19 11:23:17', 'Sai Kiran', 5, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Justdial', 0, 'chart.get(\"colors\").getIndex(0)', 'Follow Up', '66339d9b5c5ba', NULL, NULL),
(77, 'Divya', 'Dental', NULL, 'Web Development', 'Client needs a website for Dental', 10000, NULL, 'Hot', 'Sai Kiran', 114, 9820174520, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Mumbai', NULL, NULL, NULL, '2024-03-19 16:01:27', 'Sai Kiran', 5, 4, '2024-03-22', NULL, 'Client paid 5000 rupees...........balance 5000rs', NULL, 1, NULL, '2024-03-19', 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(80, 'Akash Sharma', 'NA', NULL, 'Web Development', 'Client needs 3 websites and said he will visit the office tomorrow 21 Mar or 22 Mar', 50000, NULL, 'Warm', 'Sai Kiran', 114, 9573334017, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-21 16:28:55', 'Sai Kiran', 5, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Justdial', 0, 'chart.get(\"colors\").getIndex(0)', 'Follow Up', '66339d9b5c5ba', NULL, NULL),
(82, 'Surya Prakash', 'Journal website', NULL, 'Web Development', 'Client needs a journal website', 18000, NULL, 'Hot', 'Sai Kiran', 114, 7780685645, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-21 16:46:04', 'Sai Kiran', 5, 4, '2024-04-03', NULL, 'Client needs a journal website and he paid the advance of 9000', NULL, 1, NULL, '2024-03-27', 'Justdial', 0, 'chart.get(\"colors\").getIndex(0)', 'Closed', '66339d9b5c5ba', NULL, NULL),
(83, 'Chary', 'Kala Digital Creations', NULL, 'E-Commerce Website', 'Client needs E-commerce website, Android App & iOS App', 70000, NULL, 'Cold', 'Sai Kiran', 114, 9392098824, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-23 17:24:31', 'Sai Kiran', 5, 4, '2024-04-10', NULL, 'Deal closed client pais 20K advance and 50K balance due', NULL, 0, NULL, '2024-03-27', 'JUSTDIAL', 0, 'chart.get(\"colors\").getIndex(0)', 'Closed', '66339d9b5c5ba', NULL, NULL),
(84, 'amit', 'Insurance', NULL, 'Web Development', 'Need to follow up', 23000, NULL, 'Hot', 'Bhavani', 108, 9167222904, NULL, 'nomail@gmail.com', NULL, NULL, NULL, NULL, 'Mumbai', NULL, NULL, NULL, '2024-03-22 10:20:59', 'Bhavani', 10, 4, '2024-04-27', NULL, 'Deal closed', NULL, 0, NULL, '2024-04-19', 'Justdial', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(85, 'ayush', 'Business services', NULL, 'Web Development', 'need to talk to the client', 25000, NULL, 'Warm', 'Bhavani', 108, 7058452513, NULL, 'nomail@gmail.com', NULL, NULL, NULL, NULL, 'North state', NULL, NULL, NULL, '2024-03-22 10:41:23', 'Bhavani', 10, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Justdial', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(86, 'Raju', 'beauty salon', NULL, 'Digital Marketing', 'Converted the lead', 14000, '25000', 'Hot', 'Bhavani', 108, 8105501281, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-22 12:18:44', 'Sai Kiran', 5, 4, '2024-04-01', NULL, 'Deal closed', NULL, 1, NULL, NULL, 'Data', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(87, 'Ajay', 'Insurance related', NULL, 'Web Development', 'Deal closed', 18000, NULL, 'Hot', 'Bhavani', 108, 9052547790, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-22 12:52:32', 'Bhavani', 10, 4, '2024-03-30', NULL, 'deal closed', NULL, 1, NULL, '2024-03-22', 'JUSTDIAL', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(89, 'Anmol', 'Website company', NULL, 'Web Development', 'Need to talk to the client', 7000, '10000', 'Warm', 'Bhavani', 108, 8779658930, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-22 13:53:13', 'Bhavani', 10, 4, '2024-05-03', NULL, 'Deal closed', NULL, 0, NULL, NULL, 'BARK', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(90, 'Vishnu', 'Website related', NULL, 'Web Development', 'Need to talk to the client', NULL, NULL, 'Cold', 'Bhavani', 108, 8008650650, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-10 13:13:21', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Bark', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(92, 'Rehan', 'small business', NULL, 'Web Development', 'Need to talk to the client', 10000, NULL, 'Warm', 'Bhavani', 108, 9250345540, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-22 14:03:14', 'Bhavani', 10, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'BARK', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(93, 'Jainil', 'small business', NULL, 'Digital Marketing', 'Need to talk to the client', 12000, NULL, 'Cold', 'Bhavani', 108, 8770680703, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-10 13:14:17', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Bark', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(94, 'Venkatesh', 'small business', NULL, 'Digital Marketing', 'need to talk to the client', 20000, NULL, 'Cold', 'Bhavani', 108, 9704414106, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-10 13:14:08', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Bark', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(95, 'Rahul', 'Small business', NULL, 'Web Development', 'Need to talk to the client', 10000, NULL, 'Warm', 'Bhavani', 108, 8501049525, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-10 13:13:59', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Bark', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(96, 'advath assar ar', 'small business', NULL, 'Digital Marketing', 'need to talk to the client', 20000, NULL, 'Cold', 'Bhavani', 108, 9572911895, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Patna', NULL, NULL, NULL, '2024-05-10 13:13:51', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Bark', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(97, 'Abdhul', 'Mohammed abdhul', NULL, 'Digital Marketing', 'Deal closed', 6000, NULL, 'Hot', 'Bhavani', 108, 7660922047, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-22 16:52:15', 'Bhavani', 10, 4, '2024-03-22', NULL, 'Deal closed', NULL, 1, NULL, '2024-03-22', 'DATA', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(98, 'Pratap', 'Sri Varsha Creations', NULL, 'E-Commerce Website', 'Client needs E-commerce website', 35000, NULL, 'Hot', 'Sai Kiran', 114, 9849382403, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-22 16:55:38', 'Sai Kiran', 5, 4, '2024-04-01', NULL, 'Need an E-commerce website BPR 35K and the client paid 17,500', NULL, 0, NULL, NULL, 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Follow Up', '66339d9b5c5ba', NULL, NULL),
(99, 'Preetham', 'Lobster', NULL, 'Web Development', 'client needs a website & App for events and the BPR I said it\'s not final it\'s just for the note', 35000, NULL, 'Hot', 'Sai Kiran', 114, 7995314630, NULL, 'nomail@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-26 10:47:21', 'Sai Kiran', 5, 4, '2024-04-24', NULL, 'The deal closed  20K Adv paid, a 15K balance due', NULL, 3, NULL, NULL, 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Closed', '66339d9b5c5ba', NULL, NULL),
(100, 'Uttej Reddy', 'I3ROR', NULL, 'Digital Marketing', 'Client paid 12,500 and overall project cost 25K', 25000, NULL, 'Cold', 'Sai Kiran', 114, 8498922229, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-02 12:00:53', 'Sai Kiran', 5, 4, '2024-04-13', NULL, NULL, NULL, 0, NULL, '2024-04-04', 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'To Be Closed', '66339d9b5c5ba', NULL, NULL),
(101, 'AS Naidu', 'Real Estate', NULL, 'Web Development', 'Needs a website for RealEstate', 8000, NULL, 'Hot', 'Bharath', 106, 8074892558, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-26 10:56:02', 'Sai Kiran', 5, 4, '2024-04-01', NULL, 'Client needs a website and advance paid 5000 & the due is 3000', NULL, 0, NULL, '2024-03-26', 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(108, 'Asif', 'Asif Co', NULL, 'Android', 'Need Android', 24000, NULL, 'Cold', 'Bharath', 106, 9440161007, NULL, 'asif@pixl.in', NULL, NULL, NULL, NULL, 'Nellore', NULL, NULL, NULL, '2024-04-01 12:01:02', 'Bharath', 4, 4, '2024-04-05', NULL, 'Assigned Asif', NULL, 0, NULL, '2024-04-01', 'GOOGLE', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(110, 'Surya', 'JMJ SARAH CHARITY. ORG', NULL, 'Web Development', 'Needs a website that related to the NGO', 10000, NULL, 'Hot', 'Sai Kiran', 114, 7893451587, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-02 11:59:14', 'Sai Kiran', 5, 4, '2024-04-08', NULL, 'The client needs a website-related to Charity  and paid 6000 rupees , balance due 4000', NULL, 1, NULL, NULL, 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Closed', '66339d9b5c5ba', NULL, NULL),
(111, 'Subba Rao', 'NA', NULL, 'Web Development', 'Client needs a website for gym equipment repair', 8000, NULL, 'Hot', 'Sai Kiran', 114, 8639133775, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-02 14:33:52', 'Sai Kiran', 5, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Follow Up', '66339d9b5c5ba', NULL, NULL),
(113, 'Cindy Morenas', 'Swanky Heels', NULL, 'E-Commerce Website', 'Client needs an E-Commerce website for footwear Swankheels.com', 22000, NULL, 'Hot', 'Sai Kiran', 114, 9655388289, NULL, 'Cindy.morenas@gmail.com', NULL, NULL, NULL, NULL, 'Bangalore', NULL, NULL, NULL, '2024-04-02 16:34:53', 'Sai Kiran', 5, 4, '2024-04-06', NULL, 'Client paid 11K and the balance amount 11k', NULL, 1, NULL, '2024-04-02', 'BARK', 0, 'chart.get(\"colors\").getIndex(0)', 'Closed', '66339d9b5c5ba', NULL, NULL),
(116, 'Sirirenuka', 'Gift Vouchers, Gift cards', NULL, 'Web Development', 'Client needs a basic website single page', 5000, NULL, 'Hot', 'Sai Kiran', 114, 9154524242, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-03 16:45:59', 'Sai Kiran', 5, 4, '2024-04-23', NULL, 'Need a basic website only 1 page, overall cost 5k , paid 3k , 2k balance left', NULL, 1, NULL, '2024-04-22', 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Closed', '66339d9b5c5ba', NULL, NULL),
(124, 'Chidhanandh', 'Ecoshrine', NULL, 'E-Commerce Website', 'Deal closed', 15000, NULL, 'Hot', 'Bhavani', 108, 8951161651, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-04 17:33:15', 'Bhavani', 10, 4, '2024-04-06', NULL, 'Deal closed', NULL, 1, NULL, '2024-04-08', 'JUSTDIAL', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(125, 'Kumar', 'Food business', NULL, 'Digital Marketing', 'Need to follow up the client', 20000, NULL, 'Warm', 'Bhavani', 108, 9985050276, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-06 15:32:03', 'Bhavani', 10, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'JUSTDIAL', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(126, 'Sharath', 'Business', NULL, 'Digital Marketing', 'Need to follow up the client', 18000, NULL, 'Cold', 'Bhavani', 108, 8095900857, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-06 15:49:12', 'Bhavani', 10, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'JUSTDIAL', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(127, 'Shivanandha', 'Business', NULL, 'Digital Marketing', 'Need to talk to the client', 20000, NULL, 'Cold', 'Bhavani', 108, 9880401408, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-06 15:50:42', 'Bhavani', 10, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'JUSTDIAL', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(128, 'Shiva Ramakrishna', 'IT recruting', NULL, 'Web Development', 'The client needs a website for IT recruiting', 8000, NULL, 'Hot', 'Sai Kiran', 114, 9985774666, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-03-05 15:02:41', 'Sai Kiran', 5, 4, '2024-04-15', NULL, 'Client paid 4k adv, Balance due 4k', NULL, 1, NULL, '2024-04-08', 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'To Be Closed', '66339d9b5c5ba', NULL, NULL),
(129, 'Lokesh', 'Start Up', NULL, 'Web Development', 'The client needs a website for his start-up', 15000, NULL, 'Warm', 'Sai Kiran', 114, 7989213815, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-07 11:00:04', 'Sai Kiran', 5, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'JUSTDIAL', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(139, 'Chandra Prakash Munoth', 'MACCINDIA', NULL, 'Web Development', 'Client needs a basic website for Files and folders', 7000, NULL, 'Hot', 'Sai Kiran', 114, 6380530321, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-06 12:00:38', 'Sai Kiran', 5, 4, '2024-04-16', NULL, 'Client needs awebsite', NULL, 1, NULL, '2024-04-12', 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(144, 'Murthy', 'N/A', NULL, 'Web Development', 'Need basic website', 8000, NULL, 'Hot', 'Mahesh', 115, 9491697949, NULL, 'Nomail@gmail.com', NULL, NULL, NULL, NULL, 'Vizag', NULL, NULL, NULL, '2024-04-08 18:11:29', 'Mahesh', 13, 4, '2024-04-16', NULL, '3000 left', NULL, 1, NULL, '2024-04-08', 'JUSTDIAL', 0, 'chart.get(\"colors\").getIndex(0)', 'To Be Closed', '66339d9b5c5ba', NULL, NULL),
(146, 'Bindhu KSR', 'KSR', NULL, 'E-Commerce Website', 'The client needs an E-commerce website BPR is 25K', 25000, NULL, 'Cold', 'Sai Kiran', 114, 8688664551, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-24 11:17:37', 'Sai Kiran', 5, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'JUSTDIAL', 0, 'chart.get(\"colors\").getIndex(0)', 'Follow Up', '66339d9b5c5ba', NULL, NULL),
(147, 'Key Group IT Solutions', 'Key Group IT Solutions', NULL, 'Web Development', 'Client has an requirement for website IT Solutions', 10000, NULL, 'Cold', 'Sai Kiran', 114, 8712024242, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-24 11:17:44', 'Sai Kiran', 5, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'DATA', 0, 'chart.get(\"colors\").getIndex(0)', 'Follow Up', '66339d9b5c5ba', NULL, NULL),
(148, 'Kavitha', 'RAWH', NULL, 'E-Commerce Website', 'The client needs an E-Commerce website to sell natural nut butters', 20000, NULL, 'Hot', 'Sai Kiran', 114, 9603353338, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-16 18:43:06', 'Sai Kiran', 5, 4, '2024-05-01', NULL, 'Need an E-Commerce Website 20K, Advance paid 10K', NULL, 1, NULL, '2024-04-19', 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Follow Up', '66339d9b5c5ba', NULL, NULL),
(149, 'Santosh', 'Real Estate', NULL, 'Web Development', 'The client needs a Real Estate website', 12000, NULL, 'Warm', 'Sai Kiran', 114, 7794883288, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-16 18:45:28', 'Sai Kiran', 5, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(150, 'Pawan jangir', 'Interior', NULL, 'Web Development', 'Need a website for Interior', 12000, NULL, 'Cold', 'Sai Kiran', 114, 9985772136, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-16 16:14:13', 'Sai Kiran', 5, 4, '2024-04-25', NULL, 'Need an interior website', NULL, 0, NULL, '2024-04-18', 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Follow Up', '66339d9b5c5ba', NULL, NULL),
(151, 'Nirmala', 'Jewellery business', NULL, 'E-Commerce Website', 'Deal closed', 20000, NULL, 'Warm', 'Bhavani', 108, 8789763693, NULL, 'nomail@gmail.com', NULL, NULL, NULL, NULL, 'Banglore', NULL, NULL, NULL, '2024-04-19 16:43:27', 'Bhavani', 10, 4, '2024-04-28', NULL, 'Deal closed', NULL, 1, NULL, '2024-04-19', 'BARK', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(152, 'Allan', 'Business', NULL, 'Digital Marketing', 'Deal closed', 20000, NULL, 'Cold', 'Bhavani', 108, 7022971513, NULL, 'nomail@gmail.com', NULL, NULL, NULL, NULL, 'Banglore', NULL, NULL, NULL, '2024-04-19 17:28:55', 'Bhavani', 10, 4, '2024-04-27', NULL, 'Deal closed', NULL, 0, NULL, '2024-04-19', 'JUSTDIAL', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(153, 'Aslam', 'Textile business', NULL, 'E-Commerce Website', 'need to talk to the client', 22000, NULL, 'Warm', 'Bhavani', 108, 8762804401, NULL, 'nomail@gmail.com', NULL, NULL, NULL, NULL, 'Banglore', NULL, NULL, NULL, '2024-04-19 17:33:06', 'Bhavani', 10, 4, '2024-04-23', NULL, 'Deal closed', NULL, 1, NULL, '2024-04-19', 'JUSTDIAL', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(154, 'Sridhar', 'COCO DEW', NULL, 'Web Development', 'Need to talk to the client', 10000, NULL, 'Cold', 'Bhavani', 108, 9100937805, NULL, 'nomail@gmail.com', NULL, NULL, NULL, NULL, 'Banglore', NULL, NULL, NULL, '2024-04-19 17:36:18', 'Bhavani', 10, 4, '2024-04-30', NULL, 'Deal closed', NULL, 0, NULL, '2024-04-19', 'DATA', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(155, 'Lekkala Aditya', 'Lekkala Infra Projects', NULL, 'Web Development', 'Need a website for Infra Projects', 8000, NULL, 'Hot', 'Sai Kiran', 114, 9441414213, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-10 11:13:24', 'Sai Kiran', 5, 4, '2024-04-26', NULL, 'Advance paid 4K, Balance due 4K', NULL, 0, NULL, NULL, 'REFERENCE', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(157, 'Venu', 'Doctor\'s second opnion', NULL, 'Web Development', 'The client needs a  website for Doctor\'s second opnion', 23000, NULL, 'Hot', 'Sai Kiran', 114, 8341610671, NULL, 'venudr2001@yahoo.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-22 18:03:36', 'Sai Kiran', 5, 4, '2024-05-02', NULL, 'The client paid 10K as advance , Balance left 13K', NULL, 0, NULL, NULL, 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(163, 'Ram Reddy', 'Brundhavn Homes', NULL, 'Digital Marketing', 'Client needs a Basic Digital Marketing package', 23000, NULL, 'Hot', 'Sai Kiran', 114, 9949414400, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-24 11:17:19', 'Sai Kiran', 5, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'DATA', 0, 'chart.get(\"colors\").getIndex(0)', 'Discussion', '66339d9b5c5ba', NULL, NULL),
(164, 'RANJEETH KUMAAR', 'Mypaisa.online', NULL, 'Web Development', 'The client needs a Trading website', 10000, NULL, 'Hot', 'Sai Kiran', 114, 9642109176, NULL, 'ovationcapitalpvtltd@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-23 17:13:54', 'Sai Kiran', 5, 4, '2024-04-27', NULL, 'Need a website for trading, avance paid 5K, Balance due 5K', NULL, 1, NULL, NULL, 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(166, 'Venkat Eswar', 'TMWATCH.IN', NULL, 'Web Development', 'Need a basic website costs 7K', 13500, NULL, 'Cold', 'Sai Kiran', 114, 9959005551, NULL, 'venkat.kalangi@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-24 12:53:51', 'Sai Kiran', 5, 4, '2024-05-02', NULL, 'Client paid 8K, balance due 5500', NULL, 3, NULL, NULL, 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(172, 'Nithyanandh Nama', 'Dhiya Imports & Exports', NULL, 'Web Development', 'Client needs a website for Import & Export', 8000, NULL, 'Hot', 'Sai Kiran', 114, 9704019266, NULL, 'info@dhiyaimportexport.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-25 12:51:13', 'Sai Kiran', 5, 4, '2024-04-29', NULL, 'Need a basic site Adv paid 5K, Balance due 3k', NULL, 1, NULL, NULL, 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(173, 'Suneel', 'Me And My Holidays', NULL, 'Web Development', 'Needs a website for Travel and Hotel Booking, Price not yet decided ', 80000, NULL, 'Hot', 'Sai Kiran', 114, 8008001847, NULL, 'notavailable@1347', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-26 17:55:15', 'Sai Kiran', 5, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'DATA', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(174, 'Saivi Rewards Pvt Ltd', 'Saivi rewards Pvt Ltd', NULL, 'Select Service', 'Need a basic webiste for gift vouchers', 10000, NULL, NULL, 'Sai Kiran', 114, 9154524242, NULL, 'notavailable@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-27 11:10:58', 'Sai Kiran', 5, 4, '2024-05-03', NULL, 'Need a website for gift vouchers, advance paid 5k ...balance left 5k', NULL, 0, NULL, NULL, 'REFERENCE', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(175, 'Asif', 'pixl', NULL, 'Digital Marketing', 'qefweugWETG', 50000, NULL, 'Cold', 'Pavan', 15, 9014561825, NULL, 'accountant@themesbrand.website', NULL, NULL, NULL, NULL, 'hyd', NULL, NULL, NULL, '2024-04-27 14:48:53', 'Pavan', 15, 4, '2024-04-27', NULL, 'fgdfg', NULL, 0, NULL, NULL, 'GOOGLE', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(176, 'Nitin', 'Hyderabad Darshan', NULL, 'Website Re-Design', 'Need a website Redesign, WhatsApp & SMS Integration.  https://hyderabaddarshan.in/', 35000, NULL, 'Hot', 'Sai Kiran', 114, 9390008686, NULL, 'info@hyderabaddarshan.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-29 12:46:40', 'Sai Kiran', 5, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'DATA', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(177, 'Kumar', 'NA', NULL, 'E-Commerce Website', 'Need an E-Commerce website simultaneously Farm House booking on the same website', 80000, NULL, 'Hot', 'Sai Kiran', 114, 9133244433, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-30 10:36:01', 'Sai Kiran', 5, 4, '2024-05-22', NULL, 'Client needs an E-Com & farm house booking website advance paid 20K', NULL, 0, NULL, NULL, 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Discussion', '66339d9b5c5ba', NULL, NULL),
(178, 'Nirmala', 'Business', NULL, 'E-Commerce Website', 'Deal closed', 20000, NULL, 'Warm', 'Bhavani', 108, 8789763693, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-02 11:53:56', 'Bhavani', 10, 4, '2024-05-02', NULL, 'Deal closed', NULL, 0, NULL, NULL, 'JUSTDIAL', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(187, 'Nirmala', 'Business', NULL, 'E-Commerce Website', 'Deal closed', 20000, NULL, 'Warm', 'Bhavani', 108, 8789763693, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-02 11:53:56', 'Bhavani', 10, 4, '2024-05-15', NULL, 'Deal closed', NULL, 0, NULL, NULL, 'JUSTDIAL', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(189, '~Vishnu Prasad Yemmela', 'NA', NULL, 'Web Development', 'Coming 3-5-24', 7000, NULL, 'Hot', 'Mahesh', 115, 9885303193, NULL, 'no@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-02 18:00:30', 'Mahesh', 13, 4, '2024-05-10', NULL, 'corp1 site', NULL, 0, NULL, NULL, 'BHARATH', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(192, 'Shaik', 'Pixl g', NULL, 'Php', 'Shaik Asif', 2200, NULL, 'Cold', 'Shaik Aayan', 116, 9440161007, NULL, 'dg@gmail.com', NULL, NULL, NULL, NULL, 'Nellore', NULL, NULL, NULL, '2024-05-08 01:20:58', 'Shaik Aayan', 116, 4, '2024-05-08', NULL, 'sg\n', NULL, 3, NULL, NULL, 'Google', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '663a6fc035c94', NULL, NULL),
(193, 'Atchyut', 'N/A', NULL, 'eCommerce', 'Ecommerce site for swagruha foods', 22000, NULL, 'Warm', 'Bharath', 106, 9030143896, NULL, NULL, NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-08 01:49:58', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'GOOGLE', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(194, 'Karuna Gupta', 'NA', NULL, 'eCommerce', 'Ecommerce', 18000, NULL, 'Warm', 'Bharath', 106, 7973777977, NULL, 'na@na.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-08 01:50:59', 'Bharath', 106, 4, '2024-05-09', NULL, 'site done ', NULL, 0, NULL, NULL, 'GOOGLE', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(195, 'Aruna', 'Taji Designers', NULL, 'eCommerce', 'Ecommerce artificial Jewellery ', 18000, NULL, 'Warm', 'Bharath', 106, 9000022099, NULL, NULL, NULL, NULL, NULL, NULL, 'HYDERABAD', NULL, NULL, NULL, '2024-05-08 01:52:45', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'GOOGLE', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(197, 'Neha', 'bingnbliss', NULL, 'hfghghjgh', 'asdsd', 40000, NULL, 'Cold', 'User', 104, 7981936857, NULL, 'notavailable@1234.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-08 10:15:28', 'User', 104, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, '2', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6632419fc87a3', NULL, NULL),
(198, 'naman chawla', '', NULL, 'eCommerce', 'ecommerce like https://www.preciosalighting.com/', 22000, NULL, 'Cold', 'Bharath', 106, 9899725437, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-10 12:59:40', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Bark', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(199, 'Shiv', 'na', NULL, 'E-Commerce Website', 'Shopify\n₹50K - ₹99K\nOnline sale through website of my product and other saleable itam', NULL, NULL, 'Warm', 'Bharath', 106, 9896375522, NULL, NULL, NULL, NULL, NULL, NULL, 'haryana', NULL, NULL, NULL, '2024-05-13 22:00:59', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Bark', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(200, 'santosh kumar', NULL, NULL, 'Web Development', 'User will come , select car , select date and make payment', NULL, NULL, 'Warm', 'Bharath', 106, 8825646985, NULL, NULL, NULL, NULL, NULL, NULL, 'chennai', NULL, NULL, NULL, '2024-05-13 22:02:30', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Bark', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(201, 'Diviya', NULL, NULL, 'E-Commerce Website', 'ecommerce chennai', 18000, NULL, 'Cold', 'Bharath', 106, 8610901144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-13 23:55:17', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Bark', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(202, 'Ballahccharrie Pullurrie', 'Om Shakthi Groups', NULL, 'Android', 'chit fund company app', NULL, NULL, 'Warm', 'Bharath', 106, 9703317757, NULL, NULL, NULL, NULL, NULL, NULL, 'hyderabad', NULL, NULL, NULL, '2024-05-14 00:27:29', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Bark', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(203, 'huivukvou', 'klyufiyf', NULL, 'Web Development', 'iojuib98ubn', NULL, NULL, 'Cold', 'Arya', 121, 9390024176, NULL, 'notavailable@gmail.com', NULL, NULL, NULL, NULL, 'hydeerabad', NULL, NULL, NULL, '2024-05-14 11:54:29', 'Arya', 121, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'GOOGLE', 0, 'chart.get(\"colors\").getIndex(0)', 'Follow Up', '66339d9b5c5ba', NULL, NULL),
(204, 'Divya', 'PIXL Digital Solutions', NULL, 'Web Development', 'digital marketing', 50000, NULL, 'Warm', 'Ayesha', 117, 7382373824, NULL, 'pixldigitalsolutions@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-14 12:04:27', 'Ayesha', 117, 4, '2024-05-30', NULL, 'iojuihh98', NULL, 1, NULL, NULL, 'DATA', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(205, 'NA', NULL, NULL, 'Digital Marketing', 'have to arrange a meeting and the price is not yet decided\n', 0, NULL, 'Warm', 'Divya', 118, 9115588444, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 12:19:59', 'Divya', 118, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'DATA', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(206, 'NA', NULL, NULL, 'Web Development', 'Meet the client at his location and the price is not yet decided', 0, NULL, 'Warm', 'Divya', 118, 7997475201, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 16:25:09', 'Divya', 118, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'DATA', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(207, 'NA', NULL, NULL, 'Digital Marketing', 'He wanted digital marketing but wanted us to contact after 10 days and the price was not yet decided', 0, NULL, 'Warm', 'Divya', 118, 9115588444, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-14 16:07:31', 'Divya', 118, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'DATA', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(208, 'Asif', 'Pixl', NULL, 'Php', 'Need Servifsdce', 5000, NULL, 'Cold', 'Sameer', 162, 9440161007, NULL, 'ss@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-20 12:23:09', 'Sameer', 162, 4, '2024-05-20', NULL, NULL, NULL, 3, NULL, '2024-05-20', 'fb', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '664ae2146d61e', NULL, NULL),
(295, 'Raj', 'pic2hire', NULL, 'php', 'dfsdfsd', NULL, NULL, 'Cold', 'Sameer', 162, 9879879874, NULL, 'raj@pic2hire.com', NULL, NULL, NULL, NULL, 'hyderabad', NULL, NULL, NULL, '2024-05-20 18:29:46', 'Shaik Asif', 161, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'fb', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '664ae2146d61e', NULL, NULL),
(296, 'sri kanth', 'doc clinic', NULL, 'php', 'dssfsd', 25, NULL, 'Cold', 'Sameer', 162, 2581473698, NULL, 'fdf@gmail.com', NULL, NULL, NULL, NULL, 'dfg', NULL, NULL, NULL, '2024-05-20 12:33:10', 'Sameer', 162, 4, '2024-05-22', NULL, 'fdbhdf', NULL, 3, NULL, NULL, 'fb', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '664ae2146d61e', NULL, NULL),
(297, 'gdf', 'fdgdf', NULL, 'php', 'dsfhd', NULL, NULL, 'Cold', 'Shaik Asif', 161, 9876543214, NULL, 'fgh@gmail.com', NULL, NULL, NULL, NULL, 'dfgjh', NULL, NULL, NULL, '2024-05-20 18:29:29', 'Shaik Asif', 161, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'fb', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '664ae2146d61e', NULL, NULL),
(298, 'demo', 'demo', NULL, 'php', 'dsfhgs', NULL, NULL, 'Cold', 'Aayan', 163, 2587412587, NULL, 'df@gmail.com', NULL, NULL, NULL, NULL, 'fgdjh', NULL, NULL, NULL, '2024-05-20 18:22:37', 'Aayan', 163, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'fb', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '664ae2146d61e', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leadcallnotes`
--

CREATE TABLE `leadcallnotes` (
  `callid` bigint(20) UNSIGNED NOT NULL,
  `leadid` bigint(20) NOT NULL,
  `calltitle` varchar(200) NOT NULL,
  `callstartingtime` datetime DEFAULT NULL,
  `callendingtime` datetime NOT NULL,
  `callnotes` text DEFAULT NULL,
  `createdby_name` varchar(200) DEFAULT NULL,
  `createdby_id` int(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leadlabel`
--

CREATE TABLE `leadlabel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `labelname` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leadlabel`
--

INSERT INTO `leadlabel` (`id`, `labelname`) VALUES
(1, 'Cold'),
(2, 'Warm'),
(3, 'Hot');

-- --------------------------------------------------------

--
-- Table structure for table `leadsource`
--

CREATE TABLE `leadsource` (
  `lsid` int(10) UNSIGNED NOT NULL,
  `leadsource` varchar(200) NOT NULL,
  `companyid` varchar(200) NOT NULL,
  `imagepath` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leadsource`
--

INSERT INTO `leadsource` (`lsid`, `leadsource`, `companyid`, `imagepath`) VALUES
(75, 'Google', '6626619a7691f', 'photos/pmiVTATuQduus04qSaEeduPZBG5UOH3lq4MdZU9E.png'),
(76, 'Linkedid', '6626619a7691f', NULL),
(77, 'Asif', '662a171d6736a', NULL),
(78, 'sdgfvdfg', '662c8636643df', NULL),
(79, 'a', '662cb8f27d062', NULL),
(80, 'FaceBook', '662cce2d650ca', NULL),
(81, 'Marketing', '662cce2d650ca', NULL),
(82, 'Linkedin', '66308a6d00f2b', NULL),
(83, 'Google', '6630df1907368', 'photos/KI2tlXwUfJFNJ3Ffhsqjq3MhyWKaXpJirOYyLhbT.jpg'),
(84, 'Test', '6630df1907368', NULL),
(85, 'GRE', '6630df1907368', 'photos/OwCrvMsIzYV1RdY9e4j5Nwz6Lp4WY6PBbIn99i4f.jpg'),
(86, 'ghghghj', '6630df1907368', NULL),
(87, 'hjhjhjhj', '6630df1907368', NULL),
(88, 'Linkedin', '6632419fc87a3', NULL),
(89, '1', '6632419fc87a3', NULL),
(90, '2', '6632419fc87a3', 'photos/R3sqInOZ8lMbxpvgcWVoGGTYnCzcK9ZV3tsqzgU3.jpg'),
(91, 'Asif', '662f3ac6832b5', 'photos/D6fEXciCz0jSJc7pigdemEOPQRAxM1RapHL6Brnk.png'),
(92, 'dfgdsf', '6633a4428ef11', 'photos/DpMrNYM1heduTqGmyQAkfEgepnuCfdc5bE5xGG6G.png'),
(93, 'GOOGLE', '66339d9b5c5ba', 'photos/hMtlT7EPU6Pgnpko6YooWPA7jJNMMtPVbzi8idVy.jpg'),
(94, 'fgdfg', '6632419fc87a3', 'photos/eoKvjPrJQaPkedBKy68iEqJFtWINyS0iPpuRlMdf.jpg'),
(95, 'LinkedIn', '66339d9b5c5ba', 'photos/ZIPegRdMZw6W7Ba9DEG6rfvBiH4r9GIMv1JBv2Zh.png'),
(96, 'REFERENCE', '66339d9b5c5ba', 'photos/NjQvO7oX7CE6ukAaHl3WHSKdDLr6vR7y14hVQQ0I.png'),
(97, 'Email', '66339d9b5c5ba', 'photos/By2ZemNUKQjguckoXxDSIywePspLxvsdrM3ufcNY.png'),
(98, 'FACEBOOK', '66339d9b5c5ba', 'photos/lZXUk51KpxFH7DwsVvSf8m5nfBxGY9iMuuf43cR2.png'),
(100, 'JUSTDIAL', '66339d9b5c5ba', 'photos/BHAz7ImMTd0tAjE5wwPgFe3JH05ruVMK178MjHuZ.png'),
(101, 'DATA', '66339d9b5c5ba', 'photos/SnH8zJ8rfnuxsX82k2bzsK194Kge3KoqmhNsVijz.png'),
(102, 'Google', '663a6fc035c94', NULL),
(103, 'Barks', '66339d9b5c5ba', 'photos/JDoT7AoKRE1U00KNw8kBehFtWSvrqmjKVTu6CZYU.jpg'),
(134, 'fb', '664ae2146d61e', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leadss`
--

CREATE TABLE `leadss` (
  `leadid` int(20) UNSIGNED NOT NULL,
  `customer` varchar(200) NOT NULL,
  `ogrinazation` varchar(200) DEFAULT NULL,
  `contactperson` bigint(20) DEFAULT NULL,
  `title` varchar(20) NOT NULL,
  `titleid` int(120) DEFAULT NULL,
  `description` text NOT NULL,
  `value` int(11) DEFAULT NULL,
  `registrationamount` int(20) DEFAULT NULL,
  `balanceamount` int(20) DEFAULT NULL,
  `currency` varchar(200) DEFAULT NULL,
  `label` varchar(200) DEFAULT NULL,
  `owner` varchar(200) NOT NULL,
  `leadownerid` bigint(20) UNSIGNED NOT NULL,
  `phone` bigint(20) NOT NULL,
  `phonetype` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `emailtype` varchar(200) DEFAULT NULL,
  `addressline_1` text DEFAULT NULL,
  `addressline_2` text DEFAULT NULL,
  `addressline_3` text DEFAULT NULL,
  `town` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `zipcode` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(200) NOT NULL,
  `created_by_id` int(20) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 3 COMMENT '0 for close, 1 for reminder later , 2 not respoinding , 3 waiting, 4 for deal',
  `expacteddate` date DEFAULT NULL,
  `filepath` varchar(200) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `team` varchar(200) DEFAULT NULL,
  `dealstatus` int(20) DEFAULT 0 COMMENT '0 - Inprogress , 1 for close , 2 for lost , 3 for repoen\r\n',
  `lead_comments` text DEFAULT NULL,
  `dealfixdate` datetime DEFAULT NULL,
  `leadsource` varchar(200) NOT NULL,
  `leadstage` int(20) NOT NULL DEFAULT 0 COMMENT '0 : Lead Initiated\r\n, 1 : Proposal Sent\r\n ,2 : Discussion  :3 Follow up Mode\r\n,4\r\n : Closed\r\n',
  `color` varchar(200) NOT NULL DEFAULT 'chart.get("colors").getIndex(0)',
  `leadstagetext` varchar(120) DEFAULT 'Initiated',
  `companyid` text NOT NULL,
  `leaddata` int(20) DEFAULT NULL,
  `dealdata` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leadss`
--

INSERT INTO `leadss` (`leadid`, `customer`, `ogrinazation`, `contactperson`, `title`, `titleid`, `description`, `value`, `registrationamount`, `balanceamount`, `currency`, `label`, `owner`, `leadownerid`, `phone`, `phonetype`, `email`, `emailtype`, `addressline_1`, `addressline_2`, `addressline_3`, `town`, `state`, `zipcode`, `country`, `created_at`, `created_by`, `created_by_id`, `status`, `expacteddate`, `filepath`, `content`, `team`, `dealstatus`, `lead_comments`, `dealfixdate`, `leadsource`, `leadstage`, `color`, `leadstagetext`, `companyid`, `leaddata`, `dealdata`) VALUES
(302, 'Asif', 'Dell', NULL, 'python', NULL, 'Need Python AI App', 25000, NULL, NULL, NULL, 'Cold', 'asif', 99, 6304203040, NULL, 'asif@gmail.com', NULL, NULL, NULL, NULL, 'Nellroe', NULL, NULL, NULL, '2024-04-30 11:37:51', 'asif', 99, 4, '2024-04-30', NULL, 'dsfcds', NULL, 0, NULL, NULL, 'Linkedin', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66308a6d00f2b', NULL, NULL),
(303, 'Srinitha', 'Jp Constructions', NULL, 'Web Design', NULL, 'Client wants to keep a update on so and so website', 3500, NULL, NULL, NULL, 'Cold', 'srinitha', 101, 7884561230, NULL, 'fgf@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-30 18:01:48', 'srinitha', 101, 4, '2024-05-10', NULL, NULL, NULL, 1, NULL, '2024-04-30 18:11:02', 'Google', 0, 'chart.get(\"colors\").getIndex(0)', 'Closed', '6630df1907368', NULL, NULL),
(304, 'gfg', 'ffhgh', NULL, 'Web Design', NULL, 'tytyty', 45454, NULL, NULL, NULL, 'Cold', 'srinitha', 101, 1234567899, NULL, 'fgf@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-30 18:35:50', 'srinitha', 101, 4, '2024-04-26', NULL, 'ghghghgh', NULL, 0, NULL, NULL, 'Google', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6630df1907368', NULL, NULL),
(305, '5445454', 'ttytyt', NULL, 'Web Design', NULL, 'ghghgh', 454545, NULL, NULL, NULL, 'Cold', 'srinitha', 101, 7894561209, NULL, '5555@sss', NULL, NULL, NULL, NULL, 'fhghghgh', NULL, NULL, NULL, '2024-04-30 19:06:36', 'srinitha', 101, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Google', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6630df1907368', NULL, NULL),
(306, 'Shaik Abdul Halimiul Hakeem Malik', 'fghfg', NULL, 'hfghghjgh', NULL, 'lkdfsgj', 15000, NULL, NULL, NULL, 'Cold', 'User', 104, 9456451414, NULL, 'dfvsd@in', NULL, NULL, NULL, NULL, 'dfgvjh', NULL, NULL, NULL, '2024-05-02 12:09:03', 'User', 104, 4, '2024-05-07', NULL, NULL, NULL, 0, NULL, '2024-05-07 11:09:03', 'Linkedin', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6632419fc87a3', NULL, NULL),
(307, 'akash', 'symnatec space', NULL, 'hfghghjgh', NULL, 'hi', 2500, NULL, NULL, NULL, 'Cold', 'User', 104, 3454546565, NULL, 'fgf@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-01 20:02:58', 'User', 104, 4, '2024-05-02', NULL, 'sdgvsd', NULL, 2, NULL, NULL, '2', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6632419fc87a3', NULL, NULL),
(308, 'Asif', 'co', NULL, 'php', NULL, 'dfsvgdsf', NULL, NULL, NULL, NULL, 'Cold', 'asif', 96, 9876543214, NULL, 'dfsdf@gmail.com', NULL, NULL, NULL, NULL, 'fdgvdfgj', NULL, NULL, NULL, '2024-05-02 20:00:55', 'asif', 96, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Asif', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '662f3ac6832b5', NULL, NULL),
(309, 'dgdfg', 'dfgdf', NULL, 'Laravel', NULL, 'fdkgj', NULL, NULL, NULL, NULL, 'Cold', 'asif', 96, 4561235874, NULL, 'dgfg@gmail.com', NULL, NULL, NULL, NULL, 'Newk', NULL, NULL, NULL, '2024-05-02 20:01:28', 'asif', 96, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Asif', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '662f3ac6832b5', NULL, NULL),
(310, 'fsdf', 'sdfsd', NULL, 'Python', NULL, 'dfsgsdfg', NULL, NULL, NULL, NULL, 'Cold', 'asif2743', 107, 4564564568, NULL, 'dfsd@gmail.com', NULL, NULL, NULL, NULL, 'dss', NULL, NULL, NULL, '2024-05-02 20:04:26', 'asif2743', 107, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'dfgdsf', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6633a4428ef11', NULL, NULL),
(311, 'Atchyut', 'NA', NULL, 'eCommerce', NULL, 'Ecommerce site for swagruha foods', 22000, NULL, NULL, NULL, 'Warm', 'Bharath', 106, 9030143896, NULL, 'na@na.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-02 20:10:13', 'Bharath', 106, 4, '2024-05-16', NULL, 's', NULL, 2, NULL, '2024-05-06 17:39:57', 'Google', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(312, 'Karuna Gupta', 'NA', NULL, 'eCommerce', NULL, 'Ecommerce', 18000, NULL, NULL, NULL, 'Warm', 'Bharath', 106, 7973777977, NULL, 'na@na.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-02 20:21:59', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Google', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(313, 'Atchyut', 'NA', NULL, 'eCommerce', NULL, 'Website needed for swagruha foods ', 22000, NULL, NULL, NULL, 'Warm', 'Bharath', 106, 9030143896, NULL, 'NA@NA.COM', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-06 02:28:44', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Google', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(314, 'Aruna', 'Taji DesignersA', NULL, 'eCommerce', NULL, 'Ecommerce artificial Jewellery ', 18000, NULL, NULL, NULL, 'Warm', 'Bharath', 106, 9000022099, NULL, 'na@na.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-06 02:33:44', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Google', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(315, 'dsfsdf', 'sdfdsf', NULL, 'hfghghjgh', NULL, 'fdmndfgj', NULL, NULL, NULL, NULL, 'Cold', 'User', 104, 4567894568, NULL, 'dfgvsd@gmail.com', NULL, NULL, NULL, NULL, 'fdgvdfjh', NULL, NULL, NULL, '2024-05-06 12:15:06', 'User', 104, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, '1', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6632419fc87a3', NULL, NULL),
(316, 'Sruthi', NULL, NULL, 'hfghghjgh', NULL, 'fgjdfhg', 2500, NULL, NULL, NULL, 'Hot', 'User', 104, 7032815794, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-07 15:03:50', 'User', 104, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Linkedin', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6632419fc87a3', NULL, NULL),
(317, 'Asf', NULL, NULL, 'hfghghjgh', NULL, '\nRufg\n\n\n', NULL, NULL, NULL, NULL, 'Cold', 'Ravi', 105, 9876543213, NULL, NULL, NULL, NULL, NULL, NULL, '8', NULL, NULL, NULL, '2024-05-07 00:19:09', 'User', 104, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, '1', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6632419fc87a3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leadsssss`
--

CREATE TABLE `leadsssss` (
  `leadid` int(20) UNSIGNED NOT NULL,
  `customer` varchar(200) NOT NULL,
  `ogrinazation` varchar(200) DEFAULT NULL,
  `contactperson` bigint(20) DEFAULT NULL,
  `title` varchar(20) NOT NULL,
  `titleid` int(120) DEFAULT NULL,
  `description` text NOT NULL,
  `value` int(11) DEFAULT NULL,
  `registrationamount` int(20) DEFAULT NULL,
  `balanceamount` int(20) DEFAULT NULL,
  `currency` varchar(200) DEFAULT NULL,
  `label` varchar(200) DEFAULT NULL,
  `owner` varchar(200) NOT NULL,
  `leadownerid` bigint(20) UNSIGNED NOT NULL,
  `phone` bigint(20) NOT NULL,
  `phonetype` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `emailtype` varchar(200) DEFAULT NULL,
  `addressline_1` text DEFAULT NULL,
  `addressline_2` text DEFAULT NULL,
  `addressline_3` text DEFAULT NULL,
  `town` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `zipcode` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(200) NOT NULL,
  `created_by_id` int(20) NOT NULL,
  `status` int(20) NOT NULL DEFAULT 3 COMMENT '0 for close, 1 for reminder later , 2 not respoinding , 3 waiting, 4 for deal',
  `expacteddate` date DEFAULT NULL,
  `filepath` varchar(200) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `team` varchar(200) DEFAULT NULL,
  `dealstatus` int(20) DEFAULT 0 COMMENT '0 - Inprogress , 1 for close , 2 for lost , 3 for repoen\r\n',
  `lead_comments` text DEFAULT NULL,
  `dealfixdate` datetime DEFAULT NULL,
  `leadsource` varchar(200) NOT NULL,
  `leadstage` int(20) NOT NULL DEFAULT 0 COMMENT '0 : Lead Initiated\r\n, 1 : Proposal Sent\r\n ,2 : Discussion  :3 Follow up Mode\r\n,4\r\n : Closed\r\n',
  `color` varchar(200) NOT NULL DEFAULT 'chart.get("colors").getIndex(0)',
  `leadstagetext` varchar(120) DEFAULT 'Initiated',
  `companyid` text NOT NULL,
  `leaddata` int(20) DEFAULT NULL,
  `dealdata` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leadsssss`
--

INSERT INTO `leadsssss` (`leadid`, `customer`, `ogrinazation`, `contactperson`, `title`, `titleid`, `description`, `value`, `registrationamount`, `balanceamount`, `currency`, `label`, `owner`, `leadownerid`, `phone`, `phonetype`, `email`, `emailtype`, `addressline_1`, `addressline_2`, `addressline_3`, `town`, `state`, `zipcode`, `country`, `created_at`, `created_by`, `created_by_id`, `status`, `expacteddate`, `filepath`, `content`, `team`, `dealstatus`, `lead_comments`, `dealfixdate`, `leadsource`, `leadstage`, `color`, `leadstagetext`, `companyid`, `leaddata`, `dealdata`) VALUES
(302, 'Asif', 'Dell', NULL, 'python', NULL, 'Need Python AI App', 25000, NULL, NULL, NULL, 'Cold', 'asif', 99, 6304203040, NULL, 'asif@gmail.com', NULL, NULL, NULL, NULL, 'Nellroe', NULL, NULL, NULL, '2024-04-30 11:37:51', 'asif', 99, 4, '2024-04-30', NULL, 'dsfcds', NULL, 0, NULL, NULL, 'Linkedin', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66308a6d00f2b', NULL, NULL),
(303, 'Srinitha', 'Jp Constructions', NULL, 'Web Design', NULL, 'Client wants to keep a update on so and so website', 3500, NULL, NULL, NULL, 'Cold', 'srinitha', 101, 7884561230, NULL, 'fgf@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-30 18:01:48', 'srinitha', 101, 4, '2024-05-10', NULL, NULL, NULL, 1, NULL, '2024-04-30 18:11:02', 'Google', 0, 'chart.get(\"colors\").getIndex(0)', 'Closed', '6630df1907368', NULL, NULL),
(304, 'gfg', 'ffhgh', NULL, 'Web Design', NULL, 'tytyty', 45454, NULL, NULL, NULL, 'Cold', 'srinitha', 101, 1234567899, NULL, 'fgf@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-04-30 18:35:50', 'srinitha', 101, 4, '2024-04-26', NULL, 'ghghghgh', NULL, 0, NULL, NULL, 'Google', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6630df1907368', NULL, NULL),
(305, '5445454', 'ttytyt', NULL, 'Web Design', NULL, 'ghghgh', 454545, NULL, NULL, NULL, 'Cold', 'srinitha', 101, 7894561209, NULL, '5555@sss', NULL, NULL, NULL, NULL, 'fhghghgh', NULL, NULL, NULL, '2024-04-30 19:06:36', 'srinitha', 101, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Google', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6630df1907368', NULL, NULL),
(306, 'Shaik Abdul Halimiul Hakeem Malik', 'fghfg', NULL, 'hfghghjgh', NULL, 'lkdfsgj', 15000, NULL, NULL, NULL, 'Cold', 'User', 104, 9456451414, NULL, 'dfvsd@in', NULL, NULL, NULL, NULL, 'dfgvjh', NULL, NULL, NULL, '2024-05-02 12:09:03', 'User', 104, 4, '2024-05-07', NULL, NULL, NULL, 0, NULL, '2024-05-07 11:09:03', 'Linkedin', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6632419fc87a3', NULL, NULL),
(307, 'akash', 'symnatec space', NULL, 'hfghghjgh', NULL, 'hi', 2500, NULL, NULL, NULL, 'Cold', 'User', 104, 3454546565, NULL, 'fgf@gmail.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-01 20:02:58', 'User', 104, 4, '2024-05-02', NULL, 'sdgvsd', NULL, 2, NULL, NULL, '2', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6632419fc87a3', NULL, NULL),
(308, 'Asif', 'co', NULL, 'php', NULL, 'dfsvgdsf', NULL, NULL, NULL, NULL, 'Cold', 'asif', 96, 9876543214, NULL, 'dfsdf@gmail.com', NULL, NULL, NULL, NULL, 'fdgvdfgj', NULL, NULL, NULL, '2024-05-02 20:00:55', 'asif', 96, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Asif', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '662f3ac6832b5', NULL, NULL),
(309, 'dgdfg', 'dfgdf', NULL, 'Laravel', NULL, 'fdkgj', NULL, NULL, NULL, NULL, 'Cold', 'asif', 96, 4561235874, NULL, 'dgfg@gmail.com', NULL, NULL, NULL, NULL, 'Newk', NULL, NULL, NULL, '2024-05-02 20:01:28', 'asif', 96, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Asif', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '662f3ac6832b5', NULL, NULL),
(310, 'fsdf', 'sdfsd', NULL, 'Python', NULL, 'dfsgsdfg', NULL, NULL, NULL, NULL, 'Cold', 'asif2743', 107, 4564564568, NULL, 'dfsd@gmail.com', NULL, NULL, NULL, NULL, 'dss', NULL, NULL, NULL, '2024-05-02 20:04:26', 'asif2743', 107, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'dfgdsf', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6633a4428ef11', NULL, NULL),
(311, 'Atchyut', 'NA', NULL, 'eCommerce', NULL, 'Ecommerce site for swagruha foods', 22000, NULL, NULL, NULL, 'Warm', 'Bharath', 106, 9030143896, NULL, 'na@na.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-02 20:10:13', 'Bharath', 106, 4, '2024-05-16', NULL, 's', NULL, 2, NULL, '2024-05-06 17:39:57', 'Google', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(312, 'Karuna Gupta', 'NA', NULL, 'eCommerce', NULL, 'Ecommerce', 18000, NULL, NULL, NULL, 'Warm', 'Bharath', 106, 7973777977, NULL, 'na@na.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-02 20:21:59', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Google', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(313, 'Atchyut', 'NA', NULL, 'eCommerce', NULL, 'Website needed for swagruha foods ', 22000, NULL, NULL, NULL, 'Warm', 'Bharath', 106, 9030143896, NULL, 'NA@NA.COM', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-06 02:28:44', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Google', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(314, 'Aruna', 'Taji Designers', NULL, 'eCommerce', NULL, 'Ecommerce artificial Jewellery ', 18000, NULL, NULL, NULL, 'Warm', 'Bharath', 106, 9000022099, NULL, 'na@na.com', NULL, NULL, NULL, NULL, 'Hyderabad', NULL, NULL, NULL, '2024-05-06 02:33:44', 'Bharath', 106, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Google', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '66339d9b5c5ba', NULL, NULL),
(315, 'dsfsdf', 'sdfdsf', NULL, 'hfghghjgh', NULL, 'fdmndfgj', NULL, NULL, NULL, NULL, 'Cold', 'User', 104, 4567894568, NULL, 'dfgvsd@gmail.com', NULL, NULL, NULL, NULL, 'fdgvdfjh', NULL, NULL, NULL, '2024-05-06 12:15:06', 'User', 104, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, '1', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6632419fc87a3', NULL, NULL),
(316, 'Sruthi', NULL, NULL, 'hfghghjgh', NULL, 'fgjdfhg', 2500, NULL, NULL, NULL, 'Hot', 'User', 104, 7032815794, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-07 15:03:50', 'User', 104, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Linkedin', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6632419fc87a3', NULL, NULL),
(317, 'Asf', NULL, NULL, 'hfghghjgh', NULL, '\nRufg\n\n\n', NULL, NULL, NULL, NULL, 'Cold', 'Ravi', 105, 9876543213, NULL, NULL, NULL, NULL, NULL, NULL, '8', NULL, NULL, NULL, '2024-05-07 00:19:09', 'User', 104, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, '1', 0, 'chart.get(\"colors\").getIndex(0)', 'Initiated', '6632419fc87a3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leadstages`
--

CREATE TABLE `leadstages` (
  `stageid` bigint(20) UNSIGNED NOT NULL,
  `stagename` varchar(120) DEFAULT NULL,
  `companyid` varchar(200) NOT NULL,
  `stageimage` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leadstages`
--

INSERT INTO `leadstages` (`stageid`, `stagename`, `companyid`, `stageimage`) VALUES
(11, 'App Close', '660fd9f75c6ed', NULL),
(13, 'dfgbdfgdf', '', NULL),
(14, 'ytjhuty', '', NULL),
(15, 'fdgdf', '', NULL),
(18, 'Ramki', '', 'leadstage/RmROS7N60G7fTxqtMdrUhiA2rIeFZQ17xF4krKU1.jpg'),
(22, 'Linkedinff', '', 'leadstage/CRXyFnHVEshtcUS59vJDfa2j0RSmoek9nHXUzU29.png'),
(27, 'Followup', '6626619a7691f', NULL),
(28, 'call', '6626619a7691f', NULL),
(29, 'Calling', '662cce2d650ca', NULL),
(30, 'Email', '662cce2d650ca', NULL),
(31, 'Intiaited', '6630df1907368', NULL),
(32, 'Followup', '6630df1907368', NULL),
(33, 'Invoice Sent', '6630df1907368', NULL),
(34, 'Closed', '6630df1907368', NULL),
(35, 'php', '6632419fc87a3', NULL),
(36, 'dfdfgg', '6632419fc87a3', 'leadstage/Z3wW5YHvdpPkFIZQGgYfPyXYPOSD9BDFQM13jiGw.png'),
(37, 'dsfsdf', '662f3ac6832b5', 'leadstage/uImuefJcB24rNYB4tknSfVc6tBVs0Ph580eWEJzn.png'),
(38, 'One', '6633a4428ef11', NULL),
(39, 'Follow Up', '66339d9b5c5ba', NULL),
(40, 'First Call', '66339d9b5c5ba', NULL),
(41, 'Proposal Sent', '66339d9b5c5ba', NULL),
(42, 'Discussion', '66339d9b5c5ba', NULL),
(43, 'Negotiation', '66339d9b5c5ba', NULL),
(44, 'To Be Closed', '66339d9b5c5ba', NULL),
(45, 'Closed', '66339d9b5c5ba', NULL),
(47, 'one', '664ae2146d61e', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loginusers`
--

CREATE TABLE `loginusers` (
  `uid` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `role` int(11) DEFAULT NULL COMMENT '0 for staff , 1 for admin',
  `mobile` bigint(20) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `imagepath` varchar(120) DEFAULT NULL,
  `status` int(20) NOT NULL DEFAULT 1 COMMENT '1 for active  0 for inactive',
  `companyname` varchar(200) NOT NULL,
  `companyid` varchar(200) NOT NULL,
  `regdate` datetime DEFAULT current_timestamp(),
  `reregistrationdate` datetime DEFAULT NULL,
  `regendingdate` datetime DEFAULT NULL,
  `plantype` int(20) NOT NULL,
  `expstatus` int(10) DEFAULT 1,
  `edit_access` int(20) DEFAULT NULL,
  `delete_access` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginusers`
--

INSERT INTO `loginusers` (`uid`, `email`, `password`, `fullname`, `role`, `mobile`, `designation`, `imagepath`, `status`, `companyname`, `companyid`, `regdate`, `reregistrationdate`, `regendingdate`, `plantype`, `expstatus`, `edit_access`, `delete_access`) VALUES
(161, 'sk.asif0490@gmail.com', '123456', 'Shaik Asif', 1, 9440161007, '1', NULL, 1, 'Jio Mart', '664ae2146d61e', '2024-05-20 11:09:32', '2024-05-20 11:09:32', '2024-05-27 11:09:32', 0, 1, 1, 1),
(162, 'sam@gmail.com', '123456', 'Sameer', 0, 9876543214, 'Sales', NULL, 1, 'Jio Mart', '664ae2146d61e', '2024-05-20 12:17:56', NULL, NULL, 0, 1, 0, 0),
(163, 'aayan@gmail.com', '456456', 'Aayan', 0, 9876543214, 'Jr Developer', NULL, 1, 'Jio Mart', '664ae2146d61e', '2024-05-20 18:22:16', NULL, NULL, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_10_161150_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymenthistory`
--

CREATE TABLE `paymenthistory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `companyid` varchar(120) NOT NULL,
  `uid` bigint(20) UNSIGNED NOT NULL,
  `amount` int(20) NOT NULL,
  `plan` int(20) NOT NULL,
  `regdate` datetime NOT NULL,
  `expdate` datetime NOT NULL,
  `expstatus` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymenthistory`
--

INSERT INTO `paymenthistory` (`id`, `companyid`, `uid`, `amount`, `plan`, `regdate`, `expdate`, `expstatus`) VALUES
(51, '664ae2146d61e', 161, 0, 0, '2024-05-20 11:09:32', '2024-05-27 11:09:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planid` int(20) DEFAULT NULL,
  `name` varchar(120) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `days` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `planid`, `name`, `amount`, `days`) VALUES
(1, 0, 'Demo', 0, 7),
(2, 1, 'Monthly', 999, 30),
(3, 2, 'mid-year', 4999, 183),
(4, 3, 'yearly', 9999, 365);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `pid` int(10) UNSIGNED NOT NULL,
  `Project_Name` varchar(200) NOT NULL,
  `amount` int(20) NOT NULL DEFAULT 0,
  `companyid` varchar(200) NOT NULL,
  `projectimage` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `Project_Name`, `amount`, `companyid`, `projectimage`) VALUES
(2, 'Digital Marketing', 8000, '', NULL),
(3, 'Web Development', 12000, '', NULL),
(4, 'Android', 22000, '', NULL),
(5, 'IOS', 24000, '', 'serviceimage/hc6vN3ikVARafhR3XMwyC4oJvO482tEQS7EIcQrh.jpg'),
(6, 'UX/UI', 2800, '', 'serviceimage/6zaFouifitmJKBIwBFDAxq2UvARJzfJnv6Y0qiFl.png'),
(9, 'Php', 8000, '', NULL),
(10, 'dfsdf', 0, '', NULL),
(12, 'laravel', 0, '', NULL),
(14, 'Python', 0, '', NULL),
(15, 'ML', 0, '', NULL),
(16, 'React', 0, '660fd9f75c6ed', NULL),
(17, 'Node js', 0, '660fdcf01c601', NULL),
(18, 'Node', 0, '660fd9f75c6ed', NULL),
(22, 'dfgdfdsfsdfsd', 0, '', 'serviceimage/UQLK0dvszad0Vuc5L5suEI2srKS2Ig3olPxlD6q5.png'),
(25, 'Php', 0, '', NULL),
(26, 'Ui', 0, '', NULL),
(28, 'Php', 0, '6626619a7691f', NULL),
(29, 'Php', 0, '662a171d6736a', NULL),
(30, 'dfgvdfgvdfgvdfgvd', 0, '662c8636643df', NULL),
(31, 'dd', 0, '662cb8f27d062', NULL),
(32, 'Php', 0, '662cce2d650ca', NULL),
(33, 'Python', 0, '662cce2d650ca', NULL),
(34, 'python', 0, '66308a6d00f2b', NULL),
(35, 'Web Design', 0, '6630df1907368', NULL),
(36, 'Digital Marketing', 0, '6630df1907368', NULL),
(37, 'hfghghjgh', 0, '6632419fc87a3', 'serviceimage/lM4SQPqYgzpcOgMtxlzixTitC5TkI03dUCrN4Ejk.png'),
(38, 'php', 0, '662f3ac6832b5', NULL),
(39, 'Laravel', 0, '662f3ac6832b5', NULL),
(40, 'Python', 0, '6633a4428ef11', 'serviceimage/W7VizK3bjMXu9T4BIVuhYy7vXuPtXxKYHoNWk9lb.png'),
(41, 'Java', 0, '6633a4428ef11', 'serviceimage/RhbHsCxzrTJuegdgg7xQ3c74nhDU4hj12LX5nvWq.png'),
(44, 'Digital Marketing', 0, '66339d9b5c5ba', 'serviceimage/cLcxZguRq5BHjhNNhHEZUbhAcsQ9Y0vTpK80oec1.jpg'),
(45, 'Web Development', 0, '66339d9b5c5ba', 'serviceimage/g7I58zX2l8qTapj8PfpfsaYpUKbZjPBVgs624Dgq.jpg'),
(46, 'Android', 0, '66339d9b5c5ba', 'serviceimage/kk6XfdBhfBv3A2C9vbLALuUCwzga7SSOQq2N7FkR.png'),
(47, 'IOS', 0, '66339d9b5c5ba', NULL),
(48, 'UX/UI', 0, '66339d9b5c5ba', NULL),
(49, 'Php', 0, '66339d9b5c5ba', NULL),
(50, 'E-Commerce Website', 0, '66339d9b5c5ba', 'serviceimage/9d7R6QZS8dfRkGkeMp1ZDylzgLeRCkEzgZyR3kXs.jpg'),
(51, 'Website Re-Design', 0, '66339d9b5c5ba', 'serviceimage/XPRYd8mD8AvPQY3Xw9YwnopNrRgQVU1r4HneEqNO.jpg'),
(52, 'SEO', 0, '66339d9b5c5ba', NULL),
(53, 'Php', 0, '663a6fc035c94', NULL),
(55, 'php', 0, '664ae2146d61e', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading` varchar(200) NOT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `companyid` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `heading`, `logo`, `companyid`) VALUES
(4, 'pixl 1', '170745791.jpg', '664ae2146d61e');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(2) NOT NULL DEFAULT 2,
  `mobileno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `fullname`, `email`, `password`, `role`, `mobileno`) VALUES
(1, 'Admin User', 'admin@pixl.in', '789789', 2, 7382373824);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `whatapptemplate`
--

CREATE TABLE `whatapptemplate` (
  `templateid` bigint(20) UNSIGNED NOT NULL,
  `template_name` varchar(120) DEFAULT NULL,
  `template_message` text DEFAULT NULL,
  `companyid` varchar(200) NOT NULL,
  `apikey` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dealspayment`
--
ALTER TABLE `dealspayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emailrecords`
--
ALTER TABLE `emailrecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `folloupstbl`
--
ALTER TABLE `folloupstbl`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `followuptype`
--
ALTER TABLE `followuptype`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`leadid`);

--
-- Indexes for table `leadcallnotes`
--
ALTER TABLE `leadcallnotes`
  ADD PRIMARY KEY (`callid`);

--
-- Indexes for table `leadlabel`
--
ALTER TABLE `leadlabel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leadsource`
--
ALTER TABLE `leadsource`
  ADD PRIMARY KEY (`lsid`);

--
-- Indexes for table `leadstages`
--
ALTER TABLE `leadstages`
  ADD PRIMARY KEY (`stageid`);

--
-- Indexes for table `loginusers`
--
ALTER TABLE `loginusers`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whatapptemplate`
--
ALTER TABLE `whatapptemplate`
  ADD PRIMARY KEY (`templateid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dealspayment`
--
ALTER TABLE `dealspayment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `emailrecords`
--
ALTER TABLE `emailrecords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `folloupstbl`
--
ALTER TABLE `folloupstbl`
  MODIFY `fid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `followuptype`
--
ALTER TABLE `followuptype`
  MODIFY `fid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lead`
--
ALTER TABLE `lead`
  MODIFY `leadid` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT for table `leadcallnotes`
--
ALTER TABLE `leadcallnotes`
  MODIFY `callid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leadlabel`
--
ALTER TABLE `leadlabel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leadsource`
--
ALTER TABLE `leadsource`
  MODIFY `lsid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `leadstages`
--
ALTER TABLE `leadstages`
  MODIFY `stageid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `loginusers`
--
ALTER TABLE `loginusers`
  MODIFY `uid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `pid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `whatapptemplate`
--
ALTER TABLE `whatapptemplate`
  MODIFY `templateid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
