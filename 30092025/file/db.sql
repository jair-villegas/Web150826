-- crear base de datos
create database crud_app;

-- seleccion de base de datos
use crud_app;

-- crear la tabla de usurario
CREATE Table usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR (100) NOT NULL,
    email VARCHAR (100) NOT NULL,
    telefono VARCHAR (15) NOT NULL
);
