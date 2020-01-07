-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2020 a las 06:36:44
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisbiblio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `auto_id` int(11) NOT NULL,
  `auto_nombres` varchar(45) DEFAULT NULL,
  `auto_apellidos` varchar(45) DEFAULT NULL,
  `auto_biografia` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`auto_id`, `auto_nombres`, `auto_apellidos`, `auto_biografia`) VALUES
(1, 'Eduardo', 'Espinoza Ramos', 'Integrante del Partido Político UPP. Casado y con tres hijos, ha tenido una destacada carrera como docente universitario en la Universidad Nacional Mayor de San Marcos, la Universidad Nacional del Callao y la Universidad Ricardo Palma, además de ser autor de excelentes libros en el área de la matemática aplicada a la Ingeniería, en su condición de Matemático Puro.'),
(2, 'Michael David ', 'Spivak', 'Es un norteamericano matemático especializado en la geometría diferencial; expositor académico sobre matemática y con una producción constante en temáticas referidas a su especialidad. Spivak es autor de una obra que comprende cinco volúmenes bajo el título “Introducción a la comprensión de la geometría diferencial'),
(3, 'Mark Waldo ', 'Zemansky', 'Fue profesor de física en el City College de Nueva York durante décadas y es mejor conocido por ser coautor de University Physics , un libro de texto introductorio de física, con Francis Sears . El libro, publicado por primera vez en 1949, a menudo se conoce como \" Sears y Zemansky \", aunque Hugh Young se convirtió en coautor en 1973.'),
(4, 'Rafael C.', 'González', 'Rafael C. González   recibió el título de BSEE de la Universidad de Miami en 1965 y el ME y Ph.D. grados en ingeniería eléctrica de la Universidad de Florida, Gainesville, en 1967 y 1970, respectivamente. Se unió al Departamento de Ingeniería Eléctrica e Informática de la Universidad de Tennessee, Knoxville (UTK) en 1970, donde se convirtió en Profesor Asociado en 1973, Profesor en 1978 y Profesor de Servicio Distinguido en 1984. Se desempeñó como Presidente del departamento desde 1994 hasta 1997. Actualmente es profesor emérito de ingeniería eléctrica e informática en UTK.'),
(5, 'Robert', 'Fossier', 'fue un historiador francés dedicado a la Edad Media. uno de los medievalistas más importante del siglo XX, muy infuido por la Escuela de los Annales, pero sin alcanzar tanta fama como Georges Duby y Jacques Le Goff. Amplío el conocimiento de la Edad Media en los campos de la historia social y económica.'),
(6, 'Steve J', 'Stern', 'Historiador de excelencia académica reconocida, especialista en América Latina. Profesor de Historia, cátedra “Alberto Flores Galindo e Hilldale”, en la Universidad de Wisconsin. Sus intereses de investigación y enseñanza se centran, principalmente, en las diversas formas en que se hacen frente a los problemas de poder desde la situación de las comunidades campesinas y los grupos subalternos'),
(7, 'Ginger', 'Bogda', 'Ginger Bogda es presidenta de la Asociación Internacional de Eneagrama. Como consultora de empresa, ofrece charlas frecuentes para compañías como CBS, Disney, General Electric, Procter & Gamble, McDonald\'s y Time Warner. Estudió con Helen Palmer y David Daniels, dos grandes personalidades en el campo del Eneagrama.'),
(8, 'Araceli ', 'Suverza Fernández', 'Es nutrióloga Certificada por el Colegio Mexicano de Nutriólogos y por la Academy of Nutrition and Dietetics en el Manejo y Control de Obesidad y Peso Corporal del Paciente Adulto. Es fundadora de la Clínica de Nutrición de la Universidad Iberoamericana Ciudad de México.'),
(9, 'Claudia', 'Ascencio Peralta', 'Fisiologa de la nutricion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cate_id` int(11) NOT NULL,
  `cate_nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cate_id`, `cate_nombre`) VALUES
(1, 'Ingenierias'),
(2, 'Biomedicas'),
(3, 'Sociales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplar`
--

CREATE TABLE `ejemplar` (
  `ejem_id` int(11) NOT NULL,
  `ejem_titulo` varchar(150) DEFAULT NULL,
  `ejem_editorial` varchar(45) DEFAULT NULL,
  `ejem_paginas` int(11) DEFAULT NULL,
  `ejem_isbn` varchar(20) DEFAULT NULL,
  `ejem_idioma` varchar(45) DEFAULT NULL,
  `ejem_portada` varchar(45) DEFAULT NULL,
  `ejem_digital` varchar(45) DEFAULT NULL,
  `ejem_audio` varchar(45) DEFAULT NULL,
  `ejem_resumen` varchar(255) DEFAULT NULL,
  `ejem_tipo_id` int(11) DEFAULT NULL,
  `ejem_cate_id` int(11) DEFAULT NULL,
  `ejem_valoracion` tinyint(1) DEFAULT NULL,
  `ejem_anio` int(11) DEFAULT NULL,
  `ejem_nprestamos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ejemplar`
--

INSERT INTO `ejemplar` (`ejem_id`, `ejem_titulo`, `ejem_editorial`, `ejem_paginas`, `ejem_isbn`, `ejem_idioma`, `ejem_portada`, `ejem_digital`, `ejem_audio`, `ejem_resumen`, `ejem_tipo_id`, `ejem_cate_id`, `ejem_valoracion`, `ejem_anio`, `ejem_nprestamos`) VALUES
(1, 'ecuaciones diferenciales', 'Peru', 500, '9658423516275', 'Español', 'ecuaciones.jpg', NULL, NULL, 'La lectura del presente libro requiere de un conocimiento del cálculo diferencial e integral; el libro empieza con un capítulo sobre los conceptos generales de las ecuaciones diferenciales, se continúa con diferentes métodos analíticos para resolver una e', 1, 1, 5, 2005, 1),
(2, 'CALCULUS', 'reverte', 1000, '9568421537645', 'español', 'calculus.jpg', NULL, NULL, 'Cada aspecto de este libro se ha visto influido por el deseo de presentar el calculo no solo como un preludio sino como el primer encuentro real con las matematicas.', 2, 1, 3, 2006, 25),
(3, 'Fisica universitaria', 'Pearson', 1200, '9568475123485', 'español', 'fisicauniversitaria.jpg', NULL, NULL, 'Este libro es el producto de más de medio siglo de liderazgo\r\ne innovación en la enseñanza de la física. Cuando en 1949 se\r\npublicó la primera edición de Física universitaria, de Francis\r\nW. Sears y Mark W. Zemansky, su énfasis en los principios\r\nfundamen', 2, 1, 4, 2000, 34),
(4, 'Digital Image\r\nProcessing', 'Pearson', 700, '9588675485632', 'español', 'digital.jpg', NULL, NULL, 'El procesamiento de imágenes es un método para realizar algunas operaciones en una imagen, con el fin de obtener una imagen mejorada o extraer información útil de ella. Es un tipo de procesamiento de señal en el que la entrada es una imagen y la salida pu', 1, 1, 3, 2007, 44),
(5, 'Gente de la Edad Media', 'Taurus', 800, '9568475812345', 'español', 'edadmedia.jpg', NULL, NULL, 'Este libro echa abajo los tópicos, ideas preconcebidas y errores en los que se suele caer al pensar en la Edad Media. Lejos del estudio erudito de la sociedad medieval, se economía y su historia cultural o artística, Robert Fossier se centra en la gente c', 2, 3, 3, 1980, 12),
(6, 'Los senderos insolitos del Peru', 'IEP-UNSCH', 480, '956845715248', 'español', 'peru.jpg', NULL, NULL, 'Enigma, exotismo, sorpresa. Estas sensibilidades a menudo marcaron las discusiones sobre el Perú, durante la profunda convulsión y violencia política que selló la década de 1980 y comienzos de la de 1990.', 3, 3, 4, 1980, 5),
(7, '¿Qué tipo de líder eres tú?', 'Mc Graw-Hill', 600, '95864758235145', 'español', 'lider.jpg', NULL, NULL, 'Este libro es sobre el éxito en el liderazgo (el gran éxito). Trata del crecimiento más allá de sus límites, en el aspecto personal, profesional y organizacional.', 2, 3, 3, 2006, 8),
(8, 'El ABCD de la evaluación del estado de nutrición', 'Omega', 500, '956845712548', 'español', 'abcd.jpg', NULL, NULL, 'Algunos de los aspectos más estudiados en la historia de la humanidad son representados por la alimenta­ción y sus consecuencias orgánicas, así como por la dieta integrada en la curación de enfermedades. Para advertir esto basta citar algunos ejemplos: Ca', 2, 2, 4, 2004, 15),
(9, 'Fisiología de la Nutrición', 'Manual moderno', 622, '9568785421456', 'español', 'fisiologia.jpg', NULL, NULL, 'La transición epidemiológica es un fenómeno mundial que se caracteriza por la coexistencia de la desnutrición con enfermedades crónicas no trasmisibles y juntas vislumbran un panorama de salud pública actual alarmante. Dichas enfermedades relacionadas con', 2, 2, 4, 2004, 42);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplar_autor`
--

CREATE TABLE `ejemplar_autor` (
  `rela_auto_id` int(11) NOT NULL,
  `rela_ejem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ejemplar_autor`
--

INSERT INTO `ejemplar_autor` (`rela_auto_id`, `rela_ejem_id`) VALUES
(1, 1),
(2, 3),
(3, 2),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplar_tipo`
--

CREATE TABLE `ejemplar_tipo` (
  `tipo_id` int(11) NOT NULL,
  `tipo_nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ejemplar_tipo`
--

INSERT INTO `ejemplar_tipo` (`tipo_id`, `tipo_nombre`) VALUES
(1, 'Cientifico'),
(2, 'Libro'),
(3, 'Historia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorito`
--

CREATE TABLE `favorito` (
  `favo_usua_id` int(11) NOT NULL,
  `favo_ejem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `favorito`
--

INSERT INTO `favorito` (`favo_usua_id`, `favo_ejem_id`) VALUES
(4, 2),
(4, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `histo_id` int(11) NOT NULL,
  `histo_usua_id` int(11) DEFAULT NULL,
  `histo_termino` varchar(45) DEFAULT NULL,
  `histo_fechareg` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticion`
--

CREATE TABLE `peticion` (
  `peti_id` int(11) NOT NULL,
  `peti_ejem_id` int(11) DEFAULT NULL,
  `peti_dias` int(11) DEFAULT NULL,
  `peti_usua_id` int(11) DEFAULT NULL,
  `peti_fechareg` datetime DEFAULT NULL,
  `peti_obs` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `peticion`
--

INSERT INTO `peticion` (`peti_id`, `peti_ejem_id`, `peti_dias`, `peti_usua_id`, `peti_fechareg`, `peti_obs`) VALUES
(1, 2, 4, 4, '2020-01-05 06:13:00', NULL),
(2, 9, 7, 4, '2020-01-05 06:14:00', NULL),
(3, 5, 14, 4, '2020-01-05 06:14:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `pres_id` int(11) NOT NULL,
  `pres_usua_id` int(11) DEFAULT NULL,
  `pres_ejem_id` int(11) DEFAULT NULL,
  `pres_fechareg` datetime DEFAULT NULL,
  `pres_dias` int(11) DEFAULT NULL,
  `pres_fechaprestamo` date DEFAULT NULL,
  `pres_fechadevolucion` date DEFAULT NULL,
  `pres_estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usua_id` int(11) NOT NULL,
  `usua_login` varchar(45) DEFAULT NULL,
  `usua_password` varchar(45) DEFAULT NULL,
  `usua_codigo` int(11) DEFAULT NULL,
  `usua_nombres` varchar(45) DEFAULT NULL,
  `usua_apellidos` varchar(45) DEFAULT NULL,
  `usua_direccion` varchar(150) DEFAULT NULL,
  `usua_email` varchar(70) DEFAULT NULL,
  `usua_telefono` varchar(20) DEFAULT NULL,
  `usua_esadmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usua_id`, `usua_login`, `usua_password`, `usua_codigo`, `usua_nombres`, `usua_apellidos`, `usua_direccion`, `usua_email`, `usua_telefono`, `usua_esadmin`) VALUES
(1, 'admin', '1234', 154324, 'Administrador', 'Ejemplo', 'Av. ejemplo 123', 'ejemplo@ejemplo.com', '123456789', 1),
(2, 'Andre', 'andre123', 123456, 'Andre', 'Flores', 'Av. Argentina 123', 'andre@andre.com', '123456789', 1),
(3, 'Diego', 'diego123', 123456, 'Diego', 'Romani', 'Av. Brazil 123 ', 'diego@diego.com', '123654987', 1),
(4, 'Daniel', 'daniel123', 124578, 'Daniel', 'Condori', 'Av. Peru 123', 'daniel@daniel.com', '123987654', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indices de la tabla `ejemplar`
--
ALTER TABLE `ejemplar`
  ADD PRIMARY KEY (`ejem_id`),
  ADD KEY `fk_ejemplar_ejemplar_tipo_idx` (`ejem_tipo_id`),
  ADD KEY `fk_ejemplar_categoria1_idx` (`ejem_cate_id`);

--
-- Indices de la tabla `ejemplar_autor`
--
ALTER TABLE `ejemplar_autor`
  ADD PRIMARY KEY (`rela_auto_id`,`rela_ejem_id`),
  ADD KEY `fk_ejemplar_autor_ejemplar1_idx` (`rela_ejem_id`);

--
-- Indices de la tabla `ejemplar_tipo`
--
ALTER TABLE `ejemplar_tipo`
  ADD PRIMARY KEY (`tipo_id`);

--
-- Indices de la tabla `favorito`
--
ALTER TABLE `favorito`
  ADD PRIMARY KEY (`favo_usua_id`,`favo_ejem_id`),
  ADD KEY `fk_favorito_ejemplar1_idx` (`favo_ejem_id`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`histo_id`),
  ADD KEY `fk_historial_usuario1_idx` (`histo_usua_id`);

--
-- Indices de la tabla `peticion`
--
ALTER TABLE `peticion`
  ADD PRIMARY KEY (`peti_id`),
  ADD KEY `fk_peticion_ejemplar1_idx` (`peti_ejem_id`),
  ADD KEY `fk_peticion_usuario1_idx` (`peti_usua_id`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`pres_id`),
  ADD KEY `fk_prestamo_usuario1_idx` (`pres_usua_id`),
  ADD KEY `fk_prestamo_ejemplar1_idx` (`pres_ejem_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usua_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ejemplar`
--
ALTER TABLE `ejemplar`
  MODIFY `ejem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ejemplar_tipo`
--
ALTER TABLE `ejemplar_tipo`
  MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `peticion`
--
ALTER TABLE `peticion`
  MODIFY `peti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `pres_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usua_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ejemplar`
--
ALTER TABLE `ejemplar`
  ADD CONSTRAINT `fk_ejemplar_categoria1` FOREIGN KEY (`ejem_cate_id`) REFERENCES `categoria` (`cate_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ejemplar_ejemplar_tipo` FOREIGN KEY (`ejem_tipo_id`) REFERENCES `ejemplar_tipo` (`tipo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ejemplar_autor`
--
ALTER TABLE `ejemplar_autor`
  ADD CONSTRAINT `fk_ejemplar_autor_autor1` FOREIGN KEY (`rela_auto_id`) REFERENCES `autor` (`auto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ejemplar_autor_ejemplar1` FOREIGN KEY (`rela_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `favorito`
--
ALTER TABLE `favorito`
  ADD CONSTRAINT `fk_favorito_ejemplar1` FOREIGN KEY (`favo_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_favorito_usuario1` FOREIGN KEY (`favo_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `fk_historial_usuario1` FOREIGN KEY (`histo_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `peticion`
--
ALTER TABLE `peticion`
  ADD CONSTRAINT `fk_peticion_ejemplar1` FOREIGN KEY (`peti_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peticion_usuario1` FOREIGN KEY (`peti_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `fk_prestamo_ejemplar1` FOREIGN KEY (`pres_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prestamo_usuario1` FOREIGN KEY (`pres_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
