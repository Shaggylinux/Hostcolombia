create database proyecto;

create table perfil(
	id int primary key auto_increment,
	descripcion text
);

create table usuarios(
	id int primary key auto_increment,
	nombre varchar(20),
	nombreusuario varchar(20),
	clave text,
	correo text,
	id_perfil int,
	foreign key (id_perfil) references perfil(id)
);

create table servidor(
	id int primary key auto_increment,
	nombre varchar(45),
	descripcion varchar(50),
	dominio varchar(30),
	id_usuario int,
	foreign key (id_usuario) references usuarios(id)
);
