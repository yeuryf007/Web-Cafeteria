-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2023 a las 09:05:15
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden`
--

CREATE TABLE `detalle_orden` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_carrito`
--

CREATE TABLE `orden_carrito` (
  `id_orden` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `tipo_pago` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL DEFAULT 'PENDIENTE',
  `valor_total` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `precio`, `descripcion`, `stock`) VALUES
(1, 'Ensalada de tomate y cebolla', '50.00', 'entrada', 10),
(2, 'Ensalada de col y zanahoria', '50.00', 'entrada', 10),
(3, 'Ensalada de lechuga y pepino', '50.00', 'entrada', 10),
(4, 'Ensalada de espinaca y aguacate', '50.00', 'entrada', 10),
(5, 'Ensalada de lechuga y tomate', '50.00', 'entrada', 10),
(6, 'Pollo a la plancha', '100.00', 'plato fuerte', 10),
(8, 'Carne asada', '100.00', 'plato fuerte', 10),
(9, 'Filete de pescado', '100.00', 'plato fuerte', 10),
(10, 'Chuleta de cerdo', '100.00', 'plato fuerte', 10),
(11, 'Chuleta de res', '100.00', 'plato fuerte', 10),
(12, 'Brownie de chocolate', '50.00', 'postre', 10),
(13, 'Galletas de avena con pasas', '50.00', 'postre', 10),
(14, 'Helado de vainilla con caramelo', '50.00', 'postre', 10),
(15, 'Jugo de naranja', '50.00', 'bebida', 10),
(16, 'Jugo de piña', '50.00', 'bebida', 10),
(17, 'Jugo de mango', '50.00', 'bebida', 10),
(18, 'Jugo de papaya', '50.00', 'bebida', 10),
(19, 'Jugo de uva', '50.00', 'bebida', 10),
(20, 'Arroz', '50.00', 'extra', 10),
(21, 'Papas fritas', '50.00', 'extra', 10),
(22, 'Plátano frito', '50.00', 'extra', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE `reservaciones` (
  `id_reservacion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nropersonas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `mensaje` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `contrasena`, `telefono`, `correo`, `direccion`) VALUES
(1, 'yeuryf007', '$2y$10$FYGqDFHY.aBJs/HAJVupRO1f6dFcPOuaU3tNIVGMcXbUkrjNn8w/S', '8298509876', 'YFPO0001@ce.pucmm.edu.do', '17 Calle Jose A. Brea Peña'),
(2, '123', '$2y$10$1SNvxTYzBS6myzx8uqbscu/BBXiYSjNQ1HKi.GZvjyTCYAqES7urO', '123', '123@123.com', '123'),
(3, 'qwe', '$2y$10$5XreoU6NN.E1JBmzGCLvl.MTsLRFtpgrdb3.k3UVFoJlH95eK65CS', 'qwe', 'qwe@mail.com', 'qwe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  ADD PRIMARY KEY (`id_pedido`,`id_producto`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `orden_carrito`
--
ALTER TABLE `orden_carrito`
  ADD PRIMARY KEY (`id_orden`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD PRIMARY KEY (`id_reservacion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `orden_carrito`
--
ALTER TABLE `orden_carrito`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  MODIFY `id_reservacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  ADD CONSTRAINT `detalle_orden_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`) ON DELETE CASCADE,
  ADD CONSTRAINT `detalle_orden_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE;

--
-- Filtros para la tabla `orden_carrito`
--
ALTER TABLE `orden_carrito`
  ADD CONSTRAINT `orden_carrito_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `orden_carrito_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD CONSTRAINT `reservaciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
