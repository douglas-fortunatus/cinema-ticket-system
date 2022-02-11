-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 10, 2022 at 10:01 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemas`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `age` varchar(20) NOT NULL,
  `duration` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `description`, `age`, `duration`, `image`, `link`) VALUES
(11, 'venom', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                                        ', 'PG', 150, '1644433471_post-1.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
(12, 'Old', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                                            ', 'PG-13', 115, '1644433549_post-7.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
(13, 'No Time To Die', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                                         ', 'PG-13', 150, '1644433601_post-6.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
(14, 'Annete', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                              ', 'G', 105, '1644433732_post-12.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
(15, 'Luca', '           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                                 ', 'G', 115, '1644433772_post-11.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
(16, 'Prisoner of the Ghostland', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                                            ', 'PG', 95, '1644433861_post-10.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
(17, 'Wanda Vision', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                                            ', 'PG-13', 150, '1644433952_post-9.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
(18, 'RUMBLE : The biggest underdog story ever', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                                           ', 'G', 105, '1644434039_post-8.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
(19, 'The Suicide Squad', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                                            ', 'PG-13', 150, '1644434118_post-5.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
(20, 'DUNE', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                                            ', 'PG', 105, '1644434174_post-4.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
(21, 'Jungle Cruise', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                                            ', 'PG', 115, '1644434239_post-3.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
(22, 'The Tomorrow War', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                                            ', 'PG-13', 130, '1644434334_post-2.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
(23, 'Black Widow : Phase II', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                                            ', 'PG-13', 130, '1644435039_p-6.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
(24, 'Dead Pool', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                                            ', 'PG-13', 165, '1644435150_p-5.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
(25, 'INSIDIOUS : The last key', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                                            ', 'PG', 105, '1644435238_p-1.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU'),
(26, 'Venom : The master has arrived', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur maxime sed exercitationem. Pariatur accusamus dolorum voluptatibus a repudiandae ullam dolor dicta consequatur placeat voluptatum minima, dignissimos dolorem saepe porro nihil deleniti? Laborum eum quae, architecto explicabo laudantium hic iste atque excepturi dolores eligendi numquam, voluptatem vitae ullam. Quam ipsa officiis quas laboriosam commodi soluta officia. Neque placeat eveniet nam corporis aliquam, nostrum, nemo doloribus labore aliquid accusamus provident. Veritatis debitis distinctio enim eaque consectetur, similique provident vero beatae aliquam.                                                                                            ', 'PG-13', 150, '1644435290_p-4.jpg', 'https://www.youtube.com/watch?v=xjDjIWPwcPU');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `region_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `region_name`) VALUES
(13, 'Arusha'),
(14, 'Dar es salaam');

-- --------------------------------------------------------

--
-- Table structure for table `schedular`
--

CREATE TABLE `schedular` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `screen_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `quality` varchar(4) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedular`
--

INSERT INTO `schedular` (`id`, `movie_id`, `screen_id`, `date`, `start_time`, `end_time`, `quality`, `price`) VALUES
(4, 18, 5, '2022-02-11', '16:29:00', '18:15:00', '3D', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `screens`
--

CREATE TABLE `screens` (
  `id` int(11) NOT NULL,
  `screen_name` varchar(255) NOT NULL,
  `theater_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `screens`
--

INSERT INTO `screens` (`id`, `screen_name`, `theater_id`) VALUES
(5, 'Screen Two', 18),
(8, 'Sky', 19);

-- --------------------------------------------------------

--
-- Table structure for table `theaters`
--

CREATE TABLE `theaters` (
  `id` int(11) NOT NULL,
  `th_name` varchar(20) NOT NULL,
  `region_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theaters`
--

INSERT INTO `theaters` (`id`, `th_name`, `region_id`) VALUES
(18, 'Regalz cinema', 13),
(19, 'City mall', 14);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `username` varchar(90) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_of_creation` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role`, `username`, `email`, `password`, `date_of_creation`) VALUES
(14, 1, 'Douglas Fortunatus', 'fortunatusdouglas@gmail.com', '$2y$10$yvg81oTRMZ/xLgKjb/qBbONvTTyT7Twb1ZCviEXfcQ.VnxHkyQjwC', '2022-02-09'),
(15, 1, 'super admin', 'admin@cinema.com', '$2y$10$SCtXVVj.S4nb89WmaFpayeIq9.t5HSEnfmleYyqiFExoNd5Ks/3Uu', '2022-02-09'),
(16, 0, 'Douglas Fortunatus', 'doku@cinema.com', '$2y$10$N5iKsxbglJmSC3kl07dytuYpNxLMsp3RslvNZ04h31BwUZbpFlZmG', '2022-02-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedular`
--
ALTER TABLE `schedular`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `screen_id` (`screen_id`);

--
-- Indexes for table `screens`
--
ALTER TABLE `screens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theater_id` (`theater_id`);

--
-- Indexes for table `theaters`
--
ALTER TABLE `theaters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `schedular`
--
ALTER TABLE `schedular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `screens`
--
ALTER TABLE `screens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `theaters`
--
ALTER TABLE `theaters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedular`
--
ALTER TABLE `schedular`
  ADD CONSTRAINT `schedular_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedular_ibfk_2` FOREIGN KEY (`screen_id`) REFERENCES `screens` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `screens`
--
ALTER TABLE `screens`
  ADD CONSTRAINT `screens_ibfk_1` FOREIGN KEY (`theater_id`) REFERENCES `theaters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `theaters`
--
ALTER TABLE `theaters`
  ADD CONSTRAINT `theaters_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
