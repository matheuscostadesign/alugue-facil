create database aluguefacil;

use aluguefacil;

create table usuario (
	id_usuario int primary key auto_increment not null,
    nome_usuario varchar(50),
    login_usuario varchar(50),
    senha_usuario varchar(50),
    contato_usuario varchar(50)
);

create table anuncio (
	id_anuncio int primary key auto_increment not null,
    titulo_anuncio varchar(50) not null,
    descricao_anuncio varchar(100) not null,
    preco_anuncio float not null,
    foto_anuncio blob
    -- foto_anuncio longblob
);

create table categoria (
	id_categoria int primary key auto_increment not null,
    descricao_categoria varchar(100) not null
);

