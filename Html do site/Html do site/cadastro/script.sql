create database pit;

use pit;

create table aluno (
	id int primary key auto_increment not null,
	primeiro_nome varchar(250) not null,
    sobrenome varchar(250) not null,
    email varchar(250) not null,
    matricula char(8) not null,
    senha varchar(100) not null,
    genero char(1) not null
);

create table funcionario (
	id int primary key auto_increment not null,
	primeiro_nome varchar(250) not null,
    sobrenome varchar(250) not null,
    email varchar(250) not null,
    rg char(13) not null,
    endereco varchar(250) not null,
    cpf char(12) not null,
    senha varchar(100) not null,
    genero char(1) not null
);

create table lanchonete (
	id int primary key auto_increment not null,
	nome varchar(250) not null,
    rg varchar(250) not null,
    comprovante varchar(250) not null,
    iptu varchar(250) not null,
    nome_fantasia varchar(250) not null,
    endereco varchar(250) not null,
    senha varchar(100) not null
);

select * from funcionario;
select * from aluno;
select * from lanchonete;