CREATE DATABASE testetcc;

CREATE TABLE usuarios(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(220) NOT NULL,
    `email` varchar(520) NOT NULL,
    `senha` varchar(16) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE vendedor(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(220) NOT NULL,
    `email` varchar(520) NOT NULL,
    `senha` varchar(16) NOT NULL,
    `cargo` varchar(20) NOT NULL,
    `rg` varchar(25) NOT NULL,
    `cpf` varchar(25) NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO `usuarios` (`nome`, `email`, `senha`) VALUES
('Andrei', 'andrei@gmail.com', '1234');

INSERT INTO `vendedor` (`nome`, `email`, `senha`, `cargo`, `rg`, `cpf`) VALUES
('José', 'josé@gmail.com', '123', 'corretor', '123', '321');