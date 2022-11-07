-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2022 a las 22:51:33
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `teschain_informatica_v2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `nombre`, `titulo`, `correo`, `foto`, `file`) VALUES
(1, 'Emmanuel Espinosa Sandoval', 'Licenciado en Informática', 'ing.espinosa@tescha-informatica.net', 'emmanuel.jpg', 'cv.pdf'),
(2, 'María del Rocío Gloria de Anda', 'Maestría en Educación en el Área de Docencia e Investigación', 'mdti.gloria@tescha-informatica.net', 'GLORIA DE ANDA.jpg', 'cv.pdf'),
(3, 'Sandra Hernández Suárez', 'Maestría en Dirección de Tecnologías de la Información', 'mdti.hernandez@tescha-informatica.net', 'SANDRA.jpg', 'cv.pdf'),
(4, 'Erika Leticia Herrera Revilla', 'Ingeniería en Electrónica', 'ing.herrera@tescha-informatica.net', 'ERIKA.jpg', 'cv.pdf'),
(5, 'Sergio Martínez Martrínez', 'Maestría en Dirección de Tecnologías de la Información', 'mdti.martinez@tescha-informatica.net', 'SERGIO.jpg', 'cv.pdf'),
(6, 'Laura Morón Vázquez', 'Maestría en Dirección de Tecnologías de la Información', 'mdti.moron@tescha-informatica.net', 'LAURA.jpg', 'cv.pdf'),
(7, 'Kevin Gyovani Ramírez Vite', 'Maestría en Docencia', 'mtro.ramirez@tescha-informatica.net', 'KEVIN.jpg', 'cv.pdf'),
(8, 'Raúl Romero Castro', 'Maestría en Dirección de Tecnologías de la Información', 'mdti.romero@tescha-informatica.net', 'RAUL.jpg', 'cv.pdf'),
(9, 'Fabián Soberanes Martín', 'Maestría en Ciencias de la Computación', 'mtro.soberanes@tescha-informatica.net', 'FABIAN1.jpg', 'cv.pdf'),
(10, 'Guadalupe Nayeli Villanueva Valdivia', 'Maestría en Dirección de Tecnologías de la Información', 'mdti.villanueva@tescha-informatica.net', 'NAYELLI.jpg', 'cv.pdf'),
(11, 'Pablo Lázaro Hernández', 'Maestría en Docencia Científica y Tecnológica', 'mtro.lazaro@tescha-informatica.net', 'pablo.jpg', 'cv.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `id` int(11) NOT NULL,
  `parrafo` varchar(1500) NOT NULL,
  `imagen` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id`, `parrafo`, `imagen`) VALUES
(1, 'Estimado estudiante:<br><br>Te doy la más cordial bienvenida a esta nueva etapa de tu vida estudiantil y que de manera muy diferente afrontarás respecto al período de educación media superior que has dejado recientemente. Ahora afrontarás un nuevo reto que en nueve semestres recorrerás hasta convertirte en un profesionista capaz, ético y comprometido con la sociedad, con tu estado y con tu país.<br><br>Deseo manifestar mi felicitación por tu decisión al haber elegido esta carrera, la cual te brindará un enorme abanico de posibilidades en tu futuro desempeño profesional en el ámbito empresarial dentro del marco de las tecnologías de información y comunicaciones TIC´s.<br><br>Para ello, en el Tecnológico de Estudios Superiores de Chalco, dispondrás de una infraestructura integral; compuesta por edificios con aulas interactivas, laboratorios de cómputo, centro de información (biblioteca), espacios comunes y deportivos, así como áreas administrativas que facilitarán tu estancia y preparación en esta casa de estudios.<br><br>Sólo restará que a este engranaje tengamos asegurado tu compromiso, dedicación, disposición, actitud y responsabilidad, constituyendo un excelente equipo colaborativo con el cuerpo docente que en cada ciclo escolar fortalecerán el proceso enseñanza/aprendizaje logrando que concluyas con éxito el reto de convertirte en un profesionista de alto desempeño.<br><br>Atte. Lic. Marino Zúñiga Domínguez<br><br>Jefe de división de Ingeniería Informática.', 'Marino.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
