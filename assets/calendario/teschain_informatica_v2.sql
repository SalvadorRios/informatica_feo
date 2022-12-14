-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2022 a las 07:28:11
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

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
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `calendario`
--

INSERT INTO `calendario` (`id`, `nombre`) VALUES
(1, 'CALENDARIO 2022-2023.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` int(10) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `ti_div1` varchar(60) NOT NULL,
  `cont_div1` varchar(1500) NOT NULL,
  `ti_div2` varchar(60) NOT NULL,
  `ti_div4` varchar(60) NOT NULL,
  `cont_div4` varchar(1500) NOT NULL,
  `ti_div5` varchar(60) NOT NULL,
  `ti_div6` varchar(60) NOT NULL,
  `cont_div6` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `titulo`, `ti_div1`, `cont_div1`, `ti_div2`, `ti_div4`, `cont_div4`, `ti_div5`, `ti_div6`, `cont_div6`) VALUES
(1, 'CARRERA', 'FILOSOFÍA DEL PROGRAMA EDUCATIVO', 'Objetivo General: Formar profesionales competentes en el diseño, desarrollo, implementación y administración de servicios informáticos y gestión de proyectos con una visión sistémica, tecnológica y estratégica, ofreciendo soluciones innovadoras e integrales a las organizaciones, de acuerdo con las necesidades globales, actuales y emergentes, comprometidos con su entorno, desempeñándose con actitud ética, emprendedora y de liderazgo.\r\n<br>\r\nMisión Institucional: Ofrecer servicios de educación superior tecnológica de calidad, con cobertura nacional, pertinente y equitativa, que coadyuve a la conformación de una sociedad más justa y humana.\r\n<br>\r\nMisión del Programa Educativo: Formar profesionales en el área de Ingeniería Informática con criterios éticos y humanistas, que apliquen soluciones basadas en las Tecnologías de la información, con el fin de generar desarrollo, innovación y crecimiento económico a las organizaciones, fortaleciendo la responsabilidad social.', 'VALORES INSTITUCIONALES', 'OBJETIVO', 'Objetivo General: Formar profesionales competentes en el diseño, desarrollo, implementación y administración de servicios informáticos y gestión de proyectos con una visión sistémica, tecnológica y estratégica, ofreciendo soluciones innovadoras e integrales a las organizaciones, de acuerdo con las necesidades globales, actuales y emergentes, comprometidos con su entorno, desempeñándose con actitud ética, emprendedora y de liderazgo.', 'ATRIBUTOS DE EGRESO', 'CAMPO LABORAL', 'El ingeniero informático asegurará su éxito en los sectores económico y social contando con las competencias que le permitan el análisis y desarrollo de proyectos tecnológicos para incrementar la competitividad en las organizaciones. Lo anterior sustentado en el aprovechamiento de software de vanguardia y emergente, para abordar ámbitos como Big Data, Cloud Computing, Businnes Intelligence (BI) e Inteligencia Artificial (IA). Al dirigir grupos de trabajo interdisciplinarios para el desarrollo de proyectos, abordará esquemas y metodologías ágiles para obtener resultados óptimos en tiempo y forma.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carre_div2`
--

CREATE TABLE `carre_div2` (
  `id` int(10) NOT NULL,
  `sec` int(10) NOT NULL DEFAULT 102,
  `titulo` varchar(60) NOT NULL,
  `cont` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carre_div2`
--

INSERT INTO `carre_div2` (`id`, `sec`, `titulo`, `cont`) VALUES
(1, 0, 'EL SER HUMANO:', 'Es el factor fundamental del quehacer institucional, constituyéndose en el valor central, para incidir en su calidad de vida.'),
(2, 0, 'EL ESPÍRITU DE SERVICIO:', 'Es la actitud proactiva que distingue a la persona por su profesionalismo en su desempeño, proporcionando lo mejor de sí mismo.'),
(3, 0, 'EL LIDERAZGO:', 'Es la capacidad para la conducción innovadora, participativa y visionaria de la operación y desarrollo institucional.'),
(4, 0, 'EL TRABAJO EN EQUIPO:', 'Es el proceso humano realizado de manera armónica con actitud proactiva, multiplicando los logros del objetivo común.'),
(5, 0, 'LA CALIDAD:', 'Es la cultura que motiva a mejorar la forma de ser y hacer, fundamentada en las convicciones del ser humano.'),
(6, 0, 'EL ALTO DESEMPEÑO:', 'Cumplir y elevar estándares de calidad, sustentando en el desarrollo humano.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carre_div3`
--

CREATE TABLE `carre_div3` (
  `id` int(10) NOT NULL,
  `sec` varchar(10) NOT NULL DEFAULT 'div3',
  `titulo` varchar(60) NOT NULL,
  `cont` varchar(1500) NOT NULL,
  `img` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carre_div3`
--

INSERT INTO `carre_div3` (`id`, `sec`, `titulo`, `cont`, `img`) VALUES
(1, 'div3', 'PERFIL DE INGRESO', 'Con el fin de ir logrando una formación de profesionistas de excelencia en la Carrera de Ingeniería Informática, es indispensable que los aspirantes que consideren esta carrera reúnan un mínimo de habilidades, conocimientos, actitudes y valores que le garanticen su óptimo desempeño profesional a través de sus estudios y lo conduzcan a una segura integración en el ámbito profesional.', 'pic01.jpg'),
(2, 'div3', 'CONOCIMIENTOS Y HABILIDADES', 'Capacidad de abstracción y análisis que le permita desarrollar sistemas de información de acuerdo con situaciones que se presentan en el sector productivo, empresas e instituciones.\r\n\r\nAutodidactismo. Crear el hábito de estudiar e investigar por sí solo.\r\n\r\nConocimientos Físico-Matemáticas en el nivel medio superior.\r\n\r\nConocimientos de carácter general en el campo de la computación en lo relativo a manejo y uso de la computadora, herramientas de ofimática y preferentemente conocimientos de programación.', 'pic02.jpg'),
(3, 'div3', 'ACTITUDES Y VALORES', 'Disponibilidad para el estudio, lectura e investigación.\r\n\r\nCreatividad e innovación para el diseño y creación de sistemas de información.\r\n\r\nContar con responsabilidad y tenacidad, que le asegure la consolidación de sus proyectos.', 'pic03.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carre_div5`
--

CREATE TABLE `carre_div5` (
  `id` int(10) NOT NULL,
  `sec` varchar(10) NOT NULL DEFAULT 'div5',
  `cont` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carre_div5`
--

INSERT INTO `carre_div5` (`id`, `sec`, `cont`) VALUES
(1, 'div5', 'Aplica conocimientos científicos y tecnológicos en el área informática para la solución de problemas con un enfoque multidisciplinario.'),
(2, 'div5', 'Formula, desarrolla y gestiona el desarrollo de proyectos de software para incrementar la competitividad en las organizaciones, considerando las normas de calidad vigentes.'),
(3, 'div5', 'Aplica herramientas computacionales actuales y emergentes para optimizar los procesos en las organizaciones.'),
(4, 'div5', 'Diseña e implementa Bases de Datos para el almacenamiento, recuperación, distribución, visualización y manejo de la información en las organizaciones.'),
(5, 'div5', 'Crea y administra redes de computadoras, considerando el diseño, selección, instalación y mantenimiento para la operación eficiente de los recursos informáticos.'),
(6, 'div5', 'Realiza consultorías relacionadas con la función informática para la mejora continua de la organización.'),
(7, 'div5', 'Se desempeña profesionalmente con ética, respetando el marco legal, la pluralidad y la conservación del medio ambiente.'),
(8, 'div5', 'Participa y dirige grupos de trabajo interdisciplinarios, para el desarrollo de proyectos que requieran soluciones innovadoras basadas en tecnologías y sistemas de información.'),
(9, 'div5', 'Administrará eficientemente todo el ciclo de vida de los sistemas de información utilizando herramientas para la definición de los proyectos, llevando a cabo el proceso de desarrollo de software.'),
(10, 'div5', 'Seleccionar y aplicar herramientas CASE.'),
(11, 'div5', 'Aplicar técnicas avanzadas de programación para desarrollar sistemas de información que faciliten la relación humano-computadora.'),
(12, 'div5', 'Desarrollar aplicaciones de software que faciliten los procesos administrativos en la organización.'),
(13, 'div5', 'Desarrollar aplicaciones de software usando nuevas tecnologías, que permitan que las empresas obtengan ventajas competitivas con respecto a sus competidores.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `direc` varchar(600) NOT NULL,
  `tel` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `titulo`, `direc`, `tel`, `email`) VALUES
(1, 'INFORMACIÓN DE CONTACTO', 'Carretera Federal México Cuautla s/n,La Candelaria Tlapala, Chalco, Edo. de México', '01 55 5982 1088', 'contacto@tescha-informatica.net');

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
  `file` varchar(100) NOT NULL,
  `modal` varchar(45) NOT NULL DEFAULT 'nombre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `nombre`, `titulo`, `correo`, `foto`, `file`, `modal`) VALUES
(1, 'Emmanuel Espinosa Sandoval', 'Licenciado en Informática', 'ing.espinosa@tescha-informatica.net', 'emmanuel.jpg', 'cv.pdf', 'emanuel'),
(2, 'María del Rocío Gloria de Anda', 'Maestría en Educación en el Área de Docencia e Investigación', 'mdti.gloria@tescha-informatica.net', 'GLORIA DE ANDA.jpg', 'María del Rocío Gloria de Anda.pdf', 'gloria'),
(3, 'Sandra Hernández Suárez', 'Maestría en Dirección de Tecnologías de la Información', 'mdti.hernandez@tescha-informatica.net', 'SANDRA.jpg', 'Sandra Hernández Suárez.pdf', 'sandra'),
(4, 'Erika Leticia Herrera Revilla', 'Ingeniería en Electrónica', 'ing.herrera@tescha-informatica.net', 'ERIKA.jpg', 'cv.pdf', 'erika'),
(5, 'Sergio Martínez Martrínez', 'Maestría en Dirección de Tecnologías de la Información', 'mdti.martinez@tescha-informatica.net', 'SERGIO.jpg', 'Sergio Martínez Martínes.pdf', 'sergio'),
(6, 'Laura Morón Vázquez', 'Maestría en Dirección de Tecnologías de la Información', 'mdti.moron@tescha-informatica.net', 'LAURA.jpg', 'Laura Morón Vázquez.pdf', 'laura'),
(7, 'Kevin Gyovani Ramírez Vite', 'Maestría en Docencia', 'mtro.ramirez@tescha-informatica.net', 'KEVIN.jpg', 'Kevin Gyovani Ramírez Vite.pdf', 'kevin'),
(8, 'Raúl Romero Castro', 'Maestría en Dirección de Tecnologías de la Información', 'mdti.romero@tescha-informatica.net', 'RAUL.jpg', 'cv.pdf', 'raul'),
(9, 'Fabián Soberanes Martín', 'Maestría en Ciencias de la Computación', 'mtro.soberanes@tescha-informatica.net', 'FABIAN1.jpg', 'cv.pdf', 'fabian'),
(10, 'Guadalupe Nayeli Villanueva Valdivia', 'Maestría en Dirección de Tecnologías de la Información', 'mdti.villanueva@tescha-informatica.net', 'NAYELLI.jpg', 'Gaudalupe Nayeli Villanueva Valdivia.pdf', 'naye'),
(11, 'Pablo Lázaro Hernández', 'Maestría en Docencia Científica y Tecnológica', 'mtro.lazaro@tescha-informatica.net', 'pablo.jpg', 'Pablo Lázaro Hérnandez.pdf', 'pablo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria_full`
--

CREATE TABLE `galeria_full` (
  `id` int(10) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `des` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `galeria_full`
--

INSERT INTO `galeria_full` (`id`, `nombre`, `des`) VALUES
(1, 'data2.jpg', 'test1'),
(2, 'data2.jpg', 'test2'),
(3, 'data2.jpg', 'test3'),
(4, 'data2.jpg', 'test4'),
(5, 'data2.jpg', 'test5'),
(6, 'data2.jpg', 'test6'),
(7, 'data2.jpg', 'test7'),
(8, 'data2.jpg', 'test8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria_imp`
--

CREATE TABLE `galeria_imp` (
  `id` int(10) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `des` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `galeria_imp`
--

INSERT INTO `galeria_imp` (`id`, `nombre`, `des`) VALUES
(1, 'data.jpg', 'test1'),
(2, 'data.jpg', 'test2'),
(3, 'data.jpg', 'test3'),
(4, 'data.jpg', 'test4'),
(5, 'data.jpg', 'test5'),
(6, 'data.jpg', 'test6'),
(7, 'data.jpg', 'test7'),
(8, 'data.jpg', 'test8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `id` int(11) NOT NULL,
  `parrafo` varchar(1500) NOT NULL,
  `imagen` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id`, `parrafo`, `imagen`) VALUES
(1, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_alum`
--

CREATE TABLE `menu_alum` (
  `id` int(10) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `clave` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `menu_alum`
--

INSERT INTO `menu_alum` (`id`, `nombre`, `clave`) VALUES
(1, 'Becas', 'Becas'),
(2, 'Reincripciones', 'Reinscripcion'),
(3, 'Recidencias', 'Recidencias'),
(4, 'Reticula', 'Reticula'),
(5, 'Calendario', 'Calendario'),
(6, 'Temario', 'Temario'),
(7, 'Organigrama', 'Organigrama'),
(8, 'Actividades Complementarias', 'Actividades'),
(9, 'Horarios', 'Horarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recidencias`
--

CREATE TABLE `recidencias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `formato` varchar(100) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `tipo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `recidencias`
--

INSERT INTO `recidencias` (`id`, `nombre`, `formato`, `clave`, `tipo`) VALUES
(1, 'FORMATO DE REGISTRO DE ASESORIA 2022-1', 'FORMATO DE REGISTRO DE ASESORIA 2022-1.docx', 'ASESORIA', 'word'),
(2, 'PORTADA DE REPORTE PRELIMINAR', 'PORTADA DE REPORTE PRELIMINAR.docx', 'PRELIMINAR', 'word'),
(3, 'FORMATO DE EVALUACION Y SEGUIMIENTO', 'SGI_TecNM_A_XXIX_FORMATO_EVALUACION Y SEGUIMIENTO_RESIDENCIA PROFESIONAL(1).docx', 'SGI_TecNM_A_XXIX', 'word'),
(4, 'REPORTE PREELIMINAR', 'SGI_TecNM_A_XXVII_ESTRUCTURA_REPORTE_PRELIMINAR_RESIDENCIAS.pdf', 'SGI_TecNM_A_XXVII', 'pdf'),
(5, 'REPORTE FINAL', 'SGI_TecNM_A_XXVIII_ESTRUC_REPORTE_FINAL_RESIDENCIA_PROFESIONAL-1.pdf', 'SGI_TecNM_A_XXVIII', 'pdf'),
(6, 'EVALUACION DE REPORTE', 'SGI_TecNM_A_XXX_FORMATO_EVALUACION_REPORTE_RESIDENCIA_PROFESIONAL.docx', 'SGI_TecNM_A_XXX', 'word'),
(7, 'SOLICITUD DE RECIDENCIAS', 'SGI_TESCHA_1.1_SOLICITUD_RESIDENCIAS_PROFESIONALES_2020_alumnos.docx', 'SGI_TESCHA_1.1_SOLICITUD', 'word');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rein`
--

CREATE TABLE `rein` (
  `id` int(11) NOT NULL,
  `ti_but` varchar(60) NOT NULL,
  `archivo` varchar(100) NOT NULL,
  `clave` varchar(60) NOT NULL,
  `tipo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rein`
--

INSERT INTO `rein` (`id`, `ti_but`, `archivo`, `clave`, `tipo`) VALUES
(1, 'CONVOCATORIA', 'CONVOCATORIA REINSCRIPCION 2022-2-presencial-publicar.pdf', 'convo', 'pdf'),
(2, 'FORMATO', 'FORMATO DE REINSCRIPCIÓN Y CARGA ACADÉMICA.docx', 'forma', 'word');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reticulas`
--

CREATE TABLE `reticulas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reticulas`
--

INSERT INTO `reticulas` (`id`, `titulo`, `nombre`, `clave`) VALUES
(1, 'Reticula Generica', 'Reticula generica TecNM (IINF).pdf', 'generica'),
(2, 'Reticula Con Especialidad', 'Reticula con especialidad.pdf', 'especial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestres`
--

CREATE TABLE `semestres` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `semestres`
--

INSERT INTO `semestres` (`id`, `nombre`) VALUES
(1, 'PRIMER SEMESTRE'),
(2, 'SEGUNDO SEMESTRE'),
(3, 'TERCER SEMESTRE'),
(4, 'CUARTO SEMESTRE'),
(5, 'QUINTO SEMESTRE'),
(6, 'SEXTO SEMESTRE'),
(7, 'SEPTIMO SEMESTRE'),
(8, 'OCTAVO SEMESTRE'),
(9, 'NOVENO SEMESTRE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temp_noveno`
--

CREATE TABLE `temp_noveno` (
  `id` int(11) NOT NULL,
  `semestre` varchar(60) NOT NULL DEFAULT 'Noveno Semestre',
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `temp_noveno`
--

INSERT INTO `temp_noveno` (`id`, `semestre`, `nombre`) VALUES
(1, 'NovenoSemestre', 'GIB-2002 Gestión de Datos.pdf'),
(2, 'NovenoSemestre', 'GIB-2003 Plataformas para el Análisis y Visualización de Datos.pdf'),
(3, 'NovenoSemestre', 'GIB-2004 Seguridad Digital.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tem_cuarto`
--

CREATE TABLE `tem_cuarto` (
  `id` int(11) NOT NULL,
  `semestre` varchar(45) NOT NULL DEFAULT 'Cuarto Semestre',
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tem_cuarto`
--

INSERT INTO `tem_cuarto` (`id`, `semestre`, `nombre`) VALUES
(1, 'CuartoSemestre', 'AC009 Taller de Investigacion I.pdf'),
(2, 'Cuarto Semestre', 'Administración y organización de datos.pdf'),
(3, 'CuartoSemestre', 'AE034 Fundamentos de Telecomunicaciones.pdf'),
(4, 'CuartoSemestre', 'AE061 Sistemas Operativos I.pdf'),
(5, 'CuartoSemestre', 'Arquitectura de Computadoras..pdf'),
(6, 'CuartoSemestre', 'Investigación de Operaciones.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tem_octavo`
--

CREATE TABLE `tem_octavo` (
  `id` int(11) NOT NULL,
  `semestre` varchar(60) NOT NULL DEFAULT 'Octavo Semestre',
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tem_octavo`
--

INSERT INTO `tem_octavo` (`id`, `semestre`, `nombre`) VALUES
(1, 'SeptimoSemestre', 'AE011 Desarrollo Aplicaciones Dispositivos Moviles.pdf'),
(2, 'SeptimoSemestre', 'Estrategias de gestión de servicios de tecnologías de información.pdf'),
(3, 'SeptimoSemestre', 'Inteligencia de Negocios..pdf'),
(4, 'SeptimoSemestre', 'Seguridad Informática..pdf'),
(5, 'SeptimoSemestre', 'Taller de emprendedores.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tem_primero`
--

CREATE TABLE `tem_primero` (
  `id` int(11) NOT NULL,
  `semestre` varchar(45) NOT NULL DEFAULT 'Primer Semestre',
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tem_primero`
--

INSERT INTO `tem_primero` (`id`, `semestre`, `nombre`) VALUES
(1, 'PrimerSemestre', 'AC001 Calculo Diferencial.pdf'),
(2, 'PrimerSemestre', 'AC006 Fundamentos de Investigacion.pdf'),
(3, 'PrimerSemestre', 'AC007 Taller de Etica.pdf'),
(4, 'PrimerSemestre', 'AC008 Desarrollo Sustentable.pdf'),
(5, 'PrimerSemestre', 'Administración para informática.pdf'),
(6, 'PrimerSemestre', 'AE032 Fundamentos de Programacion.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tem_quinto`
--

CREATE TABLE `tem_quinto` (
  `id` int(11) NOT NULL,
  `semestre` varchar(45) NOT NULL DEFAULT 'Quinton Semestre',
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tem_quinto`
--

INSERT INTO `tem_quinto` (`id`, `semestre`, `nombre`) VALUES
(1, 'QuintonSemestre', 'AE031 Fundamentos de Base de Datos.pdf'),
(2, 'QuintonSemestre', 'AE062 Sistemas Operativos II.pdf'),
(3, 'QuintonSemestre', 'Análisis y modelado de Sistemas de Información.pdf'),
(4, 'QuintonSemestre', 'Redes de computadoras..pdf'),
(5, 'QuintonSemestre', 'Taller de Legislación Informática.pdf'),
(6, 'QuintonSemestre', 'Tecnologías e Interfaces de Computadoras..pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tem_segundo`
--

CREATE TABLE `tem_segundo` (
  `id` int(11) NOT NULL,
  `semestre` varchar(45) NOT NULL DEFAULT 'Segundo Semestre',
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tem_segundo`
--

INSERT INTO `tem_segundo` (`id`, `semestre`, `nombre`) VALUES
(1, 'SegundoSemestre', 'AC002 Calculo Integral.pdf'),
(2, 'SegundoSemestre', 'Administración de los recursos y función informática.pdf'),
(3, 'SegundoSemestre', 'AE008 Contabilidad Financiera.pdf'),
(4, 'SegundoSemestre', 'AE041 Matematicas Discretas.pdf'),
(5, 'SegundoSemestre', 'AE054 Programacion Orientada a Objetos.pdf'),
(6, 'SegundoSemestre', 'Física para Informática.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tem_septimo`
--

CREATE TABLE `tem_septimo` (
  `id` int(11) NOT NULL,
  `semestre` varchar(45) NOT NULL DEFAULT 'Septimo Semestre',
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tem_septimo`
--

INSERT INTO `tem_septimo` (`id`, `semestre`, `nombre`) VALUES
(1, 'SeptimoSemestre', 'AC010 Taller de Investigacion II.pdf'),
(2, 'SeptimoSemestre', 'Administración de servidores..pdf'),
(3, 'SeptimoSemestre', 'Calidad en los Sistemas de Información.pdf'),
(4, 'SeptimoSemestre', 'Fundamentos gestión  servicios tecnologías información..pdf'),
(5, 'SeptimoSemestre', 'GID-2001 Gestión Informática Organizacional.pdf'),
(6, 'SeptimoSemestre', 'GID-2005 Evaluación de Software para Indicadores Organizacionales.pdf'),
(7, 'SeptimoSemestre', 'Programación en ambiente cliente servidor.pdf'),
(8, 'SeptimoSemestre', 'Tópicos de base de datos.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tem_sexto`
--

CREATE TABLE `tem_sexto` (
  `id` int(11) NOT NULL,
  `semestre` varchar(45) NOT NULL DEFAULT 'Sexto Semestre',
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tem_sexto`
--

INSERT INTO `tem_sexto` (`id`, `semestre`, `nombre`) VALUES
(1, 'SextoSemestre', 'AE063 Taller de Base de Datos.pdf'),
(2, 'SextoSemestre', 'Auditoría Informática.pdf'),
(3, 'SextoSemestre', 'Desarrollo de Aplicaciones Web.pdf'),
(4, 'SextoSemestre', 'Desarrollo e implementación de Sistemas de Información.pdf'),
(5, 'SextoSemestre', 'Interconectividad de redes..pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tem_tercero`
--

CREATE TABLE `tem_tercero` (
  `id` int(11) NOT NULL,
  `semestre` varchar(100) NOT NULL DEFAULT 'Tercer Semestre',
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tem_tercero`
--

INSERT INTO `tem_tercero` (`id`, `semestre`, `nombre`) VALUES
(1, 'TercerSemestre', 'AC003 Algebra Lineal.pdf'),
(2, 'TercerSemestre', 'AE026 Estructura de Datos.pdf'),
(3, 'TercerSemestre', 'AE052 Probabilidad y Estadistica.pdf'),
(4, 'TercerSemestre', 'Costos empresariales..pdf'),
(5, 'TercerSemestre', 'Fundamentos de Sistemas de Información.pdf'),
(6, 'TercerSemestre', 'Sistemas electrónicos para informática.pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carre_div2`
--
ALTER TABLE `carre_div2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carre_div3`
--
ALTER TABLE `carre_div3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carre_div5`
--
ALTER TABLE `carre_div5`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria_full`
--
ALTER TABLE `galeria_full`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria_imp`
--
ALTER TABLE `galeria_imp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu_alum`
--
ALTER TABLE `menu_alum`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recidencias`
--
ALTER TABLE `recidencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rein`
--
ALTER TABLE `rein`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reticulas`
--
ALTER TABLE `reticulas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `semestres`
--
ALTER TABLE `semestres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `temp_noveno`
--
ALTER TABLE `temp_noveno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tem_cuarto`
--
ALTER TABLE `tem_cuarto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tem_octavo`
--
ALTER TABLE `tem_octavo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tem_primero`
--
ALTER TABLE `tem_primero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tem_quinto`
--
ALTER TABLE `tem_quinto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tem_segundo`
--
ALTER TABLE `tem_segundo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tem_septimo`
--
ALTER TABLE `tem_septimo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tem_sexto`
--
ALTER TABLE `tem_sexto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tem_tercero`
--
ALTER TABLE `tem_tercero`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `carre_div2`
--
ALTER TABLE `carre_div2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `carre_div3`
--
ALTER TABLE `carre_div3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `carre_div5`
--
ALTER TABLE `carre_div5`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `galeria_full`
--
ALTER TABLE `galeria_full`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `galeria_imp`
--
ALTER TABLE `galeria_imp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menu_alum`
--
ALTER TABLE `menu_alum`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `recidencias`
--
ALTER TABLE `recidencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rein`
--
ALTER TABLE `rein`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reticulas`
--
ALTER TABLE `reticulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `semestres`
--
ALTER TABLE `semestres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `temp_noveno`
--
ALTER TABLE `temp_noveno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tem_cuarto`
--
ALTER TABLE `tem_cuarto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tem_octavo`
--
ALTER TABLE `tem_octavo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tem_primero`
--
ALTER TABLE `tem_primero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tem_quinto`
--
ALTER TABLE `tem_quinto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tem_segundo`
--
ALTER TABLE `tem_segundo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tem_septimo`
--
ALTER TABLE `tem_septimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tem_sexto`
--
ALTER TABLE `tem_sexto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tem_tercero`
--
ALTER TABLE `tem_tercero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
