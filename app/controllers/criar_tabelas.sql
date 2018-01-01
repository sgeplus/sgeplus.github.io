CREATE TABLE tb_usuarios(
usuario_id int(8) NOT NULL AUTO_INCREMENT,
nome varchar(50) NOT NULL,
sobrenome varchar(50) NOT NULL,
sexo varchar(20) NOT NULL,
email varchar(55) NOT NULL,
usuario varchar(32) NOT NULL,
senha varchar(32) NOT NULL,
info text NOT NULL,
nivel_usuario enum('0','1','2') NOT NULL default '0',
data_cadastro datetime NOT NULL,
data_ultimo_login datetime NOT NULL,
ativado enum('0','1') NOT NULL default '0',
PRIMARY KEY (usuario_id)
) ENGINE = MYISAM CHARACTER SET latin1 COLLATE latin1_general_ci COMMENT = '';