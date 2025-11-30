create database if not exists proyecto;

create table if not exists perfil(
	id int primary key auto_increment,
);

create table if not exists usuarios(
	id int primary key auto_increment,
	nombre varchar(20),
	nombreusuario varchar(20),
	clave text,
	correo text,
	id_perfil int,
	foreign key (id_perfil) references perfil(id)
);

create table if not exists servidor(
	id int primary key auto_increment,
	nombre varchar(45),
	descripcion varchar(50),
	dominio varchar(30),
	id_usuario int,
	foreign key (id_usuario) references usuarios(id)
);
