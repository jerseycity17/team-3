-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 03:46 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `6degrees`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaignassociation`
--

CREATE TABLE `campaignassociation` (
  `user_id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `user_degree` int(11) DEFAULT NULL,
  `user_hiddendegree` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaignassociation`
--

INSERT INTO `campaignassociation` (`user_id`, `campaign_id`, `user_degree`, `user_hiddendegree`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `campaigndetail`
--

CREATE TABLE `campaigndetail` (
  `creator_id` int(11) DEFAULT NULL,
  `campaign_id` int(11) NOT NULL,
  `campaign_name` text NOT NULL,
  `campaign_info` text NOT NULL,
  `campaign_hashtag` text,
  `campaign_degree` int(11) NOT NULL DEFAULT '1',
  `expiration` datetime DEFAULT NULL,
  `organization` varchar(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaigndetail`
--

INSERT INTO `campaigndetail` (`creator_id`, `campaign_id`, `campaign_name`, `campaign_info`, `campaign_hashtag`, `campaign_degree`, `expiration`, `organization`) VALUES
(1, 101, 'breast cancer', 'campaign info goes here', '#breastcancer', 1, '2017-10-16 00:00:00', 'BCA Foundation'),
(2, 2, 'charitywatercampaign', 'help raise money', 'water', 1, '2017-10-24 00:00:00', 'charitywater');

-- --------------------------------------------------------

--
-- Table structure for table `challengestatus`
--

CREATE TABLE `challengestatus` (
  `user_id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `challenge_id` int(11) NOT NULL,
  `challenge_number` int(11) NOT NULL,
  `challenge_info` text NOT NULL,
  `challenge_type` set('Donation','Volunteer','Share','Other') DEFAULT NULL,
  `challenge_status` tinyint(1) DEFAULT '0',
  `quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `challengestatus`
--

INSERT INTO `challengestatus` (`user_id`, `campaign_id`, `challenge_id`, `challenge_number`, `challenge_info`, `challenge_type`, `challenge_status`, `quantity`) VALUES
(1, 1, 1, 2, 'challenge number 2', 'Donation', NULL, 398),
(2, 1, 1, 2, 'challenge 1', 'Donation', 0, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `invitedby`
--

CREATE TABLE `invitedby` (
  `parent` int(11) NOT NULL,
  `invitee` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `invitationstatus` set('accept','decline','Not Respond') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `facebook` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_id`, `username`, `password`, `email`, `facebook`) VALUES
(1, 'moh', '1234', 'abcd@gmail.com', NULL),
(2, 'alex', '2345', 'defg@gmail.com', NULL),
(3, 'olga', '3456', 'cdef@gmail.com', NULL),
(4, 'abc', '1245', 'EMAIL@EMAIL.COM', NULL),
(5, 'username1', 'password', 'email@email.com', NULL),
(7, 'FDBGFDFDSAFSVBGFD', 'ASDF', 'EMAIL@EMAIL.COM', NULL),
(8, '', '', 'email@email.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaignassociation`
--
ALTER TABLE `campaignassociation`
  ADD PRIMARY KEY (`user_id`,`campaign_id`),
  ADD KEY `campaign_id` (`campaign_id`);

--
-- Indexes for table `campaigndetail`
--
ALTER TABLE `campaigndetail`
  ADD PRIMARY KEY (`campaign_id`),
  ADD KEY `creator_id` (`creator_id`);

--
-- Indexes for table `challengestatus`
--
ALTER TABLE `challengestatus`
  ADD PRIMARY KEY (`challenge_id`,`user_id`,`campaign_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `campaign_id` (`campaign_id`);

--
-- Indexes for table `invitedby`
--
ALTER TABLE `invitedby`
  ADD PRIMARY KEY (`parent`,`invitee`,`campaign_id`),
  ADD KEY `invitee` (`invitee`),
  ADD KEY `campaign_id` (`campaign_id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaigndetail`
--
ALTER TABLE `campaigndetail`
  MODIFY `campaign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `challengestatus`
--
ALTER TABLE `challengestatus`
  MODIFY `challenge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
