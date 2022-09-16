<?php
// Conexión con la bbdd ───────────────────────────────────────────────────────
//  $conexion = mysqli_connect(dirección de la bbdd, usuario, contraseña, nombre bbdd);

$conexion = mysqli_connect("localhost", "root", "", "simpleticket");




/* Código MySQL para la creación de la BBDD ───────────────────────────────────
CREATE DATABASE IF NOT EXISTS simpleticket DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;
USE simpleticket;

CREATE TABLE concepto
(
    CodCon INT NOT NULL AUTO_INCREMENT,
    NomCon VARCHAR(50) NOT NULL,
    PRIMARY KEY (CodCon)
);

CREATE TABLE proveedor
(
    CodPro INT NOT NULL AUTO_INCREMENT,
    NomPro VARCHAR(50) NOT NULL,
    DirPro VARCHAR(50) NOT NULL,
    TelPro VARCHAR(12),
    PRIMARY KEY (CodPro)
);

CREATE TABLE ticket
(
    CodTic INT NOT NULL AUTO_INCREMENT,
    FecTic DATE NOT NULL,
    NumTic VARCHAR(20) NOT NULL,
    CodPro INT NOT NULL,
    CodCon INT NOT NULL,
    ImpTic DECIMAL(7,2) NOT NULL,
    PRIMARY KEY (CodTic),
    FOREIGN KEY (CodCon) REFERENCES concepto(CodCon)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
    FOREIGN KEY (CodPro) REFERENCES proveedor(CodPro)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

INSERT INTO concepto (CodCon, NomCon) VALUES
(null, 'Gasolina'),
(null, 'Comida'),
(null, 'Material de oficina'),
(null, 'Alojamiento'),
(null, 'Ocio'),
(null, 'Compra de mercaderías');

INSERT INTO proveedor (CodPro, NomPro, DirPro, TelPro) VALUES
(null, 'Repsol', 'C/ Ancha, 32 - Málaga', '952112233'),
(null, 'Fosters Hollywood', 'C/ Mar Salada, 12 - Málaga', '951442245'),
(null, 'Makro', 'C/ Rodrigo Díaz de Vivar, 45 - Málaga', '642558425'),
(null, 'Hotel Abades', 'Avda. Infantes, 8 - Granada', '900584423'),
(null, 'Cepsa', 'Paseo de la Luz, 23 - Almería', '953115485'),
(null, 'Góvez', 'C/ Rosa Lupión, 5 - Málaga', '952988558'),
(null, 'Burger King', 'C.C. Rosaleda - Málaga', '951544852');

INSERT INTO ticket (CodTic, FecTic, NumTic, CodPro, CodCon, ImpTic) VALUES
(null, '2022/05/22', '15425', 2, 2, 15.75),
(null, '2022/09/12', '78485548', 1, 1, 20.00),
(null, '2022/09/10', '22-448552', 4, 4, 95.00),
(null, '2022/08/16', '2-458-AD-045', 7, 2, 12.50),
(null, '2022/09/01', 'AS3T5344', 3, 3, 37.50),
(null, '2022/08/17', '485544', 5, 1, 50.00),
(null, '2022/08/19', '64347434', 6, 3, 115.50),
(null, '2022/09/12', 'AS3T4581', 3, 6, 2425.14);
*/
