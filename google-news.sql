-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2022 at 05:06 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `google-news`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_01_16_210432_create_web_sites_table', 1),
(3, '2022_01_16_210948_create_news_categories_table', 1),
(4, '2022_01_16_213634_create_news_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `owner` bigint(20) UNSIGNED NOT NULL,
  `key_word` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_owner_foreign` (`owner`),
  KEY `news_category_foreign` (`category`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `owner`, `key_word`, `headline`, `image`, `category`, `created_at`, `updated_at`) VALUES
(1, 2, 'volcan', 'Eaque qui dolorem et.', 'https://via.placeholder.com/640x480.png/0077dd?text=consequatur', 3, '2022-01-20 09:06:39', '2022-01-18 17:06:48'),
(37, 1, 'Robots', 'De la mano del gurú Hiroshi Ishiguro, los androides o robots con apariencia humana son cada vez más fieles a nuestra anatomía', 'https://lahora.com.ec/contenido/cache/32/androides__cada_vez_mas_humanos_20120417020505-682x512.jpg', 2, '2022-01-20 11:03:35', '2022-01-20 11:03:35'),
(3, 4, 'luna', 'El poder de la luna: ¿cómo sacarle provecho?', 'data:image/jpeg;base64,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', 6, '2022-01-20 09:06:39', '2022-01-20 09:13:34'),
(36, 2, 'Robots', 'La ciencia no avala los supuestos beneficios de los robots sexuales', 'https://d7lju56vlbdri.cloudfront.net/var/ezwebin_site/storage/images/_aliases/img_1col/noticias/la-ciencia-no-avala-los-supuestos-beneficios-de-los-robots-sexuales/6290450-1-esl-MX/La-ciencia-no-avala-los-supuestos-beneficios-de-los-robots-sexuales.jpg', 2, '2022-01-20 11:02:21', '2022-01-20 11:02:21'),
(5, 1, 'luna', 'Porro distinctio voluptatem recusandae quisquam aut explicabo aperiam sint.', 'https://via.placeholder.com/640x480.png/0077cc?text=et', 5, '2022-01-20 09:06:39', '2022-01-20 03:48:52'),
(6, 3, 'lluvia', 'Dolor pariatur minima esse sapiente animi in amet.', 'https://via.placeholder.com/640x480.png/00aa11?text=consectetur', 1, '2022-01-20 09:06:39', '2022-01-19 10:45:30'),
(7, 2, 'volcan', 'Aut soluta et pariatur.', 'https://via.placeholder.com/640x480.png/00cc00?text=qui', 3, '2022-01-20 09:06:39', '2022-01-19 05:27:45'),
(10, 6, 'volcan', 'Fugit voluptas nihil eos qui laborum.', 'https://via.placeholder.com/640x480.png/00aaee?text=dignissimos', 3, '2022-01-20 09:06:39', '2022-01-17 13:23:20'),
(13, 3, 'lluvia', 'Suscipit id asperiores architecto laboriosam quia perferendis.', 'https://via.placeholder.com/640x480.png/00ee77?text=iste', 5, '2022-01-20 09:06:39', '2022-01-18 06:30:14'),
(14, 2, 'lluvia', 'Delectus esse veniam omnis repudiandae omnis dolores.', 'https://via.placeholder.com/640x480.png/0055bb?text=id', 5, '2022-01-20 09:06:39', '2022-01-17 13:46:05'),
(16, 6, 'muerte', 'Autem nesciunt nesciunt ut.', 'https://via.placeholder.com/640x480.png/0088ee?text=est', 3, '2022-01-20 09:06:39', '2022-01-18 00:31:58'),
(18, 6, 'luna', 'Sit quisquam quisquam aut officia reiciendis aut qui.', 'https://via.placeholder.com/640x480.png/009933?text=esse', 2, '2022-01-20 09:06:39', '2022-01-18 12:22:56'),
(19, 5, 'lluvia', 'Cumque voluptatem autem consequatur et deserunt.', 'https://via.placeholder.com/640x480.png/00aa11?text=consectetur', 1, '2022-01-20 09:06:39', '2022-01-18 04:08:48'),
(20, 2, 'lluvia', 'Dolore odio quis ea soluta possimus praesentium a illo.', 'https://via.placeholder.com/640x480.png/002211?text=possimus', 4, '2022-01-20 09:06:39', '2022-01-18 07:26:11'),
(22, 6, 'luna', 'Eum totam qui sit.', 'https://via.placeholder.com/640x480.png/00ff55?text=sed', 5, '2022-01-20 09:06:39', '2022-01-19 16:53:38'),
(23, 4, 'luna', 'Illo sed eius sequi saepe.', 'https://via.placeholder.com/640x480.png/00aadd?text=odit', 5, '2022-01-20 09:06:39', '2022-01-18 00:29:59'),
(24, 5, 'lluvia', 'Id ut molestiae eum eligendi accusantium explicabo eos non.', 'https://via.placeholder.com/640x480.png/00dd11?text=quia', 1, '2022-01-20 09:06:39', '2022-01-18 12:20:54'),
(25, 4, 'volcan', 'Qui voluptas dolorum veniam omnis vero eum placeat.', 'https://via.placeholder.com/640x480.png/00aa77?text=iste', 3, '2022-01-20 09:06:39', '2022-01-18 21:54:57'),
(27, 2, 'volcan', 'Quidem laboriosam voluptas beatae sed qui ut cumque sed.', 'https://via.placeholder.com/640x480.png/000044?text=ut', 1, '2022-01-20 09:06:39', '2022-01-19 20:42:50'),
(29, 4, 'luna', 'Quibusdam aliquam tempore et vitae.', 'https://via.placeholder.com/640x480.png/003300?text=et', 2, '2022-01-20 09:06:39', '2022-01-18 16:12:06'),
(30, 3, 'volcan', 'Omnis dolores non reiciendis magnam consequatur ab.', 'https://via.placeholder.com/640x480.png/000000?text=omnis', 3, '2022-01-20 09:06:39', '2022-01-19 02:27:24'),
(31, 3, 'Ronaldo', 'La polémica de Cristiano Ronaldo en el United: lo sacaron del partido, armó una rabieta y así lo calmó su entrenador', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgVFhUYGBgaHBgYGRwaGBgYGBgaGBgZGhgYGhgcIS4lHB4rIRgaJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHjQrJCQ0NDQ0NDQ0NDQ0NDQ0NDE0NDQ0MTQ0NDE0NjQ0NDQ0NDE2NTQxMTQ0NDE0ND80PzQ2Mf/AABEIARMAtwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAEAQIDBQYAB//EADsQAAIBAgQEAwYFAwMEAwAAAAECAAMRBBIhMQVBUWEicYEGMpGhscETQlLR8BRiciOC4RaywvEVJNL/xAAaAQACAwEBAAAAAAAAAAAAAAABAgADBAUG/8QALREAAgIBAwMDAwIHAAAAAAAAAAECEQMEITESQVEFImETMnEzkRQjgaHR4fD/2gAMAwEAAhEDEQA/AKitipVYqvB3xXeAYjES9sVC1qkHLxheIZWxrJVaTo0gprJxTkAyYPGsY3LFEhCJ0vGihDaaSX8OFIgLRpy0wyQVV1h2HWPEVhSLFZY5RFZZYAhBjWMcRGvtK5DIHZogeRuY1WlRYEZpDUMXNIqjSEBqpgziT1Gg7tIKNDTpCzRJCCtUMha5hS0pJTwtzaOhWC06ZMLpYImXWF4aOks8PgB0iyY0Y2UFLh5khwhmqTBC20jrYKL1D9Bl3oWkZpy+r4TtK9sOb2ENitUCpYWzG19ANyx6KOZ+A6kRlTFKGC/mvlyjU36Ftl8tZc4n2PxrqHSmVAW25Dtm3sOltJnavB6yX/02FzlNtNL7aa/zaDqBRLVxtiDlVRtre50tceLa/n+81PiJVwuXMLC/hfW9vFcafbXfSVjUSrXaiRt4rNr3sxIkaVTm95uwWw9Rf3TboDCpMFGqo8Sp6B8yk+t/IWudd9NL76XhVR1Chs62JsdfduWCljsoIF7ki1xe0w4fW3/ddWBHRtr+Yli1YZVsb3zLqSBcZGAYjUE+KxGoKDfW562CjSYmi6asummtwRqLjaA1HkOH4ofCuoRQysPzqXUrmAAtc3sLgrfYXCkXmJ4elQtksjDQDQhm0JFlPhHiC7WvkGpa0l2EoHeMzQ9MAVszDQ7H8ptvY87EEdrScU1/SPhBQSqzyCpUlvVw6nlaU+OoFZKJYLVqQcvEqNILwBJGedIiZ0gC8VIXgKd2jCkP4YmsawUXWDw8t6ODkWCSXWHpxJMtggNMLIcRh7S7/DgmJpypsvUTOYijNT7IezqIBiay3c6op1CDk1ubHft5yuo4XO6qRoTr5DU/SbdaJ/DA25xraK5JWRNjLE6dh279zKurhVY3sO8M/AtIm0lEpN8lkYxXBXtwum1ropttptIq3s/Qf3qa/CXVPaMqQcdybeDHcU9jqTm6jLfQ20B9BMNxT2Wr0swRS4zDLY3JBvvtr16/Cex1ZTcRN7C2p1/4PyjRnJCSjE8nXVgMpuVyBi2qlVzLY6eIMot/iB1E0XD+IoUakzKn4jh2sWXMpqGoTcWIyqirbnraP4rg1JYDTML3AFiy5SWI9T85mrvoutgNLtsGzC9j2ckHlNKdlDRscIAWHhVVdmQqoNglN8RVVgLAEsv5r2JdCR4gSlbCZDlb3hbNZlYA3YWupIOqMP8AaZUYXFFQjMWIAqW0ziyBnsz2GumY6Nfw3AAEu8KoZMqIqgMi3sVIFSuC5ABtoTVIJJ0C8rXdMRgT0hyMrMdR01lixPMW894yqMwtHoSzF4tLGDXh/FFsTK68RosTFvOiXnQBNe1OG4BLGNZRJ8MbQip7l/gmlxQqTP4arLOhUiSNEEW6vI6khpPJHawJ6An4SnuX1sLw6tTWqS7AZRb1OtvOwHxmgbiqOgKOrKeYN/nPLvaCjRsVaoyHUk3OVmbVmN9N+R5Sn4PVrYdwQWNNiAGt4Dcj8w8N+1+ckmmtiqvduevNihteKGU6lh6m0qTTfJe4zWnnftG9Rny5j3Audu3T95VGnyWS24PWnqLa4Yab2I/gg39YhbKHF+l55twPhlZypFZlt+VD4lF7HY3B07S0xPBtbo5zCxu19xzFto0ox8ipvwbRn9ZScTDBs1ui6c76empEj4dxJr/h1NH6k6N/u5+dux1sWs6qB1y8oi9rJJdSMbxGiWVuZDPtre6gW0/xBt3mex2GAPpcegF/qfh8dbxTBvTuVY2PyNiG+RFvKUnEguUkbWJHUknW3cWB+E0xkmUSjRSf1RQXsdMw5A62AA/Ta7bbXlhgcToUsCoK5TofdAUDLa7aAkWO6DQ7ivdFK31uA19+ug+Zv5zsOlrtoCqnowJJbe/M5sunQR0xGX9R2LsW943Y9tSADrvp9IyobAyHC1hYsSbaDc2OUAX1J+vIQfGYq+0ui9iqS3KHizeIythmMa7QQiIx0JOizpAm5eMV7SeoIMyyCrdhuHxMucLXvM/h1lzghEkbMUG9y9w7wsQHDtC6YLEKNzoJTe5ocXRk+M8Aeo7t+QqQpIzDOSNLWNhlv111lz7O+zyZVR128VV1yqHTRVplAoBBAsL2IuzDnPQMPRVECgDzP7dZXYhgCUQAAak/qPX9pH7UZlUmCYlbkooGoubbAdAJkeI8IOdzp7tkubAt3Nj9DNelTx67kfGdi6CuLESlFx5V/wBN1MyOrojWYOSWspJJzIFG4UjQ8xLlatVXyA/ipye1z/vG6nTQgkbXHMbKngwDqoPS4vD0opbRQPQSy01QtU7RlBw8OL2F+vT15S4oIwUfW9/W/wC8O/pUY3y2PUTsWuXS0ra2D3KPioujdNbnW47iY/EXIsRawBNzyNjb4tNviQSpGmx09Ji8dTIa5tcAC2t2vb56a+UbFwVZVuUlZPCW+nMkX29RIqZFrWPPpoSGyk+RsdZpF9natVQzFaata7PpZh+ld2uPLz0g6ez9NsyUcWlSp+VCjIHN7lEdiVLHlyJ5jcWrJHixPpSatICqvemD1c2NraW0FukqsTWsLDeF8VeyoguLAnUFTyGoO2qsLHXSVTLL09ihrcHcSFlhTLInEISAidHFZ0gp6A9ORmlDSLxrJElKjbptP1MHopLPDwRFhlIyiUztw01IPR5Z8Kfx36An7feUivD+Fv4yP7T9ViOQmfDUGzTcXx5SgzJmLBcwA30389LzBH2yrnKqUXYkmwC2JtvvuJv8OmqsdTbwjudbwDFYN8+igAWva1tN/Lyhpy3ZyYtLZFFhPaUMp/qaL0SNmewHmCPvL/DVyURjchgDqOoiVMP2+/wiNVDAK1xY8jb49oGqGu0WKKCJG+kAauyC1797yBscAIkppBjFlujqBctaUeKxVyfPSQYnEs22kFRCNz/O0qlNvYZRS3CXxG0qeC4YGo75S7liF0uABYH5w1319Jbez7IiWB1AAtzZrbD+cxGi7VCOO9lHiHV3SlXuGql0Fr+BVuPS5Fjtv2lli+BUkWmiIu4F8ozNtqxA1POEYbh5YmrVQhszugO4zEnToAddYnE+JJTUO7CyBgNfec65V62ANz5wxj2LlKt/B5v7Wr/9qoNNMh06ui1G9czmUjCFYzFNUd6j+85LHtfYDsBYekGab47I5k3cm0QuJEyyZowiMhGQFZ0kyxY9C2egLFadaRu0xzkem0mJKh6ydTBUaTIZTZ11FJBAaGcJa9S39p+olazQvgb/AOsP8WkMupX8t/gl9sPaNqKkI2U6LfoNc1j30+cA4b7O4ytTSoa4TPlIU5jZSL3I5N2msx/D6IXO6K5sx8QQ5SQMpAYEcjp3lZh8at1XIQByuFG9tLfaWxpLdnnPc1tsAf8AxXEaBJSujgMAFJtcaa2YW9JDhPaFnqmm6ZKiHxhRcac+2/zmkRUaxtfW9ybm/XzkzogWygKD0FrmCXS1sFKS5AnreHXW+xt1kNOmDqb+WkfVc3sbCx6j7RKbjlYWmaW7LVsghVG0Frrbcf8AHlJEa/OMxlQEaRQFXiGubCWfC61BUzNVQOp2LC6C+ot+s6/IcpUU1LOQJIfZmggzal2N/E19+UaIaD+IcbRgWN3RQWBJKr6nczB8X4q9UlmPvaKo0VEBvoO5Hy8pc+0L2/0VGlgXtYeAbL5ki3oTymRrA5iSLX6bDsO01YY92ZM2S30obeIxnRrTSZxjRJxiiMgMS06SARJdRVZvnEgcQpkkFVbTnSTZ63TSSBw0mR4Mx1iq8qOonaCWePwFXLUU97fEED5kQM1Ix3kKcseqLj5PTcRh0dBmNtBKahw5M173A5etpQ/9RlVyE72vrvp223i4T2jAUm49TyJNzHtHmGnFtM1q0UA7ekCx1dbEAW87EeX/ABM3V9o7mwNxrexGt7akc9bx9DHlxdj4e4v567a6eUSTImFIGck6n0J25AchCFFh8oG/EEXQWA6jb4wGtxpFOhAlQ5fPVC9PvK/E4r4/WZ6rxfMdL/e/nDcEGdwDtv8AGBoNFlwxTnvz1vLY0s7gdNfhrH8PwWW5tC6NLxnyPntGjEDlUTI4/Clizndjc/YeQEz+NwfabrE0NNpS4vCR8c3ZxFkblbMU9O0jZZcY7CWN5XPTm+NtGlSTQKViAScpGmnLIxYJNDBOilJ0vUWU9SPR2SB4mWNd7SrrNMzxbHf0ua2BOIy8ndZA0x5I0z0GGXUiNmkL1Y9zBnMrLZIKfA/iqNcrD3WHLz7SlxvD8RTvnU5dsw1Q9NRsextNPwsaCanB4QPTcEXGgt10NxGXBwdbjim5VueR0y4284YmLe1rkfGa3H+yKMuZCQbnbmOWljc8pn6Psnimayo1v1N4V+f2gas5yklwA1Kz7ZtJNhsJcXY+U2HDvYlUF6jZ2HIHwD7tLN/Z9ANB+0VoPUZnhvDc5GUDzM13DeFqhDHxN12A8hz84/AcPCchy/n1lhy2goPVZM45wdNWPrHo1xFwq+P6xlygv7WDVqcrcRQl5iKZBIO40PpK6uJbhx7nnW+lmW4ph5Q1Kc1vEVuJma6amdrBguIks7igI05GyQ3JGMk1LToq/iJMBNOdCyk6P9AH1WayrUvBiIoMlCTNkxKKO7oc3UwZ1gtWWDpBHpzj51ues00/aAsIxaVzDTSkuHo6zKkXyy0EcPp2tNjwpf8ATbz+wlDgsPNLwsWUjvf+fCMkcbVz6kSYZgl0ItezD4kN9p2JxAVeWu3nAuKuSCUNmAOXz5TKYbjNWo4V9LaaRWzAoXuaZcUb3MIp1cxH8EBpWI3JPnJaK2a8BKLFljQkcrj1iObSBSIi2sdhWyuDbSMcxcO2/aDuO+Cx4pT0FQbHRux2Hx+0z+Keanh1UOpRtQ24MzPG8GaVQqRdTdkbfMotmB6MtxcdLHsOhp3GTOJrMLi3JcFBjn0lG66yxxj3gDT02DDUTh5J3IiKRjLJrRrCaFjFUgcrFkuWdD0D9ReJThKU5yrJ1nAz57PXYNI8ZA9ODtTELcwdjOTllbOxhk1EHqUpNhKEIpJeG4fD6ytIaWXagnCUrSxpvlv5Snfi1NSUTxsBc5fdUdWbYDyvFwXETUeotrBQlh/lnvfvoP5qY+HRizpxa69r4XcM/EveUeJwihybDUk95Z5j3kNfWZ7K+CCjUtz0ljRfSU7paHYd9PSSxWWC1e8VnvzgTA/zWKrw2SgwPEovYm3f57yAPeSYdTe1gBAEs8G2WxErPazi2apQpqdULVD1NhlH/l8IVj8YlCmXc2too5u3JV7/AE3nmGJ4lUesal/ESSTyGlgo7AaS/CpXfY52uyx6elcs1OJwyVjmpsqseR0U+Vvd+nlKnEYJ0OV1sdxqCCOoI0MDw2KYHcn9zymtwlRWUI2V7Abi9jbW3SdfD6nPDUZbr+5j0PpX8Z1NbV37GZNExhpN0mgq4RdlGU+pU/HUH+aQR6BBsRadPF6jDKrRZk9Dnje/+irXDsZ0tlS0SR+oJOiyHoUmrLU4Jo5cI01f9F2iNgwNToJ5+UmztvMjJPgmkR4e0vMdxCmm1j3O3pzMxnGfaJ2OVDYdefp0mabRs0+DNk7Uvks8RjEoggnM4B8I39TylRVxlXEHIPCu5tooHVjz2lbh6RdyL6kEk9ARv85a4NAwuL/hqSB/e3M9xK3Js6mPBjw8bvyw7DKqjKouBYkn8zC1j5DkJX4HElMUpv4amRD/ALzp658npeHvUsO5+QlVidzbRlOZb9b5l+Bt8JZj3tHD9cg4KGVLh7s1tZLXgNWryl3Uy1EWonuuoceTAG3zlLiqBvcShqjLGSkrBDV1tCaT6wb+mLeInXnJsPRJMUIaGnC8kp0CO8ssPhbxkJJ0V9JD0icU4qmHS76ufdQaFu/Ze/1Okf7QcZp4VcujVSPCl9gdmc8l6Dc/EjA16z1XLuSS3M/IAcgOktjBcy4KHLJkf08MW38dvyJxPiFTEvndtBooGgA6KP4TzjEo2HSSKlu5igdYzydonZ0HoEYv6mp3fjsh+DpnNfe23PU89JbU8TY2JPx+p5ynFSx0hQN9fmfrpKpSbds7Om0OHTRcMapN2Xy1cwAJ16jpyvJlOfwt7w90/Y9pSYetpoNOphiYjmdAOcMMjg7QMunTVDcXdDYjX+a9xOhoxNNxlqKSOV/tY3nSx5m3dlCg4qqZvOKcWo0B4jduQXU+vT1mK4p7RNUbLst9hsPPqZm62PLk6m+/7wd6tgTeCWRy2K9N6djw7vd+f8DeIcQZmtc9DK0mMqVLmLSUsQP53MSjoppbIOSqcmUaM5AJ/sFl+Zv8DLh8aFsqjQCwHYSlw5zVL8ht2AFhChzMlAfJP/WXveQ12zAEb8u/YwVV8JvziltLQrZ2hM2GGaDhNWmbj2Qxueh+Gd6bFfIE5h6akf7TLSphxm1G8xHs1xJaVXx6K4CsRyt7rW7ajyJnoVUCwYajcEG4I5ESS33PNZtJLTS6XuuzK6pggLkRMPhb2PWW1ZLgAc5ELLtF6VZQmx1LCACVntLx0YZMiAGs4OUbhF2Lt25AHc+RhXE+M06KZibsR4Vvqe56L3+887xtd6rl3PiY3PLy8gBsOUdNI16bQTz7t0vIOqFmLuS7k3LMbkk7n/mPZo+rbQSK0Vtvk9FgwY8EenGq/wC7nA3nAzoh2hNCIidfWFIRbU7chz/aCt+XzhFM+v0gYbJwxOp06CSpV2t/PKDrr+8cjAHS5Pz9ByiUBhaDW97H5/Hf4aTo1GA56/H76/GJAJ/QpFGma+052zA9vrEY6Ed4y3hbvaWoWREi31hNIWUnr4R67/zvHUkssdl0tIRKkOw62+ELc+GDUzrJqh0kI+SFvORyQxtpAjSJccM4/VoqEGVk5BgTa+4Ug6DtKy0Y40kEnjhNVJWjVr7ZuBrRU+TsP/EyPE+1VR1sqKl+fvt6XAA+BmZXaSDzkKFosCd9JNVYsczEknUkkkk9STvGU11vEzxyPFNPCpDam8baPMQLcxhjhGVjJJHVEgyIaxsqnvJKXKNxQ/0wehB+esbhjp6yAjLdoJvy9YqPy5c7fScCNSf/AHIBU3bmTYDkAIgwajC2mnzM6R0CSb32G97b7RIAFYG07yQLoPP6QYHlC/0y1lcXZKYhiiI0AWLS3krmQIdZKZCDbxQIwmPBkILGsYhMY7SEJEEfGIdI4NIQW0YG1jwZCD4pCBBa0dh0ZgGVKjBhdSKbkMOoOWxHcSFG2BUhmtkFrs4ZiqlANWuVIHcEcpZ8JwLhmV6bImlhUT8MB2JzZXq5VtpmK33sRu12UTBqdascU4NPz5A6yMmrKyf5Ky/9wEhDhhoQfIg/SaPiOI/CQPSsqNkVCPdLMTlvlYkeG9kYgkgaWJBzxxGcmozl2b3nZsxNr6X2AGtgLAcgIHGgaTWyzvhUvnf9hpW9MjqGEFwbXHoIRSqjLvpe8GpaOw5akeR1+8U3X7k/ITUew7/IRjG2Ubnc+sZUfkN9v/Uawu1hysPLleKW2TNVGmlydedgPue86OoMMxIXTYczp9J0ACuTW5hXMdhA6Z0EPwjKKilxdQy5hvdQwzD4XlpSpVGyxxHDmp0kqPcNVJKL/YoGZm7ksth0JPaAohY5VBZuigsfgNZ6Xxf2hwDJ48lbmqCnnN7dGAVT5kTLY32pc3XD0qdFNhYKz+mgVfgfOVqTfY5+DVZ5r9N3fL2SKv8A+JdLNWZaKn9Xicj+2mup+VucZiqq+6i2UfmaxqN/k2yj+1bDrfeBVXLMWZmZjuzEsx8ydTFB0j7m2MJX1TdvwuBkkEag5x0he2JykTkSVzBXMiAEKY9BI0MkWQiHCRucvi6An4SQHSMspsrMFRmRGJNgFZgrG/YEyLkXJLphJ+EzS4HBkIpIBKU8hJvmVlpqtRE6BmRQw5hj+pr3+B4Mn9P/AFDVGQWUMFVGBLZbKAVufEwG/pymVpcSZnKqiZCtR2ZgyuSEIVgL+FS7IMpufFyvlXXUaNUYemTUREqBEKEFv9TZxl52yE27cpfjipPc8fqJTxppbWM4tw00kFcViVZQbnR3D2Y3KZcoJP8AdqVvYbZ3HUEDGu6FnRGZg48DmmC2Yg++6oMlzpdRfNlUm79pcVVQotfxZBVq2ULYLRQ1MhA0IdRtyGUakXmb4hjxUoM13NlNM5lUMC+WiQ2UkAlaiEWJBCm2qsAJJRewcLlKCT/fv8bmdUWQDoFHwEYraqet1Pxv9/lH1dj5wZX+Rv8Ab7/KUt7nrNopLwFoLt2BuZHTqaMeVyfM3sJH+JqT0uflGUToB1sTEaGc/dSC6dQgfznOjGbW2g8tfjFhLbAqbbQtD9ZXUzrD6cczYZ2grNOlpgeCZ0VvxAtwDbIWtfX9QllS9lFO9Y+iD/8AUXqiiiWvwRdN8fBmGMUtNXW9k6SIzvWcKoLMQq3sOnUzJ2/hhUk+C7Dqcee3Dt8C3nAxIl7SGgVzpBzHsbyMmFAJ6e0kUyCm0lUyBRMkQprOE5mtAQmXEfhsKlswUWdeT08ysy67Hwgq24ZVPKbXAY5kXIqGqA2akQrE+Gy3yKLqy3AZWBykBSLKJhqH4bgmo4UXtkKVSX6lmRSFXsDmbX3dzftjqT0nTPTIdlZmcqlmQkq2WoFJPiI3HKPFuJ5/1CCy5LhHbh3xflA3GeKs5ZMwqOwdajXulMOpR0Sx8b5SQWuVG3iIzCncnWzEK2XMBazZTmW/k2oPc9TJ+JUWR2fQpUZ3VgQVuzFnTMNCQW06ix0NwtViMTyEEm0zbosOH6KfN1fw0Or1ATYQGpoex+8Y7HeNxLaAjb6HpFLsuVNP4HNV97rb66QhG+lvhKz8TXzt8jCVq3vbfYSNbFGLP7m2GGpYZr63sB9TFg6m/kNPXnFiUafqN72DUNh6Sxp8p06WsTTfYX1HFuiDKbaDkDy7iS8P4zXNemn4nhZ1BGVdQSNL2vOnSo5jhH3beS/9tHP4CC/vVAG7gBmsfUA+kxInToYcG70v9BfljI0xZ0dHTIW3iRJ0KEZIknT9/rOnQMKHvsZ6VW9msLkY/gjY7M45HoewnTpEcz1Gcl0U/Jn+NcCoI2IyU8uSjnWzPo2uu+uw0Okx+MQA6d+Z/UR9p06Rg08pOO7AkqHMb2NtiQCR6mWopC2wnTop0MHDA6yCzaSvw3v5eR3HWdOhRTqvuRXv73rJKH5vWdOjvg5Efvf5YXS9wTp06IzoLhfhH//Z', 4, '2022-01-20 09:06:48', '2022-01-20 09:06:48'),
(32, 1, 'Ronaldo', 'Cristiano Ronaldo recibe premio especial por récord de goles con selecciones', 'https://as01.epimg.net/futbol/imagenes/2022/01/17/internacional/1642448841_234651_1642449073_noticia_normal_recorte1.jpg', 4, '2022-01-20 09:08:29', '2022-01-20 09:08:29'),
(33, 6, 'Ronaldo', 'Cristiano Ronaldo ya no jugará con la selección portuguesa en esta fecha de Eliminatorias por una sanción', 'https://diariocorreo.pe/resizer/ccHj9HPQBQh_cUjp3Vft9flnwaQ=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/KJ3W7KY6NFEKFPMGXFLJNYTHPA.jpg', 4, '2022-01-20 09:10:30', '2022-01-20 09:10:30'),
(34, 3, 'Tormenta', 'La sorprendente relación entre el deshielo Ártico y las tormentas de arena del Sahara', 'https://www.lavanguardia.com/files/article_main_microformat/uploads/2020/12/04/5fcc3e5dc2824.jpeg', 6, '2022-01-20 10:56:15', '2022-01-20 10:56:15'),
(35, 5, 'Tormenta', 'Tormenta de arena en el Golfo Pérsico obliga a cierres portuarios y bloqueos de movilidad', 'https://t2.ev.ltmcdn.com/es/posts/7/8/7/como_se_forma_una_tormenta_de_arena_y_cuanto_dura_1787_600_square.jpg', 6, '2022-01-20 10:58:27', '2022-01-20 10:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

DROP TABLE IF EXISTS `news_categories`;
CREATE TABLE IF NOT EXISTS `news_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Entretenimiento', '2022-01-20 09:06:39', '2022-01-20 09:06:39'),
(2, 'Tecnología', '2022-01-20 09:06:39', '2022-01-20 09:06:39'),
(3, 'Salud', '2022-01-20 09:06:39', '2022-01-20 09:06:39'),
(4, 'Deportes', '2022-01-20 09:06:39', '2022-01-20 09:06:39'),
(5, 'Cultura', '2022-01-20 09:06:39', '2022-01-20 09:06:39'),
(6, 'Ciencia', '2022-01-20 09:06:39', '2022-01-20 09:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `web_sites`
--

DROP TABLE IF EXISTS `web_sites`;
CREATE TABLE IF NOT EXISTS `web_sites` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `web_site_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_sites`
--

INSERT INTO `web_sites` (`id`, `web_site_name`, `created_at`, `updated_at`) VALUES
(1, 'Diario el Tiempo', '2022-01-20 09:06:39', '2022-01-20 09:06:39'),
(2, 'El Heraldo', '2022-01-20 09:06:39', '2022-01-20 09:06:39'),
(3, 'CNN', '2022-01-20 09:06:39', '2022-01-20 09:06:39'),
(4, 'Univision Noticias', '2022-01-20 09:06:39', '2022-01-20 09:06:39'),
(5, 'El diario NY', '2022-01-20 09:06:39', '2022-01-20 09:06:39'),
(6, 'ESPN', '2022-01-20 09:06:39', '2022-01-20 09:06:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
