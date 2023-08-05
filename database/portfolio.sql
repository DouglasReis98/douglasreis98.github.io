CREATE DATABASE portfolio;

Create table `projetos`
(
`id` int auto_increment not null,
`titulo` varchar(200) not null,
`subtitulo` varchar(200) not null,
`imagem` varchar(200) not null,
`categoria` varchar(200) not null,
`descricao` text not null,
`cliente` varchar(200) not null,
`data` varchar(200) not null,
`tags` varchar(200) not null,
`url` varchar(100)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `usuarios` (
  `id` int auto_Increment NOT NULL,
  `nome` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`) VALUES
(1, 'Douglas Reis', 'douglas-reis_ads', '123456');


CREATE TABLE `categorias` (
  `id` int NOT NULL,
  `categoria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(1, 'Site'),
(2, 'Aplicação Web'),
(3, 'App Mobile');

Create table contato
(
`id` int not null,
`nome` varchar(25) not null,
`texto` text not null
);