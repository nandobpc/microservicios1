-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 02-05-2024 a las 00:24:00
-- Versión del servidor: 5.7.39
-- Versión de PHP: 8.2.0
SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
    time_zone = "+00:00";

--
-- Base de datos: `Pozo_reportes`
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `Reportes`
--
CREATE TABLE
    `Reportes` (
        `ReporteId` int (11) NOT NULL,
        `Tema` text NOT NULL,
        `UsuarioId` int (11) NOT NULL,
        `Fecha` date NOT NULL
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
-- Indices de la tabla `Reportes`
--
ALTER TABLE `Reportes` ADD PRIMARY KEY (`ReporteId`),
ADD KEY `reportes_usuario` (`UsuarioId`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios` ADD PRIMARY KEY (`UsuarioId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--
--
-- AUTO_INCREMENT de la tabla `Reportes`
--
ALTER TABLE `Reportes` MODIFY `ReporteId` int (11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios` MODIFY `UsuarioId` int (11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--
--
-- Filtros para la tabla `Reportes`
--
ALTER TABLE `Reportes` ADD CONSTRAINT `reportes_usuario` FOREIGN KEY (`UsuarioId`) REFERENCES `Usuarios` (`UsuarioId`);

COMMIT;