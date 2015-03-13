-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2015 at 05:58 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `adult_training`
--

CREATE TABLE IF NOT EXISTS `adult_training` (
  `id` int(11) NOT NULL,
  `youth_protection` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adult_training`
--

INSERT INTO `adult_training` (`id`, `youth_protection`) VALUES
(1, '2015-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

CREATE TABLE IF NOT EXISTS `emergency_contact` (
`id` int(11) NOT NULL,
  `lastname1` text,
  `firstname1` text,
  `phone1` text,
  `lastname2` text,
  `firstname2` text,
  `phone2` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_contact`
--

INSERT INTO `emergency_contact` (`id`, `lastname1`, `firstname1`, `phone1`, `lastname2`, `firstname2`, `phone2`) VALUES
(1, 'Scoutee', 'Mom', '5703839433', 'Scoutee', 'Dad', '5703939322');

-- --------------------------------------------------------

--
-- Table structure for table `leaders`
--

CREATE TABLE IF NOT EXISTS `leaders` (
`id` int(11) NOT NULL,
  `lastname` text,
  `firstname` text,
  `email` text,
  `address` text,
  `city` text,
  `state` text,
  `zip` int(5) DEFAULT NULL,
  `home_phone` text,
  `cell_phone` text,
  `position` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaders`
--

INSERT INTO `leaders` (`id`, `lastname`, `firstname`, `email`, `address`, `city`, `state`, `zip`, `home_phone`, `cell_phone`, `position`) VALUES
(1, 'Marcin', 'Frank', 'scoutmaster@troop322dc.com', '811 Mulberry Street', 'Scranton', 'PA', 18510, '5703427732', '5708773509', 'Scoutmaster');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`member_id` int(11) unsigned NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `login` varchar(100) NOT NULL DEFAULT '',
  `passwd` varchar(32) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `login`, `passwd`) VALUES
(1, 'sal', 'zaydon', 'szayd', '269b8432bdfbcb8d4748b17f504933a5'),
(2, 'sal', 'z', 'szaydon', 'df0349ce110b69f03b4def8012ae4970'),
(3, 'Test', 'User', 'test', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Table structure for table `merit_badges`
--

CREATE TABLE IF NOT EXISTS `merit_badges` (
  `scout_id` int(11) NOT NULL,
  `american_business` date DEFAULT NULL,
  `american_cultures` date DEFAULT NULL,
  `american_heritage` date DEFAULT NULL,
  `american_labor` date DEFAULT NULL,
  `animal_science` date DEFAULT NULL,
  `animation` date DEFAULT NULL,
  `archaeology` date DEFAULT NULL,
  `archery` date DEFAULT NULL,
  `architecture` date DEFAULT NULL,
  `art` date DEFAULT NULL,
  `astronomy` date DEFAULT NULL,
  `athletics` date DEFAULT NULL,
  `auto_maintence` date DEFAULT NULL,
  `aviation` date DEFAULT NULL,
  `backpacking` date DEFAULT NULL,
  `basketry` date DEFAULT NULL,
  `bird_study` date DEFAULT NULL,
  `bugling` date DEFAULT NULL,
  `camping` date DEFAULT NULL,
  `canoeing` date DEFAULT NULL,
  `chemistry` date DEFAULT NULL,
  `chess` date DEFAULT NULL,
  `cit_commun` date DEFAULT NULL,
  `cit_nation` date DEFAULT NULL,
  `cit_world` date DEFAULT NULL,
  `climbing` date DEFAULT NULL,
  `coin_collecting` date DEFAULT NULL,
  `collections` date DEFAULT NULL,
  `communications` date DEFAULT NULL,
  `composite_materials` date DEFAULT NULL,
  `cooking` date DEFAULT NULL,
  `crime_prevention` date DEFAULT NULL,
  `cycling` date DEFAULT NULL,
  `dentistry` date DEFAULT NULL,
  `digital_tech` date DEFAULT NULL,
  `disabilities_aware` date DEFAULT NULL,
  `dog_care` date DEFAULT NULL,
  `drafting` date DEFAULT NULL,
  `electricity` date DEFAULT NULL,
  `electronics` date DEFAULT NULL,
  `emergency_prep` date DEFAULT NULL,
  `energy` date DEFAULT NULL,
  `engineering` date DEFAULT NULL,
  `entrepreneurship` date DEFAULT NULL,
  `envi_sci` date DEFAULT NULL,
  `family_life` date DEFAULT NULL,
  `farm_mechanics` date DEFAULT NULL,
  `fingerprinting` date DEFAULT NULL,
  `fire_safety` date DEFAULT NULL,
  `first_aid` date DEFAULT NULL,
  `fish_and_wildlife` date DEFAULT NULL,
  `fishing` date DEFAULT NULL,
  `forestry` date DEFAULT NULL,
  `game_design` date DEFAULT NULL,
  `gardening` date DEFAULT NULL,
  `genealogy` date DEFAULT NULL,
  `geocaching` date DEFAULT NULL,
  `geology` date DEFAULT NULL,
  `golf` date DEFAULT NULL,
  `graphic_arts` date DEFAULT NULL,
  `hiking` date DEFAULT NULL,
  `home_repairs` date DEFAULT NULL,
  `horsemanship` date DEFAULT NULL,
  `indian_lore` date DEFAULT NULL,
  `insect_study` date DEFAULT NULL,
  `inventing` date DEFAULT NULL,
  `journalism` date DEFAULT NULL,
  `kayaking` date DEFAULT NULL,
  `landscape_arch` date DEFAULT NULL,
  `law` date DEFAULT NULL,
  `leatherwork` date DEFAULT NULL,
  `lifesaving` date DEFAULT NULL,
  `mammal_study` date DEFAULT NULL,
  `medicine` date DEFAULT NULL,
  `metalwork` date DEFAULT NULL,
  `mining_in_society` date DEFAULT NULL,
  `model_design` date DEFAULT NULL,
  `motorboating` date DEFAULT NULL,
  `moviemaking` date DEFAULT NULL,
  `music` date DEFAULT NULL,
  `nature` date DEFAULT NULL,
  `nuclear_science` date DEFAULT NULL,
  `oceanography` date DEFAULT NULL,
  `orienteering` date DEFAULT NULL,
  `painting` date DEFAULT NULL,
  `personal_fitness` date DEFAULT NULL,
  `personal_management` date DEFAULT NULL,
  `pets` date DEFAULT NULL,
  `photography` date DEFAULT NULL,
  `pioneering` date DEFAULT NULL,
  `plant_science` date DEFAULT NULL,
  `plumbing` date DEFAULT NULL,
  `pottery` date DEFAULT NULL,
  `programming` date DEFAULT NULL,
  `public_health` date DEFAULT NULL,
  `public_speaking` date DEFAULT NULL,
  `pulp_and_paper` date DEFAULT NULL,
  `radio` date DEFAULT NULL,
  `railroading` date DEFAULT NULL,
  `reading` date DEFAULT NULL,
  `reptile_amphibian_study` date DEFAULT NULL,
  `rifle_shooting` date DEFAULT NULL,
  `robotics` date DEFAULT NULL,
  `rowing` date DEFAULT NULL,
  `safety` date DEFAULT NULL,
  `salesmanship` date DEFAULT NULL,
  `scholarship` date DEFAULT NULL,
  `scouting_heritage` date DEFAULT NULL,
  `scuba_diving` date DEFAULT NULL,
  `sculpture` date DEFAULT NULL,
  `seach_n_rescue` date DEFAULT NULL,
  `shotgun_shooting` date DEFAULT NULL,
  `signs_signals_codes` date DEFAULT NULL,
  `skating` date DEFAULT NULL,
  `small-boat_sailing` date DEFAULT NULL,
  `snow_sports` date DEFAULT NULL,
  `soil_and_water_cons` date DEFAULT NULL,
  `space_ex` date DEFAULT NULL,
  `sports` date DEFAULT NULL,
  `stamp_collecting` date DEFAULT NULL,
  `surveying` date DEFAULT NULL,
  `sustainability` date DEFAULT NULL,
  `swimming` date DEFAULT NULL,
  `textile` date DEFAULT NULL,
  `theater` date DEFAULT NULL,
  `traffic_safety` date DEFAULT NULL,
  `truck_trans` date DEFAULT NULL,
  `vet_medicine` date DEFAULT NULL,
  `water_sports` date DEFAULT NULL,
  `weather` date DEFAULT NULL,
  `welding` date DEFAULT NULL,
  `whitewater` date DEFAULT NULL,
  `wilderness_survival` date DEFAULT NULL,
  `wood_carving` date DEFAULT NULL,
  `woodwork` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merit_badges`
--

INSERT INTO `merit_badges` (`scout_id`, `american_business`, `american_cultures`, `american_heritage`, `american_labor`, `animal_science`, `animation`, `archaeology`, `archery`, `architecture`, `art`, `astronomy`, `athletics`, `auto_maintence`, `aviation`, `backpacking`, `basketry`, `bird_study`, `bugling`, `camping`, `canoeing`, `chemistry`, `chess`, `cit_commun`, `cit_nation`, `cit_world`, `climbing`, `coin_collecting`, `collections`, `communications`, `composite_materials`, `cooking`, `crime_prevention`, `cycling`, `dentistry`, `digital_tech`, `disabilities_aware`, `dog_care`, `drafting`, `electricity`, `electronics`, `emergency_prep`, `energy`, `engineering`, `entrepreneurship`, `envi_sci`, `family_life`, `farm_mechanics`, `fingerprinting`, `fire_safety`, `first_aid`, `fish_and_wildlife`, `fishing`, `forestry`, `game_design`, `gardening`, `genealogy`, `geocaching`, `geology`, `golf`, `graphic_arts`, `hiking`, `home_repairs`, `horsemanship`, `indian_lore`, `insect_study`, `inventing`, `journalism`, `kayaking`, `landscape_arch`, `law`, `leatherwork`, `lifesaving`, `mammal_study`, `medicine`, `metalwork`, `mining_in_society`, `model_design`, `motorboating`, `moviemaking`, `music`, `nature`, `nuclear_science`, `oceanography`, `orienteering`, `painting`, `personal_fitness`, `personal_management`, `pets`, `photography`, `pioneering`, `plant_science`, `plumbing`, `pottery`, `programming`, `public_health`, `public_speaking`, `pulp_and_paper`, `radio`, `railroading`, `reading`, `reptile_amphibian_study`, `rifle_shooting`, `robotics`, `rowing`, `safety`, `salesmanship`, `scholarship`, `scouting_heritage`, `scuba_diving`, `sculpture`, `seach_n_rescue`, `shotgun_shooting`, `signs_signals_codes`, `skating`, `small-boat_sailing`, `snow_sports`, `soil_and_water_cons`, `space_ex`, `sports`, `stamp_collecting`, `surveying`, `sustainability`, `swimming`, `textile`, `theater`, `traffic_safety`, `truck_trans`, `vet_medicine`, `water_sports`, `weather`, `welding`, `whitewater`, `wilderness_survival`, `wood_carving`, `woodwork`) VALUES
(1, '2010-03-17', NULL, '2010-01-10', NULL, NULL, NULL, NULL, '2009-12-10', NULL, '2009-10-10', NULL, NULL, NULL, NULL, NULL, '2007-04-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE IF NOT EXISTS `parents` (
`id` int(11) NOT NULL,
  `lastname1` text,
  `firstname1` text,
  `relation1` text,
  `homephone1` text,
  `cellphone1` text,
  `email1` text,
  `lastname2` text,
  `firstname2` text,
  `relation2` text,
  `homephone2` text,
  `cellphone2` text,
  `email2` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `lastname1`, `firstname1`, `relation1`, `homephone1`, `cellphone1`, `email1`, `lastname2`, `firstname2`, `relation2`, `homephone2`, `cellphone2`, `email2`) VALUES
(1, 'Scout', 'Mommy', 'Mom', '5703939433', '5708675309', 'eazshopping@aol.com', 'Scout', 'Daddy', 'Dad', '5703839433', '5706775309', 'jjz@aol.com');

-- --------------------------------------------------------

--
-- Table structure for table `patrols`
--

CREATE TABLE IF NOT EXISTS `patrols` (
`id` int(11) NOT NULL,
  `patrol_name` text,
  `member1` text,
  `member2` text,
  `member3` text,
  `member4` text,
  `member5` text,
  `member6` text,
  `member7` text,
  `member8` text,
  `patrol_leader` text,
  `as_patrol_leader` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patrols`
--

INSERT INTO `patrols` (`id`, `patrol_name`, `member1`, `member2`, `member3`, `member4`, `member5`, `member6`, `member7`, `member8`, `patrol_leader`, `as_patrol_leader`) VALUES
(1, 'Penguin Patrol', 'Sal Zaydon', 'Jacob Baron', 'Justin Laskowski', 'Jeff Baron', 'Nick Pahoski', 'Sam Levandoski ', 'Chis Polk', 'CJ Penzone', 'Justin Laskowski', 'Sal Zaydon');

-- --------------------------------------------------------

--
-- Table structure for table `scouts`
--

CREATE TABLE IF NOT EXISTS `scouts` (
`scout_id` int(11) NOT NULL,
  `last_name` text NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text,
  `bsa_id` int(11) DEFAULT NULL,
  `address` text,
  `city` text,
  `state` text,
  `zip` int(5) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `home_phone` text,
  `cell_phone` text,
  `email1` text,
  `email2` text,
  `date_joined` date DEFAULT NULL,
  `leadership_position` text,
  `rank` text,
  `rank_date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scouts`
--

INSERT INTO `scouts` (`scout_id`, `last_name`, `first_name`, `middle_name`, `bsa_id`, `address`, `city`, `state`, `zip`, `dob`, `home_phone`, `cell_phone`, `email1`, `email2`, `date_joined`, `leadership_position`, `rank`, `rank_date`) VALUES
(1, 'Scout', 'Johnny', 'T', 1234567890, '811 Mulberry Street', 'Scranton', 'PA', 18447, '1993-03-17', '5703839433', '5703091105', 'szaydon@gmail.com', 'sal@szaydon.me', '1999-03-16', 'Senior Patrol Leader', 'Eagle', '2011-02-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adult_training`
--
ALTER TABLE `adult_training`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaders`
--
ALTER TABLE `leaders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `merit_badges`
--
ALTER TABLE `merit_badges`
 ADD PRIMARY KEY (`scout_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patrols`
--
ALTER TABLE `patrols`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scouts`
--
ALTER TABLE `scouts`
 ADD PRIMARY KEY (`scout_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `leaders`
--
ALTER TABLE `leaders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `member_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patrols`
--
ALTER TABLE `patrols`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `scouts`
--
ALTER TABLE `scouts`
MODIFY `scout_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
