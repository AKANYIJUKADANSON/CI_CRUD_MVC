-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2025 at 11:43 AM
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
-- Database: `edocss`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `body` text NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `body`, `created_on`) VALUES
(1, 'Breaking News: Major Event in the City', 'breaking-news:-major-event-in-the-city', 'Details of the major event happening in the city...', '2025-02-17'),
(2, 'Tech Update: New Smartphone Released', 'tech-update:-new-smartphone-released', 'The latest smartphone has just been released with amazing features...', '2025-02-17'),
(3, 'Sports Highlights: Football Championship Finals', 'sports-highlights:-football-championship-finals', 'A recap of the exciting football championship finals...', '2025-02-17'),
(4, 'Local News: Community Center Grand Opening', 'local-news:-community-center-grand-opening', 'The new community center is officially open for the public...', '2025-02-17'),
(5, 'Global Affairs: New Policy Changes Announced', 'global-affairs:-new-policy-changes-announced', 'A look at the recent policy changes in the global political landscape...', '2025-02-17'),
(6, 'Weather Update: Storm Alert in the Region', 'weather-update:-storm-alert-in-the-region', 'A storm alert has been issued for the region, take necessary precautions...', '2025-02-17'),
(7, 'Business Insights: Stock Market Surges', 'business-insights:-stock-market-surges', 'Stock markets have seen a significant surge this week...', '2025-02-17'),
(8, 'Health Report: New Breakthrough in Cancer Research', 'health-report:-new-breakthrough-in-cancer-research', 'A groundbreaking development in cancer treatment research has been revealed...', '2025-02-17'),
(9, 'Education News: School Year Begins with New Changes', 'education-news:-school-year-begins-with-new-changes', 'This year’s school semester brings new curriculum changes and updates...', '2025-02-17'),
(10, 'Entertainment: Movie Premiere Set for This Weekend', 'entertainment:-movie-premiere-set-for-this-weekend', 'The highly anticipated movie will premiere this weekend...', '2025-02-17'),
(11, 'Music Release: Artist Drops New Album', 'music-release:-artist-drops-new-album', 'A new album by the famous artist has just been released...', '2025-02-17'),
(12, 'Technology: AI Revolutionizing Industries', 'technology:-ai-revolutionizing-industries', 'Artificial intelligence is transforming various industries at a rapid pace...', '2025-02-17'),
(13, 'Science Discovery: Mars Exploration Unveiled', 'science-discovery:-mars-exploration-unveiled', 'NASA’s new findings on Mars exploration have been unveiled...', '2025-02-17'),
(14, 'Travel News: Top Destinations for 2025', 'travel-news:-top-destinations-for-2025', 'Planning your next vacation? Here are the top travel destinations for 2025...', '2025-02-17'),
(15, 'Food Trends: New Cuisine Takes Over', 'food-trends:-new-cuisine-takes-over', 'A new food trend has taken over the culinary world, and it’s here to stay...', '2025-02-17'),
(16, 'Lifestyle: How to Manage Stress Effectively', 'lifestyle:-how-to-manage-stress-effectively', 'Tips and tricks to help manage stress in your daily life...', '2025-02-17'),
(17, 'Fashion Trends: Latest Styles for 2025', 'fashion-trends:-latest-styles-for-2025', 'The most popular fashion styles for the upcoming year have been revealed...', '2025-02-17'),
(18, 'Politics Update: Election Campaign Kicks Off', 'politics-update:-election-campaign-kicks-off', 'The presidential election campaign has officially begun, with candidates laying out their plans...', '2025-02-17'),
(19, 'Technology Review: Best Laptops for Remote Work', 'technology-review:-best-laptops-for-remote-work', 'A guide to the best laptops for working remotely in 2025...', '2025-02-17'),
(20, 'World News: United Nations Summit Highlights', 'world-news:-united-nations-summit-highlights', 'Key highlights from this year’s United Nations summit...', '2025-02-17'),
(21, 'Breaking News: World Leaders Gather for Summit', 'breaking-news:-world-leaders-gather-for-summit', 'World leaders are gathering today to discuss global issues...', '2025-02-17'),
(22, 'Sports: Basketball League Finals Preview', 'sports:-basketball-league-finals-preview', 'An exciting preview of the basketball league finals, with top teams facing off...', '2025-02-17'),
(23, 'Tech World: Next-Gen Smart Home Devices', 'tech-world:-next-gen-smart-home-devices', 'The latest smart home gadgets are changing the way we live...', '2025-02-17'),
(24, 'Politics: New Government Policies Announced', 'politics:-new-government-policies-announced', 'The government has announced new policies aimed at improving economic growth...', '2025-02-17'),
(25, 'Travel Guide: Best Winter Vacations', 'travel-guide:-best-winter-vacations', 'Planning a winter vacation? Here are the best destinations...', '2025-02-17'),
(26, 'Health: Exercise Tips for Beginners', 'health:-exercise-tips-for-beginners', 'Here are some easy exercise tips for people new to fitness...', '2025-02-17'),
(27, 'Tech Gadgets: Upcoming VR Headsets', 'tech-gadgets:-upcoming-vr-headsets', 'Virtual reality headsets are evolving fast, and the next generation is nearly here...', '2025-02-17'),
(28, 'Music Industry: Top Artists of 2025', 'music-industry:-top-artists-of-2025', 'A list of the top music artists to watch out for in 2025...', '2025-02-17'),
(29, 'Local Events: Annual Music Festival Coming Soon', 'local-events:-annual-music-festival-coming-soon', 'The annual music festival is coming soon, bringing great performances...', '2025-02-17'),
(30, 'Space Exploration: NASA’s New Mars Mission', 'space-exploration:-nasa’s-new-mars-mission', 'NASA has launched a new mission to explore Mars and its mysteries...', '2025-02-17'),
(31, 'Business Report: New Startups Flourishing', 'business-report:-new-startups-flourishing', 'The startup ecosystem is thriving, with new businesses emerging...', '2025-02-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
