create database loja;
use loja;

create table usuario(
  codigo int primary key auto_increment,
  nome varchar(50),
  email varchar(50),
  senha varchar(8),
  ativo int
);