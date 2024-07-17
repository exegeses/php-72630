-- tabla roles
create table roles
(
    idRol tinyint unsigned auto_increment primary key not null,
    rol varchar(30) unique not null 
);

-- inserción de datos
insert into roles
    values 
        ( default, 'Administrador' ),
        ( default, 'Supervisor' ),
        ( default, 'Usuario' ),
        ( default, 'invitado' );

-- tabla usuarios
CREATE TABLE usuarios
(
    idUsuario smallint NOT NULL AUTO_INCREMENT not null,
    nombre VARCHAR(45) not null ,
    apellido VARCHAR(45) not null ,
    email VARCHAR(45) not null ,
    clave VARCHAR(45) not null ,
    idRol tinyint unsigned not null ,
    activo boolean not null ,
    PRIMARY KEY (idUsuario),
    UNIQUE INDEX email_UNIQUE (email ASC),
    foreign key (idRol) references roles (idRol)
);
