-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 10:55 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `id1` int(11) DEFAULT NULL,
  `my` varchar(255) NOT NULL,
  `id2` int(11) NOT NULL,
  `friend` varchar(255) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  `pending1` int(11) NOT NULL DEFAULT '0',
  `block` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `id1`, `my`, `id2`, `friend`, `state`, `pending1`, `block`) VALUES
(437, 10, 'Faris', 10, 'Faris', 0, 0, 0),
(438, 10, 'Faris', 10, 'Faris', 0, 0, 0),
(439, 10, 'Faris', 10, 'Faris', 0, 0, 0),
(440, 10, 'Faris', 10, 'Faris', 0, 0, 0),
(441, 10, 'Faris', 7, 'نادر', 0, 0, 0),
(442, 10, 'Faris', 7, 'نادر', 0, 0, 0),
(443, 7, 'نادر', 10, 'Faris', 0, 0, 0),
(444, 7, 'نادر', 10, 'Faris', 0, 0, 0),
(445, 10, 'Faris', 10, 'Faris', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `p_id` int(11) NOT NULL,
  `post` text NOT NULL,
  `date` date NOT NULL,
  `user_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`p_id`, `post`, `date`, `user_post`) VALUES
(82, 'بسم الله الرحمن الرحيم', '2018-03-31', 1),
(83, 'الجو غائم اليوم', '2018-03-31', 1),
(84, 'اهلا وسهلا بكم في الموقع  مع تحيااااات ', '2018-03-31', 1),
(85, 'العلم نووووووووووووور ', '2018-03-31', 1),
(86, 'تصميم البرامج يحتاااج الى ابداع وصبر', '2018-03-31', 1),
(87, 'the tow post', '2018-04-01', 1),
(88, 'the tow post', '2018-04-01', 1),
(89, 'نادر طالب في جامعة الازهر', '2018-04-01', 8),
(90, 'جديد جدي', '2018-04-01', 8),
(91, 'جديد جدي', '2018-04-01', 8),
(92, 'سنحرر الاقصى عما قريب ان شاء الله', '2018-04-01', 6),
(93, 'سنحرر الاقصى عما قريب ان شاء الله', '2018-04-01', 6),
(94, 'بدي كود Slider مكتوب بـ pure JS\r\n\r\n', '2018-04-01', 1),
(95, 'انا جميل خطاب جديد على الموقع', '2018-04-01', 9),
(96, 'بسم الله الرحمن الرحيم\r\n', '2018-04-01', 1),
(97, 'تطبيق عملي على الانيمشن', '2018-04-01', 1),
(98, 'بسم الله الرحمن الرحيمبسم الله الرحمن الرحيمبسم الله الرحمن الرحيمبسم الله الرحمن الرحيمبسم الله الرحمن الرحيمبسم الله الرحمن الرحيمبسم الله الرحمن الرحيمبسم الله الرحمن الرحيمبسم الله الرحمن الرحيمبسم الله الرحمن الرحيمبسم الله الرحمن الرحيم', '2018-04-01', 1),
(99, 'لاب توب جديد لاعلى سعر', '2018-04-01', 1),
(100, 'اخر منشووووووووور لهذا اليوم', '2018-04-01', 1),
(101, '\"كان معلمي واليوم هو مريضي\" \r\nهذا ماقاله استشاري الجراحة وهو يرى معلمه مستلقيا بغرفة العمليات.. \"قبل يده ووضعها فوق رأسه وبدأ العملية \"', '2018-04-01', 1),
(102, 'لما اشوف نمله تسحب شيء كبير \r\nودي أخذه منها وأقولها وين بيتكم اوديها\r\n\r\n- الحنان يسري في عروقي', '2018-04-01', 1),
(103, 'لما اشوف نمله تسحب شيء كبير \r\nودي أخذه منها وأقولها وين بيتكم اوديها\r\n\r\n- الحنان يسري في عروقي', '2018-04-01', 1),
(104, 'لما اشوف نمله تسحب شيء كبير \r\nودي أخذه منها وأقولها وين بيتكم اوديها\r\n\r\n- الحنان يسري في عروقي', '2018-04-01', 1),
(105, 'لما اشوف نمله تسحب شيء كبير \r\nودي أخذه منها وأقولها وين بيتكم اوديها\r\n\r\n- الحنان يسري في عروقي', '2018-04-01', 1),
(106, 'لما اشوف نمله تسحب شيء كبير \r\nودي أخذه منها وأقولها وين بيتكم اوديها\r\n\r\n- الحنان يسري في عروقي', '2018-04-01', 1),
(107, 'اول بوست لنادر', '2018-04-02', 7),
(108, 'كمااااااااااااااااااااااان بوست', '2018-04-02', 7),
(109, 'كمااااااااااااااااااااااان بوست', '2018-04-02', 7),
(110, 'عوني غربية', '2018-04-02', 1),
(111, 'منتسينمبشسيب', '2018-04-02', 1),
(112, '', '2018-04-02', 1),
(113, 'هااااااااااد البوست لنادر', '2018-04-02', 7),
(114, 'بسم الله الرحمن الرحيم', '2018-04-03', 1),
(115, 'ههههههههههههههههههههههههههههههه', '2018-04-03', 1),
(116, 'very beutiful', '2018-04-04', 1),
(117, 'بوست جديد\r\n', '2018-04-05', 1),
(118, 'انا منير عباس في منشوري الجديد\r\n', '2018-04-05', 9),
(119, '\r\nبقوللك مصالحةههههههههههههههههههههههههههههههههههههههههههههههه', '2018-04-06', 10),
(120, '', '2018-04-06', 10),
(121, 'هههههههههههههههههههه', '2018-04-06', 10),
(122, 'اهلا وسهلا ببكم في نادي البرمجة العلمي', '2018-04-06', 10),
(123, 'ايااااااااااام  الاسبوع سبعة', '2018-04-06', 10),
(124, 'البرمجة تحتاج الى صبر في التعلم', '2018-04-07', 13),
(125, 'اذكار اليووووووووووووووووم', '2018-04-10', 13),
(126, 'العلم نور', '2018-04-10', 10),
(127, 'بسم الله الرحمن الرحيم', '2018-04-19', 7),
(128, 'اهلا وسهلا بكم', '2018-04-23', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `state` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `date`, `place`, `information`, `nationality`, `admin`, `state`) VALUES
(1, 'جميل خطاب', '123123', 'gamil@hotmail.com', '2018-04-13', 'غزة النصيرات السوارحة', 'طالب بجامعة الازهر', 'فلسيطيني', 0, 0),
(2, 'محمد عباس', '123123', 'fdffff@hotmail.com', '2018-04-13', 'غزة النصيرات', 'طالب بجامعة الازهر', 'فلسيطيني', 0, 0),
(6, 'سعيد عباس', '123123', 'd@hotmail.com', '2018-04-13', 'غزة النصيرات', 'طالب بجامعة الازهر', 'فلسيطيني', 0, 0),
(7, 'نادر', '123123', 'nader@hotmail.com', '2018-04-13', 'غزة النصيرات', 'طالب بجامعة الازهر', 'فلسيطيني', 0, 0),
(8, 'محمد الربايعة', '123123', 'fgg@hotmail.com', '2018-04-13', 'غزة النصيرات', 'طالب بجامعة الازهر', 'فلسيطيني', 0, 0),
(9, 'منير', '123123', 'fg@hotmail.com', '2018-04-13', 'غزة النصيرات', 'طالب بجامعة الازهر', 'فلسيطيني', 0, 0),
(10, 'Faris', '123123', 'faris.2000@hotmail.com', '1998-05-16', 'gaza', 'student', 'Palestinian', 0, 0),
(13, 'raed', '123123', 'r@hotmail.com', '', '', '', '', 0, 0),
(14, 'thaer', '123123', 'thaer@hotmail.com', '2018-04-13', 'gaza 1', 'i love football', 'Palestinian', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `user_post` (`user_post`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=446;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_post`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
