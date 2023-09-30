-- Trabajo Practico Integrador Programacion I

-- Base de datos EmpleadosDepartamentos.sql

-- Estructura de tabla para la tabla `Usuario`

CREATE TABLE Usuarios (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  nombreUsuario varchar(45) NOT NULL,
  clave varchar(255) NOT NULL,
  nombre varchar(200) NOT NULL,
  apellido varchar(200) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY usuario (nombreUsuario)
);

-- Datos para la tabla `Usuario`

INSERT INTO usuarios (nombreUsuario, clave, nombre, apellido) VALUES 
('PBlanco','password1234', 'Pedro','Blanco');

-- Estructura de tabla para la tabla `departamentos`

CREATE TABLE Departamentos (
  codDepto int NOT NULL PRIMARY KEY,
  nombreDepto varchar NOT NULL,
  ciudadDepto varchar NOT NULL
);

-- Datos para la tabla `Departamentos`

INSERT INTO Departamentos (codDepto, nombreDepto, ciudadDepto) VALUES
(1, 'GERENCIA', 'BUENOS AIRES'),
(2, 'PRODUCCIÓN', 'BUENOS AIRES'),
(3, 'VENTAS', 'BUENOS AIRES'),
(4, 'VENTAS', 'CORDOBA'),
(5, 'VENTAS', 'SANTA FE'),
(6, 'VENTAS', 'MENDOZA'),
(7, 'INVESTIGACIÓN', 'BUENOS AIRES'),
(8, 'COMERCIALIZACIÓN', 'BUENOS AIRES'),
(9, 'MANTENIMIENTO', 'BUENOS AIRES'),
(10, 'MANTENIMIENTO', 'CORDOBA'),
(11, 'MANTENIMIENTO', 'SANTA FE'),
(12, 'MANTENIMIENTO', 'MENDOZA');

-- Estructura de tabla para la tabla `Empleados`

CREATE TABLE Empleados (
  idEmpleado int NOT NULL AUTO INCREMENT PRIMARY KEY,
  dniEmpleado int NOT NULL,
  nombreEmpleado varchar NOT NULL,
  sexoEmpleado enum('M','F') NOT NULL,
  fechaNacEmpleado date NOT NULL,
  fechaIngEmpleado date NOT NULL,
  salarioEmpleado float NOT NULL,
  cargoEmpleado varchar NOT NULL,
  codDepto int NOT NULL
);

-- Datos para la tabla Empleados

INSERT INTO Empleados (dniEmpleado, nombreEmpleado, sexoEmpleado, fechaNacEmpleado, fechaIngEmpleado, salarioEmpleado, cargoEmpleado, codDepto) VALUES
(444444, 'Abel Gómez', 'M', '1939-12-24', '2000-10-01', 105000.00, 'Mecánico', 10),
(737689, 'Mario Llano', 'M', '1945-08-30', '1990-05-16', 225000.00, 'Vendedor', 3),
(768782, 'Joaquín Rosas', 'M', '1947-07-07', '1990-05-16', 225000.00, 'Vendedor', 5),
(888888, 'Iván Duarte', 'M', '1955-08-12', '1998-05-16', 105000.00, 'Mecánico', 11),
(1130222, 'José Giraldo', 'M', '1985-01-20', '2000-11-01', 120000.00, 'Asesor', 8),
(1130333, 'Pedro Blanco', 'M', '1987-10-28', '2000-10-01', 80000.00, 'Jefe RRHH',1),
(1130444, 'Jesús Alfonso', 'M', '1988-03-14', '2000-10-01', 80000.00, 'Vendedor', 6),
(1130555, 'Julián Mora', 'M', '1989-07-03', '2000-10-01', 80000.00, 'Técnico', 2),
(1130666, 'Manuel Millán', 'M', '1990-12-08', '2004-06-01', 80000.00, 'Vendedor', 4),
(1130777, 'Marcos Cortez', 'M', '1986-06-23', '2000-04-16', 255000.00, 'Mecánico', 9),
(1130782, 'Antonio Gil', 'M', '1980-01-23', '2010-04-16', 850000.00, 'Técnico', 2),
(1751219, 'Melissa Roa', 'F', '1960-06-19', '2001-03-16', 225000.00, 'Vendedor', 4),
(11111111, 'Irene Díaz', 'F', '1979-09-28', '2004-06-01', 1050000.00, 'Mecánico', 12),
(16211383, 'Luis Pérez', 'M', '1956-02-25', '2000-01-01', 5050000.00, 'Director', 9),
(16759060, 'Darío Casas', 'M', '1960-04-05', '1992-11-01', 4500000.00, 'Investigador', 7),
(19709802, 'William Daza', 'M', '1982-10-09', '1999-12-16', 2250000.00, 'Técnico', 2),
(22222222, 'Carla López', 'F', '1975-05-11', '2005-07-16', 4500000.00, 'Jefe Mercadeo', 1),
(22222333, 'Carlos Rozo', 'M', '1975-05-11', '2001-09-16', 750000.00, 'Vigilante', 12),
(31174099, 'Diana Solarte', 'F', '1957-11-19', '1990-05-16', 1250000.00, 'Secretaria', 10),
(31178144, 'Rosa Angulo', 'F', '1957-03-15', '1998-08-16', 3250000.00, 'Jefe Ventas', 1);

-- Estructura de tabla para la tabla Categoria

CREATE TABLE Categoria (
  idCategoria NOT NULL AUTO INCREMENT PRIMARY KEY,
  nombreCategoria varchar NOT NULL
);

-- Datos para la tabla `Categoria`

INSERT INTO Categoria (idCategoria, nombreCategoria) VALUES
(1, Grupo A),
(2, Grupo B),
(3, Grupo C),
(4, Grupo D),
(5, Grupo E);

-- Estructura de tabla para la tabla `CategoriaEmpleado`
  
CREATE TABLE CategoriaEmpleado (
  idEmpleado int NOT NULL,
  idCategoria int NOT NULL,
  condicionEmpleado varchar,
  descripcion DEFAULT NULL
);

