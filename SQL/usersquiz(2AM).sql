-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 10:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usersquiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` int(10) NOT NULL,
  `firstname` varchar(120) NOT NULL,
  `lastname` varchar(120) NOT NULL,
  `country` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `username`, `password`, `email`, `phone`, `firstname`, `lastname`, `country`) VALUES
(1, 'admin1', 'admin1', 'admin1@freemail.com', 1323, 'admin', 'number1', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `question` varchar(420) NOT NULL,
  `option1` varchar(120) NOT NULL,
  `option2` varchar(120) NOT NULL,
  `option3` varchar(120) NOT NULL,
  `option4` varchar(120) NOT NULL,
  `correct` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct`) VALUES
(1, 'what fugiat id cupidatat do ex ipsum?', 'quis', 'cupidatat', 'nisi', 'eiusmod', 'quis'),
(2, 'what anim enim Duis do?', 'incididunt', 'amet', 'velit', 'ut', 'velit'),
(3, 'what enim enim laboris fugiat?', 'nisi', 'et', 'incididunt', 'consectetur', 'consectetur'),
(4, 'what ex et in dolore nostrud mollit enim sit est enim?', 'exercitation', 'voluptate', 'elit', 'cillum', 'voluptate'),
(5, 'what ut amet cillum sint ex adipiscing ut?', 'ullamco', 'irure', 'eu', 'ea', 'eu'),
(6, 'what irure nostrud in exercitation?', 'sint', 'velit', 'labore', 'sit', 'velit'),
(7, 'what ipsum fugiat in?', 'fugiat', 'dolore', 'cillum', 'minim', 'minim'),
(8, 'what culpa mollit id aliquip commodo reprehenderit reprehenderit ad?', 'quis', 'cupidatat', 'deserunt', 'sit', 'quis'),
(9, 'what cupidatat elit sunt dolor exercitation mollit dolore?', 'et', 'ullamco', 'id', 'qui', 'qui'),
(10, 'what irure dolor sunt in incididunt sunt?', 'mollit', 'nisi', 'ut', 'dolore', 'dolore'),
(11, 'what ut enim anim dolor occaecat sint adipiscing in?', 'consectetur', 'ea', 'ex', 'nulla', 'consectetur'),
(12, 'what commodo quis aute eu anim nulla?', 'exercitation', 'culpa', 'deserunt', 'do', 'deserunt'),
(13, 'what tempor do quis amet anim eu sit Ut consectetur nulla labore?', 'in', 'labore', 'dolor', 'nulla', 'dolor'),
(14, 'what officia magna non commodo anim id ex irure ea do ullamco quis?', 'sunt', 'fugiat', 'incididunt', 'adipiscing', 'incididunt'),
(15, 'what mollit sint quis est amet nulla?', 'cupidatat', 'fugiat', 'cillum', 'et', 'cillum'),
(16, 'what sunt magna in?', 'ad', 'dolore', 'esse', 'amet', 'amet'),
(17, 'what ea exercitation nulla tempor?', 'dolore', 'tempor', 'in', 'ipsum', 'tempor'),
(18, 'what dolor occaecat fugiat?', 'cupidatat', 'dolor', 'in', 'irure', 'cupidatat'),
(19, 'what mollit cillum commodo est sint deserunt sit cupidatat adipiscing dolore eu?', 'id', 'et', 'elit', 'magna', 'elit'),
(20, 'what cupidatat et occaecat velit culpa?', 'ad', 'sit', 'cupidatat', 'occaecat', 'cupidatat'),
(21, 'what tempor non ea eiusmod incididunt?', 'nisi', 'aliquip', 'in', 'ex', 'ex'),
(22, 'what fugiat sint ut consectetur magna nulla enim culpa magna?', 'sed', 'velit', 'nulla', 'eu', 'velit'),
(23, 'what Excepteur Excepteur esse?', 'laboris', 'eiusmod', 'ea', 'nulla', 'nulla'),
(24, 'what amet voluptate labore Excepteur enim irure est ipsum velit nisi ut?', 'voluptate', 'qui', 'minim', 'Duis', 'Duis'),
(25, 'what laboris ex ut mollit culpa labore ad?', 'cupidatat', 'dolore', 'sint', 'exercitation', 'sint');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `question` varchar(420) NOT NULL,
  `option1` varchar(120) NOT NULL,
  `option2` varchar(120) NOT NULL,
  `option3` varchar(120) NOT NULL,
  `option4` varchar(120) NOT NULL,
  `correct` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct`) VALUES
(1, 'what culpa culpa ullamco laboris occaecat aliquip deserunt commodo qui?', 'occaecat', 'dolor', 'laboris', 'velit', 'occaecat'),
(2, 'what velit adipiscing Duis dolor labore occaecat reprehenderit dolor?', 'ex', 'eu', 'est', 'ut', 'ut'),
(3, 'what ut Duis culpa sed anim adipiscing do?', 'eu', 'laboris', 'nostrud', 'dolor', 'laboris'),
(4, 'what eiusmod incididunt in Excepteur eiusmod?', 'occaecat', 'in', 'magna', 'esse', 'in'),
(5, 'what esse incididunt sint ea velit aliquip amet dolore dolore ut in aute?', 'Excepteur', 'Ut', 'in', 'ex', 'in'),
(6, 'what magna mollit incididunt?', 'Excepteur', 'nisi', 'in', 'Lorem', 'Excepteur'),
(7, 'what anim magna cillum labore?', 'nisi', 'officia', 'adipiscing', 'commodo', 'officia'),
(8, 'what ipsum ut quis?', 'culpa', 'Lorem', 'mollit', 'tempor', 'mollit'),
(9, 'what tempor magna dolore ullamco aliquip reprehenderit amet commodo reprehenderit?', 'ea', 'Excepteur', 'amet', 'cupidatat', 'cupidatat'),
(10, 'what dolor nulla nisi reprehenderit aute voluptate labore labore ad incididunt sit?', 'exercitation', 'dolore', 'sed', 'mollit', 'sed'),
(11, 'what in anim irure in incididunt nisi mollit ad?', 'dolore', 'minim', 'nulla', 'sunt', 'dolore'),
(12, 'what Ut Duis officia adipiscing esse consectetur commodo Duis fugiat labore est?', 'cillum', 'ad', 'exercitation', 'velit', 'ad'),
(13, 'what culpa quis laboris Duis in?', 'reprehenderit', 'sunt', 'anim', 'culpa', 'anim'),
(14, 'what eu amet sint consectetur?', 'aliquip', 'elit', 'dolore', 'esse', 'elit'),
(15, 'what incididunt mollit incididunt?', 'esse', 'enim', 'et', 'in', 'et'),
(16, 'what exercitation incididunt laboris est et aliquip ad anim ipsum?', 'elit', 'nostrud', 'cupidatat', 'sit', 'sit'),
(17, 'what laboris ut officia reprehenderit id irure deserunt enim quis?', 'anim', 'commodo', 'ea', 'reprehenderit', 'ea'),
(18, 'what aliquip reprehenderit laboris laboris ipsum?', 'fugiat', 'id', 'ad', 'culpa', 'fugiat'),
(19, 'what exercitation dolore minim quis?', 'Duis', 'deserunt', 'officia', 'esse', 'deserunt'),
(20, 'what Duis qui quis ut Ut deserunt in in minim?', 'Ut', 'enim', 'sunt', 'ea', 'ea'),
(21, 'what ut officia eiusmod officia velit fugiat in?', 'Excepteur', 'sed', 'non', 'ex', 'sed'),
(22, 'what aute eiusmod nostrud est in deserunt?', 'in', 'dolore', 'deserunt', 'ex', 'deserunt'),
(23, 'what cupidatat ipsum nostrud ea voluptate culpa?', 'fugiat', 'in', 'elit', 'Ut', 'Ut'),
(24, 'what velit Duis eiusmod commodo occaecat mollit sint do anim reprehenderit qui exercitation?', 'eiusmod', 'velit', 'qui', 'anim', 'qui'),
(25, 'what commodo Duis quis dolor nisi et fugiat qui eiusmod non?', 'exercitation', 'dolor', 'irure', 'tempor', 'irure'),
(26, 'what in ut cupidatat labore in nostrud quis?', 'velit', 'in', 'est', 'anim', 'anim');

-- --------------------------------------------------------

--
-- Table structure for table `science`
--

CREATE TABLE `science` (
  `id` int(11) NOT NULL,
  `question` varchar(420) NOT NULL,
  `option1` varchar(120) NOT NULL,
  `option2` varchar(120) NOT NULL,
  `option3` varchar(120) NOT NULL,
  `option4` varchar(120) NOT NULL,
  `correct` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `science`
--

INSERT INTO `science` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct`) VALUES
(1, 'what nisi in culpa Duis exercitation exercitation do nisi amet Ut?', 'labore', 'Ut', 'fugiat', 'Excepteur', 'fugiat'),
(2, 'what dolor in aliquip exercitation Lorem velit commodo nostrud?', 'cupidatat', 'incididunt', 'tempor', 'enim', 'incididunt'),
(3, 'what sunt officia nisi quis in velit officia?', 'in', 'Ut', 'ut', 'deserunt', 'in'),
(4, 'what in ut cupidatat labore in nostrud quis?', 'anim', 'velit', 'in', 'est', 'velit'),
(5, 'what nulla ea cillum sunt ut in anim ipsum in consectetur ea?', 'Lorem', 'commodo', 'aute', 'nostrud', 'aute'),
(6, 'what ullamco Duis anim est fugiat velit non officia deserunt adipiscing ea?', 'dolore', 'do', 'id', 'non', 'do'),
(7, 'what Excepteur exercitation est in incididunt qui labore?', 'irure', 'Duis', 'tempor', 'id', 'irure'),
(8, 'what eu dolor aute cupidatat adipiscing reprehenderit nostrud sint?', 'in', 'quis', 'eiusmod', 'ut', 'eiusmod'),
(9, 'what nostrud minim nulla?', 'et', 'anim', 'non', 'Ut', 'non'),
(10, 'what ullamco adipiscing et Duis est quis dolor fugiat occaecat sed labore?', 'nisi', 'cillum', 'minim', 'commodo', 'nisi'),
(11, 'what dolor ut magna minim commodo dolor enim sed id aliquip?', 'et', 'culpa', 'ea', 'ex', 'ex'),
(12, 'what aute sed dolor sit qui aliquip id irure?', 'eiusmod', 'id', 'adipiscing', 'in', 'id'),
(13, 'what ea Duis incididunt nulla nulla laboris dolor ut elit Lorem?', 'dolore', 'anim', 'Duis', 'exercitation', 'anim'),
(14, 'what aute ut Ut?', 'do', 'consectetur', 'non', 'reprehenderit', 'reprehenderit'),
(15, 'what mollit dolor sed?', 'sint', 'elit', 'sunt', 'tempor', 'tempor'),
(16, 'what non voluptate fugiat elit adipiscing cupidatat amet dolor labore magna qui Excepteur?', 'in', 'enim', 'exercitation', 'est', 'exercitation'),
(17, 'what nostrud nisi dolor in culpa tempor sit in Duis Excepteur voluptate nisi?', 'enim', 'nulla', 'commodo', 'est', 'est'),
(18, 'what sed Ut mollit magna anim tempor in elit enim?', 'commodo', 'anim', 'Excepteur', 'aute', 'Excepteur'),
(19, 'what velit in qui enim fugiat Lorem magna cillum ad labore in dolore?', 'ullamco', 'dolor', 'Excepteur', 'aute', 'dolor'),
(20, 'what dolor in tempor dolore in?', 'sunt', 'aute', 'tempor', 'in', 'in'),
(21, 'what sed adipiscing nostrud non officia non amet occaecat?', 'et', 'culpa', 'amet', 'qui', 'amet'),
(22, 'what ex commodo officia ut adipiscing ipsum consectetur commodo Lorem Duis consectetur in?', 'in', 'incididunt', 'ex', 'ipsum', 'in'),
(23, 'what ullamco sint labore nostrud dolore ex sed eu dolore id?', 'magna', 'culpa', 'eu', 'voluptate', 'culpa'),
(24, 'what ipsum anim consectetur elit mollit minim voluptate esse nulla fugiat ipsum nisi?', 'elit', 'dolor', 'aliquip', 'non', 'elit'),
(25, 'what cupidatat in eu adipiscing non Duis?', 'tempor', 'sint', 'exercitation', 'non', 'non');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(100) NOT NULL,
  `topic` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `topic`) VALUES
(1, 'music'),
(2, 'science '),
(3, 'history');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` int(10) NOT NULL,
  `firstname` varchar(120) NOT NULL,
  `lastname` varchar(120) NOT NULL,
  `country` varchar(120) NOT NULL,
  `score` int(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `username`, `password`, `email`, `phone`, `firstname`, `lastname`, `country`, `score`) VALUES
(2, 'joshua8055', '8f14e45fceea167a5a36dedd4bea2543', 'josh@gmail.com', 856231452, 'Joshua', 'Mathew', 'India', 150),
(3, 'sheldon73', 'c9f0f895fb98ab9159f51fd0297e236d', 'sheldon@gmail.com', 545212126, 'Sheldon', 'Cooper', 'USA', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `science`
--
ALTER TABLE `science`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `science`
--
ALTER TABLE `science`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
