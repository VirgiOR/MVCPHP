-- Active: 1750671267468@@127.0.0.1@3306
DROP database tienda_web;
create database if not exists tienda_web 
CHARACTER set latin1
collate latin1_spanish_ci;

use tienda_web;

create user admin_tienda IDENTIFIED by 'P100cpbvepatv!';

grant all PRIVILEGES ON tienda_web.* to admin_tienda;

create table usuarios (
    id  int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre_ususario varchar(25) NOT NULL,
    email varchar(80) not NULL UNIQUE,
    contrasena varchar(255) NOT NULL

);
