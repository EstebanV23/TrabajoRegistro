create table personas(
    per_usuario varchar(20) primary key,
    per_contraseña varchar(40),
    per_nombre varchar(50),
    per_telefono varchar(25),
    per_correo varchar(50),
    per_fechanacimiento date
);