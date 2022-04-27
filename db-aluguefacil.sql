create database dbaluguefacil;

use dbaluguefacil;

create table usuarios (
	id int primary key auto_increment not null,
    nome varchar(50) not null,
    email varchar(50) not null,
    senha varchar(50) not null
);

create table anuncios (
	id int primary key auto_increment not null,
    titulo varchar(50) not null,
    descricao varchar(100) not null,
    preco float not null,
    foto longblob 
);

insert into usuarios values(1, "Matheus Costa", "matheus@gmail.com", "102030");