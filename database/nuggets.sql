-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2020 at 04:33 AM
-- Server version: 5.7.29
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lowkehla_bestadvicebank`
--

-- --------------------------------------------------------

--
-- Table structure for table `nuggets`
--

CREATE TABLE `nuggets` (
  `id` int(11) NOT NULL,
  `advice` varchar(280) NOT NULL,
  `source` varchar(140) NOT NULL,
  `why` varchar(280) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nuggets`
--

INSERT INTO `nuggets` (`id`, `advice`, `source`, `why`) VALUES
(11, '\\\"No one man should have all that power.\\\"', 'Kanye West', 'I resonate with the themes of superheroism and god complex'),
(12, '\\\"I get knocked down, but I get up again\\\"', ' Chumbawamba ', 'A power song about resilience and tenacity'),
(13, '\\\"To be or not to be\\\"', 'Shakespeare', 'I love poetry'),
(14, '\\\"Let the good times roll\\\"', 'Uncle Dale', 'Reminds me to relax and leave my stress behind'),
(20, 'The grass is greener on the otherside', 'As Told By Ginger', 'Reminds me that there is always something to look forward to'),
(54, 'Do good in school', 'Teacher', 'I am a good student'),
(56, '\\\"Don\\\'t sweat the small stuff, don\\\'t pet the sweaty stuff\\\"', 'A little rascal ', 'It\\\'s one of my favorite movies'),
(57, '\\\"Dust yourself off and try again\\\"', 'Aaliyah Haughton', 'Reminds me that I should never give up'),
(58, '\\\"Live Laugh Love\\\"', 'Julia Roberts', 'I resonate with the themes in that movie'),
(59, '\\\"You can be whoever you want to be\\\"', 'Nassir', 'It\\\'s a song about empowerment made by someone who looks like me'),
(60, '\\\"Just keep swimming\\\"', 'Dory Bluefish', 'It reminds me that no matter what I should always move forward'),
(61, '\\\"Don\\\'t stop believing\\\"', 'Freddy Mercury', 'One of my favorite singers and it really pushes me to be a better version of myself everyday'),
(62, '\\\"Trust yourself\\\"', 'Pebbels Coco', 'I\\\'ve always believed in her power and grace'),
(63, '\\\"If you can\\\'t beat \\\'em, try em\\\"', 'Dough Evan', 'It means to be reslient in all you can be. Compromise only in the face of adversity'),
(64, '\\\"Follow your dreams\\\"', 'Anie Apolis', 'It reminds me to follow my dreams');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nuggets`
--
ALTER TABLE `nuggets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nuggets`
--
ALTER TABLE `nuggets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
