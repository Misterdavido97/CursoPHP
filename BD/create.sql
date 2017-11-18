create database emiGas;
USE emiGas;

create table Cliente(
	Cedula int unsigned not null primary key,
    Nombres varchar(50),
    Apellidos varchar(50),
    Direccion varchar(50),
    Telefono varchar(20),
    Celular varchar(30),
    Correo varchar(30),
    IdProducto int
);

create table Producto(
	IdProduto int not null primary key,
    Descripcion varchar(60),
    Precio double
);

alter table Cliente add foreign key(IdProducto) references Producto(IdProduto);