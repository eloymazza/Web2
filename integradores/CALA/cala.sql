-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2018 a las 22:26:06
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cala`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arbol`
--

CREATE TABLE `arbol` (
  `id_arbol` int(10) NOT NULL,
  `id_especie` int(10) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `latitud` int(10) NOT NULL,
  `longitud` int(10) NOT NULL,
  `flag` tinyint(1) NOT NULL,
  `anio_plantado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `arbol`
--

INSERT INTO `arbol` (`id_arbol`, `id_especie`, `descripcion`, `latitud`, `longitud`, `flag`, `anio_plantado`) VALUES
(1, 1, 'Le falta agua', 10, 5, 0, 1995),
(2, 1, 'Creciendo sano y fuerte', 15, 1, 0, 1999),
(3, 1, 'Le falta agua', 5, 2, 1, 1998),
(4, 1, 'Le falta agua', 8, 3, 0, 1993),
(5, 3, 'Creciendo sano y fuerte', 6, 6, 1, 1998),
(6, 3, 'Creciendo sano y fuerte', 3, 7, 1, 1996),
(7, 2, 'Le falta agua', 7, 8, 1, 1987),
(8, 2, 'Lo estan por talar', 22, 3, 0, 2000),
(9, 4, 'Presenta hongos malignos', 33, 22, 1, 1988),
(10, 4, 'Es el mas viejo de su zona', 22, 14, 0, 1960);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especie`
--

CREATE TABLE `especie` (
  `id_especie` int(10) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descripción` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `especie`
--

INSERT INTO `especie` (`id_especie`, `nombre`, `descripción`) VALUES
(1, 'Pino', ' Es muy tolerante del frío intenso del invierno, resistente a por lo menos -50 ° C, y también a la exposición al viento. \r\nLas semillas también se cosechan y se venden como piñones.No tienen valor nutricional.\r\n\r\n\r\n\r\n'),
(2, 'Nogal', 'Es un árbol de hoja caduca,de unos 25 metros de altura y 2 metros de diámetro en los ejemplares más grandes. Su tronco es corto y robusto de color blanquecino o gris claro, salen gruesas ramas para formar una gran copa y redondeada.'),
(3, 'Almendro ', 'El almendro es un árbol frutal.\r\nEste llama la atención porque además de ser comestible se suele utilizar mucho en la decoración,gracias a sus colores tan vistosos.\r\nEs un árbol que puede llegar a los 3 o 5 metros de altura\r\nSu floración es abundante.\r\n'),
(4, 'Cedro', 'Tiene un tronco recto o levemente inclinado. Las ramas salen horizontales, inclinándose los extremos hacia abajo, y las ramillas inferiores, por su ligereza, se apoyan sobre el suelo. La copa es cónica e incursada.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arbol`
--
ALTER TABLE `arbol`
  ADD PRIMARY KEY (`id_arbol`);

--
-- Indices de la tabla `especie`
--
ALTER TABLE `especie`
  ADD PRIMARY KEY (`id_especie`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arbol`
--
ALTER TABLE `arbol`
  MODIFY `id_arbol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `especie`
--
ALTER TABLE `especie`
  MODIFY `id_especie` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
