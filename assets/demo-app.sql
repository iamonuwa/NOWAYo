-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2015 at 09:18 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demo-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `aauth_groups`
--

CREATE TABLE IF NOT EXISTS `aauth_groups` (
`id` int(11) unsigned NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `definition` text
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_groups`
--

INSERT INTO `aauth_groups` (`id`, `name`, `definition`) VALUES
(1, 'Administrator', 'Public Access Group'),
(2, 'MODERATOR', 'Public Access Group'),
(3, 'Default', 'Public Access'),
(4, 'Normal User', 'Normal Users                          \r\n                      ');

-- --------------------------------------------------------

--
-- Table structure for table `aauth_perms`
--

CREATE TABLE IF NOT EXISTS `aauth_perms` (
`id` int(11) unsigned NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_perm_to_group`
--

CREATE TABLE IF NOT EXISTS `aauth_perm_to_group` (
  `perm_id` int(11) unsigned NOT NULL DEFAULT '0',
  `group_id` int(11) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_perm_to_user`
--

CREATE TABLE IF NOT EXISTS `aauth_perm_to_user` (
  `perm_id` int(11) unsigned NOT NULL DEFAULT '0',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_pms`
--

CREATE TABLE IF NOT EXISTS `aauth_pms` (
  `sender_id` int(11) unsigned NOT NULL,
  `receiver_id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text,
  `date` datetime DEFAULT NULL,
  `read` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_system_variables`
--

CREATE TABLE IF NOT EXISTS `aauth_system_variables` (
`id` int(11) unsigned NOT NULL,
  `key` varchar(100) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_users`
--

CREATE TABLE IF NOT EXISTS `aauth_users` (
`id` int(11) unsigned NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `residence_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `picture_id` int(11) DEFAULT NULL COMMENT 'From Uploads',
  `profile_picture` varchar(200) DEFAULT NULL,
  `banned` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `last_login_attempt` datetime DEFAULT NULL,
  `forgot_exp` text,
  `remember_time` datetime DEFAULT NULL,
  `remember_exp` text,
  `verification_code` text,
  `totp_secret` varchar(16) DEFAULT NULL,
  `ip_address` text,
  `login_attempts` int(11) DEFAULT '0',
  `is_suspended` tinyint(1) DEFAULT '0',
  `is_deleted` tinyint(1) DEFAULT '0',
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_users`
--

INSERT INTO `aauth_users` (`id`, `fullname`, `email`, `pass`, `name`, `residence_id`, `country_id`, `phone`, `gender_id`, `picture_id`, `profile_picture`, `banned`, `last_login`, `last_activity`, `last_login_attempt`, `forgot_exp`, `remember_time`, `remember_exp`, `verification_code`, `totp_secret`, `ip_address`, `login_attempts`, `is_suspended`, `is_deleted`, `group_id`) VALUES
(1, 'Onuwa Nnachi Isaac', 'matrix4u2002@gmail.com', '$2y$10$iiK.7yJti6i70rQaV0JvN.nkoEwLjygXbrG9gQ/fOyJyaznp/TAGO', 'matrix4u', 11, 0, '08062457326', 1, NULL, NULL, 0, '2015-10-08 17:54:09', '2015-10-08 17:54:09', '2015-10-08 17:00:00', NULL, NULL, NULL, NULL, NULL, '127.0.0.1', NULL, 0, 0, 0),
(2, 'Anya Chima', 'chimaeyes@gmail.com', '$2y$10$FJEi200/5h8oC7VqeUoQqeO1o.wm5vAFDJOj/mtj5mJL6tA6Xu3qy', 'chima', 0, 0, '08062457326', 0, NULL, NULL, 0, '2015-10-08 19:50:27', '2015-10-08 19:50:27', '2015-10-08 19:00:00', NULL, NULL, NULL, '', NULL, '127.0.0.1', NULL, 0, 0, 0),
(3, 'Chinaza Gideon', 'chinaza.gideon@yahoo.co.uk', '$2y$10$CeDV6tYIllUjcCvD7/UYuuvoSCymDvIoOYOQkCu6mtM.ofmjwN6oS', 'Bill25concept', 14, 0, '08130406877', 1, NULL, 'cam-1444660613USC10KIC052A0101.jpg', 0, '2015-10-16 13:14:58', '2015-10-16 13:14:58', '2015-10-16 13:00:00', NULL, NULL, NULL, NULL, NULL, '::1', NULL, 0, 0, 3),
(4, 'Bill Gideon', 'billtechcomputerworld@live.com', '$2y$10$mKEJQilqBN9wh0fjf1IsEOBsyaxSCF3wYhGYXrz0p9TgdXL447Y/e', 'bill_tech', 14, 0, '08130406877', 1, NULL, 'cam-1444614523IMG-20150402-WA0001.jpg', 0, '2015-10-12 03:48:05', '2015-10-12 03:48:05', '2015-10-12 03:00:00', NULL, NULL, NULL, NULL, NULL, '::1', NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `aauth_user_to_group`
--

CREATE TABLE IF NOT EXISTS `aauth_user_to_group` (
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `group_id` int(11) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_user_to_group`
--

INSERT INTO `aauth_user_to_group` (`user_id`, `group_id`) VALUES
(1, 1),
(2, 3),
(3, 1),
(4, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `aauth_user_variables`
--

CREATE TABLE IF NOT EXISTS `aauth_user_variables` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `key` varchar(100) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('WEBMASTER','MODERATOR') NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `type`, `email`) VALUES
('webadmin', '$2y$10$qFPtoKSkg8F2EQiimGVN8O4lStIOiD31FPtd2YnH185q/RytYHH1C', 'WEBMASTER', 'example@domain.com');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `post_id`, `comment`, `date_added`) VALUES
(1, 3, 4, '<p>I like this <span style="font-size: large;"><strong>news</strong></span></p>', '2015-10-13 20:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `error_log`
--

CREATE TABLE IF NOT EXISTS `error_log` (
`id` int(11) NOT NULL,
  `time_of_error` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` text NOT NULL,
  `trace` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `line` int(4) NOT NULL,
  `is_fixed` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `error_log`
--

INSERT INTO `error_log` (`id`, `time_of_error`, `message`, `trace`, `file`, `line`, `is_fixed`) VALUES
(1, '2015-08-17 14:26:31', 'Unknown column ''username'' in ''where clause''', '#0 /opt/lampp/htdocs/cpanela/Admin.php(90): AdminUtility::logMySQLError(Object(mysqli))\n#1 /opt/lampp/htdocs/cpanela/Admin.php(27): Admin->getAdminData()\n#2 /opt/lampp/htdocs/cpanela/index.php(4): Admin->Admin()\n#3 {main}', '/opt/lampp/htdocs/cpanela/AdminUtility.php', 148, 0);

-- --------------------------------------------------------

--
-- Table structure for table `error_reports`
--

CREATE TABLE IF NOT EXISTS `error_reports` (
`id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `time_of_report` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `seen` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nowayo_contest`
--

CREATE TABLE IF NOT EXISTS `nowayo_contest` (
  `id` int(11) NOT NULL,
  `image_id` text NOT NULL,
  `date_created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nowayo_gender`
--

CREATE TABLE IF NOT EXISTS `nowayo_gender` (
`gender_id` int(11) NOT NULL,
  `gender_name` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nowayo_gender`
--

INSERT INTO `nowayo_gender` (`gender_id`, `gender_name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `nowayo_news`
--

CREATE TABLE IF NOT EXISTS `nowayo_news` (
`news_id` int(11) NOT NULL,
  `news_active` smallint(8) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_title_url` varchar(255) NOT NULL,
  `news_content` text NOT NULL,
  `category` varchar(11) NOT NULL,
  `news_added` int(50) NOT NULL,
  `news_authors_ip` varchar(20) NOT NULL DEFAULT '0.0.0.0',
  `views` int(11) DEFAULT '0',
  `is_deleted` tinyint(1) DEFAULT '0',
  `last_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `news_user_fk` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nowayo_news`
--

INSERT INTO `nowayo_news` (`news_id`, `news_active`, `news_title`, `news_title_url`, `news_content`, `category`, `news_added`, `news_authors_ip`, `views`, `is_deleted`, `last_modified`, `news_user_fk`) VALUES
(1, 0, 'Nigerian tribunal issues arrest warrant for Senate president', 'nigerian-tribunal-issues-arrest-warrant-for-senate-president', 'Nigeria&#8217;s Code of Conduct Tribunal issued a warrant for the arrest of Senate President Bukola Saraki on Friday after he failed to appear before the court, the judge said.<br><br>\r\n\r\nThe tribunal is a special court that tries asset declaration misdemeanours. It charged Saraki this week with falsely declaring his assets.<br><br>\r\n\r\n&#8220;Having sworn to protect the constitution, (he) ought to have shown respect to the tribunal by appearing before it today. I hereby issue a bench warrant for his arrest accordingly. This should be effected by the inspector-general of police,&#8221; judge Danladi Umar said. <br><br>\r\n\r\n A police spokesman did not immediately comment.<br><br>\r\n\r\nThe Senate president is the third most powerful post in the country. Saraki secured the position in June after a no-contest vote, mainly with the backing of the opposition.<br><br>\r\n\r\nThe move outraged some members of the ruling All Progressives Congress (APC) who were backing other candidates and were meeting outside of the National Assembly when the decision was made.\r\n<br><br>\r\nThe tribunal outlined 13 charges mostly related to the ownership of land held by his company Carlisle Properties Ltd between 2003 and 2011.\r\n<br><br>\r\n Other charges relate to his transfer of $3.4 million to an account outside Nigeria while he was governor of Kwara state, and sending 1.5 million pounds sterling to a European account to cover a mortgage for a London property.\r\n<br><br>\r\nSaraki&#8217;s media team has called the allegations &#8220;false, incorrect and untrue&#8221; and said they had been brought under outside influence. It said the senator did not have a foreign bank account while he was governor.\r\n<br><br>\r\nOn Friday, his spokesman said Saraki had sought recourse at the Federal High Court after &#8220;the manner in which the case was filed showed that he will not be given justice&#8221;.\r\n<br><br>\r\nThe high court ordered the sitting to be set for Monday.\r\n<br><br>\r\n&#8220;The implication of this ruling by a court of competent jurisdiction is that the sitting today has been overtaken by event,&#8221; a statement from his spokesman said.\r\n<br><br>\r\n<b>WIDER INVESTIGATIONS</b>\r\n<br><br>\r\nThe Economic and Financial Crimes Commission (EFCC) has also been looking into those close to the Senate president. His wife was called in for questioning in July and on Thursday, the EFCC declared the current managing director of Saraki&#8217;s Carlisle Properties, Kennedy Izuagbe, a wanted man.\r\n<br><br>\r\nIzuagbe, who was a former director of Societe Generale Bank Nigeria, is being investigated for conspiracy and money laundering amounting to more than 3.6 billion naira ($180 million).\r\n<br><br>\r\n Societe Generale Bank Nigeria was investigated multiple times for misconduct under the direction of Saraki&#8217;s father and its license was temporarily withdrawn in 2006 by the central bank.\r\n<br><br>\r\nSaraki himself was a director at the bank during the 1990s, and the family held a large number of its shares.\r\n<br><br>\r\nPresident Muhammadu Buhari won his seat on a mandate to clean up corruption. Since his inauguration at the end of May, there have been countless revelations and many investigations have been launched.\r\n<br><br>\r\nPolitical analysts in Nigeria have said that those heading various government bodies have made a show of cracking down on graft over the last few months, partly in an attempt to curry favour with Buhari and keep their jobs.\r\n<br><br>\r\nA source at the EFCC said cases had been piling up for years, but there was still a lack of political will to prosecute.\r\n<br><br>\r\nA spokesman for Buhari said: &#8220;This matter is purely a judicial matter and Mr. President has made it clear that he will not intervene in judicial matters.&#8221;\r\n<br><br>\r\nBuhari said he would announce his long-awaited cabinet this month, nearly four months after taking power. His appointees must be approved by the Senate, which reconvenes on Sept. 29.', 'FCT', 1442765387, '127.0.0.1', 0, 0, '2015-09-20 16:09:47', 1),
(2, 0, 'Ebonyi, Ekiti, Imo, Ogun, Oyo get FG’s bail-out funds', 'ebonyi-ekiti-imo-ogun-oyo-get-fgs-bail-out-funds', 'THE Central Bank of Nigeria, CBN, said yesterday that five more states got their shares of its bail-out funds designed to ease the financial challenges faced by the second tier of government, to clear outstanding salary arrears of their workers.<br><br>\r\n\r\nThe Director of Corporate Communications of the apex bank, Alhaji Ibrahim Muazu, said in Abuja that the five states were Ebonyi, Ekiti, Imo, Ogun and Oyo.<br><br>\r\n\r\nHe disclosed that with the latest group of beneficiaries, 15 states had accessed the N338 billion, which had been clarified as a loan and not a grant.<br><br>\r\n\r\nThe apex bank said for a state to receive the fund, it must submit a resolution of the State Executive Council, SEC, authorizing the borrowing. It must also obtain an approval of the states House of Assembly consenting to it and issue an Irrevocable Standing Payment Order, ISPO, to enable CBN deduct at source when its allocations become available.<br><br>\r\n\r\nAt the end of the last administration, only a few states were up-to-date in meeting their financial obligations due to alleged massive corruption and refusal to prioritize payment of workers’ salaries by governors.<br>\r\n\r\n<b>Benefiting states</b><br><br>\r\n\r\nThe 10 states that received the bailout funds earlier are Kwara, Osun, Zamfara, Niger, Bauchi, Gombe, Abia, Adamawa, Ondo and Kebbi. The delay in accessing the funds by some states, it was learned, was due to the conditions placed on it by CBN.<br><br>\r\n\r\nHowever, the Nigeria Labour Congress, NLC, has said that it was monitoring 27 states to which the bailout funds have been disbursed.<br><br>\r\n\r\nAccording to NLC in a statement yesterday, Kogi State got the highest with N50.842 billion, while Kebbi State got the lowest with N690 million.<br><br>\r\n\r\nOthers are Abia State, N14.152 billion; Adamawa, N2.378 billion; Bauchi, N8.60 billion; Bayelsa, N1.285 billion; Benue, N28.013 billion; Borno, N7.680 billion; Cross River, N7.856 billion; Delta, N10.036 billion; Ebonyi, N4.063 billion; Edo, N3.167 billion; Ekiti, N9.604 billion; Enugu, N4.207 billion; Gombe, N16.459 billion and Imo, N26.806 billion.<br><br>\r\n\r\nSimilarly, Kastina State received N3.304 billion; Kwara, N4.320 billion; Nasarawa, N8.317 billion; Niger, N4.306 billion; Ogun, N20 billion; Ondo, N14.686 billion; Osun, N34.988 billion; Oyo, N26.606 billion; Plateau, N5.357 billion; Sokoto, N10.093 billion and Zamfara, N10.020 billion.<br><br>\r\n\r\n<b>Labour</b><br><br>\r\n\r\nReacting to the development, NLC said it would partner with the Independent Corrupt Practices and Related Offences Commission, ICPC, to monitor the disbursement and use of the N338 billion bailout funds for 27 states, owing their workers’ salaries.<br><br>\r\n\r\nNLC, in a statement by its factional President, Ayuba Wabba, recalled that it had directed its states councils to serve as whistle-blowers on any criminal diversion of bailout funds.<br><br>\r\n\r\nIt said: “We agree with ICPC that the painful days of the public running after funds after appropriation are over for the good of all Nigerians, including our working members. The states NLC is monitoring are those who have benefited from the disbursed N338 billion bailout funds.”<br><br>\r\n\r\n<b>External debt</b><br>\r\n\r\nThe external debt profile of states has shown that Lagos State has the highest with $1.087 billion, followed by Kaduna State with a total of $234 million. Cross River followed with $131.469 million.<br><br>\r\n\r\nOther states with relatively large external debt are Edo, $123 million; Ogun, $109 million; Bauchi, $87 million; Enugu, $62 million; Katsina, $78 million; Osun, $67 million, and Oyo, $72 million.<br><br>\r\n\r\nBased on the rising debt profiles of state governments, the Federal Government, last year, directed banks not to grant fresh loans to them until they got the relevant approval and clearance from the Federal Ministry of Finance.<br><br>\r\n\r\nThe Federal Government had said the directive was to protect the states from excessive accumulation of debts.<br><br>\r\n\r\nMinister of State for Finance, Bashir Yuguda, had said that the decision was not aimed at stalling the development efforts of the state governments.<br><br>\r\n\r\nHe said that most of the states had been experiencing difficulties in servicing their existing debts and it would not be advisable to allow them take fresh loans.<br><br>\r\n\r\n<b>IGR analysis</b><br><br>\r\n\r\nInternally Generated Revenue, IGR, of states had been poor, though rising in total amount. Lagos, Rivers, Delta, Edo, and Akwa Ibom are states that recorded the highest IGR from 2010 to 2013.<br><br>\r\n\r\nAvailable data from the National Bureau of Statistics, NBS, and Joint Tax Board, JTB, for the period showed that Lagos dominated in 2010. Rivers followed with N173.1 billion, while Delta realized N106.4 billion. Edo raked in N53.53 billion, just as Akwa Ibom made N35.6 billion.<br><br>\r\n\r\nOn the other hand, Jigawa, Zamfara, Nasarawa, Borno and Taraba states dominated the bottom of the table. Jigawa recorded only N2.725 billion; Zamfara, N6.374 billion. Nasarawa, Borno, Taraba generated N5.982 billion, N6.83 billion and N7.571 billion, respectively.<br><br>\r\n\r\nThe IGR was realized from Pay-As-You- Earn, PAYE, direct assessment, road taxes and other revenue with PAYE accounting for the highest amount.<br><br>\r\n\r\n<b>Depletion of excess crude account</b><br><br>\r\n\r\nThe Federal Government, under former President Olusegun Obasanjo, had set up the excess crude account, where the oil revenue above the budget benchmark was being saved every year for the rainy day.<br><br>\r\n\r\nHowever, state governors fought the decision and insisted that the money be shared instead of being saved.<br><br>\r\n\r\nThe Federal Account Allocation Committee was drawing from the fund to augment short falls in oil revenue accruing to the federation monthly.<br><br>\r\n\r\nNigeria’s Excess Crude Account, which at a time had about $20 billion, has plunged to $2.45 billion as oil prices continue to fall. The balance in the dollar component of the excess crude oil revenue account depleted to about $2.45 billion in December 2014.<br><br>\r\n\r\nThe account, which stood at about $4.11 billion in October, dropped to about $3.11 billion in November 2014.<br><br>\r\n\r\nDetails of the balance of the account released at the end of the FAAC meeting showed that the transfer to the account, as a result of foreign exchange gain, dropped from N1.767 billion to about N665 million.<br><br>\r\n\r\nThe Accountant General of the Federation, Jonah Otunla, said in a statement at the end of the meeting that the balance in the account dropped from about $3.11 billion to $2.45 billion in December.<br><br>\r\n\r\nThe new balance in the account followed the withdrawal of the equivalent of N15.631 billion to augment the shortfall in allocation available for distribution to the three tiers of government for the month.<br><br>\r\n\r\nFormer CBN Governor, Sanusi Lamido, and the former Finance Minister, Dr. Okonjo-Iweala, had argued that the account be kept for a rainy period. But state governors had their way and the money sharing began.<br><br>\r\n\r\nIf there were enough funds in the account, it will not have been this bad for state governments.<br><br>\r\n\r\nAnalysts at Cardinal Stone, in their outlook for 2015, disclosed that the low price of crude oil in the international market will expose the structural deficiencies in the Nigerian economy and will plunge some states into a quagmire.<br><br>', 'Ebonyi', 1442765433, '127.0.0.1', 0, 0, '2015-09-20 16:10:33', 1),
(3, 0, 'Edo can feed Nigeria with rice - Oshiomhole', 'edo-can-feed-nigeria-with-rice-oshiomhole', 'Edo governor, Adams Oshiomhole, said the state could feed Nigeria with rice if waiver on the commodity was removed.\r\n<br>\r\nricepix-newHe stated this at the backdrop of  decision of the National Economic Council to promote local production of food crops in states with comparative advantage on them. The governor, who spoke with State House correspondents on Friday in Abuja, decried the waiver granted rice importers by the previous administration, saying that it led to dumping of various goods in the country. He said that the incentive also drove local producers of food items, including rice, out of business.\r\n<br>\r\nHe stated that big rice millers in the state were already waiting to see if the implementation of the policy before they would return to the farms. “Edo could do a lot if the Federal Government has coherent agricultural policies that do not provide the window for waivers, and expired rice and cheap rice to be dumped on Nigeria,” he said.\r\n<br>\r\nAccording to the governor, Edo has huge potential for massive rice production but such might not happen until the right policies are made.\r\n<br>\r\nHe said that Leventis Group, which had a large rice farm in Agenebode, had promised that with the new administration in the country, and controversies over duty waivers removed, it was willing to resume production. He also said that Dangote Group had acquired about 50,000 hectares of land for rice farming in the state and was enthusiastic to go into massive rice farming with the right policies in place.\r\n<br>\r\nHe said his administration had waived land charges as incentives for big investors in agriculture and urged those interested in investing in the state to embrace the gesture.\r\n<br>\r\nOn fresh forensic audit being carried out on Nigerian National Petroleum Corporation (NNPC), Oshimhole explained that it was being done because the one carried out by the past administration was incomprehensive.\r\n<br>\r\nHe said that the firm which carried out the first audit was not given free hand to conduct the exercise, adding that the new audit approved by the economic council would also look into the700 million dollars Sovereign Wealth Fund. He said that the fund which had 1 billion dollars was left with only 300 million dollars at the expiration of the past administration. The governor said the truth about disappearances of money from NNPC, its subsidiaries and other Federal Government accounts would be made public after the fresh audit ordered by the council.\r\n<br>\r\nSource: <a href=&#8220;http://www.vanguardngr.com/2015/09/edo-can-feed-nigeria-with-rice-oshiomhole/&#8221;>Vanguard NGR</a>', 'Edo', 1442814962, '127.0.0.1', 0, 0, '2015-09-21 05:56:02', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `nowayo_news_view`
--
CREATE TABLE IF NOT EXISTS `nowayo_news_view` (
`news_id` int(11)
,`news_active` smallint(8)
,`news_title` varchar(255)
,`news_title_url` varchar(255)
,`news_content` text
,`category` varchar(11)
,`news_added` int(50)
,`upload_id` int(11)
,`news_user_fk` int(11) unsigned
,`link` text
,`type` varchar(100)
,`server_created` int(50)
);
-- --------------------------------------------------------

--
-- Table structure for table `nowayo_state`
--

CREATE TABLE IF NOT EXISTS `nowayo_state` (
  `state_id` tinyint(8) NOT NULL,
  `state_name` varchar(20) NOT NULL,
  `state_logo` varchar(50) DEFAULT NULL,
  `state_slogan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nowayo_state`
--

INSERT INTO `nowayo_state` (`state_id`, `state_name`, `state_logo`, `state_slogan`) VALUES
(1, 'Abia', 'abia.jpg', 'God''s Own State'),
(2, 'Adamawa', 'adamawa.jpg', 'Land of Beauty'),
(3, 'Akwa-Ibom', 'akwa.jpg', 'Land of Promise'),
(4, 'Anambra', 'anambra.jpg', 'Light of the Nation'),
(5, 'Bauchi', 'bauchi.jpg', 'Pearl of Tourism'),
(6, 'Bayelsa', 'bayelsa.jpg', 'Glory of all Lands'),
(7, 'Benue', 'benue.jpg', 'Food Basket of the Nation'),
(8, 'Borno', 'borno.jpg', 'Home of Peace'),
(9, 'Cross-Rivers', 'cross.jpg', 'The People''s Paradise'),
(10, 'Delta', 'delta.jpg', 'The Finger of God (formerly The Big Heart)'),
(11, 'Ebonyi', 'ebonyi.jpg', 'Salt of the Nation'),
(12, 'Edo', 'edo.jpg', 'Heartbeat of Nigeria'),
(13, 'Ekiti', 'ekiti.jpg', 'Fountain of Knowledge'),
(14, 'Enugu', 'enugu.jpg', 'Coal City State (Jewel of the East)'),
(15, 'FCT', 'fct.jpg', 'Centre of Unity'),
(16, 'Gombe', 'gombe.jpg', 'Jewel in the Savannah'),
(17, 'Imo', 'imo.jpg', 'Eastern Heartland (formerly Land of Hope)'),
(18, 'Jigawa', 'jigawa.jpg', 'The New World'),
(19, 'Kaduna', 'kaduna.jpg', 'Centre of Education (formerly Liberal State)'),
(20, 'Kano', 'kano.jpg', 'Centre of Commerce'),
(21, 'Kastina', 'kastina.jpg', 'Home of Hospitality'),
(22, 'Kebbi', 'kebbi.jpg', 'Land of Equity'),
(23, 'Kogi', 'kogi.jpg', 'The Confluence State'),
(24, 'Kwara', 'kwara.jpg', 'State of Harmony'),
(25, 'Lagos', 'lagos.jpg', 'Centre of Excellence'),
(26, 'Nasarawa', 'nasarawa.jpg', 'Home of Solid Minerals'),
(27, 'Niger', 'niger.jpg', 'The Power State'),
(28, 'Ogun', 'ogun.jpg', 'Gateway State'),
(29, 'Ondo', 'ondo.jpg', 'Sunshine State'),
(30, 'Osun', 'osun.jpg', 'Land of Virtue '),
(31, 'Oyo', 'oyo.jpg', 'Pace Setter State'),
(32, 'Plateau', 'plateau.jpg', 'Home of Peace and Tourism'),
(33, 'Rivers', 'rivers.jpg', 'Treasure Base of the Nation'),
(34, 'Sokoto', 'sokoto.jpg', 'Seat of the Caliphate'),
(35, 'Taraba', 'taraba.jpg', 'Nature''s Gift to the Nation'),
(36, 'Yobe', 'yobe.jpg', 'Pride of the Sahel'),
(37, 'Zamfara', 'zamfara.jpg', 'Farming is Our Pride');

-- --------------------------------------------------------

--
-- Table structure for table `nowayo_uploads`
--

CREATE TABLE IF NOT EXISTS `nowayo_uploads` (
`upload_id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `link` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `user_id` int(8) NOT NULL,
  `server_created` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nowayo_uploads`
--

INSERT INTO `nowayo_uploads` (`upload_id`, `description`, `link`, `type`, `user_id`, `server_created`) VALUES
(30, 'My Icon Images #GD :)', 'cam-1444579157design-freebies-free-business-icons.jpg', 'cam-tales', 3, 1444579158),
(31, '                                ', 'cam-14445797021975565.jpg', 'cam-tales', 3, 1444579702),
(32, 'My lappy', 'cam-1444581344laptops44.jpg', 'cam-tales', 3, 1444581344),
(33, 'at a summit', 'cam-14445985107793727320_1c25ed2f55_o.jpg', 'cam-tales', 3, 1444598510),
(34, '                            ', 'cam-14445985420022-609-39-003400_90g_weiss_1.png', 'cam-tales', 3, 1444598542),
(35, '                            ', 'cam-1444599633EndTimes.jpg', 'cam-tales', 3, 1444599633),
(39, 'Enjoy your view.. no pour saliva oo\r\n', 'cam-1444602491Driedfish(1).JPG', 'cam-tales', 4, 1444602491);

-- --------------------------------------------------------

--
-- Stand-in structure for view `nowayo_uploads_view`
--
CREATE TABLE IF NOT EXISTS `nowayo_uploads_view` (
`upload_id` int(11)
,`link` text
,`type` varchar(100)
,`user_id` int(8)
,`server_created` int(50)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `nowayo_users_view`
--
CREATE TABLE IF NOT EXISTS `nowayo_users_view` (
`id` int(11) unsigned
,`fullname` varchar(255)
,`email` varchar(100)
,`pass` varchar(255)
,`name` varchar(100)
,`residence_id` int(11)
,`country_id` int(11)
,`phone` varchar(15)
,`gender_id` int(11)
,`picture_id` int(11)
,`banned` tinyint(1)
,`last_login` datetime
,`last_activity` datetime
,`last_login_attempt` datetime
,`forgot_exp` text
,`remember_time` datetime
,`remember_exp` text
,`verification_code` text
,`totp_secret` varchar(16)
,`ip_address` text
,`login_attempts` int(11)
,`is_suspended` tinyint(1)
,`is_deleted` tinyint(1)
,`group_id` int(11)
);
-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `value` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `description`) VALUES
(1, 'email', 'admin@nowayo.com', 'Organization contact email. This is the email address at which message from website visitors will be sent to.'),
(2, 'help_lines', '+2348012345678, +2347087654321', 'Organisation contact lines. Phone number(s) that will be publicly displayed on website for visitors to call. NOTE: Multiple numbers should be separated with commas'),
(3, 'hash_algo_cost', '10', 'Highest cost this server can afford without slowing down when computing hash algorithm'),
(5, 'max_hash_time', '250', 'Minimum amount of time in milliseconds that it should take to calculate the (password) hashes. Field hash_algo_cost should be recalculated if this value changes.');

-- --------------------------------------------------------

--
-- Structure for view `nowayo_news_view`
--
DROP TABLE IF EXISTS `nowayo_news_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nowayo_news_view` AS select `nowayo_news`.`news_id` AS `news_id`,`nowayo_news`.`news_active` AS `news_active`,`nowayo_news`.`news_title` AS `news_title`,`nowayo_news`.`news_title_url` AS `news_title_url`,`nowayo_news`.`news_content` AS `news_content`,`nowayo_news`.`category` AS `category`,`nowayo_news`.`news_added` AS `news_added`,`nowayo_uploads`.`upload_id` AS `upload_id`,`nowayo_news`.`news_user_fk` AS `news_user_fk`,`nowayo_uploads`.`link` AS `link`,`nowayo_uploads`.`type` AS `type`,`nowayo_uploads`.`server_created` AS `server_created` from (`nowayo_news` join `nowayo_uploads`) where (`nowayo_news`.`news_added` = `nowayo_uploads`.`server_created`) group by `nowayo_news`.`news_id`;

-- --------------------------------------------------------

--
-- Structure for view `nowayo_uploads_view`
--
DROP TABLE IF EXISTS `nowayo_uploads_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nowayo_uploads_view` AS select `nowayo_uploads`.`upload_id` AS `upload_id`,`nowayo_uploads`.`link` AS `link`,`nowayo_uploads`.`type` AS `type`,`nowayo_uploads`.`user_id` AS `user_id`,`nowayo_uploads`.`server_created` AS `server_created` from `nowayo_uploads` where (`nowayo_uploads`.`type` = 'cam-tales') group by `nowayo_uploads`.`user_id`;

-- --------------------------------------------------------

--
-- Structure for view `nowayo_users_view`
--
DROP TABLE IF EXISTS `nowayo_users_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nowayo_users_view` AS select `aauth_users`.`id` AS `id`,`aauth_users`.`fullname` AS `fullname`,`aauth_users`.`email` AS `email`,`aauth_users`.`pass` AS `pass`,`aauth_users`.`name` AS `name`,`aauth_users`.`residence_id` AS `residence_id`,`aauth_users`.`country_id` AS `country_id`,`aauth_users`.`phone` AS `phone`,`aauth_users`.`gender_id` AS `gender_id`,`aauth_users`.`picture_id` AS `picture_id`,`aauth_users`.`banned` AS `banned`,`aauth_users`.`last_login` AS `last_login`,`aauth_users`.`last_activity` AS `last_activity`,`aauth_users`.`last_login_attempt` AS `last_login_attempt`,`aauth_users`.`forgot_exp` AS `forgot_exp`,`aauth_users`.`remember_time` AS `remember_time`,`aauth_users`.`remember_exp` AS `remember_exp`,`aauth_users`.`verification_code` AS `verification_code`,`aauth_users`.`totp_secret` AS `totp_secret`,`aauth_users`.`ip_address` AS `ip_address`,`aauth_users`.`login_attempts` AS `login_attempts`,`aauth_users`.`is_suspended` AS `is_suspended`,`aauth_users`.`is_deleted` AS `is_deleted`,`aauth_users`.`group_id` AS `group_id` from `aauth_users` order by `aauth_users`.`id`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aauth_groups`
--
ALTER TABLE `aauth_groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_perms`
--
ALTER TABLE `aauth_perms`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_perm_to_group`
--
ALTER TABLE `aauth_perm_to_group`
 ADD PRIMARY KEY (`perm_id`,`group_id`), ADD KEY `fk_aauth_perm_to_group_aauth_groups1_idx` (`group_id`);

--
-- Indexes for table `aauth_perm_to_user`
--
ALTER TABLE `aauth_perm_to_user`
 ADD PRIMARY KEY (`perm_id`,`user_id`), ADD KEY `fk_aauth_perm_to_user_aauth_users1_idx` (`user_id`);

--
-- Indexes for table `aauth_pms`
--
ALTER TABLE `aauth_pms`
 ADD KEY `full_index` (`sender_id`,`receiver_id`,`read`), ADD KEY `fk_aauth_pms_aauth_users2_idx` (`receiver_id`);

--
-- Indexes for table `aauth_system_variables`
--
ALTER TABLE `aauth_system_variables`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_users`
--
ALTER TABLE `aauth_users`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_aauth_users_nowayo_gender_idx` (`gender_id`), ADD KEY `fk_aauth_users_nowayo_state1_idx` (`residence_id`), ADD KEY `fk_aauth_users_aauth_groups1_idx` (`group_id`);

--
-- Indexes for table `aauth_user_to_group`
--
ALTER TABLE `aauth_user_to_group`
 ADD PRIMARY KEY (`user_id`,`group_id`);

--
-- Indexes for table `aauth_user_variables`
--
ALTER TABLE `aauth_user_variables`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id_index` (`user_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `error_log`
--
ALTER TABLE `error_log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `error_reports`
--
ALTER TABLE `error_reports`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nowayo_contest`
--
ALTER TABLE `nowayo_contest`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nowayo_gender`
--
ALTER TABLE `nowayo_gender`
 ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `nowayo_news`
--
ALTER TABLE `nowayo_news`
 ADD PRIMARY KEY (`news_id`), ADD KEY `fk_nowayo_news_nowayo_state1_idx` (`category`), ADD KEY `fk_nowayo_news_aauth_users1_idx` (`news_user_fk`);

--
-- Indexes for table `nowayo_state`
--
ALTER TABLE `nowayo_state`
 ADD PRIMARY KEY (`state_id`), ADD UNIQUE KEY `state_id` (`state_id`);

--
-- Indexes for table `nowayo_uploads`
--
ALTER TABLE `nowayo_uploads`
 ADD PRIMARY KEY (`upload_id`), ADD KEY `fk_nowayo_uploads_aauth_users1_idx` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aauth_groups`
--
ALTER TABLE `aauth_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `aauth_perms`
--
ALTER TABLE `aauth_perms`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aauth_system_variables`
--
ALTER TABLE `aauth_system_variables`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aauth_users`
--
ALTER TABLE `aauth_users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `aauth_user_variables`
--
ALTER TABLE `aauth_user_variables`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `error_log`
--
ALTER TABLE `error_log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `error_reports`
--
ALTER TABLE `error_reports`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nowayo_gender`
--
ALTER TABLE `nowayo_gender`
MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nowayo_news`
--
ALTER TABLE `nowayo_news`
MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nowayo_uploads`
--
ALTER TABLE `nowayo_uploads`
MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `aauth_perm_to_group`
--
ALTER TABLE `aauth_perm_to_group`
ADD CONSTRAINT `fk_aauth_perm_to_group_aauth_groups1` FOREIGN KEY (`group_id`) REFERENCES `aauth_groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_aauth_perm_to_group_aauth_perms1` FOREIGN KEY (`perm_id`) REFERENCES `aauth_perms` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `aauth_perm_to_user`
--
ALTER TABLE `aauth_perm_to_user`
ADD CONSTRAINT `fk_aauth_perm_to_user_aauth_perms1` FOREIGN KEY (`perm_id`) REFERENCES `aauth_perms` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_aauth_perm_to_user_aauth_users1` FOREIGN KEY (`user_id`) REFERENCES `aauth_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `aauth_pms`
--
ALTER TABLE `aauth_pms`
ADD CONSTRAINT `fk_aauth_pms_aauth_users1` FOREIGN KEY (`sender_id`) REFERENCES `aauth_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_aauth_pms_aauth_users2` FOREIGN KEY (`receiver_id`) REFERENCES `aauth_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
