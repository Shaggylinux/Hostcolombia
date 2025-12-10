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

 create table if not exists token(
	id int primary key auto_increment,
	token int,
	id_servidor int,
	foreign key(id_servidor) references servidor(id)
);

create table if not exists tarjeta(
	id int primary key auto_increment,
	numero int,
	codigo int,
	NombreCompleto text,
	mes int,
	ano int,
	tipo_tarjeta text,
	id_usuario int,
	foreign key(id_usuario) references usuarios(id)
);

create table if not exists fecha_creacion(
	id int primary key auto_increment,
	fecha timestamp,
	id_servidor int
	foreign key(id_servidor) references servidor(id)
);