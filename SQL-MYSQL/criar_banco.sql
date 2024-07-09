create database produtos;
use produtos;

create table produtos(

id int AUTO_INCREMENT PRIMARY KEY,
nome varchar(30),
sku bigint unique,
descricao text,
categoria varchar(40),
preco decimal(10,2),
unidade_medidda varchar(5),
peso decimal(6,2),
quantidade_estoque bigint(200),
fabricante varchar(40),
fornecedor varchar(30),
updated_at datetime(10),
deleted_at datetime(10),
created_at datetime(10),
);