-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 02-05-2024 a las 00:20:51
-- Versión del servidor: 5.7.39
-- Versión de PHP: 8.2.0
SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
    time_zone = "+00:00";

--
-- Base de datos: `Pozo_mensajes`
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `Mensajes`
--
CREATE TABLE
    `Mensajes` (
        `MensajeId` int (11) NOT NULL,
        `Telefono` text NOT NULL,
        `Texto` text NOT NULL,
        `Prioridad` text NOT NULL,
        `Estado` text NOT NULL,
        `UsuarioId` int (11) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `Usuarios`
--
CREATE TABLE
    `Usuarios` (
        `UsuarioId` int (11) NOT NULL,
        `correo` text NOT NULL,
        `contrasenia` text NOT NULL,
        `rol` text NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;

--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `Mensajes`
--
ALTER TABLE `Mensajes` ADD PRIMARY KEY (`MensajeId`),
ADD KEY `mensaje_usuario` (`UsuarioId`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios` ADD PRIMARY KEY (`UsuarioId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--
--
-- AUTO_INCREMENT de la tabla `Mensajes`
--
ALTER TABLE `Mensajes` MODIFY `MensajeId` int (11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios` MODIFY `UsuarioId` int (11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--
--
-- Filtros para la tabla `Mensajes`
--
ALTER TABLE `Mensajes` ADD CONSTRAINT `mensaje_usuario` FOREIGN KEY (`UsuarioId`) REFERENCES `Usuarios` (`UsuarioId`);

COMMIT;