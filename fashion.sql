-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 02:56 PM
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
('https://images-na.ssl-images-amazon.com/images/I/81zLsg0gtpL._UL1500_.jpg', 'Tops', 'brunch,high_tea_party', 'Racer Back,Round Neck', 'Black', 'Just a top', 145, 'https://www.amazon.in/Jockey-Womens-Cotton-Racerback-Tank/dp/B014CLL42U/ref=sr_1_4?pf_rd_i=1953602031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=d15cc655-3e61-4963-9ab0-ff31145f2b99&pf_rd_r=N0HS5ME302DM36SKSDWP&pf_rd_s=merchandised-search-6&pf_rd_t=101&qid=1553974895&s=apparel&sr=1-4', '', ''),
('https://images-na.ssl-images-amazon.com/images/I/81VkRfni1ML._UL1500_.jpg', 'Tops', 'corporate_parties,brunch,high_tea_party', 'Cap Sleeves,Round Neck', 'Navy,Prussian', 'Another top', 269, 'https://www.amazon.in/OOMPH-Womens-Crepe-Tank-Top/dp/B07HGBFSC7/ref=sr_1_2?pf_rd_i=1953602031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=d15cc655-3e61-4963-9ab0-ff31145f2b99&pf_rd_r=N0HS5ME302DM36SKSDWP&pf_rd_s=merchandised-search-6&pf_rd_t=101&qid=1553975876&refinements=p_n_feature_three_browse-bin%3A3765387031&rnid=1974917031&s=apparel&sr=1-2\r\n', '', ''),
('https://images-na.ssl-images-amazon.com/images/I/61YVxtn8WDL._UL1500_.jpg', 'Trouser', 'brunch,work_wear,friday_dressing', 'pallazo,wide leg', 'Black,Crimson,Maroon', 'A Pallazo pant', 329, 'https://www.amazon.in/Rooliums-Womens-Cotton-Palazzo-Pack/dp/B071DGPHLV/ref=sr_1_4?pf_rd_i=1953602031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=d15cc655-3e61-4963-9ab0-ff31145f2b99&pf_rd_r=N0HS5ME302DM36SKSDWP&pf_rd_s=merchandised-search-6&pf_rd_t=101&qid=1553976185&refinements=p_n_feature_thre', '', ''),
('https://images-na.ssl-images-amazon.com/images/I/71CE6xqLGKL._UL1500_.jpg', 'Trouser', 'brunch,friday_dressing,night_out', 'Skinny', 'Ultramarine,Prussian', 'Skinny jean', 752, 'https://www.amazon.in/VERO-MODA-Womens-Skinny-Pants/dp/B071LDS756/ref=sr_1_7?pf_rd_i=1953602031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=d15cc655-3e61-4963-9ab0-ff31145f2b99&pf_rd_r=N0HS5ME302DM36SKSDWP&pf_rd_s=merchandised-search-6&pf_rd_t=101&qid=1553976485&refinements=p_n_feature_three_browse-bin%3A3765387031%2Cp_n_style_browse-bin%3A1975054031&rnid=1975040031&s=apparel&sr=1-7\r\n', '', ''),
('https://images-na.ssl-images-amazon.com/images/I/71jzc5M5FyL._UL1500_.jpg', 'Skirt', 'corporate_parties,high_tea_party', 'Flared,A Line', 'Maroon,Crimson,Ruby Red', 'a skirt', 791, 'https://www.amazon.in/Addyvero/dp/B078WRP4QL/ref=sr_1_10?pf_rd_i=1953602031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=d15cc655-3e61-4963-9ab0-ff31145f2b99&pf_rd_r=N0HS5ME302DM36SKSDWP&pf_rd_s=merchandised-search-6&pf_rd_t=101&qid=1553976907&refinements=p_n_feature_three_browse-bin%3A3765387031%2Cp_n_style_browse-bin%3A1975054031&rnid=11400137031&s=apparel&sr=1-10', '', ''),
('https://images-na.ssl-images-amazon.com/images/I/81elLgvQGKL._UL1500_.jpg', 'Dresses', 'night_out,corporate_parties', 'Mini', 'Black', 'A dress like that', 1209, 'https://www.amazon.in/Miss-Chase-Womens-Black-Skater/dp/B07KSMJWRM/ref=sr_1_3?pf_rd_i=1953602031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=d15cc655-3e61-4963-9ab0-ff31145f2b99&pf_rd_r=N0HS5ME302DM36SKSDWP&pf_rd_s=merchandised-search-6&pf_rd_t=101&qid=1553977182&refinements=p_n_feature_three_browse-bin%3A3765387031%2Cp_n_style_browse-bin%3A1975054031%2Cp_n_feature_six_browse-bin%3A1974766031&rnid=1974765031&s=apparel&sr=1-3', '', ''),
('https://images-na.ssl-images-amazon.com/images/I/71kXsCKlrWL._UL1500_.jpg', 'Dresses', 'corporate_parties,high_tea_party,night_out', 'Mini,A Line', 'Navy,Prussian', 'another dress', 819, 'https://www.amazon.in/Miss-Chase-Womens-Tie-Up-Shift/dp/B07GFMKH5V/ref=sr_1_21?pf_rd_i=1953602031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=d15cc655-3e61-4963-9ab0-ff31145f2b99&pf_rd_r=N0HS5ME302DM36SKSDWP&pf_rd_s=merchandised-search-6&pf_rd_t=101&qid=1553977182&refinements=p_n_feature_three_browse-bin%3A3765387031%2Cp_n_style_browse-bin%3A1975054031%2Cp_n_feature_six_browse-bin%3A1974766031&rnid=1974765031&s=apparel&sr=1-21', '', '');

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
('USR5c989a705800c', 'vinodhan vijayamoorthy', 'vinodhan.thunderbolt@gmail.com', '12345', 8056012353, 10, 'Rectangle', 'fair', '160'),
('USR5ca204521f72f', 'Pooja', 'pooja.anandan0294@gmail.com', 'poochi', 7401773079, 11, 'Rectangle', 'fair', '165');

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
