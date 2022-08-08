create table tb_produto (
    cd_produto INT AUTO_INCREMENT,
    nm_produto varchar(25) not null,
    nm_categoria varchar(20) not null,
    vl_produto float not null,
    qt_produto int not null,
    nm_empresa varchar(30) not null,
    nr_cnpj varchar(18) not null,
    nm_email varchar(40) not null,
    id_produto varchar(18) not null,
    primary key (cd_produto)
);
