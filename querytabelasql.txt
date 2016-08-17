CREATE TABLE IF NOT EXISTS `comentario` (

  `id` int(11) NOT NULL AUTO_INCREMENT,

  `nome` varchar(150) DEFAULT NULL,

  `email` varchar(150) DEFAULT NULL,

  `empresa` varchar(255) DEFAULT NULL,

  `comentario` longtext,

  `identificacao` int(111) DEFAULT NULL,

  `moderador` varchar(3) DEFAULT 'nao',

  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;
