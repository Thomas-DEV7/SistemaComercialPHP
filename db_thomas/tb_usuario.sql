
create table tb_usuario (
    cd_usuario INT AUTO_INCREMENT,
    nm_primeiro varchar(20) not null,
    nm_sobrenome varchar(50) not null,
    id_perfil varchar(14) not null,
    nm_email varchar(40) not null,
    nr_endereco varchar(10) not null,
    nr_celular varchar(14) not null,
    nm_usuario varchar(20) not null,
    nm_senha varchar(15) not null,
    id_genero varchar(18) not null,
    primary key (cd_usuario)
);