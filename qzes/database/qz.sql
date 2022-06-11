-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2022 a las 18:08:14
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `qz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `option`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'España', NULL, NULL, NULL, NULL),
(2, 1, 'Francia', NULL, NULL, NULL, NULL),
(3, 1, 'Estados Unidos', NULL, NULL, NULL, NULL),
(4, 1, 'Nueva Zelanda', NULL, NULL, NULL, NULL),
(5, 2, '1969', NULL, NULL, NULL, NULL),
(6, 2, '1962', NULL, NULL, NULL, NULL),
(7, 2, '1971', NULL, NULL, NULL, NULL),
(8, 2, '1959', NULL, NULL, NULL, NULL),
(9, 3, 'La Batalla de Constantinopla', NULL, NULL, NULL, NULL),
(10, 3, 'La Batalla de Waterloo', NULL, NULL, NULL, NULL),
(11, 3, 'La Batalla de Normandía', NULL, NULL, NULL, NULL),
(12, 3, 'La Batalla de Poitiers', NULL, NULL, NULL, NULL),
(13, 4, 'Segovia', NULL, NULL, NULL, NULL),
(14, 4, 'Suiza', NULL, NULL, NULL, NULL),
(15, 4, 'Venecia', NULL, NULL, NULL, NULL),
(16, 4, 'Murano', NULL, NULL, NULL, NULL),
(17, 5, '1994', NULL, NULL, NULL, NULL),
(18, 5, '1998', NULL, NULL, NULL, NULL),
(19, 5, '1990', NULL, NULL, NULL, NULL),
(20, 5, '1984', NULL, NULL, NULL, NULL),
(21, 6, 'Adolfo Suárez', NULL, NULL, NULL, NULL),
(22, 6, 'Felipe González', NULL, NULL, NULL, NULL),
(23, 6, 'José María Aznar', NULL, NULL, NULL, NULL),
(24, 6, 'Mariano Rajoy', NULL, NULL, NULL, NULL),
(25, 7, 'Jane Grey', NULL, NULL, NULL, NULL),
(26, 7, 'Mary Tudor', NULL, NULL, NULL, NULL),
(27, 7, 'Elizabeth I', NULL, NULL, NULL, NULL),
(28, 7, 'Catalina de Aragón', NULL, NULL, NULL, NULL),
(29, 8, 'Malinche', NULL, NULL, NULL, NULL),
(30, 8, 'Malina', NULL, NULL, NULL, NULL),
(31, 8, 'Herna', NULL, NULL, NULL, NULL),
(32, 8, 'Melisa', NULL, NULL, NULL, NULL),
(33, 9, '1994', NULL, NULL, NULL, NULL),
(34, 9, '1991', NULL, NULL, NULL, NULL),
(35, 9, '1899', NULL, NULL, NULL, NULL),
(36, 9, '1993', NULL, NULL, NULL, NULL),
(37, 10, 'La caída del imperio romano de Occidente, en el 476 d.C.', NULL, NULL, NULL, NULL),
(38, 10, 'Nacimiento de la escritura, en el 4000 a.C.', NULL, NULL, NULL, NULL),
(39, 10, 'Llegada de Colón a América, en el 1492', NULL, NULL, NULL, NULL),
(40, 10, 'La caída de Constantinopla, en el 1453', NULL, NULL, NULL, NULL),
(41, 11, 'Angola', NULL, NULL, NULL, NULL),
(42, 11, 'Benín', NULL, NULL, NULL, NULL),
(43, 11, 'Botsuana', NULL, NULL, NULL, NULL),
(44, 11, 'Liberia', NULL, NULL, NULL, NULL),
(45, 12, 'George Washington', NULL, NULL, NULL, NULL),
(46, 12, 'George Bush', NULL, NULL, NULL, NULL),
(47, 12, 'Barack Obama', NULL, NULL, NULL, NULL),
(48, 12, 'Donald Trump', NULL, NULL, NULL, NULL),
(49, 13, 'Yugoslavia', NULL, NULL, NULL, NULL),
(50, 13, 'Eslovaquia', NULL, NULL, NULL, NULL),
(51, 13, 'Hungría', NULL, NULL, NULL, NULL),
(52, 13, 'Austria', NULL, NULL, NULL, NULL),
(53, 14, 'Pinta', NULL, NULL, NULL, NULL),
(54, 14, 'Niña', NULL, NULL, NULL, NULL),
(55, 14, 'Colina', NULL, NULL, NULL, NULL),
(56, 14, 'Santa María', NULL, NULL, NULL, NULL),
(57, 15, 'La Gran Guerra', NULL, NULL, NULL, NULL),
(58, 15, 'Primera Guerra Mundial', NULL, NULL, NULL, NULL),
(59, 15, 'La Guerra Global', NULL, NULL, NULL, NULL),
(60, 15, 'La Guerra de las Bayonetas', NULL, NULL, NULL, NULL),
(61, 16, 'Bolivia', NULL, NULL, NULL, NULL),
(62, 16, 'Guyana', NULL, NULL, NULL, NULL),
(63, 16, 'Surinam', NULL, NULL, NULL, NULL),
(64, 16, 'Haití', NULL, NULL, NULL, NULL),
(65, 17, 'La epopeya de Gilgamesh', NULL, NULL, NULL, NULL),
(66, 17, 'La Eneida', NULL, NULL, NULL, NULL),
(67, 17, 'La Mahabharata', NULL, NULL, NULL, NULL),
(68, 17, 'La Ilíada y Odisea', NULL, NULL, NULL, NULL),
(69, 18, 'La Batalla de Trafalgar', NULL, NULL, NULL, NULL),
(70, 18, 'La Batalla de la Armada Invencible', NULL, NULL, NULL, NULL),
(71, 18, 'La Batalla de Yamen', NULL, NULL, NULL, NULL),
(72, 18, 'La Batalla del Nilo', NULL, NULL, NULL, NULL),
(73, 19, '7 de octubre de 1571', NULL, NULL, NULL, NULL),
(74, 19, '7 de julio de 1571', NULL, NULL, NULL, NULL),
(75, 19, '7 de julio de 1578', NULL, NULL, NULL, NULL),
(76, 19, '7 de octubre de 1569', NULL, NULL, NULL, NULL),
(77, 20, 'En el golfo de Patras', NULL, NULL, NULL, NULL),
(78, 20, 'En el golfo de Corinto', NULL, NULL, NULL, NULL),
(79, 20, 'En el golfo Sarónico', NULL, NULL, NULL, NULL),
(80, 20, 'En el golfo Criseo', NULL, NULL, NULL, NULL),
(81, 21, 'Manila', NULL, NULL, NULL, NULL),
(82, 21, 'Ilocos', NULL, NULL, NULL, NULL),
(83, 21, 'Caraga', NULL, NULL, NULL, NULL),
(84, 21, 'Dávao', NULL, NULL, NULL, NULL),
(85, 22, 'Amazonas', NULL, NULL, NULL, NULL),
(86, 22, 'Orinoco', NULL, NULL, NULL, NULL),
(87, 22, 'Congo', NULL, NULL, NULL, NULL),
(88, 22, 'Ebro', NULL, NULL, NULL, NULL),
(89, 23, 'Ecuador', NULL, NULL, NULL, NULL),
(90, 23, 'Brasil', NULL, NULL, NULL, NULL),
(91, 23, 'Bolivia', NULL, NULL, NULL, NULL),
(92, 23, 'Colombia', NULL, NULL, NULL, NULL),
(93, 24, 'Italia', NULL, NULL, NULL, NULL),
(94, 24, 'Francia', NULL, NULL, NULL, NULL),
(95, 24, 'Portugal', NULL, NULL, NULL, NULL),
(96, 24, 'Laponia', NULL, NULL, NULL, NULL),
(97, 25, 'Monte Elbrús', NULL, NULL, NULL, NULL),
(98, 25, 'Monte Dij-Tau', NULL, NULL, NULL, NULL),
(99, 25, 'Mont Blanc', NULL, NULL, NULL, NULL),
(100, 25, 'Teide', NULL, NULL, NULL, NULL),
(101, 26, 'Argentina', NULL, NULL, NULL, NULL),
(102, 26, 'Marruecos', NULL, NULL, NULL, NULL),
(103, 26, 'Estados Unidos', NULL, NULL, NULL, NULL),
(104, 26, 'Colombia', NULL, NULL, NULL, NULL),
(105, 27, 'Croacia', NULL, NULL, NULL, NULL),
(106, 27, 'Grecia', NULL, NULL, NULL, NULL),
(107, 27, 'Suecia', NULL, NULL, NULL, NULL),
(108, 27, 'Filipinas', NULL, NULL, NULL, NULL),
(109, 28, 'Índico', NULL, NULL, NULL, NULL),
(110, 28, 'Pacífico', NULL, NULL, NULL, NULL),
(111, 28, 'Atlántico', NULL, NULL, NULL, NULL),
(112, 28, 'Arábigo', NULL, NULL, NULL, NULL),
(113, 29, 'Meridiano de Greenwich', NULL, NULL, NULL, NULL),
(114, 29, 'Meridiano de Sándwich', NULL, NULL, NULL, NULL),
(115, 29, 'Trópico de Cáncer', NULL, NULL, NULL, NULL),
(116, 29, 'Trópico de Capricornio', NULL, NULL, NULL, NULL),
(117, 30, 'Hungría', NULL, NULL, NULL, NULL),
(118, 30, 'Polonia', NULL, NULL, NULL, NULL),
(119, 30, 'Austria', NULL, NULL, NULL, NULL),
(120, 30, 'Albania', NULL, NULL, NULL, NULL),
(121, 31, 'Argentina', NULL, NULL, NULL, NULL),
(122, 31, 'Chile', NULL, NULL, NULL, NULL),
(123, 31, 'Colombia', NULL, NULL, NULL, NULL),
(124, 31, 'Uruguay', NULL, NULL, NULL, NULL),
(125, 32, 'Francia', NULL, NULL, NULL, NULL),
(126, 32, 'Italia', NULL, NULL, NULL, NULL),
(127, 32, 'España', NULL, NULL, NULL, NULL),
(128, 32, 'Grecia', NULL, NULL, NULL, NULL),
(129, 33, '50', NULL, NULL, NULL, NULL),
(130, 33, '45', NULL, NULL, NULL, NULL),
(131, 33, '48', NULL, NULL, NULL, NULL),
(132, 33, '52', NULL, NULL, NULL, NULL),
(133, 34, 'Camboya', NULL, NULL, NULL, NULL),
(134, 34, 'Tailandia', NULL, NULL, NULL, NULL),
(135, 34, 'Laos', NULL, NULL, NULL, NULL),
(136, 34, 'Vietnam', NULL, NULL, NULL, NULL),
(137, 35, 'China', NULL, NULL, NULL, NULL),
(138, 35, 'India', NULL, NULL, NULL, NULL),
(139, 35, 'Estados Unidos', NULL, NULL, NULL, NULL),
(140, 35, 'Indonesia', NULL, NULL, NULL, NULL),
(141, 36, 'Montes Urales', NULL, NULL, NULL, NULL),
(142, 36, 'Montes Alpes', NULL, NULL, NULL, NULL),
(143, 36, 'Cordilleras Béticas', NULL, NULL, NULL, NULL),
(144, 36, 'Sistema Central', NULL, NULL, NULL, NULL),
(145, 37, 'Estados Unidos y Rusia', NULL, NULL, NULL, NULL),
(146, 37, 'Rusia y Canadá', NULL, NULL, NULL, NULL),
(147, 37, 'Estados Unidos y China', NULL, NULL, NULL, NULL),
(148, 37, 'Australia y China', NULL, NULL, NULL, NULL),
(149, 38, 'Inglés', NULL, NULL, NULL, NULL),
(150, 38, 'Chino mandarín', NULL, NULL, NULL, NULL),
(151, 38, 'Hindi', NULL, NULL, NULL, NULL),
(152, 38, 'Español', NULL, NULL, NULL, NULL),
(153, 39, 'China y Nepal', NULL, NULL, NULL, NULL),
(154, 39, 'China y Pakistán', NULL, NULL, NULL, NULL),
(155, 39, 'China y Bangladesh', NULL, NULL, NULL, NULL),
(156, 39, 'Nepal y Pakistán', NULL, NULL, NULL, NULL),
(157, 40, 'Picasso', NULL, NULL, NULL, NULL),
(158, 40, 'Edvard Munch', NULL, NULL, NULL, NULL),
(159, 40, 'Monet', NULL, NULL, NULL, NULL),
(160, 40, 'Da Vinci', NULL, NULL, NULL, NULL),
(161, 41, 'H.G. Wells', NULL, NULL, NULL, NULL),
(162, 41, 'Edgar Allan Poe', NULL, NULL, NULL, NULL),
(163, 41, 'Charles Dickens', NULL, NULL, NULL, NULL),
(164, 41, 'Stephen King', NULL, NULL, NULL, NULL),
(165, 42, 'Verdi', NULL, NULL, NULL, NULL),
(166, 42, 'Beethoven', NULL, NULL, NULL, NULL),
(167, 42, 'Vivaldi', NULL, NULL, NULL, NULL),
(168, 42, 'Wagner', NULL, NULL, NULL, NULL),
(169, 43, 'Vincent', NULL, NULL, NULL, NULL),
(170, 43, 'Federic', NULL, NULL, NULL, NULL),
(171, 43, 'Albert', NULL, NULL, NULL, NULL),
(172, 43, 'Richard', NULL, NULL, NULL, NULL),
(173, 44, 'De cuerda', NULL, NULL, NULL, NULL),
(174, 44, 'De percusión', NULL, NULL, NULL, NULL),
(175, 44, 'De viento', NULL, NULL, NULL, NULL),
(176, 44, 'Electrófono', NULL, NULL, NULL, NULL),
(177, 45, 'Platón', NULL, NULL, NULL, NULL),
(178, 45, 'Sócrates', NULL, NULL, NULL, NULL),
(179, 45, 'Descartes', NULL, NULL, NULL, NULL),
(180, 45, 'Aristóteles', NULL, NULL, NULL, NULL),
(181, 46, 'Camilo José Cela', NULL, NULL, NULL, NULL),
(182, 46, 'Arturo Pérez Reverte', NULL, NULL, NULL, NULL),
(183, 46, 'Nacho Carretero', NULL, NULL, NULL, NULL),
(184, 46, 'Rosa Montero', NULL, NULL, NULL, NULL),
(185, 47, 'El acueducto', NULL, NULL, NULL, NULL),
(186, 47, 'El puente', NULL, NULL, NULL, NULL),
(187, 47, 'El casco antiguo', NULL, NULL, NULL, NULL),
(188, 47, 'El Alcázar', NULL, NULL, NULL, NULL),
(189, 48, 'Lorca', NULL, NULL, NULL, NULL),
(190, 48, 'Machado', NULL, NULL, NULL, NULL),
(191, 48, 'Ruben Darío', NULL, NULL, NULL, NULL),
(192, 48, 'Benedetti', NULL, NULL, NULL, NULL),
(193, 49, 'Shakespeare', NULL, NULL, NULL, NULL),
(194, 49, 'Arthur Miller', NULL, NULL, NULL, NULL),
(195, 49, 'Oscar Wilde', NULL, NULL, NULL, NULL),
(196, 49, 'Angélica Liddell', NULL, NULL, NULL, NULL),
(197, 50, 'Rocinante', NULL, NULL, NULL, NULL),
(198, 50, 'Pegaso', NULL, NULL, NULL, NULL),
(199, 50, 'Bucéfalo', NULL, NULL, NULL, NULL),
(200, 50, 'Troya', NULL, NULL, NULL, NULL),
(201, 51, 'Cervantes', NULL, NULL, NULL, NULL),
(202, 51, 'Juan Boscán', NULL, NULL, NULL, NULL),
(203, 51, 'Garcilaso de la Vega', NULL, NULL, NULL, NULL),
(204, 51, 'Lope de Rueda', NULL, NULL, NULL, NULL),
(205, 52, 'Leviatán', NULL, NULL, NULL, NULL),
(206, 52, 'Basilisco', NULL, NULL, NULL, NULL),
(207, 52, 'Cíclope', NULL, NULL, NULL, NULL),
(208, 52, 'Centauro', NULL, NULL, NULL, NULL),
(209, 53, '“El señor de las moscas”', NULL, NULL, NULL, NULL),
(210, 53, '“¿Sueñan los robots con ovejas eléctricas?”', NULL, NULL, NULL, NULL),
(211, 53, '“No es país para viejos”', NULL, NULL, NULL, NULL),
(212, 53, '“Stardust”', NULL, NULL, NULL, NULL),
(213, 54, 'Emilio Salgari', NULL, NULL, NULL, NULL),
(214, 54, 'Luigia Gradara,', NULL, NULL, NULL, NULL),
(215, 54, 'Luigi Salgari', NULL, NULL, NULL, NULL),
(216, 54, 'Julio Verne', NULL, NULL, NULL, NULL),
(217, 55, 'Johannes Vermeer', NULL, NULL, NULL, NULL),
(218, 55, 'Caravaggio', NULL, NULL, NULL, NULL),
(219, 55, 'Catharina Bolenes', NULL, NULL, NULL, NULL),
(220, 55, 'Van Gogh', NULL, NULL, NULL, NULL),
(221, 56, 'Anacreonte', NULL, NULL, NULL, NULL),
(222, 56, 'Safo de Mitilene', NULL, NULL, NULL, NULL),
(223, 56, 'Pindaro', NULL, NULL, NULL, NULL),
(224, 56, 'Eurípides', NULL, NULL, NULL, NULL),
(225, 57, 'Diana Krall', NULL, NULL, NULL, NULL),
(226, 57, 'Amy Winehouse', NULL, NULL, NULL, NULL),
(227, 57, 'Ella Firzgeral', NULL, NULL, NULL, NULL),
(228, 57, 'Etta James', NULL, NULL, NULL, NULL),
(229, 58, 'John Kennedy Toole', NULL, NULL, NULL, NULL),
(230, 58, 'Walker Percy', NULL, NULL, NULL, NULL),
(231, 58, 'Thelma Toole', NULL, NULL, NULL, NULL),
(232, 58, 'Franz Kafka', NULL, NULL, NULL, NULL),
(233, 59, 'Picasso', NULL, NULL, NULL, NULL),
(234, 59, 'Edvard Munch', NULL, NULL, NULL, NULL),
(235, 59, 'Monet', NULL, NULL, NULL, NULL),
(236, 59, 'Da Vinci', NULL, NULL, NULL, NULL),
(237, 60, 'Julio', NULL, NULL, NULL, NULL),
(238, 60, 'Agosto', NULL, NULL, NULL, NULL),
(239, 60, 'Diciembre', NULL, NULL, NULL, NULL),
(240, 60, 'Marzo', NULL, NULL, NULL, NULL),
(241, 61, 'Derecho', NULL, NULL, NULL, NULL),
(242, 61, 'Izquierdo', NULL, NULL, NULL, NULL),
(243, 61, 'El hígado no existe', NULL, NULL, NULL, NULL),
(244, 61, 'Forma parte de la cabeza', NULL, NULL, NULL, NULL),
(245, 62, '13', NULL, NULL, NULL, NULL),
(246, 62, '14', NULL, NULL, NULL, NULL),
(247, 62, '15', NULL, NULL, NULL, NULL),
(248, 62, '16', NULL, NULL, NULL, NULL),
(249, 63, '118', NULL, NULL, NULL, NULL),
(250, 63, '124', NULL, NULL, NULL, NULL),
(251, 63, '115', NULL, NULL, NULL, NULL),
(252, 63, '120', NULL, NULL, NULL, NULL),
(253, 64, 'Nitrógeno', NULL, NULL, NULL, NULL),
(254, 64, 'Oxígeno', NULL, NULL, NULL, NULL),
(255, 64, 'Argón', NULL, NULL, NULL, NULL),
(256, 64, 'Ozono', NULL, NULL, NULL, NULL),
(257, 65, 'Adenina, timina, guanina y citosina', NULL, NULL, NULL, NULL),
(258, 65, 'Adenina, uracilo, guanina y citosina', NULL, NULL, NULL, NULL),
(259, 65, 'Adenina, timina, uracilo y citosina', NULL, NULL, NULL, NULL),
(260, 65, 'Adenina, timina, guanina y uracilo', NULL, NULL, NULL, NULL),
(261, 66, '300.000 kilómetros por segundo', NULL, NULL, NULL, NULL),
(262, 66, '400.000 kilómetros por segundo', NULL, NULL, NULL, NULL),
(263, 66, '500.000 kilómetros por segundo', NULL, NULL, NULL, NULL),
(264, 66, '600.000 kilómetros por segundo', NULL, NULL, NULL, NULL),
(265, 67, 'Olfato', NULL, NULL, NULL, NULL),
(266, 67, 'Oído', NULL, NULL, NULL, NULL),
(267, 67, 'Tacto', NULL, NULL, NULL, NULL),
(268, 67, 'Vista', NULL, NULL, NULL, NULL),
(269, 68, 'Hidrógeno', NULL, NULL, NULL, NULL),
(270, 68, 'Oxígeno', NULL, NULL, NULL, NULL),
(271, 68, 'Carbono', NULL, NULL, NULL, NULL),
(272, 68, 'Nitrógeno', NULL, NULL, NULL, NULL),
(273, 69, 'División celular', NULL, NULL, NULL, NULL),
(274, 69, 'Mitosis', NULL, NULL, NULL, NULL),
(275, 69, 'Meiosis', NULL, NULL, NULL, NULL),
(276, 69, 'Ciclo celular', NULL, NULL, NULL, NULL),
(277, 70, 'Procariotas', NULL, NULL, NULL, NULL),
(278, 70, 'Eucariotas', NULL, NULL, NULL, NULL),
(279, 70, 'Protista', NULL, NULL, NULL, NULL),
(280, 70, 'Vegetal', NULL, NULL, NULL, NULL),
(281, 71, 'Uva', NULL, NULL, NULL, NULL),
(282, 71, 'Agave', NULL, NULL, NULL, NULL),
(283, 71, 'Cebada', NULL, NULL, NULL, NULL),
(284, 71, 'Caña de azúcar', NULL, NULL, NULL, NULL),
(285, 72, 'Gregor Mendel', NULL, NULL, NULL, NULL),
(286, 72, 'Alfred Russell Wallace', NULL, NULL, NULL, NULL),
(287, 72, 'Louis Pasteur', NULL, NULL, NULL, NULL),
(288, 72, 'Alexander Fleming', NULL, NULL, NULL, NULL),
(289, 73, 'Silúrico', NULL, NULL, NULL, NULL),
(290, 73, 'Cámbrico', NULL, NULL, NULL, NULL),
(291, 73, 'Ordovícico', NULL, NULL, NULL, NULL),
(292, 73, 'Carbonífero', NULL, NULL, NULL, NULL),
(293, 74, 'Hematología', NULL, NULL, NULL, NULL),
(294, 74, 'Nefrología', NULL, NULL, NULL, NULL),
(295, 74, 'Reumatología', NULL, NULL, NULL, NULL),
(296, 74, 'Oncología', NULL, NULL, NULL, NULL),
(297, 75, 'Enero', NULL, NULL, NULL, NULL),
(298, 75, 'Febrero', NULL, NULL, NULL, NULL),
(299, 75, 'Marzo', NULL, NULL, NULL, NULL),
(300, 75, 'Abril', NULL, NULL, NULL, NULL),
(301, 76, 'Ácido desoxirribonucleico', NULL, NULL, NULL, NULL),
(302, 76, 'Ácido riboso', NULL, NULL, NULL, NULL),
(303, 76, 'Adenina Dioxina Nadina', NULL, NULL, NULL, NULL),
(304, 76, 'Ácido salicílico', NULL, NULL, NULL, NULL),
(305, 77, 'Oxígeno', NULL, NULL, NULL, NULL),
(306, 77, 'Helio', NULL, NULL, NULL, NULL),
(307, 77, 'Hidrógeno', NULL, NULL, NULL, NULL),
(308, 77, 'Carbono', NULL, NULL, NULL, NULL),
(309, 78, 'Rana dorada', NULL, NULL, NULL, NULL),
(310, 78, 'Avispa de mar', NULL, NULL, NULL, NULL),
(311, 78, 'Serpiente marina', NULL, NULL, NULL, NULL),
(312, 78, 'Viuda negra', NULL, NULL, NULL, NULL),
(313, 79, '4.543 millones de años', NULL, NULL, NULL, NULL),
(314, 79, '5.543 millones de años', NULL, NULL, NULL, NULL),
(315, 79, '3.543 millones de años', NULL, NULL, NULL, NULL),
(316, 79, '4.986 millones de años', NULL, NULL, NULL, NULL),
(317, 80, 'Charles Chaplin', NULL, NULL, NULL, NULL),
(318, 80, 'Paulette Goddard', NULL, NULL, NULL, NULL),
(319, 80, 'Harold Lloyd', NULL, NULL, NULL, NULL),
(320, 80, 'Charley Bowers', NULL, NULL, NULL, NULL),
(321, 81, 'Rebecca Welles', NULL, NULL, NULL, NULL),
(322, 81, 'Joseph Cotten', NULL, NULL, NULL, NULL),
(323, 81, 'Orson Welles', NULL, NULL, NULL, NULL),
(324, 81, 'H.G. Wells', NULL, NULL, NULL, NULL),
(325, 82, 'Cenicienta', NULL, NULL, NULL, NULL),
(326, 82, 'Bambi', NULL, NULL, NULL, NULL),
(327, 82, 'Rey León', NULL, NULL, NULL, NULL),
(328, 82, 'Blancanieves', NULL, NULL, NULL, NULL),
(329, 83, 'Quincy Jones', NULL, NULL, NULL, NULL),
(330, 83, 'Beyoncé', NULL, NULL, NULL, NULL),
(331, 83, 'Vince Gill', NULL, NULL, NULL, NULL),
(332, 83, 'Georg Solti', NULL, NULL, NULL, NULL),
(333, 84, 'Sarabi', NULL, NULL, NULL, NULL),
(334, 84, 'Scar', NULL, NULL, NULL, NULL),
(335, 84, 'Nala', NULL, NULL, NULL, NULL),
(336, 84, 'Mufasa', NULL, NULL, NULL, NULL),
(337, 85, 'AC/DC', NULL, NULL, NULL, NULL),
(338, 85, 'Slipknot', NULL, NULL, NULL, NULL),
(339, 85, 'Iron Maiden', NULL, NULL, NULL, NULL),
(340, 85, 'Metallica', NULL, NULL, NULL, NULL),
(341, 86, 'Rubí', NULL, NULL, NULL, NULL),
(342, 86, 'Esmeralda', NULL, NULL, NULL, NULL),
(343, 86, 'Diamante', NULL, NULL, NULL, NULL),
(344, 86, 'Zafiro', NULL, NULL, NULL, NULL),
(345, 87, '2010', NULL, NULL, NULL, NULL),
(346, 87, '2013', NULL, NULL, NULL, NULL),
(347, 87, '2021', NULL, NULL, NULL, NULL),
(348, 87, '2018', NULL, NULL, NULL, NULL),
(349, 88, 'Boly Street', NULL, NULL, NULL, NULL),
(350, 88, 'Berry Street', NULL, NULL, NULL, NULL),
(351, 88, 'Baker Street', NULL, NULL, NULL, NULL),
(352, 88, 'Bethel Street', NULL, NULL, NULL, NULL),
(353, 89, 'Zelda', NULL, NULL, NULL, NULL),
(354, 89, 'Ganondorf', NULL, NULL, NULL, NULL),
(355, 89, 'Link', NULL, NULL, NULL, NULL),
(356, 89, 'Epona', NULL, NULL, NULL, NULL),
(357, 90, 'Frank Miller', NULL, NULL, NULL, NULL),
(358, 90, 'Dave Gibbons', NULL, NULL, NULL, NULL),
(359, 90, 'Grant Morrison', NULL, NULL, NULL, NULL),
(360, 90, 'Alan Moore', NULL, NULL, NULL, NULL),
(361, 91, 'Jim Parsons', NULL, NULL, NULL, NULL),
(362, 91, 'Simon Helberg', NULL, NULL, NULL, NULL),
(363, 91, 'Johnny Galecki', NULL, NULL, NULL, NULL),
(364, 91, 'Will Wheaton', NULL, NULL, NULL, NULL),
(365, 92, 'George Lazenby', NULL, NULL, NULL, NULL),
(366, 92, 'Roger Moore', NULL, NULL, NULL, NULL),
(367, 92, 'Pierce Brosnan', NULL, NULL, NULL, NULL),
(368, 92, 'Sean Connery', NULL, NULL, NULL, NULL),
(369, 93, 'Melodías de Broadway', NULL, NULL, NULL, NULL),
(370, 93, 'Grand Hotel', NULL, NULL, NULL, NULL),
(371, 93, 'Alas', NULL, NULL, NULL, NULL),
(372, 93, 'Lo que el viento se llevó', NULL, NULL, NULL, NULL),
(373, 94, 'Gorillaz', NULL, NULL, NULL, NULL),
(374, 94, 'Daft Punk', NULL, NULL, NULL, NULL),
(375, 94, 'The Weekend', NULL, NULL, NULL, NULL),
(376, 94, 'The Chemical Brothers', NULL, NULL, NULL, NULL),
(377, 95, 'Wismichu', NULL, NULL, NULL, NULL),
(378, 95, 'Auronplay', NULL, NULL, NULL, NULL),
(379, 95, 'IlloJuan', NULL, NULL, NULL, NULL),
(380, 95, 'El Rubius', NULL, NULL, NULL, NULL),
(381, 96, 'Bumblebee', NULL, NULL, NULL, NULL),
(382, 96, 'Optimus Prime', NULL, NULL, NULL, NULL),
(383, 96, 'Ironhide', NULL, NULL, NULL, NULL),
(384, 96, 'Ratchet', NULL, NULL, NULL, NULL),
(385, 97, 'Milú', NULL, NULL, NULL, NULL),
(386, 97, 'Bolt', NULL, NULL, NULL, NULL),
(387, 97, 'Snoopy', NULL, NULL, NULL, NULL),
(388, 97, 'Dug', NULL, NULL, NULL, NULL),
(389, 98, 'Chuck Palahniuk', NULL, NULL, NULL, NULL),
(390, 98, 'David Fincher', NULL, NULL, NULL, NULL),
(391, 98, 'Edward Norton', NULL, NULL, NULL, NULL),
(392, 98, 'Carmeron Stewart', NULL, NULL, NULL, NULL),
(393, 99, 'Audrey Hepburn', NULL, NULL, NULL, NULL),
(394, 99, 'Andrea Dotti', NULL, NULL, NULL, NULL),
(395, 99, 'Julie Andrews', NULL, NULL, NULL, NULL),
(396, 99, 'Sophia Loren', NULL, NULL, NULL, NULL),
(397, 100, 'Lawrence Doherty', NULL, NULL, NULL, NULL),
(398, 100, 'Yvonne Prévost', NULL, NULL, NULL, NULL),
(399, 100, 'Charlotte Cooper', NULL, NULL, NULL, NULL),
(400, 100, 'Martina Navrátilová', NULL, NULL, NULL, NULL),
(401, 101, 'Judokas', NULL, NULL, NULL, NULL),
(402, 101, 'Judines', NULL, NULL, NULL, NULL),
(403, 101, 'Judistas', NULL, NULL, NULL, NULL),
(404, 101, 'Judones', NULL, NULL, NULL, NULL),
(405, 102, 'Amarillo, azul, negro, rojo y verde', NULL, NULL, NULL, NULL),
(406, 102, 'Amarillo, morado, negro, rojo y verde', NULL, NULL, NULL, NULL),
(407, 102, 'Amarillo, azul, morado, rojo y verde', NULL, NULL, NULL, NULL),
(408, 102, 'Amarillo, azul, negro, rojo y blanco', NULL, NULL, NULL, NULL),
(409, 103, 'Atletismo', NULL, NULL, NULL, NULL),
(410, 103, 'Ciclismo', NULL, NULL, NULL, NULL),
(411, 103, 'Halterofilia', NULL, NULL, NULL, NULL),
(412, 103, 'Waterpolo', NULL, NULL, NULL, NULL),
(413, 104, 'Inglaterra', NULL, NULL, NULL, NULL),
(414, 104, 'Grecia', NULL, NULL, NULL, NULL),
(415, 104, 'Roma', NULL, NULL, NULL, NULL),
(416, 104, 'India', NULL, NULL, NULL, NULL),
(417, 105, 'Justin Gatlin', NULL, NULL, NULL, NULL),
(418, 105, 'Johan Blake', NULL, NULL, NULL, NULL),
(419, 105, 'Usain Bolt', NULL, NULL, NULL, NULL),
(420, 105, 'Asafa Powell', NULL, NULL, NULL, NULL),
(421, 106, 'Thomas Gravessen', NULL, NULL, NULL, NULL),
(422, 106, 'Peter Gravessen', NULL, NULL, NULL, NULL),
(423, 106, 'Albert Gravessen', NULL, NULL, NULL, NULL),
(424, 106, 'George Gravessen', NULL, NULL, NULL, NULL),
(425, 107, 'Cassius Clay', NULL, NULL, NULL, NULL),
(426, 107, 'Mike Tyson', NULL, NULL, NULL, NULL),
(427, 107, 'George Foreman', NULL, NULL, NULL, NULL),
(428, 107, 'Joe Frazier', NULL, NULL, NULL, NULL),
(429, 108, 'Valentino Rossi', NULL, NULL, NULL, NULL),
(430, 108, 'Sebastian Vettel', NULL, NULL, NULL, NULL),
(431, 108, 'Marc Márquez', NULL, NULL, NULL, NULL),
(432, 108, 'Jorge Lorenzo', NULL, NULL, NULL, NULL),
(433, 109, 'New York Yankees', NULL, NULL, NULL, NULL),
(434, 109, 'New York Mets', NULL, NULL, NULL, NULL),
(435, 109, 'Boston Red Sox', NULL, NULL, NULL, NULL),
(436, 109, 'San Francisco Giants', NULL, NULL, NULL, NULL),
(437, 110, 'Miroslav Klose', NULL, NULL, NULL, NULL),
(438, 110, 'Toni Kroos', NULL, NULL, NULL, NULL),
(439, 110, 'Lukas Podolski', NULL, NULL, NULL, NULL),
(440, 110, 'Philipp Lahm', NULL, NULL, NULL, NULL),
(441, 111, 'Los Boston Celtics', NULL, NULL, NULL, NULL),
(442, 111, 'Los Boston Bruins', NULL, NULL, NULL, NULL),
(443, 111, 'Los Boston Red Sox', NULL, NULL, NULL, NULL),
(444, 111, 'Los Brooklyn Nets', NULL, NULL, NULL, NULL),
(445, 112, 'Junko Tabei', NULL, NULL, NULL, NULL),
(446, 112, 'Yasuko Namba', NULL, NULL, NULL, NULL),
(447, 112, 'Bachendri Pal', NULL, NULL, NULL, NULL),
(448, 112, 'Masanobu Tabei', NULL, NULL, NULL, NULL),
(449, 113, 'Real Madrid', NULL, NULL, NULL, NULL),
(450, 113, 'Los Angeles Galaxy', NULL, NULL, NULL, NULL),
(451, 113, 'Preston North End', NULL, NULL, NULL, NULL),
(452, 113, 'Milan', NULL, NULL, NULL, NULL),
(453, 114, '6', NULL, NULL, NULL, NULL),
(454, 114, '7', NULL, NULL, NULL, NULL),
(455, 114, '8', NULL, NULL, NULL, NULL),
(456, 114, '12', NULL, NULL, NULL, NULL),
(457, 115, '2', NULL, NULL, NULL, NULL),
(458, 115, '3', NULL, NULL, NULL, NULL),
(459, 115, '4', NULL, NULL, NULL, NULL),
(460, 115, '5', NULL, NULL, NULL, NULL),
(461, 116, 'Alemania', NULL, NULL, NULL, NULL),
(462, 116, 'Italia', NULL, NULL, NULL, NULL),
(463, 116, 'Brasil', NULL, NULL, NULL, NULL),
(464, 116, 'Argentina', NULL, NULL, NULL, NULL),
(465, 117, 'Fausto Coppi', NULL, NULL, NULL, NULL),
(466, 117, 'Eddy Merckx', NULL, NULL, NULL, NULL),
(467, 117, 'Gino Bartali', NULL, NULL, NULL, NULL),
(468, 117, 'Felice Gimondi', NULL, NULL, NULL, NULL),
(469, 118, 'Valencia', NULL, NULL, NULL, NULL),
(470, 118, 'Barcelona', NULL, NULL, NULL, NULL),
(471, 118, 'Sevilla', NULL, NULL, NULL, NULL),
(472, 118, 'Madrid', NULL, NULL, NULL, NULL),
(473, 119, 'Muay thai', NULL, NULL, NULL, NULL),
(474, 119, 'King Boxing', NULL, NULL, NULL, NULL),
(475, 119, 'Boxeo tailandés', NULL, NULL, NULL, NULL),
(476, 119, 'Boxeo', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `icon`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ciencias', 'preguntas relacionadas con la ciencia', 'ciencias.png', '2022-06-11 14:03:00', '2022-06-11 14:03:00', NULL),
(2, 'geografía', 'preguntas relacionadas con la geografía', 'geografia.png', '2022-06-11 14:03:00', '2022-06-11 14:03:00', NULL),
(3, 'arte', 'preguntas relacionadas con el arte', 'arte.png', '2022-06-11 14:03:00', '2022-06-11 14:03:00', NULL),
(4, 'deporte', 'preguntas relacionadas con el deporte', 'deporte.png', '2022-06-11 14:03:00', '2022-06-11 14:03:00', NULL),
(5, 'historia', 'preguntas relacionadas con la historia', 'historia.png', '2022-06-11 14:03:00', '2022-06-11 14:03:00', NULL),
(6, 'entretenimiento', 'preguntas relacionadas con el entretenimiento', 'entretenimiento.png', '2022-06-11 14:03:00', '2022-06-11 14:03:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(81, '2014_10_12_000000_create_users_table', 1),
(82, '2014_10_12_100000_create_password_resets_table', 1),
(83, '2019_08_19_000000_create_failed_jobs_table', 1),
(84, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(85, '2022_05_15_161410_create_table_categories', 1),
(86, '2022_05_15_161444_create_table_questions', 1),
(87, '2022_05_15_161510_create_table_answers', 1),
(88, '2022_05_15_161540_create_table_useranswers', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`, `category_id`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '¿Cuál fue el primer país en aprobar el sufragio femenino?', 'Nueva Zelanda', 5, 'votofemenino.png', NULL, NULL, NULL),
(2, '¿En qué año llegó el hombre a la Luna?', '1969', 5, 'hombreluna.png', NULL, NULL, NULL),
(3, '¿Qué importante batalla tuvo lugar en 1815?', 'La Batalla de Waterloo', 5, 'batalla-waterloo.jpg', NULL, NULL, NULL),
(4, '¿Cuál era la ciudad hogar de Marco Polo?', 'Venecia', 5, 'polo_marco.jpg', NULL, NULL, NULL),
(5, '¿En qué año tuvo lugar el genocidio de Ruanda?', '1994', 5, 'genocidioruanda.jpg', NULL, NULL, NULL),
(6, '¿Quién fue el primer presidente de la democracia española después del franquismo?', 'Adolfo Suárez', 5, 'voto.png', NULL, NULL, NULL),
(7, '¿Qué reina británica fue hija de los Reyes Católicos?', 'Catalina de Aragón', 5, 'reyescatolicos.jpg', NULL, NULL, NULL),
(8, '¿Por qué nombre se conocía a la traductora e intérprete del conquistador Hernán Cortés en tierras aztecas?', 'Malinche', 5, 'cortes_hernan_4.jpg', NULL, NULL, NULL),
(9, '¿En qué año se disolvió la Unión Soviética?', '1991', 5, 'urss.png', NULL, NULL, NULL),
(10, '¿Qué suceso marca el final de la Edad Antigua y el inicio de la Edad Media?', 'La caída del imperio romano de Occidente, en el 476 d.C.', 5, 'Edad-Media.jpg', NULL, NULL, NULL),
(11, '¿Qué país africano fue fundado en 1847 por esclavos americanos liberados?', 'Liberia', 5, 'liberiawomen1910.jpg', NULL, NULL, NULL),
(12, '¿Quién fue el primer presidente de los Estados Unidos?', 'George Washington', 5, 'banderaEEUU.jpg', NULL, NULL, NULL),
(13, '¿De qué país se independizó Eslovenia?', 'Yugoslavia', 5, 'eslovenia.jpg', NULL, NULL, NULL),
(14, '¿Qué carabela no regresó del primer viaje de Colón al Nuevo Mundo?', 'Santa María', 5, 'las-3-carabelas-colon.jpg', NULL, NULL, NULL),
(15, '¿Cómo se conocía la Primera Guerra Mundial antes de que estallara la segunda?', 'La Gran Guerra', 5, 'Gran-Guerra1.jpg', NULL, NULL, NULL),
(16, '¿Cuál fue el segundo país americano en conseguir la independencia?', 'Haití', 5, 'Battle_for_Palm_Tree_Hill.jpg', NULL, NULL, NULL),
(17, '¿Cuál es la narración épica más antigua de la historia?', 'La epopeya de Gilgamesh', 5, 'epopeya.jpg', NULL, NULL, NULL),
(18, '¿Qué batalla marítima tuvo lugar en el año 1805?', 'La Batalla de Trafalgar', 5, 'Batalla-de-Trafalgar.jpg', NULL, NULL, NULL),
(19, '¿En qué fecha tuvo lugar la Batalla de Lepanto?', '7 de octubre de 1571', 5, 'lepanto1_00c37eb8_1200x630.jpg', NULL, NULL, NULL),
(20, '¿Dónde tuvo lugar la Batalla de Lepanto?', 'En el golfo de Patras', 5, 'batallalepanto.jpeg', NULL, NULL, NULL),
(21, '¿Cuál es la capital de Filipinas?', 'Manila', 2, 'filipinas.jpg', NULL, NULL, NULL),
(22, '¿Cuál es el río más caudaloso del mundo?', 'Amazonas', 2, 'rio-amazonas.jpg', NULL, NULL, NULL),
(23, '¿Qué país está entre Perú y Colombia?', 'Ecuador', 2, 'ecuador.png', NULL, NULL, NULL),
(24, '¿En qué país se encuentra el río Po?', 'Italia', 2, 'Torino-po.jpg', NULL, NULL, NULL),
(25, '¿Cuál es la montaña más alta de Europa?', 'Monte Elbrús', 2, 'Elbrus.jpg', NULL, NULL, NULL),
(26, '¿Dónde se encuentra la Casa Rosada?', 'Argentina', 2, 'casarosada.png', NULL, NULL, NULL),
(27, '¿A qué país pertenece la isla de Creta?', 'Grecia', 2, 'creta-grecia-1.jpg', NULL, NULL, NULL),
(28, '¿Qué océano baña las aguas de Sri Lanka?', 'Índico', 2, 'sri-lanka-y-maldivas-1024x466.jpg', NULL, NULL, NULL),
(29, '¿Cómo se llama la línea vertical imaginaria que divide el mundo en dos mitades?', 'Meridiano de Greenwich', 2, 'mejores-globos-terraqueos.jpg', NULL, NULL, NULL),
(30, '¿En qué país de Europa se habla el magyar?', 'Hungría', 2, '2013.09.09_Balaton_(3).JPG', NULL, NULL, NULL),
(31, '¿En qué país se encuentra el pico Aconcagua?', 'Argentina', 2, 'Aconcagua2016.jpg', NULL, NULL, NULL),
(32, '¿Cuál es el país más visitado del mundo?', 'Francia', 2, '5fa43d71a111f.jpeg', NULL, NULL, NULL),
(33, '¿Por cuántos estados está formado Estados Unidos?', '50', 2, '800px-Map_of_USA_with_state_names_es.svg.png', NULL, NULL, NULL),
(34, '¿Dónde se encuentran las ruinas de Angkor?', 'Camboya', 2, '1392793243_941794_1476973289_cuerpo_normal.jpg', NULL, NULL, NULL),
(35, '¿Cuál es el país del mundo con mayor población?', 'China', 2, 'PoblacionMundial2007.png', NULL, NULL, NULL),
(36, '¿Qué cordillera separa Europa de Asia?', 'Montes Urales', 2, 'urales-9.jpg', NULL, NULL, NULL),
(37, '¿Entre qué países se encuentra el Estrecho de Bering?', 'Estados Unidos y Rusia', 2, 'estrecho-de-bering-e1535737230461.jpg', NULL, NULL, NULL),
(38, '¿Cuál es la lengua más hablada del mundo en 2022?', 'Inglés', 2, 'imagen-blog-argency-01-2.jpg', NULL, NULL, NULL),
(39, '¿En qué países se encuentra el Everest?', 'China y Nepal', 2, '195787.jpg', NULL, NULL, NULL),
(40, '¿Quién pintó el “Guernica”?', 'Picasso', 3, 'el-resultado-final_86c80317_1200x630.jpg', NULL, NULL, NULL),
(41, '¿Quién escribió “La Guerra de los Mundos”?', 'H.G. Wells', 3, 'guerra-de-los-mundos-1.jpg', NULL, NULL, NULL),
(42, '¿Qué italiano puso música al Othelo de Shakespeare?', 'Verdi', 3, 'otelo-orson-wells-Royal-films-597bc0153df78cbb7a25f2b1.jpg', NULL, NULL, NULL),
(43, '¿Con qué nombre firmaba Van Gogh sus obras?', 'Vincent', 3, 'amsterdam-blog-quien-era-vincent-van-gogh-noche-estrellada.jpg', NULL, NULL, NULL),
(44, '¿Qué tipo de instrumento es una cítara?', 'De cuerda', 3, '101657239.jpg', NULL, NULL, NULL),
(45, '¿Qué filósofo creó “El mito de la caverna”?', 'Platón', 3, 'mito-caverna-platon-social.jpg', NULL, NULL, NULL),
(46, '¿Quién escribió “La colmena”?', 'Camilo José Cela', 3, 'colmena-imgp.jpg', NULL, NULL, NULL),
(47, '¿Qué tiene en Segovia 128 arcos?', 'El acueducto', 3, 'imagen-majestuosa-de-la-puesta-del-sol-del-acueducto-antiguo-en-segovia-espa%C3%B1a-52813813.jpg', NULL, NULL, NULL),
(48, '¿Quién escribió “Poeta en Nueva York”?', 'Lorca', 3, 'empire-state-redes.jpg', NULL, NULL, NULL),
(49, '¿Quién escribió “Sueño de una noche de verano”?', 'Shakespeare', 3, 'Study_for_The_Quarrel_of_Oberon_and_Titania.jpg', NULL, NULL, NULL),
(50, '¿Cómo se llama el caballo de Don Quijote de la Mancha?', 'Rocinante', 3, 'r1.jpg', NULL, NULL, NULL),
(51, '¿Qué escritor español era conocido como “el manco de Lepanto”?', 'Cervantes', 3, '01-rostro-miguel-cervantes-foto-oronozalbum_32046c21_1200x630.jpg', NULL, NULL, NULL),
(52, '¿Qué animal mitológico da nombre a un libro de Thomas Hobbe?', 'Leviatán', 3, 'leviatanes.jpg', NULL, NULL, NULL),
(53, '¿Cómo se llama el libro en el que se basa la película “Blade Runner”?', '“¿Sueñan los robots con ovejas eléctricas?”', 3, '40726883_401.jpg', NULL, NULL, NULL),
(54, '¿Quién escribió las aventuras de Sandokán?', 'Emilio Salgari', 3, '16b741e324c3eff8aa738e91e42a1464f0f0cae9660c0a4c85d5b91afddd61dd._RI_V_TTW_.jpg', NULL, NULL, NULL),
(55, '¿Qué pintor realizó la obra de “La joven de la perla”?', 'Johannes Vermeer', 3, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpbSI6WyJcL2FydHdvcmtcL2ltYWdlRmlsZVwvcGVybGEuanBnIiwicmVzaXplLDIwMDAsMjAwMCJdfQ.P7QSbpwRsVYrcTORhHoI3q-qFjHhjv2DRE5oPeGoi00.jpg', NULL, NULL, NULL),
(56, '¿Qué poeta escribió el poema “Oda a Afrodita”?', 'Safo de Mitilene', 3, 'safo.jpg', NULL, NULL, NULL),
(57, '¿Qué cantante de jazz compuso un álbum titulado “Glad Rag Doll”?', 'Diana Krall', 3, '0730_DianaKrall_pagina_inicio_280x285_2022.jpg', NULL, NULL, NULL),
(58, '¿Quién escribió “La conjura de los necios”?', 'John Kennedy Toole', 3, 'la-conjura-de-los-necios-2.jpg', NULL, NULL, NULL),
(59, '¿Qué pintor noruego pintó “El grito”?', 'Edvard Munch', 3, 'The_Scream_by_Edvard_Munch%2C_1893_-_Nasjonalgalleriet.png', NULL, NULL, NULL),
(60, '¿En qué mes el Sol está más cerca de la Tierra?', 'Diciembre', 1, 'Sol-y-tierra.jpg', NULL, NULL, NULL),
(61, '¿En qué lado del cuerpo está el hígado?', 'Derecho', 1, '2309051.png', NULL, NULL, NULL),
(62, '¿Qué número viene después del 14 en los decimales del Pi?', '16', 1, '3486500.png', NULL, NULL, NULL),
(63, '¿Cuántos elementos tiene la tabla periódica?', '118', 1, 'Periodic_table_large-es-updated-2018.svg.png', NULL, NULL, NULL),
(64, '¿Qué gas de la atmósfera nos protege de la radiación ultravioleta?', 'Ozono', 1, '_104617599_gettyimages-664350274.jpg', NULL, NULL, NULL),
(65, '¿Cuáles son las bases nitrogenadas del ADN?', 'Adenina, timina, guanina y citosina', 1, '4157983.png', NULL, NULL, NULL),
(66, '¿Cuál es la velocidad de la luz?', '300.000 kilómetros por segundo', 1, 'velocidad-luz-2446533.png', NULL, NULL, NULL),
(67, 'De los cinco sentidos, ¿cuál es el que se desarrolla primero?', 'Olfato', 1, 'file.png', NULL, NULL, NULL),
(68, '¿Qué elemento está presente en absolutamente todas las moléculas orgánicas?', 'Carbono', 1, '167735.png', NULL, NULL, NULL),
(69, '¿Cómo se llama el proceso celular en el que una célula se divide para dar lugar a dos células hijas iguales?', 'Mitosis', 1, '3352611.png', NULL, NULL, NULL),
(70, '¿Cómo se llaman las células con un núcleo diferenciado?', 'Eucariotas', 1, '231a0d8a76cd1c3c00ccaa47a12a21a3.png', NULL, NULL, NULL),
(71, '¿A partir de qué planta se elabora el tequila?', 'Agave', 1, '205164.png', NULL, NULL, NULL),
(72, '¿Cuál fue el biólogo que de manera independiente a Darwin elaboró una teoría de la evolución casi idéntica a la suya?', 'Alfred Russell Wallace', 1, '6165164.png', NULL, NULL, NULL),
(73, '¿Qué período tuvo lugar entre Devónico y el Pérmico?', 'Carbonífero', 1, '1639824069_264_carbonifero.jpg', NULL, NULL, NULL),
(74, '¿Qué ciencia estudia la sangre?', 'Hematología', 1, '4006185.png', NULL, NULL, NULL),
(75, '¿Cuál es el único mes que puede tener menos de 4 fases lunares?', 'Febrero', 1, 'lunar-phase-25451_960_720.png', NULL, NULL, NULL),
(76, '¿Qué significan las siglas ADN?', 'Ácido desoxirribonucleico', 1, '822145.png', NULL, NULL, NULL),
(77, '¿Cuál es el elemento más abundante de la Tierra?', 'Hidrógeno', 1, '5673420.png', NULL, NULL, NULL),
(78, '¿Cuál es el animal más venenoso del mundo?', 'Rana dorada', 1, '0b840fb827a2b6f87e2af14fef10f118-icono-de-dibujos-animados-de-vial-de-veneno.png', NULL, NULL, NULL),
(79, '¿Qué edad tiene la Tierra?', '4.543 millones de años', 1, '2676960.png', NULL, NULL, NULL),
(80, '¿Quién interpretó a Hitler en “El gran dictador”?', 'Charles Chaplin', 6, '5e98d1e501484_zoom marco 03.png', NULL, NULL, NULL),
(81, '¿Quién dirigió “Ciudadano Kane”?', 'Orson Welles', 6, 'HFBAZDXHYBHETJHFXTUVPRE6PE.jpg', NULL, NULL, NULL),
(82, '¿Cuál fue la primera película de Disney?', 'Blancanieves', 6, 'eu_dlp_january_promo_c169_r_36edec9c.png', NULL, NULL, NULL),
(83, '¿Qué artista ha ganado más premios Grammy?', 'Georg Solti', 6, '5853c66dec0c270fc2f62dff.png', NULL, NULL, NULL),
(84, '¿Cómo se llama la madre de Simba en la película de “El rey león”?', 'Sarabi', 6, '6de82e6d3dd0208971ef95169c0a8095.png', NULL, NULL, NULL),
(85, '¿Qué banda publicó el álbum “Master of Puppets”?', 'Metallica', 6, '38a2628a4fcaf8de798bf16a001d2757.png', NULL, NULL, NULL),
(86, '¿En qué ciudad vive el mago de Oz?', 'Esmeralda', 6, 'c2e09b2b2ff791ef56bbd439e791c99d.png', NULL, NULL, NULL),
(87, '¿En qué año se emitió el último episodio de la serie “The Office”?', '2013', 6, 'the-office-png-3.png', NULL, NULL, NULL),
(88, '¿En qué calle ficticia vivía Sherlock Holmes?', 'Baker Street', 6, '695862.png', NULL, NULL, NULL),
(89, '¿Cómo se llama el protagonista de la saga de videojuegos “La Leyenda de Zelda”?', 'Link', 6, 'The-Legend-Of-Zelda-Breath-Of-The-Wild-Background-PNG-Clip-Art.png', NULL, NULL, NULL),
(90, '¿Quién escribió la novela gráfica “Watchmen”?', 'Alan Moore', 6, '900001588_1_ALAN_MOORE_PORTRAIT_by_MITCH_JENKINS_Nov_2015_jpg_201911111227.jpg', NULL, NULL, NULL),
(91, '¿Qué actor interpreta a Leonard Hofstadter en la popular serie “The Big Bang Theory”?', 'Johnny Galecki', 6, 'The-Big-Bang-Theory-PNG-HD.png', NULL, NULL, NULL),
(92, '¿Cuál de los actores que ha interpretado a James Bond luchó contra el Dr. No?', 'Sean Connery', 6, '3b2d4bee29e6298d32a2006f0c3fff5c.png', NULL, NULL, NULL),
(93, '¿Cuál fue la primera película en ganar el Óscar a “Mejor película”?', 'Alas', 6, '21fed3ca-a4d8-4ac4-972f-29674861bb3c.png', NULL, NULL, NULL),
(94, '¿Qué dúo musical participó en la banda sonora de la película “Tron: Legacy”?', 'Daft Punk', 6, 'Daft-Punk-Helmet-PNG-Image-HD.png', NULL, NULL, NULL),
(95, '¿Qué famoso youtuber español tiene su propia serie de animación?', 'El Rubius', 6, 'youtuber-rubius-z-and-logo-pack.png', NULL, NULL, NULL),
(96, '¿Cómo se llama el líder de los Autobots en la saga de películas de “Transformers”?', 'Optimus Prime', 6, 'Optimus-Prime-PNG-Photos.png', NULL, NULL, NULL),
(97, '¿Cómo se llama el perro de Tintín?', 'Milú', 6, '8ddc73df8e673b7fb2ba3632c2012b31.png', NULL, NULL, NULL),
(98, '¿La película “El club de la lucha” está basado en la novela homónima de qué autor?', 'Chuck Palahniuk', 6, 'fight_club_15x9cm.png', NULL, NULL, NULL),
(99, '¿Qué actriz protagonizó “Desayuno con diamantes”?', 'Audrey Hepburn', 6, 'audrey-hepburn-154881_1280.png', NULL, NULL, NULL),
(100, '¿Quién fue la primera mujer en ganar una medalla olímpica en el año 1900?', 'Charlotte Cooper', 4, '0b9a4b2c35157d5ddb154612ec33f1f7-medalla-de-oro-olimpica.png', NULL, NULL, NULL),
(101, '¿Cómo se llaman los deportistas que practican Judo?', 'Judokas', 4, 'Judo-PNG-Free-Download.png', NULL, NULL, NULL),
(102, '¿Cuáles son los colores de los cinco anillos olímpicos?', 'Amarillo, azul, negro, rojo y verde', 4, '38153.png', NULL, NULL, NULL),
(103, '¿En qué deporte destacó Carl Lewis?', 'Atletismo', 4, '100CS17.png', NULL, NULL, NULL),
(104, '¿Dónde se inventó el Ping-Pong?', 'Inglaterra', 4, '147227.png', NULL, NULL, NULL),
(105, '¿Qué atleta ostenta el récord de los 100 metros lisos?', 'Usain Bolt', 4, 'en-vivo-final-100-metros-juegos-olimpicos-tokio-2020.png', NULL, NULL, NULL),
(106, '¿Qué jugador de fútbol inventó un movimiento conocido como la “Gravesinha”?', 'Thomas Gravessen', 4, '53283.png', NULL, NULL, NULL),
(107, '¿Cómo se llamaba Muhammad Ali antes de adoptar este nombre?', 'Cassius Clay', 4, 'muhammad-ali-9.png', NULL, NULL, NULL),
(108, '¿Quién fue el campeón del mundo de Moto GP en 2017?', 'Marc Márquez', 4, '2560px-Moto_Gp_logo.svg.png', NULL, NULL, NULL),
(109, '¿En qué equipo de béisbol jugó el famoso Derek Jeter?', 'New York Yankees', 4, '3246.png', NULL, NULL, NULL),
(110, '¿Quién es el máximo goleador histórico de los mundiales de fútbol?', 'Miroslav Klose', 4, 'klose-germany-brazil.png', NULL, NULL, NULL),
(111, '¿Cuál es el equipo de la NBA con más títulos?', 'Los Boston Celtics', 4, 'nba_PNG6.png', NULL, NULL, NULL),
(112, '¿Quién fue la primera alpinista en llegar a la cima del Everest?', 'Junko Tabei', 4, 'nueva-altura-del-monte-everest-disminuida-o-incrementada-295761-1_1280.jpg', NULL, NULL, NULL),
(113, '¿En qué equipo jugaba David Beckham en el año 2007?', 'Los Angeles Galaxy', 4, '9e359b4cbc799742f9b30e310744dc2e.png', NULL, NULL, NULL),
(114, '¿Cuántos jugadores hay en un equipo de voleibol?', '6', 4, '2257505722724c0e4e0819bd9727f859-ilustracion-de-voleibol-deportivo.png', NULL, NULL, NULL),
(115, '¿Cuántos rounds hay en un combate de boxeo olímpico?', '3', 4, 'a1f586f88364a9c4f5efff563bd3aacd-boxer-plano.png', NULL, NULL, NULL),
(116, '¿Qué país es el que, con 5 títulos, ha ganado más mundiales?', 'Brasil', 4, '188905.png', NULL, NULL, NULL),
(117, '¿Cómo se llamaba el ciclista italiano apodado “il campionissimo”?', 'Fausto Coppi', 4, '1996806.png', NULL, NULL, NULL),
(118, '¿En qué ciudad española está el estadio de fútbol de Mestalla?', 'Valencia', 4, '984682326cdbb55f5034778b7690a795.png', NULL, NULL, NULL),
(119, '¿Qué arte marcial se conoce como el “boxeo tailandés”?', 'Muay thai', 4, 'EV-MUAYTHAI-003.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `useranswers`
--

CREATE TABLE `useranswers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `correct` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surnames` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `surnames`, `email`, `email_verified_at`, `username`, `role`, `icon`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'Administrador', 'admin@gmail.com', '2022-06-11 14:03:00', 'admin', 'admin', 'https://th.bing.com/th/id/R.2b9734237ff26feae10de87638ff87f1?rik=bZaPX2ubSBmzeA&pid=ImgRaw&r=0', '$2y$10$Es5sZTLNYKdr0YjMQxg7CORbZXGyfEZPbwWB.iqrY1V7HPdTQA6eS', NULL, '2022-06-11 14:03:00', '2022-06-11 14:03:00', NULL),
(2, 'user', 'Usuario', 'user@gmail.com', '2022-06-11 14:03:00', 'user', 'user', 'https://cdn-icons-png.flaticon.com/512/206/206853.png', '$2y$10$lvrsQAA2juXJC0uMMwZixOxg2HfT3msUUicKmvxhXczT6nsJ856DG', NULL, '2022-06-11 14:03:00', '2022-06-11 14:03:00', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `useranswers`
--
ALTER TABLE `useranswers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `useranswers_user_id_foreign` (`user_id`),
  ADD KEY `useranswers_question_id_foreign` (`question_id`),
  ADD KEY `useranswers_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=477;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT de la tabla `useranswers`
--
ALTER TABLE `useranswers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `useranswers`
--
ALTER TABLE `useranswers`
  ADD CONSTRAINT `useranswers_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `useranswers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `useranswers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
