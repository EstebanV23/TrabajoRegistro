create database registrosnuevos;
use registrosnuevos;
create table personas(
    per_id int auto_increment,
    per_nombre varchar(50),
    per_fechanacimiento date,
    per_usuario varchar(20) primary key,
    per_contraseña varchar(40)
);

select * from personas;

delete from personas;