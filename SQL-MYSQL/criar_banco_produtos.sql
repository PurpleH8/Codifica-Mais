create database if not exists gestao_produtos;
use gestao_produtos;

create table produtos(

id int PRIMARY KEY,
nome varchar(30),
sku bigint unique,
descricao text,
categoria_id varchar(40),
preco decimal(10,2),
unidade_medidda varchar(6),
peso decimal(6,2),
quantidade_estoque bigint(200),
fabricante varchar(100),
fornecedor varchar(100),
updated_at datetime default current_timestamp,
deleted_at timestamp default current_timestamp on update current_timestamp,
created_at datetime default current_timestamp
);

select * from produtos;

create table categorias(
    id int AUTO_INCREMENT PRIMARY KEY,
    nome_categoria varchar(30),
updated_at datetime default current_timestamp,
deleted_at timestamp default current_timestamp on update current_timestamp,
created_at datetime default current_timestamp
);

create table uninades_medidas(
	id int AUTO_INCREMENT PRIMARY KEY,
    nome_categoria varchar(100),
    deleted_at timestamp default current_timestamp,
    created_at timestamp default null,
    updated_at timestamp default current_timestamp
);

create table fabricantes(
	id int AUTO_INCREMENT PRIMARY KEY,
    nome_categoria varchar(100),
    deleted_at timestamp default current_timestamp,
    created_at timestamp default null,
    updated_at timestamp default current_timestamp
);

create table fornecedores(
	id int AUTO_INCREMENT PRIMARY KEY,
    nome_categoria varchar(110),
    deleted_at timestamp default current_timestamp,
    created_at timestamp default null,
    updated_at timestamp default current_timestamp
);



create database gestao_produtos;
use gestao_produtos;



