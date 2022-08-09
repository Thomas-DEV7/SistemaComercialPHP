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