-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2021 a las 03:24:08
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dw3_gueiser_roni`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `productos_id` int(10) UNSIGNED NOT NULL,
  `usuario_fk` int(10) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `titulo` varchar(160) NOT NULL,
  `precio` decimal(6,2) UNSIGNED NOT NULL,
  `texto` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `imagen_descripcion` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`productos_id`, `usuario_fk`, `fecha`, `titulo`, `precio`, `texto`, `imagen`, `imagen_descripcion`) VALUES
(1, 4, '2021-11-03 00:00:00', 'Buzo', '1500.00', 'Buzo térmico liviano para entrenar a la noche. Abriga y ocupa poco espacio a la hora de guardar.', 'BuzoVerde.png', 'Buzo color verde para correr'),
(2, 4, '2021-11-03 00:00:00', 'Remera', '900.00', 'Remera Dri-Fit para una buena experiencia de entrenamiento donde el sudor no sea un peso para el cuerpo. Diseño simple con variante en su color.', 'remeraNegra.png', 'Remera color negra manga corta para running'),
(3, 5, '2021-11-03 00:00:00', 'Short', '1200.00', 'Short de entrenamiento. Cómodo, ligero y con suspensión interna para mayor comodidad a la hora de correr.', 'shortNegro.png', 'Short color negro, hasta las rodillas, para salir a correr'),
(4, 4, '2021-11-03 00:00:00', 'Calzas', '900.00', 'Calzas unisex para entrenar en invierno y no mantener el cuerpo en una buena temperatura. Ideal para utilizar debajo de un short o pantalón.', 'calzaNegra.png', 'Calzas color negra y ajustada para correr en invierno'),
(5, 5, '2021-11-03 00:00:00', 'Guantes', '750.00', 'Guantes para correr en invierno. Con su velcro sobre la muñeca no es necesario que te preocupes por si se desajusta, siempre estarán firmes y mantendrán tus manos a una buena temperatura.', 'guantesNegros.png', 'Guantes para el frio color negro que tapan hasta la mitad de los dedos'),
(6, 4, '2021-11-03 00:00:00', 'Bolso', '5500.00', 'Bolso ideal para llevar tu ropa de entrenamiento a cualquier lado. Con un compartimento central y dos pequeños en los costados, contiene suficiente espacio para toda la ropa y además poder guardar tus pertenencias como el celular, billetera o llaves.', 'bolsoNike.png', 'Bolso para guardar tu ropa color camuflado'),
(7, 5, '2021-11-03 00:00:00', 'Botella', '1500.00', 'Botella térmica ideal para no perder la temperatura del contenido. Tamaño ideal y con un diseño único para que puedas engancharlo en donde quieras o simplemente llevarlo en la mano.', 'botellaAzul.png', 'Botella para entrenar color azul con tapa'),
(8, 4, '2021-11-03 00:00:00', 'Porta Celular', '600.00', 'Un porta celular siempre es necesario ya que a la hora de correr no se utilizan los bolsillos del short/pantalón por su incomodidad. Con el porta celular te lo ajustas en el brazo y te olvidas del asunto.', 'portaCelular.png', 'Porta celulares para entrenar con belcro para atar en el brazo'),
(9, 5, '2021-11-03 00:00:00', 'Reloj', '8000.00', 'Reloj especial para medir pulsaciones, distancia recorrida, velocidad promedio y cantidad de pasos.', 'Reloj.png', 'Reloj color negro especial para deportes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_has_secciones`
--

CREATE TABLE `productos_has_secciones` (
  `productos_productos_id` int(10) UNSIGNED NOT NULL,
  `secciones_secciones_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rol_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_id`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `secciones_id` int(10) UNSIGNED NOT NULL,
  `secciones` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ususario_id` int(10) UNSIGNED NOT NULL,
  `rol_fk` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ususario_id`, `rol_fk`, `email`, `password`) VALUES
(4, 1, 'admin@admin.com', 'asdasd'),
(5, 1, 'sara@za.com', 'dsadsa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_passwords_reset`
--

CREATE TABLE `usuarios_passwords_reset` (
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `token` varchar(255) NOT NULL,
  `fecha_expiracion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`productos_id`),
  ADD KEY `fk_productos_usuarios_idx` (`usuario_fk`);

--
-- Indices de la tabla `productos_has_secciones`
--
ALTER TABLE `productos_has_secciones`
  ADD PRIMARY KEY (`productos_productos_id`,`secciones_secciones_id`),
  ADD KEY `fk_productos_has_secciones_secciones1_idx` (`secciones_secciones_id`),
  ADD KEY `fk_productos_has_secciones_productos1_idx` (`productos_productos_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`secciones_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ususario_id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_usuarios_roles_idx` (`rol_fk`);

--
-- Indices de la tabla `usuarios_passwords_reset`
--
ALTER TABLE `usuarios_passwords_reset`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `productos_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rol_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `secciones_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ususario_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_usuarios` FOREIGN KEY (`usuario_fk`) REFERENCES `usuarios` (`ususario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos_has_secciones`
--
ALTER TABLE `productos_has_secciones`
  ADD CONSTRAINT `fk_productos_has_secciones_productos1` FOREIGN KEY (`productos_productos_id`) REFERENCES `productos` (`productos_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_has_secciones_secciones1` FOREIGN KEY (`secciones_secciones_id`) REFERENCES `secciones` (`secciones_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_roles` FOREIGN KEY (`rol_fk`) REFERENCES `roles` (`rol_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios_passwords_reset`
--
ALTER TABLE `usuarios_passwords_reset`
  ADD CONSTRAINT `fk_usuarios_passwords_reset_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`ususario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
