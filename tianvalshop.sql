-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2023 a las 02:04:54
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tianvalshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cantidadProduc` int(11) NOT NULL,
  `precio` float NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `descripcion`, `cantidadProduc`, `precio`, `image`) VALUES
('1', 'nikeDunkLow', 31, 650000, 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/30ed2748-cf6a-4697-a59f-105bbc4de8dc/calzado-dunk-low-retro-87q0hf.png'),
('2', 'nikeAirForceBlancos', 12, 400000, 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/a0a300da-2e16-4483-ba64-9815cf0598ac/calzado-air-force-1-07-jBrhbr.png'),
('3', 'nikeAirForce', 9, 340000, 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/fb89f849-b7c9-4b64-8852-3d0de05108cf/calzado-air-force-1-07-60-nbhd-qnMX3r.png'),
('4', 'NikeKillshot2', 10, 300000, 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/jlhsgro2k4kjkczi63qt/calzado-killshot-2-leather-zrq1wk.png'),
('5', 'nikeBlazer', 55, 200000, 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/889ef520-349a-49da-80d4-8d75f9651feb/calzado-blazer-mid-77-vintage-nw30B2.png'),
('6', 'tenisforumlow', 25, 200000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/09c5ea6df1bd4be6baaaac5e003e7047_9366/Tenis_Forum_Low_Blanco_FY7756_01_standard.jpg'),
('7', 'NY90W', 23, 200000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/61e8b00dd6cb46f6945dad8101073f62_9366/NY_90_W_Blanco_GY8258_01_standard.jpg'),
('8', 'COURTSILK', 12, 600000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/50019449bc644d1b884daf5c009192a4_9366/Tenis_adidas_Court_Silk_Blanco_GZ9689_01_standard.jpg'),
('9', 'TenisRunfalcon', 73, 200000, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/0c49e2e2b1774c1c820faf540092425a_9366/Tenis_Runfalcon_2.0_Negro_HP7556_01_standard.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosventa`
--

CREATE TABLE `productosventa` (
  `idProducVenta` int(50) NOT NULL,
  `idVenta` bigint(50) NOT NULL,
  `idProducto` varchar(50) NOT NULL,
  `CantidadProducVenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productosventa`
--

INSERT INTO `productosventa` (`idProducVenta`, `idVenta`, `idProducto`, `CantidadProducVenta`) VALUES
(7, 1699567976419, '0', 1),
(8, 1699567976419, '2', 1),
(9, 1699569805527, '0', 1),
(10, 1699569805527, '2', 1),
(11, 1699569805527, '2', 1),
(12, 1699569805527, '0', 1),
(13, 1699569944327, '2', 1),
(14, 1699569944327, '4', 1),
(15, 1699569944327, '6', 1),
(16, 1699569975587, '0', 1),
(17, 1699569975587, '2', 1),
(18, 1699571363538, '0', 1),
(19, 1699571363538, '2', 1),
(20, 1699571363538, '5', 1),
(21, 1699577964163, '1', 1),
(22, 1699578064671, '1', 1),
(23, 1699581003649, '1', 1),
(24, 1699581003649, '2', 1),
(25, 1699585562320, '1', 1),
(26, 1699585562320, '2', 1),
(27, 1699585562320, '2', 1),
(28, 1699585562320, '4', 1),
(29, 1699585620594, '0', 1),
(30, 1699585748294, '0', 1),
(31, 1699585903109, '0', 1),
(32, 1699586000336, '0', 1),
(33, 1699586025072, '0', 1),
(34, 1699586119507, '0', 1),
(35, 1699586168882, '1', 1),
(36, 1699586599197, '0', 1),
(37, 1699586681010, '0', 1),
(38, 1699586887686, '0', 1),
(39, 1699586887686, '1', 1),
(40, 1699586921327, '0', 1),
(41, 1699617216854, '2', 1),
(42, 1699617270311, '0', 1),
(43, 1699617287026, '0', 1),
(44, 1699617354690, '0', 1),
(45, 1699617593968, '0', 1),
(46, 1699617593968, '1', 1),
(47, 1699619173384, '0', 1),
(48, 1699620387017, '1', 1),
(49, 1699620474427, '0', 5),
(50, 1699620565750, '4', 1),
(51, 1699620565750, '8', 1),
(52, 1699620617078, '1', 3),
(53, 1699620670167, '1', 4),
(54, 1699620670167, '2', 7),
(55, 1699620701448, '1', 1),
(56, 1699620701448, '2', 1),
(57, 1699620740163, '0', 10),
(58, 1699620760330, '3', 1),
(59, 1699620760330, '7', 1),
(60, 1699620824989, '7', 30),
(61, 1699620842078, '8', 15),
(62, 1699620862509, '0', 5),
(63, 1699620862509, '2', 8),
(64, 1699620942318, '2', 20),
(65, 1699621565587, '0', 6),
(66, 1699621961648, '1', 3),
(67, 1699622232665, '1', 1),
(68, 1699622232665, '0', 1),
(69, 1699622232665, '1', 1),
(70, 1699622232665, '2', 1),
(71, 1699622345917, '0', 1),
(72, 1699622345917, '1', 1),
(73, 1699622345917, '2', 1),
(74, 1699622359047, '0', 3),
(75, 1699623479580, '6', 1),
(76, 1699623512782, '6', 2),
(77, 1699623696323, '1', 1),
(78, 1699623696323, '0', 20),
(79, 1699624122091, '0', 1),
(80, 1699624133425, '3', 1),
(81, 1699624154533, '0', 3),
(82, 1699624168271, '4', 55),
(83, 1699624174151, '4', 55),
(84, 1699624179637, '4', 55),
(85, 1699624195631, '2', 8),
(86, 1699624216288, '5', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `documento` varchar(15) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `direccion` varchar(25) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `contraseña`, `email`, `documento`, `ciudad`, `direccion`, `telefono`) VALUES
(1, 'Miguel Angel Rios', 'Administrador', 'Administrador@TianvalShop.com', '1001533563', 'Medellín', 'Calle 2b#81a-380', '3116547274'),
(14, 'John', '12345678', 'jhon91811@gmail.com', '434234', 'medellin', 'Calle 50 f sur', '3126398360'),
(16, 'samuel orozc', 'samuel1234', '1234@gmail.com', '1237899', 'medellin', 'calle 5', '3052359978');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idVenta` bigint(50) NOT NULL,
  `idUsuario` varchar(50) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idVenta`, `idUsuario`, `total`) VALUES
(1699586921327, ' jhon91811@gmail.com', 650000),
(1699617216854, ' jhon91811@gmail.com', 340000),
(1699617270311, ' jhon91811@gmail.com', 650000),
(1699617287026, ' jhon91811@gmail.com', 650000),
(1699617354690, ' jhon91811@gmail.com', 650000),
(1699617593968, ' jhon91811@gmail.com', 1050000),
(1699619173384, ' jhon91811@gmail.com', 650000),
(1699620326376, ' jhon91811@gmail.com', 650000),
(1699620387017, ' jhon91811@gmail.com', 400000),
(1699620449511, ' jhon91811@gmail.com', 0),
(1699620474427, ' jhon91811@gmail.com', 650000),
(1699620509769, ' jhon91811@gmail.com', 0),
(1699620565750, ' jhon91811@gmail.com', 400000),
(1699620617078, ' jhon91811@gmail.com', 400000),
(1699620670167, ' jhon91811@gmail.com', 740000),
(1699620701448, ' jhon91811@gmail.com', 740000),
(1699620740163, ' jhon91811@gmail.com', 650000),
(1699620760330, ' jhon91811@gmail.com', 900000),
(1699620824989, ' jhon91811@gmail.com', 600000),
(1699620842078, ' jhon91811@gmail.com', 200000),
(1699620862509, ' jhon91811@gmail.com', 990000),
(1699620942318, ' jhon91811@gmail.com', 340000),
(1699621565587, ' jhon91811@gmail.com', 650000),
(1699621961648, ' jhon91811@gmail.com', 400000),
(1699622232665, ' samuel1234@gmail.com', 1790000),
(1699622345917, ' samuel1234@gmail.com', 1390000),
(1699622359047, ' samuel1234@gmail.com', 650000),
(1699623479580, ' jhon91811@gmail.com', 200000),
(1699623696323, ' Administrador@TianvalShop.com', 1050000),
(1699624122091, ' samuel1234@gmail.com', 650000),
(1699624133425, ' samuel1234@gmail.com', 300000),
(1699624154533, ' samuel1234@gmail.com', 650000),
(1699624195631, ' samuel1234@gmail.com', 340000),
(1699624216288, ' samuel1234@gmail.com', 200000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `productosventa`
--
ALTER TABLE `productosventa`
  ADD PRIMARY KEY (`idProducVenta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idVenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productosventa`
--
ALTER TABLE `productosventa`
  MODIFY `idProducVenta` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
