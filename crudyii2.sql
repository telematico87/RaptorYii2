-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2021 a las 08:46:33
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crudyii2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `titulo`, `descripcion`, `categoria`) VALUES
(1, 'Lumen', 'Lumen is the perfect solution for building Laravel based micro-services and blazing fast APIs. In fact, it\'s one of the fastest micro-frameworks available. It has never been easier to write stunningly', 'MicroFramework'),
(2, 'Magento', ' is an ecommerce platform built on open source technology which provides online merchants with a flexible shopping cart system, as well as control.', 'e-commerce'),
(14, 'yii2', 'www.yiiframework.com. Yii is an open source, object-oriented, component-based MVC PHP web application framework. Yii is pronounced as \"Yee\" or [ji:] and in Chinese it means \"simple and evolutionary\" a', 'MVC'),
(15, 'Laravel', 'Laravel is a web application framework with expressive, elegant syntax. ... Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as au', 'MVC'),
(16, 'CakePHP', 'CakePHP is an open-source web, rapid development framework that makes building web applications simpler, faster and require less code. It follows the ', 'MVC'),
(17, 'Slim', 'Slim is a PHP micro framework that helps you quickly write simple yet powerful web applications and APIs.', 'MVC'),
(18, 'Joomla', 'Joomla! is a free and open-source content management system (CMS) for publishing web content. ... It is built on a model–view–controller web application framework that can be used independently of the', 'CMS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
