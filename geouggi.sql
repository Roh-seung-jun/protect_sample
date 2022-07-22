-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 22-07-22 10:27
-- 서버 버전: 10.4.22-MariaDB
-- PHP 버전: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `geouggi`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `gardens`
--

CREATE TABLE `gardens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `management` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` int(11) NOT NULL,
  `longitude` int(11) NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `gardens`
--

INSERT INTO `gardens` (`id`, `name`, `address`, `management`, `phone`, `latitude`, `longitude`, `user_id`) VALUES
(23, '나폴리농원', '경상남도 통영시 산양읍 미륵산길 152', '나폴리농원', '010-3117-9030', 35, 128, 'garden_0'),
(24, '사천식물랜드', '경상남도 사천시 용현면 덕곡리 82-4 일원', '사천식물랜드', '010-4590-8718', 35, 128, 'garden_1'),
(25, '해솔찬정원', '경상남도 통영시 도산면 저산리 572-1', '해솔찬정원', '055-643-0564', 35, 128, 'garden_2'),
(26, '통영동백커피식물원', '경상남도 통영시 도산면 원산리 920 일원', '통영동백커피식물원', '010-3557-9634', 35, 128, 'garden_3'),
(27, '물빛소리정원', '경상남도 통영시 도산면 수월리 655-3', '물빛소리정원', '010-3588-6453', 35, 128, 'garden_4'),
(28, '춘화의 정원', '경상남도 통영시 도산면 도산일주로 56', '춘화의 정원', '010-2596-6344', 35, 128, 'garden_5'),
(29, '농부가그린정원', '경상남도 김해시 진영읍 좌곤리 765-1', '농부가그린정원', '010-3832-8430', 35, 129, 'garden_6'),
(30, '엄마의정원', '경상남도 밀양시 하남읍 남전7길 41-19', '엄마의정원', '010-3884-1100', 35, 129, 'garden_7'),
(31, '녹색교육정원', '경상남도 양산시 동면 개곡로77번길', '녹색교육정원', '010-5574-7176', 35, 129, 'garden_8'),
(32, '옥동힐링가든', '경상남도 거제시 둔덕면 청마로 665-13', '옥동힐링가든', '055-636-8988', 35, 129, 'garden_9'),
(33, '새미골정원', '경상남도 양산시 동면 개곡리 564', '새미골정원', '010-3885-1567', 35, 129, 'garden_10'),
(34, '느티나무의 사랑', '경상남도 양산시 동면 여락리 103 일원', '느티나무의 사랑', '055-912-5551', 35, 129, 'garden_11'),
(35, '만년교정원', '경상남도 창녕군 영산면 원다리길 17', '만년교정원', '010-9431-2277', 35, 129, 'garden_12'),
(36, '그레이스정원', '경상남도 고성군 상리면 삼상로 1312-71', '그레이스정원', '055-673-1803', 35, 128, 'garden_13'),
(37, '만화방초정원', '경상남도 고성군 거류면 은황길 82-91', '만화방초', '010-3870-1041', 35, 128, 'garden_14'),
(38, '섬이정원', '경상남도 남해군 남면 평산리 888-4번지', '섬이정원', '010-2255-3577', 35, 128, 'garden_15'),
(39, '화계리정원', '경상남도 남해군 이동면 화계리 292-6', '화계리정원', '010-4074-6444', 35, 128, 'garden_16'),
(40, '토피어리정원', '경상남도 남해군 창선면 서부로 270-106', '토피어리정원', '010-2851-2978', 35, 128, 'garden_17'),
(41, '하미앙정원', '경남 함양군 함양읍 삼봉로 442-14', '하미앙정원', '055-964-2500', 35, 128, 'garden_18'),
(42, '이수미팜베리정원', '경상남도 거창군 거창읍 가지리 산250-3', '이수미팜베리정원', '055-945-1789', 36, 128, 'garden_19'),
(43, '이한메미술관', '경상남도 거창군 북상면 송계로 1243-15', '이한메미술관', '010-3227-0345', 36, 128, 'garden_20'),
(44, '자연의소리정원', '경상남도 거창군 가북면 용암리 산62 일원', '자연의소리정원', '055-262-2729', 36, 128, 'garden_21');

-- --------------------------------------------------------

--
-- 테이블 구조 `impossibles`
--

CREATE TABLE `impossibles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `garden_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2022_07_22_061115_create_gardens_table', 2),
(4, '2022_07_22_061422_create_types_table', 2),
(5, '2022_07_22_065541_create_reviews_table', 3),
(6, '2022_07_22_075832_create_promises_table', 3),
(7, '2022_07_22_080133_create_impossibles_table', 3);

-- --------------------------------------------------------

--
-- 테이블 구조 `promises`
--

CREATE TABLE `promises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `garden_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `people` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `garden_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `types`
--

INSERT INTO `types` (`id`, `garden_id`, `theme`) VALUES
(1, '1', '등산길'),
(2, '1', '자연적'),
(3, '1', '휴양지'),
(4, '1', '시원'),
(5, '2', '꽃길'),
(6, '2', '관광지'),
(7, '2', '광활'),
(8, '3', '체험학습'),
(9, '3', '초원'),
(10, '3', '식물원'),
(11, '4', '식물원'),
(12, '4', '과수원'),
(13, '4', '촉촉'),
(14, '5', '꽃길'),
(15, '5', '관광지'),
(16, '5', '광활'),
(17, '6', '체험학습'),
(18, '6', '산책로'),
(19, '7', '식물원'),
(20, '8', '광활'),
(21, '8', '식물원'),
(22, '9', '체험학습'),
(23, '9', '빈티지'),
(24, '9', '자연적'),
(25, '10', '공원'),
(26, '10', '체험학습'),
(27, '10', '폭포'),
(28, '10', '추억'),
(29, '11', '공원'),
(30, '11', '산'),
(31, '11', '시원'),
(32, '12', '나무'),
(33, '12', '광활'),
(34, '12', '공원'),
(35, '13', '농촌'),
(36, '13', '대형'),
(37, '13', '자연적'),
(38, '14', '자연적'),
(39, '14', '휴양지'),
(40, '14', '산림욕'),
(41, '14', '광활'),
(42, '15', '산책로'),
(43, '15', '시원'),
(44, '15', '자연적'),
(45, '16', '나무'),
(46, '16', '산책로'),
(47, '16', '빈티지'),
(48, '17', '친근'),
(49, '17', '빈티지'),
(50, '17', '나무'),
(51, '18', '체험학습'),
(52, '18', '초원'),
(53, '18', '산'),
(54, '18', '꽃길'),
(55, '18', '동화'),
(56, '19', '공원'),
(57, '19', '휴식'),
(58, '19', '광활'),
(59, '20', '음식점'),
(60, '20', '산책로'),
(61, '20', '아늑'),
(62, '21', '공원'),
(63, '21', '광활'),
(64, '21', '시원'),
(65, '22', '산'),
(66, '22', '산책로'),
(67, '22', '연못'),
(68, '22', '예술'),
(69, '23', '등산길'),
(70, '23', '자연적'),
(71, '23', '휴양지'),
(72, '23', '시원'),
(73, '24', '꽃길'),
(74, '24', '관광지'),
(75, '24', '광활'),
(76, '25', '체험학습'),
(77, '25', '초원'),
(78, '25', '식물원'),
(79, '26', '식물원'),
(80, '26', '과수원'),
(81, '26', '촉촉'),
(82, '27', '꽃길'),
(83, '27', '관광지'),
(84, '27', '광활'),
(85, '28', '체험학습'),
(86, '28', '산책로'),
(87, '29', '식물원'),
(88, '30', '광활'),
(89, '30', '식물원'),
(90, '31', '체험학습'),
(91, '31', '빈티지'),
(92, '31', '자연적'),
(93, '32', '공원'),
(94, '32', '체험학습'),
(95, '32', '폭포'),
(96, '32', '추억'),
(97, '33', '공원'),
(98, '33', '산'),
(99, '33', '시원'),
(100, '34', '나무'),
(101, '34', '광활'),
(102, '34', '공원'),
(103, '35', '농촌'),
(104, '35', '대형'),
(105, '35', '자연적'),
(106, '36', '자연적'),
(107, '36', '휴양지'),
(108, '36', '산림욕'),
(109, '36', '광활'),
(110, '37', '산책로'),
(111, '37', '시원'),
(112, '37', '자연적'),
(113, '38', '나무'),
(114, '38', '산책로'),
(115, '38', '빈티지'),
(116, '39', '친근'),
(117, '39', '빈티지'),
(118, '39', '나무'),
(119, '40', '체험학습'),
(120, '40', '초원'),
(121, '40', '산'),
(122, '40', '꽃길'),
(123, '40', '동화'),
(124, '41', '공원'),
(125, '41', '휴식'),
(126, '41', '광활'),
(127, '42', '음식점'),
(128, '42', '산책로'),
(129, '42', '아늑'),
(130, '43', '공원'),
(131, '43', '광활'),
(132, '43', '시원'),
(133, '44', '산'),
(134, '44', '산책로'),
(135, '44', '연못'),
(136, '44', '예술');

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE `users` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `type`) VALUES
('admin', '관리자', '1234', 'admin'),
('garden_0', '나폴리농원의 정원매니저', '1234', 'management'),
('garden_1', '사천식물랜드의 정원매니저', '1234', 'management'),
('garden_10', '새미골정원의 정원매니저', '1234', 'management'),
('garden_11', '느티나무의 사랑의 정원매니저', '1234', 'management'),
('garden_12', '만년교정원의 정원매니저', '1234', 'management'),
('garden_13', '그레이스정원의 정원매니저', '1234', 'management'),
('garden_14', '만화방초정원의 정원매니저', '1234', 'management'),
('garden_15', '섬이정원의 정원매니저', '1234', 'management'),
('garden_16', '화계리정원의 정원매니저', '1234', 'management'),
('garden_17', '토피어리정원의 정원매니저', '1234', 'management'),
('garden_18', '하미앙정원의 정원매니저', '1234', 'management'),
('garden_19', '이수미팜베리정원의 정원매니저', '1234', 'management'),
('garden_2', '해솔찬정원의 정원매니저', '1234', 'management'),
('garden_20', '이한메미술관의 정원매니저', '1234', 'management'),
('garden_21', '자연의소리정원의 정원매니저', '1234', 'management'),
('garden_3', '통영동백커피식물원의 정원매니저', '1234', 'management'),
('garden_4', '물빛소리정원의 정원매니저', '1234', 'management'),
('garden_5', '춘화의 정원의 정원매니저', '1234', 'management'),
('garden_6', '농부가그린정원의 정원매니저', '1234', 'management'),
('garden_7', '엄마의정원의 정원매니저', '1234', 'management'),
('garden_8', '녹색교육정원의 정원매니저', '1234', 'management'),
('garden_9', '옥동힐링가든의 정원매니저', '1234', 'management');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `gardens`
--
ALTER TABLE `gardens`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `impossibles`
--
ALTER TABLE `impossibles`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `promises`
--
ALTER TABLE `promises`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `gardens`
--
ALTER TABLE `gardens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- 테이블의 AUTO_INCREMENT `impossibles`
--
ALTER TABLE `impossibles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 테이블의 AUTO_INCREMENT `promises`
--
ALTER TABLE `promises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
