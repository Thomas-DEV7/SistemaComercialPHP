create database bancophp;

use bancophp;

create table tb_cliente (
    cd_cliente INT AUTO_INCREMENT,
    nm_primeiro varchar(20) not null,
    nm_sobrenome varchar(50) not null,
    nr_cpf varchar(14) not null,
    nr_rg varchar(20) not null,
    nr_cep varchar(9) not null,
    nr_endereco varchar(10) not null,
    nr_celular varchar(14) not null,
    nm_email varchar(40) not null,
    id_genero varchar(18) not null,
    primary key (cd_cliente)
);

create table tb_fornecedor (
    cd_fornecedor INT AUTO_INCREMENT,
    nm_primeiro varchar(20) not null,
    nm_sobrenome varchar(50) not null,
    nr_cnpj varchar(18) not null,
    nm_empresa varchar(30) not null,
    tp_produto varchar(20) not null,
    nr_cep varchar(9) not null,
    nr_endereco varchar(10) not null,
    nm_pais varchar(20) not null,
    nr_celular varchar(14) not null,
    nm_email varchar(40) not null,
    id_genero varchar(18) not null,
    primary key (cd_fornecedor)
);

create table tb_funcionario (
    cd_funcionario INT AUTO_INCREMENT,
    nm_primeiro varchar(20) not null,
    nm_sobrenome varchar(50) not null,
    dt_nasc date not null,
    nr_cpf varchar(14) not null,
    nr_rg varchar(20) not null,
    nr_cep varchar(9) not null,
    nr_endereco varchar(10) not null,
    nm_pais varchar(20) not null,
    nr_celular varchar(14) not null,
    nm_email varchar(40) not null,
    id_genero varchar(18) not null,
    primary key (cd_funcionario)
);

create table tb_produto (
    cd_produto INT AUTO_INCREMENT,
    nm_produto varchar(25) not null,
    nm_categoria varchar(20) not null,
    vl_produto float not null,
    qt_produto int not null,
    nm_empresa varchar(30) not null,
    nr_cnpj varchar(18) not null,
    primary key (cd_produto)
);

create table tb_usuario (
    cd_usuario INT AUTO_INCREMENT,
    nm_usuario varchar(20) not null,
    nm_email varchar(50) not null,
    nm_senha varchar(14) not null,
    primary key (cd_usuario)
);