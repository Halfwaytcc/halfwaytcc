# Host: localhost  (Version 5.5.5-10.4.21-MariaDB)
# Date: 2022-10-27 18:48:27
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "usuarios"
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `usuario_id` int(2) NOT NULL AUTO_INCREMENT,
  `usuario_nome` varchar(255) DEFAULT '',
  `usuario_email` varchar(255) NOT NULL DEFAULT '',
  `usuario_senha` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`usuario_id`),
  UNIQUE KEY `usuario_email` (`usuario_email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

#
# Data for table "usuarios"
#

INSERT INTO `usuarios` VALUES (1,'teste20','teste2@gmail.com','$2y$10$v2BeZjp6wV5uexCu7YLCsODv6OXaNjBLgvQdrhRdWhZ18E2dUXdYu'),(2,'teste30','teste3@gmail.com','$2y$10$lOI55jWpi/UhEzMnckIaFOUla9BkUAT6BbNqR3QcvkEvORcKlrNDy');
