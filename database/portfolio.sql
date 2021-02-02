CREATE DATABASE portfolio;

Create table portfolio
(
id int auto_Increment not null,
nome nvarchar(25) not null,
tipo nvarchar(25) not null,
dataFeito date not null,
descricao text
);

Create table contato
(
id int auto_increment not null
);