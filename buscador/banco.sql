create database sistema;
use sistema;
create table buscador (
      id int(11) not null auto_increment,
      nome tinytext,
      idade tinyint,
      sexo tinytext,
      data_create datetime,
      data_update datetime,
      primary key (id)
)ENGINE = InnoDB;
INSERT INTO `sistema`.`buscador` (`nome`, `idade`, `sexo`, `data_create`, `data_update`) VALUES ('joao', 18, 'masculino',NOW(),NOW());
INSERT INTO `sistema`.`buscador` (`nome`, `idade`, `sexo`, `data_create`, `data_update`) VALUES ('joaquim', 36, 'masculino',NOW(),NOW());
INSERT INTO `sistema`.`buscador` (`nome`, `idade`, `sexo`, `data_create`, `data_update`) VALUES ('jorge', 52, 'masculino',NOW(),NOW());
INSERT INTO `sistema`.`buscador` (`nome`, `idade`, `sexo`, `data_create`, `data_update`) VALUES ('estevao', 78, 'masculino',NOW(),NOW());
INSERT INTO `sistema`.`buscador` (`nome`, `idade`, `sexo`, `data_create`, `data_update`) VALUES ('jones', 14, 'masculino',NOW(),NOW());
INSERT INTO `sistema`.`buscador` (`nome`, `idade`, `sexo`, `data_create`, `data_update`) VALUES ('sandra', 36, 'feminino',NOW(),NOW());
INSERT INTO `sistema`.`buscador` (`nome`, `idade`, `sexo`, `data_create`, `data_update`) VALUES ('cassandra', 53, 'feminino',NOW(),NOW());
INSERT INTO `sistema`.`buscador` (`nome`, `idade`, `sexo`, `data_create`, `data_update`) VALUES ('juliana', 42, 'feminino',NOW(),NOW());
INSERT INTO `sistema`.`buscador` (`nome`, `idade`, `sexo`, `data_create`, `data_update`) VALUES ('rebeca', 41, 'feminino',NOW(),NOW());
INSERT INTO `sistema`.`buscador` (`nome`, `idade`, `sexo`, `data_create`, `data_update`) VALUES ('ana', 19, 'feminino',NOW(),NOW());

select * from buscador where nome = "joao" and idade = 18 and sexo = "masculino";