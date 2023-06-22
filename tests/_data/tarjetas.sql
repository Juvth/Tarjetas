-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2023 a las 17:02:29
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tarjetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `nombre` varchar(50) DEFAULT NULL,
  `id_admin` int(11) NOT NULL,
  `contraseña` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`nombre`, `id_admin`, `contraseña`) VALUES
('Cristian', 604701789, '1234'),
('Mariano', 604701790, '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `direccion` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `cedula` varchar(10) NOT NULL,
  `contraseña` varchar(5) DEFAULT NULL,
  `totalpagar` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`direccion`, `usuario`, `telefono`, `cedula`, `contraseña`, `totalpagar`) VALUES
('Ambato', 'Cristian', '0999847805', '0601535802', '1234', NULL),
('Cuenca', 'Chocolate', '03543131', '0604500502', '1234', NULL),
('Riobamba', 'Samanta', '0983794207', '0604511000', '1234', NULL),
('Quito', 'Anderson', '0983794207', '0604511100', '1234', NULL),
('Pucara', 'Luis', '0983794207', '0604511170', '1234', NULL),
('Riobamba', 'andres', '0999847805', '0604701789', '1234', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trjbautizo`
--

CREATE TABLE `trjbautizo` (
  `id_bautizo` int(11) NOT NULL,
  `iglesia` varchar(50) DEFAULT NULL,
  `recepcion` varchar(50) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `padrinos` varchar(80) DEFAULT NULL,
  `fecha` varchar(80) DEFAULT NULL,
  `hora` varchar(80) DEFAULT NULL,
  `cedula_cliente` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trjbautizo`
--

INSERT INTO `trjbautizo` (`id_bautizo`, `iglesia`, `recepcion`, `edad`, `nombre`, `padrinos`, `fecha`, `hora`, `cedula_cliente`) VALUES
(1, 'Loma de quito', 'Lavalle y espejo', 12, 'Cristian', 'Juan y Maria', '05-02-2022', '18:00', ''),
(4, 'La merced', 'Mi casa', 21, 'Andres', 'Pepito perez', '06-02-2022', '19:00', ''),
(6, 'Concepcion', 'Mi casa', 21, 'Juan', 'Cristian', '06-02-2022', '20:00', '0604701789'),
(567, 'Pucara', 'Sal si puedes', 2, 'Patrick', 'Jaime', '2222-02-01', '13:00', '0604511171');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trj_boda`
--

CREATE TABLE `trj_boda` (
  `nombre_Novio` varchar(50) DEFAULT NULL,
  `nombre_Novia` varchar(50) DEFAULT NULL,
  `id_boda` int(11) NOT NULL,
  `fecha` varchar(80) DEFAULT NULL,
  `hora` varchar(80) DEFAULT NULL,
  `padrinos` varchar(80) DEFAULT NULL,
  `cedula_cliente` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trj_boda`
--

INSERT INTO `trj_boda` (`nombre_Novio`, `nombre_Novia`, `id_boda`, `fecha`, `hora`, `padrinos`, `cedula_cliente`) VALUES
('Cristian', 'Andres', 1, '20-06-2022', '17:00', 'Juan y Maria', '0604701789'),
('Patrick', 'Jhoa', 2, '2023-05-31', '12:55', '', '0604511170'),
('Andres', 'Fernanda', 3, '06-07-2022', '16:00', 'Yo ', '0601535802');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trj_cumple`
--

CREATE TABLE `trj_cumple` (
  `nombre_cumple` varchar(50) DEFAULT NULL,
  `id_cumple` int(11) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `fecha` varchar(80) DEFAULT NULL,
  `hora` varchar(80) DEFAULT NULL,
  `cedula_cliente` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trj_cumple`
--

INSERT INTO `trj_cumple` (`nombre_cumple`, `id_cumple`, `direccion`, `edad`, `fecha`, `hora`, `cedula_cliente`) VALUES
('Cristain', 3, 'Riobamba', 21, '20-03-2022', '20:00', '0604701789'),
('Andres', 6, 'Ambato', 18, '04-02-2022', '21:00', '0601535802');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trj_grado`
--

CREATE TABLE `trj_grado` (
  `id_grado` int(11) NOT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `fecha` varchar(80) DEFAULT NULL,
  `hora` varchar(80) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `Nombre_grado` varchar(50) DEFAULT NULL,
  `cedula_cliente` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trj_grado`
--

INSERT INTO `trj_grado` (`id_grado`, `direccion`, `fecha`, `hora`, `descripcion`, `Nombre_grado`, `cedula_cliente`) VALUES
(2, 'Riobamba', '21-02-2022', '20:00', 'Grado Universidad', 'Cristain', '0604701789'),
(4, 'Riobamba', '03-02-2022', '19:00', 'Grado colegio', 'Andres', '0601535802');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `trjbautizo`
--
ALTER TABLE `trjbautizo`
  ADD PRIMARY KEY (`id_bautizo`);

--
-- Indices de la tabla `trj_boda`
--
ALTER TABLE `trj_boda`
  ADD PRIMARY KEY (`id_boda`);

--
-- Indices de la tabla `trj_cumple`
--
ALTER TABLE `trj_cumple`
  ADD PRIMARY KEY (`id_cumple`);

--
-- Indices de la tabla `trj_grado`
--
ALTER TABLE `trj_grado`
  ADD PRIMARY KEY (`id_grado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=604701797;

--
-- AUTO_INCREMENT de la tabla `trjbautizo`
--
ALTER TABLE `trjbautizo`
  MODIFY `id_bautizo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=568;

--
-- AUTO_INCREMENT de la tabla `trj_boda`
--
ALTER TABLE `trj_boda`
  MODIFY `id_boda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `trj_cumple`
--
ALTER TABLE `trj_cumple`
  MODIFY `id_cumple` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `trj_grado`
--
ALTER TABLE `trj_grado`
  MODIFY `id_grado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
