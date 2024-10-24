create database crud_php;
use crud_php;
create table persona(
	id_persona int auto_increment primary key,
    nombre varchar(50),
    apellido varchar(50),
    dni numeric(8),
    fecha_nac datetime,
    correo varchar(50)
);

INSERT INTO persona (nombre, apellido, dni, fecha_nac, correo) VALUES 
('Aldo','Sanchez','72483477','2023-05-25', 'aldo@gmail.com'), 
('Aldo2','Sanchez2','72483477','2023-05-25', 'aldo123@gmail.com');

SELECT * FROM persona;