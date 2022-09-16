
create table tb_usuario (
    cd_usuario INT AUTO_INCREMENT,
    nm_usuario varchar(20) not null,
    nm_email varchar(40) not null,
    nm_senha varchar(10) not null,
    primary key (cd_usuario)
);