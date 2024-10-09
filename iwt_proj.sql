-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 05:53 PM
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
-- Database: `iwt_proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `created at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `created at`) VALUES
(12, 'shanaka', 'shana', '1234', '2024-10-06'),
(13, 'praneesha', 'praneesha03', '12345', '2024-10-07'),
(14, 'sithmi', 'sithmi03', '123456', '2024-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `cid` int(4) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(10) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `occupation`, `message`, `rating`) VALUES
(10, 'afsasf', 'asfas', 'asgasg', 0),
(11, 'sfsdf', 'asfdag', 'asfasdgdasg', 0),
(12, 'afsasf', 'asfas', 'asgasg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `insurance_packages`
--

CREATE TABLE `insurance_packages` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_type` varchar(100) NOT NULL,
  `package_description` text DEFAULT NULL,
  `max_coverage_limit` decimal(15,2) DEFAULT NULL,
  `payment_interval` varchar(50) DEFAULT NULL,
  `premium_amount` decimal(10,2) DEFAULT NULL,
  `regulation` text DEFAULT NULL,
  `basic_amount` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insurance_packages`
--

INSERT INTO `insurance_packages` (`package_id`, `package_name`, `package_type`, `package_description`, `max_coverage_limit`, `payment_interval`, `premium_amount`, `regulation`, `basic_amount`) VALUES
(37, 'Wealth Protector', 'Investment Plan', 'The product aims to boost revenue through upselling process and helps investing short term and build a long-term fund to protect the wealth of the Life assured. This gives Additional fund for Higher Education, Additional fund for your Retirement, Additional fund for your Investment goal', 500.00, '12', 700.00, 'Minimum age at entry 18 years (Exact Birthday)\r\n\r\nMaximum age at entry 70 years (80 years less policy term)\r\n\r\nCover ceasing Age 80 years (Nearest Birthday)\r\n', 600.00),
(38, 'Life Wealth Plan', 'Investment Plan', 'Life Wealth Plan is designed as a unit linked life insurance plan, where by you not only can obtain a Life Cover but also you can opt in for benefits as per your long term/short term goals and requirements. With an unmatched combination of 3 fund choices plus flexibilities, this plan gives you complete control over your savings/investment.\r\n', 400.00, '6', 550.00, 'Minimum age at entry 18 years (Exact Birthday)\r\n\r\nMaximum age at entry 70 years (80 years less policy term)\r\n\r\nCover ceasing Age 80 years (Nearest Birthday)', 500.00),
(39, 'Smart Protection', 'Life Insurance Plan', 'Smart Protection ensures that your loved ones receive a comprehensive life cover in the event of unfortunate circumstances befalling you, ensuring that they still have the foundation to reach their goals. In case your policy matures, you will receive a full refund of the total premiums you paid plus the sum assured, therefore guaranteeing maturity.\r\n', 650.00, '12', 800.00, 'Minimum age at entry 18 years (Exact Age).\r\n\r\nMaximum age at entry 70 years (Nearest B day)\r\n \r\nCover ceasing age 70. (Nearest B day)\r\n\r\n', 700.00),
(40, 'Endowment', 'Life Insurance Plan', 'Endowment Plan is a simple product with a single-minded focus; keeping your loved ones secure while you work towards your goals. It also acts as a prudent financial investment to face any unexpected events without worry.\r\n\r\n', 400.00, '3', 500.00, 'Minimum age at entry 18 years (Exact Birthday)\r\n\r\nMaximum age at entry 65 years (Age nearest Birthday)\r\n\r\nCover ceasing age 70 years (Age nearest Birthday).\r\n', 450.00),
(41, 'Coporate Pension Plan', 'Retirement Plan', 'Corporate Pension Plan is a Group Pension Product which address the retirement need of the corporate level employees and benefit the employers on improving their employee retention level.\r\n', 350.00, '6', 500.00, 'Minimum age at entry 18 years (Exact Age).\r\n\r\nMaximum age at entry 70 years (Nearest B day) \r\n\r\nCover ceasing age 80. (Nearest B day) (Basic cover only)\r\n', 400.00),
(42, 'Critical Illness Benifit', 'Medical Plan', 'Critical illnesses have become common in today’s world. They not only impact your health, but also take a psychological toll on you and your loved ones. The expenses you must incur to treat these illnesses are high and could worsen an already unfortunate situation.\r\n', 300.00, '3', 450.00, 'Six Plans of covers to choose from\r\n\r\nCover for Cancer Treatment\r\n\r\nCover for psychiatric treatment on selected plans\r\n\r\n', 400.00),
(43, 'Hospital Cash Benefit', 'Medical Plan', 'You or a loved one having to be hospitalized will be a challenging period of your life. Fortunately, medical care has evolved throughout the decades, with sophisticated treatments and state-of-the-art hospitals to facilitate them.', 600.00, '12', 750.00, 'Cover for psychiatric treatment on selected plans\r\n\r\nEmergency local road ambulance service covered\r\n\r\nCover for Organ Transplantation', 700.00),
(44, 'Critical Illness Benifit', 'Group Plan', 'Critical illnesses have become common in today’s world. They not only impact your health, but also take a psychological toll on you and your loved ones. The expenses you must incur to treat these illnesses are high and could worsen an already unfortunate situation.\r\n        ', 300.00, '3', 450.00, '  Six Plans of covers to choose from.\r\n\r\nCover for Cancer Treatment.\r\n\r\nCover for psychiatric treatment on selected plans.\r\n\r\n  ', 400.00);

-- --------------------------------------------------------

--
-- Table structure for table `makeclaim`
--

CREATE TABLE `makeclaim` (
  `policyno` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `amount` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `makeclaim`
--

INSERT INTO `makeclaim` (`policyno`, `type`, `date`, `amount`, `description`) VALUES
(123, 'health', '2024-02-03', '10000', 'Hospital bill\r\n'),
(245, 'health', '2024-10-16', '25000', 'Hospital bill');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(3) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`) VALUES
(211, 'New Life Insurance Policies Launched in 2024', 'Several insurance companies have introduced new life insurance policies with flexible premium payment options and enhanced coverage', ''),
(212, 'Benefits of Life Insurance for Young Families', 'Experts advise young families to invest in life insurance early, highlighting affordable premiums and long-term financial security', ''),
(213, 'The Importance of Life Insurance for Retirement Planning', 'Financial advisors stress the role of life insurance in securing a stable retirement income for individuals and their families', '');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `policy_id` int(11) NOT NULL,
  `policy_name` varchar(100) NOT NULL,
  `policy_description` varchar(1000) NOT NULL,
  `effective_date` date NOT NULL,
  `expiration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`policy_id`, `policy_name`, `policy_description`, `effective_date`, `expiration_date`) VALUES
(7, 'Introduction', 'This privacy policy outlines how Life Insurancecollects, uses, and protects your personal information when you see our website or sevices.', '2003-03-04', '2024-03-04'),
(8, 'Information We Collect', 'We may collect personal information such as your name, email address, and payment details, as well as non-personal information like your IP address and browser type.', '2000-02-02', '2010-02-02'),
(9, 'How We Use Your Information', 'Your information is used to improve our services, process transactions, and send periodic emails. We do not sell your data to third parties.', '2000-02-02', '2020-02-02'),
(10, 'Information Sharing and Disclosure', 'We do not sell, trade, or otherwise your personal information to third parties without your consent, expect as described in this privacy policy. We may share your information in the following situations                             1.With trusted third-party service providers to perform functions on our behalf                                       2.To comply with legal obligations or project against potential fraud                           3.In the event of a merger, acquisition, or sale of all  or a portion of our assets.', '0000-00-00', '2222-02-02'),
(11, 'Security', 'We take appropriate security measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction, However, please note that no method of transmission over the internet or electronic storage 100% secure.', '2222-02-02', '3333-02-02'),
(12, 'Contact Us', 'If you have any questions about our privacy policy,please contact us                                                    Lifegaurd Insurance,                         123 park street,                                City state 1234,                               Phone:0123456789                            Email:lifegaurdassurance@gmail.com.', '3000-02-02', '2000-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(6) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileNo` varchar(15) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `firstName`, `lastName`, `email`, `mobileNo`, `nic`, `address`, `password`, `file`) VALUES
(15, 'dinuja03', 'dinuja', 'werake', 'dinuja@gmail.com', '0772511708', '200361537', '44,Nidahas Mawatha, Galagedara-Padukka', '4321', 'dinuja.jpg'),
(16, 'shanaka2002', 'Shanaka', 'Kalubowilage', 'sskalubowilage@gmail.com', '0778049301', '737782310v', '44,Nidahas Mawatha, Galagedara-Padukka', '1315021111', 'IMG-20240312-WA0030.jpg'),
(17, 'praneesha123', 'Praneesha', 'Perera', 'praneesha2002@gmail.com', '0772511708', '20031234432', '52, Roda lane,Kottawa', '0987', ''),
(18, 'adeesha', 'adeesha', 'harshana', 'adeesha@gmail.com', '0762901765', '200215501576', '44,Nidahas Mawatha, Galagedara-Padukka', '123', 'wikley-oh-169hero-news-shutterstock.webp'),
(19, 'Kula', 'Kulanya', 'Lisaldi', 'lisaldi03@gmail.com', '0701536490', '200360011745', '62,Udaya mawatha- Malabe', '200304', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_packages`
--
ALTER TABLE `insurance_packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `makeclaim`
--
ALTER TABLE `makeclaim`
  ADD PRIMARY KEY (`policyno`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`policy_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `cid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `insurance_packages`
--
ALTER TABLE `insurance_packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3457;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `policy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
