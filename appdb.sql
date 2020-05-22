-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2020 a las 03:20:03
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `appdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mensaje` varchar(200) DEFAULT NULL,
  `fecha_,mensaje` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `email`, `mensaje`, `fecha_,mensaje`) VALUES
(1, 'Raul', 'raul@correo.es', 'Buenas, estoy interesado en saber si teneis alguna oferta especial para realizar cursos sobre Java o C++', '2020-03-06'),
(2, 'Juan', 'juan@correo.es', 'Hola!, querría saber si vais a sacar próximamente cursos sobre Ajax, estaría muy interesado!, Gracias!', '2020-03-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `descripcion` varchar(400) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha_ini` date DEFAULT NULL,
  `creadopor` varchar(50) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombre`, `categoria`, `descripcion`, `precio`, `fecha_ini`, `creadopor`, `imagen`) VALUES
(1, 'Curso de Python', 'backend', 'Disfruta de este actualizado curso de Python para princpiantes, en el que podrás estar a la ultima de uno de los lenguajes mas populares actualmente, en el que tendras a parte de lecciones, ejemplos y actividades para realizar en casa las veces que quieras.', 40, '2020-03-02', 'user1', 'img/python-logo.png'),
(2, 'Curso de HTML, CSS y JavaScript', 'frontend', '¿Quieres llegar a ser un profesional en el desarrollo de paginas web? pues no olvides realizar este curso en el podrás aprender desde cero en los lenguajes de programación orientados a páginas webs.', 60, '2020-03-03', 'user1', 'img/htmlcssjs-logo.jpg'),
(3, 'Curso de Excel', 'office', '¿Crees que sabes todo lo necesario sobre Excel?, te apostamos a que no y te lo demostramos en este genial curso sobre este programa, del que se le puede sacar mucho partido.', 30, '2020-03-05', 'user3', 'img/excel-logo.jpg'),
(4, 'Curso de C++', 'backend', 'Interesante curso de este famoso lenguaje de programacion y basico para iniciarte en programacion, esta hecho para empezar desde cero y terminar conociendo las estructuras de datos mas utilizadas y ser todo un experto en programacion de C++', 50, '2020-03-08', 'user3', 'img/c-logo.png'),
(5, 'Curso de Java', 'backend', 'No te pierdas este curso sobre Java, el lenguaje mas utilizado en el mundo de la programación, ya que se usa como base para desarrollar las mas sofisticadas apps para cualquier plataforma o sistema operativo.', 50, '2020-04-16', 'user3', 'img/logo-java.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(80) CHARACTER SET latin1 NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 NOT NULL,
  `f_nac` date NOT NULL,
  `password` varchar(64) CHARACTER SET latin1 NOT NULL,
  `group` tinyint(3) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `nombre`, `email`, `f_nac`, `password`, `group`) VALUES
(1, 'user1', 'user1@prueba.es', '1992-06-13', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 2),
(2, 'user2', 'user2@prueba.es', '2000-02-23', '481f6cc0511143ccdd7e2d1b1b94faf0a700a8b49cd13922a70b5ae28acaa8c5', 1),
(3, 'user3', 'user3@prueba.es', '1994-07-03', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 2),
(4, 'user4', 'user4@prueba.es', '1994-05-12', '481f6cc0511143ccdd7e2d1b1b94faf0a700a8b49cd13922a70b5ae28acaa8c5', 1),
(5, 'user5', 'user5@prueba.es', '1999-05-02', '049a68c15c0d6e26c8b4a0743e6b87f074864c2fae5983c88956cb2882d608f5', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_cursos`
--

CREATE TABLE IF NOT EXISTS `ventas_cursos` (
  `id_venta` int(11) NOT NULL,
  `nombre_curso` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `fecha_venta` date NOT NULL,
  `progreso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas_cursos`
--

INSERT INTO `ventas_cursos` (`id_venta`, `nombre_curso`, `id_user`, `id_curso`, `fecha_venta`, `progreso`) VALUES
(1, 'Curso de Python', 2, 1, '2020-03-09', 60),
(2, 'Curso de Excel', 1, 3, '2020-03-10', 40),
(4, 'Curso de C++', 3, 4, '2020-05-01', 20),
(5, 'Curso de Python', 4, 1, '2020-05-11', 0),
(6, 'Curso de HTML, CSS y JavaScript', 1, 2, '2020-05-11', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `ventas_cursos`
--
ALTER TABLE `ventas_cursos`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_user` (`id_user`) USING BTREE,
  ADD KEY `id_curso` (`id_curso`) USING BTREE;

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
);

ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventas_cursos`
--
ALTER TABLE `ventas_cursos`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
