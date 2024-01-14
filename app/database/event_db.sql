-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2024 at 10:05 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `audience`
--

CREATE TABLE `audience` (
  `id` int NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `contact` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `event_id` int NOT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0= pending, 1 =Paid',
  `attendance_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1= present',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 = for verification,  1 = confirmed,2= declined',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audience`
--

INSERT INTO `audience` (`id`, `name`, `contact`, `email`, `address`, `event_id`, `payment_status`, `attendance_status`, `status`, `date_created`) VALUES
(2, 'George Wilson', '+18456-5455-55', 'gwilson@sample.com', 'Sample', 1, 1, 0, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int NOT NULL,
  `venue_id` int NOT NULL,
  `event` text COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `schedule` datetime NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Public, 2-Private',
  `audience_capacity` int NOT NULL,
  `payment_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Free,payable',
  `amount` double NOT NULL DEFAULT '0',
  `banner` text COLLATE utf8mb4_general_ci NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `venue_id`, `event`, `description`, `schedule`, `type`, `audience_capacity`, `payment_type`, `amount`, `banner`, `date_created`) VALUES
(1, 1, 'Sample Only', '&lt;p&gt;&lt;/p&gt;&lt;h2 style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;&lt;b style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Sample Header&lt;/b&gt;&lt;/h2&gt;&lt;p style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;&lt;b style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non diam phasellus vestibulum lorem. Vel elit scelerisque mauris pellentesque pulvinar pellentesque. Fames ac turpis egestas integer eget. Nam at lectus urna duis convallis convallis tellus. Turpis tincidunt id aliquet risus. Turpis tincidunt id aliquet risus feugiat in ante metus. Ut porttitor leo a diam sollicitudin tempor id eu nisl. Sit amet tellus cras adipiscing enim eu turpis. Ultricies mi eget mauris pharetra et ultrices neque.&lt;/b&gt;&lt;/p&gt;&lt;h3 style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;&lt;b style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Headere 3&lt;/b&gt;&lt;/h3&gt;&lt;p style=&quot;text-align: center; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Magna etiam tempor orci eu lobortis elementum nibh. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Gravida cum sociis natoque penatibus et magnis. Mi ipsum faucibus vitae aliquet nec ullamcorper sit. Malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit. Tincidunt id aliquet risus feugiat in ante. Elementum facilisis leo vel fringilla est ullamcorper eget. Id semper risus in hendrerit gravida rutrum. Aliquam vestibulum morbi blandit cursus risus at ultrices mi. Elementum pulvinar etiam non quam lacus suspendisse faucibus. Ultrices eros in cursus turpis massa tincidunt dui ut ornare. Pretium vulputate sapien nec sagittis. Lectus sit amet est placerat in egestas erat imperdiet sed. Auctor elit sed vulputate mi. Eget est lorem ipsum dolor sit amet consectetur. Tristique magna sit amet purus gravida quis. In arcu cursus euismod quis viverra nibh cras pulvinar mattis.&lt;/p&gt;&lt;p style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Luctus accumsan tortor posuere ac ut. Fames ac turpis egestas maecenas pharetra convallis posuere morbi. Arcu felis bibendum ut tristique et egestas. Mauris in aliquam sem fringilla ut morbi. Lobortis elementum nibh tellus molestie nunc non blandit massa. Curabitur gravida arcu ac tortor dignissim convallis aenean. Libero enim sed faucibus turpis in eu mi bibendum. Neque egestas congue quisque egestas diam in arcu cursus. Diam phasellus vestibulum lorem sed risus ultricies. Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus a. Volutpat lacus laoreet non curabitur gravida arcu ac. Elementum tempus egestas sed sed risus pretium quam. Diam maecenas ultricies mi eget mauris pharetra et. Venenatis cras sed felis eget velit aliquet sagittis. Arcu dictum varius duis at consectetur lorem donec massa sapien. Ullamcorper velit sed ullamcorper morbi tincidunt ornare.&lt;/p&gt;&lt;p style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Tempus iaculis urna id volutpat lacus laoreet. Auctor neque vitae tempus quam pellentesque nec nam. Eget nunc lobortis mattis aliquam faucibus purus. Amet nisl suscipit adipiscing bibendum est ultricies integer quis. Donec ac odio tempor orci dapibus ultrices in. Varius sit amet mattis vulputate. Ornare massa eget egestas purus. Pellentesque dignissim enim sit amet venenatis. Blandit massa enim nec dui nunc mattis enim ut tellus. Habitant morbi tristique senectus et netus et. Blandit volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque. Facilisis magna etiam tempor orci eu lobortis elementum nibh. Feugiat nibh sed pulvinar proin gravida hendrerit lectus a. Euismod elementum nisi quis eleifend quam. Convallis convallis tellus id interdum velit laoreet id. Pulvinar mattis nunc sed blandit libero volutpat sed cras ornare.&lt;/p&gt;&lt;p style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Neque gravida in fermentum et. Amet nulla facilisi morbi tempus iaculis urna id volutpat. Id diam vel quam elementum pulvinar etiam non quam lacus. Mauris commodo quis imperdiet massa. Pulvinar mattis nunc sed blandit libero volutpat. Suspendisse faucibus interdum posuere lorem. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Blandit cursus risus at ultrices mi tempus imperdiet nulla. Eget velit aliquet sagittis id consectetur purus. Quis lectus nulla at volutpat diam ut venenatis tellus. Nunc mattis enim ut tellus elementum.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '2020-10-20 05:00:00', 1, 500, 2, 500, '1602647100_JSAV-multiscreen_3ddbdd40-38d9-4b64-9cf2-5d0ef356f29c.jpg', '0000-00-00 00:00:00'),
(2, 2, 'Event 2', '&lt;p&gt;Lorem ipsum dolor sit amet, viris eleifend convenire mei te, ei mea probo cotidieque? Pri gloriatur disputationi vituperatoribus ex, dolorum disputationi quo te! Cibo reque postea te his, mea quis oportere ei. Qui ut vide idque minimum, aeterno laoreet consetetur mei in. Mel stet audiam omittantur cu!&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Dictas meliore eos ea, iusto libris volumus mel ut. Sea id exerci ignota expetenda, cum ei nostro eirmod apeirian. Est luptatum liberavisse cu, cu quo stet veniam. Mei causae honestatis ad, esse fugit laudem qui ex, eu duo choro quaestio. Scripta appetere cu vim, agam nulla percipit duo ei.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Per in sanctus instructior. No prompta instructior duo, per no mucius deterruisset, sumo munere delenit vix ut? Mea ut idque lorem assum, eum et idque dissentias. Choro tempor per ex, at duo fuisset maiestatis! Has in voluptaria vituperata, at erat vituperata est, autem prompta appetere in per!&lt;/p&gt;', '2020-10-23 18:00:00', 1, 500, 1, 0, '1602652920_pngtree-purple-hd-business-banner-image_5493.jpg', '0000-00-00 00:00:00'),
(3, 2, 'Sample Private', 'Wedding', '2020-10-28 17:00:00', 2, 300, 1, 0, '1602660960_images4.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `cover_img` text COLLATE utf8mb4_general_ci NOT NULL,
  `about_content` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'Event Management System', 'eventparadice@gmail.com', '+639123456789', '1686196500_meh.jpg', '&lt;p style=&quot;text-align: left; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;text-align: left; background: transparent; position: relative;&quot;&gt;The Event Management System is a simple project that will help an event organizing company or business manage their client event details and market the client event also. This system market also the venue list of the event organizing company&rsquo;s selected possible venue for an event. This event management system allows possible event audiences to register online with the use of the company&rsquo;s website. The audience registration will only serve as a request at first until the system admin or management will reach back to the possible audience to talk or verify the audience registry confirmation for the event and settle the payments if necessary. The system allows also the possible clients to inquire about the client&rsquo;s desired venue in which they possibly place their event. Talking about the management side or admin side of the system, the system has a dynamic list for the venues in which the system users will populate or managed in order to display the venues through their website. The admin or staff will populate the list of events that the company handling along with the details and content or description to display on the website. The event has an option for either the company&rsquo;s clients certain event wants to be published to the website for the possible audience registration or market the event or the company will store only the event details for their reference, For example, the event organizing company&rsquo;s client&rsquo;s event is open for anyone as much as the event audience capacity, the company can help the client&rsquo;s event market online using their website and if the client&rsquo;s event is private or the client has already the list of their audience, the system user can store only the event details for their reference also to populate the event list for the company&rsquo;s report. The system also allows the system users to store the images of the venue and the event banner and other details that may also help the company or client their event or venues.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `ContactNo` varchar(15) NOT NULL,
  `username` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `LastName`, `FirstName`, `ContactNo`, `username`, `email`, `password`, `Created_at`) VALUES
(1, 'Cortez', 'John', '+639876732543', 'john', 'cortezjohn@gmail.com', '$2y$10$hPXn509dFq3X.gSTh3.hEuLJHvLne6MBhQ7ymMgwFT3tRL.IrgoWy', '2023-12-30 18:36:04'),
(3, 'Santos', 'Ava', '+639572048613', 'ava25', 'santosava@gmail.com', '$2y$10$SMDs.eNa3eDLx17K.d2g6e64DrhjC/y0BRqjXOqBcat0jJUpbLZuC', '2023-12-30 18:39:22'),
(4, 'Gutierrez', 'Nicolle', '+639286341210', 'nicolle17', 'nicolle@gmail.com', '$2y$10$7RsJtp2dW76SbwheZQfqFOrO0Tsn470ICELm5gtrsgPdyS6vJ7NX2', '2023-12-30 19:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` text COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` text COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(3, 'John Cortez', 'john2', '$2y$10$qMVbKFoDaZKst5TKyt4U5udodTgL.0n2fGae0.ZsPrDFrgON2.cI6', 'Admin'),
(4, 'Rachell De Guzman', 'rachell78', '$2y$10$Hl.CAHEzkonBdOCREXZK7eixcMTQhESGMYl9n9pRmjCPXFNLYTGBu', 'Admin'),
(6, 'Dan Keneth Rontale', 'rontale12', '$2y$10$/bprQglG5ED7BPx3fDUlWONpl9btzsmA.QlkkwXJK3acxjv4ScRAy', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int NOT NULL,
  `venue` text COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `rate` float NOT NULL,
  `file_image` varchar(150) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `venue`, `address`, `description`, `rate`, `file_image`) VALUES
(1, 'Uncle Jov', 'Roxas Drive, 5200 Calapan City, Oriental Mindoro.', 'Uncle Jov\'s is famous for their burgers, this place is perfect for Celebrating Parties and hanging out with family and friends', 300, 'uncle_jovs.png'),
(2, 'Halcon\'s Bar and Resto', 'Filipiniana Complex, Sto. Niño 5200 Calapan City, Oriental Mindoro', 'Best choice for Birthday Party, Wedding, and other Occations.', 250, 'halcon.jpg'),
(3, 'Orange Dutch Cafe', 'J.P Rizal Street, 5200, Calapan City, Oriental Mindoro', 'Private Birthday Party, Wedding and other Occations with family and some guests.\r\n', 280, 'dutch_cafe.png'),
(4, 'Riceland Inn II Hotel', 'M.H. Del Pilar Street, Sto. Nino 5200 Calapan Oriental Mindoro', 'Private Parties, Weddings, Birthday party, with limited participants.', 500, 'riceland.jpg'),
(5, 'Cafe Meow', 'Ilaya, 5200, Calapan City, Oriental Mindoro', 'Birthday parties, Celebrating Occations with selected guest like family, friends, or co-workers.', 250, 'cafe_meow.png'),
(6, 'Tagpuan Bistro', '2f Tomas Montellano Bldg., Gov.Infantado St., Sta. Maria Village , 5200, Calapan City, Oriental Mindoro', 'Small Celebration with friends and family.', 150, 'tagpuan_bistro.jpg'),
(7, 'Shakey\'s Pizza Parlor', 'J.P. Rizal Street, Brgy. Camilmil, Calapan City, Oriental Mindoro', 'Perfect place to conduct any social gatherings.', 199, 'shakeys.png'),
(8, 'Filipiniana Hotel', 'M. Roxas St., Brgy Sto. Nino, Calapan City, Oriental Mindoro', 'Perfect place to conduct big social gatherings like wedding or party.', 800, 'filipiniana.png');

-- --------------------------------------------------------

--
-- Table structure for table `venue_booking`
--

CREATE TABLE `venue_booking` (
  `id` int NOT NULL,
  `venue` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `fullname` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venue_booking`
--

INSERT INTO `venue_booking` (`id`, `venue`, `fullname`, `address`, `email`, `contact`, `datetime`, `status`) VALUES
(1, 'Uncle Jov', 'Ethan Jay Mendoza', 'Lalud, Calapan City', 'mendozaethan@example.com', '+639367641298', '2024-01-31 13:00:00', 'Confirmed'),
(2, 'Riceland Inn II Hotel', 'Rachell De Guzman', 'Putingtubig', 'rdguzman278@gmail.com', '+639365742109', '2024-01-15 08:00:00', 'Confirmed'),
(3, 'Shakey\'s Pizza Parlor', 'Ava Santos', 'Bayanan II, Calapan City', 'santosava@example.com', '+639572048613', '2024-01-10 17:00:00', 'Confirmed'),
(4, 'Orange Dutch Cafe', 'Kimberly Sotto', 'Naujan, Oriental Mindoro', 'kimsotto@example.com', '+639632569860', '2024-01-08 14:57:00', 'Confirmed'),
(5, 'Uncle Jov', 'Kimberly Sotto', 'Naujan, Oriental Mindoro', 'kimsotto@example.com', '+639632569860', '2024-01-15 07:05:00', 'Confirmed'),
(6, 'Orange Dutch Cafe', 'Colleen Reyes', 'Putingtubig, Calapan City', 'rcolleen278@gmail.com', '+639572048613', '2024-01-21 10:00:00', 'For Verification'),
(7, 'Halcon\'s Bar and Resto', 'Aldrich Gutierrez', 'Lalud, Calapan City', 'aldrich@gmail.com', '+639264058255', '2024-01-10 14:00:00', 'For Verification'),
(8, 'Tagpuan Bistro', 'Nymfa Gutierrez', 'Masipit, Calapan City', 'nymfagutierrez@gmail.com', '+639230475961', '2024-01-11 09:10:00', 'For Verification');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audience`
--
ALTER TABLE `audience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue_booking`
--
ALTER TABLE `venue_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audience`
--
ALTER TABLE `audience`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `venue_booking`
--
ALTER TABLE `venue_booking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
