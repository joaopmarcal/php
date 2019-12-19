create database pessoa;
use pessoa;
create table buscador (
  id int(11) not null auto_increment,
  nome tinytext,
  idade tinyint,
  sexo tinytext,
  primary key (id)
)ENGINE = InnoDB;

INSERT INTO `pessoa`.`buscador` (`nome`, `idade`, `sexo`) VALUES ('joao', 18, 'masculino');
INSERT INTO `pessoa`.`buscador` (`nome`, `idade`, `sexo`) VALUES ('joaquim', 36, 'masculino');
INSERT INTO `pessoa`.`buscador` (`nome`, `idade`, `sexo`) VALUES ('jorge', 52, 'masculino');
INSERT INTO `pessoa`.`buscador` (`nome`, `idade`, `sexo`) VALUES ('estevao', 78, 'masculino');
INSERT INTO `pessoa`.`buscador` (`nome`, `idade`, `sexo`) VALUES ('jones', 14, 'masculino');
INSERT INTO `pessoa`.`buscador` (`nome`, `idade`, `sexo`) VALUES ('sandra', 36, 'feminino');
INSERT INTO `pessoa`.`buscador` (`nome`, `idade`, `sexo`) VALUES ('cassandra', 53, 'feminino');
INSERT INTO `pessoa`.`buscador` (`nome`, `idade`, `sexo`) VALUES ('juliana', 42, 'feminino');
INSERT INTO `pessoa`.`buscador` (`nome`, `idade`, `sexo`) VALUES ('rebeca', 41, 'feminino');
INSERT INTO `pessoa`.`buscador` (`nome`, `idade`, `sexo`) VALUES ('ana', 19, 'feminino');

select * from buscador where nome = "joao" and idade = 18 and sexo = "masculino";