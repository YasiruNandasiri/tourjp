-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2023 at 09:06 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourjp`
--

-- --------------------------------------------------------

--
-- Table structure for table `attraction`
--

CREATE TABLE `attraction` (
  `aid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `intro` text NOT NULL,
  `overview` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `attraction`
--

INSERT INTO `attraction` (`aid`, `did`, `name`, `image`, `intro`, `overview`) VALUES
(1, 1, 'Tokyo Tower', 'image50.jpg', 'Iconic landmark offering panoramic views.', 'Soaring against the city skyline, Tokyo Tower stands as an architectural marvel, offering panoramic views of the pulsating metropolis below. Ascend the tower for a breathtaking experience, witnessing the city lights illuminate the landscape. A blend of modern technology and classic design, this iconic landmark symbolizes Tokyo\'s constant evolution.'),
(2, 1, 'Shibuya Crossing', 'image8.jpg', 'World\'s busiest pedestrian crossing.', 'At the heart of Tokyo\'s Shibuya district, the world-famous Shibuya Crossing is a mesmerizing spectacle of organized chaos. As traffic halts, a surge of pedestrians floods the intersection, creating a symphony of movement. Capture the energy of Tokyo\'s urban rhythm at this bustling pedestrian scramble, an unforgettable intersection of culture and commerce.'),
(3, 1, 'Asakusa Temple', 'image9.jpg', 'Ancient Buddhist site with Nakamise Shopping Street.', 'Nestled in historic Asakusa, the Senso-ji Temple welcomes visitors with its imposing Thunder Gate and vibrant Nakamise Shopping Street. This ancient Buddhist site, Tokyo\'s oldest temple, exudes a serene ambiance. Immerse yourself in the rituals, explore the intricately designed main hall, and savor the spiritual essence of Asakusa.'),
(4, 2, 'Kiyomizudera', 'image4.jpg', 'Majestic temple with a wooden terrace.', 'Perched on the wooded hills of Eastern Kyoto, Kiyomizudera, the \"Pure Water Temple,\" captivates with its wooden terrace that offers breathtaking views of the city and beyond. A UNESCO World Heritage site, this majestic temple showcases the beauty of Japanese architecture and the tranquility of its surroundings. Visit during cherry blossom season or the vibrant hues of autumn for an enchanting experience.'),
(5, 2, 'Arashiyama Bamboo Forest', 'image26.jpg', 'UNESCO World Heritage site.', 'Step into the ethereal beauty of the Arashiyama Bamboo Grove, a mesmerizing bamboo forest on the outskirts of Kyoto. Towering bamboo shoots create a natural cathedral, casting a spellbinding atmosphere. Recognized as a UNESCO World Heritage Site, this enchanting destination provides an immersive experience, inviting visitors to wander through its magical, sun-dappled pathways.'),
(6, 2, 'Fushimi Inari Shrine', 'image11.jpg', 'Famous for its thousands of torii gates.', ' Embark on a mystical journey through the vermilion gates of Fushimi Inari Shrine, dedicated to the Shinto god of rice and prosperity. This iconic shrine, featured in countless photographs, is renowned for its thousands of torii gates that form a stunning pathway up the sacred Mount Inari. Explore the serene trails, adorned with fox statues, and feel the spiritual allure of this unique Kyoto landmark.'),
(7, 3, 'Osaka Castle', 'image27.jpg', 'A symbol of historical significance.', 'Standing tall amidst lush parkland, Osaka Castle is a formidable symbol of Japan\'s historical grandeur. Immerse yourself in centuries of heritage as you explore its impressive keep, citadels, and expansive grounds. The panoramic views from the top offer a glimpse into Osaka\'s vibrant present and storied past, making it a must-visit destination for history enthusiasts and architecture aficionados alike.'),
(8, 3, 'Dotonbori', 'image52.jpg', 'Food lover\'s paradise with neon lights.', 'Dotonbori, Osaka\'s lively entertainment district, is a sensory feast of neon lights, vibrant signs, and a cacophony of street sounds. A culinary haven, it beckons foodies with its array of local and international delights. Stroll along the canal, marvel at the iconic Glico Running Man sign, and indulge in the gastronomic delights of this bustling district, where the spirit of Osaka comes alive.'),
(9, 3, 'Universal Studios Japan', 'image47.jpg', 'Theme park for thrilling experiences.', 'For an immersive blend of fantasy and reality, Universal Studios Japan in Osaka is a haven for thrill-seekers and movie enthusiasts. Explore themed attractions based on blockbuster films, witness dazzling performances, and meet beloved characters from your favorite movies and TV shows. From heart-pounding rides to enchanting shows, Universal Studios Japan promises an unforgettable experience for visitors of all ages, making it a must-visit destination for families and entertainment enthusiasts.'),
(10, 4, 'Snow Festivals', 'image18.jpg', 'Spectacular winter celebrations.', 'Hokkaido\'s snow festivals are a mesmerizing celebration of winter wonder. Giant snow sculptures, intricately carved and illuminated, transform the landscape into a magical spectacle. Sapporo\'s Yuki Matsuri, the largest of its kind, invites visitors to witness the artistry and creativity that unfolds amid the pristine snow, creating a captivating experience that defines Hokkaido\'s unique winter charm.'),
(11, 4, 'Hot Springs', 'image53.jpg', 'Relaxing onsen experiences.', 'Indulge in the therapeutic embrace of Hokkaido\'s rejuvenating hot springs, known as onsen. Nestled amidst breathtaking natural landscapes, these geothermal wonders offer a serene retreat for relaxation and contemplation. The warm, mineral-rich waters provide a soothing escape from the cold, creating an intimate connection with nature that has been cherished by locals and travelers alike for centuries.'),
(12, 4, 'Scenic Landscapes', 'image12.jpg', 'Natural beauty in every season.', 'Hokkaido\'s vast and varied landscapes, from rolling hills to majestic mountains, present a canvas of natural beauty in every season. Whether it\'s the lavender fields of Furano, the tranquil lakeside views of Shikisai-no-Oka, or the panoramic vistas of the Daisetsuzan mountain range, Hokkaido\'s scenic wonders beckon outdoor enthusiasts, photographers, and those seeking a peaceful connection with nature.'),
(13, 5, 'Shuri Castle', 'image5.jpg', 'UNESCO World Heritage site.', 'Step into the Ryukyuan Kingdom\'s rich history at Shuri Castle, a UNESCO World Heritage site in Okinawa. This majestic fortress, with its distinctive red color and intricate architecture, served as the royal residence. Explore the courtyards, gates, and halls, and feel the cultural significance of this symbol of Okinawa\'s unique heritage.'),
(14, 5, 'Okinawan Cuisine.', 'image43.jpg', 'Unique flavors and culinary delights', 'Okinawan cuisine is a delightful journey into flavors unique to the islands. From savory dishes like Goya Champuru to sweet treats like Beni-imo Tarts, Okinawa\'s culinary scene reflects its distinct cultural influences. Indulge in traditional dishes made with local ingredients, and savor the diverse tastes that contribute to the island\'s reputation as a food lover\'s paradise.'),
(15, 5, 'Beaches', 'image54.jpg', 'Sun-soaked relaxation with turquoise waters.', 'Okinawa\'s sun-kissed beaches, with their powdery white sand and crystal-clear waters, invite relaxation and recreation. From the popular Katsuren Peninsula to the secluded Kumejima Island, each beach offers a distinct experience. Whether you\'re seeking water sports, tranquil sunsets, or a leisurely day by the sea, Okinawa\'s beaches are a testament to the islands\' natural beauty and laid-back lifestyle.');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `did` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `intro` text NOT NULL,
  `overview` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`did`, `name`, `image`, `intro`, `overview`) VALUES
(1, 'TOKYO', 'image56.jpg', 'Tokyo, Japan\'s bustling capital, seamlessly blends ultramodern with traditional. From neon-lit skyscrapers to historic temples, Tokyo offers a captivating journey through time.', 'Discover the vibrant energy of Tokyo, a city where ancient traditions harmonize with cutting-edge technology. Immerse yourself in the diverse neighborhoods, from the trendy Shibuya to the cultural Asakusa. Tokyo is a culinary paradise, boasting sushi markets, ramen stalls, and Michelin-starred restaurants.'),
(2, 'KYOTO', 'image51.jpg', 'Kyoto, the heart of Japan\'s cultural heritage, mesmerizes with its ancient temples, traditional tea houses, and serene gardens. Immerse yourself in the elegance of the city, where geishas stroll through historic streets.', 'Step into Kyoto, a city that encapsulates the essence of traditional Japan. Explore the enchanting Arashiyama Bamboo Forest, visit Kiyomizudera with its panoramic views, and experience the serenity of Fushimi Inari Shrine.'),
(3, 'OSAKA', 'image44.jpg', 'Osaka, Japan\'s kitchen, is a dynamic metropolis known for its bold flavors, historic landmarks, and lively entertainment. Dive into the city\'s vibrant street life and rich cultural tapestry.', 'Experience the spirited charm of Osaka, where modernity meets tradition. Explore Osaka Castle, delve into the bustling Dotonbori district\'s gastronomic delights, and enjoy family-friendly adventures at Universal Studios Japan.'),
(4, 'HOKKAIDO', 'image41.jpg', 'Hokkaido, Japan\'s northernmost island, is a winter wonderland and a summer retreat, offering pristine landscapes, hot springs, and outdoor adventures.', 'Escape to Hokkaido, a haven for nature enthusiasts. Revel in the magic of snow festivals, unwind in relaxing hot springs, and explore the breathtaking scenery, including fields of lavender and picturesque mountains.'),
(5, 'OKINAWA', 'image37.jpg', 'Okinawa, Japan\'s tropical paradise, invites you to explore its crystal-clear waters, historic sites, and unique Ryukyuan culture.', 'Embark on a journey to Okinawa, where sandy beaches meet rich traditions. Discover Shuri Castle\'s historical charm, indulge in Okinawan cuisine, and experience traditional music and dance.');

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

CREATE TABLE `styles` (
  `styleid` int(11) NOT NULL,
  `boxtype` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'textbox',
  `stylename` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'maintext',
  `margin` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `border` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `padding` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `width` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'fit-content',
  `max-width` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `height` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `max-height` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `background-color` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '#ebf5fb',
  `float1` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'left',
  `color` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '#273746',
  `font-family` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Monospace',
  `font-size` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '1.3em',
  `box-sizing` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'border-box',
  `extra2` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra3` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra4` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra5` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `styles`
--

INSERT INTO `styles` (`styleid`, `boxtype`, `stylename`, `margin`, `border`, `padding`, `width`, `max-width`, `height`, `max-height`, `background-color`, `float1`, `color`, `font-family`, `font-size`, `box-sizing`, `extra2`, `extra3`, `extra4`, `extra5`) VALUES
(1, 'topbar', 'topbar', 'none', 'none', '0.7% 10% 0.7% 10%', '100%', '100%', 'none', 'none', '#17202A', 'left', '#FDFEFE', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(2, 'logobox', 'logobox', '0% 0% 0% 5%', 'none', 'none', '10%', '10%', '5%', 'auto', '#FDFEFE', 'left', '#5dade2', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(3, 'menubox', 'menubox', '3% 5% 6% 0%', 'none', 'none', '80%', 'none', '5%', 'none', '#FDFEFE', 'left', '#d35400', 'sans-serif', '1.7em', 'border-box', '', '', '', ''),
(4, 'title', 'title', 'none', 'none', '2% 0% 2% 0%', '100%', '100%', 'none', 'none', '#17202A', 'left', '#EAECEE', 'sans-serif', '1.6em', 'border-box', '', '', '', ''),
(5, 'sitemapabout', 'sitemapabout', 'none', 'none', '50px 0px 0px 10%', '33.3%', '33.3%', '450px', '450px', '#17202A', 'left', '#fdfefe', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(6, 'sitemapmain', 'sitemapmain', 'none', 'none', '50px 0px 0px 0px', '33.3%', '33.3%', '450px', '450px', '##17202A', 'left', '#fdfefe', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(7, 'sitemapsignup', 'sitemapsignup', 'none', 'none', '50px 0px 0px 0px', '33.3%', '33.3%', '450px', '450px', '#17202A', 'left', '#fdfefe', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(8, 'copyrightbox', 'copyrightbox', 'none', '10%', 'none', '100%', '100%', 'none', 'none', '#17202A', 'left', '#fdfefe', 'sans-serif', '0.8em', 'border-box', '', '', '', ''),
(9, 'slider', 'slider', 'none', 'none', '0% 0% 2% 0%', '100%', '100%', '800px', '800px', '#17202A', 'left', '#273746', 'sans-serif', '1.5em', 'border-box', '', '', '', ''),
(10, 'slogan', 'slogan', 'none', 'none', '2% 0% 0.5% 0%', '100%', '100%', 'none', 'none', '#17202A', 'left', '#EAECEE', 'sans-serif', '1.6em', 'border-box', '', '', '', ''),
(11, 'imagebox', 'imagebox', 'none', 'none', '4% 5% 1% 5%', '50%', '50%', '550px', '550px', '#EBF5FB', 'left', '#273746', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(12, 'contentbox', 'contentbox', 'none', 'none', '1% 5% 1% 5%', '50%', '50%', '550px', '550px', '#EBF5FB', 'left', '#17202a', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(13, 'slogancontentbox', 'slogancontentbox', 'none', 'none', '2% 4% 4% 15%', '50%', '50%', '550px', '550px', '#EBF5FB', 'left', '#17202a', 'sans-serif', '1.4em', 'border-box', '', '', '', ''),
(14, 'smallbox', 'smallbox', '1%', 'none', '2%', '31%', '33%', '350px', '750px', '#ebf5fb', 'left', '#273746', 'sans-serif', '1.2em', 'border-box', '', '', '', ''),
(15, 'sloganimagebox', 'sloganimagebox', 'none', 'none', '4% 1% 4% 1%', '40%', '40%', 'auto', 'auto', '#EBF5FB', 'left', '#273746', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(16, 'imagebox1', 'imagebox1', 'none', 'none', '4% 5% 1% 5%', '50%', '50%', 'auto', 'auto', '#EBF5FB', 'left', '#273746', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(17, 'contentbox1', 'contentbox1', 'none', 'none', '1% 5% 1% 5%', '50%', '50%', '550px', '550px', '#EBF5FB', 'left', '#17202a', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(18, 'overviewbox', 'overviewbox', 'none', 'none', '0.5% 20% 0.5% 20%', '100%', '100%', 'none', 'none', '#ebf5fb', 'left', '#273746', 'sans-serif', '1.5em', 'border-box', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stylesmobile`
--

CREATE TABLE `stylesmobile` (
  `styleid` int(11) NOT NULL,
  `boxtype` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'textbox',
  `stylename` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'maintext',
  `margin` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `border` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `padding` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `width` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'fit-content',
  `max-width` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `height` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `max-height` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'none',
  `background-color` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '#ebf5fb',
  `float1` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'left',
  `color` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '#273746',
  `font-family` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Monospace',
  `font-size` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '1.3em',
  `box-sizing` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'border-box',
  `extra2` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra3` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra4` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `extra5` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stylesmobile`
--

INSERT INTO `stylesmobile` (`styleid`, `boxtype`, `stylename`, `margin`, `border`, `padding`, `width`, `max-width`, `height`, `max-height`, `background-color`, `float1`, `color`, `font-family`, `font-size`, `box-sizing`, `extra2`, `extra3`, `extra4`, `extra5`) VALUES
(1, 'aboutpara', 'aboutpara', 'none', 'none', '40px 0px 40px 0px', '100%', '100%', '200px', '200px', 'none', 'left', '#d35400', 'sans-serif', '0.9em', 'border-box', '', '', '', ''),
(2, 'aboutbanner', 'aboutbanner', 'none', 'none', 'none', '100%', '100%', '200px', '200px', 'none', 'left', 'none', 'none', 'none', 'border-box', '', '', '', ''),
(3, 'menubox', 'menubox', '10px', 'none', '10px', 'fit-content', 'none', 'none', 'none', 'none', 'left', '#fdfefe', 'sans-serif', '2em', 'border-box', '', '', '', ''),
(4, 'videobox', 'videobox', '15px', 'none', '15px', '550px', '550px', 'none', 'none', '#ebf5fb', 'left', '#5dade2', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(5, 'logobox', 'logobox', '15px', 'none', 'none', '150px', '150px', 'none', 'none', '#ebf5fb', 'left', '#5dade2', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(6, 'productbox', 'productbox', 'none', 'none', '20px 20px 0px 20px', '50%', '50%', 'none', 'none', 'none', 'left', '#d35400', 'sans-serif', '0.6em', 'border-box', '', '', '', ''),
(7, 'topbanner', 'topbanner', 'none', 'none', '0px 0px 20px 0px', '100%', '100%', '900px', '900px', ' #f8f9f9', 'left', 'none', 'none', 'none', 'border-box', '', '', '', ''),
(8, 'compname', 'compname', 'none', 'none', '0px 0px 30px 0px', '100%', '100%', 'none', 'none', '#27AE60', 'left', '#283747', 'sans-serif', '1.3em', 'border-box', '', '', '', ''),
(9, 'contactpara', 'contactpara', 'none', 'none', '40px 0px 10px 0px', '100%', '100%', '350px', '350px', ' #f8f9f9', 'left', '#17202a', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(10, 'productstitle', 'productstitle', 'none', 'none', '20px 0px 0px 0px', '100%', '100%', 'none', 'none', 'none', 'left', '#283747', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(11, 'sitemapabout', 'sitemapabout', 'none', 'none', '50px 0px 50px 0px', '100%', '100%', '300px', '300px', ' #34495e ', 'left', '#fdfefe', 'Trebuchet MS', '0.7em', 'border-box', '', '', '', ''),
(12, 'copyrightbox', 'copyrightbox', 'none', 'none', '10px', '100%', '100%', 'none', 'none', ' #34495e ', 'left', '#fdfefe', 'Trebuchet MS', '0.6em', 'border-box', '', '', '', ''),
(13, 'servicespara', 'servicespara', 'none', 'none', '40px 0px 40px 0px', '100%', '100%', '300px', '300px', ' #f8f9f9', 'left', '#17202a', 'sans-serif', '1em', 'border-box', '', '', '', ''),
(14, 'servicesbanner', 'servicesbanner', 'none', 'none', '0px 0px 0px 0px', '100%', '100%', '300px', '300px', ' #f8f9f9', 'left', 'none', 'none', 'none', 'border-box', '', '', '', ''),
(15, 'contactbanner', 'contactbanner', 'none', 'none', '40px 0px 0px 0px', '100%', '100%', '350px', '350px', ' #f8f9f9', 'left', 'none', 'none', 'none', 'border-box', '', '', '', ''),
(16, 'sitemapmain', 'sitemapmain', 'none', 'none', '0px 0px 0px 0px', '100%', '100%', '300px', '300px', ' #34495e ', 'left', '#fdfefe', 'Trebuchet MS', '0.7em', 'border-box', '', '', '', ''),
(17, 'sitemapsignup', 'sitemapsignup', 'none', 'none', '50px 0px 33px 0px', '100%', '100%', '300px', '300px', ' #34495e ', 'left', '#fdfefe', 'Trebuchet MS', '0.7em', 'border-box', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `sid` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`sid`, `sname`, `email`) VALUES
(1, 'Yohan Pandigama', 'pandig911@gmail.com'),
(2, 'Yohan Pandigama', 'pandig911@gmail.com'),
(3, 'Your Name', 'Your E-mail'),
(4, 'Your Name', 'Your E-mail'),
(5, 'Yohan Pandigama', 'y@p.com'),
(6, 'Yohan Pandigama', 'ymig@mail.com'),
(7, 'John Jayapala', 'johnmail.com'),
(8, 'Arya', 'a@p.com'),
(9, 'Meth and Sukliri', 'mns@mail.com'),
(10, 'Saman De Silva', 'saman@mail.com'),
(11, 'Soma Silva', 'soma@mail.com'),
(12, '', ''),
(13, 'Yohan Pandigama', 'pan@mail.com'),
(14, 'Yohan Pandigama', 'pan1@gmail.com'),
(15, 'Yohan Pandigama', 'pan2@gmail.com'),
(16, 'Yohan', 'john@mail.com'),
(17, 'Yohan', 'jhna@mail.com'),
(18, 'Yohan', 'y@o.com'),
(19, 'ddd', 'dddd@ddd.com'),
(20, 'ssss', 'sss@ds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attraction`
--
ALTER TABLE `attraction`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `styles`
--
ALTER TABLE `styles`
  ADD PRIMARY KEY (`styleid`);

--
-- Indexes for table `stylesmobile`
--
ALTER TABLE `stylesmobile`
  ADD PRIMARY KEY (`styleid`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attraction`
--
ALTER TABLE `attraction`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `styles`
--
ALTER TABLE `styles`
  MODIFY `styleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `stylesmobile`
--
ALTER TABLE `stylesmobile`
  MODIFY `styleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
