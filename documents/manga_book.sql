-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2017 at 07:05 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lumen-web-api`
--

-- --------------------------------------------------------

--
-- Table structure for table `manga_book`
--

CREATE TABLE `manga_book` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `authorId` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publisherId` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `statusId` int(10) UNSIGNED DEFAULT NULL,
  `totalView` int(10) UNSIGNED DEFAULT NULL,
  `coverImage` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manga_book`
--

INSERT INTO `manga_book` (`id`, `authorId`, `publisherId`, `statusId`, `totalView`, `coverImage`, `summary`, `created_at`, `updated_at`) VALUES
('dac54eed-b293-11e7-a73c-9cb6d0606bec', '1dfb1c9d-b293-11e7-a73c-9cb6d0606bec', 'bce51f79-b292-11e7-a73c-9cb6d0606bec', 1, 346, 'cover/one-piece.jpg', 'One Piece follows the adventurous and funny story of Monkey D. Luffy. As a boy, Luffy has always wanted to be the Pirate King. His body obtained the properties of rubber after eating a Devil Fruit. Together with a diverse crew of wannabe pirates, Luffy sets out on the ocean in an attempt to find the world’s ultimate treasure, One Piece.\r\n\r\nWhen talking about the most successful manga and anime series of all time, One Piece will always enter the conversation. Just the mere fact of it running for almost decades goes to show how loved it is by millions of fans worldwide. What’s interesting is that there are still plenty of folks who are eager to get started on their One Piece adventure. It doesn’t matter if they have to read countless manga chapters or watch hundreds of anime episodes. The undeniable lure of One Piece continues to fascinate fans around the world.\r\n\r\nThe series boasts of some jaw-dropping numbers. The manga consists of over 800 chapters while the anime series has more than 700 episodes. And there are no signs of slowing down. One Piece has even made it to the Guinness Book of World Records. The manga has 320 million copies in print worldwide as of June 2015.\r\n\r\nIt’s never too late to join Luffy and his crew of amazing pirates. You can choose to jump straight to the anime series, but many hardcore fans recommend that starters begin with the manga. There are plenty of places where you can read One Piece manga online. Usually, it all boils down to personal preference. You can check out community forums and see a list of the most suggested manga websites. The official version from Viz Media is a good place to start.\r\n\r\nOne Piece Manga transform to Anime - Marine Ford Saga\r\n\r\n\r\nOne huge determining factor of what manga website to use is how fast it is in releasing new chapters. Most websites are able to upload a new chapter after a day or two from being released. But there are some out there which can release on the same day. Thousands of fans flock to these sites in order to get the first glimpse of the new chapter. After all, you want to be the first in action and avoid getting spoiled in community forums or on social media.\r\n\r\nIt’s time to begin your own adventure and look for the best place to read One Piece manga online. It shouldn’t be too difficult to find several manga websites. Just be sure to try multiple sites to see their differences so you can come up with an informed decision.\r\n\r\nIf you are a fan of One Piece, you know that new chapters of this pirate tale are coming out soon. Not every manga website can offer these chapters license-free. That means you may hit a snag when you go to read the newest chapter.\r\n\r\nEven if you use the same One Piece manga fan website as before to read chapters you can sometimes discover that you are unable to view the whole story. Make sure to check the website''s terms and agreements.\r\n\r\nIt is probably more boring to read terms and conditions than One Piece manga, but your time will be well spent. You might find that the website can no longer display licensed content for free. In this instance you may need to apply for a paid account.\r\n\r\nIt helps to pay for an account so that you get to read the content you crave while the creator''s rights are protected. Besides this, if you sign up for an account, you usually get a choice to read online or on a smart phone or tablet using the app that the website offers.\r\n\r\nAlways find legitimate websites to read your favorite manga. You will get access to everything with no disappointments. In addition, you have options to read the chapters from a computer or from an app that you download. This lets you have the convenience of reading the story while on a train, in a car, on a plane or wherever you are when the mood to manga hits.\r\n\r\nIf you want to try a chapter before you sign up for an account at a website that licenses the work, you could take a peek over at a site that is run by a fan. Fans like you are often happy to post chapters which they have translated.\r\n\r\nOther attractive Manga : \r\n+ Detective Conan Manga\r\n+ Girls of the Wilds Manga', '2017-10-16 17:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manga_book`
--
ALTER TABLE `manga_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manga_book_status_idx` (`statusId`),
  ADD KEY `manga_book_author_idx` (`authorId`),
  ADD KEY `manga_book_publisher_idx` (`publisherId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `manga_book`
--
ALTER TABLE `manga_book`
  ADD CONSTRAINT `manga_book_author_idx` FOREIGN KEY (`authorId`) REFERENCES `manga_author` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `manga_book_publisher_idx` FOREIGN KEY (`publisherId`) REFERENCES `manga_publisher` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `manga_book_status_idx` FOREIGN KEY (`statusId`) REFERENCES `manga_book_status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
