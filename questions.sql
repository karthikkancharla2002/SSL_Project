-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 03:21 PM
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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(420) NOT NULL,
  `option1` varchar(120) NOT NULL,
  `option2` varchar(120) NOT NULL,
  `option3` varchar(120) NOT NULL,
  `option4` varchar(120) NOT NULL,
  `correct` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct`) VALUES
(0, 'what mollit adipiscing incididunt?', 'fugiat', 'ad', 'quis', 'nulla', 'ad'),
(1, 'what qui occaecat officia?', 'in', 'minim', 'velit', 'magna', 'velit'),
(2, 'what velit consectetur enim culpa irure id minim ut do?', 'dolor', 'cillum', 'voluptate', 'nulla', 'nulla'),
(3, 'what irure nisi ea ut nisi?', 'irure', 'in', 'nulla', 'reprehenderit', 'nulla'),
(4, 'what tempor ea mollit occaecat aute commodo in ex Excepteur Lorem culpa?', 'culpa', 'adipiscing', 'eu', 'ullamco', 'culpa'),
(5, 'what labore mollit ut cillum anim dolor in aliquip?', 'qui', 'Duis', 'ullamco', 'sed', 'sed'),
(6, 'what ipsum Excepteur occaecat Lorem Excepteur mollit?', 'nisi', 'exercitation', 'enim', 'do', 'nisi'),
(7, 'what sit nostrud tempor incididunt adipiscing quis ut Ut fugiat?', 'non', 'ullamco', 'occaecat', 'culpa', 'non'),
(8, 'what amet commodo in fugiat Lorem anim Excepteur deserunt?', 'in', 'cupidatat', 'Excepteur', 'dolor', 'Excepteur'),
(9, 'what exercitation amet esse consectetur laboris quis commodo dolor in?', 'amet', 'sed', 'consectetur', 'eiusmod', 'amet'),
(10, 'what cillum in sit dolor sit officia in deserunt culpa?', 'in', 'anim', 'enim', 'velit', 'anim'),
(11, 'what in occaecat ipsum laboris consectetur irure sunt voluptate?', 'fugiat', 'sunt', 'deserunt', 'qui', 'qui');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
