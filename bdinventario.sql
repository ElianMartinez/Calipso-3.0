-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2019 a las 21:05:47
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdinventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `COSTO` double DEFAULT NULL,
  `ALMACEN` int(11) DEFAULT NULL,
  `COD_ART_I` varchar(14) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBRE` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `RESUMEN` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_REF_I` varchar(14) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `REFERENCIA` varchar(14) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `REF_SUP_I` varchar(14) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_TP_I` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_ST_I` varchar(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_SUP_C` varchar(6) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_MC_I` int(11) DEFAULT NULL,
  `COD_DP_I` int(11) DEFAULT NULL,
  `GARANTIA` int(11) DEFAULT NULL,
  `CANTIDAD` double DEFAULT NULL,
  `CONSIGNADA` double DEFAULT NULL,
  `CAJA` double DEFAULT NULL,
  `RESERVADA` double DEFAULT NULL,
  `COD_ART_A` varchar(14) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PEDIDA` double DEFAULT NULL,
  `FACTURA` double DEFAULT NULL,
  `OFERTA` double DEFAULT NULL,
  `CANT_MIN` double DEFAULT NULL,
  `CANT_MAX` double DEFAULT NULL,
  `P_HACHE` double DEFAULT NULL,
  `MADERA` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `VALOR_1` double DEFAULT NULL,
  `VALOR_2` double DEFAULT NULL,
  `VALOR_3` double DEFAULT NULL,
  `VALOR_T` double DEFAULT NULL,
  `PIES` double DEFAULT NULL,
  `P_CENTRAL` double DEFAULT NULL,
  `P_TIENDA` double DEFAULT NULL,
  `NEWFIELD` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCUENTO` tinyint(1) DEFAULT NULL,
  `HACHE` double DEFAULT NULL,
  `CENTRAL` double DEFAULT NULL,
  `TIENDA` double DEFAULT NULL,
  `COSTO_AUTO` tinyint(1) DEFAULT NULL,
  `REF_COSTO` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COSTO_PROM` double DEFAULT NULL,
  `COSTO_PRMA` double DEFAULT NULL,
  `COSTO_ULT` double DEFAULT NULL,
  `COSTO_FOB` double DEFAULT NULL,
  `ARANCEL` double DEFAULT NULL,
  `FACTOR` double DEFAULT NULL,
  `PRECIO_1` double DEFAULT NULL,
  `PRECIO_2` double DEFAULT NULL,
  `PRECIO_3` double DEFAULT NULL,
  `PRECIO_4` double DEFAULT NULL,
  `PRECIO_5` double DEFAULT NULL,
  `PRECIO_C1` double DEFAULT NULL,
  `PRECIO_C2` double DEFAULT NULL,
  `PRECIO_C3` double DEFAULT NULL,
  `PRECIO_C4` double DEFAULT NULL,
  `PRECIO_C5` double DEFAULT NULL,
  `DIFER_2` double DEFAULT NULL,
  `DIFER_3` double DEFAULT NULL,
  `DIFER_4` double DEFAULT NULL,
  `BENEF_1` double DEFAULT NULL,
  `BENEF_2` double DEFAULT NULL,
  `BENEF_3` double DEFAULT NULL,
  `BENEF_4` double DEFAULT NULL,
  `ENSAMBLE` tinyint(1) DEFAULT NULL,
  `ETIQUETAS` tinyint(1) DEFAULT NULL,
  `SERIAL_COM` tinyint(1) DEFAULT NULL,
  `SERIAL` tinyint(1) DEFAULT NULL,
  `VENCE` tinyint(1) DEFAULT NULL,
  `SEGURO` tinyint(1) DEFAULT NULL,
  `COD_ART_S` varchar(14) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SEG_VALOR` double DEFAULT NULL,
  `NOTAS` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `STATUS` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `UNIDAD` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `UBICACION` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `USR_MODI` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `USR_TIME` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `USR_DATE` datetime DEFAULT NULL,
  `FEC_CREA` datetime DEFAULT NULL,
  `ULT_COMPRA` datetime DEFAULT NULL,
  `ULT_VENTA` datetime DEFAULT NULL,
  `ULT_CAMBIO` datetime DEFAULT NULL,
  `ULT_ESPECI` datetime DEFAULT NULL,
  `ULT_PEDIDO` datetime DEFAULT NULL,
  `FEC_LLEGA` datetime DEFAULT NULL,
  `ULT_ENTRA` datetime DEFAULT NULL,
  `TIPO_EE` varchar(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NUM_EE_I` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ULT_SALE` datetime DEFAULT NULL,
  `TIPO_SS` varchar(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NUM_SS_I` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FEC_VEN` datetime DEFAULT NULL,
  `CAMBIO` double DEFAULT NULL,
  `VAL_CAMBIO` double DEFAULT NULL,
  `CONTENIDO` int(11) DEFAULT NULL,
  `DETALLE` tinyint(1) DEFAULT NULL,
  `IMPUESTO` tinyint(1) DEFAULT NULL,
  `UNIDAD1` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FORMA1` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FORMA2` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SIN_EXI` tinyint(1) DEFAULT NULL,
  `INCREMENTO` double DEFAULT NULL,
  `COMISION` double DEFAULT NULL,
  `DESC1` double DEFAULT NULL,
  `FORMULA` int(11) DEFAULT NULL,
  `SUBSIDIO` double DEFAULT NULL,
  `CANTIDAD1` double DEFAULT NULL,
  `FORMA` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CONSIG` tinyint(1) DEFAULT NULL,
  `COMI_1` double DEFAULT NULL,
  `COMI_2` double DEFAULT NULL,
  `COMI_3` double DEFAULT NULL,
  `COMI_4` double DEFAULT NULL,
  `PESO` tinyint(1) DEFAULT NULL,
  `NOMBRE_ART` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `VEN_CON` double DEFAULT NULL,
  `NEWFIELD1` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_IR_F` int(11) DEFAULT NULL,
  `TASA` double DEFAULT NULL,
  `NEWFIELD2` varchar(14) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `RUTA_IMAG` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CANT_VTA` double DEFAULT NULL,
  `LABEL1` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `LABEL2` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `LABEL3` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `LABEL4` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `LABEL5` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `IDX_CANT` bigint(20) DEFAULT NULL,
  `RECARG_TAR` double DEFAULT NULL,
  `CANT_DECI` int(11) DEFAULT NULL,
  `NOTA_1` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOTA_2` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOTA_3` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE `bancos` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`ID`, `NOMBRE`) VALUES
(1, 'Banco del Progreso'),
(2, 'Banco Popular'),
(3, 'Banco del Comercio Dominicano'),
(4, 'BANCO LEON'),
(5, 'Banco Gerencial y Fiduciario'),
(6, 'Banco de Reservas'),
(8, 'BANCO CARIB'),
(9, 'CITIBANK'),
(10, 'Banco Mercantil'),
(11, 'Banco Metropolitano'),
(12, 'SCOTIABANK'),
(13, 'Banco del Exterior Dominicano'),
(21, 'Banco Ademi'),
(23, 'Banco Dominicano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `ID_bitacora` int(11) NOT NULL,
  `Usuario` varchar(60) COLLATE utf16_spanish2_ci NOT NULL,
  `Accion` varchar(200) COLLATE utf16_spanish2_ci NOT NULL,
  `Hora` datetime NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `COD_CD_F` int(11) NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `RESUMEN` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`COD_CD_F`, `NOMBRE`, `RESUMEN`) VALUES
(2, 'Distrito Nacional', 'DN'),
(3, 'La Vega', 'La Vega'),
(4, 'Puerto Plata', 'Pto. Plata'),
(5, 'San Francisco de Macoris', 'SF MACORIS'),
(6, 'VILLA ALTAGRACIA', 'VILLA ALT.'),
(8, 'San Pedro de Macoris', 'SP MACORIS'),
(9, 'La Romana', 'LA ROMANA'),
(10, 'MIAMI-FLORIDA', 'MIAMI,FL'),
(12, 'DEERFIELD BEACH', 'DEERFIELD'),
(13, 'HIGUEY', 'HIGUEY'),
(14, 'CHICAGO', 'CHICAGO'),
(15, 'HATO MAYOR', 'HATO MAYOR'),
(16, 'BONAO', 'BONAO'),
(17, 'COTUI', 'COTUI'),
(18, 'San Juan De La Maguana', 'S.J. MAG.'),
(19, 'Azua', 'Azua'),
(20, 'NAGUA', 'NAGUA'),
(21, 'Bani', 'Bani'),
(22, 'JARABACOA', 'JARABACOA'),
(23, 'Barahona', 'Barahona'),
(24, 'MAO', 'MAO'),
(25, 'MOCA', 'MOCA'),
(26, 'CONSTANZA', 'CONSTANZA'),
(27, 'DAJABON', 'DAJABON'),
(28, 'SANCHEZ', 'SAMANA'),
(29, 'RIO SAN JUAN', 'RIO S. J.'),
(30, 'SOSUA', 'PTO. PLATA'),
(31, 'SAN JOSE DE OCOA', 'OCOA'),
(32, 'Neyba', 'Neyba'),
(33, 'Consuelo', 'Consuelo'),
(34, 'SANTO DOMINGO,ESTE', 'STO.DGO.ES'),
(35, 'SANTO DOMINGO,OESTE', 'STO.DGO.OE'),
(36, 'SANTO DOMINGO,NORTE', 'STO.DGO.NE'),
(37, 'CASTELLON', 'CASTELLON'),
(38, 'SANTAFE DE BOGOTA', 'BOGOTA'),
(39, 'FOSHAN', 'FOSHAN'),
(40, 'SANTA CATARINA', 'BR'),
(41, 'SHANGHAI', 'SHAN'),
(43, 'COLONIA TRINADAD GUATEM', 'GUATE'),
(44, 'San Cristobal', 'S.C'),
(45, 'Tokio', 'TK'),
(46, 'San Francisco ', 'SF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `COD_TP_C` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CREDITO` tinyint(1) DEFAULT NULL,
  `COD_CLI_F` varchar(6) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_CLI_A` varchar(6) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBRE` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_EMP_F` bigint(20) DEFAULT NULL,
  `COD_PF_F` int(11) DEFAULT NULL,
  `COD_VND_F` varchar(6) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CONTACTO_1` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CONTACTO_2` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `RNC` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `VAL_AHORRO` double DEFAULT NULL,
  `TOT_AHORRO` double DEFAULT NULL,
  `BALANCE` double DEFAULT NULL,
  `FICHA` varchar(14) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FEC_CREA` datetime DEFAULT NULL,
  `FEC_NAC` datetime DEFAULT NULL,
  `FEC_ADM` datetime DEFAULT NULL,
  `STATUS` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PAGO` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PORCIENTO` double DEFAULT NULL,
  `CALLE` varchar(35) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SECTOR` varchar(35) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_CD_F` int(11) DEFAULT NULL,
  `COD_ZN_F` int(11) DEFAULT NULL,
  `NOTAS` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COMENTARIO` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TELEFONO` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TELEFONO1` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TELEFONO2` varchar(13) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FEC_DOC` datetime DEFAULT NULL,
  `FAX` varchar(13) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `BEEPER` varchar(13) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CELULAR` varchar(13) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `EMAIL` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `AP_POSTAL` int(11) DEFAULT NULL,
  `LIMITE_CR` double DEFAULT NULL,
  `SOBREGIRO` double DEFAULT NULL,
  `DIAS_COBRO` int(11) DEFAULT NULL,
  `DIAS_ADD` int(11) DEFAULT NULL,
  `CTRL_PRE` int(11) DEFAULT NULL,
  `PRECIO` int(11) DEFAULT NULL,
  `PRE_AUTO` tinyint(1) DEFAULT NULL,
  `DESCUENTO` double DEFAULT NULL,
  `PRIORIDAD` int(11) DEFAULT NULL,
  `USUARIO` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `USR_MODI` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `USR_FECHA` datetime DEFAULT NULL,
  `USR_HORA` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CTA` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TIPO` varchar(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NUM_DOC` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NUM_PED` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NUM_PED1` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NUM_PED2` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NUM_PED3` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NUM_PED4` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CTA_P` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CARNET` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOTA_1` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOTA_2` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOTA_3` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOTA_4` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CEDULA` varchar(14) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ACUMULADO` double DEFAULT NULL,
  `NUM_ORD` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NUM_CF` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `INCLUIDO` tinyint(1) DEFAULT NULL,
  `FEC_DIA` datetime DEFAULT NULL,
  `PERSONAS` int(11) DEFAULT NULL,
  `NOMBRES` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `APELLIDOS` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_ART_1` varchar(14) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FEC_DOC_1` datetime DEFAULT NULL,
  `BALANCE_S` double DEFAULT NULL,
  `LIMITE_SU` double DEFAULT NULL,
  `CEDULA1` varchar(11) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MONTO` double DEFAULT NULL,
  `USUARIO1` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `AVANCE` tinyint(1) DEFAULT NULL,
  `NUM_AVA` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MON_AVA` double DEFAULT NULL,
  `FEC_AVA` datetime DEFAULT NULL,
  `VALOR` double DEFAULT NULL,
  `SOCIO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `ID` int(11) NOT NULL,
  `USUARIO` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBRE` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ACCESO` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CTA` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_GP_C` int(11) DEFAULT NULL,
  `COMENTARIO` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PRECIO` int(11) DEFAULT NULL,
  `DESCUENTO` tinyint(1) DEFAULT NULL,
  `COSTO` tinyint(1) DEFAULT NULL,
  `COMISION` tinyint(1) DEFAULT NULL,
  `STATUS` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOTAS` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NIVEL` int(11) DEFAULT NULL,
  `CATEGORIA` int(11) DEFAULT NULL,
  `TIPO` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MONTO_1` double DEFAULT NULL,
  `MONTO_2` double DEFAULT NULL,
  `MONTO_F` double DEFAULT NULL,
  `ALMACEN` int(11) DEFAULT NULL,
  `FECHA` datetime DEFAULT NULL,
  `USUARIO1` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TIPOS1` varchar(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TIPOS2` varchar(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ACCESONUM` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_PRN` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `IMG` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `control`
--

INSERT INTO `control` (`ID`, `USUARIO`, `NOMBRE`, `ACCESO`, `CTA`, `COD_GP_C`, `COMENTARIO`, `PRECIO`, `DESCUENTO`, `COSTO`, `COMISION`, `STATUS`, `NOTAS`, `NIVEL`, `CATEGORIA`, `TIPO`, `MONTO_1`, `MONTO_2`, `MONTO_F`, `ALMACEN`, `FECHA`, `USUARIO1`, `TIPOS1`, `TIPOS2`, `ACCESONUM`, `COD_PRN`, `IMG`) VALUES
(1, 'ISAAC', 'ISAAC PEREZ', 'I', 'A', 1, 'ADMINISTRADOR DE SISTEMAS', 4, 1, 1, 1, 'D', '          ', 1, 1, NULL, 5000, 43246.5, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, 'http://192.168.1.31/Vistas/assets/images/administrador-icono-png-3.png'),
(3, 'VENTAS', 'VENTAS', '1234', 'A', 4, 'VENTAS', 1, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 1854.2, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'FLORA', 'FLORA ROSARIO', 'DARI', 'A', 9, 'ASISTENTE ADMINISTRATIVA', 4, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'http://192.168.1.24/Vistas/assets/images/219961.png'),
(5, 'SANTA', 'SANTA MARTICH', 'SANTA', 'A', 8, 'ASISTENTE DE VENTAS', 4, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'LEYDIS', 'LEYDIS SANCHEZ', NULL, 'A', 6, 'RECEPCION', 4, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'DORKIS', 'FANNY SALOMON', 'PLANCHA', 'A', 9, 'DPTO. ADMINISTRATIVO (COBROS)', 4, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'SONIA', 'SONIA CIPRIAN', '1109', 'A', 9, 'DPTO. ADMINISTRATIVO (COBROS)', 4, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'LAURENE', 'LAURENE POLANCO', '0790', 'A', 6, 'RECEPCION', 4, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'RAQUEL', 'SONIA CIPRIAN MIRANDA', '0911', 'A', 9, 'DPTO. ADMINISTRATIVO (COBROS)', 4, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'FANNY', 'DIANE SALOMON', 'PLANCHA', 'A', 9, 'DPTO. ADMINISTRATIVO (COBROS)', 4, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'JENNIFER', 'JENNIFER SEPULVEDA', 'JENNI', 'A', 8, NULL, 4, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'JOHANNA', 'JOHANNA REYES', 'PLANCHA', 'A', 9, 'DPTO. ADMINISTRATIVO (COBROS)', 1, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'YANDRA', 'YANDRA MONTERO', '01MAYO83', 'A', 8, 'ASISTENTE DE VENTAS (TRAFICO)', 1, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'CARMEN', 'CARMEN ABREU', '0110', 'A', 6, 'RECEPCION/ASIS. ADMINISTRATIVA', 1, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'CORAL', 'CORAL', 'RECEP', 'A', 6, 'RECEPCION/ASIST.ADMINISTRATIVA', 1, 0, 0, 0, 'D', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'JESSICA', 'JESSICA NAVA', 'ASIST', 'A', 8, 'ASISTENTE VENTAS', 1, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'IRAN', 'IRAN DISLA', 'IRAN', 'A', 6, NULL, 1, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'WENDY', 'WENDY ABAD', 'ABAD1', 'A', 8, 'ASIST. VENTAS', 1, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'MARIA', 'MARIA DEL PILAR', 'DEL PILA', 'A', 9, NULL, 1, 0, 0, 0, 'E', '          ', 0, 0, NULL, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'ALE', 'ALE', NULL, 'A', 0, NULL, 1, 0, 0, 0, NULL, '          ', 0, 0, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'MAELO', 'MAELO', NULL, 'A', 0, NULL, 1, 0, 0, 0, NULL, '          ', 0, 0, NULL, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'FELIPE', 'LUIS FELIPE', 'ma', NULL, 20065, 'GERENTE DE ALMACEN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'http://192.168.1.31/Vistas/assets/images/facebook-avatar.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dato_empresa`
--

CREATE TABLE `dato_empresa` (
  `EMAIL` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBRE` varchar(35) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DIRECCION` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_CD_F` int(11) DEFAULT NULL,
  `TELEFONO_1` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TELEFONO_2` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FAX` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FAX_2` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `RNC` varchar(11) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `INCLUIDO` tinyint(1) DEFAULT NULL,
  `TITULO` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FILA` int(11) DEFAULT NULL,
  `COLUMNA` int(11) DEFAULT NULL,
  `ALMACEN_1` int(11) DEFAULT NULL,
  `ALMACEN_2` int(11) DEFAULT NULL,
  `ALMACEN_3` int(11) DEFAULT NULL,
  `ALMACEN_4` int(11) DEFAULT NULL,
  `ALMACEN_T1` int(11) DEFAULT NULL,
  `ALMACEN_T2` int(11) DEFAULT NULL,
  `ALMACEN_T3` int(11) DEFAULT NULL,
  `ALMACEN_T4` int(11) DEFAULT NULL,
  `PATH` varchar(170) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PATH1` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `IMPUESTO` double DEFAULT NULL,
  `FECHA` datetime DEFAULT NULL,
  `NCF1` varchar(11) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NCF2` varchar(11) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NCF3` varchar(11) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NCF4` varchar(11) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `STATUS` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ENCABEZA` tinyint(1) DEFAULT NULL,
  `NOTA_1` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOTA_2` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOTA_3` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOTA_4` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DIAS` bigint(20) DEFAULT NULL,
  `FEC_DOC` datetime DEFAULT NULL,
  `PRNDOCFIS` tinyint(1) DEFAULT NULL,
  `PUERTOS` int(11) DEFAULT NULL,
  `BAUDIOS` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_1` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_2` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_3` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_4` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_5` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_6` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_7` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_8` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_9` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_10` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_11` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_12` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_13` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_14` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_15` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_16` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_17` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_18` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_19` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_20` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_21` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_22` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_23` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_24` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_25` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_26` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_27` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_28` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_29` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_30` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_31` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_32` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_33` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_34` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_35` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_36` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_37` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_38` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_39` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MENS_40` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `LEY` double DEFAULT NULL,
  `IMPUESTO2` double DEFAULT NULL,
  `IMPUESTO3` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `dato_empresa`
--

INSERT INTO `dato_empresa` (`EMAIL`, `NOMBRE`, `DIRECCION`, `COD_CD_F`, `TELEFONO_1`, `TELEFONO_2`, `FAX`, `FAX_2`, `RNC`, `INCLUIDO`, `TITULO`, `FILA`, `COLUMNA`, `ALMACEN_1`, `ALMACEN_2`, `ALMACEN_3`, `ALMACEN_4`, `ALMACEN_T1`, `ALMACEN_T2`, `ALMACEN_T3`, `ALMACEN_T4`, `PATH`, `PATH1`, `IMPUESTO`, `FECHA`, `NCF1`, `NCF2`, `NCF3`, `NCF4`, `STATUS`, `ENCABEZA`, `NOTA_1`, `NOTA_2`, `NOTA_3`, `NOTA_4`, `DIAS`, `FEC_DOC`, `PRNDOCFIS`, `PUERTOS`, `BAUDIOS`, `MENS_1`, `MENS_2`, `MENS_3`, `MENS_4`, `MENS_5`, `MENS_6`, `MENS_7`, `MENS_8`, `MENS_9`, `MENS_10`, `MENS_11`, `MENS_12`, `MENS_13`, `MENS_14`, `MENS_15`, `MENS_16`, `MENS_17`, `MENS_18`, `MENS_19`, `MENS_20`, `MENS_21`, `MENS_22`, `MENS_23`, `MENS_24`, `MENS_25`, `MENS_26`, `MENS_27`, `MENS_28`, `MENS_29`, `MENS_30`, `MENS_31`, `MENS_32`, `MENS_33`, `MENS_34`, `MENS_35`, `MENS_36`, `MENS_37`, `MENS_38`, `MENS_39`, `MENS_40`, `LEY`, `IMPUESTO2`, `IMPUESTO3`) VALUES
('isaac_perez69@hotmail.com', 'MENDEZ AUTO IMPORT, SRL', 'C/Mendoza No.27,Alma Rosa,', 34, '809-595-1432', '809-523-5233', '809-689-1563', NULL, '131424465', 0, '2', 6, 12, 1, 1, 1, 0, 1, 1, 1, 1, '.\\DATA;.\\PRGS;.\\AYUDA;.\\SCXS;.\\FRXS;.\\LABELS;.\\APPS;c:\\calipso\\data;L:\\PF', 'C:\\CALIPSO\\DATA', 18, '2021-02-01 00:00:00', '99999999999', '0', '0', 'ALT+F5', 'A', 0, 'Esta factura devengara un interes de un 2% mensual a partir', 'De la fecha de vencimiento.-', NULL, NULL, 5000, '2015-02-14 00:00:00', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_permisos`
--

CREATE TABLE `detalle_permisos` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(65) COLLATE utf8_spanish2_ci NOT NULL,
  `ID_Modulo` int(11) NOT NULL,
  `PERMISO` varchar(2) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `detalle_permisos`
--

INSERT INTO `detalle_permisos` (`ID`, `NOMBRE`, `ID_Modulo`, `PERMISO`) VALUES
(1, 'NOMBRE', 2, 'SI'),
(2, 'ESTATUS', 2, 'SI'),
(3, 'ALMACEN', 2, 'SI'),
(4, 'PRECIO_1', 2, 'SI'),
(5, 'PRECIO_2', 2, 'SI'),
(6, 'PRECIO_3', 2, 'SI'),
(7, 'COSTO_PROM', 2, 'SI'),
(8, 'IMPUESTOS', 2, 'SI'),
(9, 'DESCUENTOS', 2, 'SI'),
(10, 'NOMBRE', 7, 'SI'),
(11, 'CONTACTO', 7, 'SI'),
(12, 'CALLE', 7, 'SI'),
(13, 'RNC', 7, 'SI'),
(14, 'COD_PD_F', 7, 'SI'),
(15, 'NOMBRE', 13, 'SI'),
(16, 'CONTACTO', 13, 'SI'),
(17, 'CALLE', 13, 'SI'),
(18, 'SECTOR', 13, 'SI'),
(19, 'RNC', 13, 'SI'),
(20, 'SECTOR', 7, 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impuestos`
--

CREATE TABLE `impuestos` (
  `COD_IR_F` int(11) NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `RESUMEN` varchar(6) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TASA` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `impuestos`
--

INSERT INTO `impuestos` (`COD_IR_F`, `NOMBRE`, `RESUMEN`, `TASA`) VALUES
(1, 'IMPUESTO 18', 'ITBIS', 18),
(2, 'SELECTIVO', 'SELE', 16),
(9, 'IMPUESTOS SOBRE LA RENTA', 'IPR', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro_ciudades`
--

CREATE TABLE `maestro_ciudades` (
  `COD_CD_F` int(11) DEFAULT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `RESUMEN` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `maestro_ciudades`
--

INSERT INTO `maestro_ciudades` (`COD_CD_F`, `NOMBRE`, `RESUMEN`) VALUES
(1, 'Santo Domingo', 'Sto.Dgo.'),
(2, 'Distrito Nacional', 'DN'),
(3, 'La Vega', 'La Vega'),
(4, 'Puerto Plata', 'Pto. Plata'),
(5, 'San Francisco de Macoris', 'SF MACORIS'),
(6, 'VILLA ALTAGRACIA', 'VILLA ALT.'),
(7, 'San Cristobal', 'SAN CRIST.'),
(8, 'San Pedro de Macoris', 'SP MACORIS'),
(9, 'La Romana', 'LA ROMANA'),
(10, 'MIAMI-FLORIDA', 'MIAMI,FL'),
(11, 'NEW YORK', 'NEW YORK'),
(12, 'DEERFIELD BEACH', 'DEERFIELD'),
(13, 'HIGUEY', 'HIGUEY'),
(14, 'CHICAGO', 'CHICAGO'),
(15, 'HATO MAYOR', 'HATO MAYOR'),
(16, 'BONAO', 'BONAO'),
(17, 'COTUI', 'COTUI'),
(18, 'San Juan De La Maguana', 'S.J. MAG.'),
(19, 'Azua', 'Azua'),
(20, 'NAGUA', 'NAGUA'),
(21, 'Bani', 'Bani'),
(22, 'JARABACOA', 'JARABACOA'),
(23, 'Barahona', 'Barahona'),
(24, 'MAO', 'MAO'),
(25, 'MOCA', 'MOCA'),
(26, 'CONSTANZA', 'CONSTANZA'),
(27, 'DAJABON', 'DAJABON'),
(28, 'SANCHEZ', 'SAMANA'),
(29, 'RIO SAN JUAN', 'RIO S. J.'),
(30, 'SOSUA', 'PTO. PLATA'),
(31, 'SAN JOSE DE OCOA', 'OCOA'),
(32, 'Neyba', 'Neyba'),
(33, 'Consuelo', 'Consuelo'),
(34, 'SANTO DOMINGO,ESTE', 'STO.DGO.ES'),
(35, 'SANTO DOMINGO,OESTE', 'STO.DGO.OE'),
(36, 'SANTO DOMINGO,NORTE', 'STO.DGO.NE'),
(37, 'CASTELLON', 'CASTELLON'),
(38, 'SANTAFE DE BOGOTA', 'BOGOTA'),
(39, 'FOSHAN', 'FOSHAN'),
(40, 'SANTA CATARINA', 'BR'),
(41, 'SHANGHAI', 'SHAN'),
(42, 'SANTIAGO', 'SGO'),
(43, 'COLONIA TRINADAD GUATEM', 'GUATE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maetro_permisos`
--

CREATE TABLE `maetro_permisos` (
  `COD_GP_C` int(11) DEFAULT NULL,
  `NOMBRE` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `maetro_permisos`
--

INSERT INTO `maetro_permisos` (`COD_GP_C`, `NOMBRE`) VALUES
(1, 'ADMINISTRADOR DE SISTEMAS'),
(20065, 'GERENTES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo_roles`
--

CREATE TABLE `modulo_roles` (
  `ID` int(11) NOT NULL,
  `CODIGO` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBRE` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PERMISO` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `COD_GP_C` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `modulo_roles`
--

INSERT INTO `modulo_roles` (`ID`, `CODIGO`, `NOMBRE`, `PERMISO`, `COD_GP_C`) VALUES
(1, '1', 'MAESTROS', 'SI', 1),
(2, '1001-01', 'REGISTRO DE INVENTARIO', 'SI', 1),
(3, '1001-02', 'TIPOS DE ARTICULOS / SUB TIPOS', 'SI', 1),
(4, '1001-03', 'ALMACEN', 'SI', 1),
(5, '1001-04', 'MARCAS', 'SI', 1),
(6, '1002', 'CLIENTES', 'SI', 1),
(7, '1002-01', 'REGISTRO DE CLIENTES', 'SI', 1),
(8, '1002-02', 'TIPOS DE CLIENTES', 'SI', 1),
(9, '1003', 'VENDEDORES', 'SI', 1),
(10, '1003-01', 'REGISTRO DE VENDEDORES', 'SI', 1),
(11, '1003-02', 'TIPOS DE VENDEDORES', 'SI', 1),
(12, '1004', 'SUPLIDORES', 'SI', 1),
(13, '1004-01', 'REGISTRO DE SUPLIDORES', 'SI', 1),
(14, '1004-02', 'TIPOS DE SUPLIDORES', 'SI', 1),
(15, '1001', 'INVENTARIO', 'SI', 1),
(16, '2', 'OPERACIONES', 'SI', 1),
(17, '3', 'REPORTES', 'SI', 1),
(18, '4', 'PROCEDIMIENTOS', 'SI', 1),
(19, '5', 'CONFIGURACIONES', 'SI', 1),
(20, '2001', 'VENTAS', 'SI', 1),
(21, '2001-01', 'VENTAS CONTADO', 'SI', 1),
(22, '2001-02', 'VENTAS CREDITO', 'SI', 1),
(23, '2001-03', 'CUADRE DE CAJA', 'SI', 1),
(24, '2001-04', 'COTIZACIONES', 'SI', 1),
(25, '2001-05', 'PREVENTAS AL CONTADO', 'SI', 1),
(26, '2001-06', 'PREVENTAS A CREDITO', 'SI', 1),
(27, '2001-07', 'ORDEN DE PEDIDO', 'SI', 1),
(28, '2002', 'CUENTAS POR COBRAR', 'SI', 1),
(29, '2002-01', 'INGRESOS', 'SI', 1),
(30, '2002-01-01', 'RECIBOS NORMALES', 'SI', 1),
(31, '2002-01-02', 'PAGOS CON TARJETA', 'SI', 1),
(32, '2002-01-03', 'RECIBOS DE AVANCES', 'SI', 1),
(33, '2002-01-04', 'INGRESO POR TARJETA', 'SI', 1),
(34, '2002-01-05', 'PREVENTAS AL CONTADO', 'SI', 1),
(35, '2002-01-06', 'OTROS INGRESOS', 'SI', 1),
(36, '2002-01-07', 'REIMPRIMIR RECIBO', 'SI', 1),
(37, '2002-02', 'NOTA DE DEBITO', 'SI', 1),
(38, '2002-03', 'NOTA DE CREDITO', 'SI', 1),
(39, '2002-04', 'OTROS', 'SI', 1),
(40, '2002-04-01', 'CREDITOS POR APLICAR', 'SI', 1),
(41, '2002-04-02', 'AVANCES PENDIENTES', 'SI', 1),
(42, '2002-05', 'REIMPRESION', 'SI', 1),
(43, '2002-05-02', 'NOTAS DE CREDITO', 'SI', 1),
(44, '2002-06', 'NOTA DE DEBITO SIN NCF', 'SI', 1),
(45, '2002-07', 'NOTA DE CREDITO SIN NCF', 'SI', 1),
(46, '2003', 'COTIZACIONES', 'SI', 1),
(47, '3001', 'COTIZACIONES2', 'SI', 1),
(48, '3002', 'OREDEN DE VENTAS', 'SI', 1),
(49, '3003', 'PUNTO DE VENTAS', 'SI', 1),
(50, '3003-01', 'VENTAS POR CUADRAR', 'SI', 1),
(51, '3003-02', 'VENTAS DEL DIA', 'SI', 1),
(52, '3003-03', 'FACTURA EMITIDAS', 'SI', 1),
(53, '3003-04', 'DEVOLUCION DE MERCANCIA', 'SI', 1),
(54, '3003-05', 'CREDITOS POR APLICAR', 'SI', 1),
(55, '3003-06', 'TRANSACCIONES DIARIAS', 'SI', 1),
(56, '3003-07', 'TRANSACCIONES DE PAGO POR CUADRAR', 'SI', 1),
(57, '3003-08', 'TRANSACCIONES GRALES', 'SI', 1),
(58, '3004', 'CUENTAS POR COBRAR', 'SI', 1),
(59, '3004-01', 'DOCUMENTOS PENDIENTES', 'SI', 1),
(60, '3004-02', 'ESTADO DE CUENTAS', 'SI', 1),
(61, '3004-03', 'HISTORIAL DEL CLIENTE', 'SI', 1),
(62, '3004-04', 'FACTURAS EMITIDAS', 'SI', 1),
(63, '3004-05', 'RECIBOS DE INGRESOS', 'SI', 1),
(64, '3004-06', 'DEVOLUCION DE MERCANCIAS DIARIAS', 'SI', 1),
(65, '3004-07', 'ANULACION DE FACTURAS', 'SI', 1),
(66, '3004-08', 'CREDITOS POR APLICAR', 'SI', 1),
(67, '3004-09', 'AVANCES PENDIENTES', 'SI', 1),
(68, '3004-10', 'CHEQUES DEVUELTOS CXC', 'SI', 1),
(69, '3004-11', 'TRANSACCIONES DIARIAS', 'SI', 1),
(71, '3004-12', 'BALANCE GENERAL', 'SI', 1),
(72, '3005', 'MISCELANEOS', 'SI', 1),
(73, '3005-01', 'EXISTENCIA DE ARTICULOS', 'SI', 1),
(74, '3005-02', 'DETALLES DE CLIENTES', 'SI', 1),
(75, '3005-04', 'VENTAS POR ARTICULOS', 'SI', 1),
(76, '3005-05', 'BENEFICIO DE ARTICULOS', 'SI', 1),
(77, '3006', 'COTIZACIONES-3006', 'SI', 1),
(78, '3006-01', 'POR CLIENTES', 'SI', 1),
(79, '3006-02', 'POR ARTICULOS', 'SI', 1),
(80, '3006-03', 'POR CIUDAD', 'SI', 1),
(81, '3006-04', 'GENERAL', 'SI', 1),
(82, '3007', 'PUNTO DE VENTA', 'SI', 1),
(83, '3007-01', 'FACTURA EMITIDAS', 'SI', 1),
(84, '3007-02', 'POR ARTICULOS', 'SI', 1),
(85, '3007-03', 'CREDITOS POR APLICAR', 'SI', 1),
(86, '3007-04', 'TRANSACCIONES DIARIA IT1', 'SI', 1),
(87, '3007-05', 'OPERACIONES COMPROBANTES', 'SI', 1),
(88, '3007-06', 'OTROS COMRPOBANTES', 'SI', 1),
(89, '3007-07', 'NCF ANULACIONES', 'SI', 1),
(90, '3007-08', 'VENTAS GRABADAS/EXENTAS VENTAS', 'SI', 1),
(91, '3007-09', 'FORMA DE PAGOS', 'SI', 1),
(92, '3007-10', 'FORMULARIO 607', 'SI', 1),
(93, '3007-11', 'FORMULARIO 608', 'SI', 1),
(94, '3007-12', 'FACTURA DETALLES', 'SI', 1),
(95, '3008', 'CUENTAS POR COBRAR', 'SI', 1),
(96, '3008-01', 'ANALISIS DE SALDO', 'SI', 1),
(97, '3008-01-01', 'FACTURA EMITIDA', 'SI', 1),
(98, '3008-01-02', 'ARCHIVOS GENERAL', 'SI', 1),
(99, '3008-01-03', 'CLASIFICADO POR RANGO', 'SI', 1),
(100, '3008-01-04', 'BALANCE DE CLIENTES', 'SI', 1),
(101, '3008-01-05', 'FACTURAS PENDIENTES', 'SI', 1),
(102, '3008-01-06', 'CHEQUES DEVUELTOS', 'SI', 1),
(103, '3008-01-07', 'ANALISIS POR VENDEDOR', 'SI', 1),
(104, '3008-02', 'ESTADOS DE CUENTAS', 'SI', 1),
(105, '3008-02-01', 'DETALLES DE DOCUEMENTOS', 'SI', 1),
(106, '3008-02-02', 'RELACION DOC.PEND.CUENTAS', 'SI', 1),
(107, '3008-02-03', 'CARTAS ESTADO DE CTAS DEL CLIENTE', 'SI', 1),
(108, '3008-02-04', 'CARTA POR UN RANGO', 'SI', 1),
(109, '3008-02-05', 'RELACION DOC.PEND.FORM', 'SI', 1),
(110, '3008-03', 'HISTORIA DE CLIENTE', 'SI', 1),
(111, '3008-03-01', 'CLIENTES INDIVIDUAL', 'SI', 1),
(112, '3008-03-02', 'HISTORIAL POR VENDEDOR', 'SI', 1),
(113, '3008-04', 'HISTORIA DE CLIENTES2', 'SI', 1),
(114, '3008-04-01', 'RESUMEN TIPOS CLIENTES', 'SI', 1),
(115, '3008-04-02', 'RESUMEN VENDEDORES', 'SI', 1),
(116, '3008-05', 'CALCULOS DE COMISIONES', 'SI', 1),
(117, '3008-05-01', 'COBRO A CREDITO', 'SI', 1),
(118, '3008-05-02', 'OPERACIONES POR VENDEDOR', 'SI', 1),
(119, '3008-06', 'FACTURAS EMITIDAS', 'SI', 1),
(120, '3008-07', 'RECIBOS DE INGRESOS', 'SI', 1),
(121, '3008-08', 'TRANSACCIONES DIARIAS', 'SI', 1),
(122, '3008-08-01', 'OPERACIONES DIARIAS', 'SI', 1),
(123, '3008-08-02', 'OPERACIONES POR VENDEDOR', 'SI', 1),
(124, '3009', 'MISCELANEOS', 'SI', 1),
(125, '3009-01', 'OPERACIONES DIARIAS', 'SI', 1),
(126, '3009-02', 'OPERACIONES POR VENDEDOR', 'SI', 1),
(127, '4001', 'AUTORIZACIONES', 'SI', 1),
(128, '4002', 'ESPECIALES DE VENTAS', 'SI', 1),
(129, '4003', 'COMBOS ESPECIALES', 'SI', 1),
(130, '4004', 'CAMBIOS DE PRECIOS', 'SI', 1),
(131, '4005', 'POSTEAR ARCHIVOS', 'SI', 1),
(132, '4006', 'INICIALIZAR', 'SI', 1),
(133, '4001-01', 'PRECIOS ARTICULOS', 'SI', 1),
(134, '4001-02', 'CREDITOS A CLIENTES', 'SI', 1),
(135, '4004-01', 'PRECIO POR RANGO', 'SI', 1),
(136, '4004-02', 'ARTICULOS INDIVIDUALES', 'SI', 1),
(137, '4005-01', 'VENTAS 2', 'SI', 1),
(138, '4005-02', 'CLIENTES 2', 'SI', 1),
(139, '4005-03', 'SUPLIDORES 2', 'SI', 1),
(140, '4005-04', 'INVENTARIO 1', 'SI', 1),
(141, '4006-01', 'INVENTARIO FISICO', 'SI', 1),
(142, '4006-02', 'ARTICULOS DESDE ALM', 'SI', 1),
(143, '4006-03', 'CUENTAS POR COBRAR', 'SI', 1),
(144, '4006-04', 'PLANES DE CREDITO', 'SI', 1),
(145, '4006-05', 'MODIFICAR CXC', 'SI', 1),
(146, '4006-06', 'MODIFICAR FACTURACION', 'SI', 1),
(147, '4006-07', 'MODIFICAR CXP', 'SI', 1),
(148, '1005', 'CONTABILIDAD', 'SI', 1),
(149, '25416', 'NOTAS DE DEBITO', 'SI', 1),
(150, '5001', 'GRUPOS', 'SI', 1),
(455, '3005-03', 'ARTICULOS POR CLIENTE', 'SI', 1),
(1675, '3009-01-01', 'CLASIFICA POR TIPOS', 'SI', 1),
(1676, '3009-01-02', 'INCLUYE SUB-TIPOS', 'SI', 1),
(1677, '3009-02', 'ESTADISTICAS VENTAS', 'SI', 1),
(1678, '3009-02-01', 'ESTADISTICA DE VENTAS', 'SI', 1),
(1679, '3009-02-02', 'RELACION MINIMO MAXIMO', 'SI', 1),
(1680, '3009-02-03', 'TODOS LOS ALMACENES', 'SI', 1),
(1681, '3009-02-04', 'VENTAS POR ARTICULOS 1', 'SI', 1),
(1682, '3009-03', 'LISTA DE PRECIO', 'SI', 1),
(1683, '3009-04', 'MAESTROS 1', 'SI', 1),
(1684, '3009-05-01', 'ARTICULOS 2', 'SI', 1),
(1685, '3009-04-02', 'TIPOS SUB-TIPOS', 'SI', 1),
(1686, '3009-04-03', 'CLIENTES-3009', 'SI', 1),
(1687, '3009-04-04', 'SUPLIDORES-3009', 'SI', 1),
(1688, '3009-04-05', 'VENDEDORES-3009', 'SI', 1),
(1690, '3009-05', 'LABELS ETIQUETAS', 'SI', 1),
(1691, '3009-04-01', 'ARTICULOS 1', 'SI', 1),
(1692, '3009-05-02', 'CLIENTES 1', 'SI', 1),
(1693, '3009-05-03', 'SUPLIDORES 1', 'SI', 1),
(1694, '3009-05-04', 'VENDEDORES 1', 'SI', 1),
(1695, '3009-05-05', 'BARRAS PRE', 'SI', 1),
(1696, '3009-05-06', 'BARRAS SIN', 'SI', 1),
(2057, '5002', 'CREAR USUARIOS', 'SI', 1),
(7786, '2002-05-01', 'NOTAS DE DEBITO', 'SI', 1),
(7787, '3007-13', 'TRANSACCIONES GENERALES', 'SI', 1),
(7788, '3009-01', 'BENEFICIO DE ARTICULOS2', 'SI', 1),
(8314, '1006', 'OTROS_M', 'SI', 1),
(8315, '1006-01', 'BANCOS', 'SI', 0),
(8316, '1006-01', 'BANCOS', 'SI', 1),
(8317, '1006-02', 'ZONAS', 'SI', 1),
(8318, '1006-03', 'CUIDADES', 'SI', 1),
(8319, '1', 'MAESTROS', 'NO', 20065),
(8320, '1001-01', 'REGISTRO DE INVENTARIO', 'NO', 20065),
(8321, '1001-02', 'TIPOS DE ARTICULOS / SUB TIPOS', 'NO', 20065),
(8322, '1001-03', 'ALMACEN', 'NO', 20065),
(8323, '1001-04', 'MARCAS', 'NO', 20065),
(8324, '1002', 'CLIENTES', 'NO', 20065),
(8325, '1002-01', 'REGISTRO DE CLIENTES', 'NO', 20065),
(8326, '1002-02', 'TIPOS DE CLIENTES', 'NO', 20065),
(8327, '1003', 'VENDEDORES', 'NO', 20065),
(8328, '1003-01', 'REGISTRO DE VENDEDORES', 'NO', 20065),
(8329, '1003-02', 'TIPOS DE VENDEDORES', 'NO', 20065),
(8330, '1004', 'SUPLIDORES', 'NO', 20065),
(8331, '1004-01', 'REGISTRO DE SUPLIDORES', 'NO', 20065),
(8332, '1004-02', 'TIPOS DE SUPLIDORES', 'NO', 20065),
(8333, '1001', 'INVENTARIO', 'NO', 20065),
(8334, '2', 'OPERACIONES', 'NO', 20065),
(8335, '3', 'REPORTES', 'NO', 20065),
(8336, '4', 'PROCEDIMIENTOS', 'NO', 20065),
(8337, '5', 'CONFIGURACIONES', 'NO', 20065),
(8338, '2001', 'VENTAS', 'NO', 20065),
(8339, '2001-01', 'VENTAS CONTADO', 'NO', 20065),
(8340, '2001-02', 'VENTAS CREDITO', 'NO', 20065),
(8341, '2001-03', 'CUADRE DE CAJA', 'NO', 20065),
(8342, '2001-04', 'COTIZACIONES', 'NO', 20065),
(8343, '2001-05', 'PREVENTAS AL CONTADO', 'NO', 20065),
(8344, '2001-06', 'PREVENTAS A CREDITO', 'NO', 20065),
(8345, '2001-07', 'ORDEN DE PEDIDO', 'NO', 20065),
(8346, '2002', 'CUENTAS POR COBRAR', 'NO', 20065),
(8347, '2002-01', 'INGRESOS', 'NO', 20065),
(8348, '2002-01-01', 'RECIBOS NORMALES', 'NO', 20065),
(8349, '2002-01-02', 'PAGOS CON TARJETA', 'NO', 20065),
(8350, '2002-01-03', 'RECIBOS DE AVANCES', 'NO', 20065),
(8351, '2002-01-04', 'INGRESO POR TARJETA', 'NO', 20065),
(8352, '2002-01-05', 'PREVENTAS AL CONTADO', 'NO', 20065),
(8353, '2002-01-06', 'OTROS INGRESOS', 'NO', 20065),
(8354, '2002-01-07', 'REIMPRIMIR RECIBO', 'NO', 20065),
(8355, '2002-02', 'NOTA DE DEBITO', 'NO', 20065),
(8356, '2002-03', 'NOTA DE CREDITO', 'NO', 20065),
(8357, '2002-04', 'OTROS', 'NO', 20065),
(8358, '2002-04-01', 'CREDITOS POR APLICAR', 'NO', 20065),
(8359, '2002-04-02', 'AVANCES PENDIENTES', 'NO', 20065),
(8360, '2002-05', 'REIMPRESION', 'NO', 20065),
(8361, '2002-05-02', 'NOTAS DE CREDITO', 'NO', 20065),
(8362, '2002-06', 'NOTA DE DEBITO SIN NCF', 'NO', 20065),
(8363, '2002-07', 'NOTA DE CREDITO SIN NCF', 'NO', 20065),
(8364, '2003', 'COTIZACIONES', 'NO', 20065),
(8365, '3001', 'COTIZACIONES2', 'NO', 20065),
(8366, '3002', 'OREDEN DE VENTAS', 'NO', 20065),
(8367, '3003', 'PUNTO DE VENTAS', 'NO', 20065),
(8368, '3003-01', 'VENTAS POR CUADRAR', 'NO', 20065),
(8369, '3003-02', 'VENTAS DEL DIA', 'NO', 20065),
(8370, '3003-03', 'FACTURA EMITIDAS', 'NO', 20065),
(8371, '3003-04', 'DEVOLUCION DE MERCANCIA', 'NO', 20065),
(8372, '3003-05', 'CREDITOS POR APLICAR', 'NO', 20065),
(8373, '3003-06', 'TRANSACCIONES DIARIAS', 'NO', 20065),
(8374, '3003-07', 'TRANSACCIONES DE PAGO POR CUADRAR', 'NO', 20065),
(8375, '3003-08', 'TRANSACCIONES GRALES', 'NO', 20065),
(8376, '3004', 'CUENTAS POR COBRAR', 'NO', 20065),
(8377, '3004-01', 'DOCUMENTOS PENDIENTES', 'NO', 20065),
(8378, '3004-02', 'ESTADO DE CUENTAS', 'NO', 20065),
(8379, '3004-03', 'HISTORIAL DEL CLIENTE', 'NO', 20065),
(8380, '3004-04', 'FACTURAS EMITIDAS', 'NO', 20065),
(8381, '3004-05', 'RECIBOS DE INGRESOS', 'NO', 20065),
(8382, '3004-06', 'DEVOLUCION DE MERCANCIAS DIARIAS', 'NO', 20065),
(8383, '3004-07', 'ANULACION DE FACTURAS', 'NO', 20065),
(8384, '3004-08', 'CREDITOS POR APLICAR', 'NO', 20065),
(8385, '3004-09', 'AVANCES PENDIENTES', 'NO', 20065),
(8386, '3004-10', 'CHEQUES DEVUELTOS CXC', 'NO', 20065),
(8387, '3004-11', 'TRANSACCIONES DIARIAS', 'NO', 20065),
(8388, '3004-12', 'BALANCE GENERAL', 'NO', 20065),
(8389, '3005', 'MISCELANEOS', 'NO', 20065),
(8390, '3005-01', 'EXISTENCIA DE ARTICULOS', 'NO', 20065),
(8391, '3005-02', 'DETALLES DE CLIENTES', 'NO', 20065),
(8392, '3005-04', 'VENTAS POR ARTICULOS', 'NO', 20065),
(8393, '3005-05', 'BENEFICIO DE ARTICULOS', 'NO', 20065),
(8394, '3006', 'COTIZACIONES-3006', 'NO', 20065),
(8395, '3006-01', 'POR CLIENTES', 'NO', 20065),
(8396, '3006-02', 'POR ARTICULOS', 'NO', 20065),
(8397, '3006-03', 'POR CIUDAD', 'NO', 20065),
(8398, '3006-04', 'GENERAL', 'NO', 20065),
(8399, '3007', 'PUNTO DE VENTA', 'NO', 20065),
(8400, '3007-01', 'FACTURA EMITIDAS', 'NO', 20065),
(8401, '3007-02', 'POR ARTICULOS', 'NO', 20065),
(8402, '3007-03', 'CREDITOS POR APLICAR', 'NO', 20065),
(8403, '3007-04', 'TRANSACCIONES DIARIA IT1', 'NO', 20065),
(8404, '3007-05', 'OPERACIONES COMPROBANTES', 'NO', 20065),
(8405, '3007-06', 'OTROS COMRPOBANTES', 'NO', 20065),
(8406, '3007-07', 'NCF ANULACIONES', 'NO', 20065),
(8407, '3007-08', 'VENTAS GRABADAS/EXENTAS VENTAS', 'NO', 20065),
(8408, '3007-09', 'FORMA DE PAGOS', 'NO', 20065),
(8409, '3007-10', 'FORMULARIO 607', 'NO', 20065),
(8410, '3007-11', 'FORMULARIO 608', 'NO', 20065),
(8411, '3007-12', 'FACTURA DETALLES', 'NO', 20065),
(8412, '3008', 'CUENTAS POR COBRAR', 'NO', 20065),
(8413, '3008-01', 'ANALISIS DE SALDO', 'NO', 20065),
(8414, '3008-01-01', 'FACTURA EMITIDA', 'NO', 20065),
(8415, '3008-01-02', 'ARCHIVOS GENERAL', 'NO', 20065),
(8416, '3008-01-03', 'CLASIFICADO POR RANGO', 'NO', 20065),
(8417, '3008-01-04', 'BALANCE DE CLIENTES', 'NO', 20065),
(8418, '3008-01-05', 'FACTURAS PENDIENTES', 'NO', 20065),
(8419, '3008-01-06', 'CHEQUES DEVUELTOS', 'NO', 20065),
(8420, '3008-01-07', 'ANALISIS POR VENDEDOR', 'NO', 20065),
(8421, '3008-02', 'ESTADOS DE CUENTAS', 'NO', 20065),
(8422, '3008-02-01', 'DETALLES DE DOCUEMENTOS', 'NO', 20065),
(8423, '3008-02-02', 'RELACION DOC.PEND.CUENTAS', 'NO', 20065),
(8424, '3008-02-03', 'CARTAS ESTADO DE CTAS DEL CLIENTE', 'NO', 20065),
(8425, '3008-02-04', 'CARTA POR UN RANGO', 'NO', 20065),
(8426, '3008-02-05', 'RELACION DOC.PEND.FORM', 'NO', 20065),
(8427, '3008-03', 'HISTORIA DE CLIENTE', 'NO', 20065),
(8428, '3008-03-01', 'CLIENTES INDIVIDUAL', 'NO', 20065),
(8429, '3008-03-02', 'HISTORIAL POR VENDEDOR', 'NO', 20065),
(8430, '3008-04', 'HISTORIA DE CLIENTES2', 'NO', 20065),
(8431, '3008-04-01', 'RESUMEN TIPOS CLIENTES', 'NO', 20065),
(8432, '3008-04-02', 'RESUMEN VENDEDORES', 'NO', 20065),
(8433, '3008-05', 'CALCULOS DE COMISIONES', 'NO', 20065),
(8434, '3008-05-01', 'COBRO A CREDITO', 'NO', 20065),
(8435, '3008-05-02', 'OPERACIONES POR VENDEDOR', 'NO', 20065),
(8436, '3008-06', 'FACTURAS EMITIDAS', 'NO', 20065),
(8437, '3008-07', 'RECIBOS DE INGRESOS', 'NO', 20065),
(8438, '3008-08', 'TRANSACCIONES DIARIAS', 'NO', 20065),
(8439, '3008-08-01', 'OPERACIONES DIARIAS', 'NO', 20065),
(8440, '3008-08-02', 'OPERACIONES POR VENDEDOR', 'NO', 20065),
(8441, '3009', 'MISCELANEOS', 'NO', 20065),
(8442, '3009-01', 'OPERACIONES DIARIAS', 'NO', 20065),
(8443, '3009-02', 'OPERACIONES POR VENDEDOR', 'NO', 20065),
(8444, '4001', 'AUTORIZACIONES', 'NO', 20065),
(8445, '4002', 'ESPECIALES DE VENTAS', 'NO', 20065),
(8446, '4003', 'COMBOS ESPECIALES', 'NO', 20065),
(8447, '4004', 'CAMBIOS DE PRECIOS', 'NO', 20065),
(8448, '4005', 'POSTEAR ARCHIVOS', 'NO', 20065),
(8449, '4006', 'INICIALIZAR', 'NO', 20065),
(8450, '4001-01', 'PRECIOS ARTICULOS', 'NO', 20065),
(8451, '4001-02', 'CREDITOS A CLIENTES', 'NO', 20065),
(8452, '4004-01', 'PRECIO POR RANGO', 'NO', 20065),
(8453, '4004-02', 'ARTICULOS INDIVIDUALES', 'NO', 20065),
(8454, '4005-01', 'VENTAS 2', 'NO', 20065),
(8455, '4005-02', 'CLIENTES 2', 'NO', 20065),
(8456, '4005-03', 'SUPLIDORES 2', 'NO', 20065),
(8457, '4005-04', 'INVENTARIO 1', 'NO', 20065),
(8458, '4006-01', 'INVENTARIO FISICO', 'NO', 20065),
(8459, '4006-02', 'ARTICULOS DESDE ALM', 'NO', 20065),
(8460, '4006-03', 'CUENTAS POR COBRAR', 'NO', 20065),
(8461, '4006-04', 'PLANES DE CREDITO', 'NO', 20065),
(8462, '4006-05', 'MODIFICAR CXC', 'NO', 20065),
(8463, '4006-06', 'MODIFICAR FACTURACION', 'NO', 20065),
(8464, '4006-07', 'MODIFICAR CXP', 'NO', 20065),
(8465, '1005', 'CONTABILIDAD', 'NO', 20065),
(8466, '25416', 'NOTAS DE DEBITO', 'NO', 20065),
(8467, '5001', 'GRUPOS', 'NO', 20065),
(8468, '3005-03', 'ARTICULOS POR CLIENTE', 'NO', 20065),
(8469, '3009-01-01', 'CLASIFICA POR TIPOS', 'NO', 20065),
(8470, '3009-01-02', 'INCLUYE SUB-TIPOS', 'NO', 20065),
(8471, '3009-02', 'ESTADISTICAS VENTAS', 'NO', 20065),
(8472, '3009-02-01', 'ESTADISTICA DE VENTAS', 'NO', 20065),
(8473, '3009-02-02', 'RELACION MINIMO MAXIMO', 'NO', 20065),
(8474, '3009-02-03', 'TODOS LOS ALMACENES', 'NO', 20065),
(8475, '3009-02-04', 'VENTAS POR ARTICULOS 1', 'NO', 20065),
(8476, '3009-03', 'LISTA DE PRECIO', 'NO', 20065),
(8477, '3009-04', 'MAESTROS 1', 'NO', 20065),
(8478, '3009-05-01', 'ARTICULOS 2', 'NO', 20065),
(8479, '3009-04-02', 'TIPOS SUB-TIPOS', 'NO', 20065),
(8480, '3009-04-03', 'CLIENTES-3009', 'NO', 20065),
(8481, '3009-04-04', 'SUPLIDORES-3009', 'NO', 20065),
(8482, '3009-04-05', 'VENDEDORES-3009', 'NO', 20065),
(8483, '3009-05', 'LABELS ETIQUETAS', 'NO', 20065),
(8484, '3009-04-01', 'ARTICULOS 1', 'NO', 20065),
(8485, '3009-05-02', 'CLIENTES 1', 'NO', 20065),
(8486, '3009-05-03', 'SUPLIDORES 1', 'NO', 20065),
(8487, '3009-05-04', 'VENDEDORES 1', 'NO', 20065),
(8488, '3009-05-05', 'BARRAS PRE', 'NO', 20065),
(8489, '3009-05-06', 'BARRAS SIN', 'NO', 20065),
(8490, '5002', 'CREAR USUARIOS', 'NO', 20065),
(8491, '2002-05-01', 'NOTAS DE DEBITO', 'NO', 20065),
(8492, '3007-13', 'TRANSACCIONES GENERALES', 'NO', 20065),
(8493, '3009-01', 'BENEFICIO DE ARTICULOS2', 'NO', 20065),
(8494, '1006', 'OTROS_M', 'NO', 20065),
(8495, '1006-01', 'BANCOS', 'NO', 20065),
(8496, '1006-02', 'ZONAS', 'NO', 20065),
(8497, '1006-03', 'CUIDADES', 'NO', 20065),
(8677, '1006-04', 'IMPUESTOS', 'SI', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `COD_TP_S` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SP_TIPO` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CREDITO` tinyint(1) DEFAULT NULL,
  `COD_SUP_C` varchar(6) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBRE` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CONTACTO_1` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CONTACTO_2` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TELEFONO1` varchar(13) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TELEFONO2` varchar(13) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TELEFONO3` varchar(13) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FAX` varchar(13) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `AP_POSTAL` int(11) DEFAULT NULL,
  `RNC` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FEC_CREA` datetime DEFAULT NULL,
  `USUARIO` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `STATUS` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PAGO` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CALLE` varchar(35) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SECTOR` varchar(35) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_PI_F` int(11) DEFAULT NULL,
  `COD_CD_F` int(11) DEFAULT NULL,
  `PAIS` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOTAS` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCUENTO` int(11) DEFAULT NULL,
  `PRONTO_PAG` double DEFAULT NULL,
  `PRE_AUTO` tinyint(1) DEFAULT NULL,
  `LIMITE_CR` double DEFAULT NULL,
  `SOBREGIRO` double DEFAULT NULL,
  `DIAS_COBRO` int(11) DEFAULT NULL,
  `DIAS_ADD` int(11) DEFAULT NULL,
  `USR_MODI` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `USR_FECHA` datetime DEFAULT NULL,
  `COD_TG_C` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `USR_HORA` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `BALANCE` double DEFAULT NULL,
  `CTA` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TIPO` varchar(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NUM_DOC` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FEC_DOC` datetime DEFAULT NULL,
  `ABREVIA` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `EMAIL` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vendedores`
--

CREATE TABLE `tipo_vendedores` (
  `COD_TV_F` int(11) NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_vendedores`
--

INSERT INTO `tipo_vendedores` (`COD_TV_F`, `NOMBRE`) VALUES
(1, 'VENDEDORES'),
(2, 'BOMBEROS'),
(6, 'LAVADORES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `COD_VND_F` int(11) NOT NULL,
  `ANTERIOR` int(11) DEFAULT NULL,
  `COD_TV_F` int(11) NOT NULL,
  `NOMBRE` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COMISION` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SEXO` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CEDULA` varchar(14) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `EST_CIVIL` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FEC_NAC` datetime DEFAULT NULL,
  `DIRECCION1` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DIRECCION2` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_CD_F` int(11) DEFAULT NULL,
  `TELEFONO1` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TELEFONO2` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MIN_MES` double DEFAULT NULL,
  `PAG_VENTA` double DEFAULT NULL,
  `COBRO_0` double DEFAULT NULL,
  `COBRO_1` double DEFAULT NULL,
  `COBRO_31` double DEFAULT NULL,
  `COBRO_61` double DEFAULT NULL,
  `COBRO_91` double DEFAULT NULL,
  `COBRO_121` double DEFAULT NULL,
  `PREC_CT_1` double DEFAULT NULL,
  `PREC_CT_2` double DEFAULT NULL,
  `PREC_CT_3` double DEFAULT NULL,
  `PREC_CT_4` double DEFAULT NULL,
  `PREC_CT_5` double DEFAULT NULL,
  `PREC_CR_1` double DEFAULT NULL,
  `PREC_CR_2` double DEFAULT NULL,
  `PREC_CR_3` double DEFAULT NULL,
  `PREC_CR_4` double DEFAULT NULL,
  `PREC_CR_5` double DEFAULT NULL,
  `STATUS` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_CLI_A` varchar(6) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COD_CLI_F` varchar(6) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FECHA_ING` datetime DEFAULT NULL,
  `FECHA_OUT` datetime DEFAULT NULL,
  `HORA_ING` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `HORA_OUT` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `EMPRESA` char(1) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `GALONES` double DEFAULT NULL,
  `TOTAL` double DEFAULT NULL,
  `EFECTIVO` double DEFAULT NULL,
  `PLATA` double DEFAULT NULL,
  `CREDITO` double DEFAULT NULL,
  `TARJETA` double DEFAULT NULL,
  `DIFERENCIA` double DEFAULT NULL,
  `BONO` double DEFAULT NULL,
  `OTROS` double DEFAULT NULL,
  `EMPLEADO` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`COD_VND_F`, `ANTERIOR`, `COD_TV_F`, `NOMBRE`, `COMISION`, `SEXO`, `CEDULA`, `EST_CIVIL`, `FEC_NAC`, `DIRECCION1`, `DIRECCION2`, `COD_CD_F`, `TELEFONO1`, `TELEFONO2`, `MIN_MES`, `PAG_VENTA`, `COBRO_0`, `COBRO_1`, `COBRO_31`, `COBRO_61`, `COBRO_91`, `COBRO_121`, `PREC_CT_1`, `PREC_CT_2`, `PREC_CT_3`, `PREC_CT_4`, `PREC_CT_5`, `PREC_CR_1`, `PREC_CR_2`, `PREC_CR_3`, `PREC_CR_4`, `PREC_CR_5`, `STATUS`, `COD_CLI_A`, `COD_CLI_F`, `FECHA_ING`, `FECHA_OUT`, `HORA_ING`, `HORA_OUT`, `EMPRESA`, `GALONES`, `TOTAL`, `EFECTIVO`, `PLATA`, `CREDITO`, `TARJETA`, `DIFERENCIA`, `BONO`, `OTROS`, `EMPLEADO`) VALUES
(10001, NULL, 1, 'NANCY', NULL, 'F', NULL, 'S', '2008-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10002, NULL, 1, 'SADERY ABREU', NULL, 'F', '00114930829', 'S', '1981-09-08 00:00:00', 'SANTO DOMINGO', NULL, NULL, '530-7070', '501-6532', 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10003, NULL, 1, 'DANITZA', NULL, 'F', NULL, 'S', '2008-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10004, NULL, 1, 'NATIVIDAD', NULL, 'F', NULL, 'S', '2008-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10005, NULL, 1, 'LIES', NULL, 'F', NULL, 'S', '2008-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10006, NULL, 1, 'CAROLINA', NULL, 'F', NULL, 'S', '2008-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10007, NULL, 1, 'LIDIA', NULL, 'F', NULL, 'S', '2008-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10008, NULL, 1, 'INGRID', NULL, 'F', NULL, 'S', '2008-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10009, NULL, 1, 'OLGA', NULL, 'F', NULL, 'C', '2008-01-01 00:00:00', 'SANTO DOMINGO', NULL, NULL, NULL, NULL, 0, NULL, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10010, NULL, 1, 'LISETT', NULL, 'F', NULL, 'S', '2008-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 7, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10011, NULL, 1, 'OLIVER', NULL, 'M', NULL, 'C', '2008-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 7, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10012, NULL, 1, 'GUSTAVO', NULL, 'M', NULL, 'S', '2008-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10013, NULL, 1, 'YELITZA', NULL, 'F', NULL, 'S', '2008-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 6, 6, 6, 6, 6, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10014, NULL, 1, 'CORIS', NULL, 'F', NULL, 'S', '2008-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 10, 10, 10, 10, 10, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10015, NULL, 1, 'JACOB', NULL, 'M', NULL, 'S', '2008-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 6, 6, 6, 6, 6, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10017, NULL, 1, 'AIMEE', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 6, 6, 6, 6, 6, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10019, NULL, 1, 'ELIZABETH GALLA', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10020, NULL, 1, 'ANDREA', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 10, 10, 10, 10, 10, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10021, NULL, 1, 'CLAUDIA BUENO', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10022, NULL, 1, 'JEFREY', NULL, 'M', NULL, 'C', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 10, 10, 10, 10, 10, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10023, NULL, 1, 'KARINA', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10024, NULL, 1, 'ANGELA', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10025, NULL, 1, 'FLAVIO', NULL, 'M', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 7, 7, 7, 7, 7, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10026, NULL, 1, 'NECTOR', NULL, 'M', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 3.5, 3.5, 3.5, 3.5, 3.5, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10027, NULL, 1, 'MARIEL', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10028, NULL, 1, 'IRIS', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10029, NULL, 1, 'HEIDY', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10030, NULL, 1, 'IVETT', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 7, 7, 7, 7, 7, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10031, NULL, 1, 'ANA', NULL, 'F', NULL, 'C', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10032, NULL, 1, 'OPHIR', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10033, NULL, 1, 'MELINA', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 2.5, 2.5, 2.5, 2.5, 2.5, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10034, NULL, 1, 'MAGNOLIA', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10035, NULL, 1, 'ROSA LINDA', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10036, NULL, 1, 'MAURY', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10037, NULL, 1, 'TAHIRIS', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10038, NULL, 1, 'JENNY', NULL, 'F', NULL, 'S', '2009-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10039, NULL, 1, 'YUDY', NULL, 'F', NULL, 'S', '2001-01-01 00:00:00', NULL, NULL, NULL, '   -   -', NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10040, NULL, 1, 'JOADALYS', NULL, 'F', NULL, 'S', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10041, NULL, 1, 'KARINA S', NULL, 'F', NULL, 'S', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10042, NULL, 1, 'VANESSA', NULL, 'F', NULL, 'S', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 2.5, 2.5, 2.5, 2.5, 2.5, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10043, NULL, 1, 'ARACELIS', NULL, 'F', NULL, 'S', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10044, NULL, 1, 'WILBERT PADILLA', NULL, 'M', NULL, 'C', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10045, NULL, 1, 'CHANEL MENDEZ', NULL, 'M', NULL, 'S', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 20, 20, 20, 20, 20, 20, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10046, NULL, 1, 'MASSIEL', NULL, 'F', NULL, 'S', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10047, NULL, 1, 'NATASHA', NULL, 'F', NULL, 'S', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10048, NULL, 1, 'YVELISSE', NULL, 'F', NULL, 'S', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10049, NULL, 1, 'CRISTOBAL', NULL, 'M', NULL, 'S', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10050, NULL, 1, 'LUIGGIE', NULL, 'M', NULL, 'S', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10051, NULL, 1, 'JONATHAN CRUZ', NULL, 'M', NULL, 'C', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10052, NULL, 1, 'JOHANNA REYES (COBROS)', NULL, 'F', NULL, 'S', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10053, NULL, 1, 'NATALIA', NULL, 'F', NULL, 'S', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10054, NULL, 1, 'DANIEL', NULL, 'M', NULL, 'S', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10055, NULL, 1, 'MARIA', NULL, 'F', NULL, 'S', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10056, NULL, 1, 'ALEYDA', NULL, 'F', NULL, 'S', '2010-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 2.5, 2.5, 2.5, 2.5, 2.5, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10057, NULL, 1, 'JOSEFINA', NULL, 'F', NULL, 'S', '2011-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10058, NULL, 1, 'CUENTAS LEGAL II', NULL, 'M', NULL, 'C', '2011-05-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 4, 4, 4, 4, 4, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10059, NULL, 1, 'LARISA', NULL, 'F', NULL, 'S', '2011-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 2.5, 2.5, 2.5, 2.5, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10060, NULL, 1, 'LISBEL', NULL, 'F', NULL, 'S', '2011-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10061, NULL, 1, 'NIKAURY', NULL, 'F', NULL, 'S', '2011-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10062, NULL, 1, 'GABRIELA', NULL, 'F', NULL, 'S', '2011-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10063, NULL, 1, 'LOENDY', NULL, 'F', NULL, 'S', '2012-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10064, NULL, 1, 'YADIRA EMENEGILDO', NULL, 'F', NULL, 'S', '2018-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10065, NULL, 1, 'MARIA MONTERO', NULL, 'F', NULL, 'S', '2012-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10066, NULL, 1, 'INGRID RODRIGUEZ', NULL, 'F', NULL, 'S', '2012-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10067, NULL, 1, 'CAROLINE SUERO', NULL, 'F', NULL, 'S', '2012-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10068, NULL, 1, 'NICELYS', NULL, 'F', NULL, 'C', '2012-06-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10069, NULL, 1, 'TEMPLARIS COBRANZA', NULL, 'M', NULL, 'S', '2012-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10070, NULL, 1, 'ROSALBA PERALTA', NULL, 'F', NULL, 'S', '2012-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10071, NULL, 1, 'GABRIELA FERMIN', NULL, 'F', NULL, 'S', '2012-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10072, NULL, 1, 'JUDITH', NULL, 'F', NULL, 'S', '2013-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10073, NULL, 1, 'CRISTINA ABREU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10074, NULL, 1, 'VILMA PERALTA', NULL, 'F', NULL, 'S', '2013-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10075, NULL, 1, 'YUDITH HILARIO', NULL, 'F', NULL, 'S', '2013-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10076, NULL, 1, 'JANNA DE JESUS', NULL, 'F', NULL, 'S', '2013-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10077, NULL, 1, 'YAINDHY LAMARCHE', NULL, 'F', NULL, 'S', '2013-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10078, NULL, 1, 'MELBA DE LA ROSA', NULL, 'F', NULL, 'S', '2013-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 5, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10079, NULL, 1, 'NORMA FELIX', NULL, 'F', NULL, 'S', '2013-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10080, NULL, 1, 'SANTA MARTICH', NULL, 'F', NULL, 'S', '2013-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10081, NULL, 1, 'CUENTAS LEGAL', NULL, 'M', NULL, 'S', '2013-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10082, NULL, 1, 'ESMERALDA BELLO', NULL, 'F', NULL, 'S', '2013-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10083, NULL, 1, 'RAFAEL GUZMAN', NULL, 'M', NULL, 'S', '2013-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10084, NULL, 1, 'EDDY TAVAREZ', NULL, 'F', NULL, 'S', '2014-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10085, NULL, 1, 'HELGA MA¥ON', NULL, 'F', NULL, 'S', '2014-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10086, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 5, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10087, NULL, 1, 'AYARILIS CASTRO', NULL, 'F', NULL, 'S', '2014-01-01 00:00:00', NULL, NULL, NULL, '   -   -', NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10088, NULL, 1, 'KATHERINE CUEVAS', NULL, 'F', NULL, 'S', '2014-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10089, NULL, 1, 'DAYHANA JEREZ', NULL, NULL, NULL, 'S', '2014-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10090, NULL, 1, 'YESILERNY REYES', NULL, 'F', NULL, 'S', '2014-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10091, NULL, 1, 'ELINOR VENTURA', NULL, 'F', NULL, 'S', '2015-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10092, NULL, 1, 'ADA SOTO', NULL, 'F', NULL, 'S', '2015-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10093, NULL, 1, 'EDUARDO ALMANZAR', NULL, 'M', NULL, 'S', '2015-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10094, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 5, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10095, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 5, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10096, NULL, 1, 'INDHIRA LORA', NULL, 'F', NULL, 'C', '2015-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10097, NULL, 1, 'EMMA GONZALEZ', NULL, 'F', NULL, 'S', '2015-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10098, NULL, 1, 'KATHERINE (ABOGADA)', NULL, 'F', NULL, 'C', '2015-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10099, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 5, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10100, NULL, 1, 'DAIANA SANCHEZ', NULL, 'F', NULL, 'S', '2015-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10101, NULL, 1, 'VANILA MARTINEZ', NULL, 'F', NULL, 'S', '2016-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10102, NULL, 1, 'ROSALIA ORTIZ', NULL, 'F', NULL, 'S', '2016-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10103, NULL, 1, 'KARLA FITCH', NULL, 'F', NULL, 'S', '2016-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 2.5, 2.5, 2.5, 2.5, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10104, NULL, 1, 'RAFAELINA VERAS', NULL, 'F', NULL, 'S', '2016-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 2.5, 2.5, 2.5, 2.5, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10105, NULL, 1, 'YOAMILKA', NULL, 'F', NULL, 'S', '2017-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10106, NULL, 1, 'KENNY ORTEGA ABOGADO', NULL, 'M', '04800752109', 'S', '2024-02-23 00:00:00', 'C/ DOCTOR DELGADO FRENTE A', 'CENTU', NULL, '   -   -', '72 -   -', 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10107, NULL, 1, 'KATHERINE ABOGADA 2', NULL, 'F', NULL, 'S', '2017-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10108, NULL, 1, 'MIGUEL ABOGADO', NULL, 'M', NULL, 'S', '2017-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10109, NULL, 1, 'PAOLA BAEZ', NULL, 'F', NULL, 'S', '2017-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10110, NULL, 1, 'JESSICA NAVA', NULL, 'F', NULL, 'S', '2017-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10111, NULL, 1, 'MILAGROS', NULL, 'F', NULL, 'S', '2017-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10112, NULL, 1, 'WALKIRIA MONTERO', NULL, 'F', NULL, 'S', '2017-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10113, NULL, 1, 'ANGELA DOTEL', NULL, 'F', NULL, 'S', '2017-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10114, NULL, 1, 'ANNIUSKA CUEVAS', NULL, 'F', NULL, 'S', '2017-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10115, NULL, 1, 'DANISA MINAYA', NULL, 'F', NULL, 'S', '2017-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10116, NULL, 1, 'CUENTAS MOROSAS', NULL, 'F', NULL, 'S', '2018-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10117, NULL, 1, 'SHERLIN BEROA', NULL, 'F', NULL, 'S', '2018-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10118, NULL, 1, 'RAMON DE LEON', NULL, 'M', NULL, 'S', '2018-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10119, NULL, 1, 'GREISY GRULLON', NULL, 'F', NULL, 'S', '2018-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10120, NULL, 1, 'KATHERINE (ABOGADA) NUEVOS CASOS', NULL, 'F', NULL, 'S', '2018-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 5, 0, 0, 0, 50, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10121, NULL, 1, 'EILEEN REYES', NULL, 'F', NULL, 'S', '2018-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10122, NULL, 1, 'ESMIRNA PEREZ', NULL, 'F', NULL, 'S', '2018-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10123, NULL, 1, 'MIRTHA GARCIA', NULL, 'F', NULL, 'S', '2018-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10124, NULL, 1, 'KARINA RODRIGUEZ', NULL, 'F', NULL, 'S', '2018-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10125, NULL, 1, 'CARMEN BATISTA', NULL, 'F', NULL, 'S', '2018-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10126, NULL, 1, 'CLIENTES QUE YA NO OPERAN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 5, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10127, NULL, 1, 'PENELOPE SEVERINO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10128, NULL, 1, 'DENNY AYBAR', NULL, 'F', NULL, 'S', '2018-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10129, NULL, 1, 'ARFRANCIS LLANES', NULL, 'F', NULL, 'S', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10130, NULL, 1, 'MELINA REINOSO', NULL, 'F', NULL, 'S', '2018-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10131, NULL, 1, 'SONIA COBROS', NULL, 'F', NULL, 'S', '2019-01-01 00:00:00', NULL, NULL, NULL, NULL, NULL, 0, NULL, 0.4, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10132, NULL, 1, 'MABELIS COBROS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, 1.5, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `COD_ZN_F` int(11) NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOTA` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`COD_ZN_F`, `NOMBRE`, `NOTA`) VALUES
(4, 'Distrito Nacional', 'D.N');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`ID_bitacora`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`COD_CD_F`);

--
-- Indices de la tabla `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `detalle_permisos`
--
ALTER TABLE `detalle_permisos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `impuestos`
--
ALTER TABLE `impuestos`
  ADD PRIMARY KEY (`COD_IR_F`);

--
-- Indices de la tabla `modulo_roles`
--
ALTER TABLE `modulo_roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tipo_vendedores`
--
ALTER TABLE `tipo_vendedores`
  ADD PRIMARY KEY (`COD_TV_F`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`COD_VND_F`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`COD_ZN_F`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bancos`
--
ALTER TABLE `bancos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `ID_bitacora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `COD_CD_F` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `control`
--
ALTER TABLE `control`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `detalle_permisos`
--
ALTER TABLE `detalle_permisos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `impuestos`
--
ALTER TABLE `impuestos`
  MODIFY `COD_IR_F` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `modulo_roles`
--
ALTER TABLE `modulo_roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8678;

--
-- AUTO_INCREMENT de la tabla `tipo_vendedores`
--
ALTER TABLE `tipo_vendedores`
  MODIFY `COD_TV_F` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `COD_VND_F` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10133;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `COD_ZN_F` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
