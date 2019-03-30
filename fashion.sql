-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 08:25 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `brunch`
--

CREATE TABLE `brunch` (
  `dress_type` varchar(40) NOT NULL,
  `rectangle` varchar(80) NOT NULL,
  `triangle` varchar(80) NOT NULL,
  `inverted_triangle` varchar(80) NOT NULL,
  `hourglass` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brunch`
--

INSERT INTO `brunch` (`dress_type`, `rectangle`, `triangle`, `inverted_triangle`, `hourglass`) VALUES
('Skirt', 'Pleated,Knee Length', 'A Line,Hip Fitted', 'A Line,Flared', 'A Line,Pleated'),
('Tops', 'Round Neck,Wrap,Cap Sleeves,Racer Back', 'V Neck,Crop,Scoop Neck,Kimono Sleeve,Dolman Sleeve,Crew Neck', 'V Neck,Wrap,Asymmetrical', 'Halter,V Neck,Wrap,Scooped'),
('Trouser', 'Skinny,Boot Cut,Straight', 'Wide leg,Straight', 'Pallazo', 'Straight Leg,Boot Cut'),
('Dresses', 'Belted,A Line,Empire,Mini', 'Wrap,V Neck,Fit,Flare,A Line', 'Wrap,V Neck,A Line,Empire', 'Scooped,V Neck,Wrap');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_parties`
--

CREATE TABLE `corporate_parties` (
  `dress_type` varchar(80) NOT NULL,
  `rectangle` varchar(80) NOT NULL,
  `triangle` varchar(80) NOT NULL,
  `inverted-triangle` varchar(80) NOT NULL,
  `hourglass` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate_parties`
--

INSERT INTO `corporate_parties` (`dress_type`, `rectangle`, `triangle`, `inverted-triangle`, `hourglass`) VALUES
('Skirt', 'Peplum', 'Box,Inverted Box Pleats', 'A Line', 'Peplum'),
('Tops', 'Peplum,V Neck', 'V Neck', 'V Neck', 'Peplum'),
('Trouser', 'Straight,Pallazo', 'Straight,Wide Leg', 'Wide Leg,Pallazo', 'Straight'),
('Dresses', 'Peplum,Belted', 'V Neck,Wrap,Belted', 'V Neck,Wrap', 'Peplum,Belted');

-- --------------------------------------------------------

--
-- Table structure for table `friday_dressing`
--

CREATE TABLE `friday_dressing` (
  `dress_type` varchar(80) NOT NULL,
  `rectangle` varchar(80) NOT NULL,
  `triangle` varchar(80) NOT NULL,
  `inverted-triangle` varchar(80) NOT NULL,
  `hourglass` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friday_dressing`
--

INSERT INTO `friday_dressing` (`dress_type`, `rectangle`, `triangle`, `inverted-triangle`, `hourglass`) VALUES
('Skirt', 'Pencil', 'Inverted Pleat', 'A Line', 'Pencil'),
('Tops', 'Cap Sleeves,Round Neck,Wrap', 'V Neck,Crop,Scoop Neck,Collared', 'V Neck,Wrap', 'V Neck,Wrap,Scooped'),
('Trouser', 'Straight Pant,Jean', 'Wide Leg,Straight', 'Pallazo', 'Straight Leg,Boot Cut');

-- --------------------------------------------------------

--
-- Table structure for table `high_tea_party`
--

CREATE TABLE `high_tea_party` (
  `dress_type` varchar(80) NOT NULL,
  `rectangle` varchar(80) NOT NULL,
  `triangle` varchar(80) NOT NULL,
  `inverted-triangle` varchar(80) NOT NULL,
  `hourglass` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `high_tea_party`
--

INSERT INTO `high_tea_party` (`dress_type`, `rectangle`, `triangle`, `inverted-triangle`, `hourglass`) VALUES
('Skirt', 'Pleated,Knee Length,Mini', 'A Line,Fit,Flare', 'A Line,Flare', 'A Line,Pleated'),
('Tops', 'Halter Neck,Round Neck,Wrap', 'V Neck,Scoop Neck,Boat Neck,Ruffled', 'V Neck,Wrap,Asymmetrical', 'Halter Neck,V Neck,Wrap,Scooped'),
('Trouser', 'Skinny,Boot Cut,Straight,Pallazo', 'Wide Leg,Straight', 'Pallazo', 'Straight Leg,Boot Cut'),
('Dresses', 'Belted,A Line,Empire', 'Empire,Wrap,V Neck,A Line,Fit,Flare', 'Empire,Wrap,V Neck,A Line', 'Scooped,V Neck,Wrap');

-- --------------------------------------------------------

--
-- Table structure for table `night_out`
--

CREATE TABLE `night_out` (
  `dress_type` varchar(80) NOT NULL,
  `rectangle` varchar(80) NOT NULL,
  `triangle` varchar(80) NOT NULL,
  `inverted-triangle` varchar(80) NOT NULL,
  `hourglass` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `night_out`
--

INSERT INTO `night_out` (`dress_type`, `rectangle`, `triangle`, `inverted-triangle`, `hourglass`) VALUES
('Skirt', 'Pleated,Knee Length,Mini', 'A Line,Hip Fitted', 'A Line,Flared', 'A Line,Pleated'),
('Tops', 'Spaghetti Strap,Halter Neck,Racer Back,Round Neck,Wrap', 'V Neck,Crop,Scoop Neck,Boat Neck', 'V Neck,Wrap,Asymmetrical', 'Halter,V Neck,Wrap,Scooped'),
('Trouser', 'Shorts,Skinny,Boot Cut,Straight,Pallazo', 'Wide Leg,Straight', 'Pallazo', 'Straight Leg,Boot Cut'),
('Dresses', 'Belted,A Line,Mini', 'Wrap,V Neck,A Line,Fit,Flare', 'Wrap,V Neck,A Line,Empire', 'Scooped,V Neck,Wrap,Sheath');

-- --------------------------------------------------------

--
-- Table structure for table `skin_tone_fair`
--

CREATE TABLE `skin_tone_fair` (
  `color` varchar(30) NOT NULL,
  `shade` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skin_tone_fair`
--

INSERT INTO `skin_tone_fair` (`color`, `shade`) VALUES
('Black', 'Black'),
('Blue', 'Prussian,Ultramarine,Navy,Turquoise '),
('Red', 'Crimson,Ruby Red,Maroon '),
('Green', 'Sap Green,Seaweed,Forest Green'),
('Purple', 'Lavender,Violet');

-- --------------------------------------------------------

--
-- Table structure for table `skin_tone_tan`
--

CREATE TABLE `skin_tone_tan` (
  `color` varchar(40) NOT NULL,
  `shade` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skin_tone_tan`
--

INSERT INTO `skin_tone_tan` (`color`, `shade`) VALUES
('Brown', 'Burnt Sienna,Cinnamon,Beige '),
('Yellow', 'Orchre,Chrome,Canary'),
('Green', 'Olive,Sage,Fern Green '),
('Orange', 'Terracota,Tangerine,Cantaloupe');

-- --------------------------------------------------------

--
-- Table structure for table `upload_image`
--

CREATE TABLE `upload_image` (
  `img` text NOT NULL,
  `dress_type` varchar(60) NOT NULL,
  `occasion` varchar(50) NOT NULL,
  `style` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `amazon` text NOT NULL,
  `flipkart` varchar(500) NOT NULL,
  `snapdeal` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload_image`
--

INSERT INTO `upload_image` (`img`, `dress_type`, `occasion`, `style`, `color`, `name`, `price`, `amazon`, `flipkart`, `snapdeal`) VALUES
('https://images-na.ssl-images-amazon.com/images/I/61ePP1T6NrL._UL1431_.jpg', 'Tops', '', 'V-neck,sleeve', 'pink', 'VITANS Women Contrast Binding Roll Tab Sleeve Top', 799, 'https://www.amazon.in/VITANS-Women-Contrast-Binding-Sleeve/dp/B07KK2YSS9/ref=sr_1_33?keywords=women+tops+office&qid=1553954537&s=gateway&sr=8-33', '', ''),
('jadvnalc', 'skirt', 'Office Wear', 'Halter Neck,Sleeve,yetho', 'karuppu', 'name', 100000000, 'cadlklvlda', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `waist` int(10) NOT NULL,
  `body_shape` varchar(30) NOT NULL,
  `skin` varchar(30) NOT NULL,
  `height` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mail`, `password`, `phone`, `waist`, `body_shape`, `skin`, `height`) VALUES
('USR5c989a705800c', 'vinodhan vijayamoorthy', 'vinodhan.thunderbolt@gmail.com', '12345', 8056012353, 10, 'Rectangle', 'fair', '160');

-- --------------------------------------------------------

--
-- Table structure for table `work_wear`
--

CREATE TABLE `work_wear` (
  `dress_type` varchar(80) NOT NULL,
  `rectangle` varchar(80) NOT NULL,
  `triangle` varchar(80) NOT NULL,
  `inverted-triangle` varchar(80) NOT NULL,
  `hourglass` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_wear`
--

INSERT INTO `work_wear` (`dress_type`, `rectangle`, `triangle`, `inverted-triangle`, `hourglass`) VALUES
('Skirt', 'Peplum,Pencil', 'Straight,Inverted Pleated', 'A Line,pleat', 'Peplum,Pencil'),
('Tops', 'Peplum,Cap,Sleeve Tops,Collared', 'Collared Shirt', 'Collared Shirt', 'Peplum,Collared Shirt'),
('Dresses', 'Peplum,Cap Sleeve', 'Belted,V Neck', 'Belted,V Neck', 'Peplum,Sheath'),
('Trouser', 'Straight', 'Pallazo', 'Straight', 'Straight'),
('Outer Wear', 'Fitted Blazer', 'Blazer,Short Jacket', 'Tailored Blazer without shoulder pads', 'Clean Cut Blazer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
