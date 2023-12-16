/*Creacion de base de datos */
create database olympho; 
use olympho;
/*Creación de tabla usuarios*/
create table usuarios(
IdUsu 			int not null primary key auto_increment,
NombreUsu		varchar(50) not null,
CorreoUsu		varchar(50) not null,
ContraseñaUsu	Varchar(100) not null
);
/*Insercion de datos en tabla usuarios*/
insert into 
usuarios(NombreUsu,CorreoUsu,ContraseñaUsu) 
values ("miguel","miguel@gmail.com","miguel123"),
("wiston","wiston@gmail.com","wiston123"),
("cristian","cristian@gnail.com","cristian123"),
("daniela","daniela@gmail.com","daniela123"),("Pedro","Pedro@gmail.com","Pedro123"),
("anyela","anyela@gmail.com","anyela123");
/*Consulta a todos los datos de la tabla usuarios*/ 

