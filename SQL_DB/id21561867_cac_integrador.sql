-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-12-2023 a las 19:05:47
-- Versión del servidor: 10.5.20-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id21561867_cac_integrador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orador`
--

CREATE TABLE `orador` (
  `id_orador` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `tema` text NOT NULL,
  `fecha_alta` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `orador`
--

INSERT INTO `orador` (`id_orador`, `nombre`, `apellido`, `mail`, `tema`, `fecha_alta`) VALUES
(2, 'Fernando', 'Redivo', 'fernando@redivo.com', 'SQL', '2023-11-12'),
(3, 'Julieta', 'Quesada', 'julieta@quesada.com', 'Linux', '2023-11-10'),
(4, 'Rodolfo', 'Contreras', 'rodolfo@contreras.com', 'PHP', '2023-11-11'),
(5, 'Ramiro', 'Bellagio', 'ramiro@bellagio.com', 'HTML', '2023-11-16'),
(6, 'Federico', 'Montero', 'federico@montero.com', 'JavaScript', '2023-11-07'),
(7, 'Felipe ', 'Moreau', 'felipe@moreau.com', 'CSS', '2023-11-14'),
(8, 'Camila', 'Zamorano', 'camila@zamorano.com', 'Programación en lenguaje C++', '2023-11-10'),
(9, 'Gustavo', 'Escudero', 'gustavo@escudero.com', 'React JS', '2023-11-21'),
(10, 'Mariana', 'Alcaraz', 'mariana@alcaraz.com', 'Android', '2023-11-16'),
(11, 'Alejandro', 'Zapata', 'ale.zapata@gmail.com', 'Codo a Codo', '2023-12-07'),
(61, 'Miguel', 'Flores', 'miguel@flores.com.ar', 'Lorem ipsum dolor sit', '2023-12-13'),
(97, 'Angel ', 'Estrada', 'angel@estrada.com', 'Libros y revistas', '2023-12-14'),
(98, 'Angel ', 'Estrada', 'angel@estrada.com', 'Libros y revistas', '2023-12-14'),
(99, 'Angel ', 'Estrada', 'angel@estrada.com', 'Libros y revistas', '2023-12-14'),
(100, 'Angel ', 'Estrada', 'angel@estrada.com', 'Libros y revistas', '2023-12-14'),
(115, 'Walter', 'Toresani', 'w@tr.com', 'Futbol', '2023-12-15'),
(116, 'Ezequiel', 'Estrada', 'ezequiel.estrada@gmail.com', 'Historia Contemporánea', '2023-12-15'),
(117, 'Ezequiel', 'Estrada', 'ezequiel.estrada@gmail.com', 'Historia Argentina', '2023-12-15'),
(118, 'Ezequiel', 'Estrada', 'ezequiel.estrada@gmail.com', 'Historia Latinoamericana', '2023-12-15'),
(119, 'Ezequiel', 'Estrada', 'ezequiel.estrada@gmail.com', 'Historia ', '2023-12-15'),
(120, 'Ezequiel', 'Estrada', 'ezequiel.estrada@gmail.com', 'Historia Argentina', '2023-12-15'),
(121, 'Ezequiel', 'Estrada', 'ezequiel.estrada@gmail.com', 'Historia ', '2023-12-15'),
(122, 'Ezequiel', 'Estrada', 'ezequiel.estrada@gmail.com', 'Historia Argentina y Latinoamaricana', '2023-12-15'),
(123, 'Julio', 'Cortázar', 'julio@cortazar.com.ar', 'Rayuela', '2023-12-15'),
(125, 'Leonardo', 'Martínez', 'leo@martinez.com.ar', 'Tenis', '2023-12-15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `orador`
--
ALTER TABLE `orador`
  ADD PRIMARY KEY (`id_orador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `orador`
--
ALTER TABLE `orador`
  MODIFY `id_orador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
