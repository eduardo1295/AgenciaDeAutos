CREATE DATABASE alumnos;

CREATE TABLE alumno(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(100),
	correo VARCHAR(50),
	contrasena VARCHAR(50),
	telefono INT,
	carrera VARCHAR(75),
	curp VARCHAR(50),
	genero VARCHAR(1),
	fecha_nac DATE,
	estado VARCHAR(150),
	municipio VARCHAR(150),
	localidad VARCHAR(150)
)