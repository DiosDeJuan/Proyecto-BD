-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 02:37:36
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafeteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE `acciones` (
  `Id` int(11) NOT NULL,
  `Accion` varchar(200) DEFAULT NULL,
  `Fecha` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `acciones`
--

INSERT INTO `acciones` (`Id`, `Accion`, `Fecha`) VALUES
(1, 'Se registr? una compra', '2023-11-12 15:59:35'),
(2, 'Se registr? una compra', '2023-11-12 19:26:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimento`
--

CREATE TABLE `alimento` (
  `PK_Alimento` tinyint(5) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Categoria` varchar(15) DEFAULT NULL,
  `Precio` smallint(10) DEFAULT NULL,
  `Descripcion` varchar(350) DEFAULT NULL,
  `Disponibilidad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alimento`
--

INSERT INTO `alimento` (`PK_Alimento`, `Nombre`, `Categoria`, `Precio`, `Descripcion`, `Disponibilidad`) VALUES
(1, 'Sandwich', 'Comida', 80, 'Pan integral con pechuga de pollo, germinado de alfalfa, jitomate, cebolla, lechuga o espinaca, panela, aderezo cesar.', 'Disponible'),
(2, 'Galletas', 'Postre', 40, 'Galletas con chispas de chocolate, galletas de avena o galletas de nuez.', 'Disponible'),
(3, 'Desayuno completo', 'Desayuno', 115, 'Chilaquiles (verdes, rojos, divorciados y/o con pollo), huevo al gusto y frijoles', 'Disponible'),
(4, 'Waffles', 'Postre', 115, 'Waffles con nieve (chocolate, vainilla o fresa), con frutas (kiwi, fresa, platano), con crema batida y/o chocolate', 'Disponible'),
(5, 'Pastel', 'Postre', 60, 'Rebanadas de pastel (chocolate, zanahoria y tres leches)', 'Disponible'),
(6, 'Muffin', 'Postre', 35, 'Chocolate, con chispas de chocolate, de zarzamora', 'Disponible'),
(7, 'Ensalada', 'Comida', 80, 'Ensalada Cesar, Ensalada Griega, Ensalada Waldorf', 'Disponible'),
(8, 'Flan', 'Postre', 45, 'Chocoflan y flan normal', 'Disponible'),
(9, 'Crepas', 'Postre', 50, 'Crepas de nutella con fruta, queso philadelphia con frutas o mermelada, crepa de pollo con crema de champi?ones o chile poblano (orden de 3 $110)', 'Disponible'),
(10, 'Croissant', 'Postre', 35, 'Relleno de chocolate y natural', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `PK_Bebida` tinyint(5) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Categoria` varchar(15) DEFAULT NULL,
  `Precio` smallint(10) DEFAULT NULL,
  `Descripcion` varchar(350) DEFAULT NULL,
  `Disponibilidad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`PK_Bebida`, `Nombre`, `Categoria`, `Precio`, `Descripcion`, `Disponibilidad`) VALUES
(1, 'Frappe', 'Bebida fria', 65, 'Bebida de salsa de chocolate con caf?, leche y hielo.', 'disponible'),
(2, 'Malteadas', 'Bebida fria', 65, 'Bebida a base de leche o helado, sabores (fresa, chocolate).', 'disponible'),
(3, 'Capuchino', 'Bebida caliente', 75, 'Bebida caliente preparada con cafe espresso y leche montada con vapor.', 'disponible'),
(4, 'Cafe Espresso', 'Bebida caliente', 40, 'Cafe Espresso.', 'disponible'),
(5, 'Cafe Americano', 'Bebida caliente', 40, 'Cafe Americano.', 'disponible'),
(6, 'Caramelo Macchiato', 'Bebida caliente', 75, 'Leche al vapor manchado con espresso y un toque de vainilla, cubierta con un caracter?stico dibujo de caramelo.', 'disponible'),
(7, 'Latte', 'Bebida caliente', 75, 'Caf? que lleva una o dos medidas de espresso, mucha leche vaporizada y una ultima y fina capa de espuma y leche por encima.', 'disponible'),
(8, 'Te', 'Bebida caliente', 35, 'Te verde, t? de manzanilla, t? negro, t? de frutos rojos.', 'disponible'),
(9, 'Caf? de olla', 'Bebida caliente', 40, 'Caf? de olla.', 'disponible'),
(10, 'Taro', 'Bebida caliente', 40, 'Bebida a base de leche y Taro.', 'disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `PK_Cliente` tinyint(6) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Celular` bigint(15) DEFAULT NULL,
  `Direccion` varchar(55) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`PK_Cliente`, `Nombre`, `Celular`, `Direccion`, `Correo`) VALUES
(1, 'Juan Perez', 3326082260, 'Calle Leon', 'juan_perez@gmail.com'),
(2, 'Maria Garcia', 3321119580, 'Calle Puebla', 'maria_garcia@gmail.com'),
(3, 'Pedro Hernandez', 3310259212, 'Calle Ninos Heroes', 'pedro_hernandez@gmail'),
(4, 'Ana Torres', 334496842, 'Calle Paris', 'ana.torres@gmail.com'),
(5, 'Luisa Rodriguez', 3377890420, 'Calle Morelos', 'luisa_rodriguez@gmail.com'),
(6, 'Jorge Martinez', 3378121611, 'Calle Juarez', 'jorge_martinez@gmail.com'),
(7, 'Marta Sanchez', 3308672707, 'Calle Escocia', 'martaSanchez@gmail.com'),
(8, 'Carlos Gomez', 3355189475, 'Calle Reforma', 'carlos_gomez@gmail.com'),
(9, 'Sofia Diaz', 3317973876, 'Quintana Roo', 'sofia_diaz@gmail.com'),
(10, 'Pablo Castro', 3333782299, 'Calle Roma', 'pablo_castro@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `PK_Codigo` tinyint(5) NOT NULL,
  `Cantidad` tinyint(10) DEFAULT NULL,
  `Metodo` varchar(10) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Alimento` tinyint(5) DEFAULT NULL,
  `Bebida` tinyint(5) DEFAULT NULL,
  `Cliente` tinyint(6) DEFAULT NULL,
  `Empleado` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`PK_Codigo`, `Cantidad`, `Metodo`, `Fecha`, `Alimento`, `Bebida`, `Cliente`, `Empleado`) VALUES
(1, 2, 'Efectivo', '2023-09-05', 4, 2, 1, 5678),
(2, 2, 'Credito', '2023-09-08', 5, 8, 2, 1234),
(3, 3, 'Efectivo', '2023-09-25', 3, 9, 3, 2021),
(4, 2, 'Credito', '2023-10-11', 1, 7, 4, 1819),
(5, 1, 'Efectivo', '2023-10-11', 2, 5, 5, 2021),
(6, 3, 'Credito', '2023-10-22', 5, 5, 6, 5678),
(7, 2, 'Efectivo', '2023-10-28', 10, 1, 7, 1234),
(8, 1, 'Credito', '2023-11-01', 3, 8, 8, 1234),
(9, 1, 'Efectivo', '2023-11-05', 3, 10, 9, 1819),
(10, 2, 'Credito', '2023-11-10', 1, 3, 10, 2021),
(11, 3, 'Efectivo', '2023-11-12', 5, 8, 5, 5678),
(12, 4, 'Credito', '2023-11-12', 7, 1, 8, 5678);

--
-- Disparadores `compra`
--
DELIMITER $$
CREATE TRIGGER `acciones_after_insert` AFTER INSERT ON `compra` FOR EACH ROW BEGIN
    INSERT INTO acciones (Accion) VALUES ('Se registr? una compra');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Nomina` smallint(6) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `ApeP` varchar(30) DEFAULT NULL,
  `ApeM` varchar(30) DEFAULT NULL,
  `Cargo` varchar(40) DEFAULT NULL,
  `Nacimiento` date DEFAULT NULL,
  `Celular` bigint(15) DEFAULT NULL,
  `Direccion` varchar(55) DEFAULT NULL,
  `Anios_trab` smallint(5) DEFAULT NULL,
  `Sexo` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Nomina`, `Nombre`, `ApeP`, `ApeM`, `Cargo`, `Nacimiento`, `Celular`, `Direccion`, `Anios_trab`, `Sexo`) VALUES
(1213, 'Ana', 'G?mez', 'S?nchez', 'Cocinero', '2002-04-04', 555, 'Calle 4 #456', 2, 'F'),
(1234, 'Juan', 'Garc?a', 'P?rez', 'Repartidor de calle', '1990-01-01', 555, 'Calle 1 #123', 5, 'M'),
(1415, 'Carlos', 'P?rez', 'Garc?a', 'Gerente', '1980-05-05', 555, 'Calle 5 #567', 15, 'M'),
(1617, 'Laura', 'Gonz?lez', 'Hern?ndez', 'Cajero', '1998-06-06', 555, 'Calle 6 #678', 1, 'F'),
(1819, 'Jorge', 'L?pez', 'Mart?nez', 'Mesero', '2000-07-07', 555, 'Calle 7 #789', 4, 'M'),
(2021, 'Sof?a', 'S?nchez', 'G?mez', 'Mesero', '1996-08-08', 555, 'Calle 8 #890', 2, 'F'),
(2223, 'Miguel', 'Garc?a', 'P?rez', 'Barista', '2004-09-09', 555, 'Calle 9 #901', 6, 'M'),
(2425, 'Luc?a', 'Hern?ndez', 'Gonz?lez', 'Barista', '1994-10-10', 555, 'Calle 10 #012', 3, 'F'),
(5678, 'Mar?a', 'Hern?ndez', 'Gonz?lez', 'Repartidor de calle', '1995-02-02', 555, 'Calle 2 #234', 3, 'F'),
(9101, 'Pedro', 'Mart?nez', 'L?pez', 'Cocinero', '1985-03-03', 555, 'Calle 3 #345', 10, 'M');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `prueba_de_vista`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `prueba_de_vista` (
`PK_Codigo` tinyint(5)
,`Metodo` varchar(10)
,`Fecha` date
,`Alimento` tinyint(5)
,`Bebida` tinyint(5)
,`Cliente` tinyint(6)
,`Total` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_recibo`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_recibo` (
`Metodo` varchar(10)
,`Fecha` date
,`nombre` varchar(30)
,`direccion` varchar(55)
,`celular` bigint(15)
,`Bebida` varchar(20)
,`precio_bebida` smallint(10)
,`Alimento` varchar(20)
,`precio_Alimento` smallint(10)
,`total` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `prueba_de_vista`
--
DROP TABLE IF EXISTS `prueba_de_vista`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `prueba_de_vista`  AS SELECT `compra`.`PK_Codigo` AS `PK_Codigo`, `compra`.`Metodo` AS `Metodo`, `compra`.`Fecha` AS `Fecha`, `compra`.`Alimento` AS `Alimento`, `compra`.`Bebida` AS `Bebida`, `compra`.`Cliente` AS `Cliente`, (select sum(`bebidas`.`Precio`) from `bebidas` where `bebidas`.`PK_Bebida` = `compra`.`Bebida`) + (select sum(`alimento`.`Precio`) from `alimento` where `alimento`.`PK_Alimento` = `compra`.`Alimento`) AS `Total` FROM `compra` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_recibo`
--
DROP TABLE IF EXISTS `vista_recibo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_recibo`  AS SELECT `compra`.`Metodo` AS `Metodo`, `compra`.`Fecha` AS `Fecha`, `cliente`.`Nombre` AS `nombre`, `cliente`.`Direccion` AS `direccion`, `cliente`.`Celular` AS `celular`, `bebidas`.`Nombre` AS `Bebida`, `bebidas`.`Precio` AS `precio_bebida`, `alimento`.`Nombre` AS `Alimento`, `alimento`.`Precio` AS `precio_Alimento`, (select sum(`bebidas`.`Precio`) from `bebidas` where `bebidas`.`PK_Bebida` = `compra`.`Bebida`) + (select sum(`alimento`.`Precio`) from `alimento` where `alimento`.`PK_Alimento` = `compra`.`Alimento`) AS `total` FROM (((`compra` join `cliente` on(`compra`.`Cliente` = `cliente`.`PK_Cliente`)) join `bebidas` on(`bebidas`.`PK_Bebida` = `compra`.`Bebida`)) join `alimento` on(`alimento`.`PK_Alimento` = `compra`.`Alimento`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `alimento`
--
ALTER TABLE `alimento`
  ADD PRIMARY KEY (`PK_Alimento`);

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`PK_Bebida`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`PK_Cliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`PK_Codigo`),
  ADD KEY `Alimento` (`Alimento`),
  ADD KEY `Bebida` (`Bebida`),
  ADD KEY `Cliente` (`Cliente`),
  ADD KEY `Empleado` (`Empleado`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Nomina`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acciones`
--
ALTER TABLE `acciones`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`Alimento`) REFERENCES `alimento` (`PK_Alimento`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`Bebida`) REFERENCES `bebidas` (`PK_Bebida`),
  ADD CONSTRAINT `compra_ibfk_3` FOREIGN KEY (`Cliente`) REFERENCES `cliente` (`PK_Cliente`),
  ADD CONSTRAINT `compra_ibfk_4` FOREIGN KEY (`Empleado`) REFERENCES `empleado` (`Nomina`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
