-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 07:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certificate_apply`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderedlist`
--

CREATE TABLE `orderedlist` (
  `ord_ID` int(11) NOT NULL,
  `roll_Number` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `appointDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderedlist`
--

INSERT INTO `orderedlist` (`ord_ID`, `roll_Number`, `fullName`, `regDate`, `appointDate`) VALUES
(5, 2, 'abdulfatah ali salad', '2021-06-17 19:31:50', '2021-06-24'),
(6, 1, 'Abdulkadir hassan mohamed', '2021-06-17 19:32:54', '2021-06-24'),
(7, 11, 'ayub cali adan', '2021-06-17 19:35:23', '0000-00-00'),
(8, 12, 'liban dahir xirsi', '2021-06-17 19:49:29', '2021-06-24'),
(15, 14, 'jimcale hassan barre', '2021-06-18 14:13:30', '2021-06-25'),
(16, 0, '', '2021-06-20 08:40:39', '2021-06-27'),
(17, 20, 'muscab abdi axmed', '2021-06-22 12:09:52', '2021-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `Roll_Number` int(11) NOT NULL,
  `Photo` text NOT NULL,
  `Full_Name` varchar(200) NOT NULL,
  `Mother_Name` varchar(100) NOT NULL,
  `School_Name` varchar(100) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Phone` int(15) NOT NULL,
  `Pob` varchar(30) NOT NULL,
  `Birthdata` date NOT NULL,
  `Academic_Year` varchar(12) NOT NULL,
  `Average_Marks` float(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_info`
--

INSERT INTO `students_info` (`Roll_Number`, `Photo`, `Full_Name`, `Mother_Name`, `School_Name`, `Gender`, `Phone`, `Pob`, `Birthdata`, `Academic_Year`, `Average_Marks`) VALUES
(1, 'images/WhatsApp Image 2020-12-02 at 6.32.25 PM.jpeg', 'Abdulkadir hassan mohamed', 'nuunay macalin hassan', 'hantiwadag ', 'male', 615449252, 'mogadishu', '1999-06-26', '2016 - 2017 ', 87),
(2, 'images/kooke.jpg', 'abdulfatah ali salad', 'meymun cali khalif', 'syl', 'male', 617461680, 'mogadishu', '1999-06-26', '2017 - 2018', 88),
(3, 'images/8db6529ecba54dc9a760fac4cbe21512_1591189809003.jpg', 'cali xasan mohamed', 'barni farah macalim', 'al ma\'mun', 'male', 615265536, 'beydhabo', '1995-05-12', '2018 - 2019', 65),
(4, 'images/69ccadb1be524b2cb33573648373d56e_1589307004931.jpg', 'cumar axmed xasan', 'maryan cali bootaan', 'salaaxudiin', 'male', 615808891, 'garowe', '1997-09-05', '2019 - 2020', 36),
(5, 'images/01b6cc87fb8b47f39b91b03114b3cba7_1590933495280.jpg', 'farxan ali mohamed', 'farhia husein mohamed', 'hoyga xamar', 'male', 617654924, 'galkacyo', '1998-08-16', '2016 - 2017 ', 89),
(6, 'images/15d4ca5f0f6649d2827971e574dfc44e_1588618293074.jpg', 'ali mohamed geedi', 'fadumo xasan mohamed', 'hantiwadag ', 'male', 618654634, 'tiyeeglow', '2000-10-10', '2017 - 2018 ', 45),
(7, 'images/25ff2f72d01d4d62b779e58073bca652_1590229003343.jpg', 'abuubakar xasan  mohamud', 'sacdiyo adan cabdi', 'syl', 'male', 618654984, 'jowhar', '1990-01-06', '2016 - 2017 ', 67),
(8, 'images/3f181de47ffc49f98543abad0571b7cc_1591004499497.jpg', 'husein shire abdi', 'nuurto adan nuur', 'salaaxudiin', 'male', 618693634, 'mogadishu', '1996-11-20', '2018 - 2019', 78),
(9, 'images/18e7468ab6744dd89ed3938e82e5c24d.jpg', 'seinab farah ali ', 'ismahan abdirahman ali', 'macalin nuur', 'female', 618658834, 'mogadishu', '2001-09-11', '2016 - 2017 ', 69),
(10, 'images/5d03570ef9f8474c9534207960d5cf7a.jpg', 'faduma ali xasan', 'nasteho abdullahi barre', 'rajab', 'female', 618654611, 'mogadishu', '1994-07-01', '2016 - 2017 ', 12),
(11, 'images/75f5ad34f1c7433f9a44006dd9420adc_1590855105662.jpg', 'ayub cali adan', 'asli mohamed hassan', 'syl', 'male', 612765645, 'baydhabo', '2003-08-28', '2017 - 2018', 87),
(12, 'images/83f7ac6249e14b219632affe3316a910_1590498703041.jpg', 'liban dahir xirsi', 'ubax farax xasan', 'al ma\'mun', 'male', 612722245, 'hargeisa', '1999-05-08', '2019 - 2020', 67),
(13, 'images/a8abac94afe544208c82afe4f65e61b7_1591047640986.jpg', 'xirsi mohamed dhowre', 'jamilo xasan dhowre', 'al ma\'mun', 'male', 612788895, 'hargeisa', '2005-04-05', '2018 - 2019', 65),
(14, 'images/adeee12e519b47e8b11ce4a9593dab41_1586072129569.jpg', 'jimcale hassan barre', 'xawo xirsi xusein', 'rajab', 'male', 612212345, 'garowe', '1995-12-18', '2018 - 2019', 78),
(15, 'images/5d710baa0fbb4271915d0558e8381ebf_1590875927888.jpg', 'jamilo cali xaashi', 'sucado xasan farax', 'rajab', 'female', 612760005, 'jowhar', '2002-02-02', '2019 - 2020', 97),
(16, 'images/a0070da246f44c10acf5e3a1686ae8f2_1590766728594.jpg', 'rahmo xashi adan', 'meymun cali khalif', 'syl', 'female', 612121245, 'mogadishu', '1998-04-06', '2017 - 2018', 54),
(17, 'images/1cee4156404c43148afc6e6695a8e761_1590413447006.jpg', 'bahjo abdirahman abdullahi', 'axado axmed cali', 'syl', 'female', 616711645, 'mogadishu', '1996-09-20', '2016 - 2017 ', 59),
(18, 'images/f69669c13c984711859fc88ccf28dfbe_1590413494647.jpg', 'ruqiyo hassan mohamed', 'nuunay macalin hassan', 'hantiwadag ', 'female', 612555545, 'mogadishu', '2004-09-13', '2016 - 2017 ', 87),
(19, 'images/FB_IMG_1572728023311.jpg', 'bisharo  adan nuur', 'nuunay macalin hassan', 'hantiwadag ', 'female', 619999645, 'mogadishu', '1992-03-01', '2016 - 2017 ', 12),
(20, 'images/d8cdf4f897094c5e9e618b8461e506a5_1590574464261.jpg', 'muscab abdi axmed', 'bisharo  adan nuur', 'hantiwadag ', 'male', 615999999, 'mogadishu', '1996-03-13', '2016 - 2017 ', 65);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userPhoto` text NOT NULL,
  `fullName` varchar(200) NOT NULL,
  `userType` varchar(20) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userAddress` varchar(200) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `userPhone` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  `answers` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `regDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userPhoto`, `fullName`, `userType`, `userName`, `userAddress`, `gender`, `userPhone`, `question`, `answers`, `password`, `status`, `regDate`) VALUES
(2, 'WhatsApp Image 2020-12-02 at 6.32.25 PM.jpeg.png', 'Abdifatah ALi', 'admin', 'fitah', 'Nairobi', 'Male', 615544554, 'what is your nickname', 'cade', '1122', 'Active', '2021-06-04 20:49:30'),
(3, 'IMG-20200826-WA0006.jpg.png.png', 'Zaki ALi', 'normal', 'Zaki', 'Mogadishu', 'Male', 617668827, 'what is your secondery School', 'SYL', '12345', 'Active', '2021-06-04 20:51:26'),
(4, '3f181de47ffc49f98543abad0571b7cc_1591004499497.jpg.png.png', 'Kamal Mohamed', 'user', 'Kamal', 'Mogadishu', 'Male', 615556255, 'what is your babyname', 'samir', '4455', 'Active', '2021-06-04 20:52:43'),
(5, '01b6cc87fb8b47f39b91b03114b3cba7_1590933495280.jpg.png.png', 'Hamdi Mohamed', 'normal', 'Hamdi', 'Mogadishu', 'Female', 615776778, 'what is your babyname', 'shuushu', '5566', 'Active', '2021-06-04 20:53:26'),
(6, '5d03570ef9f8474c9534207960d5cf7a.jpg.png.png', 'Hanad Hassan', 'normal', 'Ahlam', 'Mogadishu', 'Female', 617767722, 'what is your nickname', 'Ahlam', '3434', 'Active', '2021-06-04 21:18:24'),
(7, '1a58eac9976f421fbd30059cbdba5470.jpg.png.png', 'Xabiibo Ahmed', 'normal', 'habibo', 'Mogadishu', 'Female', 617887881, 'what is your secondery School', 'hoygaxamar', '2233', 'Active', '2021-06-07 18:55:08'),
(10, '8db6529ecba54dc9a760fac4cbe21512_1591189809003.jpg.png.png', 'Abdikafi Ali', 'normal', 'kafi', 'Jowhar', 'Male', 617772677, 'what is your nickname', 'kafi', '334455', 'Active', '2021-06-08 08:15:37'),
(12, 'IMG-20200826-WA0008.jpg.png', 'Hassan Abdi', 'user', 'cade', 'Mogadishu', 'Male', 2147483647, 'what is your nickname', 'cade', '12345', 'Active', '2021-06-10 17:47:35'),
(13, '203b408ddef844ba8e1da7bf09139030_1590215777070.jpg.png', 'Adnaan Ali', 'user', 'Adnan', 'Mogadishu', 'Male', 617672679, 'what is your secondery School', 'warsame', '112233', 'Active', '2021-06-10 18:40:04'),
(16, '51b1633b9ddf45ac9a3130dfa629030e_1590413495697.jpg.png', 'Ridwan Dahir', 'admin', 'ridwan', 'Mogadishu', 'Male', 617662552, 'what is your nickname', 'ridwan', '2232', 'Active', '2021-06-10 19:26:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderedlist`
--
ALTER TABLE `orderedlist`
  ADD PRIMARY KEY (`ord_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderedlist`
--
ALTER TABLE `orderedlist`
  MODIFY `ord_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
