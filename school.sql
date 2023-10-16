-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023 年 10 月 16 日 13:20
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `school`
--

-- --------------------------------------------------------

--
-- 資料表結構 `courses`
--

CREATE TABLE `courses` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`) VALUES
(2, 'Web Development', 'Learn web development using HTML, CSS, and JavaScript.'),
(3, 'Data Science', 'Explore data analysis, machine learning, and data visualization techniques.'),
(4, 'Mobile App Development', 'Build mobile applications for iOS and Android platforms using native or hybrid frameworks.'),
(5, 'Cybersecurity Fundamentals', 'Learn the basics of cybersecurity, including network security and threat prevention.'),
(6, 'Cloud Computing', 'Explore cloud computing concepts and technologies such as virtualization and containerization.'),
(7, 'Artificial Intelligence', 'Study AI algorithms, machine learning, and natural language processing.'),
(8, 'Blockchain Technology', 'Discover the principles and applications of blockchain technology.'),
(9, 'Internet of Things (IoT)', 'Learn about IoT devices, protocols, and data analytics.'),
(10, 'Ethical Hacking', 'Develop skills in ethical hacking, penetration testing, and vulnerability assessment.'),
(11, 'Software Engineering', 'Master software development methodologies, testing, and project management.'),
(12, 'Database Management', 'Gain expertise in managing and optimizing database systems.'),
(13, 'Computer Networking', 'Explore network architecture, protocols, and troubleshooting techniques.'),
(14, 'Digital Marketing', 'Understand online marketing strategies, SEO, and social media advertising.'),
(15, 'Photography Basics', 'Learn the fundamentals of photography, including composition and camera settings.'),
(16, 'Financial Planning', 'Explore personal finance, investment strategies, and retirement planning.'),
(17, 'Graphic Design', 'Develop skills in graphic design software and visual communication.'),
(18, 'Introduction to Psychology', 'Study the basic principles of psychology and human behavior.'),
(19, 'Introduction to Nutrition', 'Learn about the fundamentals of nutrition and healthy eating habits.'),
(20, 'Public Speaking', 'Improve your public speaking and presentation skills.'),
(21, 'Creative Writing', 'Explore various forms of creative writing, including fiction and poetry.'),
(22, 'Introduction to Music Theory', 'Learn the basics of music theory, notation, and ear training.'),
(23, 'Yoga and Meditation', 'Discover yoga poses, breathing techniques, and mindfulness meditation.'),
(24, 'Introduction to Astronomy', 'Study celestial objects, the solar system, and the universe.'),
(25, 'World History: Ancient Civilizations', '');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` int(8) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `Course` varchar(255) DEFAULT NULL,
  `gpa1` double DEFAULT NULL,
  `gpa2` double DEFAULT NULL,
  `gpa3` double DEFAULT NULL,
  `gpa4` double DEFAULT NULL,
  `cgpa` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`, `Course`, `gpa1`, `gpa2`, `gpa3`, `gpa4`, `cgpa`) VALUES
(1, 'admin', 12341234, 'admin@gmail.com', 'admin', 'admin', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'teacher', 4353453, 'teacher@gmail.com', 'teacher', '1234', 'Web Development', NULL, NULL, NULL, NULL, NULL),
(15, 'viper', 545435435, 'CStation@gmail.com', 'teacher', '1234', 'AI engineer', NULL, NULL, NULL, NULL, NULL),
(17, 'Yorihime', 32143232, 'anthorytsang@gmail.com', 'teacher', '3213', 'Physics: Principles and Applications', NULL, NULL, NULL, NULL, NULL),
(20, 'student', 43432422, 'student@gmail.com', 'student', '1234', 'Web Development', 3.4, 3.1, 4.2, 3.44, 3.535),
(23, 'makima', 21312312, 'xdxd@gmail.com', 'student', '1234', 'Web Development', 3.4, 3.2, 0, 0, 3.3),
(24, 'alex', 44444444, '123123@gmail.com', 'student', 'alex200376', 'Web Development', 3.2, 2.1, 3.2, 1.5, 2.5),
(26, 'bobo', 34232123, 'bobo@gmial.com', 'student', '1234', 'Web Development', 4.2, 2.7, 3.2, 0, 3.3666666666667);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
