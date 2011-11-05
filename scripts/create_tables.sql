delimiter $$

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `preco` double DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `descricao` text,
  `local` varchar(255) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8$$

delimiter $$

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `screen_name` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `profile_image_url` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=266113705 DEFAULT CHARSET=utf8$$

delimiter $$

CREATE TABLE `seguindos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=252534922 DEFAULT CHARSET=utf8$$

delimiter $$

CREATE TABLE `eventos_usuarios` (
  `evento_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8$$

